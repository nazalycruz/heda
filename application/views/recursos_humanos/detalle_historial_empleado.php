<?php
// var_dump($empleado);
?>
<input type="hidden" name="Credencial" id="Credencial" value="<?= (empty($empleado->Credencial) ? 0 : $empleado->Credencial); ?>">
<input type="hidden" name="IdMovimiento" id="IdMovimiento" value="<?= 0; ?>">
<input type="hidden" name="movimientoAceptado" id="movimientoAceptado" value="<?= 0; ?>">

<div class="card border-0 mb-2">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" data-bs-toggle="tab" href="#card-generales">Generales</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#card-contratos">Contratos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#card-vacaciones">Vacaciones</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#card-incapacidades">Incapacidades</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#card-licencias">Licencias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#card-diasEconomicos">Días Económicos</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <div class="tab-content p-0 m-0">
      <div class="tab-pane fade active show" id="card-generales">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-12">
                <table class="table">
                  <tr>
                    <td><b>Nombre</b></td>
                    <td><?= $empleado->Nombre.' '.$empleado->Apellido1.' '.$empleado->Apellido2; ?></td>
                  </tr>
                  <tr>
                    <td><b>Dirección</b></td>
                    <td><?= $empleado->Direccion; ?></td>
                  </tr>
                  <tr>
                    <td><b>Teléfono</b></td>
                    <td><?= $empleado->Telefono; ?></td>
                  </tr>
                  <tr>
                    <td><b>CURP</b></td>
                    <td><?= $empleado->CURP; ?></td>
                  </tr>
                  <tr>
                    <td><b>Fecha de Nacimiento</b></td>
                    <td><?= $empleado->fechaNac; ?></td>
                  </tr>
                  <tr>
                    <td><b>Fecha de Ingreso</b></td>
                    <td><?= cambiaf_a_normal($empleado->FechaAlta); ?></td>
                  </tr>
                  <tr>
                    <td><b>Fecha de Ingreso a la Nómina</b></td>
                    <td><?= cambiaf_a_normal($empleado->FechaAlta); ?></td>
                  </tr>
                  <tr>
                    <td><b>IMSS</b></td>
                    <td><?= $empleado->IMSS; ?></td>
                  </tr>
                  <tr>
                    <td><b>ISSSTEY</b></td>
                    <td><?= $empleado->SAR; ?></td>
                  </tr>
                  <tr>
                    <td><b>Estado Civil</b></td>
                    <td><?= $empleado->EdoCivil; ?></td>
                  </tr>
                  <tr>
                    <td><b>Sexo</b></td>
                    <td><?= $empleado->Sexo; ?></td>
                  </tr>
                  <?php
                  if ( !empty($categoria) ){
                  ?>
                  <tr>
                    <td><b>Base Actual</b></td>
                    <td><?= $categoria->Descripcion; ?></td>
                  </tr>
                  <?php
                  }
                  ?>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-pane fade" id="card-contratos">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-12">
                <div class="table-responsive">
                  <table class="table table-bordered table-sm" id="tblContratos" width="100%">
                    <thead>
                      <tr>
                        <th>Folio</th>
                        <th>Movimiento</th>
                        <th>Inicio</th>
                        <th>Término</th>
                        <th>Tipo</th>
                        <th>Origen</th>
                        <th>Categoría</th>
                        <th>Dependencia</th>
												<th>F. Captura</th>
												<th>F. Aceptación</th>
												<th>F. Aceptación Vencimiento</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if( !empty($movimientos) ){
                        foreach ($movimientos as $item) {
                          if (!in_array($item->origen,array('IN','VA','LIS','LIC','MV','LII')) && $item->sinEfecto == 0) {
                      ?>
                            <tr>
                              <td><?= $item->IdMovimiento; ?></td>
                              <td><?= $item->FMov; ?></td>
                              <td><?= $item->finicio; ?></td>
                              <td><?= $item->FFIN; ?></td>
                              <td><?= $item->TipoMovimiento; ?></td>
                              <td><?= $item->origen; ?></td>
                              <td><?= $item->NuevaCategoria; ?></td>
                              <td><?= $item->nuevadependencia; ?></td>
															<td><?= cambiaf_a_normal($item->FechaCaptura); ?></td>
															<td><?= cambiaf_a_normal($item->FechaAceptacionRH); ?></td>
															<td><?= cambiaf_a_normal($item->FechaAceptacionVencimientoRH); ?></td>
                            </tr>
                      <?php
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
      </div>

      <div class="tab-pane fade" id="card-vacaciones">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-12">
                <div class="table-responsive">
                  <table class="table table-bordered table-sm table-condensed" id="tblVacaciones" width="100%">
                    <thead>
                      <tr>
                        <th>Periodo</th>
                        <th>Inicio</th>
                        <th>Terminación</th>
												<!-- <th>F. Captura</th>
												<th>F. Aceptación</th> -->
                        <th>Folio</th>
                        <th>Prima</th>
                        <th>Pago Prima</th>
                        <th>Asignada</th>
                        <th>Cancelaciones</th>
                        <th>Observaciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if (!empty($vacaciones)) {
                        foreach ($vacaciones as $item) {
                      ?>
                          <tr>
                            <td><?= $item->Descripcion; ?></td>
                            <td><?= $item->FInicio; ?></td>
                            <td><?= $item->FFin; ?></td>
														<!-- <td><?= cambiaf_a_normal($item->FechaCaptura); ?></td>
														<td><?= cambiaf_a_normal($item->FechaAceptacionRH); ?></td> -->
                            <td><?= $item->MovimientoID; ?></td>
                            <td><?= ( $item->PrimaPagada == 1 ? '<span class="text-success"><i class="fa fa-check"></i></span>' : ''); ?></td>
                            <td><?= $item->Fpp; ?></td>
                            <td><?= ( $item->Tomadas == 1 ? '<span class="text-success"><i class="fa fa-check"></i></span>' : ''); ?></td>
                            <td><?= ( $item->tienecancelaciones == 1 ? '<span class="text-danger"><i class="fa fa-times"></i></span>' : ''); ?></td>
                            <td><?= $item->Observaciones; ?></td>
                          </tr>
                      <?php
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
      </div>

      <div class="tab-pane fade" id="card-incapacidades">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-12">
                <div class="table-responsive">
                  <table class="table table-bordered table-sm" id="tblIncapacidades" width="100%">
                    <thead>
                      <tr>
                        <th>Folio</th>
                        <th>Movimiento</th>
                        <th>Inicio</th>
                        <th>Término</th>
												<th>F. Captura</th>
												<th>F. Aceptación</th>
                        <th>Folio IMSS</th>
                        <th>Días</th>
                        <th>Motivo</th>
                        <th>Fecha</th>
                        <th>Observaciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if( !empty($movimientos) ){
                        foreach ($movimientos as $item) {
                          if ($item->origen == 'IN' && $item->sinEfecto == 0){
                      ?>
                            <tr>
                              <td><?= $item->IdMovimiento; ?></td>
                              <td><?= $item->FMov; ?></td>
                              <td><?= $item->finicio; ?></td>
                              <td><?= $item->FFIN; ?></td>
															<td><?= cambiaf_a_normal($item->FechaCaptura); ?></td>
															<td><?= cambiaf_a_normal($item->FechaAceptacionRH); ?></td>
                              <td><?= $item->FolioIMSS; ?></td>
                              <td><?= $item->NumDias; ?></td>
                              <td><?= $item->Motivo; ?></td>
                              <td><?= cambiaf_a_normal($item->Fechaoficio); ?></td>
                              <td><?= $item->Observaciones; ?></td>
                            </tr>
                      <?php
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
      </div>

      <div class="tab-pane fade" id="card-licencias">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-12">
                <div class="table-responsive">
                  <table class="table table-bordered table-sm" id="tblLicencias" width="100%">
                    <thead>
                      <tr>
                        <th>Folio</th>
                        <th>Movimiento</th>
                        <th>Inicio</th>
                        <th>Término</th>
												<th>F. Captura</th>
												<th>F. Aceptación</th>
                        <th>Tipo</th>
                        <th>Origen</th>
                        <th>Categoria</th>
                        <th>Dependencia</th>
                        <th>Observaciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if (!empty($movimientos)) {
                        foreach ($movimientos as $item) {
                          if (in_array($item->origen,array('LIS','LIC','LII')) && $item->sinEfecto == 0){
                                 ?>
                            <tr>
                              <td><?= $item->IdMovimiento; ?></td>
                              <td><?= $item->FMov; ?></td>
                              <td><?= $item->finicio; ?></td>
                              <td><?= $item->FFIN; ?></td>
															<td><?= cambiaf_a_normal($item->FechaCaptura); ?></td>
															<td><?= cambiaf_a_normal($item->FechaAceptacionRH); ?></td>
                              <td><?= $item->TipoMovimiento; ?></td>
                              <td><?= $item->origen; ?></td>
                              <td><?= $item->CategoriaAnterior; ?></td>
                              <td><?= $item->DependenciaAnterior; ?></td>
                              <td><?= $item->Observaciones; ?></td>
                            </tr>
                      <?php
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
      </div>

      <!-- GSantos, 2020.03.03 -->
      <div class="tab-pane fade" id="card-diasEconomicos">
         <div class="card mb-2">
          <div class="card-body">
            <div class="row">
              <div class="col-md-2">
                <div class="form-group">
                  <label for="fechaIni"><b>Fecha inicial</b></label>
                  <input type="text" class="form-control form-control-sm" id="fechaIni" name="fechaIni">
                </div>
              </div>

              <div class="col-md-2">
                <div class="form-group">
                  <label for="fechaFin"><b>Fecha final</b></label>
                  <input type="text" class="form-control form-control-sm" id="fechaFin" name="fechaFin" >
                </div>
              </div>

              <div class="col-md-2">
                <div class="form-group">
                  <label for="fechaMov"><b>Fecha Movimiento</b></label>
                  <input type="text" class="form-control form-control-sm" id="fechaMov" name="fechaMov" >
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="observaciones"><b>Observaciones</b></label>
                  <input type="text" class="form-control form-control-sm" id="observaciones" name="observaciones" >
                </div>
              </div>

              <div class="col-md text-end">
                <div class="form-group">
                  <label class="control-label">&nbsp;</label>
                  <div>
                    <button type="button" class="btn btn-success btn-sm" title="Agregar/modificar DEC" id="btnAgregarDEC" name="btnAgregarDEC" onclick="agregar_diasEconomicos();"><i class="fas fa-save"></i> Guardar
                    </button>
                  </div>
                </div>
              </div>
            </div>
					</div>
				</div>
				<div class="card">
				 <div class="card-body">
					 <div class="row mt-2">
								 <div class="col-12">
									 <div class="table-responsive">
										 <table class="table table-bordered table-sm" id="tblDEC" width="100%">
												<thead>
												 <tr>
													 <th>Folio</th>
													 <th>F. Inicio</th>
													 <th>F. Término</th>
													 <th>F. del Mov.</th>
													 <th>No. Días</th>
													 <th>Observaciones</th>
													 <th>Mov. Aceptado</th>
													 <th> </th>
												 </tr>
											 </thead>
											 <tbody>
													 <?php
														 if($movimientosDEC):;
																 foreach( $movimientosDEC as $item ):;
													 ?>
													 <tr id="rowMovimiento_<?= $item->IdMovimiento;?>">
														 <td><?= $item->IdMovimiento; ?></td>
														 <td><?= $item->FechaInicio; ?></td>
														 <td><?= $item->FechaTerminacion; ?></td>
														 <td><?= $item->FechaMovimiento; ?></td>
														 <td><?= $item->Dias; ?></td>
														 <td><?= $item->Observaciones; ?></td>
														 <td><?= ( $item->MovimientoAceptado == 1 ? '<span class="text-success"><i class="fa fa-check"></i></span>' : ''); ?>
														 <td class="text-center">  <!-- CASU 1678-2022. Se podrá cancelar aún si ya se recibió -->
                              <button  type="button" id="btnCancelar" class="btn btn-xs btn-danger" onclick="CancelarDEC(<?= $item->IdMovimiento; $item->MovimientoAceptado;?>);"
                                      title="Cancelar el movimiento"><i class="far fa-trash-alt"></i></button>
															 <?php if($item->MovimientoAceptado==0): ?>
																	 <button  type="button" id="btnEditar" class="btn btn-xs" onclick="EditarDEC(<?= $item->IdMovimiento;?>,<?=$item->MovimientoAceptado;?>, '<?= $item->FechaInicio;?>', '<?= $item->FechaTerminacion;?>', '<?= $item->FechaMovimiento;?>', '<?= $item->Observaciones;?>');"
																			title="Editar el movimiento"><i class="fas fa-pencil-alt"></i></button>

															 <?php endif; ?>

														 </td>


													 </tr>
													 <?php
													 endforeach;
													 endif;?>
											 </tbody>
										 </table>
									 </div>
								 </div>

					 </div>
				 </div>
			 	</div>
    </div>
  </div>
</div>

<script type="text/javascript">
setTimeout(function cargarconsulta() {

  $('#tblVacaciones').DataTable({
    language: {
      "url": "assets/plugins/DataTables/Spanish.json",
      "processing": "Cargando..."
    },
    dom: 'ft',
    paging: false,
    // ordering: false,
    responsive: true,
    order: [3, 'asc'],
    columnDefs: [
      { className: "dt-center", targets: '_all' }
    ],
  });

  $('#tblContratos, #tblIncapacidades, #tblLicencias, #tblDEC').DataTable({
    language: {
      "url": "assets/plugins/DataTables/Spanish.json",
      "processing": "Cargando..."
    },
    dom: 'ft',
    paging: false,
    responsive: true,
    order: [0, 'asc'],
    columnDefs: [
      { className: "dt-center", targets: '_all' }
    ],});


 //controles fecha

  $("#fechaIni, #fechaFin, #fechaMov").datepicker({
    format: "dd/mm/yyyy",
    weekStart: 1,
    maxViewMode: 3,
    language: "es",
    orientation: "bottom auto",
    autoclose: true,
    todayBtn: "linked",
    todayHighlight: true,
  }).inputmask({'alias': 'datetime', 'inputFormat': 'dd/mm/yyyy', 'placeholder': 'dd/mm/yyyy', 'min':'01/01/1900'});

 });

//funciones

function EditarDEC(IdMovimiento, MovimientoAceptado, FechaInicio, FechaTerminacion, FechaMovimiento, Observaciones){
    if (MovimientoAceptado)      {
        alerta_emergente("No se puede editar un movimiento aceptado en RH", 'error');
        return false
      }

    $("#IdMovimiento").val(IdMovimiento);
    $("#fechaIni").datepicker( "setDate", FechaInicio );
    $("#fechaFin").datepicker( "setDate", FechaTerminacion );
    $("#fechaMov").datepicker( "setDate", FechaMovimiento );
    $("#observaciones").val(Observaciones);
    $("#movimientoAceptado").val(MovimientoAceptado);
    return false;
  }

function agregar_diasEconomicos()
  {
  var idmovimiento = $("#IdMovimiento").val(),
      credencial = $("#Credencial").val(),
      fechaini = $("#fechaIni").val(),
      fechafin = $("#fechaFin").val(),
      fechamov = $("#fechaMov").val(),
      observaciones = $("#observaciones").val(),
      movimientoaceptado = $("#movimientoAceptado").val(),
      tabla = $('#tblDEC').DataTable();

 if (DatosDECValidos()){
        $.ajax({
          url   : '<?= base_url() ?>movimientos/registrar_movDEC_sisege',
          type: "POST",
          dataType: "JSON",
          data: {idmovimiento:idmovimiento, credencial:credencial, fechaini:fechaini, fechafin:fechafin, fechamov:fechamov, observaciones:observaciones},
          success : function(data)
                  {

                  if(data.status == false)
                      {
                        alerta_emergente(data.mensaje,"error");
                        return false;
                      }
                  else{
                        alerta_emergente(data.mensaje,"success");
                        $("#IdMovimiento").val(0);
                        $("#fechaIni").datepicker( "setDate", '' );
                        $("#fechaFin").datepicker( "setDate", '' );
                        $("#fechaMov").datepicker( "setDate", '' );
                        $("#observaciones").val('');
                        $("#movimientoAceptado").val(0);
                        var movs = data.movsDEC;
                        var boton = '';

                        tabla.clear().draw();
                        for (var i in movs) {
                            aceptado = '<span class="text-success"><i class="fa fa-check"></i></span>'
                            boton =
                                 '<button type="button" class="btn btn-xs btn-danger" title="Cancelar DEC" onclick="CancelarXBotonDEC(this);">'+
                                 '<i class="far fa-trash-alt"></i></button></div>';

                            if (movs[i].MovimientoAceptado==0)
                                {
                                boton =boton +  ' <div class="btn-group" role="group" aria-label="Acciones">'+
                                 '<button type="button" class="fas fa-pencil-alt" title="Editar registro de DEC" onclick="EditarXBotonDEC(this);">' +
                                 '<i class="far fa-trash-alt"></i></button></div>';
                                 aceptado = '';
                                }
                            tabla.row.add(
                                 [ movs[i].IdMovimiento,
                                   movs[i].FechaInicio,
                                   movs[i].FechaTerminacion,
                                   movs[i].FechaMovimiento,
                                   movs[i].Dias,
                                   movs[i].Observaciones,
                                   aceptado, /*movs[i].MovimientoAceptado + '<span class="text-success"><i class="fa fa-check"></i></span>',*/
                                   boton,]
                                  );
                            }
                          tabla.columns.adjust().draw();
                          tabla.responsive.recalc();
                        }
                      }
           });
    }
}



function CancelarDEC(IdMovimiento, MovimientoAceptado){
    // if (MovimientoAceptado)
    //   {
    //     alerta_emergente("No se puede cancelar un movimiento aceptado en RH", 'error');
    //     return false
    //   }
    swal.fire({
        title: "Alerta",
        text: "¿Confirma que desea eliminar el registro de DEC con Folio " + IdMovimiento +"?",
        type: "question",
        showCancelButton: true,
        showLoaderOnConfirm: true,
        allowOutsideClick: false,
        preConfirm: function () {
            return new Promise(function(resolve) {
                $('#rowMovimiento_'+IdMovimiento).addClass('selected');

                $.ajax({
                    url: "<?=base_url();?>movimientos/cancelar_DEC",
                    type: 'POST',
                    async: true,
                    dataType: "JSON",
                    data: 'IdMovimiento=' + IdMovimiento,
                    error: function(XMLHttpRequest, errMsg, exception){
                        var msg = "jQuery message: "+errMsg+" XMLHttpRequest: "+StatusMsg(XMLHttpRequest.status);
                        alerta_emergente(msg, 'error');
                        swal.close();
                    },
                    success: function(data){
                        if(data.status == false) {
                        alerta_emergente(data.mensaje,"error");
                        swal.close();
                        }
                        else{
                            alerta_emergente(data.mensaje,"success");
                            var tblElementos = $('#tblDEC').DataTable();

                            tblElementos.row('.selected').remove().draw( false );
                            swal.close();
                        }
                    },
                    complete: function(xhr){
                        $('#rowMovimiento_'+ IdMovimiento).removeClass('selected');
                    }
                });
            });
        }
    });

    $('#rowMovimiento_'+ IdMovimiento).removeClass('selected');
    return false;
  }


  function CancelarXBotonDEC(obj) {
    var tabla = $('#tblDEC').DataTable();
    var $tr = $(obj).closest('tr');
    var rowData = $('#tblDEC').DataTable().row($tr).data();
    var IdMovimiento = rowData[0];
    var MovimientoAceptado = rowData[6];

    if (MovimientoAceptado==1)
      {
        alerta_emergente("No se puede cancelar un movimiento aceptado en RH", 'error');
        return false
      }
    swal.fire({
        title: "Alerta",
        text: "¿Confirma que desea eliminar el registro de DEC con Folio " + IdMovimiento +"?",
        type: "question",
        showCancelButton: true,
        showLoaderOnConfirm: true,
        allowOutsideClick: false,
        preConfirm: function () {
            return new Promise(function(resolve) {
                $.ajax({
                    url: "<?=base_url();?>movimientos/cancelar_DEC",
                    type: 'POST',
                    async: true,
                    dataType: "JSON",
                    data: 'IdMovimiento=' + IdMovimiento,
                    error: function(XMLHttpRequest, errMsg, exception){
                        var msg = "jQuery message: "+errMsg+" XMLHttpRequest: "+StatusMsg(XMLHttpRequest.status);
                        alerta_emergente(msg, 'error');
                        swal.close();
                    },
                    success: function(data){
                        if(data.status == false) {
                        alerta_emergente(data.mensaje,"error");
                        swal.close();
                        }
                        else{
                            alerta_emergente(data.mensaje,"success");
                            //vamos a quitar el registro de la tabla
                            tabla
                                .row( $(obj).parents('tr') )
                                .remove()
                                .draw();
                            swal.close();
                        }
                    },
                    complete: function(xhr){

                    }
                });
            });
        }
    });

  return false;
}

 function EditarXBotonDEC(obj) {
    var tabla = $('#tblDEC').DataTable();
    var $tr = $(obj).closest('tr');
    var rowData = $('#tblDEC').DataTable().row($tr).data();
    var IdMovimiento = rowData[0],
        FechaInicio = rowData[1],
        FechaTerminacion = rowData[2],
        FechaMovimiento = rowData[3],
        Observaciones = rowData[5];


    $("#IdMovimiento").val(IdMovimiento);
    $("#fechaIni").datepicker( "setDate", FechaInicio );
    $("#fechaFin").datepicker( "setDate", FechaTerminacion );
    $("#fechaMov").datepicker( "setDate", FechaMovimiento );
    $("#observaciones").val(Observaciones);

  return false;
}

  function DatosDECValidos(){
    var resultado = true;

   if(resultado == true && $("#fechaIni").val() == ""){
        resultado = false;
        $("#fechaIni").focus();
        alerta_emergente('Debe capturar la fecha de inicio de los DEC.','info');
      }
    if(resultado == true && $("#fechaFin").val() == ""){
        resultado = false;
        $("#fechaFin").focus();
        alerta_emergente('Debe capturar la fecha de terminación de los DEC.','info');
      }
    if(resultado == true && $("#fechaMov").val() == ""){
        resultado = false;
        $("#fechaMov").focus();
        alerta_emergente('Debe capturar la fecha de movimiento de los DEC.','info');
      }
    if(resultado == true && $("#fechaIni").val() > $("#fechaFin").val()){
        resultado = false;
        $("#fechaIni").focus();
        alerta_emergente('La fecha inicial no puede ser mayor a la fecha final.','info');
      }
    return resultado;
  }
//fin funciones

</script>
