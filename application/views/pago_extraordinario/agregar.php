<style media="screen">
.dataTables_filter {
 float: left !important;
}
.dt-buttons {
 float: right !important;
}

.btn-group-sm > .btn, .btn-sm{
  line-height: 1.4 !important;
}
</style>

<?php
$attributes = array("id" => "frmGuararPagoExt", "name" => "frmGuararPagoExt", "onsubmit" => "return PostBackFrmGuardarPagoExt(this, event);");
echo form_open("pago_extraordinario/guarda_pago_extraordinario", $attributes);
?>
<input type="hidden" id="idEmpleado" name="idEmpleado" value="0">
<input type="hidden" id="idPeriodoPago" name="idPeriodoPago" value="<?= empty($idPeriodoPago) ? 0 : $idPeriodoPago; ?>">

<div class="row mb-2">
  <div class="col-12">
    <div class="card">
      <div class="card-header f-w-600 card-header-condensed text-center">Empleados para cálculo de pagos extraordinarios</div>
      <div class="card-body">
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table class="table table-bordered" id="tblEmpleadosPagoExt" name="tblEmpleadosPagoExt" cellspacing="0" width="100%" style="display:none;">
                <thead>
                  <tr>
                    <th>idEmpleado</th>
                    <th>Credencial</th>
                    <th>Empleado</th>
                    <th>idCategoria</th>
                    <th>Categoría</th>
                    <th>idDependencia</th>
                    <th>Dependencia</th>
                    <th>idEmisor</th>
                    <th>Emisor</th>
                    <th>Número de Cuenta</th>
                    <th>Pago Electrónico</th>
                    <th class="no-sort"></th>
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
</div>

<div class="row mb-2">
  <div class="col-12">
    <div class="card">
      <div class="card-header f-w-600 card-header-condensed text-center">Conceptos a calcular</div>
      <div class="card-body">

        <div class="row">
          <div class="col-12 text-end">
            <div class="form-group">
              <button type="button" name="btnAgregarConceptoPagoExt" id="btnAgregarConceptoPagoExt" class="btn btn-sm btn-inverse" onclick="agregar_concepto_pago_extraordinario();"><i class="fas fa-plus"></i> Agregar Concepto</button>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="pextEmp_periodo"><b>Período</b></label>
              <select class="form-control form-control-sm select2-sm pext_catalogo" id="pextEmp_periodo" name="pextEmp_periodo" required>
                <?= $quincenas; ?>
              </select>
            </div>
          </div>
          <div class="col-3">
            <div class="form-group">
              <label for="pext_fechapago"><b>Fecha Pago</b></label>
              <input type="text" class="form-control form-control-sm fechasPExt" id="pext_fechapago" name="pext_fechapago" required autocomplete="off">
            </div>
          </div>
          <div class="col-3">
            <div class="form-group">
              <label for="pext_fechadisp"><b>Fecha Dispersión</b></label>
              <input type="text" class="form-control form-control-sm fechasPExt" id="pext_fechadisp" name="pext_fechadisp" required autocomplete="off">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-6">
            <div class="table-responsive">
              <table class="table pext_tblPerc" id="pExttblPerc" cellspacing="0" width="100%">
                <thead class="bg-percepcion text-black">
                  <tr>
                    <th>idConcepto</th>
                    <th>Clave</th>
                    <th>Percepción</th>
                    <th>Monto</th>
                    <th>Monto</th>
                    <th>bGravado</th>
                    <th>Gravado</th>
                    <th>días exento</th>
                    <th>Días Parte Exenta</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody class="text-black">

                </tbody>
              </table>
            </div>
          </div>
          <div class="col-6">
            <div class="table-responsive">
              <table class="table pext_tblDeduc" id="pexttblDeduc" cellspacing="0" width="100%">
                <thead class="bg-danger text-black">
                  <tr>
                    <th>idConcepto</th>
                    <th>Clave</th>
                    <th>Deducción</th>
                    <th>Monto</th>
                    <th>Monto</th>
                    <th>bGravado</th>
                    <th>Gravado</th>
                    <th>días exento</th>
                    <th>Días Parte Exenta</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody class="text-black">

                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
      <div class="card-footer p-10 text-end pie-calcular">
        <button class="btn btn-sm btn-success text-end" id="btnGuardarPagoExt" title="Guardar Pago Extraordinario"><i class="fas fa-save"></i> Calcular</button>
        <!-- <button type="button" class="btn btn-sm btn-default text-end" id="btnCalcularPagoExt" onclick="calcular_pago_extraordinario();" title="Calcular Pago Extraordinario"><i class="fas fa-exclamation-circle"></i> Calcular</button> -->
        <button type="button" class="btn btn-sm btn-default text-end" id="btnInicioPagoExt" onclick="inicio_pago_extraordinario();" title="Cancelar"><i class="fas fa-times"></i> Cancelar</button>
      </div>
    </div>
  </div>
</div>
<?php
echo form_close();
?>

<script type="text/javascript">
setTimeout(function cargarconsulta() {
  $(".pext_catalogo").select2({
    language: "es",
    placeholder: "Seleccione un Elemento",
    width:'100%',
  }).on("select2:close", function (event) {
      setTimeout(function() {
        $('.select2-container-active').removeClass('select2-container-active');
        $(':focus').blur();
        // dispara_tab_especial(event);
      }, 1);
  })

  $(".fechasPExt").datepicker({
    format: "dd/mm/yyyy",
    weekStart: 1,
    maxViewMode: 3,
    language: "es",
    orientation: "bottom auto",
    autoclose: true,
    todayBtn: "linked",
    todayHighlight: true,
  }).on("hide", function(e) {
    dispara_tab_especial(e);
  })

  if (!$.fn.dataTable.isDataTable( '#tblEmpleadosPagoExt' )) {
    $('#tblEmpleadosPagoExt').DataTable({
      initComplete: function() {
        $("#tblEmpleadosPagoExt").show();
      },
      language: {
        "url": "assets/plugins/DataTables/Spanish.json",
        "processing": "Cargando..."
      },
      dom: 'fBt',
      responsive: true,
      columnDefs: [
        { targets:[0,3,5,7], visible: false, searchable: false },
      ],
      buttons: [
        { text: '<i class="fas fa-plus"></i> Agregar Empleado', titleAttr: 'Agregar Empleado', className: 'btn btn-sm btn-inverse', action: function ( e, dt, node, config ) { agregar_empleado_pago_extraordinario(); } },
      ],
    });
  }

  $('.pext_tblPerc').DataTable({
    language: {
      "url": "assets/plugins/DataTables/Spanish.json",
      "processing": "Cargando..."
    },
    dom: 't',
    paging: false,
    ordering: false,
    responsive: true,
    columnDefs: [
      { targets:[0,3,5,7],visible:false,orderable:false,searchable:false },
    ],
  });

  $('.pext_tblDeduc').DataTable({
    language: {
      "url": "assets/plugins/DataTables/Spanish.json",
      "processing": "Cargando..."
    },
    dom: 't',
    paging: false,
    ordering: false,
    responsive: true,
    columnDefs: [
      { targets:[0,3,5,6,7,8],visible:false,orderable:false,searchable:false },
    ],
  });

  $('#pextEmp_periodo').val($('#idPeriodoPago').val()).trigger('change');
  // $('#pextEmp_periodo').val($('#pextEmp_periodo option:eq(1)').val()).trigger('change');
});

$("#pextEmp_periodo").on("change", function (e) {
  let idPeriodo = $("#pextEmp_periodo").val();
  Carga_Metodo("generico/carga_nomina_porid", {idPeriodo:idPeriodo}, function exito(res) {
    $('#pext_fechapago').val(fecha_sql_a_normal(res.nomina.FechaPago));
    $('#pext_fechadisp').val(fecha_sql_a_normal(res.nomina.FechaDispersion));
  }, "Cargando...");
  return false;
});

function agregar_empleado_pago_extraordinario() {
  cargamodalGenerica('<?= base_url() ?>pago_extraordinario/carga_agregar_empleados', '#modContenido', '#modGeneral', "", "Agregar Empleado", 1);
  return false;
}

function agregar_concepto_pago_extraordinario() {
  cargamodalGenerica('<?= base_url() ?>pago_extraordinario/carga_agregar_conceptos', '#modContenido', '#modGeneral', "", "Agregar Concepto", 1);
  return false;
}

function elimina_emp_pago_ext(obj) {
  var tabla = $('#tblEmpleadosPagoExt').DataTable();
  tabla.row( $(obj).parents('tr') ).remove().draw();
  return false;
}

function elimina_conc_pago_ext(obj,esPercepcion) {
  let tabla = '';
  if (esPercepcion == 1) { tabla = $('#pExttblPerc').DataTable(); }
  else { tabla = $('#pexttblDeduc').DataTable(); }
  tabla.row( $(obj).parents('tr') ).remove().draw();
  return false;
}

function edita_emp_pago_ext(obj) {
  var tabla = $('#tblEmpleadosPagoExt').DataTable(),
      $tr = $(obj).closest('tr'),
      rowData = tabla.row($tr).data(),
      idEmpleado = rowData[0],
      credencial = rowData[1];
  cargamodalGenerica('<?= base_url() ?>pago_extraordinario/carga_agregar_empleados', '#modContenido', '#modGeneral', {idEmpleado:idEmpleado,credencial:credencial}, "Editar Empleado", 1);
  return false;
}

function edita_conc_pago_ext(obj,esPercepcion) {
  let tabla ='';
  if (esPercepcion == 1) { tabla = $('#pExttblPerc').DataTable(); }
  else { tabla = $('#pexttblDeduc').DataTable(); }

  let $tr = $(obj).closest('tr'),
      rowData = tabla.row($tr).data(),

      variables = {
        esPercepcion:esPercepcion,
        idConcepto:rowData[0],
        monto:$.trim(rowData[3].replace('$', '')),
        gravado:(rowData[5] != '' ? 1 : 0),
        parteexenta:rowData[7]
      };
  cargamodalGenerica('<?= base_url() ?>pago_extraordinario/carga_agregar_conceptos', '#modContenido', '#modGeneral', variables, "Editar Concepto", 1);
  return false;
}

function PostBackFrmGuardarPagoExt(f,e) {
  e.preventDefault();
  let variables = $(f).serialize(),
      tblEmpleados = $('#tblEmpleadosPagoExt').DataTable(),
      tblPercPagoExt = $('#pExttblPerc').DataTable(),
      tblDeducPagoExt = $('#pexttblDeduc').DataTable(),
      detalleEmpleados = [], detallePercepcion = [], detalleDeduccion = [];

  if (!tblEmpleados.data().any()) {
    alerta_emergente("No es posible calcular el pago extraordinario. Debe agregar un empleado.","warning");
    return false;
  }

  if (!tblPercPagoExt.data().any() && !tblDeducPagoExt.data().any()) {
    alerta_emergente("No es posible calcular el pago extraordinario. Debe agregar un concepto (Percepción o Deducción).","warning");
    return false;
  }

  var quincena = $('#pextEmp_periodo option:selected').text();

  swal.fire({
    title: "Alerta",
    text: "¿Confirma que desea realizar el calculo para la quincena: "+quincena+"?",
    icon: "question",
    showCancelButton: true,
  }).then(result => {
    if (result.value) {
      tblEmpleados.rows().every( function ( rowIdx, tableLoop, rowLoop ) {
        let datosEmpleados = {};
        datosEmpleados.idEmpleado = tblEmpleados.cell( rowIdx, 0 ).data();
        datosEmpleados.idCategoria = tblEmpleados.cell( rowIdx, 3 ).data();
        datosEmpleados.idDependencia = tblEmpleados.cell( rowIdx, 5 ).data();
        datosEmpleados.idEmisor = tblEmpleados.cell( rowIdx, 7 ).data();
        datosEmpleados.NumeroCuenta = tblEmpleados.cell( rowIdx, 9 ).data();
        datosEmpleados.ENomina = tblEmpleados.cell( rowIdx, 10 ).data();
        detalleEmpleados.push(datosEmpleados);
      });

      tblPercPagoExt.rows().every( function ( rowIdx, tableLoop, rowLoop ) {
        let datosPerc = {};
        datosPerc.idConcepto = tblPercPagoExt.cell( rowIdx, 0 ).data();
        datosPerc.Monto = tblPercPagoExt.cell( rowIdx, 3 ).data();
        datosPerc.Gravado = tblPercPagoExt.cell( rowIdx, 5 ).data();
        datosPerc.DiasExento = tblPercPagoExt.cell( rowIdx, 7 ).data();
        datosPerc.esPercepcion = 1;
        detallePercepcion.push(datosPerc);
      });

      tblDeducPagoExt.rows().every( function ( rowIdx, tableLoop, rowLoop ) {
        let datosDeduc = {};
        datosDeduc.idConcepto = tblDeducPagoExt.cell( rowIdx, 0 ).data();
        datosDeduc.Monto = tblDeducPagoExt.cell( rowIdx, 3 ).data();
        datosDeduc.esPercepcion = 0;
        detalleDeduccion.push(datosDeduc);
      });

      Carga_Metodo( f.action,
                    variables+"&empleados="+JSON.stringify(detalleEmpleados)+"&percepciones="+JSON.stringify(detallePercepcion)+"&deducciones="+JSON.stringify(detalleDeduccion),
                    exito_calcula_pago,
                    "Procesando...");
    }
  }).catch(swal.noop);
  return false;
}

function exito_calcula_pago(respuesta) {
  if (respuesta.status == false) { alerta_emergente(respuesta.message, "warning"); }
  else {
    alerta_emergente(respuesta.message, "success");
    inicio_pago_extraordinario(respuesta.idPeriodoPago);
  }
  return false;
}
</script>
