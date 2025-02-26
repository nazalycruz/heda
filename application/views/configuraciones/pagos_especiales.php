
<div class="d-flex justify-content-between">
  <h1 class="page-header">Pagos Especiales <small></small></h1>
	<!-- assets/manuales/UUID.pdf -->
	<div><h4><a href="<?= base_url(); ?>assets/manuales/pagos_especiales.pdf" target="_blank" title="Abrir archivo de ayuda" class="text-black-900"><i class="fa-regular fa-circle-question"></i></a></h4></div>
</div>
<div class="card mb-2">
	<input type="hidden" id="urlReporteador" value="<?=$urlReporteador?>" >
	<input type="hidden" id="rutaReportes" value="<?=$rutaReportes?>" >
  <div class="card-header p-10">
    <ul class="nav nav-pills card-header-pills" id="pe-pills">
      <li class="nav-item">
        <a href="#nav-pills-conceptos" data-bs-toggle="tab" class="nav-link" id="tab-conceptos">
        <span class="d-sm-none">Conceptos</span>
        <span class="d-sm-block d-none">Conceptos</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="#nav-pills-empleado" data-bs-toggle="tab" class="nav-link" id="tab-empleado">
        <span class="d-sm-none">Proy. Por Empleado</span>
        <span class="d-sm-block d-none">Proyección por Empleado</span>
        </a>
      </li>

			<li class="nav-item">
				<a href="#nav-pills-conf-categoria" data-bs-toggle="tab" class="nav-link" id="tab-conf-categoria">
				<span class="d-sm-none">Conf. por Categoría</span>
				<span class="d-sm-block d-none">Conf. días por Categoría</span>
				</a>
			</li>

			<li class="nav-item">
				<a href="#nav-pills-dias-presupuesto" data-bs-toggle="tab" class="nav-link" id="tab-dias-presupuesto">
				<span class="d-sm-none">Días Laborados por Presupuesto</span>
				<span class="d-sm-block d-none">Días Laborados por Presupuesto</span>
				</a>
			</li>
      <!-- <li class="nav-item">
        <a href="#nav-pills-acumular" data-bs-toggle="tab" class="nav-link" id="tab-acumular">
        <span class="d-sm-none">Acumular</span>
        <span class="d-sm-block d-none">Conceptos a Acumular</span>
        </a>
      </li> -->
			<!-- <li class="nav-item">
        <a href="#nav-pills-multicategoria" data-bs-toggle="tab" class="nav-link" id="tab-multicategoria">
        <span class="d-sm-none">+1 Categoría</span>
        <span class="d-sm-block d-none">Empleados +1 Categoría</span>
        </a>
      </li> -->
		</ul>
  </div>
  <div class="card-block">
    <div class="tab-content p-0 m-0">
      <div class="tab-pane fade" id="nav-pills-conceptos">
        <?php
        $attributes = array("id" => "frmPagosEspeciales", "name" => "frmPagosEspeciales","class" => "needs-validation", "onsubmit" => "return PostBackFrmGuardaPagoEspecial(this, event);");
        echo form_open("configuraciones/guarda_pago_especial", $attributes);
        ?>
        <div class="card-body">
          <div id="errores_pe" class="alert alert-danger" style="display:none;"></div>
          <input type="hidden" id="idPagoEspecial" name="idPagoEspecial" value="0">
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label for="pe_concepto" class="form-label">Concepto a Pagar</label>
                <select class="form-control pe_catalogos form-control-sm select2-sm" id="pe_concepto" name="pe_concepto" onchange="comprobar_concepto_pe(this);" required>
                  <?= $catconceptos; ?>
                </select>
                <div class="invalid-feedback">Seleccione un Concepto a Pagar</div>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="pe_conceptorel" class="form-label">Concepto Relacionado</label>
                <select class="form-control pe_catalogos form-control-sm select2-sm" id="pe_conceptorel" name="pe_conceptorel" required>
                  <?= $catconceptos; ?>
                </select>
                <div class="invalid-feedback">Seleccione un Concepto Relacionado</div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-3">
              <div class="form-group">
                <label for="pe_fechaini" class="form-label">Fecha Inicio</label>
                <input type="text" class="form-control form-control-sm fechasPE" id="pe_fechaini" name="pe_fechaini" required autocomplete="off">
              </div>
            </div>
            <div class="col-3">
              <div class="form-group">
                <label for="pe_fechafin" class="form-label">Fecha Final</label>
                <input type="text" class="form-control form-control-sm fechasPE" id="pe_fechafin" name="pe_fechafin" required autocomplete="off">
              </div>
            </div>
            <div class="col-3">
              <div class="form-group">
                <label for="pe_fecharef" class="form-label">Fecha de Referencia</label>
                <input type="text" class="form-control form-control-sm fechasPE" id="pe_fecharef" name="pe_fecharef" required autocomplete="off">
              </div>
            </div>
            <div class="col-3">
              <div class="form-group">
                <label for="pe_fechapago" class="form-label">Fecha del Pago</label>
                <input type="text" class="form-control form-control-sm fechasPE" id="pe_fechapago" name="pe_fechapago" required autocomplete="off">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-2">
              <div class="form-group">
                <label for="pe_uma" class="form-label">UMA</label>
                <input type="text" class="form-control form-control-sm" id="pe_uma" name="pe_uma" autocomplete="off" readonly value="<?= empty($UMA) ? '' : '$'.DecimalMoneda($UMA); ?>">
              </div>
            </div>
            <div class="col-2">
              <div class="form-group">
                <label for="pe_diaexen" class="form-label">Días exentos</label>
                <input type="text" class="form-control form-control-sm" id="pe_diaexen" name="pe_diaexen" autocomplete="off" readonly>
              </div>
            </div>
            <div class="col-2">
              <div class="form-group">
                <label for="pe_mntexen" class="form-label">Monto exento</label>
                <input type="text" class="form-control form-control-sm cf_currency" id="pe_mntexen" name="pe_mntexen" autocomplete="off" readonly>
              </div>
            </div>
            <div class="col-2">
              <div class="form-group">
                <label for="pe_dialab" class="form-label">Días laborados</label>
                <input type="text" class="form-control form-control-sm inpt_entero" id="pe_dialab" name="pe_dialab" autocomplete="off" placeholder="Días Laborados" required onkeypress="return onlyDigits(event, this);">
              </div>
            </div>
            <div class="col-2">
              <div class="form-group">
                <label for="pe_diaspag" class="form-label">Días a Pagar</label>
                <input type="text" class="form-control form-control-sm inpt_entero" id="pe_diaspag" name="pe_diaspag" autocomplete="off" placeholder="Días a Pagar" required onkeypress="return onlyDigits(event, this);" readonly>
              </div>
            </div>
            <div class="col-2">
              <div class="form-group">
                <label for="pe_mindias" class="form-label">Mín. días para pagarlo</label>
                <input type="text" class="form-control form-control-sm inpt_entero" id="pe_mindias" name="pe_mindias" autocomplete="off" placeholder="Min. días para pagarlo" required onkeypress="return onlyDigits(event, this);">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-2">
              <div class="form-group">
                <label class="form-label">Monto Fijo</label>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><input type="checkbox" id="chckMontoFijo" name="chckMontoFijo" value="1" onclick="CambiaMontoFijo(this.checked);"/></span>
                  </div>
                  <input type="text" id="pe_montofijo" name="pe_montofijo" class="form-control form-control-sm cf_currency" placeholder="Monto Fijo" disabled required/>
                </div>
              </div>
            </div>
            <div class="col-2">
              <div class="form-group text-end">
                <label>&nbsp;</label>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="pe_chkGravable" name="pe_chkGravable" value="1">
                  <label class="custom-control-label form-label" for="pe_chkGravable">¿Gravable?</label>
                </div>
              </div>
            </div>
            <div class="col-2">
              <div class="form-group text-end">
                <label>&nbsp;</label>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="pe_chkProp" name="pe_chkProp" value="1">
                  <label class="custom-control-label form-label" for="pe_chkProp">Proporcional</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer p-10 text-end pie-conceptos">
          <button class="btn btn-sm btn-success text-end" id="btnGuardaConcepto"><i class="far fa-save"></i> Guardar</button>
        </div>
        <?php
        echo form_close();
        ?>
      </div>

			<!-- Conf. días por categoría -->
			<div class="tab-pane fade" id="nav-pills-conf-categoria">
				<div class="card-body" id="div-conf-categoria">
				</div>
			</div>

			<!-- Días laborados por presupuesto -->
			<div class="tab-pane fade" id="nav-pills-dias-presupuesto">
				<div class="card-body" id="div-dias-presupuesto">
				</div>
			</div>

      <div class="tab-pane fade" id="nav-pills-empleado">

      </div>

      <div class="tab-pane fade" id="nav-pills-acumular">
        <div class="card-body">
          <div class="row mb-2">
            <div class="col-12">
              <legend>Conceptos para acumular en el cálculo de los pagos especiales </legend>
              <help>*Esta configuración se debe realizar antes de calcularse la nómina donde se van a pagar aguinaldos y bonos.</help>
            </div>
          </div>

          <div class="row">
            <div class="col-6">
              <div class="card">
                <div class="card-header fw-bold card-header-condensed text-center">Conceptos antes de impuestos</div>
                <div class="card-body">
                  <table class="table table-bordered tblConAcum" id="tblConceptos" name="tblConceptos" cellspacing="0" width="100%" style="display:none;">
                    <thead>
                      <tr>
                        <th>id</th>
                        <th>Descripción</th>
                        <th>Percepción</th>
                        <th>Acumular</th>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="card">
                <div class="card-header fw-bold card-header-condensed text-center">Conceptos que se gravan</div>
                <div class="card-body">
                  <table class="table table-bordered tblConAcum" id="tblConceptosAcumular" name="tblConceptosAcumular" cellspacing="0" width="100%" style="display:none;">
                    <thead>
                      <tr>
                        <th>id</th>
                        <th>Quitar</th>
                        <th>Descripción</th>
                        <th>Percepción</th>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

			<div class="tab-pane fade" id="nav-pills-multicategoria">
				<?php
				$attributes = array("id" => "frmConsultaMultiCategoria", "name" => "frmConsultaMultiCategoria","class" => "needs-validation", "onsubmit" => "return PostBackFrmConsultaMultiCategoria(this, event);");
				echo form_open("configuraciones/carga_empleados_multicategoria", $attributes);
				?>
				<div class="card-body">
					<div class="row">
						<div class="col-3">
							<div class="form-group">
								<label for="pe_fechaini_multi" class="form-label">Fecha Inicio</label>
								<input type="text" class="form-control form-control-sm fechasPE" id="pe_fechaini_multi" name="pe_fechaini_multi" readonly>
							</div>
						</div>
						<div class="col-3">
							<div class="form-group">
								<label for="pe_fechafin_multi" class="form-label">Fecha Final</label>
								<input type="text" class="form-control form-control-sm fechasPE" id="pe_fechafin_multi" name="pe_fechafin_multi" readonly>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="pe_tiponomina_multi" class="form-label">Tipo de Nómina</label>
								<select class="form-control pe_catalogos form-control-sm select2-sm" id="pe_tiponomina_multi" name="pe_tiponomina_multi" required>
									<?= $cat_tipo_nomina; ?>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer p-10 text-end pie-conceptos">
          <button class="btn btn-sm btn-success text-end" id="btnConsultaMultiCategoria"> Consultar</button>
        </div>
				<?php
				echo form_close();
				?>
			</div>

    </div>
    <!-- card-block -->
  </div>
  <!-- card-header -->
</div>
<!-- card -->

<div id="lstResultado">

</div>

<script type="text/javascript">

$(document).ready(function(){
  $(".cf_currency").inputmask('currency',{rightAlign: true, allowMinus: false, removeMaskOnSubmit: true, undoOnEscape:false});

  $('.inpt_entero').inputmask({
    alias: 'numeric',
    allowMinus: false,
    min:0,
    digits: 0,
    max: 999
  });

  $("#pe_credencial").inputmask("9{5}",{ numericInput: true,placeholder: "0", positionCaretOnClick: "select", showMaskOnHover: false, showMaskOnFocus: false});

  $(".pe_catalogos").select2({
    language: "es",
    placeholder: "Seleccione un Elemento",
    width:'100%',
  }).on("select2:close", function (event) {
      setTimeout(function() {
        $('.select2-container-active').removeClass('select2-container-active');
        $(':focus').blur();
        dispara_tab_especial(event);
      }, 1);
  });

  $(".fechasPE").datepicker({
    format: "dd/mm/yyyy",
    weekStart: 1,
    maxViewMode: 3,
    language: "es",
    orientation: "bottom auto",
    autoclose: true,
    todayBtn: "linked",
    todayHighlight: true,
  }).on("hide", function(e) {
    // dispara_tab_especial(e);
  })//.inputmask({'alias': 'datetime', 'inputFormat': 'dd/mm/yyyy', 'placeholder': 'dd/mm/yyyy', 'min':'01/01/1900'});

  if (!$.fn.dataTable.isDataTable('#tblConceptos')) {
    $('#tblConceptos').DataTable({
      initComplete: function() {
        $("#tblConceptos").show();
      },
      language: {
        "url": "assets/plugins/DataTables/Spanish.json",
        "processing": "Cargando..."
      },
      dom: 'lftp',
      responsive: true,
      columnDefs: [
        {targets:[0], visible: false, searchable: false},
        {targets:[3], sortable: false, searchable: false, className: "dt-right"},
      ],
    });
  }

  if (!$.fn.dataTable.isDataTable('#tblConceptosAcumular')) {
    $('#tblConceptosAcumular').DataTable({
      initComplete: function() {
        $("#tblConceptosAcumular").show();
      },
      language: {
        "url": "assets/plugins/DataTables/Spanish.json",
        "processing": "Cargando..."
      },
      dom: 'lftp',
      responsive: true,
      columnDefs: [
        {targets:[0], visible: false, searchable: false},
        {targets:[1], sortable: false, searchable: false, className: "dt-left"},
      ],
    });
  }

  $('a[href="#nav-pills-conceptos"]').tab('show');

});

$('.nav-pills a').on('shown.bs.tab', function(e){
  if (e.target.id == 'tab-conceptos') {
    listado_pagos_especiales();
    $('#lstResultado').show();
    $('#btnGuardaConcepto').show();
    $('#btnProyectar').hide();
  }
  else if (e.target.id == 'tab-empleado') {
    $('#lstResultado').empty().hide();
		carga_proy_por_empleado();
  }
	else if (e.target.id == 'tab-multicategoria') {
		$('#lstResultado').empty().hide();
		carga_empleados_multicategoria();
	}
	else if (e.target.id == 'tab-conf-categoria') {
		$('#lstResultado').empty().hide();
		carga_conf_dias_categoria();
	}
  else {
    $('#lstResultado').empty().hide();
    // carga_conceptos_acumular();
  }
});

function listado_pagos_especiales() {
  cargarpag('<?= base_url()?>configuraciones/trae_listado_pagos_especiales', "div#lstResultado", true, "POST", "");
  return false;
}

function editar_conc_pagos_especiales(url,data,esBoton) {
  if (typeof(esBoton) == "undefined" || esBoton == "" || esBoton == null) { esBoton = false; }
  if (esBoton) data = $(data).data('json');

  $('#idPagoEspecial').val(data.id);
  $('#pe_mntexen').val(formatCurrency(data.MontoExcento));
  $('#pe_chkGravable').val(data.Gravable);
  $('#pe_chkProp').val(data.Proporcional);
  $('#pe_dialab').val(data.PeriodoLaborado);
  $('#pe_fechapago').val(fecha_sql_a_normal(data.FechaaPagar));
  $('#pe_fechaini').val(fecha_sql_a_normal(data.FechaInicio));
  $('#pe_fechafin').val(fecha_sql_a_normal(data.FechaFinal));
  $('#pe_fecharef').val(fecha_sql_a_normal(data.FechaReferencia));
  $('#pe_diaspag').val(data.DiasaPagar);
  $('#pe_mindias').val(data.MinDiasParaPagar);

  var montoFijo = parseFloat(data.MontoFijo.replace(",","."));
  $("#pe_montofijo").val( (montoFijo > 0 ? montoFijo : '') );
  $("#chckMontoFijo").val( (montoFijo > 0 ? 1 : 0) ).prop('checked', !(montoFijo == 0 || isNaN(montoFijo)));
  CambiaMontoFijo( !(montoFijo == 0 || isNaN(montoFijo)) );
  $("#pe_concepto").val(data.IDConcepto).trigger('change');
  $("#pe_conceptorel").val(data.IDConceptoR).trigger('change');
  $('input:checkbox[value="1"]').prop('checked', true);
}

function proyectar_empleados_pagos_especiales(url,data,esBoton) {
  if (esBoton) data = $(data).data('json');
  let idPagoEspecial = data.id,
      descConcepto = data.Descripcion;

  genera_proyeccion(idPagoEspecial,descConcepto,0);
  return false;
}

function proyectar_todos_conceptos(url) {
	let idEmpleado = 0;
	swal.fire({
		title: "Alerta",
		text: "¿Confirma que desea realizar la proyección para todos los conceptos?",
		icon: "question",
		showCancelButton: true,
	}).then(result => {
		if (result.value) {
			Carga_Metodo("<?=base_url();?>configuraciones/genera_proyeccion", {idPagoEspecial:0,idEmpleado:idEmpleado},
			function finalizaProceso(respuesta) {
				if (respuesta.status == false) { alerta_emergente(respuesta.message, "warning"); }
				else {
					alerta_emergente(respuesta.message, "success");
					if (idEmpleado > 0) { ver_detalle_empleado();	}
				}
			},
			"Procesando...*No cierre o actualice la ventana.");
		}
	}).catch(swal.noop);
	return false;
}

function genera_proyeccion(idPagoEspecial,descConcepto,idEmpleado) {
  if (typeof(idPagoEspecial) === "undefined" || idPagoEspecial === "") {
    alerta_emergente("Ocurrió un error al intentar obtener la información del concepto. Intente de nuevo más tarde.","warning");
    return false;
  }

  swal.fire({
    title: "Alerta",
    text: "¿Confirma que desea realizar la proyección para el concepto "+descConcepto+"?",
    icon: "question",
    showCancelButton: true,
  }).then(result => {
    if (result.value) {
      Carga_Metodo("<?=base_url();?>configuraciones/genera_proyeccion", {idPagoEspecial:idPagoEspecial,idEmpleado:idEmpleado},
			function finalizaProceso(respuesta) {
			  if (respuesta.status == false) { alerta_emergente(respuesta.message, "warning"); }
			  else {
			    alerta_emergente(respuesta.message, "success");
					if (idEmpleado > 0) { ver_detalle_empleado();	}
			  }
			},
			"Procesando...*No cierre o actualice la ventana.");
    }
  }).catch(swal.noop);
  return false;
}

function nuevo_conc_pe_sys(url,data,esBoton) {
  if (esBoton) data = $(data).data('json');
  limpiaForm($('#frmPagosEspeciales'));
}

function eliminar_conc_pagos_especiales(url,data,esBoton) {
  if (esBoton) data = $(data).data('json');
  var idConcepto = data.IDConcepto;

  if (typeof(idConcepto) == "undefined" || idConcepto == "" || idConcepto == 0) {
    alerta_emergente("Ocurrió un error al intentar obtener la información del concepto. Intente de nuevo más tarde.","warning");
    return false;
  }

  swal.fire({
    title: "Alerta",
    text: "¿Confirma que desea eliminar el concepto "+data.Descripcion+"?",
    icon: "question",
    showCancelButton: true,
  }).then(result => {
    if (result.value) {
      Carga_Metodo("<?=base_url();?>configuraciones/elimina_pago_especial", {idConcepto:idConcepto}, exito_guarda_concepto_pe, "Eliminando");
    }
  }).catch(swal.noop);
  return false;
}

function PostBackFrmGuardaPagoEspecial(f,e) {
  e.preventDefault();
  var descConcepto = $('#pe_concepto').find(':selected').text(),
      variables = $(f).serializeArray();
  variables.push({name: "descConcepto", value: descConcepto});

  Carga_Metodo(f.action, $.param(variables), exito_guarda_concepto_pe, "Guardando...");
  return false;
}

function exito_guarda_concepto_pe(respuesta) {
  if (respuesta.status == false) {
    $('div#errores_pe').html(respuesta.errores).fadeIn('slow');
    alerta_emergente(respuesta.message, "warning");
  }
  else {
    $('div#errores_pe').hide();
    alerta_emergente(respuesta.message, "success");
    limpiaForm($('#frmPagosEspeciales'));
    listado_pagos_especiales();
  }
}

function CambiaMontoFijo(checked) {
  $("#pe_montofijo").prop("disabled", !checked);
  $("#chckMontoFijo").val( (checked ? 1 : 0) )
  return false;
}

function comprobar_concepto_pe(obj) {
  let conceptoPE = $(obj).find(':selected'),
      valUMA = parseFloat($('#pe_uma').val().replace(/[$,]+/g,"")),
      diasExentos = parseFloat(conceptoPE.data('diassalminparteexc')),
      montoExento = '';

  if (!isNaN(valUMA) && !isNaN(diasExentos)) {
    montoExento = valUMA * diasExentos;
  }

  $('#pe_diaexen').val(diasExentos.toString());
  $('#pe_mntexen').val(formatCurrency(montoExento).toString());
}

function traer_empleado() {
  let credencial = $('#pe_credencial').val();
  if (typeof( credencial ) == "undefined" || credencial === "" || credencial == 0) {
    alerta_emergente("Debe capturar la credencial del empleado.","warning")
    return false;
  }

  Carga_Metodo("recursos_humanos/detalle_empleado_RH", {credencial:credencial}, exito_carga_empleadoRH, "Cargando...");
  return false;
}

function exito_carga_empleadoRH(respuesta) {
  if (respuesta.status == false ) { alerta_emergente(respuesta.message, "warning"); }
  else{
    $('#pe_nombre').val(respuesta.empleado.NombreCompleto);
    $('#pe_idEmpleado').val(respuesta.empleado.Id);
		let estadoRH = respuesta.empleado.Estado+' - '+ ((respuesta.empleado.Estado == 'I' || respuesta.empleado.Estado == 'B') ? 'INACTIVO' : 'ACTIVO'),
				liquidado = ((respuesta.empleado.Liquidado == 1) ? '(Liquidado)' : ''),
				estadoSG = respuesta.estadoSISEGE.Origen +' - '+respuesta.estadoSISEGE.Status;
		$('#edoRHpe').val(estadoRH + ' ' + liquidado);
		$('#edoSGpe').val(estadoSG);
		if (respuesta.baja || respuesta.empleado.Estado == 'I' || respuesta.empleado.Estado == 'B') {
			$('#edoRHpe').addClass('bg-red-400');
			$('.estadoRH-SG').show();
		}
		else { $('.estadoRH-SG').hide(); }
	  ver_detalle_empleado();
  }
}

function buscar_empleado_porNombre() {
  let datos = {
    funcion:"devuelve_empleado_pe"
  };
  cargamodalGenerica('<?= base_url() ?>generico/carga_vista', '#modContenido', '#modGeneral', {vista:"empleado/buscar_por_nombre",datos:datos}, "Buscar empleado por nombre", 1);
  return false;
}

function devuelve_empleado_pe(credencial) {
  // $('#modGeneral').modal('hide');
	ocultamodalGenerica();
	$('#pe_credencial').val(credencial);
  traer_empleado();
  return false;
}

function consulta_detalle_empleado(idEmpleado,credencial,fechaini,fechafin) {
  $('#lstResultado').empty();
  cargarpag('<?= base_url()?>pagos_especiales/obtener_dias_porEmpleado', "div#lstResultado", true, "POST", {idEmpleado:idEmpleado,fechaini:fechaini,fechafin:fechafin,credencial:credencial}, true);
  $('#lstResultado').show();
  return false;
}

function carga_conceptos_acumular() {
  let tablaConceptos = $('#tblConceptos').DataTable(),
      tablaConcAcum = $('#tblConceptosAcumular').DataTable();
  $.ajax({
    url: '<?= base_url() ?>configuraciones/carga_conceptos_acumular',
    type: "POST",
    data: '',
    dataType: "JSON",
    success : function(data){
      if (data.status == false) {
        alerta_emergente(data.message,"warning");
        return false;
      }
      else {
        let concAcumular = data.concAcumular,
            btnAcumular = '<a href="javascript:;" class="btn btn-xs btn-success" title="Acumular concepto" onclick="acumula_elimina_concepto_gravar(true,this)"><i class="fas fa-angle-double-right"></i></a>',
            btnQuitar = '<a href="javascript:;" class="btn btn-xs btn-danger" title="Quitar concepto" onclick="acumula_elimina_concepto_gravar(false,this)"><i class="fas fa-angle-double-left"></i></a>',
            icoPerc = '<span class="text-center text-success btn-icon btn-circle btn-xs"><i class="far fa-check-circle"></i></span>',
            icoDeduc = '<span class="text-center text-danger btn-icon btn-circle btn-xs"><i class="far fa-times-circle"></i></span>';

        tablaConceptos.clear().draw();
        tablaConcAcum.clear().draw();

        for (var i in concAcumular) {
          if (concAcumular[i].Tipo == 0) {
            tablaConceptos.row.add(
              [ concAcumular[i].Id,concAcumular[i].Descripcion,(concAcumular[i].EsPercepcion == 1 ? icoPerc : icoDeduc),btnAcumular ]
            );
          }
          else {
            tablaConcAcum.row.add(
              [ concAcumular[i].Id,btnQuitar,concAcumular[i].Descripcion,(concAcumular[i].EsPercepcion == 1 ? icoPerc : icoDeduc) ]
            );
          }
        }
        tablaConceptos.columns.adjust().draw(false);
        tablaConceptos.responsive.recalc();

        tablaConcAcum.columns.adjust().draw(false);
        tablaConcAcum.responsive.recalc();
      }
    }
  });
}

function acumula_elimina_concepto_gravar(acumula,obj) {
  let data = $('.tblConAcum').DataTable().row($(obj).closest('tr')).data();

  if (typeof(data[0]) == "undefined" || data[0] == "" || data[0] == 0) {
    alerta_emergente("Ocurrió un error al intentar obtener la información del concepto. Intente de nuevo más tarde.","warning");
    return false;
  }

  Carga_Metodo("<?=base_url();?>configuraciones/acumula_elimina_concepto_gravar", {idConcepto:data[0],acumula:acumula}, exito_acumula_elimina_concepto_grav, "Procesando...");
  return false;
}

function exito_acumula_elimina_concepto_grav(respuesta) {
  if (respuesta.status == false) { alerta_emergente(respuesta.message, "warning"); }
  else {
    alerta_emergente(respuesta.message, "success");
    carga_conceptos_acumular();
  }
}

function PostBackFrmConsultaMultiCategoria(f,e) {
	e.preventDefault();
  let variables = $(f).serialize();
	Carga_Metodo(f.action, variables, function finaliza_conf(data) {
		if (data.status == false) { alerta_emergente(data.message, "warning"); }
		else {
			alerta_emergente(data.message, "success");
		}
	}, "Procesando...");
  return false;
}

function carga_conf_dias_categoria() {
	cargarpag('<?= base_url()?>pagos_especiales/conf_dias_categoria', "div#div-conf-categoria", true, "POST", "");
	return false;
}

function carga_dias_presupuesto() {
	cargarpag('<?= base_url()?>pagos_especiales/conf_dias_categoria', "div#div-conf-categoria", true, "POST", "");
	return false;
}

function carga_proy_por_empleado() {
	// $('#btnGuardaConcepto').hide();
	// $('#btnProyectar').show();
	cargarpag('<?= base_url()?>pagos_especiales/proyeccion_por_empleado', "div#nav-pills-empleado", true, "POST", "");
	return false;
}

function carga_empleados_multicategoria() {
	console.log("en construcción");
	// PostBackFrmConsultaMultiCategoria();
}

function abre_registros_iniciales(idPeriodoPago) {
	let idEmpleado = $('#pe_idEmpleado').val(),
			credencial = $("#pe_credencial").val();

	if (typeof(idEmpleado) == "undefined" || idEmpleado === "" || idEmpleado == 0) {
		alerta_emergente("Ocurrió un error al obtener la información del empleado. Por favor intente de nuevo más tarde.","warning")
		return false;
	}

	cargamodalGenerica('<?= base_url() ?>nomina/carga_conf_regini', '#modContenido', '#modGeneral', {idEmpleado:idEmpleado,idPeriodoPago:idPeriodoPago,credencial:credencial}, "Registros Iniciales por Empleado", 1);
	return false;
}

function imprimir_reporte_pagos_especiales(url,data,esBoton) {
	if (typeof(esBoton) == "undefined" || esBoton == "" || esBoton == null) { esBoton = false; }
	if (esBoton) { data = $(data).data('json'); }

	let urlRpt = $('#urlReporteador').val(),
			rutaRpt = $('#rutaReportes').val(),
			archivo = 'rpt_DiasEmpleadosPagosEspeciales',
		 	strJSON = "{'Reporte':'" + rutaRpt + archivo +".rpt', 'Referencia':'Empleados con días laborados para el pago del concepto','dsn':'pjey_admin.dsn', "+
			"'@fechaIni':'" + fecha_sql_a_normal(data.FechaInicio) + "','@fechaFin':'" + fecha_sql_a_normal(data.FechaFinal) + "','@Credencial':'" + 0 + "', "+
			"'@IdConcepto':'" + data.IDConcepto + "','@IdPresupuesto':'" + data.PresupuestoID + "'}";

	$('<form>', {
			"id": 'frmImprimirProyPagoEspecial',
			"method": 'post',
			"html": '<input type="hidden" name="Print" value="2" />'+
							'<input type="hidden" id="JSON" name="JSON" value="' + strJSON + '" />',
			"action": urlRpt,
			"target": '_blank'
	}).appendTo(document.body).submit();

	$('#frmImprimirProyPagoEspecial').remove();
	return false;
}

function imprimir_reporte_pagos_especiales_JyM(url,data,esBoton) {
	if (typeof(esBoton) == "undefined" || esBoton == "" || esBoton == null) { esBoton = false; }
	if (esBoton) { data = $(data).data('json'); }
	let urlRpt = $('#urlReporteador').val(),
			rutaRpt = $('#rutaReportes').val(),
			archivo = 'rpt_DiasJefesPagosEspeciales',
			strJSON = "{'Reporte':'" + rutaRpt + archivo +".rpt', 'Referencia':'Empleados con días laborados para el pago del concepto','dsn':'pjey_admin.dsn', "+
			"'@fechaIni':'" + fecha_sql_a_normal(data.FechaInicio) + "','@fechaFin':'" + fecha_sql_a_normal(data.FechaFinal) + "','@Credencial':'" + 0 + "', "+
			"'@IdConcepto':'" + data.IDConcepto + "','@IdPresupuesto':'" + data.PresupuestoID + "'}";

	$('<form>', {
			"id": 'frmImprimirProyPagoEspecialJyM',
			"method": 'post',
			"html": '<input type="hidden" name="Print" value="2" />'+
							'<input type="hidden" id="JSON" name="JSON" value="' + strJSON + '" />',
			"action": urlRpt,
			"target": '_blank'
	}).appendTo(document.body).submit();

	$('#frmImprimirProyPagoEspecialJyM').remove();
	return false;
}

</script>
