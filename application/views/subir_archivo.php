		<?php
		$attributes = array("id" => "frmArchivosAc", "name" => "frmArchivosAc", "onsubmit" => "return PostBackFrmArchivosAc(this, event);");
		echo form_open("inicio/guardar_archivo", $attributes);?>
			<input type="hidden" id="ruta_archivo" name="ruta_archivo" value="<?php echo $ruta_archivo;?>">
			<input type="hidden" id="nombre_archivo" name="nombre_archivo" value="<?php echo $nombre_archivo;?>">
			<input type="hidden" id="IdPrimarioImagen" name="IdPrimarioImagen" value="<?php echo $IdPrimario;?>">
			<input type="hidden" id="EstadoDatosImagen" name="EstadoDatosImagen" value="<?php echo $estado_datos;?>"><?php ;//RPERAZA(2018.07.11?>
			<!--econove(2018.07.09) se agrega el campo oculto ClaveSeccionImagen-->
			<input type="hidden" id="ClaveSeccionImagen" name="ClaveSeccionImagen" value="<?php echo $ClaveSeccionImagen;?>">
			<div id="divEnviarDocumento" class="panel panel-inverse">
				<div class="panel-heading">
					<h4 class="panel-title"><b>Administrar imágenes</b></h4>
				</div>
				<div class="panel-body"><?php
					if( ($estado_datos < 3  && $estado_datos != 0) | verificar_permiso('WFBEM') == 3 ){?>
						<div class="row" id="muestra-arch">
							<div class="col-md-8">
								<div class="form-group">
									<p id="msg"></p>
									<label class="btn btn-default btn-file">
										Seleccionar Archivo...
										<input type="file" id="file" name="file" style="display: none;"
											accept="image/jpeg"
											onchange="checkFile(this);" data-parsley-required="true">
									</label>
									<button id="upload" class="btn btn-success"><i class="fa fa-upload"></i> Subir</button>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<label for="titulo">Tipo de documento:</label>
									<!--<input type="text" id="titulo" name="titulo" class="form-control" autocomplete="off" maxlength="255" style="text-transform:uppercase;">-->
									<select class="form-control" id="titulo" name="titulo" >
										<option value="0">SELECCIONE UNA OPCIÓN</option>
										<?php echo LimpiaCadena($tipos_docto);?>
			                        </select>
								</div>
							</div>
						</div><?php
					}?>


					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<table id="tblPacientes" class="table table-bordered table-striped table-condensed">
									<thead>
										<tr>
											<th>Imágenes existentes</th>
										</tr>
									</thead>
									<tbody>
										<div id="divListaImagenes">
										</div>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>

				<div class="panel-footer text-end">
					<button type="button" id="btnCerrar" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
				</div>
			</div><?php
		echo form_close();?>


<script type="text/javascript">

	setTimeout(function InicializarControles(){
		$('#frmArchivosAc').parsley();
		$("#divListaImagenes").hide();
		CargaImagenes();
	}, 0);

	<?php
	if( $estado_datos < 3 | verificar_permiso('WFBEM') == 3 ){?>
		function PostBackFrmArchivosAc(f, e){
		    e.preventDefault();

		    $('#frmArchivosAc').parsley().validate();
		    if (!$('#frmArchivosAc').parsley().isValid()){
		      return;
		    }

			var variables = $(f).serialize();
			var ruta_archivo = $("#ruta_archivo").val();
			var nombre_archivo = $("#nombre_archivo").val();
			var IdPrimario = $("#IdPrimarioImagen").val();
			var titulo = $("#titulo option:selected").html();
			var ClaveSeccionImagen=$("#ClaveSeccionImagen").val();

		    var file_data = $('#file').prop('files')[0];
		    var form_data = new FormData();
		    form_data.append('file', file_data);
		    form_data.append('ruta_archivo', ruta_archivo);
		    form_data.append('IdPrimario', IdPrimario);
		    form_data.append('titulo', titulo);
		    form_data.append('ClaveSeccionImagen', ClaveSeccionImagen);


		    if($("#titulo").val() != 0){
				$.ajax({
					url: f.action,
					dataType: 'json',
					cache: false,
					contentType: false,
					processData: false,
					data: form_data,
					type: 'POST',
				    beforeSend: function() {
						$('#upload').html('<i class="fa fa-circle-o-notch fa-spin fa-fw"></i>Subiendo...');
						$('.btn').prop('disabled',true);
					},
				    success: function (data) {
						$('.btn').prop('disabled',false);
						$('#upload').html('<i class="fa fa-upload"></i> Subir');
						if(data && data.error_message && data.error_message != "") {
							$('#msg').html(data.error_message);
						}
						else {
							$('#msg').html(data.upload_data);
							CargaImagenes()
							alerta_emergente('La imagen se guardó correctamente.', 'success');
						}
						limpiaControles();
				    },
				    error: function (response) {
				        $('#msg').html(response);
				        $('.btn').prop('disabled',false);
				        $('#upload').html('<i class="fa fa-upload"></i> Subir');
				        limpiaControles();
				    }
				});
			}
			else{
				alerta_emergente("Debe seleccionar el <b>Tipo de documento</b> al que corresponde la imagen.","warning");
			}

	 	}<?php
 	}?>


	function limpiaControles(){
		$('#file').wrap('<form>').closest('form').get(0).reset();
		$('#file').unwrap();
		$('#frmArchivosAc').parsley().reset();
		$("#msg").text('');
		$("#titulo").val('');
	}

	function checkFile(sender) {
		var fileExt = sender.value;
		var validExts = new Array(".jpeg", ".jpg", ".png");
		fileExt = fileExt.substring(fileExt.lastIndexOf('.'));
		if (validExts.indexOf(fileExt) < 0 && fileExt != "") {
			//$('#msg').html("Archivo seleccionado no permitido, los archivos aceptados son de tipo: " + validExts.toString());
			alerta_emergente("Archivo seleccionado no permitido, los archivos aceptados son de tipo: " + validExts.toString(),'warning');
			$(sender).val("");
			return false;
		}
		else{
			var filename = sender.value.split('\\').pop();
			$('#msg').html('<strong>Archivo: </strong>'+filename);
			return true;
		}
	}

	<?php
	if( $estado_datos < 3 | verificar_permiso('WFBEM') == 3 ){?>
		function EliminarImagen(IdImagen){
			var DescImagen = $("#DescImagen_"+IdImagen).val();

			if(confirm('¿Confirma que desea eliminar la imagen "' + DescImagen + '"?')){
				$.ajax({
					url: "<?=base_url();?>inicio/eliminar_imagen",
					type: "POST",
					async: false,
					data: 'IdImagen=' + IdImagen,
					error: function(XMLHttpRequest, errMsg, exception){
						var msg = "<p>jQuery message: <i>"+errMsg+"</i><br />XMLHttpRequest: <i>"+StatusMsg(XMLHttpRequest.status)+"</i></p>";
						alerta_emergente(msg, 'error');
					},
					success: function(htmlcode){
						var r = htmlcode.substr(0,1);

						if(r == "1"){
							CargaImagenes();
							alerta_emergente("La imagen se eliminó correctamente.", 'success');
						}
						else{
							alerta_emergente("La imagen no se pudo eliminar.", 'error');
						}
					}
				});
			}
			return false;
		}<?php
	}?>

	function CargaImagenes(){
		var IdPrimario = $("#IdPrimarioImagen").val();
		var ClaveSeccionImagen= $("#ClaveSeccionImagen").val();
		var estado_datos = $("#EstadoDatosImagen").val();

		$.ajax({
			url: "<?=base_url();?>inicio/traer_listado_imagenes",
			type: "POST",
			async: false,
			data: 'IdPrimario=' + IdPrimario+"&ClaveSeccionImagen="+ ClaveSeccionImagen+"&estado_datos="+ estado_datos,
			error: function(XMLHttpRequest, errMsg, exception){
				var msg = "<p>jQuery message: <i>"+errMsg+"</i><br />XMLHttpRequest: <i>"+StatusMsg(XMLHttpRequest.status)+"</i></p>";
				alerta_emergente(msg, 'error');
			},
			success: function(htmlcode){
				var r = htmlcode.substr(0,1);

				switch(r){ //<<<RPERAZA(2018.07.10)
					case "*":
						alerta_emergente("No se pudieron cargar las imágenes existentes.", 'error');
						break;

					case "1":
						$("#tblPacientes tbody").html(htmlcode.substr(1));
						break;
				}
			}
		});
		return false;
	}
</script>
