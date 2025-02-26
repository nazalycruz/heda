<?php ; //>>>RPERAZA(2021.08.06): CASU 1306/2021 ?>

<div class="modal-header">
  <h4 class="modal-title" id="TituloModal"><i class="fa fa-dollar-sign"></i> Nuevo Formato de Pago</h4>
  <button type="button" class="btn-close" aria-label="Close" onclick="CerrarModPagoE();"></button>
</div>

<div class="modal-body pb-0">
	<input type="hidden" id="hdnCamposSel" value="[]">
	<div class="row">
	  <div class="col-xs-12 col-md-12 col-lg-8">
	    <label for="NombreFormato_pe" class="form-label">Nombre del Formato:</label>
	    <input type="input" class="form-control mb-3" id="NombreFormato_pe" maxlength="50" autocomplete="off" placeholder="Escribe el nombre del formato">
	  </div>

    <div class="col-xs-12 col-md-12 col-lg-4">
	    <div class="form-group">
	      <label for="EmisorId_pe" class="form-label">Emisor:</label>
	      <div class="input-group mb-3">
	        <select id="EmisorId_pe" class="form-control">
						<option value=""></option>
            <?= $cat_emisores; ?>
	        </select>
	      </div>
	    </div>
    </div>
	</div>

  <div class="row pb-3">
	  <div class="col-12">
	    <div class="card">
	      <div class="card-body pb-0 pt-2">
	        <div class="mb-3">
	          <b>Selecciona los campos:</b>
	          <button id="btnLimpiaCamposPE" type="button" class="btn btn-outline-secondary btn-sm ml-4 mb-0 pt-1 pb-1" onclick="LimpiaSelCamposPE();"><i class="fa fa-eraser"></i> Limpiar selección</button>
	        </div>
          <div class="row"><?php
	          foreach ($reg_campos as $item) {?>
	            <div class="col-xs-6 col-md-6 col-lg-4 col-xl-2">
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
        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
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
			<label for="EmisorId_pe" class="form-label">Vista previa del formato</label>
			<div class="table-responsive" id="divTablaFPE">
				<table id="tblUtil_Preview" class="table table-bordered table-sm">
					<thead></thead>
					<tbody></tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="modal-footer pb-2 pt-2">
	<button type="button" class="btn btn-success" onclick="guardarFormatoPE();"><i class="fa fa-save"></i> Guardar</button>
  <button type="button" class="btn btn-secondary" onclick="CerrarModPagoE();"><i class="fa fa-times"></i> Cerrar</button>
</div>

<script type="text/javascript">
	setTimeout(function prepara_nuevo_fp() {
		$('#EmisorId_pe').each(function () {
			$(this).select2({
				language: "es",
				width:'100%',
				placeholder: "Selecciona un elemento",
				minimumResultsForSearch: -1,
				dropdownParent: $(this).parent(),
			});
		})

		$("#btnLimpiaCamposPE").hide();
	});

	function getCamposSelPE(){
	  let arr_camposFP;
	  if ($("#hdnCamposSel").val() == "") {
    	arr_camposFP = new Array();
	  }
	  else {
    	arr_camposFP = JSON.parse($("#hdnCamposSel").val());
	  }
	  return arr_camposFP;
	}

	function procesaColumna(IdCol){
	  let objTable = new Array(),
	  		arr_camposFP = getCamposSelPE();

	  if ($("#chkCampo_"+IdCol).is(':checked')) {
    	arr_camposFP.push($("#chkCampo_"+IdCol).val());
	  }
	  else {
	    const index = arr_camposFP.indexOf( $("#chkCampo_"+IdCol).val() );
	    if (index > -1) {
	    	arr_camposFP.splice(index, 1);
	    }
	  }

	  $("#hdnCamposSel").val( JSON.stringify(arr_camposFP) );

	  if (arr_camposFP.length > 0) $("#btnLimpiaCamposPE").show();
	  else $("#btnLimpiaCamposPE").hide();

	  dibujaTablaPE();
	}

	function dibujaTablaPE() {
	  let arr_camposFP = getCamposSelPE(),
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

	function guardarFormatoPE(){
	  if (validar_camposPE() == true) {
	      $.ajax({
	          url: "<?=base_url();?>utilerias/guardar_formato_pago",
	          type: 'POST',
	          async: true,
	          dataType: "JSON",
	          data: {  NombreFormato: $("#NombreFormato_pe").val().trim()
	                  ,EmisorId: $("#EmisorId_pe").val()
	                  ,Campos: $("#hdnCamposSel").val()
	                  ,Encabezado: ($("#chkEncabezados_fp").is(':checked') == true ? 1 : 0)
	                },
	          error: function(XMLHttpRequest, errMsg, exception){
	              let msg = "jQuery message: "+errMsg+" XMLHttpRequest: "+StatusMsg(XMLHttpRequest.status);
	              alerta_emergente(msg, 'error');
	          },
	          beforeSend:function(request) {
	              showLoading("Procesando...");
	          },
	          success: function(data){
	              if(data.status == false) {
	                  alerta_emergente(data.mensaje,"error");
	              }
	              else{
	                  alerta_emergente(data.mensaje,"success");
	                  $("#modUtileriasSec").modal("hide");
	                  CargaFormUtil('carga_conf_pago_electronico')
	              }
	          },
	          complete: function(request, json){
	              hideLoading();
	          }
	      });
	  }

	  return false;
	}

	function validar_camposPE() {
	  let arr_camposFP = getCamposSelPE();

	  if ($('#NombreFormato_pe').val().trim() == '') {
	    $('#NombreFormato_pe').focus();
	    alerta_emergente('Se requiere el <b>Nombre</b> del Formato.', 'warning');
	    return false;
	  }

	  if ($('#EmisorId_pe').val() == '' | $('#EmisorId_pe').val() == '0'){
	    $('#EmisorId_pe').focus();
	    alerta_emergente('Se requiere el <b>Emisor</b>.', 'warning');
	    return false;
	  }

	  if (arr_camposFP.length == 0) {
	    $('#Categoria_rp').focus();
	    alerta_emergente('Se requiere al menos <b>1 Campo</b> para el Formato.', 'warning');
	    return false;
	  }

	  return true;
	}

	function CerrarModPagoE(){
  	$("#modUtileriasSec").modal("hide");
  	$("#modUtilerias").modal("show");
	}

</script>
