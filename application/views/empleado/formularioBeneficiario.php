<?php
$attributes = array("id" => "frmAgregarBeneficiario", "name" => "frmAgregarBeneficiario", "onsubmit" => "return GuardarBeneficiario(this, event);");
echo form_open("empleado/GuardarBeneficiario", $attributes);
?>
<div id="divDatosBeneficiario" class="">
  <div class="modal-header bg-pjey text-white">
    <h4><b>Datos del Beneficiario</b></h4>
  </div>
  <div class="card-body">
    <!-- ETIQUETA DE STATUS -->
    <h4>
      <span id="lblDatosSinActualizar_frmBenef" class="label label-danger" >DATOS NO ACTUALIZADOS</span>
      <span id="lblDatosSinEnviar_frmBenef" class="label label-warning" >DATOS SIN ENVIAR</span>
      <span id="lblDatosRevision_frmBenef" class="label label-info" >DATOS EN REVISIÓN</span>
      <span id="lblDatosConfirmados_frmBenef" class="label label-green" >DATOS CONFIRMADOS</span>
    </h4>

      <!-- VARIABLES OCULTAS DE CONTROL -->
      <input type="hidden" class="form-control" id="IdEmpleado" name="IdEmpleado" value="<?php echo $IdEmpleado; ?>">
      <input type="hidden" class="form-control" id="IdBeneficiario" name="IdBeneficiario" value="<?php echo $beneficiario->IdEstudiante; ?>">
      <input type="hidden" id="IdHistorial_Benef" name="IdHistorial_Benef" value="<?php echo $beneficiario->IdHistorial;?>" />
      <input type="hidden" id="EstadoDatos_frmBenef" name="EstadoDatos_frmBenef" value="<?php echo $beneficiario->EstadoDatos;?>" />
      <input type="hidden" id="fEnvioDatos_frmBenef" name="fEnvioDatos_frmBenef" value="<?php echo cambiaf_a_normal($beneficiario->fEnvioDatos);?>" />

      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <label for="NombreBeneficiario">Nombre:</label>
            <input type="text" class="form-control" id="NombreBeneficiario" name="NombreBeneficiario" onkeypress="return onlyAlpha(event, this);" style="text-transform:uppercase;" value="<?php echo LimpiaCadena($beneficiario->Nombre); ?>" required>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="form-group">
            <label for="apPaternoBeneficiario">Apellido Paterno:</label>
            <input type="text" class="form-control" id="apPaternoBeneficiario" name="apPaternoBeneficiario" onkeypress="return onlyAlpha(event, this);" style="text-transform:uppercase;" value="<?php echo LimpiaCadena($beneficiario->apPaterno); ?>" required>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="form-group">
            <label for="apMaternoBeneficiario">Apellido Materno:</label>
            <input type="text" class="form-control" id="apMaternoBeneficiario" name="apMaternoBeneficiario" onkeypress="return onlyAlpha(event, this);" style="text-transform:uppercase;" value="<?php echo LimpiaCadena($beneficiario->ApMaterno); ?>">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-3">
          <div class="form-group">
            <label for="FechaDeNacimiento">Fecha de Nacimiento:</label>
            <input type="text" class="form-control" id="FechaDeNacimiento" name="fNacimiento" onkeypress="return onlyAlpha(event, this);" value="<?php echo cambiaf_a_normal($beneficiario->fNacimiento); ?>">
          </div>
        </div>
        <div class="col-sm-3">
          <div class="form-group">
            <label for="SexoBeneficiario">Sexo:</label>
            <select class="form-control" name="SexoBeneficiario" id="SexoBeneficiario" required>
              <option></option>
              <option value="0" <?php echo ($beneficiario->Sexo == 0  ? 'selected="selected"' : '') ?> >Masculino</option>
              <option value="1" <?php echo ($beneficiario->Sexo == 1  ? 'selected="selected"' : '') ?> >Femenino</option>
            </select>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="form-group">
            <label for="CURP_Benef">CURP:</label>
            <input type="text" class="form-control" id="CURP_Benef" name="CURP_Benef" style="text-transform:uppercase;" value="<?php echo $beneficiario->CURP; ?>" maxlength="18" onkeypress="return dispara_tab(event, this);">
          </div>
        </div>
        <div class="col-sm-3">
          <div class="form-group">
            <label for="idParentesco">Parentesco:</label>
            <select class="form-control" name="idParentesco" id="idParentesco" required>
              <?php echo $parentescos; ?>
            </select>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12">
          <label for="ObservacionesBeneficiario">Observaciones:</label>
          <textarea class="form-control" rows="2" id="ObservacionesBeneficiario" name="ObservacionesBeneficiario" style="text-transform:uppercase;"><?php echo LimpiaCadena($beneficiario->Observaciones); ?></textarea>
        </div>
      </div>
  </div>

  <div class="card-footer text-end">
    <button type="button" id="btnGuardarDatosBenef" class="btn btn-success"  title="Guardar datos del Beneficiario" onclick="GuardarDatosTMPBeneficiario();"><i class="fa fa-save"></i> Guardar</button>
    <?php ;//<button type="button" id="btnEnviarDatosEst" class="btn btn-primary" onclick="EnviarDatosTMPEstudiante();" title="Enviar datos a revisión"><i class="fa fa-check-circle"></i> Enviar</button>?>

    <?php
    if(verificar_permiso('WFBEM') == 3){?>
      <button id="btnConfirmarDatosBenef" class="btn btn-success" title="Confirmar datos"><i class="fa fa-check"></i> Confirmar datos</button><?php
    }?>
    <button type="button" class="btn btn-default" data-dismiss="modal" title="Salir"><i class="fas fa-times"></i> Cancelar</button>
  </div>
</div>
<?php
echo form_close();
?>

<script type="text/javascript">
  var SolicitaBeneficios = false; //<<<RPERAZA(2018.07.05): CASU 0159/2018, VariableGlobal

  setTimeout(function FuncionesIniciales(){
    $("#FechaDeNacimiento").datepicker({
      format: "dd/mm/yyyy",
      weekStart: 1,
      maxViewMode: 3,
      language: "es",
      orientation: "bottom auto",
      autoclose: true,
      todayBtn: "linked",
      endDate: '+1d',
      datesDisabled: '+1d',
      todayHighlight: true,
    }).inputmask({'alias': 'datetime', 'inputFormat': 'dd/mm/yyyy', 'placeholder': 'dd/mm/yyyy', 'min':'01/01/1900'});

    $("#idParentesco, #SexoBeneficiario").select2({
      language: "es",
      placeholder: "Seleccione un Elemento",
      minimumResultsForSearch: Infinity,
      dropdownParent: $('#modGeneral .modal-content'),
      width:'100%'
    }).on("select2:close", function (event) {
        setTimeout(function() {
          $('.select2-container-active').removeClass('select2-container-active');
          $(':focus').blur();
          dispara_tab_especial(event);
        }, 1);
    });

    //InicializaControles(); //<<<RPERAZA(2018.07.05): CASU 0159/2018

    var EstadoDatos_Benef = $("#EstadoDatos_frmBenef").val(); //<<<RPERAZA(2018.07.09): CASU 0159/2018
    MuestraEstadoDatos_Beneficiario(EstadoDatos_Benef);
  });

  function MuestraEstadoDatos_Beneficiario(idEstado){ //<<<RPERAZA(2018.07.09): CASU 0159/2018
    idEstado = parseInt(idEstado);
    $("#lblDatosSinEnviar_frmBenef").hide();
    $("#lblDatosRevision_frmBenef").hide();
    $("#lblDatosConfirmados_frmBenef").hide();
    $("#lblDatosSinActualizar_frmBenef").hide();

    $("#btnGuardarDatosBenef").hide();
    $("#btnConfirmarDatosBenef").hide();

    switch(idEstado){
        case 0: // 0 significa que no es periodo de captura, por tanto no se muestra ninguna etiqueta

            <?php
            if(verificar_permiso('WFBEM') == 3){?>
                $("#btnConfirmarDatosBenef").show();<?php
            }?>

            break;

        case 1: // DATOS SIN ACTUALIZAR
            $("#lblDatosSinActualizar_frmBenef").show();
            $("#btnGuardarDatosBenef").show();
            break;

        case 2: // DATOS NO ENVIADOS
            $("#lblDatosSinEnviar_frmBenef").show();
            $("#btnGuardarDatosBenef").show();
            <?php
            if(verificar_permiso('WFBEM') == 3){?>
              $("#btnConfirmarDatosBenef").show();
              $("#btnGuardarDatosBenef").hide();
            <?php
            }?>
            break;

        case 3: // DATOS EN REVISION
            $("#lblDatosRevision_frmBenef").show();
            <?php
            if(verificar_permiso('WFBEM') == 3){?>
              $("#btnConfirmarDatosBenef").show();<?php
            }?>

            break;

        case 4: // DATOS CONFIRMADOS
            $("#lblDatosConfirmados_Benef").show();
            <?php
            if(verificar_permiso('WFBEM') == 3){?>
              $("#btnConfirmarDatosBenef").show();<?php
            }?>

            break;
    }

    $("#EstadoDatos_Benef").val(idEstado);
  }

  //Esta función ya no es necesaria con los nuevos cambios del CASU 852/2019 alopez
  // function InicializaControles(){ //<<<RPERAZA(2018.07.05): CASU 0159/2018
  //   if( $("#EsEmpleadoEstudiante").prop('checked') == true){
  //     $("#NombreEstudiante").prop("disabled", true);
  //     $("#apPaternoEstudiante").prop("disabled", true);
  //     $("#apMaternoEstudiante").prop("disabled", true);
  //     $("#FechaDeNacimiento").prop("disabled", true);
  //     $("#SexoEstudiante").prop("disabled", true);
  //     $("#CURP_Est").prop("disabled", true);
  //     $("#Guarderia").prop("disabled", true);
  //     $("#Guarderia").prop('checked', false);
  //   }
  //
  //   <?php
  //   if(($estado_datos == 0 | $estado_datos > 2) && verificar_permiso("WFBEM") == 1){
  //   ?>
  //     $("#Guarderia").prop('disabled', true);
  //     $("#Beca").prop('disabled', true);
  //     $("#Utiles").prop('disabled', true);
  //   <?php
  //   }
  //   ?>
  // }

  <?php
  if(verificar_permiso('WFBEM') == 3){ //Sólo disponible para el admin
  ?>
    function GuardarBeneficiario(f,e){
      e.preventDefault();
      var variables = $(f).serialize();

      if( validarFormularioBeneficiario() == true ) {
        $.ajax({
          url: f.action,
          type: "POST",
          async: true,
          data: variables,
          dataType: "JSON",
          error: function(XMLHttpRequest, errMsg, exception){
            var msg = "<p>jQuery message: <i>"+errMsg+"</i><br />XMLHttpRequest: <i>"+StatusMsg(XMLHttpRequest.status)+"</i></p>";
            alerta_emergente(msg, 'error');
          },
          success: function(data){
            if(data.status == false) {
              alerta_emergente(data.message,"warning");
            }
            else{
              alerta_emergente(data.message,"success");
              // $('#modGeneral').modal('hide');
							ocultamodalGenerica();
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

  function GuardarDatosTMPBeneficiario() {
    if( validarFormularioBeneficiario() == true ) {
      //Para esta versión solo Guardamos Hijo. CASU 852/2019
      var variables = $("#frmAgregarBeneficiario").serialize();
      $.ajax({
        url: "<?=base_url();?>empleado/GuardarTMPBeneficiario",
        type: "POST",
        async: true,
        data: variables,
        dataType: "JSON",
        error: function(xhr, status, error){
          alerta_emergente("Error: " + error,"error");
          return false;
        },
        success: function(data){
          if(data.status == false) {
            alerta_emergente(data.message,"error");
          }
          else{
            alerta_emergente(data.message,"success");
            var idHistorial = data.idHistorial;
            $("#IdHistorial_Benef").val(idHistorial);
            CargarDatosBeneficiarios();
            CargarDatosPrestaciones();
						ocultamodalGenerica();
            // $('#modGeneral').modal('hide');
          }
        }
      });
    }
    return false;
  }

  //Ahora se utiliza la función GuardarDatosTMPBeneficiario << alopez casu 852/2019
  // function GuardarDatosTMPEstudiante (){ //<<<RPERAZA(2018.07.09): CASU 0159/2018
  //   //No es necesaria con los nuevos cambios CASU 852/2019
  //   if(validarFormularioEstudiante() == true) {
  //
  //     var IdEstudiante = $('#IdEstudiante').val();
  //     var EsEmpleadoEstudiante= $('#EsEmpleadoEstudiante').prop('checked');
  //     var Nombre= $('#NombreEstudiante').val().trim();
  //     var apPaterno= $('#apPaternoEstudiante').val().trim();
  //     var ApMaterno= $('#apMaternoEstudiante').val().trim();
  //     var fNacimiento= $('#FechaDeNacimiento').val();
  //     var Sexo= $('#SexoEstudiante').val();
  //     var CURP= $('#CURP_Est').val();var Sexo= $('#SexoEstudiante').val();
  //     var Guarderia= $('#Guarderia').prop('checked');
  //     var Beca= $('#Beca').prop('checked');
  //     var Utiles= $('#Utiles').prop('checked');
  //     var EscuelaId= $('#EscuelaId').val();
  //     var Grado= $('#Grado').val();
  //     var EscuelaidAnterior= $('#EscuelaidAnterior').val();
  //     var GradoAnterior= $('#GradoAnterior').val();
  //     var Observaciones= $('#ObservacionesEstu').val();
  //     var IdEmpleado= $('#IdEmpleado').val();
  //     var IdHistorial = $('#IdHistorial_Est').val(); //<<<RPERAZA(2018.07.09): CASU 0159/2018
  //     var Escolaridad = $('#Escolaridad_Est').val();
  //     var Colegiatura = $('#Colegiatura_Est').val();
  //     var FLimitePago = $('#FLimitePago_Est').val();
  //     var Promedio = $('#Promedio_Est').val().trim();
  //     if(Promedio == ""){
  //       Promedio = 0;
  //     }
  //
  //     $.ajax({
  //       url: "<?=base_url();?>inicio/GuardarTMPEstudiante",
  //       type: "POST",
  //       async: true,
  //       data: "Nombre="+Nombre+"&apPaterno="+apPaterno+"&ApMaterno="+ApMaterno+"&fNacimiento="+fNacimiento+"&Sexo="+Sexo+"&CURP="+CURP+"&Guarderia="+Guarderia+"&Beca="+Beca+"&Utiles="+Utiles+"&EscuelaId="+EscuelaId+"&Grado="+Grado+"&EscuelaidAnterior="+EscuelaidAnterior+"&GradoAnterior="+GradoAnterior+"&Observaciones="+Observaciones+"&EsEmpleado="+EsEmpleadoEstudiante+"&IdEmpleado="+IdEmpleado+"&IdEstudiante="+IdEstudiante+"&IdHistorial="+IdHistorial+"&Escolaridad="+Escolaridad+"&Colegiatura="+Colegiatura+"&FLimitePago="+FLimitePago+"&Promedio="+Promedio,
  //       error: function(XMLHttpRequest, errMsg, exception){
  //         var msg = "<p>jQuery message: <i>"+errMsg+"</i><br />XMLHttpRequest: <i>"+StatusMsg(XMLHttpRequest.status)+"</i></p>";
  //         alerta_emergente(msg, 'error');
  //       },
  //       success: function(htmlcode){
  //
  //         var r = htmlcode.substr(0,1);
  //         switch(r){
  //             case "*":
  //                 alerta_emergente('Parámetros incorrectos.', 'error');
  //                 break;
  //             case "0":
  //                 alerta_emergente('Ocurrió un error.', 'error');
  //                 break;
  //             case "2":
  //                 alerta_emergente('No se pudieron guardar los datos.', 'error');
  //                 break;
  //             case "1":   //Todo correcto
  //                 var IdHistorial = htmlcode.substr(1);
  //
  //                 $("#IdHistorial_Est").val(IdHistorial);
  //                 alerta_emergente('Los datos se guardaron correctamente.', 'success');
  //                 ocultarFormCaptura();
  //                 CargarDatosEstudiante();
  //
  //                 break;
  //             default:
  //                 msg = htmlcode.split("-");
  //                 alerta_emergente(msg,"warning");
  //                 break;
  //         }
  //
  //       }
  //
  //     });
  //   }
  // }

function ExisteBeneficiario(){
    var IdEmpleado= $('#IdEmpleado').val();
    var apPaterno= $('#apPaternoBeneficiario').val().trim();
    var apMaterno= $('#apMaternoBeneficiario').val().trim();
    var Nombre= $('#NombreBeneficiario').val().trim();
    var CURP = $('#CURP_Benef').val().trim();
    var resultado = false;

    if( CURP != "" ){
      $.ajax({
        url: "<?=base_url();?>inicio/VerificaExisteHijo",
        type: "POST",
        async: false,
        data: "IdEmpleado=" + IdEmpleado + "&CURP=" + CURP,
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
    }
    else{
      alerta_emergente("La CURP no es válida","error");
    }

   return resultado;
}

function validarFormularioBeneficiario(){

  var resultado = true;

  if (resultado == true && $('#NombreBeneficiario').val().trim() == "")
  {
    resultado = false;
    alerta_emergente('Se requiere el Nombre.','warning');
  }

  if (resultado == true && $('#apPaternoBeneficiario').val().trim() == "")
  {
    resultado = false;
    alerta_emergente('Se requiere el Apellido Paterno.','warning');
  }

  if (resultado == true && $('#SexoBeneficiario').val().trim() == "")
  {
    resultado = false;
    alerta_emergente('Se requiere el sexo del estudiante.','warning');
  }

  //alopez Se elimina temporalmente la validación de la CURP
  // if (resultado == true && $('#CURP_Benef').val().trim() == "")
  // {
  //   resultado = false;
  //   alerta_emergente('Se requiere la CURP.','warning');
  // }

  // if (resultado == true && $('#CURP_Benef').val().length != 18)
  // {
  //   resultado = false;
  //   alerta_emergente('La CURP especificada no es válida.','warning');
  // }

  var Nombre = $('#NombreBeneficiario').val().trim();
  var apPat = $('#apPaternoBeneficiario').val().trim();
  var apMat = $('#apMaternoBeneficiario').val().trim();

  //alopez Se elimina temporalmente la validación de la CURP
  // if ( resultado == true && $("#IdBeneficiario").val() == 0 && ExisteBeneficiario() ){
  //   resultado = false;
  //   alerta_emergente('<b>' + Nombre.toUpperCase() + ' ' + apPat.toUpperCase() + ' ' + apMat.toUpperCase() + '</b> Ya está dado de alta como hijo.', 'warning');
  // }

  return resultado;
}

  function CambiaEmpleado(){
    if( $("#EsEmpleadoEstudiante").prop('checked') ) {
      $("#NombreEstudiante").prop("disabled", true);
      $("#apPaternoEstudiante").prop("disabled", true);
      $("#apMaternoEstudiante").prop("disabled", true);
      $("#FechaDeNacimiento").prop("disabled", true);
      $("#SexoEstudiante").prop("disabled", true);
      $("#CURP_Est").prop("disabled", true);
      $("#Guarderia").prop("disabled", true);
      $("#Guarderia").prop('checked', false);

      $("#NombreEstudiante").val($("#Nombre_EmpEst").val());
      $("#apPaternoEstudiante").val($("#Apellido1_EmpEst").val());
      $("#apMaternoEstudiante").val($("#Apellido2_EmpEst").val());
      $("#FechaDeNacimiento").val($("#FechaNac_EmpEst").val());
      if($("#Sexo_EmpEst").val() == "M"){
        $("#SexoEstudiante").val(0);
      }
      else{
        $("#SexoEstudiante").val(1);
      }
      $("#CURP_Est").val($("#CURP_EmpEst").val());
    }
    else{
      $("#NombreEstudiante").prop("disabled", false);
      $("#apPaternoEstudiante").prop("disabled", false);
      $("#apMaternoEstudiante").prop("disabled", false);
      $("#FechaDeNacimiento").prop("disabled", false);
      $("#SexoEstudiante").prop("disabled", false);
      $("#CURP_Est").prop("disabled", false);
      $("#Guarderia").prop("disabled", false);

      $("#NombreEstudiante").val('');
      $("#apPaternoEstudiante").val('');
      $("#apMaternoEstudiante").val('');
      $("#FechaDeNacimiento").val('');
      $("#SexoEstudiante").val(0);
      $("#CURP_Est").val('');
    }
  }

</script>
