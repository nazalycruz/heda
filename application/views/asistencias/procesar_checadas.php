<h1 class="page-header">Asistencias Registradas <small>obtener el registro de asistencias.</small></h1>

<?php
$attributes = array("id" => "frmProcesarChecadas", "name" => "frmProcesarChecadas", "onsubmit" => "return PostBackFrmprocesarChecadas(this, event);");
echo form_open("asistencias/procesar_checadas", $attributes);
?>
<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col">
				<div class="form-group">
					<label for="fInicio" class="form-label">Fecha de Inicio</label>
					<input type="text" class="form-control form-control-sm pc_fechas" id="fInicio" name="fInicio" required autocomplete="off" placeholder="Fecha inicial" value="<?= date('d/m/Y'); ?>">
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<label for="fFin" class="form-label">Fecha Final</label>
					<input type="text" class="form-control form-control-sm pc_fechas" id="fFin" name="fFin" required autocomplete="off" placeholder="Fecha final" value="<?= date('d/m/Y'); ?>">
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
					<label for="pc_credencial" class="form-label">Credencial</label>
					<input value="" type="text" class="form-control form-control-sm pc_credencial" id="pc_credencial" name="pc_credencial" placeholder="Credencial" autocomplete="off">
					<p class="help-block">* Para realizar el procesamiento de checadas de un solo empleado, proporciona el número de nómina</p>
				</div>
			</div>
		</div>
	</div>
	<div class="card-footer text-end">
		<button class="btn btn-inverse btn-sm" title="Procesar checadas" id="btnProcesarChecadas" name="btnProcesarChecadas">
			<i class="fa-solid fa-gears"></i> Procesar
		</button>
		<button type="button" class="btn btn-outline-secondary btn-sm" title="Generar vista previa de las checadas" id="btnVistaPreviaChecadas" name="btnVistaPreviaChecadas" onclick="vista_previa_checadas();">
			<i class="fas fa-search"></i> Vista Previa
		</button>
		<button type="button" class="btn btn-outline-secondary btn-sm" class="btn btn-inverse btn-sm" title="Buscar Archivos" id="btnBuscarArchivosChecadas" name="btnBuscarArchivosChecadas" onclick="buscar_archivos_checadas();">
			<i class="fa-solid fa-magnifying-glass"></i> Buscar archivos
		</button>
	</div>
</div>
<?php
echo form_close();
?>

<div class="card mt-2" style="display:none;" id="cardtblArchivosChecadas">
	<div class="card-body" id="result_archivos_checadas">

	</div>
</div>

<div class="card mt-2" style="display:none;" id="cardtblChecadas">
	<div class="card-body" id="result_checadas">

	</div>
</div>

<script type="text/javascript">
$(document).ready(function(){
	$(".pc_catalogos").select2({
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

	$(".pc_fechas").datepicker({
		format: "dd/mm/yyyy",
		weekStart: 1,
		maxViewMode: 3,
		language: "es",
		orientation: "bottom auto",
		autoclose: true,
		todayBtn: "linked",
		todayHighlight: true,
		// endDate: '+1d',
		// datesDisabled: '+1d',
	}).on("hide", function(e) {
		// dispara_tab_especial(e);
	}).inputmask({'alias': 'datetime', 'inputFormat': 'dd/mm/yyyy', 'placeholder': 'dd/mm/yyyy', 'min':'01/01/1900'});

	$("#fInicio").datepicker().on('changeDate', function (selected) {
		var minDate = new Date(selected.date.valueOf());
		$('#fFin').datepicker('setStartDate', minDate);
	});

	$("#fFin").datepicker().on('changeDate', function (selected) {
		var minDate = new Date(selected.date.valueOf());
		$('#fInicio').datepicker('setEndDate', minDate);
	});

  $(".pc_credencial").inputmask("9{5}", { numericInput: true, placeholder: "0", positionCaretOnClick: "select", showMaskOnHover: false, showMaskOnFocus: false});
});

function PostBackFrmprocesarChecadas(f,e) {
	e.preventDefault();
	let variables = $(f).serialize();
	Carga_Metodo(f.action,
							 variables,
							 function finalizaProceso(data){
								 if (data.status == false) {
									 alerta_emergente(data.message, "warning");
								 }
								 else {
									 alerta_emergente(data.message, "success");
								 }
							 },
							 "Procesando...");
}

function vista_previa_checadas() {
	let fechaIni = $('#fInicio').val(),
			fechaFin = $('#fFin').val(),
			credencial = $('#pc_credencial').val();
	Carga_Metodo('<?= base_url()?>asistencias/vista_previa_checadas',
							 {fechaIni:fechaIni,fechaFin:fechaFin,credencial:credencial},
							 function finalizaProceso(data){
								 if (data.status == false) {
									 $('#cardtblChecadas').hide();
									 $('#cardtblArchivosChecadas').hide();
									 alerta_emergente(data.message, "warning");
								 }
								 else {
									 $('#cardtblChecadas').show();
									 $('#cardtblArchivosChecadas').hide();
									 $('#result_checadas').html(data.html);
								 }
							 },
							 "Procesando...");
}

function buscar_archivos_checadas() {
	let fechaIni = $('#fInicio').val(),
			fechaFin = $('#fFin').val();
	Carga_Metodo('<?= base_url()?>asistencias/buscar_archivos_checadas',
							 {fechaIni:fechaIni,fechaFin:fechaFin},
							 function finalizaProceso(data){
								 if (data.status == false) {
									 $('#cardtblChecadas').hide();
									 $('#cardtblArchivosChecadas').hide();
									 alerta_emergente(data.message, "warning");
								 }
								 else {
									 $('#cardtblChecadas').hide();
									 $('#cardtblArchivosChecadas').show();
									 $('#result_archivos_checadas').html(data.html);
								 }
							 },
							 "Procesando...");
}

function procesar_archivo_checadas(base_url,data,btn) {
	let archivo = $(data).data('json'),
			fechaIni = $('#fInicio').val(),
			fechaFin = $('#fFin').val(),
			credencial = $('#pc_credencial').val();
	Carga_Metodo('<?= base_url()?>asistencias/procesar_checadas',
							 {fInicio:fechaIni,fFin:fechaFin,archivo:archivo.Archivo,pc_credencial:credencial},
							 function finalizaProceso(data){
								 if (data.status == false) {
									 alerta_emergente(data.message, "warning");
								 }
								 else {
									 alerta_emergente(data.message, "success");
								 }
							 },
							 "Procesando...");
}

function generar_vista_previa_checadas(base_url,data,btn) {
	let archivo = $(data).data('json'),
			fechaIni = $('#fInicio').val(),
			fechaFin = $('#fFin').val(),
			credencial = $('#pc_credencial').val();
	Carga_Metodo('<?= base_url()?>asistencias/vista_previa_checadas',
							 {fechaIni:fechaIni,fechaFin:fechaFin,archivo:archivo.Archivo,credencial:credencial},
							 function finalizaProceso(data){
								 if (data.status == false) {
									 $('#cardtblChecadas').hide();
									 alerta_emergente(data.message, "warning");
								 }
								 else {
									 $('#cardtblChecadas').show();
									 $('#result_checadas').html(data.html);
								 }
							 },
							 "Procesando...");
}

</script>
