<div class="modal-header">
  <h4 class="modal-title" id="TituloModal"></h4>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>

<div class="modal-body">
  <div class="card mb-2">
    <div class="card-body">
      <div class="row">
        <div class="col-md-12">
          <?php
          if ( !empty($impuestos) ) {
          ?>
            <table id="tblDetImpuestos" class="table table-bordered table-condensed" cellspacing="0" width="100%" style="display:none;">
              <thead>
                <tr>
                  <th>Ingresos</th>
                  <th>Excedente</th>
                  <th>Impuesto Marginal</th>
                  <th>Impuesto Bruto</th>
                  <th>ISR</th>
                  <th class="no-sort"></th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($impuestos as $row) {
                ?>
                <tr>
                  <td><?= $row->Ingresos; ?></td>
                  <td><?= $row->Excedente; ?></td>
                  <td><?= $row->ImpuestoMarginal; ?></td>
                  <td><?= $row->ImpuestoBruto; ?></td>
                  <td><?= $row->ISR; ?></td>
                  <td></td>
                </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          <?php
          }
          else{
          ?>
            <div class="alert alert-warning fade show"><strong>El empleado no tiene conceptos generados para el período actual.</strong></div>
          <?php
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal-footer">
  <!-- <button type="button" class="btn btn-success" title="Procesar" id="btnProcesarEmpSB" name="btnProcesarEmpSB" onclick=""><i class="fas fa-check"></i> Procesar</button> -->
  <button type="button" class="btn btn-default btn-sm" data-bs-dismiss="modal"><i class="far fa-window-close"></i> Cerrar</button>
</div>

<script type="text/javascript">
$(document).ready(function(){

  if ( !$.fn.dataTable.isDataTable( '#tblDetImpuestos' ) ) {
    var tablaconfConc = $('#tblDetImpuestos').DataTable({
      initComplete: function() {
        this.api().columns.adjust().draw();
        $("#tblDetImpuestos").show();
      },
      language: {
        "url": "assets/plugins/DataTables/Spanish.json",
        "processing": "Cargando..."
      },
      dom: "t",
      // order: [0, 'asc'],
      responsive: 'true',
      processing: 'true',
      columnDefs: [
        { targets: [0,1,2,3,4], render: function(data){ return formatCurrency(data); } },
        { targets: ["_all"], className: "no-sort"},
      ],
    });
  }

});
</script>
