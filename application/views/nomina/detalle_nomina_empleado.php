<!-- begin card -->
<div class="card border-0" id="detalle_nomina">
	<input type="hidden" name="esPrestador" id="esPrestador" value="<?= (empty($EsPrestador) ? 0 : 1); ?>">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" data-bs-toggle="tab" href="#card-det-nomina">Detalle de Nómina</a>
      </li>
			<?php
			if (empty($EsPrestador)):
			?>
			<li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#card-edo-cuenta">Estado de Cuenta</a>
      </li>
			<?php
			 //PENDIENTE: cuando se puedan corregir nóminas cerradas
				if ($nominaCerrada == 1 && 1 == 2):
			 ?>
				<li class="nav-item" id="correcciones">
					<a class="nav-link" data-bs-toggle="tab" href="#card-correcciones" data-item="correcciones">Corrección de Detalle</a>
				</li>
			<?php
				endif;
			endif;
			?>
    </ul>
  </div>
  <div class="card-body">
    <div class="tab-content p-0 m-0">
      <div class="tab-pane fade active show" id="card-det-nomina">
        <div class="card">
          <div class="panel-toolbar" id="tbrAcciones">
            <div class="btn-group m-2">
							<?php
							if (empty($EsPrestador)):
							?>
              <a href="javascript:;" class="btn btn-white btn-md bg-silver-darker" onclick="configurar_datos_empleado();"><i class="fas fa-user-tie"></i> Datos</a>
              <a href="javascript:;" class="btn btn-white btn-md bg-silver-darker" onclick="configurar_registros_iniciales();"><i class="far fa-calendar-alt"></i> Registros Iniciales</a>
							<?php
							endif;
							?>
							<a href="javascript:;" class="btn btn-white btn-md bg-silver-darker" onclick="configurar_percepciones_deducciones();"><i class="fas fa-wrench"></i> Configurar conceptos</a>
              <?php
              if ($nominaCerrada == 0) {
              ?>
                <a href="javascript:;" class="btn btn-white btn-md bg-silver-darker" onclick="calcular();"><i class="fas fa-calculator"></i> Calcular</a>
              <?php
              }
              ?>
            </div>
          </div>
          <div class="card-body">
            <?php
            if (!empty($tiponomina)) {
            ?>
            <!-- begin #accordion -->
            <div class="accordion accordion-flush" id="accordionTiposNomina">
              <?php
              foreach ($tiponomina as $item) {
              ?>
              <!-- begin card -->
              <div class="accordion-item">
                <h2 class="accordion-header pointer-cursor" id="head-<?= $item->TipoNominaId; ?>">
									<button class="accordion-button bg-gradient-black text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collTipoNomina_<?= $item->TipoNominaId; ?>" aria-expanded="true" aria-controls="collTipoNomina_<?= $item->TipoNominaId; ?>">
                  	<i class="fa fa-circle fa-fw text-warning mr-2 f-s-8"></i> <?= $item->Descripcion; ?>
						      </button>
								</h2>
                <?php $show = (in_array($item->TipoNominaId,array(3,44)) ? ' show ' : ''); ?>
                <div id="collTipoNomina_<?= $item->TipoNominaId; ?>" class="accordion-collapse collapse <?= $show; ?>" data-parent="#accordion" aria-labelledby="head-<?= $item->TipoNominaId; ?>" data-bs-parent="#accordionTiposNomina">
                  <div class="accordion-body">

										<div class="row mb-1 g-3 align-items-center">
											<div class="col-auto">
												<label for="fEmision_<?=$item->TipoNominaId;?>" class="form-label">F. Emisión</label>
											</div>
											<div class="col-2">
												<input type="text" class="form-control form-control-sm uuid_fechas" id="fEmision_<?=$item->TipoNominaId;?>" name="fEmision_<?=$item->TipoNominaId;?>" autocomplete="off"
												placeholder="Fecha Emisión" value="<?= (!empty($array_uuid[$item->TipoNominaId]['fEmision']) ? $array_uuid[$item->TipoNominaId]['fEmision'] : ''); ?>" disabled>
											</div>
											<div class="col-auto">
										    <label for="txtSerie_<?=$item->TipoNominaId;?>" class="col-form-label">Serie</label>
										  </div>
											<div class="col-2">
												<input type="text" id="txtSerie_<?=$item->TipoNominaId;?>" name="txtSerie_<?=$item->TipoNominaId;?>" class="form-control form-control-sm"
												value="<?= (!empty($array_uuid[$item->TipoNominaId]['serie']) ? $array_uuid[$item->TipoNominaId]['serie'] : ''); ?>" placeholder="Serie" readonly autocomplete="off">
											</div>

										  <div class="col-auto">
										    <label for="txtUUID_<?=$item->TipoNominaId;?>" class="col-form-label">UUID</label>
										  </div>
										  <div class="col-4">
												<div class="input-group">
													<input type="text" id="txtUUID_<?=$item->TipoNominaId;?>" name="_<?=$item->TipoNominaId;?>" class="form-control form-control-sm" value="<?= (!empty($array_uuid[$item->TipoNominaId]['uuid']) ? $array_uuid[$item->TipoNominaId]['uuid'] : ''); ?>" placeholder="UUID" readonly autocomplete="off">
													<button type="button" class="btn btn-outline-inverse btn-sm" id="btnEditarUUID_<?=$item->TipoNominaId;?>" name="btnEditarUUID_<?=$item->TipoNominaId;?>" onclick="habilita_edicion_uuid(<?=$item->TipoNominaId;?>);">
												    <i class="fa-regular fa-pen-to-square"></i>
												  </button>
													<button type="button" class="btn btn-outline-inverse btn-sm" id="btnGuardarUUID_<?=$item->TipoNominaId;?>" name="btnGuardarUUID_<?=$item->TipoNominaId;?>" onclick="guarda_uuid(<?=$item->TipoNominaId;?>);" style="display:none;">
														<i class="fa-regular fa-floppy-disk"></i>
													</button>
												</div>
											</div>
										</div>

										<?php
                    if (in_array($item->TipoNominaId, $nominasvalidas) && $nominaCerrada == 0) {
                    ?>
                    <div class="card-header fw-600 no-bg">
                      <div class="btn-group">
                        <a href="javascript:;" class="btn btn-white btn-sm" onclick="ajusta_nomina_empleado(<?= $item->TipoNominaId; ?>);" title="Ajustar nómina del empleado"><i class="fas fa-sliders-h"></i> Ajustar</a>
                        <a href="javascript:;" class="btn btn-white btn-sm" onclick="elimina_nomina_empleado(<?= $item->TipoNominaId; ?>);" title="Eliminar nómina del empleado"><i class="fas fa-trash"></i> Eliminar</a>
                      </div>
                    </div>
                    <?php
                    }
                    ?>
										<div class="card">
											<div class="card-body">
												<div class="row">
		                      <div class="col-6">
		                        <div class="table-responsive">
		                          <table class="table dn_tblPerc" id="tblPerc_<?= $item->TipoNominaId; ?>" cellspacing="0" width="100%">
		                            <thead class="bg-percepcion text-black">
		                              <tr>
		                                <th>Categoría</th>
		                                <th>Clave</th>
		                                <th>Percepción</th>
		                                <th>Monto</th>
		                                <th>idConcepto</th>
		                                <th>idCategoria</th>
																		<th>Monto Exento</th>
																		<th>Monto Gravado</th>
		                              </tr>
		                            </thead>
		                            <tbody class="text-black">
		                              <?php
		                              if (!empty($nomina)) {
		                                $totalper = 0;
		                                $i=0;
		                                foreach ($nomina as $itemnom) {
		                                  if ($item->TipoNominaId == $itemnom->TipoNominaId) {
		                                    if ($itemnom->EsPercepcion == 1) {
		                                      $clase = (in_array(trim($itemnom->TipoConcepto), array('I', 'OS', 'O1')) ? ' class = bg-gradient-yellow ' : '');
		                              ?>
			                                    <tr <?= $clase; ?>>
			                                      <td><?= $itemnom->CatDiaPago; ?></td>
			                                      <td><?= $itemnom->ClaveRecibo; ?></td>
			                                      <td><?= $itemnom->Concepto; ?></td>
			                                      <td class="with-form-control">
																							<input type="text" name="montoPercNom_<?= $item->TipoNominaId.'_'; ?><?= $i; ?>" id="montoPercNom_<?= $item->TipoNominaId.'_'; ?><?= $i; ?>" class="form-control form-control-sm no-border nom_currency text-black w-auto" value="<?= $itemnom->Monto; ?>" />
																						</td>
			                                      <td><?= $itemnom->id_concepto; ?></td>
			                                      <td><?= $itemnom->CategoriaId; ?></td>
																						<td><?= '$ '.DecimalMoneda($itemnom->MontoExento); ?></td>
																						<td><?= '$ '.DecimalMoneda($itemnom->MontoGravado); ?></td>
			                                    </tr>
		                              <?php
			                                    if (!in_array(trim($itemnom->TipoConcepto), array('I', 'OS', 'O1'))) $totalper = $totalper + $itemnom->Monto;
			                                    $i++;
		                                    }
		                                  }
		                                }
		                              }
		                              ?>
		                            </tbody>
		                          </table>
		                        </div>
		                      </div>
		                      <div class="col-6">
		                        <div class="table-responsive">
		                          <table class="table dn_tblDeduc" id="tblDeduc_<?= $item->TipoNominaId; ?>" cellspacing="0" width="100%">
		                            <thead class="bg-danger text-black">
		                              <tr>
		                                <th>Categoría</th>
		                                <th>Clave</th>
		                                <th>Deducción</th>
		                                <th>Monto</th>
		                                <th>idConcepto</th>
		                                <th>idCategoria</th>
																		<th>Monto Exento</th>
																		<th>Monto Gravado</th>
		                              </tr>
		                            </thead>
		                            <tbody class="text-black">
		                              <?php
		                              if (!empty($nomina)) {
		                                $i=0;
		                                $totalded = 0;
		                                foreach ($nomina as $itemnom) {
		                                  if ($item->TipoNominaId == $itemnom->TipoNominaId) {
		                                    if ($itemnom->EsPercepcion == 0) {
		                                      $clase = ( in_array(trim($itemnom->TipoConcepto), array('I', 'OS', 'O1')) ? ' class = bg-gradient-yellow ' : '' );
		                              ?>
			                                    <tr <?= $clase; ?>>
			                                      <td><?= $itemnom->CatDiaPago; ?></td>
			                                      <td <?= $clase; ?>><?= $itemnom->ClaveRecibo; ?></td>
			                                      <td><?= $itemnom->Concepto; ?></td>
			                                      <?php
			                                      if (!in_array(trim($itemnom->TipoConcepto), array('I', 'OS', 'O1'))) {
			                                      ?>
			                                        <td class="with-form-control">
																								<input type="text" name="montoDeducNom_<?= $item->TipoNominaId.'_'; ?><?= $i; ?>" id="montoDeducNom_<?= $item->TipoNominaId.'_'; ?><?= $i; ?>" class="form-control form-control-sm no-border nom_currency text-black w-auto" value="<?= $itemnom->Monto; ?>"/>
																							</td>
			                                      <?php
			                                      }
			                                      else {
			                                      ?>
			                                        <td class="text-end">$<?= DecimalMoneda($itemnom->Monto); ?></td>
			                                      <?php
			                                      }
			                                      ?>
			                                      <td><?= $itemnom->id_concepto; ?></td>
			                                      <td><?= $itemnom->CategoriaId; ?></td>
																						<td><?= '$ '.DecimalMoneda($itemnom->MontoExento); ?></td>
																						<td><?= '$ '.DecimalMoneda($itemnom->MontoGravado); ?></td>
			                                    </tr>
		                              <?php
			                                    if (!in_array(trim($itemnom->TipoConcepto), array('I', 'OS', 'O1'))) $totalded = $totalded + $itemnom->Monto;
			                                    $i++;
		                                    }
		                                  }
		                                }
		                              }
		                              ?>
		                            </tbody>
		                          </table>
		                        </div>
		                      </div>
		                    </div>

											</div>
										</div>
                    <hr class="text-black bg-black">

                    <div class="row clearfix">
                      <div class="col-md-12 text-end text-black">
                        <!-- <p class="mb-0"><b>Total Percepciones:</b></p><input type="text" class="form-control-plaintext nom_currency" value="<?= $totalper; ?>" readOnly/> -->
                        <p class="mb-0"><b>Total Percepciones:</b> <?= '$'.DecimalMoneda($totalper); ?></p>
                        <p class="mb-0"><b>Total Deducciones:</b> <?= '$'.DecimalMoneda($totalded); ?></p>
                        <h5 class="mb-0 mt-10">Total: <?= '$'.DecimalMoneda($totalper - $totalded); ?></h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end card -->
              <?php
              } // del foreach
              ?>
            </div>
            <!-- end #accordion -->
            <?php
            }
            else {
            ?>
            <div class="alert alert-warning fade show"><strong>El empleado no tiene conceptos generados para la quincena seleccionada.</strong></div>
            <?php
            }
            ?>
          </div>
          <div class="card-footer text-end" style="display:none;">
            <a href="javascript:;" class="btn btn-white btn-sm"><i class="far fa-eye"></i> Preliminar</a>
            <a href="javascript:;" class="btn btn-white btn-sm mb-auto"><i class="fas fa-print"></i> Imprimir</a>
          </div>
        </div>
      </div>

      <div class="tab-pane fade" id="card-edo-cuenta">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="fechainiEC" class="form-label">Fecha inicial</b></label>
                  <input type="text" class="form-control form-control-sm" id="fechainiEC" name="fechainiEC" value="<?= $fechaini; ?>">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="fechafinEC" class="form-label">Fecha final</label>
                  <input type="text" class="form-control form-control-sm" id="fechafinEC" name="fechafinEC" value="<?= $fechafin; ?>">
                </div>
              </div>
              <div class="col-md">
                <div class="form-group">
                  <label class="control-label" class="form-label">&nbsp;</label>
                  <div>
                    <button class="btn btn-inverse btn-sm" title="Consultar Estado de Cuenta" id="btnconsultaEdoCuenta" name="btnconsultaEdoCuenta" onclick="consulta_estado_cuenta();">
                      <i class="fas fa-search"></i> Consultar
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <table class="table table-bordered" id="tblEdoCuenta" name="tblEdoCuenta" cellspacing="0" width="100%" style="display:none;">
                      <thead>
                        <tr>
                          <th>Clave</th>
                          <th>Concepto</th>
                          <th>Veces Aplicadas</th>
                          <th></th>
                          <th>Percepción</th>
                          <th>Deducción</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th colspan="6" style="text-align:right">Total:</th>
                          <th></th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="panel-footer text-end" style="display:none;">
            <a href="javascript:;" class="btn btn-white btn-sm" id="btnPreliminarEdoCuenta"><i class="far fa-eye"></i> Preliminar</a>
            <a href="javascript:;" class="btn btn-white btn-sm m-l-5" id="btnImprimirEdoCuenta"><i class="fas fa-print"></i> Imprimir</a>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="card-correcciones"></div>

    </div>
  </div>
</div>
<!-- end card -->

<script type="text/javascript">
var datosjson = '[]';
<?php
if (!empty($json)):
?>
 datosjson = JSON.stringify(<?= $json; ?>);
<?php
endif;
?>
setTimeout(function cargarconsulta() {
		$(".uuid_fechas").datepicker({
			format: "dd/mm/yyyy",
			weekStart: 1,
			maxViewMode: 3,
			language: "es",
			orientation: "bottom auto",
			autoclose: true,
			todayBtn: "linked",
			todayHighlight: true,
			endDate: '+1d',
			datesDisabled: '+1d',
		}).on("hide", function(e) {
		}).inputmask({'alias': 'datetime', 'inputFormat': 'dd/mm/yyyy', 'placeholder': 'dd/mm/yyyy', 'min':'01/01/1900'});

  var groupColumn = 0;
  $('.dn_tblPerc').DataTable({
    language: {
      "url": "assets/plugins/DataTables/Spanish.json",
      "processing": "Cargando..."
    },
    // dom: 'Bt',
		layout: {
	    topStart: {
				buttons: [
					{ extend: 'excel', text: ' <i class="far fa-file-excel"></i> ', autoFilter:true, className: 'btn btn-sm btn-success btnexpXLS',
						titleAttr: 'Exportar resultado en Excel',  filename:'Reporte',
						exportOptions: {
								format: {
									body: function ( data, row, column, node ) {
										var tag = $(node).find('input').val();
										return typeof(tag) == "undefined" ? data : tag;
									}
								},
								columns: [0,1,2,3,6,7]
						}
					},
				],
			},
	    topEnd: null,
	    bottomStart: null,
	    bottomEnd: null
		},
		// paging: false,
    ordering: false,
    responsive: true,
    columnDefs: [
      { targets:[4,5,6,7],visible:false,orderable:false,searchable:false },
      { targets: groupColumn, visible: false, },
      { targets: 3, className: "dt-right" },
    ],

    drawCallback: function ( settings ) {
      var api = this.api(),
          rows = api.rows( {page:'current'} ).nodes(),
          last = null;

      api.column(groupColumn, {page:'current'} ).data().each( function ( group, i ) {
        if (last !== group) {
          $(rows).eq( i ).before(
            '<tr class="group f-w-500"><td colspan="5">'+group+'</td></tr>'
          );
          last = group;
        }
      });
    }
  });

  $('.dn_tblDeduc').DataTable({
    language: {
      "url": "assets/plugins/DataTables/Spanish.json",
      "processing": "Cargando..."
    },
		layout: {
	    topStart: {
				buttons: [
					{ extend: 'excel', text: ' <i class="far fa-file-excel"></i> ', autoFilter:true, className: 'btn-sm btn-danger btnexpXLS',
						titleAttr: 'Exportar resultado en Excel',  filename:'Reporte',
						exportOptions: {
								format: {
									body: function ( data, row, column, node ) {
										var tag = $(node).find('input').val();
										return typeof(tag) == "undefined" ? data : tag;
		              }
								},
								columns: [0,1,2,3,6,7]
						}
					},
				],
			},
	    topEnd: null,
	    bottomStart: null,
	    bottomEnd: null
		},
    paging: false,
    ordering: false,
    responsive: true,
    columnDefs: [
      { targets:[4,5,6,7],visible:false,orderable:false,searchable:false },
      { targets: groupColumn, visible: false },
      { targets: 3, className: "dt-head-right" },
    ],
    drawCallback: function ( settings ) {
      var api = this.api(),
          rows = api.rows( {page:'current'} ).nodes(),
          last = null;

      api.column(groupColumn, {page:'current'} ).data().each( function ( group, i ) {
        if ( last !== group ) {
          $(rows).eq( i ).before(
            '<tr class="group f-w-500"><td colspan="5">'+group+'</td></tr>'
          );
          last = group;
        }
      } );
    }
  });

  if (!$.fn.dataTable.isDataTable( '#tblEdoCuenta' )) {
    var tablaEmpRI = $('#tblEdoCuenta').DataTable({
      initComplete: function() {
        $("#tblEdoCuenta").show();
      },
      language: {
        "url": "assets/plugins/DataTables/Spanish.json",
        "processing": "Cargando..."
      },
      dom: 't',
      paging: false,
      // order: [0, 'asc'],
      columnDefs: [
        {targets:[3], orderable: false,visible: false, searchable: false},
        {
          targets: 4,
          createdCell: function (td, cellData, rowData, row, col) {
            if ( cellData !== "" ) {
              $(td).addClass( 'f-w-500 text-green-darker' )
            }
          }
        },
        {
          targets: 5,
          createdCell: function (td, cellData, rowData, row, col) {
            if ( cellData !== "" ) {
              $(td).addClass( 'f-w-500 text-red' )
            }
          }
        }
      ],
      responsive: true,
      footerCallback: function ( row, data, start, end, display ) {
          var api = this.api(), data;
          // Remove the formatting to get integer data for summation
          var intVal = function ( i ) {
              return typeof i === 'string' ?
                  i.replace(/[\$,]/g, '')*1 :
                  typeof i === 'number' ?
                      i : 0;
          };
          // Total over all pages
          total = api
              .column( 6 )
              .data()
              .reduce( function (a, b) {
                return intVal(a) + intVal(b);
              }, 0 );
          // Update footer
          $( api.column( 6 ).footer() ).html(
            formatCurrency(total)
          );
      }
    });
  }

  $("#fechainiEC, #fechafinEC").datepicker({
    format: "dd/mm/yyyy",
    weekStart: 1,
    maxViewMode: 3,
    language: "es",
    orientation: "bottom auto",
    autoclose: true,
    todayBtn: "linked",
    todayHighlight: true,
  }).inputmask({'alias': 'datetime', 'inputFormat': 'dd/mm/yyyy', 'placeholder': 'dd/mm/yyyy', 'min':'01/01/1900'});

  $(".nom_currency").inputmask('currency',{rightAlign: true, prefix: '$ ', allowMinus: false, max: 900000, shortcuts:'' });

  $('#muestra-quincena').show();

  <?php
  if ($nominaCerrada > 0) {
	?>
    $('.nom_currency').prop('readOnly', true);;
	<?php
	}
	?>

	if ($('#estado_baja').val() == 1) { $('#tbrAcciones').hide();	}

});

$('#modGeneral').on('shown.bs.modal', function (e) {
  $.fn.dataTable.tables( {visible: true, api: true} ).columns.adjust();
});

function configurar_registros_iniciales() {
  var idEmpleado = $('#idEmpleado').val(),
      idPeriodoPago = $("#quincena option:selected").val(),
      credencial = $("#credencial").val();

  if (typeof(idEmpleado) == "undefined" || idEmpleado === "" || idEmpleado == 0) {
    alerta_emergente("Ocurrió un error al obtener la información del empleado. Por favor intente de nuevo más tarde.","warning")
    return false;
  }

  if (typeof(idPeriodoPago) == "undefined" || idPeriodoPago === "" || idPeriodoPago == 0) {
    alerta_emergente("Ocurrió un error al obtener la información del período de pago. Por favor intente de nuevo más tarde.","warning")
    return false;
  }

  cargamodalGenerica('<?= base_url() ?>nomina/carga_conf_regini', '#modContenido', '#modGeneral', {idEmpleado:idEmpleado,idPeriodoPago:idPeriodoPago,credencial:credencial}, "Registros Iniciales por Empleado", 1);
  return false;
}

function configurar_datos_empleado() {
  var idEmpleado = $('#idEmpleado').val(),
      idPeriodoPago = $("#quincena option:selected").val();

  if (typeof(idEmpleado) == "undefined" || idEmpleado === "" || idEmpleado == 0) {
    alerta_emergente("Ocurrió un error al obtener la información del empleado. Por favor intente de nuevo más tarde.","warning")
    return false;
  }

  if (typeof(idPeriodoPago) == "undefined" || idPeriodoPago === "" || idPeriodoPago == 0) {
    alerta_emergente("Ocurrió un error al obtener la información del período de pago. Por favor intente de nuevo más tarde.","warning")
    return false;
  }

  cargamodalGenerica('<?= base_url() ?>nomina/carga_conf_datos', '#modContenido', '#modGeneral', {idEmpleado:idEmpleado,idPeriodoPago:idPeriodoPago}, "Datos del Empleado", 1);
  return false;
}

function configurar_percepciones_deducciones() {
	let esPrestador = $('#esPrestador').val();
	if (esPrestador == 1) {
		configurar_prestador();
		return false;
	}
  let idEmpleado = $('#idEmpleado').val(),
      idPeriodoPago = $("#quincena option:selected").val(),
      credencial = $("#credencial").val();
  cargamodalGenerica('<?= base_url() ?>nomina/carga_conf_percepcionesdeducciones', '#modContenido', '#modGeneral', {idEmpleado:idEmpleado,idPeriodoPago:idPeriodoPago,credencial:credencial}, "Configuración de Percepciones y Deducciones", 1, true);
  return false;
}

function calcular(mensaje) {
	let esPrestador = $('#esPrestador').val();
	if (esPrestador == 1) {
		calcular_prestador();
		return false;
	}
	let idEmpleado = $('#idEmpleado').val(),
      idPeriodoPago = $("#quincena option:selected").val();

  if (typeof(idEmpleado) == "undefined" || idEmpleado === "" || idEmpleado == 0) {
    alerta_emergente("Ocurrió un error al obtener la información del empleado. Por favor intente de nuevo más tarde.","warning")
    return false;
  }

  if (typeof(idPeriodoPago) == "undefined" || idPeriodoPago === "" || idPeriodoPago == 0) {
    alerta_emergente("Ocurrió un error al obtener la información del período de pago. Por favor intente de nuevo más tarde.","warning")
    return false;
  }

  if (typeof(mensaje) == "undefined" || mensaje === "") {
    mensaje = "<p>Se calculará la nómina del empleado.</p><p>¿Desea Continuar?</p>";
  }

  swal.fire({
     title: "Calcular",
     html: mensaje,
     icon: "question",
     showCancelButton: true,
     allowOutsideClick: false,
     preConfirm: function () {
       return new Promise(function(resolve) {
         Carga_Metodo("<?=base_url();?>nomina/calcula_nomina_empleado", {idEmpleado:idEmpleado,idPeriodoPago:idPeriodoPago}, exito_calcula_nomina_empleado,"Calculando...");
        });
      }
    });

  return false;
}

function exito_calcula_nomina_empleado(respuesta) {
  if (respuesta.status == false) {
    alerta_emergente(respuesta.message, "warning");
    if (respuesta.sinRegIni){ configurar_registros_iniciales(); }
  }
  else{
    swal.close();
    alerta_emergente(respuesta.message,"success");
    $('#quincena').trigger('change');
  }
}

function elimina_nomina_empleado(idTipoNomina) {
  var idEmpleado = $('#idEmpleado').val(),
      idPeriodoPago = $('#idPeriodoPago').val();

  if (typeof(idEmpleado) == "undefined" || idEmpleado === "" || idEmpleado == 0) {
    alerta_emergente("Ocurrió un error al obtener la información del empleado. Por favor intente de nuevo más tarde.","warning")
    return false;
  }

  if (typeof(idPeriodoPago) == "undefined" || idPeriodoPago === "" || idPeriodoPago == 0) {
    alerta_emergente("Ocurrió un error al obtener la información del período de pago. Por favor intente de nuevo más tarde.","warning")
    return false;
  }

  if (typeof(idTipoNomina) == "undefined" || idTipoNomina === "" || idTipoNomina == 0) {
    alerta_emergente("Ocurrió un error al obtener la información del tipo de Nómina. Por favor intente de nuevo más tarde.","warning")
    return false;
  }

  swal.fire({
     title: "Eliminar",
     html: "<p>Está a punto de eliminar los registros de nómina de un empleado.</p><p>¿Desea Continuar?</p>",
     icon: "question",
     showCancelButton: true,
     allowOutsideClick: false,
     preConfirm: function () {
       return new Promise(function(resolve) {
         Carga_Metodo("<?=base_url();?>nomina/elimina_nomina_empleado", {idEmpleado:idEmpleado,idTipoNomina:idTipoNomina,idPeriodoPago:idPeriodoPago}, exito_ajustaelimina_nominaEmp, "Eliminando...");
        });
      }
    });

  return false;
}

function ajusta_nomina_empleado(idTipoNomina) {
  var idEmpleado = $('#idEmpleado').val(),
      idPeriodoPago = $('#idPeriodoPago').val();

  if (typeof(idEmpleado) == "undefined" || idEmpleado === "" || idEmpleado == 0) {
    alerta_emergente("Ocurrió un error al obtener la información del empleado. Por favor intente de nuevo más tarde.","warning")
    return false;
  }

  if (typeof(idPeriodoPago) == "undefined" || idPeriodoPago === "" || idPeriodoPago == 0) {
    alerta_emergente("Ocurrió un error al obtener la información del período de pago. Por favor intente de nuevo más tarde.","warning")
    return false;
  }

  if (typeof(idTipoNomina) == "undefined" || idTipoNomina === "" || idTipoNomina == 0) {
    alerta_emergente("Ocurrió un error al obtener la información del tipo de Nómina. Por favor intente de nuevo más tarde.","warning")
    return false;
  }

  var tablaPerc = $('#tblPerc_'+idTipoNomina).DataTable(),
      detallePercepcion = [];
      tablaDeduc = $('#tblDeduc_'+idTipoNomina).DataTable();
      detalleDeduccion = [];

  if (!tablaPerc.data().any()) {
    alerta_emergente("No se puede ajustar el sueldo porque no hay conceptos generados. Recalcule la nómina para el empleado.","warning");
    return false;
  }

  tablaPerc.rows().every( function ( rowIdx, tableLoop, rowLoop ) {
    var datosPerc = {};
    datosPerc.idCategoria = tablaPerc.cell( rowIdx, 5 ).data();
    datosPerc.idConcepto = tablaPerc.cell( rowIdx, 4 ).data();
    datosPerc.MontoPerc = $('#montoPercNom_'+idTipoNomina+'_'+rowIdx).inputmask('unmaskedvalue');
    detallePercepcion.push(datosPerc);
  });

  tablaDeduc.rows().every( function ( rowIdx, tableLoop, rowLoop ) {
    var datosDeduc = {};
    datosDeduc.idCategoria = tablaDeduc.cell( rowIdx, 5 ).data();
    datosDeduc.idConcepto = tablaDeduc.cell( rowIdx, 4 ).data();
    datosDeduc.MontoDeduc = $('#montoDeducNom_'+idTipoNomina+'_'+rowIdx).inputmask('unmaskedvalue');
    detalleDeduccion.push(datosDeduc);
  });

  swal.fire({
    title: 'Ajustar Nómina',
    text: '¿Desea Ajustar o Guardar las deducciones como aparecen en pantalla?',
    showDenyButton: true,
    showCancelButton: true,
    confirmButtonText: `Ajustar`,
    denyButtonText: `Guardar`,
    cancelButtonText: `Cancelar`,
  }).then((result) => {
    if (result.isConfirmed) {
      Carga_Metodo("<?=base_url();?>nomina/ajusta_nomina_empleado", {idTipoNomina:idTipoNomina,idEmpleado:idEmpleado,idPeriodoPago:idPeriodoPago,percepciones:JSON.stringify(detallePercepcion),deducciones:JSON.stringify(detalleDeduccion)}, exito_ajustaelimina_nominaEmp, "Procesando...");
    } else if (result.isDenied) {
      Carga_Metodo("<?=base_url();?>nomina/guarda_ajuste_nomina_empleado", {idTipoNomina:idTipoNomina,idEmpleado:idEmpleado,idPeriodoPago:idPeriodoPago,percepciones:JSON.stringify(detallePercepcion),deducciones:JSON.stringify(detalleDeduccion)}, exito_ajustaelimina_nominaEmp, "Procesando...");
    }
  })

  return false;
}

function exito_ajustaelimina_nominaEmp(respuesta) {
  if (respuesta.status == false) { alerta_emergente(respuesta.message, "warning"); }
  else{
    swal.close();
    alerta_emergente(respuesta.message,"success");
    $('#quincena').trigger('change');
  }
}

function consulta_estado_cuenta() {
  var credencial = $("#credencial").val(),
      fechaini = $("#fechainiEC").val(),
      fechafin = $("#fechafinEC").val(),
      tabla = $('#tblEdoCuenta').DataTable();

  if ($('#bn_nombre').val() == '' && $('#bn_appaterno').val() == '' && $('#bn_apmaterno').val() == ''){
    alerta_emergente("Debe capturar un parámetro de búsqueda.","warning");
    return false;
  }

  if (typeof(credencial) == "undefined" || credencial === "" || credencial == 0) {
    alerta_emergente("Debe capturar la credencial del empleado.","warning");
    $("#credencial").focus();
    return false;
  }

  if (typeof(fechaini) == "undefined" || fechaini === "" || typeof(fechafin) == "undefined" || fechafin === "") {
    alerta_emergente("Debe capturar la fecha final y la fecha inicial.","warning")
    return false;
  }

  $.ajax({
    url   : '<?= base_url() ?>nomina/obtener_estado_cuenta',
    type: "POST",
    data: {credencial:credencial,fechaini:fechaini,fechafin:fechafin},
    dataType: "JSON",
    success : function(data){
      if( data.status == false ) {
        alerta_emergente(data.message,"warning");
        return false;
      }
      else{
        var edocuenta = data.edocuenta;
        tabla.clear().draw();
        $('#nombre').val(data.empleado.NombreCompleto);
        $('#categoria').val(data.empleado.DescripcionCategoria);
        $('#dependencia').val(data.empleado.DescripcionDependencia);
        $('#idEmpleado').val(data.empleado.Id);
        for (var i in edocuenta) {
          if (data.idPresupuesto == edocuenta[i].PresupuestoId) {
            tabla.row.add(
               [ edocuenta[i].ClaveRecibo,
                 edocuenta[i].concepto,
                 edocuenta[i].NumPagos,
                 edocuenta[i].Espercepcion,
                 (edocuenta[i].Espercepcion == 1 ? formatCurrency(edocuenta[i].Monto) : ''),
                 (edocuenta[i].Espercepcion == 0 ? formatCurrency(edocuenta[i].Monto) : ''),
                 (edocuenta[i].Espercepcion == 1 ? (formatCurrency(edocuenta[i].Monto * edocuenta[i].NumPagos)) : (formatCurrency(edocuenta[i].Monto * edocuenta[i].NumPagos * (-1)))),
               ]
            );
          }
        }
        tabla.columns.adjust().draw();
        tabla.responsive.recalc();
      }
    }
  });
}

$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
  var target = $(e.target).attr("href");
  if (target == '#card-edo-cuenta') { $('#muestra-quincena').hide(); }
  else { $('#muestra-quincena').show(); }
});

$('#fechainiEC, #fechafinEC').on('changeDate', function(e) {
  consulta_estado_cuenta();
});

function configurar_prestador() {
	let idPrestador = $('#idPrestador').val(),
      idPeriodoPago = $("#quincena option:selected").val(),
      credencial = $("#credencial").val();
  cargamodalGenerica('<?= base_url() ?>prestadores/carga_configuracion', '#modContenido', '#modGeneral', {idPrestador:idPrestador,idPeriodoPago:idPeriodoPago,credencial:credencial}, "Configuración del Prestador de Servicios", 1, true);
  return false;
}

function calcular_prestador() {
	let idPrestador = $('#idPrestador').val(),
      idPeriodoPago = $("#quincena option:selected").val();

  if (typeof(idPrestador) == "undefined" || idPrestador === "" || idPrestador == 0) {
    alerta_emergente("Ocurrió un error al obtener la información del prestador de servicios. Por favor intente de nuevo más tarde.","warning")
    return false;
  }

  if (typeof(idPeriodoPago) == "undefined" || idPeriodoPago === "" || idPeriodoPago == 0) {
    alerta_emergente("Ocurrió un error al obtener la información del período de pago. Por favor intente de nuevo más tarde.","warning")
    return false;
  }

  if (typeof(mensaje) == "undefined" || mensaje === "") {
    mensaje = "<p>Se calculará la nómina del prestador de servicios.</p><p>¿Desea Continuar?</p>";
  }
	swal.fire({
     title: "Calcular",
     html: mensaje,
     icon: "question",
     showCancelButton: true,
     allowOutsideClick: false,
     preConfirm: function () {
       return new Promise(function(resolve) {
         Carga_Metodo("<?=base_url();?>prestadores/calcula_nomina_individual", {idPrestador:idPrestador,idPeriodoPago:idPeriodoPago}, function calculado(respuesta){
					 if (respuesta.status == false) {
						 alerta_emergente(respuesta.message, "warning");
					 }
					 else{
						 swal.close();
						 alerta_emergente(respuesta.message,"success");
						 $('#quincena').trigger('change');
					 }
				 },"Calculando...");
        });
      }
    });

  return false;
}

$('.nav-tabs a').on('shown.bs.tab', function(event){
	let x = $(event.target).data('item'),         // active tab
			y = $(event.relatedTarget).data('item');  // previous tab
	switch (x) {
		case 'correcciones':
			carga_correccion_detalle();
			break;
		default:
			break;
	}
});

function carga_correccion_detalle() {
	let quincena = $('#quincena').val(),
			idEmpleado = $('#idEmpleado').val(),
			jsonDetalle = JSON.parse(datosjson);

	if (typeof(quincena) == "undefined" || quincena === "" || quincena == 0) {
		alerta_emergente("Ocurrió un error al obtener la información del período de pago. Por favor intente de nuevo más tarde.","warning")
		return false;
	}
	Carga_Metodo("<?=base_url();?>nomina/correccion_detalle", {quincena:quincena,idEmpleado:idEmpleado,json:jsonDetalle.nomina}, function finalizaCarga(data){
		if (data.status == false) { alerta_emergente(data.message, "warning"); }
		else { $('#card-correcciones').html(data.html); }
	}, "Cargando...");
	return false;
}

function habilita_edicion_uuid(idTipoNomina) {
	$('#fEmision_'+idTipoNomina).prop('disabled', false);
	$('#txtSerie_'+idTipoNomina).prop('readonly', false);
	$('#txtUUID_'+idTipoNomina).prop('readonly', false);
	$('#btnEditarUUID_'+idTipoNomina).hide();
	$('#btnGuardarUUID_'+idTipoNomina).show();
}

function guarda_uuid(idTipoNomina) {
	let idEmpleado = $('#idEmpleado').val(),
			idNomina = $("#quincena option:selected").val(),
			uuid = $('#txtUUID_'+idTipoNomina).val(),
			serie = $('#txtSerie_'+idTipoNomina).val(),
			fEmision =$('#fEmision_'+idTipoNomina).val();

	Carga_Metodo("nomina/guarda_uuid_empleado", {idEmpleado:idEmpleado,idNomina:idNomina,idTipoNomina:idTipoNomina,uuid:uuid,serie:serie,fEmision:fEmision}, function guardado(respuesta) {
		if (respuesta.status == false) {
			alerta_emergente(respuesta.message, "warning");
		}
		else {
			alerta_emergente(respuesta.message,"success");
			$('#fEmision_'+idTipoNomina).prop('disabled', true);
			$('#txtSerie_'+idTipoNomina).prop('readonly', true);
			$('#txtUUID_'+idTipoNomina).prop('readonly', true);
			$('#btnEditarUUID_'+idTipoNomina).show();
			$('#btnGuardarUUID_'+idTipoNomina).hide();
		}
	},"Guardando...");
}

</script>
