<h1 class="page-header">Reportes </h1><small></small>

<?php
$attributes = array("id" => "frmProcesaReporte", "name" => "frmProcesaReporte", "onsubmit" => "return GenerarReporte(this, event);");
echo form_open("reportes/procesar_reporte", $attributes);
?>
<div class="card">
	<div class="card-body">
  	<input type="hidden" id="urlReporteador" value="<?=$urlReporteador?>" >
    <input type="hidden" id="rutaReportes" value="<?=$rutaReportes?>" >
		<input type="hidden" id="tipoSalidaRPT" name="tipoSalidaRPT" value="2" >
    <div class="row">
    	<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
      	<div class="card">
        	<div class="card-header">
          	<h5 class="m-0">Catálogo de Reportes</h5>
          </div>

          <div class="card-body">
          	<div class="row">
            	<div class="col-sm-10 col-md-10 col-lg-11 col-xl-6">
              	<div class="form-group">
	                <label for="idTipoReporte" class="form-label">Tipo de Reporte</label>
	                <div class="input-group mb-3">
	                  <select id="idTipoReporte" name="idTipoReporte" class="form-select form-control form-control-sm select2-sm select2">
                    	<?= $cat_tipo_rep; ?>
	                  </select>
	                  <div class="input-group-append" style="display:none;" id="divSpinTipoRpt">
                    	<label class="input-group-text" for="inputGroupSelect02"><i id="spinTipoRpt" class="fas fa-spinner fa-spin"></i></label>
	                  </div>
	                </div>
	            	</div>
	        		</div>
	    			</div>

            <div id="lstReportes">

            </div>

          </div>
        </div>
      </div>

      <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
      	<div class="card">
	        <div class="card-header">
          	<h5 class="m-0" id="titulo-rpt">Parámetros</h5>
	        </div>
          <div class="card-body">
						<input type="hidden" id="idReporte" name="idReporte" value="0">
						<input type="hidden" id="rowIdx" name="rodIdx" value="0">
          	<div id="divParametrosRpt">

            </div>
						<input type="hidden" id="PresupuestoId" name="PresupuestoId" value="<?= $PresupuestoId; ?>">
          </div>

					<div class="card-footer bg-white pt-2" id="pie-rpt">
		        <div class="row">
		          <div class="col-12">
		            <div class="form-group text-end mb-0">
		              <button type="submit" class="btn btn-secondary btn-sm" id="btnGeneraRpt"><i class="fa fa-print"></i>&nbsp; Generar Reporte</button>
									<button type="button" class="btn btn-outline-secondary btn-sm" id="btnGeneraRptXLS"><i class="fa-solid fa-file-excel"></i>&nbsp; Generar Reporte XLS</button>
								</div>
		          </div>
		        </div>
	        </div>
				</div>
      </div>
    </div>
  </div>
</div>
<?php
echo form_close();
?>

<div class="mt-2" id="rltReporte">

</div>

<script type="text/javascript">
	var busqueda = "";
	setTimeout(function cargarconsulta() {
    $(".select2").select2({ language: "es", width:'100%', placeholder: 'Selecciona una Opción', minimumResultsForSearch: -1  });

    $("#idTipoReporte").change(function() {
      LimpiarDivParametros();
      FiltrarReportes(this.value);
    });

    // $("#btnGeneraRpt").on("click", function(){
    // 	GenerarReporte(2);
    // });

		$("#btnGeneraRptXLS").on("click", function(){
			$('#tipoSalidaRPT').val(3);
			$("#frmProcesaReporte").trigger('submit');
		});

		$("#idTipoReporte").trigger('change');
	});

	function LimpiarDivParametros(){
		let aviso = '<div class="alert alert-warning"><strong>Selecciona un reporte y proporciona los parámetros solicitados.</strong></div>';
		$("div#divParametrosRpt").fadeOut('slow', function () {
			$("div#divParametrosRpt").html(aviso).fadeIn('slow');
		});
		$('#titulo-rpt').html('Parámetros');
		$('#idReporte').val(0);
		$('#pie-rpt').hide();
		$('#tipoSalidaRPT').val(2);
	}

	function FiltrarReportes(idTipoReporte){
		Carga_Metodo('reportes/get_reportes_por_tipo',
									{idTipoReporte:idTipoReporte},
									function cargandoReportes(data){
										if (data.status == false) {
											$('#lstReportes').empty();
											alerta_emergente(data.message, "warning");
										}
										else {
											$('#lstReportes').html(data.html);
											$('#tblListadoReportes').on( 'click', 'tr', function () {
												let row = $('#tblListadoReportes').DataTable().row(this);
												if (row.node() != null) { MostrarParametrosRpt(row); }
											});
										}
									},
									"Cargando reportes...");
	}

	function MostrarParametrosRpt(row){
		let datos = row.data(),
				idReporte = datos.idReporte,
				titulo = datos.TituloReporte;
		if (parseInt(idReporte) > 0) {
			$('#titulo-rpt').html(titulo);
			$('#idReporte').val(idReporte);
			$('#rowIdx').val(row.index());
			$('#pie-rpt').show();

			Carga_Metodo('<?= base_url()?>reportes/obtener_parametros',
									 {idReporte:idReporte},
									 function cargaParametros(data){
										 if (data.status == false) {
											 alerta_emergente(data.message, "warning");
											 LimpiarDivParametros();
										 }
										 else {
											$('#divParametrosRpt').html(data.html);
										 }
									 },
									 "Consultando...");
		}
		else { LimpiarDivParametros(); }
		return false;
	}

  function GenerarReporte(f,e){
	  e.preventDefault();
		let variables = $(f).serialize();
		let rowIdx = $('#rowIdx').val(),
				rowRpt = $('#tblListadoReportes').DataTable().row(rowIdx).data(),
				tipoSalida = $('#tipoSalidaRPT').val();
    if (ValidarCampos() == true) {
	    if (rowRpt.esRPT == 1) {
	 			ImprimirReporte(rowRpt.OrigenDatos, rowRpt.TituloReporte, rowRpt.Parametros, tipoSalida);
	    }
	    else {
				Carga_Metodo(f.action,
											variables,
											function generandoReporte(data){
												if (data.status == false) {
													$('#rltReporte').empty();
													alerta_emergente(data.mensaje, "warning");
												}
												else {
													if (data.mensaje) alerta_emergente(data.mensaje, "warning");
													$('#rltReporte').html(data.html);
												}
											},
											"Generando reporte...");
	    }
    }
		$('#tipoSalidaRPT').val(2);
  }

  function ValidarCampos(){ //<<<RPERAZA(2021.05.27): CASU 0804/2021
    let resultado = true;

    if (ValidaRangoFechas($("#fechaIni").val(), $("#fechaFin").val()) == false) {
      alerta_emergente('La fecha inicial debe ser mayor que la fecha final.', "warning");
      resultado = false;
    }

    $(".parametro").each(function(){
      if (resultado == true) {
        if ($(this).attr("id") == "IdDependencia") {
          if ($(this).is(':visible') && $(this).val() == '') {
          	resultado = false;
          }
        }
				else if( $(this).attr("id") == "tipoContrato"){
          if ($(this).is(':visible') && $(this).val() == '') {
          	resultado = false;
          }
        }
        else if ($(this).is(':visible') && ($(this).val() == '' | $(this).val() == '0')) {
        	resultado = false;
        }

        if (resultado == false)
        	alerta_emergente('Se requiere un valor para ' + $('label[for="' + $(this).attr("id") + '"]').html() + '.', "warning");
      }
    });

    if (resultado == true && $("#param_05").is(':visible') && $("#IdEmpleado").val() == "") {
      alerta_emergente('Se requiere un número válido de <b>Credencial</b>', "warning");
      resultado = false;
    }

    if (resultado == true && $("#param_15").is(':visible') && !$("#rbSexoF").is(":checked") && !$("#rbSexoM").is(":checked")) {
      alerta_emergente('Se requiere un valor para <b>Sexo</b>', "warning");
      resultado = false;
    }
    return resultado;
  }

	function ImprimirReporte(archivoReporte, referencia, Parametros, tipoSalida){ //<<<RPERAZA(2021.05.27): CASU 0804/2021
	  let strParametros = CreaCadenaParametros(Parametros);
	  let url = $('#urlReporteador').val();
	  let rutaRpt = $('#rutaReportes').val();
	  let strjson = "{'Reporte':'" + rutaRpt + archivoReporte + "'"
	              + ",'Referencia':'" + referencia + "'"
	              + strParametros + "}";
	  $('<form>', {
	      "id": 'frmImprimeRpt',
	      "method": 'post',
	      "html": '<input type="hidden" id="Print" name="Print" value="'+tipoSalida+'" />'+
	      '<input type="hidden" id="JSON" name="JSON" value="' + strjson + '"" />',
	      "action": url,
	      "target": '_blank'
	  }).appendTo(document.body).submit();
  }

  function CreaCadenaParametros(confParametros){
		let jsonParametros = $('#jsonParametros').val();
		jsonParametros = JSON.parse(jsonParametros);
		let strParametros = "";
		for (let i = 0; i < jsonParametros.length; i++) {
			let obj = null;
			obj = $("#"+jsonParametros[i]['NombreCampo']);
			switch (jsonParametros[i]['TipoCampo']) {
				case "text":
				case "date":
				case "select":
          strParametros += ",'@" + jsonParametros[i]['NombreCampo'] + "':'" + obj.val() + "'";
					break;
				case "checkbox":
					strParametros += ",'@" + jsonParametros[i]['NombreCampo'] + "':'" + (obj.is(':checked') ? 1 : 0) + "'";
					break;
				case "radio":
					strParametros += ",'@" + jsonParametros[i]['NombreCampo'] + "':'" + $('input[name="' + obj.attr("name") + '"]:checked').val() + "'";;
					break;
				default:
					break;
			}
		}
		strParametros += ",'@PresupuestoId':'" + $('#PresupuestoId').val() + "'"; //Para presupuesto
	  return strParametros;
  }

	function ProcesarCaptura(e,campo) { //<<<RPERAZA(2021.05.27): CASU 0804/2021
      let resultado = false;
      let ejecBusqueda = true;
      let _key = (window.Event) ? event.which : event.keyCode;
      if (_key > 95 && _key < 106) {
          resultado = true;
      }
      else if (_key > 47 && _key < 58) {
          resultado = true;
      }
      else if (_key == 8) {
          resultado = true;
      }
      else if (_key == 46) {
          resultado = true;
      }
      else if (_key == 37 | _key == 39 | _key == 9) { //Flechas y tab
          resultado = true;
          ejecBusqueda = false;
      }
      else {
          resultado = false;
          ejecBusqueda = false;
      }

      if(ejecBusqueda == true) InicializaContador();

      return resultado;
  }

  function InicializaContador(){ //<<<RPERAZA(2021.05.27): CASU 0804/2021
	  clearInterval(busqueda);
	  busqueda = setInterval(function(){BuscaEmpleado();},300);
  }

  function BuscaEmpleado(){ //<<<RPERAZA(2021.05.27): CASU 0804/2021
      clearInterval(busqueda);
      let Credencial = $("#Credencial").val();
      if(Credencial != ""){
          $.ajax({
              url: "<?=base_url();?>index.php/reportes/get_empleado_por_credencial",
              type: 'POST',
              async: true,
              dataType: "JSON",
              data: "Credencial="+Credencial,
              error: function(XMLHttpRequest, errMsg, exception){
                  let msg = "jQuery message: "+errMsg+" XMLHttpRequest: "+StatusMsg(XMLHttpRequest.status);
                  alerta_emergente(msg, 'error');
              },
              beforeSend:function(request) {
                  $("#spinNombre").show();
              },
              success: function(data){
                  if(data.status == false) {
                      //console.log(data.mensaje);
                      $("#IdEmpleado").val('');
                      $("#divLabelNombre").hide();
                      $("#spanNombreEmpleado").text('')
                      $("#divLabelErrorNombre").show();
                  }
                  else{
                      $("#IdEmpleado").val(data.datos.Id);
                      $("#divLabelErrorNombre").hide();
                      $("#divLabelNombre").show();
                      $("#spanNombreEmpleado").text(data.datos.Nombre + ' ' + data.datos.Apellido1 + ' ' + data.datos.Apellido2)
                  }
              },
              complete: function(request, json){
                  $("#spinNombre").hide();
              }
          });
      }
      else{
          $("#IdEmpleado").val('');
          $("#divLabelNombre").hide();
          $("#spanNombreEmpleado").text('')
          $("#divLabelErrorNombre").hide();
      }
  }

  function SeleccionaPeriodo(){ //<<<RPERAZA(2021.05.27): CASU 0804/2021
      let partesFecha = $("#fechaIni").val().split("/");
      let meses = ["ENERO", "FEBRERO", "MARZO", "ABRIL", "MAYO", "JUNIO"
                  ,"JULIO", "AGOSTO", "SEPTIEMBRE", "OCTUBRE", "NOVIEMBRE", "DICIEMBRE"];
      let quincena = (parseInt(partesFecha[0]) <= 15 ? "1A" : "2A");
      let mes = meses[partesFecha[1] - 1];
      let textoBuscado = quincena + ' ' + mes + ' DE ' + partesFecha[2];

      $("#IdNomina option:selected").attr('selected', false);
      $("#IdNomina option:contains(" + textoBuscado + ")").attr('selected', true).trigger("change");
  }

	function formateaCredencial(event,obj) {
		let largo = 5;
		return $(obj).val(String($(obj).val()).padStart(largo, '0'));
	}

</script>
