<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestadores extends IIS_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('parametros_modelo','mParametros',TRUE);
    $this->load->model('nomina_modelo','mNomina');
    $this->load->model('prestadores_modelo','mPrestadores');
    $this->load->model('calculos_modelo','mCalculosN');
    $this->load->model('catalogos_modelo','mCat');
    $this->load->library('ParamSystem', NULL, 'param_lib');
    $this->load->library('Selectores_class', NULL, 'select_lib');
    $this->load->library('Calculos_Prestadores', NULL, 'calculos_lib');
		$this->load->library('pjey_ABC',NULL,'abc');
  }

  public function CargarDatos()
  {
    $datos = '';
    $this->load->view('prestadores/datos',$datos);
  }

	public function detalle()
	{
		$fechaini = $this->param_lib->get_parametro('FechaIniPeriodo');
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
    $result = $this->mNomina->BuscaNominaAbierta($fechaini,$idPresupuesto);
    $idPeriodoPago = (!empty($result) ? $result->Id : 0);
    $quincenas = $this->select_lib->historial_nomina($idPresupuesto);

    $datos['quincenas'] = $quincenas;
    $datos['idPeriodoPago'] = $idPeriodoPago;
		$this->load->view('prestadores/detalle',$datos);
	}

	public function carga_configuracion(){
		$credencial = $this->input->post('credencial');
		$credencial = FormatoFolio($credencial,5);
		$idPrestador = $this->input->post('idPrestador');
		$idPeriodoPago = $this->input->post('idPeriodoPago');
		$idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');

		if (!empty($credencial) && !empty($idPrestador) && !empty($idPeriodoPago) && !empty($credencial)) {
			$prestador = $this->mPrestadores->traer_generales_prestador($credencial);
			if (!empty($prestador)){
				$datosV['empleado'] = $prestador;
				$datosV['cattiponomina'] = $this->select_lib->generico('tipo_nomina',44,true,true);

				$datosV['catperc'] = $this->select_lib->conceptos(1,1);
				$datosV['catdeduc'] = $this->select_lib->conceptos(1,0);
				//$datosV['catacreedores'] = $this->select_lib->acreedores($idPresupuesto,$partida);
				$datosV['credencial'] = $credencial;
				$datosV['idEmpleado'] = $idPrestador;
				$datosV['idPeriodoPago'] = $idPeriodoPago;
				$datosV['EsPrestador'] = TRUE;
				$datos['vw_confEmpleado'] = $this->load->view('nomina/vw_conf_Empleado',$datosV,TRUE);
				$this->load->view('nomina/conf_perc_deduc_empleado',$datos);
			}
			else{
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

	public function trae_configuracion()
	{
		$idPrestador = $this->input->post('idPrestador');
    $idTipoNomina = $this->input->post('idTipoNomina');
		if (!empty($idPrestador) && !empty($idTipoNomina)) {
			$conf = $this->mPrestadores->trae_configuracion($idPrestador,$idTipoNomina);
			$abc = new pjey_ABC();
			$abc->set_resultado($conf);
			$abc->set_extraCondensed(true);
			$abc->set_defaults('btnborrarFiltros', 'muestra_panel', 'acciones');
			$abc->set_formatoColumna(array('visible' => array(0,4,11),'moneda' => array(4)));

			$abc->set_acciones(
	      array('titulo'=>'Editar','texto'=>'','icono'=>'fas fa-pencil-alt','accion'=>'editar_concepto'),
	      array('titulo'=>'Eliminar','texto'=>'','icono'=>'far fa-trash-alt','class' => 'btn-danger', 'accion'=>'eliminar_concepto_prestador')
	    );
			$abc->set_configuraciones_extra(array('idTbl' => 'tblConfPerDeduc'),
																			array('modCell'  => array('targets' => array(11),
                                                                 'arrColMod' => array(11,11), 'arrayBusca' => array('1','0'), 'arrayMod' => array('<span class="text-center text-success btn-icon btn-circle btn-xs"><i class="fa fa-check"></i></span>','No'))));

			$abc->set_encabezados(array('EsPercepcion'	=> 'Percepción'));
			$output = $abc->construir();
			$respuesta['html'] = $this->load->view($output['archivo'], $output['datos'], TRUE);
		}
		else {
			$datos['heading'] = 'Error al consultar la información';
			$datos['message'] = 'No se recibió el parámetro esperado.';
			$respuesta['html'] = $this->load->view('errors/html/error_general',$datos, TRUE);
		}
  	$this->output->set_output(json_encode($respuesta));
	}

	public function guardar_percepciones_deducciones()
	{
		$idTipoNomina = $this->input->post('idTipoNomina');
    $idPrestador = $this->input->post('idPrestador');
    $idConcepto = $this->input->post('idConcepto');
    $Monto = $this->input->post('cf_monto');
    $permanente = $this->input->post('chkPermanente');
    $idConfPrestador = $this->input->post('cf_idConfEmpleado');
    $idPeriodoPago = $this->input->post('idPeriodoPago');
    $claverecibo = $this->input->post('ClaveRecibo');
    $error = 0;
    $msj = "El concepto se ha configurado correctamente.";

    if (!empty($idTipoNomina) && !empty($idPrestador) && !empty($idConcepto) && !empty($Monto) && !empty($idPeriodoPago)) {
      $datos = array(
                  'Id_TipoNomina' => $idTipoNomina,
                  'Id_PrestServ' => $idPrestador,
                  'Id_Concepto' => $idConcepto,
                  'Monto' => (empty($Monto) ? 0 : $Monto),
                  'Permanente' => (empty($permanente) ? 0 : 1),
                );
      $confEmpleado = $this->mPrestadores->inserta_configuracion($datos);
			if ($confEmpleado) $data = array('status' => TRUE, 'message' => 'Configuración guardada correctamente.');
		}
    else $data = array('status' => FALSE, 'message' => 'Error al intentar guardar el concepto. No se recibió el parámetro esperado.');

    $this->output->set_output(json_encode($data));
	}

	public function carga_datos(){
		$fechaini = $this->param_lib->get_parametro('FechaIniPeriodo');
		$fechafin = $this->param_lib->get_parametro('FechaFinPeriodo');
		$credencial = $this->input->post('credencial');

		if (!empty($credencial)) {
			$credencial = FormatoFolio($credencial,5);
			$idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
			$prestador = $this->mPrestadores->traer_generales_prestador($credencial);

			if ($prestador != false) {
				if ($prestador->ProgramaId == $idPresupuesto) {
					$datos['prestador'] = $prestador;
					$datos['fechaini'] = $fechaini;
					$datos['fechafin'] = $fechafin;
					$datos['ctrlProceso'] = false;
					$datos['nominaCerrada'] = 1;
					$respuesta = array('status'=>TRUE, 'prestador' => $prestador);
					// $respuesta = array('status'=>TRUE, 'datos' => $this->load->view('nomina/detalle_nomina_empleado', $datos, TRUE), 'empleado' => $empleado);
				}
				else $respuesta = array('status'=> FALSE,'message' => 'No se encontró el prestador de servicios en el Presupuesto actual ('.$credencial.').');
			}
			else $respuesta = array('status'=> FALSE,'message' => 'No se encontró el prestador de servicios con la Credencial proporcionada ('.$credencial.').');
		}
		else $respuesta = array('status'=> FALSE,'message' => 'Error al obtener la información del prestador de servicios. No se recibió el parámetro esperado.');

		$this->output->set_output(json_encode($respuesta));
	}

	public function carga_nomina(){
		$fechaini = $this->param_lib->get_parametro('FechaIniPeriodo');
		$fechafin = $this->param_lib->get_parametro('FechaFinPeriodo');
		$credencial = $this->input->post('credencial');
		$idPeriodoPago = $this->input->post('quincena');
		$idPrestador = $this->input->post('idPrestador');
		$credencial = FormatoFolio($credencial,5);
		$nomina = $this->mPrestadores->detalle_nomina($idPrestador,$idPeriodoPago);

		$tiponomina = $this->mPrestadores->tipo_nomina($idPrestador,$idPeriodoPago);
		// if (!empty($tiponomina)) $nominasvalidas = $this->genera_nominas_validas($idPeriodoPago,$tiponomina);

		$datos['fechaini'] = $fechaini;
		$datos['fechafin'] = $fechafin;
		$datos['nomina'] = $nomina;
		$datos['tiponomina'] = $tiponomina;
		$datos['nominasvalidas'] = (empty($nominasvalidas) ? array() : $nominasvalidas);
		$datos['nominaCerrada'] = 0;
		$datos['EsPrestador'] = TRUE;
		$respuesta = array('status'=>TRUE, 'json' => '', 'datos' => $this->load->view('nomina/detalle_nomina_empleado', $datos, TRUE));
		$this->output->set_output(json_encode($respuesta));
	}

  public function carga_personales()
  {
    $credencial = $this->input->post('p_credencial');
    $idPrestador = $this->input->post('p_idPrestador');
    if (!empty($credencial) || (!empty($idPrestador))) {
      $nombre = $this->input->post('p_nombre');
      $apellido1 = $this->input->post('');
      $apellido2 = $this->input->post('');
      $datos = array(
        'id'          => $idPrestador,
        'credencial'  => $credencial,
        'nombre'      => $nombre,
        'apellido1'   => $apellido1,
        'apellido2'   => $apellido2
      );
      $prestador = $this->mPrestadores->traer_generales_prestador($credencial);
      $datos['prestador'] = $prestador;
    }
		$idDependencia = (empty($prestador) ? 0 : $prestador->Id_Dependencia);
		$idCategoria = (empty($prestador) ? 0 : $prestador->Id_Categoria);
    $datos['catdependencias'] = $this->select_lib->generico('dependencias',$idDependencia,true,true);
    $datos['catcategorias'] = $this->select_lib->generico('categorias_prestadores',$idCategoria,true,true);
    $html = $this->load->view('prestadores/personales',$datos,TRUE);
    if (!empty($html)) $data = array('status' => TRUE, 'html' => $html, 'prestador' => (empty($prestador) ? '' : $prestador));
    $this->output->set_output(json_encode($data));
  }

  public function CargaContratos()
  {
    $datos = '';
    $this->load->view('prestadores/contratos',$datos);
  }

  public function CargaPagoElectronico()
  {
    $datos = '';
    $this->load->view('prestadores/pago_electronico',$datos);
  }

  public function carga_agregar_prestador()
  {
    $datos = '';
    $this->load->view('prestadores/agregar',$datos);
  }

  public function guarda_prestador()
  {
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
    $idPrestador = $this->input->post('p_idPrestador');
    $credencial = $this->input->post('credencial');
    $nombre = $this->input->post('p_nombre');
    $apellido1 = $this->input->post('p_apellido1');
    $apellido2 = $this->input->post('p_apellido2');
    $datosPrestador = array(
      'resultado'   => 0,
      'operacion'   => (empty($idPrestador) ? 'INSERTAR' : 'MODIFICAR'),
      'id'          => $idPrestador,
      'credencial'  => $credencial,
      'nombre'      => $nombre,
      'apellido1'   => $apellido1,
      'apellido2'   => $apellido2,
      'sexo'        => '',
      'rfc'         => '',
      'imss'        => '',
      'direccion'   => '',
      'colonia'     => '',
      'telefono'    => '',
      'estadodir'   => '',
      'hijos'       => '',
      'fechanac'    => '',
      'edocivil'    => '',
      'fechaalta'   => '',
      'fechabaja'   => '',
      'lastUPD'     => '',
      'umf'         => '',
      'curp'        => '',
      'presupuesto' => $idPresupuesto,
      'disponible'  => '',
      'ciudad'      => '',
      'email'       => '',
      'turno'       => '',
      'checa'       => '',
      'estado'      => '',
    );
    $agrega = $this->mPrestadores->guarda_prestador($datosPrestador);
    if (!empty($agrega)) $data = array('status' => TRUE, 'message' => 'Prestador de Servicios guardado con éxit.', 'id' => $agrega);
    else $data = array('status' => FALSE, 'message' => 'Error al intentar guardar el Prestador de Servicios.');

    $this->output->set_output(json_encode($data));
  }

  public function busca_prestador()
  {

  }

  public function calculo(){
    $fechaini = $this->param_lib->get_parametro('FechaIniPeriodo');
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');

    if( !empty($fechaini) && !empty($idPresupuesto) ) {
      $result = $this->mNomina->BuscaNominaAbierta($fechaini,$idPresupuesto);

      if( !empty($result) ){
        $idPeriodoPago = $result->Id;
        $ctrlProceso = $this->mPrestadores->controlproceso_nomina_prestadores($idPeriodoPago);
        $quincenas = $this->mNomina->busca_historial_nomina();
        foreach ($quincenas as $item) {
          if( $item->PresupuestoId == $idPresupuesto && $item->ID == $idPeriodoPago ) $quincena = $item->Quincena;
        }

        $datos['fechainiPeriodo'] = $fechaini;
        $datos['idPeriodoPago'] = $idPeriodoPago;
        $datos['control'] = $ctrlProceso;
        $datos['quincena'] = $quincena;
        $this->load->view('prestadores/calculo',$datos);
      }
      else{
        log_message('error','No existe una nómina abierta para el período con fecha inicial: '.$fechaini.', Presupuesto: '.$idPresupuesto);
        $datos['heading'] = 'Error en la consulta';
        $datos['message'] = 'No existe una nómina abierta para el período con fecha inicial: '.$fechaini;
        $this->load->view('errors/html/error_general',$datos);
      }

    }
    else{
      $datos['heading'] = 'Error al consultar la información';
      $datos['message'] = 'No se recibió el parámetro esperado.';
      $this->load->view('errors/html/error_general', $datos);
    }

  }

  public function carga_registros_iniciales(){
    $fechaini = $this->param_lib->get_parametro('FechaIniPeriodo');
    $fechafin = $this->param_lib->get_parametro('FechaFinPeriodo');
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');

    $resNomAbierta = $this->mNomina->BuscaNominaAbierta($fechaini,$idPresupuesto);
    $idPeriodoPago = ( !empty($resNomAbierta) ? $resNomAbierta->Id : 0 );

    $resFechaAsist = $this->mPrestadores->ultimafecha_asistencias_prestadores(1,$idPeriodoPago,false);
    $ctrlProceso = $this->mPrestadores->controlproceso_nomina_prestadores($idPeriodoPago);

    $fechavalida = verificar_fechas_periodo($fechaini,$fechafin);

    $datos['fechavalida'] = $fechavalida;
    $datos['control'] = $ctrlProceso;
    $datos['ctrlasistencia'] = $resFechaAsist;
    $datos['idperiodo'] = $idPeriodoPago;
    $this->load->view('prestadores/registros_iniciales',$datos);
  }

  public function carga_calculo_conceptos(){
    $fechaini = $this->param_lib->get_parametro('FechaIniPeriodo');
    $fechafin = $this->param_lib->get_parametro('FechaFinPeriodo');
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
    $result = $this->mNomina->BuscaNominaAbierta($fechaini,$idPresupuesto);
    $idPeriodoPago = ( !empty($result) ? $result->Id : 0 );

    $ctrlProceso = $this->mPrestadores->controlproceso_nomina_prestadores($idPeriodoPago);

    $datos['control'] = $ctrlProceso;

    $this->load->view('prestadores/calculo_conceptos_prestadores', $datos);
  }

  public function trae_prestadores_regini(){
    $fechaini = $this->param_lib->get_parametro('FechaIniPeriodo');
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
    $result = $this->mNomina->BuscaNominaAbierta($fechaini,$idPresupuesto);
    $idPeriodoPago = ( !empty($result) ? $result->Id : 0 );
    $prestadores = $this->mPrestadores->trae_prestadores_regini($idPresupuesto);
    $diasProcesados = $this->mPrestadores->trae_diasproc_prestadores_regini($idPeriodoPago);

    if( !empty($diasProcesados) ){
      if ( version_compare(PHP_VERSION, '7.0', '>=') ) $diasProcesados = array_column(json_decode(json_encode($diasProcesados),true), 'dias', 'Id_PrestServ');
      else $diasProcesados = array_columna(json_decode(json_encode($diasProcesados),true), 'dias', 'Id_PrestServ');
    }
    else $diasProcesados = 0;

    $ctrlProceso = $this->mPrestadores->controlproceso_nomina_prestadores($idPeriodoPago);
    $data = array('status' => TRUE, 'prestadores' => $prestadores, 'diasprocesados' => $diasProcesados, 'ctrlProceso' => $ctrlProceso);
    $this->output->set_output(json_encode($data));
  }

  public function trae_prestadores_calculo(){
    $fechaini = $this->param_lib->get_parametro('FechaIniPeriodo');
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
    $result = $this->mNomina->BuscaNominaAbierta($fechaini,$idPresupuesto);
    $idPeriodoPago = ( !empty($result) ? $result->Id : 0 );
    $array_procesados = array();

    $prestadores = $this->mPrestadores->trae_prestadores_gennomina($idPeriodoPago);
    $procesados = $this->mPrestadores->trae_prestadores_en_nomina($idPeriodoPago);

    if (!empty($prestadores)) {
      if (!empty($procesados)){
        foreach ($procesados as $item) {
          array_push($array_procesados,$item->Id_PrestServ);
        }
      }

      $ctrlProceso = $this->mPrestadores->controlproceso_nomina_prestadores($idPeriodoPago);
      $data = array('status' => TRUE, 'prestadores' => $prestadores, 'procesados' => $array_procesados, 'ctrlProceso' => $ctrlProceso);
    }
    else $data = array('status' => FALSE, 'message' => 'No se encontraron prestadores para complementar el cálculo.' );

    $this->output->set_output(json_encode($data));
  }

  public function generar_regini_prestadores(){
    $this->benchmark->mark('inicia_regini_prest');

    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
    $fechaini = $this->input->post("fechaini");
    $fechainiParam = $this->param_lib->get_parametro('FechaIniPeriodo');
    $fechafin = $this->input->post("fechafin");
    $todos = $this->input->post("todos");
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

    $prestadoresRegIni = $this->mPrestadores->trae_prestadores_regini($idPresupuesto);

    if (!empty($prestadoresRegIni)) {
      try{
        set_time_limit(0);
        foreach ($prestadoresRegIni as $item) {
          $error = false;
          $idPrestador = $item->Id;
          if (version_compare(PHP_VERSION, '7.0', '>=')) $generar = array_search($idPrestador, array_column($registros, '0'));
          else $generar = array_search($idPrestador, array_columna($registros, '0'));

          if ($generar !== false) {
            $insert_regini = $this->insertar_registros_iniciales_prestadores($idPrestador,$item->Credencial,$idPeriodoPago,$item->PagoxDia,$fechaini,$fechafin,$diasProcesados,$diasProyectados,$idPresupuesto);
            if ($insert_regini['error'] == true) {
              $array_errores[$idPrestador] = array('error' => $insert_regini['msj_error'], 'id' => $idPrestador);
              $dias_procesados[$idPrestador] = array('dias' => $insert_regini['dias'], 'error' => $error);
            }
            else {
              $dias_procesados[$idPrestador] = array('dias' => $insert_regini['dias'], 'error' => $error);
            }
          }
        }

        if (count($prestadoresRegIni) == count($registros)) {
          $this->mPrestadores->actualiza_proceso_nomina_prestadores(6,$idPeriodoPago,1);
        }

      }
      catch(Exception $e){
        $data = array('status' => FALSE, 'message' => 'Se generó algún error durante la ejecución de la consulta.');
        log_message("error", "Controlador - prestadores/generar_regini_prestadores(): ".$e->getMessage());
      }
    }
    else $data = array('status' => FALSE, 'message' => 'No existen prestadores para generar registros iniciales.');

    $this->benchmark->mark('finaliza_regini_prest');
    $tiempo_exec = $this->benchmark->elapsed_time('inicia_regini_prest', 'finaliza_regini_prest', 2);

    log_message('error', 'Generación de Registros Iniciales completado en: '.convert_to_string_time($tiempo_exec));
    $data = array('status' => true, "message" => 'Proceso de Generación de Registros Iniciales Completado en: '.convert_to_string_time($tiempo_exec), 'errores' => $array_errores, 'resultado' => $dias_procesados);
    $this->output->set_output(json_encode($data));
  }

  private function insertar_registros_iniciales_prestadores($idPrestador,$credencial,$idPeriodoPago,$pagoxdia,$fechaini,$fechafin,$diasProcesados,$diasProyectados,$idPresupuesto){
    $continuar = true;
    $procesados = 0;
    $diaProyectado = 0;
    //borra registros iniciales
    $this->mPrestadores->borrar_regini_prestador($idPrestador,$idPeriodoPago);

    $fechaIniFormato = DateTime::createFromFormat('d/m/Y', $fechaini);
    $fechaCalculoFormato = DateTime::createFromFormat('d/m/Y', $fechaini);

    // Proyección
    $fechainiProyeccion = $fechaIniFormato->modify('+'.$diasProcesados.' days');
    $dia = 1;

    for ($i=0; $i < $diasProyectados; $i++) {
      $fechaCalculo = $fechainiProyeccion->format('d/m/Y');
      $diaInhabil = $this->obtener_dia_inhabil_prestador($credencial,$idPrestador,$fechaCalculo);
      if (!$diaInhabil) {
        $result = $this->mPrestadores->inserta_registros_iniciales_prestador($idPeriodoPago,$idPrestador,$diasProyectados,1,$fechaCalculo);
        $diaProyectado = $dia + 1;
      }
      else {
        if ($pagoxdia == 1) $result = $this->mPrestadores->inserta_registros_iniciales_prestador($idPeriodoPago,$idPrestador,$diasProyectados,0,$fechaCalculo);
        else $result = $this->mPrestadores->inserta_registros_iniciales_prestador($idPeriodoPago,$idPrestador,$diasProyectados,1,$fechaCalculo);
      }

      if ($result != true) {
        log_message('error','Proc. 1. Error al insertar los registros iniciales para el día: '.$fechaCalculo);
        $msj = 'Error al insertar los registros iniciales para el día: '.$fechaCalculo;
        $continuar = false;
      }
      else $procesados = $procesados + 1;

      $fechainiProyeccion = $fechainiProyeccion->modify('+1 day');
    }

    // Checadas
    $checadasPrestador = $this->mPrestadores->busca_asistencias_prestador($idPrestador,$fechaini,$fechafin);
    $checadasPrestador = (($checadasPrestador === 0) ? array() : $checadasPrestador);

    if ($checadasPrestador !== false) {
      $checadasFiltro = array_filter($checadasPrestador, function ($var) {
          return ($var['FolioChecada'] == 1);
      });
      $diasLaborados = count($checadasFiltro);
      foreach ($checadasFiltro as $item) {
        $result = $this->mPrestadores->inserta_registros_iniciales_prestador($idPeriodoPago,$idPrestador,$diasLaborados,$item->Entrada,cambiaf_a_normal($item->Fecha));
        if ($result != true) {
          log_message('error','Proc. 2. Error al insertar los registros iniciales para el día: '.cambiaf_a_normal($item->Fecha));
          $msj = 'Error al insertar los registros iniciales para el día: '.cambiaf_a_normal($item->Fecha);
          $continuar = false;
        }
        else $procesados = $procesados + 1;
      }

    }

    if ($continuar == false) return array('dias' => $procesados, 'error' => true, 'msj_error' => $msj);
    else return array('dias' => $procesados, 'error' => false);
  }

	/**
	 * función temporal que realiza el cálculo completo de los prestadores seleciconados
	 * @method calcular_conceptos_prestadores_forzado
	 * @author alopez
	 * @date
	 * @param  string                                 $value               [description]
	 * @return [type]                                        [description]
	 */
	public function calcular_conceptos_prestadores_forzado()
	{
		$this->benchmark->mark('inicia_calculo_prestadores');
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
    $idPeriodoPago = $this->param_lib->get_parametro('idPeriodoPago');
    $fechainiParam = $this->param_lib->get_parametro('FechaIniPeriodo');
		$fechadisp = $this->param_lib->get_parametro('FechaDispersion');
    $fechapago = $this->param_lib->get_parametro('FechaPago');
    $confirma = $this->input->post('confirma');
    $registros = $this->input->post('registros');
    $registros = json_decode($registros,true);
    $usuario = LimpiaCadena($this->session->UsuarioNT);
    $error = false;
		$procesados = array();
		set_time_limit(0);
		try{
			$prestadores = $this->mPrestadores->trae_prestadores_gennomina($idPeriodoPago);
			if (!empty($prestadores)) {
				if (count($prestadores) == count($registros)) {
					$borraPeriodoPago = $this->mPrestadores->borra_periodo_pago($idPeriodoPago);
					$agregaTipoNomina = $this->mPrestadores->agrega_tipo_nomina($idPeriodoPago,$fechapago);
					if (empty($borraPeriodoPago) || empty($agregaTipoNomina)) {
						$error = true;
						$data = array('status' => false, "message" => "Ocurrió un error al intentar calcular los conceptos de nómina. Intente de nuevo más tarde (err. x002).");
						log_message("error", "Controlador - prestadores/calcular_conceptos_prestadores(): Error al intentar borrar el periodo de pago o insertar el tipo de nómina.");
					}
				}

				if ($error == false) {
					// ACÁ IRÁ TODO EL PROCESO DE CÁLCULO, DIVIDIDO EN LAS FUNCIONES NECESARIAS PARA REALIZARLO.
					foreach ($prestadores as $item) {
			      $idPrestador = $item->PrestadorID;
			      if (version_compare(PHP_VERSION, '7.0', '>=')) $generar = array_search($idPrestador, array_column($registros, '0'));
			      else $generar = array_search($idPrestador, array_columna($registros, '0'));
						if ($generar !== false) {
							$procesados = $this->genera_calculo($idPeriodoPago,$idPrestador,$fechadisp);
			      }
			    }
					if ($error) {
						$data = array('status' => FALSE, 'message' => 'Cálculo de Nómina de Prestadores completado. '.$cont_error.' prestador(es) no fue(ron) procesado(s).');
						log_message("error", "Controlador - prestadores/calcular_conceptos_prestadores(): Error al calcular los conceptos de nómina. ".$procesados['msj']);
					}
				}

			}
			else $data = array('status' => FALSE, 'message' => 'No existen prestadores para generar conceptos complementarios (err. x001).');
		}
		catch(Exception $e){
			$error = true;
			$data = array('status' => FALSE, 'message' => 'Se generó algún error durante la ejecución de la consulta.');
			log_message("error", "Controlador - prestadores/calcular_conceptos_prestadores(): ".$e->getMessage());
		}

		$this->benchmark->mark('finaliza_calculo_prestadores');

    $tiempo_exec = $this->benchmark->elapsed_time('inicia_calculo_prestadores', 'finaliza_calculo_prestadores', 2);
    log_message('calculo', 'Calculo de Nómina de Prestadores realizado en: '.convert_to_string_time($tiempo_exec));

    if ($error == false) $data = array('status' => true, "message" => 'Cálculo de Nómina de Prestadors realizado en: '.convert_to_string_time($tiempo_exec).(empty($cont_error) ? '' : ' Prestadores No Procesados: '.$cont_error),
                                       'resultado' => $procesados);

    $this->output->set_output(json_encode($data));
	}

	private function genera_calculo($idPeriodoPago,$idPrestador,$fechadisp)
	{
		$idTipoNomina = 44;
		$fechapago = $this->param_lib->get_parametro('FechaPago');
    $error = false;
		$procesados = array();
		$this->mPrestadores->iniciar_transaccion();
		$borraNomina = $this->mPrestadores->elimina_detalle_nomina($idPeriodoPago,$idPrestador);
		if ($borraNomina !== FALSE) {
			$prestador = $this->mPrestadores->obtener_registro($idPrestador);
			$conf = $this->mPrestadores->trae_configuracion($idPrestador,$idTipoNomina);
			$agregaTipoNomina = $this->mPrestadores->agrega_tipo_nomina($idPeriodoPago,$fechapago);
			$calculaQuincena = $this->mPrestadores->inserta_calculo($idPeriodoPago,$idPrestador,$prestador,$conf,15,$fechadisp);
			if ($calculaQuincena !== false) {
				$error = false;
				$procesados[$idPrestador] = array('id' => $idPrestador, 'error' => false, 'msj' => 'Procesado.');
			}
			else{
				$error = true;
				$cont_error = $cont_error + 1;
				$procesados[$idPrestador] = array('id' => $idPrestador, 'error' => true, 'msj' => 'Error al generar conceptos quincenal.'.(empty($calculaQuincena->mensaje) ? '' : ' '.$calculaQuincena->mensaje));
				log_message("calculo", "Controlador - prestadores/calcular_conceptos_prestadores_forzado(): Error al intentar generar los conceptos, para el prestador: ".$idPrestador);
			}
		}
		else $error = true;
		$this->mPrestadores->terminar_transaccion(($error == true ? 1 : 0));
		return $procesados;
	}

	public function calcula_nomina_individual()
	{
		$idPeriodoPago = $this->input->post('idPeriodoPago');
    $idPrestador = $this->input->post('idPrestador');
		$idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
		$fechaini = $this->param_lib->get_parametro('FechaIniPeriodo');
		$fechadisp = $this->param_lib->get_parametro('FechaDispersion');
		$idNominaAbierta = $this->mNomina->busca_periodopago_porfecha($fechaini,$idPresupuesto);
    $idNominaAbierta = (empty($idNominaAbierta->id) ? 0 : $idNominaAbierta->id);
		$usuario = LimpiaCadena($this->session->UsuarioNT);
    $error = false;

    if (!empty($idPeriodoPago) && !empty($fechaini) && !empty($idPrestador)){
      if ($idNominaAbierta == $idPeriodoPago) {
          try{
            $calcular = $this->genera_calculo($idPeriodoPago,$idPrestador,$fechadisp);
            if ($calcular == false) {
              $error = true;
              log_message('error', 'Error al calcular la nómina del prestador de servicios, id: '.$idPrestador);
              $data = array('status' => false, "message" => 'El cálculo de la nómina para el prestador de servicios no ha sido realizado correctamente.');
            }
          }
          catch(Exception $e){
            $error = true;
            log_message("error", "Controlador - prestadores/calcula_nomina_individual(): ".$e->getMessage());
            $data = array('status' => FALSE, 'message' => 'Se generó algún error durante la ejecución de la consulta.');
          }
      }
      else{
        $error = true;
        $data = array('status' => FALSE, 'message' => 'La nómina del empleado no puede ser recalculada porque la nómina de la quincena seleccionada ya ha sido confirmada.');
      }
    }
    else{
      $error = true;
      $data = array('status' => FALSE, 'message' => 'Error al intentar realizar el cálculo. No se recibió el parámetro esperado.');
    }

    if ($error == false)  $data = array('status' => true, "message" => 'El cálculo de la nómina para el prestador de servicios ha sido realizado correctamente.');
    $this->output->set_output(json_encode($data));
	}

  public function calcular_conceptos_prestadores()
  {
    $this->benchmark->mark('inicia_calculo_prestadores');
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
    $idPeriodoPago = $this->param_lib->get_parametro('idPeriodoPago');
    $fechainiParam = $this->param_lib->get_parametro('FechaIniPeriodo');
    $confirma = $this->input->post('confirma');
    $registros = $this->input->post('registros');
    $registros = json_decode($registros,true);
    $usuario = LimpiaCadena($this->session->UsuarioNT);
    $error = false;

    try{
      $prestadores = $this->mPrestadores->trae_prestadores_gennomina($idPeriodoPago);
      if (!empty($prestadores)) {
        if (count($prestadores) == count($registros)) {
          $borraPeriodoPago = $this->calculos_lib->borrar_periodo_pago($idPeriodoPago);
          if (empty($borraPeriodoPago)) {
            $error = true;
            $data = array('status' => false, "message" => "Ocurrió un error al intentar calcular los conceptos de nómina. Intente de nuevo más tarde (err. x002).");
            log_message("error", "Controlador - prestadores/calcular_conceptos_prestadores(): Error al intentar borrar el periodo de pago.");
          }
          //PENDIENTE: confirmar si se eliminan las nóminas (EN EL CÓDIGO DE VB6 NO SE ELIMINAN)
          // else {
          //   $delTiposNom = $this->mPrestadores->elimina_nominas_porPeriodo($idPeriodoPago);
          //   if (empty($delTiposNom)) {
          //     $error = true;
          //     $data = array('status' => false, "message" => "Ocurrió un error al intentar calcular los conceptos de nómina. Intente de nuevo más tarde (err. x003).");
          //     log_message("error", "Controlador - prestadores/calcular_conceptos_prestadores(): Error al intentar borrar los tipos de nómina por periodo.");
          //   }
          // }
        }

        if ($error == false) {
          // ACÁ IRÁ TODO EL PROCESO DE CÁLCULO, DIVIDIDO EN LAS FUNCIONES NECESARIAS PARA REALIZARLO.
          $procesar = $this->calculos_lib->calcula_nomina_quincenal_prestadores($idPeriodoPago,$idPresupuesto,$registros,$prestadores,$usuario);

          if ($procesar['error'] == true) {
            $error = true;
            $data = array('status' => FALSE, 'message' => $procesar['msj']);
            log_message("error", "Controlador - prestadores/calcular_conceptos_prestadores(): Error al calcular los conceptos de nómina. ".$procesar['msj']);
          }
        }
      }
      else{
        $error = true;
        $data = array('status' => FALSE, 'message' => 'No existen prestadores para generar conceptos complementarios (err. x001).');
      }
    }
    catch(Exception $e){
      $error = true;
      $data = array('status' => FALSE, 'message' => 'Se generó algún error durante la ejecución de la consulta.');
      log_message("error", "Controlador - prestadores/calcular_conceptos_prestadores(): ".$e->getMessage());
    }

    if ($continuar == false) return array('dias' => $procesados, 'error' => true, 'msj_error' => $msj);
    else return array('dias' => $procesados, 'error' => false);
  }


  public function calcular_conceptos_nomina(){
    $this->benchmark->mark('inicia_complemento');
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
    $idPeriodoPago = $this->param_lib->get_parametro('idPeriodoPago');
    $fechainiParam = $this->param_lib->get_parametro('FechaIniPeriodo');
    $tipoperiodo = obten_tipo_periodo($fechainiParam);
    $confirma = $this->input->post('confirma');
    $registros = $this->input->post('registros');
    $registros = json_decode($registros,true);
    $usuario = LimpiaCadena($this->session->UsuarioNT);
    $error = false;

    try{
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
          $procesar = $this->calculos_lib->calcula_nomina_quincenal($idPeriodoPago,$idPresupuesto,$tipoperiodo,$registros,$empleados,$usuario,$confirma);

          if ($procesar['error'] == true) {
            $error = true;
            $data = array('status' => FALSE, 'message' => $procesar['msj']);
            log_message("error", "Controlador - nomina/calcular_conceptos_nomina(): Error al calcular los conceptos de nómina. ".$procesar['msj']);
          }
        }
      }
      else{
        $error = true;
        $data = array('status' => FALSE, 'message' => 'No existen empleados para generar conceptos complementarios (err. x001).');
      }
    }
    catch(Exception $e){
      $error = true;
      $data = array('status' => FALSE, 'message' => 'Se generó algún error durante la ejecución de la consulta.');
      log_message("error", "Controlador - nomina/calcular_conceptos_nomina(): ".$e->getMessage());
    }

    $this->benchmark->mark('finaliza_complemento');

    $tiempo_exec = $this->benchmark->elapsed_time('inicia_complemento', 'finaliza_complemento', 2);
    log_message('calculo', 'Calculo de Conceptos de Nómina realizado en: '.convert_to_string_time($tiempo_exec));

    if ($error == false) $data = array('status' => true, "message" => 'Cálculo de Conceptos de Nómina realizado en: '.convert_to_string_time($tiempo_exec), 'resultado' => $procesar['procesados'], 'recalculo' => $procesar['recalculo']);

    $this->output->set_output(json_encode($data));

  }

  private function obtener_dia_inhabil_prestador($credencial,$idPrestador,$fecha){
    $esFestivo = $this->mCalculosN->busca_dia_festivo($fecha);
    $turnosPrestador = $this->mPrestadores->busca_turnoprestador_fecha($idPrestador,$fecha);

    if( !empty($turnosPrestador) ) $turno = $turnosPrestador->turno;
    else{
      $propPrestador = $this->mPrestadores->traer_generales_prestador($credencial);
      $turno = $propPrestador->Turno;
    }

    $tmpTurnos = $this->mCalculosN->busca_tmp_turnos($turno);

    $fechaformato = DateTime::createFromFormat('d/m/Y', $fecha);
    $diaSemana = $fechaformato->format('w');

    $X = strpos($tmpTurnos->descanso, 'X', $diaSemana);
    $esDescanso = ($diaSemana == $X ? true : false);

    $diaInhabil = ( ($esDescanso || $esFestivo) ? true : false );
    return $diaInhabil;

  }

	// public function guarda_pago_extraordinario()
  // {
  //   $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
  //   $idPeriodoPago = $this->input->post('pextEmp_periodo');
  //   $fechaPago = $this->input->post('pext_fechapago');
  //   $fechaDispersion = $this->input->post('pext_fechadisp');
  //   $empleados = $this->input->post('empleados');
  //   $empleados = json_decode($empleados,true);
  //   $percepciones = $this->input->post('percepciones');
  //   $percepciones = json_decode($percepciones,true);
  //   $deducciones = $this->input->post('deducciones');
  //   $deducciones = json_decode($deducciones,true);
  //   $continuar = true;
  //   $this->mPagosExt->iniciar_transaccion();
  //   foreach ($empleados as $itemEmpleado) {
  //     $datosEmpleado = array(
  //       'idNomina'      => $idPeriodoPago,
  //       'idEmpleado'    => $itemEmpleado['idEmpleado'],
  //       'FPago'         => $fechaPago,
  //       'FDispersion'   => $fechaDispersion,
  //       'Enomina'       => (empty($itemEmpleado['ENomina']) ? 0 : 1),
  //       'idEmisor'      => $itemEmpleado['idEmisor'],
  //       'NumeroCuenta'  => $itemEmpleado['NumeroCuenta'],
  //       'idCategoria'   => $itemEmpleado['idCategoria'],
  //       'idDependencia' => $itemEmpleado['idDependencia']
  //     );
  //     $pagoExt = $this->mPagosExt->guarda_pago_extraordinario($datosEmpleado);
  //     $idPagoExt = $pagoExt->Resultado;
  //     if ($pagoExt != false && !empty($idPagoExt)) {
  //       $continuar = $this->guardar_percepciones_deducciones($idPagoExt,$idPresupuesto,$percepciones,$deducciones);
  //       if ($continuar) $continuar = $this->mPagosExt->calcula_pago_extraodinario(array($idPagoExt,$idPeriodoPago,$itemEmpleado['idEmpleado'],$itemEmpleado['idCategoria']));
  //     }
  //     else $continuar = false;
  //   }
  //   $this->mPagosExt->terminar_transaccion(($continuar == true ? 0 : 1));
  //   if ($continuar) $data = array('status' => TRUE, 'message' => 'Pago extraordinario guardado con éxito.', 'idPeriodoPago' => $idPeriodoPago);
  //   else $data = array('status' => FALSE, 'message' => 'Error al intentar guardar el pago extraordinario.');
	//
  //   $this->output->set_output(json_encode($data));
  // }

}
