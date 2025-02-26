<?php
/*

--SE DESHABILITA EL FORMULARIO DE INICIO DE SESION --<<<RPERAZA(2018.08.15): CASU 1033/2018

<div id="divEnvios" class="panel panel-inverse">
  <div class="panel-heading">
    <h4 class="panel-title"><b>Cambiar contraseña</b></h4>
  </div>
  <div class="panel-body">
    
    <input type="hidden" class="form-control" id="IdEmpleado" name="IdEmpleado" value="<?php echo $IdEmpleado; ?>">
    
    <form class="form-horizontal" method="post" action="/action_page.php">
      <div class="form-group">
        <label class="control-label col-sm-2" for="pass_actual">Contraseña actual:</label>
        <div class="col-sm-2">
          <input type="password" class="form-control" id="pass_actual" name="pass_actual" maxlength="20">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="pass_nuevo">Nueva contraseña:</label>
        <div class="col-sm-2">
          <input type="password" class="form-control" id="pass_nuevo" name="pass_nuevo" maxlength="20">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="confirma_pass_nuevo">Confirmar nueva contraseña:</label>
        <div class="col-sm-2">
          <input type="password" class="form-control" id="confirma_pass_nuevo" name="confirma_pass_nuevo" maxlength="20">
        </div>
      </div>
    </form>

  </div>

  <div class="panel-footer">
      <button type="button" class="btn btn-success" onclick="GuardarContrasenia();" title="Guardar cambios"><i class="fa fa-save"></i> Guardar</button>
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

  function GuardarContrasenia(){
    if(ValidarFormulario() == true){
        var IdEmpleado= $('#IdEmpleado').val();
        var pass_nuevo= $('#pass_nuevo').val();

        $.ajax({
            url: "<?=base_url();?>inicio/GuardarContrasenia",
            type: "POST",
            async: false,
            data: "IdEmpleado="+IdEmpleado+"&pass_nuevo="+pass_nuevo,
            error: function(XMLHttpRequest, errMsg, exception){
                var msg = "<p>jQuery message: <i>"+errMsg+"</i><br />XMLHttpRequest: <i>"+StatusMsg(XMLHttpRequest.status)+"</i></p>";
                alerta_emergente(msg, 'error');
            },
            success: function(htmlcode){
                if(htmlcode == 1){
                  alerta_emergente('La contraseña se cambió correctamente.', 'success');
                  $("#pass_actual").val('');
                  $("#pass_nuevo").val('');
                  $("#confirma_pass_nuevo").val('');
                }
                else{
                  alerta_emergente('La contraseña no se pudo cambiar.', 'error');
                }
            }
        });
    }
  }

  function ValidarFormulario(){
    var resultado = true;

    if (resultado == true && $('#pass_actual').val().trim() == '' ){
        resultado = false;
        $('#pass_actual').focus();
        alerta_emergente('Se requiere la <b>Contraseña actual</b>.', 'warning');
    } 
      
    if (resultado == true && $('#pass_nuevo').val().trim() == '' ){
        resultado = false;
        $('#pass_nuevo').focus();
        alerta_emergente('Se requiere la <b>Contraseña nueva</b>.', 'warning');
    } 

    if (resultado == true && $('#confirma_pass_nuevo').val().trim() == '' ){
        resultado = false;
        $('#confirma_pass_nuevo').focus();
        alerta_emergente('Se requiere que confirme la <b>Contraseña nueva </b>.', 'warning');
    }

    if (resultado == true && $('#confirma_pass_nuevo').val().trim() != $('#pass_nuevo').val().trim() ){
        resultado = false;
        $('#pass_nuevo').focus();
        alerta_emergente('La nueva contraseña no coincide con la confirmación.', 'warning');
    }

    if (resultado == true && $('#pass_nuevo').val().trim() == $('#pass_actual').val().trim() ){
        resultado = false;
        $('#pass_nuevo').focus();
        alerta_emergente('La nueva contraseña debe ser diferente de la actual.', 'warning');
    }

    if(resultado == true && ValidarContraseniaActual() == false){
      resultado = false;
      $('#pass_actual').focus();
      alerta_emergente('La contraseña actual es incorrecta.', 'warning');
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
*/?>