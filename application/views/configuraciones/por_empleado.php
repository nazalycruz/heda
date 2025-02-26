<h1 class="page-header">Configuración por Empleado <small>configuración manual por empleado.</small></h1>
<?php
$attributes = array("id" => "frmConfiguraEmpleado", "name" => "frmConfiguraEmpleado", "onsubmit" => "return PostBackfrmConfiguraEmpleado(this, event);");
echo form_open("configuraciones/empleado", $attributes);
?>

<input type="hidden" id="idEmpleado" name="idEmpleado" value="0">
<input type="hidden" id="objeto" name="objeto" value="json">
<div class="card mb-2">
  <div class="card-body">
    <div class="row mb-2">
      <div class="col-2">
        <div class="form-group">
          <label><b>Credencial</b></label>
          <input value="" type="text" class="form-control form-control-sm det_credencial" id="credencial" name="credencial" placeholder="Credencial" autocomplete="off" required>
        </div>
      </div>
    </div>
  </div>
	<div class="card-footer text-end">
		<button type="submit" class="btn btn-inverse btn-sm" title="Buscar Empleado" id="btnBuscaEmpleado" name="btnBuscaEmpleado">
			<i class="fas fa-search"></i> Buscar
		</button>
		<button type="button" class="btn btn-inverse btn-sm" title="Búsqueda por nombre" onclick="buscar_empleado_por_nombre();" id="btnBuscaEmpleadoporNombre" name="btnBuscaEmpleadoporNombre">
			<i class="fas fa-binoculars"></i> Empleado
		</button>
	</div>
</div>
<?php
echo form_close();
?>

<div id="detalle_conf_empleado">

</div>

<script type="text/javascript">
setTimeout(function cargarconsulta() {
  $(".det_credencial").inputmask("9{5}",{ numericInput: true,placeholder: "0", positionCaretOnClick: "select", showMaskOnHover: false, showMaskOnFocus: false});
});

function PostBackfrmConfiguraEmpleado(f,e) {
	e.preventDefault();

	if (typeof( $('#credencial').val() ) == "undefined" || $('#credencial').val() === "" || $('#credencial').val() == 0) {
		alerta_emergente("Debe capturar la credencial del empleado.","warning")
		return false;
	}

	var variables = $(f).serialize();

	Carga_Metodo(f.action, variables, exito_carga_empleado, "Cargando...");
	return false;
}

function exito_carga_empleado(respuesta) {
  if (respuesta.status == false) { alerta_emergente(respuesta.message, "warning"); }
  else {
		$("#detalle_conf_empleado").html(respuesta)
  }
}

function buscar_empleado_por_nombre() {
	cargamodalGenerica('<?= base_url() ?>generico/carga_vista', '#modContenido', '#modGeneral', {vista:"empleado/buscar_por_nombre"}, "Buscar empleado por nombre", 1);
	return false;
}

</script>
