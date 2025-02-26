<input type="hidden" name="fechavalida" id="fechavalida" value="<?= $fechavalida; ?>">

<div class="row mb-2">
  <!-- <div class="col-md-12">
	  <div class="form-group">
	    <label for="btnValidar"><b>Validar antes de aplicar registros iniciales</b></label>
	    <button type="button" class="btn btn-warning btn-sm btn-block btnValidar" name="btnValidar" id="btnValidar" onclick="validar();"><i class="fas fa-shopping-basket"></i> Validar datos <i class="fas fa-external-link-alt"></i></button>
	  </div>
  </div> -->

  <div class="col-md-12">
    <div class="alert alert-warning fade show" id="tituloRegIni">
      <strong></strong>
    </div>
  </div>

	<div class="col-md-12">
		<div class="d-grid gap-2">
			<button type="button" class="btn btn-success btn-lg btnCalculo" name="btnRegini" id="btnRegini" onclick="generar_registros_iniciales('tblPrestadoresRegIni');"></button>
		</div>
	</div>
</div>

<div class="row mb-2">
  <div class="col-md-4">
    <div class="form-group">
      <label for="fechaini_periodo"><b>Fecha de inicio del periodo abierto</b></label>
      <input type="text" class="form-control" id="fechaini_periodo" name="fechaini_periodo" value="<?= cambiaf_a_normal($control->FechaIni); ?>">
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      <label for="fechafin_periodo"><b>Última fecha procesada</b></label>
      <input type="text" class="form-control" id="fechafin_periodo" name="fechafin_periodo" value="<?= (!empty($ctrlasistencia->Fecha) ? cambiaf_a_normal($ctrlasistencia->Fecha) : date('d/m/Y')); ?>">
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      <label for="btnCambiarFFin">&nbsp;</label>
      <div>
        <button type="button" name="btnCambiarFFin" id="btnCambiarFFin" class="btn btn-inverse btn-sm" onclick="habilita_ffinal();"><i class="fas fa-calendar-day"></i> Cambiar F. Final</button>
      </div>
    </div>
  </div>
</div>

<?php
if (empty($fechavalida)) {
?>
<div class="note note-danger">
  <div class="note-icon"><i class="fas fa-exclamation-triangle"></i></div>
  <div class="note-content">
    <h4><b>Error</b></h4>
    <p>Por favor verifique las fechas del periodo abierto. Se encontraron inconsistencias y se recomienda corregirlas antes de continuar.</p>
    <p><b>Fecha de Inicio:</b> <?= cambiaf_a_normal($control->FechaIni); ?></p>
    <p><b>Fecha Final:</b> <?= (!empty($ctrlasistencia->Fecha) ? cambiaf_a_normal($ctrlasistencia->Fecha) : date('d/m/Y')); ?> </p>
  </div>
</div>
<?php
}
else {
?>
<div class="row mt-2">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="table-responsive" id="divTabla">
          <table id="tblPrestadoresRegIni" class="table table-bordered table-condensed" cellspacing="0" width="100%" style="display:none;">
             <thead>
               <tr>
                 <th></th>
                 <th>Credencial</th>
                 <th>Nombre</th>
                 <th>Estado</th>
               </tr>
             </thead>
             <tfoot>
              <tr>
                <th></th>
                <th>Credencial</th>
                <th>Nombre</th>
                <th>Estado</th>
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
<?php
}
?>

<script type="text/javascript">
  setTimeout(function FuncionesIniciales(){
    $("#fechaini_periodo, #fechafin_periodo").datepicker({
      format: "dd/mm/yyyy",
      weekStart: 1,
      maxViewMode: 3,
      language: "es",
      orientation: "bottom auto",
      autoclose: true,
      todayBtn: "linked",
      endDate: '+1d',
      datesDisabled: '+1d',
      todayHighlight: true,
    }).inputmask({'alias': 'datetime', 'inputFormat': 'dd/mm/yyyy', 'placeholder': 'dd/mm/yyyy', 'min':'01/01/1900'});

    if (!$.fn.dataTable.isDataTable( '#tblPrestadoresRegIni' )) {
      var tablaEmpRI = $('#tblPrestadoresRegIni').DataTable({
        initComplete: function() {
          this.api().columns([1,2,3]).every(function() {
            var column = this;
            var select = $('<select id="filtrocol_'+column.index()+'" class="slt_filtro"><option value=""></option></select>')
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
                cargaOpciones(column.index());
              });
          });

          this.api().rows().select();

          this.api().columns.adjust().draw();
          $("#tblPrestadoresRegIni").show();
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
          // { className: "dt-center", targets: '_all' },
          { targets: 0,
            render: function(data, type, row, meta){
               if(type === 'display'){
                  data = '<div class="checkbox"><input type="checkbox" class="form-check-input dt-checkboxes"><label></label></div>';
               }
               return data;
            },
            checkboxes: { 'selectRow': true, 'selectAllRender': '<div class="checkbox"><input type="checkbox" class="form-check-input dt-checkboxes" title="Seleccionar Todos"><label></label></div>' }
          }
          // { orderable: false, className: 'select-checkbox', targets: 0 }
        ],
				buttons: [
					'pageLength',
          { extend: 'excel', text: ' <i class="far fa-file-excel"></i> ', autoFilter:true, className: 'btn-sm btn-default', titleAttr: 'Exportar resultado en Excel',  filename:'Reporte', exportOptions: { columns: [1,2,3] }, messageTop: 'Empleados para Registros Iniciales' },
        ],
      });
    }

    var procesado = "<?= $control->RegsIniciales; ?>";
    inicializa_controles_regini(procesado);

    <?php
    if (!empty($fechavalida)) {
    ?>
      carga_prestadores_regini();
    <?php
    }
    ?>

  $('#tblPrestadoresRegIni tfoot tr').appendTo('#tblPrestadoresRegIni thead');
 });

  function inicializa_controles_regini(procesado) {
    var valido = Boolean( $('#fechavalida').val() );
        txtTitulo = (procesado == 1 ? 'SE HAN GENERADO LOS REGISTROS INICIALES' : 'NO SE HAN GENERADO LOS REGISTROS INICIALES'),
        txtBoton = (procesado == 1 ? ' Re-Generar Registros Iniciales' : ' Generar Registros Iniciales');

    $('#bregini').val(procesado);
    $("#tituloRegIni strong").html(txtTitulo);
    $('#btnRegini').html('<i class="far fa-calendar-alt"></i>'+txtBoton);

    $('#btnRegini').prop('disabled',!valido);
    $('#fechaini_periodo').prop('disabled',true);
    $('#fechafin_periodo').prop('disabled',true);
    $('#btnCambiarFFin').prop('disabled',!valido);
  }

  function habilita_ffinal() {
    $('#fechafin_periodo').prop('disabled',false);
    return false;
  }

  function carga_prestadores_regini() {
    var tabla = $('#tblPrestadoresRegIni').DataTable();

    $.ajax({
      url   : '<?= base_url() ?>prestadores/trae_prestadores_regini',
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
              txtResultado = '';
          tabla.clear().draw();

          for (var i in prestadores) {
            // txtResultado = ( ($.type(data.diasprocesados[prestadores[i].Id]) != "undefined") ?
            //                   '<span class="text-success"><i class="fa fa-check"></i></span><strong> Días Procesados: '+data.diasprocesados[prestadores[i].Id]+'</strong>' :
            //                   '<span class="text-danger"><i class="fa fa-exclamation"></i></span><strong> No procesado</strong>'
            //                );
						txtResultado = (($.type(data.diasprocesados[prestadores[i].Id]) != "undefined") ?
                              '<span class="text-success"><i class="fa fa-check"></i></span><strong> Procesado</strong>' :
                              '<span class="text-danger"><i class="fa fa-exclamation"></i></span><strong> No procesado</strong>'
                           );

            tabla.row.add(
               [ prestadores[i].Id,
                 prestadores[i].Credencial,
                 prestadores[i].NombreCompleto,
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
  			if (xhr.status == 500) { alerta_emergente("Error interno del servidor, intente de nuevo más tarde.", "error");	}
  			else if (xhr.status == 404) { alerta_emergente("Página no encontrada, avise al Departamento de Servicios y Redes", "warning"); }
  			else alerta_emergente("Mensaje de Error: "+textStatus+",  Solicitud XHR: "+StatusMsg(xhr.status), "error");
  			return false;
  		},
      complete: function( jqXHR, Status){
        hideLoading();
        $('.btnCalculo').prop('disabled',false);
      }
    });
  }

  function generar_registros_iniciales(tabla) {
    var tablaRI = $('#'+tabla).DataTable();

    if (tablaRI.rows({selected : true}).indexes().length === 0) {
      alerta_emergente('Debe seleccionar un prestador para generar los registros iniciales.','info');
      return false;
    }

    var fechaini  = $('#fechaini_periodo').val(),
        fechafin  = $('#fechafin_periodo').val(), continuar = false,
        registros = tablaRI.rows( {selected: true} ).data().toArray()

    $.ajax({
      url: "<?=base_url();?>index.php/prestadores/generar_regini_prestadores",
      type: "POST",
      async: true,
      data: {fechaini:fechaini,fechafin:fechafin,registros:JSON.stringify(registros)},
      dataType: "JSON",
      beforeSend: function() {
        $('.btnCalculo').prop('disabled',true);
        var dt = new Date(),
            time = ('0'+dt.getHours()).slice(-2) + ":" + ('0'+dt.getMinutes()).slice(-2) + ":" + ('0'+dt.getSeconds()).slice(-2);
        showLoading("Procesando","Generando Registros Iniciales para "+tablaRI.rows({selected : true}).indexes().length+" prestador(es)... Proceso iniciado: "+time);
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
          inicializa_controles_regini(1);
          tablaRI.rows( { selected: true } ).every( function ( rowIdx, tableLoop, rowLoop ) {
            var idPrestador = tablaRI.cell( rowIdx, 0 ).data();
            if ($.type(data.errores[idPrestador]) != "undefined") {
              if (data.errores[idPrestador].id == idPrestador) {
								tablaRI.cell( rowIdx, 3 ).data(((data.resultado[idPrestador].dias != false) ? '<span class="text-success"><i class="fa fa-check"></i></span><b> Procesado</b><br>' : '')+
                                               '<span class="text-warning"><i class="fa fa-exclamation"></i></span>'+
                                               '<strong> Alerta. '+data.errores[idPrestador].error +'</strong>');
                // tablaRI.cell( rowIdx, 3 ).data(((data.resultado[idPrestador].dias != false) ? '<span class="text-success"><i class="fa fa-check"></i></span> <strong>Días procesados: '+data.resultado[idPrestador].dias+'</strong><br>' : '')+
                //                                '<span class="text-warning"><i class="fa fa-exclamation"></i></span>'+
                //                                '<strong> Alerta. '+data.errores[idPrestador].error +'</strong>');
              }
            }
            else {
              tablaRI.cell( rowIdx, 3 ).data('<span class="text-success"><i class="fa fa-check"></i></span><b> Días Procesados: '+data.resultado[idPrestador].dias+'</b>');
            }
          });
        }
      },
      complete: function( jqXHR, Status){
        hideLoading();
        $('.btnCalculo').prop('disabled',false);
      }
    });

  }

  function cargaOpciones(columna) {
    var tablaR = $('#tblPrestadoresRegIni').DataTable(),
        selector = $('#filtrocol_'+columna),
        selectorVal = selector.val();

    selector.find('option').remove();
    selector.append('<option value="" style="font-weight:bold;">MOSTRAR TODO</option>');
    tablaR.column(columna,{ filter : 'applied'}).data().unique().sort().each(function(d, j) {
      if (d.indexOf("span") >= 0) {
        var element = $(d);
        element.find("span").empty();
        element.find("span").remove();
        element.children().find("strong");
        var d = element.text().replace(/<br\s*\/?>/gi,'');
      }

      selector.append('<option value="' + d + '">'+d+'</option>');
    });
    if (selectorVal != '') selector.val(selectorVal);
  }


   function validar() {
    cargamodalGenerica('<?= base_url() ?>validaciones/carga_validaciones', '#modContenidoXL', '#modGeneralXL', "", "Validaciones", 1);
    return false;
  }

</script>
