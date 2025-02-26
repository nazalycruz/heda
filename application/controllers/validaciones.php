<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Validaciones extends IIS_Controller {

  public function __construct() {
        parent::__construct();
        $this->load->model('nomina_modelo','mNomina');
        $this->load->library('ParamSystem', NULL, 'param_lib');
        $this->load->model('validaciones_modelo','mValidaciones');

	  }

	public function index() {
    $datos['heading'] = 'Error al consultar la información solicitada';
    $datos['message'] = 'No existe el módulo solicitado.';
    $this->load->view('errors/html/error_general', $datos);
	}

	
  //GSantos, 2021.04.14
  public function valida_proceso(){
      $fechaperiodo = $this->param_lib->get_parametro('FechaIniPeriodo');
      $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
      $result = $this->mNomina->BuscaNominaAbierta($fechaperiodo,$idPresupuesto);
      $idPeriodoPago = ( !empty($result) ? $result->Id : 0 );
      $Etapa =  $this->input->post("etapa",true);
      
      if( !empty($Etapa) ){
        $errores = $this->mValidaciones->validarHEDA($Etapa, $idPresupuesto, $idPeriodoPago);
        $datos['errores']= $errores;
        
        $this->load->view('nomina/valida', $datos);
      }
    }

  /**GSantos, 2021.04.15 CASU   */
  public function AgregarConfiguracionVales(){  
            $idcategoria = $this->input->post("idcategoria",true);
            $monto = $this->input->post("monto",true);
            $antesdeimp = $this->input->post("antesdeimp",true);
            $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
            $respuesta['status'] = true;
            $respuesta['mensaje'] = "";
            $respuesta['datos'] = "";
            $resultado = null;

            if( !isset($idcategoria) || !isset($monto) || !isset($antesdeimp) ){
                $respuesta['status'] = false;
                $respuesta['mensaje'] = "Parámetros incorrectos.";
            }
            else {  
                try {
                        $resultado = $this->mValidaciones->agregarConfiguracionVales($idcategoria, $monto, $antesdeimp, $idPresupuesto);

                        if($resultado != false){
                                if($resultado == 1){
                                    $respuesta['status'] = true;
                                    $respuesta['mensaje'] = "La configuración se agregó correctamente.";
                                    }
                                else{
                                    $respuesta['status'] = false;
                                    $respuesta['mensaje'] = "No se pudo agregar la configuración.";
                                    }
                              }
                        else{
                            $respuesta['status'] = false;
                            $respuesta['mensaje'] = "Se generó un error al intentar agregar la configuración.";
                            }
                }
                catch(Exception $e){
                    $respuesta['status'] = false;
                    $respuesta['mensaje'] = "Error al ejecutar el procedimiento.";
                }   
            }

            $this->output->set_output(json_encode($respuesta));
    }

}
