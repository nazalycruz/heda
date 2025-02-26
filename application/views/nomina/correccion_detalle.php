<?php
$attributes = array("id" => "frmCorreccionDetNomina", "name" => "frmCorreccionDetNomina", "onsubmit" => "return PostBackFrmGuardaCorreccion(this, event);");
echo form_open("nomina/abc_correccion_det_nomina", $attributes);
?>
<div class="card mb-2">
	<div class="card-body">
		<div id="co_errores" class="alert alert-danger" style="display:none;"></div>
		<div class="row mb-2">
			<div class="col-3">
				<div class="form-group">
					<label for="CategoriaId" class="form-label">Categoría</label>
					<select class="form-control form-control-sm select2-sm co_catalogos" id="CategoriaId" name="CategoriaId" required data-parsley-required="true">
						<?= $categorias; ?>
					</select>
				</div>
			</div>
			<div class="col-3">
				<div class="form-group">
					<label for="Categoria_diaPago" class="form-label">Categoría Día Pago</label>
					<select class="form-control form-control-sm select2-sm co_catalogos" id="Categoria_diaPago" name="Categoria_diaPago" required data-parsley-required="true">
						<?= $categoria_diapago; ?>
					</select>
				</div>
			</div>
			<div class="col-3">
				<div class="form-group">
					<label for="DependenciaId" class="form-label">Dependencia</label>
					<select class="form-control form-control-sm select2-sm co_catalogos" id="DependenciaId" name="DependenciaId" required data-parsley-required="true">
						<?= $dependencias; ?>
					</select>
				</div>
			</div>
			<div class="col-3">
				<div class="form-group">
					<label for="Depto" class="form-label">Departamento</label>
					<select class="form-control form-control-sm select2-sm co_catalogos" id="Depto" name="Depto" required data-parsley-required="true">
						<?= $departamentos; ?>
					</select>
				</div>
			</div>

		</div>

		<div class="row mb-2">
			<div class="col-3">
				<div class="form-group">
					<label for="GrupoImpresion" class="form-label">Grupo de impresión</label>
					<select class="form-control form-control-sm select2-sm co_catalogos" id="GrupoImpresion" name="GrupoImpresion" required data-parsley-required="true">
						<?= $grupoimpresion; ?>
					</select>
				</div>
			</div>
			<div class="col-3">
				<div class="form-group">
					<label for="ENomina" class="form-label">Tipo de Pago</label>
					<select class="form-control form-control-sm select2-sm co_catalogos" id="ENomina" name="ENomina" required data-parsley-required="true">
						<?= $tipopago; ?>
					</select>
				</div>
			</div>
			<div class="col-3">
				<div class="form-group">
					<label for="EmisorID" class="form-label">Emisor</label>
					<select class="form-control co_catalogos form-control-sm select2-sm" id="EmisorID" name="EmisorID" required data-parsley-required="true">
						<?= $emisores; ?>
					</select>
				</div>
			</div>
			<div class="col-3">
				<div class="form-group">
					<label for="NumeroCuenta" class="form-label">Número de cuenta</label>
					<input type="text" class="form-control form-control-sm f-w-600" id="NumeroCuenta" name="NumeroCuenta" value="<?= $detalle['NumeroCuenta']; ?>" autocomplete="off" required data-parsley-required="true" onkeypress="return onlyDigits(event, this);" data-parsley-type="digits">
				</div>
			</div>
		</div>

		<div class="row mb-2">
			<div class="col-3">
				<div class="form-group">
					<label for="Dias" class="form-label">Días</label>
					<input type="text" class="form-control form-control-sm" id="Dias" name="Dias" autocomplete="off" required value="<?= $detalle['Dias']; ?>" data-parsley-required="true" data-parsley-type="integer" onkeypress="return onlyDigits(event, this);" data-parsley-maxlength="2">
				</div>
			</div>
			<div class="col-3">
				<div class="form-group">
					<label for="TipoNominaId" class="form-label">Tipo Nómina</label>
					<select class="form-control co_catalogos form-control-sm select2-sm" id="TipoNominaId" name="TipoNominaId" required data-parsley-required="true" data-parsley-errors-container="#parsley-idTipoNomina">
						<?= $cattiponomina; ?>
					</select>
					<div id="parsley-idTipoNomina"></div>
				</div>
			</div>
			<div class="col-3">
				<div class="form-group">
					<label for="Id_Concepto" class="form-label">Concepto</label>
					<select class="form-control co_catalogos form-control-sm select2-sm" id="Id_Concepto" name="Id_Concepto" required data-parsley-required="true" data-parsley-errors-container="#parsley-idConcepto">
						<?= $catconceptos; ?>
					</select>
					<div id="parsley-idConcepto"></div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-3">
				<div class="form-group">
					<label for="Monto" class="form-label">Monto</label>
					<input type="text" class="form-control form-control-sm co_decimal" id="Monto" name="Monto" autocomplete="off" required data-parsley-required="true">
				</div>
			</div>
			<div class="col-3">
				<div class="form-group">
					<label for="MontoExento" class="form-label">Monto Exento</label>
					<input type="text" class="form-control form-control-sm co_decimal" id="MontoExento" name="MontoExento" autocomplete="off">
				</div>
			</div>
			<div class="col-3">
				<div class="form-group">
					<label for="MontoGravado" class="form-label">Monto Gravado</label>
					<input type="text" class="form-control form-control-sm co_decimal" id="MontoGravado" name="MontoGravado" autocomplete="off">
				</div>
			</div>
			<div class="col-3">
				<div class="form-group">
					<label>&nbsp;</label>
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="GRAVADO" name="GRAVADO" value="">
						<label class="form-label" for="GRAVADO">Gravado</label>
					</div>
				</div>
			</div>
		</div>

	</div>
	<div class="card-footer text-end">
		<button class="btn btn-sm btn-success" id="btnGuardarCorreccion"><i class="far fa-save"></i> Guardar</button>
		<button type="button" class="btn btn-default btn-sm" title="Cancelar" id="btnCancelar" name="btnCancelar" onclick="cancelar_guardado_co();">
			<i class="fa-solid fa-xmark"></i> Cancelar
		</button>
	</div>
</div>

<?php
echo form_close();
?>

<div class="card">
	<div class="card-body">
		<div id="lstResultadoDetNomina">

		</div>
	</div>
	<div class="card-footer mt-0" id="footerConf">
		<div class="row text-end">
			<div class="col-4">
				<div class="form-group">
					<label for="cd_total_percep" class="text-green-800 fw-bold">Total Percepciones</label>
					<input type="text" class="form-control-plaintext fw-700 text-end" id="cd_total_percep" name="cd_total_percep" readonly>
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
					<label for="cd_total_deduc" class="text-red-800 fw-bold">Total Deducciones</label>
					<input type="text" class="form-control-plaintext fw-700 text-end" id="cd_total_deduc" name="cd_total_deduc" readonly>
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
					<label for="cd_total_cobrar" class="form-label fw-bold">Total Cobrado</label>
					<input type="text" class="form-control-plaintext fw-700 text-end" id="cd_total_cobrar" name="cd_total_cobrar" readonly>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">

$(document).ready(function(){
	$('#frmCorreccionDetNomina').parsley();
	$(".co_catalogos").select2({
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

  $(".co_decimal").inputmask('decimal',{digits: 2, digitsOptional: false, placeholder: '0.00', rightAlign: false  });
	correccion_detalle_nomina();
});

function correccion_detalle_nomina() {
	let quincena = $('#quincena').val(),
			credencial = $("#credencial").val(),
			idEmpleado = $('#idEmpleado').val();
	if (typeof(quincena) == "undefined" || quincena === "" || quincena == 0) {
		alerta_emergente("Ocurrió un error al obtener la información del período de pago. Por favor intente de nuevo más tarde.","warning")
		return false;
	}
	cancelar_guardado_co();
	cargarpag('<?= base_url()?>nomina/abc_correccion_det_nomina', "div#lstResultadoDetNomina", true, "POST", {PeriodoPagoID:quincena,Credencial:credencial,idEmpleado:idEmpleado,accion:'listar'});
	return false;
}

function PostBackFrmGuardaCorreccion(f,e) {
	e.preventDefault();
	if (!valida_guardar_detalle()) {
		return false;
	}

	let quincena = $('#quincena').val(),
			idEmpleado = $('#idEmpleado').val(),
			gravado = ($('#GRAVADO').prop('checked') ? 1 : 0);
	$('#GRAVADO').val(gravado)

	swal.fire({
    title: "Alerta",
    text: "¿Confirma que desea agregar el concepto al detalle de nómina (esta acción afectará el historial y se registrará en la bitácora)?",
    icon: "question",
    showCancelButton: true,
  }).then(result => {
    if (result.value) {
			Carga_Metodo(f.action,
									$(f).serialize() + '&Id_Nomina='+quincena+'&Id_Empleado='+idEmpleado+'&GRAVADO='+gravado+'&accion=guardar',
									exito_guarda_correccion, "Guardando...");
    }
  }).catch(swal.noop);
  return false;
}

function eliminar_concepto_det_nomina(url,data,esBoton) {
  if (typeof(esBoton) == "undefined" || esBoton == "" || esBoton == null) { esBoton = false; }
  if (esBoton) data = $(data).data('json');
  let quincena = $('#quincena').val(),
			idDetNomina = data.idDetNomina,
			idConcepto = data.id_concepto,
			idTipoNomina = data.TipoNominaId,
			idEmpleado = data.Id_Empleado;

  if (typeof(quincena) == "undefined" || quincena == "" || quincena == 0) {
    alerta_emergente("Ocurrió un error al intentar obtener la información del registro. Intente de nuevo más tarde.","warning");
    return false;
  }

  swal.fire({
    title: "Alerta",
    text: "¿Confirma que desea eliminar el concepto: "+data.Concepto+" (esta acción afectará el historial y se registrará en la bitácora)?",
    icon: "question",
    showCancelButton: true,
  }).then(result => {
    if (result.value) {
      Carga_Metodo('<?= base_url()?>nomina/abc_correccion_det_nomina',
			{Id_Nomina:quincena,Id_Concepto:idConcepto,Id_Empleado:idEmpleado,TipoNominaId:idTipoNomina,accion:'borrar'},
			exito_guarda_correccion, "Eliminando...");
    }
  }).catch(swal.noop);

  return false;
}

function exito_guarda_correccion(respuesta) {
  if (respuesta.status == false) {
    $('div#co_errores').html(respuesta.errores).fadeIn('slow');
    alerta_emergente(respuesta.message, "warning");
  }
  else {
    alerta_emergente(respuesta.message,"success");
		cancelar_guardado_co();
		correccion_detalle_nomina();
		$('#quincena').trigger('change');
	}
  return false;
}

function cancelar_guardado_co() {
	$('#frmCorreccionDetNomina').parsley().reset();
	$('div#co_errores').hide();
  $(".co_decimal").val('');
	$('#TipoNominaId').val('').trigger('change');
	$('#Id_Concepto').val('').trigger('change');
	$('#GRAVADO').prop('checked', false);
	return false;
}

function valida_guardar_detalle() {
	$('#frmCorreccionDetNomina').parsley().validate();
	if (!$('#frmCorreccionDetNomina').parsley().isValid()){
		return false;
	}

  let tabla					= $('#tblCorrecionDetalle').DataTable(),
			idConcepto		= $('#Id_Concepto').val(),
			idTipoNomina	= $('#TipoNominaId').val(),
			mensaje		= '',
			continuar = true;

	tabla.rows().every(function (rowIdx, tableLoop, rowLoop) {
		if (continuar) {
			var data = this.data();
			if (data.id_concepto == idConcepto && data.TipoNominaId == idTipoNomina) {
				continuar = false;
				mensaje = "El concepto ya se encuentra agregado al detalle de nómina. Es necesario eliminarlo primero.";
			}
		}
	});

	if (continuar == false && mensaje != '') { alerta_emergente(mensaje,'warning'); }
	return continuar;
}

function genera_sumatoria_detalle() {
	let table = $('#tblCorrecionDetalle').DataTable(),
			totalP = table
						  .rows({filter:'applied'})
						  .data()
						  .filter( function ( d ) {
						    return (d.EsPercepcion == 1 && trim(d.TipoConcepto) != 'I' && trim(d.TipoConcepto) != 'OS' && trim(d.TipoConcepto) != 'O1');
						  }).pluck('Monto').sum(),
			totalD = table
						  .rows({filter:'applied'})
						  .data()
						  .filter( function ( d ) {
						    return (d.EsPercepcion == 0 && trim(d.TipoConcepto) != 'I' && trim(d.TipoConcepto) != 'OS' && trim(d.TipoConcepto) != 'O1');
						  }).pluck('Monto').sum(),
			totalC = totalP - totalD;

	$('#cd_total_percep').val(formatCurrency(totalP));
	$('#cd_total_deduc').val(formatCurrency(totalD));
	$('#cd_total_cobrar').val(formatCurrency(totalC));
}

</script>
