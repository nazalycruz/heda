<div class="modal-header">
  <h4 class="modal-title" id="TituloModal"></h4>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<?php
$attributes = array("id" => "frmCatAcreedores", "name" => "frmCatAcreedores", "onsubmit" => "return PostBackFrmGuardaAcreedor(this, event);");
echo form_open("catalogos/abc_cat_acreedores", $attributes);
?>
<div class="modal-body">
	<div class="card">
		<div class="card-body">
			<input type="hidden" id="ca_idAcreedor" name="ca_idAcreedor" value="<?= (empty($result_data) ? 0 : $result_data->Id); ?>">
			<div class="row mb-2">
				<div class="col-4">
					<div class="form-group">
						<label for="txtCodigo" class="form-label">Código</label>
						<input type="text" class="form-control form-control-sm" id="txtCodigo" name="txtCodigo" value="<?= (empty($result_data) ? "" : $result_data->CodigoAcreedor); ?>" placeholder="Código del Acreedor" required>
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="txtAcreedor" class="form-label">Acreedor</label>
						<input type="text" class="form-control form-control-sm" id="txtAcreedor" name="txtAcreedor" value="<?= (empty($result_data) ? "" : $result_data->Acreedor); ?>" placeholder="Nombre del Acreedor" required>
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
	function PostBackFrmGuardaAcreedor(f,e) {
		e.preventDefault();
		Carga_Metodo(f.action, $(f).serialize() + '&accion=guardar' , function finaliza_guardado(respuesta) {
			if (respuesta.status == false) {
				alerta_emergente(respuesta.message, "warning");
			}
			else {
				alerta_emergente(respuesta.message,"success");
				carga_catalogo('catalogos/abc_cat_acreedores','acreedores','traer_cat_varios_filtros');
			}
			return false;
		}, "Guardando...");
		return false;
	}

</script>
