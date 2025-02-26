<div class="modal-header">
  <h4 class="modal-title" id="TituloModal"></h4>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">

  <div class="row">
    <div class="col-6">
      <div class="form-group">
        <label for="pext_concepto"><b>Concepto</b></label>
        <select class="form-control form-control-sm select2-sm pext_catalogo" id="pext_concepto" name="pext_concepto" required>
          <?= $catconceptos; ?>
        </select>
      </div>
    </div>
    <div class="col-6">
      <div class="form-group">
        <label for="pext_monto"><b>Monto</b></label>
        <input type="text" class="form-control form-control-sm pext_currency" id="pext_monto" name="pext_monto" required>
      </div>
    </div>
  </div>
  <div class="row divPercepcion" style="display:none;">
    <div class="col-3">
      <div class="form-group">
        <label>&nbsp;</label>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input ctrlPerc" id="chkGravadoperc" name="chkGravadoperc" value="1" disabled>
          <label class="custom-control-label" for="chkGravadoperc"><b>Gravado</b></label>
        </div>
      </div>
    </div>
    <div class="col-3">
      <div class="form-group">
        <label>&nbsp;</label>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input ctrlPerc" id="pExtParteExe" name="pExtParteExe" value="1" onclick="CambiaParteExentaConf(this.checked);" disabled>
          <label class="custom-control-label" for="pExtParteExe"><b>Tiene Parte Exenta</b></label>
        </div>
      </div>
    </div>
    <div class="col-3">
      <div class="form-group">
        <label for="pExtDias"><b>Días</b></label>
        <input type="text" class="form-control form-control-sm ctrlPerc" id="pExtDias" name="pExtDias" autocomplete="off" required disabled>
      </div>
    </div>
  </div>
  <div class="row divAcreedor" style="display:none;">
    <div class="col-6">
      <div class="form-group">
        <label for="pext_acreedor"><b>Acreedor</b></label>
        <select class="form-control form-control-sm select2-sm cf_catalogos ctrlAcreedor" id="pext_acreedor" name="pext_acreedor" disabled>
        </select>
      </div>
    </div>
    <div class="col-6">
      <div class="form-group">
        <label for="pext_codacreedor"><b>Código</b></label>
        <input type="text" class="form-control form-control-sm codacreedor ctrlAcreedor" id="pext_codacreedor" name="pext_codacreedor" autocomplete="off" readonly disabled>
      </div>
    </div>
  </div>

</div>
<div class="modal-footer">
  <button type="button" class="btn btn-success btn-sm" id="btnAgregarConcepto" title="Agregar concepto" onclick="agrega_concepto_pago_ext();"><i class="fa fa-plus"></i> Agregar</button>
  <button type="button" class="btn btn-default btn-sm" data-bs-dismiss="modal"><i class="far fa-window-close"></i> Cerrar</button>
</div>

<script type="text/javascript">
setTimeout(function cargarconsulta() {
  $("#pext_concepto").select2({
    language: "es",
    placeholder: "Seleccione un Elemento",
    width:'100%',
  }).on("select2:close", function (event) {
      setTimeout(function() {
        $('.select2-container-active').removeClass('select2-container-active');
        $(':focus').blur();
        // dispara_tab_especial(event);
      }, 1);
  })

  <?php if (!empty($idConcepto)): ?>
    carga_concepto();
  <?php endif; ?>

  $(".pext_currency").inputmask('currency',{rightAlign: true, prefix: '$ ', allowMinus: false, max: 400000, shortcuts:'', positionCaretOnClick: "select", 'autoUnmask' : true  });

});

  function carga_concepto() {
    let monto = "<?= (empty($monto) ? '' : $monto); ?>",
        esPercepcion = "<?= (empty($esPercepcion) ? 0 : $esPercepcion); ?>";

    $('#pext_concepto').val(<?= (empty($idConcepto) ? '' : $idConcepto); ?>).select2().trigger('change');
    $('#pext_monto').val(monto);
    if (esPercepcion == 1) {
      let gravado = "<?= (empty($gravado) ? false : true); ?>",
          bParteExenta = "<?= (empty($parteexenta) ? false : true); ?>",
          parteExenta = "<?= (empty($parteexenta) ? '' : $parteexenta); ?>";
      $('#chkGravadoperc').prop('checked', gravado);
      $('#pExtParteExe').prop('checked', bParteExenta);
      $('#pExtDias').prop('disabled',!bParteExenta).val(parteExenta);
    }
  }

  $("#pext_concepto").on("change", function (e) {
    let esPercepcion = $("#pext_concepto option:selected").data('espercepcion'),
        clavePresupuestal = $("#pext_concepto option:selected").data('clavepresupuestal');

    $('#pext_monto').val('');
    if (esPercepcion == 1) {
      $('.divPercepcion').show();
      $(".ctrlPerc").prop("disabled", false);
    }
    else {
      $('.divPercepcion').hide();
      $(".ctrlPerc").prop("disabled", true);
    }

    if (clavePresupuestal != '') { carga_acredores(clavePresupuestal); }
    else {
      $('.divAcreedor').hide();
      $(".ctrlAcreedor").prop("disabled", true);
    }

    return false;
  });

  function carga_acredores(clavePresupuestal) {
    Carga_Metodo("generico/carga_acreedores_por_clave", {clavePresupuestal:clavePresupuestal}, function exito(res) {
      //PENDIENTE: validar respuesta.
      $("#pext_acreedor").html(res.acreedores).select2({
        language: "es",
        placeholder: "Seleccione un Elemento",
        width:'100%',
      }).on("select2:close", function (event) {
          setTimeout(function() {
            $('.select2-container-active').removeClass('select2-container-active');
            $(':focus').blur();
          }, 1);
      });
    }, "Cargando...");
    $('.divAcreedor').show();
    $(".ctrlAcreedor").prop("disabled", false);
  }

  function CambiaParteExentaConf(checked) {
    if (checked == true) { $("#pExtDias").prop("disabled", false); }
    else { $("#pExtDias").prop("disabled", true); }
  }

  function agrega_concepto_pago_ext() {
    if (valida_agregar_concepto()) {
      let tabla = '',
          esPercepcion = $("#pext_concepto option:selected").data('espercepcion'),
          clave = $("#pext_concepto option:selected").data('claverecibo'),
          gravado = $('#chkGravadoperc').is(':checked') ? 1 : 0,
          parteExenta = $('#pExtParteExe').is(':checked') ? 1 : 0,
          btn = '<button type="button" class="btn btn-xs btn-default" onclick="edita_conc_pago_ext(this,'+esPercepcion+');"><i class="fas fa-pencil-alt"></i></button>'+
                '<button type="button" class="btn btn-xs btn-danger" onclick="elimina_conc_pago_ext(this,'+esPercepcion+');"><i class="far fa-trash-alt"></i></button>';

      if (esPercepcion == 1) { tabla = $('.pext_tblPerc').DataTable(); }
      else { tabla = $('#pexttblDeduc').DataTable(); }

      tabla.rows().every(function(rowIdx, tableLoop, rowLoop) {
        if (this.data() != null && this.data()[0] == $("#pext_concepto option:selected").data('idconcepto')) {
          tabla.row(rowIdx).remove().draw();
        }
      });

      tabla.row.add( [
          $('#pext_concepto').val(),
          clave,
          $('#pext_concepto').find(':selected').text(),
          $('#pext_monto').val(),
          formatCurrency($('#pext_monto').val()),
          gravado,
          (gravado == 1 ? '<span class="text-center text-success btn-icon btn-circle btn-xs"><i class="fa fa-check"></i></span>' : ''), //gravado
          $('#pExtDias').val(),
          (parteExenta == 1 ? $('#pExtDias').val() + ' días.' : 0), //parte exenta
          btn
      ] ).draw( false );
      tabla.columns.adjust().draw();
      tabla.responsive.recalc();
      return false;
    }
  }

  function valida_agregar_concepto() {
    let monto = $('#pext_monto').val(),
        concepto = $('#pext_concepto').val();
    if (typeof(concepto) == "undefined" || concepto === "" || concepto == 0) {
      alerta_emergente("Debe seleccionar un concepto.","warning")
      return false;
    }

    if (typeof(monto) == "undefined" || monto === "" || monto == 0) {
      alerta_emergente("Debe escribir un valor en el campo monto.","warning")
      return false;
    }

    return true;
  }
</script>
