<div class="note alert-warning">
	<div class="note-icon"><i class="fa-solid fa-circle-exclamation"></i></div>
	<div class="note-content">
		<h4><b>Realizar las siguientes configuraciones antes de continuar.</b></h4>
		<p>
			<ul>
				<li>Configurar montos por categoría <a href="javascript:;" class="btn btn-default btn-sm btn-icon" onclick="conf_cat_categorias();"><i class="fa-solid fa-circle-arrow-right"></i></a></li>
				<li>Configurar prima de antigüedad <a href="javascript:;" class="btn btn-default btn-sm btn-icon" onclick="conf_prima_ant();"><i class="fa-solid fa-circle-arrow-right"></i></a></li>
				<li>Configurar bono por natalicio, apoyo defunción</li><!-- <a href="javascript:;" class="btn btn-default btn-sm btn-icon" onclick="conf_bono_natalicio();"><i class="fa-solid fa-circle-arrow-right"></i></a> -->
			</ul>
		</p>
	</div>
</div>

<div class="card">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" data-bs-toggle="tab" href="#card-categorias" data-item="categorias">Categorías</a>
      </li>
			<li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#card-bonos" data-item="bonos">Bonos</a>
      </li>
			<li class="nav-item">
				<a class="nav-link" data-bs-toggle="tab" href="#card-conceptos" data-item="conceptos">Conceptos Retroactivo</a>
			</li>
    </ul>
  </div>
  <div class="card-body">
		<div class="tab-content p-0 m-0">
			<div class="tab-pane fade active show" id="card-categorias">
				<div class="card mb-2">
					<?php
					$attributes = array("id" => "frmConfMontoCategoria", "name" => "frmConfMontoCategoria","class" => "needs-validation", "onsubmit" => "return PostBackFrmConsultaCategoriasConf(this, event);");
					echo form_open("retroactivos/categorias", $attributes);
					?>
					<div class="card-body">
						<div class="row mb-2">
							<div class="col-3">
								<div class="form-group">
									<label for="ret_tiponominaconfCat" class="form-label">Tipo Nómina</label>
									<select class="form-control ret_catalogosCat form-control-sm select2-sm" id="ret_tiponominaconfCat" name="ret_tiponominaconfCat" required>
										<?= $cattiponomina; ?>
									</select>
									<div class="invalid-feedback">Seleccione el Tipo de Nómina a configurar</div>
								</div>
							</div>
							<div class="col-3">
								<div class="form-group">
									<label for="ret_conceptoconfCat" class="form-label">Concepto</label>
									<select class="form-control ret_catalogosCat form-control-sm select2-sm" id="ret_conceptoconfCat" name="ret_conceptoconfCat" required>
										<?= $catconceptos; ?>
									</select>
								</div>
							</div>

							<div class="col-2">
								<div class="form-group">
									<label for="cc_mntmin" class="form-label">Monto mínimo</label>
									<input type="text" class="form-control form-control-sm cm_currency" id="cc_mntmin" name="cc_mntmin" autocomplete="off" onkeypress="return dispara_tab(event, this);">
								</div>
							</div>

							<div class="col-2">
								<div class="form-group">
									<label for="cc_mntmax" class="form-label">Monto máximo</label>
									<input type="text" class="form-control form-control-sm cm_currency" id="cc_mntmax" name="cc_mntmax" autocomplete="off" onkeypress="return dispara_tab(event, this);">
								</div>
							</div>

							<div class="col">
								<div class="form-group">
									<label class="form-label">&nbsp;</label>
									<div>
										<button type="submit" class="btn btn-sm btn-inverse text-end" id="btnConsultaCategorias"><i class="fa-solid fa-magnifying-glass"></i> Consultar</button>
									</div>
								</div>
							</div>

						</div>
						<div class="row">
							<div class="col-2">
								<div class="form-group">
									<label for="ret_monto" class="form-label">Monto</label>
									<input type="text" class="form-control form-control-sm cm_currency" id="ret_monto" name="ret_monto" autocomplete="off">
								</div>
							</div>
						</div>

					</div>
					<div class="card-footer p-10 text-end pie-conceptos">
						<button type="button" class="btn btn-sm btn-success text-end" id="btnConfiguraCategoriasPagos" onclick="configura_monto_categoria();"><i class="fa-solid fa-save"></i> Configurar</button>
					</div>
					<?php
					echo form_close();
					?>
				</div>
			</div>
			<!-- cierra pestaña categorías -->

			<!-- abre pestaña bonos -->
			<div class="tab-pane" id="card-bonos">
				<div class="card mb-2">
					<?php
					$attributes = array("id" => "frmConfBonoCategoria", "name" => "frmConfBonoCategoria","class" => "needs-validation", "onsubmit" => "return PostBackFrmConsultaConfBonoCategorias(this, event);");
					echo form_open("retroactivos/bonos", $attributes);
					?>
					<div class="card-body">
						<div class="row mb-2">
							<div class="col-3">
								<div class="form-group">
									<label for="ret_conceptoconfBono" class="form-label">Concepto</label>
									<select class="form-control ret_catalogosCat form-control-sm select2-sm" id="ret_conceptoconfBono" name="ret_conceptoconfBono" required>
										<?= $catconceptos; ?>
									</select>
								</div>
							</div>

							<div class="col-2">
								<div class="form-group">
									<label for="cb_mntmin" class="form-label">Monto mínimo</label>
									<input type="text" class="form-control form-control-sm cm_currency" id="cb_mntmin" name="cb_mntmin" autocomplete="off" onkeypress="return dispara_tab(event, this);">
								</div>
							</div>

							<div class="col-2">
								<div class="form-group">
									<label for="cb_mntmax" class="form-label">Monto máximo</label>
									<input type="text" class="form-control form-control-sm cm_currency" id="cb_mntmax" name="cb_mntmax" autocomplete="off" onkeypress="return dispara_tab(event, this);">
								</div>
							</div>

							<div class="col">
								<div class="form-group">
									<label class="form-label">&nbsp;</label>
									<div>
										<button class="btn btn-sm btn-inverse text-end" id="btnConsultaConceptosBonos"><i class="fa-solid fa-magnifying-glass"></i> Consultar</button>
									</div>
								</div>
							</div>

						</div>
						<div class="row">
							<div class="col-2">
								<div class="form-group">
									<label for="ret_montoBono" class="form-label">Monto</label>
									<input type="text" class="form-control form-control-sm cm_currency" id="ret_montoBono" name="ret_montoBono" autocomplete="off">
								</div>
							</div>
						</div>

					</div>
					<div class="card-footer p-10 text-end pie-conceptos">
						<button type="button" class="btn btn-sm btn-success text-end" id="btnConfiguraConceptoCategoria" onclick="configura_concepto_categoria();"><i class="fa-solid fa-save"></i> Configurar</button>
					</div>
					<?php
					echo form_close();
					?>
				</div>
			</div>
			<!-- cierra pestaña bonos -->

			<!-- abre pestaña conceptos -->
			<div class="tab-pane" id="card-conceptos">
				<div class="card mb-2">
					<?php
					$attributes = array("id" => "frmConfMontoCategoria", "name" => "frmConfMontoCategoria","class" => "needs-validation", "onsubmit" => "return PostBackFrmConsultaConceptosConf(this, event);");
					echo form_open("retroactivos/conceptos_retroactivo", $attributes);
					?>
					<div class="card-body">
						<div class="row">
							<div class="col-3">
								<div class="form-group">
									<label for="ret_conceptoConf" class="form-label">Concepto</label>
									<select class="form-control ret_catalogosCat form-control-sm select2-sm" id="ret_conceptoConf" name="ret_conceptoConf" required>
										<?= $catconceptostodos; ?>
									</select>
								</div>
							</div>
							<div class="col-3">
								<div class="form-group">
									<label for="ret_conceptoRetConf" class="form-label">Concepto Retroactivo</label>
									<select class="form-control ret_catalogosCat form-control-sm select2-sm" id="ret_conceptoRetConf" name="ret_conceptoRetConf" required>
										<?= $catconceptostodos; ?>
									</select>
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<label class="form-label">&nbsp;</label>
									<div>
										<button type="submit" class="btn btn-sm btn-inverse text-end" id="btnconfConceptosRetroactivo"><i class="fa-solid fa-gear"></i> Configurar</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
					echo form_close();
					?>
				</div>
				<div class="card">
					<div class="card-body">
						<div id="lstConceptosRet">

						</div>
					</div>
				</div>
			</div>
			<!-- cierra pestaña conceptos -->
		</div>

		<div class="card mt-2" style="display:none;" id="cardtblConfRetroactivos">
			<div class="card-body" id="result_conf_retroactivos">

			</div>
		</div>

	</div>
</div>

<script type="text/javascript">

$(document).ready(function(){
	$(".ret_catalogosCat").select2({
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
	$(".cm_currency").inputmask('currency',{rightAlign: true, allowMinus: false, removeMaskOnSubmit: true, undoOnEscape:false});

	$('.nav-tabs a').on('shown.bs.tab', function(event){
		let x = $(event.target).data('item'),         // active tab
				y = $(event.relatedTarget).data('item');  // previous tab
		$('#cardtblConfRetroactivos').hide();
		$('#result_conf_retroactivos').hide();
		if (x == 'conceptos') { abc_conceptos_retroactivo(); }
	});
});

function PostBackFrmConsultaCategoriasConf(f,e) {
	e.preventDefault();
	let tipoNomina = $('#ret_tiponominaconfCat').val(),
			concepto = $('#ret_conceptoconfCat').val(),
			montoMinimo = $('#cc_mntmin').val(),
			montoMaximo = $('#cc_mntmax').val();
	Carga_Metodo('retroactivos/categorias',
							 {tipoNomina:tipoNomina,concepto:concepto,montoMinimo:montoMinimo,montoMaximo:montoMaximo},
							 function finalizaProceso(data){
								 if (data.status == false) {
									 $('#cardtblConfRetroactivos').hide();
									 $('#result_conf_retroactivos').hide();
									 alerta_emergente(data.message, "warning");
								 }
								 else {
									 $('#cardtblConfRetroactivos').show();
									 $('#result_conf_retroactivos').show();
									 $('#result_conf_retroactivos').html(data.html);
								 }
							 },
							 "Consultando...");
}

function PostBackFrmConsultaConfBonoCategorias(f,e) {
	e.preventDefault();
	let concepto = $('#ret_conceptoconfBono').val(),
			montoMinimo = $('#cb_mntmin').val(),
			montoMaximo = $('#cb_mntmax').val();
	Carga_Metodo(f.action,
							 {concepto:concepto,montoMinimo:montoMinimo,montoMaximo:montoMaximo},
							 function finalizaProceso(data){
								 if (data.status == false) {
									 $('#cardtblConfRetroactivos').hide();
									 $('#result_conf_retroactivos').hide();
									 alerta_emergente(data.message, "warning");
								 }
								 else {
									 $('#cardtblConfRetroactivos').show();
									 $('#result_conf_retroactivos').show();
									 $('#result_conf_retroactivos').html(data.html);
								 }
							 },
							 "Consultando...");
}

function configura_monto_categoria() {
	let tipoNomina = $('#ret_tiponominaconfCat').val(),
			concepto = $('#ret_conceptoconfCat').val(),
			monto = $('#ret_monto').val(),
			tablaConf = $('#tblconfCategoriasMontos').DataTable();

  if (tablaConf.rows({selected: true}).indexes().length === 0) {
		alerta_emergente('No se han seleccionado categorías para configurar.','warning');
		return false;
	}

	if (typeof(monto) == "undefined" || monto == "" || monto == 0) {
    alerta_emergente("Debes indicar el monto a configurar","warning");
    return false;
  }

  let categorias = tablaConf.rows( {selected: true} ).data().toArray();

	swal.fire({
		 title: "Alerta",
		 html: "¿Confirma que deseas configurar "+categorias.length+" categoría(s)?",
		 icon: "question",
		 showCancelButton: true,
		 showLoaderOnConfirm: true,
		 allowOutsideClick: false,
		 preConfirm: function () {
			 return new Promise(function(resolve) {
				 Carga_Metodo("<?=base_url();?>retroactivos/genera_configuracion_categoria", "tipoNomina="+tipoNomina+"&concepto="+concepto+"&monto="+monto+"&categorias="+JSON.stringify(categorias),
				 function finalizaProceso(data){
					 if (data.status == false) {
						 $('#cardtblConfRetroactivos').hide();
						 $('#result_conf_retroactivos').hide();
						 alerta_emergente(data.message, "warning");
					 }
					 else {
						 alerta_emergente(data.message, "success");
						 $('#frmConfMontoCategoria').submit();
					 }
				 },
				 "Procesando...*No cierre o actualice la ventana.");;
			});
		 }
	});
	return false;
}

function configura_concepto_categoria() {
	let concepto = $('#ret_conceptoconfBono').val(),
			monto = $('#ret_montoBono').val(),
			tablaConf = $('#tblconfConceptosCategoria').DataTable();

  if (tablaConf.rows({selected: true}).indexes().length === 0) {
		alerta_emergente('No se han seleccionado categorías para configurar.','warning');
		return false;
	}

	if (typeof(monto) == "undefined" || monto == "" || monto == 0) {
    alerta_emergente("Debes indicar el monto a configurar","warning");
    return false;
  }

  let categorias = tablaConf.rows( {selected: true} ).data().toArray();

	swal.fire({
		 title: "Alerta",
		 html: "¿Confirma que deseas configurar "+categorias.length+" categoría(s)?",
		 icon: "question",
		 showCancelButton: true,
		 showLoaderOnConfirm: true,
		 allowOutsideClick: false,
		 preConfirm: function () {
			 return new Promise(function(resolve) {
				 Carga_Metodo("<?=base_url();?>retroactivos/genera_configuracion_concepto_categoria", "concepto="+concepto+"&monto="+monto+"&categorias="+JSON.stringify(categorias),
				 function finalizaProceso(data){
					 if (data.status == false) {
						 $('#cardtblConfRetroactivos').hide();
						 $('#result_conf_retroactivos').hide();
						 alerta_emergente(data.message, "warning");
					 }
					 else {
						 alerta_emergente(data.message, "success");
						 $('#frmConfBonoCategoria').submit();
					 }
				 },
				 "Procesando...*No cierre o actualice la ventana.");
			});
		 }
	});
	return false;
}

function abc_conceptos_retroactivo() {
	cargarpag('<?= base_url()?>retroactivos/abc_conceptos_retroactivo', "div#lstConceptosRet", true, "POST", "");
	return false;
}

function editar_concepto_retroactivo(url,data,esBoton) {
	if (typeof(esBoton) == "undefined" || esBoton == "" || esBoton == null) { esBoton = false; }
	if (esBoton) data = $(data).data('json')
	$('#ret_conceptoConf').val(data.idConcepto).trigger('change');
	$('#ret_conceptoRetConf').val(data.idConceptoRetroactivo).trigger('change');
}

function PostBackFrmConsultaConceptosConf(f,e) {
	e.preventDefault();
}

</script>
