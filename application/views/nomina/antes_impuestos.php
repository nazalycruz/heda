<div class="row">
  <?php
  $txtResultado = ( !empty($control->ConceptAntesImpu) ? '<span class="text-success"><i class="fa fa-check"></i></span> Procesado' : '<span class="text-warning"><i class="fa fa-exclamation"></i></span> No procesado.' );
   ?>
   <div class="col-md-12">
     <div class="alert alert-warning fade show" id="tituloAntImp">
       <strong></strong>
     </div>
   </div>
</div>

<div class="row">
  <div class="col-md-4">
    <div class="form-group">
      <button type="button" class="btn btn-white btn-sm btn-block btnCalculo" name="btnBonoCumples" id="btnBonoCumples" onclick="configurar_bono_cumples();"><i class="fas fa-birthday-cake"></i> Configurar: Bono por Natalicio</button>
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      <button type="button" class="btn btn-white btn-sm btn-block btnCalculo" name="btnVales" id="btnVales" onclick="configurar_vales();"><i class="fas fa-shopping-basket"></i> Configurar: Vales de Despensa</button>
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      <button type="button" class="btn btn-white btn-sm btn-block btnCalculo" name="btnValesSB" id="btnValesSB" onclick="configurar_vales_sin_base();"><i class="fas fa-shopping-basket"></i> Configurar: Vales empleados SIN BASE</button>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
   <div class="form-group">
     <button type="button" class="btn btn-success btn-lg btn-block btnCalculo" name="btnAntesImp" id="btnAntesImp" onclick="generar_antes_impuestos('tblEmpleadosAntesImp');"></button>
   </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="table-responsive">
          <table id="tblEmpleadosAntesImp" class="table table-bordered table-condensed" cellspacing="0" width="100%" style="display:none;">
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
                     <td><?= $item->EmpleadoID; ?></td>
                     <td><?= $item->Credencial; ?></td>
                     <td id="resAntImp"><?= $txtResultado; ?></td>
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
  if( empty($control->RegsIniciales) ) echo "$('#smartwizard').smartWizard('prev')";
  ?>

   if ( !$.fn.dataTable.isDataTable( '#tblEmpleadosAntesImp' ) ) {
     var tablaEmpAI = $('#tblEmpleadosAntesImp').DataTable({
       initComplete: function() {
         this.api().rows().select();
         $("#tblEmpleadosAntesImp").show();
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
         { extend: 'excel', text: ' <i class="far fa-file-excel"></i> ', autoFilter:true, className: 'btn-sm btn-default', titleAttr: 'Exportar resultado en Excel',  filename:'Reporte', exportOptions: { columns: [1,2] }, messageTop: 'Empleados para generar conceptos Antes de Impuestos' },
       ],
     });
   }

   var procesado = "<?= $control->ConceptAntesImpu; ?>";
   inicializa_controles_antesimpuestos(procesado);
});

  function inicializa_controles_antesimpuestos(procesado) {
    var txtTitulo = (procesado == 1 ? 'SE HAN APLICADO LOS CONCEPTOS ANTES DE IMPUESTOS' : 'NO SE HAN APLICADO LOS CONCEPTOS ANTES DE IMPUESTOS'),
        txtBoton = (procesado == 1 ? ' Re-Procesar Conceptos Antes de Impuestos' : ' Procesar Conceptos Antes de Impuestos');

    $('#bantimp').val(procesado);
    $("#tituloAntImp strong").html(txtTitulo);
    $('#btnAntesImp').html('<i class="fas fa-dollar-sign"></i> <i class="fas fa-arrow-alt-circle-left"></i>'+txtBoton);
  }

  function configurar_bono_cumples() {
    Carga_Metodo("<?=base_url();?>nomina/configurar_bono_cumples", "", "", "Procesando*Configurando Bono por Natalicio...");
    return false;
  }

  function configurar_vales() {
    var fechaini = $('#fechainiPeriodo').val(),
        datePart_fecha = fechaini.match(/\d+/g), dia_fecha = datePart_fecha[0];

    if( dia_fecha < 16 ){
      swal.fire({
        title: "Alerta",
        text: "Este concepto debe configurarse en la SEGUNDA QUINCENA de cada mes, ¿Está seguro que desea configurarlo esta quincena?",
        icon: "question",
        showCancelButton: true,
      }).then(result => {
        if ( result.value ) {
          Carga_Metodo("<?=base_url();?>nomina/configurar_vales", "", "", "Procesando*Configurando Vales de Despensa...");
        }
      }).catch(swal.noop)
    }
    else{
      Carga_Metodo("<?=base_url();?>nomina/configurar_vales", "", "", "Procesando*Configurando Vales de Despensa...");
    }

    return false;
  }

  function configurar_vales_sin_base() {
    cargamodalGenerica('<?= base_url() ?>nomina/carga_conf_vales_sin_base', '#modContenidoXL', '#modGeneralXL', "", "Configuración de vales para empleados SIN BASE", 1);
    return false;
  }

  function generar_antes_impuestos(tabla) {
    var tablaAI = $('#'+tabla).DataTable();

    if ( tablaAI.rows({selected : true}).indexes().length === 0 ) {
      alerta_emergente('Debe seleccionar un empleado para generar los conceptos antes de impuestos.','info');
      return false;
    }

    var registros = tablaAI.rows( {selected: true} ).data().toArray();

    $.ajax({
      url: "<?=base_url();?>index.php/nomina/generar_antes_impuestos",
      type: "POST",
      async: true,
      data: {registros:JSON.stringify(registros)},
      dataType: "JSON",
      beforeSend: function() {
        $('.btnCalculo').prop('disabled',true);
        var dt = new Date(),
            time = ('0'+dt.getHours()).slice(-2) + ":" + ('0'+dt.getMinutes()).slice(-2) + ":" + ('0'+dt.getSeconds()).slice(-2);
        showLoading("Procesando","Generando Conceptos Antes de Impuestos para "+tablaAI.rows({selected : true}).indexes().length+" empleado(s)... Proceso iniciado: "+time);
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
          inicializa_controles_antesimpuestos(1);
          tablaAI.rows( { selected: true } ).every( function ( rowIdx, tableLoop, rowLoop ) {
            var idEmpleado = tablaAI.cell( rowIdx, 0 ).data();
            if( $.inArray(idEmpleado, data.resultado) !== -1 ){ tablaAI.cell( rowIdx, 2 ).data('<span class="text-success"><i class="fa fa-check"></i></span> Procesado Correctamente'); }
            else{ tablaAI.cell( rowIdx, 2 ).data('<span class="text-warning"><i class="fa fa-exclamation"></i></span> No procesado'); }
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
