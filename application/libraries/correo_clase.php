<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Correo_clase {

	private $_CI;
	public $mail_envia = '';
	public $email_recibe = '';
	public $strArchivos = '';

	public function __construct()
	{
		$this->_CI = &get_instance();
		$this->_CI->load->helper('file');
		$this->_CI->load->config('email');
		$this->_CI->load->library('email');
		$this->email_envia = $this->_CI->config->item('smtp_user');
	}

	public function envia_correo($configuracion,$attach=false){
		$envio = FALSE;
		$emisor = $this->email_envia;
		$receptor = $configuracion['receptor'];
		$bcc = $configuracion['bcc'];
		$receptor = (!empty($receptor) ? $receptor : $bcc);
		$nombre = $configuracion['nombre'];
		$asunto = $configuracion['asunto'];
		$adjuntos = $configuracion['adjunto'];
		$vista = 'correo_cj';
		$datos['mensaje'] = $configuracion['mensaje'];
		$msg = $this->_CI->load->view('plantillas/'.$vista, $datos, TRUE);

		$this->_CI->email->from($emisor, $nombre); //agregar nombre de la persona que envía
		$this->_CI->email->bcc($receptor, 100);
		$this->_CI->email->subject($asunto); //agregar el asunto
		$this->_CI->email->message($msg);
		$adjuntar = $this->adjuntar($adjuntos);

		if ($adjuntar) {
			$envio = TRUE; // PARA PRUEBAS
			// if ($this->_CI->email->send()) $envio = TRUE;
			// else log_message("correo", $this->_CI->email->print_debugger(array('headers')));
		}

		return array('status' => $envio, 'adjuntos' => $this->strArchivos);
	}

	private function adjuntar($adjuntos)
	{
	//	https://qa.wujigu.com/qa/?qa=749916/
		if (!empty($adjuntos)) {
			$rutaArchivos = APPPATH . 'third_party/correos/';
			delete_files($rutaArchivos, TRUE);
			$cConfig = array(
	        'upload_path'		=> $rutaArchivos,
					'max_size'			=> '3072',
	        'overwrite'   	=> 1,
					'allowed_types' => '*'
	    );
			$this->_CI->load->library('upload',$cConfig);
			$archivos = array();
			$contArchivos = count($_FILES['adjuntos']['name']);
			for ($i = 0; $i < $contArchivos; $i++)
	    {
				$_FILES['userfile'] = [
				    'name'     => $adjuntos['adjuntos']['name'][$i],
				    'type'     => $adjuntos['adjuntos']['type'][$i],
				    'tmp_name' => $adjuntos['adjuntos']['tmp_name'][$i],
				    'error'    => $adjuntos['adjuntos']['error'][$i],
				    'size'     => $adjuntos['adjuntos']['size'][$i]
				];
				$archivos[] = $adjuntos['adjuntos']['name'][$i];
  			$this->_CI->upload->initialize($cConfig);

				if ($this->_CI->upload->do_upload()) {
					$data = $this->_CI->upload->data();
					$this->_CI->email->attach($data['full_path']);
				}
				else {
					log_message("error","Error al intentar subir el archivo adjunto. Error: ". $this->_CI->upload->display_errors());
					return false;
				}
			}
			delete_files(APPPATH.'third_party/correos/', TRUE);
			$this->strArchivos = implode(", ",$archivos);
		}
		return true;
	}

}
