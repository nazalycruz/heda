<div class="modal-header">
  <h4 class="modal-title" id="TituloModal"></h4>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<?php
$attributes = array("id" => "frmCatDireccionAdministrativa", "name" => "frmCatDireccionAdministrativa", "onsubmit" => "return PostBackFrmGuardaDireccionAdmva(this, event);");
echo form_open("catalogos/abc_cat_diradmvas", $attributes);
?>
<div class="modal-body">
	<div class="card">
		<div class="card-body">
			<input type="hidden" id="cu_idUnidadAdmva" name="cda_idDireccionAdmva" value="<?= (empty($result_data) ? 0 : $result_data->IdDireccion); ?>">
			<div class="row mb-2">
				<div class="col-2">
					<div class="form-group">
						<label for="txtClave" class="form-label">Clave</label>
						<input type="text" class="form-control form-control-sm" id="txtClave" name="txtClave" value="<?= (empty($result_data) ? "" : $result_data->claveDireccion); ?>" autocomplete="off" placeholder="Clave de la Dirección Administrativa" onkeypress="return onlyDigits(event, this);" required>
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="txtDireccionAdmva" class="form-label">Dirección Administrativa</label>
						<input type="text" class="form-control form-control-sm" id="txtDireccionAdmva" name="txtDireccionAdmva" value="<?= (empty($result_data) ? "" : $result_data->Descripcion); ?>" autocomplete="off" placeholder="Nombre de la Dirección Administrativa" required>
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

	function PostBackFrmGuardaDireccionAdmva(f,e) {
		e.preventDefault();
		Carga_Metodo(f.action, $(f).serialize() + '&accion=guardar' , function finaliza_guardado(respuesta) {
			if (respuesta.status == false) {
				alerta_emergente(respuesta.message, "warning");
			}
			else {
				alerta_emergente(respuesta.message,"success");
				carga_catalogo('catalogos/abc_cat_diradmvas','direcciones_admvas','traer_cat_varios_filtros');
			}
			return false;
		}, "Guardando...");
		return false;
	}

</script>
