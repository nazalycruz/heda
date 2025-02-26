
<div class="row">
	<div class="col">
		<div id="div-sin-procesar" style="display:none;">
			<div class="alert alert-danger fade show fw-bold">
				<span class="msj-sin-procesar"></span>
			</div>
		</div>
	</div>
</div>

<div class="card mb-2">
	<div class="card-body">
		<div class="row">
			<div class="col">
				<div class="form-group">
					<label for="a_fInicio" class="form-label">Fecha de Inicio</label>
					<input type="text" class="form-control form-control-sm ra_fechas" id="a_fInicio" name="a_fInicio" required autocomplete="off" placeholder="Fecha inicial" value="<?= $fechaIni; ?>">
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<label for="a_fFin" class="form-label">Fecha Final</label>
					<input type="text" class="form-control form-control-sm ra_fechas" id="a_fFin" name="a_fFin" required autocomplete="off" placeholder="Fecha final" value="<?= date('d/m/Y'); ?>">
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col">
		<div class="d-grid gap-2">
			<button type="button" class="btn btn-success btn-lg btnCalculo" name="btnProcesarAsistencias" id="btnProcesarAsistencias" onclick="procesar_empleados_asistencias();"><i class="fa-solid fa-building-user"></i> Procesar Asistencias</button>
		</div>
	</div>
</div>

<div class="card mt-2">
	<div class="card-body">
		<?= $tblEmpleados; ?>
	</div>
</div>

<script type="text/javascript">
  setTimeout(function FuncionesIniciales(){
		$(".ra_fechas").datepicker({
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
			// dispara_tab_especial(e);
		}).inputmask({'alias': 'datetime', 'inputFormat': 'dd/mm/yyyy', 'placeholder': 'dd/mm/yyyy', 'min':'01/01/1900'});

		// carga_empleados_sin_procesar();
	});

	// function carga_empleados_sin_procesar() {
	// 	Carga_Metodo("asistencias/carga_asistencias_sin_procesar", "", function finalizaCarga(respuesta) {
	// 		if (typeof(respuesta.sinProcesar) == "undefined" || respuesta.sinProcesar === "" || respuesta.sinProcesar == 0 || respuesta.sinProcesar == null) {
	// 			$("#div-sin-procesar").hide();
	// 			$('.msj-sin-procesar').empty();
	// 		}
	// 		else {
	// 			$("#div-sin-procesar").show();
	// 			$('.msj-sin-procesar').html("Se encontraron: "+respuesta.sinProcesar+ " empleados con asistencias no procesadas.");
	// 			$('.tblEmpleadosSinProcesar').html(respuesta.html);
	// 		}
	// 	}, "Cargando...");
	// 	return false;
	// }

	function procesar_empleados_asistencias() {
		let	tablaAsist = $('#tblEmpleadosAsistencias').DataTable();

		if (!tablaAsist.rows('.selected').any()) {
			alerta_emergente('No se ha seleccionado algún empleado para procesar.','warning');
			return false;
		}
		let empleados = tablaAsist.rows({selected: true}).data().toArray(),
				fechaini = $('#a_fInicio').val(),
				fechafin = $('#a_fFin').val(),
				dt = new Date(),
				time = ('0'+dt.getHours()).slice(-2) + ":" + ('0'+dt.getMinutes()).slice(-2) + ":" + ('0'+dt.getSeconds()).slice(-2);
		Carga_Metodo("asistencias/procesar_asistencias", {empleados:JSON.stringify(empleados),fechaini:fechaini,fechafin:fechafin}, function finalizaProceso(respuesta) {
			if (respuesta.status == false) {
				alerta_emergente(respuesta.message,'warning')
			}
			else {
				alerta_emergente(respuesta.message,'success')
			}
		}, "Procesando*Generando asistencias para "+empleados.length+" empleado(s)... Proceso iniciado: "+time);
	}

</script>
