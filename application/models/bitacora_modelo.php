<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bitacora_modelo extends CI_Model{
	function _construct(){
		parent::Model();
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

	public function guarda_registro($datos)
	{
		$guarda = $this->db->insert('Bitacora',$datos);
		if ($guarda) return $this->db->insert_id();
		else return false;
	}
}
