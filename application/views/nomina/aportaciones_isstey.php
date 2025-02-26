<div class="row">
  <?php
  $txtResultado = ( !empty($control->ISSTEY) ? '<span class="text-success"><i class="fa fa-check"></i></span> Procesado' : '<span class="text-warning"><i class="fa fa-exclamation"></i></span> No procesado.' );
  ?>
   <div class="col-md-12">
     <div class="alert alert-warning fade show" id="tituloISSTEY">
       <strong></strong>
     </div>
   </div>
</div>

<div class="row">
  <div class="col-md-12">
   <div class="form-group">
     <button type="button" class="btn btn-success btn-lg btn-block btnCalculo" name="btnISSTEY" id="btnISSTEY" onclick="generar_aportaciones_isstey('tblEmpleadosISSTEY');"></button>
   </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="table-responsive">
          <table id="tblEmpleadosISSTEY" class="table table-bordered table-condensed" cellspacing="0" width="100%" style="display:none;">
             <thead>
               <tr>
                 <th></th>
                 <th>Credencial</th>
                 <th>Estado</th>
               </tr>
             </thead>
             <tbody><?php
               if( $empleados ):;
                 foreach( $empleados as $item ):;?>
                   <tr>
                     <td><?= $item->id_empleado; ?></td>
                     <td><?= $item->Credencial; ?></td>
                     <td id="resIsstey"><?= $txtResultado; ?></td>
                   </tr><?php
                 endforeach;
               endif;?>
             </tbody>
           </table>
        </div>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
setTimeout(function FuncionesIniciales(){
  <?php
  if( empty($control->RegsIniciales) || empty($control->ConceptAntesImpu) || empty($control->Impuestos) || empty($control->ConceptDespImpu) ) echo "$('#smartwizard').smartWizard('prev')";
  ?>

  if ( !$.fn.dataTable.isDataTable( '#tblEmpleadosISSTEY' ) ) {
    var tablaEmpAI = $('#tblEmpleadosISSTEY').DataTable({
      initComplete: function() {
        this.api().rows().select();
        $("#tblEmpleadosISSTEY").show();
        this.api().columns.adjust().draw();
      },
      language: {
        "url": "assets/plugins/DataTables/Spanish.json",
        "processing": "Cargando..."
      },
      dom: "lBfrtip",
      order: [1, 'asc'],
      responsive: 'true',
      processing: 'true',
      select: {
          style:    'multi+shift',
          selector: 'td:first-child'
      },
      columnDefs: [
        { targets: 0,
          render: function(data, type, row, meta){
             if(type === 'display'){
               data = '<div class="checkbox"><input type="checkbox" class="form-check-input dt-checkboxes"><label></label></div>';
             }
             return data;
          },
          checkboxes: { 'selectRow': true, 'selectAllRender': '<div class="checkbox"><input type="checkbox" class="form-check-input dt-checkboxes" title="Seleccionar Todos"><label></label></div>' } }
      ],
      buttons: [
        { extend: 'excel', text: ' <i class="far fa-file-excel"></i> ', autoFilter:true, className: 'btn-sm btn-default', titleAttr: 'Exportar resultado en Excel',  filename:'Reporte', exportOptions: { columns: [1,2] }, messageTop: 'Empleados para generar aportaciones de ISSTEY' },
      ],
    });
  }

  var procesado = "<?= $control->ISSTEY; ?>";
  inicializa_controles_isstey(procesado);

});

function inicializa_controles_isstey(procesado) {
  var txtTitulo = (procesado == 1 ? 'SE HAN APLICADO LAS APORTACIONES AL ISSTEY' : 'NO SE HAN APLICADO LAS APORTACIONES AL ISSTEY'),
      txtBoton = (procesado == 1 ? ' Re-Aplicar Aportaciones al ISSTEY' : ' Aplicar Aportaciones al ISSTEY');

  $('#bisstey').val(procesado);
  $("#tituloISSTEY strong").html(txtTitulo);
  $('#btnISSTEY').html('<i class="fas fa-users"></i>'+txtBoton);
}

function generar_aportaciones_isstey(tabla) {
  var tablaisstey = $('#'+tabla).DataTable();

  if ( tablaisstey.rows( {selected : true} ).indexes().length === 0 ) {
    alerta_emergente('Debe seleccionar un empleado para generar las aportaciones de ISSTEY.','info');
    return false;
  }

  var registros = tablaisstey.rows( {selected: true} ).data().toArray();

  $.ajax({
    url: "<?=base_url();?>index.php/nomina/generar_aportaciones_isstey",
    type: "POST",
    async: true,
    data: {registros:JSON.stringify(registros)},
    dataType: "JSON",
    beforeSend: function() {
      $('.btnCalculo').prop('disabled',true);
      var dt = new Date(),
          time = ('0'+dt.getHours()).slice(-2) + ":" + ('0'+dt.getMinutes()).slice(-2) + ":" + ('0'+dt.getSeconds()).slice(-2);
      showLoading("Procesando","Generando Aportaciones de ISSTEY para "+tablaisstey.rows({selected : true}).indexes().length+" empleado(s)... Proceso iniciado: "+time);
    },
    error: function(XMLHttpRequest, errMsg, exception){
      var msg = "<p>jQuery message: <i>"+errMsg+"</i><br />XMLHttpRequest: <i>"+StatusMsg(XMLHttpRequest.status)+"</i></p>";
      alerta_emergente(msg, 'error');
    },
    success: function(data){
      if( data.status == false ) {
        alerta_emergente(data.message,"warning");
      }
      else{
        alerta_emergente(data.message,"info");
        inicializa_controles_isstey(1);
        var idEmpleado = 0;
        tablaisstey.rows( { selected: true } ).every( function ( rowIdx, tableLoop, rowLoop ) {
          idEmpleado = tablaisstey.cell( rowIdx, 0 ).data();
          if( $.inArray(idEmpleado,data.resultado) !== -1 ){ tablaisstey.cell( rowIdx, 2 ).data('<span class="text-success"><i class="fa fa-check"></i></span> Procesado'); }
          else{ tablaisstey.cell( rowIdx, 2 ).data('<span class="text-warning"><i class="fa fa-exclamation"></i></span> No procesado'); }
        });
      }
    },
    complete: function( jqXHR, Status){
      hideLoading();
      $('.btnCalculo').prop('disabled',false);
    }
  });

}

</script>
