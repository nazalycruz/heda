<div class="modal-header">
  <div class="tabbable">
    <ul class="nav nav-pills" role="tablist">
      <?php
      if (!empty($pagoExt)):
      ?>
      <li class="nav-item active">
        <a class="nav-link active f-s-18"  data-toggle="tab" href="#tabPagoExtraordinario">Pago Extraordinario</a>
      </li>
      <?php
      endif;
      ?>
      <li class="nav-item">
        <a class="nav-link f-s-18"  data-toggle="tab" href="#tabPagoElectronico">Pago Electrónico</a>
      </li>
    </ul>
  </div>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>

<div class="modal-body">
  <div class="tab-content">
    <?php
    if (!empty($pagoExt)):
    ?>
    <div class="tab-pane active" id="tabPagoExtraordinario">
      <div class="card mb-2">
        <?php
        $attributes = array("id" => "frmPagoElectronicoExtraordinario", "name" => "frmPagoElectronicoExtraordinario", "onsubmit" => "return PostBackFrmGuardaPagoElectExtr(this, event);");
        echo form_open("pago_extraordinario/actualiza_pago_electronico_extraordinario", $attributes);
        ?>
        <div class="card-body">
          <input type="hidden" name="pext_idPago" id="pext_idPago" value="<?= (empty($pagoExt->IdPagoExt) ? '' : $pagoExt->IdPagoExt); ?>">
          <input type="hidden" name="pext_idEmpleado" id="pext_idEmpleado" value="<?= (empty($pagoExt->IdEmpleado) ? '' : $pagoExt->IdEmpleado); ?>">
          <div class="row">
            <div class="col-2">
              <div class="form-group">
                <label><b>Pago Electrónico</b></label>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="pext_chkENomina" name="pext_chkENomina" value="1" <?= ($pagoExt->ENomina ? 'checked="checked"' : '') ?>>
                  <label class="custom-control-label" for="pext_chkENomina"></label>
                </div>
              </div>
            </div>

            <div class="col-4">
              <div class="form-group">
                <label for="pext_numerocuenta"><b>Número de cuenta</b></label>
                <input type="text" class="form-control form-control-sm f-w-600" id="pext_numerocuenta" name="pext_numerocuenta"  value="<?= $pagoExt->NumeroCuenta; ?>" autocomplete="off" />
              </div>
            </div>

            <div class="col-4">
              <div class="form-group">
                <label for="pext_txtEmisor"><b>Banco</b></label>
                <select class="form-control cf_catalogos form-control-sm select2-sm" id="pext_txtEmisor" name="pext_txtEmisor">
                  <?= $emisoresPagoExt; ?>
                </select>
              </div>
            </div>

            <div class="col-2">
              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="pext_guardaConf" name="pext_guardaConf" value="1">
                  <label class="custom-control-label" for="pext_guardaConf"><b>¿Guarda configuración?</b></label>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="card-footer p-10 text-end">
          <button class="btn btn-sm btn-success text-end" id="btnGuardaPagoElectronicoExtraordinario"><i class="far fa-save"></i> Guardar</button>
        </div>
        <?php
        echo form_close();
        ?>
      </div>
    </div>
    <?php
    endif;
    ?>
    <div class="tab-pane" id="tabPagoElectronico">
      <?= $vw_confPagoElectronico; ?>
    </div>
  </div>
</div>

<div class="modal-footer">
  <button type="button" class="btn btn-default btn-sm" data-bs-dismiss="modal"><i class="far fa-window-close"></i> Cerrar</button>
</div>

<script type="text/javascript">

$(document).ready(function(){
  var tabActiva = "<?php echo (empty($pagoExt) ? 'tabPagoElectronico' : 'tabPagoExtraordinario') ?>";
  $('a[href="#'+tabActiva+'"]').tab('show');
});

function PostBackFrmGuardaPagoElectExtr(f,e) {
  e.preventDefault();
  var variables = $(f).serialize();
  Carga_Metodo(f.action, variables, exito_guarda_pago_elect_extr, "Guardando...");
  return false;
}

function exito_guarda_pago_elect_extr(respuesta) {
  if (respuesta.status == false) {
    alerta_emergente(respuesta.message, "warning");
  }
  else {
    alerta_emergente(respuesta.message,"success");
		ocultamodalGenerica();
    // $('#modGeneral').modal('hide');
  }
  return false;
}

</script>
