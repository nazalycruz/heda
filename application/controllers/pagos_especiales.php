<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pagos_especiales extends IIS_Controller {

	public function __construct(){
		parent::__construct();
    $this->load->model('selectores_model','mod_selectores',TRUE);
    $this->load->model('catalogos_modelo','mod_cat',TRUE);
		$this->load->model('calculos_modelo','mCalculos');
    $this->load->model('parametros_modelo','mParametro',TRUE);
		$this->load->model('administracion_modelo','mAdmin',TRUE);
		$this->load->model('configuraciones_modelo','mConf',TRUE);
		$this->load->model('pjeyABC_model','pjeyModel',TRUE);
    $this->load->library('ParamSystem', NULL, 'param_lib');
    $this->load->library('Selectores_class', NULL, 'select_lib');
    $this->load->library('pjey_ABC');
	}

	public function proyeccion_por_empleado()
	{
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
		$datos['idPeriodoPago'] = $this->param_lib->get_parametro('idPeriodoPago');
    $datos['catconceptospe'] = $this->select_lib->conceptos_pagos_especiales($idPresupuesto,false);
		$this->load->view('configuraciones/proy_por_empleado',$datos);
	}

	public function conf_dias_categoria()
	{
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
		$catTipoNominaPE = $this->mod_cat->traer_cat_varios_filtros('cat_TipoNomina',array('ACTIVO' => 1, 'PagoEspecial' => 1));
		$datos['catconceptos'] = $this->select_lib->conceptos(1,1,0,0);
		$datos['cattiponomina'] = $this->select_lib->from_recordset($catTipoNominaPE, "", true, false, 'Id', 'Id', 'Descripcion' );
    $datos['catconceptospe'] = $this->select_lib->conceptos_pagos_especiales($idPresupuesto,true);
		$this->load->view('configuraciones/dias_por_categoria',$datos);
	}

	public function categorias_pagos_especiales()
	{
		$idTipoNomina = $this->input->post('tipoNomina');
		$idConcepto = $this->input->post('concepto');
		$montoMinimo = $this->input->post('montoMinimo');
		$montoMaximo = $this->input->post('montoMaximo');
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
		$datos = array(
			'idTipoNomina'	=> $idTipoNomina,
			'idConcepto'		=> $idConcepto,
		);
		if (!empty($montoMinimo)) $datos['montominimo'] = array('SueldoBase >=' => $montoMinimo);
		if (!empty($montoMaximo)) $datos['montomaximo'] = array('SueldoBase <=' => $montoMaximo);
		$categorias = $this->mConf->obtener_cat_dias_pagosespeciales($idPresupuesto,$datos);

		if (!empty($categorias)) {
			$abc = new pjey_ABC();
			$abc->set_resultado($categorias);
			$abc->set_key(0,'Id','asc');
			$abc->set_formatoColumna(array('moneda' => array(3),'visible' => array(0,1,2,3,13)));
			$abc->set_defaults('muestra_panel');
			$abc->set_encabezados(array('Descripcion'		=> 'Descripción', 'SueldoBase' => 'Sueldo Base', 'DiasAPagar' => 'Días a Pagar'));
			$abc->set_configuraciones_extra(array('idTbl' => 'tblconfCategoriasDiasPagos'), array('tituloAcciones' => ''),
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
		$dias = $this->input->post('dias');
		$categorias = $this->input->post('categorias');
    $categorias = json_decode($categorias,true);
		$error = 0;
		$procesados = array();

		if (!empty($idTipoNomina) && !empty($idConcepto) && !empty($dias) && !empty($categorias)) {
			$datos = array(
				'IdConcepto'		=> 	$idConcepto,
				'DiasAPagar'		=> 	$dias,
				'Id_TipoNomina'	=> 	$idTipoNomina
			);
			try {
				foreach ($categorias as $key => $value) {
					$guarda = $this->mConf->guarda_cat_dias_pagosespeciales($value['Id'],$datos);
					if (!empty($guarda)) $procesados[] = array('idCategoria' => $value['Id'], 'Estado' => 'Configurado.');
					else {
						$error++;
						$procesados[] = array('idCategoria' => 0, 'Estado' => 'Error al configurar.');
					}
				}
				$data = array('status' => true, 'message' => 'Configuración guardada correctamente');
			}
			catch(Exception $e) {
				$error = 2;
				log_message("error", "Controlador - ".$this->router->fetch_class().'/'.__FUNCTION__.": ".$e->getMessage());
			}
		}
		else $data = array('status' => false, 'message' => 'No se recibió el parámetro esperado.');

		if (empty($error)) $data = array('status' => TRUE, 'message' => 'Categorías configuradas correctamente.');
		else $data = array('status' => FALSE, 'message' => 'Ocurrió un error al intentar configurar las categorías.');

		$this->output->set_output(json_encode($data));
	}

	public function obtener_dias_porEmpleado(){
		$idEmpleado = $this->input->post('idEmpleado');
		$credencial = $this->input->post('credencial');
		$fechaini = $this->input->post('fechaini');
		$fechafin = $this->input->post('fechafin');
		$dias = $this->mConf->obtener_dias_porEmpleado($idEmpleado);
		$diasCat = $this->mConf->obtener_dias_porEmpleado($idEmpleado,$fechaini,$fechafin);
		$movimientos = $this->mConf->obtener_movimientos_paraDias($fechaini,$fechafin,$credencial);
		$tblMovimientos = $this->genera_tabla_movimientos($movimientos);
		$datos['diasCondensado'] = $dias;
		$datos['diasCat'] = $diasCat;
		$datos['movimientos'] = $tblMovimientos;
		$this->load->view('configuraciones/det_Empleado_pagos_especiales',$datos);
	}

	private function genera_tabla_movimientos($movimientos)
	{
		$abc = new pjey_ABC();
		$abc->set_resultado($movimientos);
		$abc->set_defaults('filtros','copiarTbl','cargando','muestra_panel');
		$abc->set_configuraciones_extra(array('idTbl' => 'tblProyMovimientos'));
		$abc->set_formatoColumna(array('fecha' => array(2,3),'visible' => array(1,2,3,5,7,8,9,10)));
		$abc->set_encabezados(array(
																'IdMovimiento'		=> 'Folio',
																'FechaInicio'	=> 'Fecha Inicio',
																'FechaTerminacion'	=> 'Fecha Terminación',
																'Categoria'	=>'Categoría',
																'TIPOMOVIMIENTO'	=>'Tipo',
																'TipoContrato'	=>'Contrato',
															));
		$output = $abc->construir();
		$vista = $this->load->view($output['archivo'], $output['datos'],TRUE);
		return $vista;
	}

}
