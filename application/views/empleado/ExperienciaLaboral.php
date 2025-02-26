<?php
$attributes = array("id" => "frmExperienciaLaboral", "name" => "frmExperienciaLaboral", "onsubmit" => "return PostBackFrmGuardaLaboral(this, event);");
echo form_open("empleado/abc_det_experiencia_laboral", $attributes);
?>
<input type="hidden" name="el_credencial" id="el_credencial" value="<?= (empty($credencial) ? '' : $credencial); ?>">
<input type="hidden" name="el_idEmpleado" id="el_idEmpleado" value="<?= (empty($idEmpleado) ? '' : $idEmpleado); ?>">
<input type="hidden" name="idDetExperienciaLab" id="idDetExperienciaLab" value="0">

<div class="card">
	<div class="card-body">
		<div class="alert alert-info fade show">
			<strong>Experiencia Laboral en los últimos tres empleos</strong>
		</div>
		<div id="el_errores" class="alert alert-danger" style="display:none;"></div>
		<div class="row mb-2">
			<div class="col-6">
				<div class="form-group">
					<label for="nombreEmpresa" class="form-label">Denominación de la Institución o Empresa</label>
					<input type="text" class="form-control form-control-sm" id="nombreEmpresa" name="nombreEmpresa" onkeypress="return dispara_tab(event, this);" placeholder="Nombre de la empresa" autocomplete="off">
				</div>
			</div>
			<div class="col-3">
				<div class="form-group">
					<label for="fIngreso" class="form-label">Fecha de Inicio</label>
					<input type="text" class="form-control form-control-sm el_fechas" id="fIngreso" name="fIngreso" required autocomplete="off">
				</div>
			</div>
			<div class="col-3">
				<div class="form-group">
					<label for="fEgreso" class="form-label">Fecha de Conclusión</label>
					<input type="text" class="form-control form-control-sm el_fechas" id="fEgreso" name="fEgreso" required autocomplete="off">
				</div>
			</div>
		</div>

		<div class="row mb-2">
			<div class="col-6">
				<div class="form-group">
					<label for="Puesto" class="form-label">Cargo o puesto desempeñado</label>
					<input type="text" class="form-control form-control-sm" id="Puesto" name="Puesto" onkeypress="return dispara_tab(event, this);" placeholder="Cargo o puesto desempeñado" value="" required autocomplete="off">
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					<label for="campoExperiencia" class="form-label">Campo de Experiencia</label>
					<input type="text" class="form-control form-control-sm" id="campoExperiencia" name="campoExperiencia" onkeypress="return dispara_tab(event, this);" placeholder="Campo de Experiencia" value="" autocomplete="off">
				</div>
			</div>

		</div>

		<div class="row mb-2">
			<div class="col-12">
				<div class="form-group">
					<label for="Observaciones" class="form-label">Observaciones</label>
					<input type="text" class="form-control form-control-sm" id="el_Observaciones" name="el_Observaciones" onkeypress="return dispara_tab(event, this);" placeholder="Observaciones" value="" autocomplete="off">
				</div>
			</div>
		</div>

	</div>
	<div class="card-footer text-end p-t-5 p-b-5">
		<button class="btn btn-success btn-sm" title="Guardar" id="btnGuardarLaboral" name="btnGuardarLaboral">
			<i class="far fa-save"></i> Guardar
		</button>
		<button type="button" class="btn btn-default btn-sm" title="Cancelar" id="btnCancelar" name="btnCancelar" onclick="cancelar_guardado_el();">
			<i class="fa-solid fa-xmark"></i> Cancelar
		</button>
	</div>
</div>

<?php
echo form_close();
?>

<div class="card">
	<div class="card-body">
		<div id="lstResultadoEL">

		</div>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function(){
	$(".el_fechas").datepicker({
		format: "dd/mm/yyyy",
		weekStart: 1,
		maxViewMode: 3,
		language: "es",
		orientation: "bottom auto",
		autoclose: true,
		todayBtn: "linked",
		todayHighlight: true,
		endDate: '+1d',
		datesDisabled: '+1d',
	}).on("hide", function(e) {
		dispara_tab_especial(e);
	}).inputmask({'alias': 'datetime', 'inputFormat': 'dd/mm/yyyy', 'placeholder': 'dd/mm/yyyy', 'min':'01/01/1900'});

	$("#fIngreso").datepicker().on('changeDate', function (selected) {
		var minDate = new Date(selected.date.valueOf());
		$('#fEgreso').datepicker('setStartDate', minDate);
	});

	$("#fEgreso").datepicker().on('changeDate', function (selected) {
		var minDate = new Date(selected.date.valueOf());
		$('#fIngreso').datepicker('setEndDate', minDate);
	});

	detalle_experiencia_laboral();
});

function detalle_experiencia_laboral() {
	let idEmpleado = $('#el_idEmpleado').val();
	cancelar_guardado_el();
	cargarpag('<?= base_url()?>empleado/abc_det_experiencia_laboral', "div#lstResultadoEL", true, "POST", {idEmpleado:idEmpleado});
	return false;
}

function cancelar_guardado_el() {
	$('#idDetExperienciaLab').val(0);
	$('div#el_errores').hide();
  limpiaForm($('#frmExperienciaLaboral'));
	return false;
}

function PostBackFrmGuardaLaboral(f,e) {
  e.preventDefault();

	if ($('#tblExperienciaLaboral').DataTable().data().count() == 3 && $('#idDetExperienciaLab').val() == 0) {
		alerta_emergente("Solo se pueden guardar tres registros.","warning");
		return false;
	}
  Carga_Metodo(f.action, $(f).serialize() + '&accion=guardar' , exito_guarda_laboral, "Guardando...");
  return false;
}

function exito_guarda_laboral(respuesta) {
  if (respuesta.status == false) {
    if (respuesta.errores == "") { $('div#el_errores').html(respuesta.message).fadeIn('slow');  }
		else { $('div#el_errores').html(respuesta.errores).fadeIn('slow'); }
    alerta_emergente(respuesta.message, "warning");
  }
  else {
    alerta_emergente(respuesta.message,"success");
    detalle_experiencia_laboral();
		cancelar_guardado_el();
  }
  return false;
}

function editar_experiencia_laboral(url,data,esBoton) {
  if (typeof(esBoton) == "undefined" || esBoton == "" || esBoton == null) { esBoton = false; }
  if (esBoton) data = $(data).data('json');
	$('#idDetExperienciaLab').val(data.idDetExperienciaLab);
	$('#el_idEmpleado').val(data.idEmpleado);
	$('#nombreEmpresa').val(data.nombreEmpresa);
	$('#fIngreso').val(fecha_sql_a_normal(data.fIngreso));
	$('#fEgreso').val(fecha_sql_a_normal(data.fEgreso));
	$('#Puesto').val(data.Puesto);
	$('#campoExperiencia').val(data.campoExperiencia);
	$('#el_Observaciones').val(data.Observaciones);
  return false;
}

function eliminar_experiencia_laboral(url,data,esBoton) {
  if (typeof(esBoton) == "undefined" || esBoton == "" || esBoton == null) { esBoton = false; }
  if (esBoton) data = $(data).data('json');
  let idDetExperienciaLab = data.idDetExperienciaLab,
			idEmpleado = data.idEmpleado;

  if (typeof(idDetExperienciaLab) == "undefined" || idDetExperienciaLab == "" || idDetExperienciaLab == 0) {
    alerta_emergente("Ocurrió un error al intentar obtener la información del registro. Intente de nuevo más tarde.","warning");
    return false;
  }

  swal.fire({
    title: "Alerta",
    text: "¿Confirma que desea eliminar el registro: "+data.nombreEmpresa+"?",
    icon: "question",
    showCancelButton: true,
  }).then(result => {
    if (result.value) {
      Carga_Metodo('<?= base_url()?>empleado/abc_det_experiencia_laboral', {idEmpleado:idEmpleado,idDetExperienciaLab:idDetExperienciaLab,accion:'borrar'}, exito_guarda_laboral, "Eliminando...");
    }
  }).catch(swal.noop);

  return false;
}

</script>
