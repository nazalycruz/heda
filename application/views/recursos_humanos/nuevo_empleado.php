<?php
$attributes = array("id" => "frmContrato", "name" => "frmContrato", "onsubmit" => "return PostBackFrmGuardaContrato(this, event);");
echo form_open("movimientos/guarda_nuevo_empleado", $attributes);
?>
<div class="modal-header">
  <h4 class="modal-title" id="TituloModal"></h4>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>

<div class="modal-body">
	<div class="card">
		<div class="card-body">
			<div class="row">
				<div class="col-2">
					<div class="form-group">
						<label for="txtClaveNE" class="form-label">Clave</label>
						<input type="text" class="form-control form-control-sm" id="txtClaveNE" name="txtClaveNE" onkeypress="return dispara_tab(event, this);" placeholder="Clave" required value="<?= (empty($empleado) ? '' : $empleado->TipoContra); ?>" readonly>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal-footer">
	<button class="btn btn-success btn-sm" title="Guardar" id="btnGuardarNuevoEmpleado" name="btnGuardarNuevoEmpleado"><i class="far fa-save"></i> Guardar</button>
  <button type="button" class="btn btn-default btn-sm" data-bs-dismiss="modal"><i class="far fa-window-close"></i> Cerrar</button>
</div>
<?php
echo form_close();
?>
