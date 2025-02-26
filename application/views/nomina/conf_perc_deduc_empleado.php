<div class="modal-header">
  <h4 class="modal-title" id="TituloModal"></h4>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
  <?= $vw_confEmpleado; ?>
</div>

<div class="modal-footer">
  <button type="button" class="btn btn-default" onclick="cierra_modal_configuracion();" id="btnCerrar"><i class="far fa-window-close"></i> Cerrar</button>
  <button type="button" class="btn btn-default" id="btnRegresar" name="btnRegresar" onclick="regresar_principal();" style="display:none;"><i class="far fa-window-close"></i> Cerrar</button>
</div>
