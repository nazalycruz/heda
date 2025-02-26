<div class="modal-header">
  <h4 class="modal-title" id="TituloModal"></h4>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>

<div class="modal-body">
  <table id="tblConfEmpleado" class="table table-bordered table-condensed" cellspacing="0" width="100%" style="display:none;">
    <thead>
      <tr>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>

<div class="modal-footer">
  <!-- <button type="button" class="btn btn-success" title="Procesar" id="btnProcesarEmpSB" name="btnProcesarEmpSB" onclick=""><i class="fas fa-check"></i> Procesar</button> -->
	<button type="button" class="btn btn-default btn-sm" data-bs-dismiss="modal"><i class="far fa-window-close"></i> Cerrar</button>
</div>

<script type="text/javascript">
$(document).ready(function(){

  if ( !$.fn.dataTable.isDataTable( '#tblConfEmpleado' ) ) {
    var tablaconfConc = $('#tblConfEmpleado').DataTable({
      initComplete: function() {
        this.api().columns.adjust().draw();
        $("#tblConfEmpleado").show();
      },
      language: {
        "url": "assets/plugins/DataTables/Spanish.json",
        "processing": "Cargando..."
      },
      // dom: "lBfrtip",
      order: [1, 'asc'],
      responsive: 'true',
      processing: 'true',
    });
  }

// carga_tabla_conceptos();

});

</script>
