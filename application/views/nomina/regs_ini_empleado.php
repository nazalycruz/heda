<div class="modal-header">
  <h4 class="modal-title" id="TituloModal"></h4>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>

<div class="modal-body">
  <input type="hidden" id="idPeriodoPagoRI" name="idPeriodoPagoRI" value="<?= empty($idPeriodoPago) ? 0 : $idPeriodoPago; ?>">
	<input type="hidden" id="idEmpleadoRI" name="idEmpleadoRI" value="<?= empty($idEmpleado) ? 0 : $idEmpleado; ?>">
	<input type="hidden" id="credencialRI" name="credencialRI" value="<?= empty($empleado->Credencial) ? 0 : $empleado->Credencial; ?>">
  <div class="row mb-2">
		<div class="col-12">
			<div class="form-group">
				<label class="form-label">Empleado</label>
				<input type="text" class="form-control form-control-sm" value="<?= $empleado->Credencial.' - '.$empleado->NombreCompleto; ?>" readonly>
			</div>
		</div>
  </div>

  <div class="row">
    <div class="col-6">
      <div class="form-group">
        <label for="fechainiRI" class="form-label">Fecha Inicial</label>
        <input type="text" class="form-control form-control-sm" id="fechainiRI" name="fechainiRI" value="<?= $fechaini; ?>">
      </div>
    </div>
    <div class="col-6">
      <div class="form-group">
        <label for="fechafinRI" class="form-label">Fecha Final</label>
        <input type="text" class="form-control form-control-sm" id="fechafinRI" name="fechafinRI" value="<?= $fechafin; ?>" disabled>
      </div>
    </div>
  </div>

  <div class="row mt-2">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table id="tblConfRegini" class="table table-bordered table-condensed" cellspacing="0" width="100%" style="display:none;">
               <thead>
                 <tr>
                   <th>Fecha</th>
                   <th>Día</th>
                   <th>Se Paga</th>
                   <th>Clave</th>
                   <th>Categoría</th>
                   <th>idCategoria</th>
                 </tr>
               </thead>
               <tbody id="tbl_dataConfRegIni">

               </tbody>
             </table>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<div class="modal-footer">
  <button type="button" class="btn btn-inverse" title="Generar Registros Iniciales" id="btnGeneraRegIni" name="btnGeneraRegIni" onclick="generar_reg_ini();"><i class="fas fa-user-cog"></i> Generar</button>
  <button type="button" class="btn btn-success" title="Guardar Registros Iniciales" id="btnGuardarRegIni" name="btnGuardarRegIni" disabled onclick="guardar_reg_ini();"><i class="far fa-save"></i> Guardar</button>
  <button type="button" class="btn btn-default btn-sm" data-bs-dismiss="modal"><i class="far fa-window-close"></i> Cerrar</button>
</div>

<script type="text/javascript">
setTimeout(function FuncionesIniciales(){
  $("#fechainiRI, #fechafinRI").datepicker({
    format: "dd/mm/yyyy",
    weekStart: 1,
    maxViewMode: 3,
    language: "es",
    orientation: "bottom auto",
    autoclose: true,
    todayBtn: "linked",
    todayHighlight: true,
  }).inputmask({'alias': 'datetime', 'inputFormat': 'dd/mm/yyyy', 'placeholder': 'dd/mm/yyyy', 'min':'01/01/1900'});

  if (!$.fn.dataTable.isDataTable( '#tblConfRegini' )) {
    var tablaEmpRI = $('#tblConfRegini').DataTable({
      initComplete: function() {
        tablaEmpRI.columns.adjust().draw();
        tablaEmpRI.responsive.recalc();
        $("#tblConfRegini").show();
      },
      // rowCallback: function(row, data, dataIndex){
      //   if( data[3] == 1 ){
      //     $(row).find('input[type="checkbox"]').prop('checked', true);
      //     $(row).addClass('selected');
      //   }
      // },

      language: {
        "url": "assets/plugins/DataTables/Spanish.json",
        "processing": "Cargando..."
      },
      dom: 't',
      pageLength: 20,
      order: [1, 'asc'],
      // ordering: false,
      responsive: true,
      processing: 'true',
      // select: {
      //     style:    'multi+shift',
      //     selector: 'td:nth-child(2)'
      // },
      columnDefs: [
        { targets: 2,
          render: function(data, type, row, meta){
            if( type === 'display' ){
              if( row[2] == 1 ){ data = '<div class="checkbox"><input type="checkbox" class="form-check-input dt-checkboxes" checked><label></label></div>'; }
              else{ data = '<div class="checkbox"><input type="checkbox" class="form-check-input dt-checkboxes"><label></label></div>'; }
            }
            return data;
          },
          checkboxes: { //'selectRow': true,
                        'selectAll':false,
                      },
          className: "dt-center",
          createdCell:  function (td, cellData, rowData, row, col){
            if( rowData[2] == 1 ){
              this.api().cell(td).checkboxes.select();
            }
          },
        },
        // { targets:[0,5],visible: false,orderable:false,searchable:false },
				{ targets:[5],visible: false,orderable:false,searchable:false },
        { targets:[3,4],orderable:false },
      ]
    });
  }

  carga_registros_iniciales_empleado();
});

function carga_registros_iniciales_empleado(){
  let tabla = $('#tblConfRegini').DataTable(),
      idPeriodoPago = $('#idPeriodoPagoRI').val(),
      idEmpleado = $('#idEmpleadoRI').val();

  if (typeof(idPeriodoPago) == "undefined" || idPeriodoPago === "" || idPeriodoPago == 0) {
    alerta_emergente("Error al obtener el periodo de pago. Intente de nuevo más tarde.","warning")
    return false;
  }

  if (typeof(idEmpleado) == "undefined" || idEmpleado === "" || idEmpleado == 0) {
    alerta_emergente("Error al obtener la información del empleado.","warning")
    return false;
  }

  $.ajax({
    url: '<?= base_url() ?>nomina/trae_regsini_empleado',
    type: "POST",
    data: {idPeriodoPago:idPeriodoPago,idEmpleado:idEmpleado},
    dataType: "JSON",
    success : function(data){
      if (data.status == false) {
        alerta_emergente(data.message,"warning");
        return false;
      }
      else {
        if (data.ctrlProceso.NominaCerrada == 0) {
          $('#btnGuardarRegIni').prop('disabled',false);
          $('#btnGeneraRegIni').prop('disabled',false);
        }
        // else {
        //   $('#btnGuardarRegIni').prop('disabled',true);
        //   $('#btnGeneraRegIni').prop('disabled',true);
        // }

        let registros = data.registros;

        $("#tblConfRegini").hide();

        tabla.clear().draw();
        for (var i in registros) {
          tabla.row.add(
             [ registros[i].Fecha,
               registros[i].Dia,
               registros[i].estado,
               registros[i].clavecategoria,
               '<select class="form-control form-control-sm select2-sm selcategorias " id="catCategoria_'+registros[i].Dia+'" name="catCategoria_'+registros[i].Dia+'">'+registros[i].catCategorias+'</select>',
               registros[i].idCategoria ]
          );
        }
        tabla.columns.adjust().draw();
        tabla.responsive.recalc();

        $(".selcategorias").select2({
          language: "es",
          placeholder: "Seleccione un Elemento",
          width:'100%',
					dropdownParent: $('#modGeneral .modal-content'),
          matcher: buscadorCategoria,
        }).on("select2:close", function (event) {
          var id = $(this).find("option:selected").val(),
              clave = $(this).find("option:selected").data('clave'),
              rowindex = tabla.row( $(this).parents('tr') ).index();
              tabla.cell({row: rowindex, column: 3}).data(clave);
              tabla.cell({row: rowindex, column: 5}).data(id);
            setTimeout(function() {
              $('.select2-container-active').removeClass('select2-container-active');
              $(':focus').blur();
            }, 1);
        });

        $("#tblConfRegini").show();
      }
    }
  });
}

function buscadorCategoria(params, data) {
  if ($.trim(params.term) === '') { return data; }
  if (typeof data.text === 'undefined') { return null; }

  var q = params.term.toLowerCase();
  if (data.text.toLowerCase().indexOf(q) > -1 || $(data.element).data('clave').toString().indexOf(params.term) > -1) {
    return $.extend({}, data, true);
  }
  return null;
}

function generar_reg_ini() {
  let tabla = $('#tblConfRegini').DataTable(),
      idPeriodoPago = $('#idPeriodoPagoRI').val(),
      idEmpleado = $('#idEmpleadoRI').val()
      fechaini = $('#fechainiRI').val(),
      credencial = $('#credencialRI').val();

  if (typeof(idPeriodoPago) == "undefined" || idPeriodoPago === "" || idPeriodoPago == 0) {
    alerta_emergente("Error al obtener el periodo de pago. Intente de nuevo más tarde.","warning")
    return false;
  }

  if (typeof(fechaini) == "undefined" || fechaini === "") {
    alerta_emergente("Debes capturar la fecha inicial.","warning")
    return false;
  }

  if (typeof(idEmpleado) == "undefined" || idEmpleado === "" || idEmpleado == 0) {
    alerta_emergente("Error al obtener la información del empleado.","warning")
    return false;
  }

  $.ajax({
    url: '<?= base_url() ?>nomina/generar_regsini_empleado',
    type: "POST",
    data: {idPeriodoPago:idPeriodoPago,idEmpleado:idEmpleado,fechaini:fechaini,credencial:credencial},
    dataType: "JSON",
		beforeSend: function() {
			showLoading("Procesando","Generando registros iniciales para el empleado...");
		},
    success : function(data) {
      if (data.status == false) {
        alerta_emergente(data.message,"warning");
        return false;
      }
      else {
        if (data.ctrlProceso.NominaCerrada == 0) {
          $('#btnGuardarRegIni').prop('disabled',false);
          $('#btnGeneraRegIni').prop('disabled',false);
        }
        // else{
        //   $('#btnGuardarRegIni').prop('disabled',true);
        //   $('#btnGeneraRegIni').prop('disabled',true);
        // }
        let registros = data.registros;
        tabla.clear().draw();
        for (var i in registros) {
          tabla.row.add(
             [ registros[i].Fecha,
               registros[i].Dia,
               registros[i].estado,
               registros[i].clavecategoria,
               '<select class="form-control form-control-sm select2-sm selcategorias" id="catCategoria_'+registros[i].Dia+'" name="catCategoria_'+registros[i].Dia+'">'+registros[i].catCategorias+'</select>',
               registros[i].idCategoria ]
          );
        }
        tabla.columns.adjust().draw();
        tabla.responsive.recalc();

        $(".selcategorias").select2({
          language: "es",
          placeholder: "Seleccione un Elemento",
          width:'100%',
					dropdownParent: $('#modGeneral .modal-content'),
        }).on("select2:close", function (event) {
          var id = $(this).find("option:selected").val(),
              clave = $(this).find("option:selected").data('clave'),
              rowindex = tabla.row( $(this).parents('tr') ).index();
              tabla.cell({row: rowindex, column: 3}).data(clave);
              tabla.cell({row: rowindex, column: 5}).data(id);
            setTimeout(function() {
              $('.select2-container-active').removeClass('select2-container-active');
              $(':focus').blur();
            }, 1);
        });
      }
    },
		complete: function( jqXHR, Status){
			hideLoading();
		}
  });
}

function guardar_reg_ini() {
  let idEmpleado = $('#idEmpleadoRI').val(),
      idPeriodoPago = $('#idPeriodoPagoRI').val(),
      credencial = $('#credencialRI').val(),
      tabla = $('#tblConfRegini').DataTable();

  if (!tabla.data().any()) {
    alerta_emergente("Debes generar los registros para poder guardarlos.","warning");
    return false;
  }

  if (typeof(idPeriodoPago) == "undefined" || idPeriodoPago === "" || idPeriodoPago == 0) {
    alerta_emergente("Error al obtener el periodo de pago. Intenta de nuevo más tarde.","warning");
    return false;
  }

  if (typeof(credencial) == "undefined" || credencial === "" || credencial == 0) {
    alerta_emergente("Ocurrió un error al intentar obtener la información del empleado.","warning");
    return false;
  }

  if (typeof(idEmpleado) == "undefined" || idEmpleado === "" || idEmpleado == 0) {
    alerta_emergente("Ocurrió un error al intentar obtener la información del empleado.","warning");
    return false;
  }

  // if ( tabla.rows({selected : true}).indexes().length === 0 ) {
  //   alerta_emergente('Debe seleccionar un día para generar los registros iniciales.','info');
  //   return false;
  // }

  let registros = tabla.rows().data().toArray();

  $.ajax({
    url: "<?=base_url();?>index.php/nomina/guardar_regsini_empleado",
    type: "POST",
    async: true,
    data: "registros="+JSON.stringify(registros)+"&idEmpleado="+idEmpleado+"&credencial="+credencial+"&idPeriodoPago="+idPeriodoPago,
    dataType: "JSON",
    beforeSend: function() {
      showLoading("Procesando","Generando registros iniciales para el empleado...");
    },
    error: function(XMLHttpRequest, errMsg, exception){
      var msg = "<p>jQuery message: <i>"+errMsg+"</i><br />XMLHttpRequest: <i>"+StatusMsg(XMLHttpRequest.status)+"</i></p>";
      alerta_emergente(msg, 'error');
    },
    success: function(data){
      if (data.status == false) {
        alerta_emergente(data.message,"warning");
      }
      else {
        alerta_emergente(data.message,"success");
      }
    },
    complete: function( jqXHR, Status){
      hideLoading();
    }
  });
}

$("#tblConfRegini").on('change',"input[type='checkbox']",function(e){
  let tabla =  $('#tblConfRegini').DataTable(),
      rowidx = tabla.row( $(this).parents('tr') ).index(),
      sepaga = ($(this).is(':checked') ? 1 : 0);

  tabla.cell({row:rowidx, column:2}).data(sepaga);
  // if ( $(this).is(':checked')){ tabla.cell({row:rowidx, column:2}).data(1); }
  // else {  tabla.cell({row:rowidx, column:2}).data(0); }
});

// $('#fechainiRI').on('changeDate', function(e) {
//   $('#btnGeneraRegIni').prop('disabled',true);
//   $('#btnGuardarRegIni').prop('disabled',true);
//   obtener_registros_ini( $(this).val() );
// });

// $('#fechainiRI').on('show', function(e) {
//   $('#btnGeneraRegIni').prop('disabled',true);
//   $('#btnGuardarRegIni').prop('disabled',true);
// });

$('#fechainiRI').on('hide', function(e) {
  // $('#btnGeneraRegIni').prop('disabled',true);
  // $('#btnGuardarRegIni').prop('disabled',true);
  obtener_registros_ini($(this).val());
});

function obtener_registros_ini(fechaini) {
  if (typeof(fechaini) == "undefined" || fechaini === "") {
    alerta_emergente("Debe capturar la fecha inicial.","warning")
    return false;
  }

  $.post("<?=base_url();?>nomina/obtener_fecha_periodo", {fechaini:fechaini}, function (data) {
    if (data.status == false) {
      $('#idPeriodoPagoRI').val(0);
      $('#tblConfRegini').DataTable().clear().draw();
      alerta_emergente(data.message,"warning");
    }
    else {
      $('#idPeriodoPagoRI').val(data.idPeriodoPago);
      $('#fechafinRI').val(data.fechafin);
      carga_registros_iniciales_empleado();
    }
  },"json");
}

</script>
