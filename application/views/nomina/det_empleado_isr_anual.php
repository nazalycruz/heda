<div class="modal-header">
  <h4 class="modal-title" id="TituloModal"></h4>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>

<div class="modal-body">
  <div class="card mb-2">
    <div class="card-body">
      <?php
      // var_dump($empleado[0]);
       ?>
      <input type="hidden" name="ia_idEmpleado" id="ia_idEmpleado" value="<?= $empleado[0]->idEmpleado; ?>">
      <input type="hidden" name="ia_anio" id="ia_anio" value="<?= $anio; ?>">
      <div class="row">
        <div class="col-2">
          <div class="form-group">
            <label for="ia_credencial"><b>Credencial</b></label>
            <input type="text" class="form-control form-control-sm" id="ia_credencial" readonly value="<?= $empleado[0]->Credencial; ?>">
          </div>
        </div>
        <div class="col-10">
          <div class="form-group">
            <label for="ia_empleado"><b>Empleado</b></label>
            <input type="text" class="form-control form-control-sm" id="ia_empleado" name="ia_empleado" value="<?= $empleado[0]->Empleado; ?>" readonly>
          </div>
        </div>
      </div>

      <div class="row mb-0">
        <div class="col-6">
          <div class="form-group">
            <label for="ia_categoria"><b>Categoría</b></label>
            <input type="text" class="form-control form-control-sm" id="ia_categoria" name="ia_categoria" value="<?= $empleado[0]->Categoria; ?>" readonly>
          </div>
        </div>
        <div class="col-6">
          <div class="form-group">
            <label for="ia_dependencia"><b>Dependencia</b></label>
            <input type="text" class="form-control form-control-sm" id="ia_dependencia" name="ia_dependencia" value="<?= $empleado[0]->Dependencia; ?>" readonly>
          </div>
        </div>
      </div>

      <div class="row mb-0" >
        <div class="col-6">
          <div class="form-group">
            <label for="ia_calculado"><b>Impuesto Anual Calculado</b></label>
            <input type="text" class="form-control form-control-sm nom_currency" id="ia_calculado" name="ia_calculado" value="<?= $empleado[0]->ImpuestoAnualCalculado; ?>" readonly>
          </div>
        </div>
        <div class="col-6">
          <div class="form-group">
            <label for="ia_pagado"><b>Impuesto Pagado</b></label>
            <input type="text" class="form-control form-control-sm nom_currency" id="ia_pagado" name="ia_pagado" value="<?= $empleado[0]->ImpuestoPagado; ?>" readonly>
          </div>
        </div>
      </div>

    </div>
  </div>
  <table id="tblDetISRAnual" class="table table-bordered" cellspacing="0" width="100%">
     <thead>
       <tr>
         <th></th>
         <th>Concepto</th>
         <th>Monto Gravado</th>
       </tr>
     </thead>
     <tbody id="tbl_dataDetISRAnual">
       <?php
       foreach ($empleado as $item) {
         if( $item->MontoGravadoPorConcepto > 0 ){
        ?>
        <tr>
          <td><?= $item->idConcepto; ?></td>
          <td><?= $item->Concepto; ?></td>
          <td class="with-form-control">
            <div class="input-group">
              <input type="text" name="txtMontoGravado_<?= $item->idConcepto; ?>" id="txtMontoGravado_<?= $item->idConcepto; ?>" class="form-control form-control-sm no-border nom_currency" value="<?= $item->MontoGravadoPorConcepto; ?>" />
              <button type="button" class="btn btn-xs btn-success" onclick="guarda_concepto_gravado(this);"><i class="far fa-save"></i></button>
            </div>
          </td>
        </tr>
      <?php
        }
       }
        ?>
     </tbody>
   </table>
</div>

<div class="modal-footer">
  <button type="button" class="btn btn-default btn-sm" data-bs-dismiss="modal"><i class="far fa-window-close"></i> Cerrar</button>
</div>

<script type="text/javascript">
var tablaIA = '';

setTimeout(function FuncionesIniciales(){
  if ( !$.fn.dataTable.isDataTable( '#tblDetISRAnual' ) ) {
    tablaIA = $('#tblDetISRAnual').DataTable({
      initComplete: function() {
        tablaIA.columns.adjust().draw();
        tablaIA.responsive.recalc();
      },
      language: {
        "url": "assets/plugins/DataTables/Spanish.json",
      },
      dom: 't',
      responsive: true,
      paging: false,
      columnDefs: [
        { targets: '_all', className: "dt-head-center" },
        { targets:[0],visible: false,orderable:false,searchable:false, }
      ],
    });
  }

  $(".nom_currency").inputmask('currency',{rightAlign: true, prefix: '$ ', allowMinus: false, max: 400000, shortcuts:'' });
});

function guarda_concepto_gravado(btn) {
  var idEmpleado  = $('#ia_idEmpleado').val(),
      anio        = $('#ia_anio').val(),
      data        = tablaIA.row( $(btn).parents('tr') ).data()
      idConcepto  = data[0],
      monto = $('#txtMontoGravado_'+idConcepto).val();

  Carga_Metodo("<?=base_url();?>nomina/guarda_ajuste_impuesto_empleado", {idEmpleado:idEmpleado,anio:anio,idConcepto:idConcepto,monto:monto}, e_guarda_ajuste_impuesto_empleado,"Guardando...");
  return false;
}


function e_guarda_ajuste_impuesto_empleado(respuesta) {
  if( respuesta.status == false ) {
    alerta_emergente(respuesta.message,"warning");
  }
  else{
    $('#ia_calculado').val(respuesta.empleado[0].ImpuestoAnualCalculado);
    $('#ia_pagado').val(respuesta.empleado[0].ImpuestoPagado);
    alerta_emergente(respuesta.message,"success");
  }
  return false;
}

</script>
