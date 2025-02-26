<!-- VISTA OBSOLETA - REVISAR -->
<div class="modal-header">
  <h4 class="modal-title" id="TituloModal"></h4>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
  <div class="card">
    <div class="card-body">

      <div class="row">
        <input type="hidden" id="percepcion" name="percepcion" value="<?= $percepcion; ?>">
        <input type="hidden" id="cf_idConfCategoria" name="cf_idConfCategoria" value="<?= $idCategoria; ?>">
        <div class="col-7">
          <div class="form-group">
            <label for="cf_conceptoperc" class="form-label">Concepto</label>
            <select class="form-control form-control-sm select2-sm cf_catalogos" id="cf_concepto" name="cf_concepto" required>
              <?= $catconceptos;  ?>
            </select>
          </div>
        </div>
        <div class="col-3">
          <div class="form-group">
            <label for="cf_monto" class="form-label">Monto</label>
            <input type="text" class="form-control form-control-sm cf_currency" id="cf_montoperc" name="cf_monto" autocomplete="off" required>
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
      </div>
      <div class="row">
        <div class="col-2">
          <div class="form-group">
            <label>&nbsp;</label>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="chkPermanenteperc" name="chkPermanente" value="1" onclick="CambiaEstadoPermanente(this.checked,true);">
              <label class="custom-control-label form-label" for="chkPermanenteperc">Permanente</label>
            </div>
          </div>
        </div>
        <div class="col-2">
          <div class="form-group">
            <label for="cf_vecesaplicar" class="form-label">Veces a Aplicar</label>
            <input type="text" class="form-control form-control-sm" id="cf_vecesaplicarperc" name="cf_vecesaplicar" autocomplete="off" onkeypress="return onlyDigits(event, this);" maxlength="3" onblur="CambiaVecesAplicar(this,true)" value="1">
          </div>
        </div>
        <div class="col-2">
          <div class="form-group">
            <label for="cf_aplicadas" class="form-label">Aplicadas</label>
            <input type="text" class="form-control form-control-sm" id="cf_aplicadasperc" name="cf_aplicadas" autocomplete="off" onkeypress="return onlyDigits(event, this);" maxlength="3" value="0">
          </div>
        </div>
        <div class="col-3">
          <div class="form-group text-end">
            <label>&nbsp;</label>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="chkGravadoperc" name="chkGravado" value="1" disabled >
              <label class="custom-control-label form-label" for="chkGravadoperc">Gravado</label>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="form-group">
            <label>&nbsp;</label>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="chkParteExeperc" name="chkParteExe" value="1" onclick="CambiaParteExenta(this.checked,true);" >
              <label class="custom-control-label form-label" for="chkParteExeperc">Tiene Parte Exenta</label>
            </div>
          </div>
        </div>
        <div class="col-2">
          <div class="form-group">
            <label for="cf_parteexeperc" class="form-label">Parte Exenta</label>
            <input type="text" class="form-control form-control-sm cf_decimal" id="cf_parteexeperc" name="cf_parteexe" autocomplete="off" required disabled>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-5">
          <div class="form-group">
            <label for="cf_acreedor" class="form-label">Acreedor</label>
            <select class="form-control form-control-sm select2-sm cf_catalogos" id="cf_acreedorperc" name="cf_acreedor">
              <?= $catacreedores; ?>
            </select>
          </div>
        </div>
        <div class="col-7">
          <div class="form-group">
            <label for="cf_codacreedor" class="form-label">Código</label>
            <input type="text" class="form-control form-control-sm codacreedor" id="cf_codacreedorperc" name="cf_codacreedor" autocomplete="off" readonly>
          </div>
        </div>
      </div>

    </div>
  </div>

</div>

<div class="modal-footer">
  <button type="button" class="btn btn-success btn-sm" id="btnAgregarConcepto" title="Agregar concepto" onclick="agrega_concepto();"><i class="fa fa-plus"></i> Aceptar</button>
  <button type="button" class="btn btn-default btn-sm" data-bs-dismiss="modal"><i class="far fa-window-close"></i> Cerrar</button>
</div>


<script type="text/javascript">
  $(document).ready(function(){
    $("chkGravadoperc").prop.disable(true);
    $(".cf_currency").inputmask('currency',{rightAlign: true, prefix: '$ '  });
    $(".cf_decimal").inputmask('decimal',{digits: 2, digitsOptional: false, placeholder: '0.00', rightAlign: false  });

    Inputmask("#-#-#-#-####-####-##-##-##-#####", {}).mask(".codacreedor");

    // $(".cf_catalogos").select2({
    //   language: "es",
    //   placeholder: "Seleccione un Elemento",
    //   width:'100%',
    // }).on("select2:close", function (event) {
    //     setTimeout(function() {
    //       $('.select2-container-active').removeClass('select2-container-active');
    //       $(':focus').blur();
    //       dispara_tab_especial(event);
    //     }, 1);
    // });

		$('.cf_catalogos').each(function () {
			$(this).select2({
	      language: "es",
	      placeholder: "Seleccione un Elemento",
	      width:'100%',
				dropdownParent: $(this).parent(),
	    }).on("select2:close", function (event) {
	        setTimeout(function() {
	          $('.select2-container-active').removeClass('select2-container-active');
	          $(':focus').blur();
	          dispara_tab_especial(event);
	        }, 1);
	    });
			// $(this).select2({
			// 	language: "es",
			// 	width:'100%',
			// 	placeholder: "Selecciona un elemento",
			// 	minimumResultsForSearch: -1,
			// 	dropdownParent: $(this).parent(),
			// });
		})

  });

  function agrega_concepto() {

  }
</script>
