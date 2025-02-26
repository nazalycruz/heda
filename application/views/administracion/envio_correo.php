<style media="screen">
@media (min-width:992px) {
	.mailbox .mailbox-content {
		max-width:calc(100%) !important;
		border:1px solid var(--app-component-border-color) !important;
	}
}

.note-editing-area{
	cursor: text;
}
</style>

<!-- summernote -->
<link type="text/css" href="<?=auto_version('assets/plugins/summernote/summernote-lite.min.css');?>" rel="stylesheet" />

<!-- summernote -->
<script src="<?=auto_version('assets/plugins/summernote/summernote-lite.min.js');?>" type="text/javascript"></script>
<script src="<?=auto_version('assets/plugins/summernote/lang/summernote-es-ES.min.js');?>" type="text/javascript"></script>

<div class="mailbox">
  <div class="mailbox-content">
    <div class="mailbox-content-header">
      <div class="btn-toolbar align-items-center">
        <!-- <div class="btn-group me-2">
          <a href="javascript:;" class="btn btn-white btn-sm">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="hidden-xs">Send</span>
          </a>
          <a href="javascript:;" class="btn btn-white btn-sm">
            <i class="fa fa-fw fa-paperclip"></i>
            <span class="hidden-xs">Attach</span>
          </a>
        </div> -->
      </div>
    </div>
    <div class="mailbox-content-body">
      <div data-scrollbar="true" data-height="100%" data-skip-mobile="true">
				<?php
				$attributes = array("id" => "frmEnvioCorreoElectronico", "name" => "frmEnvioCorreoElectronico", "onsubmit" => "return EnvioEmail(this, event);", "class" => "mailbox-form");
				echo form_open("envios/correo_electronico", $attributes);
				?>
          <div class="mailbox-to">
            <label class="control-label">Para:</label>
						<input type="email" class="form-control form-control-sm" name="destino" id="destino" value="">
          </div>
          <div data-id="extra-cc"></div>
          <div class="mailbox-subject">
            <input type="text" class="form-control" placeholder="Asunto" name="asunto" id="asunto" />
          </div>
          <div class="mailbox-input">
            <textarea class="summernote" id="mensaje" name="mensaje"></textarea>
          </div>
        </form>
      </div>
    </div>
    <div class="mailbox-content-footer d-flex align-items-center justify-content-end">
      <button type="button" class="btn btn-white ps-40px pe-40px me-5px">Cancelar</button>
      <button type="button" class="btn btn-primary ps-40px pe-40px" id="btnEnvioCE" name="btnEnvioCE"><i class="fa fa-fw fa-envelope"></i> Enviar</button>
    </div>
  </div>
</div>

<script type="text/javascript">

var handleEmailContent = function() {
	$(".summernote").summernote({
		placeholder: 'Escribe el contenido del correo electrónico',
		lang: 'es-ES',
		tabsize: 2,
		height: 100,
		dialogsInBody: true,
		toolbar: [
			['style', ['style']],
			['font', ['bold', 'italic', 'underline', 'clear']],
			['fuente', ['fontname','fontsize','color']],
			['para', ['ul', 'ol', 'paragraph']],
			['height', ['height']],
			// ['insert', ['link', 'picture', 'video']],
			['view', ['undo', 'redo','fullscreen', 'help']],
		],
	});
};


var EmailCompose = function () {
	"use strict";
	return {
		//main function
		init: function () {
			handleEmailContent();
		}
	};
}();

$(document).ready(function() {
	EmailCompose.init();
});

$(function()
{
	$(document).off("click", "#btnEnvioCE");
	$(document).on("click", "#btnEnvioCE", function(e){
		$("#frmEnvioCorreoElectronico").trigger('submit');
	});
});

function EnvioEmail(f,e) {
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
					 Carga_Metodo(f.action,formData,exito_envio_correo,"Enviando...",true);
				});
			 }
		});
	}
	return false;
}

function exito_envio_correo(respuesta) {
	if (respuesta.status == false) {
		alerta_emergente(respuesta.message, "warning");
	}
	else {
		if (respuesta.error == true) {
			alerta_emergente(respuesta.message,"warning");
		}
		else {
			alerta_emergente(respuesta.message,"success");
		}
	}
	$("#destinatario").val('');
	$("#asunto").val('');
	$('#mensaje').summernote('code', '');
	return false;
}

function valida_formulario_correo_electronico() {
	let	destino = $('#destino').val(),
	 		asunto = $("#asunto").val(),
			mensaje = $("#mensaje").val();

	if (typeof(destino) == "undefined" || destino == "" || destino == null) {
		alerta_emergente("Debe escribir un destinatario para el correo electrónico.","warning");
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

</script>
