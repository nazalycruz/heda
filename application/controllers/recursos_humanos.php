<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Recursos_humanos extends IIS_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('empleado_modelo','mEmpleado',TRUE);
    $this->load->model('parametros_modelo','mParam',TRUE);
    $this->load->model('recursoshumanos_modelo','mRH',TRUE);
    $this->load->model('movimientos_modelo','mMov',TRUE);
    $this->load->model('catalogos_modelo','mCat',TRUE);
    $this->load->library('ParamSystem', NULL, 'param_lib');
    $this->load->library('Selectores_class', NULL, 'select_lib');
    $this->load->library('pjey_ABC');
  }

  public function historial_empleado(){
    $this->load->view('recursos_humanos/historial_empleado');
  }

  public function detalle_empleado_RH(){
    $credencial = $this->input->post('credencial');
    if (!empty($credencial)) {
      $credencial = FormatoFolio($credencial,5);
      $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
      $empleado = $this->mEmpleado->traer_generales_empleado($credencial);
			$personal = $this->mEmpleado->traer_generales_personal($credencial);
			$estadoSISEGE = $this->mEmpleado->traer_estado_empleado_sisege(array($credencial,date('d/m/Y')));
      if ($empleado != false) {
        if ($empleado->ProgramaId == $idPresupuesto) {
          $idEmpleado = $empleado->Id;
          $vacaciones = $this->mRH->obtener_control_vacaciones($idEmpleado,$tomadas='3');
          $fechafin = new DateTime();
          $fechafin = date_format($fechafin,'d/m/Y');
          $movimientos = $this->mRH->obtener_movsempleado_sisege($credencial,'30/12/1900',$fechafin);
          $movimientosDEC = $this->mMov->get_movDEC_sisege($credencial);
          $imagen = $this->obtener_imagen_empleado($credencial);
          $categoria = (!empty($movimientos) ? $this->mCat->trae_registro_catalogo('cat_Categorias',$movimientos[0]->ClaveBase,'Clave') : 0);
          $datos['empleado'] = $empleado;
					$datos['personal'] = $personal;
          $datos['vacaciones'] = $vacaciones;
          $datos['movimientos'] = $movimientos;
          $datos['movimientosDEC'] = $movimientosDEC;
          $datos['categoria'] = $categoria;
					$datos['estadoSISEGE'] = $estadoSISEGE;
          $respuesta = array('status'=>TRUE, 'datos' => $this->load->view('recursos_humanos/detalle_historial_empleado', $datos, TRUE), 'empleado' => $empleado, 'imagen' => $imagen, 'estadoSISEGE' => $estadoSISEGE);
        }
        else $respuesta = array('status'=> FALSE,'message' => 'No se encontró el empleado en el Presupuesto actual ('.$credencial.').');
      }
      else $respuesta = array('status'=> FALSE,'message' => 'No se encontró el empleado con la Credencial proporcionada ('.$credencial.').');
    }
    else $respuesta = array('status'=> FALSE,'message' => 'Error al obtener la información del empleado. No se recibió el parámetro esperado.');
    $this->output->set_output(json_encode($respuesta));

  }

  public function obtener_imagen_empleado($credencial){
    $ruta = $this->param_lib->get_parametro('RutaFotos');
    $ruta = rtrim($ruta, '\\') . '\\';
    $rutaimg = $ruta . $credencial;
    if( !file_exists($rutaimg.'.jpg') ) $imagen = false;
    else{
      $imageData = base64_encode(file_get_contents($rutaimg.'.jpg'));
      $imagen = 'data: image/jpg;base64,'.$imageData;
    }

    return $imagen;
  }

	public function movimientos()
	{
		$this->load->view('recursos_humanos/movimientos');
	}

	public function vencimientos()
	{
		// code...
	}

	public function contratos()
	{
		$this->load->view('recursos_humanos/contratos');
	}
	public function listado_vacaciones(){
		$periodo = $this->mCat->traer_cat_varios_filtros('cat_Periodos');
		//el parametro 958 es el idPeriodo que se retornara por default 
		$data['periodos'] = $this->select_lib->from_recordset($periodo, 958, true, true, 'PeriodoID', 'PeriodoID', 'Descripcion' );
		$data['dependencias'] =$this->select_lib->generico('dependencias',true,true,0);
		$this->load->view('recursos_humanos/listado_vacaciones',$data);
	}
	public function obtenerlistado(){
		$idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
		$idPeriodo = $this->input->post('idPeriodo');
		// 0 = no tomadas, 1 = tomadas coincida con check y 2 para todos
		$tomadas = 2;
		$idDependencia = $this->input->post('idDependencia');

		$infoFiltrada = $this->mRH->obtenerlistadoVacacional($idPresupuesto,$idPeriodo,$tomadas,$idDependencia);

		if(!empty($infoFiltrada)){
			//enviando los checkbox sin embargo modifica los valores de las celdas que causa error en filtrado y exportacion
			$checkboxFields = ['PrimaPagada', 'Tomadas', 'tienecancelaciones'];
			foreach ($infoFiltrada as &$empleado) {
				foreach ($checkboxFields as $field) {
					$empleado->$field = $empleado->$field == 1 
						? '<input type="checkbox" checked>' 
						: '<input type="checkbox">';
				}
			}
			unset($empleado);
			
			$abc = new pjey_ABC();
			$abc->set_resultado($infoFiltrada);
			//define la columna indice(numero y nombre de la BD)
			$abc->set_key(1, 'IdEmpleado', 'asc');
			$abc->set_configuraciones(array('titulopanel' => 'Listado de empleados'));
			/*posiciones de la columna en el array de datos obtenida en $infoFiltrada 
			antes de ser renderizada en el html*/
			$abc->set_formatoColumna(
				array('visible' => array(0,2,6,15,17,20,23,24,25)),

			);
			$abc->set_configuraciones_extra([
				'checkBox'        => 0,
				'checkBoxStyle'   => 'multi',
				'checkBoxIndex'   => ['PrimaPagada','Tomadas','tienecancelaciones'], 
				'checkBoxAll'     => false,
				'idTbl'           => 'tblEmpleados',
				'confFiltros'     => ['filtrosSelect' => [2,6,15,17,20,23,24,25]],
			],array('modCell'  => array('targets' => array(4,5,6),'arrColMod' => array(4,4,5,5,6,6), 'arrayBusca' => array('1','0','1','0'), 'arrayMod' => array('<input type="checkbox">','<input type="checked>"','<input type="checked" checked>','<input type="checked">'))),);
			$abc->set_defaults('filtros');
			$abc->set_encabezados(array(
				'Credencial' => 'Credencial',
				'NombreCompleto' => 'Nombre',
				'FechaInicioVac' => 'Inicio',
				'FechaFinVac' => 'Fin',
				'PrimaPagada' => 'PrimaPagada',				
				'Tomadas' => 'Tomadas',
				'tienecancelaciones' => 'tiene cancelaciones?',
				'Observaciones' => 'Observaciones'				
			));
			$output = $abc->construir();
			
			
			// Enviar los datos HTML generados
			$data['html'] = $this->load->view($output['archivo'], $output['datos'], TRUE);
			$data['status'] = true;
			$data['message'] = "Datos obtenidos con éxito";
			$data['empleados'] = array('status' => TRUE, 'empleados' => $infoFiltrada);
			
	
		} else {
			// Si no se encuentran resultados

			$data['status'] = false;
			$data['message'] = "No se encontraron registros con la informacion proporcionada";
		}
		
	
		// Devolver el JSON
		$this->output->set_output(json_encode($data));
			
	}

	public function obtener_sesiones()
	{
		$fechaini = $this->input->post('fechaini');
		$fechafin = $this->input->post('fechafin');
		if (!empty($fechaini) && !empty($fechafin)) {
			$idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
			$sesiones = $this->mCat->sesiones($fechaini,$fechafin,$idPresupuesto);
			$sesiones = $this->select_lib->from_recordset($sesiones, 0, true, true, 'IdSesion', 'IdSesion', 'Sesion');
			if (!empty($sesiones)) $datos = array('status' => true, 'sesiones' => $sesiones);
			else $datos = array('status' => false, 'message' => "No se encontraron sesiones con los parámetros proporcionados.");
		}
		else $datos = array('status' => false, 'message' => "No se recibió el parámetro esperado.");
		$this->output->set_output(json_encode($datos));
	}

	public function listado_movimientos_sesion()
	{
		$idSesion = $this->input->post('idSesion');
		$origen = $this->input->post('origen');
		$origen = (empty($origen) ? 'CN' : $origen);
		if (!empty($idSesion)) {
			$abc = new pjey_ABC();
			$abc->set_database('secgral');
			$abc->set_table('Movimientos');
			$abc->select("p.IdPersonal,Movimientos.IdMovimiento,p.NumNomina,CONCAT(p.Nombre,' ',p.ApPaterno,' ',p.ApMaterno) as Nombre,hcd.DescripcionNuevaCategoria,hcd.DescripcionNuevaDependencia,FechaInicio,FechaTerminacion");
			$abc->select("hcd.IdNuevaCategoria,hcd.IdNuevaDependencia,s.*,cc.AreaAdscripcion");
			$abc->set_relacion_n_n(array(
				array('Personal p' => 'Movimientos.IdPersonal = p.IdPersonal'),
				array('HistorialCatDep hcd' => 'Movimientos.IdMovimiento = hcd.IdMovimiento'),
				array('Sesiones s' => 'Movimientos.IdSesion = s.IdSesion'),
				array('Cat_Categorias cc' => 'hcd.IdNuevaCategoria = cc.IdCategoria'),
			));
			$abc->where('Movimientos.IdSesion', $idSesion);
			$abc->where('Origen', $origen);
			$abc->set_formatoColumna(array('visible' => array(1,2,3,4,5,6,7),'fecha' => array(6,7)));
    	$abc->set_defaults('copiarTbl','cargando','acciones','muestra_panel');
			$abc->set_acciones(array('titulo'=>'Imprimir Contrato','texto'=>'','icono'=>'fa-solid fa-print','accion'=>'imprimir_contrato'));
			$abc->set_encabezados(array(
																	'IdMovimiento' 								=> 'Folio',
																	'NumNomina'										=> 'Credencial',
																	'DescripcionNuevaCategoria'		=> 'Categoría',
																	'DescripcionNuevaDependencia'	=> 'Dependencia',
																	'FechaInicio' 								=> 'Fecha de Inicio',
																	'FechaTerminacion' 						=> 'Fecha de Terminación'
																));
			$output = $abc->construir();
			$html = $this->load->view($output['archivo'], $output['datos'], TRUE);
			$rutaRpt = $this->mParam->traer_parametro_por_clave('urlReporteador')->Valor;
			$datos = array('status' => TRUE, 'html' => $html, 'rutaRpt' => $rutaRpt);
		}
		else $datos = array('status' => false, 'message' => "No se recibió el parámetro esperado.");
		$this->output->set_output(json_encode($datos));
	}

}
