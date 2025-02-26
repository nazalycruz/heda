<h1 class="page-header">TXT para SAT <small>generar archivo .txt para el timbrado.</small></h1>

<?php
$attributes = array("id" => "frmConsultaTXTSAT", "name" => "frmConsultaTXTSAT", "onsubmit" => "return PostBackFrmtxtSAT(this, event);");
echo form_open("nomina/generar_txt_SAT", $attributes);
?>
<div class="card mb-2">
  <div class="card-body">
    <div class="row">
      <div class="col-4">
        <div class="form-group">
          <label for="quincena" class="form-label">Historial de Quincenas</label>
          <select class="form-control form-control-sm select2-sm" id="quincena" name="quincena" required>
            <?= $quincenas; ?>
          </select>
        </div>
      </div>

      <div class="col-4">
        <div class="form-group">
          <label for="idTipoNomina" class="form-label">Tipo de Nómina</label>
          <select id="idTipoNomina" name="idTipoNomina" class="form-control form-control-sm select2-sm" required></select>
        </div>
      </div>

      <div class="col-4">
        <div class="form-group">
          <label for="ts_credencial" class="form-label">Credencial</label>
          <input value="" type="text" class="form-control form-control-sm det_credencial" id="ts_credencial" name="ts_credencial" placeholder="Credencial" autocomplete="off">
          <p class="help-block">*Opcional.</p>
        </div>
      </div>
    </div>
  </div>
	<div class="card-footer text-end">
		<button type="button" class="btn btn-white btn-sm" title="Listar empleados" id="btnListarEmpleados" name="btnListarEmpleados" onclick="listar_empleados_txt();">
			<i class="fa-solid fa-table-list"></i> Listar
		</button>
		<button class="btn btn-inverse btn-sm" title="Generar archivo txt" id="btnGenerarTXTSAT" name="btnGenerarTXTSAT">
			<i class="far fa-file-alt"></i> Generar TXT
		</button>
		<button type="button" class="btn btn-inverse btn-sm" title="Generar vista previa del TXT" id="btnVistaPreviaTXT" name="btnVistaPreviaTXT" onclick="vista_previa_TXT();">
			<i class="fas fa-search"></i> Vista Previa
		</button>
		<button type="button" class="btn btn-inverse btn-sm" title="Exportar en excel" id="btnExportarxls" name="btnExportarxls" onclick="exportar_xls();">
			<i class="far fa-file-excel"></i> Exportar
		</button>
	</div>
</div>
<?php
echo form_close();
?>

<div id="result_txt">

</div>

<script type="text/javascript">
setTimeout(function cargarconsulta() {
  $("#quincena, #idTipoNomina").select2({
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

  $("#idTipoNomina").depdrop({
		language: 'es',
		depends: ['quincena'],
		// params: [''],
		initialize: true,
    initDepends: ['quincena'],
    url: '<?= base_url() ?>generico/nominas_abiertas_porPeriodo'
	});

  $(".det_credencial").inputmask("9{5}",{ numericInput: true,placeholder: "0", positionCaretOnClick: "select", showMaskOnHover: false, showMaskOnFocus: false});
});

  function PostBackFrmtxtSAT(f,e) {
    e.preventDefault();
    var variables = $(f).serialize();
    variables = variables + '&txtPeriodo='+ $("#quincena option:selected").text() + '&txtTipoNomina=' + $("#idTipoNomina option:selected").text();

    Carga_Metodo(f.action, variables, exito_genera_txt, "Procesando TXT...");
    return false;
  }

  function exito_genera_txt(respuesta) {
    if (respuesta.status == false) { alerta_emergente(respuesta.message, "warning"); }
    else{
      $('<form>', {
          "id": 'frmtxtSAT',
          "method": 'post',
          "html": '<input type="hidden" id="archivo" name="archivo" value="' + respuesta.archivo + '" />',
          "action": '<?= base_url() ?>nomina/descargar_txtSAT/',
          "target": '_blank'
      }).appendTo(document.body).submit();
      alerta_emergente(respuesta.message, "success");
    }
  }

	function listar_empleados_txt() {
		let idPeriodoPago = $('#quincena').val(),
        idTipoNomina = $('#idTipoNomina').val(),
				txtPeriodo = $("#quincena option:selected").text(),
				txtTipoNomina = $("#idTipoNomina option:selected").text();

    if (typeof(idPeriodoPago) == "undefined" || idPeriodoPago === "") {
      alerta_emergente("Debe seleccionar una quincena.","warning")
      return false;
    }
		if (typeof(idTipoNomina) == "undefined" || idTipoNomina === "") {
			alerta_emergente("Debe seleccionar un tipo de nómina.","warning")
			return false;
		}
		Carga_Metodo('<?= base_url()?>nomina/listar_empleados_txt',
								 {idPeriodoPago:idPeriodoPago,idTipoNomina:idTipoNomina,txtPeriodo:txtPeriodo,txtTipoNomina:txtTipoNomina},
								 function finalizaProceso(data){
									 if (data.status == false) {
										 alerta_emergente(data.message, "warning");
										 $('div#result_txt').empty();
									 }
									 else {
										 $('div#result_txt').html(data.html);
									 }
								 },
								 "Generando Listado...");
	}

	function generar_txt_filtrado(url) {
		let tablaEmpl = $('#tblEmpleadostxtSAT').DataTable();
		if (!tablaEmpl.rows('.selected').any()) {
			alerta_emergente('Debe seleccionar un empleado para generar el archivo TXT.','warning');
			return false;
		}
		let idPeriodoPago = $('#quincena').val(),
        idTipoNomina = $('#idTipoNomina').val();
				txtPeriodo = $("#quincena option:selected").text(),
        txtTipoNomina = $("#idTipoNomina option:selected").text(),
				empleados = tablaEmpl.rows({selected: true}).data().toArray();
		if (typeof(idPeriodoPago) == "undefined" || idPeriodoPago === "") {
      alerta_emergente("Debe seleccionar una quincena.","warning")
      return false;
    }
		if (typeof(idTipoNomina) == "undefined" || idTipoNomina === "") {
			alerta_emergente("Debe seleccionar un tipo de nómina.","warning")
			return false;
		}
    Carga_Metodo('<?=base_url();?>nomina/generar_txt_SAT',
									{quincena:idPeriodoPago,idTipoNomina:idTipoNomina,txtPeriodo:txtPeriodo,txtTipoNomina:txtTipoNomina,empleados:JSON.stringify(empleados)},
									exito_genera_txt,
									"Procesando TXT...");
		return false;
	}

	function generar_txt_empleado(url,data,esBoton) {
		if (typeof(esBoton) == "undefined" || esBoton == "" || esBoton == null) { esBoton = false; }
		if (esBoton) data = $(data).data('json');
		let idPeriodoPago = $('#quincena').val(),
        idTipoNomina = $('#idTipoNomina').val(),
        credencial = data.Credencial,
        txtPeriodo = $("#quincena option:selected").text(),
        txtTipoNomina = $("#idTipoNomina option:selected").text();
		if (typeof(idPeriodoPago) == "undefined" || idPeriodoPago === "") {
      alerta_emergente("Debe seleccionar una quincena.","warning")
      return false;
    }
		if (typeof(idTipoNomina) == "undefined" || idTipoNomina === "") {
			alerta_emergente("Debe seleccionar un tipo de nómina.","warning")
			return false;
		}

    Carga_Metodo('<?=base_url();?>nomina/generar_txt_SAT', {quincena:idPeriodoPago,idTipoNomina:idTipoNomina,ts_credencial:credencial,txtPeriodo:txtPeriodo,txtTipoNomina:txtTipoNomina}, exito_genera_txt, "Procesando TXT...");
		return false;
	}

  function vista_previa_TXT() {
    var idPeriodoPago = $('#quincena').val(),
        idTipoNomina = $('#idTipoNomina').val(),
        credencial = $('#ts_credencial').val(),
        txtPeriodo = $("#quincena option:selected").text(),
        txtTipoNomina = $("#idTipoNomina option:selected").text();

    if (typeof(idPeriodoPago) == "undefined" || idPeriodoPago === "") {
      alerta_emergente("Debe seleccionar una quincena.","warning")
      return false;
    }

    cargarpag('<?=base_url();?>nomina/vista_previa_txt_SAT', "div#result_txt", true, "POST", {idPeriodoPago:idPeriodoPago,idTipoNomina:idTipoNomina,credencial:credencial,txtPeriodo:txtPeriodo,txtTipoNomina:txtTipoNomina}, true);
    return false;
  }


  function exportar_xls() {
    var idPeriodoPago = $('#quincena').val(),
        idTipoNomina = $('#idTipoNomina').val(),
        credencial = $('#ts_credencial').val(),
        txtPeriodo = $("#quincena option:selected").text(),
        txtTipoNomina = $("#idTipoNomina option:selected").text();
      $.ajax({
        type:'POST',
        url: "<?= base_url() ?>reportes/exportar_xls_sat/",
        data: {idPeriodoPago:idPeriodoPago,idTipoNomina:idTipoNomina,credencial:credencial,txtPeriodo:txtPeriodo,txtTipoNomina:txtTipoNomina},
        dataType:'json',
        beforeSend: function() {
    			showLoading("Procesando...");
    		},
    		success: function(data){
          if( data.status == false ) { alerta_emergente(data.message, "warning"); }
          else{
            alerta_emergente(data.message, "success");
            var $a = $("<a>");
            $a.attr("href",data.file);
            $("body").append($a);
            $a.attr("download", data.nombreArch);
            $a[0].click();
            $a.remove();
          }
    	  },
    		error: function(xhr, textStatus, errorThrown){
          if ( xhr.status == 500 ) { alerta_emergente("Error interno del servidor, intente de nuevo más tarde.", "error");	}
    			else if ( xhr.status == 404 ) { alerta_emergente("Página no encontrada, avise al Departamento de Servicios y Redes", "warning"); }
    			else alerta_emergente("Mensaje de Error: "+textStatus+",  Solicitud XHR: "+StatusMsg(xhr.status), "error");
    			return false;
    		},
    		complete: function( jqXHR, Status){
    			hideLoading();
    		}
      });
  }

  // function exportar_xls2() {
  //   var idPeriodoPago = $('#quincena').val(),
  //       idTipoNomina = $('#idTipoNomina').val(),
  //       credencial = $('#ts_credencial').val();
  //
  //   if( typeof(idPeriodoPago) == "undefined" || idPeriodoPago === "" ) {
  //     alerta_emergente("Debe seleccionar una quincena.","warning")
  //     return false;
  //   }
  //
  //   if( typeof(idTipoNomina) == "undefined" || idTipoNomina === "" ) {
  //     alerta_emergente("Debe seleccionar una quincena.","warning")
  //     return false;
  //   }
  //
  //   $('<form>', {
  //       "id": 'frmReporteSAT',
  //       "method": 'post',
  //       "html": '<input type="hidden" id="idPeriodoPago" name="idPeriodoPago" value="' + idPeriodoPago + '" />'+
  //               '<input type="hidden" id="idTipoNomina" name="idTipoNomina" value="' + idTipoNomina + '" />'+
  //               '<input type="hidden" id="credencial" name="credencial" value="' + credencial + '" />',
  //       "action": '<?= base_url() ?>reportes/exportar_xls_sat/',
  //       // "target": '_blank'
  //   }).appendTo(document.body).submit();
  //   alerta_emergente("Exportando...", "warning");
  // }

  function exportar_xls3() {
    var idPeriodoPago = $('#quincena').val(),
        idTipoNomina = $('#idTipoNomina').val(),
        credencial = $('#ts_credencial').val();

    if( typeof(idPeriodoPago) == "undefined" || idPeriodoPago === "" ) {
      alerta_emergente("Debe seleccionar una quincena.","warning")
      return false;
    }

    if( typeof(idTipoNomina) == "undefined" || idTipoNomina === "" ) {
      alerta_emergente("Debe seleccionar una quincena.","warning")
      return false;
    }

    var variables = 'idPeriodoPago='+idPeriodoPago+'&idTipoNomina='+idTipoNomina+'&credencial='+credencial+'&txtPeriodo='+$("#quincena option:selected").text() + '&txtTipoNomina='+$("#idTipoNomina option:selected").text();

    Carga_Metodo('<?= base_url() ?>reportes/exportar_xls_sat/', variables, exito_exportar_xls, "Generando XLS...");
    return false;
  }

  function exito_exportar_xls(respuesta) {
    if( respuesta.status == false ) { alerta_emergente(respuesta.message, "warning"); }
    else{
      $('<form>', {
          "id": 'frmxlsSAT',
          "method": 'post',
          "html": '<input type="hidden" id="archivo" name="archivo" value="' + respuesta.archivo + '" />',
          "action": '<?= base_url() ?>reportes/descargar_xls_sat/',
          "target": '_blank'
      }).appendTo(document.body).submit();
      alerta_emergente(respuesta.message, "success");
    }
    // $('<form>', {
    //     "id": 'frmReporteSAT',
    //     "method": 'post',
    //     "html": '<input type="hidden" id="r_periodopago" name="r_periodopago" value="' + idPeriodoPago + '" />'+
    //             '<input type="hidden" id="r_tiponomina" name="r_tiponomina" value="' + idTipoNomina + '" />'+
    //             '<input type="hidden" id="r_credencial" name="r_credencial" value="' + credencial + '" />',
    //     "action": '<?= base_url() ?>reportes/exportar_xls_sat/',
    //     // "target": '_blank'
    // }).appendTo(document.body).submit();
    // alerta_emergente("Exportando...", "warning");
    return false;
  }

</script>
