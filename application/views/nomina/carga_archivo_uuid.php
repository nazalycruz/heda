<div class="d-flex justify-content-between">
  <h1 class="page-header">UUID <small>cargar registros UUID</small></h1>
	<div><h4><a href="<?= base_url(); ?>assets/manuales/UUID.pdf" target="_blank" title="Abrir archivo de ayuda" class="text-black-900"><i class="fa-regular fa-circle-question"></i></a></h4></div>
</div>

<div class="card border-0">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" data-bs-toggle="tab" href="#card-cargar" data-item="cargar">Cargar Archivo</a>
      </li>
			<li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#card-historial" data-item="historial">Historial</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <div class="tab-content p-0 m-0">
      <div class="tab-pane fade active show" id="card-cargar">
				<div class="card mb-2">
					<?php
					$attributes = array("id" => "frmCargaArchivoUUID", "name" => "frmCargaArchivoUUID", "onsubmit" => "return CargaArchivoUUID(this, event);");
					echo form_open("configuraciones/leeArchivoUUID", $attributes);
					?>
				  <div class="card-body">
				    <div class="row mb-2">
				      <div class="col-4">
				        <div class="form-group">
				          <label for="confXLSUUID" class="form-label">Archivo UUID</label>
				          <input id="confXLSUUID" name="confXLSUUID" type="file" accept=".xls, .xlsx, .csv" class="file" style="visibility:hidden;position:absolute;" onchange="checkFile(this);">
				          <div class="input-group">
				            <input type="text" class="form-control form-control-sm" id="confXLSUUIDtext" name="confXLSUUIDtext" disabled placeholder="Seleccionar archivo...">
				            <span class="input-group-btn">
				              <button class="browse btn btn-sm btn-outline-secondary" type="button" onclick="examinar_archivo();"><i class="far fa-file-excel"></i> Examinar...</button>
				            </span>
				          </div>
				        </div>
				      </div>

							<div class="col">
				        <div class="form-group">
				          <label class="form-label">&nbsp;</label>
				          <div>
										<button type="submit" class="btn btn-inverse btn-sm" title="Vista previa" id="btnVistaPreviaXLS" name="btnVistaPreviaXLS">
											<i class="fas fa-search"></i> Vista Previa
										</button>
										<button type="button" class="btn btn-inverse btn-sm" title="Subir" id="btnSubirUUID" name="btnSubirUUID" onclick="guardar_archivo_UUID();" style="display:none;">
											 <i class="fa-solid fa-upload"></i> Subir
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

				<div class="card mb-2 mt-2" id="divtblResultadoSubidaUUID" style="display:none;">
					<div id="conf_erroresUUID" class="alert alert-danger fw-bold" style="display:none;"></div>
				  <div id="resultSubidaUUID" class="card-body">

				  </div>
				</div>
			</div>

			<div class="tab-pane fade" id="card-historial">

				<div class="card mb-2">
					<?php
					$attributes = array("id" => "frmConsultaHistorialUUID", "name" => "frmConsultaHistorialUUID", "onsubmit" => "return PostBackFrmConsultaHistorialUUID(this, event);");
					echo form_open("configuraciones/historial_uuid", $attributes);
					?>
					<div class="card-body">
						<div class="row">
							<div class="col">
								<div class="form-group">
									<label for="quincena" class="form-label">Quincena</label>
									<select class="form-control form-control-sm select2-sm UUID_catalogos" id="quincena" name="quincena" required>
										<option value=""></option>
										<?= $quincenas; ?>
									</select>
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<label for="idTipoNomina" class="form-label">Tipo de Nómina</label>
									<select class="form-control form-control-sm select2-sm UUID_catalogos" id="idTipoNomina" name="idTipoNomina" required>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer text-end">
						<button class="btn btn-sm btn-inverse text-end" id="btnConsultaHistorialUUID"><i class="fas fa-search"></i> Consultar</button>
					</div>
					<?php
					echo form_close();
					?>
				</div>

				<div class="card" id="card-result-historial" style="display:none;">
					<div class="card-body">
						<div id="tblhistorialUUID">

						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$(".UUID_catalogos").select2({
			language: "es",
			placeholder: "Seleccione un Elemento",
			width:'100%',
		}).on("select2:close", function (event) {
				setTimeout(function() {
					$('.select2-container-active').removeClass('select2-container-active');
					$(':focus').blur();
				}, 1);
		});

		$("#idTipoNomina").depdrop({
			language: 'es',
			depends: ['quincena'],
			initialize: true,
			initDepends: ['quincena'],
			url: 'generico/nominas_abiertas_porPeriodo'
		});

	});

	function examinar_archivo() {
	  $("#confXLSUUID").trigger('click');
	}

	function checkFile(sender) {
		var fileExt = sender.value,
				validExts = new Array(".xlsx", ".XLSX"),
				fileSize = (sender.files[0].size)/1024;

		if (fileSize > 20480) {
			alerta_emergente("El archivo no puede medir más de 20mb", 'warning');
			$(sender).val("");
			return false;
		}
		fileExt = fileExt.substring(fileExt.lastIndexOf('.'));
		if (validExts.indexOf(fileExt) < 0 && fileExt != "") {
			alerta_emergente("Formato de archivo seleccionado no permitido, los archivos aceptados son de tipo: " + validExts.toString(), 'warning');
			$(sender).val("");
			return false;
		}
		else {
			var filename = sender.value.split('\\').pop();
			$("#confXLSUUIDtext").val(filename.replace(/C:\\fakepath\\/i, ''));
			return true;
		}
	}

	function CargaArchivoUUID(f,e) {
	  e.preventDefault();
		let variables = $(f).serializeArray(),
	      formData = new FormData();

	  formData.append('archConf', $('#confXLSUUID')[0].files[0]);
	  $(variables).each(function(index, obj) {
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
					$('#resultVistaPrevia, #resultSubidaUUID').empty();
					$('#divtblResult, #divFormConceptos, #divtblResultadoSubidaUUID, #btnSubirUUID').hide();
	      }
	      else {
	        let tablaUUID = $('#tblCargaUUID').DataTable();
	        if (tablaUUID.data().any()) { tablaUUID.clear().draw(); }
	        $('#resultVistaPrevia').html(data.html);
					$('#resultSubidaUUID').empty();
					$('#divtblResult, #btnSubirUUID').show();
					$('#divtblResultadoSubidaUUID').hide();
	      }
	    },
	    error: function(error) {
				$('#resultVistaPrevia, #resultSubidaUUID').empty();
				$('#divtblResult, #divFormConceptos, #divtblResultadoSubidaUUID, #btnSubirUUID').hide();
				alerta_emergente("Ocurrió un error al intentar cargar el archivo, intente de nuevo más tarde.", "error");
			},
			complete: function( jqXHR, Status) {
				hideLoading();
			}
	  });
	}

	function guardar_archivo_UUID() {
	  let tablaUUID = $('#tblCargaUUID').DataTable();
	  if (!tablaUUID.data().any()) {
	    alerta_emergente('Debe cargar un archivo para poder leer la información.','warning');
	    return false;
	  }
	  let registros = tablaUUID.rows().data().toArray();
	  swal.fire({
	     title: "Alerta",
	     html: "¿Confirma que desea guardar los registros?",
	     icon: "question",
	     showCancelButton: true,
	     showLoaderOnConfirm: true,
	     allowOutsideClick: false,
	     preConfirm: function () {
	       return new Promise(function(resolve) {
	         Carga_Metodo('configuraciones/guardar_info_uuid',
	                       "registros="+JSON.stringify(registros),
												 function exito_guarda_configuracion(respuesta) {
													 	$('div#conf_erroresUUID').hide();
													 	if (respuesta.status == false) {
													 		alerta_emergente(respuesta.message,"warning");
													 	}
													 	else {
													 		if (respuesta.errores == 0) { alerta_emergente(respuesta.message,"success"); }
													 		else {
													 			$('div#conf_erroresUUID').html(respuesta.message).fadeIn('slow');
													 			alerta_emergente(respuesta.message,"warning");
													 		}
													 		$('#resultSubidaUUID').html(respuesta.vista);
													 		$('#divtblResultadoSubidaUUID').show();
													 	}
												 },
	                       "Procesando...");
	      });
	     }
	  });
	  return false;
	}

	function PostBackFrmConsultaHistorialUUID(f,e) {
		e.preventDefault();
		let variables = $(f).serialize();
		$('#tblhistorialUUID').empty();
		$('#card-result-historial').hide();
		Carga_Metodo(f.action,
								 variables,
								 function finalizaProceso(data){
									 if (data.status == false) { alerta_emergente(data.message, "warning"); }
									 else {
										 $('#card-result-historial').show();
										 $('#tblhistorialUUID').html(data.html);
									 }
								 },
								 "Cargando...");
		return false;
	}

</script>
