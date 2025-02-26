<?php
$attributes = array("id" => "frmDiaFestivo", "name" => "frmDiaFestivo", "class" => "needs-validation", "onsubmit" => "return PostBackfrmGuardaDiaFestivo(this, event);");
echo form_open("catalogos/guarda_diafestivo", $attributes);
?>
<div class="modal-header">
  <h4 class="modal-title" id="TituloModal"></h4>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>

<div class="modal-body">
  <div class="card">
    <div class="card-body">
      <div class="row mb-2">
				<input type="hidden" name="idDiaFestivo" id="idDiaFestivo" value="<?= (empty($diaFestivo->DiaID) ? 0 : $diaFestivo->DiaID); ?>">
				<div class="col-4">
					<div class="form-group">
						<label for="edf_fecha" class="form-label">Fecha Festiva</label>
						<input type="text" class="form-control form-control-sm" id="edf_fecha" name="edf_fecha" value="<?= (empty($diaFestivo->FechaFestiva) ? '' : cambiaf_a_normal($diaFestivo->FechaFestiva)); ?>" autocomplete="off" placeholder="Fecha" required>
					</div>
				</div>
				<div class="col-8">
					<div class="form-group">
						<label for="edf_descripcion" class="form-label">Descripción</label>
						<input type="text" class="form-control form-control-sm" id="edf_descripcion" name="edf_descripcion" value="<?= (empty($diaFestivo->Descripcion) ? '' : $diaFestivo->Descripcion); ?>" autocomplete="off" placeholder="Descripción del día festivo" required>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal-footer">
  <button class="btn btn-success btn-sm"><i class="far fa-save"></i> Guardar</button>
  <button type="button" class="btn btn-default btn-sm" data-bs-dismiss="modal"><i class="far fa-window-close"></i> Cerrar</button>
</div>
<?php
echo form_close();
?>


<script type="text/javascript">

$(document).ready(function(){
	$("#edf_fecha").datepicker({
		format: "dd/mm/yyyy",
		weekStart: 1,
		maxViewMode: 3,
		language: "es",
		orientation: "bottom auto",
		autoclose: true,
		todayBtn: "linked",
		todayHighlight: true,
	}).on("hide", function(e) {
		dispara_tab_especial(e);
	}).inputmask({'alias': 'datetime', 'inputFormat': 'dd/mm/yyyy', 'placeholder': 'dd/mm/yyyy', 'min':'01/01/1900'});

	// var minDate = new Date(new Date().getFullYear(), 0, 1);
	// $('#edf_fecha').datepicker('setStartDate', minDate);
});

function PostBackfrmGuardaDiaFestivo(f,e) {
  e.preventDefault();
  var variables = $(f).serialize();
  Carga_Metodo(f.action, variables, function guardando(data) {
    if (data.status == false) { alerta_emergente(data.message, "warning"); }
    else {
      alerta_emergente(data.message, "success");
			carga_catalogo('catalogos/carga_catalogo_generico','dias_festivos','traer_cat_varios_filtros')
    }
  }, "Guardando...");
}

</script>
