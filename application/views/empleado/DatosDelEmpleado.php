<?php //Establece diferencia entre los datos actuales y los datos enviados arevisión por el empleado,
      //esta diferencia sólo se muestra si es período de capura
    $css_EdoCivil = '';
    $css_Hijos = '';
    $css_Telefono = '';
    $css_Celular = '';
    $css_Exper = '';
    $css_Direccion = '';
    $css_EstadoDir = '';
    $css_Ciudad = '';
    $css_Colonia = '';
    $css_Escolaridad = '';
		$css_carrera = '';
    $css_Zona = '';

    $old_EdoCivil = '';
    $old_Hijos = '';
    $old_Telefono = '';
    $old_Celular = '';
    $old_Exper = '';
    $old_Direccion = '';
    $old_EstadoDir = '';
    $old_Ciudad = '';
    $old_Colonia = '';
    $old_Escolaridad = '';
		$old_carrera = '';
    $old_Zona = '';

    if( $es_periodo_captura &&  verificar_permiso('WFBEM') == 3 ){ //$es_periodo_captura){
        if( $empleado->EdoCivil != $empleado_actual->EdoCivil){ $css_EdoCivil = ' alert-danger'; $old_EdoCivil = "Original: ".LimpiaCadena($empleado_actual->DescEdoCivil); }
        if( $empleado->Hijos != $empleado_actual->Hijos){  $css_Hijos = ' alert-danger'; $old_Hijos = "Original: ".$empleado_actual->Hijos; }
        if( $empleado->Telefono != $empleado_actual->Telefono){  $css_Telefono = ' alert-danger'; $old_Telefono = "Original: ".$empleado_actual->Telefono; }
        if( $empleado->Celular != $empleado_actual->Celular){  $css_Celular = ' alert-danger'; $old_Celular = "Original: ".$empleado_actual->Celular; }
        if( $empleado->Exper != $empleado_actual->Exper){  $css_Exper = ' alert-danger'; $old_Exper = "Original: ".$empleado_actual->Exper; }
        if( mb_strtoupper($empleado->Direccion) != mb_strtoupper($empleado_actual->Direccion)){  $css_Direccion = ' alert-danger'; $old_Direccion = "Original: ".LimpiaCadena($empleado_actual->Direccion); }
        if( $empleado->EstadoDir != $empleado_actual->EstadoDir){  $css_EstadoDir = ' alert-danger'; $old_EstadoDir = "Original: ".LimpiaCadena($empleado_actual->DescEstadoDir); }
        if( $empleado->Ciudad != $empleado_actual->Ciudad){  $css_Ciudad = ' alert-danger'; $old_Ciudad = "Original: ".LimpiaCadena($empleado_actual->DescCiudad); }
        if( $empleado->Colonia != $empleado_actual->Colonia){  $css_Colonia = ' alert-danger'; $old_Colonia = "Original: ".LimpiaCadena($empleado_actual->DescColonia); }
        if( $empleado->Escolaridad != $empleado_actual->Escolaridad){  $css_Escolaridad = ' alert-danger'; $old_Escolaridad = "Original: ".LimpiaCadena($empleado_actual->DescEscolarida); }
				if( $empleado->Carrera != $empleado_actual->Carrera){  $css_carrera= ' alert-danger'; $old_carrera = "Original: ".LimpiaCadena($empleado_actual->Carrera); }
        if( $empleado->Zona != $empleado_actual->Zona){  $css_Zona = ' alert-danger'; $old_Zona = "Original: ".$empleado_actual->Zona; }
    }

?>
<div class="card-body">
  <h4>
    <div class="row">
        <div class="col-sm-10">
          <div class="form-group">
            <i class="fa fa-user"></i> <?php echo $empleado->Nombre.' '.$empleado->Apellido1.' '.$empleado->Apellido2; ?>
            <small id="lblDatosSinActualizar_Emp" class="label label-danger">DATOS NO ACTUALIZADOS</small>
            <small id="lblDatosSinEnviar_Emp" class="label label-warning">DATOS SIN ENVIAR</small>
            <small id="lblDatosRevision_Emp" class="label label-info">DATOS EN REVISIÓN</small>
            <small id="lblDatosConfirmados_Emp" class="label label-green">DATOS CONFIRMADOS</small>
          </div>
        </div>

        <div class="col-sm-2 text-end">
          <div class="form-group"><?php ;  //<<<RPERAZA(2018.08.09): CASU 1033/2018
             $tipoRegistro = 2; // 1=Registro confirmado de empleado, 3=Registro temporal de empleado, (se corresponde con clave de cat_SecionImagen)

            if( $estado_datos < 4){
                $tipoRegistro = 4; //Registro temporal de empleado
            }?>
            <button type="button" id="btnGestionarImgEmpleado" class="btn btn-default" onclick="ConfiguraParametrosImagenes(<?=$empleado->Id?>,<?=$tipoRegistro?>,2);" title="Gestionar imágenes del empleado"><i class="fa fa-camera"></i> Gestionar imágenes</button>
          </div>
        </div>
    </div>
  </h4>
</div>
    <h4><?php /*<i class="fa fa-user"></i> <?php echo $empleado->Nombre.' '.$empleado->Apellido1.' '.$empleado->Apellido2; ?>
        <span id="lblDatosSinActualizar_Emp" class="label label-danger" >DATOS NO ACTUALIZADOS</span>
        <span id="lblDatosSinEnviar_Emp" class="label label-warning" >DATOS SIN ENVIAR</span>
        <span id="lblDatosRevision_Emp" class="label label-info" >DATOS EN REVISIÓN</span>
        <span id="lblDatosConfirmados_Emp" class="label label-green" >DATOS CONFIRMADOS</span> */?>
    </h4>
    <?php
    $attributes = array("id" => "frmEmpleado", "name" => "frmEmpleado", "onsubmit" => "return GuardarDatosEmpleado(this, event);");
    echo form_open("empleado/GuardarEmpleado", $attributes);
    ?>
        <input type="hidden" id="IdEmpleado" name="IdEmpleado" value="<?php echo $empleado->Id;?>" />
        <input type="hidden" id="Nombre" name="Nombre" value="<?php echo $empleado->Nombre;?>" />
        <input type="hidden" id="Apellido1" name="Apellido1" value="<?php echo $empleado->Apellido1;?>" />
        <input type="hidden" id="Apellido2" name="Apellido2" value="<?php echo $empleado->Apellido2;?>" />
        <input type="hidden" id="IdHistorial_Emp" name="IdHistorial_Emp" value="<?php echo $empleado->IdHistorial;?>" />
        <input type="hidden" id="EstadoDatos_Emp" name="EstadoDatos_Emp" value="<?php echo $estado_datos;?>" />
        <input type="hidden" id="SinHijos" name="SinHijos" value="<?php echo $empleado->SinHijos;?>" />
        <div class="card-body">
            <div class="row mb-2">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="FechaNac" class="form-label">F. de nacimiento:</label>
                        <input type="datetime" class="form-control form-control-sm" name="FechaNac" id="FechaNac" value="<?php echo cambiaf_a_normal($empleado->FechaNac); ?>" readonly />
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="Sexo" class="form-label">Sexo:</label>
                        <select class="form-control form-control-sm select2-sm" id="Sexo" name="Sexo" readonly="readonly" disabled="disabled"><?php
                            if ($empleado->Sexo=="M"){?>
                            <option value="M" selected="selected">Masculino</option><?php
                            }?><?php
                            if ($empleado->Sexo=="F"){?>
                            <option value="F" selected="selected">Femenino</option><?php
                            }?><?php
                            if ($empleado->Sexo=="O"){?>
                            <option value="O" selected="selected">Otro</option><?php
                            }?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="Nacional" class="form-label">Nacionalidad:</label>
                        <input type="text" class="form-control form-control-sm" id="Nacional" name="Nacional" value="<?php echo $empleado->Nacional; ?>" readonly />
                    </div>
                </div>
            </div>

            <div class="row mb-2">
              <div class="col-md-4 col-xs-6">
                  <div class="form-group">
                      <label for="fEdoCivil" class="form-label">Estado civil:</label>
                      <select class="form-control<?=$css_EdoCivil?> form-control-sm select2-sm" id="EdoCivil" name="EdoCivil">
                        <option></option>
                          <option value="S" <?php echo (trim($empleado->EdoCivil) == 'S' ? 'selected="selected"' : "");?>>SOLTERO(A)</option>
                          <option value="C" <?php echo (trim($empleado->EdoCivil) == 'C' ? 'selected="selected"' : "");?>>CASADO(A)</option>
                          <option value="V" <?php echo (trim($empleado->EdoCivil) == 'V' ? 'selected="selected"' : "");?>>VIUDO(A)</option>
                          <option value="D" <?php echo (trim($empleado->EdoCivil) == 'D' ? 'selected="selected"' : "");?>>DIVORCIADO(A)</option>
                          <option value="U" <?php echo (trim($empleado->EdoCivil) == 'U' ? 'selected="selected"' : "");?>>CONCUBINATO</option>
                      </select>
                      <span class="text-danger"><?=$old_EdoCivil?></span>
                  </div>
              </div>

              <div class="col-md-4 col-xs-6">
                <div class="row mb-2">
                  <div class="col-4">
                    <div class="form-group">
                      <label class="form-label">Madre/Padre</label>
                      <div class="checkbox checkbox-css checkbox-inverse">
                        <input type="checkbox" id="chkMadrePadre" name="chkMadrePadre" <?php echo ((isset($empleado->SinHijos) && ($empleado->SinHijos == 0)) ? 'checked="checked"' : '') ?> onclick="CambiaEstadoPadreMadre(!this.checked);" value="1" />
                        <label for="chkMadrePadre"></label>
                      </div>
                    </div>
                  </div>
                  <div class="col-8">
                    <div class="form-group">
                      <label for="Hijos" class="form-label">Número de hijos:</label>
                      <input type="text" class="form-control<?=$css_Hijos?> form-control-sm" id="Hijos" name="Hijos" value="<?php echo $empleado->Hijos; ?>" onkeypress="return onlyDigits(event, this);" autocomplete="off" maxlength="2" >
                      <span class="text-danger"><?=$old_Hijos?></span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-4">
                  <div class="row mb-2">
                      <div class="col-6">
                          <div class="form-group">
                              <label for="Telefono" class="form-label">Teléfono particular:</label>
                              <input type="text" class="form-control<?=$css_Telefono?> form-control-sm" id="Telefono" name="Telefono" onkeypress="return dispara_tab(event, this);" value="<?php echo $empleado->Telefono; ?>" autocomplete="off" maxlength="15" >
                              <span class="text-danger"><?=$old_Telefono?></span>
                          </div>
                      </div>
                      <div class="col-6">
                          <div class="form-group">
                              <label for="Celular" class="form-label">Teléfono celular:</label>
                              <input type="text" class="form-control<?=$css_Celular?> form-control-sm" id="Celular" name="Celular" onkeypress="return dispara_tab(event, this);" value="<?php echo $empleado->Celular; ?>" autocomplete="off" maxlength="15" >
                              <span class="text-danger"><?=$old_Celular?></span>
                          </div>
                      </div>
                  </div>
              </div>
            </div>

            <div class="row mb-2">
                <div class="col-4">
                    <div class="form-group">
                        <label for="Exper" class="form-label">Correo Electrónico:</label>
                        <input type="text" class="form-control<?=$css_Exper?> form-control-sm" id="Exper" name="Exper" onkeypress="return dispara_tab(event, this);" value="<?php echo $empleado->Exper; ?>" >
                        <span class="text-danger"><?=$old_Exper?></span>
                    </div>
                </div>
                <div class="col-8">
                    <div class="form-group">
                        <label for="Direccion" class="form-label">Domicilio:</label>
                        <input type="text" class="form-control<?=$css_Direccion?> form-control-sm" id="Direccion" onkeypress="return dispara_tab(event, this);" style="text-transform:uppercase;" name="Direccion" value="<?php echo LimpiaCadena($empleado->Direccion); ?>" >
                        <span class="text-danger"><?=$old_Direccion?></span>
                    </div>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-4">
                    <div class="form-group">
                        <label for="estado" class="form-label">Estado de domicilio:</label>
                        <select class="form-control<?=$css_EstadoDir?> form-control-sm select2-sm" id="estado" name="estado">
                            <?php echo LimpiaCadena($estados); ?>
                        </select>
                        <span class="text-danger"><?=$old_EstadoDir?></span>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label for="ciudad" class="form-label">Ciudad de domicilio:</label>
                        <select class="form-control<?=$css_Ciudad?> form-control-sm select2-sm" id="ciudad" onchange="CargarColonias(this.value);" >
                            <?php echo LimpiaCadena($ciudades); ?>
                        </select>
                        <span class="text-danger"><?=$old_Ciudad?></span>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label for="colonia" class="form-label">Colonia de domicilio:</label>
                        <select class="form-control<?=$css_Colonia?> form-control-sm select2-sm" id="colonia">
                            <?php echo LimpiaCadena($colonias); ?>
                        </select>
                        <span class="text-danger"><?=$old_Colonia?></span>
                    </div>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="Escolaridad" class="form-label">Último grado cursado:</label>
                        <select class="form-control<?=$css_Escolaridad?> form-control-sm select2-sm" id="Escolaridad" name="Escolaridad">
                            <?php echo $escolaridad; ?>
                        </select>
                        <span class="text-danger"><?=$old_Escolaridad?></span>
                    </div>
                </div>
								<div class="col-sm-4">
										<div class="form-group">
												<label for="carrera" class="form-label">Carrera Específica:</label>
												<input type="text" class="form-control form-control-sm" id="carrera" name="carrera" value="<?= $empleado->Carrera; ?>">
												<span class="text-danger"><?=$old_carrera?></span>
										</div>
								</div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="CURP" class="form-label">CURP:</label>
                        <input type="text" class="form-control form-control-sm" id="CURP" name="CURP" value="<?php echo $empleado->CURP; ?>">
												<?php if(verificar_permiso('WFBEM') < 3): ?>
													<p class="help-block">Para modificar este dato acuda al Depto. de Recursos Humanos.</p>
												<?php endif; ?>
                    </div>
                    <!-- readonly="readonly" disabled="false" -->
                </div>
					</div>
					<div class="row mb-2">
						<div class="col-sm-3">
								<div class="form-group">
										<label for="RFC" class="form-label">RFC:</label>
										<input type="text" class="form-control form-control-sm" id="RFC" name="RFC" value="<?php echo $empleado->RFC; ?>">
										<?php if(verificar_permiso('WFBEM') < 3): ?>
											<p class="help-block">Para modificar este dato acuda al Depto. de Recursos Humanos.</p>
										<?php endif; ?>
								</div>
						</div>
              <div class="col-md-2 col-xs-2">
                  <div class="form-group">
                      <label for="IMSS" class="form-label">IMSS:</label>
                      <input type="text" class="form-control form-control-sm" id="IMSS" name="IMSS" value="<?php echo $empleado->IMSS; ?>">
											<?php if(verificar_permiso('WFBEM') < 3): ?>
												<p class="help-block">Para modificar este dato acuda al Depto. de Recursos Humanos.</p>
											<?php endif; ?>
                  </div>
              </div>
              <div class="col-md-1 col-xs-4">
                  <div class="form-group">
                      <label for="Zona" title="Unidad Médica Familiar" class="form-label">UMF:</label>
                      <input type="text" class="form-control<?=$css_Zona?> form-control-sm" id="Zona" name="Zona" maxlength="8" value="<?= $empleado->Zona; ?>">
                      <span class="text-danger"><?=$old_Zona?></span>
                  </div>
              </div>

							<div class="col-2">
								<div class="form-group">
								<label class="form-label">Configuración ISSTEY:</label>
	 							 <select class="form-control form-control-sm select2-sm" id="confISSTEY" name="confISSTEY" >
	 									 <?= $paramISSTEY; ?>"
	 							 </select>
								</div>
							</div>

              <div class="col-md-4 col-xs-4">
                <div class="form-group">
	                <label for="regimen" class="form-label">Régimen Fiscal:</label>
	                <select class="form-control form-control-sm select2-sm" id="regimen" name="regimen">
	                    <?= $regimenfiscal; ?>
	                </select>
                </div>
              </div>
					</div>
					<div class="row">
						<div class="col-sm-3">
								<div class="form-group">
										<label for="CSF" class="form-label">Código Postal CF:</label>
										<input type="text" class="form-control form-control-sm" id="CSF" name="CSF" value="<?= $empleado->CSF; ?>">
										<?php if (verificar_permiso('WFBEM') < 3): ?>
											<p class="help-block">Para modificar este dato acuda al Depto. de Recursos Humanos.</p>
										<?php endif; ?>
								</div>
						</div>
						<div class="col-5">
								<div class="form-group">
										<label for="CorreoInstitucional" class="form-label">Correo Electrónico Institucional:</label>
										<input type="email" class="form-control form-control-sm" id="CorreoInstitucional" name="CorreoInstitucional" onkeypress="return dispara_tab(event, this);" value="<?= $empleado->CorreoInstitucional; ?>" placeholder="Correo Institucional">
								</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label for="sindicato" class="form-label">Sindicato:</label>
								<select class="form-control form-control-sm select2-sm" id="sindicato" name="sindicato">
										<?= $sindicato; ?>
								</select>
							</div>
						</div>
					</div>
      </div>
    <div class="card-footer text-end">
        <button type="button" id="btnGuardarDatosEmp" class="btn btn-sm btn-success" onclick="GuardarDatosTMPEmpleado();" title="Guardar datos personales"><i class="fa fa-save"></i> Guardar</button>
        <button type="button" id="btnEnviarDatosEmp" class="btn btn-sm btn-primary" onclick="EnviarDatosTMPEmpleado();" title="Enviar datos a revisión"><i class="fa fa-check-circle"></i> Enviar</button>
        <?php
        //if($this->session->userdata('EsAdmin')){
        if(verificar_permiso('WFBEM') == 3){ //<<<RPERAZA(2018.08.15): CASU 1033/2018
        ?>
          <button id="btnConfirmarDatosEmp" class="btn btn-sm btn-success" title="Confirmar datos"><i class="fa fa-check"></i> Confirmar datos</button><?php
        }?>
    </div>
  <?php
  echo form_close();
  ?>
<script>
    setTimeout(function FuncionesIniciales(){
      $("#EdoCivil, #estado, #Escolaridad, #confISSTEY").select2({
        language: "es",
        placeholder: "Seleccione un Elemento",
        minimumResultsForSearch: Infinity,
        width:'100%'
      });

      $("#ciudad").select2({ language: "es", width:'100%' });
      $("#colonia").select2({ language: "es", width:'100%' });
      $("#regimen").select2({ language: "es", width:'100%' });
			$("#sindicato").select2({ language: "es", width:'100%' });
      $("#Exper").inputmask({ alias: "email"});

      var EstadoDatos_Emp = $("#EstadoDatos_Emp").val(); //<<<RPERAZA(2018.07.04): CASU 0159/2018
      MuestraEstadoDatos_Empleado(EstadoDatos_Emp);//<<<RPERAZA(2018.07.04): CASU 0159/2018

      var PadreMadre = $("#SinHijos").val();
      CambiaEstadoPadreMadre(PadreMadre);
    });

    function CambiaEstadoPadreMadre(PadreMadre){
      if (PadreMadre == true) {
        $("#Hijos").prop("disabled",true);
        $("#Hijos").val('');
      }
      else {
        $("#Hijos").prop("disabled", false);
				// $("#Hijos").val('');
      }
    }

    function MuestraEstadoDatos_Empleado(idEstado){ //<<<RPERAZA(2018.07.04): CASU 0159/2018
        idEstado = parseInt(idEstado);

        $("#lblDatosSinEnviar_Emp").hide();
        $("#lblDatosRevision_Emp").hide();
        $("#lblDatosConfirmados_Emp").hide();
        $("#lblDatosSinActualizar_Emp").hide();

        $("#btnGuardarDatosEmp").hide();
        $("#btnEnviarDatosEmp").hide();
        $("#btnConfirmarDatosEmp").hide();

        $("#iconoEdoEmp_Pend").hide();
        $("#iconoEdoEmp_Conf").hide();
        $("#regimen").prop('disabled',true);
        // $("#chkEnTransicionISSTEY").prop('disabled',true);
        <?php
        if(verificar_permiso('OCALC') == 3){ //<<<permiso temporal mientras se corrige MENU. GSANTOS(2022.09.06): CASU 1080/2022?>
            $("#regimen").prop('disabled',false);
            <?php
        }?>

        <?php
        if(verificar_permiso('OCALC') == 3){ //<<<permiso temporal mientras se corrige MENU. GSANTOS(2022.09.06): CASU 1548/2022?>
            // $("#chkEnTransicionISSTEY").prop('disabled',false);
            <?php
        }?>

        switch(idEstado){
            case 0: // 0 significa que no es periodo de captura, por tanto no se muestra ninguna etiqueta
                <?php
                if(verificar_permiso('WFBEM') == 3){ //<<<RPERAZA(2018.08.15): CASU 1033/2018?>
                    $("#btnConfirmarDatosEmp").show();
                    <?php
                }?>

                break;

            case 1: // DATOS SIN ACTUALIZARMe
                $("#lblDatosSinActualizar_Emp").show();
                $("#btnGuardarDatosEmp").show();
                $("#iconoEdoEmp_Pend").show();
                break;

            case 2: // DATOS NO ENVIADOS
                $("#lblDatosSinEnviar_Emp").show();
                $("#btnGuardarDatosEmp").show();
                $("#btnEnviarDatosEmp").show();
                $("#iconoEdoEmp_Pend").show();
                break;

            case 3: // DATOS EN REVISION
                $("#lblDatosRevision_Emp").show();
                $("#iconoEdoEmp_Pend").show();

                <?php
                //if($this->session->userdata('EsAdmin')){
                if(verificar_permiso('WFBEM') == 3){ //<<<RPERAZA(2018.08.15): CASU 1033/2018?>
                    $("#btnConfirmarDatosEmp").show();<?php
                }?>

                break;

            case 4: // DATOS CONFIRMADOS
                $("#lblDatosConfirmados_Emp").show();
                $("#iconoEdoEmp_Conf").show();

                <?php
                //if($this->session->userdata('EsAdmin')){
                if(verificar_permiso('WFBEM') == 3){ //<<<RPERAZA(2018.08.15): CASU 1033/2018?>
                    $("#btnConfirmarDatosEmp").show();<?php
                }?>

                break;
        }

        $("#EstadoDatos_Emp").val(idEstado);
    }

    function CargarColonias(IdCiudad){

         $("#colonia").select2("val", "");
         $("#colonia").select2('data', null);
         $("#colonia").val('');
        $.ajax({
            url: "<?=base_url();?>inicio/CargarColoniasXCiudad",
            type: "POST",
            async: true,
            data: "IdCiudad="+ IdCiudad ,
            error: function(XMLHttpRequest, errMsg, exception){
                var msg = "<p>jQuery message: <i>"+errMsg+"</i><br />XMLHttpRequest: <i>"+StatusMsg(XMLHttpRequest.status)+"</i></p>";
                alerta_emergente(msg, 'error');
            },
            success: function(htmlcode){
              $("#colonia").html(htmlcode);
              $("#colonia").select2({ language: "es", width:'100%' });
            }
        });
        //return false;
    }

    function GuardarDatosEmpleado(f,e){
      e.preventDefault();
      <?php
      if( verificar_permiso('WFBEM') == 3 ){ //<<<RPERAZA(2018.08.15): CASU 1033/2018
      ?>
        if (ValidarFormulario() == true) {
          var SinHijos = ($('#chkMadrePadre').prop('checked') ? 0 : 1),
              EstadoDir = $('#estado').val(),  //<<<RPERAZA(2018.07.04): CASU 0159/2018
              Ciudad = $('#ciudad').val(),
              Hijos = 0;
          var Colonia = $('#colonia').val();
          if (SinHijos == 0) {
            if ( $('#Hijos').val().trim() == "" ){
              $('#Hijos').val() = 0;
            }
            Hijos = $('#Hijos').val();
          }

          if ($('#Zona').val() == ""){
            $('#Zona').val() = 0;
          }
          var Zona = $('#Zona').val();
          var IdHistorial = $('#IdHistorial_Emp').val(); //<<<RPERAZA(2018.07.04): CASU 0159/2018

          //if ($('#regimen').val() == ""){               //<<<GSantos(2022.06.15): CASU 1080/2022
          //  $('#regimen').val() = 0;
          //}
          var IdRegimen = $('#regimen').val();
          // var EnTransicionISSTEY = ($('#chkEnTransicionISSTEY').prop('checked') ? 1 : 0);
          var variables = $(f).serialize();
          $('form#frmEmpleado input[disabled], form#frmEmpleado select[disabled]').each( function() {
            variables = variables + '&' + $(this).attr('name') + '=' + $(this).val();
          });

          $.ajax({
              url: f.action,
              type: "POST",
              async: false,
              dataType: "JSON",
              data:  variables + '&' + $.param({HijosEmp:Hijos,SinHijosEmp:SinHijos,Ciudad:Ciudad,Colonia:Colonia,ZonaEmp:Zona,EstadoDir:EstadoDir,IdHistorial:IdHistorial, IdRegimen: IdRegimen}),
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
                  CargarDatosEmpleado();
                  CargarDatosBeneficiarios();
                  CargarDatosPrestaciones();
                }
              }
          });
        }
      <?php
      }
      else{
        echo "alerta_emergente('Se requieren permisos de administrador para esta acción.', 'warning');";
        echo "return false";
      }
      ?>
    }

    function GuardarDatosTMPEmpleado(){ //<<<RPERAZA(2018.07.04): CASU 0159/2018

        if(ValidarFormulario() == true){
            var IdEmpleado= $('#IdEmpleado').val(),
                EdoCivil= $('#EdoCivil').val(),
                EsEmpleado= $('#EsEmpleado').prop('checked'),
                SinHijos = ($('#chkMadrePadre').prop('checked') ? 0 : 1),
                Hijos = (SinHijos == 0 ? $('#Hijos').val() : 0),
                Telefono= $('#Telefono').val(),
                Celular= $('#Celular').val(),
                Direccion= $('#Direccion').val(),
                EstadoDir = $('#estado').val(),
                Ciudad = $('#ciudad').val(),
                Colonia = $('#colonia').val(),
                Exper= $('#Exper').val(),
                Escolaridad= $('#Escolaridad').val();
                // EnTransicionISSTEY = ($('#chkEnTransicionISSTEY').prop('checked') ? 0 : 1);
            if ($('#Zona').val() == ""){
              $('#Zona').val() = 0;
            }
            var Zona = $('#Zona').val(),
                IdHistorial = $('#IdHistorial_Emp').val();

            $.ajax({
                url: "<?=base_url();?>empleado/GuardarTMPEmpleado",
                type: "POST",
                async: false,
                data: {IdEmpleado:IdEmpleado,EdoCivil:EdoCivil,Hijos:Hijos,SinHijos:SinHijos,Telefono:Telefono,Direccion:Direccion,Ciudad:Ciudad,Colonia:Colonia,Exper:Exper,Escolaridad:Escolaridad,Zona:Zona,Celular:Celular,EstadoDir:EstadoDir,IdHistorial:IdHistorial},
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
                            $("#IdHistorial_Emp").val(IdHistorial);
                            alerta_emergente('Los datos se guardaron correctamente.', 'success');
                            break;
                        default:
                            msg = htmlcode.split("-");
                            alerta_emergente(msg,"warning");
                            break;
                    }
                },
                complete: function(request, json){
                    var IdHistorial = $("#IdHistorial_Emp").val();
                    var ClaveEmpleado = $("#ClaveEmpleado").val();

                    if(IdHistorial > 0){
                        ObtenerEstadoDatos(ClaveEmpleado);
                    }
                    CargarDatosEmpleado();
                }
            });
        }
    }

    function ObtenerEstadoDatos(ClaveEmpleado){ //<<<RPERAZA(2018.07.04): CASU 0159/2018

        $.ajax({
            url: "<?=base_url();?>empleado/ObtenerEstadoDatosEmpleado",
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
                        MuestraEstadoDatos_Empleado(idEstado);
                        break;
                    default:
                        msg = htmlcode.split("-");
                        alerta_emergente(msg,"warning");
                        break;

                }
            }
        });
    }

    function EnviarDatosTMPEmpleado(){
        if( ValidarCambioDomicilio() ){ //<<<RPERAZA(2018.08.10): CASU 1033/2018
            if($("#EstadoDatos_Emp").val() == "2"){
                var IdHistorial = $("#IdHistorial_Emp").val();

                $.ajax({
                    url: "<?=base_url();?>empleado/EnviarDatosTMPEmpleado",
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
                                    ObtenerEstadoDatos(ClaveEmpleado);
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
    }

function ValidarFormulario(){
    var resultado = true;
    //Se verifica si la opcion del select esta vacia
    if (resultado == true && $('#EdoCivil').val() == '0' ){
        resultado = false;
        $('#EdoCivil').focus();
        alerta_emergente('Se requiere especificar el <b>Estado civil</b>', 'warning');
    }

    if (resultado == true && $('#Escolaridad').val() == '0' ){
        resultado = false;
        $('#Escolaridad').focus();
        alerta_emergente('Se requiere especificar el <b>Último grado cursado</b>', 'warning');
    }

    if (resultado == true && $('#Telefono').val().trim() == "" && $('#Celular').val().trim() == ""){
        resultado = false;
        $('#Telefono').focus();
        alerta_emergente('Se requiere un número de <b>Teléfono</b>, partícular o celular', 'warning');
    }

    /*if (resultado == true && $('#Celular').val().trim() == ""){
        resultado = false;
        $('#Celular').focus();
        alerta_emergente('Se requiere el número de <b>Télefono celular</b>', 'warning');
    }*/

    if (resultado == true && $('#Direccion').val().trim() == ""){
        resultado = false;
        $('#Direccion').focus();
        alerta_emergente('Se requiere el <b>Domicilio</b>', 'warning');
    }

    if (resultado == true && $('#Zona').val().trim() == ""){
        resultado = false;
        $('#Zona').focus();
        alerta_emergente('Se requiere la <b>Unidad Medica Familiar</b>', 'warning');
    }

    if (resultado == true && $('#Exper').val().trim() == ""){
      resultado = false;
      $('#Exper').focus();
      alerta_emergente('Se requiere el <b>E-mail</b>', 'warning');
    }

    if ( resultado == true && $('#chkMadrePadre').prop('checked') && ($('#Hijos').val() == 0 || $('#Hijos').val().trim() == "") ){
      resultado = false;
      $('#Hijos').focus();
      alerta_emergente('Se requiere capturar el <b>Número de Hijos</b>', 'warning');
    }

    return resultado;
}

function ConfiguraParametrosImagenes(IdPrimario, tipoRegistro, tipo_persona){ //<<<RPERAZA(2018.08.10), CASU 1033/2018
  var estadoDatos = $("#EstadoDatos_Emp").val();
  PreparaSubidaImagen(IdPrimario, tipoRegistro, estadoDatos, tipo_persona);
}

function ValidarCambioDomicilio(){ //<<<RPERAZA(2018.08.10): CASU 1033/2018
    var resultado = false;

    var IdEmpleado = $("#IdEmpleado").val();
    var Direccion = $("#Direccion").val();
    var EstadoDir = $("#estado").val();
    var Ciudad = $("#ciudad").val();
    var Colonia = $("#colonia").val();

    $.ajax({
        url: "<?=base_url();?>empleado/VerificaCambioDomicilio",
        type: "POST",
        async: false,
        data:   "IdEmpleado="+IdEmpleado
              + "&Direccion="+Direccion
              + "&EstadoDir="+EstadoDir
              + "&Ciudad="+Ciudad
              + "&Colonia="+Colonia,
        error: function(XMLHttpRequest, errMsg, exception){
            var msg = "<p>jQuery message: <i>"+errMsg+"</i><br />XMLHttpRequest: <i>"+StatusMsg(XMLHttpRequest.status)+"</i></p>";
            alerta_emergente(msg, 'error');
        },
        success: function(htmlcode){
            var r = htmlcode.substr(0,1);
            switch(r){
                case "1":
                    resultado = true;
                    break;
                default:
                    alerta_emergente('Debido a que realizó cambios en el domicilio, se requiere que agregue una imagen del comprobante de domicilio.', 'error');
            }
        }

    });

    return resultado;
}

</script>
