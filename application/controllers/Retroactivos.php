<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Retroactivos extends IIS_Controller {
	public function __construct(){
    parent::__construct();
    $this->load->model('nomina_modelo','mNomina');
		$this->load->model('retroactivos_modelo','mRetroactivos');
    $this->load->library('Selectores_class', NULL, 'select_lib');
		$this->load->library('ParamSystem', NULL, 'param_lib');
		$this->load->model('catalogos_modelo','mCat');
    $this->load->library('pjey_ABC');
  }

	public function index()
	{
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
		$idPeriodoPago = $this->param_lib->get_parametro('idPeriodoPago');
		$quincenas = $this->mNomina->busca_historial_nomina();
		foreach ($quincenas as $item) {
			$anio = date("Y", strtotime($item->FechaIni));
			if ($item->PresupuestoId == $idPresupuesto && $item->NominaCerrada == 1 && $anio == date('Y')) $quincena[] = $item;
		}
		$quincena = (empty($quincena) ? '' : $quincena);
		$datos['idPeriodoPago'] = $idPeriodoPago;
 		$datos['quincenas'] = $this->select_lib->from_recordset($quincena, 0, true, true, 'ID', 'ID', 'Quincena');

		$this->load->view('retroactivos/index',$datos);
	}

	public function obtener_empleados_quincena()
	{
		$idNomina = $this->input->post('quincena');
		if (!empty($idNomina)) {
			$empleados = $this->mNomina->obtener_empleados_nomina($idNomina);
			if (!empty($empleados)) {
				$abc = new pjey_ABC();
				$abc->set_resultado($empleados);
				$abc->set_key(1,'Credencial','asc');
				$abc->set_defaults('muestra_panel','btnborrarFiltros','cargando','acciones');
				$abc->set_configuraciones_extra(array('idTbl' => 'tblEmpleadosRetroactivo'));
				$abc->set_formatoColumna(array('visible' => array(1,2)));
	      $abc->set_acciones(array('titulo'=>'Calcular','texto'=>'','icono'=>'fa-solid fa-calculator','accion'=>'calcula_retroactivo_empleado'));
				$output = $abc->construir();
				$vista = $this->load->view($output['archivo'], $output['datos'],TRUE);
				$data = array('status' => true, 'html' => $vista);
			}
			else $data = array('status' => false, 'message' => 'No se encontraron empleados para la quincena seleccionada.');
		}
		else $data = array('status' => false, 'message' => 'Ocurrió un error al realizar la consulta. No se recibió el parámetro esperado.');

		$this->output->set_output(json_encode($data));
	}

	/**
	 * [calcular_quincena description]
	 * @method calcular_quincena
	 * @author alopez
	 * @date
	 * @return [type]            [description]
	 */
	public function calcular_quincena()
	{
    $this->benchmark->mark('inicia_calculo');
		$idPeriodo = $this->input->post('quincena');
		$registros = $this->input->post('registros');
		$registros = json_decode($registros,true);
		$usuario = LimpiaCadena($this->session->UsuarioNT);
		$error = false;

		if (!empty($idPeriodo) && !empty($registros)) {
			try {
	    	set_time_limit(0);
				$this->mRetroactivos->iniciar_transaccion();
	      foreach ($registros as $empleado) {
					if (empty($error)) {
						$idEmpleado = $empleado['Id_Empleado'];
						$credencial = $empleado['Credencial'];
						$datos = array($idPeriodo,$idEmpleado,0,$usuario);
						$calcular = $this->mRetroactivos->calcula_quincena($datos);
						if (empty($calcular)) {
							$error = true;
							$msj = 'Ocurrió un error al intentar procesar al empleado con credencial '.$credencial.'. Es necesario procesar nuevamente.';
							$data = array('status' => FALSE,'message' => $msj);
							log_message("calculo", "Controlador - retroactivos/calcular_quincena(): ".$msj);
						}
					}
				}
				$this->mRetroactivos->terminar_transaccion((empty($error) ? 0 : 1));
			}
			catch(Exception $e){
				$error = true;
				$data = array('status' => FALSE, 'message' => 'Se generó algún error durante la ejecución de la consulta.');
				log_message("calculo", "Controlador - retroactivos/calcular_quincena(): ".$e->getMessage());
				$this->CI->mCalculos->terminar_transaccion(1);
			}

	    $this->benchmark->mark('finaliza_calculo');
			$tiempo_exec = $this->benchmark->elapsed_time('inicia_calculo', 'finaliza_calculo', 2);

			$bitacora = new Bitacora();
			$bitacora->insertar($this->router->fetch_class().'/'.__FUNCTION__, 'Calculando quincena retroactivo. Datos: '.json_encode(array('Periodo' => $idPeriodo, 'Empleados' => count($registros))));
	    if (empty($error)) $data = array('status' => TRUE, "message" => 'Cálculo de Retroactivo realizado en: '.convert_to_string_time($tiempo_exec));
		}
		else $data = array('status' => false, 'message' => 'Ocurrió un error al realizar el cálculo. No se recibió el parámetro esperado.');

    $this->output->set_output(json_encode($data));
	}

	/**
	 * [calcular_empleado description]
	 * @method calcular_empleado
	 * @author alopez
	 * @date
	 * @return [type]            [description]
	 */
	public function calcular_empleado()
	{
		$idPeriodo = $this->input->post('quincena');
		$idEmpleado = $this->input->post('idEmpleado');
		$configurado = $this->input->post('configurado');
		$configurado = (empty($configurado) ? 0 : 1);
		$usuario = LimpiaCadena($this->session->UsuarioNT);
		$error = false;
		if (!empty($idPeriodo) && !empty($idEmpleado)) {
			try {
				$this->mRetroactivos->iniciar_transaccion();
				$datos = array($idPeriodo,$idEmpleado,$configurado,$usuario);
				$calcular = $this->mRetroactivos->calcula_quincena($datos);
				if (empty($calcular)) {
					$error = true;
					$msj = 'Ocurrió un error al intentar procesar al empleado. Es necesario procesar nuevamente.';
					$data = array('status' => FALSE,'message' => $msj);
					log_message("calculo", "Controlador - retroactivos/calcular_empleado(): ".$msj);
				}
				else {
					$idPeriodoPago = $this->param_lib->get_parametro('idPeriodoPago');
					$idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
					$datos_total = array($idPeriodoPago,$idPresupuesto,$idEmpleado);
					$calcula_total = $this->mRetroactivos->calcula_total($datos_total);
					if (empty($calcula_total)) {
						$error = true;
						$msj = 'Ocurrió un error al intentar configurar el retroactivo.';
						$data = array('status' => FALSE,'message' => $msj);
						log_message("calculo", "Controlador - retroactivos/calcular_total(): ".$msj);
					}
					else $data = array('status' => TRUE, "message" => 'Cálculo de Retroactivo Total realizado correctamente');
				}
				$this->mRetroactivos->terminar_transaccion((empty($error) ? 0 : 1));
			}
			catch(Exception $e){
				$this->mRetroactivos->terminar_transaccion(1);
				$data = array('status' => FALSE, 'message' => 'Se generó algún error durante la ejecución de la consulta.');
				log_message("calculo", "Controlador - retroactivos/calcular_empleado(): ".$e->getMessage());
			}
			$bitacora = new Bitacora();
			$bitacora->insertar($this->router->fetch_class().'/'.__FUNCTION__, 'Calculando retroactivo empleado. Datos: '.json_encode($datos));
		}
		else $data = array('status' => false, 'message' => 'Ocurrió un error al realizar el cálculo. No se recibió el parámetro esperado.');

		$this->output->set_output(json_encode($data));
	}

	public function consultar_empleados_retroactivo()
	{
		$idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
		$idPeriodoPago = $this->param_lib->get_parametro('idPeriodoPago');
		$quincenas = $this->mNomina->busca_historial_nomina();
		foreach ($quincenas as $item) {
			$anio = date("Y", strtotime($item->FechaIni));
			if ($item->PresupuestoId == $idPresupuesto && $item->NominaCerrada == 1 && $anio == date('Y')) $quincena[] = $item->ID;
		}
		$quincena = (empty($quincena) ? '' : $quincena);
		$empleados = $this->mRetroactivos->obtener_empleados_retroactivo($quincena);
		if (!empty($empleados)) {
			$abc = new pjey_ABC();
			$abc->set_resultado($empleados);
			$abc->set_key(1,'Credencial','asc');
			$abc->set_defaults('muestra_panel','btnborrarFiltros','cargando','acciones');
			$abc->set_configuraciones_extra(array('idTbl' => 'tblConfiguraRetroactivo'));
			$abc->set_formatoColumna(array('visible' => array(1,2)));
			$abc->set_acciones(
				// array('titulo'=>'Revisar retroactivo','texto'=>'','icono'=>'fa-solid fa-eye','accion'=>'revisar_retroactivo_empleado'),
												 array('titulo'=>'Configurar Empleado','texto'=>'','icono'=>'fa-solid fa-sliders','accion'=>'configura_retroactivo_empleado'),
												 array('titulo'=>'Re-Calcular Empleado','texto'=>'','icono'=>'fa-solid fa-calculator','accion'=>'calcula_retroactivo_configurado'));
			$output = $abc->construir();
			$vista = $this->load->view($output['archivo'], $output['datos'],TRUE);
			$data = array('status' => true, 'html' => $vista);
		}
		else $data = array('status' => false, 'message' => 'No se encontraron empleados con retroactivo calculado.');

		$this->output->set_output(json_encode($data));
	}

	public function calcular_total()
	{
		$idPeriodoPago = $this->param_lib->get_parametro('idPeriodoPago');
		$idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
		$error = false;

		if (!empty($idPeriodoPago) && !empty($idPresupuesto)) {
			try {
	    	set_time_limit(0);
				$this->mRetroactivos->iniciar_transaccion();
				$datos = array($idPeriodoPago,$idPresupuesto,'%');
				$calcular = $this->mRetroactivos->calcula_total($datos);
				if (empty($calcular)) {
					$error = true;
					$msj = 'Ocurrió un error al intentar configurar el retroactivo.';
					$data = array('status' => FALSE,'message' => $msj);
					log_message("calculo", "Controlador - retroactivos/calcular_total(): ".$msj);
				}
				else $data = array('status' => TRUE, "message" => 'Cálculo de Retroactivo Total realizado correctamente');
				$this->mRetroactivos->terminar_transaccion((empty($error) ? 0 : 1));
			}
			catch(Exception $e){
				$this->mRetroactivos->terminar_transaccion(1);
				$data = array('status' => FALSE, 'message' => 'Se generó algún error durante la ejecución de la consulta.');
				log_message("calculo", "Controlador - retroactivos/calcular_total(): ".$e->getMessage());
			}
			$bitacora = new Bitacora();
			$bitacora->insertar($this->router->fetch_class().'/'.__FUNCTION__, 'Calculando retroactivo total. Datos: '.json_encode($datos));
		}
		else $data = array('status' => false, 'message' => 'Ocurrió un error al realizar el cálculo. No se encontró información del período actual.');

		$this->output->set_output(json_encode($data));
	}

	public function configurar()
	{
		$idPeriodoPago = $this->param_lib->get_parametro('idPeriodoPago');
		$idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
		$idEmpleado = $this->input->post('idEmpleado');
		$idEmpleado = (empty($idEmpleado) ? '%' : $idEmpleado);
		$error = false;

		if (!empty($idPeriodoPago) && !empty($idPresupuesto) && !empty($idEmpleado)) {
			try {
				$this->mRetroactivos->iniciar_transaccion();
				$datos = array($idPeriodoPago,$idPresupuesto,$idEmpleado);
				$calcular = $this->mRetroactivos->configurar_empleado($datos);
				if (empty($calcular)) {
					$error = true;
					$msj = 'Ocurrió un error al intentar configurar al empleado.';
					$data = array('status' => FALSE,'message' => $msj);
					log_message("calculo", "Controlador - retroactivos/configurar(): ".$msj);
				}
				else $data = array('status' => TRUE, "message" => 'El proceso de configuración del Retroactivo se realizó correctamente');
				$this->mRetroactivos->terminar_transaccion((empty($error) ? 0 : 1));
			}
			catch(Exception $e){
				$this->mRetroactivos->terminar_transaccion(1);
				$data = array('status' => FALSE, 'message' => 'Se generó algún error durante la ejecución de la consulta.');
				log_message("calculo", "Controlador - retroactivos/configurar(): ".$e->getMessage());
			}
			$bitacora = new Bitacora();
			$bitacora->insertar($this->router->fetch_class().'/'.__FUNCTION__, 'Configurando empleado. Datos: '.json_encode($datos));
		}
		else $data = array('status' => false, 'message' => 'Ocurrió un error al intentar realizar la configuración del retroactivo. No se recibió el parámetro esperado.');

		$this->output->set_output(json_encode($data));
	}

	public function consultar_total()
	{
		$idNomina = $this->param_lib->get_parametro('idPeriodoPago');

		$empleados = $this->mRetroactivos->consulta_total($idNomina);
		if (!empty($empleados)) {
			$conceptos = $empleados->num_fields();
			$empleados = $empleados->result();
			$conceptos = range(2, ($conceptos -1));
			$abc = new pjey_ABC();
			$abc->set_resultado($empleados);
			$abc->set_key(0,'Credencial','asc');
			$abc->set_defaults('muestra_panel','btnborrarFiltros','cargando');
			$abc->set_configuraciones_extra(array('idTbl' => 'tblTotalesRetroactivo'));
			$abc->set_formatoColumna(array('moneda' => $conceptos));
			// $abc->set_acciones(array('titulo'=>'Calcular','texto'=>'','icono'=>'fa-solid fa-calculator','accion'=>'configura_retroactivo_empleado'));
			$output = $abc->construir();
			$vista = $this->load->view($output['archivo'], $output['datos'],TRUE);
			$data = array('status' => true, 'html' => $vista);
		}
		else $data = array('status' => false, 'message' => 'No se encontraron empleados con retroactivo calculado.');

		$this->output->set_output(json_encode($data));
	}

	public function conf_montos()
	{
		$catTipoNomina = $this->mCat->traer_cat_varios_filtros('cat_TipoNomina',array('ACTIVO' => 1, 'PagoEspecial' => 0));
		$datos['cattiponomina'] = $this->select_lib->from_recordset($catTipoNomina, 26, true, false, 'Id', 'Id', 'Descripcion' );
		$datos['catconceptos'] = $this->select_lib->conceptos(1,1,0,0);
		$datos['catconceptostodos'] = $this->select_lib->conceptos(5,1,0,0);
		$this->load->view('retroactivos/conf_montos',$datos);
	}

	public function categorias()
	{
		$idTipoNomina = $this->input->post('tipoNomina');
		$idConcepto = $this->input->post('concepto');
		$montoMinimo = $this->input->post('montoMinimo');
		$montoMaximo = $this->input->post('montoMaximo');
		$idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
		$datos = array('idTipoNomina'	=> $idTipoNomina,'idConcepto'	=> $idConcepto,);
		if (!empty($montoMinimo)) $datos['montominimo'] = array('SueldoBase >=' => $montoMinimo);
		if (!empty($montoMaximo)) $datos['montomaximo'] = array('SueldoBase <=' => $montoMaximo);
		$categorias = $this->mRetroactivos->obtener_categorias($idPresupuesto,$datos);

		if (!empty($categorias)) {
			$abc = new pjey_ABC();
			$abc->set_resultado($categorias);
			$abc->set_key(0,'Id','asc');
			$abc->set_formatoColumna(array('moneda' => array(3,13),'visible' => array(0,1,2,3,13)));
			$abc->set_defaults('muestra_panel','filtros');
			$abc->set_encabezados(array('Descripcion'		=> 'Descripción', 'SueldoBase' => 'Sueldo Base'));
			$abc->set_configuraciones_extra(array('idTbl' => 'tblconfCategoriasMontos'), array('tituloAcciones' => ''),
																				array('checkBox' => 0),array('checkBoxIndex'	=> 'Id'),);
			$output = $abc->construir();
			$html = $this->load->view($output['archivo'], $output['datos'], TRUE);
			$data = array('status' => true, 'html' => $html);
		}
		else $data = array('status' => false, 'message' => 'No se encontraron categorías con los parámetros proporcionados.');
		$this->output->set_output(json_encode($data));
	}

	public function bonos()
	{
		$idConcepto = $this->input->post('concepto');
		$montoMinimo = $this->input->post('montoMinimo');
		$montoMaximo = $this->input->post('montoMaximo');
		$idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
		$datos = array('idConcepto'	=> $idConcepto);
		if (!empty($montoMinimo)) $datos['montominimo'] = array('SueldoBase >=' => $montoMinimo);
		if (!empty($montoMaximo)) $datos['montomaximo'] = array('SueldoBase <=' => $montoMaximo);
		$categorias = $this->mRetroactivos->obtener_bonos_categorias($idPresupuesto,$datos);

		if (!empty($categorias)) {
			$abc = new pjey_ABC();
			$abc->set_resultado($categorias);
			$abc->set_key(0,'Id','asc');
			$abc->set_formatoColumna(array('moneda' => array(3,13),'visible' => array(0,1,2,3,13)));
			$abc->set_defaults('muestra_panel','filtros');
			$abc->set_encabezados(array('Descripcion'		=> 'Descripción', 'SueldoBase' => 'Sueldo Base'));
			$abc->set_configuraciones_extra(array('idTbl' => 'tblconfConceptosCategoria'), array('tituloAcciones' => ''),
																				array('checkBox' => 0),array('checkBoxIndex'	=> 'Id'),);
			$output = $abc->construir();
			$html = $this->load->view($output['archivo'], $output['datos'], TRUE);
			$data = array('status' => true, 'html' => $html);
		}
		else $data = array('status' => false, 'message' => 'No se encontraron categorías con los parámetros proporcionados.');
		$this->output->set_output(json_encode($data));
	}

	public function genera_configuracion_categoria()
	{
		$idTipoNomina = $this->input->post('tipoNomina');
		$idConcepto = $this->input->post('concepto');
		$monto = $this->input->post('monto');
		$categorias = $this->input->post('categorias');
    $categorias = json_decode($categorias,true);
		$error = 0;
		$procesados = array();

		if (!empty($idTipoNomina) && !empty($idConcepto) && !empty($monto) && !empty($categorias)) {
			$idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
			$datos = array(
				'idConcepto'		=> 	$idConcepto,
				'idPresupuesto'	=>	$idPresupuesto
			);
			try {
				foreach ($categorias as $key => $value) {
					$idCategoria = $value['Id'];
					$guarda = $this->mRetroactivos->guarda_conf_cat_monto($idCategoria,$monto,$datos);
					if (!empty($guarda)) $procesados[] = array('idCategoria' => $idCategoria, 'Estado' => 'Configurado.');
				}
				$data = array('status' => true, 'message' => 'Configuración guardada correctamente');
			}
			catch(Exception $e) {
				$error = 2;
				log_message("error", "Controlador - ".$this->router->fetch_class().'/'.__FUNCTION__.": ".$e->getMessage());
			}
			$bitacora = new Bitacora();
			$bitacora->insertar($this->router->fetch_class().'/'.__FUNCTION__, 'Configurando retroactivo categoría. Datos: '.json_encode($datos));
		}
		else $data = array('status' => false, 'message' => 'No se recibió el parámetro esperado.');

		if (!empty($procesados)) $data = array('status' => TRUE, 'message' => count($procesados).' Categorías configuradas correctamente.');
		else $data = array('status' => FALSE, 'message' => 'Ocurrió un error al intentar configurar las categorías.');

		$this->output->set_output(json_encode($data));
	}

	public function genera_configuracion_concepto_categoria()
	{
		$idConcepto = $this->input->post('concepto');
		$monto = $this->input->post('monto');
		$categorias = $this->input->post('categorias');
    $categorias = json_decode($categorias,true);
		$error = 0;
		$procesados = array();

		if (!empty($idConcepto) && !empty($monto) && !empty($categorias)) {
			$idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
			$datos = array('idConcepto' => $idConcepto, 'Monto' => $monto, 'idPresupuesto' => $idPresupuesto);
			try {
				foreach ($categorias as $key => $value) {
					$idCategoria = $value['Id'];
					$guarda = $this->mRetroactivos->guarda_conf_concepto_categoria($idCategoria,$datos);
					if (!empty($guarda)) $procesados[] = array('idCategoria' => $idCategoria, 'Estado' => 'Configurado.');
				}
				$data = array('status' => true, 'message' => 'Configuración guardada correctamente');
			}
			catch(Exception $e) {
				$error = 2;
				log_message("error", "Controlador - ".$this->router->fetch_class().'/'.__FUNCTION__.": ".$e->getMessage());
			}
			$bitacora = new Bitacora();
			$bitacora->insertar($this->router->fetch_class().'/'.__FUNCTION__, 'Configurando concepto categoría. Datos: '.json_encode($datos));
		}
		else $data = array('status' => false, 'message' => 'No se recibió el parámetro esperado.');

		if (!empty($procesados)) $data = array('status' => TRUE, 'message' => count($procesados).' Categorías configuradas correctamente.');
		else $data = array('status' => FALSE, 'message' => 'Ocurrió un error al intentar configurar las categorías.');

		$this->output->set_output(json_encode($data));
	}

	/**
	 * PENDIENTE POR DESARROLLAR
	 * @method abc_conceptos_retroactivo
	 * @author alopez
	 * @date
	 * @return [type]                    [description]
	 */
	public function abc_conceptos_retroactivo()
	{
		$idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
		if (!empty($idPresupuesto)) {
			$abc = new pjey_ABC();
			$abc->set_table('conf_ConceptosRetroactivo');
			$abc->select("conf_ConceptosRetroactivo.idConcepto,conf_ConceptosRetroactivo.idConceptoRetroactivo,cc.Descripcion AS Concepto,cc2.Descripcion as ConceptoRetroactivo");
			$abc->where('idPresupuesto',$idPresupuesto);
			$abc->set_relacion_n_n(array(
				array('cat_Conceptos cc' => 'conf_ConceptosRetroactivo.idConcepto = cc.Id'),
				array('cat_Conceptos cc2' => 'conf_ConceptosRetroactivo.idConceptoRetroactivo = cc2.Id'),
			));
			$abc->set_key(0,'idConcepto','asc');
			$abc->set_defaults('copiarTbl','cargando','acciones','muestra_panel');
			$abc->set_acciones(array('titulo'=>'Editar','texto'=>'','icono'=>'far fa-edit','accion'=>'editar_concepto_retroactivo'),
												 // array('titulo'=>'Eliminar','texto'=>'','icono'=>'far fa-trash-alt','class' => 'btn-danger','accion'=>'eliminar_experiencia_laboral')
											 );
			$abc->set_configuraciones_extra(array('idTbl' => 'tblExperienciaLaboral'));
			$abc->set_formatoColumna(array('visible' => array(2,3)));
			$abc->set_encabezados(array('ConceptoRetroactivo'			=> 'Concepto Retroactivo',));
			// $abc->set_validation_conf('experiencia_laboral');
			// $abc->set_campos_guardar(array(
			// 																'idEmpleado' 				=> 'el_idEmpleado',
			// 																'nombreEmpresa' 		=> 'nombreEmpresa',
			// 																'Puesto'						=> 'Puesto',
			// 																'campoExperiencia'	=> 'campoExperiencia',
			// 																'fIngreso'					=> 'fIngreso',
			// 																'fEgreso' 					=> 'fEgreso',
			// 																'Observaciones' 		=> 'el_Observaciones'
			// 															));
			$output = $abc->construir();
			if ($output['vista']) $this->load->view($output['archivo'], $output['datos']);
			else $this->output->set_output(json_encode($output['data']));
		}
		else {
			$data = array('status' => FALSE, 'message' => "No se recibió el Parámetro esperado.",'errores' => 'No se recibió el Parámetro esperado');
			$this->output->set_output(json_encode($data));
		}
	}

}
