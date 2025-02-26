<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nomina extends IIS_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('empleado_modelo','mEmpleado',TRUE);
    $this->load->model('parametros_modelo','mParametros',TRUE);
    $this->load->model('nomina_modelo','mNomina');
    $this->load->model('calculos_modelo','mCalculos');
    $this->load->model('catalogos_modelo','mCat');
    $this->load->model('validaciones_modelo','mValida');
    $this->load->library('ParamSystem', NULL, 'param_lib');
    $this->load->library('Calculos_Nomina', NULL, 'calculos_lib');
    $this->load->library('Selectores_class', NULL, 'select_lib');
    $this->load->library('REST_client','rest_client');
    $this->load->library('pjey_ABC');
  }

  public function CargarCalculo(){
		$idPeriodoPago = $this->param_lib->get_parametro('idPeriodoPago');
		$fechaini = $this->param_lib->get_parametro('FechaIniPeriodo');
		$idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
    if (!empty($idPeriodoPago)) {
			if (!empty($fechaini) && !empty($idPresupuesto)) {
        $ctrlProceso = $this->mCalculos->busca_controlproceso_nomina($idPeriodoPago);
				if (!empty($ctrlProceso)) {
					$quincenas = $this->mNomina->busca_historial_nomina();
	        foreach ($quincenas as $item) {
	          if ($item->PresupuestoId == $idPresupuesto && $item->ID == $idPeriodoPago) $quincena = $item->Quincena;
	        }
	        $datos['fechainiPeriodo'] = $fechaini;
	        $datos['idPeriodoPago'] = $idPeriodoPago;
	        $datos['control'] = $ctrlProceso;
	        $datos['quincena'] = $quincena;
	        $this->load->view('nomina/calculo',$datos);
				}
				else {
					log_message('error','No existe un registro para el control de procesos de nómina. Presupuesto: '.$idPresupuesto);
					$datos['heading'] = 'Error en la consulta';
					$datos['message'] = 'No existe un registro para el control de procesos de nómina.';
					$this->load->view('errors/html/error_general',$datos);
				}
      }
      else {
				$datos['heading'] = 'Error al consultar la información';
	      $datos['message'] = 'No se recibió el parámetro esperado.';
	      $this->load->view('errors/html/error_general', $datos);
      }

    }
    else{
			log_message('error','No existe una nómina abierta para el período con fecha inicial: '.$fechaini.', Presupuesto: '.$idPresupuesto);
			$datos['heading'] = 'Error al consultar la información';
			$datos['message'] = 'No existe una nómina abierta.';
			$this->load->view('errors/html/error_general',$datos);
	  }
  }

  public function CargarDetalle(){
    // $fechaini = $this->param_lib->get_parametro('FechaIniPeriodo');
    // $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
    // $result = $this->mNomina->BuscaNominaAbierta($fechaini,$idPresupuesto);
    // $idPeriodoPago = (!empty($result) ? $result->Id : 0);
    // $quincenas = $this->select_lib->historial_nomina($idPresupuesto);
    $datos['idPeriodoPago'] = $this->param_lib->get_parametro('idPeriodoPago');
    $this->load->view('nomina/detalle',$datos);
  }

  public function CargarConfirmar(){
		$idPeriodoPago = $this->param_lib->get_parametro('idPeriodoPago');
		$idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
		$quincenas = $this->select_lib->historial_nomina($idPresupuesto);
		if (!empty($idPeriodoPago)) {
			$fechaini = $this->param_lib->get_parametro('FechaIniPeriodo');
	    $fechafin = $this->param_lib->get_parametro('FechaFinPeriodo');
	    $fechapago = $this->param_lib->get_parametro('FechaPago');
	    $fechadisp = $this->param_lib->get_parametro('FechaDispersion');
		}
		else {
			$periodo = $this->mParametros->GetRangosAbiertos($idPresupuesto, 1);
			$fechaini = cambiaf_a_normal($periodo->FechaIni);
			$fechafin = cambiaf_a_normal($periodo->FechaFin);
			$fechapago = cambiaf_a_normal($periodo->FechaPago);
			$fechadisp = cambiaf_a_normal($periodo->FechaDispersion);
		}
    $datos['quincenas'] = $quincenas;
    $datos['fechaini'] = $fechaini;
    $datos['fechafin'] = $fechafin;
    $datos['fechapago'] = $fechapago;
    $datos['fechadisp'] = $fechadisp;

    $this->load->view('nomina/confirmar', $datos);
  }

  public function trae_nominas_abiertas(){
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
    $idPeriodoPago = $this->input->post('idPeriodoPago');
    $idPeriodoPago = (empty($idPeriodoPago) ? 0 : $idPeriodoPago);
    $nominasAbiertas = $this->mCalculos->trae_nominas_abiertas($idPeriodoPago);

    if (!empty($nominasAbiertas)) {
      $emisores = $this->select_lib->conf_formatos($idPresupuesto);
      $data = array('status' => TRUE, 'nominas' => $nominasAbiertas, 'emisores' => $emisores);
    }
    else $data = array('status' => FALSE, 'msj' => 'No hay nóminas abiertas para la quincena seleccionada.');

    $this->output->set_output(json_encode($data));
  }

  public function carga_datos_empleado() {
    $credencial = $this->input->post('credencial');
    if (!empty($credencial)) {
      $credencial = FormatoFolio($credencial,5);
			$fechaini = $this->param_lib->get_parametro('FechaIniPeriodo');
	    $fechafin = $this->param_lib->get_parametro('FechaFinPeriodo');
      $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
      $empleado = $this->mEmpleado->traer_generales_empleado($credencial);
			$personal = $this->mEmpleado->traer_generales_personal($credencial);
			$estadoSISEGE = $this->mEmpleado->traer_estado_empleado_sisege(array($credencial,date('d/m/Y')));
			// $estadoSISEGE = '';
			if ($empleado != false) {
				$baja = $this->mValida->empleado_baja($credencial);
				if (!empty($baja)) $html_baja = $this->genera_tabla_baja($baja);
				$quincenas = $this->select_lib->historial_nomina($idPresupuesto);
	      $datos['prestador'] = $empleado;
	      $datos['fechaini'] = $fechaini;
	      $datos['fechafin'] = $fechafin;
				$datos['baja'] = (!empty($baja) ? true : false);
	      $datos['ctrlProceso'] = false;
	      $datos['nominaCerrada'] = 1;
	      $respuesta = array('status'=>TRUE, 'datos' => $this->load->view('nomina/detalle_nomina_empleado', $datos, TRUE), 'empleado' => $empleado, 'personal' => $personal,
													'idPresupuestoActual' => $idPresupuesto, 'quincenas' => $quincenas, 'baja' => $baja, 'htmlBaja' => (empty($baja) ? '' : $html_baja), 'estadoSISEGE' => $estadoSISEGE);
      }
      else $respuesta = array('status'=> FALSE,'message' => 'No se encontró el empleado con la Credencial proporcionada ('.$credencial.').');
    }
    else $respuesta = array('status'=> FALSE,'message' => 'Error al obtener la información del empleado. No se recibió el parámetro esperado.');

    $this->output->set_output(json_encode($respuesta));
  }

	public function carga_nomina_empleado(){
    $fechaini = $this->param_lib->get_parametro('FechaIniPeriodo');
    $fechafin = $this->param_lib->get_parametro('FechaFinPeriodo');
    $credencial = $this->input->post('credencial');
    $idPeriodoPago = $this->input->post('quincena');
    $idEmpleado = $this->input->post('idEmpleado');
    $credencial = FormatoFolio($credencial,5);
		$array_uuid = array();

		$baja = $this->mValida->empleado_baja($credencial);
		if (!empty($baja)) {
			$baja = $this->genera_tabla_baja($baja);
			// $nomina = "";
		}
		$nomina = $this->mNomina->detalle_nomina($credencial,$idPeriodoPago);

    $tiponomina = $this->mNomina->tipo_nomina_empleado($idEmpleado,$idPeriodoPago);
    if (!empty($tiponomina)) $nominasvalidas = $this->genera_nominas_validas($idPeriodoPago,$tiponomina);

    $resctrlProceso = $this->mCalculos->busca_controlproceso_nomina($idPeriodoPago);
    if (!empty($resctrlProceso->RegsIniciales) && !empty($resctrlProceso->ConceptAntesImpu) && !empty($resctrlProceso->Impuestos)
				&& !empty($resctrlProceso->ConceptDespImpu) && !empty($resctrlProceso->ISSTEY)) $ctrlProceso = true;
    else $ctrlProceso = false;

		if (!empty($nomina)) {
			foreach ($nomina as $key => $value) {
				if (empty($array_uuid[$value->TipoNominaId])) {
					$array_uuid[$value->TipoNominaId] = array('fEmision'	=> (empty($value->FechaEmision) ? 0 : cambiaf_a_normal($value->FechaEmision)),
																										'serie'			=> (empty($value->Serie) ? 0 : $value->Serie),
																										'uuid'			=> (empty($value->UUID) ? 0 : $value->UUID));
				}
			}
		}

    $datos['fechaini'] = $fechaini;
    $datos['fechafin'] = $fechafin;
    $datos['nomina'] = $nomina;
		$datos['array_uuid'] = $array_uuid;
    $datos['tiponomina'] = $tiponomina;
		$datos['baja'] = $baja;
    $datos['nominasvalidas'] = (empty($nominasvalidas) ? array() : $nominasvalidas);
    $datos['ctrlProceso'] = $ctrlProceso;
    $datos['nominaCerrada'] = (empty($resctrlProceso->NominaCerrada) ? 0 : $resctrlProceso->NominaCerrada);
		$datos['json'] = json_encode($datos);
    $respuesta = array('status' => TRUE, 'datos' => $this->load->view('nomina/detalle_nomina_empleado', $datos, TRUE));
    $this->output->set_output(json_encode($respuesta));
  }

  private function genera_nominas_validas($idPeriodoPago,$tiponomina){
    $nominasvalidas = array();
    $nominasAbiertas = $this->mCalculos->trae_nominas_abiertas($idPeriodoPago);

    if ($nominasAbiertas != false) {
      foreach ($nominasAbiertas as $itemnom) {
        foreach ($tiponomina as $itemtipo) {
          if ($itemnom->TipoNominaID == $itemtipo->TipoNominaId && $itemnom->Confirmada == 0) array_push($nominasvalidas,$itemtipo->TipoNominaId);
        }
      }
    }
    return $nominasvalidas;
  }

  private function valida_nomina($idPeriodoPago,$idTipoNomina){
    $valida = false;
    $nominasAbiertas = $this->mCalculos->trae_nominas_abiertas($idPeriodoPago);
    if ($nominasAbiertas != false) {
      foreach ($nominasAbiertas as $itemnom) {
        if ($itemnom->TipoNominaID == $idTipoNomina && $itemnom->Confirmada == 0) $valida = true;
      }
    }
    return $valida;
  }

  public function carga_registros_iniciales(){
    $fechaini = $this->param_lib->get_parametro('FechaIniPeriodo');
    $fechafin = $this->param_lib->get_parametro('FechaFinPeriodo');
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
		$idPeriodoPago = $this->param_lib->get_parametro('idPeriodoPago');

    $resFechaAsist = $this->mCalculos->busca_ultimafecha_asistencias(1,$idPeriodoPago,false);
    $ctrlProceso = $this->mCalculos->busca_controlproceso_nomina($idPeriodoPago);
    $nominasAbiertas = $this->mCalculos->trae_nominas_abiertas($idPeriodoPago);

    $fechavalida = verificar_fechas_periodo($fechaini,$fechafin);

    $datos['fechavalida'] = $fechavalida;
    $datos['control'] = $ctrlProceso;
    $datos['ctrlasistencia'] = $resFechaAsist;
    $datos['idperiodo'] = $idPeriodoPago;
    $this->load->view('nomina/registros_iniciales',$datos);
  }

  public function trae_empleados_regini(){
    $fechaini = $this->param_lib->get_parametro('FechaIniPeriodo');
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
		$idPeriodoPago = $this->param_lib->get_parametro('idPeriodoPago');
    $empleados = $this->mCalculos->trae_empleados_regini($idPresupuesto);
    $diasProcesados = $this->mCalculos->trae_diasprocesados_regini($idPeriodoPago);

    if (!empty($diasProcesados)) {
      if (version_compare(PHP_VERSION, '7.0', '>=')) $diasProcesados = array_column(json_decode(json_encode($diasProcesados),true), 'dias', 'EmpleadoID');
      else $diasProcesados = array_columna(json_decode(json_encode($diasProcesados),true), 'dias', 'EmpleadoID');
    }
    else $diasProcesados = 0;

    $ctrlProceso = $this->mCalculos->busca_controlproceso_nomina($idPeriodoPago);
    $data = array('status' => TRUE, 'empleados' => $empleados, 'diasprocesados' => $diasProcesados, 'ctrlProceso' => $ctrlProceso);
    $this->output->set_output(json_encode($data));
  }

  public function carga_calculo_conceptos(){
    $fechaini = $this->param_lib->get_parametro('FechaIniPeriodo');
    $fechafin = $this->param_lib->get_parametro('FechaFinPeriodo');
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
    $topeISSTEY = $this->param_lib->get_parametro('topeISSTEY');
		$idPeriodoPago = $this->param_lib->get_parametro('idPeriodoPago');
		$tipoCalculo = $this->verifica_tipo_calculo($idPeriodoPago);

    $ctrlProceso = $this->mCalculos->busca_controlproceso_nomina($idPeriodoPago);
    $datos['control'] = $ctrlProceso;
    $datos['topeISSTEY'] = $topeISSTEY;
		$datos['tipoCalculo'] = $tipoCalculo;

    $this->load->view('nomina/calculo_conceptos_nomina', $datos);
  }

	private function verifica_tipo_calculo($idPeriodoPago)
	{
		$tipoCalculo = 1;
		$tiposNomina = $this->mValida->aguinaldo_det_nomina_por_tipo($idPeriodoPago);
		if (!empty($tiposNomina)) {
			if (count($tiposNomina) > 1) {
				foreach ($tiposNomina as $key => $tipoNomina) {
					if ($tipoNomina->TipoNominaID == 9) {
						if ($tipoNomina->Confirmada == 1) $tipoCalculo = 2;
					}
				}
			}
		}
		$retroactivo = $this->mValida->conceptos_retroactivo();
		if (!empty($retroactivo) && count($retroactivo) > 100) $tipoCalculo = 3;
		return $tipoCalculo;
	}

  public function trae_empleados_calculo(){
    $fechaini = $this->param_lib->get_parametro('FechaIniPeriodo');
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
		$idPeriodoPago = $this->param_lib->get_parametro('idPeriodoPago');
    $array_procesados = array();
    $array_configurados = array();
		$array_calculados = array();

    $empleados = $this->mCalculos->trae_empleados_gennomina($idPeriodoPago);
    $procesados = $this->mCalculos->trae_empleados_en_nomina($idPeriodoPago);
    $configurados = $this->mEmpleado->obtiene_configurados_enomina($idPresupuesto);
		$calculados = $this->mCalculos->empleados_calculados_porFechaIni($fechaini,$idPeriodoPago);

    if (!empty($empleados)) {
      if (!empty($procesados)) {
        foreach ($procesados as $item) {
          array_push($array_procesados, $item->id_empleado);
        }
      }
      if (!empty($configurados)) {
        foreach ($configurados as $item) {
          array_push($array_configurados, $item->EmpleadoId);
        }
      }
			if (!empty($calculados)) {
				foreach ($calculados as $item) {
					array_push($array_calculados, $item->idEmpleado);
				}
			}

      $ctrlProceso = $this->mCalculos->busca_controlproceso_nomina($idPeriodoPago);
      $data = array('status' => TRUE, 'empleados' => $empleados, 'procesados' => $array_procesados, 'configurados' => $array_configurados, 'calculados' => $array_calculados, 'ctrlProceso' => $ctrlProceso);
    }
    else $data = array('status' => FALSE, 'message' => 'No se encontraron empleados para complementar el cálculo.' );

    $this->output->set_output(json_encode($data));
  }

  public function carga_nominas_abiertas(){
    $fechaini = $this->param_lib->get_parametro('FechaIniPeriodo');
    $fechafin = $this->param_lib->get_parametro('FechaFinPeriodo');
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
		$idPeriodoPago = $this->param_lib->get_parametro('idPeriodoPago');

    $ctrlProceso = $this->mCalculos->busca_controlproceso_nomina($idPeriodoPago);
    $nominas = $this->mCalculos->trae_nominas_abiertas($idPeriodoPago);

    $datos['control'] = $ctrlProceso;
    $datos['nominas'] = $nominas;
    $this->load->view('nomina/nominas_abiertas_calculo', $datos);
  }

  public function carga_conf_vales_sin_base(){
    $fechaini = $this->param_lib->get_parametro('FechaIniPeriodo');
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
		$idPeriodoPago = $this->param_lib->get_parametro('idPeriodoPago');

    if (!empty($idPeriodoPago)) {
      $datos['fecha'] = $fechaini;
      $this->load->view('nomina/conf_vales_sin_base',$datos);
    }
  }

  public function trae_empleados_sb_para_vales(){
    $fecha = $this->input->post('fecha');
    if (!empty($fecha)) {
      $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
      $empleados = $this->mCalculos->trae_empleadossinbase_para_vales($fecha,$idPresupuesto);
      if (!empty($empleados)) $data = array('status' => TRUE, 'empleados' => $empleados);
      else $data = array('status' => false, 'msj' => 'No se encontraron empleados para configurar.');
    }
    else $data = array('status' => false, 'msj' => 'Error al intentar obtener los empleados. No se recibió el parámetro esperado.');

    $this->output->set_output(json_encode($data));
  }

  public function valida_procesos_nomina(){
    $idPeriodoPago = $this->input->post('idPeriodoPago');
    $ctrlProceso = $this->mCalculos->busca_controlproceso_nomina($idPeriodoPago);
    if ($ctrlProceso != false) $data = array('status' => true);
    else $data = array('status' => FALSE, 'message' => 'Error al validar los procesos de nómina.');
    $this->output->set_output(json_encode($data));
  }

  public function generar_registros_iniciales(){
    $this->benchmark->mark('inicia_regini');

    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
    $fechaini = $this->input->post("fechaini");
    $fechainiParam = $this->param_lib->get_parametro('FechaIniPeriodo');
    $fechafin = $this->input->post("fechafin");
    $confirma = $this->input->post('confirmaRI');
    $fechafinParam = $this->param_lib->get_parametro('FechaFinPeriodo');
    $NumDiasPeriodoPago = $this->param_lib->get_parametro('LongPeriodoPago');
    $diasProcesados = diferencia_fechas($fechaini,$fechafin) + 1;
    $diasProyectados = $NumDiasPeriodoPago - $diasProcesados;
    $idPeriodoPago = $this->param_lib->get_parametro('idPeriodoPago');
    $LongPeriodoPago = diferencia_fechas($fechainiParam,$fechafinParam) + 1;
    $registros = $this->input->post('registros');
    $registros = json_decode($registros,true);
    $array_errores = array();
    $dias_procesados = array();

    $empleadosRegIni = $this->mCalculos->trae_empleados_regini($idPresupuesto);
    if (!empty($empleadosRegIni)) {
      try {
        set_time_limit(0);
        foreach ($empleadosRegIni as $item) {
          $error = false;
          $idEmpleado = $item->Id;
          $credencial = $item->Credencial;
          //Primero vamos a validar que no tenga pagos extraordinarios sin cerrar. GSantos, CASU 449-2021
          $tienePagosVigentes = false; //$this->mPagosExt->tienePagosExtraordinariosVigentes($idPeriodoPago, $idEmpleado);
          if ($tienePagosVigentes == false) {
	          if (version_compare(PHP_VERSION, '7.0', '>=')) $generar = array_search($idEmpleado, array_column($registros, '0'));
	          else $generar = array_search($idEmpleado, array_columna($registros, '0'));

	          if ($generar !== false) {
	            $insert_regini = $this->calculos_lib->insertar_registros_iniciales($credencial,$idEmpleado,$idPeriodoPago,$fechaini,$fechafin,$fechafinParam,$diasProcesados,$diasProyectados,$LongPeriodoPago,$NumDiasPeriodoPago);
	            if ($insert_regini['error'] == true) {
	              $array_errores[$idEmpleado] = array('error' => $insert_regini['msj_error'], 'id' => $idEmpleado);
	              $dias_procesados[$idEmpleado] = array('dias' => $insert_regini['dias'], 'error' => $error);
	            }
	            else $dias_procesados[$idEmpleado] = array('dias' => $insert_regini['dias'], 'error' => $error);
	          }
          }
          else {
	          $array_errores[$idEmpleado] = array('error' => 'Tiene pagos extraordinarios vigentes', 'id' => $idEmpleado);
	          $dias_procesados[$idEmpleado] = array('dias' => 0, 'error' => $error);
          }
        }
        if (count($empleadosRegIni) == count($registros) || !empty($confirma)) $this->mCalculos->actualiza_proceso_nomina(6,$idPeriodoPago,1);
      }
      catch(Exception $e){
        $data = array('status' => FALSE, 'message' => 'Se generó algún error durante la ejecución de la consulta.');
        log_message("error", "Controlador - nomina/generar_registros_iniciales(): ".$e->getMessage());
      }
    }
    else $data = array('status' => FALSE, 'message' => 'No existen empleados para generar registros iniciales.');

		$this->benchmark->mark('finaliza_regini');
		$tiempo_exec = $this->benchmark->elapsed_time('inicia_regini', 'finaliza_regini', 2);
		$bitacora = new Bitacora();
		$bitacora->insertar($this->router->fetch_class().'/'.__FUNCTION__, 'Generando Registros Iniciales. Datos: '.json_encode(array('Presupuesto' => $idPresupuesto, 'idPeriodo' => $idPeriodoPago, 'procesados' => count($dias_procesados))));
		$data = array('status' => true, "message" => 'Proceso de Generación de Registros Iniciales Completado en: '.convert_to_string_time($tiempo_exec), 'errores' => $array_errores, 'resultado' => $dias_procesados);
		$this->output->set_output(json_encode($data));
  }

/**
 * función principal para el cálculo de conceptos de nómina
 * @method calcular_conceptos_nomina
 * @author alopez
 * @return [type]                    [description]
 */
  public function calcular_conceptos_nomina(){
    $this->benchmark->mark('inicia_complemento');
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
    $idPeriodoPago = $this->param_lib->get_parametro('idPeriodoPago');
    $fechainiParam = $this->param_lib->get_parametro('FechaIniPeriodo');
    $tipoperiodo = obten_tipo_periodo($fechainiParam);
    $confirma = $this->input->post('confirma');
    $registros = $this->input->post('registros');
    $registros = json_decode($registros,true);
		$tipoCalculo = $this->verifica_tipo_calculo($idPeriodoPago);
    $usuario = LimpiaCadena($this->session->UsuarioNT);
    $error = false;

    try {
      $empleados = $this->mCalculos->trae_empleados_gennomina($idPeriodoPago);
      if (!empty($empleados)) {
        if (count($empleados) == count($registros)) {
          $borraPeriodoPago = $this->calculos_lib->borrar_periodo_pago($idPeriodoPago);
          if (empty($borraPeriodoPago)) {
            $error = true;
            $data = array('status' => false, "message" => "Ocurrió un error al intentar calcular los conceptos de nómina. Intente de nuevo más tarde (err. x002).");
            log_message("error", "Controlador - nomina/calcular_conceptos_nomina(): Error al intentar borrar el periodo de pago.");
          }
          else {
            $delTiposNom = $this->mCalculos->elimina_nominas_porPeriodo($idPeriodoPago);
            $borrarAport = $this->mCalculos->borrar_aportaciones_isstey($idPeriodoPago);
            if (empty($delTiposNom)) {
              $error = true;
              $data = array('status' => false, "message" => "Ocurrió un error al intentar calcular los conceptos de nómina. Intente de nuevo más tarde (err. x003).");
              log_message("error", "Controlador - nomina/calcular_conceptos_nomina(): Error al intentar borrar los tipos de nómina por periodo.");
            }
          }
        }

        if ($error == false) {
          // $procesar = $this->calculos_lib->aplicar_conceptos_nomina($idPeriodoPago,$idPresupuesto,$registros,$empleados);
					$procesar = $this->calculos_lib->calcula_nomina_quincenal($idPeriodoPago,$idPresupuesto,$tipoperiodo,$registros,$empleados,$usuario,$confirma,$fechainiParam,$tipoCalculo);

          if ($procesar['error'] == true) {
            $error = empty($procesar['procesados']);
            $data = array('status' => FALSE, 'message' => $procesar['msj']);
            log_message("error", "Controlador - nomina/calcular_conceptos_nomina(): Error al calcular los conceptos de nómina. ".$procesar['msj'].'Empleados no  procesados: '.$procesar['noProcesados']);
          }
        }
      }
      else {
        $error = true;
        $data = array('status' => FALSE, 'message' => 'No existen empleados para generar conceptos complementarios (err. x001).');
      }
    }
    catch(Exception $e) {
      $error = true;
      $data = array('status' => FALSE, 'message' => 'Se generó algún error durante la ejecución de la consulta.');
      log_message("error", "Controlador - nomina/calcular_conceptos_nomina(): ".$e->getMessage());
    }

    $this->benchmark->mark('finaliza_complemento');

    $tiempo_exec = $this->benchmark->elapsed_time('inicia_complemento', 'finaliza_complemento', 2);
		$bitacora = new Bitacora();
		$bitacora->insertar($this->router->fetch_class().'/'.__FUNCTION__, 'Calculando nómina. Datos: '.json_encode(array('Presupuesto' => $idPresupuesto, 'idPeriodo' => $idPeriodoPago, 'procesados' => count($procesar['procesados']), 'no procesados' => $procesar['noProcesados'])));

    if ($error == false) $data = array('status' => true, "message" => 'Cálculo de Conceptos de Nómina realizado en: '.convert_to_string_time($tiempo_exec).(empty($procesar['noProcesados']) ? '' : ' Empleados No Procesados: '.$procesar['noProcesados']),
                                       'resultado' => $procesar['procesados'], 'recalculo' => $procesar['recalculo']);
    $this->output->set_output(json_encode($data));
  }

  public function configurar_bono_cumples(){
    $fechaini = $this->param_lib->get_parametro('FechaIniPeriodo');
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
		$idPeriodoPago = $this->param_lib->get_parametro('idPeriodoPago');

    if (!empty($idPeriodoPago) && !empty($idPresupuesto)) {
      $config = $this->mCalculos->configurar_bono_cumples($idPeriodoPago,$idPresupuesto);
      if ($config) {
				$data = array('status' => TRUE, 'message' => 'El Bono por Natalicio se configuró correctamente.');
				$bitacora = new Bitacora();
				$bitacora->insertar($this->router->fetch_class().'/'.__FUNCTION__, 'Configurando bono por natalicio. Datos: '.json_encode(array('Presupuesto' => $idPresupuesto, 'idPeriodo' => $idPeriodoPago)));
			}
      else $data = array('status' => FALSE, 'message' => 'Ocurrió un Error al intentar configurar el Bono por Natalicio.');
    }
    else $data = array('status' => FALSE, 'message' => 'Error al configurar el Bono por Natalicio. No se recibió el parámetro esperado.');

    $this->output->set_output(json_encode($data));
  }

  public function configurar_vales(){
    $fechaini = $this->param_lib->get_parametro('FechaIniPeriodo');
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
		$idPeriodoPago = $this->param_lib->get_parametro('idPeriodoPago');
    if (!empty($idPeriodoPago)) {
      $config = $this->mCalculos->configurar_vales($idPeriodoPago);
      if ( $config ) $data = array('status' => TRUE, 'message' => 'Los Vales de Despensa se configuraron correctamente.');
      else $data = array('status' => FALSE, 'message' => 'Ocurrió un Error al intentar configurar los Vales de Despensa.');
    }
    else $data = array('status' => FALSE, 'message' => 'Error al configurar los Vales de Despensa. No se recibió el parámetro esperado.');

    $this->output->set_output(json_encode($data));
  }

  public function procesar_vales_empSB(){
    $fechaini = $this->param_lib->get_parametro('FechaIniPeriodo');
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
		$idPeriodoPago = $this->param_lib->get_parametro('idPeriodoPago');
		$registros = $this->input->post('registros');
    $registros = json_decode($registros,true);
    $array_montos = array();
		$continuar = true;
		set_time_limit(0);

    $this->mCalculos->iniciar_transaccion();

    foreach ($registros as $item) {
			if ($continuar) {
        $result = $this->mCalculos->procesar_confvales_empleadossinbase($idPeriodoPago,$item[1]);
        if ($result != false) $array_montos[$item[1]] = array('monto' => $result->MontoConfigurado);
        else $continuar = false;
      }
		}

    $this->mCalculos->terminar_transaccion(($continuar == true ? 0 : 1));

    if ($continuar) $data = array('status' => TRUE, 'message' => 'Los vales de despensa se configuraron correctamente.', 'montos' => $array_montos);
    else $data = array('status' => FALSE, 'message' => 'Ocurrió un Error al intentar configurar los vales de despensa.');

    $this->output->set_output(json_encode($data));
  }

  public function eliminar_confvales_empSB(){
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
		$registros = $this->input->post('registros');
    $registros = json_decode($registros,true);

		$continuar = true;
		set_time_limit(0);

    $this->mCalculos->iniciar_transaccion();

    foreach ($registros as $item) {
			if ($continuar) {
        $elimina = $this->mCalculos->eliminar_confvales_empleadossinbase($item[1],$idPresupuesto);
        $continuar = $elimina;
      }
		}

    $this->mCalculos->terminar_transaccion(($continuar == true ? 0 : 1));

    if ($continuar) $data = array('status' => TRUE, 'message' => 'La configuración de Vales de Despensa se eliminó correctamente.');
    else $data = array('status' => FALSE, 'message' => 'Ocurrió un Error al intentar eliminar la configuración de Vales de Despensa.');

    $this->output->set_output(json_encode($data));
  }

  public function reiniciar_proceso(){
    $fechaini = $this->param_lib->get_parametro('FechaIniPeriodo');
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
		$idPeriodoPago = $this->param_lib->get_parametro('idPeriodoPago');
    $error = false;

    $this->mCalculos->iniciar_transaccion();
    $delPeriodoPago = $this->mCalculos->borra_periodo_pago($idPeriodoPago);
    if ($delPeriodoPago) {
      $actualiza = $this->mCalculos->actualiza_proceso_nomina(6,$idPeriodoPago,1);
      if ($actualiza == false) $error = true;
    }
    else $error = true;
    $this->mCalculos->terminar_transaccion(($error == true ? 1 : 0));

    if ($error) $data = array('status' => FALSE, 'message' => 'Ocurrió un Error al intentar reiniciar el proceso. Intente de nuevo más tarde.');
    else {
			$bitacora = new Bitacora();
			$bitacora->insertar($this->router->fetch_class().'/'.__FUNCTION__, 'Reiniciando proceso de cálculo. Datos: '.json_encode(array('idPeriodo' => $idPeriodoPago)));
			$data = array('status' => TRUE, 'message' => 'La acción ha sido satisfactoria, debe reiniciar el proceso.');
		}

    $this->output->set_output(json_encode($data));
  }

  public function actualizar_nominas(){
    $idDetNomina = $this->input->post('idDetNomina');
    $fecha = $this->input->post('fecha');
    $cerrada = $this->input->post('cerrada');
    $descripcion = $this->input->post('descripcion');
		if (!empty($idDetNomina) && !empty($fecha)) {
			$result = $this->mCalculos->actualizar_nominas($idDetNomina,$fecha,$cerrada);

	    if ($result) {
				$bitacora = new Bitacora();
				$bitacora->insertar($this->router->fetch_class().'/'.__FUNCTION__, 'Actualizando fecha pago. Datos: '.json_encode(array('idDetNomina' => $idDetNomina, 'fecha' => $fecha)));
				$data = array('status' => TRUE, 'message' => "La fecha para: ".$descripcion." fue actualizada correctamente.");
			}
	    else $data = array('status' => FALSE, 'message' => "Error al actualizar la fecha para: ".$descripcion);
		}
		else $data = array('status' => FALSE, 'message' => "Error al actualizar la fecha para: ".$descripcion.". No se recibió el parámetro esperado.");

		$this->output->set_output(json_encode($data));
  }

  public function carga_conf_regini(){
		//PENDIENTE: USAR EL IDEMPLEADO recibido por POST PARA NO DEPENDER DE LA VENTANA PADRE
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
    $idEmpleado = $this->input->post('idEmpleado');
    $idPeriodoPago = $this->input->post('idPeriodoPago');
    $idPeriodoPago = (empty($idPeriodoPago) ? $this->param_lib->get_parametro('idPeriodoPago') : $idPeriodoPago);
		$credencial = $this->input->post('credencial');
    $credencial = FormatoFolio($credencial,5);

    if (!empty($idPeriodoPago) && !empty($credencial)) {
      $empleado = $this->mEmpleado->traer_generales_empleado($credencial);
			$nomina = $this->mParametros->traer_nomina_porid($idPeriodoPago);
			$fechaini = (empty($nomina) ? $this->param_lib->get_parametro('FechaIniPeriodo') : cambiaf_a_normal($nomina->FechaIni));
			$fechafin = (empty($nomina) ? $this->param_lib->get_parametro('FechaFinPeriodo') : cambiaf_a_normal($nomina->FechaFin));
      if (!empty($empleado)) {
        $datos['fechaini'] = $fechaini;
        $datos['fechafin'] = $fechafin;
        $datos['empleado'] = $empleado;
				$datos['idEmpleado'] = $idEmpleado;
        $datos['idPeriodoPago'] = $idPeriodoPago;
        $this->load->view('nomina/regs_ini_empleado',$datos);
      }
      else {
        $datos['heading'] = 'Error al consultar la información';
        $datos['message'] = 'No se encontró información del empleado.';
        $this->load->view('errors/html/error_general_modal', $datos);
      }
    }
    else {
      $datos['heading'] = 'Error al consultar la información';
      $datos['message'] = 'No se recibió el parámetro esperado.';
      $this->load->view('errors/html/error_general_modal', $datos);
    }
  }

  public function carga_conf_datos(){
    // $fechaini = $this->param_lib->get_parametro('FechaIniPeriodo');
    // $fechafin = $this->param_lib->get_parametro('FechaFinPeriodo');
    // $result = $this->mNomina->BuscaNominaAbierta($fechaini,$idPresupuesto);
    // $idPeriodoPago = ( !empty($result) ? $result->Id : 0 );
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
    $idEmpleado = $this->input->post('idEmpleado');
    $idPeriodoPago = $this->input->post('idPeriodoPago');

    if (!empty($idPeriodoPago) && !empty($idEmpleado)) {
      $detalle = $this->mNomina->detalle_nomina_empleado($idEmpleado,$idPeriodoPago);
      if (!empty($detalle)) {
        // $datos['fechaini'] = $fechaini;
        // $datos['fechafin'] = $fechafin;
        $datos['categorias'] = $this->select_lib->generico('categorias',$detalle->Categoria_diaPago,true,true);
        $datos['dependencias'] = $this->select_lib->generico('dependencias',$detalle->DependenciaId,true,true);
        $datos['departamentos'] = $this->select_lib->generico('departamentos',$detalle->Depto,true,true,'codigo','codigo','descripcion');
        $datos['tipocontrato'] = $this->select_lib->generico('tipocontrato',$detalle->TipoContrato,true,true);
        $datos['grupoimpresion'] = $this->select_lib->generico('grupoimpresion',trim($detalle->GrupoImpresion),true,true,'GrupoImpId','GrupoImpId');
        $datos['tipopago'] = $this->select_lib->generico('tipopago',$detalle->Enomina,true,true);
        $datos['estados_emp'] = $this->select_lib->generico('estados_emp',$detalle->Status,true,true);
        $datos['detalle_empleado'] = $detalle;
        $datos['datos_empleado'] = $this->mEmpleado->traer_empleado_por_id($idEmpleado);
        $datos['ctrlProceso'] = $this->mCalculos->busca_controlproceso_nomina($idPeriodoPago);
        $this->load->view('nomina/datos_empleado',$datos);
      }
      else {
        $datos['heading'] = 'Error al consultar la información';
        $datos['message'] = 'No se encontró información para el periodo seleccionado.';
        $this->load->view('errors/html/error_general_modal', $datos);
      }
    }
    else {
      $datos['heading'] = 'Error al consultar la información';
      $datos['message'] = 'No se recibió el parámetro esperado.';
      $this->load->view('errors/html/error_general_modal', $datos);
    }
  }

	public function carga_conf_percepcionesdeducciones(){
    $credencial = $this->input->post('credencial');
    $credencial = FormatoFolio($credencial,5);
    $idEmpleado = $this->input->post('idEmpleado');
    $idPeriodoPago = $this->input->post('idPeriodoPago');
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
    //$partida = $this->param_lib->get_parametro('PartidaContable');

    if (!empty($credencial) && !empty($idEmpleado) && !empty($idPeriodoPago) && !empty($credencial)) {
      $empleado = $this->mEmpleado->traer_generales_empleado($credencial);
      if (!empty($empleado)) {
				$cat_Acreedores = $this->mCat->traer_cat_varios_filtros('cat_Acreedores', array('Activo' => 1, 'PresupuestoId' => $idPresupuesto));
				$datosV['empleado'] = $empleado;
        $datosV['cattiponomina'] = $this->select_lib->generico('tipo_nomina',3,true,true);
        $datosV['catperc'] = $this->select_lib->conceptos(1,1);
        $datosV['catdeduc'] = $this->select_lib->conceptos(1,0);
      	$datosV['catacreedores'] = $this->select_lib->from_recordset($cat_Acreedores, 0, true, true, 'CodigoAcreedor', 'CodigoAcreedor', 'Acreedor', '', true);
        $datosV['credencial'] = $credencial;
        $datosV['idEmpleado'] = $idEmpleado;
        $datosV['idPeriodoPago'] = $idPeriodoPago;

        $datosV['calculoCierre'] = $this->input->post('calculoCierre');
        $datos['vw_confEmpleado'] = $this->load->view('nomina/vw_conf_Empleado',$datosV,TRUE);
        $this->load->view('nomina/conf_perc_deduc_empleado',$datos);
      }
      else {
        $datos['heading'] = 'Error al consultar la información';
        $datos['message'] = 'No se encontró información del empleado.';
        $this->load->view('errors/html/error_general_modal', $datos);
      }
    }
    else {
      $datos['heading'] = 'Error al consultar la información';
      $datos['message'] = 'No se recibió el parámetro esperado.';
      $this->load->view('errors/html/error_general_modal', $datos);
    }
  }

  public function trae_percepciones_deducciones_empleado(){
    $idEmpleado = $this->input->post('idEmpleado');
    $idTipoNomina = $this->input->post('idTipoNomina');
    $conf = $this->mNomina->trae_percepciones_deducciones_empleado($idEmpleado,$idTipoNomina);
    $this->output->set_output(json_encode($conf));
  }

	public function guardar_percepcion_deduccion_empleado(){
    $idTipoNomina = $this->input->post('idTipoNomina');
    $idEmpleado = $this->input->post('idEmpleado');
    $idConcepto = $this->input->post('cf_concepto');
    $Monto = $this->input->post('cf_monto');
    $permanente = $this->input->post('chkPermanente');
    $vecesaplicar = $this->input->post('cf_vecesaplicar');
    $vecesaplicadas = $this->input->post('cf_aplicadas');
    $antesimp = $this->input->post('chkGravado');
    $tieneparteexe = $this->input->post('chkParteExe');
    $parteexe = $this->input->post('cf_parteexe');
    $codigoacreedor = $this->input->post('cf_codacreedor');
    $nombreacreedor = $this->input->post('acreedor');
    $folio = $this->input->post('cf_folio');
    $idConfEmpleado = $this->input->post('cf_idConfEmpleado');
    $idPeriodoPago = $this->input->post('idPeriodoPago');
    $claverecibo = $this->input->post('ClaveRecibo');
    $esISSTEY = $this->input->post('cf_esISSTEY');
    $error = 0;
    $msj = "El concepto se ha configurado correctamente.";

    if (!empty($idTipoNomina) && !empty($idEmpleado) && !empty($idConcepto) && !empty($Monto) && !empty($idPeriodoPago)) {
      $datos = array(
                  'idTipoNomina' 		=> $idTipoNomina,
                  'idEmpleado' 			=> $idEmpleado,
                  'idConcepto' 			=> $idConcepto,
                  'monto' 					=> (empty($Monto) ? 0 : $Monto),
                  'permanente' 			=> (empty($permanente) ? 0 : 1),
                  'vaplicar' 				=> (empty($vecesaplicar) ? 0 : $vecesaplicar),
                  'vaplicadas' 			=> (empty($vecesaplicadas) ? 0 : $vecesaplicadas),
                  'antesimp' 				=> (empty($antesimp) ? 0 : 1),
                  'tieneparteexe' 	=> (empty($tieneparteexe) ? 0 : $tieneparteexe),
                  'parteexe'				=> (empty($parteexe) ? 0 : $parteexe),
                  'CodigoAcreedor'	=> (empty($codigoacreedor) ? '' : $codigoacreedor),
                  'NombreAcreedor'	=> (empty($nombreacreedor) ? '' : $nombreacreedor)
                );
			$bitacora = new Bitacora();
      $this->mNomina->iniciar_transaccion();

      if (empty($idConfEmpleado)) {
        $ConfEmpleado = $this->mNomina->inserta_conf_empleado($datos);

        if ($ConfEmpleado->ConfEmpleadoID > 0) {
					$bitacora->insertar($this->router->fetch_class().'/'.__FUNCTION__, 'Guardando configuración de empleado: '.json_encode($datos));

	        $idConfEmpleado = $ConfEmpleado->ConfEmpleadoID;
	        if (!empty($esISSTEY)) {
	          $datosISSTEY = array(
	                          'idPeriodoPago'   => $idPeriodoPago,
	                          'ClaveRecibo'     => $claverecibo,
	                          'folio'           => (empty($folio) ? '' : $folio),
	                          'MontoQ'          => 0,
	                          'idConfEmpleado'  => $idConfEmpleado,
	                         );
	          $pagoISSTEY = $this->mNomina->guarda_pago_isstey($datos,$datosISSTEY,$idConfEmpleado);
	          if( $pagoISSTEY == false ){
	            $error = 2;
	            $msj = "No se pudo agregar el nuevo concepto. Intente de nuevo, por favor.";
	          }
	        }
        }
        else {
          $error = 2;
          $msj = "No se pudo agregar el nuevo concepto. Intente de nuevo, por favor.";
        }
      }
      else {
        $result = $this->mNomina->actualiza_conf_empleado($datos,$idConfEmpleado);
        if ($result) {
					$bitacora->insertar($this->router->fetch_class().'/'.__FUNCTION__, 'Actualizando configuración de empleado: '.json_encode($datos));
          if (!empty($esISSTEY)) {
            $datosISSTEY = array(
                            'idPeriodoPago'   => $idPeriodoPago,
                            'ClaveRecibo'     => $claverecibo,
                            'folio'           => (empty($folio) ? '' : $folio),
                            'MontoQ'          => 0,
                            'Activo'          => true,
                            'idConfEmpleado'  => $idConfEmpleado,
                           );

            $pagoISSTEY = $this->mNomina->guarda_pago_isstey($datos,$datosISSTEY,$idConfEmpleado);
            if ($pagoISSTEY == false) {
              $error = 3;
              $msj = "No se pudo actualizar el nuevo concepto. Intente de nuevo, por favor.";
            }
          }
        }
        else {
          $error = 3;
          $msj = "No se pudo actualizar el nuevo concepto. Intente de nuevo, por favor.";
        }
      }

      $this->mNomina->terminar_transaccion($error);

      if (empty($error)) $data = array('status' => TRUE, 'message' => $msj);
      else $data = array('status' => FALSE, 'message' => $msj);
    }
    else $data = array('status' => FALSE, 'message' => 'Error al intentar guardar el concepto. No se recibió el parámetro esperado.');

    $this->output->set_output(json_encode($data));
  }

  public function elimina_percepcion_deduccion_empleado() {
    $idTipoNomina = $this->input->post('idTipoNomina');
    $idEmpleado = $this->input->post('idEmpleado');
    $idConfEmpleado = $this->input->post('idConfEmpleado');
    $folioISSTEY = $this->input->post('folioISSTEY');
    $claverecibo = $this->input->post('ClaveRecibo');
    $error = 0;
		$bitacora = new Bitacora();
    if (!empty($idTipoNomina) && !empty($idEmpleado) && !empty($idConfEmpleado) && !empty($claverecibo)) {
      $this->mNomina->iniciar_transaccion();

      $datos = array(
                  'idTipoNomina'    => $idTipoNomina,
                  'idEmpleado'      => $idEmpleado,
                  'BorraPrima'      => ( $claverecibo == PRIMA_VACACIONAL ? 1 : 0),
                  'idConfEmpleado'  => $idConfEmpleado,
                );

      $result = $this->mNomina->elimina_conf_empleado($datos);
      if ($result) {
				$bitacora->insertar($this->router->fetch_class().'/'.__FUNCTION__, 'Eliminando configuración de empleado: '.json_encode($datos));
        if (!empty($folioISSTEY)) {
          $borraISSTEY = $this->mNomina->borra_pago_isstey($idConfEmpleado);
          if ($borraISSTEY == false) $error = 2;
        }
      }
      else $error = 1;

      $this->mNomina->terminar_transaccion($error);

      if (empty($error)) $data = array('status' => TRUE, 'message' => "El concepto se ha eliminado correctamente.");
      else $data = array('status' => FALSE, 'message' => "Error al intentar eliminar el concepto.");
    }
    else $data = array('status' => FALSE, 'message' => 'Error al intentar eliminar el concepto. No se recibió el parámetro esperado.');

    $this->output->set_output(json_encode($data));
  }

  public function trae_regsini_empleado() {
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
    $idPeriodoPago = $this->input->post('idPeriodoPago');
    $idEmpleado = $this->input->post('idEmpleado');
    $registros = array();
    $error = false;

    if (!empty($idEmpleado) && !empty($idPeriodoPago)) {
      try {
        $regsini = $this->mCalculos->trae_registros_iniciales_empleado($idEmpleado,$idPeriodoPago);

        if (!empty($regsini)) {
          foreach ($regsini as $item) {
            $categoria = $this->mCalculos->trae_Categoria_por_id($item->CategoriaID);
            $estado = ($item->TieneLIS ? 0 : 1);
            if (!empty($categoria)) {
              $catCategorias = $this->select_lib->generico('categorias',$categoria->Id,true,false);
              array_push($registros, array('Fecha' => cambiaf_a_normal($item->Fecha), 'Dia' => $item->Dia, 'estado' => $estado, 'clavecategoria' => $categoria->Clave, 'categoria' => $categoria->Descripcion, 'idCategoria' => $categoria->Id, 'catCategorias'=>$catCategorias));
            }
            else {
              $catCategorias = $this->select_lib->generico('categorias',0,true,true);
              array_push($registros,array( 'Fecha' => cambiaf_a_normal($item->Fecha), 'Dia' => $item->Dia, 'estado' => $estado, 'clavecategoria' => '000', 'categoria' => '', 'idCategoria' => 0, 'catCategorias'=>$catCategorias));
            }
          }
        }
        else {
          $error = true;
          $data = array('status' => FALSE, 'message' => 'No se han generado los registros iniciales del empleado.');
        }
      }
      catch(Exception $e){
        $error = true;
        $data = array('status' => FALSE, 'message' => 'Se generó algún error durante la ejecución de la consulta.');
      }
    }
    else {
      $error = true;
      $data = array('status' => FALSE, 'message' => 'Error al obtener los registros iniciales. No se recibió el parámetro esperado.');
    }

    if ($error == false) {
      $ctrlProceso = $this->mCalculos->busca_controlproceso_nomina($idPeriodoPago);
      $data = array('status' => TRUE, 'registros' => $registros, 'ctrlProceso' => $ctrlProceso);
    }

    $this->output->set_output(json_encode($data));
  }

  public function generar_regsini_empleado(){
    $NumDiasPeriodoPago = $this->param_lib->get_parametro('LongPeriodoPago');
    $fechaini = $this->input->post('fechaini');
    $credencial = $this->input->post('credencial');
    $credencial = FormatoFolio($credencial,5);
    $idPeriodoPago = $this->input->post('idPeriodoPago');
    $fechaCalculoF = DateTime::createFromFormat('d/m/Y', $fechaini);
    $registros = array();
    $error = false;

    if (!empty($fechaini) && !empty($credencial)) {
      try {
        $empleado = $this->mEmpleado->traer_generales_empleado($credencial);

        for ($i=0; $i < $NumDiasPeriodoPago; $i++) {
          $fecha = $fechaCalculoF->format('d/m/Y');

          $estatusEmpleado = $this->mCalculos->trae_estatus_por_fecha($fecha,$credencial);
          $estado = ($estatusEmpleado == 'I' ? 0 : 1);
          $idCategoria = $this->calculos_lib->trae_CategoriaID_porFecha($fecha,$credencial);

          if ($idCategoria <= 0) {
            $categoria = $this->mCalculos->trae_Categoria_por_id($empleado->Id_Categoria);
            if (!empty($categoria)) $idCategoria = $categoria->Id;
          }
          else $categoria = $this->mCalculos->trae_Categoria_por_id($idCategoria);

          if (!empty($idCategoria)) {
            $catCategorias = $this->select_lib->generico('categorias',$categoria->Id,true,false);
            array_push($registros,array( 'Fecha' => $fecha, 'Dia' => $i+1, 'estado' => $estado, 'clavecategoria' => $categoria->Clave, 'categoria' => $categoria->Descripcion, 'idCategoria' => $categoria->Id, 'catCategorias'=>$catCategorias));
            $fechaCalculoF = $fechaCalculoF->modify('+1 day');
          }
          else {
            $error = true;
            $data = array('status' => FALSE, 'message' => 'Error al consultar la categoría del empleado.');
          }
        }
      }
      catch(Exception $e) {
        $error = true;
        log_message('error', 'Controlador - nomina/generar_regsini_empleado(): Error al ajustar la nómina del empleado: '.$credencial);
        $data = array('status' => FALSE, 'message' => 'Se generó algún error durante la ejecución de la consulta.');
      }
    }
    else {
      $error = true;
      $data = array('status' => FALSE, 'message' => 'Error al intentar generar los registros iniciales. No se recibió el parámetro esperado.');
    }

    if ($error == false) {
      $ctrlProceso = $this->mCalculos->busca_controlproceso_nomina($idPeriodoPago);
      $data = array('status' => TRUE, 'registros' => $registros, 'ctrlProceso' => $ctrlProceso);
    }

    $this->output->set_output(json_encode($data));
  }

  public function guardar_regsini_empleado(){
    $idPeriodoPago = $this->input->post('idPeriodoPago');
    $idEmpleado = $this->input->post('idEmpleado');
    $credencial = $this->input->post('credencial');
    $credencial = FormatoFolio($credencial,5);
    $registros = $this->input->post('registros');
    $registros = json_decode($registros,true);
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
    $NumDiasPeriodoPago = $this->param_lib->get_parametro('LongPeriodoPago');
    $fecha = $this->param_lib->get_parametro('FechaIniPeriodo');  //IMPORTANTE: obtener la fecha vía POST
    $error = false;

    if (!empty($idPeriodoPago) && !empty($idEmpleado) && !empty($credencial) && !empty($registros)) {
      try {
        $borrar = $this->mCalculos->borrar_regini_empleado($idEmpleado,$idPeriodoPago);
        $resFechaAsist = $this->mCalculos->busca_ultimafecha_asistencias(1,$idPeriodoPago,false);

        if (!empty($resFechaAsist)) $fecha = $resFechaAsist->Fecha;

        for ($i=0; $i < $NumDiasPeriodoPago; $i++) {
          $SePaga = 1;
          $complementario = 0;
          $fecharegini = $registros[$i][0];
          $idCategoria = $registros[$i][5];

          if ($registros[$i][2] == 0) $SePaga = 0;
          if ($fecharegini > date("d/m/Y", strtotime($fecha))) $complementario = 1;

          $diaInhabil = $this->calculos_lib->obtener_dia_inhabil($credencial,$idEmpleado,$fecharegini);
          $result = $this->mCalculos->inserta_registro_inicial_empleado($idEmpleado,$idCategoria,$fecharegini,$complementario,$idPeriodoPago,$i+1,($diaInhabil) ? 1:0,($SePaga) ? 0:1);
          if (empty($result)) log_message('error','Error al guardar el día: '.($i+1).', para el empleado: '.$idEmpleado);
        }
      }
      catch(Exception $e) {
        $error = true;
        log_message('error', 'Controlador - nomina/guardar_regsini_empleado(): Error al ajustar la nómina del empleado: '.$idEmpleado);
        $data = array('status' => FALSE, 'message' => 'Se generó algún error durante la ejecución de la consulta.');
      }
    }
    else {
      $error = true;
      $data = array('status' => FALSE, 'message' => 'Error al intentar generar los registros iniciales. No se recibió el parámetro esperado.');
    }

    if (empty($error)) {
			$bitacora = new Bitacora();
			$bitacora->insertar($this->router->fetch_class().'/'.__FUNCTION__, 'Agregando registros iniciales. Datos: '.json_encode(array($idEmpleado,$idPeriodoPago)));
			$data = array('status' => TRUE, 'message' => "Se han agregado los registros iniciales del empleado.");
		}

    $this->output->set_output(json_encode($data));
  }

	/**
	 * calcula la quincena para un empleado (función ACTUAL)
	 * @method calcula_nomina_empleado_quincenal
	 * @author alopez
	 * @date
	 * @return [type]                            [description]
	 */
  public function calcula_nomina_empleado_quincenal(){
    $fechaini = $this->param_lib->get_parametro('FechaIniPeriodo');
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
    $idNominaAbierta = $this->mNomina->busca_periodopago_porfecha($fechaini,$idPresupuesto);
    $idNominaAbierta = (empty($idNominaAbierta->id) ? 0 : $idNominaAbierta->id);
    $idPeriodoPago = $this->input->post('idPeriodoPago');
    $idEmpleado = $this->input->post('idEmpleado');
    $tipoperiodo = obten_tipo_periodo($fechaini);
		$tipoCalculo = $this->verifica_tipo_calculo($idPeriodoPago);
    $usuario = LimpiaCadena($this->session->UsuarioNT);
    $error = false;

    if (!empty($idPeriodoPago) && !empty($fechaini) && !empty($idEmpleado)) {
      if ($idNominaAbierta == $idPeriodoPago) {
				$validaCalculado = $this->mCalculos->empleados_calculados_porFechaIni($fechaini,$idPeriodoPago,$idEmpleado);

				if (empty($validaCalculado)){
					$regsini = $this->mCalculos->trae_registros_iniciales_empleado($idEmpleado,$idPeriodoPago);

	        if (!empty($regsini)) {
	          try {
	            $calcular = $this->calculos_lib->calcular_nomina_por_empleado($idEmpleado,$idPeriodoPago,$idPresupuesto,$tipoperiodo,$usuario,$fechaini,$tipoCalculo);
	            if ($calcular == false) {
	              $error = true;
	              log_message('error', 'Error al recalcular la nómina del empleado: '.$idEmpleado.'.');
	              $data = array('status' => false, "message" => 'El cálculo de la nómina para el empleado no ha sido realizado correctamente.');
	            }
	          }
	          catch(Exception $e) {
	            $error = true;
	            log_message("error", "Controlador - nomina/calcula_nomina_empleado_quincenal(): ".$e->getMessage());
	            $data = array('status' => FALSE, 'message' => 'Se generó algún error durante la ejecución de la consulta.');
	          }
	        }
	        else {
	          $error = true;
	          $data = array('status' => FALSE, 'message' => 'Para realizar el cálculo, es necesario que se generen los registros iniciales del empleado.', 'sinRegIni' => TRUE);
	        }
				}
				else {
					$error = true;
					$data = array('status' => FALSE, 'message' => 'El empleado ya ha sido calculado en otro presupuesto.');
					log_message("error", "Calculos_Nomina/calcular_nomina_por_empleado. El empleado ya ha sido calculado en otro presupuesto, idempleado: ".$idEmpleado);
				}
      }
      else {
        $error = true;
        $data = array('status' => FALSE, 'message' => 'La nómina del empleado no puede ser recalculada porque la nómina de la quincena seleccionada ya ha sido confirmada.');
      }
    }
    else {
      $error = true;
      $data = array('status' => FALSE, 'message' => 'Error al intentar realizar el cálculo. No se recibió el parámetro esperado.');
    }

    if (empty($error)) {
			$bitacora = new Bitacora();
			$bitacora->insertar($this->router->fetch_class().'/'.__FUNCTION__, 'Calculando empleado. Datos: '.json_encode(array($idEmpleado,$idPeriodoPago,$idPresupuesto,$tipoperiodo,$usuario,$fechaini)));
			$data = array('status' => true, "message" => 'El cálculo de la nómina para el empleado ha sido realizado correctamente.');
		}
    $this->output->set_output(json_encode($data));
  }

	/**
	 * [calcula_nomina_empleado description]
	 * @method calcula_nomina_empleado
	 * @author alopez
	 * @date
	 * @return [type]                  [description]
	 */
	public function calcula_nomina_empleado(){
    $fechaini = $this->param_lib->get_parametro('FechaIniPeriodo');
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
    $idNominaAbierta = $this->mNomina->busca_periodopago_porfecha($fechaini,$idPresupuesto);
    $idNominaAbierta = (empty($idNominaAbierta->id) ? 0 : $idNominaAbierta->id);
    $idPeriodoPago = $this->input->post('idPeriodoPago');
    $idEmpleado = $this->input->post('idEmpleado');
    $tipoperiodo = obten_tipo_periodo($fechaini);
		$tipoCalculo = $this->verifica_tipo_calculo($idPeriodoPago);
    $usuario = LimpiaCadena($this->session->UsuarioNT);
    $error = false;

    if (!empty($idPeriodoPago) && !empty($fechaini) && !empty($idEmpleado)) {
      if ($idNominaAbierta == $idPeriodoPago) {
        $regsini = $this->mCalculos->trae_registros_iniciales_empleado($idEmpleado,$idPeriodoPago);

        if (!empty($regsini)) {
          try {
						$datos = array(
							'idEmpleado'		=> $idEmpleado,
							'idPeriodoPago'	=> $idPeriodoPago,
							'idPresupuesto'	=> $idPresupuesto,
							'tipoperiodo'		=> $tipoperiodo,
							'usuario'				=> $usuario,
							'fechaini'			=> $fechaini,
							'tipoCalculo'		=> $tipoCalculo
						);
            $calcular = $this->calculos_lib->calcular_nomina_por_empleado($datos['idEmpleado'],$datos['idPeriodoPago'],$datos['idPresupuesto'],$datos['tipoperiodo'],$datos['usuario'],$datos['fechaini'],$datos['tipoCalculo']);
            if ($calcular == false) {
              $error = true;
              log_message('error', 'Error al recalcular la nómina del empleado.');
              $data = array('status' => false, "message" => 'El cálculo de la nómina para el empleado no ha sido realizado correctamente.');
            }
          }
          catch(Exception $e) {
            $error = true;
            log_message("error", "Controlador - nomina/calcula_nomina_empleado(): ".$e->getMessage());
            $data = array('status' => FALSE, 'message' => 'Se generó algún error durante la ejecución de la consulta.');
          }
        }
        else {
          $error = true;
          $data = array('status' => FALSE, 'message' => 'Para realizar el cálculo, es necesario que se generen los registros iniciales del empleado.', 'sinRegIni' => TRUE);
        }
      }
      else {
        $error = true;
        $data = array('status' => FALSE, 'message' => 'La nómina del empleado no puede ser recalculada porque la nómina de la quincena seleccionada ya ha sido confirmada.');
      }
    }
    else {
      $error = true;
      $data = array('status' => FALSE, 'message' => 'Error al intentar realizar el cálculo. No se recibió el parámetro esperado.');
    }

    if ($error == false) {
			$data = array('status' => true, "message" => 'El cálculo de la nómina para el empleado ha sido realizado correctamente.');
			$bitacora = new Bitacora();
			$bitacora->insertar($this->router->fetch_class().'/'.__FUNCTION__, 'Calculando empleado. Datos: '.json_encode($datos));
		}
    $this->output->set_output(json_encode($data));
  }

  public function elimina_nomina_empleado(){
    $idPeriodoPago = $this->input->post('idPeriodoPago');
    $idEmpleado = $this->input->post('idEmpleado');
    $idTipoNomina = $this->input->post('idTipoNomina');

    if( !empty($idPeriodoPago) && !empty($idEmpleado) && !empty($idTipoNomina) ){
      $result = $this->mCalculos->elimina_nomina_empleado($idPeriodoPago,$idEmpleado,$idTipoNomina);

      if ($result) {
				$bitacora = new Bitacora();
				$bitacora->insertar($this->router->fetch_class().'/'.__FUNCTION__, 'Eliminando nómina del empleado. Datos: '.json_encode(array($idPeriodoPago,$idEmpleado,$idTipoNomina)));
				$data = array('status' => TRUE, 'message' => "Nómina eliminada correctamente.");
			}
      else $data = array('status' => FALSE, 'message' => "Error al intentar eliminar la nómina.");
    }
    else $data = array('status' => false, 'message' => 'Error al intentar eliminar la nómina. No se recibió el parámetro esperado.');

    $this->output->set_output(json_encode($data));
  }

  public function ajusta_nomina_empleado(){
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
    $idTipoNomina = $this->input->post('idTipoNomina');
    $idEmpleado = $this->input->post('idEmpleado');
    $idPeriodoPago = $this->input->post('idPeriodoPago');
    $percepciones = $this->input->post('percepciones');
    $percepciones = json_decode($percepciones,true);
    $deducciones = $this->input->post('deducciones');
    $deducciones = json_decode($deducciones,true);
    $fechaini = $this->param_lib->get_parametro('FechaIniPeriodo');
    $tipoperiodo = obten_tipo_periodo($fechaini);
    $usuario = LimpiaCadena($this->session->UsuarioNT);

    $error = false;
    set_time_limit(0);

    if (!empty($idPeriodoPago) && !empty($idEmpleado)) {
      if (!empty($percepciones)) {

        $regsini = $this->mCalculos->trae_registros_iniciales_empleado($idEmpleado,$idPeriodoPago);
        if (!empty($regsini)) {
          try {
            $ajuste = $this->calculos_lib->ajusta_sueldo_empleado($idTipoNomina,$idEmpleado,$idPeriodoPago,$percepciones,$deducciones,$tipoperiodo,$usuario,$idPresupuesto);

            if ($ajuste == false) {
              $error = true;
              log_message('error', 'Controlador - nomina/ajusta_nomina_empleado(): Error al ajustar la nómina del empleado.');
              $data = array('status' => false, "message" => 'Error al intentar realizar el ajuste del empleado.');
            }

          }
          catch(Exception $e) {
            $error = true;
            log_message("error", "Controlador - nomina/ajusta_nomina_empleado(): ".$e->getMessage());
            $data = array('status' => FALSE, 'message' => 'Se generó algún error durante la ejecución de la consulta.');
          }
        }
        else {
          $error = true;
          $data = array('status' => FALSE, 'message' => 'Para realizar el ajuste, es necesario que se generen los registros iniciales del empleado.');
        }
      }
      else {
        $error = true;
        $data = array('status' => false, 'message' => 'No se puede ajustar el sueldo porque no hay conceptos generados. Recalcule la nómina para el empleado.');
      }
    }
    else {
      $error = true;
      $data = array('status' => false, 'message' => 'Error al intentar realizar el ajuste. No se recibió el parámetro esperado.');
    }

    if ($error == false) {
			$bitacora = new Bitacora();
			$bitacora->insertar($this->router->fetch_class().'/'.__FUNCTION__, 'Ajustando nómina del empleado. Datos: '.json_encode(array($idTipoNomina,$idEmpleado,$idPeriodoPago,$tipoperiodo,$usuario,$idPresupuesto)));
			$data = array('status' => true, "message" => 'El ajuste del sueldo para el empleado ha sido realizado correctamente.');
		}

    $this->output->set_output(json_encode($data));
  }

  public function guarda_ajuste_nomina_empleado(){
    $idTipoNomina = $this->input->post('idTipoNomina');
    $idEmpleado = $this->input->post('idEmpleado');
    $idPeriodoPago = $this->input->post('idPeriodoPago');
    $deducciones = $this->input->post('deducciones');
    $deducciones = json_decode($deducciones,true);
    $fechaini = $this->param_lib->get_parametro('FechaIniPeriodo');
    $tipoperiodo = obten_tipo_periodo($fechaini);
    $usuario = LimpiaCadena($this->session->UsuarioNT);
    $error = false;
    $continuar = true;
    $actualizaded = true;
    set_time_limit(0);

    $this->mCalculos->iniciar_transaccion();
    $regsini = $this->mCalculos->trae_registros_iniciales_empleado($idEmpleado,$idPeriodoPago);
    if (!empty($regsini)) {
      try{
        if (!empty($deducciones) && $continuar) {
          for ($i=0; $i < count($deducciones); $i++) {
            if ($actualizaded && $continuar) {
              if (isset($deducciones[$i]['MontoDeduc']) && $deducciones[$i]['MontoDeduc'] > 0) {
                $actualizaded = $this->mCalculos->actualiza_concepto_detNomina($idEmpleado,$idPeriodoPago,$deducciones[$i]['idCategoria'],$deducciones[$i]['idConcepto'],$deducciones[$i]['MontoDeduc'],$idTipoNomina);
              }
              $continuar = $actualizaded;
            }
          }
          if (!$continuar) {
            $error = true;
            log_message('error', 'Controlador - nomina/guarda_ajuste_nomina_empleado(): Error al ajustar la nómina del empleado.');
            $data = array('status' => false, "message" => 'Error al intentar realizar el ajuste del empleado.');
          }
        }
      }
      catch(Exception $e) {
        $error = true;
        log_message("error", "Controlador - nomina/guarda_ajuste_nomina_empleado(): ".$e->getMessage());
        $data = array('status' => FALSE, 'message' => 'Se generó algún error durante la ejecución de la consulta.');
      }
    }
    else {
      $error = true;
      $data = array('status' => FALSE, 'message' => 'Para realizar el ajuste, es necesario que se generen los registros iniciales del empleado.');
    }
    $this->mCalculos->terminar_transaccion(($continuar == true ? 0 : 1));

    if ($error == false) {
			$bitacora = new Bitacora();
			$bitacora->insertar($this->router->fetch_class().'/'.__FUNCTION__, 'Guardando ajuste de nómina del empleado. Datos: '.json_encode(array($idEmpleado,$idPeriodoPago)));
			$data = array('status' => true, "message" => 'El ajuste del sueldo para el empleado ha sido realizado correctamente.');
		}
    $this->output->set_output(json_encode($data));
  }

  public function guardar_datos_empleado_nomina(){
    $idPeriodoPago = $this->input->post('idPeriodoPago');
    $idEmpleado = $this->input->post('idEmpleado');
    $idCategoria = $this->input->post('de_categoria');
    $idDependencia = $this->input->post('de_dependencia');
    $depto = $this->input->post('de_departamento');
    $status = $this->input->post('de_estado');
    $grupoimpresion = $this->input->post('de_gpoimpresion');
    $Enomina = $this->input->post('de_tipopago');
    $TipoContrato = $this->input->post('de_tipocontrato');

    $datos = array(
                'idPeriodoPago' => $idPeriodoPago,
                'idEmpleado' => $idEmpleado,
                'idCategoria' => $idCategoria,
                'idDependencia' => $idDependencia,
                'depto' => $depto,
                'status' => $status,
                'grupoimpresion' => $grupoimpresion,
                'Enomina' => $Enomina,
                'TipoContrato' => $TipoContrato
              );
    $result = $this->mNomina->actualiza_detalle_nomina_empleado($datos);

    if ($result) {
			$bitacora = new Bitacora();
			$bitacora->insertar($this->router->fetch_class().'/'.__FUNCTION__, 'Actualizando datos del empleado. Datos: '.json_encode($datos));
			$data = array('status' => TRUE, 'message' => "Datos del empleado actualizados correctamente.");
		}
    else $data = array('status' => FALSE, 'message' => "Error al intentar actualizar los datos del empleado.");

    $this->output->set_output(json_encode($data));
  }

	public function valida_concepto(){
    $ClaveRecibo = $this->input->post('ClaveRecibo');
    $esISSTEY = false;
    $antesimp = false;
    $tieneparteexe = false;
    $parteexe = '';

    if (!empty($ClaveRecibo)) {
      $catISSTEY = $this->mCat->trae_cat_ISSTEY();

      if( !empty($catISSTEY) ){
        foreach ($catISSTEY as $cat) {
          if( $cat->ClaveRecibo == $ClaveRecibo ) $esISSTEY = true;
        }
      }
      //GSantos, 2022.01.03. Debe obtenerse del formulario. No dde lo configurado en el catálogo
      /*$concepto = $this->mCat->trae_cat_conceptos(0,0,$ClaveRecibo);

      if( !empty($concepto) ){
        $antesimp = $concepto->AntesDeImp;
        $tieneparteexe = $concepto->TieneParteExcenta;
        $parteexe = $concepto->DiasSalMinParteExc;
      }*/

      $data = array('status' => true, 'esISSTEY' => $esISSTEY,'antesimp'=>$antesimp,'tieneparteexe'=>$tieneparteexe,'parteexe'=>$parteexe);
    }
    else $data = array('status' => false, 'message' => 'Error al intentar validar el concepto. No se recibió el parámetro esperado.');
    $this->output->set_output(json_encode($data));
  }

  public function valida_guardar_concepto(){
    $idConcepto = $this->input->post('idConcepto');
    $idCategoria = $this->input->post('idCategoria');
    $idTipoNomina = $this->input->post('idTipoNomina');
    $idEmpleado = $this->input->post('idEmpleado');
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
    $idConceptoPrimaVA = $this->param_lib->get_parametro('idConceptoPrimaVA');
    $msj = '';
    $valido = true;
    $tienePrimaVA = false;
    $periodoVAini = '';
    $periodoVAfin = '';
    $montoVA = '';

    if (!empty($idConcepto) && !empty($idCategoria) && !empty($idTipoNomina) && !empty($idEmpleado)) {
      if ($idConcepto <> VALESDESPENSA && $idConcepto <> VALESDESPENSAGRAVADO) {
        $conceptos = $this->mNomina->trae_conf_categoria($idPresupuesto,$idCategoria,3,$idTipoNomina);
        if (!empty($conceptos)) {
          foreach ($conceptos as $item) {
            if ($valido) {
              if ($item->Id_Concepto == $idConcepto) {
                $valido = false;
                $msj = 'Favor de verificar que el concepto a agregar no exista.';
              }
            }
          }
        }
        // else {
        //   $valido = false;
        //   $msj = 'Error al consultar los conceptos.';
        // }
      }

      if ($valido) {
        if ($idConcepto == $idConceptoPrimaVA) {
          $periodos = $this->mCat->trae_cat_periodos('MesInicial');
          $idSemestre = $periodos->PeriodoID;
          $periodoVAini = cambiaf_a_normal($periodos->MesInicial);
          $periodoVAfin = cambiaf_a_normal($periodos->MesFinal);
          $montoVA = '';
          $pagado = $this->mNomina->obtener_pago_porconcepto($periodoVAini,$periodoVAfin,$idEmpleado,$idConcepto,$idPresupuesto);
          if (!empty($pagado)) {
            $montoVA = $pagado->monto;
            $tienePrimaVA = true;
          }
        }
      }
    }
    else {
      $valido = false;
      $msj = 'Error al guardar. No se recibió el parámetro esperado.';
    }

    $data = array('valido' => $valido, 'message' => $msj, 'tienePrimaVA' => $tienePrimaVA, 'periodoVAini' => $periodoVAini, 'periodoVAfin' => $periodoVAfin, 'montoVA' => $montoVA );
    $this->output->set_output(json_encode($data));
  }

  public function obtener_fecha_periodo(){
    $fechaini = $this->input->post('fechaini');

    if (!empty($fechaini)) {
      $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
      $result = $this->mNomina->obtener_fecha_periodopago($idPresupuesto,$fechaini);
      if (!empty($result)) $data = array('status' => true, 'idPeriodoPago' => $result->idPeriodoPago, 'fechafin' => cambiaf_a_normal($result->FechaFin));
      else $data = array('status' => false, 'message' => 'No hay un periodo de pago para la fecha proporcionada.');
    }
    else $data = array('status' => false, 'message' => 'No se recibió el parámetro esperado.');

    $this->output->set_output(json_encode($data));
  }

  public function obtener_estado_cuenta(){
    $fechaini = $this->input->post('fechaini');
    $fechafin = $this->input->post('fechafin');
    $credencial = $this->input->post('credencial');
    $credencial = FormatoFolio($credencial,5);
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');

    if (empty($fechaini) && empty($fechafin) && empty($credencial)) $data = array('status' => FALSE,'message' => 'No se recibió el parámetro esperado.');
    else {
      $resultado = $this->mNomina->obtener_edo_cuenta($credencial,$fechaini,$fechafin,$idPresupuesto);

      if (empty($resultado)) $data = array('status' => FALSE,'message' => 'El empleado no tiene algun tipo de concepto que genere un estado de cuenta para este presupuesto.');
      else {
        $empleado = $this->mEmpleado->traer_generales_empleado($credencial);
        $data = array('status' => TRUE, 'edocuenta' => $resultado, 'idPresupuesto' => $idPresupuesto, 'empleado' => $empleado);
      }
    }

    $this->output->set_output(json_encode($data));
  }

  public function ajuste_anual_impuestos(){
    $this->load->view('nomina/ajuste_isr_anual');
  }

  public function CargartxtSAT(){
    $fechaini = $this->param_lib->get_parametro('FechaIniPeriodo');
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
		$idPeriodoPago = $this->param_lib->get_parametro('idPeriodoPago');
    $quincenas = $this->select_lib->historial_nomina($idPresupuesto);

    $datos['quincenas'] = $quincenas;
    $this->load->view('nomina/txt_SAT',$datos);
  }

  public function listado_acumulado_anual(){
    $anio = $this->input->post('ia_anio');
    if (!empty($anio)) {
      // $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
      $idPresupuesto = $this->input->post('ia_presupuesto');
      $result = $this->mNomina->empleados_ajuste_anual($idPresupuesto,$anio);

      $abc = new pjey_ABC();
      $abc->set_resultado($result);
      $abc->set_key(0,'idEmpleado','asc');

  	  $abc->set_defaults('filtros','acciones','copiarTbl','btnocultaColumnas','btncardView');
      $abc->set_formatoColumna(array('moneda' => array(7,8,9,10,11,12,13,14,15,16),'visible' => array(0,1,2,3,5,6,7,8,9,10,11,12,13,14,15,16)));
      $abc->set_configuraciones(array('titulopanel' => 'Acumulado anual del año '.$anio));
      $abc->set_coljsonconf(array('responsivePriority' => 2,"targets" => array(12,14,15,16)));
      $abc->set_configuraciones_extra(
            array('claseOperadorLogico' => array( 'targets' => array(16), 'arrColMod' => array(16,16), 'arrValor' => array(0,0), 'arrClase' => array('text-danger','text-success'), 'arrOpLog' => array('<','>') )),
            array('confCellInputs' => array( 'tipo' => 'text', 'title' => 'Agregar', 'placeholder' => 'Agregar', 'valor' => 'Prueba' ) ),
            array('confSumatoria' => 2)
          );

      $abc->set_encabezados(array('Categoria'               => 'Categoría',
                                  'FechaIngreso'            => 'Fecha de Ingreso',
                                  'MontoBruto'              => 'Monto Bruto',
                                  'MontoGravado'            => 'Monto Gravado',
                                  'IngresosAcumulables'     => 'Ingresos Acumulables',
                                  'IngresoExcentoAnual'     => 'Ingreso Exento Anual',
                                  'IngresosGravables'       => 'Ingresos Gravables',
                                  'PrevisionSocial'         => 'Previsión Social',
                                  'ExcesoGravable'          => 'Exceso Gravable',
                                  'ExcesoGravable'          => 'Exceso Gravable',
                                  'ImpuestoPagado'          => 'Impuesto Pagado',
                                  'ImpuestoAnualCalculado'  => 'Impuesto Anual Calculado',
                                  'APagar'                  => 'A Pagar',
                                ));
      $abc->set_acciones(array('titulo'=>'Detalle del Empleado','texto'=>'','icono'=>'far fa-eye','accion'=>'det_empleado_isr_anual'));
      $output = $abc->construir();
      if( $output['vista'] ) $this->load->view($output['archivo'], $output['datos']);
      else $this->output->set_output(json_encode($output['data']));
    }
    else {
      $datos['heading'] = 'Error al consultar la información';
      $datos['message'] = 'No se recibió el parámetro esperado.';
      $this->load->view('errors/html/error_general', $datos);
    }
  }

  public function acumulado_anual_porConcepto(){
    $anio = $this->input->post('anio');

    if (!empty($anio)) {
      $credencial = $this->input->post('credencial');
      $credencial = (empty($credencial) ? '%' : $credencial);
      // $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
      $idPresupuesto = $this->input->post('idPresupuesto');
      $result = $this->mNomina->empleados_ajuste_anual($idPresupuesto,$anio,1,$credencial);

      $abc = new pjey_ABC();
      $abc->set_resultado($result);
      $abc->set_key(0,'idEmpleado','asc');

      $abc->set_defaults('filtros','copiarTbl','btnocultaColumnas');
      if ($credencial == '%') {
        $abc->set_formatoColumna(array('moneda' => array(9,10,11,12,13,14,15,16,17,18), 'visible' => array(1,2,3,5,6,8,9,10,11,12,13,14,15,16,17,18)));
        $abc->set_ocultos(array(0,2,4,7));
        $abc->set_coljsonconf(array('responsivePriority' => 2,"targets" => array(16,17,18)));
        $abc->set_configuraciones_extra( array('rowGroup' => 'Empleado') );
      }
      else {
        $abc->set_formatoColumna(array('moneda' => array(9,10,11),'visible' => array(1,2,3,5,6,8,9,10,11,12,13)));
        $abc->set_configuraciones_extra( array('rowGroup' => 'Empleado'),
                                         array('modCell'  => array('targets' => array(12,13),
                                                                   'arrColMod' => array(12,12,12,13,13), 'arrayBusca' => array('1','0','3','0001','0002'), 'arrayMod' => array('SÍ','NO','PS','TSJ','CJ')
                                                                  )));
      }

      $abc->set_configuraciones(array('titulopanel' => 'Acumulado anual, por concepto, del año '.$anio));

      $abc->set_encabezados(array('Categoria'               => 'Categoría',
                                  'FechaIngreso'            => 'Fecha de Ingreso',
                                  'MontoBruto'              => 'Monto Bruto',
                                  'MontoGravadoPorConcepto' => 'Monto Gravado por Concepto',
                                  'IngresosAcumulables'     => 'Ingresos Acumulables',
                                  'ImpuestoAnualCalculado'  => 'Impuesto Anual Calculado',
                                  'ImpuestoPagado'          => 'Impuesto Pagado',
                                  'IngresoExcentoAnual'     => 'Ingreso Excento Anual',
                                  'IngresosGravables'       => 'Ingresos Gravables',
                                  'PrevisionSocial'         => 'Previsión Social',
                                  'ExcesoGravable'          => 'Exceso Gravable',
                                  'APagar'                  => 'A Pagar',
                                  'EsPercepcion'            => 'Es Percepción',
                                  'MontoExcentoPorConcepto' => 'Monto Excento Por Concepto'
                                ));

      $output = $abc->construir();
      if ($output['vista']) $this->load->view($output['archivo'], $output['datos']);
      else $this->output->set_output(json_encode($output['data']));
    }
    else {
      $datos['heading'] = 'Error al consultar la información';
      $datos['message'] = 'No se recibió el parámetro esperado.';
      $this->load->view('errors/html/error_general', $datos);
    }
  }

  public function genera_acumulado_anual(){
    $anio = $this->input->post('anio');
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');

    if (!empty($anio) && !empty($idPresupuesto)) {
      $result = $this->mNomina->genera_acumulado_anual($anio,$idPresupuesto);

      if ($result === false) $data = array('status' => FALSE, 'message' => 'Error al generar el acumulado anual de impuestos.');
      else {
        if ($result == 0) $data = array('status' => FALSE, 'message' => 'No se generó el acumulado anual de imupuestos. No existe información para el año proporcionado.');
        else $data = array('status' => TRUE, 'message' => "El acumulado anual de impuestos se generó correctamente.", 'anio' => $anio);
      }
    }
    else $data = array('status' => FALSE, 'message' => 'Error al intentar generar el acumulado anual de impuestos. No se recibió el parámetro esperado.');
    $this->output->set_output(json_encode($data));
  }

  public function carga_det_empleado_isr_anual(){
    $idEmpleado = $this->input->post('idEmpleado');
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
    $anio = $this->input->post('anio');
    $anio = (empty($anio) ? (date("Y", strtotime("-1 year"))) : $anio );
    $empleado = $this->mNomina->empleados_ajuste_anual($idPresupuesto,$anio,1,$idEmpleado);
    $datos['empleado'] = $empleado;
    $datos['anio'] = $anio;
    $this->load->view('nomina/det_empleado_isr_anual',$datos);
  }

  public function guarda_ajuste_impuesto_empleado(){
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
    $idEmpleado = $this->input->post('idEmpleado');
    $anio = $this->input->post('anio');
    $idConcepto = $this->input->post('idConcepto');
    $monto = $this->input->post('monto');

    $result = $this->mNomina->guarda_ajuste_impuesto_empleado($anio,$idEmpleado,$idConcepto,$monto,$idPresupuesto);

    if ($result != false) {
      $empleado = $this->mNomina->empleados_ajuste_anual($idPresupuesto,$anio,1,$idEmpleado);
      $data = array('status' => TRUE, 'message' => 'Concepto actualizado correctamente.', 'empleado' => $empleado);
    }
    else $data = array('status' => FALSE, 'message' => 'Error al intentar actualizar el concepto.');

    $this->output->set_output(json_encode($data));
  }

	public function generar_txt_SAT()
	{
		$idPeriodoPago = $this->input->post('quincena');
    $idTipoNomina = $this->input->post('idTipoNomina');
    $credencial = $this->input->post('ts_credencial');
    $credencial = (empty($credencial) ? 0 : $credencial);
    $txtPeriodo = $this->input->post('txtPeriodo');
    $txtTipoNomina = $this->input->post('txtTipoNomina');
		$empleados = $this->input->post('empleados');
		$empleados = (empty($empleados) ? '' : json_decode($empleados,true));
		$empleados = json_decode(json_encode($empleados));
		$this->procesar_txt_SAT($idPeriodoPago,$idTipoNomina,$credencial,$txtPeriodo,$txtTipoNomina,$empleados);
	}

	/**
	 * Genera archivo txt para subir
	 * @method generar_txt_SAT
	 * @author alopez
	 * @date
	 * @return [type]          [description]
	 */
	private function procesar_txt_SAT($idPeriodoPago,$idTipoNomina,$credencial,$txtPeriodo,$txtTipoNomina,$empleados){
    set_time_limit(0);
    $this->load->helper('file');
    $fecha = date('Ymd');

    if (!empty($idPeriodoPago) && !empty($idTipoNomina)) {
			if (empty($empleados)) $empleados = $this->mNomina->generar_txt_SAT($idPeriodoPago,$idTipoNomina,$credencial);
      if (!empty($empleados)) {
        $archivo = $txtPeriodo.'_'.$txtTipoNomina.'_'.(empty($credencial) ? '' : $credencial.'_').$fecha.'.txt';
        $filepath = APPPATH . 'third_party/txtSAT/'.$archivo;
        $cadena = '';
        $cadenaper = '';
        $cadenaded = '';
        $cadenaop1 = '';
        $cadenaop2 = '';
        $cadenaos = '';
				$cadenacomp = '';
        $cadenaorigen = '';
        $cadenaind = '';
				$contOP = 0; //contador de otros pagos
        $aux = '';
        $filas = 0;
        foreach ($empleados as $row) {
          $cadena .= '|';
          foreach($row as $key => $val) {
            switch ($key) {
              // case 'Riesgo':
              //   $cadena .= trim($val).'|||||||';
              //   break;
              // case 'PAGO':
              //   $cadena .= trim($val).'|||';
              //   break;
              // case 'dias':
              //   $cadena .= trim($val).'||';
              //   break;
              case 'numerocuenta':
                // if( empty(trim($val)) ) $cadena .= '||';
                // else $cadena .= FormatoFolio(trim($val),11).'|';
                $cadena .= (empty($val) ? '' : FormatoFolio(trim($val),11)).'|';
                break;
              default:
                if ($key == 'RFC' || $key == 'CURP' || $key == 'IMSS' || $key == 'Credencial' || $key == 'NombreEmpl') $cadena .= trim($val).'|';
								elseif ($key == 'SALARIO BASE' || $key == 'SALARIO INTEGRADO') $cadena .= DecimalMoneda((float)trim($val),false).'|';
								else $cadena .= (strtotime($val) !== false ? trim($val) : trim(rtrim($val, "0"))).'|'; //(is_numeric($val) ? trim(DecimalMoneda($val,false)) : trim($val) ) .'|';
                break;
            }
          }
          $empleado = $row->Credencial;
          $conceptos = $this->mNomina->obtener_conceptos_empleado($idPeriodoPago,$idTipoNomina,$empleado,$row->numerocuenta);
          foreach ($conceptos as $rowC) {
            switch ($rowC->TipoConcepto) {
              case 'PER': //percepción
                $cadenaper .= $rowC->TIPO . '|' . (empty($rowC->claveSat) ? '' : FormatoFolio($rowC->claveSat,3)) . '|' . FormatoFolio($rowC->id,3) . '|' . $rowC->Descripcion . '|' .
                              DecimalMoneda((float)$rowC->Gravado,false) .'|'.DecimalMoneda((float)$rowC->Exento,false).'|';
                break;
              case 'DED': //deducción
                $cadenaded .= $rowC->TIPO . '|' . (empty($rowC->claveSat) ? '' : FormatoFolio($rowC->claveSat,3)) . '|' . FormatoFolio($rowC->id,3) . '|' . $rowC->Descripcion . '|' .
                              DecimalMoneda(((float)$rowC->Gravado + (float)$rowC->Exento),false) . '|';
                break;
              case 'OP': //otros pagos
                if ($rowC->colTipoConcepto == 'OS') {
									$contOP = $contOP + 1;
                  $cadenaos .= 'SUBSIDIO|'.$contOP.'|' . DecimalMoneda(((float)$rowC->Gravado + (float)$rowC->Exento),false) . '|';
								}
								elseif ($rowC->colTipoConcepto == 'O3') { //saldo a favor por compensación
									$contOP = $contOP + 1;
									$anio = (date('m') == 11 ? date('Y') : date('Y') - 1);
									$montoPagado = $this->mNomina->obtener_remanente_afavor($empleado,date('Y'),$idPeriodoPago);
									$montoPagado = (empty($montoPagado) ? 0 : $montoPagado->MontoPagado);
									$montoTotal = (empty($this->mNomina->obtener_compensacion_total($empleado,$anio)->Monto) ? 0 : $this->mNomina->obtener_compensacion_total($empleado,$anio)->Monto);
									$montoFaltante = (((float)$rowC->Gravado + (float)$rowC->Exento) + ($montoTotal - $montoPagado));
									$cadenacomp .= 'COMPENSACION|'.$contOP.'|' . DecimalMoneda($montoFaltante,false) .'|'.$anio.'|'.DecimalMoneda(($montoTotal - $montoPagado),false).'|';
									$cadenaop1 .= $rowC->TIPO . '|' . (empty($rowC->claveSat) ? '' : FormatoFolio($rowC->claveSat,3)) . '|' . FormatoFolio($rowC->id,3) . '|ISR a Compensar|' .
                  DecimalMoneda(((float)$rowC->Gravado + (float)$rowC->Exento),false) . '|';
								}
                elseif ($rowC->colTipoConcepto == 'O1') {
                  $cadenaop1 .= $rowC->TIPO . '|' . (empty($rowC->claveSat) ? '' : FormatoFolio($rowC->claveSat,3)) . '|' . FormatoFolio($rowC->id,3) . '|' . $rowC->Descripcion . '|' .
                  DecimalMoneda(((float)$rowC->Gravado + (float)$rowC->Exento),false) . '|';
                }
                else {
                  $cadenaop1 .= $rowC->TIPO . '|' . (empty($rowC->claveSat) ? '' : FormatoFolio($rowC->claveSat,3)) . '|' . FormatoFolio($rowC->id,3) . '|' . $rowC->Descripcion . '|' .
                  DecimalMoneda(((float)$rowC->Gravado + (float)$rowC->Exento),false) . '|';
                }
                break;
              case 'ORIGEN': //origen
                $cadenaorigen .= $rowC->Impuesto . '|' . (empty($rowC->claveSat) ? '' : $rowC->claveSat) . '|||';
                break;
              case 'INDEM': //INDEMNIZACION,TOTAL PAGADO,N.º AÑOS SERVICIO,ULTIMO SUELDO,INGRESOS ACUMULABLES,INGRESOS NO ACUMULABLES
                $cadenaind .= $rowC->TIPO . '|' . DecimalMoneda((float)$rowC->Gravado,false) . '|' . (empty($rowC->claveSat) ? '' : FormatoFolio($rowC->claveSat,3)) . '|' .
                              DecimalMoneda((float)$rowC->Exento,false) . '|' . $rowC->Descripcion . '|';
                break;
              default:
                break;
            }
          }
          // $aux = $cadenaper.$cadenaded.$cadenaop1.$cadenaop2.$cadenaorigen.$cadenaind.$cadenaos.$cadenacomp.'|||||';
					$aux = $cadenaper.$cadenaded.$cadenaop1.$cadenaop2.$cadenaos.$cadenacomp.$cadenaorigen.$cadenaind.'|||||';
          $cadena .= $aux;
          $cadena .= PHP_EOL;  //salto de línea "\n"
          $cadenaper = '';
          $cadenaded = '';
          $cadenaop1 = '';
          $cadenaop2 = '';
          $cadenaos = '';
          $cadenaorigen = '';
          $cadenaind = '';
					$cadenacomp = '';
					$contOP = 0;
          $aux = '';
        }
        if (!write_file($filepath, $cadena, 'w')) $data = array('status' => FALSE, 'message' => 'Error al guardar el archivo. Intente de nuevo más tarde.');
        else $data = array('status' => TRUE, 'message' => 'Archivo generado exitosamente.', 'archivo' => $archivo);
      }
      else $data = array('status' => FALSE, 'message' => 'Error al intentar generar el archivo. No se obtuvo información para el empleado solicitado.');
    }
    else $data = array('status' => FALSE, 'message' => 'Error al intentar generar el archivo. No se recibió el parámetro esperado.');

    $this->output->set_output(json_encode($data));
  }

  public function vista_previa_txt_SAT(){
    set_time_limit(0);
    $idPeriodoPago = $this->input->post('idPeriodoPago');
    $idTipoNomina = $this->input->post('idTipoNomina');
    $txtPeriodo = $this->input->post('txtPeriodo');
    $txtTipoNomina = $this->input->post('txtTipoNomina');
    $fecha = date('d/m/Y');

    if (!empty($idPeriodoPago) && !empty($idTipoNomina)) {
      $credencial = $this->input->post('credencial');
      $credencial = (empty($credencial) ? 0 : $credencial);

      $idPresupuesto = $this->input->post('idPresupuesto');
      $result = $this->mNomina->generar_txt_SAT($idPeriodoPago,$idTipoNomina,$credencial);

      $abc = new pjey_ABC();
      $abc->set_resultado($result);
      $abc->set_key(2,'Credencial','asc');
      $abc->set_defaults('filtros','copiarTbl','btnocultaColumnas','cargando','exportarPDF');
      $abc->set_formatoColumna(array('moneda' => array(14,15)));
      $abc->set_configuraciones(array('titulopanel' => $txtPeriodo.' - '.$txtTipoNomina.' - '.(empty($credencial) ? '' : $credencial.' - ').$fecha));
      $abc->set_encabezados(array('NombreEmpl'    => 'Nombre',
                                  'numerocuenta'  => 'Número de Cuenta',
                                  'FechaEmision'  => 'Fecha de Emisión',
                                  'fechapago'     => 'Fecha de Pago',
                                  'FechaIni'      => 'Fecha Inicial',
                                  'FechaFin'      => 'Fecha Final',
                                  'dias'          => 'Días',
                                  'antiguedad'    => 'Antigüedad',
                                  'Regimen'       => 'Régimen',
                                  'TIPO NOMINA'   => 'Tipo Nómina',
                                  'TIPO CONTRATO' => 'Tipo Contrato'
                                ));

      $output = $abc->construir();
      if( $output['vista'] ) $this->load->view($output['archivo'], $output['datos']);
      else $this->output->set_output(json_encode($output['data']));
    }
    else {
      $datos['heading'] = 'Error al consultar la información';
      $datos['message'] = 'No se recibió el parámetro esperado.';
      $this->load->view('errors/html/error_general', $datos);
    }
  }

  public function descargar_txtSAT(){
    $archivo = $this->input->post('archivo');
    if (!empty($archivo)) {
      $filepath = APPPATH . 'third_party/txtSAT/'.$archivo;
      header("Content-Type: text/plain");
      header("Content-Disposition: attachment; filename=".preg_replace('/\s+/', '_', $archivo));
      readfile($filepath);
			unlink($filepath);
    }
    else die("Error al leer el archivo.");
  }

  public function carga_det_impuestos(){
    $idEmpleado = $this->input->post("idEmpleado");
    $idPeriodoPago = $this->param_lib->get_parametro('idPeriodoPago');
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
    $impuestos = $this->mNomina->busca_det_impuestos_empleado($idEmpleado,$idPeriodoPago);
    $datos['impuestos'] = $impuestos;

    $this->load->view("nomina/det_impuestos_calculo",$datos);
  }

  public function carga_det_conceptos(){
    $idEmpleado = $this->input->post("idEmpleado");
    $idPeriodoPago = $this->param_lib->get_parametro('idPeriodoPago');
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');

    $conceptos = $this->mNomina->busca_conf_conceptos_empleado($idEmpleado,$idPeriodoPago);
    $datos['conceptos'] = $conceptos;

    $this->load->view("nomina/conf_conceptos_calculo",$datos);
  }

  public function empleados_conf_parametros(){
    $fechaini = $this->input->post('fechaini');
    $fechafin = $this->input->post('fechafin');
    $base = $this->input->post('opt_contrato');
    $dias = $this->input->post('diaslab');
    $idTipoNomina = $this->input->post('cf_tiponomina');
    $idConcepto = $this->input->post('cf_concepto');
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
		set_time_limit(0);
    $empleados = $this->mNomina->empleados_activos_porParametros($fechaini,$fechafin,$base,$dias,$idTipoNomina,$idConcepto,$idPresupuesto);

    $data = array('status' => TRUE, 'empleados' => $empleados);
    $this->output->set_output(json_encode($data));
  }

  /**
   * Actualiza las fechas de la tabla hist_Nomina
   * @method actualiza_hist_nomina
   * @author alopez
   * @return [type]                [description]
   */
  public function actualiza_hist_nomina()
  {
		$idNomina = $this->param_lib->get_parametro('idPeriodoPago');
		$fIni = $this->input->post('fechaini_periodo');
		$fFin = $this->input->post('fechafin_periodo');
		$fPago = $this->input->post('fechapago_periodo');
		$fDispersion = $this->input->post('fechadisp_periodo');
		$datos = array($idNomina,$fIni,$fFin,0,$fPago,$fDispersion);
		$actualiza = $this->mNomina->actualiza_fechas_periodo($datos);

		if (!empty($actualiza)){
			$this->param_lib->inicializa_parametros_sistema();
			$bitacora = new Bitacora();
			$bitacora->insertar($this->router->fetch_class().'/'.__FUNCTION__, 'Actualizando fechas del período.');
			$data = array('status' => TRUE, 'message' => 'Las Fechas se actualizaron correctamente');
		}
    else $data = array('status' => FALSE, 'message' => 'Error al intentar actualizar las fechas.');

		$this->output->set_output(json_encode($data));
  }

	//GSantos, 2021.12.27
  public function trae_datos_concepto(){
    $idconcepto = $this->input->post('idConcepto');
    $claverecibo = '';
    $esISSTEY = false;
    $antesimp = false;
    $tieneparteexe = false;
    $parteexe = '';
    $claveplancuentas = '';
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
    $concepto = $this->mCat->trae_cat_conceptosXId($idconcepto, $idPresupuesto);
    $acreedores = '';

    $cveEntidad = intval($idPresupuesto);
    $anio = date('Y');

    if (!empty($concepto)) {
      $claverecibo = $concepto->ClaveRecibo;
      $antesimp = $concepto->AntesDeImp;
      $tieneparteexe = $concepto->TieneParteExcenta;
      $parteexe = $concepto->DiasSalMinParteExc;
      $claveplancuentas = $concepto->ClavePlanCuentas;

      $catISSTEY = $this->mCat->trae_cat_ISSTEYXId($idconcepto);

      if (!empty($catISSTEY)) {
        	$esISSTEY = true;
      }

      if ($claveplancuentas <> '') {
  	    $acreedores = $this->select_lib->acreedores_arcon($cveEntidad, $anio, $claveplancuentas);
      }

      $datosconcepto['claverecibo'] = $claverecibo;
      $datosconcepto['antesimp'] = $antesimp;
      $datosconcepto['tieneparteexe'] = $tieneparteexe;
      $datosconcepto['parteexe'] = $parteexe;
      $datosconcepto['esISSTEY'] = $esISSTEY;
      $datosconcepto['claveplancuentas'] = $claveplancuentas;
      $datosconcepto['catacreedores'] = $acreedores;

      $data = array('status' => TRUE, 'datosconcepto' => $datosconcepto);
    }
    else {
      $data = array('status' => false, 'error' => 'Problemas con los datos del concepto','message' =>'Error al intentar validar el concepto. No se recibió el parámetro esperado.');
    }

    $this->output->set_output(json_encode($data));
  }

	public function correccion_detalle()
	{
		//PENDIENTE: Modificar la consulta del json (sp_detallenomina) para obtener los datos faltantes
		//PENDIENTE: agregar botón para agregar y editar monto
		//PENDIENTE: funcionalidad de guardado/eliminación de conceptos
		$idEmpleado = $this->input->post('idEmpleado');
		$idPeriodoPago = $this->input->post('quincena');

		if (!empty($idEmpleado) && !empty($idPeriodoPago)){
			$json = $this->input->post('json');
			// $datosEmpleado = $this->mEmpleado->traer_empleado_por_id($idEmpleado);
			// $detalle = $this->mNomina->detalle_nomina_empleado($idEmpleado,$idPeriodoPago);
			if (!empty($json)) {
				$idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
				$datos['categorias'] = $this->select_lib->generico('categorias',$json[0]['CategoriaId'],true,true);
				$datos['categoria_diapago'] = $this->select_lib->generico('categorias',$json[0]['idCategoriaDiaPago'],true,true);
				$datos['dependencias'] = $this->select_lib->generico('dependencias',$json[0]['ID_Dependencia'],true,true);
				$datos['departamentos'] = $this->select_lib->generico('departamentos',$json[0]['Depto'],true,true,'codigo','codigo','descripcion');
				$datos['grupoimpresion'] = $this->select_lib->generico('grupoimpresion',trim($json[0]['GrupoImpresion']),true,true,'GrupoImpId','GrupoImpId');
				$datos['tipopago'] = $this->select_lib->generico('tipopago',$json[0]['Enomina'],true,true);
        $datos['cattiponomina'] = $this->select_lib->generico('tipo_nomina',0,true,true);
				$datos['catconceptos'] = $this->select_lib->conceptos(5,0,0,0);
				$datos['emisores'] = $this->select_lib->emisores($idPresupuesto,$json[0]['EmisorID']);
				$datos['detalle'] = $json[0];
				$respuesta = array('status'=>TRUE, 'html' => $this->load->view('nomina/correccion_detalle',$datos,true));
			}
			else $respuesta = array('status'=> FALSE,'message' => 'No se encontró el empleado con la Credencial proporcionada ('.$datosEmpleado["Credencial"].').');
		}
    else $respuesta = array('status'=> FALSE,'message' => 'Error al obtener la información del empleado. No se recibió el parámetro esperado.');

    $this->output->set_output(json_encode($respuesta));
	}

	public function abc_correccion_det_nomina()
	{
		$accion = $this->input->post('accion');
		$abc = new pjey_ABC();
		if ($accion === 'listar'){
			$idEmpleado = $this->input->post('idEmpleado');
			$idPeriodoPago = $this->input->post('PeriodoPagoID');
			$abc->set_table('det_Nomina');
			$abc->select("ca.Descripcion as CategoriaActual,de.Descripcion AS Dependencia, cc.Descripcion as Concepto,ctn.Descripcion as TipoNomina");
			$abc->select("SUM(det_Nomina.Monto) AS Monto,det_Nomina.MontoGravado,det_Nomina.MontoExento,det_Nomina.GRAVADO");
			$abc->select("CONVERT(smallint, cc.EsPercepcion) AS EsPercepcion, cc.TipoConcepto, idreg as idDetNomina,det_Nomina.id_concepto,det_Nomina.Id_Empleado,det_Nomina.TipoNominaId");
			$abc->set_relacion_n_n(array(
				array('det_EmpleadosNomina en' => 'det_Nomina.Id_Nomina = en.Id_Nomina AND det_Nomina.Id_Empleado = en.Id_Empleado'),
				array('cat_Categorias ca' => 'en.Categoria_diaPago = ca.Id'),
				array('cat_Dependencias de' => 'en.DependenciaId = de.Id'),
				array('cat_Conceptos cc' => 'det_Nomina.Id_Concepto = cc.Id'),
				array('cat_TipoNomina ctn' => 'det_Nomina.TipoNominaId = ctn.Id'),
			));
			$abc->where(array('det_Nomina.Id_Empleado' => $idEmpleado, 'det_Nomina.Id_Nomina' => $idPeriodoPago));
			$abc->group_by(array('det_Nomina.TipoNominaId','ctn.Descripcion','ca.Descripcion','de.Descripcion','cc.Descripcion','det_Nomina.MontoGravado','det_Nomina.MontoExento',
													 'det_Nomina.GRAVADO','cc.EsPercepcion','cc.TipoConcepto','idreg','det_Nomina.id_concepto','det_Nomina.Id_Empleado'));
		}
		else {
			$_POST['Proceso'] = 'abc_correccion_det_nomina';
			$_POST['IP'] = $this->session->IP;
			$_POST['Usuario'] = LimpiaCadena($this->session->UsuarioNT);
			$proceso = ($accion === 'guardar' ? 'p_admarh_insConceptoNominaCerrada' : 'p_admarh_delConceptoNominaCerrada');
			unset($_POST['accion']);
			$abc->set_operacion('exec',$proceso);
		}
		if ($accion === 'guardar') $abc->set_validation_conf('correccion_detalle_nomina');
		$abc->set_defaults('muestra_panel','filtros','acciones');
		$abc->set_formatoColumna(array('visible' => array(0,1,2,3,4,5,6,7,8),'moneda' => array(4,5,6)));
		$abc->set_encabezados(array('CategoriaActual'	=> 'Categoría',
																'EsPercepcion'		=> 'Percepción',
																'MontoGravado'		=> 'Monto Gravado',
																'MontoExento'			=> 'Monto Exento',
																'GRAVADO'					=> 'Gravado',
																'TipoNomina'			=> 'Tipo Nómina'
															));
		$abc->set_dom('<"row"<"col-sm-5"B><"col-sm-7"fr>>t<"row">');
		$abc->set_cantResultados(-1);
		$abc->set_menulength([[10, 25, -1],[10, 25, 'Todos']]);
		$abc->set_configuraciones_extra(
																		array('drawCallback'	=> 'genera_sumatoria_detalle'),
																		array('idTbl' 				=> 'tblCorrecionDetalle'),
																		array('rowGroup' 			=> 'TipoNomina'),
																		array('modCell'  			=> array('targets' => array(7,8),
																																	 'arrColMod' => array(7,8), 'arrayBusca' => array('1','0'), 'arrayMod' => array('SÍ','NO')
																	 )));
		$abc->set_acciones(
			array('titulo'=>'Eliminar concepto', 'texto' => '', 'icono' => 'far fa-trash-alt','class' => 'btn-danger', 'accion' => 'eliminar_concepto_det_nomina')
		);
		$output = $abc->construir();

    if ($accion == 'listar') $this->load->view($output['archivo'], $output['datos']);
		else $this->output->set_output(json_encode($output['data']));
	}

	public function genera_tabla_baja($movimiento)
	{
		if (empty($movimiento['error'])) {
			$abc = new pjey_ABC();
			$abc->set_resultado($movimiento);
			$abc->set_defaults('copiarTbl','cargando','muestra_panel');
			$abc->set_configuraciones_extra(array('idTbl' => 'tblMovimientosBaja'));
			$abc->set_dom('t');
	    $abc->set_formatoColumna(array('fecha' => array(2,3,6),'visible' => array(0,2,3,6,7,9)));
			$abc->set_encabezados(array(
																	'IdMovimiento'		=> 'Folio',
																	'FechaInicio'	=> 'Fecha Inicio',
																	'FechaTerminacion'	=> 'Fecha Terminación',
																	'FechaMovimiento' => 'FechaMovimiento',
																	'TipoMovimiento' => 'Tipo'
																));
			$output = $abc->construir();
			$html = $this->load->view($output['archivo'], $output['datos'],TRUE);
		}
		else {
			$datos['heading'] = 'Error al consultar la información';
			$datos['message'] = 'Ocurrió un error al intentar obtener la información del empleado.';
			$html = $this->load->view('errors/html/error_general', $datos, true);
		}
		return $html;
	}

	public function guarda_uuid_empleado()
	{
		$idEmpleado = $this->input->post('idEmpleado');
		$idNomina = $this->input->post('idNomina');
		$idTipoNomina = $this->input->post('idTipoNomina');
		$uuid = $this->input->post('uuid');
		$serie = $this->input->post('serie');
		$fEmision = $this->input->post('fEmision');
		if (!empty($uuid)) {
			$datos = array(
				'IdNomina'			=> $idNomina,
				'IdEmpleado' 		=> $idEmpleado,
				'TipoNominaId'	=> $idTipoNomina,
				'Serie'					=> $serie,
				'UUID'					=> $uuid,
				'FechaEmision'  => $fEmision,
				'Usuario'				=> LimpiaCadena($this->session->UsuarioNT)
			);
			$guardar = $this->mNomina->registra_uuid_empleado($datos);

			if (!empty($guardar)) $data = array('status' => TRUE, 'message' => 'UUID guardado con éxito.');
      else $data = array('status' => FALSE, 'message' => 'Error al intentar guardar el UUID.');

			$bitacora = new Bitacora();
			$bitacora->insertar($this->router->fetch_class().'/'.__FUNCTION__, 'Guardando UUID de empleado. Datos: '.json_encode($datos));
		}
		else $data = array('status' => FALSE, 'message' => 'Error al intentar configurar el concepto. No se recibió el parámetro esperado.');
		$this->output->set_output(json_encode($data));
	}

	public function confirmar_nomina()
	{
		$idTipoNomina = $this->input->post('idTipoNomina');
		if (!empty($idTipoNomina)) {
			$idPeriodoPago = $this->param_lib->get_parametro('idPeriodoPago');
	    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
			$datos = array('TipoNominaID' => $idTipoNomina, 'PeriodoID' => $idPeriodoPago);
			$confirmar = $this->mNomina->confirmar_tipo_nomina($datos,$idPresupuesto);
			if ($confirmar) $data = array('status' => TRUE, 'message' => 'Nómina confirmada correctamente.');
			else $data = array('status' => FALSE, 'message' => 'Ocurrió un error al intentar confirmar la nómina.');

			$bitacora = new Bitacora();
			$bitacora->insertar($this->router->fetch_class().'/'.__FUNCTION__, 'Confirmando nómina. Datos: '.json_encode($datos));
		}
		else $data = array('status' => FALSE, 'message' => 'Error al intentar confirmar la nómina. No se recibió el parámetro esperado.');
		$this->output->set_output(json_encode($data));
	}

	public function cerrar_periodo()
	{
	  $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
		$idPeriodoPago = $this->param_lib->get_parametro('idPeriodoPago');
		$nominasAbiertas = $this->mCalculos->trae_nominas_abiertas($idPeriodoPago,array('Confirmada' => 0));

		if (empty($nominasAbiertas)) {
    	$resctrlProceso = $this->mCalculos->busca_controlproceso_nomina($idPeriodoPago);

			if (!empty($resctrlProceso->RegsIniciales) && !empty($resctrlProceso->ConceptAntesImpu) && !empty($resctrlProceso->Impuestos)	&& !empty($resctrlProceso->ConceptDespImpu) && !empty($resctrlProceso->ISSTEY)) {
				$datosCierre = array($idPeriodoPago,$idPresupuesto);
				$cierra_nomina = $this->mNomina->cerrar_periodo($datosCierre);
				if (!empty($cierra_nomina)) {
					if (empty($cierra_nomina->Error)){
						$this->mNomina->actualiza_antiguedad($idPeriodoPago);
						$this->param_lib->set_parametro('idPeriodoPago',0);
						$data = array('status' => TRUE, 'message' => (empty($cierra_nomina->Mensaje) ? 'El período fue cerrado correctamente.' :  $cierra_nomina->Mensaje));
					}
					else $data = array('status' => FALSE, 'message' => (empty($cierra_nomina->Mensaje) ? 'Ocurrió un error al intentar cerrar el período.' :  $cierra_nomina->Mensaje));
					$bitacora = new Bitacora();
					$bitacora->insertar($this->router->fetch_class().'/'.__FUNCTION__, 'Cerrando quincena, idPeriodoPago: '.$idPeriodoPago.'. Resultado: '.$data['message']);
				}
				else $data = array('status' => FALSE, 'message' => 'Ocurrió un error al intentar cerrar el período.');
			}
			else $data = array('status' => FALSE, 'message' => 'El cálculo no ha sido completamente concluido, por lo tanto no se puede confirmar.');
		}
		else $data = array('status' => FALSE, 'message' => 'No es posible cerrar el período. No se han cerrado todas las nóminas.');
		$this->output->set_output(json_encode($data));
	}

	public function abrir_periodo()
	{
		$fechaIni = $this->input->post('fechaIni');
		$fechaFin = $this->input->post('fechaFin');
		$fechaPago = $this->input->post('fechaPago');
		$fechaDispersion = $this->input->post('fechaDispersion');
	  $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
		$idPeriodoPago = $this->param_lib->get_parametro('idPeriodoPago');
		if (empty($idPeriodoPago)) {
			$datos = array($fechaIni,$fechaFin,$fechaPago,$fechaDispersion,$idPresupuesto);
			$abre = $this->mNomina->abrir_periodo($datos);
			if (!empty($abre)) {
				$idPeriodoNuevo = $abre->Resultado;
				if (empty($abre->Error) && !empty($idPeriodoNuevo)){
					$this->param_lib->inicializa_parametros_sistema();
					$data = array('status' => TRUE, 'message' => (empty($abre->Mensaje) ? 'El período fue abierto correctamente.' : $abre->Mensaje), 'idPeriodoPago' => $idPeriodoNuevo);
				}
				else $data = array('status' => FALSE, 'message' => (empty($abre->Mensaje) ? 'Ocurrió un error al intentar cerrar el período.' :  $abre->Mensaje));
				$bitacora = new Bitacora();
				$bitacora->insertar($this->router->fetch_class().'/'.__FUNCTION__, 'Abriendo quincena, idPeriodoPago: '.$idPeriodoNuevo.'. Resultado: '.$data['message']);
			}
			else $data = array('status' => FALSE, 'message' => 'Ocurrió un error al intentar cerrar el período.');
		}
		else $data = array('status' => FALSE, 'message' => 'No es posible abrir el período. No se ha cerrado el período anterior.');
		$this->output->set_output(json_encode($data));
	}

	public function obtener_empleados_faltas_incorrectas()
	{
		$idPeriodoPago = $this->param_lib->get_parametro('idPeriodoPago');
		$empleados = $this->mNomina->empleados_faltas_incorrectas($idPeriodoPago);
		$data = array('status'=> true, 'empleados' => $empleados);
		$this->output->set_output(json_encode($data));
	}

	public function revisar_faltas_incorrectas()
	{
		$idPeriodoPago = $this->param_lib->get_parametro('idPeriodoPago');
		$detalle = $this->mNomina->detalle_faltas_incorrectas($idPeriodoPago);
		$abc = new pjey_ABC();
		$abc->set_resultado($detalle);
		$abc->set_key(0,'Credencial','asc');
		$abc->set_defaults('cargando','muestra_panel');
		$abc->set_configuraciones_extra(array('idTbl' => 'tblFaltasIncorrectas'),array('rowGroup' => 'Empleado'));
		$abc->set_formatoColumna(array('fecha' => array(3,4),'visible' => array(0,2,3,4,5)));
		$abc->set_encabezados(array(
																'TipoChecada'		=> 'Tipo Checada',
																'FechaChecada'	=> 'Fecha Checada',
																'HoraChecada'		=> 'Hora Checada',
															));
		$output = $abc->construir();
		$datos['html'] = $this->load->view($output['archivo'], $output['datos'],TRUE);
		$this->load->view('genericos/contenido_modal',$datos);
	}

	public function obtener_conceptos_sin_calculo()
	{
		$idPeriodoPago = $this->input->post('idPeriodoPago');
		$empleados = $this->mNomina->empleados_conceptos_sin_calculo($idPeriodoPago);
		$data = array('status'=> true, 'empleados' => $empleados);
		$this->output->set_output(json_encode($data));
	}

	public function revisar_empleados_sin_calculo()
	{
		$idPeriodoPago = $this->input->post('idPeriodoPago');
		$detalle = $this->mNomina->detalle_empleados_sin_calculo($idPeriodoPago);
		$abc = new pjey_ABC();
		$abc->set_resultado($detalle);
		$abc->set_key(0,'id','asc');
		$abc->set_defaults('cargando','muestra_panel', 'acciones');
		$abc->set_formatoColumna(array('visible' => array(1,3,4,5,6), 'moneda' => array(5)));
    $abc->set_acciones(array('titulo'=>'Calcular Empleado','texto'=>'','icono'=>'fa-solid fa-calculator','accion'=>'calcular_empleado_sinpago'));
		$abc->set_configuraciones_extra(array('idTbl' => 'tblConceptosSinCalculo'),array('rowGroup' => 'Empleado'),
																		array('tituloAcciones' => 'Calcular'),
																		array('modCell'  => array('targets' => array(6),
																		'arrColMod' => array(6,6), 'arrayBusca' => array('1','0'), 'arrayMod' => array('SÍ','NO')
																	 )));

		$output = $abc->construir();
		$datos['html'] = $this->load->view($output['archivo'], $output['datos'],TRUE);
		$this->load->view('genericos/contenido_modal',$datos);
	}

	public function listar_empleados_txt()
	{
		set_time_limit(0);
    $idPeriodoPago = $this->input->post('idPeriodoPago');
    $idTipoNomina = $this->input->post('idTipoNomina');
    $txtPeriodo = $this->input->post('txtPeriodo');
    $txtTipoNomina = $this->input->post('txtTipoNomina');

    if (!empty($idPeriodoPago) && !empty($idTipoNomina)) {
      $result = $this->mNomina->generar_txt_SAT($idPeriodoPago,$idTipoNomina,0);
      $abc = new pjey_ABC();
      $abc->set_resultado($result);
      $abc->set_key(2,'Credencial','asc');
      $abc->set_defaults('cargando','exportarPDF','acciones');
      $abc->set_formatoColumna(array('visible' => array(0,1,2,8,11,)));
      $abc->set_configuraciones(array('titulopanel' => $txtPeriodo.' - '.$txtTipoNomina));
			$abc->set_configuraciones_extra(array('idTbl' => 'tblEmpleadostxtSAT'), array('checkBox' => 0),
			array('btnExtra' => array('btnGenerarEmpleadosTXT' => array('titulo'=>'Generar archivo txt','texto'=>'<i class="far fa-file-alt"></i>','action'=>'generar_txt_filtrado'))),);
			$abc->set_acciones(array('titulo'=>'Generar archivo txt','texto'=>'', 'icono'=>'far fa-file-alt','class' => 'btn-default', 'accion'=>'generar_txt_empleado'));
      $abc->set_encabezados(array('NombreEmpl'	=> 'Nombre',));
			$output = $abc->construir();
			$respuesta['html'] = $this->load->view($output['archivo'], $output['datos'], TRUE);
    }
    else {
			$respuesta['status'] = false;
			$respuesta['message'] = "Error al intentar generar los datos del reporte.";
    }
		$this->output->set_output(json_encode($respuesta));
	}

}
