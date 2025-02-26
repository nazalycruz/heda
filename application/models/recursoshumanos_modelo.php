<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Recursoshumanos_modelo extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Trae el "Historial" de vacaciones del empleado
	 * @method obtener_control_vacaciones
	 * @author alopez
	 * @date   2019-11-25
	 * @param  [type]                     $idEmpleado [description]
	 * @param  [type]                     $tomadas    1: Tomadas, 2: NO tomadas, 3: Todas
	 * @return [type]                                 [description]
	 */
	public function obtener_control_vacaciones($idEmpleado,$tomadas='3'){
		$this->db->select();
		$this->db->from('vw_ControlVacaciones');
		$this->db->where('EmpleadoID',$idEmpleado);

		switch ($tomadas) {
			case '1':
				$this->db->where('Tomadas',1);
				break;
			case '2':
				$this->db->where('Tomadas',0);
				break;
		}

		$query = $this->db->get();
		if( $query != false && $query->num_rows() > 0 ) return $query->result();
		else return false;
	}

	/**
	 * Regresa los movs. que pudiera haber tenido el empleado el intervalo de tiempo dado
   * Ordenados Ascendentemente de acuerdo a la fecha de autorización(autorizados y aceptados)
	 * @method obtener_movsempleado_sisege
	 * @author alopez
	 * @date   2019-11-25
	 * @param  [type]                      $credencial [description]
	 * @param  [type]                      $FechaIni   [description]
	 * @param  [type]                      $FechaFin   [description]
	 * @return [type]                                  [description]
	 */
	public function obtener_movsempleado_sisege($credencial,$FechaIni,$FechaFin){
		$query = $this->secgral->get_where('Personal', array('NumNomina' => $credencial));
    if( $query != false ){
      if( $query->num_rows() == 1 ){
				$result = $query->row();
				if( !empty($result->IdPersonal) ){
					$parametros = "@IdPersonal=".escapaDatoParaBD($result->IdPersonal).
												",@fechaIni=".escapaDatoParaBD($FechaIni).
												",@fechaFin=".escapaDatoParaBD($FechaFin);

					$sql = "exec SP_MOVSTORH ".$parametros;

			    $query = $this->secgral->query($sql);
			    if( $query != false ){
			      if ( $query->num_rows() > 0) {
			        $result = $query->result();
			        return $result;
			      }
			      else return false;
			    }
			    else return false;
				}
				else return false;
			}
      else return false;
    }
    else return false;
	}

	public function subir_checada($parametros)
	{
		$str_param = "@Fecha = ?
								, @Credencial = ?
								, @Punchtime = ?
								, @NombreDispositivo = ?";
		$sql = "exec pa_admarh_RegistraChecada ".$str_param;
		$query = $this->db->query($sql, $parametros);
		return $query;
	}

	public function obtener_empleados_completo($fecha,$idPresupuesto)
	{
		$parametros = " @Fecha = ?,
										@PresupuestoId = ?";
		$sql = "exec pa_getEmpleadosTodos ".$parametros;
		$query = $this->db->query($sql,array($fecha,$idPresupuesto));

		if ($query != false) {
			if ($query->num_rows() > 0) {
				$result = $query->result();
				return $result;
			}
		}
		return false;
	}

	public function obtenerlistadoVacacional($idPresupuesto,$idPeriodo,$tomadas,$idDependencia){
		$parametros =
				" @PresupuestoId = ?,
   				@PeriodoId = ?,
   				@Tomadas = ?,
   				@IdDependencia = ?";
		$sql = "exec p_admarh_ListadoVacaciones ".$parametros;
		$query = $this->db->query($sql,array($idPresupuesto,$idPeriodo,$tomadas,$idDependencia));

		if($query != false){
			if($query->num_rows() > 0){
				$result = $query->result();
				return $result;
			}
		}
	}

}
