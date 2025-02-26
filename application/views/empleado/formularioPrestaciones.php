<?php
// var_dump($beneficiario);
// var_dump($beneficiarios);
$attributes = array("id" => "frmAgregaPrestacion", "name" => "frmAgregaPrestacion", "onsubmit" => "return GuardarBeneficiosConcedidos(this, event);");
echo form_open("empleado/GuardarBeneficiosConcedidos", $attributes);
?>
<div id="divDatosEstudiante" class="">
  <div class="modal-header bg-pjey text-white">
    <h4><b>Datos de la Prestación</b></h4>
  </div>
  <div class="card-body">
    <h4>
      <span id="lblDatosSinActualizar_Pres" class="label label-danger">BENEFICIARIO ACTUALIZADO</span>
      <span id="lblDatosSinEnviar_Pres" class="label label-warning">BENEFICIARIO SIN ENVIAR</span>
      <span id="lblDatosRevision_Pres" class="label label-info" >BENEFICIARIO EN REVISIÓN</span>
      <span id="lblDatosConfirmados_Pres" class="label label-green">BENEFICIARIO CONFIRMADO</span>
    </h4>
      <input type="hidden" id="IdEmpleado" name="IdEmpleado" value="<?php echo $IdEmpleado; ?>">
      <input type="hidden" id="IdEstudiante" name="IdEstudiante" value="<?php echo (!empty($estudiante->IdEstudiante) ? $estudiante->IdEstudiante : $estudiante->IdHistorial);?>">
      <input type="hidden" id="IdHistorial_Pres" name="IdHistorial_Pres" value="<?php echo $estudiante->IdHistorial;?>" />
      <input type="hidden" id="EstadoDatos_Est" value="<?php echo $estudiante->EstadoDatos;?>" />
      <input type="hidden" id="Escolaridad_Pres" value="<?php echo $estudiante->EscolaridadId;?>" />
      <input type="hidden" id="Colegiatura_Est" value="<?php echo $estudiante->Colegiatura;?>" />
      <input type="hidden" id="FLimitePago_Est" value="<?php echo $estudiante->FLimitePago;?>" />
      <input type="hidden" id="fEnvioDatos_Est" value="<?php echo cambiaf_a_normal($estudiante->fEnvioDatos);?>" />
      <?php
      $beneficiario = (!empty($estudiante->IdEstudiante) ? $estudiante->IdEstudiante : $estudiante->IdHistorial);
       ?>
      <div class="row">
        <div class="col-sm-2">
          <label>&nbsp;</label>
          <div class="form-check">
            <input type="checkbox" value="1" id="EsEmpleadoBenef" name="EsEmpleadoBenef" for="EsEmpleadoBenef" <?php echo ($estudiante->EsEmpleado ? 'checked="checked"' : '') ?> onclick="CambiaEmpleado();" <?= ($estudiante->IdEstudiante > 0 && $estudiante->EsEmpleado == true ? 'disabled="disabled"' : '');?> >
            <label class="form-check-label" for="defaultCheckbox">El empleado</label>
          </div>
        </div>

        <div class="col-sm-10" id="muestra-beneficiario">
          <div class="form-group">
            <label>Beneficiario:</label>
            <select class="form-control" name="idBeneficiario" id="idBeneficiario">
              <option></option>
              <?php
              foreach ($beneficiarios as $item) {
                if( empty($item->EsEmpleado) ){
                  $selected = '';
                  if( empty($estudiante->IdEstudiante) ){
                    $idBeneficiario = (empty($item->IdHistorial) ? $item->IdEstudiante :  $item->IdHistorial);
                    $selected = ( (!empty($estudiante->IdHistorial) && $estudiante->IdHistorial == $idBeneficiario ) ? ' selected = selected ' : '');
                  }
                  else{
                    $idBeneficiario = $item->IdEstudiante;
                    $selected = ($estudiante->IdEstudiante == $idBeneficiario ? ' selected = selected ' : '');
                  }

                  echo '<option value="'.$idBeneficiario.'"'.$selected.' data-idestudiante="'.$idBeneficiario.'" data-nombreest="'.LimpiaCadena($item->Nombre).'" data-appatest="'.LimpiaCadena($item->apPaterno).'" data-apmatest="'.LimpiaCadena($item->ApMaterno).'">'
                        .LimpiaCadena($item->Nombre).' '.LimpiaCadena($item->apPaterno).' '.LimpiaCadena($item->ApMaterno).'</option>'.PHP_EOL;
                }
              }
              ?>
            </select>
          </div>
        </div>

        <div id="muestra-empleado" class="input-group" style="display:none;">
          <input type="hidden" name="idBeneficiarioEmpleado" id="idBeneficiarioEmpleado" value="<?= (!empty($estudiante->IdEstudiante) ? $estudiante->IdEstudiante : 0); ?>">
          <div class="col-sm">
            <div class="form-group">
              <label for="NombreEmpleado">Nombre:</label>
              <input type="text" class="form-control" id="NombreEmpleado" name="NombreEmpleado" style="text-transform:uppercase;" disabled value="<?php echo LimpiaCadena($empleado->Nombre); ?>">
            </div>
          </div>
          <div class="col-sm">
            <div class="form-group">
              <label for="apPaternoEmpleado">Apellido Paterno:</label>
              <input type="text" class="form-control" id="apPaternoEmpleado" name="apPaternoEmpleado" style="text-transform:uppercase;" disabled value="<?php echo LimpiaCadena($empleado->Apellido1); ?>">
            </div>
          </div>
          <div class="col-sm">
            <div class="form-group">
              <label for="apMaternoEmpleado">Apellido Materno:</label>
              <input type="text" class="form-control" id="apMaternoEmpleado" name="apMaternoEmpleado" style="text-transform:uppercase;" disabled value="<?php echo LimpiaCadena($empleado->Apellido2); ?>">
            </div>
          </div>
        </div>
      </div>

      <div class="row" id="muestra-beneficio" style="display:none;">
        <div class="col-sm-12">
          <div class="form-group">
            <label>Beneficio solicitado:</label>
            <select class="form-control" name="prestacion" id="prestacion" required>
              <option></option>
              <option value="Guarderia" id="Guarderia" name="Guarderia" <?= ($idPrestacion == 1 ? ' selected = selected' : ''); ?> > Guardería</option>
              <option value="Beca" id="Beca" name="Beca" <?= ($idPrestacion == 2 ? ' selected = selected' : ''); ?>> Estímulo por rendimiento académico</option>
              <option value="Utiles" id="Utiles" name="Utiles" <?= ($idPrestacion == 3 ? ' selected = selected' : ''); ?>> Útiles escolares</option>
            </select>
          </div>
        </div>
      </div>

      <div id="muestra-guarderia" style="display:none;">
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="">RFC</label>
              <input type="text" class="form-control" id="rfc_pres" name="rfc_pres" style="text-transform:uppercase;" placeholder="RFC de la guardería" onkeypress="return dispara_tab(event, this);" value="<?= (!empty($estudiante->RFC) ? LimpiaCadena($estudiante->RFC) : ''); ?>">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="">Razón Social</label>
              <input type="text" class="form-control" id="razonsocial_pres" name="razonsocial_pres" style="text-transform:uppercase;" placeholder="Razón Social de la guardería" onkeypress="return dispara_click(event, 'btnGuardarDatosEst');" value="<?= (!empty($estudiante->RazonSocial) ? LimpiaCadena($estudiante->RazonSocial) : ''); ?>">
            </div>
          </div>
        </div>
      </div>

      <!-- BECA -->
      <div id="muestra-beca" style="display:none;">
        <table class="table table-bordered table-condensed">
          <tr class="inverse">
            <td colspan="4">
              <span><b>Escuela donde cursó el año anterior</b></span>
            </td>
          </tr>
          <tr>
            <td>
              <div>
                <div class="row">
                  <div class="col-sm-5">
                    <label for="EscuelaidAnterior">Nombre de la escuela:</label>
                    <select class="form-control" id="EscuelaidAnterior" name="EscuelaidAnterior">
                      <?php echo LimpiaCadena($escuelasant); ?>
                    </select>
                  </div>
                  <div class="col-sm-2">
                    <label for="GradoAnterior">Grado:</label>
                    <input type="text" class="form-control" id="GradoAnterior" name="GradoAnterior" maxlength="30" onkeypress="return dispara_tab(event, this);" style="text-transform:uppercase;" value="<?php echo LimpiaCadena($estudiante->GradoAnterior != '0' ? LimpiaCadena($estudiante->GradoAnterior) : '' ); ?>">
                  </div>
                  <div class="col-sm-3">
                    <label for="idEscolaridadAnt">Nivel:</label>
                    <select class="form-control" id="idEscolaridadAnt" name="idEscolaridadAnt">
                      <?php echo LimpiaCadena($escolaridadAnt); ?>
                    </select>
                  </div>
                  <div class="col-sm-2">
                    <label for="Promedio_Est">Promedio:</label>
                    <input type="text" class="form-control" id="Promedio_Est" name="Promedio_Est" maxlength="5" onkeypress="return onlyDigits(event,this,'decOK','btnGuardarDatosEst');" value="<?php echo ($estudiante->Promedio > 0 ? round($estudiante->Promedio,2) : ''); ?>">
                  </div>
                </div>
              </div>
            </td>
          </tr>
        </table>
      </div>

      <!-- ÚTILES -->
      <div id="muestra-utiles" style="display:none;">
        <table class="table table-bordered table-condensed">
          <tr class="inverse">
            <td colspan="4">
              <span><b>Escuela donde cursará el próximo año</b></span>
            </td>
          </tr>
          <tr>
            <td>
              <div>
                <div class="row">
                  <div class="col-sm-6">
                   <label for="EscuelaId">Nombre de la escuela:</label>
                    <select class="form-control" id="EscuelaId" name="EscuelaId">
                      <?php echo LimpiaCadena($escuelas); ?>
                    </select>
                  </div>
                  <div class="col-sm-3">
                    <label for="Grado">Grado:</label>
                    <input type="text" class="form-control" id="Grado" name="Grado" maxlength="2" style="text-transform:uppercase;" onkeypress="return dispara_click(event, 'btnGuardarDatosEst');" value="<?php echo LimpiaCadena($estudiante->Grado != '0' ? $estudiante->Grado : ''); ?>">
                  </div>
                  <div class="col-sm-3">
                    <label for="EscolaridadId">Nivel:</label>
                    <select class="form-control" id="EscolaridadId" name="EscolaridadId">
                      <?php echo LimpiaCadena($escolaridad); ?>
                    </select>
                  </div>

                </div>
              </div>
            </td>
          </tr>
        </table>
      </div>

      <?php
      if( ($estado_datos == 4 | $estado_datos == 0) && $beneficiario > 0 && $estudiante->IdEstudiante > 0 ){
        switch ($idPrestacion) {
          case '1': //Guardería
            $ConcedePrestacion = ( empty($estudiante->SePagaGuarderia) ? '' : ' checked = checked ');
            $ObservacionesPrestacion = ( empty($estudiante->ObsGuarderia) ? '' : LimpiaCadena($estudiante->ObsGuarderia));
            break;
          case '2': //Beca
            $ConcedePrestacion = ( empty($estudiante->SePagaBeca) ? '' : ' checked = checked ');
            $ObservacionesPrestacion = ( empty($estudiante->ObsBeca) ? '' : LimpiaCadena($estudiante->ObsBeca));
            break;
          case '3': //Útiles
            $ConcedePrestacion = ( empty($estudiante->SePagaUtiles) ? '' : ' checked = checked ');
            $ObservacionesPrestacion = ( empty($estudiante->ObsUtiles) ? '' : LimpiaCadena($estudiante->ObsUtiles));
            break;
          default:
            $ConcedePrestacion = '';
            $ObservacionesPrestacion = '';
            break;
        }
      ?>
      <div class="row">
        <input type="hidden" name="idPrestacionConf" id="idPrestacionConf" value="<?=(empty($idPrestacion) ? 0 : $idPrestacion);?>">
        <div class="col-12">
          <div class="form-group">
            <label>Se concede:</label>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <span class="input-group-text"><input type="checkbox" id="ConcedePres" name="ConcedePres" value="1" <?= $ConcedePrestacion; ?>/></span>
              </div>
              <input type="text" class="form-control" placeholder="Observaciones" id="ObservacionesPrestacion" name="ObservacionesPrestacion" style="text-transform:uppercase;" value="<?= $ObservacionesPrestacion; ?>"/>
            </div>
          </div>
        </div>
      </div>

      <div class="row" id="muestra-monto" style="display:none;">
        <div class="col-4">
          <div class="form-group">
            <label>Monto:</label>
            <input type="text" class="form-control" id="txtMonto" name="txtMonto" placeholder="Monto a pagar" onkeypress="return onlyDigits(event,this,'decOK');" autocomplete="off">
          </div>
        </div>
      </div>

      <?php
      }
       ?>
  </div>

  <div class="card-footer text-end">
    <button type="button" id="btnGuardarDatosEst" class="btn btn-success btnGuardadoPres" onclick="GuardarDatosTMPPrestacion();" title="Guardar prestación"><i class="fa fa-save"></i> Guardar</button>
    <?php ;//<button type="button" id="btnEnviarDatosEst" class="btn btn-primary" onclick="EnviarDatosTMPEstudiante();" title="Enviar datos a revisión"><i class="fa fa-check-circle"></i> Enviar</button>?>

    <?php
    if( ($estado_datos == 4 | $estado_datos == 0 ) && verificar_permiso('WFBEM') == 3 && $estudiante->IdEstudiante > 0 ){?>
      <button id="btnConfirmarDatosEst" class="btn btn-success btnGuardadoPres" title="Confirmar prestación"><i class="fa fa-check"></i> Confirmar datos</button><?php
    }
    elseif ( $estado_datos == 4 && verificar_permiso('WFBEM') == 3 && $estudiante->IdEstudiante == 0 && $estudiante->EsEmpleado ) {?>
      <button type="button" id="btnConfirmarDatosEst" class="btn btn-success btnGuardadoPres" title="Confirmar prestación" onclick="GuardarPresEmpleadoEstudiante();"><i class="fa fa-check"></i> Confirmar datos</button><?php
    }
    ?>
    <button type="button" class="btn btn-default" data-dismiss="modal" title="Salir"><i class="fas fa-times"></i> Cancelar</button>
  </div>
</div>
<?php
echo form_close();
?>

<script type="text/javascript">
  var SolicitaBeneficios = false; //<<<RPERAZA(2018.07.05): CASU 0159/2018, VariableGlobal

  setTimeout(function FuncionesIniciales(){
    $("#FechaDeNacimiento").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});

    $("#EscuelaidAnterior, #EscolaridadId, #idEscolaridadAnt").select2({
      language: "es",
      dropdownParent: $('#modGeneral .modal-content'),
      placeholder: "Seleccione un Elemento",
      width:'100%'
    }).on("select2:close", function (event) {
        setTimeout(function() {
          $('.select2-container-active').removeClass('select2-container-active');
          $(':focus').blur();
          dispara_tab_especial(event);
        }, 1);
    });

    $("#EscuelaId").select2({
      language: "es",
      dropdownParent: $('#modGeneral .modal-content'),
      placeholder: "Seleccione un Elemento",
      width:'100%'
    }).on("select2:close", function (event) {
        setTimeout(function() {
          $('.select2-container-active').removeClass('select2-container-active');
          $(':focus').blur();
          dispara_tab_especial(event);
        }, 1);
    });

    var idHistorial = $('#IdHistorial_Pres').val(),
        idBeneficiario = $("#idBeneficiario option:selected").data('idestudiante');

    if( idHistorial == 0 || idBeneficiario == 0 ){
      $("#idBeneficiario").select2({
        language: "es",
        dropdownParent: $('#modGeneral .modal-content'),
        placeholder: "Seleccione un Beneficiario",
        minimumResultsForSearch: Infinity,
        width:'100%'
      }).on("select2:close", function (event) {

          setTimeout(function() {
            var idEstudiante = $("#idBeneficiario option:selected").data('idestudiante');
            $("#IdEstudiante").val(idEstudiante);
            $("#EsEmpleadoBenef").val(0);
            $("#EsEmpleadoBenef").val(0);
            $("#EsEmpleadoBenef").prop("disabled", true);
            $('#muestra-beneficio').show();
            $('.select2-container-active').removeClass('select2-container-active');
            $(':focus').blur();
            dispara_tab_especial(event);
          }, 1);
      });

      $("#prestacion").select2({
        language: "es",
        dropdownParent: $('#modGeneral .modal-content'),
        placeholder: "Seleccione una Prestación",
        minimumResultsForSearch: Infinity,
        width:'100%'
      }).on("select2:close", function (event) {
          setTimeout(function() {
            $('.select2-container-active').removeClass('select2-container-active');
            $(':focus').blur();
            dispara_tab_especial(event);
          }, 1);
      });
    }

    InicializaControles(); //<<<RPERAZA(2018.07.05): CASU 0159/2018
    CambiaEmpleado();

    var EstadoDatos_Est = $("#EstadoDatos_Est").val(); //<<<RPERAZA(2018.07.09): CASU 0159/2018
    MuestraEstadoDatos_Estudiante(EstadoDatos_Est);

    <?php
    if( !empty($estudiante->SePagaBeca) || !empty($estudiante->SePagaUtiles) ){
    ?>
    $( "#ConcedePres" ).change();
    <?php
    }
    ?>
  });

  function MuestraEstadoDatos_Estudiante(idEstado){ //<<<RPERAZA(2018.07.09): CASU 0159/2018
    idEstado = parseInt(idEstado);

    $("#lblDatosSinEnviar_Pres").hide();
    $("#lblDatosRevision_Pres").hide();
    $("#lblDatosConfirmados_Pres").hide();
    $("#lblDatosSinActualizar_Pres").hide();

    $("#btnGuardarDatosEst").hide();
    //$("#btnEnviarDatosEmp").hide();
    $("#btnConfirmarDatosEst").hide();

    //$("#iconoEdoEmp_Pend").hide();
    //$("#iconoEdoEmp_Conf").hide();

    switch(idEstado){
      case 0: // 0 significa que no es periodo de captura, por tanto no se muestra ninguna etiqueta

          <?php
          if(verificar_permiso('WFBEM') == 3){?>
              $("#btnConfirmarDatosEst").show();<?php
          }?>
          break;

      case 1: // DATOS SIN ACTUALIZAR
          // $("#lblDatosSinActualizar_Pres").show();
          $("#btnGuardarDatosEst").show();
          //$("#iconoEdoEst_Pend").show();
          break;

      case 2: // DATOS NO ENVIADOS
          // $("#lblDatosSinEnviar_Pres").show();
          $("#btnGuardarDatosEst").show();
          //$("#btnEnviarDatosEst").show();
          //$("#iconoEdoEst_Pend").show();
          break;

      case 3: // DATOS EN REVISION
          // $("#lblDatosRevision_Pres").show();
          //$("#iconoEdoEst_Pend").show();
          <?php
          if(verificar_permiso('WFBEM') == 3){?>
            $("#btnGuardarDatosEst").attr("title","Actualizar Información");
            $("#btnGuardarDatosEst").html('<i class="fa fa-save"></i> Actualizar');
            $("#btnGuardarDatosEst").show();
            $("#btnConfirmarDatosEst").show();
          <?php
          }?>
          break;

      case 4: // DATOS CONFIRMADOS
          // $("#lblDatosConfirmados_Pres").show();
          //$("#iconoEdoEst_Conf").show();
          <?php
          if(verificar_permiso('WFBEM') == 3){?>
              $("#btnGuardarDatosEst").attr("title","Actualizar Información");
              $("#btnGuardarDatosEst").html('<i class="fa fa-save"></i> Actualizar');
              $("#btnGuardarDatosEst").show();
              $("#btnConfirmarDatosEst").show();
          <?php
          }?>
          break;
    }

    $("#EstadoDatos_Est").val(idEstado);
  }

  function InicializaControles(){
    var EmpleadoBeneficiario = $("#EsEmpleadoBenef").prop('checked'),
        idEstudiante = 0;
    if( EmpleadoBeneficiario ){ idEstudiante = $('#idBeneficiarioEmpleado').val(); }
    else{ idEstudiante = $("#idBeneficiario option:selected").data('idestudiante'); }

    var idHistorial = $('#IdHistorial_Pres').val();

    if( idHistorial > 0 || idEstudiante > 0){
      $('#muestra-beneficio').show();
      $('#EsEmpleadoBenef').prop("disabled", true);
      $("#idBeneficiario").prop("disabled", true);
      $("#prestacion").prop("disabled", true);
      if ( $('#idBeneficiario').hasClass("select2-hidden-accessible") ){
        $('#idBeneficiario').select2('destroy');
      }
      if ( $('#prestacion').hasClass("select2-hidden-accessible") ){
        $('#prestacion').select2('destroy');
      }
      muestra_campos_prestacion($('#prestacion').val())
    }

    if( $("#EsEmpleadoEstudiante").prop('checked') == true){
      $("#NombreEstudiante").prop("disabled", true);
      $("#apPaternoEstudiante").prop("disabled", true);
      $("#apMaternoEstudiante").prop("disabled", true);
      $("#FechaDeNacimiento").prop("disabled", true);
      $("#SexoEstudiante").prop("disabled", true);
      $("#CURP_Est").prop("disabled", true);
      // $("#Guarderia").prop("disabled", true);
      // $("#Guarderia").prop('checked', false);
    }

    <?php
    if(($estado_datos == 0 | $estado_datos > 2) && verificar_permiso("WFBEM") == 1){?>
      $("#Guarderia").prop('disabled', true);
      $("#Beca").prop('disabled', true);
      $("#Utiles").prop('disabled', true);
      $("#btnGuardarDatosEst").prop('disabled', true);
    <?php
    }
    ?>

    SeleccionaBeneficio();
  }

  function GuardarDatosTMPPrestacion(carga) {
    if( validarFormularioPrestaciones() == true ) {
      var variables = $("#frmAgregaPrestacion").serialize();

      $('form#frmAgregaPrestacion input[disabled], form#frmAgregaPrestacion select[disabled]').each( function() {
        variables = variables + '&' + $(this).attr('name') + '=' + $(this).val();
      });

      if( typeof(carga) == "undefined" || carga === "" ) { carga = true; }

      $.ajax({
        url: "<?=base_url();?>empleado/GuardarTMPPrestacion",
        type: "POST",
        async: true,
        data: variables,
        dataType: "JSON",
        beforeSend: function() {
          $('#btnGuardarDatosEst').prop('disabled',true)
        },
        error: function(xhr, status, error){
          alerta_emergente("Error: " + error,"error");
          $('#btnGuardarDatosEst').prop('disabled',false)
          return false;
        },
        success: function(data){
          if(data.status == false) {
            alerta_emergente(data.message,"error");
          }
          else{
            var idHistorial = data.idHistorial;
            $("#IdHistorial_Est").val(idHistorial);

            if( carga ){
              alerta_emergente(data.message,"success");
              CargarDatosBeneficiarios();
              CargarDatosPrestaciones();
							ocultamodalGenerica();
              // $('#modGeneral').modal('hide');
            }

          }
          if( carga ){ $('#btnGuardarDatosEst').prop('disabled', false); }

        }
      });
    }
    return false;
  }

  function ExisteEmpleado(){
    var apPaterno= $('#apPaternoEmpleado').val().trim();
    var apMaterno= $('#apMaternoEmpleado').val().trim();
    var Nombre= $('#NombreEmpleado').val().trim();
    var resultado = false;

     $.ajax({
        url: "<?=base_url();?>inicio/VerificaExisteEmpleado",
        type: "POST",
        async: false,
        data: {apPaterno:apPaterno,apMaterno:apMaterno,Nombre:Nombre},
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

function validarFormularioPrestaciones(){
  var resultado = true,
      EmpleadoBeneficiario = $("#EsEmpleadoBenef").prop('checked'),
      apPaternoEmp = $('#apPaternoEmpleado').val().trim(),
      apMaternoEmp = $('#apMaternoEmpleado').val().trim(),
      NombreEmp = $('#NombreEmpleado').val().trim()
      beneficiario = "";

  if( EmpleadoBeneficiario ){ //validar para empleado
    beneficiario = NombreEmp.toUpperCase() + ' ' + apPaternoEmp.toUpperCase() + ' ' + apMaternoEmp.toUpperCase();
    if ( resultado == true && !ExisteEmpleado() ){
      resultado = false;
      alerta_emergente('No existe el empleado <b>' + beneficiario + '</b>. Corrija el nombre o desactive la casilla "Es empleado".', 'warning');
    }
  }
  else{ //validar para beneficiario
    if( resultado == true && $('#idBeneficiario').val() == "" ){
      resultado = false;
      alerta_emergente('Debe elegir un beneficiario.','warning');
    }
    else{
      beneficiario = $("#idBeneficiario option:selected").text().toUpperCase();
    }
  }

  if( resultado == true && $("#prestacion").val() == "" ){
    resultado = false;
    alerta_emergente('Debe elegir un beneficio.','warning');
  }

  //Guardería
  if( resultado == true && $("#prestacion").val() == "Guarderia" ){
    if( resultado == true && VerificarExisteBeneficio(1) == true ){
      resultado = false;
      alerta_emergente('No se puede asignar el beneficio de <b>Guardería</b> para <b>' + beneficiario + ' ' + '</b> porque ya ha sido solicitado por otro(a) empleado(a).','warning');
    }
  }

  //Beca
  if( resultado == true && $("#prestacion").val() == "Beca" ){
    if ( resultado == true && ($("#EscuelaidAnterior").val().trim() == 0 || $("#EscuelaidAnterior").val().trim() == "" ) ){
      resultado = false;
      alerta_emergente('Se requiere la escuela donde cursó el año anterior.','warning');
    }
    if( resultado == true && ( $('#GradoAnterior').val() == '0' || $('#GradoAnterior').val() == '') ){
      resultado = false;
      alerta_emergente('Se requiere el grado que cursó el año anterior.','warning');
    }
    if( resultado == true && ( $('#idEscolaridadAnt').val() == '0' || $('#idEscolaridadAnt').val() == '') ){
      resultado = false;
      alerta_emergente('Se requiere el Nivel de la escuela.','warning');
    }
    if( resultado == true && $('#Promedio_Est').val().trim() == "" ){
      resultado = false;
      alerta_emergente('Se requiere el promedio obtenido.','warning');
    }
    if( resultado == true && VerificarExisteBeneficio(2) == true ){
      resultado = false;
      alerta_emergente('No se puede asignar el beneficio de <b>Beca</b> para <b>' + beneficiario + ' ' + '</b> porque ya ha sido solicitado por otro(a) empleado(a).','warning');
    }
  }

  //Útiles
  if ( resultado == true && $("#prestacion").val() == "Utiles" ){
      if ( resultado == true && ($('#EscuelaId').val() == '0' || $('#EscuelaId').val() == "") ){
        resultado = false;
        alerta_emergente('Se requiere la escuela donde cursará el siguiente año escolar.','warning');
      }
    if( resultado == true && ( $('#Grado').val() == '0' || $('#Grado').val() == '') ){
      resultado = false;
      alerta_emergente('Se requiere el grado que se cursará el siguiente año escolar.','warning');
    }
    if( resultado == true && ( $('#EscolaridadId').val() == '0' || $('#EscolaridadId').val() == '') ){
      resultado = false;
      alerta_emergente('Se requiere el Nivel de la escuela.','warning');
    }
    if( resultado == true && VerificarExisteBeneficio(3) == true){
      resultado = false;
      alerta_emergente('No se puede asignar el beneficio de <b>Útiles</b> para <b>' + beneficiario + ' ' + '</b> porque ya ha sido solicitado por otro(a) empleado(a).','warning');
    }
  }
  return resultado;
}

function VerificarExisteBeneficio(Beneficio){
  var EmpleadoBeneficiario = $("#EsEmpleadoBenef").prop('checked'),
      IdEstudiante = 0,
      apPaternoEmp = '',
      apMaternoEmp = '',
      NombreEmp = '';
  if( EmpleadoBeneficiario ){
    IdEstudiante = $('#idBeneficiarioEmpleado').val();
    apPaterno = $('#apPaternoEmpleado').val().trim();
    apMaterno = $('#apMaternoEmpleado').val().trim();
    Nombre = $('#NombreEmpleado').val().trim();
  }
  else{
    IdEstudiante = $("#idBeneficiario option:selected").data('idestudiante');
    apPaterno = $("#idBeneficiario option:selected").data('appatest');
    apMaterno = $("#idBeneficiario option:selected").data('apmatest');
    Nombre = $("#idBeneficiario option:selected").data('nombreest');
  }
  var resultado = false;

   $.ajax({
      url: "<?=base_url();?>inicio/VerificaBeneficioSolicitado",
      type: "POST",
      async: false,
      data:  "IdEstudiante=" + IdEstudiante + "&Nombre=" + Nombre + "&apPaterno=" + apPaterno + "&apMaterno=" + apMaterno + "&Beneficio=" + Beneficio,
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

  function CambiaEmpleado() {
    if( $("#EsEmpleadoBenef").prop('checked') ) {
      $("#muestra-beneficio").show();
      $("#EsEmpleadoBenef").val(1);
      $("#EsEmpleadoBenef").prop("disabled", true);
      $("#muestra-empleado").show();
      $("#muestra-beneficiario").hide();
      $("#Guarderia").prop("disabled", true);
    }
    else{
      $("#EsEmpleadoBenef").val(0);
      $("#muestra-beneficiario").show();
      $("#muestra-empleado").hide();
      $("#Guarderia").prop("disabled", false);
    }
  }

  $("#prestacion").on("change", function (e) {
    var prestacion = $(this).val();
    muestra_campos_prestacion(prestacion)
  });

  $("#idBeneficiario").on("change", function (e) {
    var idHistorial = $(this).val();
    $('#IdHistorial_Pres').val(idHistorial);
  });

  $("#ConcedePres").on("change", function (e) {
    var val = this.checked ? this.value : 0,
        idPrestacion = $("#idPrestacionConf").val();

    if( val > 0 && (idPrestacion == 2 || idPrestacion == 3) ){
      var idEstudiante = $('#IdEstudiante').val(),
          idEscolaridad = (idPrestacion == 2 ? $("#idEscolaridadAnt option:selected").val() : $("#EscolaridadId option:selected").val());

      if( (idPrestacion == 2 || idPrestacion == 3) && (typeof(idEscolaridad) == "undefined" || idEscolaridad === "") ){
        $("#muestra-monto").hide();
        $("#txtMonto").val("");
        $("#ConcedePres").prop( "checked", false );
        alerta_emergente("Debe seleccionar el Nivel de la Escuela.", "warning");
        return false;
      }

      $.post("<?=base_url();?>empleado/traeMontoPrestacion", {idPrestacion:idPrestacion,idEstudiante:idEstudiante,idEscolaridad:idEscolaridad}, function (data) {
        if( data.status == false ){
          $("#muestra-monto").hide();
          $("#txtMonto").val("");
          $("#ConcedePres").prop( "checked", false );
          alerta_emergente(data.message,"warning");
        }
        else{
          $("#muestra-monto").show();
          $("#txtMonto").val(parseFloat(data.monto).toFixed(2));
        }
      },"json");
    }
    else{
      $("#muestra-monto").hide();
      $("#txtMonto").val("");
    }
    return false;
  });

  $("#idEscolaridadAnt, #EscolaridadId").on("change", function (e) {
    $( "#ConcedePres" ).change();
  });

  function muestra_campos_prestacion(prestacion) {
    if( prestacion === 'Guarderia' ){
      $("#muestra-guarderia").show();
      $("#muestra-utiles").hide();
      $("#muestra-beca").hide();
    }
    else if ( prestacion === 'Beca' ) {
      $("#muestra-guarderia").hide();
      $("#muestra-utiles").hide();
      $("#muestra-beca").show();
    }
    else{ //útiles
      $("#muestra-guarderia").hide();
      $("#muestra-utiles").show();
      $("#muestra-beca").hide();
    }
  }

  function SeleccionaBeneficio(checkbox){
    if( $("#Guarderia").prop('checked') | $("#Beca").prop('checked') | $("#Utiles").prop('checked')  ){
      SolicitaBeneficios = true;
    }
    else{
      SolicitaBeneficios = false;
    }

    var IdEstudiante = $("#IdEstudiante").val();

    switch(checkbox){//<<<RPERAZA(2017.07.11)
      case "Guarderia":
        var seleccionado = $("#Guarderia").prop('checked');
        if(seleccionado && IdEstudiante > 0 ){
          <?php if( verificar_permiso("WFBEM") == 3 ){?>
          $("#SePagaGuarderia").prop('disabled',false);
          $("#ObsSePagaGuarderia").prop('disabled',false);<?php
          }?>
        }
        else{
          $("#SePagaGuarderia").prop('disabled',true);
          $("#SePagaGuarderia").prop('checked',false);
          $("#ObsSePagaGuarderia").prop('disabled',true);
          $("#ObsSePagaGuarderia").val('');
        }
        break;

      case "Beca":
        var seleccionado = $("#Beca").prop('checked');
        if(seleccionado && IdEstudiante > 0){
          <?php if( verificar_permiso("WFBEM") == 3 ){?>
          $("#SePagaBeca").prop('disabled',false);
          $("#ObsSePagaBeca").prop('disabled',false);<?php
          }?>
        }
        else{
          $("#SePagaBeca").prop('disabled',true);
          $("#SePagaBeca").prop('checked',false);
          $("#ObsSePagaBeca").prop('disabled',true);
          $("#ObsSePagaBeca").val('');
        }
        break;

      case "Utiles":
        var seleccionado = $("#Utiles").prop('checked');
        if(seleccionado && IdEstudiante > 0){
          <?php if( verificar_permiso("WFBEM") == 3 ){?>
          $("#SePagaUtiles").prop('disabled',false);
          $("#ObsSePagaUtiles").prop('disabled',false);<?php
          }?>
        }
        else{
          $("#SePagaUtiles").prop('disabled',true);
          $("#SePagaUtiles").prop('checked',false);
          $("#ObsSePagaUtiles").prop('disabled',true);
          $("#ObsSePagaUtiles").val('');
        }
        break;
    }
  }

  <?php
  if(verificar_permiso('WFBEM') == 3){?>

    function GuardarBeneficiosConcedidos(f,e){
      e.preventDefault();
      var val = $( "#ConcedePres" ).prop('checked') ? $( "#ConcedePres" ).val() : 0,
          idPrestacion = $("#idPrestacionConf").val();

      if( val > 0 && (idPrestacion == 2 || idPrestacion == 3) ){
        if( typeof($("#txtMonto").val()) == "undefined" || $("#txtMonto").val() == "" || $("#txtMonto").val() == "0" ){
          alerta_emergente("No es posible confirmar la prestación. El monto debe ser mayor a 0.","warning");
          $("#txtMonto").focus();
          return false;
        }
      }

      var idEscolaridad = (idPrestacion == 2 ? $("#idEscolaridadAnt option:selected").val() : $("#EscolaridadId option:selected").val());

      if( (idPrestacion == 2 || idPrestacion == 3) && (typeof(idEscolaridad) == "undefined" || idEscolaridad == "") ){
        $("#muestra-monto").hide();
        $("#txtMonto").val("");
        $("#ConcedePres").prop( "checked", false );
        alerta_emergente("Debe seleccionar el Nivel de la Escuela.", "warning");
        return false;
      }

      GuardarDatosTMPPrestacion(false);

      var variables = $(f).serialize(),
          IdEstudiante = $('#IdEstudiante').val();

      $('form#frmAgregaPrestacion input[disabled], form#frmAgregaPrestacion select[disabled]').each( function() {
        variables = variables + '&' + $(this).attr('name') + '=' + $(this).val();
      });
      variables = variables + '&idEscolaridad=' + idEscolaridad;

      if( IdEstudiante > 0 ){
        $.ajax({
          url: f.action,
          type: "POST",
          async: true,
          data: variables,
          dataType: "JSON",
          beforeSend: function() {
            $('.btnGuardadoPres').prop('disabled',true)
          },
          error: function(XMLHttpRequest, errMsg, exception){
            var msg = "<p>jQuery message: <i>"+errMsg+"</i><br />XMLHttpRequest: <i>"+StatusMsg(XMLHttpRequest.status)+"</i></p>";
            $('.btnGuardadoPres').prop('disabled',false);
            alerta_emergente(msg, 'error');
          },
          success: function(data){
            if(data.status == false) {
              alerta_emergente(data.message,"warning");
            }
            else{
              alerta_emergente(data.message,"success");
							ocultamodalGenerica();
							// $('#modGeneral').modal('hide');
            }
            $('.btnGuardadoPres').prop('disabled',false);
          }
        });
      }
    }

  function GuardarPresEmpleadoEstudiante() {
    var idPrestacion = $("#idPrestacionConf").val(),
        idEscolaridad = (idPrestacion == 2 ? $("#idEscolaridadAnt option:selected").val() : $("#EscolaridadId option:selected").val());

    if( (idPrestacion == 2 || idPrestacion == 3) && (typeof(idEscolaridad) == "undefined" || idEscolaridad == "") ){
      $("#muestra-monto").hide();
      $("#txtMonto").val("");
      $("#ConcedePres").prop( "checked", false );
      alerta_emergente("Debe seleccionar el Nivel de la Escuela.", "warning");
      return false;
    }

    var variables = $('#frmAgregaPrestacion').serialize();

    $('form#frmAgregaPrestacion input[disabled], form#frmAgregaPrestacion select[disabled]').each( function() {
      variables = variables + '&' + $(this).attr('name') + '=' + $(this).val();
    });
    variables = variables + '&idEscolaridad=' + idEscolaridad

    $.ajax({
      url: "<?=base_url();?>empleado/GuardarPresEmpleadoEstudiante",
      type: "POST",
      async: true,
      data: variables,
      dataType: "JSON",
      beforeSend: function() {
        $('.btnGuardadoPres').prop('disabled',true)
      },
      error: function(XMLHttpRequest, errMsg, exception){
        var msg = "<p>jQuery message: <i>"+errMsg+"</i><br />XMLHttpRequest: <i>"+StatusMsg(XMLHttpRequest.status)+"</i></p>";
        $('.btnGuardadoPres').prop('disabled',false);
        alerta_emergente(msg, 'error');
      },
      success: function(data){
        if(data.status == false) {
          alerta_emergente(data.message,"warning");
        }
        else{
          alerta_emergente(data.message,"success");
          CargarDatosBeneficiarios();
          CargarDatosPrestaciones();
					ocultamodalGenerica();
          // $('#modGeneral').modal('hide');
        }
        $('.btnGuardadoPres').prop('disabled',false);
      }
    });
  }


  <?php
  }
  ?>

</script>
