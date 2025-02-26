<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administracion_modelo extends CI_Model{
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

	/**
	 * [guarda_envio_correo description]
	 * @method guarda_envio_correo
	 * @author alopez
	 * @date
	 * @param  [type]              $idHistCorreo               [description]
	 * @param  [type]              $datos                      [description]
	 * @param  [type]              $usuario                    [description]
	 * @return [type]                            [description]
	 */
	public function guarda_envio_correo($idCorreoElectronico,$datos,$usuario)
	{
		$id = 0;
		$query = $this->db->get_where('hist_EnvioCorreoElectronico', array('idCorreoElectronico' => $idCorreoElectronico));
		if ($query->num_rows() > 0) {
			$enviado = $query->row();
      $this->db->where('idCorreoElectronico',$idCorreoElectronico);
			$datos['Envios'] = (int)$enviado->Envios + 1;
			$datos['FUM'] = date("d/m/Y H:i:s");
			$datos['UUM'] = $usuario;
      $query = $this->db->update('hist_EnvioCorreoElectronico',$datos);
      if ($query) $id = $enviado->idCorreoElectronico;
    }
    else {
			$datos['Envios'] = 1;
			$datos['UC'] = $usuario;
      $this->db->insert('hist_EnvioCorreoElectronico',$datos);
      $id = $this->db->insert_id();
    }
		return $id;
	}

	public function guarda_detalle_envio_correo($datos,$usuario)
	{
		$id = 0;
		$query = $this->db->get_where('det_EnvioCorreoElectronico', array('idCorreoElectronico' => $datos['idCorreoElectronico'], 'idEmpleado' => $datos['idEmpleado']));
		if ($query->num_rows() > 0) {
			$enviado = $query->row();
			$idDetCorreoElectronico = $enviado->idDetCorreoElectronico;
			$datos['Envios'] = (int)$enviado->Envios + 1;
			$datos['FUM'] = date("d/m/Y H:i:s");
			$datos['UUM'] = $usuario;
			$this->db->where('idDetCorreoElectronico',$idDetCorreoElectronico);
      $query = $this->db->update('det_EnvioCorreoElectronico',$datos);
      if ($query) $id = $idDetCorreoElectronico;
    }
    else {
			$datos['Envios'] = 1;
			$datos['UC'] = $usuario;
      $this->db->insert('det_EnvioCorreoElectronico',$datos);
      $id = $this->db->insert_id();
    }
		return $id;
	}

	public function guarda_formacion_academica($datos,$idDetFormacion=0,$usuario='')
	{
		$id = 0;
    $query = $this->db->get_where('det_FormacionAcademica', array('idDetFormacion' => $idDetFormacion));
    if ($query->num_rows() > 0) {
      $this->db->where('idDetFormacion',$idDetFormacion);
			$datos['FUM'] = date("d/m/Y H:i:s");
			$datos['UUM'] = $usuario;
      $query = $this->db->update('det_FormacionAcademica',$datos);
      if ($query) $id = $idDetFormacion;
    }
    else {
			$datos['UC'] = $usuario;
      $this->db->insert('det_FormacionAcademica',$datos);
      $id = $this->db->insert_id();
    }

    return $id;
	}

}
