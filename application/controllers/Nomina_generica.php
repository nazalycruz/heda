<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nomina_generica extends IIS_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('empleado_modelo','mEmpleado',TRUE);
		$this->load->model('nomina_modelo','mNomina',TRUE);
    $this->load->model('parametros_modelo','mParam',TRUE);
    $this->load->model('catalogos_modelo','mCat',TRUE);
    $this->load->library('ParamSystem', NULL, 'param_lib');
    $this->load->library('Selectores_class', NULL, 'select_lib');
    $this->load->library('pjey_ABC');
  }

	public function finiquitos()
	{
		$datos['tiponomina'] = $this->select_lib->generico('tipo_nomina',0,true,true);
		$datos['conceptos'] = $this->select_lib->conceptos(5,0);
		$this->load->view('finiquitos/index',$datos);
	}

	public function obtiene_configuracion_empleado()
	{
		$idEmpleado = $this->input->post('idEmpleado');
		$idTipoNomina = $this->input->post('idTipoNomina');
    $conf = $this->mNomina->trae_percepciones_deducciones_empleado($idEmpleado,$idTipoNomina);
		if (!empty($conf)) {
			$data = array('status' => TRUE, 'html' => $html);
		}
		else $data = array('status' => FALSE, 'message' => 'No se encontraron conceptos configurados para el empleado.');
		$this->output->set_output(json_encode($data));
	}

	public function agrega_concepto()
	{
		$idTipoNomina = $this->input->post('fin_idTipoNomina');
		$idEmpleado = $this->input->post('fin_idEmpleado');
		$idConcepto = $this->input->post('fin_conceptopagar');
		$Monto = $this->input->post('fin_monto');
		$gravado = $this->input->post('chkGravadoF');
		$tieneparteexe = $this->input->post('chkParteExeF');
		$parteexenta = $this->input->post('fin_parteexe');

		$datos = (object) array(
			'idTipoNomina'	=> $idTipoNomina,
			'idConcepto'	 	=> $idConcepto,
			'Monto'					=> $Monto,
			'gravado'				=> $gravado,
		);

		$html = $this->genera_tabla_conf_conceptos($datos);
		$data = array('status' => TRUE, 'html' => $html);
		$this->output->set_output(json_encode($data));
	}

	public function genera_tabla_conf_conceptos($datos)
	{
		$abc = new pjey_ABC();
		$abc->set_resultado($datos);
		$abc->set_extraCondensed(true);
		$abc->set_defaults('muestra_panel','btnborrarFiltros','copiarTbl','cargando');
		// $abc->set_configuraciones_extra(array('idTbl' => 'tblEmpleadosComplementoAguinaldo'),      array('checkBox' => 0),);
		// $abc->set_formatoColumna(array('moneda' => array(3,4,5,6,7), 'visible' => array(0,1,2,3,4,5,6,7)));
		$abc->set_encabezados(array(
																'MontoAExentar'		=> 'Monto a Exentar',
																'SaldoAguinaldo'	=> 'Saldo Aguinaldo',
															));
		$output = $abc->construir();
		$vista = $this->load->view($output['archivo'], $output['datos'],TRUE);
		return $vista;
	}


}
