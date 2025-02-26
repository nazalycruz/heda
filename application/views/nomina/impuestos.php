<div class="row">
  <?php
  $txtResultado = ( !empty($control->Impuestos) ? '<span class="text-success"><i class="fa fa-check"></i></span> Procesado' : '<span class="text-warning"><i class="fa fa-exclamation"></i></span> No procesado.' );
   ?>
   <div class="col-md-12">
     <div class="alert alert-warning fade show" id="tituloImp">
       <strong></strong>
     </div>
   </div>
</div>

<div class="row">
  <div class="col-md-12">
   <div class="form-group">
     <button type="button" class="btn btn-success btn-lg btn-block btnCalculo" name="btnImpuestos" id="btnImpuestos" onclick="generar_impuestos('tblEmpleadosImpuestos');"></button>
   </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="table-responsive">
          <table id="tblEmpleadosImpuestos" class="table table-bordered table-condensed" cellspacing="0" width="100%" style="display:none;">
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
                     <td id="resImp"><?= $txtResultado; ?></td>
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
  if( empty($control->RegsIniciales) || empty($control->ConceptAntesImpu) ) echo "$('#smartwizard').smartWizard('prev')";
  ?>

  if ( !$.fn.dataTable.isDataTable( '#tblEmpleadosImpuestos' ) ) {
    var tablaEmpAI = $('#tblEmpleadosImpuestos').DataTable({
      initComplete: function() {
        this.api().rows().select();
        $("#tblEmpleadosImpuestos").show();
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
        { extend: 'excel', text: ' <i class="far fa-file-excel"></i> ', autoFilter:true, className: 'btn-sm btn-default', titleAttr: 'Exportar resultado en Excel',  filename:'Reporte', exportOptions: { columns: [1,2] }, messageTop: 'Empleados para generar Impuestos' },
      ],
    });
  }

  var procesado = "<?= $control->Impuestos; ?>";
  inicializa_controles_impuestos(procesado);

});

function inicializa_controles_impuestos(procesado) {
  var txtTitulo = (procesado == 1 ? 'SE HAN APLICADO LOS IMPUESTOS' : 'NO SE HAN APLICADO LOS IMPUESTOS'),
      txtBoton = (procesado == 1 ? ' Re-Procesar Impuestos' : ' Procesar Impuestos');

  $('#bimpu').val(procesado);
  $("#tituloImp strong").html(txtTitulo);
  $('#btnImpuestos').html('<i class="fas fa-dollar-sign"></i> <i class="fas fa-arrow-alt-circle-down"></i></span>'+txtBoton);
}

function generar_impuestos(tabla) {
  var tablaImp = $('#'+tabla).DataTable();

  if ( tablaImp.rows({selected : true}).indexes().length === 0 ) {
    alerta_emergente('Debe seleccionar un empleado para generar impuestos.','info');
    return false;
  }

  if( $('#bimpu').val() == 1 ){
    swal.fire({
        title: "Alerta",
        text: "Para re-Aplicar impuestos deberá repetir todo el proceso (excepto Registros Iniciales), ¿Desea Re-Aplicarlos?",
        icon: "warning",
        showCancelButton: true,
        showLoaderOnConfirm: true,
        allowOutsideClick: false,
        preConfirm: function () {
            return new Promise(function(resolve) {
                $.ajax({
                    url: "<?=base_url();?>index.php/nomina/reiniciar_proceso",
                    type: 'POST',
                    async: true,
                    dataType: "JSON",
                    beforeSend: function() {
                      $('.btnCalculo').prop('disabled',true);
                      showLoading("Procesando","Reiniciando Proceso...");
                    },
                    error: function(XMLHttpRequest, errMsg, exception){
                        var msg = "jQuery message: "+errMsg+" XMLHttpRequest: "+StatusMsg(XMLHttpRequest.status);
                        alerta_emergente(msg, 'error');
                        swal.close();
                    },
                    success: function(data){
                      if( data.status == false ) {
                        alerta_emergente(data.message,"error");
                        swal.close();
                      }
                      else{
                        alerta_emergente(data.message,"success");
                        inicializa_controles_impuestos(0);
                        swal.close();
                      }
                    },
                    complete: function( jqXHR, Status){
                      hideLoading();
                      $('.btnCalculo').prop('disabled',false);
                    }
                });
            });
        }
    });
  }
  else{

    var registros = tablaImp.rows( {selected: true} ).data().toArray()

    $.ajax({
      url: "<?=base_url();?>index.php/nomina/generar_impuestos",
      type: "POST",
      async: true,
      data: {registros:JSON.stringify(registros)},
      dataType: "JSON",
      beforeSend: function() {
        $('.btnCalculo').prop('disabled',true);
        var dt = new Date(),
            time = ('0'+dt.getHours()).slice(-2) + ":" + ('0'+dt.getMinutes()).slice(-2) + ":" + ('0'+dt.getSeconds()).slice(-2);
        showLoading("Procesando","Generando Impuestos para "+tablaImp.rows({selected : true}).indexes().length+" empleado(s)... Proceso iniciado: "+time);
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
          inicializa_controles_impuestos(1);
          var idEmpleado = 0;
          tablaImp.rows( { selected: true } ).every( function ( rowIdx, tableLoop, rowLoop ) {
            idEmpleado = tablaImp.cell( rowIdx, 0 ).data();
            if( $.inArray(idEmpleado,data.resultado) !== -1 ){ tablaImp.cell( rowIdx, 2 ).data('<span class="text-success"><i class="fa fa-check"></i></span> Procesado'); }
            else{ tablaImp.cell( rowIdx, 2 ).data('<span class="text-warning"><i class="fa fa-exclamation"></i></span> No procesado'); }
          });
        }
      },
      complete: function( jqXHR, Status){
        hideLoading();
        $('.btnCalculo').prop('disabled',false);
      }
    });
  }
  return false;
}

</script>
