<style media="screen">
	.note-editing-area{
		cursor: text;
	}
</style>

<h1 class="page-header">Enviar Correos <small>envío masivo de correo electrónico.</small></h1>
<div class="card border-0">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" data-bs-toggle="tab" href="#card-envio" data-item="envio">Envío</a>
      </li>
			<li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#card-historial" data-item="historial">Historial</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <div class="tab-content p-0 m-0">
      <div class="tab-pane fade active show" id="card-envio">
				<?php
				$attributes = array("id" => "frmEnvioMasivoEmail", "name" => "frmEnvioMasivoEmail", "onsubmit" => "return EnvioMasivoEmail(this, event);");
				echo form_open("administracion/envio_correo_masivo", $attributes);
				?>
				<div class="card mb-2">
					<div class="card-body">
				    <div id="cm_errores" class="alert alert-danger" style="display:none;"></div>
						<div class="row">
							<div class="col-4">
								<div class="form-group">
									<label for="quincena" class="form-label">Quincena</label>
									<select class="form-control form-control-sm select2-sm" id="quincena" name="quincena">
										<?= $quincenas; ?>
									</select>
								</div>
							</div>
							<div class="col-4">
								<div class="form-group">
									<label for="histCorreo" class="form-label">Correo Electrónico</label>
									<select class="form-control form-control-sm select2-sm" id="histCorreo" name="histCorreo">
										<option value="0" selected>Nuevo Correo</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-4">
								<div class="form-group">
									<label for="asunto" class="form-label">Remitente</label>
									<input type="text" class="form-control form-control-sm" name="remitente" id="remitente" value="<?= LimpiaCadena($this->session->Nombre); ?>" autocomplete="off" placeholder="Escriba el remitente del correo electrónico">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<label for="asunto" class="form-label">Asunto</label>
									<input type="text" class="form-control form-control-sm" name="asunto" id="asunto" value="" autocomplete="off" placeholder="Escriba el asunto del correo electrónico">
								</div>
							</div>
						</div>
						<div class="row">
						  <div class="col-12">
						    <div class="form-group">
						      <label for="mensaje" class="form-label">Mensaje</label>
									<textarea id="mensaje" name="mensaje" class="summernote"></textarea>
									<!-- <div id="summernote"></div> -->
						    </div>
						  </div>
						</div>

						<div class="row mt-2 controles">
							<div class="form-group entrada mb-2">
								<input name="adjunto[]" type="file" class="file" style="visibility:hidden;position:absolute;" onchange="checkFile(this);">
								<div class="input-group">
									<span class="input-group-btn">
										<button class="browse btn btn-sm btn-white btn-adjuntar" type="button"><i class="fa fa-fw fa-paperclip"></i> Adjuntar...</button>
									</span>
									<input type="text" class="form-control form-control-sm txt-File" name="txtAdjunto[]" disabled placeholder="Seleccionar archivo...">
									<span class="input-group-btn">
										<button class="browse btn btn-sm btn-outline-secondary btn-add" type="button" title="Agregar nuevo archivo adjunto"><i class="fa-solid fa-plus"></i></button>
									</span>
								</div>
							</div>
						</div>

					</div>
					<!-- <div class="card-footer text-end">
						<button class="btn btn-success btn-sm"><i class="fa-solid fa-fw fa-envelopes-bulk"></i> Enviar</button>
					</div> -->
				</div>
				<?php
				echo form_close();
				?>

				<div class="card">
					<div class="card-body">
						<div id="tblResult">

						</div>
					</div>
				</div>

				<div id="listado_agrupado"></div>
			</div>
			<div class="tab-pane fade" id="card-historial">
				<!-- <div class="row mb-2">

				</div> -->
				<div class="card mb-2">
					<div class="card-body">
						<div class="col-4">
							<div class="form-group">
								<label for="histQuincena" class="form-label">Quincena</label>
								<select class="form-control form-control-sm select2-sm" id="histQuincena" name="histQuincena">
									<?= $quincenas; ?>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<div id="tblHistEnvioCorreo">

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	setTimeout(function FuncionesIniciales(){
		$("#quincena, #histCorreo, #histQuincena").select2({
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

		$(".summernote").summernote({
			placeholder: 'Escriba el contenido del correo electrónico',
			lang: 'es-ES',
			tabsize: 2,
			height: 100,
			toolbar: [
			  ['style', ['style']],
			  ['font', ['bold', 'italic', 'underline', 'clear']],
				['fuente', ['fontname','fontsize','color']],
			  ['para', ['ul', 'ol', 'paragraph']],
				['height', ['height']],
			  ['insert', ['link', 'picture', 'video']],
			  ['view', ['undo', 'redo','fullscreen', 'help']],
			],
		});

		carga_empleados_envio();
	});

	$('.nav-tabs a').on('shown.bs.tab', function(event){
	  let x = $(event.target).data('item'),         // active tab
	      y = $(event.relatedTarget).data('item');  // previous tab
	  switch (x) {
	    case 'historial':
	      carga_historial_envios();
	      break;
	    default:
	      break;
	  }
	});

	$(function()
	{
		$(document).off("click", ".btn-add");
		$(document).off("click", ".btn-remove");
		$(document).off("click", ".btn-adjuntar");
		$(document).off("click", "#btnEnvioMasivo");
		$(document).on('click', '.btn-add', function(e){
			e.preventDefault();
			let controlForm = $('.controles:first'),
					currentEntry = $(this).parents('.entrada:first'),
					newEntry = $(currentEntry.clone()).appendTo(controlForm);
			newEntry.find('input').val('');
			controlForm.find('.entrada:last .btn-add')
					.removeClass('btn-add').addClass('btn-remove')
					.attr('title',"Eliminar archivo adjunto")
					.html('<i class="fa-solid fa-minus"></i>');
			}).on('click', '.btn-remove', function(e){
				e.preventDefault();
				$(this).closest(".entrada").remove();
			}).on('click','.btn-adjuntar',function(e){
				e.preventDefault();
				let actual = $(this).parents('.entrada:first');
				$(actual).find('.file').trigger('click');
			});

			$(document).on("click", "#btnEnvioMasivo", function(e){
		  	$("#frmEnvioMasivoEmail").trigger('submit');
			});
	});

	function checkFile(sender) {
		let filename = sender.value.split('\\').pop(),
				actual = $(sender).parents('.entrada:first');
		$(actual).find(".txt-File").val(filename.replace(/C:\\fakepath\\/i, ''));;
		return true;
	}

	$("#quincena").on("change", function (e) {
		carga_empleados_envio();
	});

	$("#histCorreo").depdrop({
		language: 'es',
		depends: ['quincena'],
		initialize: true,
    initDepends: ['quincena'],
    url: '<?= base_url() ?>generico/historial_correos_electronicos'
	});

	$("#histCorreo").on("change", function (e) {
		let idCorreoElectronico = $("#histCorreo option:selected").val();
		$("#asunto").val('');
		$('#mensaje').summernote('code', '');
		if (idCorreoElectronico > 0) {
			$.post("<?=base_url();?>administracion/obtener_correo_electronico", {idCorreoElectronico:idCorreoElectronico}, function (data) {
				if (data.status == false) {
					alerta_emergente(data.message,"warning");
				}
				else {
					$("#asunto").val(data.asunto);
					$('#mensaje').summernote('code', data.mensaje);
				}
			},"json");
		}
		return false;
	});

	function carga_empleados_envio() {
		let quincena = $('#quincena').val();

	  if (typeof(quincena) == "undefined" || quincena === "" || quincena == 0) {
	    alerta_emergente("Ocurrió un error al obtener la información del período de pago. Por favor intente de nuevo más tarde.","warning")
	    return false;
	  }

	  Carga_Metodo("<?=base_url();?>administracion/obtener_empleados_envio_correo_electronico", {quincena:quincena}, function finalizaCarga(data){
			if (data.status == false) { alerta_emergente(data.message, "warning"); }
			else {
				$('#tblResult').html(data.html);
				$('#listado_agrupado').html(data.html_empleados);
			}
		}, "Cargando...");
	  return false;
	}

	function carga_historial_envios() {
		let quincena = $('#histQuincena').val();
		if (typeof(quincena) == "undefined" || quincena === "" || quincena == 0) {
			alerta_emergente("Ocurrió un error al obtener la información del período de pago. Por favor intente de nuevo más tarde.","warning")
			return false;
		}

		Carga_Metodo("<?=base_url();?>administracion/obtener_historial_envio_correo_electronico", {quincena:quincena}, function finalizaCarga(data){
			if (data.status == false) { alerta_emergente(data.message, "warning"); }
			else { $('#tblHistEnvioCorreo').html(data.html); }
		}, "Cargando...");
		return false;
	}

	function EnvioMasivoEmail(f,e) {
	  e.preventDefault();
		if (valida_formulario_correo_electronico()) {
			let tablaEmpl = $('#tblCorreoMasivo').DataTable();

			if (!tablaEmpl.rows('.selected').any()) {
				alerta_emergente('Debe seleccionar un empleado para enviar el correo electrónico.','warning');
				return false;
			}
			let variables = $(f).serializeArray(),
		      formData = new FormData(),
					empleados = tablaEmpl.rows({selected: true}).data().toArray(),
					archivos = $(".file");

			$.each(archivos, function(i,archivo){
				if (archivo.files.length > 0) {
					$.each(archivo.files, function(k,file){
						formData.append('adjuntos[]', file);
					});
				}
			});
		  $(variables).each(function(index, obj){
		    formData.append(obj.name,obj.value);
		  });
			formData.append("empleados",JSON.stringify(empleados));

			swal.fire({
				 title: "Alerta",
				 html: "¿Confirma que desea enviar el correo electrónico a "+tablaEmpl.rows({selected: true}).indexes().length+" empleado(s)?",
				 icon: "question",
				 showCancelButton: true,
				 showLoaderOnConfirm: true,
				 allowOutsideClick: false,
				 preConfirm: function () {
					 return new Promise(function(resolve) {
						 Carga_Metodo(f.action,formData,exito_envio_correo,"Procesando...",true);
					});
				 }
			});
		}
		return false;
	}

	function enviar_correo_electronico(url,obj,esBoton) {
		if (valida_formulario_correo_electronico()) {
			let tabla = $('#tblCorreoMasivo').DataTable(),
					datos = tabla.row( $(obj).parents('tr') ).data(),
					formData = new FormData(),
					variables = $('#frmEnvioMasivoEmail').serializeArray(),
					correo = datos.Exper,
					idEmpleado = datos.Id_Empleado,
					archivos = $(".file");
			$.each(archivos, function(i,archivo){
				if (archivo.files.length > 0) {
					$.each(archivo.files, function(k,file){
						formData.append('adjuntos[]', file);
					});
				}
			});

			$(variables).each(function(index, obj){
				formData.append(obj.name,obj.value);
			});

			if (typeof(correo) == "undefined" || correo == "" || correo == null) {
				alerta_emergente("Error al obtener el correo electrónico del empleado.","warning");
				return false;
			}

			swal.fire({
				 title: "Alerta",
				 html: "Se enviará el correo electrónico a la siguiente dirección:",
				 input: 'email',
				 inputPlaceholder:'Escriba el Correo Electrónico receptor',
				 validationMessage:'Debe escribir un correo electrónico válido.',
				 inputValue: correo,
				 inputAttributes: {
					 'id' : 'txtreceptorCorreo',
					 'name' : 'txtreceptorCorreo',
				 },
				 inputValidator: function(value) {
					if (value === '') {
						return "Debes escribir un correo electrónico válido.";
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
						 correo = $('#txtreceptorCorreo').val();
			 			 formData.append("correo",correo);
						 formData.append("idEmpleado",idEmpleado);
						 Carga_Metodo("<?=base_url();?>administracion/envio_correo_individual",formData,exito_envio_correo,"Procesando...",true);
					});
				 }
			});
		}
		return false;
	}

	function exito_envio_correo(respuesta) {
		if (respuesta.status == false) {
			let error = (typeof(respuesta.errores) == "" ? respuesta.message : respuesta.errores);
			$('div#cm_errores').html(error).fadeIn('slow');
			alerta_emergente(respuesta.message, "warning");
		}
		else {
			if (respuesta.error == true) {
				alerta_emergente(respuesta.message,"warning");
				$('div#cm_errores').html(respuesta.message);
			}
			else {
				alerta_emergente(respuesta.message,"success");
				$('div#cm_errores').hide();
			}
		}
		$('#histCorreo').depdrop('init');
		$("#asunto").val('');
		$('#mensaje').summernote('code', '');
		carga_empleados_envio();
		return false;
	}

	function exito_envio_correo_agrupado(respuesta) {
		if (respuesta.status == false) {
			let error = (typeof(respuesta.errores) == "undefined" ? respuesta.message : respuesta.errores);
			$('div#cm_errores').html(error).fadeIn('slow');
			alerta_emergente(respuesta.message, "warning");
		}
		else {
			if (respuesta.error == true) {
				alerta_emergente(respuesta.message,"warning");
				$('div#cm_errores').html(respuesta.message);
			}
			else {
				alerta_emergente(respuesta.message,"success");
				$('div#cm_errores').hide();
			}
		}
		$('#histCorreo').depdrop('init');
		$("#asunto").val('');
		$('#mensaje').summernote('code', '');
		carga_empleados_envio();
		return false;
	}

	function valida_formulario_correo_electronico() {
		let quincena = $("#quincena").val(),
				asunto = $("#asunto").val(),
				mensaje = $("#mensaje").val();

		if (typeof(quincena) == "undefined" || quincena == "" || quincena == null || quincena == 0) {
			alerta_emergente("Debe seleccionar una quincena válida.","warning");
			return false;
		}

		if (typeof(asunto) == "undefined" || asunto == "" || asunto == null) {
			alerta_emergente("Debe escribir un asunto para el correo electrónico.","warning");
			return false;
		}

		if (typeof(mensaje) == "undefined" || mensaje == "" || mensaje == null) {
			alerta_emergente("Debe escribir un mensaje para el correo electrónico.","warning");
			return false;
		}
		return true;
	}

	async function editar_correo_electronico(url,obj,esBoton) {
		let tabla = $('#tblCorreoMasivo').DataTable(),
				datos = tabla.row($(obj).parents('tr')).data(),
				correo = datos.Exper;
				rowIdx = tabla.row($(obj).parents('tr')).index();
		const { value: email } = await swal.fire({
		  title: 'Modificar Correo Electrónico',
		  input: 'email',
		  inputValue: correo,
		  inputLabel: 'Correo Electrónico',
		  inputPlaceholder: 'Escriba el correo electrónico',
			validationMessage:'Debe escribir un correo electrónico válido.',
  		confirmButtonText: "Guardar",
	    cancelButtonText: "Cancelar",
			showCancelButton: true,
			allowOutsideClick: false,
		})

		if (email) {
			tabla.cell(rowIdx,5).data(email).draw(false);
		}
		else {
			alerta_emergente("No se modificó el correo electrónico","warning");
		}
		return false;
	}
</script>
