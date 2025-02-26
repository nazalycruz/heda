<?php
class IIS_Controller extends CI_Controller {

	public function __construct(){
		parent::__construct();

		if( $this->session->userdata('loginPJE') == null | $this->session->userdata('loginPJE') == false ){
			redirect(base_url().'seguridad/salir', 'refresh');
		}
		return false;
	}
}
