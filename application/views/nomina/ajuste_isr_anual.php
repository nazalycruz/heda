<h1 class="page-header">Ajuste de Impuestos <small>ajuste anual de ISR.</small></h1>

<?php
$attributes = array("id" => "frmConsultaAcumuladoAnual", "name" => "frmConsultaAcumuladoAnual", "onsubmit" => "return PostBackFrmAcumuladoAnual(this, event);");
echo form_open("nomina/listado_acumulado_anual", $attributes);
?>
<div class="card mb-2">
  <div class="card-body">
    <div class="row">
      <div class="col-2">
        <div class="form-group">
          <label><b>Año</b></label>
          <input value="" type="text" class="form-control form-control-sm" id="ia_anio" name="ia_anio" placeholder="Año" autocomplete="off" maxlength="4" required >
        </div>
      </div>

      <!-- BORRAR -->
      <div class="col-2">
        <div class="form-group">
          <label><b>Presupuesto</b></label>
          <input value="" type="text" class="form-control form-control-sm" id="ia_presupuesto" name="ia_presupuesto" placeholder="Presupuesto" autocomplete="off" maxlength="4" required >
        </div>
      </div>
      <!-- BORRAR -->

      <div class="col-2">
        <div class="form-group">
          <label><b>Credencial</b></label>
          <input value="" type="text" class="form-control form-control-sm det_credencial" id="ia_credencial" name="ia_credencial" placeholder="Credencial" autocomplete="off" maxlength="5" >
        </div>
      </div>

      <div class="col-md">
        <div class="form-group">
          <label class="control-label">&nbsp;</label>
          <div>
            <button class="btn btn-inverse btn-sm" title="Consultar año" id="btnConsultaAcumulado" name="btnConsultaAcumulado">
              <i class="fas fa-binoculars"></i> Consultar
            </button>
            <button type="button" class="btn btn-inverse btn-sm" title="Consultar acumulado por Concepto" id="btnConsultaporConcepto" name="btnConsultaporConcepto" onclick="consulta_acumulado_porConcepto();">
              <i class="fas fa-binoculars"></i> Por Concepto
            </button>
            <button type="button" class="btn btn-inverse btn-sm" title="Generar acumulado anual" onclick="genera_acumulado_anual();" id="btnGenerarAcumulado" name="btnGenerarAcumulado">
              <i class="fas fa-exclamation"></i> Generar
            </button>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<?php
echo form_close();
?>

<div id="result_acumulado">

</div>

<script type="text/javascript">

Inputmask({
            showMaskOnHover: false,
            // showMaskOnFocus: false,
            positionCaretOnClick: "select",
            regex: "^20([0-9][0-9]|[2-9][0-9])$"
          }).mask("#ia_anio");

Inputmask({
      showMaskOnHover: false,
      positionCaretOnClick: "select",
      regex: "^000([0-9])$"
		}).mask("#ia_presupuesto");

Inputmask("9{5}", {
			placeholder: "0",
			numericInput: true,
      showMaskOnHover: false,
      showMaskOnFocus: false,
      positionCaretOnClick: "select"
		}).mask(".det_credencial");

  function PostBackFrmAcumuladoAnual(f,e) {
    e.preventDefault();
    var variables = $(f).serialize();
    cargarpag('<?=base_url();?>nomina/listado_acumulado_anual', "div#result_acumulado", true, f.method, variables);
    return false;
  }

  function consulta_acumulado_porConcepto() {
    var anio = $('#ia_anio').val();
    var idPresupuesto = $('#ia_presupuesto').val();
    var credencial = $('#ia_credencial').val();

    if( typeof(anio) == "undefined" || anio === "" ) {
      alerta_emergente("Debe capturar el año para consultar el acumulado.","warning")
      return false;
    }

    cargarpag('<?=base_url();?>nomina/acumulado_anual_porConcepto', "div#result_acumulado", true, "POST", {anio:anio,idPresupuesto:idPresupuesto,credencial:credencial});
    return false;
  }

  function genera_acumulado_anual() {
    var anio = $('#ia_anio').val();
    var idPresupuesto = $('#ia_presupuesto').val();

    if( typeof(anio) == "undefined" || anio === "" ) {
      alerta_emergente("Debe capturar el año para generar el acumulado.","warning")
      return false;
    }

    swal.fire({
       title: "Generar",
       html: "<p>Se generará el acumulado de impuestos para el año "+anio+".</p><p>¿Desea Continuar?</p>",
       icon: "question",
       showCancelButton: true,
       allowOutsideClick: false,
       preConfirm: function () {
         return new Promise(function(resolve) {
           Carga_Metodo("<?=base_url();?>nomina/genera_acumulado_anual", {anio:anio,idPresupuesto:idPresupuesto}, exito_genera_acumulado,"Procesando*Generando acumulado anual de impuestos...");
          });
        }
      });
    return false;
  }

  function exito_genera_acumulado(respuesta) {
    if( respuesta.status == false ) {
      alerta_emergente(respuesta.message,"warning");
    }
    else{
      alerta_emergente(respuesta.message,"success");
      cargarpag('<?=base_url();?>nomina/listado_acumulado_anual', "div#result_acumulado", true, "POST", {ia_anio:respuesta.anio});
    }
    return false;
  }

</script>
