<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contabilidad_modelo extends CI_Model {

  function _construct(){
		parent::Model();

	}

  public function obtener_cuenta_contable($idPresupuesto,$partida){
    $dbContabilidad = ($idPresupuesto == '0002' ? $this->load->database('contabilidadCJ', TRUE) : $this->load->database('contabilidadTSJ', TRUE));

    $dbContabilidad->select('Codigo, Nombre');
    $dbContabilidad->from('Cuentas');
    $dbContabilidad->like('Codigo',$partida);
    $dbContabilidad->order_by('Nombre');

    $query = $dbContabilidad->get();
    $dbContabilidad->close();

    if( $query != false && $query->num_rows() > 0 ) return $query->result();
    else return false;
  }

}
