<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transparencia extends IIS_Controller {
	public function __construct(){
    parent::__construct();
		$this->load->model('auditoria_modelo','mod_aud',TRUE);
		$this->load->model('reportes_modelo','mod_rpt',TRUE);
		$this->load->library('ParamSystem', NULL, 'param_lib');
		$this->load->model('catalogos_modelo','mCat');
    $this->load->library('pjey_ABC');
  }

	public function index()
	{
		$this->load->view('transparencia/index');
	}

	public function procesar_reporte(){
		$fInicio = $this->input->post('fInicio');
		$fFin = $this->input->post('fFin');
		$idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
    $respuesta['status'] = true;
    $respuesta['mensaje'] = "";
    $respuesta['tipo_msg'] = "error";
    $respuesta['datos'] = "";

    if (empty($fInicio) || empty($fFin)) {
      $respuesta['status'] = false;
    	$respuesta['mensaje'] = "Parámetros incorrectos.";
    }
    else {
			try {
				set_time_limit(0);
				ini_set('memory_limit','-1');
				$parametros = array(
					'FechaIni'			=>	$fInicio,
					'FechaFin'			=>	$fFin,
					'PresupuestoID'	=>	$idPresupuesto,
				);
				$datos_transparencia = $this->mod_aud->get_reporte_auditoria_por_pa('pa_TraeRemuneracionEmpleados', $parametros);
				if ($datos_transparencia) {
				  $abc = new pjey_ABC();
				  $abc->set_resultado($datos_transparencia->result());
				  $abc->set_extraCondensed(true);
				  $abc->set_configuraciones(array('titulopanel' => 'Transparencia - Obligaciones'));
				  $abc->set_defaults('btnborrarFiltros', 'exportarPDF','copiarTbl');
				  $output = $abc->construir();
				  $respuesta['html'] = $this->load->view($output['archivo'], $output['datos'], TRUE);
				}
				else {
				  $respuesta['status'] = false;
				  $respuesta['mensaje'] = "Error al intentar generar los datos del reporte.";
				}
			}
			catch(Exception $e)
			{
				$respuesta['status'] = false;
				$respuesta['mensaje'] = "Error al intentar procesar el reporte. Error:".$e;
			}
    }

    $this->output->set_output(json_encode($respuesta));
  }

}
