<?php
$attributes = array("id" => "frmProyectaEmpleado", "name" => "frmProyectaEmpleado","class" => "needs-validation", "onsubmit" => "return PostBackFrmProyectaEmpleado(this, event);");
echo form_open("configuraciones/genera_proyeccion", $attributes);
?>
<div class="card-body">
	<div class="row mb-2">
		<input type="hidden" id="pe_idEmpleado" name="pe_idEmpleado" required>
		<input type="hidden" id="pe_idPeriodoPago" name="pe_idPeriodoPago" value="<?= (empty($idPeriodoPago) ? 0 : $idPeriodoPago); ?>">
		<div class="col-2">
			<div class="form-group">
				<label class="form-label">Credencial</label>
				<input  type="text" class="form-control form-control-sm det_credencial" id="pe_credencial" name="pe_credencial" placeholder="Credencial" autocomplete="off" required onkeypress="return onlyDigits(event, this, '', 'btnBuscaEmpleado');">
			</div>
		</div>
		<div class="col-md">
			<div class="form-group">
				<label class="control-label">&nbsp;</label>
				<div>
					<button type="button" class="btn btn-inverse btn-sm" title="Buscar Empleado" id="btnBuscaEmpleado" name="btnBuscaEmpleado">
						<i class="fas fa-search"></i> Buscar
					</button>
					<button type="button" class="btn btn-inverse btn-sm" title="Búsqueda por nombre" onclick="buscar_empleado_porNombre();" id="btnBuscaEmpleadoporNombre" name="btnBuscaEmpleadoporNombre">
						<i class="fas fa-binoculars"></i> Empleado
					</button>
				</div>
			</div>
		</div>
		<div class="col-6">
			<div class="form-group">
				<label class="form-label">Nombre</label>
				<input type="text" class="form-control form-control-sm" id="pe_nombre" name="pe_nombre" readonly>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-6">
			<div class="form-group">
				<label for="pe_conceptopagar" class="form-label">Concepto a Pagar</label>
				<select class="form-control pe_catalogos form-control-sm select2-sm" id="pe_conceptopagar" name="pe_conceptopagar" readonly>
					<?= $catconceptospe; ?>
				</select>
				<div class="invalid-feedback">Seleccione un Concepto a Pagar</div>
			</div>
		</div>
		<div class="col-3">
			<div class="form-group">
				<label for="pe_fechaini_emp" class="form-label">Fecha Inicio</label>
				<input type="text" class="form-control form-control-sm fechasPE" id="pe_fechaini_emp" name="pe_fechaini_emp" readonly>
			</div>
		</div>
		<div class="col-3">
			<div class="form-group">
				<label for="pe_fechafin_emp" class="form-label">Fecha Final</label>
				<input type="text" class="form-control form-control-sm fechasPE" id="pe_fechafin_emp" name="pe_fechafin_emp" readonly>
			</div>
		</div>
	</div>

	<div class="row mt-2 estadoRH-SG" style="display:none;">
		<div class="col-3">
			<label for="edoRHpe" class="form-label">Estado RH</label>
			<input type="text" class="form-control form-control-sm" id="edoRHpe" name="edoRHpe" readonly>
		</div>
		<div class="col-3">
			<label for="edoSGpe" class="form-label">Estado SISEGE</label>
			<input type="text" class="form-control form-control-sm" id="edoSGpe" name="edoSGpe" readonly>
		</div>
	</div>
</div>
<div class="card-footer p-10 text-end pie-empleado">
	<button type="button" class="btn btn-sm btn-default text-end" id="btnEmpDetalle_pe" onclick="ver_detalle_empleado();"><i class="far fa-eye"></i> Ver detalle</button>
	<button type="button" class="btn btn-sm btn-default text-end" id="btnProyManual_pe" onclick="abre_proyeccion_manual();"><i class="fas fa-user-edit"></i> Proyección Manual</button>
	<button class="btn btn-sm btn-success text-end" id="btnProyectar"><i class="fas fa-chart-line"></i> Proyectar</button>
</div>
<?php
echo form_close();
?>

<script type="text/javascript">
$(document).ready(function(){
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
	})
});

$('#btnBuscaEmpleado').click(function(event) {
  event.preventDefault();
	$('lstResultado').empty();
  traer_empleado();
});

$('#pe_conceptopagar').on('change', function (e) {
  ver_detalle_empleado();
});

function ver_detalle_empleado() {
  let concepto = $('#pe_conceptopagar').val();
  if (typeof(concepto) == "undefined" || concepto == "") {
    alerta_emergente("Debe seleccionar un concepto.","warning");
    return false;
  }

  let fechaini = $('#pe_conceptopagar').find(':selected').data('fechainicio'),
      fechafin = $('#pe_conceptopagar').find(':selected').data('fechafinal'),
      idEmpleado = $('#pe_idEmpleado').val(),
      credencial = $('#pe_credencial').val();

  if (typeof(credencial) == "undefined" || credencial == "" || credencial == 0) {
    alerta_emergente("Debe capturar la credencial del empleado.","warning");
    return false;
  }

  if (typeof(idEmpleado) == "undefined" || idEmpleado == "" || idEmpleado == 0) {
    alerta_emergente("Ocurrió un error al intentar obtener la información del empleado. Intente de nuevo más tarde.","warning");
    return false;
  }

  fechaini = fecha_sql_a_normal(fechaini);
  fechafin = fecha_sql_a_normal(fechafin);
  $('#pe_fechaini_emp').val(fechaini);
  $('#pe_fechafin_emp').val(fechafin);

  consulta_detalle_empleado(idEmpleado,credencial,fechaini,fechafin);
}

function PostBackFrmProyectaEmpleado(f,e) {
  e.preventDefault();
  let idPagoEspecial = $('#pe_conceptopagar').find(':selected').data('id'),
      descConcepto = $('#pe_conceptopagar').find(':selected').text(),
      idEmpleado = $('#pe_idEmpleado').val();

  if (typeof(idEmpleado) == "undefined" || idEmpleado == "" || idEmpleado == 0) {
    alerta_emergente("Ocurrió un error al intentar obtener la información del empleado. Intente de nuevo más tarde.","warning");
    return false;
  }

  genera_proyeccion(idPagoEspecial,descConcepto,idEmpleado);
  return false;
}

function abre_proyeccion_manual() {
  let idEmpleado = $('#pe_idEmpleado').val(),
      credencial = $('#pe_credencial').val(),
			idConcepto = $('#pe_conceptopagar').val();

  if (typeof(credencial) == "undefined" || credencial == "" || credencial == 0) {
    alerta_emergente("Debe capturar la credencial del empleado.","warning");
    return false;
  }

  if (typeof(idEmpleado) == "undefined" || idEmpleado == "" || idEmpleado == 0) {
    alerta_emergente("Ocurrió un error al intentar obtener la información del empleado. Intente de nuevo más tarde.","warning");
    return false;
  }
  cargamodalGenerica('<?= base_url() ?>configuraciones/abre_proyeccion_manual', '#modContenido', '#modGeneral', {idEmpleado:idEmpleado,idConcepto:idConcepto}, "Proyección manual de días por empleado", 1);
  return false;
}

</script>
