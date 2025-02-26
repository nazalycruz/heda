<?php defined('BASEPATH') OR exit('No direct script access allowed.');

class ParamSystem {

  protected $global_data = array();
  protected $sys_nomina = array();

  protected $CI;

  public function __construct() {
    $this->CI = & get_instance();
    $this->CI->load->model('parametros_modelo','mParametros');
    $this->CI->load->model('calculos_modelo','mCalculos');
    $this->CI->load->model('nomina_modelo','mNomina');
  }

  public function inicializa_parametros_sistema(){
    if (!empty($this->CI->session->userdata('ParametrosSistema'))) $this->CI->session->unset_userdata('ParametrosSistema');

    $presupuesto = FormatoFolio($this->CI->session->userdata("Institucion"),4);
    $rsParam = $this->CI->mParametros->GetParamSystemNomina($presupuesto);
    $rsRangos = $this->CI->mParametros->GetRangosAbiertos($presupuesto);
		if (!empty($rsRangos)) {
			$resNomAbierta = $this->CI->mNomina->BuscaNominaAbierta(cambiaf_a_normal($rsRangos->FechaIni),$presupuesto);
	    $idPeriodoPago = $resNomAbierta->Id;
			$resFechaAsist = $this->CI->mCalculos->busca_ultimafecha_asistencias(1,$idPeriodoPago,false);

	    if (!empty($resFechaAsist)) {
	      $FechaProcesadaFin = cambiaf_a_normal($resFechaAsist->Fecha);
	      $DiasProcesados = (diferencia_fechas(cambiaf_a_normal($rsRangos->FechaIni),$FechaProcesadaFin)) + 1;
	      $DiasProyectados = $rsParam->LongPeriodoPago - $DiasProcesados;
	    }
		}
		else $idPeriodoPago = 0;
		$wsArcon = (empty($this->CI->mParametros->traer_parametro_por_clave('WS_ARCON')->Valor) ? FALSE : $this->CI->mParametros->traer_parametro_por_clave('WS_ARCON')->Valor);

    if (empty($DiasProyectados)) $DiasProcesados = 0;
    if (empty($DiasProcesados)) $DiasProyectados = 0;

    $this->global_data = array(
        'idPresupuesto'       =>  $rsParam->PresupuestoId,
        'idPeriodoPago'       =>  $idPeriodoPago,
        'FechaIniPeriodo'     =>  (empty($rsRangos) ? '': cambiaf_a_normal($rsRangos->FechaIni)),
        'FechaFinPeriodo'     =>  (empty($rsRangos) ? '': cambiaf_a_normal($rsRangos->FechaFin)), //cambiaf_a_normal($rsRangos->FechaFin),
        'FechaPago'           =>  (empty($rsRangos) ? '': cambiaf_a_normal($rsRangos->FechaPago)), //cambiaf_a_normal($rsRangos->FechaPago),
        'FechaDispersion'     =>  (empty($rsRangos) ? '': cambiaf_a_normal($rsRangos->FechaDispersion)), //cambiaf_a_normal($rsRangos->FechaDispersion),
        'FechaProcesadaFin'   =>  (empty($resFechaAsist->Fecha) ? '' : cambiaf_a_normal($resFechaAsist->Fecha)),
        'LongCredencial'      =>  $rsParam->LongCredencial,
        'LongNumEmpl'         =>  $rsParam->LongNumEmpl,
        'LongPeriodoPago'     =>  $rsParam->LongPeriodoPago,
        'DiasProcesados'      =>  $DiasProcesados,
        'DiasProyectados'     =>  $DiasProyectados,
        'idConceptoPrimaVA'   =>  $rsParam->ConcepPrimaVacID,
        'PartidaContable'     =>  $rsParam->PartidaContable,
        'RutaFotos'           =>  $rsParam->RutaFotos,
        'topeISSTEY'          =>  (empty($rsParam->topeISSTEY) ? 0 : $rsParam->topeISSTEY),
        'WS_ARCON'            =>  $wsArcon,
    );

    $this->CI->session->set_userdata('ParametrosSistema', $this->global_data);

    return $this->global_data;
  }

  public function inicializa_param_sys_nomina(){
    if (!empty($this->CI->session->userdata('ParamSystemNomina'))) $this->CI->session->unset_userdata('ParamSystemNomina');

    $presupuesto = FormatoFolio($this->CI->session->userdata("Institucion"),4);
    $rsParam = $this->CI->mParametros->GetParamSystemNomina($presupuesto);

    $this->sys_nomina = array(
                              'SalarioMinimo' => $rsParam->SalarioMinimo,
                              'UMA'           => $rsParam->UMA
                            );

    $this->CI->session->set_userdata('ParamSystemNomina', $this->sys_nomina);

    return $this->sys_nomina;
  }

  public function carga_parametros_sistema(){
    if (empty($this->CI->session->userdata('ParametrosSistema'))) $this->global_data = $this->inicializa_parametros_sistema();

    else $this->global_data = $this->CI->session->userdata('ParametrosSistema');

    return $this->global_data;
  }

  public function carga_param_sys_nomina(){
    if (empty($this->CI->session->userdata('ParamSystemNomina'))) $this->sys_nomina = $this->inicializa_param_sys_nomina();

    else $this->sys_nomina = $this->CI->session->userdata('ParamSystemNomina');

    return $this->sys_nomina;
  }

  public function set_parametro($key,$value){
		$data				= $this->CI->session->userdata('ParametrosSistema');
		$data[$key]	= $value;
		$this->CI->session->set_userdata('ParametrosSistema', $data);
  }

  public function set_parametro_array($key,$value){
    $this->{$key} = $value;
  }

  public function get_parametros_completo(){
    return $this->global_data;
  }

  public function get_parametro($key){
    $parametro = $this->CI->session->userdata('ParametrosSistema')[$key];
    return $parametro;
  }

  public function get_parametro_sys_nomina($key){
    $parametro = $this->CI->session->userdata('ParamSystemNomina')[$key];
    return $parametro;
  }

  public function common_data(){

    $this->global_data= array(
        'title'    => 'prueba de título',
    );
    return $this->global_data;
  }

  public function any_method(){
    $query = $this->CI->db->get('table_name');
  }

}
