<h1 class="page-header">Contratos <small>administración de contratos.</small></h1>

<div class="card mb-2">

	<div class="card-body">
		<div class="row">
			<div class="col">
				<div class="form-group">
					<label for="fInicio" class="form-label">Fecha de Inicio</label>
					<input type="text" class="form-control form-control-sm con_fechas" id="fInicio" name="fInicio" required autocomplete="off" placeholder="Fecha inicial" value="<?= date("d/m/Y", mktime(0,0,0,1,1,date("Y"))); ?>">
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<label for="fFin" class="form-label">Fecha Final</label>
					<input type="text" class="form-control form-control-sm con_fechas" id="fFin" name="fFin" required autocomplete="off" placeholder="Fecha final" value="<?= date('d/m/Y'); ?>">
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<label for="btnBuscarPartes" class="form-label">&nbsp;</label>
					<div>
						<button type="button" class="btn btn-inverse btn-sm" id="btnBuscarPartes" onclick="buscar_sesiones_fecha();"><i class="fa fa-search"></i> Buscar</button>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<label for="sesion" class="form-label">Sesión</label>
					<select id="sesion" name="sesion" class="form-control form-control-sm select2-sm select2">
					</select>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="card" id="cardContratos" style="display:none;">
	<input type="hidden" name="rutaRpt" id="rutaRpt" value="0">
	<div class="card-body" id="divContratos">

	</div>
</div>

<script type="text/javascript">
setTimeout(function FuncionesIniciales(){

	$(".select2").select2({
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

	$(".con_fechas").datepicker({
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

	buscar_sesiones_fecha();
});

function buscar_sesiones_fecha() {
	let fechaini = $('#fInicio').val(),
			fechafin = $('#fFin').val();
	$('#sesion').empty();
	Carga_Metodo("recursos_humanos/obtener_sesiones", {fechaini:fechaini,fechafin:fechafin}, function finalizaProceso(data) {
								 if (data.status == false) {
									 alerta_emergente(data.message, "warning");
								 }
								 else {
									 $('#sesion').html(data.sesiones);
								 }
							 },"Procesando...");
}

$("#sesion").change(function(e) {
	let idSesion = $(this).val();
	Carga_Metodo("recursos_humanos/listado_movimientos_sesion",
							 {idSesion:idSesion},
							 function finalizaProceso(data){
								 if (data.status == false) {
									 $('#cardContratos').hide();
									 alerta_emergente(data.message, "warning");
								 }
								 else {
									 $('#cardContratos').show();
									 $('#divContratos').html(data.html);
									 $('#rutaRpt').val(data.rutaRpt);
								 }
							 },
							 "Procesando...");
});

function imprimir_contrato(url,data,esBoton) {
	if (typeof(esBoton) == "undefined" || esBoton == "" || esBoton == null) { esBoton = false; }
	if (esBoton) { data = $(data).data('json'); }
	let rutaRpt = $('#rutaRpt').val(),
			archivo = (data.AreaAdscripcion == "J" ? 'rptContratoJuridico' : 'rptContratoAdministrativo'),
 		 strJSON = "{'Reporte':'rpt/95/" + archivo + ".rpt', 'Referencia':'Reporte de contratos','dsn':'pjey_admin.dsn',	'@IdSesion':'" + data.IdSesion + "', '@NumeroSesion':'" + data.Numero + "', '@FechaSesion':'" + fecha_sql_a_normal(data.FechaHoraSesion) + "', '@HoraSesion': '"+ "" +"', '@TipoSesion':'" + data.TipoSesion +
 		   "', '@Credencial':'" + data.NumNomina + "', '@ClaveCategoria':'" + data.IdNuevaCategoria + "', '@ClaveDependencia':'" + data.IdNuevaDependencia + "', '@FechaInicioContrato':'" + fecha_sql_a_normal(data.FechaInicio) + "','@FechaFinContrato':'" + fecha_sql_a_normal(data.FechaTerminacion) + "', '@PresupuestoId':'" + data.IdResponsable + "'}";

	$('<form>', {
      "id": 'frmImprimirReporteContratos',
      "method": 'post',
      "html": '<input type="hidden" name="Tipo" value="1" />'+
              '<input type="hidden" name="Print" value="2" />'+
              '<input type="hidden" id="JSON" name="JSON" value="' + strJSON + '" />',
      "action": rutaRpt,
      "target": '_blank'
  }).appendTo(document.body).submit();

  $('#frmImprimirReporteContratos').remove();
  return false;
}

</script>
