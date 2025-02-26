<div id="divEnvios" class="panel panel-inverse">
  <div class="panel-heading">
    <h4 class="panel-title"><b>Buscar Empleado</b></h4>
  </div>
  <div class="panel-body">

    <form class="form-horizontal" method="post" id="frmBusca">
      <div class="form-group">
        <label class="control-label col-sm-2" for="credencial">Credencial:</label>
        <div class="col-sm-2">
          <input type="input" class="form-control" id="credencial" name="credencial" maxlength="5" onkeypress="return onlyDigits(event,this,'','btnBuscar');" autocomplete="off">
        </div>
      </div>
    </form>

  </div>

  <div class="panel-footer">
      <button type="button" id="btnBuscar" class="btn btn-success" onclick="BuscarEmpleado();" title="Buscar Empleado"><i class="fa fa-search"></i> Buscar</button>
  </div>

</div>

<!-- #modal-dialog large -->
<div class="modal fade" data-backdrop="static" id="pnlModalLg">
  <div class="modal-dialog modal-lg">
    <div id="pnlModalContentLg" class="modal-content">

    </div>
  </div>
</div>

<!-- #modal-dialog large -->
<div class="modal fade" data-backdrop="static" id="pnlModal">
  <div class="modal-dialog">
    <div id="pnlModalContent" class="modal-content">

    </div>
  </div>
</div>


<script>
  setTimeout(function FuncionesIniciales(){
    $("#credencial").focus();
  });

  $("#frmBusca").on('submit', function(evt){
    evt.preventDefault();
  });

  function BuscarEmpleado(){
    if(ValidarFormulario() == true){
        var credencial= $('#credencial').val();

        $.ajax({
            url: "<?=base_url();?>inicio/BuscarEmpleado",
            type: "POST",
            async: false,
            data: "credencial="+credencial,
            error: function(XMLHttpRequest, errMsg, exception){
                var msg = "<p>jQuery message: <i>"+errMsg+"</i><br />XMLHttpRequest: <i>"+StatusMsg(XMLHttpRequest.status)+"</i></p>";
                alerta_emergente(msg, 'error');
            },
            success: function(htmlcode){
                var r = htmlcode.substr(0,1);
                switch(r){
                  case "@":
                    alerta_emergente('Acceso denegado.', 'error');
                    break;

                  case "*":
                    alerta_emergente('Parámetros incorrectos', 'error');
                    break;

                  case "2":
                    alerta_emergente('Número de credencial inválido.', 'error');
                    break;
                  case "0":
                    alerta_emergente('No existe ningún empleado con el número de credencial especificado.', 'error');
                    break;

                  case "1": //Todo correcto
                    var Clave = htmlcode.substr(1);

                    cargarpag('<?= base_url()?>'+'inicio/CargarFormulario', "div#content", true, "POST", "Clave="+Clave)
                    break;

                  default:
                    msg = htmlcode.split("-");
                    alerta_emergente(msg);
                    break;
                }
            }
        });
    }
  }

  function ValidarFormulario(){
    var resultado = true;

    if (resultado == true && $('#credencial').val().trim() == '' ){
        resultado = false;
        $('#credencial').focus();
        alerta_emergente('Se requiere el <b>Número de credencial</b>.', 'warning');
    }

    if (resultado == true && parseInt($('#credencial').val()) == 0 ){
        resultado = false;
        $('#credencial').focus();
        alerta_emergente('El número de credencial no es válido.', 'warning');
    }

    return resultado;
  }

  function ValidarContraseniaActual(){
      var resultado = false;
      var pass_actual = $('#pass_actual').val().trim();
      var IdEmpleado = $('#IdEmpleado').val().trim();

      $.ajax({
          url: "<?=base_url();?>inicio/VerificaContraseniaActual",
          type: "POST",
          async: false,
          data: "IdEmpleado="+IdEmpleado + "&pass_actual="+pass_actual,
          error: function(XMLHttpRequest, errMsg, exception){
              var msg = "<p>jQuery message: <i>"+errMsg+"</i><br />XMLHttpRequest: <i>"+StatusMsg(XMLHttpRequest.status)+"</i></p>";
              alerta_emergente(msg, 'error');
          },
          success: function(htmlcode){
              if(htmlcode == "1"){
                resultado = true;
              }
          }
      });

      return resultado;
  }

</script>
