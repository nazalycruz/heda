<?php ;//<<<RPERAZA(2019.08.19): CASU 1109/2019?>
			<div id="divCapturarEscuela" class="">
				<form method="post" action="" id="frmCapturarEscuela" onsubmit="return false;">
					<div class="modal-header pt-2 pb-2">
					  <h4 class="modal-title"><b><span id="lblOperacion"><?=$operacion;?></span> escuela</b></h4>
					  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>

					<div class="card-body">
						<input type="hidden" id="EscuelaId_esc" name="EscuelaId_esc" value="<?php echo $escuela->EscuelaId;?>">
						<input type="hidden" id="MunicipioTmp_esc" value="<?php echo $escuela->Municipio;?>">
						<input type="hidden" id="ColoniaTmp_esc" value="<?php echo $escuela->Colonia;?>">
						<div class="row mb-2">
							<div class="col-sm-6">
							    <div class="form-group">
							        <label for="Nombre_esc"><b>Nombre:</b></label>
							        <input type="text" class="form-control" name="Nombre_esc" id="Nombre_esc" value="<?php echo $escuela->Nombre ?>" style="text-transform:uppercase;"  />
							    </div>
							</div>

							<div class="col-sm-6">
							    <div class="form-group">
							        <label for="RazonSocial_esc"><b>Razón Social:</b></label>
							        <input type="text" class="form-control" name="RazonSocial_esc" id="RazonSocial_esc" value="<?php echo $escuela->RazonSocial ?>" style="text-transform:uppercase;"  />
							    </div>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col-sm-4">
							    <div class="form-group">
							        <label for="RFC_esc"><b>RFC:</b></label>
							        <input type="text" class="form-control" name="RFC_esc" id="RFC_esc" value="<?php echo $escuela->RFC ?>" style="text-transform:uppercase;"  />
							    </div>
							</div>

							<div class="col-sm-2">
							    <div class="form-group">
							        <label for="Calle_esc"><b>Calle:</b></label>
							        <input type="text" class="form-control" name="Calle_esc" id="Calle_esc" value="<?php echo $escuela->Calle ?>" style="text-transform:uppercase;"  />
							    </div>
							</div>

							<div class="col-sm-2">
							    <div class="form-group">
							        <label for="Numero_esc"><b>Número:</b></label>
							        <input type="text" class="form-control" name="Numero_esc" id="Numero_esc" value="<?php echo $escuela->Numero ?>" style="text-transform:uppercase;"  />
							    </div>
							</div>

							<div class="col-sm-4">
							    <div class="form-group">
							        <label for="Telefono_esc"><b>Teléfono:</b></label>
							        <input type="text" class="form-control" name="Telefono_esc" id="Telefono_esc" value="<?php echo $escuela->Telefono ?>" style="text-transform:uppercase;"  />
							    </div>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col-sm-4">
							    <div class="form-group">
							        <label for="Estado_esc"><b>Estado:</b></label>
							        <select id="Estado_esc" name="Estado_esc" class="form-control" >
										<?php echo $estados ?>
									</select>
							    </div>
							</div>

							<div class="col-sm-4">
							    <div class="form-group">
							        <label for="Municipio_esc"><b>Municipio:</b></label>
							        <select id="Municipio_esc" name="Municipio_esc" class="form-control" >
									</select>
							    </div>
							</div>

							<div class="col-sm-4">
							    <div class="form-group">
							        <label for="Colonia_esc"><b>Colonia:</b></label>
							        <select id="Colonia_esc" name="Colonia_esc" class="form-control" >
									</select>
							    </div>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col-sm-12">
							    <div class="form-group">
							        <label for="Observaciones_esc"><b>Observaciones:</b></label>
							        <input type="text" class="form-control" name="Observaciones_esc" id="Observaciones_esc" value="<?php echo $escuela->Observaciones ?>" style="text-transform:uppercase;"  />
							    </div>
							</div>

						</div>
					</div>

					<div class="modal-footer pt-2 pb-2">
						<button  type="button" id="btnGuardar_esc" class="btn btn-sm btn-success" onclick="return GuardarEscuela();"><i class="fa fa-save"></i> Guardar</button>
						<button type="button" class="btn btn-sm btn-default" data-bs-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
					</div>
				</form>
			</div>

<script type="text/javascript">

	setTimeout(function InicializarControles(){
		$("#Estado_esc").select2({ language: "es", width:'100%', dropdownParent: $('#pnlModal .modal-content') });
		$("#Municipio_esc").select2({ language: "es", width:'100%',dropdownParent: $('#pnlModal .modal-content') });
		$("#Colonia_esc").select2({ language: "es", width:'100%',dropdownParent: $('#pnlModal .modal-content') });
	});

	$("#Municipio_esc").depdrop({
		language: 'es',
		depends: ['Estado_esc'],
		params: ['MunicipioTmp_esc'],
		initialize: true,
		url: '<?= base_url() ?>generico/catalogo_municipios'
	});

	$("#Colonia_esc").depdrop({
		language: 'es',
		depends: ['Municipio_esc'],
		params: ['ColoniaTmp_esc'],
		initDepends: ['Estado_esc'],
		url: '<?= base_url() ?>generico/catalogo_colonias'
	});

	function GuardarEscuela(){ //<<<RPERAZA(2019.08.19): CASU 1109/2019
		if(ValidarDatosEscuela()){
			if(VerificarEscuela($("#Nombre_esc").val())){
				$.ajax({
					url: "<?=base_url();?>catalogos/guardar_escuela",
					type: 'POST',
					async: true,
					dataType: "JSON",
					data: $("#frmCapturarEscuela").serialize(),
					error: function(XMLHttpRequest, errMsg, exception){
						var msg = "jQuery message: "+errMsg+" XMLHttpRequest: "+StatusMsg(XMLHttpRequest.status);
						alerta_emergente(msg, 'error');
					},
					success: function(data){
						if(data.status == false) {
							alerta_emergente(data.mensaje,"error");
						}
						else{
							$("#EscuelaId_esc").val(data.datos);
							$("#lblOperacion").text('Modificar')
							alerta_emergente(data.mensaje,"success");
							CargarEscuelas();
						}
					}
				});
			}
		}

		return false;
 	}

	function VerificarEscuela(Nombre){ //<<<RPERAZA(2019.08.19): CASU 1109/2019
		var resultado = false;
		$.ajax({
			url: "<?=base_url();?>catalogos/verificar_existe_escuela",
			type: 'POST',
			async: false,
			dataType: "JSON",
			data: 'Nombre='+Nombre,
			error: function(XMLHttpRequest, errMsg, exception){
				var msg = "jQuery message: "+errMsg+" XMLHttpRequest: "+StatusMsg(XMLHttpRequest.status);
				alerta_emergente(msg, 'error');
			},
			success: function(data){
				if(data.status == false) {
					alerta_emergente(data.mensaje,"error");
				}
				else{
					if(data.datos == 1) {
						alerta_emergente("Ya existe una escuela con el nombre: <b>" + Nombre + "</b>.","warning");
					}
					else {
						resultado = true;
					}
				}
			}
		});

		return resultado;
 	}

	function ValidarDatosEscuela(){ //<<<RPERAZA(2019.08.20): CASU 1109/2019
		var resultado = true;

		if (resultado == true && $('#Nombre_esc').val().trim() == ''){
		    resultado = false;
		    $('#Nombre_esc').focus();
		    alerta_emergente('Se requiere el <b>Nombre</b>.', 'warning');
		}

		return resultado;
	}

</script>
