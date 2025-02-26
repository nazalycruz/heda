<?php
$attributes = array("id" => "frmGuardaPercDeducCategoria", "name" => "frmGuardaPercDeducCategoria", "onsubmit" => "return GuardaPercepcionDeduccionCategoria(this, event);");
echo form_open("configuraciones/guardar_configuracion_categoria", $attributes);
?>

<div class="alert alert-secondary fade show">
	<strong>Agregar <?= $esPercepcion == 1 ? ' Percepción' : 'Deducción'; ?></strong>
</div>
<div id="cfc_errores" class="alert alert-danger" style="display:none;"></div>
<div class="card-body">
  <div class="row mb-2">
    <input type="hidden" id="percepcion" name="percepcion" value="<?= $esPercepcion; ?>">
    <input type="hidden" id="cfc_idConfCategoria" name="cfc_idConfCategoria" value="<?= $idCategoria; ?>">
		<input type="hidden" id="cfc_idTipoNomina" name="cfc_idTipoNomina" value="<?= $idTipoNomina; ?>">
    <div class="col-4">
      <div class="form-group">
        <label for="cfc_concepto" class="form-label">Concepto</label>
        <select class="form-control form-control-sm select2-sm cfc_catalogos" id="cfc_concepto" name="cfc_concepto" required data-parsley-required="true" data-parsley-errors-container="#parsley-cfc_concepto">
          <?= $catconceptos;  ?>
        </select>
				<div id="parsley-cfc_concepto"></div>
      </div>
    </div>
    <div class="col-2">
      <div class="form-group">
        <label for="cfc_monto" class="form-label">Monto</label>
        <input type="text" class="form-control form-control-sm cfc_currency" id="cfc_monto" name="cfc_monto" autocomplete="off">
      </div>
    </div>
		<div class="col-2">
      <div class="form-group">
        <label>&nbsp;</label>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="chkSB" name="chkSB" value="1">
          <label class="custom-control-label form-label" for="chkSB">Sueldo Base</label>
        </div>
      </div>
    </div>
		<div class="col-2">
      <div class="form-group">
        <label>&nbsp;</label>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="chkComp" name="chkComp" value="1">
          <label class="custom-control-label form-label" for="chkComp">Compensación</label>
        </div>
      </div>
    </div>
		<div class="col-2">
      <div class="form-group">
        <label>&nbsp;</label>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="chkPermanente" name="chkPermanente" value="1" onclick="CambiaEstadoPermanenteConfCat(this.checked);">
          <label class="custom-control-label form-label" for="chkPermanente" class="form-label">Permanente</label>
        </div>
      </div>
    </div>
	</div>
  <div class="row mb-3">
    <div class="col-2">
      <div class="form-group">
        <label for="cfc_vecesaplicar" class="form-label">Veces a Aplicar</label>
        <input type="text" class="form-control form-control-sm" id="cfc_vecesaplicar" name="cfc_vecesaplicar" autocomplete="off" onkeypress="return onlyDigits(event, this);" maxlength="3" onblur="CambiaVecesAplicarConfCat(this)" value="1">
      </div>
    </div>
    <div class="col-2">
      <div class="form-group">
        <label for="cfc_aplicadas" class="form-label">Aplicadas</label>
        <input type="text" class="form-control form-control-sm" id="cfc_aplicadas" name="cfc_aplicadas" autocomplete="off" onkeypress="return onlyDigits(event, this);" maxlength="3" value="0">
      </div>
    </div>
		<div class="col-2">
			<div class="form-group">
				<label for="cfc_diasbase" class="form-label">Total de Días</label>
				<input type="text" class="form-control form-control-sm" id="cfc_diasbase" name="cfc_diasbase" autocomplete="off" onkeypress="return onlyDigits(event, this);" value="0">
			</div>
		</div>
    <div class="col-2">
      <div class="form-group">
        <label>&nbsp;</label>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input form-label" id="chkGravado" name="chkGravado" value="0" disabled>
          <label class="custom-control-label" for="chkGravado">Gravado</label>
        </div>
      </div>
    </div>
    <div class="col-2">
      <div class="form-group">
        <label>&nbsp;</label>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="chkParteExe" name="chkParteExe" value="1" onclick="CambiaParteExentaConfCat(this.checked,true);">
          <label class="custom-control-label form-label" for="chkParteExe">Tiene Parte Exenta</label>
        </div>
      </div>
    </div>
    <div class="col-2">
      <div class="form-group">
        <label for="cfc_parteexe" class="form-label">Parte Exenta</label>
        <input type="text" class="form-control form-control-sm cfc_decimal" id="cfc_parteexe" name="cfc_parteexe" autocomplete="off" required>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-6">
      <div class="form-group">
        <label for="cfc_acreedor" class="form-label">Acreedor</label>
        <select class="form-control form-control-sm select2-sm cfc_catalogos" id="cfc_acreedor" name="cfc_acreedor">
          <?= empty($catacreedores) ? '' : $catacreedores; ?>
        </select>
      </div>
    </div>
    <div class="col-6">
      <div class="form-group">
        <label for="cfc_codacreedor" class="form-label">Código</label>
        <input type="text" class="form-control form-control-sm codacreedor" id="cfc_codacreedor" name="cfc_codacreedor" autocomplete="off" readonly>
      </div>
    </div>
  </div>

</div>
<div class="card-footer text-end">
  <button class="btn btn-success btn-sm" id="btnAgregarConcepto" title="Agregar concepto"><i class="fa fa-plus"></i> Agregar</button>
	<button type="button" onclick="cancelar_guardado();" class="btn btn-default btn-sm" id="btnCancelarGuardar" title="Cancelar Guardado"><i class="fa-solid fa-angles-left"></i> Cancelar</button>
</div>
<?php
echo form_close();
?>

<script type="text/javascript">
  $(document).ready(function(){
		$('#frmGuardaPercDeducCategoria').parsley();
    $(".cfc_currency").inputmask('currency',{rightAlign: true, prefix: '$ '  });
    $(".cfc_decimal").inputmask('decimal',{digits: 2, digitsOptional: false, placeholder: '0.00', rightAlign: false  });

    Inputmask("#-#-#-#-####-####-##-##-##-#####", {}).mask(".codacreedor");

    $(".cfc_catalogos").select2({
      language: "es",
      placeholder: "Seleccione un Elemento",
      width:'100%',
    }).on("select2:close", function (event) {
        setTimeout(function() {
          $('.select2-container-active').removeClass('select2-container-active');
          $(':focus').blur();
          dispara_tab_especial(event);
        }, 1);
    });

		selectRefresh($(".cfc_catalogosAcreedor"));
  });

	function selectRefresh($sel) {
		$sel.select2({
			language: "es",
			placeholder: "Seleccione un Elemento",
			width:'100%',
			dropdownParent: $('#modGeneral .modal-content'),
		}).on("select2:close", function (event) {
				setTimeout(function() {
					$('.select2-container-active').removeClass('select2-container-active');
					$(':focus').blur();
					dispara_tab_especial(event);
				}, 1);
		});
	}

	function cancelar_guardado() {
		$('#frmGuardaPercDeducCategoria').parsley().reset();
		$(".main-cat").prop("disabled", false);
		$("#card-agrega-concepto").hide();
		$("#card-perc-deduc").show();
	}

	function CambiaParteExentaConfCat(checked) {
	  if (checked == true) { $("#cfc_parteexe").prop("disabled", false); }
	  else {
			$("#cfc_parteexe").val(0);
			$("#cfc_parteexe").prop("disabled", true);
		}
	}

	function CambiaEstadoPermanenteConfCat(checked){
    if (checked == true) {
      $("#cfc_vecesaplicar").val(0);
    }
    else {
			$("#cfc_vecesaplicar").val(1);
    }
  }

	function CambiaVecesAplicarConfCat(obj) {
		let valor = $(obj).val();
		if (valor > 0) {
			$('#chkPermanente').prop('checked', false);
		}
	}

	$("#cfc_concepto").change(function(e) {
		let selectedItem = $(this).val();
				gravado = $('option:selected',this).data("antesdeimp"),
				tieneparteexe = $('option:selected',this).data("tieneparteexcenta"),
				parteexe = $('option:selected',this).data("diassalminparteexc");
		$('#chkGravado').prop("checked",(gravado == 1 ? true : false));
		$('#chkGravado').val(gravado);
		$('#cfc_parteexe').val(parteexe);
		$('#chkParteExe').prop("checked",(tieneparteexe == 1 ? true : false));
		CambiaParteExentaConfCat((tieneparteexe == 1 ? true : false));
	});
</script>
