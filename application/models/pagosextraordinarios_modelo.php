<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pagosextraordinarios_modelo extends CI_Model {

  function _construct(){
		parent::Model();

	}

  public function iniciar_transaccion(){
    $this->db->trans_start();
  }

  public function terminar_transaccion($errores){
    if ($this->db->trans_status() === FALSE || $errores > 0) {
      $this->db->trans_rollback();
    }
    else {
      $this->db->trans_commit();
    }
  }

  public function listadoPagosExtraordinarios($idPeriodoPago){
    $parametros = "@IdNomina = ?";
    $sql = "exec pa_admarh_getPagosExtraordinarios ".$parametros;

    $query = $this->db->query($sql,$idPeriodoPago);
    if ($query != false) {
      if ($query->num_rows() > 0) {
        $result = $query->result();
        return $result;
      }
      else return false;
    }
    else return false;
  }

  //GSantos, 22.04.2021
  /**
   * Obtener el encabezado del pago extraordinario
   * @method obtenerPagoExtraordinario
   * @author gsantos
   * @date   2021-04-13
   * @param  [type]    $idPresupuesto [Organo al que pertenece el usuario]
   * @param  [type]    $IdNomina      [Nómina que se quiere validar]
   * @return [type]    recorset       [Registros erróneos]
   */
  public function obtenerPagoExtraordinario($IdPagoExt){
    $sql = "EXEC pa_admarh_getEncPagoExtraordinario
            @IdPagoExt =".$IdPagoExt;

    $query = $this->db->query($sql);
    if ($query->num_rows() > 0){
          return $query->row();
        }
      else{
          return false;
    }
  }

  //GSantos, 22.04.2021
  /**
   * Obtener el detalle del pago extraordinario
   * @method obtenerDetallePagoExtraordinario
   * @author gsantos
   * @date   2021-04-13
   * @param  [type]    $idPresupuesto [Organo al que pertenece el usuario]
   * @param  [type]    $IdNomina      [Nómina que se quiere validar]
   * @return [type]    recorset       [Registros erróneos]
   */
  public function obtenerDetallePagoExtraordinario($IdPagoExt){
    $sql = "EXEC pa_admarh_getDetPagoExtraordinario
            @IdPagoExt =".$IdPagoExt;

    $query = $this->db->query($sql);
    if($query->num_rows() > 0){
        return $query->result();
         }
    else
        return false;
  }

  public function valida_pago_extraordinario($datos)
  {
    //     [dbo].pa_admarh_existePagosExtraordinarios
    // (	 @IdNomina		int,
    // 	 @IdEmpleado	int,
    // 	 @FPago			datetime,
    // 	 @FDispersion	datetime	)
  }

  public function guarda_pago_extraordinario($datos)
  {
    $parametros = "@IdNomina= ?, @IdEmpleado= ?, @FPago = ?, @FDispersion = ?,@ENomina = ?, @IdEmisor = ?, @NumeroCuenta = ?, @IdCategoria = ?, @IdDependencia = ?";
    $sql = "exec pa_admarh_insPagoExt ".$parametros;
    $query = $this->db->query($sql,$datos);

    if ($query != false) {
      $row = $query->row();
      if (empty($row->Resultado)) return false;
      else return $row;
    }
    else return false;
  }

  public function actualizar_pago_extraordinario($idPagoExt,$idEmpleado,$datos)
  {
    $id = 0;
    $this->db->where(array('IdPagoExt' => $idPagoExt, 'IdEmpleado' => $idEmpleado));
    $query = $this->db->update('his_pagosext',$datos);
    if ($query) $id = $idPagoExt;
    return $id;
  }

  public function guarda_det_pago_extraordinario($datos)
  {
    $parametros = "@IdPagoExt= ?, @IdConcepto= ?, @Gravado = ?, @DiasExento = ?, @Monto = ?, @PresupuestoId = ?";
    $sql = "exec pa_admarh_insDetallePagoExt ".$parametros;
    $query = $this->db->query($sql,$datos);

    if ($query != false) {
      $row = $query->row();
      if (empty($row->Resultado)) return false;
      else return true;
    }
    else return false;
  }

  public function calcula_pago_extraodinario($datos)
  {
    $parametros = "@IdPagoExt= ?, @IdNomina = ?, @IdEmpleado = ?, @IdCategoria = ?";
    $sql = "exec pa_admarh_calculaPagoExt ".$parametros;
    $query = $this->db->query($sql,$datos);

    if ($query != false) {
      $row = $query->row();
      if (empty($row->Exito)) return false;
      else return true;
    }
    else return false;
  }

  public function elimina_pago_extraordinario($idPagoExt)
  {
    $parametros = "@IdPagoExt= ?";
    $sql = "exec pa_admarh_delPagoExt ".$parametros;
    $query = $this->db->query($sql,$idPagoExt);

    if ($query != false) return $query->row();
    else return false;
  }

  //GSantos, 17.05.2021
  /* Obtiene los pagos extraordinarios vigentes de un empleado en un periodo
   * @method tienePagosExtraordinariosVigentes
   * @author gsantos
   * @date   2021-05-17
   * @param  [type]    $IdNomina      [Nómina que se quiere validar]
   * @param  [type]    $IdEmpleado    [Id del empleado]
   * @return [type]    true/false     [Si tiene o no pagos pendientes por cerrar]
   */
  public function tienePagosExtraordinariosVigentes($IdNomina, $IdEmpleado){
    $parametros = "@IdNomina = ".$IdNomina.
                  ",@IdEmpleado = ".$IdEmpleado;
    $sql = "EXEC pa_admarh_getPagosExtVigXEmpleado ".$parametros;

    $query = $this->db->query($sql);
    if ($query->num_rows() > 0){
          return true;
        }
      else{
          return false;
    }
  }

  public function carga_listado_armonizacion($idNomina,$claveStatusARCON)
  {
    $parametros = "@IdNomina = ?, @claveStatusARCON = ?";
    $sql = "exec pa_admarh_getConf_controlARCON ".$parametros;
    $query = $this->db->query($sql,array($idNomina,$claveStatusARCON));
    if ($query != false) return $query->result();
    else return false;
  }

  public function carga_listado_pagos_armonizacion($folioMomento)
  {
    $parametros = "@FolioMomento = ?";
    $sql = "exec pa_admarh_getConf_controlARCONxFolio ".$parametros;
    $query = $this->db->query($sql,array($folioMomento));

    if ($query != false) return $query->result();
    else return false;
  }

}
