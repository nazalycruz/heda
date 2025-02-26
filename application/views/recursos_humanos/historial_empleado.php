<h1 class="page-header">Historial del Empleado <small>consultar empleado</small></h1>

<?php
$attributes = array("id" => "frmConsultaEmpleado", "name" => "frmConsultaEmpleado", "onsubmit" => "return PostBackFrmEmpleadoRH(this, event);");
echo form_open("recursos_humanos/detalle_empleado_RH", $attributes);
?>
<input type="hidden" id="idEmpleado" name="idEmpleado" value="0">

<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-2 text-center">
        <img id="imgEmpleado" name="imgEmpleado" class="img-fluid rounded" height="80" width="100" style="-webkit-user-select:none; display:block; margin:auto;" src="<?=base_url();?>assets/img/user_gray.png">
      </div>
      <div class="col-10">
        <div class="row mb-2">
          <div class="col-2">
            <div class="form-group">
              <label class="form-label">Credencial</label>
              <input value="" type="text" class="form-control form-control-sm det_credencial" id="credencial" name="credencial" placeholder="Credencial" autocomplete="off" required >
            </div>
          </div>
          <div class="col-md">
            <div class="form-group">
              <label class="form-label">&nbsp;</label>
              <div>
                <button class="btn btn-inverse btn-sm" title="Buscar Empleado" id="btnBuscaEmpleado" name="btnBuscaEmpleado">
                  <i class="fas fa-search"></i> Buscar
                </button>
                <button type="button" class="btn btn-inverse btn-sm" title="Búsqueda por nombre" onclick="buscar_empleado_porNombreRH();" id="btnBuscaEmpleadoRH" name="btnBuscaEmpleadoRH">
                  <i class="fas fa-binoculars"></i> Empleado
                </button>
              </div>
            </div>
          </div>

          <div class="col-6 pull-right">
            <div class="form-group">
              <label class="frmLbl from-label">Nombre</label>
              <input type="text" class="form-control-plaintext" id="nombre" name="nombre" readonly>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label class="frmLbl form-label">Categoría</label>
              <input type="text" class="form-control-plaintext form-control-sm" id="categoria" name="categoria" readonly>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label class="frmLbl form-label">Dependencia</label>
              <input type="text" class="form-control-plaintext form-control-sm" id="dependencia" name="dependencia" readonly>
            </div>
          </div>
        </div>

				<div class="row">
					<div class="col-3">
						<label for="h_edoRH" class="frmLbl form-label">Estado RH</label>
						<input type="text" class="form-control-plaintext form-control-sm" id="h_edoRH" name="h_edoRH" readonly>
					</div>
					<div class="col-3">
						<label for="h_edoSG" class="frmLbl form-label">Estado SISEGE</label>
						<input type="text" class="form-control-plaintext form-control-sm" id="h_edoSG" name="h_edoSG" readonly>
					</div>
				</div>

      </div>
    </div>
  </div>
</div>
<?php
echo form_close();
?>

<div id="detalle_historial_empleado">

</div>

<script type="text/javascript">
setTimeout(function cargarconsulta() {

  $("#frmConsultaEmpleadoRH :input:not(:button,[name=credencial])").prop("disabled", true);

  $(".det_credencial").inputmask("9{5}",{ numericInput: true,placeholder: "0", positionCaretOnClick: "select", showMaskOnHover: false, showMaskOnFocus: false});

  $('.frmLbl').hide();
});

function PostBackFrmEmpleadoRH(f,e) {
  e.preventDefault();

  if( typeof( $('#credencial').val() ) == "undefined" || $('#credencial').val() === "" || $('#credencial').val() == 0 ) {
    alerta_emergente("Debe capturar la credencial del empleado.","warning");
    return false;
  }
  let variables = $(f).serialize();
  Carga_Metodo(f.action, variables, exito_carga_empleadoRH, "Cargando...");
  return false;
}

function exito_carga_empleadoRH(respuesta) {
  if( respuesta.status == false ) { alerta_emergente(respuesta.message, "warning"); }
  else{
    $('.frmLbl').show();
    $('#nombre').val(respuesta.empleado.NombreCompleto);
    $('#categoria').val(respuesta.empleado.DescripcionCategoria);
    $('#dependencia').val(respuesta.empleado.DescripcionDependencia);
    $('#idEmpleado').val(respuesta.empleado.Id);
		let estadoRH = respuesta.empleado.Estado+' - '+ ((respuesta.empleado.Estado == 'I' || respuesta.empleado.Estado == 'B') ? 'INACTIVO' : 'ACTIVO'),
				liquidado = ((respuesta.empleado.Liquidado == 1) ? '(Liquidado)' : ''),
				estadoSG = respuesta.estadoSISEGE.Origen +' - '+respuesta.estadoSISEGE.Status;
		$('#h_edoRH').val(estadoRH + ' ' + liquidado);
		$('#h_edoSG').val(estadoSG);
		if (respuesta.baja || respuesta.empleado.Estado == 'I' || respuesta.empleado.Estado == 'B') {
			$('#h_edoRH').addClass('fw-bold text-red-600');
		}
		else {
			$('#h_edoRH').removeClass('fw-bold text-red-600');
		}

    if (respuesta.imagen == false) { $('#imgEmpleado').attr("src","<?=base_url();?>assets/img/user_gray.png"); }
    else { $('#imgEmpleado').attr("src",respuesta.imagen); }
    $('div#detalle_historial_empleado').html(respuesta.datos);
  }
}

function buscar_empleado_porNombreRH() {
  cargamodalGenerica('<?= base_url() ?>generico/carga_vista', '#modContenido', '#modGeneral', {vista:"empleado/buscar_por_nombre"}, "Buscar empleado por nombre", 1);
  return false;
}


</script>
