<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (version_compare(PHP_VERSION, '7.0', '>=')) $rutalib = 'phpspreadsheet';
else $rutalib = 'phpspreadsheet_PHP5';

require APPPATH . 'third_party/'.$rutalib.'/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Font;
use PhpOffice\PhpSpreadsheet\IOFactory;

class Auditoria extends IIS_Controller {

	public function __construct(){
		parent::__construct();
    $this->load->helper('file');
    $this->load->model('selectores_model','mod_selectores',TRUE);
    $this->load->model('catalogos_modelo','mod_cat',TRUE);
    $this->load->model('auditoria_modelo','mod_auditoria',TRUE);
    $this->load->model('parametros_modelo','mParametro',TRUE);
    $this->load->library('ParamSystem', NULL, 'param_lib');
    $this->load->library('pjey_ABC');
	}

  public function index(){
    $selectores = new selectores_class();
    $PresupuestoId = $this->param_lib->get_parametro('idPresupuesto');
		$cat_reportesauditoria = $selectores->generico('reportes_auditoria',0,true,true,'idReporte','idReporte','TituloReporte');
    $data["cat_reportesauditoria"] = $cat_reportesauditoria;
    $data["PresupuestoId"] = $PresupuestoId;
    $this->load->view('auditoria/index', $data);
  }

	public function procesar_reporte(){
    $idAuditoria = $this->input->post('idReporte');
    // $anio = $this->input->post('anio');
    $fondoAuxiliar = $this->input->post('fondoAuxiliar');
		$fondoAuxiliar = (empty($fondoAuxiliar) ? 0 : 1);
		$fInicio = $this->input->post('fInicio');
		$fFin = $this->input->post('fFin');
		$idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
    $respuesta['status'] = true;
    $respuesta['mensaje'] = "";
    $respuesta['tipo_msg'] = "error";
    $respuesta['datos'] = "";

    if (empty($idAuditoria) || empty($fInicio) || empty($fFin)) {
      $respuesta['status'] = false;
    	$respuesta['mensaje'] = "Parámetros incorrectos.";
    }
    else {
			try {
				set_time_limit(0);
				ini_set('memory_limit','-1');
				$reg_auditoria = $this->mod_cat->traer_catalogo_filtrado('cat_Reportes', 'idReporte', $idAuditoria);
				$param = array(
					'FechaIni'			=>	$fInicio,
					'FechaFin'			=>	$fFin,
					'PresupuestoId'	=>	$idPresupuesto,
					'fondoAuxiliar'	=>	$fondoAuxiliar
				);
				$datos_auditoria = $this->mod_auditoria->get_reporte_auditoria_por_pa($reg_auditoria[0]->OrigenDatos,$param);
				if ($datos_auditoria) {
				  $abc = new pjey_ABC();
				  $abc->set_resultado($datos_auditoria->result());
				  $abc->set_extraCondensed(true);
				  $abc->set_configuraciones(array('titulopanel' => $reg_auditoria[0]->TituloReporte));
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

	public function exportar_reporte()
	{
		$idAuditoria = $this->input->post('idReporte');
		$fInicio = $this->input->post('fInicio');
		$fFin = $this->input->post('fFin');
		try {
			set_time_limit(0);
			ini_set('memory_limit', '-1');
			$idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
			$reg_auditoria = $this->mod_cat->traer_catalogo_filtrado('cat_Reportes', 'idReporte', $idAuditoria);
			$param = array(
				'FechaIni'			=>	$fInicio,
				'FechaFin'			=>	$fFin,
				'PresupuestoId'	=>	$idPresupuesto
			);
			$datos_auditoria = $this->mod_auditoria->get_reporte_auditoria_por_pa($reg_auditoria[0]->OrigenDatos,$param);
			$spreadsheet = $this->procesa_arreglo_aExcel($datos_auditoria->result(),true,null,$reg_auditoria[0]->TituloReporte);
			if (!empty($spreadsheet)) {
				$nombreArchivo = $reg_auditoria[0]->TituloReporte.'.xlsx';
				header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
				header('Content-Disposition: attachment;filename='.$nombreArchivo);
				header('Cache-Control: max-age=0');
				$writer = new Xlsx($spreadsheet);
				ob_start();
				$writer->save("php://output");
				$xlsData = ob_get_contents();
				ob_end_clean();
				$response =  array(
								'status' => true,
								'file' => "data:application/vnd.openxmlformats-officedocument.spreadsheetml.sheet;base64,".base64_encode($xlsData),
								'nombreArch' => $nombreArchivo,
								'message' => 'Archivo generado exitosamente.'
						);
			}
			else $response = array('status' => false, 'message' => 'Error al intentar generar el archivo.');
		}
		catch(Exception $e)
		{
			$response = array('status' => false, 'message' => "Error al intentar procesar el reporte. Error:".$e);
		}
		$this->output->set_output(json_encode($response));
	}

	private function procesa_arreglo_aExcel($datos, $imprimeEncabezados = true, $tiposDeDatos = null, $nombreHoja='')
	{
		$spreadsheet = null;
    set_time_limit(0);
		ini_set('memory_limit', '-1');
		try {
			$spreadsheet = new Spreadsheet();
			foreach($datos as $fila) {
				$row = (array) $fila;
				$num_rows = null;
				$c = 1; //Contador de columnas
				$sheet = $spreadsheet->getActiveSheet();
				$sheet->setTitle(empty($nombreHoja) ? 'Hoja1' : $nombreHoja);
				if ($imprimeEncabezados == true) {
					$estiloHead = [
						'font' => [
								'bold' => true,
						],
						'alignment' => [
								'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
						],
					];
					$head_row = (array) $fila;
					$hc = 1;
					foreach($head_row as $hkey => $hvalue) {
						$sheet->setCellValueByColumnAndRow($hc, $num_rows+1, LimpiaCadena($hkey));
						$hc++;
					}
					$highestColumn = $sheet->getHighestColumn();
					$sheet->getStyle('A1:' . $highestColumn . '1' )->applyFromArray($estiloHead);
					$sheet->setAutoFilter('A1:'. $highestColumn . '1');
					$imprimeEncabezados = false;
				}
				$num_rows = $sheet->getHighestRow();
				foreach($row as $key => $value) {
					if ($tiposDeDatos != null && count($tiposDeDatos > 0) && isset($tiposDeDatos[$key])) {
						$sheet->setCellValueByColumnAndRow($c, $num_rows+1, LimpiaCadena($value));
					}
					else {
						$sheet->setCellValueByColumnAndRow($c, $num_rows+1, LimpiaCadena($value));
					}
					$c++;
				}
			}

			for ($i = 'A'; $i != $sheet->getHighestColumn(); $i++) {
				$sheet->getColumnDimension($i)->setAutoSize(TRUE);
			}
		}
		catch(Exception $e) {
			log_message("error",$e);
			$spreadsheet = null;
		}
		return $spreadsheet;
	}

	public function leer_plantilla_auditoria()
	{
		$idAuditoria = $this->input->post('idReporte');
    $anio = $this->input->post('anio');
    $fondoAuxiliar = $this->input->post('fondoAuxiliar');
		$fondoAuxiliar = (empty($fondoAuxiliar) ? 0 : 1);
		$inputFileName = APPPATH . 'third_party/auditoria/Anexo 11 Nómina (Ejecutor).xlsx';
		$hoja = 'NOM_HON.dbf';
		try {
			set_time_limit(0);
			$presupuestoId = $this->param_lib->get_parametro('idPresupuesto');
			$reg_auditoria = $this->mod_cat->traer_catalogo_filtrado('cat_ReportesAuditoria', 'Id', $idAuditoria);
			$datos_auditoria = $this->mod_auditoria->get_Datos_Auditoria($reg_auditoria[0]->OrigenDatos, $presupuestoId, $anio, $fondoAuxiliar);
			$spreadsheet = $this->escribir_plantilla_auditoria($inputFileName,$hoja,4,$datos_auditoria->result());
			if (!empty($spreadsheet)) {
				$writer = new Xlsx($spreadsheet);
				$writer->save($inputFileName);
				$response =  array(
								'status' => true,
								'message' => 'Archivo generado exitosamente.'
						);
			}
			else $response = array('status' => false, 'message' => 'Error al intentar generar el archivo.');
		}
		catch(Exception $e)
		{
			$response = array('status' => false, 'message' => "Error al intentar procesar el reporte. Error:".$e);
		}

		die(json_encode($response));
	}

	private function escribir_plantilla_auditoria($inputFileName,$hoja,$filaIni,$datos,$tiposDeDatos = null)
	{
		$spreadsheet = null;
    set_time_limit(0);
		ini_set('memory_limit', '-1');
		try{
			$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileName);
			$num_rows = 3;
			foreach($datos as $fila) {
				$row = (array) $fila;
				$c = 1; //Contador de columnas
				$sheet = $spreadsheet->getSheetByName($hoja);
				// $num_rows = $sheet->getHighestRow();
				$estiloCelda = [
									 'borders' => [
											 'top' => [
													 'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
											 ],
											 'right' => [
													 'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
											 ],
											 'bottom' => [
													 'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
											 ],
											 'left' => [
													 'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
											 ],
									 ],
							 ];
				foreach($row as $key => $value) {
					$sheet->setCellValueByColumnAndRow($c, $num_rows+1, LimpiaCadena($value));
					// $sheet->getStyle($c.($num_rows+1))->applyFromArray($estiloCelda);
					$c++;
				}
				$num_rows++;
			}
			$num_rows = $sheet->getHighestRow();
			$highestColumn = $sheet->getHighestColumn();

			$styleArray = [
	             'borders' => [
	                 'allBorders' => [
	                     'borderStyle' =>  \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN //细边框
	                 ]
	             ]
	         ];
			$dataCount = count($datos) + $filaIni - 1;
			$sheet->getStyle('A'.$filaIni.':'.$highestColumn.$dataCount.'')->applyFromArray($styleArray);
			for ($i = 'A'; $i != $sheet->getHighestColumn(); $i++) {
				$sheet->getColumnDimension($i)->setAutoSize(TRUE);
			}
		}
		catch(Exception $e) {
			log_message("error",$e);
			$spreadsheet = null;
		}
		return $spreadsheet;
	}

	function data_to_csv($data, $headers = TRUE, $filename= "")
	{
			if ( ! is_array($data))
			{
					show_error('invalid Data provided');
			}

			$array = array();

			if ($headers)
			{
					$array[] = array_keys($data[0]);
			}
			foreach ($data as $row)
			{
					$line = array();
					foreach ($row as $item)
					{
							$line[] = $item;
					}
					$array[] = $line;
			}
			header("Content-type: application/csv");
			header("Content-Disposition: attachment; filename=\"$filename".".csv\"");
			header("Pragma: no-cache");
			header("Expires: 0");

			$handle = fopen('php://output', 'w');

			foreach ($array as $array) {
					fputcsv($handle, $array);
			}
					fclose($handle);
			exit;
	}

	// private function procesa_arreglo_aExcel($datos, $imprimeEncabezados = true, $tiposDeDatos = null){
	// 	$spreadsheet = null;
  //   // set_time_limit(0);
	// 	// ini_set('memory_limit', '2048M');
	// 	try{
	// 		$spreadsheet = new Spreadsheet();
	//
	// 		foreach($datos->result() as $fila) {
	// 			$row = (array) $fila;
	// 			$num_rows = null;
	// 			$c = 1; //Contador de columnas
	// 			$sheet = $spreadsheet->getActiveSheet();
	//
	// 			if ($imprimeEncabezados == true) {
	// 				$estiloHead = [
	// 					'font' => [
	// 							'bold' => true,
	// 					],
	// 					'alignment' => [
	// 							'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
	// 					],
	// 				];
	// 				$head_row = (array) $fila;
	// 				$hc = 1;
	// 				foreach($head_row as $hkey => $hvalue) {
	// 					$sheet->setCellValueByColumnAndRow($hc, $num_rows+1, ($hkey));
	// 					$hc++;
	// 				}
	// 				$highestColumn = $sheet->getHighestColumn();
	// 				$sheet->getStyle('A1:' . $highestColumn . '1' )->applyFromArray($estiloHead);
	// 				$sheet->setAutoFilter('A1:'. $highestColumn . '1');
	// 				$imprimeEncabezados = false;
	// 			}
	// 			$num_rows = $sheet->getHighestRow();
	// 			foreach($row as $key => $value) {
	// 				if ($tiposDeDatos != null && count($tiposDeDatos > 0) && isset($tiposDeDatos[$key])) {
	// 					$sheet->setCellValueByColumnAndRow($c, $num_rows+1, ($value));
	// 				}
	// 				else {
	// 					$sheet->setCellValueByColumnAndRow($c, $num_rows+1, ($value));
	// 				}
	// 				$c++;
	// 			}
	// 		}
	// 		// if (!$imprimeEncabezados) $sheet->removeRow(1, 1);
	//
	// 		for ($i = 'A'; $i != $sheet->getHighestColumn(); $i++) {
	// 			$sheet->getColumnDimension($i)->setAutoSize(TRUE);
	// 		}
	// 	}
	// 	catch(Exception $e) {
	// 		$spreadsheet = null;
	// 	}
	// 	return $spreadsheet;
	// }

  // private function procesa_arreglo_aExcel($datos, $imprimeEncabezados = true, $tiposDeDatos = null){
	// 	$spreadsheet = null;
  //   set_time_limit(0);
	//
	// 	try{
	// 		$spreadsheet = new Spreadsheet();
	//
	// 		foreach($datos as $fila) {
	// 			$row = (array) $fila;
	// 			$num_rows = null;
	// 			$c = 1; //Contador de columnas
	// 			$sheet = $spreadsheet->getActiveSheet();
	//
	// 			if ($imprimeEncabezados == true) {
	// 				$estiloHead = [
	// 					'font' => [
	// 							'bold' => true,
	// 					],
	// 					'alignment' => [
	// 							'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
	// 					],
	// 				];
	// 				$head_row = (array) $fila;
	// 				$hc = 1;
	// 				foreach($head_row as $hkey => $hvalue) {
	// 					$sheet->setCellValueByColumnAndRow($hc, $num_rows+1, LimpiaCadena($hkey));
	// 					$hc++;
	// 				}
	// 				$highestColumn = $sheet->getHighestColumn();
	// 				$sheet->getStyle('A1:' . $highestColumn . '1' )->applyFromArray($estiloHead);
	// 				$sheet->setAutoFilter('A1:'. $highestColumn . '1');
	// 				$imprimeEncabezados = false;
	// 			}
	// 			$num_rows = $sheet->getHighestRow();
	// 			foreach($row as $key => $value) {
	// 				if ($tiposDeDatos != null && count($tiposDeDatos > 0) && isset($tiposDeDatos[$key])) {
	// 					$sheet->setCellValueByColumnAndRow($c, $num_rows+1, LimpiaCadena($value));
	// 				}
	// 				else {
	// 					$sheet->setCellValueByColumnAndRow($c, $num_rows+1, LimpiaCadena($value));
	// 				}
	// 				$c++;
	// 			}
	// 		}
	// 		if (!$imprimeEncabezados) $sheet->removeRow(1, 1);
	//
	// 		for ($i = 'A'; $i != $sheet->getHighestColumn(); $i++) {
	// 			$sheet->getColumnDimension($i)->setAutoSize(TRUE);
	// 		}
	// 	}
	// 	catch(Exception $e) {
	// 		$spreadsheet = null;
	// 	}
	// 	return $spreadsheet;
	// }



}
