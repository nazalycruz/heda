<?php
$attributes = array("id" => "frmConcepto", "name" => "frmConcepto", "class" => "needs-validation", "onsubmit" => "return PostBackfrmGuardaConcepto(this, event);");
echo form_open("catalogos/guarda_concepto", $attributes);
?>

<!-- cc,pp y sp son vitales para la póliza -->

<div class="modal-header">
  <h4 class="modal-title" id="TituloModal"></h4>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
  <div class="card">
    <div class="card-body">
			<div id="alertCampos" class="alert alert-danger fade show"><strong>La Cuenta Contable, la Partida Presupuestal y la Subpartida Presupuestal son vitales para la póliza.</strong></div>
      <div class="row mb-2">
        <input type="hidden" name="idConcepto" id="idConcepto" value="<?= (empty($concepto->Id) ? 0 : $concepto->Id); ?>">
        <div class="col-2">
          <div class="form-group">
            <label for="ec_clave" class="form-label">Clave Recibo</label>
            <input type="text" class="form-control form-control-sm" id="ec_clave" name="ec_clave" value="<?= (empty($concepto->ClaveRecibo) ? '' : $concepto->ClaveRecibo); ?>" autocomplete="off" placeholder="Clave" onkeypress="return onlyDigits(event, this);" required>
					</div>
        </div>
        <div class="col-10">
          <div class="form-group">
            <label for="ec_descripcion" class="form-label">Descripción</label>
            <input type="text" class="form-control form-control-sm" id="ec_descripcion" name="ec_descripcion" value="<?= (empty($concepto->Descripcion) ? '' : $concepto->Descripcion); ?>" autocomplete="off" placeholder="Descripción del Concepto" required>
          </div>
        </div>
      </div>

      <div class="row mb-2">
        <div class="col-2">
          <div class="form-group">
            <label>&nbsp;</label>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="ec_espercepcion" name="ec_espercepcion" value="1" <?= (empty($concepto->EsPercepcion) ? '' : 'checked="checked"'); ?>>
              <label class="custom-control-label form-label" for="ec_espercepcion">¿Es Percepción?</label>
            </div>
          </div>
        </div>
        <div class="col-2">
          <div class="form-group">
            <label>&nbsp;</label>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="ec_isstey" name="ec_isstey" value="1" <?= (empty($concepto->EsPrestamo) ? '' : 'checked="checked"'); ?>>
              <label class="custom-control-label form-label" for="ec_isstey">Del ISSTEY</label>
            </div>
          </div>
        </div>
        <div class="col-2">
          <div class="form-group">
            <label for="ec_frecuencia" class="form-label">Frecuencia</label>
            <input type="text" class="form-control form-control-sm" id="ec_frecuencia" name="ec_frecuencia" value="<?= (empty($concepto->Frecuencia) ? '' : $concepto->Frecuencia); ?>" autocomplete="off" placeholder="Frecuencia" onkeypress="return onlyDigits(event, this);" required>
          </div>
        </div>
        <div class="col-2">
          <div class="form-group">
            <label>&nbsp;</label>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="ec_exento" name="ec_exento" value="1" <?= (empty($concepto->TieneParteExcenta) ? '' : 'checked="checked"'); ?> onclick="CambiaParteExentaConf(this.checked);">
              <label class="custom-control-label form-label" for="ec_exento">Tiene parte exenta</label>
            </div>
          </div>
        </div>
        <div class="col-2">
          <div class="form-group">
            <label for="ec_parteexe" class="form-label">Parte Exenta</label>
            <input type="text" class="form-control form-control-sm ec_decimal" id="ec_parteexe" name="ec_parteexe" value="<?= (empty($concepto->DiasSalMinParteExc) ? '' : $concepto->DiasSalMinParteExc); ?>" autocomplete="off" required <?= (empty($concepto->TieneParteExcenta) ? 'disabled' : ''); ?>>
          </div>
        </div>
        <div class="col-2">
          <div class="form-group">
            <label>&nbsp;</label>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="ec_proporcional" name="ec_proporcional" value="1" <?= (empty($concepto->Calculado) ? '' : 'checked="checked"'); ?>>
              <label class="custom-control-label form-label" for="ec_proporcional">Proporcional</label>
            </div>
          </div>
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-2">
          <div class="form-group">
            <label>&nbsp;</label>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="ec_chkGravado" name="ec_chkGravado" value="1" <?= (empty($concepto->AntesDeImp) ? '' : 'checked="checked"'); ?>>
              <label class="custom-control-label form-label" for="ec_chkGravado">Gravado</label>
            </div>
          </div>
        </div>
        <div class="col-2">
          <div class="form-group">
            <label for="ec_quincena" class="form-label">Quincena</label>
            <input type="text" class="form-control form-control-sm" id="ec_quincena" name="ec_quincena" value="<?= (!isset($concepto->Quincena) ? '' : $concepto->Quincena); ?>" autocomplete="off" placeholder="Quincena"  onkeypress="return onlyDigits(event, this);" required>
          </div>
        </div>
        <div class="col-2">
          <div class="form-group">
            <label>&nbsp;</label>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="ec_pagounico" name="ec_pagounico" value="1" <?= (empty($concepto->PagoUnico) ? '' : 'checked="checked"'); ?>>
              <label class="custom-control-label form-label" for="ec_pagounico">Pago Único</label>
            </div>
          </div>
        </div>
        <div class="col-2">
          <div class="form-group">
            <label for="idTipoConcepto" class="form-label">Tipo de Concepto</label>
            <select id="idTipoConcepto" name="idTipoConcepto" class="form-control ec_catalogos form-control-sm select2-sm" rquired>
              <?= $tipoconcepto; ?>
            </select>
          </div>
        </div>
        <div class="col-3">
          <div class="form-group">
            <label for="idTipoConceptoSAT" class="form-label">Tipo Concepto SAT</label>
            <select id="idTipoConceptoSAT" name="idTipoConceptoSAT" class="form-control ec_catalogos form-control-sm select2-sm">
							<?= $tipoconceptosat; ?>
            </select>
          </div>
        </div>
			</div>
			<div class="row mb-2">
				<div class="col-4">
					<div class="form-group">
						<label for="ec_cuentacont" class="form-label">Cuenta Contable</label>
						<input type="text" class="form-control form-control-sm camposPoliza" id="ec_cuentacont" name="ec_cuentacont" value="<?= (empty($concepto->CuentaContable) ? '' : $concepto->CuentaContable); ?>" autocomplete="off" placeholder="Cuenta Contable">
					</div>
				</div>
				<div class="col-4">
					<div class="form-group">
						<label for="ec_parpres" class="form-label">Partida Presupuestal</label>
						<input type="text" class="form-control form-control-sm camposPoliza" id="ec_parpres" name="ec_parpres" value="<?= (empty($concepto->PartidaPresupuestal) ? '' : $concepto->PartidaPresupuestal); ?>" autocomplete="off" placeholder="Partida Presupuestal">
					</div>
				</div>
				<div class="col-4">
					<div class="form-group">
						<label for="ec_subparpres" class="form-label">SubPartida Presupuestal</label>
						<input type="text" class="form-control form-control-sm camposPoliza" id="ec_subparpres" name="ec_subparpres" value="<?= (empty($concepto->SubPartidaPresupuestal) ? '' : $concepto->SubPartidaPresupuestal); ?>" autocomplete="off" placeholder="SubPartida Presupuestal">
					</div>
				</div>
			</div>
			<div class="row mb-2">
        <div class="col-2">
          <div class="form-group">
            <label for="ec_clavesat" class="form-label">Clave SAT</label>
            <input type="text" class="form-control form-control-sm" id="ec_clavesat" name="ec_clavesat" value="<?= (empty($concepto->ClaveSAT) ? '' : $concepto->ClaveSAT); ?>" autocomplete="off" placeholder="Clave SAT"  onkeypress="return onlyDigits(event, this);" required>
          </div>
        </div>
        <div class="col-3">
          <div class="form-group">
            <label for="ec_clavepres" class="form-label">Clave Presupuestal</label>
            <input type="text" class="form-control form-control-sm" id="ec_clavepres" name="ec_clavepres" value="<?= (empty($concepto->clavePresupuestal) ? '' : $concepto->clavePresupuestal); ?>" autocomplete="off" placeholder="Clave Presupuestal">
          </div>
        </div>
				<div class="col-3">
					<div class="form-group">
						<label>&nbsp;</label>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="ec_chkVisibleAuditoria" name="ec_chkVisibleAuditoria" value="1" <?= (empty($concepto->VisibleAuditoria) ? '' : 'checked="checked"'); ?>>
							<label class="custom-control-label form-label" for="ec_chkVisibleAuditoria">¿Visible Auditoría?</label>
						</div>
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
  $(".ec_decimal").inputmask('decimal',{digits: 2, digitsOptional: false, placeholder: '0.00', rightAlign: false  });

  $(".ec_catalogos").select2({
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

	valida_campos_poliza();

	$('.camposPoliza').on('blur', function(){
    valida_campos_poliza();
  });

});

function valida_campos_poliza() {
	$(".camposPoliza").each(function(index) {
		if ($(this).val().trim().length < 1 || $(this).val() === null){
			$('#alertCampos').show();
			return false;
		}
		else {
			$('#alertCampos').hide();
		}
	});
}

function CambiaParteExentaConf(checked) {
  if (checked == true) { $("#ec_parteexe").prop("disabled", false); }
  else { $("#ec_parteexe").prop("disabled", true); }
}

function PostBackfrmGuardaConcepto(f,e) {
  e.preventDefault();
  var variables = $(f).serialize();
  Carga_Metodo(f.action, variables, function guardandoConcepto(data) {
    if (data.status == false) { alerta_emergente(data.message, "warning"); }
    else {
      alerta_emergente(data.message, "success");
			carga_catalogo('catalogos/carga_catalogo_generico','conceptos','trae_cat_conceptos')
    }
  }, "Guardando...");
}

</script>
