<div class="modal-header">
  <h4 class="modal-title" id="TituloModal"></h4>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>

<div class="modal-body" id="formDocumento">
  <div class="row">
    <div class="col-md-4">
      <div class="form-group">
        <label for="fecha_valesSB"><b>Fecha:</b></label>
        <input type="text" class="form-control" id="fecha_valesSB" name="fecha_valesSB" value="<?= date('d/m/Y'); ?>">
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label for="btnBuscaEmpSB">&nbsp;</label>
        <div>
          <button type="button" name="btnBuscaEmpSB" id="btnBuscaEmpSB" class="btn btn-inverse" onclick="carga_empleados_sb_para_vales();"><i class="fas fa-binoculars"></i> Consultar</button>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="table-responsive">
            <table id="tblConfValesSinBase" class="table table-bordered table-condensed" cellspacing="0" width="100%" style="display:none;">
               <thead>
                 <tr>
                   <th></th>
                   <th></th>
                   <th>Credencial</th>
                   <th>Nombre</th>
                   <th>Configurado</th>
                   <th>Monto</th>
                   <th>Fecha Ingreso</th>
                   <th>Días Lab.</th>
                   <th>Categoría</th>
                   <th>Dependencia</th>
                 </tr>
               </thead>
               <tbody id="tbl_dataConfValesSinBase">

               </tbody>
             </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-danger" title="Eliminar Configuración" id="btnEliminaConf" name="btnEliminaConf" onclick="eliminar_conf_empSB();"><i class="far fa-trash-alt"></i> Eliminar</button>
  <button type="button" class="btn btn-success" title="Procesar" id="btnProcesarEmpSB" name="btnProcesarEmpSB" onclick="procesar_vales_empSB();"><i class="fas fa-check"></i> Procesar</button>
  <button type="button" class="btn btn-default btn-sm" data-bs-dismiss="modal"><i class="far fa-window-close"></i> Cerrar</button>
</div>

<script type="text/javascript">
  setTimeout(function FuncionesIniciales(){
    $("#fecha_valesSB").datepicker({
      format: "dd/mm/yyyy",
      weekStart: 1,
      maxViewMode: 3,
      language: "es",
      orientation: "bottom auto",
      autoclose: true,
      todayBtn: "linked",
      // endDate: '+1d',
      // datesDisabled: '+1d',
      startDate: '-30d',
      todayHighlight: true,
    }).inputmask({'alias': 'datetime', 'inputFormat': 'dd/mm/yyyy', 'placeholder': 'dd/mm/yyyy', 'min':'01/01/1900'});

    if ( !$.fn.dataTable.isDataTable( '#tblConfValesSinBase' ) ) {
      var tablaEmpSBV = $('#tblConfValesSinBase').DataTable({
        initComplete: function() {
          $("#tblConfValesSinBase").show();
          this.api().columns.adjust().draw();
        },
        language: {
          "url": "assets/plugins/DataTables/Spanish.json",
          "processing": "Cargando..."
        },
        order: [2, 'asc'],
        responsive: {
        	'details': {
              'type': 'column',
              'target': 0
          	}
      	},
        processing: 'true',
        select: {
            style:    'multi+shift',
            selector: 'td:nth-child(2)'
        },
        columnDefs: [
          // { className: "dt-center", targets: '_all' },
          { targets: 1,
            render: function(data, type, row, meta){
               if( type === 'display' ){
                  data = '<div class="checkbox"><input type="checkbox" class="form-check-input dt-checkboxes"><label></label></div>';
               }
               return data;
            },
            checkboxes: { 'selectRow': true, 'selectAllRender': '<div class="checkbox"><input type="checkbox" class="form-check-input dt-checkboxes" title="Seleccionar Todos"><label></label></div>' }
          },
          {
            targets: 4,
            render: function(data, type, row, meta){
              if( type === 'display' ){
                data = '<div class="checkbox"><input type="checkbox" class="form-check-input dt-checkboxes"><label></label></div>';
              }
              return data;
            },
            checkboxes: { 'selectAll':false },
            createdCell:  function (td, cellData, rowData, row, col){
              if( rowData[4] > 0 ){
                this.api().cell(td).checkboxes.select();
              }
              this.api().cell(td).checkboxes.disable();
            }
          },
          {
             targets: 0,
             className: 'control',
             orderable: false,
             data: null,
             defaultContent: ''
          },

        ]
      });
    }

    carga_empleados_sb_para_vales();
  });

  function carga_empleados_sb_para_vales(){
    var tabla = $('#tblConfValesSinBase').DataTable(),
        fecha = $('#fecha_valesSB').val();

    $.ajax({
      url   : '<?= base_url() ?>nomina/trae_empleados_sb_para_vales',
      type: "POST",
      data: {fecha:fecha},
      dataType: "JSON",
      success : function(data){
        if( data.status == false ) {
          alerta_emergente(data.msj,"warning");
          return false;
        }
        else{
          var empleados = data.empleados;
          for (var i in empleados) {
            tabla.row.add(
               [ '',
                 empleados[i].Id,
                 empleados[i].Credencial,
                 empleados[i].Nombre,
                 empleados[i].Configurado,
                 formato_moneda(empleados[i].MontoConfigurado),
                 fecha_sql_a_normal(empleados[i].FechaAlta),
                 empleados[i].TotalDiasLaborados,
                 empleados[i].Categoria,
                 empleados[i].Dependencia ]
            ).draw();
          }
          tabla.columns.adjust().draw();
          tabla.responsive.recalc();
        }
      }
    });
  }

  function eliminar_conf_empSB() {
    var tablaempSB = $('#tblConfValesSinBase').DataTable();

    if ( tablaempSB.rows({selected : true}).indexes().length === 0 ) {
      alerta_emergente('Debe seleccionar un empleado para eliminar la configuración.','info');
      return false;
    }

    var registros = tablaempSB.rows( {selected: true} ).data().toArray();

    $.ajax({
      url: "<?=base_url();?>index.php/nomina/eliminar_confvales_empSB",
      type: "POST",
      async: true,
      data: {registros:JSON.stringify(registros)},
      dataType: "JSON",
      beforeSend: function() {
        showLoading("Procesando","Eliminando configuración de vales para "+tablaempSB.rows({selected : true}).indexes().length+" empleado(s)...");
      },
      error: function(XMLHttpRequest, errMsg, exception){
        var msg = "<p>jQuery message: <i>"+errMsg+"</i><br />XMLHttpRequest: <i>"+StatusMsg(XMLHttpRequest.status)+"</i></p>";
        alerta_emergente(msg, 'error');
        hideLoading();
      },
      success: function(data){
        if( data.status == false ) {
          alerta_emergente(data.message,"warning");
        }
        else{
          alerta_emergente(data.message,"info");
          tablaempSB.rows( { selected: true } ).every( function ( rowIdx, tableLoop, rowLoop ) {
            tablaempSB.cell( rowIdx, 4 ).checkboxes.enable();
            tablaempSB.cell( rowIdx, 4 ).checkboxes.deselect();
            tablaempSB.cell( rowIdx, 4 ).checkboxes.disable();
            tablaempSB.cell( rowIdx, 5 ).data(formato_moneda(0));
          });
        }
      },
      complete: function( jqXHR, Status){
        hideLoading();
      }
    });
  }

  function procesar_vales_empSB() {
    var tablaempSB = $('#tblConfValesSinBase').DataTable();

    if ( tablaempSB.rows({selected : true}).indexes().length === 0 ) {
      alerta_emergente('Debe seleccionar un empleado para configurar los vales de despensa.','info');
      return false;
    }

    var registros = tablaempSB.rows( {selected: true} ).data().toArray();

    $.ajax({
      url: "<?=base_url();?>index.php/nomina/procesar_vales_empSB",
      type: "POST",
      async: true,
      data: {registros:JSON.stringify(registros)},
      dataType: "JSON",
      beforeSend: function() {
        showLoading("Procesando","Configurando vales para "+tablaempSB.rows({selected : true}).indexes().length+" empleado(s)...");
      },
      error: function(XMLHttpRequest, errMsg, exception){
        var msg = "<p>jQuery message: <i>"+errMsg+"</i><br />XMLHttpRequest: <i>"+StatusMsg(XMLHttpRequest.status)+"</i></p>";
        alerta_emergente(msg, 'error');
        hideLoading();
      },
      success: function(data){
        if( data.status == false ) {
          alerta_emergente(data.message,"warning");
        }
        else{
          alerta_emergente(data.message,"info");
          tablaempSB.rows( { selected: true } ).every( function ( rowIdx, tableLoop, rowLoop ) {
            var idEmpleado = tablaempSB.cell( rowIdx, 1 ).data();
            if( data.montos[idEmpleado].monto > 0 ){
              tablaempSB.cell( rowIdx, 5 ).data(formato_moneda(data.montos[idEmpleado].monto));
              tablaempSB.cell( rowIdx, 4 ).checkboxes.enable();
              tablaempSB.cell( rowIdx, 4 ).checkboxes.select();
              tablaempSB.cell( rowIdx, 4 ).checkboxes.disable();
            }
          });
        }
      },
      complete: function( jqXHR, Status){
        hideLoading();
      }
    });
  }

</script>
