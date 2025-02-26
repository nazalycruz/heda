<?php if (!defined('BASEPATH')) exit('No permitir el acceso directo al script');

class Bitacora {
  private $CI;

  function __construct(){
		$this->CI = &get_instance();
		if (!$this->CI->load->is_loaded('PHPRequests')) $this->CI->load->library('PHPRequests',NULL,'requests_lib');
	}

	public function insertar($actividad,$referencia)
	{
		$datos_bitacora = array(
			'tabla'							=>	'BitacoraAdministrativos',
			'claveSistema'			=>	ltrim($this->CI->session->clvSistema, 'S'),
			'Actividad'					=>	$actividad,
			'Referencia'				=>	$referencia,
			'Credencial'				=>	$this->CI->session->Credencial,
			'UsuarioSistema'		=>	LimpiaCadena($this->CI->session->UsuarioNT),
			'IP_Maquina'				=>	$this->CI->session->IP,
			'claveDependencia'	=>	$this->CI->session->ClaveDependencia,
			'descDependencia'		=>	$this->CI->session->Dependencia,
			'UC' 								=> 	LimpiaCadena($this->CI->session->UsuarioNT)
		);

		$insertar = $this->CI->requests_lib->consulta_post('ws_consultas','Bitacora/insertar', $datos_bitacora);
	}

	public function consultar()
	{
		// code...
	}


}
