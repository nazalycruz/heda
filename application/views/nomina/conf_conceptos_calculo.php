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
          if ( !empty($conceptos) ) {
          ?>
            <table id="tblConfConceptos" class="table table-bordered table-condensed" cellspacing="0" width="100%" style="display:none;">
              <thead>
                <tr>
                  <th>idConcepto</th>
                  <th>Gravado</th>
                  <th>Concepto</th>
                  <th>Monto</th>
                  <th>Monto Exento</th>
                  <th>Monto Gravado</th>
                  <th class="no-sort"></th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($conceptos as $row) {
                ?>
                <tr>
                  <td><?= $row->idConcepto; ?></td>
                  <td><?= $row->Gravado; ?></td>
                  <td><?= $row->Descripcion; ?></td>
                  <td><?= $row->Monto; ?></td>
                  <td><?= $row->MontoExento; ?></td>
                  <td><?= $row->MontoGravado; ?></td>
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

  if (!$.fn.dataTable.isDataTable( '#tblConfConceptos' )) {
    var tablaconfConc = $('#tblConfConceptos').DataTable({
      initComplete: function() {
        this.api().columns.adjust().draw();
        $("#tblConfConceptos").show();
      },
      language: {
        "url": "assets/plugins/DataTables/Spanish.json",
        "processing": "Cargando..."
      },
      // dom: "lBfrtip",
      order: [0, 'asc'],
      responsive: 'true',
      processing: 'true',
      columnDefs: [
        { targets: [3,4,5], render: function(data){ return formatCurrency(data); } },
        { targets: [0,1], visible: false},
      ],
    });
  }

// carga_tabla_conceptos();

});

function carga_tabla_conceptos() {
  var tabla = $('#tblEmpleadosRegIni').DataTable();

  $.ajax({
    url   : '<?= base_url() ?>nomina/trae_empleados_regini',
    type: "POST",
    data: '',
    dataType: "JSON",
    beforeSend: function() {
      $('#divTabla').hide();
      $('.btnCalculo').prop('disabled',true);
      showLoading("Procesando","Consultando empleados...");
    },
    success : function(data){
      if( data.status == false ) {
        alerta_emergente(data.message,"warning");
        $('#smartwizard').smartWizard('prev');
        return false;
      }
      else{
        var empleados = data.empleados,
            txtResultado = '';

        tabla.clear().draw();

        for (var i in empleados) {
          txtResultado = ( ($.type(data.diasprocesados[empleados[i].Id]) != "undefined") ?
                            '<span class="text-success"><i class="fa fa-check"></i></span><strong> Días Procesados: '+data.diasprocesados[empleados[i].Id]+'</strong>' :
                            '<span class="text-danger"><i class="fa fa-exclamation"></i></span><strong> No procesado</strong>'
                         );

          tabla.row.add(
             [ empleados[i].Id,
               empleados[i].Credencial,
               empleados[i].NombreCompleto,
               txtResultado,
             ]
          );
        }
        tabla.rows().select();
        tabla.columns.adjust().draw();

        $('#divTabla').show();
      }
    },
    error: function(xhr, textStatus, errorThrown){
      if ( xhr.status == 500 ) { alerta_emergente("Error interno del servidor, intente de nuevo más tarde.", "error");	}
      else if ( xhr.status == 404 ) { alerta_emergente("Página no encontrada, avise al Departamento de Servicios y Redes", "warning"); }
      else alerta_emergente("Mensaje de Error: "+textStatus+",  Solicitud XHR: "+StatusMsg(xhr.status), "error");
      return false;
    },
    complete: function( jqXHR, Status){
      hideLoading();
      $('.btnCalculo').prop('disabled',false);
    }
  });
}

</script>
