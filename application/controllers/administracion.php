<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administracion extends IIS_Controller {

	public function __construct(){
		parent::__construct();
    $this->load->model('selectores_model','mod_selectores',TRUE);
    $this->load->model('catalogos_modelo','mod_cat',TRUE);
		$this->load->model('calculos_modelo','mCalculos');
    $this->load->model('parametros_modelo','mParametro',TRUE);
		$this->load->model('administracion_modelo','mAdmin',TRUE);
		$this->load->model('pjeyABC_model','pjeyModel',TRUE);
    $this->load->library('ParamSystem', NULL, 'param_lib');
    $this->load->library('Selectores_class', NULL, 'select_lib');
    $this->load->library('pjey_ABC');
	}

	/**
	 * carga la vista principal del envío de correos
	 * @method correo_masivo
	 * @author alopez
	 * @date
	 * @return [type]        [description]
	 */
	public function correo_masivo()
	{
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
		$quincenas = $this->select_lib->historial_nomina($idPresupuesto);
		$datos['quincenas'] = $quincenas;
		$this->load->view("administracion/envio_correo_masivo",$datos);
		// $this->load->view("administracion/envio_correo",$datos); //correo indiviual para notificaciones
	}

	/**
	 * carga el listado de empleados
	 * @method obtener_empleados_envio_correo_electronico
	 * @author alopez
	 * @date
	 * @return [type]                                     [description]
	 */
	public function obtener_empleados_envio_correo_electronico()
	{
		$idPeriodoPago = $this->input->post('quincena');
		$idPeriodoPago = (empty($idPeriodoPago) ? $this->param_lib->get_parametro('idPeriodoPago') : $idPeriodoPago);
		$abc = new pjey_ABC();
		$abc->set_table('det_Nomina');
		$abc->select("det_Nomina.Id_Empleado, Credencial, Nombre + ' ' + Apellido1 + ' ' + Apellido2 as Nombre, cd.Descripcion as Dependencia, cc.Descripcion as Categoria, Exper, dec.TipoEnvio, dec.Envios");
		$abc->set_primary_key('Id','cat_Empleados');
		$abc->set_relacion_n_n(array(
			array('cat_Empleados ce' => 'det_Nomina.Id_Empleado = ce.Id'),
			array('cat_Dependencias cd','det_Nomina.DependenciaId = cd.Id','left'),
			array('cat_Categorias cc','det_Nomina.CategoriaId = cc.Id', 'left'),
			array('hist_EnvioCorreoElectronico hec','det_Nomina.Id_Nomina = hec.idNomina', 'left'),
			array('det_EnvioCorreoElectronico dec','hec.idCorreoElectronico = dec.idCorreoElectronico AND det_Nomina.Id_Empleado = dec.idEmpleado', 'left'),
		));
		$abc->where('det_Nomina.Id_Nomina',$idPeriodoPago);
		$abc->group_by(array('det_Nomina.Id_Empleado', 'Credencial','Nombre','Apellido1','Apellido2', 'Exper','cd.Descripcion','cc.Descripcion','dec.TipoEnvio','dec.Envios'));
		$abc->set_defaults('exportarPDF', 'muestra_panel','filtros', 'acciones');
		$abc->set_key(1,'Credencial','asc');
		$abc->set_encabezados(array(
																'Exper'			=> 'Correo Electrónico',
																'Categoria'	=> 'Categoría',
																'TipoEnvio'	=> 'Estado'
															));
		$abc->set_acciones(array('titulo'=>'Enviar correo electrónico','texto'=>'','icono'=>'fa-solid fa-fw fa-envelope','accion'=>'enviar_correo_electronico'),
											 array('titulo'=>'Editar correo electrónico','texto'=>'','icono'=>'fa-solid fa-pen-to-square','accion'=>'editar_correo_electronico'));
	  $abc->set_formatoColumna(array('visible' => array(0,1,2,3,4,5,6)));
		$abc->set_configuraciones_extra(
		  array('idTbl' => 'tblCorreoMasivo'),
		  array('checkBox' => 0),
		  array('confFiltros' => array('filtrosSelect' => array(1,2,3,4,5,6))),
			array('btnExtra' => array('btnEnvioMasivo' => array('titulo'=>'Enviar correos electrónicos','texto'=>'<i class="fa-solid fa-fw fa-envelopes-bulk"></i>','action'=>''))),
			array('modCell'  => array('targets' => array(6),
															 	'arrColMod' => array(6,6,6,6), 'arrayBusca' => array(null,'1','2','3'), 'arrayMod' => array('No Enviado','Enviado','Enviado','Error al enviar')))
		);
		$output = $abc->construir();
		$respuesta['html'] = $this->load->view($output['archivo'], $output['datos'], TRUE);
		$datos['empleados'] = $output['datos']['result_data'];
		$respuesta['html_empleados'] = $this->load->view('administracion/empleados_correo_masivo', $datos, TRUE);

		$this->output->set_output(json_encode($respuesta));
	}

	public function obtener_historial_envio_correo_electronico()
	{
		$idPeriodoPago = $this->input->post('quincena');
		$idPeriodoPago = (empty($idPeriodoPago) ? $this->param_lib->get_parametro('idPeriodoPago') : $idPeriodoPago);
		$abc = new pjey_ABC();
		$abc->set_table('hist_EnvioCorreoElectronico');
		$abc->where('idNomina',$idPeriodoPago);
		$abc->set_defaults('exportarPDF', 'muestra_panel','filtros');
		$abc->set_key(1,'Credencial','asc');
		$abc->set_encabezados(array('Envios'	=> 'Envíos'));
		$abc->set_formatoColumna(array('visible' => array(2,3,4,5,6)));
		$abc->set_configuraciones_extra(
			array('idTbl' => 'tblHistCorreoMasivo'),
			array('modCell'  => array('targets' => array(5),
																'arrColMod' => array(5,5,5), 'arrayBusca' => array(null,'1','0'), 'arrayMod' => array('No Enviado','Enviado','Error al enviar')))
		);
		$output = $abc->construir();
	  $respuesta['html'] = $this->load->view($output['archivo'], $output['datos'], TRUE);

		$this->output->set_output(json_encode($respuesta));
	}

	/**
	 * [envio_correo_masivo description]
	 * @method envio_correo_masivo
	 * @author alopez
	 * @date
	 * @return [type]              [description]
	 */
	public function envio_correo_masivo()
	{
		//PENDIENTE: realizar validaciones en la función envio_correo_masivo()
		//PENDIENTE: en la vista de empleados agrupados, agregar el status si ya se envío a todo el grupo
		$idHistCorreo = $this->input->post('histCorreo');
		$asunto = $this->input->post('asunto');
		$mensaje = $this->input->post('mensaje');
		$quincena = $this->input->post('quincena');
		$remitente = $this->input->post('remitente');
		$empleados = $this->input->post('empleados');
		$empleados = json_decode($empleados,true);
		$adjunto = (isset($_FILES) ? $_FILES : null);
		$usuario = LimpiaCadena($this->session->UsuarioNT);
		$agrupado = $this->input->post('agrupado');
		$this->load->helper('email');
		$this->load->library('correo_clase','','libCorreo');
		$index = (empty($agrupado) ? 'Exper' : 5);
		$correos = array_column($empleados, $index);

		if ($this->form_validation->run('correo_electronico_masivo') == FALSE) {
			$data = array('status' => FALSE, 'message' => 'Existen errores en los campos de captura. Por favor verifique.', 'errores' => validation_errors());
		}
		else {
			try {
				set_time_limit(0);
				$correos_validos = array();
				foreach ($correos as $correo) {
			    if (filter_var($correo, FILTER_VALIDATE_EMAIL)) $correos_validos[] = $correo;
					else $procesados[$correo] = array('correo' => $correo, 'error' => true, 'msj' => 'Error: Correo no válido.');
				}
				if (!empty($correos_validos)) {
					$configuracion = array(
						'asunto'		=> $asunto,
						'mensaje' 	=> $mensaje,
						'receptor'	=> '',
						'bcc'				=> $correos_validos,
						'nombre'		=> (empty($remitente) ? LimpiaCadena($this->session->Nombre) : $remitente),
						'adjunto'		=> $adjunto
					);
					$enviarCorreo = $this->libCorreo->envia_correo($configuracion);
					$datos = array(
						'idNomina'	=> $quincena,
						'Asunto'		=> $asunto,
						'Mensaje' 	=> $mensaje,
						'Adjuntos'	=> $enviarCorreo['adjuntos'],
						'Estado'		=> ($enviarCorreo['status'] ? 1 : 0),
					);
					$idEnvioCorreoElectronico = $this->mAdmin->guarda_envio_correo($idHistCorreo,$datos,$usuario);
					if (!empty($idEnvioCorreoElectronico)) {
						$datosDetalle = array(
							'idCorreoElectronico'	=> $idEnvioCorreoElectronico,
							'TipoEnvio'						=> ($enviarCorreo['status'] ? 2 : 3),
							'FechaEnviado'				=> date("d/m/Y H:i:s"),
						);
						foreach ($empleados as $key => $empleado) {
							$datosDetalle['idEmpleado']	= (empty($agrupado) ? $empleado['Id_Empleado'] : $empleado[0]); ;
							$this->mAdmin->guarda_detalle_envio_correo($datosDetalle,$usuario);
						}
					}
					if ($enviarCorreo['status']) $data = array('status' => TRUE, 'message' => 'El correo electrónico se envió correctamente ('.count($correos_validos). ' receptor(es) válido(s)).');
					else $data = array('status' => TRUE,'error' => TRUE, 'message' => 'Ocurrió un error al intentar enviar el correo electrónico. Por favor, intenta de nuevo más tarde.');
				}
				else $data = array('status' => FALSE, 'message' => 'Ocurrió un error al intentar enviar el correo electrónico. No se recibió algún correo electrónico válido.');
			}
			catch(Exception $e){
				$data = array('status' => FALSE, 'message' => "Error al intentar enviar el correo electrónico. Error:".$e);
			}
		}
		$this->output->set_output(json_encode($data));
	}

	public function envio_correo_individual()
	{
		$idEmpleado = $this->input->post('idEmpleado');
		$idHistCorreo = $this->input->post('histCorreo');
		$correo = $this->input->post('correo');
		$asunto = $this->input->post('asunto');
		$mensaje = $this->input->post('mensaje');
		$quincena = $this->input->post('quincena');
		$adjunto = isset($_FILES) ? $_FILES : null;
		$usuario = LimpiaCadena($this->session->UsuarioNT);
		$this->load->helper('email');
		$this->load->library('correo_clase','','libCorreo');

		if ($this->form_validation->run('correo_electronico_masivo') == FALSE) {
			$data = array('status' => FALSE, 'message' => 'Existen errores en los campos de captura. Por favor verifique.', 'errores' => validation_errors());
		}
		else {
			try {
				set_time_limit(0);
				if (valid_email($correo)) {
					$configuracion = array(
						'asunto'		=> $asunto,
						'mensaje' 	=> $mensaje,
						'receptor'	=> $correo,
						'bcc'				=> '',
						'nombre'		=> LimpiaCadena($this->session->Nombre),
						'adjunto'		=> $adjunto
					);
					$enviarCorreo = $this->libCorreo->envia_correo($configuracion);
					$datos = array(
						'idNomina'	=> $quincena,
						'Asunto'		=> $asunto,
						'Mensaje' 	=> $mensaje,
						'Adjuntos'	=> $enviarCorreo['adjuntos'],
						'Estado'		=> ($enviarCorreo['status'] ? 1 : 0),
					);
					$idEnvioCorreoElectronico = $this->mAdmin->guarda_envio_correo($idHistCorreo,$datos,$usuario);
					if (!empty($idEnvioCorreoElectronico)) {
						$datosDetalle = array(
							'idCorreoElectronico'	=> $idEnvioCorreoElectronico,
							'idEmpleado'					=> $idEmpleado,
							'TipoEnvio'						=> ($enviarCorreo['status'] ? 1 : 3),
							'FechaEnviado'				=> date("d/m/Y H:i:s"),
						);
						$this->mAdmin->guarda_detalle_envio_correo($datosDetalle,$usuario);
					}

					if ($enviarCorreo['status']) $data = array('status' => TRUE, 'error' => FALSE, 'message' => 'Los correos electrónicos se enviaron correctamente.');
					else $data = array('status' => TRUE, 'error' => TRUE, 'message' => 'Ocurrió un error al intentar enviar el correo electrónico. Por favor, intenta de nuevo más tarde.');
				}
				else $data = array('status' => FALSE, 'message' => 'Existen errores en los campos de captura. Por favor verifique.', 'errores' => 'Correo electrónico no válido: '.$correo);
			}
			catch(Exception $e) {
				$data = array('status' => TRUE, 'error' => TRUE, 'message' => 'Ocurrió un error al intentar enviar el correo electrónico. Por favor, intenta de nuevo más tarde.');
			}
		}
		$this->output->set_output(json_encode($data));
	}

	public function obtener_correo_electronico()
	{
		$idCorreoElectronico = $this->input->post('idCorreoElectronico');
		if (!empty($idCorreoElectronico)) {
			$abc = new pjey_ABC();
			$abc->set_tipo_result(true);
			$abc->where('idCorreoElectronico',$idCorreoElectronico);
			$correoElectronico = $abc->query('hist_EnvioCorreoElectronico');
			if (!empty($correoElectronico)) {
				$data = array('status' => true, 'asunto' => $correoElectronico->Asunto, 'mensaje' => $correoElectronico->Mensaje);
			}
			else $data = array('status' => false, 'message' => 'No se encontró un correo electrónico con la información proporcionada.');
		}
		else $data = array('status' => false, 'message' => 'No se recibió el parámetro esperado.');

		$this->output->set_output(json_encode($data));
	}

	//para envio masivo de correos individualmente
	// foreach ($empleados as $key => $empleado) {
	// 	if (!empty($empleado['Exper'])) {
	// 		if (valid_email($empleado['Exper'])) {
	// 			$configuracion = array(
	// 				'asunto'		=> $asunto,
	// 				'mensaje' 	=> $mensaje,
	// 				'receptor'	=> $empleado['Exper'],
	// 				'nombre'		=> LimpiaCadena($this->session->Nombre)
	// 			);
	// 			$enviarCorreo = $this->libCorreo->envia_correo($configuracion);
	//
	// 			if ($enviarCorreo) {
	// 				$data = array('status' => TRUE, 'message' => 'El correo electrónico	se envió correctamente.');
	// 			}
	// 			else {
	// 				$data = array('status' => TRUE, 'message' => 'Ocurrió un error al intentar enviar el correo electrónico. Por favor, intentar de nuevo más tarde.');
	// 			}
	// 		}
	// 		else $data = array('status' => FALSE, 'message' => 'Correo electrónico no válido: '.$empleado['Exper']);
	// 	}
	// }

} //de la clase
