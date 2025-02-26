<?php
//para pruebas en fechas incorrectas.
// $fechavalida = TRUE;
?>

<input type="hidden" name="fechavalida" id="fechavalida" value="<?= $fechavalida; ?>">

<div class="row mb-2">
  <?php
  // $titulo = ( !empty($control->RegsIniciales) ? 'SE HAN GENERADO LOS REGISTROS INICIALES' : 'NO SE HAN GENERADO LOS REGISTROS INICIALES' );
  // $btnTitulo = ( !empty($control->RegsIniciales) ? 'Re-Generar Registros Iniciales' : 'Generar Registros Iniciales' );
  ?>
  <div class="col-md-12 mb-2">
		<div class="d-grid gap-2">
			<!-- <button type="button" class="btn btn-danger btn-sm btnValida" name="btnValida" id="btnValida" title="Muestra a los empleados que le falta alguna configuración/pagos ext. vigentes, etc." onclick="carga_validaciones();"><i class="fas fa-shopping-basket"></i> Validar ANTES DE CALCULAR <i class="fas fa-external-link-alt"></i></button> -->
			<!-- <button type="button" class="btn btn-danger btn-sm btnValida" name="btnValidaFaltas" id="btnValidaFaltas" title="Verifica faltas no procesadas" onclick="validar_faltas_incorrectas();"><i class="fa-regular fa-clock"></i> Validar FALTAS</button> -->
		</div>
  </div>

 	<div class="col-md-12">
    <div class="alert alert-warning fade show" id="tituloRegIni">
      <strong></strong>
    </div>
  </div>

  <div class="col-md-12">
    <div class="d-grid gap-2">
      <button type="button" class="btn btn-success btn-lg btnCalculo" name="btnRegini" id="btnRegini" onclick="generar_registros_iniciales('tblEmpleadosRegIni');"></button>
    </div>
  </div>
</div>

<div class="row mb-2">
  <div class="col-3">
    <div class="form-group">
      <label for="fechaini_periodo" class="form-label">Fecha de inicio del periodo abierto</label>
      <input type="text" class="form-control form-control-sm" id="fechaini_periodo" name="fechaini_periodo" value="<?= cambiaf_a_normal($control->FechaIni); ?>">
    </div>
  </div>
  <div class="col-md-3">
    <div class="form-group">
      <label for="fechafin_periodo" class="form-label">Última fecha procesada (asistencias)</label>
      <input type="text" class="form-control form-control-sm" id="fechafin_periodo" name="fechafin_periodo" value="<?= (!empty($ctrlasistencia->Fecha) ? cambiaf_a_normal($ctrlasistencia->Fecha) : date('d/m/Y')); ?>">
    </div>
  </div>

	<div class="col-6">
    <div class="form-group">
			<label class="form-label">&nbsp;</label>
			<div>
				<a href="javascript:;" name="btnCambiarFFin" id="btnCambiarFFin" class="btn btn-inverse btn-sm" onclick="habilita_ffinal();"><i class="fas fa-calendar-day"></i> Cambiar F. Final</a>
				<a href="javascript:;" name="btnValidaFaltas" id="btnValidaFaltas" class="btn btn-gray btn-sm" title="Verificar asistencias no procesadas" onclick="validar_faltas_incorrectas();"><i class="fa-regular fa-clock"></i> Validar faltas</a>
			</div>
		</div>
	</div>

</div>

<div id="div-faltas-incorrectas" class="row" style="display:none;">
	<div class="col">
		<div class="alert alert-danger fade show fw-bold">
			<span class="msj-faltas-incorrectas"></span>
			<button class="btn btn-xs btn-inverse pull-right" id="btnRevisarFaltas" onclick="revisar_faltas_incorrectas();" title="Revisar faltas incorrectas (asistencias no procesadas)"><i class="fa-solid fa-check"></i> Revisar</button>
		</div>
	</div>
</div>

<?php
if (empty($fechavalida)) {
?>
<div class="note alert-warning">
  <div class="note-icon"><i class="fas fa-exclamation-triangle"></i></div>
  <div class="note-content">
    <h4><b>Error</b></h4>
    <p>Por favor verifica las fechas del periodo abierto. Se encontraron inconsistencias y es necesario corregirlas antes de continuar.</p>
    <p><b>Fecha de Inicio:</b> <?= cambiaf_a_normal($control->FechaIni); ?> (1 para la primera quincena, 16 para la segunda)</p>
    <p><b>Fecha Final:</b> <?= (!empty($control->FechaFin) ? cambiaf_a_normal($control->FechaFin) : date('d/m/Y')); ?> (15 para la primera quincena, último día del mes para la segunda)</p>
		<button class="btn btn-xs btn-default" id="btnConfigurarPeriodo" onclick="CargarModulo('<?=base_url();?>','nomina/CargarConfirmar');" title="Configurar fechas del periodo"><i class="fa-solid fa-gears"></i> Configurar</button>
  </div>
</div>
<?php
}
else {
?>
<div class="row mt-2">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <div class="table-responsive" id="divTabla">
          <table id="tblEmpleadosRegIni" class="table table-bordered table-condensed" cellspacing="0" width="100%" style="display:none;">
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

    if (!$.fn.dataTable.isDataTable( '#tblEmpleadosRegIni' )) {
      var tablaEmpRI = $('#tblEmpleadosRegIni').DataTable({
        // initComplete: function() {
        //   this.api().columns([1,2,3]).every(function() {
        //     var column = this;
        //     var select = $('<select id="filtrocolRI_'+column.index()+'" class="slt_filtro"><option value=""></option></select>')
        //       .appendTo($(column.footer()).empty())
        //       .on('change', function() {
        //         var val = $.fn.dataTable.util.escapeRegex(
        //           $(this).val()
        //         );
        //         column
        //           .search(val ? '^' + jQuery.fn.DataTable.ext.type.search.string( val ) + '$' : '', true, false)
        //           .draw();
        //       })
        //       .on('click', function() {
        //         cargaOpcionesRI(column.index());
        //       });
        //   });
				//
        //   this.api().rows().select();
        //   this.api().columns.adjust().draw();
        //   $("#tblEmpleadosRegIni").show();
        // },
				initComplete: function () {
					this.api().columns( [1,2,3] ).every(function() {
						var column = this;
						// var select = $('<select id="filtrocol_'+column.index()+'" class="slt_filtro"><option value=""></option></select>')
						var select = $('<select id="filtrocolRI_'+column.index()+'" class="slt_filtro form-select form-select-sm"><option value=""></option></select>')
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
							  cargaOpcionesRI(column.index());
							});
					});
	        $('#tblEmpleadosRegIni tfoot tr').insertAfter('#tblEmpleadosRegIni thead');
				  this.api().rows().select();
				  this.api().columns.adjust().draw();
				  $("#tblEmpleadosRegIni").show();
				},
        language: {
          "url": "assets/plugins/DataTables/Spanish.json",
          "processing": "Cargando..."
        },
				// dom: '<"row"<"col-sm-5"B><"col-sm-7"fr>>t<"row"<"col-sm-5"i><"col-sm-7"p>>',
        // dom: "lBfrtip",
				layout: {
					topStart: {
							buttons: [
								'pageLength',
								{extend: 'excel', text:' <i class="far fa-file-excel"></i> ', autoFilter:true, className: 'btn-sm btn-default', titleAttr: 'Exportar resultado en Excel',  filename:'Reporte', exportOptions: { columns: [1,2,3] }, messageTop: 'Empleados para Registros Iniciales' }
							]
					}
				},
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
               if (type === 'display') {
                  data = '<div class="checkbox"><input type="checkbox" class="form-check-input dt-checkboxes"><label></label></div>';
               }
               return data;
            },
            checkboxes: { 'selectRow': true, 'selectAllRender': '<div class="checkbox"><input type="checkbox" class="form-check-input dt-checkboxes" title="Seleccionar Todos"><label></label></div>' } }
          // { orderable: false, className: 'select-checkbox', targets: 0 }
        ],
        // buttons: [
				// 	'pageLength',
        //   { extend: 'excel', text: ' <i class="far fa-file-excel"></i> ', autoFilter:true, className: 'btn-sm btn-default', titleAttr: 'Exportar resultado en Excel',  filename:'Reporte', exportOptions: { columns: [1,2,3] }, messageTop: 'Empleados para Registros Iniciales' },
        // ],
      });
    }

    var procesado = "<?= $control->RegsIniciales; ?>";
    inicializa_controles_regini(procesado);
    <?php
    if (!empty($fechavalida)) {
    ?>
      carga_empleados_regini();
    <?php
    }
    ?>
 });

  function inicializa_controles_regini(procesado) {
    let valido = Boolean( $('#fechavalida').val() );
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

  function carga_empleados_regini() {
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
        if (data.status == false) {
          alerta_emergente(data.message,"warning");
          $('#smartwizard').smartWizard('prev');
          return false;
        }
        else{
          let empleados = data.empleados,
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

  function generar_registros_iniciales(tabla) {
    let tablaRI = $('#'+tabla).DataTable();

    if (tablaRI.rows({selected : true}).indexes().length === 0) {
      alerta_emergente('Debe seleccionar un empleado para generar los registros iniciales.','info');
      return false;
    }

    let fechaini  = $('#fechaini_periodo').val(),
        fechafin  = $('#fechafin_periodo').val(), continuar = false,
        registros = tablaRI.rows( {selected: true} ).data().toArray(),
        numEmpleados = tablaRI.rows({selected : true}).indexes().length,
				totalnumEmpleados = tablaRI.rows().indexes().length;

        swal.fire({
            title: "Alerta",
            text: "Se generarán los registros iniciales para "+numEmpleados+ " empleado(s), ¿desea continuar?",
            icon: "warning",
            showCancelButton: true,
            showLoaderOnConfirm: true,
            allowOutsideClick: false,
						input: 'checkbox',
						inputValue: (numEmpleados == totalnumEmpleados ? 1 : 0),
						inputPlaceholder: 'Confirmar proceso de registros iniciales.',
            preConfirm: function () {
                return new Promise(function(resolve) {
									var confirmaRI = ($('#swal2-checkbox').is(':checked') ? 1 : 0);
                  $.ajax({
                    url: "<?=base_url();?>index.php/nomina/generar_registros_iniciales",
                    type: "POST",
                    async: true,
                    data: {confirmaRI:confirmaRI,fechaini:fechaini,fechafin:fechafin,registros:JSON.stringify(registros)},
                    dataType: "JSON",
                    beforeSend: function() {
                      $('.btnCalculo').prop('disabled',true);
                      var dt = new Date(),
                          time = ('0'+dt.getHours()).slice(-2) + ":" + ('0'+dt.getMinutes()).slice(-2) + ":" + ('0'+dt.getSeconds()).slice(-2);
                      showLoading("Procesando","Generando Registros Iniciales para "+numEmpleados+" empleado(s)... Proceso iniciado: "+time);
                    },
                    error: function(xhr, textStatus, errorThrown){
                			if ( xhr.status == 500 ) { alerta_emergente("Error interno del servidor, intente de nuevo más tarde.", "error");	}
                			else if ( xhr.status == 404 ) { alerta_emergente("Página no encontrada, avise al Departamento de Servicios y Redes", "warning"); }
                			else alerta_emergente("Mensaje de Error: "+textStatus+",  Solicitud XHR: "+StatusMsg(xhr.status), "error");
                			return false;
                		},
                    success: function(data){
                      if( data.status == false ) {
                        alerta_emergente(data.message,"warning");
                      }
                      else{
                        alerta_emergente(data.message,"info");
                        inicializa_controles_regini(1);
                        tablaRI.rows( { selected: true } ).every( function ( rowIdx, tableLoop, rowLoop ) {
                          var idEmpleado = tablaRI.cell( rowIdx, 0 ).data();
                          if( $.type(data.errores[idEmpleado]) != "undefined" ){
                            if( data.errores[idEmpleado].id == idEmpleado ){
                              tablaRI.cell( rowIdx, 3 ).data(((data.resultado[idEmpleado].dias != false) ? '<span class="text-success"><i class="fa fa-check"></i></span> <strong>Días procesados: '+data.resultado[idEmpleado].dias+'</strong><br>' : '')+
                                                             '<span class="text-warning"><i class="fa fa-exclamation"></i></span>'+
                                                             '<strong> Alerta. '+data.errores[idEmpleado].error +'</strong>');
                            }
                          }
                          else{
                            tablaRI.cell( rowIdx, 3 ).data('<span class="text-success"><i class="fa fa-check"></i></span><strong> Días Procesados: '+data.resultado[idEmpleado].dias+'</strong>');
                          }
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

  function cargaOpcionesRI(columna) {
		let tablaR = $('#tblEmpleadosRegIni').DataTable(),
		    selector = $('#filtrocolRI_'+columna),
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
		  if ($.inArray(columna,colFecha) != -1) {
		    selector.append('<option value="' + fecha_sql_a_normal(d) + '">'+fecha_sql_a_normal(d)+'</option>');
		  }
		  else if ($.inArray(columna,colMoneda) != -1) {
		    selector.append('<option value="' + formatCurrency(d) + '">'+formatCurrency(d)+'</option>');
		  }
			else if ($.inArray(columna,colCambiaValor) != -1) {
				selector.append('<option value="' + cambia_valor_celda(d) + '">'+cambia_valor_celda(d)+'</option>');
			}
		  else {
		    var valor = d.replace(/<br\s*\/?>/gi,'');
		    selector.append('<option value="' + valor + '">'+d+'</option>');
		  }
		});
		if (selectorVal != '') selector.val(selectorVal);
  }

	function validar_faltas_incorrectas() {
    Carga_Metodo("nomina/obtener_empleados_faltas_incorrectas", "", function finalizaCarga(respuesta){

		  if (typeof(respuesta.empleados.Empleados) == "undefined" || respuesta.empleados.Empleados === "" || respuesta.empleados.Empleados == 0 || respuesta.empleados.Empleados == null) {
				$("#div-faltas-incorrectas").hide();
				$('.msj-faltas-incorrectas').empty();
				alerta_emergente("No se encontraron empleados con faltas incorrectas (asistencias no procesadas).","success");
			}
			else {
				$("#div-faltas-incorrectas").show();
				$('.msj-faltas-incorrectas').html("Se encontraron: "+respuesta.empleados.Empleados+ " empleados con faltas incorrectas (asistencias no procesadas).");
			}
		}, "Cargando...");
	}

	function revisar_faltas_incorrectas() {
	  cargamodalGenerica('nomina/revisar_faltas_incorrectas', '#modContenido', '#modGeneral', "", "Empleados con faltas incorrectas (asistencias no procesadas)", 1);
	  return false;
	}

  //  function carga_validaciones() {
	//
  //   cargamodalGenerica('<?= base_url() ?>validaciones/valida_proceso', '#modContenidoXL', '#modGeneralXL', {etapa:1}, "Validación de registros iniciales", 1);
  //   return false;
  // }



</script>
