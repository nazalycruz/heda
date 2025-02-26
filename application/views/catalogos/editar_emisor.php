<div class="modal-header">
  <h4 class="modal-title" id="TituloModal"></h4>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
	<?php
	$attributes = array("id" => "frmCatEmisores", "name" => "frmCatEmisores", "onsubmit" => "return PostBackFrmGuardaEmisor(this, event);");
	echo form_open("catalogos/abc_cat_emisores", $attributes);
	?>
	<div class="card mb-2">
		<div class="card-body">
			<input type="hidden" id="ce_idEmisor" name="ce_idEmisor" value="<?= (empty($idEmisor) ? 0 : $idEmisor); ?>">
			<div class="row mb-2">
				<div class="col-4">
					<div class="form-group">
						<label for="txtEmisor" class="form-label">Emisor</label>
						<input type="text" class="form-control form-control-sm" id="txtEmisor" name="txtEmisor" autocomplete="off" placeholder="Emisor" value="<?= (empty($emisor) ? "" : $emisor->Emisor); ?>">
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						<label class="form-label">&nbsp;</label>
						<div>
				  		<button class="btn btn-success btn-sm"><i class="far fa-save"></i> Guardar</button>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<?php
	echo form_close();
	?>
	<div class="card card-tbl-conf" style="display:none;">
	  <div class="card-header">
	    <ul class="nav nav-tabs card-header-tabs">
	      <li class="nav-item">
	        <a class="nav-link active" data-bs-toggle="tab" href="#card-conf-emisorTN" data-item="conf-emisorTN">Tipo de Nómina</a>
	      </li>
				<li class="nav-item">
	        <a class="nav-link" data-bs-toggle="tab" href="#card-conf-formatoPago" data-item="conf-formatoPago">Formato de Pago</a>
	      </li>
	    </ul>
	  </div>
		<div class="card-body">
			<div class="tab-content p-0 m-0">
				<div class="tab-pane fade active show" id="card-conf-emisorTN">
					<?php
					$attributes = array("id" => "frmConfCatTipoDocumento", "name" => "frmConfCatTipoDocumento", "onsubmit" => "return PostBackFrmGuardaTipoDocumento(this, event);");
					echo form_open("utilerias/guarda_conf_tipo_documento", $attributes);
					?>
					<div class="card mb-2">
						<div class="card-body">
							<div class="row">
								<div class="col-4">
									<div class="form-group">
										<label for="txtEmisor" class="form-label">Tipo de Documento</label>
										<select class="form-control ee_catalogos form-control-sm select2-sm" id="idDocto" name="idDocto">
											<option value="6">ECONÓMICO</option>
											<option value="7">EN ESPECIE</option>
										</select>
									</div>
								</div>
								<div class="col-4">
									<div class="form-group">
										<label for="txtEmisor" class="form-label">Formato de Pago</label>
										<select class="form-control ee_catalogos form-control-sm select2-sm" id="idFormatoPago" name="idFormatoPago">

										</select>
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label class="form-label">&nbsp;</label>
										<div>
											<button class="btn btn-default btn-sm" title="Guardar Configuración" id="btnGuardarConf" name="btnGuardarConf">
												<i class="far fa-save"></i> Guardar
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
					<div class="card card-tbl-conf" style="display:none;">
						<div class="card-body">
							<?= $tblconf; ?>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="card-conf-formatoPago">
					<button type="button" class="btn btn-inverse btn-sm" title="Nuevo Formato" id="btnNuevoFormato" name="btnNuevoFormato" onclick="captura_nuevo_formato();">
						<i class="fa-solid fa-plus"></i> Nuevo
					</button>
					<div class="card mt-2">
						<div class="card-body" id="rslTblConfFormatosPago">

						</div>

						<div class="card-body" id="cardNuevoFormatoPago" style="display:none;">

						</div>
						<div class="card-footer text-end" id="pieGuardaNuevoFormatoPago" style="display:none;">
							<button type="button" class="btn btn-sm btn-success" onclick="guardar_formato_pe();"><i class="fa fa-save"></i> Guardar</button>
						  <button type="button" class="btn btn-sm btn-secondary" onclick="cancelar_guarda_formato_pe();"><i class="fa fa-times"></i> Cancelar</button>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<div class="modal-footer">
  <button type="button" class="btn btn-default btn-sm" data-bs-dismiss="modal"><i class="far fa-window-close"></i> Cerrar</button>
</div>

<script type="text/javascript">
//PENDIENTE: hacer una función que cargue el combo con todos los formatos de pago, seleccionando el top 1. Select idFormatoPago
	setTimeout(() => {
		$('.ee_catalogos').each(function () {
			$(this).select2({
				language: "es",
				width:'100%',
				placeholder: "Selecciona un elemento",
				minimumResultsForSearch: -1,
				dropdownParent: $(this).parent(),
			});
		})

		$('#tblConfEmisorTipoNomina').DataTable().on('deselect', function (e, dt, type, indexes) {
			let idEmisor = $('#ce_idEmisor').val();
			if (idEmisor == 0) {
				return false;
				alerta_emergente("No se obtuvo información del emisor.","warning");
			}
			if (type === 'row') {
				let data = $('#tblConfEmisorTipoNomina').DataTable().rows(indexes).data();
				if (data[0].conf == 0) { return false; }
				let idTipoNomina = data[0].Id;
				Carga_Metodo('catalogos/elimina_conf_emisor_tipo_nomina', {idEmisor:idEmisor,idTipoNomina:idTipoNomina}, function eliminandoConf(data) {
			    if (data.status == false) { alerta_emergente(data.message, "warning"); }
			    else {
			      alerta_emergente(data.message, "success");
						const rowIdx = $('#tblConfEmisorTipoNomina').DataTable().row(indexes).index();
						$('#tblConfEmisorTipoNomina').DataTable().cell(rowIdx,2).data(0).draw(false);
			    }
			  }, "Eliminando...");
	    }
		});

		$('#tblConfEmisorTipoNomina').DataTable().on('select', function (e, dt, type, indexes) {
			let idEmisor = $('#ce_idEmisor').val();
			if (idEmisor == 0) {
				alerta_emergente("No se obtuvo información del emisor.","warning");
				return false;
			}
	  	if (type === 'row') {
				let	data = $('#tblConfEmisorTipoNomina').DataTable().rows(indexes).data();
				if (data[0].conf > 0) { return false; }
				let idTipoNomina = data[0].Id;
				Carga_Metodo('catalogos/guarda_conf_emisor_tipo_nomina', {idEmisor:idEmisor,idTipoNomina:idTipoNomina}, function guardandoConf(data) {
			    if (data.status == false) { alerta_emergente(data.message, "warning"); }
			    else {
			      alerta_emergente(data.message, "success");
						const rowIdx = $('#tblConfEmisorTipoNomina').DataTable().row(indexes).index();
						$('#tblConfEmisorTipoNomina').DataTable().cell(rowIdx,2).data(idEmisor).draw(false);
			    }
			  }, "Guardando...");
			}
		});

		if ($('#ce_idEmisor').val() > 0) {
			$('.card-tbl-conf').show();
			carga_formatos_pago(); //por emisor
			carga_todos_formatos_pago(); //todos
		}
	}, 0);

	function carga_todos_formatos_pago() {
		let idEmisor = $('#ce_idEmisor').val();
		if (idEmisor == 0) {
			alerta_emergente("No se obtuvo información del emisor.","warning");
			return false;
		}
		$('#idFormatoPago').empty();
		Carga_Metodo('utilerias/carga_formatos_pago_configurados', {idEmisor:idEmisor}, function cargandoFormatosPagoConf(data) {
			if (data.status == false) { alerta_emergente(data.message, "warning"); }
			else { $('#idFormatoPago').html(data.html); }
		}, "Cargando...");
		return false;
	}

	function carga_formatos_pago() {
		let idEmisor = $('#ce_idEmisor').val();
		if (idEmisor == 0) {
			alerta_emergente("No se obtuvo información del emisor.","warning");
			return false;
		}
		Carga_Metodo('utilerias/carga_formatos_pago', {idEmisor:idEmisor}, function cargandoFormatosPago(data) {
			if (data.status == false) { alerta_emergente(data.message, "warning"); }
			else {
				$('#cardNuevoFormatoPago, #pieGuardaNuevoFormatoPago').hide();
			}
			$('#rslTblConfFormatosPago').show().html(data.html);
		}, "Cargando...");
		return false;
	}

	function PostBackFrmGuardaEmisor(f,e) {
		e.preventDefault();
		Carga_Metodo(f.action, $(f).serialize() + '&accion=guardar' , function finaliza_guardado(respuesta) {
			if (respuesta.status == false) {
				$('.card-tbl-conf').hide();
				alerta_emergente(respuesta.message, "warning");
			}
			else {
				alerta_emergente(respuesta.message,"success");
				$('#ce_idEmisor').val(respuesta.id);
				if (respuesta.id > 0) {
					$('.card-tbl-conf').show();
					carga_formatos_pago();
					carga_todos_formatos_pago()
				}
				carga_catalogo('catalogos/abc_cat_emisores','emisores','traer_cat_varios_filtros');
			}
			return false;
		}, "Guardando...");
		return false;
	}

	function captura_nuevo_formato() {
		let idEmisor = $('#ce_idEmisor').val();
		if (idEmisor == 0) {
			alerta_emergente("No se obtuvo información del emisor.","warning");
			return false;
		}
		Carga_Metodo('utilerias/captura_formato_pago_emisor', {idEmisor:idEmisor}, function cargandoFormatosPago(data) {
			if (data.status == false) { alerta_emergente(data.message, "warning"); }
			else {
				$('#rslTblConfFormatosPago').hide();
				$('#pieGuardaNuevoFormatoPago').show();
				$('#cardNuevoFormatoPago').show().html(data.html);
			}
		}, "Cargando...");
		return false;
	}

	function cancelar_guarda_formato_pe() {
		$('#cardNuevoFormatoPago').hide().empty();
		$('#pieGuardaNuevoFormatoPago').hide();
		$('#rslTblConfFormatosPago').show();
	}

	function guardar_formato_pe() {
		let idEmisor = $('#ce_idEmisor').val();
		if (idEmisor == 0) {
			alerta_emergente("No se obtuvo información del emisor.","warning");
			return false;
		}
		if (validar_campos_pe() == true) {
			let nombreFormato = $("#NombreFormato_pe").val().trim(),
					campos = $("#hdnCamposSel").val(),
					encabezado = ($("#chkEncabezados_fp").is(':checked') == true ? 1 : 0);
			Carga_Metodo('utilerias/guarda_formato_pago_emisor', {idEmisor:idEmisor,NombreFormato:nombreFormato,Campos:campos,Encabezado:encabezado}, function cargandoFormatosPago(data) {
				if (data.status == false) { alerta_emergente(data.mensaje, "warning"); }
				else {
					alerta_emergente(data.mensaje, "success");
					carga_formatos_pago();
					carga_todos_formatos_pago()
					cancelar_guarda_formato_pe();
				}
			}, "Cargando...");
		}
	  return false;
	}

	function eliminar_formato_pago(url,data,esBoton){
		if (typeof(esBoton) == "undefined" || esBoton == "" || esBoton == null) { esBoton = false; }

		if (esBoton) data = $(data).data('json');
		let idFormato = data.Id;

		if (typeof(idFormato) == "undefined" || idFormato == "" || idFormato == null) {
			alerta_emergente("Error al obtener los valores del formato.","warning");
			return false;
		}

		swal.fire({
			title: "Alerta",
			text: "¿Confirma que desea eliminar el formato "+data.NombreFormato+"?",
			icon: "question",
			showCancelButton: true,
		}).then(result => {
			if (result.value) {
				Carga_Metodo('utilerias/eliminar_formato_pago', {FormatoId:idFormato}, function eliminandoFormato(respuesta) {
					if (respuesta.status == false) { alerta_emergente(respuesta.mensaje, "warning"); }
					else {
						alerta_emergente(respuesta.mensaje, "success");
						carga_formatos_pago();
						carga_todos_formatos_pago()
					}
				}, "Eliminando...");
			}
		}).catch(swal.noop);
	  return false;
	}

	function PostBackFrmGuardaTipoDocumento(f,e) {
		e.preventDefault();
		let tablaTiposNomina = $('#tblConfEmisorTipoNomina').DataTable();

		if (!tablaTiposNomina.rows('.selected').any()) {
			alerta_emergente('El emisor no tiene algún tipo de nómina configurado. Selecciona uno en la pestaña Tipo de Nómina.','warning');
			return false;
		}
		let variables = $(f).serializeArray(),
				tiposNomina = tablaTiposNomina.rows({selected: true}).data().toArray();
		Carga_Metodo(f.action, $(f).serialize()+'&tiposNomina='+JSON.stringify(tiposNomina), function finaliza_guardado(respuesta) {
			if (respuesta.status == false) {
				alerta_emergente(respuesta.message, "warning");
			}
			else {
				alerta_emergente(respuesta.message,"success");
			}
			return false;
		}, "Guardando...");
		return false;
	}

</script>
