<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Movimientos_modelo extends CI_Model {

  function _construct(){
		parent::Model();

	}

  public function iniciar_transaccion_multiple(){
    $this->db->trans_start();
    $this->secgral->trans_start();
  }


	public function obtener_movimientos($datos)
	{
		$parametros = "@ClaveMovimiento = ?,
									 @FechaIni = ?,
									 @FechaFin = ?,
									 @Aceptado = ?,
									 @Folio = ?,
									 @Credencial = ?,
									 @IdResponsable = ?";
		$sql = "exec p_admarh_getMovimientos ".$parametros;
		$query = $this->secgral->query($sql,$datos);
		if ($query != false) return $query->result();
		else return false;
	}

  public function get_movimientos_porOrigen($proceso,$fechaini,$fechafin,$origen,$aceptado,$idResponsable){
    $acepta = " ";
    switch ($aceptado) {
      case 1:
        $acepta = "1";
        break;
      case 2:
        $acepta = "0";
        break;
      default:
        $acepta = " ";
        break;
    }
    $parametros = "@FechaIni= ?, @FechaFin = ?, @Origen = ?, @Aceptado = ?, @IdResponsable = ?";
    $sql = "exec ". $proceso . " " . $parametros;
    $datos = array('fechaini' => $fechaini, 'fechafin' => $fechafin, 'origen' => $origen, 'aceptado' => $acepta, 'idResponsable' => $idResponsable);

    $query = $this->secgral->query($sql,$datos);
    if ($query != false) {
      if ($query->num_rows() > 0) {
        $result = $query->result();
        return $result;
      }
      else return false;
    }
    else return false;
  }

  public function get_movimientos_sinConcluir($filtroFecha,$fechaini,$fechafin,$origen,$aceptado,$concluido,$idResponsable){
    $fechaQuery = ($filtroFecha == 1 ? 'FechaInicio' : ($filtroFecha == 2 ? 'FechaMovimiento' : ($filtroFecha == 3 ? 'FechaTerminacion' : '')));
    $aceptadoQuery = ($aceptado == 1 ? 1 : ($aceptado == 2 ? 0 : 3));
    $concluidoQuery = ($concluido == 1 ? 1 : ($concluido == 2 ? 0 : 3));
    $this->secgral->from('vw_MovsToRH');

    if (!empty($aceptadoQuery)) {
      $this->secgral->where($fechaQuery.' >=',$fechaini);
      $this->secgral->where($fechaQuery.' <=',$fechafin);
    }
    if ($aceptadoQuery != 3) $this->secgral->where('MovimientoAceptado',$aceptadoQuery);
    if ($concluidoQuery != 3) $this->secgral->where('concluido',$concluidoQuery);
    if ($origen != 'todos') $this->secgral->where('origen',$origen);
    $this->secgral->where('IdResponsable',$idResponsable);
    $query = $this->secgral->get();

    if ($query != false && $query->num_rows() > 0) return $query->result();

    else return false;
  }

  public function get_movimientos_porFolio($folio,$exacta=''){
    $this->secgral->from('vw_MovsToRH');
    if (empty($exacta)) $this->secgral->where('idmovimiento',$folio);
    else $this->secgral->like('idmovimiento',$folio);
    $query = $this->secgral->get();

    if ($query != false && $query->num_rows() > 0) return $query->result();
    else return false;
  }

  public function actualiza_movimientos_sisege($idMovimiento,$Observaciones){
    $parametros = "@IdMovimiento = ?, @Observaciones = ?";
    $sql = "exec sp_UpdAceptaMovimiento ".$parametros;

    $query = $this->secgral->query($sql,array('idMovimiento' => $idMovimiento,'Observaciones' => $Observaciones));
    if ($query != false) return true;
    else return false;
  }

  public function actualiza_estatus_empleado_sisege($credencial,$status){
    $parametros = "@Credencial = ?, @Status = ?";
    $sql = "exec sp_UpdStatusEmpleado ".$parametros;

    $query = $this->secgral->query($sql,array('credencial' => $credencial,'status' => $status));
    if ($query != false) return true;
    else return false;
  }

  public function actualiza_estatus_empleado_pjey($credencial,$status,$checa,$liquidado=0,$fechabaja=''){
    $datos = array(
      'credencial' => $credencial,
      'status' => $status,
      'checa' => $checa,
      'liquidado' => $liquidado,
      'fecha' => (empty($fechabaja) ? '01/01/1900' : $fechabaja)
    );
    $parametros = "@Credencial = ?, @Status= ?, @Checa = ?, @Liquidado = ?, @FechaBaja = ?";
    $sql = "exec sp_UpdStatusEmplPJEY ".$parametros;

    $query = $this->db->query($sql,$datos);
    if ($query != false) return true;
    else return false;
  }

  public function inserta_hist_status($idEmpleado,$fechaini,$fechafin,$status,$checa,$idMovimiento,$origen){
    $datos = array(
      'idempleado' => $idEmpleado,
      'fechaini' => $fechaini,
      'fechafin' => $fechafin,
      'status' => $status,
      'checa' => $checa,
      'idMovimiento' => $idMovimiento,
      'origen' => $origen,
    );
    $parametros = "@EmpleadoID = ?, @FechaInicial= ?, @FechaFinal = ?, @Status = ?, @Checa = ?, @IdMovimiento = ?, @Origen = ?";
    $sql = "exec sp_InsertHistStatus ".$parametros;

    $query = $this->db->query($sql,$datos);
    if ($query != false) return true;
    else return false;
  }

  public function inserta_dias_incapacidad($idEmpleado,$origen,$fechaini,$fechafin){
    $datos = array(
      'idempleado' => $idEmpleado,
      'origen' => $origen,
      'fechaini' => $fechaini,
      'fechafin' => $fechafin
    );
    $parametros = "@EmpleadoID = ?, @Origen= ?, @FechaIni = ?, @FechaFin = ?";
    $sql = "exec sp_InsertDiasIncapa ".$parametros;

    $query = $this->db->query($sql,$datos);
    if ($query != false) return true;
    else return false;
  }


  public function actualiza_movientos_concluidos_sisege($idMovimiento,$concluido){
    $datos = array(
      'idmovimiento' => $idMovimiento,
      'concluido' => $concluido,
    );
    $parametros = "@IdMovimiento = ?, @Concluido= ?";
    $sql = "exec sp_UpdMovsConcl ".$parametros;

    $query = $this->secgral->query($sql,$datos);
    if ($query != false) return true;
    else return false;
  }

  public function obtener_control_vacaciones($idMovimiento=''){
    $this->db->from('vw_ControlVacaciones');
    if (!empty($idMovimiento)) $this->db->where('MovimientoID',$idMovimiento);
    $query = $this->db->get();

    if ($query != false && $query->num_rows() > 0) return $query->result();
    else return false;
  }


 //GSantos, 31.03.2021
  /**
   * Permite agregar/actualizar un registro de DÍAS ECONÓMICOS
   * @method registrar_movDEC_sisege
   * @author gsantos
   * @date   2021-03-19
   * @param  [type]                      $credencial    [description]
   * @param  [type]                      $FechaIni      [description]
   * @param  [type]                      $FechaFin      [description]
   * @param  [type]                      $FechaMovimiento [description]
   * @param  [type]                      $FechaMovimiento [description]
   * @param  [type]                      $Observaciones [description]
   * @return [type]                      recorset con Mensaje y IdMovimiento          [description]
   */
  public function registrar_movDEC_sisege($idMovimiento, $credencial, $fechaini, $fechafin, $fechamov, $Observaciones, $IdPresupuesto)    {
       $sql = "EXEC p_admarh_movimientoDEC
                    @IdMovimiento='".$idMovimiento
                ."',@Credencial='".$credencial
                ."',@FechaIni='".$fechaini
                ."',@FechaFin='".$fechafin
                ."',@FechaMovimiento='".$fechamov
                ."',@Observaciones='".strtoupper($Observaciones)
                ."',@IdPresupuesto='".$IdPresupuesto."'";

        $query = $this->secgral->query($sql);
        if($query != false){
            $reg = $query->row();
            return $reg->Resultado;
        }
        else return false;
  }

  //GSantos, 23.03.2021
  /**
   * Obtener los DÍAS ECONÓMICOS solicitados por el emnpleado
   * @method get_movDEC_sisege
   * @author gsantos
   * @date   2021-03-23
   * @param  [type]                      $credencial    [description]
   * @return [type]                      recorset [description]
   */
  public function get_movDEC_sisege($Credencial){
    $sql = "EXEC p_admarh_devuelveDEC
            @Credencial ='".$Credencial."'";

    $query = $this->secgral->query($sql);
    if($query->num_rows() > 0){
        return $query->result();
         }
    else
        return false;
  }

  //GSantos, 26.03.2021
  /**
   * Cancela un registro de DEC
   * @method cancelar_DEC
   * @author gsantos
   * @date   2021-03-26
   * @param  [type]                      $IdMovimiento    [description]
   * @return [type]                      recorset [description]
   */
  public function cancelar_DEC($IdMovimiento){
    $sql="exec p_admarh_cancelaDEC
                    @IdMovimiento = ".$IdMovimiento;

        $query = $this->secgral->query($sql);
        if($query != false){
            $reg = $query->row();
            return $reg->Resultado;
        }
        else return false;
  }

	/**
	 * @method valida_acepta_movimiento
	 * @author alopez
	 * @date
	 * @param  [type]                   $datos               [description]
	 * @return [type]                          [description]
	 */
	public function valida_acepta_movimiento($datos)
	{
		$parametros = "@ClaveMovimiento = ?,
									 @IdPersonal = ?,
									 @Credencial = ?,
									 @FechaInicio = ?,
									 @IdMovimiento = ?,
									 @IdMovimientoRel = ?";
		$sql = "exec p_admarh_ValidarAceptacionMovimiento ".$parametros;
		$query = $this->secgral->query($sql,$datos);
		if ($query != false) return $query->row();
		else return false;
	}

	public function acepta_movimiento($conexion,$datos)
	{
	// 	[p_admarh_AceptaMovimiento]
 // (   @IdMovimiento			int
 //   , @IdPersonal			varchar(6)
 //   , @Credencial			varchar(5)
 //   , @CredencialReemplazado	varchar(5)
 //   , @ClaveMovimiento		varchar(50) = ''
 //   , @FechaInicio			datetime
 //   , @FechaTerminacion		datetime
 //   , @ClaveNuevaCategoria	varchar(3)
 //   , @ClaveNuevaDependencia	varchar(3)
 //   , @IdMovimientoRel		int
 //   , @ObservacionesRH		varchar(100)
 //   , @MovSinEfecto			int
 //   , @MovActivar			int   	)
	}


}
