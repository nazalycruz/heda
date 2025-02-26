<?php
$attributes = array("id" => "frmPagoElectronico", "name" => "frmPagoElectronico", "onsubmit" => "return PostBackFrmGuardaPagoElect(this, event);");
echo form_open("empleado/guarda_pago_electronico", $attributes);
?>
<input type="hidden" name="pe_credencial" id="pe_credencial" value="<?= (empty($credencial) ? '' : $credencial); ?>">
<input type="hidden" name="pe_idEmpleado" id="pe_idEmpleado" value="<?= (empty($idEmpleado) ? '' : $idEmpleado); ?>">
<input type="hidden" name="pe_idConf" id="pe_idConf" value="0">

<div class="card mb-2">
  <div class="card-body">
    <div id="pe_errores" class="alert alert-danger" style="display:none;"></div>
    <div class="row mb-2">
      <div class="col-2">
        <div class="form-group">
          <label for="txtEmisor" class="form-label">Emisor</label>
          <select class="form-control cf_catalogos form-control-sm select2-sm" id="txtEmisor" name="txtEmisor">
            <?= $emisores; ?>
          </select>
        </div>
      </div>
      <div class="col-4">
        <div class="form-group">
          <label for="txtNumCuenta" class="form-label">Número de Cuenta</label>
          <input type="text" class="form-control form-control-sm inpt_entero" id="txtNumCuenta" name="txtNumCuenta" onkeypress="return dispara_tab(event, this);" placeholder="Número de Cuenta" value="" autocomplete="off">
        </div>
      </div>
      <div class="col-2">
        <div class="form-group">
          <label for="txtTipoCuenta" class="form-label">Tipo de Cuenta</label>
          <select class="form-control cf_catalogos form-control-sm select2-sm" id="txtTipoCuenta" name="txtTipoCuenta">
            <?= $tipotarjeta; ?>
          </select>
        </div>
      </div>
      <div class="col-2">
        <div class="form-group">
          <label id="lblTipoPago" for="txtPorcentaje" class="form-label">Porcentaje</label>
          <input type="text" class="form-control form-control-sm cf_porcentaje" id="txtPorcentaje" name="txtPorcentaje" onkeypress="return dispara_tab(event, this);" required value="" autocomplete="off">
        </div>
      </div>
			<div class="col-2">
        <div class="form-group">
          <label class="form-label">Monto Fijo</label>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="pe_montofijo" name="pe_montofijo" value="1" onclick="CambiaMontoFijo(this.checked);">
            <label class="custom-control-label" for="pe_enomina"></label>
          </div>
        </div>
      </div>
		</div>

		<div class="row mb-2">
      <div class="col-2">
        <div class="form-group">
          <label class="form-label">Depósito Electrónico</label>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="pe_enomina" name="pe_enomina" value="1">
            <label class="custom-control-label" for="pe_enomina"></label>
          </div>
        </div>
      </div>

			<div class="col-4">
				<div class="form-group">
					<label for="txtBancoTitular" class="form-label">Banco Titular</label>
					<select class="form-control cf_catalogos form-control-sm select2-sm" id="txtBancoTitular" name="txtBancoTitular">
            <?= $bancos; ?>
          </select>
					<p class="help-block">Este campo se utiliza cuando el empleado tiene depósito en bancos no oficiales.</p>
				</div>
			</div>
		</div>
  </div>
  <div class="card-footer p-10 text-end">
    <button class="btn btn-sm btn-success text-end" id="btnGuardaPagoElectronico"><i class="far fa-save"></i> Guardar</button>
  </div>
</div>

<?php
echo form_close();
?>
<div class="card">
	<div class="card-body">
		<h4>Emisores</h4>
		<div id="lstResultado">

		</div>
	</div>
</div>

<script type="text/javascript">

$(document).ready(function(){
  $(".cf_porcentaje").inputmask("decimal", {
    radixPoint: ".",
    groupSeparator: ",",
    autoGroup: true,
    suffix: " %",
    clearMaskOnLostFocus: false, removeMaskOnSubmit: true,allowMinus: false, autoUnmask:true
  });

	$(".cf_currency").inputmask('currency',{rightAlign: true, allowMinus: false, removeMaskOnSubmit: true, undoOnEscape:false,placeholder: '0.00'});
	// $(".cf_porcentaje").inputmask('decimal', { rightAlign: true, allowMinus: false, removeMaskOnSubmit: true, });

  $(".cf_catalogos").select2({
    language: "es",
    placeholder: "Seleccione un Elemento",
    width:'100%',
  }).on("select2:close", function (event) {
      setTimeout(function() {
        $('.select2-container-active').removeClass('select2-container-active');
        $(':focus').blur();
        // dispara_tab_especial(event);
      }, 1);
  });

  detalle_pago_electronico();
});

function CambiaMontoFijo(checked) {
	if (checked == true) {
		$('#lblTipoPago').html('Monto Fijo');
		$('#txtPorcentaje').removeClass('cf_porcentaje').addClass('cf_currency').val('');
		$(".cf_currency").inputmask('currency',{rightAlign: true,allowMinus: false,removeMaskOnSubmit: true,undoOnEscape:false,placeholder: '0.00',prefix: '$ '});
	}
	else {
		$('#lblTipoPago').html('Porcentaje');
		$('#txtPorcentaje').removeClass('cf_currency').addClass('cf_porcentaje').val('');
		$(".cf_porcentaje").inputmask("decimal", {radixPoint: ".",groupSeparator: ",",autoGroup: true,suffix: " %",clearMaskOnLostFocus:false,removeMaskOnSubmit:true,allowMinus:false,autoUnmask:true});
	}
}

function detalle_pago_electronico() {
  $('#pe_idConf').val(0);
	$('div#pe_errores').hide().empty();
  let credencial = $('#pe_credencial').val();
	Carga_Metodo('empleado/carga_det_pago_electronico', {credencial:credencial}, function finalizaCarga(respuesta){
		if (respuesta.status == false) {
			alerta_emergente(respuesta.message, "warning");
		}
		else {
			$('div#lstResultado').html(respuesta.html);
			setTimeout(function(){
				let tabla = $('#tblEmisoresPagoElectronico').DataTable();
				 tabla.rows().every( function (rowIdx, tableLoop, rowLoop) {
					 if (tabla.cell(rowIdx, 12).data() != 100) {
						 var emisor = tabla.cell(rowIdx, 3).data();
						 $('div#pe_errores').html("El porcentaje combinado, para el emisor "+emisor+", no es igual a 100%.").fadeIn('slow');
					 }
				 });
			}, 1000);
		}
	}, "Cargando...");
  return false;
}

function editar_pago_electronico(url,data,esBoton) {
  if (typeof(esBoton) == "undefined" || esBoton == "" || esBoton == null) { esBoton = false; }
  if (esBoton) data = $(data).data('json');
  $('#pe_idConf').val(data.id);
  $('#txtNumCuenta').val(data.NumeroCuenta);
  $('#txtEmisor').val(data.EmisorId);
  $('#txtTipoCuenta').val(data.TipoCuenta);
  $('#pe_enomina').prop("checked",(data.ENomina == 1 ? true : false));
	$('#pe_montofijo').prop("checked",(data.TipoPago.toUpperCase() == "MONTO FIJO" ? true : false));
	CambiaMontoFijo(data.TipoPago.toUpperCase() == "MONTO FIJO" ? true : false);
  $('#txtPorcentaje').val(parseFloat((data.Porcentaje)).toFixed(2));
	$('#txtBancoTitular').val(data.IdBanco);
	$('.cf_catalogos').select2().trigger('change');
  return false;
}

function eliminar_pago_electronico(url,data,esBoton) {
  if (typeof(esBoton) == "undefined" || esBoton == "" || esBoton == null) { esBoton = false; }
  if (esBoton) data = $(data).data('json');
  var idConf = data.id;

  if (typeof(idConf) == "undefined" || idConf == "" || idConf == 0 ) {
    alerta_emergente("Ocurrió un error al intentar obtener la información de la configuración. Intente de nuevo más tarde.","warning");
    return false;
  }

  swal.fire({
    title: "Alerta",
    text: "¿Confirma que desea eliminar la configuración para el Emisor: "+data.Emisor+"?",
    icon: "question",
    showCancelButton: true,
  }).then(result => {
    if ( result.value ) {
      Carga_Metodo('<?= base_url()?>empleado/eliminar_pago_electronico', {idConfPago:idConf}, exito_guarda_pago_elect, "Eliminando...");
    }
  }).catch(swal.noop);

  return false;
}

function PostBackFrmGuardaPagoElect(f,e) {
  e.preventDefault();
  var variables = $(f).serialize();
  Carga_Metodo(f.action, variables, exito_guarda_pago_elect, "Guardando...");
  return false;
}

function exito_guarda_pago_elect(respuesta) {
  if( respuesta.status == false ) {
    $('div#pe_errores').html(respuesta.errores).fadeIn('slow');
    alerta_emergente(respuesta.message, "warning");
  }
  else{
    $('div#pe_errores').hide();
		if (respuesta.errores != '') {
			$('div#pe_errores').html(respuesta.errores).fadeIn('slow');
			alerta_emergente(respuesta.message,"warning");
		}
		else {
			alerta_emergente(respuesta.message,"success");
		}
    detalle_pago_electronico();
    limpiaForm($('#frmPagoElectronico'));
  }
  return false;
}

</script>
