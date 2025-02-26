<div class="row">
  <?php
  $txtResultado = (!empty($control->ConceptAntesImpu) && !empty($control->Impuestos && !empty($control->ConceptDespImpu) && !empty($control->ISSTEY)) ?
                  '<span class="text-success"><i class="fa fa-check"></i></span> Procesado' : '<span class="text-warning"><i class="fa fa-exclamation"></i></span> No procesado.' );
   ?>
   <div class="col-6">
     <div class="alert alert-warning fade show mb-0" id="tituloComp">
       <strong></strong>
     </div>
   </div>
   <div class="col-6">
     <div class="alert alert-warning show">
       <strong><?= ((float)$topeISSTEY <= 0) ? 'No se ha configurado el tope para el cálculo de ISSTEY' : 'Tope ISSTEY: $'.(float)$topeISSTEY; ?></strong>
			 <button type="button" class="btn btn-default btn-xs float-end" title="Configurar tope ISSTEY" onclick="CargarModulo('<?=base_url();?>', 'configuraciones/carga_sianom');"><i class="fa fa-cog"></i></button>
     </div>
   </div>
</div>

<div class="row">
  <div class="col-12">
    <div class="form-group">
      <div class="card border-warning mb-2">
        <div class="card-header fw-600">
          Configurar Conceptos ANTES de Impuestos
        </div>
        <div class="card-body">
          <div class="row mb-0">
            <!-- <div class="col mb-0">
              <div class="d-grid gap-2">
                <button type="button" class="btn btn-warning btn-sm btnCalculo" name="btnBonoCumples" id="btnBonoCumples" onclick="configurar_bono_cumples();"><i class="fas fa-birthday-cake"></i> Configurar: Bono por Natalicio</button>
              </div>
            </div> -->
            <div class="col mb-0">
              <div class="d-grid gap-2">
                <button type="button" class="btn btn-warning btn-sm btnCalculo" name="btnVales" id="btnVales" onclick="configurar_vales();"><i class="fas fa-shopping-basket"></i> Configurar: Vales de Despensa</button>
              </div>
            </div>
            <div class="col mb-0">
              <div class="d-grid gap-2">
                <button type="button" class="btn btn-warning btn-sm btnCalculo" name="btnValesSB" id="btnValesSB" onclick="configurar_vales_sin_base();"><i class="fas fa-shopping-basket"></i> Configurar: Vales empleados SIN BASE <i class="fas fa-external-link-alt"></i></button>
              </div>
            </div>
						<div class="col mb-0">
							<div class="d-grid gap-2">
								<button type="button" class="btn btn-warning btn-sm btnCalculo" name="btnConfVacaciones" id="btnConfVacaciones" onclick="configurar_vacaciones();" title="Actualizar vacaciones (empleados con más de una categoría)"><i class="fa-solid fa-umbrella-beach"></i> Configurar: Vacaciones <i class="fas fa-external-link-alt"></i></button>
							</div>
						</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row mb-0" id="divTipoCalculo" style="display:none;">
	<input type="hidden" id="nomTipoCalculo" name="nomTipoCalculo" value="<?= $tipoCalculo; ?>">
	<div class="col-12">
		<div class="alert alert-danger fade show">
			<strong>Tipo de Cálculo: Sueldo Base con Aguinaldo Pagado</strong>
		</div>
	</div>
</div>

<div class="row mb-2">
  <div class="col-12">
   <div class="d-grid gap-2">
     <button type="button" class="btn btn-success btn-lg btn-block btnCalculo" name="btnCalculaConceptos" id="btnCalculaConceptos" onclick="generar_conceptos_nomina('tblEmpleadosCalculo');"></button>
   </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <div class="alert alert-danger alert-dismissible" id="lblErrores" style="display:none;">
					<div id="lblErrorPagoElectronico"></div>
					<div id="lblErrorOtroPresupuesto"></div>
					<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
				</div>
        <div class="table-responsive" id="divTabla">
          <table id="tblEmpleadosCalculo" class="table table-bordered table-condensed" cellspacing="0" width="100%" style="display:none;">
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

  if (!$.fn.dataTable.isDataTable( '#tblEmpleadosCalculo' )) {
    var tablaEmpComp = $('#tblEmpleadosCalculo').DataTable({
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
				$('#tblEmpleadosCalculo tfoot tr').insertAfter('#tblEmpleadosCalculo thead');
        this.api().rows().select();
        this.api().columns.adjust().draw();
        $("#tblEmpleadosCalculo").show();
      },

      language: {
        "url": "assets/plugins/DataTables/Spanish.json",
        "processing": "Cargando..."
      },
      // dom: '<"row"<"col-sm-5"B><"col-sm-7"fr>>t<"row"<"col-sm-5"i><"col-sm-7"p>>',
			layout: {
				topStart: {
					buttons: [
						'pageLength',
		        { extend: 'excel', text: ' <i class="far fa-file-excel"></i> ', autoFilter:true, className: 'btn-sm btn-default', titleAttr: 'Exportar resultado en Excel',  filename:'Reporte', exportOptions: { columns: [1,2] }, messageTop: 'Empleados en nómina' },
						// {
						// 	text: ' <i class="fa-solid fa-upload"></i> ', className: 'btn-sm btn-default', titleAttr: 'Exportar resultado en Excel',
						// 	action: function ( e, dt, node, config ) {
						// 			carga_configuracion_calculo();
						// 	}
						// }
					],
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
        { targets: 0,
          render: function(data, type, row, meta){
             if (type === 'display') {
               data = '<div class="checkbox"><input type="checkbox" class="form-check-input dt-checkboxes"><label></label></div>';
             }
             return data;
          },
          checkboxes: { 'selectRow': true,
					'selectAllRender': '<div class="checkbox" title="Seleccionar Todo"><input type="checkbox" class="form-check-input dt-checkboxes"><label></label></div>' }
        },
        { targets: ['_all'], className: 'dt-head-center' },

      ],
    });
  }

  var procesadoAntImp = "<?= $control->ConceptAntesImpu; ?>",
      procesadoImp = "<?= $control->Impuestos; ?>",
      procesadoDespImp = "<?= $control->ConceptDespImpu; ?>",
      procesadoISSTEY = "<?= $control->ISSTEY; ?>"
			tipoCalculo = "<?= $tipoCalculo; ?>";

	if (tipoCalculo == 2) { $('#divTipoCalculo').show(); }

	inicializa_controles_calculo(procesadoAntImp,procesadoImp,procesadoDespImp,procesadoISSTEY);

  carga_empleados_calculo();
});

function inicializa_controles_calculo(procesadoAntImp,procesadoImp,procesadoDespImp,procesadoISSTEY) {
  var procesado = ( (procesadoAntImp == 1 && procesadoImp == 1 && procesadoDespImp == 1 && procesadoISSTEY == 1) ? 1 : 0),
      txtTitulo = (procesado == 1 ? 'SE HAN APLICADO TODOS LOS CONCEPTOS PARA EL CÁLCULO' : 'NO SE HAN APLICADO TODOS LOS CONCEPTOS PARA EL CÁLCULO'),
      txtBoton = (procesado == 1 ? ' Re-Calcular' : ' Calcular') + ' Conceptos'; //(Antes de Impuestos, Impuestos, Después de Impuestos, ISSTEY)

  $('#bcompl').val(procesado);
  $("#tituloComp strong").html(txtTitulo);
  $('#btnCalculaConceptos').html('<i class="fas fa-calculator"></i></span>'+txtBoton);

  return false;
}

function carga_empleados_calculo(){
  let tabla = $('#tblEmpleadosCalculo').DataTable(),
      errorPagoElect = 0, errorOtroPresupuesto = 0, btnPagoElect = '';

  $.ajax({
    url   : '<?= base_url() ?>nomina/trae_empleados_calculo',
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
            txtResultado = '',
            btnCalc = '';

        tabla.clear().draw();
        for (var i in empleados) {
          txtResultado = (($.inArray(empleados[i].EmpleadoID, data.procesados) !== -1) ?
                            '<span class="text-success"><i class="fa fa-check"></i></span> <strong>Procesado</strong>' : '<span class="text-warning"><i class="fa fa-exclamation"></i></span> <strong>No procesado</strong>'
                         );

          if ($.inArray(empleados[i].EmpleadoID, data.configurados) === -1) {
            errorPagoElect = errorPagoElect + 1;
            txtResultado += '<br/><span class="text-danger"><i class="fas fa-exclamation-triangle"></i></span> <strong>No se ha configurado el pago electrónico.</strong>'
						btnPagoElect = '<button type="button" class="btn btn-white btn-xs bg-silver-darker btnPagoElect" onclick="ver_conf_pago_elect(this);" title="Configurar pago electrónico"><i class="fa-solid fa-money-check-dollar"></i></button>'
					}

					btnAcc =
                   '<div class="col-md-12 text-center">'+
                   ' <div class="btn-group text-center" role="group" aria-label="Acciones">'+
                   '  <button type="button" class="btn btn-white btn-xs bg-silver-darker btnCalculo" onclick="calcular_por_empleado(this);" title="Cálculo manual"><i class="fas fa-calculator"></i></button>'+
                   '  <button type="button" class="btn btn-white btn-xs bg-silver-darker btnCalculo" onclick="ver_det_impuestos(this);" title="Detalle de Impuestos"><i class="fas fa-dollar-sign"></i></button>'+
                   '  <button type="button" class="btn btn-white btn-xs bg-silver-darker btnCalculo" onclick="ver_det_conceptos(this);" title="Detalle de Conceptos"><i class="fas fa-clipboard-list"></i></button>'+
                   '  <button type="button" class="btn btn-white btn-xs bg-silver-darker btnCalculo" onclick="ver_conf_empleado(this);" title="Configurar conceptos por Empleado"><i class="fas fa-cog"></i></button>'+
									 		btnPagoElect +
                   ' </div>'
                   '</div>';

					if ($.inArray(empleados[i].EmpleadoID, data.calculados) > 0) {
						errorOtroPresupuesto = errorOtroPresupuesto + 1;
						txtResultado += '<br/><span class="text-danger"><i class="fas fa-exclamation-triangle"></i></span> <strong>Calculado en otro presupuesto.</strong>'
						btnAcc = '<button type="button" class="btn btn-white btn-xs bg-silver-darker btnOtroPresupuesto" onclick="eliminar_pago_otro_presupuesto(this);" title="Eliminar pago de otro presupuesto"><i class="fa-solid fa-trash-can"></i></button>'
					}

          tabla.row.add(
             [ empleados[i].EmpleadoID,
               empleados[i].Credencial,
               txtResultado,
               btnAcc,
             ]
          );
        }
        tabla.rows().select();
        tabla.columns.adjust().draw();

        if (errorPagoElect > 0 || errorOtroPresupuesto > 0) {
					if (errorPagoElect > 0) { $('#lblErrorPagoElectronico').html('<strong>ATENCIÓN: </strong> No se ha configurado el pago electrónico para '+errorPagoElect+' empleado(s).'); }
					if (errorOtroPresupuesto > 0) { $('#lblErrorOtroPresupuesto').html('<strong>ATENCIÓN: </strong> Se encontraron '+errorOtroPresupuesto+' empleado(s) con un pago calculado en otro presupuesto.'); }
					$('#lblErrores').show();
		    }
        else { $('#lblErrores').hide(); }

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

function generar_conceptos_nomina(tabla) {
  var tablaCon = $('#'+tabla).DataTable(),
      numEmpleados = tablaCon.rows({selected : true}).indexes().length,
      totalnumEmpleados = tablaCon.rows().indexes().length;

  if ($('#bcompl').val() == 1 && (numEmpleados == totalnumEmpleados)) {
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
                      if (data.status == false) {
                        alerta_emergente(data.message,"error");
                        swal.close();
                      }
                      else {
                        alerta_emergente(data.message,"success");
                        inicializa_controles_calculo(0,0,0,0);
                        carga_empleados_calculo();
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
  else {
    if (numEmpleados === 0) {
      alerta_emergente('Debe seleccionar un empleado para generar impuestos.','warning');
      return false;
    }

    var registros = tablaCon.rows( {selected: true} ).data().toArray(),
        errorPagoElect = 0, errorOtroPresupuesto = 0,
				tipoCalculo = $('#nomTipoCalculo').val();

    swal.fire({
        title: "Alerta",
        text: "Se realizará el cálculo para "+numEmpleados+ " empleado(s), ¿desea continuar?",
        icon: "warning",
        showCancelButton: true,
        showLoaderOnConfirm: true,
        allowOutsideClick: false,
        input: 'checkbox',
        inputValue: (numEmpleados == totalnumEmpleados ? 1 : 0),
        inputPlaceholder: 'Confirmar proceso de cálculo completo.',
        preConfirm: function () {
            return new Promise(function(resolve) {
              var confirma = ($('#swal2-checkbox').is(':checked') ? 1 : 0);
              $.ajax({
                url: "<?=base_url();?>index.php/nomina/calcular_conceptos_nomina",
                type: "POST",
                async: true,
                data: {registros:JSON.stringify(registros),confirma:confirma,tipoCalculo:tipoCalculo},
                dataType: "JSON",
                beforeSend: function() {
                  $('.btnCalculo').prop('disabled',true);
                  var dt = new Date(),
                      time = ('0'+dt.getHours()).slice(-2) + ":" + ('0'+dt.getMinutes()).slice(-2) + ":" + ('0'+dt.getSeconds()).slice(-2);
                  showLoading("Procesando","<p>Generando conceptos para "+numEmpleados+" empleado(s)...</p> <p> Proceso iniciado: "+time+"</p>");
                },
                error: function(xhr, textStatus, errorThrown){
            			if ( xhr.status == 500 ) { alerta_emergente("Error interno del servidor, intente de nuevo más tarde.", "error");	}
            			else if ( xhr.status == 404 ) { alerta_emergente("Página no encontrada, avise al Departamento de Servicios y Redes", "warning"); }
            			else alerta_emergente("Mensaje de Error: "+textStatus+",  Solicitud XHR: "+StatusMsg(xhr.status), "error");
            			return false;
            		},
                success: function(data){
                  if (data.status == false) {
                    alerta_emergente(data.message,"warning");
                  }
                  else {
                    alerta_emergente(data.message,"info");
                    if (data.recalculo) { inicializa_controles_calculo(1,1,1,1); }
                    var idEmpleado = 0;
                    tablaCon.rows( { selected: true } ).every( function ( rowIdx, tableLoop, rowLoop ) {
                      idEmpleado = tablaCon.cell( rowIdx, 0 ).data();

                      if ($.type(data.resultado[idEmpleado]) != "undefined") {
                        if (data.resultado[idEmpleado].error == false) {
                          tablaCon.cell( rowIdx, 2 ).data('<span class="text-success"><i class="fa fa-check"></i></span> <strong>'
                                                          + data.resultado[idEmpleado].msj + '</strong>'
                                                          + ((data.resultado[idEmpleado].configurado) ? '' : '<br/><span class="text-danger"><i class="fas fa-exclamation-triangle"></i></span><strong> No se ha configurado el pago electrónico.</strong>')
																													+ ((!data.resultado[idEmpleado].calculado) ? '' : '<br/><span class="text-danger"><i class="fas fa-exclamation-triangle"></i></span><strong> Calculado en otro presupuesto.</strong>')
																												 );
                          if (!data.resultado[idEmpleado].configurado) { errorPagoElect = errorPagoElect + 1; }
													if (data.resultado[idEmpleado].calculado) {
														// console.log(data.resultado[idEmpleado].calculado);
														errorOtroPresupuesto = errorOtroPresupuesto + 1;
														tablaCon.cell( rowIdx, 3 ).data('<button type="button" class="btn btn-white btn-xs bg-silver-darker btnOtroPresupuesto" onclick="eliminar_pago_otro_presupuesto(this);" title="Eliminar pago de otro presupuesto"><i class="fa-solid fa-trash-can"></i></button>');
													}
                        }
                        else { tablaCon.cell( rowIdx, 2 ).data('<span class="text-danger"><i class="fa fa-exclamation"></i></span> <strong>' + data.resultado[idEmpleado].msj + '</strong>'); }
                      }
                      else { tablaCon.cell( rowIdx, 2 ).data('<span class="text-warning"><i class="fa fa-exclamation"></i></span> <strong>No procesado</strong>'); }
                    });
                  }

                  if (errorPagoElect > 0 || errorOtroPresupuesto > 0) {
										if (errorPagoElect > 0) { $('#lblErrorPagoElectronico').html('<strong>ATENCIÓN: </strong> No se ha configurado el pago electrónico para '+errorPagoElect+' empleado(s).'); }
										if (errorOtroPresupuesto > 0) {
											// console.log(errorOtroPresupuesto);
											$('#lblErrorOtroPresupuesto').html('<strong>ATENCIÓN: </strong> Se encontraron '+errorOtroPresupuesto+' empleado(s) con un pago calculado en otro presupuesto.');
										}
										$('#lblErrores').show();
									}
									else { $('#lblErrores').hide(); }
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

function configurar_bono_cumples() {
  Carga_Metodo("<?=base_url();?>nomina/configurar_bono_cumples", "", "", "Procesando*Configurando Bono por Natalicio...");
  return false;
}

function configurar_vales() {
  var fechaini = $('#fechainiPeriodo').val(),
      datePart_fecha = fechaini.match(/\d+/g),
      dia_fecha = datePart_fecha[0];

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

function configurar_vacaciones() {
	cargamodalGenerica('<?= base_url() ?>configuraciones/carga_conf_vacaciones', '#modContenido', '#modGeneral', "", "Configuración de Bono de Vacaciones", 1);
	return false;
}

function calcular_por_empleado(btn) {
  let tabla         = $('#tblEmpleadosCalculo').DataTable(),
      data          = tabla.row( $(btn).parents('tr') ).data(),
      idEmpleado    = data[0],
      credencial    = data[1],
      idPeriodoPago = $("#idPeriodoPago").val(),
			tipoCalculo = $('#nomTipoCalculo').val();

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
         Carga_Metodo("<?=base_url();?>nomina/calcula_nomina_empleado_quincenal", {idEmpleado:idEmpleado,idPeriodoPago:idPeriodoPago,tipoCalculo:tipoCalculo}, function(data){ exito_calcula_nomina_empleado(data,btn); },"Calculando para el empleado "+credencial+"...");
        });
      }
    });

  return false;
}

function exito_calcula_nomina_empleado(respuesta,btn) {
	  var tabla = $('#tblEmpleadosCalculo').DataTable(),
	      rowIdx = tabla.row( $(btn).parents('tr') ).index();

  if (respuesta.status == false) {
    alerta_emergente(respuesta.message, "warning");
    if (respuesta.sinRegIni) { tablaCon.cell( rowIdx, 2 ).data('<span class="text-danger"><i class="fa fa-exclamation"></i> Error: no se han generado los registros iniciales.</span>'); }
    else { tabla.cell( rowIdx, 2 ).data('<span class="text-warning"><i class="fa fa-exclamation"></i></span> No procesado <br>'+respuesta.message); }
  }
  else {
    alerta_emergente(respuesta.message,"success");
    tabla.cell({row: rowIdx, column: 2}).data('<span class="text-success"><i class="fa fa-check"></i></span> Procesado');
  }
}

function ver_det_impuestos(btn) {
  let tabla         = $('#tblEmpleadosCalculo').DataTable(),
      data          = tabla.row( $(btn).parents('tr') ).data(),
      idEmpleado    = data[0],
      credencial    = data[1],
      idPeriodoPago = $("#idPeriodoPago").val();

  cargamodalGenerica('<?= base_url() ?>nomina/carga_det_impuestos', '#modContenidoXL', '#modGeneralXL', {idEmpleado:idEmpleado,idPeriodoPago:idPeriodoPago}, "Detalle de impuestos", 1);
  return false;
}

function ver_det_conceptos(btn) {
  var tabla         = $('#tblEmpleadosCalculo').DataTable(),
      data          = tabla.row( $(btn).parents('tr') ).data(),
      idEmpleado    = data[0],
      credencial    = data[1],
      idPeriodoPago = $("#idPeriodoPago").val();

  cargamodalGenerica('<?= base_url() ?>nomina/carga_det_conceptos', '#modContenido', '#modGeneral', {idEmpleado:idEmpleado}, "Detalle de conceptos por quincena", 1);
  return false;
}

function ver_conf_empleado(btn) {
  var tabla         = $('#tblEmpleadosCalculo').DataTable(),
      data          = tabla.row( $(btn).parents('tr') ).data(),
      idEmpleado    = data[0],
      credencial    = data[1],
      idPeriodoPago = $("#idPeriodoPago").val();

  cargamodalGenerica('<?= base_url() ?>nomina/carga_conf_percepcionesdeducciones', '#modContenidoXL', '#modGeneralXL', {idEmpleado:idEmpleado,idPeriodoPago:idPeriodoPago,credencial:credencial,calculoCierre:2}, "Configuración de Percepciones y Deducciones", 1);
  return false;
}

function cargaOpcionesCalc(columna) {
  var tablaR = $('#tblEmpleadosCalculo').DataTable(),
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
  if (selectorVal != '') { selector.val(selectorVal); }
}

function ver_conf_pago_elect(obj) {
	let tabla = $('#tblEmpleadosCalculo').DataTable(),
			data = tabla.row($(obj).parents('tr')).data();
	console.log(data);
}

function eliminar_pago_otro_presupuesto(obj) {
	let tabla = $('#tblEmpleadosCalculo').DataTable(),
			data = tabla.row($(obj).parents('tr')).data();
	console.log(data);
}
</script>
