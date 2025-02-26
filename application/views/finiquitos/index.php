<h1 class="page-header">Cálculo de Nóminas <small>cálculos sin incluir sueldo base.</small></h1>

<div class="card mb-2">
	<?php
	$attributes = array("id" => "frmAgregaConcepto", "name" => "frmAgregaConcepto","class" => "needs-validation", "onsubmit" => "return PostBackFrmAgregaConceptoEmpleado(this, event);");
	echo form_open("nomina_generica/agrega_concepto", $attributes);
	?>
	<div class="card-body">
		<div class="row mb-2">
			<input type="hidden" id="fin_idEmpleado" name="fin_idEmpleado" required>
			<div class="col-2">
				<div class="form-group">
					<label class="form-label">Credencial</label>
					<input  type="text" class="form-control form-control-sm fin_credencial" id="fin_credencial" name="fin_credencial" placeholder="Credencial" autocomplete="off" required onkeypress="return onlyDigits(event, this, '', 'btnBuscaEmpleadoFin');">
				</div>
			</div>
			<div class="col-md">
				<div class="form-group">
					<label class="form-label">&nbsp;</label>
					<div>
						<button type="button" class="btn btn-inverse btn-sm" title="Buscar Empleado" id="btnBuscaEmpleadoFin" name="btnBuscaEmpleadoFin">
							<i class="fas fa-search"></i> Buscar
						</button>
						<button type="button" class="btn btn-inverse btn-sm" title="Búsqueda por nombre" onclick="buscar_empleado_porNombreF();" id="btnBuscaEmpleadoporNombre" name="btnBuscaEmpleadoporNombre">
							<i class="fas fa-binoculars"></i> Empleado
						</button>
					</div>
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					<label class="form-label">Nombre</label>
					<input type="text" class="form-control form-control-sm" id="fin_nombre" name="fin_nombre" readonly>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="form-group">
					<label for="fin_idTipoNomina" class="form-label">Tipo de Nómina</label>
					<select class="form-control form-control-sm select2-sm fin_catalogos" id="fin_idTipoNomina" name="fin_idTipoNomina" required>
						<?= $tiponomina; ?>
					</select>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<label for="fin_conceptopagar" class="form-label">Concepto a Pagar</label>
					<select class="form-control fin_catalogos form-control-sm select2-sm" id="fin_conceptopagar" name="fin_conceptopagar" readonly>
						<?= $conceptos; ?>
					</select>
					<div class="invalid-feedback">Seleccione un Concepto a Pagar</div>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<label for="fin_monto" class="form-label">Monto</label>
					<input type="text" class="form-control form-control-sm fin_currency" id="fin_monto" name="fin_monto" autocomplete="off" required>
				</div>
			</div>
			<div class="col-2">
				<div class="form-group">
					<label>&nbsp;</label>
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="chkGravadoF" name="chkGravadoF" value="1">
						<label class="form-label" for="chkGravadoF">Gravado</label>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<label>&nbsp;</label>
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="chkParteExeF" name="chkParteExeF" value="1" onclick="CambiaParteExentaFin(this.checked,true);">
						<label class="form-label" for="chkParteExeF">Tiene Parte Exenta</label>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<label for="fin_parteexe" class="form-label">Parte Exenta</label>
					<input type="text" class="form-control form-control-sm fin_decimal" id="fin_parteexe" name="fin_parteexe" autocomplete="off" required disabled>
				</div>
			</div>
		</div>
	</div>
	<div class="card-footer text-end">
		<button class="btn btn-sm btn-success text-end" id="btnGuardarConceptoFiniquito" title="Agregar Concepto"><i class="fa-solid fa-plus"></i> Agregar</button>
	</div>
	<?php
	echo form_close();
	?>
</div>


<div class="card" style="display:none;" id="divConceptosFiniquito">
	<div class="card-body">
		<div class="row" id="lstConceptosFiniquito">

		</div>
	</div>
	<div class="card-footer text-end">
		<button type="button" class="btn btn-sm btn-success" id="btnGuardarConceptoFiniquito" title="Agregar Concepto"><i class="fa-solid fa-plus"></i> Calcular</button>
		<button type="button" class="btn btn-sm btn-success" id="btnGuardarConceptoFiniquito" title="Agregar Concepto"><i class="fa-solid fa-plus"></i> Conf.</button>
		<button type="button" class="btn btn-sm btn-success" id="btnGuardarConceptoFiniquito" title="Agregar Concepto"><i class="fa-solid fa-plus"></i> Procesar</button>
	</div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
		$(".fin_currency").inputmask('currency',{rightAlign: true, prefix: '$ ', clearMaskOnLostFocus: false, removeMaskOnSubmit: true, allowMinus: false, autoUnmask:true });
		$(".fin_decimal").inputmask('decimal',{digits: 2, digitsOptional: false, placeholder: '0.00', rightAlign: false  });
  	$("#fin_credencial").inputmask("9{5}",{ numericInput: true,placeholder: "0", positionCaretOnClick: "select", showMaskOnHover: false, showMaskOnFocus: false});

		$(".fin_catalogos").select2({
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

		$("#fin_idTipoNomina option[value='3']").remove();

	});

	function buscar_empleado_porNombreF() {
	  var datos = {
	    funcion:"devuelve_empleado_finiquito"
	  };
	  cargamodalGenerica('<?= base_url() ?>generico/carga_vista', '#modContenido', '#modGeneral', {vista:"empleado/buscar_por_nombre",datos:datos}, "Buscar empleado por nombre", 1);
	  return false;
	}

	$('#btnBuscaEmpleadoFin').click(function(event) {
	  event.preventDefault();
		$('#lstConceptosFiniquito').empty();
		$('#divConceptosFiniquito').hide();
	  traer_empleado();
	});

	function devuelve_empleado_finiquito(credencial) {
		ocultamodalGenerica();
		$('#fin_credencial').val(credencial);
		traer_empleado();
		return false;
	}

	function PostBackFrmAgregaConceptoEmpleado(f,e) {
		e.preventDefault();
		let variables = $(f).serialize();
		Carga_Metodo(f.action, variables, function finalizaFnc(respuesta) {
			if (respuesta.status == false ) {
				$('#lstConceptosFiniquito').empty();
				$('#divConceptosFiniquito').hide();
				alerta_emergente(respuesta.message, "warning");
			}
			else {
				$('#divConceptosFiniquito').show();
				$('#lstConceptosFiniquito').html(respuesta.html);
			}
		}, "Cargando...");
	}

	function traer_empleado() {
	  let credencial = $('#fin_credencial').val();
	  if (typeof(credencial) == "undefined" || credencial === "" || credencial == 0 ) {
	    alerta_emergente("Debe capturar la credencial del empleado.","warning")
	    return false;
	  }

		Carga_Metodo("recursos_humanos/detalle_empleado_RH", {credencial:credencial}, 	function finalizaFnc(respuesta) {
			if (respuesta.status == false ) { alerta_emergente(respuesta.message, "warning"); }
			else {
			  $('#fin_nombre').val(respuesta.empleado.NombreCompleto);
			  $('#fin_idEmpleado').val(respuesta.empleado.Id);
			  detalle_conceptos_empleado();
			}
		}, "Cargando...");
	  return false;
	}

	function detalle_conceptos_empleado() {
	  let idEmpleado = $('#fin_idEmpleado').val(),
	      credencial = $('#fin_credencial').val();

	  if (typeof(credencial) == "undefined" || credencial == "" || credencial == 0) {
	    alerta_emergente("Debe capturar la credencial del empleado.","warning");
	    return false;
	  }

	  if (typeof(idEmpleado) == "undefined" || idEmpleado == "" || idEmpleado == 0) {
	    alerta_emergente("Ocurrió un error al intentar obtener la información del empleado. Intente de nuevo más tarde.","warning");
	    return false;
	  }

	  consulta_detalle_empleado_finiquito(idEmpleado);
	}


	function consulta_detalle_empleado_finiquito(idEmpleado) {
	  $('#lstConceptosFiniquito').empty()

		Carga_Metodo("nomina_generica/obtiene_configuracion_empleado", {idEmpleado:idEmpleado}, 	function finalizaFnc(respuesta) {
			if (respuesta.status == false ) { alerta_emergente(respuesta.message, "warning"); }
			else {
			  $('#fin_nombre').val(respuesta.empleado.NombreCompleto);
			  $('#fin_idEmpleado').val(respuesta.empleado.Id);

			}
		}, "Cargando...");
	  $('#lstConceptosFiniquito').show();
	  return false;
	}

	function CambiaParteExentaFin(checked) {
		if (checked == true) {
			$("#fin_parteexe").prop("disabled", false);
		}
		else {
			$("#fin_parteexe").prop("disabled", true);
		}
	}

	$("#fin_conceptopagar").on("change", function (e) {
		 let idConcepto = $("#fin_conceptopagar option:selected").val();
		 if (idConcepto > 0) {
			traer_datos_concepto(idConcepto, "perc");
		 }

		return false;
	});

	function traer_datos_concepto(idConcepto) {
		 Carga_Metodo("<?=base_url();?>nomina/trae_datos_concepto", {idConcepto:idConcepto}, 	function finalizaFnc(respuesta) {
			 if (respuesta.status == false ) { alerta_emergente(respuesta.message, "warning"); }
			 else {
				let datosConcepto = respuesta.datosconcepto;
				if (datosConcepto['antesimp'] == true) {
					$('#chkGravadoF').prop("checked",true);
				}
				else {
					$('#chkGravadoF').prop("checked",false);
				}
				if (datosConcepto['tieneparteexe'] == true) {
					$('#chkParteExeF').prop("checked",true);
					$('#fin_parteexe').prop("value", datosConcepto['parteexe']).prop("disabled", false);
				}
				else {
					$('#chkParteExeF').prop("checked",false);
					$('#fin_parteexe').prop("value", "").prop("disabled", true);
				}
		 	}
		 }, "Cargando...");

	}



</script>
