<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleado extends IIS_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('empleado_modelo','mEmpleado',TRUE);
    $this->load->model('selectores_model','mSelectores',TRUE);
    $this->load->model('estudiante_modelo','mEstudiante',TRUE);
    $this->load->model('conyuge_modelo','mConyuge',TRUE);
    $this->load->model('imagen_modelo','',TRUE);
		$this->load->model('catalogos_modelo','mod_cat',TRUE);
    $this->load->model('parametros_modelo','mParametros',TRUE);
    $this->load->library('ParamSystem', NULL, 'param_lib');
    $this->load->library('Selectores_class', NULL, 'select_lib');
    $this->load->library('pjey_ABC');
  }

  //******************************************
  // EMPLEADO
  //******************************************

  public function CargarEmpleado(){
    $selectores = new selectores_class();
    $Clave = $this->input->post("ClaveEmpleado", TRUE); //<<<RPERAZA(2018.07.01): CASU 0159/2018

    //Elimina datos temporales de años anteriores
    $this->mEmpleado->eliminar_datosTMP_anteriores($Clave); //<<<RPERAZA(2018.07.04): CASU 0159/2018

    //Obtiene datos actuales del empleado
    $empleado_actual = $this->mEmpleado->traer_empleado($Clave);
    $es_periodo_captura = $this->mEmpleado->verifica_periodo_captura();
    $datos['empleado_actual'] = $empleado_actual;
    $datos['es_periodo_captura'] = $es_periodo_captura;

    $datos_empleado = $this->ObtenerDatosEmpleado($Clave);
    $empleado = $datos_empleado['empleado'];
    $datos['empleado'] = $datos_empleado['empleado'];
    $datos['estado_datos'] = $datos_empleado['estado_datos'];

    $Escolaridad= $selectores->escolaridad($empleado->Escolaridad,TRUE);
    $datos['escolaridad'] = $Escolaridad;

    $Estados= $selectores->estados($empleado->EstadoDir,FALSE);
    $datos['estados'] = $Estados;

    $Ciudades= $selectores->ciudades($empleado->Ciudad, $empleado->EstadoDir, TRUE);
    $datos['ciudades'] = $Ciudades;

    $Colonias= $selectores->colonias($empleado->Ciudad, $empleado->Colonia, TRUE);
    $datos['colonias'] = $Colonias;

		$RegimenFiscal= $selectores->regimen_fiscal($empleado->IdRegimenFiscal, TRUE);
		$datos['regimenfiscal'] = $RegimenFiscal;

		$paramISSTEY = $selectores->generico('param_isstey',$empleado->EnTransicionISSTEY);
		$datos['paramISSTEY']  = $paramISSTEY;

		$sindicato = $this->mod_cat->traer_cat_varios_filtros('cat_Sindicatos',array());
		$datos['sindicato']  = $this->select_lib->from_recordset($sindicato, $empleado->idSindicato, true, false, 'Id', 'Id', 'Descripcion' );
    $this->load->view('empleado/DatosDelEmpleado', $datos);
  }

  private function ObtenerDatosEmpleado($ClaveEmpleado){ //<<<RPERAZA(2018.07.04): CASU 0159/2018
    $estado_datos = null; // 0=SIN ESTADO, 1=NO ACTUALIZADOS, 2=NO ENVIADOS, 3=EN REVISION, 4=CONFIRMADOS
    $empleado = null;
    $mod_empleado = new Empleado_modelo();
    $anio_actual = intval(date("Y")); //<<<RPERAZA(2018.07.01): CASU 0159/2018

    $es_periodo_captura = $mod_empleado->verifica_periodo_captura(); //<<<RPERAZA(2018.07.04): CASU 0159/2018

    if( $es_periodo_captura->Resultado == true ){ // TRUE = La fecha actual está dentro del período de captura
      //Intenta obtener datos temporales
      $empleado = $mod_empleado->traer_datosTMP_empleado($ClaveEmpleado); //<<<RPERAZA(2018.07.01): CASU 0159/2018

      if($empleado != false){ //<<<RPERAZA(2018.07.01): CASU 0159/2018, Si existen datos temporales
        if( $empleado->Enviado == true ){
          $estado_datos = 3; //DATOS EN REVISION
        }
        else{
          $estado_datos = 2; //DATOS NO ENVIADOS
        }
      }
      else{
        //Si no hay datos temporales entonces los obtiene de los datos confirmados
        $empleado= $mod_empleado->traer_empleado($ClaveEmpleado);
        $anio_actualiza = intval($empleado->AnioActualiza);

        if( $anio_actualiza < $anio_actual ){
          $estado_datos = 1; //DATOS NO ACTUALIZADOS
        }
        else{
          $estado_datos = 4; //DATOS CONFIRMADOS
        }
      }
    }
    else{
      $empleado= $mod_empleado->traer_empleado($ClaveEmpleado);
      $estado_datos = 0; //SIN LEYENDA, significa que no es período de captura
    }

    $resultado = array(	'estado_datos' => $estado_datos,
              'empleado' => $empleado
              );

    return $resultado;
  }

  public function ObtenerEstadoDatosEmpleado(){ //<<<RPERAZA(2018.07.04): CASU 0159/2018
    $ClaveEmpleado = $this->input->post("ClaveEmpleado", TRUE);

    $resultado = $this->ObtenerDatosEmpleado($ClaveEmpleado);

    echo "1".$resultado['estado_datos'];
  }

  public function VerificaCambioDomicilio(){ //<<<RPERAZA(2018.08.09): CASU 1033/2018
    //Esta función se llama desde la vista ANTES de ENVIAR a revisión los datos del empleado

    $resultado = 1; // 1 = Se cumplen los requisitos para enviar la información
    $IdEmpleado = $this->input->post("IdEmpleado", TRUE);
    $Direccion = $this->input->post("Direccion",TRUE);
    $EstadoDir = $this->input->post("EstadoDir",TRUE);
    $Ciudad = $this->input->post("Ciudad",TRUE);
    $Colonia = $this->input->post("Colonia",TRUE);

    $parametros = array( 'IdEmpleado' => $IdEmpleado,
               'Direccion' => (mb_strtoupper($Direccion)),
               'EstadoDir' => $EstadoDir,
               'Ciudad' => $Ciudad,
               'Colonia' => $Colonia
            );

    $es_cambio_dom = $this->mEmpleado->verificar_cambio_domicilio($parametros);
    $existe_img_dom = $this->mEmpleado->verificar_existe_imagen_domicilio($IdEmpleado);

    if($es_cambio_dom && $existe_img_dom == false){
      $resultado = 0; // 0 = NO se cumplen los requisitos para enviar la información
    }
    echo $resultado;
  }

  public function GuardarEmpleado(){
    if (verificar_permiso('WFBEM') == 3) {

      $IdEmpleado = $this->input->post("IdEmpleado");
      $EdoCivil = $this->input->post("EdoCivil");
      $Hijos = $this->input->post("HijosEmp");
      $SinHijos = $this->input->post("chkMadrePadre");
			$Hijos = (empty($SinHijos) ? 0 : $Hijos);
			$SinHijos = (empty($SinHijos) ? 1 : 0);
      $Telefono = $this->input->post("Telefono");
      $Direccion = $this->input->post("Direccion");
      $EstadoDir = $this->input->post("EstadoDir"); //<<<RPERAZA(2018.07.04): CASU 0159/2018
      $Ciudad = $this->input->post("Ciudad");
      $Colonia = $this->input->post("Colonia");
      $Exper = $this->input->post("Exper");
      $Escolaridad = $this->input->post("Escolaridad");
			$Carrera = $this->input->post("carrera");
      $Zona = $this->input->post("ZonaEmp");
      $Celular = $this->input->post("Celular");
      $IdHistorial = $this->input->post("IdHistorial"); //<<<RPERAZA(2018.07.04): CASU 0159/2018
      $IdRegimen = $this->input->post("IdRegimen"); //<<<GSANTOS(2022.06.15): CASU 1080/2022
			$confISSTEY = $this->input->post("confISSTEY");
			$CSF = $this->input->post("CSF");
			$correoInstitucional = $this->input->post('CorreoInstitucional');
			$CURP = $this->input->post("CURP");
			$RFC = $this->input->post("RFC");
			$IMSS = $this->input->post("IMSS");
			$sindicato = $this->input->post("sindicato");
      //Guarda datos en tablas finales
			$datosEmpleado = array($IdEmpleado,$EdoCivil,$SinHijos,$Hijos,$Telefono,$EstadoDir,$Ciudad,$Colonia,
														(mb_strtoupper($Direccion)),$Exper,$Escolaridad,$Carrera,$Zona,$Celular, $IdRegimen, $confISSTEY, $CSF, $correoInstitucional, $CURP, $RFC, $IMSS, $sindicato);

			$empleado = $this->mEmpleado->actualizar_empleado($datosEmpleado);
      if ($empleado != false) {
        $tmpEstudiante = $this->mEmpleado->valida_existe_TMPbeneficiario($IdEmpleado,0,1);

        if( $tmpEstudiante != false ){
          $idHistorialTMP = $tmpEstudiante->IdHistorial;
          $idBeneficiario = $tmpEstudiante->IdEstudiante;
          $esEstudiante = $this->mEmpleado->valida_existe_beneficiario($IdEmpleado,$idBeneficiario,1);

          if( $esEstudiante != false ) $idBeneficiario = $esEstudiante->IdEstudiante;
          //insertar en tabla pres_estudiantes
          $parametros = array(
                     'EsEmpleado'      => 1,
                     'IdBeneficiario'  => $idBeneficiario,
                     'IdEmpleado'      => $IdEmpleado,
                     'apPaterno'       => (escapaDatoParaBD(mb_strtoupper($this->input->post("Apellido1", TRUE)))),
                     'apMaterno'       => (escapaDatoParaBD(mb_strtoupper($this->input->post("Apellido2", TRUE)))),
                     'Nombre'          => (escapaDatoParaBD(mb_strtoupper($this->input->post("Nombre", TRUE)))),
                     'fNacimiento'     => escapaDatoParaBD($this->input->post("FechaNac", TRUE)),
                     'Sexo'            => ($this->input->post("Sexo", TRUE) == 'M' ? 0 : 1),
                     'CURP'            => (escapaDatoParaBD(mb_strtoupper($this->input->post("CURP", TRUE)))),
                     'parentesco'      => 0,
                     'fEnvioDatos'     => escapaDatoParaBD(cambiaf_a_normal($tmpEstudiante->fEnvioDatos)),
                     'Observaciones'   => escapaDatoParaBD(''),
                  );

          $estudiante = $this->mEstudiante->guarda_beneficiario($parametros);
          $this->mEstudiante->eliminar_datosTMP_por_idhistorial($idHistorialTMP);
        }

        //Elimina datos temporales
        $this->mEmpleado->eliminar_datosTMP_por_idhistorial($IdHistorial); //<<<RPERAZA(2018.07.04): CASU 0159/2018

        //Cambia estado de imagenes de Temporales a Definitivas
        $parametros = array(
                  'IdPrimario' => $IdEmpleado
                 ,'IdSecundario' => 0
                );

        $this->mEmpleado->cambiar_estado_imagenes_empleado($parametros); //<<<RPERAZA(2018.08.15): CASU 1033/2018

        $data = array('status' => TRUE,'message' => 'Los datos personales se guardaron correctamente.');
      }
      else{
        $data = array('status' => FALSE,'message' => 'Ocurrió un error al intentar guardar al empleado.');
      }
    }
    else{
      $data = array('status' => FALSE,'message' => 'Se requieren permisos de administrador para esta acción.');
    }
    $this->output->set_output(json_encode($data));
  }

  public function GuardarTMPEmpleado()  //<<<RPERAZA(2018.07.04): CASU 0159/2018
  {
    $resultado = 0;

    $IdHistorial = $this->input->post("IdHistorial", TRUE);
    $IdEmpleado = $this->input->post("IdEmpleado", TRUE);
    $EdoCivil = $this->input->post("EdoCivil", TRUE);
    $SinHijos = $this->input->post("SinHijos", TRUE);
    $Hijos = $this->input->post("Hijos", TRUE);
    $Telefono = $this->input->post("Telefono",TRUE);
    $Direccion = $this->input->post("Direccion",TRUE);
    $EstadoDir = $this->input->post("EstadoDir",TRUE);
    $Ciudad = $this->input->post("Ciudad",TRUE);
    $Colonia = $this->input->post("Colonia",TRUE);
    $Email = $this->input->post("Exper",TRUE);
    $Escolaridad =$this->input->post("Escolaridad",TRUE);
    $UMF = $this->input->post("Zona",TRUE);
    $Celular = $this->input->post("Celular",TRUE);

    $parametros = array( 'IdHistorial' => $IdHistorial,
               'IdEmpleado' => $IdEmpleado,
               'EdoCivil' => $EdoCivil,
               'SinHijos' => $SinHijos,
               'Hijos' => $Hijos,
               'Telefono' => $Telefono,
               'Direccion' => (mb_strtoupper($Direccion)),
               'EstadoDir' => $EstadoDir,
               'Ciudad' => $Ciudad,
               'Colonia' => $Colonia,
               'Email' => $Email,
               'Escolaridad' => $Escolaridad,
               'UMF' => $UMF,
               'Celular' => $Celular,
               'Usuario' => $this->session->userdata('username')
            );

    if( $IdHistorial == 0 ){ //INSERT
      $insert = $this->mEmpleado->insertar_TMPempleado($parametros);

      if( $insert != false ){
        if($insert->IdHistorial > 0){
          $resultado = 1; //Se insertó correctamente
          $IdHistorial = $insert->IdHistorial;
        }
        else{
          $resultado = 2; //No se insertó
        }
      }
      else{
        $resultado = 0; //Error en la consulta
      }
    }
    else{ //UPDATE
      $update = $this->mEmpleado->actualizar_TMPempleado($parametros);

      if( $update != false ){
        if($update == 1){
          $resultado = 1; //Se actualizó correctamente
        }
        else{
          $resultado = 2; //No actualizó
        }
      }
      else{
        $resultado = 0; //Error en la consulta
      }
    }
    echo $resultado.$IdHistorial;
  }

  public function EnviarDatosTMPEmpleado(){ //<<<RPERAZA(2018.07.04): CASU 0159/2018
    $IdHistorial = $this->input->post("IdHistorial",TRUE);

    if($IdHistorial > 0){
      $mod_empleado = new Empleado_modelo();
      $parametros = array( 'IdHistorial' => $IdHistorial,
                 'Usuario' => $this->session->userdata('username')
            );

      $enviar = $mod_empleado->enviar_datosTMP_empleado($parametros);

      if($enviar != false){
        if($enviar == 1){
          echo "1";
        }
        else{
          echo "2"; //No se pudo enviar
        }
      }
      else{
        echo "0"; //Error en consulta
      }
    }
    else{
      echo "*"; //IdHistorial no válido
    }
  }

  //****************************************
 	// CONYUGE
 	//****************************************

  public function CargarConyuge(){
    $selectores = new selectores_class(); //<<<RPERAZA(2018.07.05): CASU 0159/2018
    $mod_conyuge = new Conyuge_modelo();
    $mod_empleado = new Empleado_modelo();
    $Clave = $this->input->post("ClaveEmpleado", TRUE); //<<<RPERAZA(2018.07.06): CASU 0159/2018

    $conyuge_actual= $mod_conyuge->consulta_conyuge($Clave);
    $es_periodo_captura = $mod_empleado->verifica_periodo_captura();
    $datos['conyuge_actual'] = $conyuge_actual;
    $datos['es_periodo_captura'] = $es_periodo_captura;

    //Elimina datos temporales de años anteriores
    $mod_conyuge->eliminar_datosTMP_anteriores($Clave);

    $datos_conyuge = $this->ObtenerDatosConyuge($Clave);
    $conyuge = $datos_conyuge['conyuge'];
    $datos['conyuge'] = $datos_conyuge['conyuge'];
    $datos['estado_datos'] = $datos_conyuge['estado_datos'];

    $cat_parentesco = $selectores->parentesco_pareja($conyuge->IdParentesco);

    $datos['conyuge'] = $conyuge;
    $datos['cat_parentesco']=$cat_parentesco;

    $this->load->view('empleado/DatosDelConyuge', $datos);
  }


 	 private function ObtenerDatosConyuge($ClaveEmpleado){ //<<<RPERAZA(2018.07.06): CASU 0159/2018
 	 	$estado_datos = null; // 0=SIN ESTADO, 1=NO ACTUALIZADOS, 2=NO ENVIADOS, 3=EN REVISION, 4=CONFIRMADOS
 	 	$conyuge = null;
 	 	$anio_actual = intval(date("Y"));

 	 	$empleado = $this->mEmpleado->traer_empleado($ClaveEmpleado);
 	 	$es_periodo_captura = $this->mEmpleado->verifica_periodo_captura();

 	 	if( $es_periodo_captura->Resultado == true ){ // TRUE = La fecha actual está dentro del período de captura
 	 		//Intenta obtener datos temporales
 	 		$conyuge = $this->mConyuge->traer_datosTMP_conyuge($ClaveEmpleado);

 	 		if($conyuge != false){ //Si existen datos temporales
				if( $conyuge->Enviado == true ){
					$estado_datos = 3; //DATOS EN REVISION
				}
				else{
					$estado_datos = 2; //DATOS NO ENVIADOS
				}
			}
	 	 	else{
	 	 		//Si no hay datos temporales entonces los obtiene de los datos confirmados
	 	 		$conyuge= $this->mConyuge->consulta_conyuge($ClaveEmpleado);

	 	 		if( $conyuge != false ){
	 	 			$anio_actualiza = intval($conyuge->AnioActualiza);

		 	 		if( $anio_actualiza < $anio_actual ){
						$estado_datos = 1; //DATOS NO ACTUALIZADOS
		 	 		}
		 	 		else{
		 	 			$estado_datos = 4; //DATOS CONFIRMADOS
		 	 		}
	 	 		}
	 	 		else{
	 	 			$conyuge = array( "ConyugeId" => 0
	 	 					,"IdHistorial" => 0
							,"EsEmpleado" => 0
							,"Clave" => ""
							,"apPaterno" => ""
							,"apMaterno" => ""
							,"Nombre" => ""
							,"LugarTrabajo" => ""
							,"DomTrabajo" => ""
							,"Telefonos" => ""
							,"Parentesco" => ""
							,"Celular" => ""
							,"IdParentesco" => 0
							,"fActualizaDatos" => '1900-01-01'
							,"NombreCompleto" => ''
							,"AnioActualiza" => 1900
							,"SinPareja" => $empleado->SinPareja
							);
					$conyuge=(object)$conyuge;
					$estado_datos = 1; //DATOS NO ACTUALIZADOS
	 	 		}


	 	 	}
 	 	}
 	 	else{
 	 		$conyuge= $this->mConyuge->consulta_conyuge($ClaveEmpleado);

 	 		if($conyuge == FALSE){
				$conyuge = array( "ConyugeId" => 0
							,"IdHistorial" => 0
							,"EsEmpleado" => 0
							,"Clave" => ""
							,"apPaterno" => ""
							,"apMaterno" => ""
							,"Nombre" => ""
							,"LugarTrabajo" => ""
							,"DomTrabajo" => ""
							,"Telefonos" => ""
							,"Parentesco" => ""
							,"Celular" => ""
							,"IdParentesco" => 0
							,"fActualizaDatos" => '1900-01-01'
							,"NombreCompleto" => ''
							,"AnioActualiza" => 1900
							,"SinPareja" => $empleado->SinPareja
							);
				$conyuge=(object)$conyuge;
			}

 	 		$estado_datos = 0; //SIN LEYENDA, significa que no es período de captura
 	 	}

 	 	$resultado = array(	'estado_datos' => $estado_datos,
 	 						'conyuge' => $conyuge
 	 						);

 	 	return $resultado;
 	}

  public function ObtenerEstadoDatosConyuge(){ //<<<RPERAZA(2018.07.06): CASU 0159/2018
    $ClaveEmpleado = $this->input->post("ClaveEmpleado", TRUE);

    $resultado = $this->ObtenerDatosConyuge($ClaveEmpleado);

    echo "1".$resultado['estado_datos'];
  }

 	public function GuardaTMPConyuge()  //<<<RPERAZA(2018.07.06): CASU 0159/2018
 	{
 		$mod_conyuge = new Conyuge_modelo();

 	 	$resultado = 0;

 	 	$ConyugeId = $this->input->post("ConyugeId",TRUE);
		$EmpleadoId = $this->input->post("EmpleadoId",TRUE);
		$EsEmpleado = $this->input->post("EsEmpleado",TRUE);
		$apPaterno = $this->input->post("apPaterno",TRUE);
		$apMaterno = $this->input->post("apMaterno",TRUE);
		$Nombre = $this->input->post("Nombre",TRUE);
		$DomTrabajo = $this->input->post("DomTrabajo",TRUE);
		$Telefonos = $this->input->post("Telefonos",TRUE);
		$Celular = $this->input->post("Celular",TRUE);
		$IdParentesco = $this->input->post("IdParentesco",TRUE);
		$LugarTrabajo = $this->input->post("LugarTrabajo",TRUE);
		$SinPareja = $this->input->post("SinPareja",TRUE);
		$IdHistorial = $this->input->post("IdHistorial",TRUE);

		//*************************
 	 	$parametros = array( 'ConyugeId' => $ConyugeId
							,'EmpleadoId' => $EmpleadoId
							,'apPaterno' => (mb_strtoupper($apPaterno))
							,'apMaterno' => (mb_strtoupper($apMaterno))
							,'Nombre' => (mb_strtoupper($Nombre))
							,'LugarTrabajo' => (mb_strtoupper($LugarTrabajo))
							,'DomTrabajo' => (mb_strtoupper($DomTrabajo))
							,'Telefonos' => $Telefonos
							,'IdParentesco' => $IdParentesco
							,'EsEmpleado' => $EsEmpleado
							,'Celular' => $Celular
							,'SinPareja' => $SinPareja
							,'IdHistorial' => $IdHistorial
 	 						,'Usuario' => $this->session->userdata('username')
 	 					);

 	 	if( $IdHistorial == 0 ){ //INSERT
 	 		$insert = $this->mConyuge->insertar_TMPconyuge($parametros);

 	 		if( $insert != false ){
	 	 		if($insert->IdHistorial > 0){
	 	 			$resultado = 1; //Se insertó correctamente
	 	 			$IdHistorial = $insert->IdHistorial;
	 	 		}
	 	 		else{
	 	 			$resultado = 2; //No se insertó
	 	 		}
	 	 	}
	 	 	else{
	 	 		$resultado = 0; //Error en la consulta
	 	 	}
 	 	}
 	 	else{ //UPDATE
 	 		$update = $this->mConyuge->actualizar_TMPconyuge($parametros);

 	 		if( $update != false ){
	 	 		if($update == 1){
	 	 			$resultado = 1; //Se actualizó correctamente
	 	 		}
	 	 		else{
	 	 			$resultado = 2; //No actualizó
	 	 		}
	 	 	}
	 	 	else{
	 	 		$resultado = 0; //Error en la consulta
	 	 	}
 	 	}

 	 	echo $resultado.$IdHistorial;

 	}

 	public function GuardaConyuge(){
		$errores = "0";
		$resultado = "";

		//if($this->session->userdata('EsAdmin')){ //<<<RPERAZA(2018.07.06): CASU 0159/2018
		if(verificar_permiso('WFBEM') == 3){ //<<<RPERAZA(2018.08.15): CASU 1033/2018
	 	 	$mod_empleado = new Empleado_modelo();
	 	 	$mod_conyuge = new Conyuge_modelo();

	 	 	$ConyugeId = $this->input->post("ConyugeId",TRUE);
			$IdEmpleado = $this->input->post("IdEmpleado",TRUE);
			$EsEmpleado = $this->input->post("EsEmpleado",TRUE);
			$apPaterno = $this->input->post("apPaterno",TRUE);
			$apMaterno = $this->input->post("apMaterno",TRUE);
			$Nombre = $this->input->post("Nombre",TRUE);
			$DomTrabajo = $this->input->post("DomTrabajo",TRUE);
			$Telefonos = $this->input->post("Telefonos",TRUE);
			$Celular = $this->input->post("Celular",TRUE);
			$Parentesco = $this->input->post("Parentesco",TRUE);
			$LugarTrabajo = $this->input->post("LugarTrabajo",TRUE);
			$IdParentesco = $this->input->post("IdParentesco",TRUE); //<<<RPERAZA(2018.07.05): CASU 0159/2018
			$SinPareja = $this->input->post("SinPareja",TRUE); //<<<RPERAZA(2018.07.06): CASU 0159/2018
			$IdHistorial = $this->input->post("IdHistorial",TRUE); //<<<RPERAZA(2018.07.06): CASU 0159/2018

			//actualiza campo [SinPareja] en cat_Empleado

			//Se inica transacción para inserción de datos de las partes y la configuración
			$mod_conyuge->iniciar_transaccion();

			try{
				//Guardamos información del cónyuge
				$conyuge = $this->mConyuge->guardar_conyuge($ConyugeId,$IdEmpleado,(mb_strtoupper($apPaterno)),(mb_strtoupper($apMaterno)),(mb_strtoupper($Nombre)),(mb_strtoupper($LugarTrabajo)),(mb_strtoupper($DomTrabajo)),$Telefonos,(mb_strtoupper($Parentesco)),$EsEmpleado,$Celular,$IdParentesco);

				if( $conyuge->ConyugeId > 0 ){

					//Actualiza valor de campo [SinPareja] en [cat_Empleados]
					$resultado_sinpareja = $mod_empleado->actualizar_estado_sinpareja($IdEmpleado,$SinPareja);

					if( $resultado_sinpareja == 1 ){ //Si se guardó
						$resultado = $conyuge->ConyugeId;
					}
					else{
						$errores = "3"; //No se pudo actualizar el campo SinPareja en cat_Empleado
					}
				}
				else{
					$errores = "2"; //No se pudo guardar la información del cónyuge
				}

		 	 	//Elimina datos temporales
		 	 	if($errores == "0"){
		 	 		$mod_conyuge->eliminar_datosTMP_por_idhistorial($IdHistorial);
		 	 	}

			}
			catch(Exception $e){
				$errores = "4"; //Error en la ejecución del script
			}

			//Terminamos transacción
			$mod_conyuge->terminar_transaccion(($errores == "0" ? 0 : 1));

	 	 }
	 	 else{
	 	 	$errores = "@";
	 	 }


	 	if( $errores == "0" ){
			echo "1".$resultado; //Todo bien
		}
		else{
			echo $errores;; //Se generó algún error en la ejecución del script
		}
	}

 	public function EnviarDatosTMPConyuge(){ //<<<RPERAZA(2018.07.06): CASU 0159/2018
 		$IdHistorial = $this->input->post("IdHistorial",TRUE);

 		if($IdHistorial > 0){
 			$mod_conyuge = new Conyuge_modelo();
 			$parametros = array( 'IdHistorial' => $IdHistorial,
	 						 	 'Usuario' => $this->session->userdata('username')
 	 					);

 			$enviar = $mod_conyuge->enviar_datosTMP_conyuge($parametros);

 			if($enviar != false){
 				if($enviar == 1){
 					echo "1";
 				}
 				else{
 					echo "2"; //No se pudo enviar
 				}
 			}
 			else{
 				echo "0"; //Error en consulta
 			}
 		}
 		else{
 			echo "*"; //IdHistorial no válido
 		}
 	}

	//*****************************************
 	// BENEFICIARIOS
 	//*****************************************

  public function CargaBeneficiarios(){
  	$Clave = $this->input->post('ClaveEmpleado');
  	$estudiantes = null;
  	$estado_datos = 4; //Inicia con datos confirmados //<<<RPERAZA(2018.07.11)

  	$empleado = $this->mEmpleado->traer_empleado($Clave);
  	$es_periodo_captura = $this->mEmpleado->verifica_periodo_captura();
  	$consecutivos['c0'] = 0;
  	$SinHijos = false;

  	if( $es_periodo_captura->Resultado == 1 ){
  		$estudiantes_capturados = $this->mEstudiante->traer_estudiantes_capturados($Clave);
  		if($estudiantes_capturados){

  			$c = 1;
  			foreach($estudiantes_capturados as $estudiante){

  				if($estudiante->IdEstudiante > 0){//Si tiene IdEstudiante > 0 entonces existe en [pres_Estudiantes]
  					$tipoRegistro = 1; //1 = Significa que el registro existe en la tabla [pres_Estudiantes]
  					$datos_estudiante = $this->ObtenerDatosEstudiante($estudiante->IdEstudiante,$tipoRegistro);
  					$estudiante_tmp = $datos_estudiante['estudiante'];
  					$estudiante_tmp->EstadoDatos = $datos_estudiante['estado_datos'];
  					$estudiantes[] = $estudiante_tmp;

  					if( $datos_estudiante['estado_datos'] == 0 ){
  						$estado_datos = 0;
  					}
  					else{
  						if( $datos_estudiante['estado_datos'] != 4 ){
  							$estado_datos = $datos_estudiante['estado_datos'];
  						}
  					}
  				}
  				else{ //El registro sólo exite en la tabla temporal [hist_DatosTMP_Estudiante]
  					$estudiante_tmp = $this->mEstudiante->traer_datosTMP_estudiante_por_idhistorial($estudiante->IdHistorial);

  					if( $estudiante_tmp->Enviado == true ){
  						$estudiante_tmp->EstadoDatos = 3; //DATOS EN REVISION
  					}
  					else{
  						$estudiante_tmp->EstadoDatos = 2; //DATOS NO ENVIADOS
  					}
  					$estudiantes[] = $estudiante_tmp;

  					if( $estudiante_tmp->EstadoDatos == 0 ){
  						$estado_datos = 0;
  					}
  					else{
  						if( $estudiante_tmp->EstadoDatos != 4 ){
  							$estado_datos = $estudiante_tmp->EstadoDatos;
  						}
  					}

  					if( $estudiante_tmp->SinHijos ){
  						$SinHijos = true;
  					}

          }
  				$consecutivos['c'.$estudiante->IdEstudiante.'-'.$estudiante->IdHistorial] = $c++;
  			}
        if( count($estudiantes_capturados) == 1 ){ //alopez (Empleado estudiante sin beneficiarios)
          $SinHijos = ( $estudiante_tmp->EsEmpleado == 1 ? true : false );
          if($empleado->SinHijosActualizado){
    				$estado_datos = 4;
    			}
        }
  		}
  		else{
  			if($empleado->SinHijosActualizado){
  				$estado_datos = 4;
  			}
  			else{
  				$estado_datos = 1;
  			}

  			$SinHijos = true;
  		}
  	}
  	else{ //Si no es período de captura
  		$estado_datos = 0;
  		//trae solamente los estudiantes confirmados [pres_Estudiantes]
  		$consecutivos['c0'] = 0;
  		$c = 1;
  		$estudiantes = $this->mEstudiante->consulta_estudiante($Clave);

  		if( $estudiantes != false ){
  			foreach ($estudiantes as $estudiante) {
  				$consecutivos['c'.$estudiante->IdEstudiante.'-'.$estudiante->IdHistorial] = $c++;
  			}
  		}
  		else $SinHijos = true;
  	}
    $datos_conyuge = $this->ObtenerDatosConyuge($Clave);
    $conyuge = $datos_conyuge['conyuge'];
    $datos['conyuge'] = $datos_conyuge['conyuge'];

  	$datos['estudiantes'] = $estudiantes;
  	$datos['consecutivos'] = $consecutivos;
  	$datos['es_periodo_captura'] = $es_periodo_captura->Resultado;
  	$datos['estado_datos'] = $estado_datos;
  	$datos['SinHijos'] = $SinHijos;
  	$this->load->view("empleado/DatosBeneficiarios",$datos);
  }

  public function CargarCapturaBeneficiario(){
    //cargar solo un registro de estudiante
    $selectores = new selectores_class();
    $IdRegistro = $this->input->post("IdRegistro",TRUE);
    $IdEmpleado = $this->input->post("IdEmpleado",TRUE);
    $tipoRegistro = $this->input->post("tipoRegistro",TRUE);
    $datos_estudiante = null;

    //Elimina datos temporales de años anteriores
    $this->mEstudiante->eliminar_datosTMP_anteriores($IdRegistro);

    $datos_beneficiario = $this->ObtenerDatosEstudiante($IdRegistro,$tipoRegistro);
    $beneficiario = $datos_beneficiario['estudiante'];
    $empleado = $this->mEmpleado->traer_empleado_por_id($IdEmpleado); //<<<RPERAZA(2018.07.05): CASU 0159/2018

    $datos['empleado'] = $empleado; //<<<RPERAZA(2018.07.05): CASU 0159/2018
    $datos['beneficiario'] = $datos_beneficiario['estudiante'];//$estudiante;
    $datos['estado_datos'] = $datos_beneficiario['estado_datos'];

    $datos['IdEmpleado'] = $IdEmpleado;
    $Parentescos = $selectores->parentescos($beneficiario->idParentesco,TRUE);
    $datos['parentescos'] = $Parentescos;

    $this->load->view('empleado/formularioBeneficiario', $datos);
  }

  public function GuardarTMPBeneficiario(){
    $resultado = 0;

    $IdBeneficiario = $this->input->post("IdBeneficiario",TRUE);
    $IdEmpleado = $this->input->post("IdEmpleado",TRUE);
    $apPaterno = $this->input->post("apPaternoBeneficiario",TRUE);
    $apMaterno = $this->input->post("apMaternoBeneficiario",TRUE);
    $Nombre = $this->input->post("NombreBeneficiario",TRUE);
    $fNacimiento = $this->input->post("fNacimiento",TRUE);
    $Sexo = $this->input->post("SexoBeneficiario",TRUE);
    $CURP = $this->input->post("CURP_Benef",TRUE); //<<<RPERAZA(2018.07.05): CASU 0159/2018
    $parentesco = $this->input->post("idParentesco",TRUE);
    $Observaciones = $this->input->post("ObservacionesBeneficiario",TRUE);
    $IdHistorial = $this->input->post("IdHistorial_Benef",TRUE);

    $parametros = array(
               'IdHistorial'     => $IdHistorial,
               'EsEmpleado'      => 0,
               'IdBeneficiario'  => $IdBeneficiario,
               'IdEmpleado'      => $IdEmpleado,
               'apPaterno'       => (escapaDatoParaBD(mb_strtoupper($apPaterno))),
               'apMaterno'       => (escapaDatoParaBD(mb_strtoupper($apMaterno))),
               'Nombre'          => (escapaDatoParaBD(mb_strtoupper($Nombre))),
               'fNacimiento'     => (escapaDatoParaBD($fNacimiento)),
               'Sexo'            => $Sexo,
               'CURP'            => (escapaDatoParaBD(mb_strtoupper($CURP))),
               'parentesco'      => $parentesco,
               'Observaciones'   => (escapaDatoParaBD(mb_strtoupper($Observaciones))),
               'Usuario'         => $this->session->userdata('username')
            );

    if( $IdHistorial == 0 ){ //INSERT
      $insert = $this->mEstudiante->insertar_TMPbeneficiario($parametros);

      if( $insert != false ){
        if($insert->IdHistorial > 0){
          $resultado = 1; //Se insertó correctamente
          $IdHistorial = $insert->IdHistorial;
          $data = array('status' => TRUE,'message' => 'Beneficiario guardado correctamente.', 'idHistorial' => $IdHistorial);
        }
        else $data = array('status' => FALSE,'message' => 'No se pudieron guardar los datos del Beneficiario.');
      }
      else $data = array('status' => FALSE,'message' => 'Ocurrió un error al intentar guardar el Beneficiario.');
    }
    else{ //UPDATE
      $update = $this->mEstudiante->actualizar_TMPbeneficiario($parametros);

      if( $update != false ){
        if( $update == 1 ){
          $resultado = 1; //Se actualizó correctamente
          $data = array('status' => TRUE,'message' => 'Beneficiario actualizado correctamente.', 'idHistorial' => $IdHistorial);
        }
        else $data = array('status' => FALSE,'message' => 'No se pudieron guardar los datos del Beneficiario.');
      }
      else $data = array('status' => FALSE,'message' => 'Ocurrió un error al intentar guardar el Beneficiario.');
    }

    // echo $resultado.$IdHistorial;
    $this->output->set_output(json_encode($data));
  }


  public function GuardarTMPSinBeneficiarios()
  {
    $mod_estudiante = new Estudiante_modelo();

    $resultado = 0;

    $IdEmpleado = $this->input->post("IdEmpleado",TRUE);

    $parametros = array( 'IdEmpleado' => $IdEmpleado,
               'Usuario' => $this->session->userdata('username')
            );

    $insert = $mod_estudiante->insertar_TMPestudianteSinHijos($parametros);

    if( $insert != false ){
      if($insert->IdHistorial > 0){
        $resultado = 1; //Se insertó correctamente
        $IdHistorial = $insert->IdHistorial;
      }
      else{
        $resultado = 2; //No se insertó
      }
    }
    else{
      $resultado = 0; //Error en la consulta
    }

    echo $resultado.$IdHistorial;

  }

  public function GuardarTMPSinPrestaciones() {
    $resultado = 0;

    $IdEmpleado = $this->input->post("IdEmpleado",TRUE);
    $fecha = new DateTime();
    $fecha = date_format($fecha, 'd-m-Y H:i:s');

    $parametros = array( 'IdEmpleado' => $IdEmpleado,
               'Usuario' => $this->session->userdata('username'),
               'Fecha' => $fecha
            );

    $update = $this->mEstudiante->actualiza_TMPSinPrestaciones($parametros);

    if( $update != false ){
      if( $update == 1 ){
        $resultado = 1; //Se actualizó correctamente
        $data = array('status' => TRUE,'message' => 'Prestaciones actualizadas correctamente.');
      }
      else $data = array('status' => FALSE,'message' => 'No se pudieron guardar los datos de las Prestaciones.');
    }
    else $data = array('status' => FALSE,'message' => 'Ocurrió un error al intentar guardar las Prestaciones.');

    $this->output->set_output(json_encode($data));

  }

  public function GuardarSinPrestaciones() {
    $resultado = 0;

    $IdEmpleado = $this->input->post("IdEmpleado",TRUE);
    $fecha = new DateTime();
    $fecha = date_format($fecha, 'd-m-Y H:i:s');

    $parametros = array( 'IdEmpleado' => $IdEmpleado,
                         'Fecha'      => $fecha
                       );

    $update = $this->mEstudiante->actualiza_TMPSinPrestaciones($parametros);

    if( $update != false ){
      if( $update == 1 ){
        $resultado = 1; //Se actualizó correctamente
        $data = array('status' => TRUE,'message' => 'Prestaciones actualizadas correctamente.');
      }
      else $data = array('status' => FALSE,'message' => 'No se pudieron guardar los datos de las Prestaciones.');
    }
    else $data = array('status' => FALSE,'message' => 'Ocurrió un error al intentar guardar las Prestaciones.');

    $this->output->set_output(json_encode($data));

  }

  public function GuardarTMPEstudianteSinHijos()  //<<<RPERAZA(2018.07.12): CASU 0159/2018
  {
    $mod_estudiante = new Estudiante_modelo();

    $resultado = 0;

    $IdEmpleado = $this->input->post("IdEmpleado",TRUE);

    $parametros = array( 'IdEmpleado' => $IdEmpleado,
               'Usuario' => $this->session->userdata('username')
            );

    $insert = $mod_estudiante->insertar_TMPestudianteSinHijos($parametros);

    if( $insert != false ){
      if($insert->IdHistorial > 0){
        $resultado = 1; //Se insertó correctamente
        $IdHistorial = $insert->IdHistorial;
      }
      else{
        $resultado = 2; //No se insertó
      }
    }
    else{
      $resultado = 0; //Error en la consulta
    }

    echo $resultado.$IdHistorial;
  }

  public function GuardarBeneficiario(){
    if( verificar_permiso('WFBEM') == 3 ){ //<<<RPERAZA(2018.08.15): CASU 1033/2018
      $IdBeneficiario = $this->input->post("IdBeneficiario",TRUE);
      $IdEmpleado = $this->input->post("IdEmpleado",TRUE);
      $EsEmpleado = $this->input->post("EsEmpleado",TRUE);
      $apPaterno = $this->input->post("apPaternoBeneficiario",TRUE);
      $apMaterno = $this->input->post("apMaternoBeneficiario",TRUE);
      $Nombre = $this->input->post("NombreBeneficiario",TRUE);
      $fNacimiento = $this->input->post("fNacimiento",TRUE);
      $Observaciones = $this->input->post("ObservacionesBeneficiario",TRUE);
      $Sexo = $this->input->post("SexoBeneficiario",TRUE);
      $CURP = $this->input->post("CURP_Benef",TRUE); //<<<RPERAZA(2018.07.05): CASU 0159/2018
      $IdHistorial = $this->input->post("IdHistorial_Benef",TRUE);
      $parentesco = $this->input->post("idParentesco",TRUE);
      $fEnvioDatos = $this->input->post("fEnvioDatos_frmBenef",TRUE);
      $errores  = 0;

      $parametros = array(
                 'IdHistorial'     => $IdHistorial,
                 'EsEmpleado'      => 0,
                 'IdBeneficiario'  => $IdBeneficiario,
                 'IdEmpleado'      => $IdEmpleado,
                 'apPaterno'       => (escapaDatoParaBD(mb_strtoupper($apPaterno))),
                 'apMaterno'       => (escapaDatoParaBD(mb_strtoupper($apMaterno))),
                 'Nombre'          => (escapaDatoParaBD(mb_strtoupper($Nombre))),
                 'fNacimiento'     => (escapaDatoParaBD($fNacimiento)),
                 'Sexo'            => $Sexo,
                 'CURP'            => (escapaDatoParaBD(mb_strtoupper($CURP))),
                 'parentesco'      => $parentesco,
                 'fEnvioDatos'     => escapaDatoParaBD($fEnvioDatos),
                 'Observaciones'   => (escapaDatoParaBD(mb_strtoupper($Observaciones))),
                 'Usuario'         => $this->session->userdata('username')
              );

      $this->mEstudiante->iniciar_transaccion();

      $estudiante = $this->mEstudiante->guarda_beneficiario($parametros);

      if( $estudiante == false ) $errores = 1;
      else{
        $tmpBeneficiario = $this->mEstudiante->traer_datosTMP_estudiante_por_idhistorial($IdHistorial);

        if( $tmpBeneficiario != false ){
          $fecha = new DateTime();
          $fecha = date_format($fecha, 'd-m-Y H:i:s');
          $parametrosBenef = array(
                     'IdBeneficiario'       => $estudiante->idBeneficiario,
                     'IdEmpleado'           => $IdEmpleado,
                     'guarderia'            => $tmpBeneficiario->Guarderia,
                     'beca'                 => $tmpBeneficiario->Beca,
                     'utiles'               => $tmpBeneficiario->Utiles,
                     'rfc'                  => (mb_strtoupper($tmpBeneficiario->RFC)),
                     'razonsocial'          => (mb_strtoupper($tmpBeneficiario->RazonSocial)),
                     'EscuelaidAnterior'    => (empty($tmpBeneficiario->EscuelaidAnterior) ? 0 : $tmpBeneficiario->EscuelaidAnterior),
                     'GradoAnterior'        => (empty($tmpBeneficiario->GradoAnterior) ? 0 : $tmpBeneficiario->GradoAnterior),
                     'idEscolaridadAnt'     => (empty($tmpBeneficiario->idEscolaridadAnt) ? 0 : $tmpBeneficiario->idEscolaridadAnt),
                     'Promedio'             => (empty($tmpBeneficiario->Promedio) ? 0 : $tmpBeneficiario->Promedio),
                     'Grado'                => (empty($tmpBeneficiario->Grado) ? 0 : $tmpBeneficiario->Grado),
                     'EscuelaId'            => (empty($tmpBeneficiario->Escuelaid) ? 0 : $tmpBeneficiario->Escuelaid),
                     'Escolaridad'          => (empty($tmpBeneficiario->Escolaridad) ? 0 : $tmpBeneficiario->Escolaridad),
                     'fActualizaBeneficios' => $fecha,
                     'fActualizaDatos'      => ( empty($tmpBeneficiario->FC) ? $fecha : cambiaf_a_normal($tmpBeneficiario->FC))
                   );
           $update = $this->mEstudiante->actualizar_prestaciones($parametrosBenef);
           if( $update == false ) $errores = 2;
        }

        if( $IdHistorial > 0 ){
          //Cambia estado de imagenes de Temporales a Definitivas
          $parametros = array(
                    'IdPrimario' => $IdHistorial
                   ,'IdSecundario' => 0
                   ,'IdEstudiante' => $estudiante->idBeneficiario
                  );

           $this->mEstudiante->cambiar_estado_imagenes_estudiante($parametros); //<<<RPERAZA(2018.08.15): CASU 1033/2018
        }

        $this->mEstudiante->eliminar_datosTMP_por_idhistorial($IdHistorial); //<<<RPERAZA(2018.07.09): CASU 0159/2018
      }

      $this->mEstudiante->terminar_transaccion(($errores == "0" ? 0 : 1));

      if ( $errores == 0 ){
        $this->mEmpleado->actualizar_estado_sinhijos($IdEmpleado,0); //<<<RPERAZA(2018.07.12)
        $data = array('status' => TRUE,'message' => 'Los datos del beneficiario se guardaron correctamente.');
      }
      else $data = array('status' => FALSE,'message' => 'Ocurrió un error al intentar guardar al beneficiario.');

    }
    else $data = array('status' => FALSE,'message' => 'Ocurrió un error al intentar guardar al beneficiario.');

    $this->output->set_output(json_encode($data));
  }

    //*****************************************
   	// PRESTACIONES
   	//*****************************************

   	public function CargarPrestaciones(){
   	 	$Clave = $this->input->post('ClaveEmpleado');
   	 	$estudiantes = null;
   	 	$estado_datos = 4; //Inicia con datos confirmados //<<<RPERAZA(2018.07.11)

  	 	$empleado = $this->mEmpleado->traer_empleado($Clave);
  	 	$es_periodo_captura = $this->mEmpleado->verifica_periodo_captura();
   	 	$consecutivos['c0'] = 0;
   	 	$SinPrestaciones = false;

   	 	if( $es_periodo_captura->Resultado == 1 ){
   	 		$estudiantes_capturados = $this->mEstudiante->traer_estudiantes_capturados($Clave);
  	 	 	if($estudiantes_capturados){

  	 	 		$c = 1;
  	 	 		foreach($estudiantes_capturados as $estudiante){

  	 	 			if($estudiante->IdEstudiante > 0){ //Si tiene IdEstudiante > 0 entonces existe en [pres_Estudiantes]
  	 	 				$tipoRegistro = 1; //1 = Significa que el registro existe en la tabla [pres_Estudiantes]
  	 	 				$datos_estudiante = $this->ObtenerDatosEstudiante($estudiante->IdEstudiante,$tipoRegistro);
  	 	 				$estudiante_tmp = $datos_estudiante['estudiante'];
  	 	 				$estudiante_tmp->EstadoDatos = $datos_estudiante['estado_datos'];
  	 	 				$estudiantes[] = $estudiante_tmp;

  	 	 				if( $datos_estudiante['estado_datos'] == 0 ){
  		 	 				$estado_datos = 0;
  		 	 			}
  		 	 			else{
  		 	 				if( $datos_estudiante['estado_datos'] != 4 ){
  		 	 					$estado_datos = $datos_estudiante['estado_datos'];
  		 	 				}
  		 	 			}
  	 	 			}
  	 	 			else{ //El registro sólo exite en la tabla temporal [hist_DatosTMP_Estudiante]
  	 	 				$estudiante_tmp = $this->mEstudiante->traer_datosTMP_estudiante_por_idhistorial($estudiante->IdHistorial);

  						if( $estudiante_tmp->Enviado == true ){
  							$estudiante_tmp->EstadoDatos = 3; //DATOS EN REVISION
  						}
  						else{
  							$estudiante_tmp->EstadoDatos = 2; //DATOS NO ENVIADOS
  						}
  						$estudiantes[] = $estudiante_tmp;

  						if( $estudiante_tmp->EstadoDatos == 0 ){
  		 	 				$estado_datos = 0;
  		 	 			}
  		 	 			else{
  		 	 				if( $estudiante_tmp->EstadoDatos != 4 ){
  		 	 					$estado_datos = $estudiante_tmp->EstadoDatos;
  		 	 				}
  		 	 			}

  		 	 			if( $estudiante_tmp->SinHijos ){
  		 	 				$SinPrestaciones = true;
  		 	 			}
            }
  	 	 			$consecutivos['c'.$estudiante->IdEstudiante.'-'.$estudiante->IdHistorial] = $c++;

          }
  	 	 	}
  	 	 	else{
  	 	 		if($empleado->SinHijosActualizado){
  	 	 			$estado_datos = 4;
  	 	 		}
  	 	 		else{
  	 	 			$estado_datos = 1;
  	 	 		}

  	 	 		$SinPrestaciones = true;
  	 	 	}
  	 	}
  	 	else{ //Si no es período de captura
  	 		$estado_datos = 0;
  	 	 	//trae solamente los estudiantes confirmados [pres_Estudiantes]
  	 	 	$consecutivos['c0'] = 0;
  	 	 	$c = 1;
  	 	 	$estudiantes = $this->mEstudiante->consulta_estudiante($Clave);

  	 	 	if( $estudiantes != false ){
  		 	 	foreach ($estudiantes as $estudiante) {
  		 	 		$consecutivos['c'.$estudiante->IdEstudiante.'-'.$estudiante->IdHistorial] = $c++;
  		 	 	}
  		 	}
  		 	else{
  		 		$SinPrestaciones = true;
  		 	}
  	 	}

   	 	$datos['estudiantes'] = $estudiantes;
  		$datos['consecutivos'] = $consecutivos;
  		$datos['es_periodo_captura'] = $es_periodo_captura->Resultado;
  		$datos['estado_datos'] = $estado_datos;
  		$datos['SinPrestaciones'] = $SinPrestaciones;
  		$this->load->view('empleado/DatosPrestaciones', $datos);
   	}

    public function GuardarTMPPrestacion(){
      $resultado = 0;
      $EsEmpleado = $this->input->post("EsEmpleadoBenef",TRUE);
      $EsEmpleado = ( empty($EsEmpleado) ? FALSE : TRUE );
      $IdEmpleado = $this->input->post("IdEmpleado",TRUE);
      $prestacion = $this->input->post("prestacion",TRUE);
      $RFC = $this->input->post("rfc_pres",TRUE);
      $razonsocial = $this->input->post("razonsocial_pres",TRUE);
      $EscuelaidAnterior = $this->input->post("EscuelaidAnterior",TRUE);
      $GradoAnterior = $this->input->post("GradoAnterior",TRUE);
      $Promedio = $this->input->post("Promedio_Est",TRUE);
      $Escuelaid = $this->input->post("EscuelaId",TRUE);
      $Escolaridad = $this->input->post("EscolaridadId",TRUE);
      $EscolaridadAnt = $this->input->post("idEscolaridadAnt",TRUE);
      $Grado = $this->input->post("Grado",TRUE);
      $Observaciones = $this->input->post("ObservacionesPrestacion",TRUE);
      $Observaciones = (empty($Observaciones) ? '' : $Observaciones);

      $IdBeneficiario = ( empty($EsEmpleado) ? $this->input->post("idBeneficiario",TRUE) : $this->input->post("idBeneficiarioEmpleado",TRUE) );
      $IdEstudiante = $this->input->post("IdEstudiante",TRUE);
      $IdHistorial = $this->input->post("IdHistorial_Pres",TRUE);
      $IdHistorial = (empty($IdHistorial) ? $IdBeneficiario : $IdHistorial);
      // $IdBeneficiario = ( empty($EsEmpleado) ? $IdBeneficiario : $IdHistorial );

      $fecha = new DateTime();
      $fecha = date_format($fecha, 'd-m-Y H:i:s');
      $continuar = true;

      $parametros = array(
                 'IdHistorial'        => $IdHistorial,
                 'IdBeneficiario'     => $IdBeneficiario,
                 'IdEmpleado'         => $IdEmpleado,
                 'EsEmpleado'         => $EsEmpleado,
                 'prestacion'         => $prestacion,
                 'rfc'                => (mb_strtoupper($RFC)),
                 'razonsocial'        => (mb_strtoupper($razonsocial)),
                 'EscuelaidAnterior'  => $EscuelaidAnterior,
                 'GradoAnterior'      => $GradoAnterior,
                 'Promedio'           => $Promedio,
                 'Grado'              => $Grado,
                 'EscuelaId'          => $Escuelaid,
                 'Escolaridad'        => $Escolaridad,
                 'idEscolaridadAnt'   => $EscolaridadAnt,
                 'Observaciones'      => (mb_strtoupper($Observaciones)),
                 'Usuario'            => $this->session->userdata('username'),
                 'Fecha'              => $fecha
              );

      $existeTMPBeneficiario = $this->mEmpleado->valida_existe_TMPbeneficiario($IdEmpleado,$IdEstudiante,$EsEmpleado,$IdHistorial);
      $existeBenef = $this->mEmpleado->valida_existe_beneficiario($IdEmpleado,$IdBeneficiario,$EsEmpleado);

      //inserta beneficiario
      if( $IdHistorial == 0 && $existeTMPBeneficiario == false ){
        if( !empty($EsEmpleado) ){
          $empleado = $this->mEmpleado->traer_empleado_por_id($IdEmpleado);
          $datosBeneficiario = array(
                        'apPaterno'     => (escapaDatoParaBD($empleado->Apellido1)),
                        'apMaterno'     => (escapaDatoParaBD($empleado->Apellido2)),
                        'Nombre'        => (escapaDatoParaBD($empleado->Nombre)),
                        'fNacimiento'   => (escapaDatoParaBD(cambiaf_a_normal($empleado->FechaNac))),
                        'Sexo'          => ( $empleado->Sexo == 'M' ? 0 : 1 ),
                        'CURP'          => (escapaDatoParaBD($empleado->CURP)),
                        'parentesco'    => 0,
                        'Observaciones' => (escapaDatoParaBD($Observaciones))
          );
        }
        elseif ( !empty($IdEstudiante) ) {
          $estudiante = $this->mEstudiante->traer_estudianteXId($IdEstudiante);
          $datosBeneficiario = array(
                        'apPaterno'     => (escapaDatoParaBD($estudiante->apPaterno)),
                        'apMaterno'     => (escapaDatoParaBD($estudiante->apMaterno)),
                        'Nombre'        => (escapaDatoParaBD($estudiante->Nombre)),
                        'fNacimiento'   => (escapaDatoParaBD(cambiaf_a_normal($estudiante->fNacimiento))),
                        'Sexo'          => $estudiante->Sexo,
                        'CURP'          => (escapaDatoParaBD($estudiante->CURP)),
                        'parentesco'    => $estudiante->idParentesco,
                        'Observaciones' => (escapaDatoParaBD($estudiante->Observaciones))
          );
        }
        $parametrosBeneficiario = array_merge($parametros, $datosBeneficiario);

        if( $existeBenef == false ){
          $insert = $this->mEstudiante->insertar_TMPbeneficiario($parametrosBeneficiario);
          if( $insert != false ){
            if( $insert->IdHistorial <= 0 ) $continuar = false;
            else{
              $IdHistorial = $insert->IdHistorial;
              $parametros['IdHistorial'] = $IdHistorial;
              $parametros['IdBeneficiario'] = $IdHistorial;
            }
          }
          else $continuar = false;
        }
      }
      elseif( empty($IdBeneficiario) ){
        $parametros['IdHistorial'] = $existeTMPBeneficiario->IdHistorial;
        //$parametros['IdBeneficiario'] = $existeTMPBeneficiario->IdHistorial; //<<< [C] RPERAZA(2019.07.31): CASU 1024
        $parametros['IdBeneficiario'] = $existeTMPBeneficiario->IdEstudiante;
      }

      if( $continuar ){
        if( $existeBenef != false && (!empty($existeTMPBeneficiario->Enviado) || verificar_permiso('WFBEM') == 3) ){
          //$parametros['IdHistorial'] = $existeBenef->IdEstudiante; //<<< [C] RPERAZA(2019.07.31): CASU 1024
          //$parametros['IdBeneficiario'] = $existeBenef->IdEstudiante; //<<< [C] RPERAZA(2019.07.31): CASU 1024
          $parametros['IdHistorial'] = (!empty($existeBenef->IdEstudiante) ? $existeBenef->IdEstudiante : $IdEstudiante); //<<<RPERAZA(2019.07.31): CASU 1024/2019
          $parametros['IdBeneficiario'] = $existeBenef->IdEstudiante; //<<<RPERAZA(2019.07.31): CASU 1024/2019

          $fechaActualizaDatos = ( empty($existeTMPBeneficiario->FC) ? $fecha :  cambiaf_a_normal($existeTMPBeneficiario->FC));
          $fechaEnvioDatos = ( empty($existeTMPBeneficiario->fEnvioDatos) ? $fecha : cambiaf_a_normal($existeTMPBeneficiario->fEnvioDatos));
          $parametros['fActualizaDatos'] = $fechaActualizaDatos;
          $parametros['fEnvioDatos'] = $fechaEnvioDatos;
          if( mb_strtoupper($prestacion) == "GUARDERIA" ) $update = $this->mEstudiante->actualizar_guarderia($parametros);
          elseif ( mb_strtoupper($prestacion) == "BECA" ) $update = $this->mEstudiante->actualizar_beca($parametros);
          elseif ( mb_strtoupper($prestacion) == "UTILES" ) $update = $this->mEstudiante->actualizar_utiles($parametros);
          else $update = false;
          $this->mEstudiante->eliminar_datosTMP_por_idEstudiante($IdBeneficiario);
        }
        else{
          if ( $existeTMPBeneficiario != false && $existeTMPBeneficiario->IdEstudiante == 0 ) $parametros['campo'] = 'IdHistorial';
          if( mb_strtoupper($prestacion) == "GUARDERIA" ) $update = $this->mEstudiante->actualizar_TMPguarderia($parametros);
          elseif ( mb_strtoupper($prestacion) == "BECA" ) $update = $this->mEstudiante->actualizar_TMPbeca($parametros);
          elseif ( mb_strtoupper($prestacion) == "UTILES" ) $update = $this->mEstudiante->actualizar_TMPutiles($parametros);
          else $update = false;
        }
      }
      else $update = false;

      if( $update != false ){
        if( $update == 1 ){
          $resultado = 1; //Se actualizó correctamente
          $data = array('status' => TRUE,'message' => 'Prestación capturada correctamente.', 'idHistorial' => $IdHistorial);
        }
        else $data = array('status' => FALSE,'message' => 'No se pudieron guardar los datos de la Prestación.');
      }
      else $data = array('status' => FALSE,'message' => 'Ocurrió un error al intentar guardar la Prestación.');

      $this->output->set_output(json_encode($data));
    }

    public function EliminaPrestacion(){
      $IdRegistro = $this->input->post("IdRegistro",TRUE);
    	$IdEmpleado = $this->input->post("IdEmpleado",TRUE);
    	$tipoRegistro = $this->input->post("tipoRegistro",TRUE);
      $idPrestacion = $this->input->post("idPrestacion", TRUE);
      $EsEmpleado = $this->input->post("EsEmpleado", TRUE);
      $fecha = new DateTime();
  		$fecha = date_format($fecha, 'd-m-Y H:i:s');

      $existeBenef = $this->mEmpleado->valida_existe_beneficiario($IdEmpleado,$IdRegistro,(empty($EsEmpleado) ? 0 : $EsEmpleado));
      $existeTMPBeneficiario = $this->mEmpleado->valida_existe_TMPbeneficiario($IdEmpleado,$IdRegistro,(empty($EsEmpleado) ? 0 : $EsEmpleado),$IdRegistro);

      $parametros = array(
                 'IdBeneficiario'     => $IdRegistro,
                 'IdEmpleado'         => $IdEmpleado,
                 'EsEmpleado'         => empty($EsEmpleado ? 0 : $EsEmpleado),
                 'Usuario'            => $this->session->userdata('username'),
                 'Fecha'              => $fecha
              );

      if( !empty($existeBenef) ){
        if( $idPrestacion == 1 ) $update = $this->mEstudiante->eliminar_guarderia($parametros);
        elseif ( $idPrestacion == 2 ) $update = $this->mEstudiante->eliminar_beca($parametros);
        elseif ( $idPrestacion == 3 ) $update = $this->mEstudiante->eliminar_utiles($parametros);
        else $update = false;
      }
      elseif( !empty($existeTMPBeneficiario) ){
        if ( $existeTMPBeneficiario->IdEstudiante == 0 ) $parametros['campo'] = 'IdHistorial';
        if( $idPrestacion == 1 ) $update = $this->mEstudiante->eliminar_TMPguarderia($parametros);
        elseif ( $idPrestacion == 2 ) $update = $this->mEstudiante->eliminar_TMPbeca($parametros);
        elseif ( $idPrestacion == 3 ) $update = $this->mEstudiante->eliminar_TMPutiles($parametros);
        else $update = false;
      }
      else $update = false;


      if( $update != false ){
        if( $update == 1 ){
          $resultado = 1; //Se actualizó correctamente
          $data = array('status' => TRUE,'message' => 'Prestación eliminada correctamente.');
        }
        else $data = array('status' => FALSE,'message' => 'No se pudo eliminar la Prestación.');
      }
      else $data = array('status' => FALSE,'message' => 'Ocurrió un error al intentar eliminar la Prestación.');

      $this->output->set_output(json_encode($data));
    }

    public function GuardarPresEmpleadoEstudiante(){
      $idEmpleado = $this->input->post('IdEmpleado');
      $idEstudiante = $this->input->post('IdEstudiante');
      $idHistorial = $this->input->post("IdHistorial_Pres",TRUE);
      $idBeneficiario = $this->input->post('idBeneficiarioEmpleado');
      $fEnvioDatos = $this->input->post("fEnvioDatos_frmBenef",TRUE);

      $prestacion = $this->input->post("prestacion",TRUE);
      $RFC = $this->input->post("rfc_pres",TRUE);
      $razonsocial = $this->input->post("razonsocial_pres",TRUE);
      $EscuelaidAnterior = $this->input->post("EscuelaidAnterior",TRUE);
      $GradoAnterior = $this->input->post("GradoAnterior",TRUE);
      $Promedio = $this->input->post("Promedio_Est",TRUE);
      $Escuelaid = $this->input->post("EscuelaId",TRUE);
      $Escolaridad = $this->input->post("EscolaridadId",TRUE);
      $EscolaridadAnt = $this->input->post("idEscolaridadAnt",TRUE);
      $Grado = $this->input->post("Grado",TRUE);
      $Observaciones = $this->input->post("ObservacionesPrestacion",TRUE);
      $Observaciones = (empty($Observaciones) ? '' : $Observaciones);

      $fecha = new DateTime();
      $fecha = date_format($fecha, 'd-m-Y H:i:s');
      $errores  = 0;

      $this->mEstudiante->iniciar_transaccion();

      $estudiante = $this->ObtenerDatosEstudiante($idEstudiante,3)['estudiante'];

      if( $estudiante == false ) $errores = 1;
      else{

        $parametros = array(
                   'EsEmpleado'      => 1,
                   'IdBeneficiario'  => $idBeneficiario,
                   'IdEmpleado'      => $idEmpleado,
                   'apPaterno'       => (escapaDatoParaBD(mb_strtoupper($estudiante->apPaterno))),
                   'apMaterno'       => (escapaDatoParaBD(mb_strtoupper($estudiante->ApMaterno))),
                   'Nombre'          => (escapaDatoParaBD(mb_strtoupper($estudiante->Nombre))),
                   'fNacimiento'     => (escapaDatoParaBD($estudiante->fNacimiento)),
                   'Sexo'            => $estudiante->Sexo,
                   'CURP'            => (escapaDatoParaBD(mb_strtoupper($estudiante->CURP))),
                   'parentesco'      => 0,
                   'fEnvioDatos'     => escapaDatoParaBD(cambiaf_a_normal($estudiante->fEnvioDatos)),
                   'Observaciones'   => (escapaDatoParaBD(mb_strtoupper($estudiante->Observaciones))),
                   'Usuario'         => $this->session->userdata('username')
                );

        $result = $this->mEstudiante->guarda_beneficiario($parametros);

        if( $result == false ) $errores = 2;
        else{
          $parametrosPres = array(
                     'IdHistorial'        => $idHistorial,
                     'IdBeneficiario'     => $result->idBeneficiario,
                     'IdEmpleado'         => $idEmpleado,
                     'EsEmpleado'         => TRUE,
                     'prestacion'         => $prestacion,
                     'rfc'                => (mb_strtoupper($RFC)),
                     'razonsocial'        => (mb_strtoupper($razonsocial)),
                     'EscuelaidAnterior'  => $EscuelaidAnterior,
                     'GradoAnterior'      => $GradoAnterior,
                     'Promedio'           => $Promedio,
                     'Grado'              => $Grado,
                     'EscuelaId'          => $Escuelaid,
                     'Escolaridad'        => $Escolaridad,
                     'idEscolaridadAnt'   => $EscolaridadAnt,
                     'Observaciones'      => (mb_strtoupper($Observaciones)),
                     'Usuario'            => $this->session->userdata('username'),
                     'fActualizaDatos'    => (cambiaf_a_normal($estudiante->FC)),
                     'fEnvioDatos'        => (cambiaf_a_normal($estudiante->fEnvioDatos)),
                     'Fecha'              => $fecha
                  );

          if( mb_strtoupper($prestacion) == "GUARDERIA" ) $update = $this->mEstudiante->actualizar_guarderia($parametrosPres);
          elseif ( mb_strtoupper($prestacion) == "BECA" ) $update = $this->mEstudiante->actualizar_beca($parametrosPres);
          elseif ( mb_strtoupper($prestacion) == "UTILES" ) $update = $this->mEstudiante->actualizar_utiles($parametrosPres);

          if( $update == false ) $errores = 3;

          $this->mEstudiante->eliminar_datosTMP_por_idhistorial($idHistorial);
        }

        $this->mEstudiante->terminar_transaccion(($errores == "0" ? 0 : 1));

      }
      if( $errores == 0 ) $data = array('status' => TRUE,'message' => 'Prestación guardada correctamente.');
      else $data = array('status' => FALSE,'message' => 'No se pudo guardar la Prestación.');

      $this->output->set_output(json_encode($data));
    }

    public function GuardarBeneficiosConcedidos(){
      $resultado = 0;

      $idBeneficiario = $this->input->post("IdEstudiante",TRUE);
    	$idEmpleado = $this->input->post("IdEmpleado",TRUE);
      $prestacion = $this->input->post("prestacion",TRUE);
      $ConcedePrestacion = $this->input->post("ConcedePres",TRUE);
      $ConcedePrestacion = (empty($ConcedePrestacion) ? 0 : 1);
      $ObservacionesPrestacion = $this->input->post("ObservacionesPrestacion",TRUE);
      $Monto = $this->input->post("txtMonto",TRUE);
      $Monto = (empty($Monto) ? 0 : $Monto);
      $fecha = new DateTime();
      $fecha = date_format($fecha, 'd-m-Y H:i:s');

      $idPrestacion = $this->input->post('idPrestacionConf');
      $idEscolaridad = $this->input->post('idEscolaridad');

      if( $idBeneficiario > 0 ){

        $montoSol = 0;

        if( !empty($ConcedePrestacion) ){
          $claveParametro = trae_clave_monto($idPrestacion,$idEscolaridad);
          $montoParam = $this->mParametros->traer_parametro_por_clave($claveParametro);
          $montoSol = ( empty($montoParam->Valor) ? 0 : $montoParam->Valor );
        }

        if( isset($montoSol) && ($Monto <= $montoSol ) ){
          if( mb_strtoupper($prestacion) == "GUARDERIA" ){
            $campoPrestacion = 'SePagaGuarderia';
            $campoObservacion = 'ObsGuarderia';
            $campoMonto = '';
          }
          elseif ( mb_strtoupper($prestacion) == "BECA" ){
            $campoPrestacion = 'SePagaBeca';
            $campoObservacion = 'ObsBeca';
            $campoMonto = 'MontoBeca';
          }
          elseif ( mb_strtoupper($prestacion) == "UTILES" ){
            $campoPrestacion = 'SePagaUtiles';
            $campoObservacion = 'ObsUtiles';
            $campoMonto = 'MontoUtiles';
          }

          $parametros = array( 'idBeneficiario'     => $idBeneficiario,
                                'idEmpleado'        => $idEmpleado,
                                'concedePres'       => $ConcedePrestacion,
                                'Observaciones'     => ($ObservacionesPrestacion),
                                'campoPrestacion'   => $campoPrestacion,
                                'campoObservacion'  => $campoObservacion,
                                'campoMonto'        => $campoMonto,
                                'monto'             => $Monto,
                                'fecha'             => $fecha
                              );

          $update = $this->mEstudiante->confirma_beneficios($parametros);

          if( $update != false ){
            if( $update == 1 ) $data = array('status' => TRUE, 'message' => 'Prestación confirmada correctamente.');
            else $data = array('status' => FALSE,'message' => 'No se pudieron confirmar los datos de la Prestación.');
          }
          else $data = array('status' => FALSE,'message' => 'Ocurrió un error al intentar confirmar la Prestación.');
        }
        else $data = array('status' => FALSE,'message' => 'El monto solicitado es incorrecto.');

      }
      else $data = array('status' => FALSE,'message' => 'Parámetros incorrectos.');

      $this->output->set_output(json_encode($data));
    }

   	private function ObtenerDatosEstudiante($IdRegistro,$tipoRegistro){ //<<<RPERAZA(2018.07.09): CASU 0159/2018
   	 	$estado_datos = null; // 0=SIN ESTADO, 1=NO ACTUALIZADOS, 2=NO ENVIADOS, 3=EN REVISION, 4=CONFIRMADOS
   	 	$conyuge = null;
   	 	$anio_actual = intval(date("Y"));
   	 	$estudiante_vacio = false;
   	 	$estado_datos = null;

   	 	$es_periodo_captura = $this->mEmpleado->verifica_periodo_captura();

   	 	if( $es_periodo_captura->Resultado == true ){ // TRUE = La fecha actual está dentro del período de captura

   	 		if( $IdRegistro > 0 ){
   	 			$estudiante = null;

  	 	 		//Intenta obtener datos temporales
  	 	 		if($tipoRegistro == 1){ //Si es modificación de un registro de estudiante ya existente
  	 	 			$estudiante = $this->mEstudiante->traer_datosTMP_estudiante($IdRegistro);
  	 	 		}
  	 	 		elseif($tipoRegistro == 3){ //Si es un nuevo estudiante (no existe en tabla [pres_Estudiante] )
  	 	 			$estudiante = $this->mEstudiante->traer_datosTMP_estudiante_por_idhistorial($IdRegistro); //<<<RPERAZA(2018.07.10)
  	 	 		}

  	 	 		if($estudiante != false){ //Si existen datos temporales
  					if( $estudiante->Enviado == true ){
  						$estado_datos = 3; //DATOS EN REVISION
  					}
  					else{
  						$estado_datos = 2; //DATOS NO ENVIADOS
  					}
  				}
  		 	 	else{
  		 	 		//Si no hay datos temporales entonces los obtiene de los datos confirmados
  		 	 		$estudiante= $this->mEstudiante->traer_estudianteXId($IdRegistro);
  		 	 		//$anio_actualiza = intval($estudiante->AnioActualiza);
  		 	 		$datos_actualizados = $estudiante->Actualizado;

  		 	 		//if( $anio_actualiza < $anio_actual ){
  		 	 		if($datos_actualizados == false){
  						$estado_datos = 1; //DATOS NO ACTUALIZADOS
  						$estudiante->Guarderia = 0;
  						$estudiante->Beca = 0;
  						$estudiante->Utiles = 0;
  		 	 		}
  		 	 		else{
  		 	 			$estado_datos = 4; //DATOS CONFIRMADOS
  		 	 		}
  		 	 	}
  		 	 }
  		 	 else{
  		 	 	$estudiante_vacio = true;
  		 	 	$estado_datos = 1; //DATOS NO ACTUALIZADOS
  		 	 }
   	 	}
   	 	else{
   	 		$estudiante= $this->mEstudiante->traer_estudianteXId($IdRegistro);
   	 		if($estudiante == FALSE){
   	 			$estudiante_vacio = true;
  			}

   	 		$estado_datos = 0; //SIN LEYENDA, significa que no es período de captura
   	 	}

  		if($estudiante_vacio == true){
  			$estudiante = array( "IdEstudiante"	=> 0
  						,"IdHistorial"        => 0
  						,"Nombre"             => ""
  						,"apPaterno"          => ""
  						,"ApMaterno"          => ""
  						,"fNacimiento"        => ""
  						,"Escolaridad"        => ""
  						,"EscolaridadId"      => 0
  						,"Colegiatura"        => 0
  						,"FLimitePago"        => ""
  						,"Promedio"           => 0
  						,"Sexo"               => 0
  						,"CURP"               => ""
              ,"idParentesco"       => 1
              ,"Parentesco"         => ""
  						,"Beca"               => 0
  						,"Guarderia"          => 0
  						,"Utiles"             => 0
  						,"Observaciones"      => ""
  						,"EsEmpleado"         => 0
  						,"EscuelaidAnterior"  => 0
  						,"GradoAnterior"      => 0
  						,"EscuelaId"          => 0
              ,"idEscolaridadAnt"   => 0
  						,"Grado"              => 0
  						,"SePagaBeca"         => 0
  						,"SePagaUtiles"       => 0
  						,"SePagaGuarderia"    => 0
  						,"ObsBeca"            => ""
  						,"ObsUtiles"          => ""
  						,"ObsGuarderia"       => ""
  						,"EstadoDatos"        => ""
  						,"fEnvioDatos"        => "1900-01-01"
  						);
  			$estudiante=(object)$estudiante;
  		}

  		$estudiante->EstadoDatos = $estado_datos;

   	 	$resultado = array(	'estado_datos' => $estado_datos,
   	 						'estudiante' => $estudiante
   	 						);

   	 	return $resultado;
   	}

   	public function ObtenerEstadoDatosEstudiante(){ //<<<RPERAZA(2018.07.09): CASU 0159/2018
   	 	$ClaveEmpleado = $this->input->post("IdEstudiante", TRUE);
   	 	$tipoRegistro = $this->input->post("tipoRegistro", TRUE);

   	 	$resultado = $this->ObtenerDatosEstudiante($IdEstudiante,$tipoRegistro);

   	 	echo "1".$resultado['estado_datos'];
   	}

    public function CargarCapturaPrestacion(){
    	$selectores = new selectores_class();
    	$IdRegistro = $this->input->post("IdRegistro",TRUE);
    	$IdEmpleado = $this->input->post("IdEmpleado",TRUE);
    	$tipoRegistro = $this->input->post("tipoRegistro",TRUE);
      $ClaveEmpleado = $this->input->post("ClaveEmpleado", TRUE);
      $idPrestacion = $this->input->post("idPrestacion", TRUE);
    	$datos_estudiante = null;

    	//Elimina datos temporales de años anteriores
     	$this->mEstudiante->eliminar_datosTMP_anteriores($IdRegistro);

    	$datos_estudiante = $this->ObtenerDatosEstudiante($IdRegistro,$tipoRegistro);
    	$estudiante = $datos_estudiante['estudiante'];
    	$empleado = $this->mEmpleado->traer_empleado_por_id($IdEmpleado); //<<<RPERAZA(2018.07.05): CASU 0159/2018
      $beneficiarios = $this->CargaCatBeneficiarios($ClaveEmpleado,$tipoRegistro);

    	$datos['empleado'] = $empleado; //<<<RPERAZA(2018.07.05): CASU 0159/2018
    	$datos['estudiante'] = $datos_estudiante['estudiante'];//$estudiante;
    	$datos['estado_datos'] = ($empleado->SinHijosActualizado ? 4 : $datos_estudiante['estado_datos']);

      $datos['beneficiarios'] = $beneficiarios;
    	$datos['IdEmpleado'] = $IdEmpleado;

    	$Escuelas = $selectores->escuelas($estudiante->EscuelaId, TRUE);
    	$datos['escuelas'] = $Escuelas;
    	$Escuelasant= $selectores->escuelas($estudiante->EscuelaidAnterior, TRUE);
    	$datos['escuelasant'] = $Escuelasant;
      $datos['escolaridad'] = $selectores->escolaridad($estudiante->EscolaridadId, TRUE);
      $datos['escolaridadAnt'] = $selectores->escolaridad($estudiante->idEscolaridadAnt, TRUE);
      $datos['idPrestacion'] = $idPrestacion;
      $this->load->view('empleado/formularioPrestaciones', $datos);
    }

    private function CargaCatBeneficiarios($ClaveEmpleado,$tipoRegistro){
      $estudiantes = null;
      $estudiantes_capturados = $this->mEstudiante->traer_estudiantes_capturados($ClaveEmpleado);

      if( !empty($estudiantes_capturados) ){
        foreach($estudiantes_capturados as $estudiante){
          if( $estudiante->IdEstudiante > 0 ){
            $datos_estudiante = $this->ObtenerDatosEstudiante($estudiante->IdEstudiante,$tipoRegistro);
            $estudiante_tmp = $datos_estudiante['estudiante'];
          }
          else{
            $estudiante_tmp = $this->mEstudiante->traer_datosTMP_estudiante_por_idhistorial($estudiante->IdHistorial);
          }
          $estudiantes[] = $estudiante_tmp;
        }
      }

      return $estudiantes;
    }

   	public function GuardarSinBeneficiarios(){
   	 	$resultado = 0;

  		$IdEmpleado = $this->input->post("IdEmpleado",TRUE);

   		$actualiza = $this->mEmpleado->actualizar_estado_sinhijos($IdEmpleado,1);

   		if( $actualiza ){
   			$this->mEstudiante->eliminar_datosTMP_sin_hijos($IdEmpleado);
   			$resultado = 1; //Se insertó correctamente
   		}
   		else{
   			$resultado = 2; //No se insertó
   		}

   	 	echo $resultado;
   	}

   	public function EnviarDatosTMPBeneficiarios(){ //<<<RPERAZA(2018.07.10): CASU 0159/2018
   		$errores = "0";
   		$resultado = "";
   		$IdEmpleado = $this->input->post("IdEmpleado",TRUE);

   		if( $IdEmpleado > 0 ){
   			$continuar = true;

   			$estudiantes_por_enviar = $this->mEstudiante->traer_EstudiantesTMP_Enviar($IdEmpleado);

   			if( $estudiantes_por_enviar != false ){
   				foreach($estudiantes_por_enviar as $item){
   					if( $item->IdHistorial == 0 ){
   						$continuar = false;
   						break;
   					}
   				}
   			}
        else $continuar = false;

   			if( $continuar == true ){
   				// Inicia transacción
   				$this->mEstudiante->iniciar_transaccion();

   				try{
  	 				foreach($estudiantes_por_enviar as $item){
  	 					//Se marca cada registro como Enviado
  	 					$resultado = $this->mEstudiante->enviar_datosTMP_estudiante($item->IdHistorial);
  	 					if( $resultado == 0 ){ //Si NO se  actualizó el estado de Enviado
  	 						$continuar = false;
  	 						break;
  	 					}
  	 				}

  	 				if($continuar == false){
              $errores = "1";
  	 					$data = array('status' => FALSE,'message' => 'No se pudieron enviar los datos.'); //No se han podido marcar como Enviados todos los registros, no se puede continuar
  	 				}
  	 			}
  	 			catch(Exception $e){
            $errores = "1";
  					$data = array('status' => FALSE,'message' => 'Se ha producido un error. No se pudieron enviar los datos.'); //Ha ocurrido un error durante la ejecución del script
  				}

  				$this->mEstudiante->terminar_transaccion(($errores != "0" ? 1 : 0));
   			}
   			else{
          $errores = "1";
          $data = array('status' => FALSE,'message' => 'Deben actualizarse los datos de todos los estudiantes antes de poder enviarlos.');
        }

   			if( $errores == "0" ) $data = array('status' => TRUE,'message' => 'Los datos se enviaron a revisión correctamente.');
   		}
   		else $data = array('status' => FALSE,'message' => 'Parámetros incorrectos.');

      $this->output->set_output(json_encode($data));
    }

  	public function EliminaEstudiante(){
  		$mod_estudiante = new Estudiante_modelo();
  		$IdEmpleado = $this->input->post("IdEmpleado",TRUE);
  		$IdRegistro = $this->input->post("IdRegistro",TRUE);
  		$tipoRegistro = $this->input->post("tipoRegistro",TRUE);

  		if( $tipoRegistro == 1 ){ //Si es un registro existente en [pres_Estudiantes] //<<<RPERAZA(2018.07.10)
  			$estudiante = $mod_estudiante->elimina_Estudiante($IdRegistro,$IdEmpleado);
  		}
  		else{ //Si es temporal que NO existe en [pres_Estudiantes]
  			$estudiante = $mod_estudiante->elimina_EstudianteTMP($IdRegistro);
  		}

  		$mod_imagen = new imagen_modelo();

  		$datos = array(
  					'ClaveSeccionImagen' => $tipoRegistro,
  					'IdPrimario' => $IdRegistro,
  					'IdSecundario' => 0
  				);

  		$imagenes = $mod_imagen->traer_imagenes_seccion_idprim_idsec($datos);

  		if($imagenes != false){
  			foreach($imagenes as $imagen){
  				$mod_imagen->eliminar_imagen($imagen->IdImagen);
  				if( file_exists( RUTA_IMG_ESTUDIANTE.$imagen->Nombre ) ){
  	  				unlink(RUTA_IMG_ESTUDIANTE.$imagen->Nombre);
  	  			}
  			}
  		}
  	}

    public function traeMontoPrestacion(){
      $idPrestacion = $this->input->post('idPrestacion');
      $idBeneficiario = $this->input->post('idEstudiante');
      $idEscolaridad = $this->input->post("idEscolaridad",TRUE);
      if( !empty($idPrestacion) && !empty($idBeneficiario) && !empty($idEscolaridad) ){
        $montoBenef = $this->mEstudiante->traeMontoPrestacion($idPrestacion,$idBeneficiario);

        if( $montoBenef != false ){
          $campo = ($idPrestacion == 2 ? 'MontoBeca' : 'MontoUtiles');
          $campoEscolaridad = ($idPrestacion == 2 ? 'idEscolaridadAnt' : 'Escolaridad');

          if( !empty($montoBenef->$campo) ){
            $monto = floor(str_replace(",",".",str_replace(".","",$montoBenef->$campo)));
            if( $monto > 0 && $idEscolaridad == $montoBenef->$campoEscolaridad ) $data = array('status' => TRUE, 'monto' => $montoBenef->$campo);
            else{
              $claveParametro = trae_clave_monto($idPrestacion,$idEscolaridad);
              if( !empty($claveParametro) ){
                $monto = $this->mParametros->traer_parametro_por_clave($claveParametro);
                if ( $monto != false && !empty($monto->Valor) ) $data = array('status' => TRUE, 'monto' => $monto->Valor);
                else $data = array('status' => FALSE,'message' => 'Error al consultar el monto de la prestación.');
              }
              else $data = array('status' => FALSE,'message' => 'Error al consultar el monto de la prestación.');
            }
          }
          else $data = array('status' => FALSE,'message' => 'Error al consultar el monto de la prestación.');
        }
        else $data = array('status' => FALSE,'message' => 'Error al consultar el monto de la prestación.');
      }
      else $data = array('status' => FALSE,'message' => 'Parámetros incorrectos.');

      $this->output->set_output(json_encode($data));
    }

    public function busca_por_nombre(){
      $Nombre = $this->input->post('bn_nombre');
      $Apellido1 = $this->input->post('bn_appaterno');
      $Apellido2 = $this->input->post('bn_apmaterno');
      $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
      $error = false;

      // if( empty($Nombre) && empty($Apellido1) && empty($Apellido2) ){
      //   $error = true;
      //   $data = array('status' => FALSE,'message' => 'Debe capturar un parámetro de búsqueda.');
      // }
      // else{
      $resultado = $this->mEmpleado->buscar_empleado_porNombre(trim($Nombre),trim($Apellido1),trim($Apellido2),$idPresupuesto);
      if( empty($resultado) ){
        $error = true;
        $data = array('status' => FALSE,'message' => 'No se encontraron empleados con los datos proporcionados.');
      }
      // }

      if( $error == false ) $data = array('status' => TRUE, 'empleados' => $resultado);

      $this->output->set_output(json_encode($data));
    }

    public function CargaContrato(){
			$credencial = FormatoFolio($this->input->post('ClaveEmpleado'),5);
			$empleado = $this->mEmpleado->traer_generales_empleado($credencial);
			$codigo_pago = $this->mod_cat->traer_cat_varios_filtros('tmp_PayRules', array());
			$catsupervisores = $this->mod_cat->traer_cat_varios_filtros('Cat_Supervisores', array());

			$datos['empleado'] = $empleado;
			$datos['idEmpleado'] = (empty($empleado) ? 0 : $empleado->Id);
      $datos['catedificios'] = $this->select_lib->generico('edificios',$empleado->Id_Edificio,true,true,'Id','Id','Nombre');
      $datos['catdepartamentos'] = $this->select_lib->generico('departamentos',$empleado->Depto,true,true,'codigo','codigo','descripcion');
      $datos['grupoimpresion'] = $this->select_lib->generico('grupoimpresion',$empleado->Politica,true,true,'GrupoImpId','GrupoImpId');
      $datos['cat_turnos'] = $this->select_lib->generico('turnos',$empleado->Turno,true,true,"turno", "turno", "descrip", "", false);
			$datos['codigo_pago'] = $this->select_lib->from_recordset($codigo_pago, $empleado->CodigoPago, true, true, 'codigo', 'codigo', 'descrip', '', false);
			$datos['catsupervisores'] = $this->select_lib->from_recordset($catsupervisores, $empleado->Id_Supervisor, true, true, 'SupervisorID', 'SupervisorID', 'Descripcion', '', false);
			$datos['estados'] = $this->select_lib->generico('estados_emp',$empleado->Estado,true,true,'Id','Id','Descripcion');
			$this->load->view('empleado/DatosContrato',$datos);
    }

		public function CargarFormacionAcademica()
		{
			$credencial = FormatoFolio($this->input->post('ClaveEmpleado'),5);
			$empleado = $this->mEmpleado->traer_datos_basicos_empleado($credencial);
			$datos['credencial'] = $credencial;
			$datos['idEmpleado'] = (empty($empleado) ? 0 : $empleado->Id);
			$datos['catEscuelas'] = $this->select_lib->generico('escuelas',0,true,true,'EscuelaId','EscuelaId','Nombre');
			$this->load->view('empleado/FormacionAcademica',$datos);
		}

		public function carga_det_formacion_academica()
		{
			$idEmpleado = $this->input->post('idEmpleado');
      $result = $this->mEmpleado->obtener_det_formacion_academica($idEmpleado);

      $abc = new pjey_ABC();
      $abc->set_resultado($result);
      $abc->set_key(0,'idDetFormacion');

      $abc->set_defaults('copiarTbl','cargando','acciones','muestra_panel');
      $abc->set_acciones(array('titulo'=>'Editar','texto'=>'','icono'=>'far fa-edit','accion'=>'editar_formacion_academica'),
                         array('titulo'=>'Eliminar','texto'=>'','icono'=>'far fa-trash-alt','class' => 'btn-danger','accion'=>'eliminar_formacion_academica'));
		  $abc->set_configuraciones_extra(array('idTbl' => 'tblFormacionAcademica'));
		 	$abc->set_formatoColumna(array('visible' => array(3,5,6,8,13),'fecha' => array(5,6)));
      $abc->set_encabezados(array('fInicio'  => 'Fecha de Inicio',
                                  'fFin'       => 'Fecha Final',
                                ));
      $output = $abc->construir();
      if ($output['vista']) $this->load->view($output['archivo'], $output['datos']);
      else $this->output->set_output(json_encode($output['data']));
		}

		public function guarda_formacion_academica()
		{
			$idDet = $this->input->post('fa_idDet');
			$idEmpleado = $this->input->post('fa_idEmpleado');
			$idEscuela = $this->input->post('Instituto');
			$Nombre = $this->input->post('fa_Nombre');
			$fInicio = $this->input->post('fInicio');
			$fFin = $this->input->post('fFin');
			$documentoObtenido = $this->input->post('documentoObtenido');
			$Observaciones = $this->input->post('Observaciones');
			$usuario = $this->session->userdata('username');

			if ($this->form_validation->run('formacion_academica') == FALSE) {
				$data = array('status' => FALSE, 'message' => 'Existen errores en los campos de captura. Por favor verifique.', 'errores' => validation_errors());
			}
			else{
				$datos = array(	'idEmpleado'				=>	$idEmpleado,
												'idEscuela'					=>	$idEscuela,
												'Nombre' 						=>	$Nombre,
												'documentoObtenido'	=>	$documentoObtenido,
												'fInicio'						=>	$fInicio,
												'fFin'							=>	$fFin,
												'Observaciones'			=>	$Observaciones);

				$idDetFormacion = $this->mEmpleado->guarda_formacion_academica($datos,$idDet,$usuario);

				if (!empty($idDetFormacion)) {
					if ($idDetFormacion > 0) {
						log_message('BD','guarda_formacion_academica');
						$data = array('status' => TRUE, 'message' => 'La información se guardó correctamente.');
					}
					else $data = array('status' => FALSE, 'message' => "Ocurrió un error al intentar guardar la información.", 'errores' => '');
				}
				else $data = array('status' => FALSE, 'message' => "Ocurrió un error al intentar guardar la información, intente de nuevo más tarde.", 'errores' => '');
			}

			$this->output->set_output(json_encode($data));
		}

		public function eliminar_formacion_academica()
		{
			$idDetFormacion = $this->input->post('idDetFormacion');
      if (!empty($idDetFormacion)){
        $elimina = $this->mEmpleado->eliminar_formacion_academica($idDetFormacion);
        if (!empty($elimina)) $data = array('status' => TRUE, 'message' => 'El registro se eliminó correctamente.');
        else $data = array('status' => FALSE, 'message' => "Ocurrió un error al intentar eliminar el registro, intente de nuevo más tarde.",'errores' => '');
      }
      else $data = array('status' => FALSE, 'message' => "Ocurrió un error al intentar eliminar el registro. No se recibió el Parámetro esperado.",'errores' => '');

      $this->output->set_output(json_encode($data));
		}

		public function CargarExperienciaLaboral()
		{
			$credencial = FormatoFolio($this->input->post('ClaveEmpleado'),5);
			$empleado = $this->mEmpleado->traer_datos_basicos_empleado($credencial);
			$datos['credencial'] = $credencial;
			$datos['idEmpleado'] = (empty($empleado) ? 0 : $empleado->Id);
			$this->load->view('empleado/Experiencialaboral',$datos);
		}

		public function abc_det_experiencia_laboral()
		{
			$idEmpleado = $this->input->post('idEmpleado');
			$idEmpleado = (empty($idEmpleado) ? $this->input->post('el_idEmpleado') : $idEmpleado);
			$usuario = LimpiaCadena($this->session->UsuarioNT);
			if (!empty($idEmpleado)) {
				$abc = new pjey_ABC();
				$abc->set_table('det_ExperienciaLaboral');
				$abc->where('idEmpleado',$idEmpleado);
	      $abc->set_key(0,'idDetExperienciaLab');
				$abc->set_usuario($usuario);
	      $abc->set_defaults('copiarTbl','cargando','acciones','muestra_panel');
	      $abc->set_acciones(array('titulo'=>'Editar','texto'=>'','icono'=>'far fa-edit','accion'=>'editar_experiencia_laboral'),
	                         array('titulo'=>'Eliminar','texto'=>'','icono'=>'far fa-trash-alt','class' => 'btn-danger','accion'=>'eliminar_experiencia_laboral'));
			  $abc->set_configuraciones_extra(array('idTbl' => 'tblExperienciaLaboral'));
			 	$abc->set_formatoColumna(array('visible' => array(2,3,4,5,6,8),'fecha' => array(5,6)));
	      $abc->set_encabezados(array(
																		'nombreEmpresa'			=> 'Empresa',
																		'campoExperiencia'	=> 'Campo de Experiencia',
																		'fIngreso'					=> 'Fecha de Inicio',
	                                  'fEgreso'						=> 'Fecha de Conclusión',
	                                ));
				$abc->set_validation_conf('experiencia_laboral');
				$abc->set_campos_guardar(array(
																				'idEmpleado' 				=> 'el_idEmpleado',
																				'nombreEmpresa' 		=> 'nombreEmpresa',
																				'Puesto'						=> 'Puesto',
																				'campoExperiencia'	=> 'campoExperiencia',
																				'fIngreso'					=> 'fIngreso',
																				'fEgreso' 					=> 'fEgreso',
																				'Observaciones' 		=> 'el_Observaciones'
																			));
	      $output = $abc->construir();
	      if ($output['vista']) $this->load->view($output['archivo'], $output['datos']);
	      else $this->output->set_output(json_encode($output['data']));
			}
			else {
				$data = array('status' => FALSE, 'message' => "No se recibió el Parámetro esperado.",'errores' => 'No se recibió el Parámetro esperado');
				$this->output->set_output(json_encode($data));
			}
		}

    public function CargaPagoElectronico(){
      $credencial = FormatoFolio($this->input->post('ClaveEmpleado'),5);
      $empleado = $this->mEmpleado->traer_datos_basicos_empleado($credencial);
      $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
      $emisores = $this->select_lib->emisores($idPresupuesto);
      $catTipoTarjeta = $this->select_lib->generico('tipo_tarjeta',0,true,true,'IdTipoTarjeta','IdTipoTarjeta','TipoTarjeta');
			$catBancos = $this->mod_cat->traer_cat_varios_filtros('cat_bancos', array());
			$catBancos = $this->select_lib->from_recordset($catBancos, 0, true, true, 'Id', 'Id', 'Nombre', '', false);
			$datos['credencial'] = $credencial;
      $datos['emisores'] = $emisores;
      $datos['tipotarjeta'] = $catTipoTarjeta;
			$datos['bancos'] = $catBancos;
      $datos['idEmpleado'] = (empty($empleado) ? 0 : $empleado->Id);
      $this->load->view('empleado/PagoElectronico',$datos);
    }

    public function carga_det_pago_electronico(){
      $credencial = $this->input->post('credencial');
      $credencial = FormatoFolio($credencial,5);
      $result = $this->mEmpleado->obtener_det_pago_electronico($credencial);
      $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');

      $abc = new pjey_ABC();
      $abc->set_resultado($result);
      $abc->set_key(0,'id');

      $abc->set_defaults('copiarTbl','cargando','acciones','muestra_panel');
      $abc->set_formatoColumna(array('visible' => array(3,4,5,6,8,11)));
      $abc->set_configuraciones(array('titulopanel' => 'Registro de Emisores'));
      $abc->set_acciones(array('titulo'=>'Editar pago electrónico','texto'=>'','icono'=>'far fa-edit','accion'=>'editar_pago_electronico'),
                         array('titulo'=>'Eliminar pago electrónico','texto'=>'','icono'=>'far fa-trash-alt','class' => 'btn-danger','accion'=>'eliminar_pago_electronico'));
     $abc->set_configuraciones_extra(array('modCell'  => array('targets' => array(5),
                                                                'arrColMod' => array(5,5), 'arrayBusca' => array('1','0'), 'arrayMod' => array('SÍ','NO'),
                                                              )),
                                      array('idTbl' => 'tblEmisoresPagoElectronico'),
                                    );
      $abc->set_encabezados(array('NumeroCuenta'  => 'Número de Cuenta',
                                  'ENomina'       => 'Dep. Electrónico',
                                  'Porcentaje'    => 'Porcentaje/Monto',
																	'TipoTarjeta'   => 'Tipo de Cuenta',
																	'TipoPago'			=> 'Tipo de Pago'
                                ));
      $output = $abc->construir();
      $html = $this->load->view($output['archivo'], $output['datos'],true);
      $data = array('status' => TRUE, 'html' => $html);

			$this->output->set_output(json_encode($data));
    }

    public function guarda_pago_electronico(){
      $idConf = $this->input->post('pe_idConf');
      $idEmpleado = $this->input->post('pe_idEmpleado');
      $idEmisor = $this->input->post('txtEmisor');
      $NumeroCuenta = $this->input->post('txtNumCuenta');
      $idTipoCuenta = $this->input->post('txtTipoCuenta');
      $Porcentaje = $this->input->post('txtPorcentaje');
      $enomina = $this->input->post('pe_enomina');
      $enomina = (empty($enomina) ? 0 : 1);
			$tipoPago = $this->input->post('pe_montofijo');
			$tipoPago = (empty($tipoPago) ? 0 : 1);
			$idBanco = $this->input->post('txtBancoTitular');
			$idBanco = (empty($idBanco) ? 1 : $idBanco);
      $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');

      if ($this->form_validation->run() == FALSE) {
        $data = array('status' => FALSE, 'message' => 'Existen errores en los campos de captura. Por favor verifique.', 'errores' => validation_errors());
      }
      else{
        $datos = array(
          //$idConf,$idEmpleado,$idEmisor,(empty($enomina) ? '' : $NumeroCuenta),$idTipoCuenta,$Porcentaje,$enomina,$idPresupuesto.
          //Se solicita se cambie que se guarde el número de cuenta sin importar si es pago electrónico o no. GSantos, 2021.04.05
          'idConf' => $idConf, 'idEmpleado' => $idEmpleado, 'idEmisor'=>$idEmisor,'NumCuenta'=>$NumeroCuenta,
					'idTipoCuenta'=>$idTipoCuenta,'Porcentaje'=>$Porcentaje,'enomina'=>$enomina,'idPresupuesto'=>$idPresupuesto,'tipoPago'=>$tipoPago, 'idBanco'=>$idBanco
        );

        $guardar = $this->mEmpleado->guarda_pago_electronico($datos);

        if (!empty($guardar)) {
          if ($guardar->id > 0) {
            $data = array('status' => TRUE, 'message' => 'La configuración se guardó correctamente. '.$guardar->mensaje, 'errores' => $guardar->mensaje);
          }
          else $data = array('status' => FALSE, 'message' => "Ocurrió un error al intentar guardar la configuración. ".$guardar->mensaje, 'errores' => $guardar->mensaje);
        }
        else $data = array('status' => FALSE, 'message' => "Ocurrió un error al intentar guardar la configuración, intente de nuevo más tarde.", 'errores' => '');
      }
			$bitacora = new Bitacora();
			$bitacora->insertar($this->router->fetch_class().'/'.__FUNCTION__, 'Configurando pago electrónico. Datos: '.(!empty($datos) ? json_encode($datos) : ''));
      $this->output->set_output(json_encode($data));
    }

    public function eliminar_pago_electronico(){
      $idConfPago = $this->input->post('idConfPago');
      if (!empty($idConfPago)){
        $elimina = $this->mEmpleado->eliminar_pago_electronico($idConfPago);
        if (!empty($elimina)) $data = array('status' => TRUE, 'message' => 'La configuración se eliminó correctamente.');
        else $data = array('status' => FALSE, 'message' => "Ocurrió un error al intentar eliminar la configuración, intente de nuevo más tarde.",'errores' => '');
      }
      else $data = array('status' => FALSE, 'message' => "Ocurrió un error al intentar eliminar la configuración. No se recibió el Parámetro esperado.",'errores' => '');
			$bitacora = new Bitacora();
			$bitacora->insertar($this->router->fetch_class().'/'.__FUNCTION__, 'Eliminando pago electrónico. idConfPago: '.$idConfPago);
      $this->output->set_output(json_encode($data));
    }

    public function actualizar_pago_electronico()
    {
      $this->load->model('pagosextraordinarios_modelo','mPagosExt');
      $idPagoExt = $this->input->post('idPagoExt');
      $idEmpleado = $this->input->post('idEmpleado');
      $pagoExt = $this->mPagosExt->obtenerPagoExtraordinario($idPagoExt);
      $empleado = $this->mEmpleado->traer_empleado_por_id($idEmpleado);
      $credencial = $empleado->Credencial;
      $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
      $emisores = $this->select_lib->emisores($idPresupuesto);
      $emisoresPagoExt = $this->select_lib->emisores($idPresupuesto,$pagoExt->IdEmisor);
      $catTipoTarjeta = $this->select_lib->generico('tipo_tarjeta',0,true,true,'IdTipoTarjeta','IdTipoTarjeta','TipoTarjeta');
      $datosV['credencial'] = $credencial;
      $datosV['emisores'] = $emisores;
      $datosV['emisoresPagoExt'] = $emisoresPagoExt;
      $datosV['tipotarjeta'] = $catTipoTarjeta;
      $datosV['idEmpleado'] = $idEmpleado;
      $datos['pagoExt'] = $pagoExt;
      $datos['vw_confPagoElectronico'] = $this->load->view('empleado/PagoElectronico',$datosV,TRUE);
      $this->load->view('genericos/conf_pago_electronico',$datos);
    }

    public function busqueda_empleados_filtrado(){
      $credencialnombre = $this->input->post('pext_credencial');
      $bCredencial = is_numeric($credencialnombre);
      $tipocontra = $this->input->post('opt_contrato');
      $tipocontra = (!empty($tipocontra) ? 'E' : '');
      $hijos = $this->input->post('chckHijos');
      $hijos = (empty($hijos) ? 0 : 1);
      $datos = array(
        'credencial'    => ($bCredencial ? FormatoFolio($credencialnombre,5) : false),
        'nombre'        => (!$bCredencial ? $credencialnombre : false),
        'idDependencia' => $this->input->post('pext_Dependencia'),
        'idCategoria'   => $this->input->post('pext_Categoria'),
        'tipocontra'    => $tipocontra,
        'hijos'         => $hijos,
        'sexo'          => $this->input->post('pext_Sexo'),
        'idPresupuesto' => $this->param_lib->get_parametro('idPresupuesto')
      );
      $busqueda = $this->mEmpleado->obtener_busqueda_empleado($datos);

      if (!empty($busqueda)) {
        if (count((array)$busqueda) == 1) $data = array('status' => true, 'empleados' => $busqueda[0]);
        else {
          $abc = new pjey_ABC();
          $abc->set_defaults('muestra_panel','acciones');
          $abc->set_configuraciones(array('dom' => 'fpt'));
          $abc->set_ocultos(array(0,3,5));
          $abc->set_encabezados(array('Categoria'	=> 'Categoría'));
		      $abc->set_acciones(array('titulo'=>'Agregar Empleado','texto'=>'','icono'=>'fa fa-plus','accion'=>'agrega_empleado_pago_ext_sys'));
          $abc->set_resultado($busqueda);
          $abc->set_key(0,'Id','asc');
          $output = $abc->construir();
          $vista = $this->load->view($output['archivo'], $output['datos'],TRUE);
          $data = array('status' => true, 'html' => $vista);
        }
      }
      else $data = array('status' => false, 'message' => 'No se encontraron empleados con los parámetros proporcionados.');

      $this->output->set_output(json_encode($data));
    }

		public function guarda_contrato_empleado()
		{
			$idEmpleado = $this->input->post('dc_idEmpleado');
			$alta = $this->input->post('txtAltaCon');
			$fechaIniCon = $this->input->post('txtIniCon');
			$fechafinCon = $this->input->post('txtFinCon');
			$estado = $this->input->post('dc_EstadoCon');
			$edificio = $this->input->post('dc_Edificio');
			$departamento = $this->input->post('dc_Departamento');
			$gpoImpresion = $this->input->post('dc_GpoImpresion');
			$codigoPago = $this->input->post('dc_CodPago');
			$supervisor = $this->input->post('dc_Supervisor');
			$turno = $this->input->post('dc_Turno');
			$checa = $this->input->post('chkRegistraAsistencia');
			$checa = (empty($checa) ? 0 : 1);
			$deBaja = $this->input->post('chkDeBaja');
			$deBaja = (empty($deBaja) ? 0 : 1);
			$fechaBaja = $this->input->post('fechaBaja');

			if (!empty($idEmpleado)) {
				$datos = array(
					'Id_Edificio'		=> $edificio,
					'Id_Supervisor'	=> $supervisor,
					'CodigoPago'		=> $codigoPago,
					// 'Turno'					=> $turno,
					'Depto'					=> $departamento,
					'Estado'				=> $estado,
					'Politica'			=> $gpoImpresion,
					'FechaAlta'			=> $alta,
					'FechaBaja'			=> $fechaBaja,
					'IniciaCon'			=> $fechaIniCon,
					'FinalCon'			=> $fechafinCon,
					'Checa'					=> $checa,
					'Liquidado'			=> $deBaja
				);
				$guarda = $this->mEmpleado->actualiza_datos_empleado($idEmpleado,$datos);
				if (!empty($guarda)) $data = array('status' => TRUE, 'message' => 'La información del empleado se actualizó correctamente.');
				else $data = array('status' => FALSE, 'message' => "Ocurrió un error al intentar actualizar la información, intente de nuevo más tarde.");
			}
      else $data = array('status' => FALSE, 'message' => "Ocurrió un error al intentar eliminar la configuración. No se recibió el Parámetro esperado.");

			$this->output->set_output(json_encode($data));
		}

}
