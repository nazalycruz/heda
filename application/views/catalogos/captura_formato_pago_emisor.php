<input type="hidden" id="hdnCamposSel" value="[]">
<div class="row">
	<div class="col-xs-12 col-md-12 col-lg-8">
		<label for="NombreFormato_pe" class="form-label">Nombre del Formato</label>
		<input type="input" class="form-control mb-3" id="NombreFormato_pe" maxlength="50" autocomplete="off" placeholder="Escribe el nombre del formato">
	</div>
</div>

<div class="row pb-3">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<div class="mb-3">
					<b>Selecciona los campos:</b>
					<button id="btnLimpiaCamposPE" type="button" class="btn btn-outline-secondary btn-sm ml-4 mb-0 pt-1 pb-1" onclick="LimpiaSelCamposPE();"><i class="fa fa-eraser"></i> Limpiar selección</button>
				</div>
				<div class="row"><?php
					foreach ($reg_campos as $item) {?>
						<div class="col-3">
							<div class="form-check mb-2">
								<input class="form-check-input campo_sel" type="checkbox" value="<?= $item->Descripcion ?>" id="chkCampo_<?= $item->Id ?>" onchange="procesaColumna('<?= $item->Id ?>')">
								<label class="form-check-label" for="chkCampo_<?= $item->Id ?>">
										<?= $item->Descripcion ?>
								</label>
							</div>
						</div><?php
					}?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row pb-0 ">
	<div class="col-12">
		<div class="row">
			<div class="col-4">
				<div class="form-check form-switch mb-2">
					<input class="form-check-input" type="checkbox" id="chkEncabezados_fp" checked="checked" onchange="dibujaTablaPE();">
					<label class="form-check-label" for="chkEncabezados_fp">Mostrar encabezados</label>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col">
		<label class="form-label">Vista previa del formato</label>
		<div class="table-responsive" id="divTablaFPE">
			<table id="tblUtil_Preview" class="table table-bordered table-sm">
				<thead></thead>
				<tbody></tbody>
			</table>
		</div>
	</div>
</div>

<script type="text/javascript">
setTimeout(function prepara_nuevo_fp() {
	$("#btnLimpiaCamposPE").hide();
});

function getCampos_sel_pe(){
	let arr_camposFP;
	if ($("#hdnCamposSel").val() == "") { arr_camposFP = new Array(); }
	else { arr_camposFP = JSON.parse($("#hdnCamposSel").val()); }
	return arr_camposFP;
}

function validar_campos_pe() {
	let arr_camposFP = getCampos_sel_pe();
	if ($('#NombreFormato_pe').val().trim() == '') {
		$('#NombreFormato_pe').focus();
		alerta_emergente('Se requiere el <b>Nombre</b> del Formato.', 'warning');
		return false;
	}

	if (arr_camposFP.length == 0) {
		alerta_emergente('Se requiere seleccionar al menos <b>un Campo</b> para el Formato.', 'warning');
		return false;
	}
	return true;
}

function procesaColumna(idCol){
	let objTable = new Array(),
			arr_camposFP = getCampos_sel_pe();

	if ($("#chkCampo_"+idCol).is(':checked')) {
		arr_camposFP.push($("#chkCampo_"+idCol).val());
	}
	else {
		const index = arr_camposFP.indexOf( $("#chkCampo_"+idCol).val() );
		if (index > -1) { arr_camposFP.splice(index, 1); }
	}

	$("#hdnCamposSel").val( JSON.stringify(arr_camposFP) );

	if (arr_camposFP.length > 0){ $("#btnLimpiaCamposPE").show(); }
	else { $("#btnLimpiaCamposPE").hide(); }

	dibujaTablaPE();
}

function dibujaTablaPE() {
	let arr_camposFP = getCampos_sel_pe(),
			encabezado = false;

	if ($("#chkEncabezados_fp").is(':checked')) {
		encabezado = true;
	}

	let html = '<table id="tblUtil_Preview" class="table table-bordered table-sm">';

	if (encabezado) {
		html += '<thead class="thead-light"><tr>';
		arr_camposFP.forEach( element => html += '<th><b>' + element + '</b></th>');
		html += '</tr></thead><tbody><tr>';
		arr_camposFP.forEach( element => html += '<td>&nbsp;<span class="text-muted font-italic">data</span></td>');
		html += '</tr></tbody>';
	}
	else {
		html += '<tbody><tr>';
		arr_camposFP.forEach( element => html += '<td>&nbsp;<span class="text-muted font-italic">' + element + '</span></td>');
		html += '</tr></tbody>';
	}

	html += '</table>';

	$("#divTablaFPE").html(html);
}

function LimpiaSelCamposPE() {
	$(".campo_sel").prop("checked", false);
	$("#btnLimpiaCamposPE").hide();
	$("#hdnCamposSel").val( JSON.stringify(new Array()) );
	dibujaTablaPE();
}

</script>
