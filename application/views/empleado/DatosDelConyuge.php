<?php //Establece diferencia entre los datos actuales y los datos enviados arevisión por el empleado,
      //esta diferencia sólo se muestra si es período de capura
    $css_apPaterno = '';
    $css_apMaterno = '';
    $css_Nombre = '';
    $css_LugarTrabajo = '';
    $css_DomTrabajo = '';
    $css_Telefonos = '';
    $css_Parentesco = '';
    $css_EsEmpleado = '';
    $css_Celular = '';

    $old_apPaterno = '';
    $old_apMaterno = '';
    $old_Nombre = '';
    $old_LugarTrabajo = '';
    $old_DomTrabajo = '';
    $old_Telefonos = '';
    $old_Parentesco = '';
    $old_EsEmpleado = '';
    $old_Celular = '';

    if( $es_periodo_captura &&  verificar_permiso('WFBEM') == 3 ){//$es_periodo_captura){
      if( $conyuge_actual != false ){
        if( $conyuge->apPaterno != $conyuge_actual->apPaterno){ $css_apPaterno = ' alert-danger'; $old_apPaterno = "Original: ".LimpiaCadena($conyuge_actual->apPaterno); }
        if( $conyuge->apMaterno != $conyuge_actual->apMaterno){  $css_apMaterno = ' alert-danger'; $old_apMaterno = "Original: ".LimpiaCadena($conyuge_actual->apMaterno); }
        if( $conyuge->Nombre != $conyuge_actual->Nombre){  $css_Nombre = ' alert-danger'; $old_Nombre = "Original: ".LimpiaCadena($conyuge_actual->Nombre); }
        if( $conyuge->LugarTrabajo != $conyuge_actual->LugarTrabajo){  $css_LugarTrabajo = ' alert-danger'; $old_LugarTrabajo = "Original: ".LimpiaCadena($conyuge_actual->LugarTrabajo); }
        if( $conyuge->DomTrabajo != $conyuge_actual->DomTrabajo){  $css_DomTrabajo = ' alert-danger'; $old_DomTrabajo = "Original: ".LimpiaCadena($conyuge_actual->DomTrabajo); }
        if( $conyuge->Telefonos != $conyuge_actual->Telefonos){  $css_Telefonos = ' alert-danger'; $old_Telefonos = "Original: ".$conyuge_actual->Telefonos; }
        if( $conyuge->IdParentesco != $conyuge_actual->IdParentesco){  $css_Parentesco = ' alert-danger'; $old_Parentesco = "Original: ".LimpiaCadena($conyuge_actual->Parentesco); }
        if( $conyuge->EsEmpleado != $conyuge_actual->EsEmpleado){  $css_EsEmpleado = ' alert-danger'; $old_EsEmpleado = "Original: ".($conyuge_actual->EsEmpleado==1?'Sí es empleado':'No es empleado'); }
        if( $conyuge->Celular != $conyuge_actual->Celular){  $css_Celular = ' alert-danger'; $old_Celular = "Original: ".$conyuge_actual->Celular; }
      }
    }
?>

<form method="post" id="frmConyuge" name="frmConyuge">
<div class="card-body">
  <div class="row">
    <input type="hidden" class="form-control" id="ConyugeId" name="ConyugeId" value="<?php echo $conyuge->ConyugeId; ?>">
    <input type="hidden" id="IdHistorial_Con" value="<?php echo $conyuge->IdHistorial;?>" />
    <input type="hidden" id="EstadoDatos_Con" value="<?php echo $estado_datos;?>" />
    <input type="hidden" id="SinPareja" value="<?php echo $conyuge->SinPareja;?>" />

    <input type="hidden" id="Nombre_Con" value="<?php echo LimpiaCadena($conyuge->Nombre);?>" /><?php ;//<<<RPERAZA(2018.07.06): CASU 0159/2018?>
    <input type="hidden" id="apPaterno_Con" value="<?php echo LimpiaCadena($conyuge->apPaterno);?>" />
    <input type="hidden" id="apMaterno_Con" value="<?php echo LimpiaCadena($conyuge->apMaterno);?>" />
    <input type="hidden" id="LugarTrabajo_Con" value="<?php echo LimpiaCadena($conyuge->LugarTrabajo);?>" />
    <input type="hidden" id="DomTrabajo_Con" value="<?php echo LimpiaCadena($conyuge->DomTrabajo);?>" />
    <input type="hidden" id="Telefonos_Con" value="<?php echo LimpiaCadena($conyuge->Telefonos);?>" />
    <input type="hidden" id="EsEmpleado_Con" value="<?php echo $conyuge->EsEmpleado;?>" />
    <input type="hidden" id="Celular_Con" value="<?php echo LimpiaCadena($conyuge->Celular);?>" />
    <input type="hidden" id="IdParentesco_Con" value="<?php echo $conyuge->IdParentesco;?>" />

    <!-- <div> -->
      <h4>
        <span id="lblDatosSinActualizar_Con" class="label label-danger">DATOS NO ACTUALIZADOS</span>
        <span id="lblDatosSinEnviar_Con" class="label label-warning">DATOS SIN ENVIAR</span>
        <span id="lblDatosRevision_Con" class="label label-info">DATOS EN REVISIÓN</span>
        <span id="lblDatosConfirmados_Con" class="label label-green">DATOS CONFIRMADOS</span>
      </h4>

      <div class="row">
        <div class="col-sm-12">
          <div class="checkbox">
            <label class="control-label col-sm-12" ><input type="checkbox" value="" id="chkSinPareja" for="chkSinPareja" <?php echo ($conyuge->SinPareja ? 'checked="checked"' : '') ?> onclick="CambiaEstadoSinPareja(this.checked);"> Sin pareja</label>
          </div>
        </div>
      </div>

  </div>
</div>
    <!-- <div class="table-bordered"> -->
      <div class="card-body" id="divDatosConyuge">
        <div class="row">
          <div class="col-sm-2">
            <label>&nbsp;</label>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="EsEmpleado" <?php echo ($conyuge->EsEmpleado ? 'checked="checked"' : '')?>>
              <label class="form-check-label<?=$css_EsEmpleado?>" for="defaultCheckbox">Es empleado</label>
              <span class="text-danger"><br/><?=$old_EsEmpleado?></span>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label for="NombreConyuge">Nombre:</label>
              <input type="text" class="form-control<?=$css_Nombre?>" id="NombreConyuge" name="NombreConyuge" onkeypress="return onlyAlpha(event, this);" style="text-transform:uppercase;" value="<?php echo LimpiaCadena($conyuge->Nombre); ?>">
              <span class="text-danger"><?=$old_Nombre?></span>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <label for="apPaternoConyuge">Apellido Paterno:</label>
              <input type="text" class="form-control<?=$css_apPaterno?>" id="apPaternoConyuge" name="apPaternoConyuge" onkeypress="return onlyAlpha(event, this);" style="text-transform:uppercase;" value="<?php echo LimpiaCadena($conyuge->apPaterno); ?>">
              <span class="text-danger"><?=$old_apPaterno?></span>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <label for="apMaternoConyuge">Apellido Materno:</label>
              <input type="text" class="form-control<?=$css_apMaterno?>" id="apMaternoConyuge" name="apMaternoConyuge" onkeypress="return onlyAlpha(event, this);" style="text-transform:uppercase;" value="<?php echo LimpiaCadena($conyuge->apMaterno); ?>">
              <span class="text-danger"><?=$old_apMaterno?></span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="LugarTrabajo">Lugar donde trabaja:</label>
              <input type="text" class="form-control<?=$css_LugarTrabajo?>" id="LugarTrabajo" name="LugarTrabajo" onkeypress="return onlyAlpha(event, this);" style="text-transform:uppercase;" value="<?php echo LimpiaCadena($conyuge->LugarTrabajo); ?>">
              <span class="text-danger"><?=$old_LugarTrabajo?></span>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="DomTrabajo">Domicilio del Trabajo:</label>
              <input type="text" class="form-control<?=$css_DomTrabajo?>" id="DomTrabajo" name="DomTrabajo" onkeypress="return onlyAlpha(event, this);" style="text-transform:uppercase;" value="<?php echo LimpiaCadena($conyuge->DomTrabajo); ?>">
              <span class="text-danger"><?=$old_DomTrabajo?></span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-2">
            <div class="form-group">
              <label for="Telefonos">Teléfono:</label>
              <input type="text" class="form-control<?=$css_Telefonos?>" id="Telefonos" name="Telefonos" onkeypress="return dispara_tab(event, this);" value="<?php echo $conyuge->Telefonos; ?>">
              <span class="text-danger"><?=$old_Telefonos?></span>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="form-group">
              <label for="Celularc">Celular:</label>
              <input type="text" class="form-control<?=$css_Celular?>" id="Celularc" name="Celularc" onkeypress="return dispara_tab(event, this);" value="<?php echo $conyuge->Celular; ?>">
              <span class="text-danger"><?=$old_Celular?></span>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="form-group">
              <label for="Parentesco">Parentesco:</label>
              <select class="form-control<?=$css_Parentesco?>"  id="Parentesco" name="Parentesco" required>
                <!-- <option value="0">SELECCIONE UNA OPCIÓN</option> -->
                <?php echo LimpiaCadena($cat_parentesco);?>
              </select>
              <span class="text-danger"><?=$old_Parentesco?></span>
            </div>
          </div>
        </div>


      </div>
    <!-- </div> -->
	</form>

  <div class="panel-footer text-end">
    <button type="button" id="btnGuardarDatosCon" class="btn btn-success" onclick="GuardarDatosTMPConyuge();" title="Guardar datos del cónyuge"><i class="fa fa-save"></i> Guardar</button>
    <button type="button" id="btnEnviarDatosCon" class="btn btn-primary" onclick="EnviarDatosTMPConyuge();" title="Enviar datos a revisión"><i class="fa fa-check-circle"></i> Enviar</button>
    <?php
    //if($this->session->userdata('EsAdmin')){
    if(verificar_permiso('WFBEM') == 3){ //<<<RPERAZA(2018.08.15): CASU 1033/2018?>
      <button type="button" id="btnConfirmarDatosCon" class="btn btn-success" style="text-align: center;" onclick="GuardarDatosConyuge() " title="Confirmar datos"><i class="fa fa-check"></i> Confirmar datos</button><?php
    }?>
  </div>



<script>
  setTimeout(function FuncionesIniciales(){
    $("#Parentesco").select2({
      language: "es",
      placeholder: "Seleccione un Elemento",
      minimumResultsForSearch: Infinity,
      width:'100%'
    });

    var EstadoDatos_Con = $("#EstadoDatos_Con").val(); //<<<RPERAZA(2018.07.04): CASU 0159/2018
    MuestraEstadoDatos_Conyuge(EstadoDatos_Con);//<<<RPERAZA(2018.07.04): CASU 0159/2018

    var SinPareja = $("#SinPareja").val();
    CambiaEstadoSinPareja(SinPareja);
  });

  function MuestraEstadoDatos_Conyuge(idEstado){ //<<<RPERAZA(2018.07.06): CASU 0159/2018
      idEstado = parseInt(idEstado);

      $("#lblDatosSinEnviar_Con").hide();
      $("#lblDatosRevision_Con").hide();
      $("#lblDatosConfirmados_Con").hide();
      $("#lblDatosSinActualizar_Con").hide();

      $("#btnGuardarDatosCon").hide();
      $("#btnEnviarDatosCon").hide();
      $("#btnConfirmarDatosCon").hide();

      $("#iconoEdoCon_Pend").hide();
      $("#iconoEdoCon_Conf").hide();

      switch(idEstado){
          case 0: // 0 significa que no es periodo de captura, por tanto no se muestra ninguna etiqueta

              <?php
              //if($this->session->userdata('EsAdmin')){
              if(verificar_permiso('WFBEM') == 3){ //<<<RPERAZA(2018.08.15): CASU 1033/2018?>
                  $("#btnConfirmarDatosCon").show();<?php
              }?>

              break;

          case 1: // DATOS SIN ACTUALIZAR
              $("#lblDatosSinActualizar_Con").show();
              $("#btnGuardarDatosCon").show();
              $("#iconoEdoCon_Pend").show();
              break;

          case 2: // DATOS NO ENVIADOS
              $("#lblDatosSinEnviar_Con").show();
              $("#btnGuardarDatosCon").show();
              $("#btnEnviarDatosCon").show();
              $("#iconoEdoCon_Pend").show();
              break;

          case 3: // DATOS EN REVISION
              $("#lblDatosRevision_Con").show();
              $("#iconoEdoCon_Pend").show();

              <?php
              //if($this->session->userdata('EsAdmin')){
              if(verificar_permiso('WFBEM') == 3){ //<<<RPERAZA(2018.08.15): CASU 1033/2018?>
                $("#btnConfirmarDatosCon").show();<?php
              }
              ?>

              break;

          case 4: // DATOS CONFIRMADOS
              $("#lblDatosConfirmados_Con").show();
              $("#iconoEdoCon_Conf").show();

              <?php
              //if($this->session->userdata('EsAdmin')){
              if(verificar_permiso('WFBEM') == 3){ //<<<RPERAZA(2018.08.15): CASU 1033/2018?>
                  $("#btnConfirmarDatosCon").show();<?php
              }?>

              break;
      }

      $("#EstadoDatos_Con").val(idEstado);
  }

  function CambiaEstadoSinPareja(SinPareja){

    if( SinPareja == true ){
      $("#divDatosConyuge *").prop("disabled",true);
      $("#divDatosConyuge").hide();

      $("#EsEmpleado").prop('checked', false);
      $("#NombreConyuge").val('');
      $("#apPaternoConyuge").val('');
      $("#apMaternoConyuge").val('');
      $("#LugarTrabajo").val('');
      $("#DomTrabajo").val('');
      $("#Telefonos").val('');
      $("#Celularc").val('');
      $("#Parentesco").val(0);

    }
    else{
      $("#divDatosConyuge *").children().prop("disabled",false);
      $("#divDatosConyuge").show();

      $("#EsEmpleado").prop($("#EsEmpleado_Con").val());
      $("#NombreConyuge").val($("#Nombre_Con").val());
      $("#apPaternoConyuge").val($("#apPaterno_Con").val());
      $("#apMaternoConyuge").val($("#apMaterno_Con").val());
      $("#LugarTrabajo").val($("#LugarTrabajo_Con").val());
      $("#DomTrabajo").val($("#DomTrabajo_Con").val());
      $("#Telefonos").val($("#Telefonos_Con").val());
      $("#Celularc").val($("#Celular_Con").val());
      $("#Parentesco").val($("#IdParentesco_Con").val());
    }
  }

  <?php
  //if($this->session->userdata('EsAdmin')){ //Sólo disponible para el admin
  if(verificar_permiso('WFBEM') == 3){ //<<<RPERAZA(2018.08.15): CASU 1033/2018?>
    function GuardarDatosConyuge(){

      var ConyugeId= $('#ConyugeId').val();
      var EsEmpleado= $('#EsEmpleado').prop('checked');
      var IdEmpleado= $('#IdEmpleado').val();
      var apPaterno= $('#apPaternoConyuge').val();
      var apMaterno= $('#apMaternoConyuge').val();
      var Nombre= $('#NombreConyuge').val();
      var DomTrabajo= $('#DomTrabajo').val();
      var LugarTrabajo= $('#LugarTrabajo').val();
      var Telefonos= $('#Telefonos').val();
      var Celular= $('#Celularc').val();
      var Parentesco = $('#Parentesco option:selected').html();
      var IdParentesco= $('#Parentesco').val();
      var SinPareja= ($('#chkSinPareja').prop('checked') ? 1 : 0); //<<<RPERAZA(2018.07.06): CASU 0159/2018
      var IdHistorial = $('#IdHistorial_Con').val();
      var IdParentesco = 0;
      if( typeof(Parentesco) != "undefined" && Parentesco != "" ){
        IdParentesco = $('#Parentesco').val();
        Parentesco = 0;
      }
      if(ValidarFormConyuge() == true){
        $.ajax({
          url: "<?=base_url();?>empleado/GuardaConyuge",
          type: "POST",
          async: true,
          data: "IdEmpleado="+IdEmpleado+"&apPaterno="+apPaterno+"&apMaterno="+apMaterno+"&Nombre="+Nombre+"&DomTrabajo="+DomTrabajo+"&LugarTrabajo="+LugarTrabajo+"&Telefonos="+Telefonos+"&Celular="+Celular+"&Parentesco="+Parentesco+"&ConyugeId="+ConyugeId+"&EsEmpleado="+EsEmpleado+"&IdParentesco="+IdParentesco+"&SinPareja="+SinPareja+"&IdHistorial="+IdHistorial,
            error: function(XMLHttpRequest, errMsg, exception){
              var msg = "<p>jQuery message: <i>"+errMsg+"</i><br />XMLHttpRequest: <i>"+StatusMsg(XMLHttpRequest.status)+"</i></p>";
              alerta_emergente(msg, 'error');
            },
            success: function(htmlcode){
                        var r = htmlcode.substr(0,1);

                        switch(r){
                            case "@":
                                alerta_emergente('Se requieren permisos de administrador para esta acción.', 'error');
                                CargarDatosEmpleado();
                                break;
                            case "2":
                                alerta_emergente('No se pudo guardar la información de la pareja.', 'error');
                                break;
                            case "3":
                                alerta_emergente('No se pudieron actualizar los datos en la tabla de empleados.', 'error');
                                break;
                            case "4":
                                alerta_emergente('Ocurrió un error.', 'error');
                                break;
                            case "1":   //Todo correcto
                                alerta_emergente('Los datos de la pareja se guardaron correctamente.', 'success');
                                CargarDatosConyuge();
                                break;
                            default:
                                msg = htmlcode.split("-");
                                alerta_emergente(msg,"warning");
                                break;
                        }
                    }
        });
      }

      //return false;
    }
  <?php
  }
  ?>

  function GuardarDatosTMPConyuge(){

    var ConyugeId= $('#ConyugeId').val();
    var EsEmpleado= $('#EsEmpleado').prop('checked');
    var EmpleadoId= $('#IdEmpleado').val();
    var apPaterno= $('#apPaternoConyuge').val();
    var apMaterno= $('#apMaternoConyuge').val();
    var Nombre= $('#NombreConyuge').val();
    var DomTrabajo= $('#DomTrabajo').val();
    var LugarTrabajo= $('#LugarTrabajo').val();
    var Telefonos= $('#Telefonos').val();
    var Celular= $('#Celularc').val();
    var Parentesco = $('#Parentesco option:selected').html();
    var IdParentesco = 0;
    if( typeof(Parentesco) != "undefined" && Parentesco != "" ){
      IdParentesco = $('#Parentesco').val();;
    }
    var SinPareja= ($('#chkSinPareja').prop('checked') ? 1 : 0); //<<<RPERAZA(2018.07.06): CASU 0159/2018
    var IdHistorial = $('#IdHistorial_Con').val();

    if( ValidarFormConyuge() == true ){
      $.ajax({
        url: "<?=base_url();?>empleado/GuardaTMPConyuge",
        type: "POST",
        async: true,
        data: "EmpleadoId="+EmpleadoId+"&apPaterno="+apPaterno+"&apMaterno="+apMaterno+"&Nombre="+Nombre+"&DomTrabajo="+DomTrabajo+"&LugarTrabajo="+LugarTrabajo+"&Telefonos="+Telefonos+"&Celular="+Celular+"&Parentesco="+Parentesco+"&ConyugeId="+ConyugeId+"&EsEmpleado="+EsEmpleado+"&IdParentesco="+IdParentesco+"&SinPareja="+SinPareja+"&IdHistorial="+IdHistorial,
          error: function(XMLHttpRequest, errMsg, exception){
            var msg = "<p>jQuery message: <i>"+errMsg+"</i><br />XMLHttpRequest: <i>"+StatusMsg(XMLHttpRequest.status)+"</i></p>";
            alerta_emergente(msg, 'error');
          },
          success: function(htmlcode){
            var r = htmlcode.substr(0,1);
                  switch(r){
                      case "*":
                          alerta_emergente('Parámetros incorrectos.', 'error');
                          break;
                      case "0":
                          alerta_emergente('Ocurrió un error.', 'error');
                          break;
                      case "2":
                          alerta_emergente('No se pudieron guardar los datos.', 'error');
                          break;
                      case "1":   //Todo correcto
                          var IdHistorial = htmlcode.substr(1);

                          $("#IdHistorial_Con").val(IdHistorial);
                          alerta_emergente('Los datos de la pareja se guardaron correctamente.', 'success');
                          CargarDatosConyuge();
                          CargarDatosBeneficiarios();
                          CargarDatosPrestaciones();
                          break;
                      default:
                          msg = htmlcode.split("-");
                          alerta_emergente(msg,"warning");
                          break;
                  }
              },
              complete: function(request, json){
                  var IdHistorial = $("#IdHistorial_Con").val();
                  var ClaveEmpleado = $("#ClaveEmpleado").val();

                  if(IdHistorial > 0){
                      ObtenerEstadoDatosCon(ClaveEmpleado);
                  }
              }
      });
    }
  }

  function ObtenerEstadoDatosCon(ClaveEmpleado){ //<<<RPERAZA(2018.07.04): CASU 0159/2018
    $.ajax({
        url: "<?=base_url();?>empleado/ObtenerEstadoDatosConyuge",
        type: "POST",
        async: true,
        data: "ClaveEmpleado="+ClaveEmpleado,
        error: function(XMLHttpRequest, errMsg, exception){
            var msg = "<p>jQuery message: <i>"+errMsg+"</i><br />XMLHttpRequest: <i>"+StatusMsg(XMLHttpRequest.status)+"</i></p>";
            alerta_emergente(msg, 'error');
        },
        success: function(htmlcode){
            var r = htmlcode.substr(0,1);
            switch(r){
                case "*":
                    alerta_emergente('Parámetros incorrectos.', 'error');
                    break;
                case "0":
                    alerta_emergente('Ocurrió un error.', 'error');
                    break;
                case "1":   //Todo correcto
                    var idEstado = htmlcode.substr(1);
                    MuestraEstadoDatos_Conyuge(idEstado);
                    break;
                default:
                    msg = htmlcode.split("-");
                    alerta_emergente(msg,"warning");
                    break;

            }
        }
    });
  }

  function EnviarDatosTMPConyuge(){
    if($("#EstadoDatos_Con").val() == "2"){
        var IdHistorial = $("#IdHistorial_Con").val();

        $.ajax({
            url: "<?=base_url();?>empleado/EnviarDatosTMPConyuge",
            type: "POST",
            async: true,
            data: "IdHistorial="+IdHistorial,
            error: function(XMLHttpRequest, errMsg, exception){
                var msg = "<p>jQuery message: <i>"+errMsg+"</i><br />XMLHttpRequest: <i>"+StatusMsg(XMLHttpRequest.status)+"</i></p>";
                alerta_emergente(msg, 'error');
            },
            success: function(htmlcode){
                var r = htmlcode.substr(0,1);
                switch(r){
                    case "*":
                        alerta_emergente('Parámetros incorrectos.', 'error');
                        break;
                    case "0":
                        alerta_emergente('Ocurrió un error.', 'error');
                        break;
                    case "2":
                        alerta_emergente('No se pudieron enviar los datos.', 'error');
                        break;
                    case "1":   //Todo correcto
                        alerta_emergente('Los datos se enviaron a revisión correctamente.', 'success');
                        var ClaveEmpleado = $("#ClaveEmpleado").val();
                        if(IdHistorial > 0){
                            ObtenerEstadoDatosCon(ClaveEmpleado);
                        }

                        break;
                    default:
                        msg = htmlcode.split("-");
                        alerta_emergente(msg,"warning");
                        break;

                }
            }
        });
    }
    else{
        alerta_emergente('Debe guardar los datos antes de poder enviarlos.', 'warning');
    }
  }


  function ValidarFormConyuge(){
    var resultado = true;

    if( $("#chkSinPareja").prop('checked') == false ){  //<<<RPERAZA(2018.07.06): CASU 0159/2018

      if (resultado == true && $('#NombreConyuge').val().trim() == "" ){
          resultado = false;
          $('#NombreConyuge').focus();
          alerta_emergente('Se requiere el <b>Nombre de la pareja</b>', 'warning');
      }

      if (resultado == true && $('#apPaternoConyuge').val().trim() == "" ){
          resultado = false;
          $('#apPaternoConyuge').focus();
          alerta_emergente('Se requiere el <b>Apellido paterno</b>', 'warning');
      }

      if (resultado == true){
        var Parentesco = $('#Parentesco').val();
        if( typeof(Parentesco) == "undefined" || Parentesco == "" || $('#Parentesco').val() == "0"){
          resultado = false;
          $('#Parentesco').focus();
          alerta_emergente('Se requiere el <b>Parentesco</b>', 'warning');
        }
      }

      if ( resultado == true && $('#EsEmpleado').prop('checked') && !ExisteEmpleado() ){
          var apPaterno= $('#apPaternoConyuge').val().trim();
          var apMaterno= $('#apMaternoConyuge').val().trim();
          var Nombre= $('#NombreConyuge').val().trim();
          resultado = false;
          alerta_emergente('No existe el empleado <b>' + Nombre.toUpperCase() + ' ' + apPaterno.toUpperCase() + ' ' + apMaterno.toUpperCase() + '</b>. Corrija el nombre o desactive la casilla "Es empleado".', 'warning');
      }

    }

    return resultado;
  }

  function ExisteEmpleado(){
    var apPaterno= $('#apPaternoConyuge').val().trim();
    var apMaterno= $('#apMaternoConyuge').val().trim();
    var Nombre= $('#NombreConyuge').val().trim();
    var resultado = false;

   $.ajax({
      url: "<?=base_url();?>inicio/VerificaExisteEmpleado",
      type: "POST",
      async: false,
      data: "apPaterno=" + apPaterno + "&apMaterno=" + apMaterno + "&Nombre=" + Nombre,
        error: function(XMLHttpRequest, errMsg, exception){
          var msg = "<p>jQuery message: <i>"+errMsg+"</i><br />XMLHttpRequest: <i>"+StatusMsg(XMLHttpRequest.status)+"</i></p>";
          alerta_emergente(msg, 'error');
        },
        success: function(htmlcode){
          var r = htmlcode.substr(0,1);
          switch(r){
            case "@": //acceso denegado
              alerta_emergente('Acceso denegado.', 'error');
              break;
            case "*": //ocurrio un error
              alerta_emergente('Parámetros incorrectos', 'error');
              break;
            case "1": //Todo correcto
              var existe = htmlcode.substr(1);
              if(existe == "1"){
                resultado = true;
              }
              break;
            default:
              msg = htmlcode.split("-");
              alerta_emergente(msg);
              break;
          }
        }
    });

   return resultado;
  }

</script>
