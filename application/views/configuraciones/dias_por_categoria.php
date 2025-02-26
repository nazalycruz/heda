<div class="card mb-2">
	<?php
	$attributes = array("id" => "frmPagosEspecialesPorCategoria", "name" => "frmPagosEspecialesPorCategoria","class" => "needs-validation", "onsubmit" => "return PostBackFrmConsultaCategoriasPagos(this, event);");
	echo form_open("pagos_especiales/categorias_pagos_especiales", $attributes);
	?>
	<div class="card-body">
		<div class="row mb-2">
			<div class="col-4">
				<div class="form-group">
					<label for="pe_tiponominaconfCat" class="form-label">Tipo Nómina</label>
					<select class="form-control pe_catalogosCat form-control-sm select2-sm" id="pe_tiponominaconfCat" name="pe_tiponominaconfCat" required>
						<?= $cattiponomina; ?>
					</select>
					<div class="invalid-feedback">Seleccione el Tipo de Nómina a configurar</div>
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
					<label for="pe_conceptoconfCat" class="form-label">Concepto</label>
					<select class="form-control pe_catalogosCat form-control-sm select2-sm" id="pe_conceptoconfCat" name="pe_conceptoconfCat" required>
						<?= $catconceptos; ?>
					</select>
				</div>
			</div>

			<div class="col-2">
				<div class="form-group">
					<label for="dc_mntmin" class="form-label">Monto mínimo</label>
					<input type="text" class="form-control form-control-sm dc_currency" id="dc_mntmin" name="dc_mntmin" autocomplete="off">
				</div>
			</div>

			<div class="col-2">
				<div class="form-group">
					<label for="dc_mntmax" class="form-label">Monto máximo</label>
					<input type="text" class="form-control form-control-sm dc_currency" id="dc_mntmax" name="dc_mntmax" autocomplete="off">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-2">
				<div class="form-group">
					<label for="pe_diaspagar" class="form-label">Días a pagar</label>
					<input type="text" class="form-control form-control-sm" id="pe_diaspagar" name="pe_diaspagar" autocomplete="off" onkeypress="return onlyDigits(event, this);">
				</div>
			</div>
		</div>

	</div>
	<div class="card-footer p-10 text-end pie-conceptos">
		<button type="submit" class="btn btn-sm btn-inverse text-end" id="btnConsultaCategorias"><i class="fa-solid fa-magnifying-glass"></i> Consultar</button>
		<button type="button" class="btn btn-sm btn-success text-end" id="btnConfiguraCategoriasPagos" onclick="configura_dias_categoria();"><i class="fa-solid fa-save"></i> Configurar</button>
	</div>
	<?php
	echo form_close();
	?>
</div>

<div class="card mt-2" style="display:none;" id="cardtblCategoriasPagos">
	<div class="card-body" id="result_categorias_pagos">

	</div>
</div>

<script type="text/javascript">

$(document).ready(function(){
	$(".pe_catalogosCat").select2({
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
	$(".dc_currency").inputmask('currency',{rightAlign: true, allowMinus: false, removeMaskOnSubmit: true, undoOnEscape:false});
	$('#pe_diaspagar').inputmask({
    alias: 'numeric',
    allowMinus: false,
    min:0,
    digits: 0,
    max: 360
  });
	// $('#frmPagosEspecialesPorCategoria').submit();
});


function PostBackFrmConsultaCategoriasPagos(f,e) {
	e.preventDefault();
	let tipoNomina = $('#pe_tiponominaconfCat').val(),
			concepto = $('#pe_conceptoconfCat').val(),
			montoMinimo = $('#dc_mntmin').val(),
			montoMaximo = $('#dc_mntmax').val();
	Carga_Metodo('pagos_especiales/categorias_pagos_especiales',
							 {tipoNomina:tipoNomina,concepto:concepto,montoMinimo:montoMinimo,montoMaximo:montoMaximo},
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

function configura_dias_categoria() {
	let tipoNomina = $('#pe_tiponominaconfCat').val(),
			concepto = $('#pe_conceptoconfCat').val(),
			dias = $('#pe_diaspagar').val(),
			tablaConf = $('#tblconfCategoriasDiasPagos').DataTable();

  if (tablaConf.rows({selected : true}).indexes().length === 0) {
		alerta_emergente('No se han seleccionado categorías para configurar.','warning');
		return false;
	}

	if (typeof(dias) == "undefined" || dias == "" || dias == 0) {
    alerta_emergente("Debes indicar el número de días a configurar","warning");
    return false;
  }

  let categorias = tablaConf.rows( {selected: true} ).data().toArray();

	swal.fire({
		 title: "Alerta",
		 html: "¿Confirma que desea configurar "+categorias.length+" categoría(s)?",
		 icon: "question",
		 showCancelButton: true,
		 showLoaderOnConfirm: true,
		 allowOutsideClick: false,
		 preConfirm: function () {
			 return new Promise(function(resolve) {
				 Carga_Metodo("<?=base_url();?>pagos_especiales/genera_configuracion_categoria", "tipoNomina="+tipoNomina+"&concepto="+concepto+"&dias="+dias+"&categorias="+JSON.stringify(categorias),
				 function finalizaProceso(data){
					 if (data.status == false) {
						 $('#cardtblCategoriasPagos').hide();
						 $('#result_categorias_pagos').hide();
						 alerta_emergente(data.message, "warning");
					 }
					 else {
						 alerta_emergente(data.message, "success");
						 $('#frmPagosEspecialesPorCategoria').submit();
					 }
				 },
				 "Procesando...*No cierre o actualice la ventana.");;
			});
		 }
	});
	return false;
}

</script>
