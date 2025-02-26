<div class="d-flex justify-content-between">
  <h1 class="page-header">Confirmar Nómina <small>cierre y apertura de una quincena</small></h1>
	<div><h4><a href="<?= base_url(); ?>assets/manuales/Confirmar_Nomina.pdf" target="_blank" title="Abrir archivo de ayuda" class="text-black-900"><i class="fa-regular fa-circle-question"></i></a></h4></div>
</div>
<input type="hidden" id="idPeriodoPago" name="idPeriodoPago" value="<?= $this->param_lib->get_parametro('idPeriodoPago'); ?>">
<input type="hidden" id="idPresupuesto" name="idPresupuesto" value="<?= $this->param_lib->get_parametro('idPresupuesto'); ?>">

<!-- PERÍODO ACTUAL -->
<div class="card mb-2" id="card-datos-periodo">
  <div class="card-header"><h6>Datos del período actual</h6></div>
  <div class="card-body">
    <?php
    $attributes = array("id" => "frmFechasPeriodo", "name" => "frmFechasPeriodo", "onsubmit" => "return PostBackFrmFechasPeriodo(this, event);");
    echo form_open("nomina/actualiza_hist_nomina", $attributes);
    ?>
    <div class="row">
      <div class="col-3">
        <div class="form-group">
          <label for="fechaini_periodo" class="form-label">Fecha de Inicio</label>
          <input type="text" class="form-control form-control-sm fechasPeriodo" id="fechaini_periodo" name="fechaini_periodo" value="<?= $fechaini; ?>">
        </div>
      </div>

      <div class="col-3">
        <div class="form-group">
          <label for="fechafin_periodo" class="form-label">Fecha de Término</label>
          <input type="text" class="form-control form-control-sm fechasPeriodo" id="fechafin_periodo" name="fechafin_periodo" value="<?= $fechafin; ?>">
        </div>
      </div>

      <div class="col-3">
        <div class="form-group">
          <label for="fechapago_periodo" class="form-label">Fecha de Pago</label>
          <input type="text" class="form-control form-control-sm fechasPeriodo" id="fechapago_periodo" name="fechapago_periodo" value="<?= $fechapago; ?>">
        </div>
      </div>

      <div class="col-3">
        <div class="form-group">
          <label for="fechadisp_periodo" class="form-label">Fecha de Dispersión</label>
          <input type="text" class="form-control form-control-sm fechasPeriodo" id="fechadisp_periodo" name="fechadisp_periodo" value="<?= $fechadisp; ?>">
        </div>
      </div>
    </div>

    <div class="row mt-2 text-end">
      <div class="col-md">
        <div class="form-group">
          <button class="btn btn-inverse btn-sm" title="Modificar fechas" id="btnModFechas" name="btnModFechas">
            <i class="fas fa-calendar-check"></i> Modificar Fechas
          </button>
        </div>
      </div>
    </div>
    <?php
    echo form_close();
    ?>
  </div>
</div>

<!-- ABRIR QUINCENA -->
<div class="card mb-2" id="card-abrir-quincena" style="display:none;">
  <div class="card-header"><h6>Datos del nuevo período</h6></div>
	<div class="card-body">
		<div class="row">
			<div class="col-3">
				<div class="form-group">
					<label for="fechaini_periodoNuevo" class="form-label">Fecha de Inicio</label>
					<input type="text" class="form-control form-control-sm fechasPeriodo" id="fechaini_periodoNuevo" name="fechaini_periodoNuevo"
								 value="<?= (empty($fechafin) ? '' : agrega_dias_fecha($fechafin,1)); ?>">
				</div>
			</div>

			<div class="col-3">
				<div class="form-group">
					<label for="fechafin_periodoNuevo" class="form-label">Fecha de Término</label>
					<input type="text" class="form-control form-control-sm fechasPeriodo" id="fechafin_periodoNuevo" name="fechafin_periodoNuevo"
					value="<?= (empty($fechafin) ? '' : agrega_dias_fecha($fechafin,($this->param_lib->get_parametro('LongPeriodoPago')))); ?>">
				</div>
			</div>

			<div class="col-3">
				<div class="form-group">
					<label for="fechapago_periodoNuevo" class="form-label">Fecha de Pago</label>
					<input type="text" class="form-control form-control-sm fechasPeriodo" id="fechapago_periodoNuevo" name="fechapago_periodoNuevo"
					value="<?= (empty($fechafin) ? '' : agrega_dias_fecha($fechafin,($this->param_lib->get_parametro('LongPeriodoPago')))); ?>">
				</div>
			</div>

			<div class="col-3">
				<div class="form-group">
					<label for="fechadisp_periodoNuevo" class="form-label">Fecha de Dispersión</label>
					<input type="text" class="form-control form-control-sm fechasPeriodo" id="fechadisp_periodoNuevo" name="fechadisp_periodoNuevo"
					 value="<?= (empty($fechafin) ? '' : agrega_dias_fecha($fechafin,($this->param_lib->get_parametro('LongPeriodoPago')-1))); ?>">
				</div>
			</div>
		</div>
	</div>
	<div class="card-footer text-end" id="pieAbrirQuincena">
		<button type="button" class="btn btn-sm btn-success" name="btnAbrirPeriodo" id="btnAbrirPeriodo" onclick="abrir_periodo();"><i class="fa-solid fa-calendar-day"></i> Abrir Período</button>
	</div>
</div>

<div class="card mb-2">
  <div class="card-body">
    <div class="row" id="muestra-quincena">
      <div class="col-6">
        <div class="form-group">
          <label for="quincena" class="form-label">Quincena</label>
          <select class="form-control form-control-sm select2-sm" id="quincena" name="quincena">
            <?= $quincenas; ?>
          </select>
        </div>
      </div>
    </div>

		<div id="div-sin-pago" class="row mt-2" style="display:none;">
			<div class="col">
				<div class="alert alert-danger fade show fw-bold">
					<span class="msj-sin-pago"></span>
					<button class="btn btn-xs btn-inverse pull-right" id="btnRevisarConceptosSinPago" onclick="revisar_conceptos_sinpago();"><i class="fa-solid fa-check"></i> Revisar</button>
				</div>
			</div>
		</div>
  </div>
</div>

<div class="card mb-2">
  <ul class="nav nav-tabs nav-tabs-inverse nav-justified nav-justified-mobile" data-sortable-id="index-2">
    <li class="nav-item"><a href="#tab-quincena" data-bs-toggle="tab" class="nav-link active fs-5"><i class="fas fa-clipboard-list"></i> <span class="d-none d-md-inline">Datos de la Quincena</span></a></li>
    <li class="nav-item" style="display:none;"><a href="#tab-historial" data-bs-toggle="tab" class="nav-link"><i class="fas fa-money-bill-wave fa-lg m-r-5"></i> <span class="d-none d-md-inline">Historial de Pagos</span></a></li>
  </ul>

  <div class="tab-content" data-sortable-id="index-3">
    <div class="tab-pane fade active show" id="tab-quincena">
      <div class="card-body">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h6>Nóminas para el periodo</h6>
              </div>
              <div class="card-body">
                <div class="alert alert-warning fade show" id="alertNomAbiertas">
                  <strong>No hay nóminas abiertas para la quincena seleccionada</strong>
                </div>
                <div class="table-responsive">
                	<table id="tblNominasPeriodo" class="table table-bordered table-condensed" cellspacing="0" width="100%" style="display:none;">
               			<thead>
	                  	<tr>
	                    	<th>Nómina</th>
	                     	<th>¿Confirmada?</th>
	                     	<th>F. de Pago</th>
	                     	<th>Formato</th>
	                     	<th>¿Fondo Auxiliar?</th>
											 	<th>idTipoNomina</th>
											 	<th>Cerrada</th>
											 	<th>Confirmada</th>
											 	<th>tabla</th>
											 	<th>idPeriodoPago</th>
	                     	<th></th>
	                  	</tr>
	                 	</thead>
	                	<tbody id="tbl_dataNominasPeriodo">

	              		</tbody>
                	</table>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="tab-pane fade active" id="tab-historial">

    </div>
  </div>
  <div class="card-footer text-end" id="pieCerrarQuincena">
    <button type="button" class="btn btn-sm btn-success" name="btnCerrarQuincena" id="btnCerrarQuincena" onclick="cerrar_periodo();"><i class="far fa-check-circle"></i> Cerrar Quincena</button>
  </div>
</div>

<script type="text/javascript">

setTimeout(function FuncionesIniciales(){
  $("#quincena").select2({
    language: "es",
    width: '100%',
    placeholder: 'Selecciona una Opción'
  });

  $(".fechasPeriodo").datepicker({
    format: "dd/mm/yyyy",
    weekStart: 1,
    maxViewMode: 3,
    language: "es",
    orientation: "bottom auto",
    autoclose: true,
    todayBtn: "linked",
    // endDate: '+1d',
    // datesDisabled: '+1d',
    todayHighlight: true,
  }).inputmask({'alias': 'datetime', 'inputFormat': 'dd/mm/yyyy', 'placeholder': 'dd/mm/yyyy', 'min':'01/01/1900'});

	let idPresupuesto = $('#idPresupuesto').val(),
			arrColumnas = (idPresupuesto == 2 ? [5,6,7,8,9] : [4,5,6,7,8,9]);
  $('#tblNominasPeriodo').DataTable({
    language: {
      "url": "assets/plugins/DataTables/Spanish.json",
      "processing": "Cargando..."
    },
    dom: 't',
    paging: false,
    ordering: false,
    responsive: true,
		columnDefs: [
			{ targets:arrColumnas, visible: false, searchable: false },
		],
  });
	inicializa_captura_periodo();
});

function inicializa_captura_periodo() {
	let idPeriodo = $('#idPeriodoPago').val();
	if (typeof(idPeriodo) == "undefined" || idPeriodo === "" || idPeriodo == 0 || idPeriodo == null) {
    alerta_emergente("No se encontró algún período abierto.","warning")
		$('#pieCerrarQuincena, #card-datos-periodo').hide();
		$('#card-abrir-quincena').show();
  }
	$('#quincena').trigger('change');
}

function carga_nominas_periodo(){
  let tabla = $('#tblNominasPeriodo').DataTable(),
      idPeriodoPago = $('#quincena').val(),
			cerrada = $('#quincena').find(":selected").data('nominacerrada');
	if (cerrada == 1) { $('#pieCerrarQuincena').hide(); }
	else { $('#pieCerrarQuincena').show(); }
	Carga_Metodo("<?=base_url();?>nomina/trae_nominas_abiertas", {idPeriodoPago:idPeriodoPago},
		function finalizaCarga(data){
			if (data.status == false) {
				$('#tblNominasPeriodo, #btnCerrarQuincena').hide();
				$('#alertNomAbiertas').show();
				alerta_emergente(data.msj,"warning");
				return false;
			}
			else {
				$('#alertNomAbiertas').hide();
				var nominas = data.nominas;

				tabla.clear().draw();
				for (var i in nominas) {
					tabla.row.add(
						 [ nominas[i].Descripcion,
							 (nominas[i].Confirmada == 1 ? 'SÍ' : 'NO' ),
							 fecha_sql_a_normal(nominas[i].FechaPago),
							 '<select class="form-control form-control-sm select2-sm selemisores" id="confEmisores_'+nominas[i].TipoNominaID+'" name="confEmisores_'+nominas[i].TipoNominaID+'">'+data.emisores+'</select>',
							 '<div class="checkbox checkbox-css checkbox-inverse"><input type="checkbox" id="chckfondoAuxiliar_'+nominas[i].TipoNominaID+'" name="chckfondoAuxiliar_'+nominas[i].TipoNominaID+'" value="1"/></div>',
							 nominas[i].TipoNominaID,
							 nominas[i].Cerrada,
							 nominas[i].Confirmada,
							 nominas[i].Tabla,
							 nominas[i].PeriodoID,
							 '<div class="btn-group" role="group" aria-label="Acciones">'+
							 '  <button type="button" class="btn btn-xs btn-inverse" title="Generar archivo electrónico" onclick="generar_archivo(this);"><i class="far fa-file-excel"></i></button>'+
							 '  <button type="button" class="btn btn-xs btn-success" title="Confirmar el tipo de nómina" onclick="confirmar_nomina(this);"'+ (nominas[i].Confirmada == 1 ? ' disabled ' : '') +'><i class="fas fa-tasks"></i></button>'+
							 '</div>',
						 ]
					).draw();
				}

				$(".selemisores").select2({
					language: "es",
					placeholder: "Seleccione un Elemento",
					width:'100%',
				})
				tabla.columns.adjust().draw();
				tabla.responsive.recalc();
				$('#tblNominasPeriodo').show();
			}
		},
		"Cargando...");
}

$("#quincena").on("change", function (e) {
  let quincena = $(this).val();

  if (typeof(quincena) == "undefined" || quincena === "" || quincena == 0 || quincena == null) {
    alerta_emergente("Ocurrió un error al obtener la información del período de pago. Por favor intente de nuevo más tarde.","warning")
    return false;
  }
	let	cerrada = $('#quincena').find(":selected").data('nominacerrada');
	if (cerrada == 0) { valida_conceptos_configurados(quincena); }
	carga_nominas_periodo();
  return false;
});

function PostBackFrmFechasPeriodo(f,e) {
  e.preventDefault();
	Carga_Metodo(f.action, $(f).serialize(),"","Actualizando fechas...");
  return false;
}

function confirmar_nomina(obj) {
	let tabla         = $('#tblNominasPeriodo').DataTable(),
			data          = tabla.row( $(obj).parents('tr') ).data(),
			idTipoNomina	= data[5],
			confirmada		= data[7];

	if (typeof(confirmada) == 1) {
    alerta_emergente("No se puede volver a confirmar este tipo de nómina.","warning")
    return false;
  }

	swal.fire({
		title: "Alerta",
		text: "¿Desea confirmar el tipo de nómina "+data[0]+" (este proceso no puede ser revertido)?",
		icon: "question",
		showCancelButton: true,
	}).then(result => {
		if (result.value) {
			Carga_Metodo('nomina/confirmar_nomina',
									 {idTipoNomina:idTipoNomina},
									 function finalizaProceso(data) {
										 if (data.status == false) { alerta_emergente(data.message, "warning"); }
										 else {
											 alerta_emergente(data.message, "success");
								 			 carga_nominas_periodo();
										 }
									 },
									 "Confirmando Nómina...");
		}
	}).catch(swal.noop);
	return false;
}

function generar_archivo(obj) {
	let tabla         = $('#tblNominasPeriodo').DataTable(),
			data          = tabla.row($(obj).parents('tr')).data(),
			idTipoNomina	= data[5],
			cerrada 			= data[6],
			confirmada 		= data[7],
			tablaGenera 	= data[8],
			idPeriodoPago = data[9],
			idEmisor 			= $('#confEmisores_'+idTipoNomina).find(":selected").data('idemisor'),
			emisor 				= $('#confEmisores_'+idTipoNomina).find(":selected").data('emisor'),
			idFormatoPago = $('#confEmisores_'+idTipoNomina).val(),
			fondoAuxiliar = ($('#chckfondoAuxiliar_'+idTipoNomina).prop('checked') ? 1 : 0);

	if (typeof(idEmisor) == "undefined" || idEmisor === "" || idEmisor == 0 || idEmisor == null) {
    alerta_emergente("Es necesario seleccionar un formato.","warning")
    return false;
  }

	Carga_Metodo("<?=base_url();?>reportes/genera_archivo_electronico", {idTipoNomina:idTipoNomina,idPeriodoPago:idPeriodoPago,idEmisor:idEmisor,idFormatoPago:idFormatoPago,emisor:emisor,fondoAuxiliar:fondoAuxiliar},
		function functionName(data) {
			if (data.status == false) { alerta_emergente(data.message, "warning"); }
			else {
				alerta_emergente(data.message, "success");
				let $a = $("<a>");
				$a.attr("href", data.file);
				$("body").append($a);
				$a.attr("download", data.nombreArch);
				$a[0].click();
				$a.remove();
			}
		},
		"Procesando");

  return false;
}

function cerrar_periodo() {
	swal.fire({
		title: "Alerta",
		text: "¿Confirma que desea cerrar el período (este proceso no puede ser revertido)?",
		icon: "question",
		showCancelButton: true,
	}).then(result => {
		if (result.value) {
			Carga_Metodo('nomina/cerrar_periodo', "",
				function finalizaProceso(data) {
					if (data.status == false) { alerta_emergente(data.message, "warning"); }
					else {
						alerta_emergente(data.message, "success");
						CargarModulo('<?= base_url()?>','nomina/CargarConfirmar');
						// carga_nominas_periodo();
						// $('#idPeriodo').val(0);
						// $('#btnCerrarQuincena, #card-datos-periodo').hide();
						// $('div#card-abrir-quincena').show();
					}
				},
				"Cerrando Período...");
		}
	}).catch(swal.noop);
	return false;
}

function valida_conceptos_configurados(idPeriodoPago) {
	Carga_Metodo("nomina/obtener_conceptos_sin_calculo", {idPeriodoPago:idPeriodoPago}, function finalizaCarga(respuesta){
		if (typeof(respuesta.empleados.Total) == "undefined" || respuesta.empleados.Total === "" || respuesta.empleados.Total == 0 || respuesta.empleados.Total == null) {
			$("#div-sin-pago").hide();
			$('.msj-sin-pago').empty();
		}
		else {
			$("#div-sin-pago").show();
			$('.msj-sin-pago').html("Se encontraron: "+respuesta.empleados.Total+ " empleados con conceptos configurados sin calcular.");
		}
	}, "Cargando...");
}

function revisar_conceptos_sinpago() {
	let idPeriodoPago = $("#quincena").val();
	cargamodalGenerica('nomina/revisar_empleados_sin_calculo', '#modContenido', '#modGeneral', {idPeriodoPago:idPeriodoPago}, "Empleados con conceptos configurados sin cálculo", 1);
	return false;
}

function calcular_empleado_sinpago(url,data,esBoton) {
	data = $(data).data('json');
	let idPeriodoPago = $("#quincena").val(),
			cerrada = $('#quincena').find(":selected").data('nominacerrada'),
			idEmpleado = data.id,
			credencial = data.Credencial;

	if (cerrada == 1) {
		alerta_emergente("No se puede realizar el cálculo. La nómina se encuentra cerrada.","warning");
		return false;
	}

	Carga_Metodo("<?=base_url();?>nomina/calcula_nomina_empleado_quincenal",
								{idEmpleado:idEmpleado,idPeriodoPago:idPeriodoPago},
								function finalizaCalculo(respuesta) {
									if (respuesta.status == false) { alerta_emergente(respuesta.message, "warning"); }
									else {
										alerta_emergente(respuesta.message, "success");
										inicializa_captura_periodo();
									}
								},
							"Calculando para el empleado "+credencial+"...");
}

function abrir_periodo() {
	let fechaIni = $('#fechaini_periodoNuevo').val(),
			fechaFin = $('#fechafin_periodoNuevo').val(),
			fechaPago = $('#fechapago_periodoNuevo').val(),
			fechaDispersion = $('#fechadisp_periodoNuevo').val();
	Carga_Metodo('nomina/abrir_periodo', {fechaIni:fechaIni,fechaFin:fechaFin,fechaPago:fechaPago,fechaDispersion:fechaDispersion},
		function finalizaProceso(data) {
			if (data.status == false) { alerta_emergente(data.message, "warning"); }
			else {
				alerta_emergente(data.message, "success");
				CargarModulo('<?= base_url()?>','nomina/CargarConfirmar');
				// carga_nominas_periodo();
				// $('#idPeriodo').val(data.idPeriodoPago);
				// $('#btnCerrarQuincena, #card-datos-periodo').hide();
				// $('div#card-abrir-quincena').hide();
				// inicializa_captura_periodo();
			}
		},
		"Abriendo Período...");
}

</script>
