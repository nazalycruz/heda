<div class="modal-header">
  <h4 class="modal-title" id="TituloModal"></h4>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<?php
$attributes = array("id" => "frmCatDependencias", "name" => "frmCatDependencias", "onsubmit" => "return PostBackFrmGuardaDependencia(this, event);");
echo form_open("catalogos/abc_cat_dependencias", $attributes);
?>
<div class="modal-body">
	<div class="card">
		<div class="card-body">
			<input type="hidden" id="cd_idDependencia" name="cd_idDependencia" value="<?= (empty($result_data) ? 0 : $result_data->Id); ?>">
			<div class="row mb-2">
				<div class="col-2">
					<div class="form-group">
						<label for="txtClave" class="form-label">Clave</label>
						<input type="text" class="form-control form-control-sm" id="txtClave" name="txtClave" value="<?= (empty($result_data) ? "" : $result_data->Clave); ?>" disabled>
					</div>
				</div>
				<div class="col-4">
					<div class="form-group">
						<label for="txtDependencia" class="form-label">Dependencia</label>
						<input type="text" class="form-control form-control-sm" id="txtDependencia" name="txtDependencia" value="<?= (empty($result_data) ? "" : $result_data->Descripcion); ?>" disabled>
					</div>
				</div>
				<div class="col-4">
					<div class="form-group">
						<label for="idUniAdmvas" class="form-label">Unidad Administrativa</label>
						<select id="idUniAdmvas" name="idUniAdmvas" class="form-control form-control-sm select2-sm" required>
							<?= $cat_unidadadmva; ?>
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
  $("#idUniAdmvas").select2({
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

	function PostBackFrmGuardaDependencia(f,e) {
		e.preventDefault();
		Carga_Metodo(f.action, $(f).serialize() + '&accion=actualizar' , function finaliza_guardado(respuesta) {
			if (respuesta.status == false) {
				alerta_emergente(respuesta.message, "warning");
			}
			else {
				alerta_emergente(respuesta.message,"success");
				carga_catalogo('catalogos/abc_cat_dependencias','dependencias','traer_cat_varios_filtros');
			}
			return false;
		}, "Guardando...");
		return false;
	}

</script>
