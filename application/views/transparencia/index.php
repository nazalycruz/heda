<h1 class="page-header">Transparencia <small>reporte de obligaciones</small></h1>

<?php
$attributes = array("id" => "frmTransparencia", "name" => "frmTransparencia", "onsubmit" => "return PostBackfrmTransparencia(this, event);");
echo form_open("transparencia/procesar_reporte", $attributes);
?>
<div class="card mb-2" id="muestra-reportes">
  <div class="card-body">
    <div class="row">
			<div class="col">
				<div class="form-group">
					<label for="fInicio" class="form-label">Fecha de Inicio</label>
					<input type="text" class="form-control form-control-sm tra_fechas" id="fInicio" name="fInicio" required autocomplete="off" placeholder="Fecha inicial" value="<?= '01/'.date('m').'/'.date('Y'); ?>">
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<label for="fFin" class="form-label">Fecha Final</label>
					<input type="text" class="form-control form-control-sm tra_fechas" id="fFin" name="fFin" required autocomplete="off" placeholder="Fecha final" value="<?= date('d/m/Y'); ?>">
				</div>
			</div>
		</div>
  </div>
	<div class="card-footer text-end">
		<button class="btn btn-sm btn-inverse" id="btnImprimir"><i class="fa-solid fa-table-list"></i> Generar Listado</button>
		<!-- <button type="button" class="btn btn-sm btn-outline-secondary" id="btnExportar"><i class="fa-solid fa-file-excel"></i> Exportar Listado</button> -->
	</div>
</div>

<?php
echo form_close();
?>

<div id="tblResult">

</div>

<script type="text/javascript">
  setTimeout(function cargarconsulta() {
		$(".tra_fechas").datepicker({
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
  });

  function PostBackfrmTransparencia(f,e) {
		e.preventDefault();
		Carga_Metodo(f.action, $(f).serialize(), function generandoListado(data) {
			if (data.status == false) { alerta_emergente(data.mensaje, "warning"); }
			else {
				$('#tblResult').html(data.html);
			}
		},"Generando Listado...");
  	return false;
  }
