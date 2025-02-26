<div class="modal-header">
  <h4 class="modal-title" id="TituloModal"></h4>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">

	<div class="card mb-2">
		<?php
		$attributes = array("id" => "frmCargaArchivoCatalogo", "name" => "frmCargaArchivoCatalogo", "onsubmit" => "return CargaArchivoCatalogo(this, event);");
		echo form_open("catalogos/leeArchivoCatalogo", $attributes);
		?>
	  <div class="card-body">
	    <div class="row mb-2">
	      <div class="col-4">
	        <div class="form-group">
	          <label for="confXLS" class="form-label">Archivo de Catálogo</label>
	          <input id="confXLS" name="confXLS" type="file" accept=".xls, .xlsx, .csv" class="file" style="visibility:hidden;position:absolute;" onchange="checkFileCat(this);">
	          <div class="input-group">
	            <input type="text" class="form-control form-control-sm" id="confXLStext" name="confXLStext" disabled placeholder="Seleccionar archivo...">
	            <span class="input-group-btn">
	              <button class="browse btn btn-sm btn-outline-secondary" type="button" onclick="examinar_archivo_catalogo();"><i class="far fa-file-excel"></i> Examinar...</button>
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
						<p class="help-block">Escriba la columna en la que inician los datos de las categorías (dejar vacío para usar la columna A).</p>
	        </div>
	      </div>
	      <div class="col-2">
	        <div class="form-group">
	          <label for="colFin" class="form-label">Columna final</label>
	          <input type="text" class="form-control form-control-sm alpha-only" id="colFin" name="colFin" placeholder="Columna final de datos" autocomplete="off" onkeypress="return onlyAlpha(event, this);" maxlength="1">
						<p class="help-block">Escriba la columna en la que terminan los datos de las categorías (dejar vacío para usar la última columna con contenido).</p>
	        </div>
	      </div>
				<div class="col-2">
					<div class="form-group">
						<label for="filaIni" class="form-label">Fila inicial</label>
						<input type="text" class="form-control form-control-sm" id="filaIni" name="filaIni" placeholder="Fila inicial de datos" autocomplete="off" onkeypress="return onlyAlpha(event, this);" maxlength="4">
						<p class="help-block">Escriba la fila en la que inician los datos de las categorías <span class="text-red fw-bold">(no incluir encabezados)</span>.</p>
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
							<button type="submit" class="btn btn-inverse btn-sm" title="Vista previa" id="btnVistaPreviaCatXLS" name="btnVistaPreviaCatXLS">
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

	<div class="row mb-2" id="divtblResult" style="display:none;">
	  <div id="resultVistaPrevia">

	  </div>
	</div>

	<div class="card" id="divFormConceptos" style="display:none;">
	  <?php
	  $attributes = array("id" => "frmGuardaConfiguracionCatalogo", "name" => "frmGuardaConfiguracionCatalogo", "onsubmit" => "return GuardaConfiguracionCatalogo(this, event);");
	  echo form_open("catalogos/guarda_configuracion_catalogo", $attributes);
	  ?>
	  <div class="card-body">
	    <div class="row">
	      <div class="col-6">
	        <div class="form-group">
	          <label for="colClave" class="form-label">Columna clave</label>
	          <input type="text" class="form-control form-control-sm alpha-only" id="colClave" name="colClave" placeholder="Columna que contiene la clave del catálogo" onkeypress="return onlyAlpha(event, this);" autocomplete="off" required maxlength="1">
	          <p class="help-block">Escriba la columna que contiene la clave del catálogo.</p>
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
<div class="modal-footer">
	<button type="button" class="btn btn-default btn-sm" data-bs-dismiss="modal"><i class="far fa-window-close"></i> Cerrar</button>
</div>


<script type="text/javascript">

function examinar_archivo_catalogo() {
  $("#confXLS").trigger('click');
}

function CargaArchivoCatalogo(f,e) {
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

function checkFileCat(sender) {
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

function eliminar_conf_catalogo(url,obj,esBoton) {
  let tablaConf = $('#tblConfigurarCatalogo').DataTable(),
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

function GuardaConfiguracionCatalogo(f,e) {
  e.preventDefault();
  let tablaConf = $('#tblConfigurarCatalogo').DataTable();
	if (!tablaConf.data().any()) {
    alerta_emergente('Debes cargar un archivo para poder guardar la configuración.','warning');
    return false;
  }

	let variables = $(f).serialize(),
  		catalogo = tablaConf.rows().data().toArray();

  swal.fire({
     title: "Alerta",
     html: "¿Confirma que desea guardar la configuración para "+tablaConf.rows().indexes().length+" registros?<br /><br />"+
            "<ul><li><b>Columna con clave: </b>"+$('#colClave').val().toUpperCase()+"</li>"+
            "<li><b>Columna con monto: </b>"+$('#colMonto').val().toUpperCase()+"</li></ul>",
     icon: "question",
     showCancelButton: true,
     showLoaderOnConfirm: true,
     allowOutsideClick: false,
     preConfirm: function () {
       return new Promise(function(resolve) {
         Carga_Metodo(f.action,
                       variables+"&catalogo="+JSON.stringify(catalogo),
                       function finalizaConfCat(respuesta){
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
													 carga_catalogo('catalogos/abc_cat_categorias','categorias','traer_cat_varios_filtros');
												 }
											 },
                       "Procesando...");
      });
     }
  });
  return false;
}
</script>
