<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH."/third_party/Requests/Requests.php";
class PHPRequests {

		protected $CI;
		protected $ws = null;
		public $config_ws;

		public function __construct(){
			Requests::register_autoloader();

			$this->CI =& get_instance();

			if ($this->CI->session->userdata('loginPJE') == null | $this->CI->session->userdata('loginPJE') == false) {
				$this->CI->load->view('errors/html/session');
			}
			$ruta_wsconsultas = WS_CONSULTAS;

			if (ENVIRONMENT === 'production') {
				$this->CI->load->model('parametros_modelo','mParam');
				$ruta_wsconsultas = rtrim($this->CI->mParam->traer_parametro_por_clave('WS_CONSULTAS')->Origen, '/') . '/';
			}

			$ws_consultas = array('clave' => 'consultas', 'ruta' => $ruta_wsconsultas, 'usuario' => '', 'password' => '');
			$this->config_ws['ws_consultas'] = $ws_consultas;
			$this->CI->load->library('ParamSystem', NULL, 'param_lib');
		}

		public function set_webservice($ws = null){
			if (ENVIRONMENT === 'development') { $this->ws = (!empty(constant($ws)) ? constant($ws) : ''); }
			else { $this->ws = $this->CI->param_lib->get_parametro($ws); }

			return (!empty($this->ws) ? rtrim($this->ws, '/') . '/' : false);
		}

		public function consulta_webservice_post($url,$data,$responseData='data')
		{
			if (!empty($this->ws)){
				set_time_limit(0);
				$ruta = $this->ws.$url;
				$response = WpOrg\Requests\Requests::post($ruta, array('Accept' => 'application/json'), $data);
				if ($response->success) {
					$respuesta = $response->decode_body(false);
					if ($respuesta->status === FALSE) {
						log_message('error', $respuesta->message);
						$datos = array('status' => FALSE, 'message' => $respuesta->message);
					}
					else $datos = array('status' => TRUE, 'message' => '', 'data' => (empty($respuesta->{$responseData}) ? '' : $respuesta->{$responseData})); //éxito
				}
				else {
					log_message('error', 'Error al consultar los datos en: '.$this->ws.'. Ruta: '.$ruta);
					$datos = array('status' => FALSE, 'message' => 'Error al consultar los datos en el webservice ('.$this->ws.').');
				}
			}
			else {
				log_message('error', 'No se ha configurado el webservice solicitado.');
				$datos = array('status' => FALSE, 'message' => 'No se ha configurado el webservice solicitado.');
			}
			return $datos;
		}

		public function consulta_post($ws, $metodo, $parametros, $responseData='data', $function_origen='')
		{
			//El parámetro $function_origen solo sirve para saber quién llamó al método, con fines de rastreo de errores
			$datos = array();
			if ($function_origen == "") $function_origen = debug_backtrace()[1]["class"]."/".debug_backtrace()[1]["function"];

			try {
				if (isset($this->config_ws[$ws])) {
					$ruta = $this->config_ws[$ws]['ruta'].'index.php/api/'.$metodo;

					$opciones  = array();
					if (strlen($this->config_ws[$ws]['usuario']) > 0 && strlen($this->config_ws[$ws]['password']) > 0) {
						$opciones = array(
							'auth' => new WpOrg\Requests\Auth\Basic(array($this->config_ws[$ws]['usuario'], $this->config_ws[$ws]['password']))
						);
					}
					$response = WpOrg\Requests\Requests::post($ruta, array('Accept' => 'application/json'), $parametros, $opciones);
					if ($response->success) {
						$respuesta = $response->decode_body(false);

						if ($respuesta->status === FALSE) {
								//En caso de no existir el atributo [error] busca el atributo [errores], si este tampoco existe entonces busca [message]
							$respuesta->error = ( isset($respuesta->error) ? $respuesta->error : ( isset($respuesta->errores) ? $respuesta->errores : ( isset($respuesta->message) ? $respuesta->message : $respuesta->mensaje)));
							log_message('error', '['.$ws.'] => Error en '.$metodo.($function_origen != '' ? ', llamado desde '.$function_origen."()" : '').": ".$respuesta->error);
							$datos = array('status' => FALSE, 'error' => $respuesta->error, 'message' => @$respuesta->message);
						}
						else {
							$datos = array('status' => TRUE, 'error' => '', 'data' => (empty($respuesta->{$responseData}) ? '' : $respuesta->{$responseData}));
						}
					}
					else {
						$tmp_error = (empty($response->body->error) ? '' : json_decode($response->body)->error);
						log_message('error', '['.$ws.'] => Error en '.$metodo.($function_origen != '' ? ', llamado desde '.$function_origen."()" : '').": ".$tmp_error);
						$datos = array('status' => FALSE, 'error' => 'Error en la solicitud a '.$ws);
					}
				}
				else {
					log_message('error', 'No existe o no se ha configurado la clave '.$ws.($function_origen != '' ? ', llamado desde '.$function_origen."()" : ''));
					$datos = array('status' => FALSE, 'error' => 'No existe o no se ha configurado la clave '.$ws);
				}

				return $datos;
			}
			catch(Exception $e) {
				log_message('error', '['.$ws.'] => Error de ejecución en '.$metodo.($function_origen != '' ? ', llamado desde '.$function_origen."()" : '').": ".$e->getMessage());
				$datos = array('status' => FALSE, 'error' => 'Error de ejecución en '.__FUNCTION__." con ".$ws);
			}
		}

}
