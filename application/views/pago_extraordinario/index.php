<h1 class="page-header">Pagos Extraordinarios <small>empleados con pagos extraordinarios en la quincena.</small></h1>

<div class="card mb-2">
  <div class="card-body">
    <div class="row">
      <div class="col-6">
        <div class="form-group">
          <label for="pext_periodo"><b>Período</b></label>
          <select class="form-control form-control-sm select2-sm" id="pext_periodo" name="pext_periodo" required>
            <?= $quincenas; ?>
          </select>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- <div class="card">
  <div class="card-body"> -->
    <div id="wizardPagos">
			<ul>
				<li>
	        <a href="#pagos_extraordinarios">
	          <span class="number">1</span>
	          <span class="info">
	            <i class="fas fa-money-bill"></i> Pagos
	            <small></small>
	          </span>
	        </a>
	      </li>
				<li>
					<a href="#armonizacion">
						<span class="number">2</span>
						<span class="info">
							<i class="fas fa-calculator"></i> Armonización
							<small></small>
						</span>
					</a>
				</li>
			</ul>

			<div class="container-fluid">
				<div id="pagos_extraordinarios" class="">
          <div class="card">
            <div class="card-body" id="lstEmpleadosPExt">

            </div>
            <div class="card-footer p-10 text-end pie-pago">
              <button type="button" class="btn btn-sm btn-inverse text-end" id="btnAgregaPagoExt" onclick="agregar_pago_extraordinario();" title="Agregar Pago Extraordinario"><i class="fas fa-plus"></i> Agregar</button>
              <!-- <button type="button" class="btn btn-sm btn-default text-end" id="btnEliminarPagoExt" onclick="eliminar_pago_ext();" title="Eliminar Pago Extraordinario"><i class="fas fa-trash-alt"></i> Eliminar</button> -->
              <button type="button" class="btn btn-sm btn-default text-end" id="btnDispersarPagoExt" onclick="dispersar_pago_ext();" title="Dispersar Pago Extraordinario"><i class="fas fa-file-excel"></i> Dispersar</button>
              <!-- <button type="button" class="btn btn-sm btn-default text-end" id="btnCerrarNominaPagoExt" onclick="cerrar_nomina_pago_ext();" title="Cerrar Nómina"><i class="far fa-times-circle"></i> Cerrar Nómina</button> -->
            </div>
          </div>
				</div>

				<div id="armonizacion" class="">
          <div class="card">
            <div class="card-body" id="lstArmonizacionPExt">

            </div>
            <!-- <div class="card-footer p-10 text-end pie-armoniza">
              <button type="button" class="btn btn-sm btn-inverse text-end" id="btnAgregaPagoExt" onclick="agregar_pago_extraordinario();" title="Agregar Pago Extraordinario"><i class="fas fa-plus"></i> Agregar</button>
              <button type="button" class="btn btn-sm btn-default text-end" id="btnDispersarPagoExt" onclick="dispersar_pago_ext();" title="Dispersar Pago Extraordinario"><i class="fas fa-file-excel"></i> Dispersar</button>
            </div> -->
          </div>
				</div>

			</div>
		</div>

  <!-- </div>
</div> -->

<script type="text/javascript">
setTimeout(function cargarconsulta() {

  $('#wizardPagos').smartWizard({
    selected: 0,
    backButtonSupport: true,
    useURLhash: false,
    showStepURLhash: false,
    keyNavigation: true,
    lang: {  // Language variables
      next: 'Siguiente',
      previous: 'Anterior'
    },
    anchorSettings: {
      anchorClickable: true, // Enable/Disable anchor navigation
      enableAllAnchors: true, // Activates all anchors clickable all times
      markDoneStep: false, // add done css
      enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
    },
    toolbarSettings: {
      toolbarPosition: 'none', // none, top, bottom, both
    },

  });

  $("#pext_periodo").select2({
    language: "es",
    placeholder: "Seleccione un Elemento",
    width:'100%',
  }).on("select2:close", function (event) {
      setTimeout(function() {
        $('.select2-container-active').removeClass('select2-container-active');
        $(':focus').blur();
        // dispara_tab_especial(event);
      }, 1);
  });

  $('#pext_periodo').trigger('change');
});

  $("#pext_periodo").on("change", function (e) {
    var idPeriodoPago = $(this).val();
    cargarpag('<?= base_url()?>pago_extraordinario/listado', "div#lstEmpleadosPExt", true, "POST", {idPeriodoPago:idPeriodoPago});
    cargarpag('<?= base_url()?>pago_extraordinario/armonizacion', "div#lstArmonizacionPExt", true, "POST", {idPeriodoPago:idPeriodoPago});
    return false;
  });

  function inicio_pago_extraordinario(idPeriodoPago) {
    cargarpag('<?= base_url()?>pago_extraordinario/', "div#content", true, "POST", {idPeriodoPago:idPeriodoPago});
    return false;
  }

  function agregar_pago_extraordinario() {
    var idPeriodoPago = $('#pext_periodo option:selected').val();
    cargarpag('<?= base_url()?>pago_extraordinario/agregar', "div#content", true, "POST", {idPeriodoPago:idPeriodoPago});
    return false;
  }

  function detalle_pago_extraordinario(url,data,esBoton) {
    if (typeof(esBoton) == "undefined" || esBoton == "" || esBoton == null) { esBoton = false; }
    if (esBoton) data = $(data).data('json');
    var idPagoExt = data.IdPagoExt;

    if (typeof(idPagoExt) == "undefined" || idPagoExt == "" || idPagoExt == null) {
      alerta_emergente("Error al obtener los valores del Pago Extraordinario.","warning");
      return false;
    }

    cargamodalGenerica('<?= base_url() ?>pago_extraordinario/carga_detalle_pago', '#modContenido', '#modGeneral', {idPagoExt:idPagoExt}, "Detalle", 1);
    return false;
  }

  function actualizar_pago_electronico(url,data,esBoton) {
    if (typeof(esBoton) == "undefined" || esBoton == "" || esBoton == null) { esBoton = false; }
    if (esBoton) data = $(data).data('json');
    var idPagoExt = data.IdPagoExt,
        idEmpleado = data.IdEmpleado;

    if (typeof(idPagoExt) == "undefined" || idPagoExt == "" || idPagoExt == null || typeof(idEmpleado) == "undefined" || idEmpleado == "" || idEmpleado == null) {
      alerta_emergente("Error al obtener los valores del Pago Extraordinario.","warning");
      return false;
    }

    cargamodalGenerica('<?= base_url() ?>empleado/actualizar_pago_electronico', '#modContenido', '#modGeneral', {idPagoExt:idPagoExt,idEmpleado:idEmpleado}, "Actualizar pago electrónico", 1);
    return false;
  }

  function eliminar_pago_extraordinario(url,data,esBoton) {
    var row = data;
    if (esBoton) data = $(data).data('json');
    var idPagoExt = data.IdPagoExt,
        status = data.IdStatus;

    if (typeof(idPagoExt) == "undefined" || idPagoExt == "" || idPagoExt == 0) {
      alerta_emergente("Ocurrió un error al intentar obtener la información del concepto. Intente de nuevo más tarde.","warning");
      return false;
    }

    if (status > 1) {
      alerta_emergente("No es posible eliminar este pago extraordinario.","warning");
      return false;
    }

    swal.fire({
      title: "Alerta",
      text: "¿Confirma que desea eliminar el pago extraordinario?",
      icon: "question",
      showCancelButton: true,
    }).then(result => {
      if (result.value) {
        Carga_Metodo("<?=base_url();?>pago_extraordinario/elimina_pago_extraordinario", {idPagoExt:idPagoExt}, function functBorraPagoExt(res) {
          if (res.status == false) { alerta_emergente(res.message, "warning"); }
          else {
            alerta_emergente(res.message, "success");
            var tablaPagos = $('#tblPagosExtraordinarios').DataTable();
            tablaPagos.row( $(row).parents('tr') ).remove().draw();
          }
        }, "Eliminando");
      }
    }).catch(swal.noop);
    return false;
  }

  function dispersar_pago_ext() {
    let tblPagosExtraordinarios = $('#tblPagosExtraordinarios').DataTable(),
        detallePagos = [];

    if (tblPagosExtraordinarios.rows({selected : true}).indexes().length === 0) {
      alerta_emergente('No es posible generar la dispersión. No se ha seleccionado un pago.','warning');
      return false;
    }

    let pagos = tblPagosExtraordinarios.rows( {selected: true} ).data().toArray();
    Carga_Metodo("<?=base_url();?>reportes/dispersar_pagos_extraordinarios", {pagos:JSON.stringify(pagos)}, function functionName(data) {
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
    }, "Procesando");
  }

</script>
