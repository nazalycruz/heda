<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Generico extends IIS_Controller {

    public function __construct() {
        parent::__construct();
        //$this->load->library('catalogos');
        $this->load->model('selectores_model','mod_selectores');
        $this->load->model('calculos_modelo','mCalculos');
        $this->load->model('parametros_modelo','mParam');
        $this->load->library('selectores_class','','class_selectores');

	  }

	public function index() {
    $datos['heading'] = 'Error al consultar la información solicitada';
    $datos['message'] = 'No existe el módulo solicitado.';
    $this->load->view('errors/html/error_general', $datos);
	}

	public function catalogo_municipios(){
    $data = array('output' => '', 'selected'=> '');;
    $parents = $this->input->post('depdrop_parents');
    $MunicipioId = $this->input->post('depdrop_params')[0];

    if( !empty($parents) ){
        $EstadoId = $parents[0];

        if( !empty($EstadoId) ){
            $municipios = $this->mod_selectores->ciudades($EstadoId, 0);

            if( !empty($municipios) ){
                $result = array();
                foreach ($municipios as $key => $value) {
                    $result[$key] = array('id' => $value->CiudadId, 'name' => $value->Ciudad );
                }
                $data = array('output' => $result, 'selected'=> (empty($MunicipioId) ? '' : $MunicipioId));
            }
        }

    }

    $this->output->set_output(json_encode($data));
  }

    public function catalogo_colonias(){
        $data = array('output' => '', 'selected'=> '');;
        $parents = $this->input->post('depdrop_parents');
        $ColoniaId = $this->input->post('depdrop_params')[0];

        if( !empty($parents) ){
            $MunicipioId = $parents[0];

            if( !empty($MunicipioId) ){
                $colonias = $this->mod_selectores->colonias($MunicipioId,0);

                if( !empty($colonias) ){
                    $result = array();
                    foreach ($colonias as $key => $value) {
                        $result[$key] = array('id' => $value->ColoniaId, 'name' => $value->Colonia );
                    }
                    $data = array('output' => $result, 'selected'=> (empty($ColoniaId) ? '' : $ColoniaId));
                }
            }
        }

        $this->output->set_output(json_encode($data));
    }

    public function nominas_abiertas_porPeriodo(){
      $data = array('output' => '', 'selected'=> '');;
      $parents = $this->input->post('depdrop_parents');

      if( !empty($parents) ){
        $idPeriodoPago = $parents[0];

        if( !empty($idPeriodoPago) ){
          $nominas = $this->mCalculos->trae_nominas_abiertas($idPeriodoPago);

          if( !empty($nominas) ){
            $result = array();
            foreach ($nominas as $key => $value) {
              $id = ($value->Tabla == 'det_NominaXTipoPrestServ' ? $value->TipoNominaID + 1000 : $value->TipoNominaID);
              $result[$key] = array('id' => $id, 'name' => $value->Descripcion );
            }
            $data = array('output' => $result, 'selected'=> '');
          }
        }
      }

      $this->output->set_output(json_encode($data));
    }

    public function carga_vista(){
      $vista = $this->input->post('vista');
      $datos = $this->input->post('datos');
      $datos = (empty($datos) ? '' : json_encode($datos));
      $data['datos'] = $datos;
      if( !empty($vista) ) $this->load->view($vista,$data);
    }

    public function CargarLibreria(){
      $this->load->library('pjey_ABC');
      $abc = new pjey_ABC();
      // $abc->where('Cancelado',0);
			$abc->set_table('cat_Periodos');
      $abc->set_key(0,'Id');
      $abc->set_camposEdicion(array('campo'=>'Clave', 'config' => array('lbl'=>'Clave', 'placeholder' => 'Ingrese la clave', 'class' => 'col-2') ),
                              array('campo'=>'Descripcion', 'config' => array('lbl'=>'Descripción')),
                              array('campo'=>'Cancelado', 'config' => array('lbl'=>'Cancelado', 'no_act' => true))
                              );
      $abc->set_encabezados(array('Id' => 'id', 'Clave' => 'Clave', 'Descripcion' => 'Descripción', 'Cancelado' => 'Cancelado'));
      $abc->set_formatoColumna(array('fecha' => array(1,2,3),'visible' => array(1,2,3)));

      $abc->set_configuraciones('filtros','crud');
      $abc->set_eliminar(false,'Cancelado',1);
      $output = $abc->construir();

      if( $output['vista'] ) $this->load->view($output['archivo'], $output['datos']);
      else $this->output->set_output(json_encode($output['data']));
    }

    public function carga_nomina_porid(){
      $idPeriodoPago = $this->input->post('idPeriodo');
      if (empty($idPeriodoPago)) { $data = array('status' => false, 'message' => 'No se recibió el parámetro espeado. Intente de nuevo más tarde.'); }
      else {
        $nomina = $this->mParam->traer_nomina_porid($idPeriodoPago);
        if (!empty($nomina)) { $data = array('status' => TRUE, 'nomina' => $nomina); }
        else $data = array('status' => FALSE, 'message' => 'No se encontró la nómina solicitada.');
      }
      $this->output->set_output(json_encode($data));
    }

    public function carga_acreedores_por_clave()
    {
      $clavePresupuestal = $this->input->post('clavePresupuestal');
      $acreedores = $this->class_selectores->acreedores_arcon($clavePresupuestal);
      $data = array('status' => TRUE, 'acreedores' => $acreedores);
      $this->output->set_output(json_encode($data));
    }

		public function historial_correos_electronicos()
		{
			$data = array('output' => '', 'selected'=> '');
			$parents = $this->input->post('depdrop_parents');
			if (!empty($parents)) {
				$idPeriodoPago = $parents[0];
				if (!empty($idPeriodoPago)) {
					$result = array();
					$result[0] = array('id' => 0, 'name' => 'Nuevo Correo');
					$correos = $this->mod_selectores->hist_correos($idPeriodoPago);
					if (!empty($correos)) {
						foreach ($correos as $key => $value) {
							$result[$key+1] = array('id' => $value->idCorreoElectronico, 'name' => $value->Asunto );
						}
					}
					$data = array('output' => $result, 'selected'=> '');
				}
			}

			$this->output->set_output(json_encode($data));
		}

}
