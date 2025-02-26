  <div id="divContModulo" class="card-body">
    <div class="box-header with-border">
        <h5><b>Prestaciones</b></h5>
        <?php
        $pres = [];
        $bandPrestacion = false;
        if( !empty($estudiantes) ){
          foreach( $estudiantes as $item ){
            $id = (empty($item->IdHistorial) ? $item->IdEstudiante : $item->IdHistorial);
            if( !empty($item->Guarderia) || !empty($item->Beca) || !empty($item->Utiles) ){
              if( !empty($item->Guarderia) ) $pres[$id]['guarderia'] = 1;
              if ( !empty($item->Beca) )  $pres[$id]['beca'] = 1;
              if ( !empty($item->Utiles) ) $pres[$id]['utiles'] = 1;
              $bandPrestacion = true;
            }
          }
        }

        if( $SinPrestaciones || $bandPrestacion == false ){
        ?>
          <h4>
            <span id="lblDatosSinActualizar_LstEst" class="label label-danger">DATOS NO ACTUALIZADOS</span>
            <span id="lblDatosSinEnviar_LstEst" class="label label-warning">DATOS SIN ENVIAR</span>
            <span id="lblDatosRevision_LstEst" class="label label-info">DATOS EN REVISIÓN</span>
            <span id="lblDatosConfirmados_LstEst" class="label label-green">DATOS CONFIRMADOS</span>
          </h4>
          <br/>
          <div class="checkbox">
            <label class="control-label" ><input type="checkbox" id="SinPrestaciones" name="SinPrestaciones" for="SinPrestaciones" checked="checked" disabled="disabled">Sin prestaciones solicitadas</label>
          </div>
          &nbsp;&nbsp;
          <?php
            if( ($es_periodo_captura) | verificar_permiso('WFBEM') == 3){ //<<<RPERAZA(2018.08.15): CASU 1033/2018?>
              <button id="btnNuevaPrestacion" type="button" class="btn btn-primary" onclick="CargarCapturaPrestacion(0);" title="Nueva prestación"><i class="fa fa-plus"></i> Nuevo</button><?php
            }
            ?>
            <button type="button" id="btnGuardarDatosLstPrest" class="btn btn-success" onclick="GuardarTMPSinPrestaciones();" title="Guardar"><i class="fa fa-save"></i> Guardar</button>

            <?php
            //if($this->session->userdata('EsAdmin')){
            if(verificar_permiso('WFBEM') == 3){ //<<<RPERAZA(2018.08.15): CASU 1033/2018
            ?>
              <button type="button" id="btnConfirmarDatosLstEst" class="btn btn-success" onclick="GuardarSinPrestaciones();" title="Confirmar datos"><i class="fa fa-check"></i> Confirmar datos</button>
        <?php
            }
        }
        ?>
    </div>

    <div class="box-body">
      <input type="hidden" id="EstadoDatos_LstEst" value="<?php echo $estado_datos;?>" />
      <?php
        if( $SinPrestaciones == false && $bandPrestacion ){?>
          <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <table id="tblHijos" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Nombre &nbsp;&nbsp;<?php
                        if( ($es_periodo_captura && ($estado_datos == 1 || $estado_datos == 2) ) | verificar_permiso('WFBEM') == 3 ){ //<<<RPERAZA(2018.08.15): CASU 1033/2018
                          ?>
                          <button type="button" class="btn btn-primary btn-xs m-r-5" onclick="CargarCapturaPrestacion(0);" title="Capturar nuevo Estudiante"><i class="fa fa-plus"></i> Nuevo</button><?php
                        }?>
                      </th>
                      <th>Prestación</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    if( $estudiantes ):;
                      foreach( $estudiantes as $item ):;
                        $id = (empty($item->IdHistorial) ? $item->IdEstudiante : $item->IdHistorial);
                        if( !empty($item->Guarderia) || !empty($item->Beca) || !empty($item->Utiles) ){
                          foreach( $pres[$id] as $key => $value ) {
                      ?>
                        <tr id="tr_<?=$item->IdEstudiante;?>">
                          <td>
                            <input type="hidden" class="form-control" name="EstadoDatos[]" value="<?= $item->EstadoDatos; ?>"><?php ;//<<<RPERAZA(2018.10.07
                            if( $item->EstadoDatos > 0 ){
                              if( $item->EstadoDatos == 4 ){?>
                                <span id="iconoEst_Conf_<?=$item->IdEstudiante.'-'.$item->IdHistorial;?>" class="text-success btn-icon btn-circle btn-xs"><i class="fa fa-check"></i></span><?php
                              }
                              else{?>
                                <span id="iconoEst_Pend_<?=$item->IdEstudiante.'-'.$item->IdHistorial;?>" class="text-danger btn-icon btn-circle btn-xs"><i class="fa fa-exclamation"></i></span><?php
                              }
                            }?>
                            <b><?= LimpiaCadena($item->Nombre)." ".LimpiaCadena($item->apPaterno)." ".LimpiaCadena($item->ApMaterno); ?>
                          </td>
                          <?php
                          $prestacion = ( ($key == 'guarderia') ? 'Guardería' : (($key == 'beca') ? 'Beca' : 'Útiles') );
                          $idPrestacion = ( ($key == 'guarderia') ? 1 : (($key == 'beca') ? 2 : 3) );
                          ?>
                          <td><?= $prestacion; ?></td>
                          <td class="text-center"><?php
                            //$IdRegistro = $item->IdHistorial; //<<<RPERAZA(2018.07.10)
                            $IdRegistro = $item->IdEstudiante;
                            $tipoRegistro = 1; // 1=Registro confirmado de estudiante, 3=Registro temporal de estudiante, (se corresponde con clave de cat_SecionImagen)

                            if( $item->IdEstudiante == 0 ){
                              $IdRegistro = $item->IdHistorial;
                              $tipoRegistro = 3; //Registro temporal de estudiante
                            }
                            if($IdRegistro > 0):; ?>
                              <button  type="button" class="btn btn-xs btn-default" onclick="CargarCapturaPrestacion(<?= $IdRegistro;?>,<?=$tipoRegistro;?>,<?=$idPrestacion;?>);" title="Editar información de la prestación"><i class="fas fa-pencil-alt"></i></button>
                              <button  type="button" class="btn btn-xs btn-default" onclick="PreparaSubidaImagen(<?= $IdRegistro; ?>,<?=$tipoRegistro;?>,<?=$item->EstadoDatos;?>,1);" title="Imágenes de la prestación"><i class="fa fa-camera"></i></button><?php

                              if( verificar_permiso('WFBEM') == 3 | $tipoRegistro == 3 | empty($item->Enviado) ){ //Permite eliminar si se es Admin o si el registro es temporal o no ha sido enviado //<<<RPERAZA(2018.08.15): CASU 1033/2018 ?>
                                <button  type="button" class="btn btn-xs btn-danger" title="Eliminar Prestación" onclick="Elimina_Prestacion(<?= $IdRegistro;?>,<?=$tipoRegistro;?>,<?=$idPrestacion;?>,<?=$item->EsEmpleado;?>);"><i class="fa fa-trash"></i></button><?php
                              }
                            endif; ?>
                          </td>
                        </tr>
                        <?php
                          }
                        }
                      endforeach;
                    endif;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="panel-footer text-end">
            <button type="button" id="btnEnviarDatosEst" class="btn btn-primary" onclick="EnviarDatosTMPPrestaciones();" title="Enviar datos a revisión"><i class="fa fa-check-circle"></i> Enviar</button>
          </div><?php
        }?>
    </div>
  </div>

<div class="modal fade" id="modalCapturaEstudiante">
  <div class="modal-dialog modal-lg">
    <div id="divFormCapturaEstudiante" class="modal-content">
    </div>
  </div>
</div>

<script type="text/javascript">

  setTimeout(function FuncionesIniciales(){ //<<<RPERAZA(2018.07.10)
    ActivaBotonEnviar();

    var EstadoDatos_LstEst = $("#EstadoDatos_LstEst").val(); //<<<RPERAZA(2018.07.11): CASU 0159/2018
    MuestraEstadoDatos_ListaEstudiantes(EstadoDatos_LstEst);
  });

function MuestraEstadoDatos_ListaEstudiantes(idEstado){ //<<<RPERAZA(2018.07.11): CASU 0159/2018
  idEstado = parseInt(idEstado);

  $("#lblDatosSinEnviar_LstEst").hide();
  $("#lblDatosRevision_LstEst").hide();
  $("#lblDatosConfirmados_LstEst").hide();
  $("#lblDatosSinActualizar_LstEst").hide();

  $("#btnNuevaPrestacion").hide();
  $("#btnGuardarDatosLstPrest").hide();
  $("#btnConfirmarDatosLstEst").hide();
  $("#btnEnviarDatosEst").hide();

  $("#iconoEdoEst_Pend").hide();  //<<<RPERAZA(2018.07.06): CASU 0159/2018
  $("#iconoEdoEst_Conf").hide();

  switch(idEstado){
      case 0: // 0 significa que no es periodo de captura, por tanto no se muestra ninguna etiqueta
        <?php
        //if($this->session->userdata('EsAdmin')){
        if(verificar_permiso('WFBEM') == 3){ //<<<RPERAZA(2018.08.15): CASU 1033/2018?>
          $("#btnConfirmarDatosLstEst").show();<?php
        }?>
        break;

      case 1: // DATOS SIN ACTUALIZAR
        $("#lblDatosSinActualizar_LstEst").show();
        $("#btnNuevaPrestacion").show();
        $("#btnGuardarDatosLstPrest").show();
        $("#iconoEdoEst_Pend").show();
        break;

      case 2: // DATOS NO ENVIADOS
        $("#lblDatosSinEnviar_LstEst").show();
        $("#btnNuevaPrestacion").show();
        $("#btnGuardarDatosLstPrest").show();
        $("#btnEnviarDatosLstEst").show();
        $("#btnEnviarDatosEst").show();
        $("#iconoEdoEst_Pend").show();
        <?php if(verificar_permiso('WFBEM') == 3){ ?>
          $("#btnGuardarDatosLstPrest").hide();
          $("#btnConfirmarDatosLstEst").show();
        <?php
        }?>
        break;

      case 3: // DATOS EN REVISION
        $("#lblDatosRevision_LstEst").show();
        $("#iconoEdoEst_Pend").show();
        $("#btnNuevaPrestacion").show();
        <?php
        //if($this->session->userdata('EsAdmin')){
        if(verificar_permiso('WFBEM') == 3){ //<<<RPERAZA(2018.08.15): CASU 1033/2018?>
          $("#btnConfirmarDatosLstEst").show();<?php
        }?>

        break;

      case 4: // DATOS CONFIRMADOS
        $("#lblDatosConfirmados_LstEst").show();
        $("#iconoEdoEst_Conf").show();

        <?php
        //if($this->session->userdata('EsAdmin')){
        if(verificar_permiso('WFBEM') == 3){ //<<<RPERAZA(2018.08.15): CASU 1033/2018?>
          $("#btnNuevaPrestacion").show();
          $("#btnConfirmarDatosLstEst").show();
        <?php
        }
        else{
        ?>
          $("#btnNuevaPrestacion").hide();
        <?php
        }
        ?>

        break;
  }

  $("#EstadoDatos_LstEst").val(idEstado);
}

function ActivaBotonEnviar(){ //<<<RPERAZA(2018.07.10)
  $("#btnEnviarDatosEst").hide();
  var mostrar = true;
  var arrEstados = null;

  var values = $("input[name='EstadoDatos[]']")
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

  if(mostrar){
    $("#btnEnviarDatosEst").show();
  }

}

function CargarCapturaPrestacion(IdRegistro,tipoRegistro,idPrestacion) {
  var IdEmpleado = $('#IdEmpleado').val(),
      ClaveEmpleado = $('#ClaveEmpleado').val();
  cargamodalGenerica('<?= base_url() ?>empleado/CargarCapturaPrestacion/','#modContenido', '#modGeneral', "IdRegistro="+IdRegistro+'&IdEmpleado='+IdEmpleado+'&tipoRegistro='+tipoRegistro+'&ClaveEmpleado='+ClaveEmpleado+'&idPrestacion='+idPrestacion, 'Nueva prestación',1);
  return false;
}

function CargarCapturaEstudiante(IdRegistro, tipoRegistro){
    var IdEmpleado = $('#IdEmpleado').val();

    $.ajax({
      url: "<?=base_url();?>empleado/CargarCapturaEstudiante",
      type: "POST",
      async: true,
      data: "IdRegistro=" + IdRegistro + '&IdEmpleado='+ IdEmpleado  + '&tipoRegistro='+ tipoRegistro ,
      error: function(XMLHttpRequest, errMsg, exception){
        var msg = "<p>jQuery message: <i>"+errMsg+"</i><br />XMLHttpRequest: <i>"+StatusMsg(XMLHttpRequest.status)+"</i></p>";
        alerta_emergente(msg, 'error');
      },
      success: function(htmlcode){
        $("#divFormCapturaEstudiante").html(htmlcode);
        $("#modalCapturaEstudiante").modal('show');
      }
    });
    return false;
  }

  function ocultarFormCaptura(){
    $("#modalCapturaEstudiante").modal('hide');
    if ($('.modal-backdrop').is(':visible')){
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();
    }
  }

  function Elimina_Prestacion(IdRegistro, tipoRegistro, idPrestacion,EsEmpleado){
    var IdEmpleado = $('#IdEmpleado').val();
    swal.fire({
       title: "Alerta",
       text: "¿Confirma que desea eliminar la prestación seleccionada?",
       icon: "question",
       showCancelButton: true,
       showLoaderOnConfirm: true,
       allowOutsideClick: false,
       preConfirm: function () {
         return new Promise(function(resolve) {
           $.ajax({
              url: '<?= base_url() ?>empleado/EliminaPrestacion/',
              type: 'POST',
              async: true,
              data: {IdRegistro:IdRegistro,IdEmpleado:IdEmpleado,tipoRegistro:tipoRegistro,idPrestacion:idPrestacion,EsEmpleado:EsEmpleado},
              dataType: "JSON",
              error: function(XMLHttpRequest, errMsg, exception){
                var msg = "<p>jQuery message: <i>"+errMsg+"</i><br />XMLHttpRequest: <i>"+StatusMsg(XMLHttpRequest.status)+"</i></p>";
                alerta_emergente(msg, 'error');
                swal.close();
              },
              success: function(data){
                if(data.status == false) {
                  alerta_emergente(data.message,"error");
                  swal.close();
                }
                else{
                  alerta_emergente(data.message,"success");
                  CargarDatosPrestaciones();
                  swal.close();
                }
              }
            });
          });
        }
      });
    return false;
}

function EnviarDatosTMPPrestaciones(){
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
  if( $bandPrestacion == false ){?>
    function GuardarTMPSinPrestaciones (){

      if( $("#SinPrestaciones").prop('checked') == true ) {
        var IdEmpleado= $('#IdEmpleado').val();

        $.ajax({
          url: "<?=base_url();?>empleado/GuardarTMPSinPrestaciones",
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
    }

    function GuardarSinPrestaciones (){

      if( $("#SinPrestaciones").prop('checked') == true ) {
        var IdEmpleado= $('#IdEmpleado').val();

        $.ajax({
          url: "<?=base_url();?>empleado/GuardarTMPSinPrestaciones",
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
    }

  <?php
  }
  ?>

</script>
