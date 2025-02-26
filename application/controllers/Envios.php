<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Envios extends IIS_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function correo_electronico()
	{
		$idNotificacion = $this->input->post('idNotificacion');
		$idNotificacion = '';
		$destinatario = $this->input->post('destinatario');
		$asunto = $this->input->post('asunto');
		$mensaje = $this->input->post('mensaje');

		if (!empty($destinatario) && !empty($asunto) && !empty($mensaje)) {
			$this->load->library('correo_clase','','libCorreo');
			try {
				set_time_limit(0);
				if (valid_email($destinatario)) {
					$configuracion = array(
						'asunto'		=> $asunto,
						'mensaje' 	=> $mensaje,
						'receptor'	=> $destinatario,
						'bcc'				=> '',
						'nombre'		=> LimpiaCadena($this->session->Nombre),
						'adjunto'		=> $adjunto
					);
					$enviarCorreo = $this->libCorreo->envia_correo($configuracion);
				}
				else $data = array('status' => TRUE, 'error' => TRUE, 'message' => 'La dirección de correo electrónico proporcionada no es válida.');
			}
			catch(Exception $e) {
				$data = array('status' => TRUE, 'error' => TRUE, 'message' => 'Ocurrió un error al intentar enviar el correo electrónico. Por favor, intenta de nuevo más tarde.');
			}
		}
		else $data = array('status' => FALSE, 'message' => 'Existen errores en los campos de captura. Por favor verifica.');
		$this->output->set_output(json_encode($data));

	}

}
