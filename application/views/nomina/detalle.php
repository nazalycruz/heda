<h1 class="page-header">Detalle de Nómina <small>cálculo y configuración por empleado.</small></h1>
<?php
$attributes = array("id" => "frmConsultaEmpleado", "name" => "frmConsultaEmpleado", "onsubmit" => "return PostBackFrmEmpleado(this, event);");
echo form_open("nomina/carga_datos_empleado", $attributes);
?>
<input type="hidden" id="idEmpleado" name="idEmpleado" value="0">
<input type="hidden" id="idPeriodoPago" name="idPeriodoPago" value="<?= empty($idPeriodoPago) ? 0 : $idPeriodoPago; ?>">
<input type="hidden" id="idPresupuesto" name="idPresupuesto" value="0">
<input type="hidden" id="estado_baja" name="estado_baja" value="0">

<div class="card mb-2">
  <div class="card-body">
		<div class="row mb-2" id="mensaje-presupuesto" style="display:none;">
			<div class="col">
				<div class="alert alert-warning fade show mb-0">
					<strong>El empleado no pertenece al presupuesto actual.</strong>
				</div>
			</div>
		</div>
		<div class="row mb-2">
      <div class="col-2">
        <div class="form-group">
          <label class="form-label">Credencial</label>
          <input value="" type="text" class="form-control form-control-sm det_credencial" id="credencial" name="credencial" placeholder="Credencial" autocomplete="off" required >
        </div>
      </div>
      <div class="col-md">
        <div class="form-group">
          <label class="form-label">&nbsp;</label>
          <div>
            <button class="btn btn-inverse btn-sm" title="Buscar Empleado" id="btnBuscaEmpleado" name="btnBuscaEmpleado">
              <i class="fas fa-search"></i> Buscar
            </button>
            <button type="button" class="btn btn-inverse btn-sm" title="Búsqueda por nombre" onclick="buscar_empleado_porNombre();" id="btnBuscaEmpleadoporNombre" name="btnBuscaEmpleadoporNombre">
              <i class="fas fa-binoculars"></i> Empleado
            </button>
          </div>
        </div>
      </div>

      <div class="col-6 pull-right">
        <div class="form-group">
          <label class="form-label">Nombre</label>
          <input type="text" class="form-control form-control-sm" id="nombre" name="nombre" readonly>
        </div>
      </div>
    </div>

    <div class="row mb-2">
      <div class="col-6">
        <div class="form-group">
          <label><b>Categoría</b></label>
          <input type="text" class="form-control form-control-sm" id="categoria" name="categoria" readonly>
        </div>
      </div>
      <div class="col-6">
        <div class="form-group">
          <label><b>Dependencia</b></label>
          <input type="text" class="form-control form-control-sm" id="dependencia" name="dependencia" readonly>
        </div>
      </div>
    </div>

    <div class="row mb-2" id="muestra-quincena">
      <div class="col-6">
        <div class="form-group">
          <label for="quincena" class="form-label">Quincena</label>
          <select class="form-control form-control-sm select2-sm" id="quincena" name="quincena" disabled>

          </select>
        </div>
      </div>
			<div class="col-3">
				<label for="edoRH" class="form-label">Estado RH</label>
				<input type="text" class="form-control form-control-sm" id="edoRH" name="edoRH" readonly>
			</div>
			<div class="col-3">
				<label for="edoSG" class="form-label">Estado SISEGE</label>
				<input type="text" class="form-control form-control-sm" id="edoSG" name="edoSG" readonly>
			</div>
    </div>

  </div>
</div>
<?php
echo form_close();
?>

<div class="card mb-2" id="empleado_baja" style="display:none;">
	<div class="card-body">
		<div class="row mb-2">
			<div class="col">
				<div class="alert alert-warning fade show mb-0">
					<strong>El empleado se encuentra inactivo o de baja.</strong>
				</div>
			</div>
		</div>
		<div class="row" id="resultTblBaja">

		</div>
	</div>
</div>

<div id="detalle_nomina_empleado" style="display:none;"></div>

<script type="text/javascript">

setTimeout(function cargarconsulta() {
	$("#frmConsultaEmpleado :input:not(:button,[name=credencial])").prop("disabled", true);
  $(".det_credencial").inputmask("9{5}",{ numericInput: true,placeholder: "0", positionCaretOnClick: "select", showMaskOnHover: false, showMaskOnFocus: false});
});

function PostBackFrmEmpleado(f,e) {
  e.preventDefault();
  if (typeof($('#credencial').val()) == "undefined" || $('#credencial').val() === "" || $('#credencial').val() == 0) {
    alerta_emergente("Debe capturar la credencial del empleado.","warning")
    return false;
  }
	$('#idEmpleado').val(0);
	$("#quincena").prop("disabled", true);
	// $('#detalle_nomina_empleado').hide();
	// $("#quincena").empty();
	$('#estado_baja').val(0);
	$('#empleado_baja').hide();
	$('#mensaje-presupuesto').hide();
  Carga_Metodo(f.action, $(f).serialize(), exito_carga_empleado, "Cargando...");
  return false;
}

function exito_carga_empleado(respuesta) {
  if (respuesta.status == false) {
  	limpiaForm($('#frmConsultaEmpleado'));
		alerta_emergente(respuesta.message, "warning");
	}
  else {
		if (respuesta.idPresupuestoActual != respuesta.empleado.ProgramaId) {
			//PENDIENTE: Modificar cuando se vaya a calcular para otros presupuestos
  		// limpiaForm($('#frmConsultaEmpleado'));
			$('#mensaje-presupuesto').show();
			// $('#detalle_nomina_empleado').hide();
		}
		$('#nombre').val(respuesta.empleado.NombreCompleto);
    $('#categoria').val(respuesta.empleado.DescripcionCategoria);
    $('#dependencia').val(respuesta.empleado.DescripcionDependencia);
    $('#idEmpleado').val(respuesta.empleado.Id);
		$('#idPresupuesto').val(respuesta.empleado.ProgramaId);
		let estadoRH = respuesta.empleado.Estado+' - '+ ((respuesta.empleado.Estado == 'I' || respuesta.empleado.Estado == 'B') ? 'INACTIVO' : 'ACTIVO'),
				liquidado = ((respuesta.empleado.Liquidado == 1) ? '(Liquidado)' : ''),
				estadoSG = respuesta.estadoSISEGE.Origen +' - '+respuesta.estadoSISEGE.Status;
		$('#edoRH').val(estadoRH + ' ' + liquidado);
		$('#edoSG').val(estadoSG);
		if (respuesta.baja || respuesta.empleado.Estado == 'I' || respuesta.empleado.Estado == 'B') {
			$('#edoRH').addClass('bg-red-400');
			$('#resultTblBaja').html(respuesta.htmlBaja);
			$('#empleado_baja').show();
			$('#estado_baja').val(1);
		}
		else {
			$('#edoRH').removeClass('bg-red-400');
		}
		carga_quincenas(respuesta.quincenas);
  }
}

function carga_quincenas(quincenas) {
	$("#quincena").html(quincenas).prop("disabled", false);
	$("#quincena").select2({
		language: "es",
		placeholder: "Seleccione un Elemento",
		width:'100%',
	}).on("select2:close", function (event) {
			setTimeout(function() {
				$('.select2-container-active').removeClass('select2-container-active');
				$(':focus').blur();
			}, 1);
	});

	$('#quincena').val($('#quincena option:eq(0)').val()).trigger('change');
}

$("#quincena").on("change", function (e) {
  let quincena = $(this).val(),
      credencial = $('#credencial').val(),
      idEmpleado = $('#idEmpleado').val();
  if (typeof(idEmpleado) == "undefined" || idEmpleado === "" || idEmpleado == 0 || idEmpleado == null) {
    alerta_emergente("Ocurrió un error al obtener la información del empleado. Por favor intente de nuevo más tarde.","warning")
    return false;
  }

  if (typeof(quincena) == "undefined" || quincena === "" || quincena == 0 || quincena == null) {
    alerta_emergente("Ocurrió un error al obtener la información del período de pago. Por favor intente de nuevo más tarde.","warning")
    return false;
  }

  Carga_Metodo("<?=base_url();?>nomina/carga_nomina_empleado", {quincena:quincena,credencial:credencial,idEmpleado:idEmpleado}, exito_carga_nomina_empleado, "Cargando...");
  return false;
});

function exito_carga_nomina_empleado(respuesta) {
	$('div#detalle_nomina_empleado').html(respuesta.datos);
	$('#detalle_nomina_empleado').show();
	if (($('#idPresupuesto').val() != $("#quincena").find(':selected').data('presupuestoid')) && $("#quincena").find(':selected').data('nominacerrada') == 0) {
		$('#tbrAcciones').hide();
	}
	return false;
}

function buscar_empleado_porNombre() {
  cargamodalGenerica('<?= base_url() ?>generico/carga_vista', '#modContenido', '#modGeneral', {vista:"empleado/buscar_por_nombre"}, "Buscar empleado por nombre", 1);
  return false;
}

</script>
