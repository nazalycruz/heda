<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auditoria_modelo extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	public function iniciar_transaccion(){
  	$this->db->trans_start();
  }

	public function terminar_transaccion($errores){
		if ($this->db->trans_status() === FALSE || $errores > 0){
			$this->db->trans_rollback();
		}
		else{
			$this->db->trans_commit();
		}
	}

 //GSantos, 2021.07.26
  /**
   * Obtener los datos de la auditoría
   * @method get_Datos_Auditoria
   * @author gsantos
   * @date   2021-07-26
   * @param  [type]    $idPresupuesto [Organo al que pertenece el usuario]
   * @param  [type]    $Anio      	  [Año de la auditoría]
   * @param  [type]    $pa      	  [Nombre del proceso a ejecutar]
   * @return [type]    recorset       [Registros que coindicen con los datos proporcionados]
   */
  public function get_Datos_Auditoria($pa, $presupuestoId, $anio, $fondoAuxiliar){
    $sql = "EXEC " .$pa.
            "  @presupuestoId ='".$presupuestoId.
            "', @Anio =".$anio.
            ", @fondoAuxiliar =".$fondoAuxiliar;

    $query = $this->db->query($sql);
    if ($query->num_rows() > 0) return $query;
    else return false;

  }

	public function get_reporte_auditoria_por_pa($proc_almacenado, $parametros)
	{
		$sql="exec ".$proc_almacenado;
		$i = 0;
		$str_params = " ";
		foreach ($parametros as $key => $value ){
			if ($i > 0) $str_params .= ", ";
			$str_params .= "@".$key." = ?";
			$i++;
		}

		$query = $this->db->query($sql.$str_params, $parametros);
		if ($query != false) return $query;
		else return false;
	}

}
