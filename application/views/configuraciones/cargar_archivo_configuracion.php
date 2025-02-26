<h1 class="page-header">Configuración de Empleados <small>cargar archivo de configuración</small></h1>

<div class="card mb-2">
	<div class="card-header">
		<ul class="nav nav-tabs card-header-tabs">
			<li class="nav-item">
				<a class="nav-link active" data-bs-toggle="tab" href="#card-carga-conf" data-item="carga-conf">Configurar</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-bs-toggle="tab" href="#card-elimina-conf" data-item="elimina-conf">Eliminar Configuración</a>
			</li>
		</ul>
	</div>
	<div class="card-body">
		<div class="tab-content p-0 m-0">
			<div class="tab-pane fade active show" id="card-carga-conf">
				<div class="card mb-2">
					<?php
					$attributes = array("id" => "frmCargaArchivoConfiguracion", "name" => "frmCargaArchivoConfiguracion", "onsubmit" => "return CargaArchivoConfiguracion(this, event);");
					echo form_open("configuraciones/leeArchivoConfiguracion", $attributes);
					?>
				  <div class="card-body">
				    <div class="row mb-2">
				      <div class="col-4">
				        <div class="form-group">
				          <label for="confXLS" class="form-label">Archivo de Configuración</label>
				          <input id="confXLS" name="confXLS" type="file" accept=".xls, .xlsx, .csv" class="file" style="visibility:hidden;position:absolute;" onchange="checkFile(this);">
				          <div class="input-group">
				            <input type="text" class="form-control form-control-sm" id="confXLStext" name="confXLStext" disabled placeholder="Seleccionar archivo...">
				            <span class="input-group-btn">
				              <button class="browse btn btn-sm btn-outline-secondary" type="button" onclick="examinar_archivo();"><i class="far fa-file-excel"></i> Examinar...</button>
				            </span>
				          </div>
				        </div>
				      </div>
						</div>
						<div class="row">
					    <div class="col-2">
				        <div class="form-group">
				          <label for="colIni" class="form-label">Columna inicial</label>
				          <input type="text" class="form-control form-control-sm alpha-only" id="colIni" name="colIni" placeholder="Columna inicial de datos" autocomplete="off" onkeypress="return onlyAlpha(event, this);" maxlength="1">
									<p class="help-block">Escriba la columna en la que inician los datos de los empleados (dejar vacío para usar la columna A).</p>
				        </div>
				      </div>
				      <div class="col-2">
				        <div class="form-group">
				          <label for="colFin" class="form-label">Columna final</label>
				          <input type="text" class="form-control form-control-sm alpha-only" id="colFin" name="colFin" placeholder="Columna final de datos" autocomplete="off" onkeypress="return onlyAlpha(event, this);" maxlength="1">
									<p class="help-block">Escriba la columna en la que terminan los datos de los empleados (dejar vacío para usar la última columna con contenido).</p>
				        </div>
				      </div>
							<div class="col-2">
								<div class="form-group">
									<label for="filaIni" class="form-label">Fila inicial</label>
									<input type="text" class="form-control form-control-sm" id="filaIni" name="filaIni" placeholder="Fila inicial de datos" autocomplete="off" onkeypress="return onlyAlpha(event, this);" maxlength="4">
									<p class="help-block">Escriba la fila en la que inician los datos de los empleados <span class="text-red fw-bold">(no incluir encabezados)</span>.</p>
								</div>
							</div>
							<div class="col-2">
								<div class="form-group">
									<label for="filaFin" class="form-label">Fila final</label>
									<input type="text" class="form-control form-control-sm" id="filaFin" name="filaFin" placeholder="Fila final de datos" autocomplete="off" onkeypress="return onlyAlpha(event, this);" maxlength="4">
									<p class="help-block">Escriba la fila en la que terminan los datos a configurar (dejar vacío para usar la última fila con contenido).</p>
								</div>
							</div>
							<div class="col-2">
								<div class="form-group">
									<label for="nombreHoja" class="form-label">Nombre de la hoja</label>
									<input type="text" class="form-control form-control-sm" id="nombreHoja" name="nombreHoja" placeholder="Nombre de la hoja a configurar" autocomplete="off">
									<p class="help-block">Escriba el nombre de la hoja a configurar (dejar vacío para usar la primera hoja).</p>
								</div>
							</div>
							<div class="col-2 text-end">
								<div class="form-group">
									<label class="control-label">&nbsp;</label>
									<div>
										<button type="submit" class="btn btn-inverse btn-sm" title="Vista previa" id="btnVistaPreviaXLS" name="btnVistaPreviaXLS">
											<i class="fas fa-search"></i> Vista Previa
										</button>
									</div>
								</div>
							</div>
				    </div>
					</div>
					<?php
					echo form_close();
					?>
				</div>

				<div class="card mb-2" id="divtblResult" style="display:none;">
				  <div id="resultVistaPrevia" class="card-body">

				  </div>
				</div>

				<div class="card" id="divFormConceptos" style="display:none;">
				  <?php
				  $attributes = array("id" => "frmGuardaConfiguracionEmpleado", "name" => "frmGuardaConfiguracionEmpleado", "onsubmit" => "return GuardaConfiguracionEmpleado(this, event);");
				  echo form_open("configuraciones/guarda_configuracion_empleado", $attributes);
				  ?>
				  <div class="card-body">
				    <div class="row">
				      <div class="col-6">
				        <div class="form-group">
				          <label for="colCredencial" class="form-label">Columna credencial</label>
				          <input type="text" class="form-control form-control-sm alpha-only" id="colCredencial" name="colCredencial" placeholder="Columna que contiene la credencial del empleado" onkeypress="return onlyAlpha(event, this);" autocomplete="off" required maxlength="1">
				          <p class="help-block">Escriba la columna que contiene la credencial del empleado.</p>
				        </div>
				      </div>
				      <div class="col-6">
				        <div class="form-group">
				          <label for="colMonto" class="form-label">Columna monto</label>
				          <input type="text" class="form-control form-control-sm alpha-only" id="colMonto" name="colMonto" placeholder="Columna que contiene el monto a configurar" onkeypress="return onlyAlpha(event, this);" autocomplete="off" required maxlength="1">
				          <p class="help-block">Escriba la columna que contiene el monto a configurar <span class="text-red fw-bold">(verificar que el monto se encuentre en el formato correcto)</span>.</p>
				        </div>
				      </div>
						</div>
				    <div class="row mb-2">
							<div class="col-3">
				        <div class="form-group">
				          <label for="cf_tiponomina" class="form-label">Tipo de Nómina</label>
				          <select class="form-control upcf_catalogos form-control-sm select2-sm" id="cf_tiponomina" name="cf_tiponomina" required>
				            <?= $cattiponomina; ?>
				          </select>
				        </div>
				      </div>
				      <div class="col-3">
				        <div class="form-group">
				          <label for="cf_concepto" class="form-label">Concepto</label>
				          <select class="form-control upcf_catalogos form-control-sm select2-sm" id="cf_concepto" name="cf_concepto" required>
				            <?= $catconceptos; ?>
				          </select>
				          <div class="invalid-feedback">Seleccione un Concepto</div>
				        </div>
				      </div>
							<div class="col-2">
								<div class="form-group">
									<label>&nbsp;</label>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="chkPermanente" name="chkPermanente" value="1" onclick="CambiaEstadoPermanente(this.checked);">
										<label class="custom-control-label form-label" for="chkPermanente">Permanente</label>
									</div>
								</div>
							</div>
							<div class="col-2">
								<div class="form-group">
									<label for="cf_vecesaplicar" class="form-label">Veces a Aplicar</label>
									<input type="text" class="form-control form-control-sm" id="cf_vecesaplicar" name="cf_vecesaplicar" autocomplete="off" onkeypress="return onlyDigits(event, this);" maxlength="3" onblur="CambiaVecesAplicar(this)" value="1" required>
								</div>
							</div>
							<div class="col-2">
								<div class="form-group">
									<label for="cf_aplicadas" class="form-label">Veces Aplicadas</label>
									<input type="text" class="form-control form-control-sm" id="cf_aplicadas" name="cf_aplicadas" autocomplete="off" onkeypress="return onlyDigits(event, this);" maxlength="3" value="0">
								</div>
							</div>
				    </div>
						<div class="row mb-2">
							<div class="col-3">
								<div class="form-group">
									<label>&nbsp;</label>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="chkGravado" name="chkGravado" value="1">
										<label class="custom-control-label form-label" for="chkGravado">Gravado</label>
									</div>
								</div>
							</div>
							<div class="col-3">
								<div class="form-group">
									<label>&nbsp;</label>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="chkParteExe" name="chkParteExe" value="1" onclick="CambiaParteExenta(this.checked);" disabled>
										<label class="custom-control-label form-label" for="chkParteExe">Tiene Parte Exenta</label>
									</div>
								</div>
							</div>
							<div class="col-2">
								<div class="form-group">
									<label for="cf_parteexe" class="form-label">Parte Exenta</label>
									<input type="text" class="form-control form-control-sm cf_decimal" id="cf_parteexe" name="cf_parteexe" autocomplete="off" required disabled>
								</div>
							</div>
						</div>
				  </div>
				  <div class="card-footer text-end pt-2 pb-2">
				    <button type="submit" class="btn btn-success btn-sm" title="Subir archivo de configuración" id="btnSubirXLS" name="btnSubirXLS">
				      <i class="fas fa-file-upload"></i> Subir Conf.
				    </button>
				  </div>
				  <?php
				  echo form_close();
				  ?>
				</div>

				<div class="card mb-2 mt-2" id="divtblResultadoSubida" style="display:none;">
					<div id="conf_errores" class="alert alert-danger fw-bold" style="display:none;"></div>
				  <div id="resultSubida" class="card-body">

				  </div>
				</div>
			</div>
			<!-- card eliminar configuración -->
			<div class="tab-pane fade" id="card-elimina-conf">
				<div class="card mb-2">
					<?php
					$attributes = array("id" => "frmCargaEmpleadosConfigurados", "name" => "frmCargaEmpleadosConfigurados","class" => "needs-validation", "onsubmit" => "return PostBackFrmConsultaEmpleadosConf(this, event);");
					echo form_open("configuraciones/empleados_configurados", $attributes);
					?>
					<div class="card-body">
						<div class="row mb-2">
							<div class="col-4">
								<div class="form-group">
									<label for="cce_tiponominaConf" class="form-label">Tipo Nómina</label>
									<select class="form-control upcf_catalogos form-control-sm select2-sm" id="cce_tiponominaConf" name="cce_tiponominaConf" required>
										<?= $cattiponomina; ?>
									</select>
									<div class="invalid-feedback">Seleccione el Tipo de Nómina a configurar</div>
								</div>
							</div>
							<div class="col-4">
								<div class="form-group">
									<label for="cce_conceptoConf" class="form-label">Concepto</label>
									<select class="form-control upcf_catalogos form-control-sm select2-sm" id="cce_conceptoConf" name="cce_conceptoConf" required>
										<?= $catconceptos; ?>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer p-10 text-end pie-conceptos">
						<button type="submit" class="btn btn-sm btn-inverse text-end" id="btnConsultaConfiguracion"><i class="fa-solid fa-magnifying-glass"></i> Consultar</button>
						<button type="button" class="btn btn-sm btn-danger text-end" id="btnEliminaConfiguracion" onclick="elimina_configuracion();"><i class="fa-solid fa-trash"></i> Eliminar</button>
					</div>
					<?php
					echo form_close();
					?>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
$(".cf_decimal").inputmask('decimal',{digits: 2, digitsOptional: false, placeholder: '0.00', rightAlign: false  });

$('#chkGravado').prop("disabled", true); // GSantos, 2024.02.15

$(".upcf_catalogos").select2({
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

function checkFile(sender) {
  let fileExt = sender.value,
  		validExts = new Array(".xls", ".XLS", ".xlsx", ".XLSX", ".csv", ".CSV");
  fileExt = fileExt.substring(fileExt.lastIndexOf('.'));
  if (validExts.indexOf(fileExt) < 0 && fileExt != "") {
    alerta_emergente("Formato de archivo seleccionado no permitido, los archivos aceptados son de tipo: " + validExts.toString(), 'warning');
    $(sender).val("");
    return false;
  }
  else {
    var filename = sender.value.split('\\').pop();
    $("#confXLStext").val(filename.replace(/C:\\fakepath\\/i, ''));
    return true;
  }
}

function examinar_archivo() {
  $("#confXLS").trigger('click');
}

function CargaArchivoConfiguracion(f,e) {
  e.preventDefault();
	let variables = $(f).serializeArray(),
      formData = new FormData();

  formData.append('archConf', $('#confXLS')[0].files[0]);
  $(variables).each(function(index, obj){
    formData.append(obj.name,obj.value);
  });
  $.ajax({
    url: f.action,
    method: "POST",
    processData: false,
    contentType: false,
    data: formData,
    dataType: "JSON",
		beforeSend: function() {
			showLoading("Cargando...","");
		},
    success: function(data) {
      if (data.status == false) {
        alerta_emergente(data.message,"warning");
				$('#resultVistaPrevia, #resultSubida').empty();
				$('#divtblResult, #divFormConceptos, #divtblResultadoSubida').hide();
      }
      else {
        let tablaConf = $('#tblConfigurarEmpleados').DataTable();
        if (tablaConf.data().any()) { tablaConf.clear().draw(); }
        $('#resultVistaPrevia').html(data.html);
        $('#divtblResult, #divFormConceptos').show();
				$('#resultSubida').empty();
				$('#divtblResultadoSubida').hide();
      }
    },
    error: function(error) {
			$('#resultVistaPrevia, #resultSubida').empty();
			$('#divtblResult, #divFormConceptos, #divtblResultadoSubida').hide();
			alerta_emergente("Ocurrió un error al intentar cargar el archivo, intente de nuevo más tarde.", "error");
		},
		complete: function( jqXHR, Status) {
			hideLoading();
		}
  });
}

function GuardaConfiguracionEmpleado(f,e) {
  e.preventDefault();
  let tablaConf = $('#tblConfigurarEmpleados').DataTable();
	if (!tablaConf.data().any()) {
    alerta_emergente('Debes cargar un archivo para poder guardar la configuración.','warning');
    return false;
  }

	let variables = $(f).serialize();
	$('form#'+f.id+' :disabled').each( function() {
		variables = variables + '&' + $(this).attr('name') + '=' + $(this).val();
	});
  let empleados = tablaConf.rows().data().toArray();

  swal.fire({
     title: "Alerta",
     html: "¿Confirma que desea guardar la configuración para "+tablaConf.rows().indexes().length+" empleados?<br /><br />"+
            "<ul><li><b>Columna con credencial: </b>"+$('#colCredencial').val().toUpperCase()+"</li>"+
            "<li><b>Columna con monto: </b>"+$('#colMonto').val().toUpperCase()+"</li></ul>",
     icon: "question",
     showCancelButton: true,
     showLoaderOnConfirm: true,
     allowOutsideClick: false,
     preConfirm: function () {
       return new Promise(function(resolve) {
         Carga_Metodo(f.action,
                       variables+"&empleados="+JSON.stringify(empleados),
                       exito_guarda_configuracion,
                       "Procesando...");
      });
     }
  });
  return false;
}

function exito_guarda_configuracion(respuesta) {
	$('div#conf_errores').hide();
	if (respuesta.status == false) {
		alerta_emergente(respuesta.message,"warning");
	}
	else {
		if (respuesta.errores == 0) { alerta_emergente(respuesta.message,"success"); }
		else {
			$('div#conf_errores').html(respuesta.message).fadeIn('slow');
			alerta_emergente(respuesta.message,"warning");
		}
		$('#resultSubida').html(respuesta.resultado);
		$('#divtblResultadoSubida').show();
	}
}

function eliminar_conf_empleado(url,obj,esBoton) {
  let tablaConf = $('#tblConfigurarEmpleados').DataTable(),
	 		row = $(obj).parents('tr');

	if ($(row).hasClass('child')) {
		tablaConf.row($(row).prev('tr')).remove().draw();
	}
	else {
		tablaConf
			.row($(obj).parents('tr'))
			.remove()
			.draw();
	}
}

function configurar_empleado(url,data,esBoton) {
	data = $(data).data('json');
	let credencial = data.Credencial;
	cargamodalGenerica('<?= base_url() ?>configuraciones/empleado', '#modContenido', '#modGeneral', {credencial:credencial}, "Configuración de Percepciones y Deducciones", 1, true);
	return false;
}

function calcular_empleado(url,data,esBoton) {
	data = $(data).data('json');
	let idEmpleado = data.idEmpleado,
			idPeriodoPago = data.idPeriodoPago,
			credencial = data.Credencial;
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
         Carga_Metodo("<?=base_url();?>nomina/calcula_nomina_empleado", {idEmpleado:idEmpleado,idPeriodoPago:idPeriodoPago}, "","Calculando para el empleado "+credencial+"...");
        });
      }
    });

  return false;
}

function configura_empleado_error(url,data,esBoton) {
	data = $(data).data('json');
	$('#chkGravado').prop("disabled",false);
	let variables = $('#frmGuardaConfiguracionEmpleado').serialize(),
			idEmpleado = data.idEmpleado,
			credencial = data.Credencial,
			monto = data.Monto;
	$('#chkGravado').prop("disabled",true);
	if (typeof(idEmpleado) == "undefined" || idEmpleado === "" || idEmpleado == 0) {
    alerta_emergente("Ocurrió un error al obtener la información del empleado. Por favor intente de nuevo más tarde.","warning")
    return false;
  }
	if (typeof(monto) == "undefined" || monto === "" || monto == 0) {
		alerta_emergente("El monto debe ser mayor a cero.","warning")
		return false;
	}
	swal.fire({
		 title: "Alerta",
		 html: "Se realizará la configuración para el empleado.",
		 input: 'textarea',
		 inputLabel: "Escribe el motivo para aceptar el proceso:",
		 inputPlaceholder:'Motivo para realizar la configuración.',
		 validationMessage:'Debes escribir un motivo para guardar la configuración.',
		 inputValue: '',
		 inputAttributes: {
			 'id' : 'txtMotivoGuardado',
			 'name' : 'txtMotivoGuardado',
		 },
		 inputValidator: function(value) {
			if (value === '') {
				return "Debes escribir un motivo para guardar la configuración.";
			}
		 },
		 icon: "info",
		 confirmButtonText: "Aceptar",
		 cancelButtonText: "Cancelar",
		 showCancelButton: true,
		 showLoaderOnConfirm: true,
		 allowOutsideClick: false,
		 preConfirm: function () {
			 return new Promise(function(resolve) {
				 let motivo = $('textarea[name="txtMotivoGuardado"]').val();
				 Carga_Metodo("<?=base_url();?>configuraciones/guarda_configuracion_empleado_motivo",variables+'&motivo='+motivo+'&idEmpleado='+idEmpleado+'&credencial='+credencial+'&monto='+monto,"", "Procesando...");
			});
		 }
	});
}

$("#cf_concepto").change(function(e) {
	let selectedItem = $(this).val();
			gravado = $('option:selected',this).data("antesdeimp"),
			tieneparteexe = $('option:selected',this).data("tieneparteexcenta"),
			parteexe = $('option:selected',this).data("diassalminparteexc");
	$('#chkGravado').prop("checked",(gravado == 1 ? true : false));
	$('#chkGravado').val((gravado == 1 ? 1 : 0));
	$('#cf_parteexe').val(parteexe);
	$('#chkParteExe').prop("checked",(tieneparteexe == 1 ? true : false));
	$('#chkParteExe').val((tieneparteexe == 1 ? 1 : 0));
	CambiaParteExenta((tieneparteexe == 1 ? true : false));
});

function CambiaEstadoPermanente(checked){
	if (checked == true) { $("#cf_vecesaplicar").val(0); }
	else { $("#cf_vecesaplicar").val(1); }
}

function CambiaParteExenta(checked) {
	if (checked == true) { $("#cf_parteexe").prop("disabled", false); }
	else {
		$("#cf_parteexe").prop("disabled", true).val('');
	}
}

function CambiaVecesAplicar(obj) {
	let valor = $(obj).val();
	if (valor > 0) { $('#chkPermanente').prop('checked', false); }
}

function PostBackFrmConsultaEmpleadosConf(f,e) {
	e.preventDefault();
	let variables = $(f).serialize();
	Carga_Metodo(f.action,
							 variables,
							 function finalizaProceso(data){
								 if (data.status == false) {
									 $('#cardtblCategoriasPagos').hide();
									 $('#result_categorias_pagos').hide();
									 alerta_emergente(data.message, "warning");
								 }
								 else {
									 $('#cardtblCategoriasPagos').show();
									 $('#result_categorias_pagos').show();
									 $('#result_categorias_pagos').html(data.html);
								 }
							 },
							 "Consultando...");
}

</script>
