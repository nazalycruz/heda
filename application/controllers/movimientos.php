<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movimientos extends IIS_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('movimientos_modelo','modMovimientos',TRUE);
    $this->load->model('empleado_modelo','modEmpleado',TRUE);
    $this->load->model('calculos_modelo','modCalculos',TRUE);
    $this->load->library('ParamSystem', NULL, 'param_lib');
    $this->load->library('Selectores_class', NULL, 'select_lib');
    $this->load->library('pjey_ABC');
  }

	public function index()
	{
    $cat_orig_movs = $this->select_lib->generico('origenes_movs',0,true,true,"OrigenId", "Clave", "Descripcion", "", false);
		$datos['cat_orig_movs'] = $cat_orig_movs;
		$this->load->view('recursos_humanos/movimientos',$datos);
	}

	public function carga_movimientos()
	{
		$clavemovimiento = $this->input->post('clavemovimiento');
		$clavemovimiento = ($clavemovimiento == 'TO' ? '' : $clavemovimiento);
		$fechaini = $this->input->post('fechaini');
		$fechafin = $this->input->post('fechafin');
		$aceptado = $this->input->post('aceptado');
		$folio = $this->input->post('folio');
		$filtro = (empty($folio) ? 0 : 1);
		$credencial = $this->input->post('credencial');
		$responsable = $this->param_lib->get_parametro('idPresupuesto');
		$datos = array($clavemovimiento,$fechaini,$fechafin,$aceptado,$folio,$credencial,$responsable);
		$movimientos = $this->modMovimientos->obtener_movimientos($datos);
		$data = array('status' => true, 'movimientos' => $movimientos);
		$this->output->set_output(json_encode($data));
	}

	public function carga_movs_nuevo_empleado()
	{
		$fechaini = $this->input->post('fechainiNE');
		$fechafin = $this->input->post('fechafinNE');
		$aceptado = $this->input->post('aceptadoNE');
		$folio = $this->input->post('folioNE');
		$credencial = $this->input->post('credencialNE');
		$responsable = $this->param_lib->get_parametro('idPresupuesto');
		$datos = array("Nuevo Empleado",$fechaini,$fechafin,$aceptado,$folio,$credencial,$responsable);
		$movimientos = $this->modMovimientos->obtener_movimientos($datos);
		$abc = new pjey_ABC();
		$abc->set_resultado($movimientos);
		// $abc->set_key(3,'IdEmpleado','asc');
		$abc->set_defaults('muestra_panel','cargando','btnborrarFiltros','acciones');
		$abc->set_formatoColumna(array('visible' => array(7,11,13,31,33,35,51)));
		$abc->set_acciones(
			array('titulo'=>'Completar Información','texto'=>'','icono'=>'fa-solid fa-user-pen','accion'=>'agregar_info_nuevo_empleado'),
		);
		$abc->set_encabezados(array('NumNomina'       => 'Credencial',
																'NombreCompleto'	=> 'Nombre',
																'Categoria'				=> 'Categoría',
																'IdMovimiento' 		=> 'Folio',
																'fInicio'					=> 'Fecha Inicio',
																'FFIN'						=> 'Fecha Fin'
															));
		$abc->set_configuraciones_extra(
			array('idTbl' => 'tblMovimientosNuevoEmpleado'),
		);
		$output = $abc->construir();
		$this->load->view($output['archivo'], $output['datos']);
	}

	public function carga_agregar_nuevo_empleado($value='')
	{
		$this->load->view('recursos_humanos/nuevo_empleado');
	}

	public function aceptar_movimientos()
	{
		$claveMovimiento = $this->input->post('claveMovimiento');
		// $parametros = "@ClaveMovimiento = ?,
		// 							 @IdPersonal = ?,
		// 							 @Credencial = ?,
		// 							 @FechaInicio = ?,
		// 							 @IdMovimiento = ?,
		// 							 @IdMovimientoRel = ?";

	}

  public function aceptar_inicio_incapacidades(){
    $fechaperiodo = $this->param_lib->get_parametro('FechaIniPeriodo');
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
    $result = $this->mNomina->BuscaNominaAbierta($fechaperiodo,$idPresupuesto);
    $idPeriodoPago = (!empty($result) ? $result->Id : 0);
    $fechaini = "01/01/1900";
    $hoy = date('d/m/Y');
    $incapacidades = $this->obtener_movimientos(1,$fechaini,$hoy,'IN',2,$idPresupuesto);

    if (empty($incapacidades)) $data = array('status' => FALSE,'message' => 'No se encontraron incapacidades para aceptar.');
    else {
      $aceptarInc = $this->aceptar_incapacidades($incapacidades);
      if ($aceptarInc) $data = array('status' => TRUE, 'message' => 'Inicios de incapacidades aprobados correctamente.');
      else $data = array('status' => FALSE, 'incapacidades' => '', 'message' => 'Ocurrió un error al intentar aprobar las incapacidades.');
    }
    $this->output->set_output(json_encode($data));
  }

  public function aceptar_vencimientos(){
    $fechaperiodo = $this->param_lib->get_parametro('FechaIniPeriodo');
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
    $result = $this->mNomina->BuscaNominaAbierta($fechaperiodo,$idPresupuesto);
    $idPeriodoPago = (!empty($result) ? $result->Id : 0);
    $fechaini = "01/01/1900";
    $hoy = date('d/m/Y');
    $incapacidades = $this->modMovimientos->get_movimientos_sinConcluir(3,$fechaini,$hoy,'IN',1,2,$idPresupuesto);

    $fechaformato = DateTime::createFromFormat('d/m/Y', $hoy);
    $fechaVA = $fechaformato->modify('-1 day')->format('d/m/Y');
    $vacaciones = $this->modMovimientos->get_movimientos_sinConcluir(3,$fechaini,$fechaVA,'VA',1,2,$idPresupuesto);

    if (empty($incapacidades) && empty($vacaciones)) $data = array('status' => FALSE,'message' => 'No hay movimientos de incapacidades o vacaciones a vencer el dia de hoy.');
    else {
      if (!empty($incapacidades)) { $aceptar_IN = $this->confirmar_vencimientos_licencia($incapacidades); }
      if (!empty($vacaciones)){ $aceptar_VA = $this->confirma_vencimientos_vacaciones($vacaciones); }
      if ($aceptar_IN && $aceptar_VA['status']) {
        $data = array('status' => TRUE, 'message' => 'Movimientos Concluidos correctamente.', 'empleadosPagoPrima' => $aceptar_VA['movsPagoPrima']);
      }
      else $data = array('status' => FALSE, 'message' => 'Ocurrió un error al intentar concluir los movimientos.');
    }
    $this->output->set_output(json_encode($data));
  }

  /**
  * Obtener las Incapacidades en un intervalo de tiempo dado.
  * Se mostraran Las aceptadas o no aceptadas dependiendo del parámetro
  * ACEPTADO. dif de 1 o 2: Toda se Filtrará de acuerdo a la fecha indicada en el Parmaetro FiltroFEcha:
  * @method obtener_movimientos
   * @author alopez
   * @param  [type]                    $filtroFecha   1:Inicio,2: Autorizacion,3:Termino
   * @param  [type]                    $fechaini      [description]
   * @param  [type]                    $fechafin      [description]
   * @param  [type]                    $aceptado      1: Aceptado. 2: NO Aceptado
   * @param  [type]                    $idResponsable [description]
   * @return [type]                                   [description]
   */
  private function obtener_movimientos($filtroFecha,$fechaini,$fechafin,$origen,$aceptado,$idResponsable){
    $movimientos = '';
    switch ($filtroFecha) {
      case 1:
        $movimientos = $this->modMovimientos->get_movimientos_porOrigen('p_admarh_MovsToRHXFechaIni',$fechaini,$fechafin,$origen,$aceptado,$idResponsable);
        break;
      case 2:
        $movimientos = $this->modMovimientos->get_movimientos_porOrigen('p_admarh_MovsToRHXFechaAut',$fechaini,$fechafin,$origen,$aceptado,$idResponsable);
        break;
      default:
        $movimientos = $this->modMovimientos->get_movimientos_porOrigen('p_admarh_MovsToRHXFechaTer',$fechaini,$fechafin,$origen,$aceptado,$idResponsable);
        break;
    }
    return $movimientos;
  }

  /**
   * [aceptar_incapacidades description]
   * @method aceptar_incapacidades
   * @author alopez
   * @param  [type]                $incapacidades [description]
   * @return [type]                               [description]
   */
  private function aceptar_incapacidades($incapacidades){
		$continuar = true;
    $this->modMovimientos->iniciar_transaccion_multiple();
    try{
      foreach ($incapacidades as $iteminc) {
        if ($continuar) {
          $movimiento = $this->modMovimientos->get_movimientos_porFolio($iteminc->IdMovimiento,TRUE);
          if (!empty($movimiento->MovimientoAceptado)){
            if ($iteminc->Origen == 'IN' || $iteminc->Origen == 'VA') {
              $checa = false;
              $status = $this->determina_status($iteminc->TipoMovimiento,$iteminc->Origen);
              $statusSISEGE = $this->determina_status_sisege($status);
              $updsisegemovs = $this->modMovimientos->actualiza_movimientos_sisege($iteminc->IdMovimiento,$iteminc->ObservRh);
              $updsisegepersonal = $this->modMovimientos->actualiza_estatus_empleado_sisege($iteminc->NumNomina,$statusSISEGE);
              $updpjeyempleado = $this->modMovimientos->actualiza_estatus_empleado_pjey($iteminc->NumNomina,$status,$checa);
              $idEmpleado = $this->mEmpleado->get_empleado_id_pjey($credencial);
              if (!empty($idEmpleado)) {
                $insertHistStatus = $this->modMovimientos->inserta_hist_status($idEmpleado,$iteminc->FechaInicio,$iteminc->FechaTerminacion,$status,$checa,$iteminc->IdMovimiento,$iteminc->Origen);
                if (!empty($updsisegemovs) && !empty($updsisegepersonal) && !empty($updpjeyempleado) && !empty($idEmpleado) && !empty($insertHistStatus)){
                  $resultDiasInc = $this->modMovimientos->inserta_dias_incapacidad($idEmpleado,$iteminc->Origen,$iteminc->FechaInicio,$iteminc->FechaTerminacion);
                  if ($resultDiasInc) {
                    $statusResult = $this->modCalculos->trae_estatus_por_fecha(date('d/m/Y'),$iteminc->NumNomina);
                    if ($statusResult->STATUS == 'A') $checa = true;
                    else $checa = false;
                    $this->modMovimientos->actualiza_estatus_empleado_pjey($iteminc->NumNomina,$statusResult->STATUS,$checa);
                    $this->modMovimientos->actualiza_estatus_empleado_sisege($iteminc->NumNomina,$statusResult->STATUS);
                  }
                }
              }
            }
          }
        }
      }
    }
    catch(Exception $e){
      $continuar = false;
      log_message('error', 'Controlador - movimientos/aceptar_incapacidades(): Error al aceptar incapacidades.');
    }

    if ($this->db->trans_status() === FALSE || $this->secgral->trans_status() === FALSE || $continuar == false){
      $this->db->trans_rollback();
      $this->secgral->trans_rollback();
      $continuar = false;
    }
    else {
      $this->db->trans_commit();
      $this->secgral->trans_commit();
    }

    return $continuar;
  }

  /**
   * Confirma: Licencia SIN goce de sueldo,Licencia CON goce de sueldo,  Incapacidad
   * @method confirmar_vencimientos_licencia
   * @author alopez
   * @param  [type]                          $movimientos [description]
   * @return [type]                                       [description]
   */
  private function confirmar_vencimientos_licencia($movimientos){
    $continuar = true;
    $this->modMovimientos->iniciar_transaccion_multiple();
    try{
      foreach ($movimientos as $itemMovs) {
        $movimiento = $this->modMovimientos->get_movimientos_porFolio($itemMovs->IdMovimiento,TRUE);
        $concluido = $movimiento->Concluido;
        $upStatusPJEY = $this->modMovimientos->actualiza_estatus_empleado_pjey($itemMovs->NumNomina,'A',true);
        $upStatusSISEGE = $this->modMovimientos->actualiza_estatus_empleado_sisege($itemMovs->NumNomina,'A');
        $updConcluidos = $this->modMovimientos->actualiza_movientos_concluidos_sisege($itemMovs->IdMovimiento,TRUE);

        $statusResult = $this->modCalculos->trae_estatus_por_fecha(date('d/m/Y'),$iteminc->NumNomina);
        if ($statusResult->STATUS == 'A') $checa = true;
        else $checa = false;
        $this->modMovimientos->actualiza_estatus_empleado_pjey($iteminc->NumNomina,$statusResult->STATUS,$checa);
        $this->modMovimientos->actualiza_estatus_empleado_sisege($iteminc->NumNomina,$statusResult->STATUS);
      }
    }
    catch(Exception $e){
      $continuar = false;
      log_message('error', 'Controlador - movimientos/confirmar_vencimientos_licencia(): Error al aceptar vencimientos de licencias.');
    }

    if ($this->db->trans_status() === FALSE || $this->secgral->trans_status() === FALSE || $continuar == false){
      $this->db->trans_rollback();
      $this->secgral->trans_rollback();
      $continuar = false;
    }
    else {
      $this->db->trans_commit();
      $this->secgral->trans_commit();
    }
    return $continuar;
  }

  private function confirma_vencimientos_vacaciones($movimientos){
    $continuar = true;
    $noConcluidos = [];
    $this->modMovimientos->iniciar_transaccion_multiple();
    try{
      foreach ($movimientos as $itemMovs) {
        $movimiento = $this->modMovimientos->get_movimientos_porFolio($itemMovs->IdMovimiento,TRUE);
        $updConcluidos = $this->modMovimientos->actualiza_movientos_concluidos_sisege($itemMovs->IdMovimiento,TRUE);
        if ($updConcluidos) {
          $ctrlVA = $this->modMovimientos->obtener_control_vacaciones($itemMovs->IdMovimiento);
          if (!empty($ctrlVA)) {
            if ($ctrlVA->PrimaPagada) {
              $upStatusPJEY = $this->modMovimientos->actualiza_estatus_empleado_pjey($itemMovs->NumNomina,'A',true);
              $upStatusSISEGE = $this->modMovimientos->actualiza_estatus_empleado_sisege($itemMovs->NumNomina,'A');
            }
            else array_push($noConcluidos,$itemMovs->IdMovimiento);
          }
          else array_push($noConcluidos,$itemMovs->IdMovimiento);
        }
        else array_push($noConcluidos,$itemMovs->IdMovimiento);
      }
    }
    catch(Exception $e){
      $continuar = false;
      log_message('error', 'Controlador - movimientos/confirma_vencimientos_vacaciones(): Error al aceptar vencimientos de licencias.');
    }

    if ($this->db->trans_status() === FALSE || $this->secgral->trans_status() === FALSE || $continuar == false){
      $this->db->trans_rollback();
      $this->secgral->trans_rollback();
      $continuar = false;
    }
    else{
      $this->db->trans_commit();
      $this->secgral->trans_commit();
    }
    if (!empty($noConcluidos)) $movsPagoPrima = $this->genera_listado_pago_vacaciones($noConcluidos);
    $data = array('status' => $continuar, 'movsPagoPrima' => $movsPagoPrima);

    return $data;
  }

  private function genera_listado_pago_vacaciones($movimientos){
    $empleadosPago = [];
    $folioError = [];
    for ($i=0; $i < count($movimientos); $i++) {
      $ctrlVA = $this->modMovimientos->obtener_control_vacaciones($movimientos[$i]);
      if (!empty($ctrlVA)){
        $empleadosPago[] = array('idPeriodo' => $ctrlVA->PeriodoID,
                                  'idEmpleado' => $ctrlVA->IdEmpleado,
                                  'credencial' => $ctrlVA->Credencial,
                                  'nombre' => $ctrlVA->NombreCompleto
        );
      }
      else array_push($folioError,$movimientos[$i]);
    }
    return array('folioError' => $folioError, 'empleadoPago' => $empleadosPago);
  }

  //PENDIENTE: mejorar estas funciones
  private function determina_status($tipoMov,$origen){
    $AltaTmp = "AT";
    $AltaDef = "AD";
    $BajaTmp = "BT";
    $BajaDef = "BD";
    $status = '';

    switch ($tipoMov) {
      case $AltaTmp:
        switch ($origen) {
          case 'PN':
            $status = 'A';
            break;
          case 'LIC':
            $status = 'LIC';
            break;
          case 'LIS':
            $status = 'LIS';
            break;
          case 'LII':
            $status = 'LII';
            break;
          case 'HV':
            $status = 'A';
            break;
          case 'AP':
            $status = 'A';
            break;
          case 'IN':
            $status = 'N';
            break;
          case 'VA':
          case 'MV':
            $status = 'VA';
            break;
          case 'CO':
            $status = 'A';
            break;
          case 'Nuevo Empleado':
            $status = 'A';
            break;
          case 'CN':
            $status = 'A';
            break;
          default:
            break;
        }
        break;
      case $AltaDef:
        switch ($origen) {
          case 'PN':
            $status = 'A';
            break;
          case 'LIC':
            $status = 'LIC';
            break;
          case 'LIS':
            $status = 'LIS';
            break;
          case 'LII':
            $status = 'LII';
            break;
          case 'HV':
            $status = 'A';
            break;
          case 'AP':
            $status = 'A';
            break;
          case 'IN':
            $status = 'N';
            break;
          case 'VA':
          case 'MV':
            $status = 'VA';
            break;
          case 'CO':
            $status = 'A';
            break;
          case 'Nuevo Empleado':
            $status = 'A';
            break;
          case 'CN':
            $status = 'A';
            break;
          default:
            break;
        }
        break;
      case $BajaTmp:
        switch ($origen) {
          case 'PN':
            $status = 'I';
            break;
          case 'LIC':
            $status = 'LIC';
            break;
          case 'LIS':
            $status = 'LIS';
            break;
          case 'LII':
            $status = 'LII';
            break;
          case 'HV':
            $status = 'I';
            break;
          case 'AP':
            $status = 'I';
            break;
          case 'IN':
            $status = 'N';
            break;
          case 'VA':
          case 'MV':
            $status = 'VA';
            break;
          case 'CO':
            $status = 'I';
            break;
          case 'Nuevo Empleado':
            $status = 'I';
            break;
          case 'CN':
            $status = 'P';
            break;
          default:
            break;
        }
        break;
      default:
        break;
    }
    return $status;
  }

  private function determina_status_sisege($status){
    $statusPJEY = '';
    switch ($status) {
      case 'A':
      case 'V':
      case 'P':
        $statusPJEY = 'A';
        break;
      case 'VA':
        $statusPJEY = 'VA';
      case 'IN':
        $statusPJEY = 'IN';
      default:
        $statusPJEY = 'I';
        break;
    }
    return $statusPJEY;
  }

  /**GSantos, 2021.03.17 CASU 450-2021  */
  public function cancelar_DEC(){
            $IdMovimiento = $this->input->post("IdMovimiento",true);
            $respuesta['status'] = true;
            $respuesta['mensaje'] = "";
            $respuesta['datos'] = "";
            $resultado = null;

            if( !isset($IdMovimiento) ){
                $respuesta['status'] = false;
                $respuesta['mensaje'] = "Parámetros incorrectos.";
            }
            else {
                try {

                    $resultado = $this->modMovimientos->cancelar_DEC($IdMovimiento);

                    if($resultado != false){
                        switch($resultado){
                            case 1:
                                $respuesta['mensaje'] = "El registro se canceló correctamente.";
                                break;

                            case 2:
                                $respuesta['status'] = false;
                                $respuesta['mensaje'] = "No se puede cancelar. Movimiento aceptado en RH.";
                                break;

                            case 3:
                                $respuesta['status'] = false;
                                $respuesta['mensaje'] = "No existe el movimiento.";
                                break;
                        }
                    }
                    else{
                        $respuesta['status'] = false;
                        $respuesta['mensaje'] = "Se generó un error al intentar cancelar el registro.";
                    }
                }
                catch(Exception $e){
                    $respuesta['status'] = false;
                    $respuesta['mensaje'] = "Error al ejecutar el procedimiento.";
                }
            }

            $this->output->set_output(json_encode($respuesta));
    }

  /** GSantos, 2021.03.31 CASU 450-2021  */
    public function registrar_movDEC_sisege(){
            $idmovimiento = $this->input->post('idmovimiento');
            $credencial = $this->input->post('credencial');
            $fechaini = $this->input->post('fechaini');
            $fechafin = $this->input->post('fechafin');
            $fechamov = $this->input->post('fechamov');
            $observaciones = $this->input->post('observaciones');
            $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');

            $respuesta['status'] = false;
            $respuesta['mensaje'] = "";
            $resultado = null;
            $accion = ' agregar ';

            if ($idmovimiento > 0)   $accion = ' modificar ';
            if ( empty($credencial) || empty($fechaini) || empty($fechafin) || empty($fechamov) )  {
                  $respuesta['status'] = FALSE;
                  $respuesta['mensaje'] = 'No se recibieron los parámetros esperados.';
                }
            else {
                try {

                    $resultado = $this->modMovimientos->registrar_movDEC_sisege($idmovimiento, $credencial, $fechaini, $fechafin, $fechamov, $observaciones, $idPresupuesto);

                    if($resultado != false)
                        {
                        switch($resultado){
                            case 0:
                                $respuesta['mensaje'] = "Error al ". $accion. " el registo de DEC";
                                break;

                            case 1:
                                $movimientosDEC = $this->modMovimientos->get_movDEC_sisege($credencial);
                                $respuesta['status'] = true;
                                $respuesta['movsDEC'] = $movimientosDEC;
                                $respuesta['mensaje'] = "Se registraron correctamente los cambios.";
                                break;

                            case 2:
                                $respuesta['status'] = false;
                                $respuesta['mensaje'] = "No se puede ". $accion. " un registro por más de 4 días";
                                break;
                            }
                        }

                    else{
                        $respuesta['status'] = false;
                        $respuesta['mensaje'] = "Se generó un error al". $accion. " el registro de DEC.";
                        }
                    }

                  catch(Exception $e){
                      $respuesta['status'] = false;
                      $respuesta['mensaje'] = "Error al ejecutar el procedimiento.";
                    }
                  }

            $this->output->set_output(json_encode($respuesta));
    }



}
