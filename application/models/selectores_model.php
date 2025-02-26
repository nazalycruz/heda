<?php
class Selectores_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	public function ciudades($EstadoID,$CiudadId){
		$this->db->select('CiudadId, Ciudad');
		$this->db->from('Cat_Ciudades');
		$this->db->order_by('Ciudad');
		if( $CiudadId >0  )
			$this->db->where('CiudadId', $CiudadId);
		else
			$this->db->where('EstadoID',$EstadoID);

		$query = $this->db->get();
		if($query != false)	return $query->result();
		else return false;
	}

	public function estados($EstadoID){
		$this->db->select('EstadoID, Estado');
		$this->db->from('Cat_Estados');
		if( $EstadoID >0  )
			$this->db->where('EstadoID', $EstadoID);


		$query = $this->db->get();
		if($query != false)	return $query->result();
		else return false;
	}

	public function colonias($CiudadId,$ColoniaId){
		$this->db->select('ColoniaId, Colonia');
		$this->db->from('Cat_Colonias');
		$this->db->order_by('Colonia');

		if( $ColoniaId >0  )
			$this->db->where('ColoniaId', $ColoniaId);
		else
			$this->db->where('CiudadId',$CiudadId);

		$query = $this->db->get();
		if($query != false)	return $query->result();
		else return false;
	}

	public function escuelas($EscuelaId){
		$this->db->select('EscuelaId,Nombre');
		$this->db->from('cat_Escuelas');
		if( $EscuelaId > 0  )
			$this->db->where('EscuelaId', $EscuelaId);

		$query = $this->db->get();
		if($query != false)	return $query->result();
		else return false;
	}

	public function escolaridad($Id){
		$this->db->select('Descripcion,Id');
		$this->db->from('cat_Escolaridad');
		if( $Id > 0  )
			$this->db->where('Id', $Id);

		$query = $this->db->get();
		if($query != false)	return $query->result();
		else return false;
	}

	public function tipodocto_estudiante($Id){  //<<<RPERAZA(2018.07.05): CASU 0159/2018
		$this->db->select('Descripcion,Id');
		$this->db->from('cat_TipoDoctoEstudiante');
		if( $Id >0  )
			$this->db->where('Id', $Id);

		$query = $this->db->get();
		if($query != false)	return $query->result();
		else return false;
	}

	public function tipodocto_empleado($Id){  //<<<RPERAZA(2018.07.05): CASU 0159/2018
		$this->db->select('Descripcion,Id');
		$this->db->from('cat_TipoDoctoEmpleado');
		if( $Id >0  )
			$this->db->where('Id', $Id);

		$query = $this->db->get();
		if($query != false)	return $query->result();
		else return false;
	}

	public function parentesco_pareja($Id){  //<<<RPERAZA(2018.07.05): CASU 0159/2018
		$this->db->select('Descripcion,Id');
		$this->db->from('cat_ParentescoPareja');
		if( $Id >0  )
			$this->db->where('Id', $Id);

		$query = $this->db->get();
		if($query != false)	return $query->result();
		else return false;
	}

	public function parentescos($id = 0){
		$this->db->select('idParentesco,Descripcion');
		$this->db->from('cat_Parentescos');
		$this->db->where('Activo', 1);
		if( $id > 0  ) $this->db->where('idParentesco', $id);

		$query = $this->db->get();
		if( $query != false )	return $query->result();
		else return false;
	}

	public function reportes_auditoria($id = 0){
		$this->db->select('Id,Descripcion');
		$this->db->from('cat_ReportesAuditoria');
		$this->db->where('Activo', 1);
		if( $id > 0  ) $this->db->where('id', $id);

		$query = $this->db->get();
		if( $query != false )	return $query->result();
		else return false;
	}

	public function hist_correos($idNomina)
	{
		$query = $this->db->get_where('hist_EnvioCorreoElectronico', array('idNomina' => $idNomina));
		if ($query != false) {
			if ($query->num_rows() > 0) return $query->result();
			else return false;
		}
		else return false;
	}

	//GSantos, 2022.06.15 CASU 1080-2022
	public function regimen_fiscal($id = 0){
		$this->db->select('Id,Clave, Descripcion');
		$this->db->from('cat_TipoRegimen');
		$this->db->where('Activo', 1);
		if ($id > 0) $this->db->where('id', $id);

		$query = $this->db->get();
		if ($query != false)	return $query->result();
		else return false;
	}

}
