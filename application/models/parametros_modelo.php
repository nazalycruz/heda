<?php

class Parametros_modelo extends CI_Model //<<<RPERAZA(2018.07.02): CASU 0159/2018
{
	function __construct()
	{
		parent::__construct();
	}

	public function traer_parametro_por_id($IdParametro){
		$this->db->select();
        $this->db->from('ParametrosGenerales');
        $this->db->where('IdParametro', $IdParametro);

        $query = $this->db->get();
        if($query != false && $query->num_rows() > 0){
            return $query->row();
        }
        else return false;
	}

	public function traer_parametro_por_clave($ClaveParametro=0)
	{
		$this->db->select();
    $this->db->from('ParametrosGenerales');
    if (!empty($ClaveParametro)) $this->db->where('Clave', $ClaveParametro);

    $query = $this->db->get();
    if ($query != false && $query->num_rows() > 0) {
	    if (!empty($ClaveParametro)) return $query->row();
			else return $query->result();
    }
    else return false;
	}

	public function GetRangosAbiertos($Presupuesto, $cerrada=0){
		$this->db->select();
    $this->db->from('his_Nomina');
    $this->db->where(array('NominaCerrada' => $cerrada, 'PresupuestoId' => $Presupuesto));
		$this->db->order_by('FechaIni', 'DESC');

    $query = $this->db->get();
    if ($query != false && $query->num_rows() > 0) return $query->row();
    else return false;
	}

	public function GetParamSystemNomina($Presupuesto){
		$this->db->select();
    $this->db->from('ParamSystemNomina');
    $this->db->where('PresupuestoId', $Presupuesto);

    $query = $this->db->get();
    if ($query != false && $query->num_rows() > 0) return $query->row();
    else return false;
	}

	public function GetParametrosMovsRH($Presupuesto){
		$this->db->select();
		$this->db->from('ParametrosMovsRH');
		$this->db->where('Presupuesto', $Presupuesto);

		$query = $this->db->get();
		if ($query != false && $query->num_rows() > 0) return $query->row();
		else return false;
	}

	public function GetParamSistema($Presupuesto){
		$this->db->select();
		$this->db->from('ParametrosdeSistema');
		$this->db->where('Presupuesto', $Presupuesto);

		$query = $this->db->get();
		if ($query != false && $query->num_rows() > 0) return $query->row();
		else return false;
	}

	public function GetParamTiposNomina($Presupuesto){
		$this->db->select();
		$this->db->from('ParamSystemTipoNomimas');
		$this->db->where('Presupuesto', $Presupuesto);

		$query = $this->db->get();
		if ($query != false && $query->num_rows() > 0) return $query->row();
		else return false;
	}

	public function GetParametrosENomina($Presupuesto){
		$this->db->select();
		$this->db->from('Param_ValoresENomina');
		$this->db->where('Presupuestoid', $Presupuesto);

		$query = $this->db->get();
		if ($query != false && $query->num_rows() > 0) return $query->row();
		else return false;
	}

	public function GetParametrosGenerales(){
		$this->db->select();
		$this->db->from('ParametrosGenerales');
		$query = $this->db->get();
		if ($query != false && $query->num_rows() > 0) return $query->result_array();
		else return false;
	}

	public function traer_nomina_porid($idNomina){
		$this->db->from('his_Nomina');
		$this->db->where('Id',$idNomina);

		$query = $this->db->get();
		if ($query != false && $query->num_rows() > 0) return $query->row();
		else return false;
	}

}
?>
