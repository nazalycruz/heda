<div class="row">
  <?php
  $txtResultado = ( !empty($control->ConceptAntesImpu) && !empty($control->Impuestos && !empty($control->ConceptDespImpu) && !empty($control->ISSTEY) ) ?
                  '<span class="text-success"><i class="fa fa-check"></i></span> Procesado' : '<span class="text-warning"><i class="fa fa-exclamation"></i></span> No procesado.' );
   ?>
   <div class="col-md-12">
     <div class="alert alert-warning fade show" id="tituloComp">
       <strong></strong>
     </div>
   </div>
</div>

<div class="row mt-2 mb-2">
  <div class="col-12">
   <div class="d-grid gap-2">
     <button type="button" class="btn btn-success btn-lg btn-block btnCalculo" name="btnCalculaConceptos" id="btnCalculaConceptos" onclick="generar_conceptos_prestadores('tblPrestadoresCalculo');"></button>
   </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="table-responsive" id="divTabla">
          <table id="tblPrestadoresCalculo" class="table table-bordered table-condensed" cellspacing="0" width="100%" style="display:none;">
             <thead>
               <tr>
                 <th></th>
                 <th>Credencial</th>
                 <th>Estado</th>
                 <th class="no-sort">Acciones</th>
               </tr>
             </thead>
             <tfoot>
              <tr>
                <th></th>
                <th>Credencial</th>
                <th>Estado</th>
                <th></th>
              </tr>
             </tfoot>
             <tbody>

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
  if (empty($control->RegsIniciales)) echo "$('#smartwizard').smartWizard('prev');";
  ?>

  if (!$.fn.dataTable.isDataTable( '#tblPrestadoresCalculo' )) {
    var tablaEmpComp = $('#tblPrestadoresCalculo').DataTable({

      initComplete: function() {
        this.api().columns([1,2]).every(function() {
            var column = this;
            var select = $('<select id="filtrocolCalc_'+column.index()+'" class="slt_filtro"><option value=""></option></select>')
              .appendTo($(column.footer()).empty())
              .on('change', function() {
                var val = $.fn.dataTable.util.escapeRegex(
                  $(this).val()
                );
                column
                  .search(val ? '^' + jQuery.fn.DataTable.ext.type.search.string( val ) + '$' : '', true, false)
                  .draw();
              })
              .on('click', function() {
                cargaOpcionesCalc(column.index());
              });
        });
        this.api().rows().select();
        this.api().columns.adjust().draw();
        $("#tblPrestadoresCalculo").show();
      },

      language: {
        "url": "assets/plugins/DataTables/Spanish.json",
        "processing": "Cargando..."
      },
      dom: '<"row"<"col-sm-5"B><"col-sm-7"fr>>t<"row"<"col-sm-5"i><"col-sm-7"p>>',
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
          checkboxes: { 'selectRow': true, 'selectAllRender': '<div class="checkbox"><input type="checkbox" class="form-check-input dt-checkboxes" title="Seleccionar Todos"><label></label></div>' }
        },
        { targets: ['_all'], className: 'dt-head-center' },

      ],
			buttons: [
				'pageLength',
        { extend: 'excel', text: ' <i class="far fa-file-excel"></i> ', autoFilter:true, className: 'btn-sm btn-default', titleAttr: 'Exportar resultado en Excel',  filename:'Reporte', exportOptions: { columns: [1,2] }, messageTop: 'Empleados en nómina' },
      ],
    });
  }

  var procesadoAntImp = "<?= $control->ConceptAntesImpu; ?>",
      procesadoImp = "<?= $control->Impuestos; ?>",
      procesadoDespImp = "<?= $control->ConceptDespImpu; ?>";

  inicializa_controles_calculo(procesadoAntImp,procesadoImp,procesadoDespImp);

  carga_prestadores_calculo();

  $('#tblPrestadoresCalculo tfoot tr').appendTo('#tblPrestadoresCalculo thead');
});

function inicializa_controles_calculo(procesadoAntImp,procesadoImp,procesadoDespImp) {
  var procesado = ( (procesadoAntImp == 1 && procesadoImp == 1 && procesadoDespImp == 1) ? 1 : 0),
      txtTitulo = (procesado == 1 ? 'SE HAN APLICADO TODOS LOS CONCEPTOS PARA EL CÁLCULO' : 'NO SE HAN APLICADO TODOS LOS CONCEPTOS PARA EL CÁLCULO'),
      txtBoton = (procesado == 1 ? ' Re-Calcular' : ' Calcular') + ' Conceptos'; //(Antes de Impuestos, Impuestos, Después de Impuestos, ISSTEY)

  $('#bcompl').val(procesado);
  $("#tituloComp strong").html(txtTitulo);
  $('#btnCalculaConceptos').html('<i class="fas fa-calculator"></i></span>'+txtBoton);

  return false;
}

function carga_prestadores_calculo(){
  var tabla = $('#tblPrestadoresCalculo').DataTable();

  $.ajax({
    url   : '<?= base_url() ?>prestadores/trae_prestadores_calculo',
    type: "POST",
    data: '',
    dataType: "JSON",
    beforeSend: function() {
      $('#divTabla').hide();
      $('.btnCalculo').prop('disabled',true);
      showLoading("Procesando","Consultando prestadores...");
    },
    success : function(data){
      if (data.status == false) {
        alerta_emergente(data.message,"warning");
        $('#smartwizard').smartWizard('prev');
        return false;
      }
      else {
        var prestadores = data.prestadores,
            txtResultado = '',
            btnCalc = '';
        tabla.clear().draw();
        for (var i in prestadores) {
          txtResultado = ( ($.inArray(prestadores[i].PrestadorID,data.procesados) !== -1) ?
                            '<span class="text-success"><i class="fa fa-check"></i></span> <strong>Procesado</strong>' : '<span class="text-warning"><i class="fa fa-exclamation"></i></span> <strong>No procesado</strong>'
                         );
          btnAcc =
                   '<div class="col-md-12 text-center">'+
                   ' <div class="btn-group text-center" role="group" aria-label="Acciones">'+
                   '  <button type="button" class="btn btn-white btn-xs bg-silver-darker btnCalculo" onclick="calcular_por_empleado(this);" title="Cálculo manual"><i class="fas fa-calculator"></i></button>'+
                   '  <button type="button" class="btn btn-white btn-xs bg-silver-darker btnCalculo" onclick="ver_det_impuestos(this);" title="Detalle de Impuestos"><i class="fas fa-dollar-sign"></i></button>'+
                   '  <button type="button" class="btn btn-white btn-xs bg-silver-darker btnCalculo" onclick="ver_det_conceptos(this);" title="Detalle de Conceptos"><i class="fas fa-clipboard-list"></i></button>'+
                   // '  <button type="button" class="btn btn-white btn-xs bg-silver-darker btnCalculo" onclick="ver_conf_empleado(this);" title="Configurar conceptos por Empleado"><i class="fas fa-cog"></i></button>'+
                   ' </div>'
                   '</div>';

          tabla.row.add(
             [ prestadores[i].PrestadorID,
               prestadores[i].Credencial,
               txtResultado,
               btnAcc,
             ]
          );
        }
        tabla.rows().select();
        tabla.columns.adjust().draw();

        $('#divTabla').show();
      }
    },
    error: function(XMLHttpRequest, errMsg, exception){
      var msg = "jQuery message: "+errMsg+" XMLHttpRequest: "+StatusMsg(XMLHttpRequest.status);
      alerta_emergente(msg, 'error');
    },
    complete: function( jqXHR, Status){
      hideLoading();
      $('.btnCalculo').prop('disabled',false);
    }
  });
}

function generar_conceptos_prestadores(tabla) {
  var tablaCon = $('#'+tabla).DataTable(),
      numPrestadores = tablaCon.rows({selected : true}).indexes().length,
      totalnumPrestadores = tablaCon.rows().indexes().length;
  if ($('#bcompl').val() == 1) {
    swal.fire({
        title: "Alerta",
        text: "Para re-calcular los conceptos deberá repetir todo el proceso (excepto Registros Iniciales), ¿Desea Re-Calcular?",
        icon: "warning",
        showCancelButton: true,
        showLoaderOnConfirm: true,
        allowOutsideClick: false,
        preConfirm: function () {
            return new Promise(function(resolve) {
                $.ajax({
                    url: "<?=base_url();?>index.php/prestadores/reiniciar_proceso",
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
                        inicializa_controles_calculo(0,0,0,0);
                        carga_prestadores_calculo();
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
    if (numPrestadores === 0) {
      alerta_emergente('Debe seleccionar un prestador para generar impuestos.','warning');
      return false;
    }

    var registros = tablaCon.rows( {selected: true} ).data().toArray();
    swal.fire({
        title: "Alerta",
        text: "Se realizará el cálculo para "+numPrestadores+ " prestador(es), ¿desea continuar?",
        icon: "warning",
        showCancelButton: true,
        showLoaderOnConfirm: true,
        allowOutsideClick: false,
        preConfirm: function () {
          return new Promise(function(resolve) {
            $.ajax({
              url: "<?=base_url();?>index.php/prestadores/calcular_conceptos_prestadores_forzado",
              type: "POST",
              async: true,
              data: {registros:JSON.stringify(registros)},
              dataType: "JSON",
              beforeSend: function() {
                $('.btnCalculo').prop('disabled',true);
                var dt = new Date(),
                    time = ('0'+dt.getHours()).slice(-2) + ":" + ('0'+dt.getMinutes()).slice(-2) + ":" + ('0'+dt.getSeconds()).slice(-2);
                showLoading("Procesando","<p>Generando conceptos para "+tablaCon.rows({selected : true}).indexes().length+" prestadores(s)...</p> <p> Proceso iniciado: "+time+"</p>");
              },
              error: function(xhr, textStatus, errorThrown){
          			if (xhr.status == 500) { alerta_emergente("Error interno del servidor, intente de nuevo más tarde.", "error");	}
          			else if (xhr.status == 404) { alerta_emergente("Página no encontrada, avise al Departamento de Servicios y Redes", "warning"); }
          			else alerta_emergente("Mensaje de Error: "+textStatus+",  Solicitud XHR: "+StatusMsg(xhr.status), "error");
          			return false;
          		},
              success: function(data){
                if (data.status == false) {
                  alerta_emergente(data.message,"warning");
                }
                else {
                  alerta_emergente(data.message,"info");
                  if (data.recalculo){ inicializa_controles_calculo(1,1,1,1); }
                  var idEmpleado = 0;
                  tablaCon.rows( { selected: true } ).every( function ( rowIdx, tableLoop, rowLoop ) {
                    idEmpleado = tablaCon.cell( rowIdx, 0 ).data();

                    if ($.type(data.resultado[idEmpleado]) != "undefined") {
                      if (data.resultado[idEmpleado].error == false) { tablaCon.cell( rowIdx, 2 ).data('<span class="text-success"><i class="fa fa-check"></i></span> <strong>' + data.resultado[idEmpleado].msj + '</strong>'); }
                      else { tablaCon.cell( rowIdx, 2 ).data('<span class="text-danger"><i class="fa fa-exclamation"></i></span> <strong>' + data.resultado[idEmpleado].msj + '</strong>'); }
                    }
                    else { tablaCon.cell( rowIdx, 2 ).data('<span class="text-warning"><i class="fa fa-exclamation"></i></span> <strong>No procesado</strong>'); }
                  });
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
  return false;
}

function calcular_por_prestador(btn) {
  var tabla         = $('#tblEmpleadosCalculo').DataTable(),
      data          = tabla.row( $(btn).parents('tr') ).data(),
      idEmpleado    = data[0],
      credencial    = data[1],
      idPeriodoPago = $("#idPeriodoPago").val();

  if (typeof(idEmpleado) == "undefined" || idEmpleado === "" || idEmpleado == 0) {
    alerta_emergente("Ocurrió un error al obtener la información del empleado. Por favor intente de nuevo más tarde.","warning")
    return false;
  }

  if (typeof(idPeriodoPago) == "undefined" || idPeriodoPago === "" || idPeriodoPago == 0) {
    alerta_emergente("Ocurrió un error al obtener la información del período de pago. Por favor intente de nuevo más tarde.","warning")
    return false;
  }

  swal.fire({
     title: "Calcular",
     html: '<p>Se calculará la nómina del empleado '+credencial+'.</p><p>¿Desea Continuar?</p>',
     icon: "question",
     showCancelButton: true,
     allowOutsideClick: false,
     preConfirm: function () {
       return new Promise(function(resolve) {
         Carga_Metodo("<?=base_url();?>nomina/calcula_nomina_empleado_quincenal", {idEmpleado:idEmpleado,idPeriodoPago:idPeriodoPago}, function(data){ exito_calcula_nomina_prestador(data,btn); },"Calculando para el empleado "+credencial+"...");
        });
      }
    });

  return false;
}

function exito_calcula_nomina_prestador(respuesta,btn) {
  var tabla = $('#tblEmpleadosCalculo').DataTable(),
      rowIdx = tabla.row( $(btn).parents('tr') ).index();

  if (respuesta.status == false) {
    alerta_emergente(respuesta.message, "warning");
    if (respuesta.sinRegIni) { tablaCon.cell( rowIdx, 2 ).data('<span class="text-danger"><i class="fa fa-exclamation"></i> Error: no se han generado los registros iniciales.</span>'); }
    else { tabla.cell( rowIdx, 2 ).data('<span class="text-warning"><i class="fa fa-exclamation"></i></span> No procesado'); }
  }
  else {
    alerta_emergente(respuesta.message,"success");
    tabla.cell({row: rowIdx, column: 2}).data('<span class="text-success"><i class="fa fa-check"></i></span> Procesado');
  }
}

function ver_det_impuestos(btn) {
  var tabla         = $('#tblEmpleadosCalculo').DataTable(),
      data          = tabla.row( $(btn).parents('tr') ).data(),
      idEmpleado    = data[0],
      credencial    = data[1],
      idPeriodoPago = $("#idPeriodoPago").val();

  cargamodalGenerica('<?= base_url() ?>nomina/carga_det_impuestos', '#modContenidoXL', '#modGeneralXL', {idEmpleado:idEmpleado,idPeriodoPago:idPeriodoPago}, "Detalle de impuestos", 1);
  return false;
}

function ver_det_conceptos(btn) {
  var tabla         = $('#tblPrestadoresCalculo').DataTable(),
      data          = tabla.row( $(btn).parents('tr') ).data(),
      idEmpleado    = data[0],
      credencial    = data[1],
      idPeriodoPago = $("#idPeriodoPago").val();

  cargamodalGenerica('<?= base_url() ?>nomina/carga_det_conceptos', '#modContenido', '#modGeneral', {idEmpleado:idEmpleado}, "Detalle de conceptos por quincena", 1);
  return false;
}

function ver_conf_empleado(btn) {
  var tabla         = $('#tblPrestadoresCalculo').DataTable(),
      data          = tabla.row( $(btn).parents('tr') ).data(),
      idEmpleado    = data[0],
      credencial    = data[1],
      idPeriodoPago = $("#idPeriodoPago").val();

  cargamodalGenerica('<?= base_url() ?>nomina/carga_conf_percepcionesdeducciones', '#modContenidoXL', '#modGeneralXL', {idEmpleado:idEmpleado,idPeriodoPago:idPeriodoPago,credencial:credencial,calculoCierre:2}, "Configuración de Percepciones y Deducciones", 1);
  return false;
}

function cargaOpcionesCalc(columna) {
  var tablaR = $('#tblPrestadoresCalculo').DataTable(),
      selector = $('#filtrocolCalc_'+columna),
      selectorVal = selector.val();

  selector.find('option').remove();
  selector.append('<option value="" style="font-weight:bold;">MOSTRAR TODO</option>');
  tablaR.column(columna,{ filter : 'applied'}).data().unique().sort().each(function(d, j) {

    if (d.indexOf("span") >= 0) {
      var element = $(d);
      element.children().find("strong");
      var d = element.text().replace(/<br\s*\/?>/gi,'');
    }

    selector.append('<option value="' + d + '">'+d+'</option>');
  });
  if (selectorVal != '') selector.val(selectorVal);
}

</script>
