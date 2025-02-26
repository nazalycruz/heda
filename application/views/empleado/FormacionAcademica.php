<?php
$attributes = array("id" => "frmFormacionAcademica", "name" => "frmFormacionAcademica", "onsubmit" => "return PostBackFrmGuardaEducacion(this, event);");
echo form_open("empleado/guarda_formacion_academica", $attributes);
?>
<input type="hidden" name="fa_credencial" id="fa_credencial" value="<?= (empty($credencial) ? '' : $credencial); ?>">
<input type="hidden" name="fa_idEmpleado" id="fa_idEmpleado" value="<?= (empty($idEmpleado) ? '' : $idEmpleado); ?>">
<input type="hidden" name="fa_idDet" id="fa_idDet" value="0">

<div class="card">
	<div class="card-body">
		<div class="alert alert-info fade show">
			<strong>Cursos y/o conferencias y/o capacitaciones y/o diplomados, etc. recibidos en los últimos 3 años.<br>(Últimos 3 recibidos en caso de no contar con cursos en los últimos 3 años)</strong>
		</div>
    <div id="fa_errores" class="alert alert-danger" style="display:none;"></div>
		<div class="row mb-2">
			<div class="col-12">
				<div class="form-group">
					<label for="fa_Nombre" class="form-label">Nombre</label>
					<input type="text" class="form-control form-control-sm" id="fa_Nombre" name="fa_Nombre" onkeypress="return dispara_tab(event, this);" placeholder="Nombre del curso/diplomado/capacitación" autocomplete="off">
				</div>
			</div>
		</div>
		<div class="row mb-2">
			<div class="col-4">
				<div class="form-group">
					<label for="Instituto" class="form-label">Instituto</label>
					<select class="form-control fa_catalogos form-control-sm select2-sm" id="Instituto" name="Instituto">
						<?= $catEscuelas; ?>
					</select>
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
					<label for="fInicio" class="form-label">Fecha de Inicio</label>
					<input type="text" class="form-control form-control-sm fa_fechas" id="fInicio" name="fInicio" required autocomplete="off">
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
					<label for="fFin" class="form-label">Fecha Final</label>
					<input type="text" class="form-control form-control-sm fa_fechas" id="fFin" name="fFin" required autocomplete="off">
				</div>
			</div>
		</div>
		<div class="row mb-2">
			<div class="col-4">
				<div class="form-group">
					<label for="documentoObtenido" class="form-label">Documento Obtenido</label>
					<input type="text" class="form-control form-control-sm" id="documentoObtenido" name="documentoObtenido" onkeypress="return dispara_tab(event, this);" placeholder="Documento Obtenido" value="" autocomplete="off">
				</div>
			</div>
			<div class="col-8">
				<div class="form-group">
					<label for="Observaciones" class="form-label">Observaciones</label>
					<input type="text" class="form-control form-control-sm" id="Observaciones" name="Observaciones" onkeypress="return dispara_tab(event, this);" placeholder="Observaciones" value="" autocomplete="off">
				</div>
			</div>
		</div>
	</div>
	<div class="card-footer text-end pt-2 pb-2">
		<button class="btn btn-success btn-sm" title="Guardar" id="btnGuardarEducacion" name="btnGuardarEducacion">
			<i class="far fa-save"></i> Guardar
		</button>
		<button type="button" class="btn btn-default btn-sm" title="Cancelar" id="btnCancelar" name="btnCancelar" onclick="cancelar_guardado();">
			<i class="fa-solid fa-xmark"></i> Cancelar
		</button>
	</div>
</div>
<?php
echo form_close();
?>
<div class="card">
	<div class="card-body">
		<div id="lstResultadoFA">

		</div>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function(){
	$(".fa_catalogos").select2({
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

	$(".fa_fechas").datepicker({
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

	$("#fInicio").datepicker().on('changeDate', function (selected) {
		var minDate = new Date(selected.date.valueOf());
		$('#fFin').datepicker('setStartDate', minDate);
	});

	$("#fFin").datepicker().on('changeDate', function (selected) {
		var minDate = new Date(selected.date.valueOf());
		$('#fInicio').datepicker('setEndDate', minDate);
	});

	detalle_formacion_academica();
});

function detalle_formacion_academica() {
	let idEmpleado = $('#fa_idEmpleado').val();
	cancelar_guardado();
	cargarpag('<?= base_url()?>empleado/carga_det_formacion_academica', "div#lstResultadoFA", true, "POST", {idEmpleado:idEmpleado});
	return false;
}

function cancelar_guardado() {
	$('#fa_idDet').val(0);
	$('div#fa_errores').hide();
  limpiaForm($('#frmFormacionAcademica'));
	return false;
}

function PostBackFrmGuardaEducacion(f,e) {
  e.preventDefault();

	if ($('#tblFormacionAcademica').DataTable().data().count() == 3) {
		alerta_emergente("Solo se pueden guardar tres registros.","warning");
		return false;
	}
  Carga_Metodo(f.action, $(f).serialize(), exito_guarda_educacion, "Guardando...");
  return false;
}

function exito_guarda_educacion(respuesta) {
  if (respuesta.status == false) {
    $('div#fa_errores').html(respuesta.errores).fadeIn('slow');
    alerta_emergente(respuesta.message, "warning");
  }
  else {
    alerta_emergente(respuesta.message,"success");
    detalle_formacion_academica();
		cancelar_guardado();
  }
  return false;
}

function editar_formacion_academica(url,data,esBoton) {
  if (typeof(esBoton) == "undefined" || esBoton == "" || esBoton == null) { esBoton = false; }
  if (esBoton) data = $(data).data('json');
	$('#fa_idEmpleado').val(data.idEmpleado);
	$('#fa_idDet').val(data.idDetFormacion);
	$('#fa_Nombre').val(data.Nombre);
	$('#Instituto').val(data.idEscuela).trigger('change.select2');
	$('#fInicio').val(fecha_sql_a_normal(data.fInicio));
	$('#fFin').val(fecha_sql_a_normal(data.fFin));
	$('#documentoObtenido').val(data.documentoObtenido);
	$('#Observaciones').val(data.Observaciones);
  return false;
}

function eliminar_formacion_academica(url,data,esBoton) {
  if (typeof(esBoton) == "undefined" || esBoton == "" || esBoton == null) { esBoton = false; }
  if (esBoton) data = $(data).data('json');
  var idDetFormacion = data.idDetFormacion;

  if (typeof(idDetFormacion) == "undefined" || idDetFormacion == "" || idDetFormacion == 0) {
    alerta_emergente("Ocurrió un error al intentar obtener la información del registro. Intente de nuevo más tarde.","warning");
    return false;
  }

  swal.fire({
    title: "Alerta",
    text: "¿Confirma que desea eliminar el registro: "+data.Nombre+"?",
    icon: "question",
    showCancelButton: true,
  }).then(result => {
    if (result.value) {
      Carga_Metodo('<?= base_url()?>empleado/eliminar_formacion_academica', {idDetFormacion:idDetFormacion}, exito_guarda_educacion, "Eliminando...");
    }
  }).catch(swal.noop);

  return false;
}

</script>
