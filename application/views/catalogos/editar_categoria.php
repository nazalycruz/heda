<div class="modal-header">
  <h4 class="modal-title" id="TituloModal"></h4>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<?php
$attributes = array("id" => "frmCatCategorias", "name" => "frmCatCategorias", "onsubmit" => "return PostBackFrmGuardaCategoria(this, event);");
echo form_open("catalogos/abc_cat_categorias", $attributes);
?>
<div class="modal-body">
	<div class="card">
		<div class="card-body">
			<input type="hidden" id="cc_idCategoria" name="cc_idCategoria" value="<?= (empty($result_data) ? 0 : $result_data->Id); ?>">
			<input type="hidden" id="cc_claveCategoria" name="cc_claveCategoria" value="<?= (empty($result_data) ? 0 : $result_data->Clave); ?>">
			<div class="row mb-2">
				<div class="col-4">
					<div class="form-group">
						<label for="txtSueldoBase" class="form-label">Sueldo Base</label>
						<input type="text" class="form-control form-control-sm cc_currency" id="txtSueldoBase" name="txtSueldoBase" value="<?= (empty($result_data) ? "" : $result_data->SueldoBase); ?>" required>
					</div>
				</div>
				<div class="col-2">
					<div class="form-group">
						<label>&nbsp;</label>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="cc_checa" name="cc_checa" value="1" <?= (empty($result_data->Checa) ? '' : 'checked="checked"'); ?>>
							<label class="custom-control-label form-label" for="cc_checa">¿Checa?</label>
						</div>
					</div>
				</div>

				<div class="col-3">
					<div class="form-group">
						<label>&nbsp;</label>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="cc_responsable" name="cc_responsable" value="1" <?= (empty($result_data->EsResponsable) ? '' : 'checked="checked"'); ?>>
							<label class="custom-control-label form-label" for="cc_responsable">¿Es Responsable?</label>
						</div>
					</div>
				</div>

				<div class="col-3">
					<div class="form-group">
						<label>&nbsp;</label>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="cc_prestador" name="cc_prestador" value="1" <?= (empty($result_data->EsPrestadorS) ? '' : 'checked="checked"'); ?>>
							<label class="custom-control-label form-label" for="cc_prestador">¿Es Prestador?</label>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-3">
					<div class="form-group">
						<label for="txtAreaAdscripcion" class="form-label">Área de Adscripción</label>
						<input type="text" class="form-control form-control-sm" id="txtAreaAdscripcion" name="txtAreaAdscripcion" maxlength="1" onkeypress="return onlyAlpha(event, this);" value="<?= (empty($result_data) ? "" : $result_data->AreaAdscripcion); ?>" required>
					</div>
				</div>

				<div class="col-3">
					<div class="form-group">
						<label for="txtNivelSalarial" class="form-label">Nivel Salarial</label>
						<input type="text" class="form-control form-control-sm" id="txtNivelSalarial" name="txtNivelSalarial" maxlength="3" onkeypress="return onlyDigits(event, this);" value="<?= (empty($result_data) ? "" : $result_data->NivelSalarial); ?>" required>
					</div>
				</div>

				<div class="col">
					<div class="form-group">
						<label for="cc_fInicio" class="form-label">Fecha de Inicio</label>
						<input type="text" class="form-control form-control-sm cc_fechas" id="cc_fInicio" name="cc_fInicio" required autocomplete="off" placeholder="Fecha inicial" value="<?= date('d/m/Y'); ?>">
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
	  $(".cc_currency").inputmask('currency',{rightAlign: true, allowMinus: false, removeMaskOnSubmit: true, undoOnEscape:false});

		$(".cc_fechas").datepicker({
			format: "dd/mm/yyyy",
			weekStart: 1,
			maxViewMode: 3,
			language: "es",
			orientation: "bottom auto",
			autoclose: true,
			todayBtn: "linked",
			todayHighlight: true,
		}).on("hide", function(e) {
			// dispara_tab_especial(e);
		}).inputmask({'alias': 'datetime', 'inputFormat': 'dd/mm/yyyy', 'placeholder': 'dd/mm/yyyy', 'min':'01/01/1900'});
	});

	function PostBackFrmGuardaCategoria(f,e) {
		e.preventDefault();
		Carga_Metodo(f.action, $(f).serialize() + '&accion=actualizar' , function finaliza_guardado(respuesta) {
			if (respuesta.status == false) {
				alerta_emergente(respuesta.message, "warning");
			}
			else {
				alerta_emergente(respuesta.message,"success");
				carga_catalogo('catalogos/abc_cat_categorias','categorias','traer_cat_varios_filtros');
			}
			return false;
		}, "Guardando...");
		return false;
	}

</script>
