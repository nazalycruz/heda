<div class="modal-header">
  <h4 class="modal-title" id="TituloModal"></h4>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<?php
$attributes = array("id" => "frmCatUnidadAdministrativa", "name" => "frmCatUnidadAdministrativa", "onsubmit" => "return PostBackFrmGuardaUnidadAdmva(this, event);");
echo form_open("catalogos/abc_cat_uniadmvas", $attributes);
?>
<div class="modal-body">
	<div class="card">
		<div class="card-body">
			<input type="hidden" id="cu_idUnidadAdmva" name="cu_idUnidadAdmva" value="<?= (empty($result_data) ? 0 : $result_data->IdUniAdmvas); ?>">
			<div class="row mb-2">
				<div class="col-2">
					<div class="form-group">
						<label for="txtClave" class="form-label">Clave</label>
						<input type="text" class="form-control form-control-sm" id="txtClave" name="txtClave" value="<?= (empty($result_data) ? "" : $result_data->claveUniAdmvas); ?>" autocomplete="off" placeholder="Clave de la Unidad Administrativa" onkeypress="return onlyDigits(event, this);" required>
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="txtUnidadAdmva" class="form-label">Unidad Administrativa</label>
						<input type="text" class="form-control form-control-sm" id="txtUnidadAdmva" name="txtUnidadAdmva" value="<?= (empty($result_data) ? "" : $result_data->Descripcion); ?>" autocomplete="off" placeholder="Nombre de la Unidad Administrativa" required>
					</div>
				</div>
				<div class="col-4">
					<div class="form-group">
						<label for="idDirUniAdmvas" class="form-label">Dirección Administrativa</label>
						<select id="idDirUniAdmvas" name="idDirUniAdmvas" class="form-control form-control-sm select2-sm" required>
							<?= $cat_diradmva; ?>
						</select>
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
	  $("#idDirUniAdmvas").select2({
	    language: "es",
	    placeholder: "Seleccione un Elemento",
	    width:'100%',
			dropdownCssClass: "increasedzindexclass",
			dropdownParent: $('#modGeneral')
	  }).on("select2:close", function (event) {
	      setTimeout(function() {
	        $('.select2-container-active').removeClass('select2-container-active');
	        $(':focus').blur();
	        dispara_tab_especial(event);
	      }, 1);
	  });
	});

	function PostBackFrmGuardaUnidadAdmva(f,e) {
		e.preventDefault();
		Carga_Metodo(f.action, $(f).serialize() + '&accion=guardar' , function finaliza_guardado(respuesta) {
			if (respuesta.status == false) {
				alerta_emergente(respuesta.message, "warning");
			}
			else {
				alerta_emergente(respuesta.message,"success");
				carga_catalogo('catalogos/abc_cat_uniadmvas','unidades_admvas','traer_cat_varios_filtros');
			}
			return false;
		}, "Guardando...");
		return false;
	}

</script>
