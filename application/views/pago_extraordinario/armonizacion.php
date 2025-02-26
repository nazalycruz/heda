<div class="row">
  <input type="hidden" name="idPeriodoPagoArmonizacion" id="idPeriodoPagoArmonizacion" value="<?= (empty($idPeriodoPago) ? 0 : $idPeriodoPago); ?>">
  <div class="table-responsive">
    <table class="table table-bordered w-100" id="tblArmonizacion" name="tblArmonizacion" cellspacing="0">
      <thead>
        <tr>
          <th>idPagoExt</th>
          <th data-priority="1">Folio Momento</th>
          <th class="no-sort" data-priority="2">Acciones</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
  </div>
</div>

<script type="text/javascript">
setTimeout(function FuncionesIniciales(){

  if ( !$.fn.dataTable.isDataTable( '#tblArmonizacion' ) ) {
    var tablaArm = $('#tblArmonizacion').DataTable({
      language: {
        "url": "assets/plugins/DataTables/Spanish.json",
        "processing": "Cargando..."
      },
      order: [0, 'asc'],
      dom: 'lBfrtip',
      responsive: {
        details: false
      },
      processing: 'true',
      lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "Todo"]],
      pageLength: -1,
      columnDefs: [
        { visible: false, targets: [0] },
        { width: "40%", targets: 1 },
        { targets: [ 1 ], orderData: [ 0, 1 ] },
      ],
      buttons: [
        { text: '<i class="fas fa-broom"></i> ', titleAttr: 'Borrar Filtros', className: 'btn-sm btn-default tooltipsterTbl', action:function ( e, dt, node, config ) { borrar_filtros(); } },
        { extend: 'excel', text: ' <i class="far fa-file-excel"></i> ', autoFilter:true, className: 'btn btn-default btn-sm', titleAttr: 'Exportar',  filename:'Reporte', exportOptions: { columns: [1,2,3,4,5,6] }, messageTop: 'Armonización' },
      ],
    });
  }

  carga_tabla_armonizacion();
});

function carga_tabla_armonizacion(){
  var tabla = $('#tblArmonizacion').DataTable(),
      idPeriodoPago = $('#idPeriodoPagoArmonizacion').val();
      btnReq = '', childRow = false;

      Carga_Metodo("<?=base_url();?>pago_extraordinario/listado_dispersados", {idPeriodoPago:idPeriodoPago,clave:'DIS'}, function functArmoniza(res) {
        if (res.status == false) { alerta_emergente(res.message, "warning"); }
        else {
          var registros = res.registros;
          console.log(registros);
          for (var i in registros) {
           var trDOM = tabla.row.add(
            [
              registros[i].FolioMomento,
              '<button data-container="body" id="showPagos_'+registros[i].FolioMomento+'" title="Mostrar Tareas" class="btn btn-xs text-red-darker" onclick="muestraPagos('+registros[i].FolioMomento+',this)">'+
               '<i class="fas fa-caret-right"></i></button> <i class="fas fa-tasks text-red-darker"></i> Folio: '+ registros[i].FolioMomento,
              ''
            ]
           ).draw().node();
          }
          tabla.columns.adjust().draw();
          tabla.responsive.recalc();
        }
      }, "Cargando...");
}

function muestraPagos(folioMomento, obj, esBoton) {
  var tabla = $('#tblArmonizacion').DataTable(),
      btnTarea = '',
      tr = $(obj).closest('tr'),
      row = (typeof(esBoton) === "undefined" || esBoton === "" || esBoton != false ? tabla.row( tr ) :  tabla.row( obj )),
      data = (typeof(esBoton) === "undefined" || esBoton === "" || esBoton != false ? tabla.row( $(obj).parents('tr') ).data() : tabla.row( obj ).data());

  $("i", obj).toggleClass("fas fa-caret-right fas fa-caret-down");

  if (row.child.isShown()) {
    row.child.hide();
    tr.removeClass('shown');
  }
  else {
    if ($.fn.DataTable.isDataTable( '#tblPagos_' + folioMomento )) {
      $('#tblPagos_' + folioMomento).DataTable().clear().destroy();
    }

   row.child(formatPagos(data),"bg-grey childContent" ).show();

   childTable = $('#tblPagos_' + folioMomento).DataTable({
     language: {
       "url": "assets/plugins/DataTables/Spanish.json",
     },
     dom: 't',
     pageLength: -1,
     order: [0, 'asc'],
     responsive: {
       details: false
     },
     columnDefs: [
       { visible: false, targets: [0] },
     ],
   });

   Carga_Metodo("<?=base_url();?>pago_extraordinario/listado_pagos_armonizacion", {folioMomento:folioMomento}, function functPagos(res) {
     if (res.status == false) { alerta_emergente(res.message, "warning"); }
     else {
       var registros = res.registros;

       for (var i in registros) {
         var rowNode = childTable.row.add(
          [
            registros[i].IdPagoExt,
            '<i class="far fa-file-alt text-green-darker"></i> '+registros[i].Credencial,
            registros[i].Empleado,
            fecha_sql_a_normal(registros[i].FPago),
            fecha_sql_a_normal(registros[i].FDispersion),
            ''
          ]
         ).draw().node();
       }
       childTable.columns.adjust().draw();
       childTable.responsive.recalc();
     }
   }, "Cargando...");
  }
}

function formatPagos(rowData) {
  var childTable = '<table id="tblPagos_' + rowData[0] + '" class="table table-bordered tblChilds w-100">' +
                      ' <thead>'+
                      '   <tr class="active">'+
                      '     <th>id</th>'+
                      '     <th data-priority="1">Credencial</th>'+
                      '     <th data-priority="3">Empleado</th>'+
                      '     <th class="d-none d-md-table-cell">Fecha Pago</th>'+
                      '     <th class="d-none d-md-table-cell">Fecha Dispersión</th>'+
                      '     <th class="no-sort" data-priority="2">Acciones</th>'+
                      '   </tr>'+
                      ' </thead>'+
                      ' <tbody>'+
                      ' </tbody>'+
                      '</table>';
  return $(childTable).toArray();
}


</script>
