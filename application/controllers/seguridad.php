<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seguridad extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function salir(){

		if( !empty($this->session->userdata('ParametrosSistema')) ) $this->session->unset_userdata('ParametrosSistema');

		if( $this->input->cookie("ruta_inicio_sesion") != null ){
			$ruta_inicio_sesion = $this->input->cookie("ruta_inicio_sesion");
			if( $this->session->numsistemas > 1 )
				redirect($ruta_inicio_sesion, 'refresh');
			else
				redirect($ruta_inicio_sesion.'inicio/salir', 'refresh');
		}
		else{
			redirect(RUTA_SEGURIDAD.'inicio/salir', 'refresh');
		}
	}
}
