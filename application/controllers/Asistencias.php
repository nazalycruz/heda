<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asistencias extends IIS_Controller {

  public function __construct(){
    parent::__construct();
		$this->load->model('asistencias_modelo','mAsistencias',TRUE);
		$this->load->model('empleado_modelo','mEmpleado',TRUE);
    $this->load->model('parametros_modelo','mParam',TRUE);
    $this->load->model('catalogos_modelo','mCat',TRUE);
    $this->load->model('recursoshumanos_modelo','mRH',TRUE);
    $this->load->library('ParamSystem', NULL, 'param_lib');
    $this->load->library('Selectores_class', NULL, 'select_lib');
    $this->load->library('pjey_ABC');
  }

	public function carga_registro_asistencias()
	{
		$fecha = date('d/m/Y');
		$idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
		$empleados = $this->mRH->obtener_empleados_completo($fecha,$idPresupuesto);
		$abc = new pjey_ABC();
		$abc->set_resultado($empleados);
		$abc->set_key(0,'Credencial','asc');
		$abc->set_defaults('cargando','muestra_panel','filtros');
		$abc->set_configuraciones_extra(array('idTbl' => 'tblEmpleadosAsistencias'),
																		array('checkBox' => 0),array('checkBoxIndex'	=> 'Id'),
																	  array('confFiltros' => array('filtrosSelect' => array(1,2,3,5,6,7,9))),
																		array('modCell'  => array('targets' => array(5,9),
															 						'arrColMod' => array(5,5,9,9), 'arrayBusca' => array('1','0','1','0'), 'arrayMod' => array('SÍ','NO','SÍ','NO'))),
		);
		$abc->set_formatoColumna(array('fecha' => array(4,8),'visible' => array(0,1,2,3,4,5,7,8,9)));
		$abc->set_encabezados(array(
																'FechaAlta'				=> 'Fecha Alta',
																'NombreCompleto'	=> 'Nombre Completo',
																'fechaBaja'				=> 'Fecha Baja',
																'liquidado'				=> 'Liquidado',
															));
		$output = $abc->construir();
		$datos['fechaIni']  = $this->param_lib->get_parametro('FechaIniPeriodo');
		$datos['tblEmpleados'] = $this->load->view($output['archivo'], $output['datos'], TRUE);
		$this->load->view('asistencias/registro',$datos);
	}

	public function carga_asistencias_sin_procesar()
	{
		$idPeriodoPago = $this->param_lib->get_parametro('idPeriodoPago');
		$sinProcesar = $this->mNomina->empleados_faltas_incorrectas($idPeriodoPago);
		$html = '';
		if (!empty($sinProcesar)) {
			$detalle = $this->mNomina->detalle_faltas_incorrectas($idPeriodoPago);
			$abc = new pjey_ABC();
			$abc->set_resultado($detalle);
			$abc->set_key(0,'Credencial','asc');
			$abc->set_defaults('cargando');
		  $abc->set_configuraciones(array('titulopanel' => 'Empleados Sin Procesar'));
			$abc->set_configuraciones_extra(array('idTbl' => 'tblFaltasIncorrectas'),array('rowGroup' => 'Empleado'));
			$abc->set_formatoColumna(array('fecha' => array(3,4),'visible' => array(0,2,3,4,5)));
			$abc->set_encabezados(array(
																	'TipoChecada'		=> 'Tipo Checada',
																	'FechaChecada'	=> 'Fecha Checada',
																	'HoraChecada'		=> 'Hora Checada',
																));
			$output = $abc->construir();
			$html = $this->load->view($output['archivo'], $output['datos'], TRUE);
		}
		$data = array('status' => true, 'sinProcesar' => $sinProcesar->Empleados, 'html' => $html);

		$this->output->set_output(json_encode($data));
	}

	public function checadas()
	{
		$this->load->view('asistencias/procesar_checadas');
	}

	/**
	 * Procesa los registros de asistencias para guardarlos en la tabla det_Asistencias
	 * @method procesar_asistencias
	 * @author alopez
	 * @date
	 * @return [type]               [description]
	 */
	public function procesar_asistencias()
	{
		$fechaIni = $this->input->post('fechaini');
		$fechaFin = $this->input->post('fechafin');
		$empleados = $this->input->post('empleados');
		$empleados = json_decode($empleados,true);

		$error = 0;
		$procesados = array();
		if (!empty($fechaIni) && !empty($fechaFin)) {
	    $this->benchmark->mark('inicia_proc_asist');
			try {
        set_time_limit(0);
				foreach ($empleados as $key => $empleado) {
					$datos = array($empleado['Id'],$fechaIni,$fechaFin);
					$guarda = $this->mAsistencias->procesa_asistencias($datos);
					if (!empty($guarda)) $procesados[] = array('idEmpleado' => $empleado['Id'], 'Credencial' => $empleado['Credencial'], 'Estado' => 'Procesado.');
					else {
						$error++;
						$procesados[] = array('idEmpleado' => 0, 'Credencial' => $empleado['Credencial'], 'Estado' => 'Error al procesar.'); //cambiar por el mensaje recibido
					}
				}
			}
			catch(Exception $e) {
				$error = 2;
				log_message("error", "Controlador - ".$this->router->fetch_class().'/'.__FUNCTION__.": ".$e->getMessage());
			}
			$this->benchmark->mark('finaliza_proc_asist');
			$tiempo_exec = $this->benchmark->elapsed_time('inicia_proc_asist', 'finaliza_proc_asist', 2);
			unset($datos[0]);
			$bitacora = new Bitacora();
			$bitacora->insertar($this->router->fetch_class().'/'.__FUNCTION__, 'Procesando asistencias para '.count($procesados). ' empleados. Datos: '.json_encode($datos).'. Proceso Completado en: '.convert_to_string_time($tiempo_exec));
			if (empty($error)) $data = array('status' => TRUE, 'message' => 'Empleados procesados correctamente. Proceso Completado en: '.convert_to_string_time($tiempo_exec));
			else $data = array('status' => FALSE, 'message' => 'Ocurrió un error al intentar procesar las asistencias.');
		}
		else $data = array('status' => FALSE, 'message' => 'Error al intentar procesar las asistencias. No se recibió el parámetro esperado.');

		$this->output->set_output(json_encode($data));
	}

	public function procesar_checadas()
	{
		$fechaIni = $this->input->post('fInicio');
		$fechaFin = $this->input->post('fFin');
		$credencial = $this->input->post('pc_credencial');
		$archivo = $this->input->post('archivo');

		if (!empty($fechaIni) && !empty($fechaFin)) {
			$checadas = $this->procesa_csv_checadas($fechaIni,$fechaFin,$credencial,$archivo);
			if (!empty($checadas)) {
				if (empty($checadas['error'])) {
					set_time_limit(0);
					foreach ($checadas as $key => $checada) {
						if (!empty($checada->{'Check-In Time'})) {
							$datos_entrada = array(
								$checada->Date,
								$checada->ID,
								($checada->{'Check-In Time'} == '-' ? '' : $checada->{'Check-In Time'}),
								$checada->{'Department'},
							);
							$guardar_entrada = $this->mRH->subir_checada($datos_entrada);
						}
						if (!empty($checada->{'Check-Out Time'})) {
							$datos_salida = array(
								$checada->Date,
								$checada->ID,
								($checada->{'Check-Out Time'} == '-' ? '' : $checada->{'Check-Out Time'}),
								$checada->{'Department'},
							);
							$guardar_salida = $this->mRH->subir_checada($datos_salida);
						}
						$data = array('status' => true, 'message' => 'Checadas procesadas correctamente.');
					}
				}
				else $data = array('status' => false, 'message' => $checadas['mensaje']);
			}
			else $data = array('status' => false, 'message' => 'No se encontraron checadas válidas en el archivo.');
		}
		else $data = array('status' => false, 'message' => 'No se recibió el parámetro esperado.');

		$this->output->set_output(json_encode($data));
	}

	public function justificaciones()
	{
		$cat_tipo_checadas = $this->mCat->traer_cat_varios_filtros('TipoChecadas', array('Justificacion' => 1));
    $cat_tipo_checadas = $this->select_lib->from_recordset($cat_tipo_checadas, 0, true, true, 'TipoChecada_Id', 'TipoChecada_Id', 'Descripcion' );
		$cat_tipo_justificacion = $this->mCat->traer_cat_varios_filtros('RH_Cat_Justificaciones', array());
    $cat_tipo_justificacion = $this->select_lib->from_recordset($cat_tipo_justificacion, 0, true, true, 'TipoJustiId', 'TipoJustiId', 'Descripcion' );
		$datos["cat_tipo_checadas"] = $cat_tipo_checadas;
		$datos["cat_tipo_justificacion"] = $cat_tipo_justificacion;

		$datos['fechaini'] = $this->param_lib->get_parametro('FechaIniPeriodo');
		$datos['fechafin'] = $this->param_lib->get_parametro('FechaFinPeriodo');
		$this->load->view('asistencias/justificaciones',$datos);
	}

	public function obtener_checadas()
	{
		$fechaIni = $this->input->post('fechaIni');
		$fechaFin = $this->input->post('fechaFin');
		$credencial = $this->input->post('jus_credencial');
		$idTipoChecada = $this->input->post('jus_TipoChecada');
		$justificado = $this->input->post('justificadas');
		$justificado = (empty($justificado) ? 0 : 1);
		$idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
		$datos_checadas = array($fechaIni,$fechaFin,$idTipoChecada,$justificado,$idPresupuesto,$credencial);

		$checadas = $this->mAsistencias->obtener_checadas($datos_checadas);
		$abc = new pjey_ABC();
		$abc->set_resultado($checadas);
		// $abc->set_key(0,'Credencial','asc');
		$abc->set_defaults('cargando','muestra_panel');
		$abc->set_configuraciones_extra(array('idTbl' => 'tblRegistroChecadas'));
		// $abc->set_formatoColumna(array('fecha' => array(3,4),'visible' => array(0,2,3,4,5)));
		// $abc->set_encabezados(array(
		// 														'TipoChecada'		=> 'Tipo Checada',
		// 														'FechaChecada'	=> 'Fecha Checada',
		// 														'HoraChecada'		=> 'Hora Checada',
		// 													));
		$output = $abc->construir();
		$html = $this->load->view($output['archivo'], $output['datos'], TRUE);

		$data = array('status' => true, 'html' => $html);
		$this->output->set_output(json_encode($data));
	}

	public function vista_previa_checadas()
	{
		$fechaIni = $this->input->post('fechaIni');
		$fechaFin = $this->input->post('fechaFin');
		$credencial = $this->input->post('credencial');
		$archivo = $this->input->post('archivo');

		if (!empty($fechaIni) && !empty($fechaFin)) {
			$checadas = $this->procesa_csv_checadas($fechaIni,$fechaFin,$credencial,$archivo);
			if (!empty($checadas)) {
				if (empty($checadas['error'])) {
					$abc = new pjey_ABC();
					$abc->set_resultado($checadas);
					$abc->set_key(2,'Fecha','asc');
					$abc->set_defaults('muestra_panel');
					$abc->set_encabezados(array('Department'		=> 'Dispositivo',
																			'ID'							=> 'Credencial',
																			'Date'						=> 'Fecha',
																			'Check-In Time'		=> 'Entrada',
																			'Check-Out Time'	=> 'Salida',));
					$abc->set_configuraciones_extra(array('idTbl' => 'tblChecadas'), array('tituloAcciones' => ''));
					// $abc->set_acciones(array('titulo'=>'Eliminar','texto'=>'Eliminar','icono'=>'fa fa-trash-can','accion'=>'eliminar_dependiente_economico', 'class' => 'btn btn-xs btn-danger'));
					$output = $abc->construir();
					$html = $this->load->view($output['archivo'], $output['datos'], TRUE);
					$data = array('status' => true, 'html' => $html);
				}
				else $data = array('status' => false, 'message' => $checadas['mensaje']);
			}
			else $data = array('status' => false, 'message' => 'No se encontraron checadas válidas en el archivo.');
		}
		else $data = array('status' => false, 'message' => 'No se recibió el parámetro esperado.');

		$this->output->set_output(json_encode($data));
	}

	public function buscar_archivos_checadas()
	{
		$fechaini = $this->input->post('fechaIni');
		$fechafin = $this->input->post('fechaFin');
		if (!empty($fechaini) && !empty($fechafin)) {
			$formatfechaini = DateTime::createFromFormat('d/m/Y', $fechaini);
			$formatfechafin = DateTime::createFromFormat('d/m/Y', $fechafin);
			$prefijo = 'Start and End Work Time Report_';
			$ruta = FCPATH.'assets\archivos\\';
			$rangoFechas_ini = new DatePeriod($formatfechaini, new DateInterval('P1D'), $formatfechafin->modify('+1 day'));
			$rangoFechas_fin = new DatePeriod($formatfechaini, new DateInterval('P1D'), $formatfechafin->modify('+1 day'));

			$array_archivos = array();
			foreach ($rangoFechas_ini as $fecha) {
				$fechaini_busca = $fecha->format("Y_m_d");
				foreach ($rangoFechas_fin as $itemfechafin) {
					$fechafin_busca = $itemfechafin->format("Y_m_d");
					$archivo = $prefijo.$fechaini_busca."-".$fechafin_busca.".csv";
					if (file_exists($ruta.$archivo)) {
						$array_archivos[] = (object) array('Archivo' => $archivo);
					}
				}
			}

			if (!empty($array_archivos)) {
				$abc = new pjey_ABC();
				$abc->set_resultado($array_archivos);
				$abc->set_defaults('muestra_panel','acciones');
				$abc->set_configuraciones_extra(array('idTbl' => 'tblArchivosChecadas'), array('tituloAcciones' => ''));
				$abc->set_acciones(array('titulo'=>'Procesar','texto'=>'','icono'=>'fa-solid fa-gears','accion'=>'procesar_archivo_checadas', 'class' => 'btn btn-sm'),
													 array('titulo'=>'Vista Previa','texto'=>'','icono'=>'fas fa-search','accion'=>'generar_vista_previa_checadas', 'class' => 'btn btn-sm'));
				$abc->set_dom('t');
				$output = $abc->construir();
				$html = $this->load->view($output['archivo'], $output['datos'], TRUE);
				$data = array('status' => true, 'html' => $html);
			}
			else $data = array('status' => false, 'message' => 'No se encontraron archivos con el rango de fechas proporcionado.');
		}
		else $data = array('status' => false, 'message' => 'No se recibió el parámetro esperado.');

		$this->output->set_output(json_encode($data));
	}

	private function procesa_csv_checadas($fechaini,$fechafin,$credencial,$archivo='')
	{
		if (empty($archivo)) {
			$formatfechaini = DateTime::createFromFormat('d/m/Y', $fechaini);
			$formatfechafin = DateTime::createFromFormat('d/m/Y', $fechafin);
			$prefijo = 'Start and End Work Time Report_';
			$archivo = $prefijo.date_format($formatfechaini,"Y"."_"."m"."_"."d")."-".date_format($formatfechafin,"Y"."_"."m"."_"."d").".csv";
		}
		$ruta = FCPATH.'assets\archivos\\';

		if (file_exists($ruta.$archivo)) {
			$open = fopen($ruta.$archivo, "r");
			$datos = fgetcsv($open, 1000, ",");

			while (($datos = fgetcsv($open, 1000, ",")) !== FALSE)
			{
				$csv_array[] = $datos;
		  }
			fclose($open);

			$leer = false;
			foreach ($csv_array as $row_number => $checada) {
				if ($leer) {
					$fecha = trim($csv_array[$row_number][3]);
					$formatfecha = DateTime::createFromFormat('d-m-Y', $fecha);

					if (!empty($archivo)) {
						if (empty($credencial) || ($credencial == FormatoFolio(trim($csv_array[$row_number][2]),5))) {
							$array_checadas[] = (object) array($array_encabezado[0] => trim($csv_array[$row_number][0]),
																								 $array_encabezado[1] => FormatoFolio(trim($csv_array[$row_number][2]),5),
																								 $array_encabezado[2] => $fecha,
																								 $array_encabezado[3] => trim($csv_array[$row_number][6]) == '-' ? '' : trim($csv_array[$row_number][6]),
																								 $array_encabezado[4] => trim($csv_array[$row_number][7]) == '-' ? '' : trim($csv_array[$row_number][7])
																							 );
						}
					}
					else {
						if ($formatfecha >= $formatfechaini && $formatfecha <= $formatfechafin) {
							if (empty($credencial) || ($credencial == FormatoFolio(trim($csv_array[$row_number][2]),5))) {
								$array_checadas[] = (object) array($array_encabezado[0] => trim($csv_array[$row_number][0]),
																									 $array_encabezado[1] => FormatoFolio(trim($csv_array[$row_number][2]),5),
																									 $array_encabezado[2] => $fecha,
																									 $array_encabezado[3] => trim($csv_array[$row_number][6]) == '-' ? '' : trim($csv_array[$row_number][6]),
																									 $array_encabezado[4] => trim($csv_array[$row_number][7]) == '-' ? '' : trim($csv_array[$row_number][7])
																								 );
							}
						}
					}
				}
				if (trim($csv_array[$row_number][0]) == "Department") {
					$array_encabezado = array(trim($csv_array[$row_number][0]),trim($csv_array[$row_number][2]),trim($csv_array[$row_number][3]),trim($csv_array[$row_number][6]),trim($csv_array[$row_number][7]));
					$leer = true;
				}
			}

			if (!empty($array_checadas)) return $array_checadas;
			else return array('error' => true, 'mensaje' => 'No se registraron checadas en el rango de fechas solicitado.');
		}
		else return array('error' => true, 'mensaje' => 'No se encontró un archivo válido para el rango de fechas solicitado (Archivo buscado: '.$archivo.').');
	}

}
