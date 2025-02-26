<h1 class="page-header">Detalle de Nómina <small>prestador de servicios.</small></h1>
<?php
$attributes = array("id" => "frmConsultaPrestador", "name" => "frmConsultaPrestador", "onsubmit" => "return PostBackFrmPrestador(this, event);");
echo form_open("prestadores/carga_datos", $attributes);
?>
<input type="hidden" id="idPrestador" name="idPrestador" value="0">
<input type="hidden" id="idPeriodoPago" name="idPeriodoPago" value="<?= empty($idPeriodoPago) ? 0 : $idPeriodoPago; ?>">

<div class="panel panel-default" data-sortable-id="ui-widget-10">
  <div class="panel-body">
    <div class="row mb-2">
      <div class="col-2">
        <div class="form-group">
          <label><b>Credencial</b></label>
          <input value="" type="text" class="form-control form-control-sm det_credencial" id="credencial" name="credencial" placeholder="Credencial" autocomplete="off" required >
        </div>
      </div>
      <div class="col-md">
        <div class="form-group">
          <label class="control-label">&nbsp;</label>
          <div>
            <button class="btn btn-inverse btn-sm" title="Buscar Empleado" id="btnBuscaEmpleado" name="btnBuscaEmpleado">
              <i class="fas fa-search"></i> Buscar
            </button>
            <!-- <button type="button" class="btn btn-inverse btn-sm" title="Búsqueda por nombre" onclick="buscar_empleado_porNombre();" id="btnBuscaEmpleadoporNombre" name="btnBuscaEmpleadoporNombre">
              <i class="fas fa-binoculars"></i> Empleado
            </button> -->
          </div>
        </div>
      </div>

      <div class="col-6 pull-right">
        <div class="form-group">
          <label><b>Nombre</b></label>
          <input type="text" class="form-control form-control-sm" id="nombre" name="nombre" readonly>
        </div>
      </div>

    </div>

    <div class="row mb-2">
      <div class="col-6">
        <div class="form-group">
          <label><b>Categoría</b></label>
          <input type="text" class="form-control form-control-sm" id="categoria" name="categoria" readonly>
        </div>
      </div>
      <div class="col-6">
        <div class="form-group">
          <label><b>Dependencia</b></label>
          <input type="text" class="form-control form-control-sm" id="dependencia" name="dependencia" readonly>
        </div>
      </div>
    </div>

    <div class="row mb-2" id="muestra-quincena">
      <div class="col-6">
        <div class="form-group">
          <label for="quincena"><b>Quincena</b></label>
          <select class="form-control form-control-sm select2-sm" id="quincena" name="quincena" disabled>
            <?= $quincenas; ?>
          </select>
        </div>
      </div>
    </div>

  </div>
</div>
<?php
echo form_close();
?>

<div id="detalle_nomina_prestador">

</div>

<script type="text/javascript">
setTimeout(function cargarconsulta() {

  $("#frmConsultaPrestador :input:not(:button,[name=credencial])").prop("disabled", true);
  $(".det_credencial").inputmask("9{5}",{ numericInput: true,placeholder: "0", positionCaretOnClick: "select", showMaskOnHover: false, showMaskOnFocus: false});
});

function PostBackFrmPrestador(f,e) {
	e.preventDefault();

	if (typeof( $('#credencial').val() ) == "undefined" || $('#credencial').val() === "" || $('#credencial').val() == 0) {
		alerta_emergente("Debe capturar la credencial del prestador de servicios.","warning")
		return false;
	}

	var variables = $(f).serialize();

	Carga_Metodo(f.action, variables, exito_carga_prestador, "Cargando...");
	return false;
}

function exito_carga_prestador(respuesta) {
  if (respuesta.status == false) { alerta_emergente(respuesta.message, "warning"); }
  else {
    $('#nombre').val(respuesta.prestador.NombreCompleto);
    $('#categoria').val(respuesta.prestador.DescripcionCategoria);
    $('#dependencia').val(respuesta.prestador.DescripcionDependencia);
    $('#idPrestador').val(respuesta.prestador.Id);
    $("#quincena").prop("disabled", false);
    $("#quincena").select2({
      language: "es",
      placeholder: "Seleccione un Elemento",
      width:'100%',
    }).on("select2:close", function (event) {
        setTimeout(function() {
          $('.select2-container-active').removeClass('select2-container-active');
          $(':focus').blur();
        }, 1);
    });

    $('#quincena').val($('#quincena option:eq(0)').val()).trigger('change');
  }
}

$("#quincena").on("change", function (e) {
  let quincena = $(this).val(),
      credencial = $('#credencial').val(),
      idPrestador = $('#idPrestador').val();

  if (typeof(idPrestador) == "undefined" || idPrestador === "" || idPrestador == 0) {
    alerta_emergente("Ocurrió un error al obtener la información del prestador de servicios. Por favor intente de nuevo más tarde.","warning")
    return false;
  }

  if (typeof(quincena) == "undefined" || quincena === "" || quincena == 0) {
    alerta_emergente("Ocurrió un error al obtener la información del período de pago. Por favor intente de nuevo más tarde.","warning")
    return false;
  }

  Carga_Metodo("<?=base_url();?>prestadores/carga_nomina", {quincena:quincena,credencial:credencial,idPrestador:idPrestador}, exito_carga_nomina_prestador, "Cargando...");
  return false;
});

function exito_carga_nomina_prestador(respuesta) {
 $('div#detalle_nomina_prestador').html(respuesta.datos);
 return false;
}

</script>
