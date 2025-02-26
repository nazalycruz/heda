<input type="hidden" id="EstadoDatos_Benef" name="EstadoDatos_Benef" value="<?php echo $estado_datos;?>" />

<div class="card-body">
  <div class="row">
    <div class="box-header with-border">
      <div class="box-header with-border">
      </div>
        <?php
        if( $SinHijos ){

        ?>
          <h4>
            <span id="lblDatosSinActualizar_Benef" class="label label-danger">DATOS NO ACTUALIZADOS</span>
            <span id="lblDatosSinEnviar_Benef" class="label label-warning">DATOS SIN ENVIAR</span>
            <span id="lblDatosRevision_Benef" class="label label-info">DATOS EN REVISIÓN</span>
            <span id="lblDatosConfirmados_Benef" class="label label-green">DATOS CONFIRMADOS</span>
          </h4>
          <br/>
          <div class="checkbox">
            <label class="control-label">
              <input type="checkbox" id="SinBenef" name="SinBenef" checked="checked" disabled="disabled"> Sin otros beneficiarios
            </label>
          </div>
          &nbsp;&nbsp;
          <?php
          //if( $estado_datos ){
            if( ($es_periodo_captura && ($estado_datos == 1 || $estado_datos == 2) ) | verificar_permiso('WFBEM') == 3 ){ ?>
              <button type="button" class="btn btn-primary" onclick="CargarCapturaBeneficiario(0);" title="Capturar nuevo Beneficiario"><i class="fa fa-plus"></i> Nuevo</button>
              <button type="button" id="btnGuardarDatosLstBenef" class="btn btn-success" onclick="GuardarTMPSinBeneficiarios();" title="Guardar y enviar"><i class="fa fa-save"></i> Guardar y enviar</button>
            <?php
            }
            ?>
            <?php
            if( verificar_permiso('WFBEM') == 3 && $SinHijos ){ //<<<RPERAZA(2018.08.15): CASU 1033/2018?>
              <button type="button" id="btnConfirmarDatosLstBenef" class="btn btn-success" onclick="GuardarSinBeneficiarios();" title="Confirmar datos"><i class="fa fa-check"></i> Confirmar datos</button><?php
            }
          //}
        }?>
    </div>
  </div>
</div>

<div id="divContModulo" class="card-body">
  <?php
  if( !empty($conyuge) && ($conyuge->SinPareja == 0)  ){
  ?>
    <div class="box-header with-border">
      <h5 class="box-title"><b>Pareja</b></h5>
    </div>
    <div class="box-body">
      <div class="row">
        <div class="col-md-12">
          <table id="tblConyuge" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>
                  Nombre
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <?= LimpiaCadena($conyuge->Nombre).' '.LimpiaCadena($conyuge->apPaterno).' '.LimpiaCadena($conyuge->apMaterno); ?>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  <?php
  }
  ?>

  <?php
  if( !$SinHijos ){
  ?>
  <div class="box-header with-border">
    <h5 class="box-title"><b>Beneficiarios</b></h5>
  </div>
  <div class="box-body">
    <div class="row">
      <div class="col-md-12">
        <div class="table-responsive">
          <table id="tblHijos" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Nombre &nbsp;&nbsp;<?php
                  if( ($es_periodo_captura && ($estado_datos == 1 || $estado_datos == 2) ) | verificar_permiso('WFBEM') == 3 ){  //<<<RPERAZA(2018.08.15): CASU 1033/2018
                    ?>
                    <button type="button" class="btn btn-primary btn-xs m-r-5" onclick="CargarCapturaBeneficiario(0);" title="Capturar nuevo Beneficiario"><i class="fa fa-plus"></i> Nuevo</button><?php
                  }?>
                </th><?php ;//<<<RPERAZA(2018.10.07
                if( $es_periodo_captura ){?>
                  <th>Status</th><?php
                }?>
                <th>Parentesco</th>
                <th>Sexo</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php
              if( $estudiantes ):;
                foreach( $estudiantes as $item ):;
                  if( empty($item->EsEmpleado) ){
              ?>
                  <tr id="tr_<?=$item->IdEstudiante;?>">
                    <td>
                      <input type="hidden" name="EstadoDatosBenef[]" value="<?= $item->EstadoDatos; ?>"><?php ;//<<<RPERAZA(2018.10.07
                      if( $item->EstadoDatos > 0 ){
                        if( $item->EstadoDatos == 4 ){?>
                          <span id="iconoEst_Conf_<?=$item->IdEstudiante.'-'.$item->IdHistorial;?>" class="text-success btn-icon btn-circle btn-xs"><i class="fa fa-check"></i></span><?php
                        }
                        else{?>
                          <span id="iconoEst_Pend_<?=$item->IdEstudiante.'-'.$item->IdHistorial;?>" class="text-danger btn-icon btn-circle btn-xs"><i class="fa fa-exclamation"></i></span><?php
                        }
                      }?>
                      <?= LimpiaCadena($item->Nombre)." ".LimpiaCadena($item->apPaterno)." ".LimpiaCadena($item->ApMaterno); ?>
                    </td><?php
                    if( $item->EstadoDatos > 0 ){?>
                      <td><?php
                        switch( $item->EstadoDatos ){
                          case 1:?>
                            <span id="lblDatosSinActualizar_RegEst_<?=$item->IdEstudiante.'-'.$item->IdHistorial;?>" class="label label-danger" >DATOS NO ACTUALIZADOS</span><?php
                            break;
                          case 2:?>
                            <span id="lblDatosSinEnviar_RegEst_<?=$item->IdEstudiante.'-'.$item->IdHistorial;?>" class="label label-warning" >DATOS SIN ENVIAR</span><?php
                            break;
                          case 3:?>
                            <span id="lblDatosRevision_RegEst_<?=$item->IdEstudiante.'-'.$item->IdHistorial;?>" class="label label-info" >DATOS EN REVISIÓN</span><?php
                            break;
                          case 4:?>
                            <span id="lblDatosConfirmados_RegEst_<?=$item->IdEstudiante.'-'.$item->IdHistorial;?>" class="label label-green" >DATOS CONFIRMADOS</span><?php
                            break;
                        }?>
                      </td><?php
                    }?>
                    <td><?= LimpiaCadena($item->Parentesco); ?></td>
                    <td><?= ($item->Sexo  ? 'Femenino' : 'Masculino')  ?> </td>
                    <td class="text-center"><?php
                      $IdRegistro = $item->IdEstudiante; //<<<RPERAZA(2018.07.10)
                      $tipoRegistro = 1; // 1=Registro confirmado de estudiante, 3=Registro temporal de estudiante, (se corresponde con clave de cat_SecionImagen)

                      if( $item->IdEstudiante == 0){
                        $IdRegistro =  $item->IdHistorial;
                        $tipoRegistro = 3; //Registro temporal de estudiante
                      }

                      if( $IdRegistro > 0 ):; ?>
                        <button  type="button" class="btn btn-xs btn-default" onclick="CargarCapturaBeneficiario(<?= $IdRegistro;?>,<?=$tipoRegistro;?>);" title="Editar información del beneficiario"><i class="fas fa-pencil-alt"></i></button>
                        <button  type="button" class="btn btn-xs btn-default" onclick="PreparaSubidaImagen(<?= $IdRegistro; ?>,<?=$tipoRegistro;?>,<?=$item->EstadoDatos;?>,1);" title="Imágenes del beneficiario"><i class="fa fa-camera"></i></button><?php

                        if(verificar_permiso('WFBEM') == 3 | $tipoRegistro == 3){ //Permite eliminar si se es Admin o si el registro es temporal //<<<RPERAZA(2018.08.15): CASU 1033/2018 ?>
                          <button  type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#modalConfirmaEliminacion" title="Eliminar Beneficiario" onclick="Elimina_Beneficiario(<?= $IdRegistro;?>,<?=$tipoRegistro;?>);"><i class="fa fa-trash"></i></button><?php
                        }
                      endif; ?>
                    </td>
                  </tr><?php
                  }
                endforeach;
              endif;?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="panel-footer text-end">
      <button type="button" id="btnEnviarDatosBenef" class="btn btn-primary" onclick="EnviarDatosTMPBeneficiarios();" title="Enviar datos a revisión"><i class="fa fa-check-circle"></i> Enviar</button>
    </div>

  </div>
</div>
<?php
}
?>

<script type="text/javascript">
  setTimeout(function FuncionesIniciales(){
    ActivaBotonEnviarBenef();
    var EstadoDatos_Benef = $("#EstadoDatos_Benef").val();
    MuestraEstadoDatos_ListaBeneficiarios(EstadoDatos_Benef);
  });

  function ActivaBotonEnviarBenef(){
    $("#btnEnviarDatosBenef").hide();
    var mostrar = true;
    var arrEstados = null;

    var values = $("input[name='EstadoDatosBenef[]']")
                .map(function(){return $(this).val();}).get() + '';

    if( values != "" ){
      arrEstados = values.split(",");

      for(i = 0; i < arrEstados.length; i++ ){
        if( arrEstados[i] != 2 ){
          mostrar = false;
          break;
        }
      }
    }

    if( mostrar ){
      $("#btnEnviarDatosBenef").show();
    }

  }

  function MuestraEstadoDatos_ListaBeneficiarios(idEstado) {
    idEstado = parseInt(idEstado);

    $("#lblDatosSinEnviar_Benef").hide();
    $("#lblDatosRevision_Benef").hide();
    $("#lblDatosConfirmados_Benef").hide();
    $("#lblDatosSinActualizar_Benef").hide();
    $("#btnGuardarDatosLstBenef").hide();
    $("#iconoEdoBenef_Pend").hide();
    $("#iconoEdoBenef_Conf").hide();

    switch(idEstado){
      case 0: // 0 significa que no es periodo de captura, por tanto no se muestra ninguna etiqueta
          <?php
          if(verificar_permiso('WFBEM') == 3){
          ?>
            $("#btnConfirmarDatosCon").show();
          <?php
          }
          ?>
          break;

      case 1: // DATOS SIN ACTUALIZAR
          $("#lblDatosSinActualizar_Benef").show();
          // $("#btnGuardarDatosBenef").show();
          $("#iconoEdoBenef_Pend").show();
          $("#btnGuardarDatosLstBenef").show();
          break;

      case 2: // DATOS NO ENVIADOS
          $("#lblDatosSinEnviar_Benef").show();
          // $("#btnGuardarDatosBenef").show();
          // $("#btnEnviarDatosBenef").show();
          $("#btnGuardarDatosLstBenef").show();
          $("#iconoEdoBenef_Pend").show();
          break;

      case 3: // DATOS EN REVISION
          $("#lblDatosRevision_Benef").show();
          $("#iconoEdoBenef_Pend").show();

          <?php
          if(verificar_permiso('WFBEM') == 3){
          ?>
            $("#btnGuardarDatosLstBenef").hide();
            // $("#btnConfirmarDatosBenef").show();
          <?php
          }
          ?>

          break;

      case 4: // DATOS CONFIRMADOS
          $("#lblDatosConfirmados_Benef").show();
          $("#iconoEdoBenef_Conf").show();
          <?php
          if(verificar_permiso('WFBEM') == 3){
          ?>
            $("#btnConfirmarDatosCon").show();<?php
          }?>

          break;
    }
  }

  function CargarCapturaBeneficiario(IdRegistro, tipoRegistro){
    var IdEmpleado = $('#IdEmpleado').val();
    cargamodalGenerica('<?= base_url() ?>index.php/empleado/CargarCapturaBeneficiario/','#modContenido', '#modGeneral', "IdRegistro="+IdRegistro+'&IdEmpleado='+IdEmpleado+'&tipoRegistro='+tipoRegistro, 'Datos del Beneficiario',1);
    return false;
  }

  function Elimina_Beneficiario(IdRegistro, tipoRegistro){
    var IdEmpleado = $('#IdEmpleado').val();
    swal.fire({
       title: "Alerta",
       text: "¿Confirma que desea eliminar al beneficiario seleccionado?",
       icon: "question",
       showCancelButton: true,
       showLoaderOnConfirm: true,
       allowOutsideClick: false,
       preConfirm: function () {
         return new Promise(function(resolve) {
           $.ajax({
              url: '<?= base_url() ?>empleado/EliminaEstudiante/',
              type: 'POST',
              async: true,
              data: {IdRegistro:IdRegistro,IdEmpleado:IdEmpleado,tipoRegistro:tipoRegistro},
              error: function(XMLHttpRequest, errMsg, exception){
                var msg = "<p>jQuery message: <i>"+errMsg+"</i><br />XMLHttpRequest: <i>"+StatusMsg(XMLHttpRequest.status)+"</i></p>";
                alerta_emergente(msg, 'error');
                swal.close();
              },
              success: function(htmlcode){
                alerta_emergente('El beneficiario se eliminó correctamente.','success');
                CargarDatosBeneficiarios();
                CargarDatosPrestaciones();
                swal.close();
              }
            });
          });
        }
      });
    return false;
}

function EnviarDatosTMPBeneficiarios(){
  var IdEmpleado = $("#IdEmpleado").val();

  $.ajax({
      url: "<?=base_url();?>empleado/EnviarDatosTMPBeneficiarios",
      type: "POST",
      async: true,
      data: {IdEmpleado:IdEmpleado},
      dataType: "JSON",
      error: function(XMLHttpRequest, errMsg, exception){
          var msg = "<p>jQuery message: <i>"+errMsg+"</i><br />XMLHttpRequest: <i>"+StatusMsg(XMLHttpRequest.status)+"</i></p>";
          alerta_emergente(msg, 'error');
      },
      success: function(data){
        if(data.status == false) {
          alerta_emergente(data.message,"error");
        }
        else{
          alerta_emergente(data.message,"success");
          CargarDatosBeneficiarios();
          CargarDatosPrestaciones();
        }
      }
    });
}

<?php
if( $SinHijos ){?>
  function GuardarTMPSinBeneficiarios (){

    if( $("#SinBenef").prop('checked') == true ) {
      var IdEmpleado= $('#IdEmpleado').val();

      $.ajax({
        // url: "<?=base_url();?>inicio/GuardarTMPEstudianteSinHijos",
        url: "<?=base_url();?>empleado/GuardarTMPSinBeneficiarios",
        type: "POST",
        async: true,
        data: "IdEmpleado="+IdEmpleado,
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
                  alerta_emergente('La información se guardó y se envió correctamente.', 'success');
                  CargarDatosBeneficiarios();
                  CargarDatosPrestaciones();
                  break;
              default:
                  msg = htmlcode.split("-");
                  alerta_emergente(msg,"warning");
                  break;
          }

        }

      });
    }
  }
<?php
}
?>

<?php
if( verificar_permiso('WFBEM') == 3 ){
?>
  function GuardarSinBeneficiarios (){ //<<<RPERAZA(2018.07.12): CASU 0159/2018
    if( $("#SinBenef").prop('checked') == true ) {
      var IdEmpleado= $('#IdEmpleado').val();
      $.ajax({
        url: "<?=base_url();?>empleado/GuardarSinBeneficiarios",
        type: "POST",
        async: true,
        data: "IdEmpleado="+IdEmpleado,
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
                  alerta_emergente('La información se guardó correctamente.', 'success');
                  CargarDatosBeneficiarios();
                  CargarDatosPrestaciones();

                  break;
              default:
                  msg = htmlcode.split("-");
                  alerta_emergente(msg,"warning");
                  break;
          }

        }

      });
    }
  }
<?php
}?>

</script>
