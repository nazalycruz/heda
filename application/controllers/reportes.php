<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (version_compare(PHP_VERSION, '7.0', '>=')) $rutalib = 'phpspreadsheet';
else $rutalib = 'phpspreadsheet_PHP5';

require APPPATH . 'third_party/'.$rutalib.'/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Font;
use PhpOffice\PhpSpreadsheet\Cell\DataType;

class Reportes extends IIS_Controller {

	public function __construct(){
		parent::__construct();
    $this->load->model('nomina_modelo','mNomina');
    $this->load->helper('file');
    $this->load->model('selectores_model','mod_selectores',TRUE); //<<<RPERAZA(2021.05.17): CASU 0804/2021
    $this->load->model('catalogos_modelo','mod_cat',TRUE); //<<<RPERAZA(2021.05.17): CASU 0804/2021
    $this->load->model('empleado_modelo','mod_emp',TRUE); //<<<RPERAZA(2021.05.17): CASU 0804/2021
    $this->load->model('reportes_modelo','mod_rpt',TRUE); //<<<RPERAZA(2021.05.17): CASU 0804/2021
    $this->load->model('parametros_modelo','mParametro',TRUE); //<<<RPERAZA(2021.05.17): CASU 0804/2021
    $this->load->library('ParamSystem', NULL, 'param_lib'); //<<<RPERAZA(2021.05.17): CASU 0804/2021
    $this->load->library('pjey_ABC'); //<<<RPERAZA(2021.05.17): CASU 0804/2021
    $this->load->library('Selectores_class', NULL, 'select_lib');
	}

  public function index() { //<<<RPERAZA(2021.05.17): CASU 0804/2021
    $urlReporteador = $this->mParametro->traer_parametro_por_clave('urlReporteador')->Valor;
    $rutaReportes = $this->mParametro->traer_parametro_por_clave('rutaReportes')->Valor;
    $selectores = new selectores_class();
    $PresupuestoId = $this->param_lib->get_parametro('idPresupuesto');

    $tipo_rpt_rh = $this->mod_cat->trae_registro_catalogo('cat_TipoReporte', '3', 'Clave'); //Traer TipoReporte RECURSOS HUMANOS
    $reg_tipo_rep = $this->mod_cat->traer_cat_varios_filtros("cat_TipoReporte",array("Clave !=" => 4));
    $cat_tipo_rep = $selectores->from_recordset($reg_tipo_rep, $tipo_rpt_rh->Id, true, false, 'Id', 'Id', 'Descripcion' );
    $reg_reportes = $this->mod_cat->traer_catalogo_filtrado('cat_Reportes', 'idTipoReporte', $tipo_rpt_rh->Id);

    // $cat_turnos = $selectores->generico('turnos',0,true,true,"turno", "turno", "descrip", "", false);

    $data["cat_tipo_rep"] = $cat_tipo_rep;
    $data["reg_reportes"] = $reg_reportes;
    $data["PresupuestoId"] = $PresupuestoId;
    $data['urlReporteador'] = $urlReporteador;
    $data['rutaReportes'] = $rutaReportes;
    $this->load->view('reportes/index', $data);
  }

  public function get_empleado_por_credencial(){ //<<<RPERAZA(2021.05.19): CASU 0804/2021
    $Credencial = $this->input->post('Credencial', true);
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');

    $respuesta['status'] = true;
    $respuesta['mensaje'] = "";
    $respuesta['datos'] = "";

    if( !isset($Credencial) ) {
        $respuesta['status'] = false;
        $respuesta['mensaje'] = "Parámetros incorrectos.";
    }
    else {
        try {
            if( $Credencial != "" && intval($Credencial) > 0 ){
                $empleado = $this->mod_emp->traer_datos_basicos_empleado($Credencial,$idPresupuesto);

                if($empleado !== false){
                    $respuesta['datos'] = $empleado;
                }
                else{
                  $respuesta['status'] = false;
                  $respuesta['mensaje'] = "Sin coincidencias.";
                }
            }
            else{
              $respuesta['status'] = false;
              $respuesta['mensaje'] = "Número de Credencial inválido.";
            }
        }
        catch(Exception $e){
            $respuesta['status'] = false;
            $respuesta['mensaje'] = "Error al intentar obtener los datos del empleado.";
        }
    }

    $this->output->set_output(json_encode($respuesta));
  }

	public function get_reportes_por_tipo()
	{
		$idTipoReporte = $this->input->post('idTipoReporte');
		if (!empty($idTipoReporte)) {
			$reportes = $this->mod_cat->traer_catalogo_filtrado('cat_Reportes', 'idTipoReporte', $idTipoReporte);
			$abc = new pjey_ABC();
			$abc->set_resultado($reportes);
			$abc->set_key(0,'idReporte','asc');
			$abc->set_defaults('muestra_panel','btnborrarFiltros','cargando');
			$abc->set_dom('t');
			$abc->set_cantResultados(-1);
		  $abc->set_extraCondensed(true);
			$abc->set_encabezados(array('TituloReporte'	=>	'Reporte'));
			$abc->set_configuraciones_extra(array('idTbl' => 'tblListadoReportes'));
			$abc->set_formatoColumna(array('visible' => array(5)));
			$output = $abc->construir();
			$vista = $this->load->view($output['archivo'], $output['datos'],TRUE);
			$data = array('status' => true, 'html' => $vista);
		}
		else $data = array('status' => false, 'message' => 'Ocurrió un error al realizar la consulta. No se recibió el parámetro esperado.');

		$this->output->set_output(json_encode($data));
	}

	public function obtener_parametros()
	{
		$idReporte = $this->input->post('idReporte');
    $PresupuestoId = $this->param_lib->get_parametro('idPresupuesto');
		$parametros = $this->mod_rpt->traer_parametros_reporte($idReporte);
		if (!empty($parametros)) {
			foreach ($parametros as $param) {
				if ($param->TipoCampo == 'select') {
					$param_metodo = (isset(${$param->ParametrosMetodo}) ? ${$param->ParametrosMetodo} : $param->ParametrosMetodo);
					$select[$param->Clave] = $this->select_lib->{$param->MetodoOrigen}($param_metodo);
				}
			}
			$datos['select'] = (empty($select) ? '' : $select);
		}
		$datos['parametros'] = $parametros;
		$datos['PresupuestoId'] = $PresupuestoId;
		$html = $this->load->view('reportes/parametros',$datos,true);
		$datos = array('status' => TRUE, 'html' => $html);
    $this->output->set_output(json_encode($datos));
	}

  public function procesar_reporte()
	{
    $idReporte = $this->input->post('idReporte', true);
    $parametros_all['fechaIni'] = $this->input->post('fechaIni', true);
    $parametros_all['fechaFin'] = $this->input->post('fechaFin', true);
    $parametros_all['IdNomina'] = $this->input->post('IdNomina', true);
    $parametros_all['IdDependencia'] = $this->input->post('IdDependencia', true);
    $parametros_all['Credencial'] = $this->input->post('Credencial', true);
    $parametros_all['tipoContrato'] = $this->input->post('tipoContrato', true);
    $parametros_all['idTipoNomina'] = $this->input->post('idTipoNomina', true);
    $parametros_all['IdConcepto'] = $this->input->post('IdConcepto', true);
    $parametros_all['IdTipoChecada'] = $this->input->post('IdTipoChecada', true);
    $parametros_all['Enomina'] = $this->input->post('Enomina', true);
    $parametros_all['IdEdificio'] = $this->input->post('IdEdificio', true);
    $parametros_all['IdCategoria'] = $this->input->post('IdCategoria', true);
    $parametros_all['ClaveMov'] = $this->input->post('ClaveMov', true);
    $parametros_all['ClaveTurno'] = $this->input->post('ClaveTurno', true);
    $parametros_all['Sexo'] = $this->input->post('Sexo', true);
		$parametros_all['Activo'] = $this->input->post('opt_Activo', true);
		$parametros_all['Liquidado'] = $this->input->post('opt_Liquidado', true);
		$parametros_all['Checa'] = $this->input->post('opt_Checa', true);
    $parametros_all['PresupuestoId'] = $this->param_lib->get_parametro('idPresupuesto');

    $respuesta['status'] = true;
    $respuesta['mensaje'] = "";
    $respuesta['tipo_msg'] = "error";
    $respuesta['datos'] = "";

    if (!isset($idReporte)) {
	    $respuesta['status'] = false;
	    $respuesta['mensaje'] = "Parámetros incorrectos. No se recibió la información del reporte solicitado.";
    }
    else {
	    try {
	      if ($idReporte != "" && intval($idReporte) > 0) {
	        $reg_reportes = $this->mod_cat->traer_catalogo_filtrado('cat_Reportes', 'idReporte', $idReporte);

	        if ($reg_reportes !== false) {
	          $respuesta['esRPT'] = $reg_reportes[0]->esRPT;
						$parametros = $this->mod_rpt->traer_parametros_reporte($idReporte);
	          $param_rpt = $this->set_parametros_rpt($parametros_all, $parametros);
	          if ($this->valida_parametros($param_rpt) == true) {
	            if ($reg_reportes[0]->esRPT == 0) {
								set_time_limit(0);
								if ($reg_reportes[0]->Conexion == 'fnc') $datos_reporte = $this->mod_rpt->{$reg_reportes[0]->OrigenDatos}($param_rpt);
								else $datos_reporte = $this->mod_rpt->get_reporte_por_pa($reg_reportes[0]->OrigenDatos, $param_rpt, $reg_reportes[0]->Conexion);
                $respuesta['datos'] = $datos_reporte;

                $abc = new pjey_ABC();
                $abc->set_resultado($datos_reporte);
							  $abc->set_key(0,'key','asc');
                $abc->set_extraCondensed(true);
                $abc->set_configuraciones(array('titulopanel' => $reg_reportes[0]->TituloReporte));
                $abc->set_defaults('btnborrarFiltros', 'exportarPDF');
								$abc->set_auto_config(array('datos' => $reg_reportes[0]->OrigenDatos));
                $output = $abc->construir();
                $respuesta['html'] = $this->load->view($output['archivo'], $output['datos'], TRUE);
								if (empty($datos_reporte)) {
								  $respuesta['status'] = true;
								  $respuesta['mensaje'] = "No se encontró información con los datos proporcionados.";
								}
	            }
	            else {
	              $respuesta['status'] = false;
	              $respuesta['mensaje'] = "Error en la configuración del reporte.";
	              $respuesta['tipo_msg'] = "error";
	            }
	          }
	          else {
	            $respuesta['status'] = false;
	            $respuesta['mensaje'] = "Se requiere que todos los parámetros tengan un valor.";
	            $respuesta['tipo_msg'] = "warning";
	          }
	        }
	        else {
	          $respuesta['status'] = false;
	          $respuesta['mensaje'] = "Error al intentar obtener el reporte.";
	        }
	      }
	    }
	    catch(Exception $e) {
	        $respuesta['status'] = false;
	        $respuesta['mensaje'] = "Error al intentar procesar el reporte.";
	    }
    }

    $this->output->set_output(json_encode($respuesta));
  }

	private function set_parametros_rpt($parametros_all, $conf_parametros)
	{
    $param_rpt = null;
		if (!empty($conf_parametros)) {
			foreach ($conf_parametros as $key => $param) {
				if (isset($parametros_all[$param->NombreCampo])) $param_rpt[$param->NombreCampo] = escapaDatoParaBD($parametros_all[$param->NombreCampo]);
			}
		}
		if (!empty($parametros_all['PresupuestoId'])) $param_rpt['PresupuestoId'] = escapaDatoParaBD($parametros_all['PresupuestoId']);
    return $param_rpt;
  }

  private function prepara_parametros_rpt($parametros_all){ //<<<RPERAZA(2021.05.19): CASU 0804/2021
    foreach( $parametros_all as $key => $value){
      switch ($key) {
        case "IdNomina":
        case "IdDependencia":
        case "Credencial":
        case "tipoContrato":
        case "idTipoNomina":
        case "IdConcepto":
        case "IdTipoChecada":
        case "Enomina":
        case "IdEdificio":
        case "IdCategoria":
        case "ParametroId":
          if($value == "") $parametros_all[$key] = 0;
          break;

        case "fechaIni":
        case "fechaFin":
          if($value == "") $parametros_all[$key] = "01/01/1900";
          break;
      }
      $parametros_all[$key] = escapaDatoParaBD($value);
    }
    return $parametros_all;
  }

  private function get_parametros_rpt($parametros_all, $conf_parametros){ //<<<RPERAZA(2021.05.19): CASU 0804/2021
    $conf_parametros = str_split($conf_parametros);
    $param_rpt = null;

    $i = 0;
    foreach( $parametros_all as $key => $value){
      if( $conf_parametros[$i] == 1){
        $param_rpt[$key] = $value;
      }
      $i++;
    }
    return $param_rpt;
  }

  private function valida_parametros($param_rpt){ //<<<RPERAZA(2021.05.19): CASU 0804/2021
    $resultado = true;
    foreach ($param_rpt as $key => $value) {
      if (!isset($value)) {
        $resultado = false;
        break;
      }
    }
    return $resultado;
  }

  public function exportar_xls_sat(){
		//pendiente guardar configuración  pa_GuardaInfoSATxEmpleado
    set_time_limit(0);
    $idPeriodoPago = $this->input->post('idPeriodoPago');
    $idTipoNomina = $this->input->post('idTipoNomina');
    $fecha = date('Ymd');

    if( !empty($idPeriodoPago) && !empty($idTipoNomina) ){
			$credencial = $this->input->post('credencial');
	    $credencial = (empty($credencial) ? 0 : $credencial);
			$txtPeriodo = $this->input->post('txtPeriodo');
			$txtTipoNomina = $this->input->post('txtTipoNomina');
			// $archivo = $txtPeriodo.'_'.$txtTipoNomina.'_'.(empty($credencial) ? '' : $credencial.'_').$fecha.'.txt';
      $spreadsheet = new Spreadsheet();
      $sheet = $spreadsheet->getActiveSheet();
			$titulo = $txtTipoNomina.'_'.date('Y-m-d');
			$titulo = (strlen($titulo) > 25) ? substr($titulo,0,25).'...' : $titulo;
			$sheet->setTitle($titulo);
      $detalle = $this->mNomina->generar_txt_SAT($idPeriodoPago,$idTipoNomina,$credencial);

      $filas = 0;
      $col = 1;
      $arrayPer = array();
      $arrayDed = array();
      $arrayOP = array();
      $arrayOr = array();
      $arrayInd = array();
			$totalPer = 0;
			$totalDed = 0;

      foreach ($detalle as $row) {
          $estiloHead = [
            'font' => [
                'bold' => true,
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            ],
          ];
          // $head_row = (array) $fila;
          $hc = 1;
          foreach($row as $key => $val){
						switch ($key) {
								case 'NombreEmpl':
									$sheet->setCellValueByColumnAndRow($hc, $filas+1, 'Nombre');
									break;
								case 'numerocuenta':
									$sheet->setCellValueByColumnAndRow($hc, $filas+1, 'Número de Cuenta');
									break;
								case 'SALARIO BASE':
									$sheet->setCellValueByColumnAndRow($hc, $filas+1, 'Salario Base');
									$sheet->getStyle($sheet->getHighestColumn())->getNumberFormat()->setFormatCode(\PhpOffice\PhpSpreadsheet\Style\NumberFormat::FORMAT_CURRENCY_USD_SIMPLE);
									break;
								case 'SALARIO INTEGRADO':
									$sheet->setCellValueByColumnAndRow($hc, $filas+1, 'Salario Integrado');
									$sheet->getStyle($sheet->getHighestColumn())->getNumberFormat()->setFormatCode(\PhpOffice\PhpSpreadsheet\Style\NumberFormat::FORMAT_CURRENCY_USD_SIMPLE);
									break;
								case 'FechaEmision':
									$sheet->setCellValueByColumnAndRow($hc, $filas+1, 'Fecha de Emisión');
									break;
								case 'fechapago':
									$sheet->setCellValueByColumnAndRow($hc, $filas+1, 'Fecha de Pago');
									break;
								case 'FechaIni':
									$sheet->setCellValueByColumnAndRow($hc, $filas+1, 'Fecha Inicial');
									break;
								case 'FechaFin':
									$sheet->setCellValueByColumnAndRow($hc, $filas+1, 'Fecha Final');
									break;
								case 'dias':
									$sheet->setCellValueByColumnAndRow($hc, $filas+1, 'Días');
									break;
								case 'antiguedad':
									$sheet->setCellValueByColumnAndRow($hc, $filas+1, 'Antigüedad');
									break;
								case 'Regimen':
									$sheet->setCellValueByColumnAndRow($hc, $filas+1, 'Régimen');
									break;
								case 'TIPO NOMINA':
									$sheet->setCellValueByColumnAndRow($hc, $filas+1, 'Tipo Nómina');
									break;
								case 'TIPO CONTRATO':
									$sheet->setCellValueByColumnAndRow($hc, $filas+1, 'Tipo Contrato');
									break;
								default:
									$sheet->setCellValueByColumnAndRow($hc, $filas+1, LimpiaCadena($key));
									break;
						}
	          $hc++;
          }
					$sheet->setCellValueByColumnAndRow($hc, $filas+1, 'Total Percepciones');
					$sheet->getStyle($sheet->getHighestColumn())->getNumberFormat()->setFormatCode(\PhpOffice\PhpSpreadsheet\Style\NumberFormat::FORMAT_CURRENCY_USD_SIMPLE);
					$hc++;
					$sheet->setCellValueByColumnAndRow($hc, $filas+1, 'Total Deducciones');
					$sheet->getStyle($sheet->getHighestColumn())->getNumberFormat()->setFormatCode(\PhpOffice\PhpSpreadsheet\Style\NumberFormat::FORMAT_CURRENCY_USD_SIMPLE);
					$hc++;

          $highestColumn = $sheet->getHighestColumn();
          $sheet->getStyle('A1:' . $highestColumn . '1' )->applyFromArray($estiloHead);
          $sheet->setAutoFilter('A1:'. $highestColumn . '1');
      }
      $filas = $sheet->getHighestRow();

      foreach ($detalle as $row) {
        $col = 1;
        foreach($row as $key => $val){
          switch ($key) {
            // case 'Riesgo':
            //   $sheet->setCellValueByColumnAndRow($col, $filas+1, trim($val));
            //   break;
            // case 'PAGO':
            //   $sheet->setCellValueByColumnAndRow($col, $filas+1, trim($val));
            //   break;
            // case 'dias':
            //   $sheet->setCellValueByColumnAndRow($col, $filas+1, trim($val));
            //   break;
            case 'numerocuenta':
              if( empty(trim($val)) ){
                $sheet->setCellValueByColumnAndRow($col, $filas+1, trim($val));
              }
              else{
                $sheet->setCellValueByColumnAndRow($col, $filas+1, FormatoFolio(trim($val),11));
              }
              break;
            default:
							if( $key == 'RFC' || $key == 'CURP' || $key == 'IMSS' || $key == 'Credencial' ) $sheet->setCellValueByColumnAndRow($col, $filas+1, trim($val));
							else $sheet->setCellValueByColumnAndRow($col, $filas+1, trim(rtrim($val, "0")));
              break;
          }
          $col++;
        }
        $empleado = $row->Credencial;
        $conceptos = $this->mNomina->obtener_conceptos_empleado($idPeriodoPago,$idTipoNomina,$empleado,$row->numerocuenta);

        foreach ($conceptos as $rowC) {
          switch ($rowC->TipoConcepto) {
            case 'PER': //percepción
              array_push($arrayPer,array('tipo' => $rowC->TIPO,
                                         'claveSAT' => FormatoFolio($rowC->claveSat,3),
                                         'id' => FormatoFolio($rowC->id,3),
                                         'Descripcion' => $rowC->Descripcion,
                                         'gravado' => DecimalMoneda((float)$rowC->Gravado,false),
                                         'exento' => DecimalMoneda((float)$rowC->Exento,false)));
							if (!in_array(trim($rowC->colTipoConcepto),array("I","OS","O1"))) { $totalPer = DecimalMoneda(((float)$rowC->Gravado + (float)$rowC->Exento + (float)$totalPer),false); }
							break;
            case 'DED': //deducción
            array_push($arrayDed,array('tipo' => $rowC->TIPO,
                                       'claveSAT' => FormatoFolio($rowC->claveSat,3),
                                       'id' => FormatoFolio($rowC->id,3),
                                       'Descripcion' => $rowC->Descripcion,
                                       'monto' => DecimalMoneda(((float)$rowC->Gravado + (float)$rowC->Exento),false)));
						  if (!in_array(trim($rowC->colTipoConcepto),array("I","OS","O1"))) { $totalDed = DecimalMoneda(((float)$rowC->Gravado + (float)$rowC->Exento + (float)$totalDed),false); }
							break;
            case 'OP': //otro pago
            array_push($arrayOP,array('tipo' => $rowC->TIPO,
                                      'claveSAT' => FormatoFolio($rowC->claveSat,3),
                                      'id' => FormatoFolio($rowC->id,3),
                                      'Descripcion' => $rowC->Descripcion,
                                      'monto' => DecimalMoneda(((float)$rowC->Gravado + (float)$rowC->Exento),false)));
							if ($rowC->ClaveRecibo == '165') { $totalPer = DecimalMoneda(((float)$rowC->Gravado + (float)$rowC->Exento + (float)$totalPer),false); }
						  break;
            case 'ORIGEN': //origen
            array_push($arrayOr,array('impuesto' => $rowC->Impuesto,
                                      'claveSAT' => $rowC->claveSat));
              break;
            case 'INDEM': //INDEMNIZACION,TOTAL PAGADO,N.º AÑOS SERVICIO,ULTIMO SUELDO,INGRESOS ACUMULABLES,INGRESOS NO ACUMULABLES
            array_push($arrayInd,array('tipo' => $rowC->TIPO,
                                        'gravado' => DecimalMoneda((float)$rowC->Gravado,false),
                                        'claveSAT' => FormatoFolio($rowC->claveSat,3),
                                        'exento' =>  DecimalMoneda((float)$rowC->Exento,false),
                                        'Descripcion' => $rowC->Descripcion,
                                         ));
              break;
            default:
              break;
          }

        }

				$sheet->setCellValueByColumnAndRow($col, $filas+1, $totalPer);
				$col++;

				$sheet->setCellValueByColumnAndRow($col, $filas+1, $totalDed);
				$col++;

				$totalPer = 0;
				$totalDed = 0;

        if( !empty($arrayPer) ){
          for ($i=0; $i < count($arrayPer); $i++) {
            foreach ($arrayPer[$i] as $key => $value) {
              $sheet->setCellValueByColumnAndRow($col, $filas+1, trim($value));
              $col++;
            }
          }
          $arrayPer = array();
        }

        if( !empty($arrayDed) ){
          for ($i=0; $i < count($arrayDed); $i++) {
            foreach ($arrayDed[$i] as $key => $value) {
              $sheet->setCellValueByColumnAndRow($col, $filas+1, trim($value));
              $col++;
            }
          }
          $arrayDed = array();
        }

        if( !empty($arrayOP) ){
          for ($i=0; $i < count($arrayOP); $i++) {
            foreach ($arrayOP[$i] as $key => $value) {
              $sheet->setCellValueByColumnAndRow($col, $filas+1, trim($value));
              $col++;
            }
          }
          $arrayOP = array();
        }

        if( !empty($arrayOr) ){
          for ($i=0; $i < count($arrayOr); $i++) {
            foreach ($arrayOr[$i] as $key => $value) {
              $sheet->setCellValueByColumnAndRow($col, $filas+1, trim($value));
              $col++;
            }
          }
          $arrayOr = array();
        }

        if( !empty($arrayInd) ){
          for ($i=0; $i < count($arrayInd); $i++) {
            foreach ($arrayInd[$i] as $key => $value) {
              $sheet->setCellValueByColumnAndRow($col, $filas+1, trim($value));
              $col++;
            }
          }
          $arrayInd = array();
        }

        $filas++;
      }

      $estiloBorde = [
        'borders' => [
            'allBorders' => [
                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
            ],
          ],
      ];

      $highestColumn = $sheet->getHighestColumn();
      $highestRow = $sheet->getHighestRow();
      $sheet->getStyle('A1:'.$highestColumn.$highestRow)->applyFromArray($estiloBorde);

      for ($i = 'A'; $i != $sheet->getHighestColumn(); $i++) {
  	 		$sheet->getColumnDimension($i)->setAutoSize(TRUE);
  		}

      //nombre del Archivo Final
      $nombreArchivo = $txtPeriodo.'_'.$txtTipoNomina.'_'.(empty($credencial) ? '' : $credencial.'_').$fecha.'.xlsx';
      // redireccionamos la salida al navegador del cliente (Excel2007)
      header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
      header('Content-Disposition: attachment;filename='.$nombreArchivo);
      header('Cache-Control: max-age=0');
			$writer = new Xlsx($spreadsheet);
			ob_start();
			$writer->save("php://output");
			$xlsData = ob_get_contents();
			ob_end_clean();
			$response =  array(
			        'status'			=> true,
			        'file'				=> "data:application/vnd.openxmlformats-officedocument.spreadsheetml.sheet;base64,".base64_encode($xlsData),
							'nombreArch'	=> $nombreArchivo,
							'message'			=> 'Archivo generado exitosamente.'
			    );
		}
		else $response = array('status' => false, 'message' => 'Error al intentar generar el archivo. No se recibió el parámetro esperado.');

		die(json_encode($response));
  }

	public function dispersar_pagos_extraordinarios()
  {
    $pagos = $this->input->post('pagos');
    $pagos = json_decode($pagos,true);
		$fecha = date('Ymd');
		$spreadsheet = $this->procesa_arreglo_aExcel($pagos,false);
		if (!empty($spreadsheet)) {
			$nombreArchivo = 'Pagos_Extraordinarios_'.$fecha.'.xlsx';
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
							'message' => 'Archivo de dispersión generado exitosamente.'
					);
		}
		else $response = array('status' => false, 'message' => 'Error al intentar generar el archivo.');

		die(json_encode($response));
  }

	private function procesa_arreglo_aExcel($datos, $imprimeEncabezados = true, $tiposDeDatos = null){
		$spreadsheet = null;
    set_time_limit(0);

		try{
			$spreadsheet = new Spreadsheet();

			foreach($datos as $fila) {
				$row = (array) $fila;
				$num_rows = null;
				$c = 1; //Contador de columnas
				$sheet = $spreadsheet->getActiveSheet();

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
			// if (!$imprimeEncabezados) $sheet->removeRow(1, 1);

			for ($i = 'A'; $i != $sheet->getHighestColumn(); $i++) {
				$sheet->getColumnDimension($i)->setAutoSize(TRUE);
			}
		}
		catch(Exception $e) {
			$spreadsheet = null;
		}
		return $spreadsheet;
	}

	public function comparativa_por_quincena()
	{
		$idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
		$quincenas = $this->select_lib->historial_nomina($idPresupuesto);
		$datos['tiponomina'] = $this->select_lib->generico('tipo_nomina',0,true,true);
		$datos['conceptos'] = $this->select_lib->conceptos(5,0);
		$datos['quincenas'] = $quincenas;
		$this->load->view('reportes/comparativa',$datos);
	}

	public function obtener_resultado_comparativa()
	{
		$idTipoNomina = $this->input->post('idTipoNomina');
		$idTipoNomina = (empty($idTipoNomina) ? 0 : $idTipoNomina);
		$idConcepto = $this->input->post('idConcepto');
		$idConcepto = (empty($idConcepto) ? 0 : $idConcepto);
		$nomina1 = $this->input->post('quincena1');
		$nomina2 = $this->input->post('quincena2');
		$descNomina1 = $this->input->post('descNomina1');
		$descNomina2 = $this->input->post('descNomina2');
		$datos = array($idTipoNomina,$idConcepto,$nomina1,$nomina2,$descNomina1,$descNomina2);
		$result =  $this->mod_rpt->comparativa_por_quincena($datos);
		if (!empty($result)) {
			$abc = new pjey_ABC();
			$abc->set_resultado($result);
			$abc->set_defaults('muestra_panel','btnborrarFiltros','copiarTbl','cargando');
			$abc->set_configuraciones_extra(array('idTbl' => 'tblComparativaQuincenas'));
			$abc->set_formatoColumna(array('moneda' => array(5,7), 'visible' => array(1,2,3,4,5,6,7)));
			$abc->set_encabezados(array(
																	'MontoQ1'		=> 'Monto 1',
																	'MontoQ2'		=> 'Monto 2',
																	'Quincena1'	=> 'Quincena 1',
																	'Quincena2'	=> 'Quincena 2',
																));
			$output = $abc->construir();
			$vista = $this->load->view($output['archivo'], $output['datos'],TRUE);
			$data = array('status' => true, 'html' => $vista, 'div' => (empty($idConcepto) ? 'Empleado' : 'Concepto'));
		}
		else $data = array('status' => false, 'message' => 'No se encontraron empleados para las quincenas seleccionadas.');
		$this->output->set_output(json_encode($data));
	}

	public function generico()
	{
		$idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
		$quincenas = $this->select_lib->historial_nomina($idPresupuesto);
		$datos['quincenas'] = $quincenas;
		$datos['catdependencias'] = $this->select_lib->generico('dependencias',0,true,true);
		$datos['catcategorias'] = $this->select_lib->generico('categorias',0,true,true);
		$this->load->view('reportes/generico',$datos);
	}

	public function procesar_reporte_generico()
	{
		$post = $this->input->post();
		$datos_select = array();
		$datos_where = [];
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
		array_push($datos_select,'ce.Id');
		$array_filtros = array('rpt_dependencia','rpt_categoria','rpt_Contrato','rpt_chckHijos','rpt_Sexo',
													 'rpt_periodo','rpt_liquidado','rpt_inactivo','rpt_emisor', 'rpt_credencial', 'rpt_chckMadrePadre');
		foreach ($post as $key => $value) {
			if (!in_array($key,$array_filtros)) {
				if ($key == 'nombrecompleto') {
					$key = 'CONCAT(Nombre,\' \', Apellido1,\' \',Apellido2)';
					$value = '\'Nombre Completo\'';
				}
				if ($key == 'dependencia') $key = 'cd.Descripcion';
				if ($key == 'categoria') $key = 'cc.Descripcion';
				if ($key == 'turno') $key = 'trn.descrip';
				if ($key == 'colonia') $key = 'col.Colonia';
				if ($key == 'ciudad') $key = 'ciud.Ciudad';
				if ($key == 'sindicato') $key = 'sind.Descripcion';
				if ($key == 'emisor') $key = 'emis.Emisor';
				if ($key == 'escolaridad') $key = 'ISNULL(esc.Descripcion,\'SIN DATO\')';
				if ($key == 'FechaNac' || $key == 'FechaAlta' || $key == 'FechaBaja' || $key == 'FechaIniVigCred' || $key == 'FechaFinVigCred') {
					$key = 'FORMAT('.$key.', \'dd/MM/yyyy\')';
					$value = '\''.$value.'\'';
				}
				if ($key == 'baja') {
					$key = 'CASE WHEN Liquidado = 1 THEN \'Sí\' ELSE \'No\' END';
					$value = '\'De Baja\'';
				}
				if ($key == 'transicion') {
					$key = 'CASE
									    WHEN EnTransicionISSTEY = 0 THEN \'No en Transición\'
									    WHEN EnTransicionISSTEY = 1 THEN \'En Transición\'
									    ELSE \'Beneficios Adquiridos\'
									END';
					$value = '\'Aportación ISSTEY\'';
				}

				array_push($datos_select,$key.' as '.$value);
			}
			else $datos_where[$key] = $value;
		}
		$result =  $this->mod_rpt->generico($idPresupuesto,$datos_select,$datos_where);
		if (!empty($result)) {
			$abc = new pjey_ABC();
			$abc->set_resultado($result);
			$abc->set_key(1,'Credencial','asc');
      $abc->set_ocultos(array(0));
			$abc->set_defaults('muestra_panel', 'btnborrarFiltros', 'copiarTbl', 'cargando', 'filtros');
			$abc->set_configuraciones_extra(array('idTbl' => 'tblReporteGenerico'),
																			// array('claseEspecial' => array('colBusca' => 'Credencial','strBusca' => '01073','clase' => 'bg-red', 'bCelda' => 2))
			);
			$output = $abc->construir();
			$vista = $this->load->view($output['archivo'], $output['datos'],TRUE);
			$data = array('status' => true, 'html' => $vista);
		}
		else $data = array('status' => false, 'message' => 'No se encontraron empleados con la información proporcionada.');
		$this->output->set_output(json_encode($data));
	}

	public function genera_archivo_electronico()
	{
		$idTipoNomina = $this->input->post('idTipoNomina');
		$idPeriodoPago = $this->input->post('idPeriodoPago');
		$idEmisor = $this->input->post('idEmisor');
		$idFormatoPago = $this->input->post('idFormatoPago');
		$emisor = $this->input->post('emisor');
		$fondoAuxiliar = $this->input->post('fondoAuxiliar');
		$fondoAuxiliar = (empty($fondoAuxiliar) ? 0 : 1);
		$formatoPago = $this->mod_cat->traer_cat_varios_filtros('Conf_FormatosPago',array('FormatoId' => $idFormatoPago));
		if (!empty($formatoPago)) {
			$idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
			$param_rpt = array(
				'PeriodoID' 		=> $idPeriodoPago,
				'TipoNominaId' 	=> $idTipoNomina,
				'EmisorId' 			=> $idEmisor,
				'PresupuestoID'	=> $idPresupuesto,
				'FondoAuxiliar'	=> $fondoAuxiliar,
			);
			$concentrado = $this->mod_rpt->get_reporte_por_pa($formatoPago[0]->ConsultaHEDA, $param_rpt, 'default');
			if (!empty($concentrado)) {
				$spreadsheet = $this->procesa_archivo_electronico($concentrado,$formatoPago);

				if (!empty($spreadsheet)) {
					$hoja = $this->mod_rpt->obtiene_nombre_archivo_electronico($idPeriodoPago,$idTipoNomina);
					$nombreHoja = $hoja->Quincena.'-'.$hoja->Mes.'-'.$hoja->AnioCorto.'-'.(empty($fondoAuxiliar) ? $hoja->Presupuesto : 'FA');
					$nombreArchivo = $emisor.'-'.$hoja->TipoNomina.'-'.$hoja->Quincena.'-'.$hoja->Mes.'-'.$hoja->Anio.'-'.(empty($fondoAuxiliar) ? $hoja->Presupuesto : 'FA');
					if ($idTipoNomina != 3) {
						if (strlen($hoja->TipoNomina.'-'.$nombreHoja) > 30) $nombreHoja = str_replace("-","",$nombreHoja);
						$nombreHoja = $hoja->TipoNomina.'-'.$nombreHoja;
						$nombreHoja = (strlen($nombreHoja) > 30) ? substr($nombreHoja,0,30) : $nombreHoja;
					}

					$sheet = $spreadsheet->getActiveSheet();
					$sheet->setTitle($nombreHoja);
					$nombreArchivo = str_replace(" ","_",$nombreArchivo).'.xlsx';
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
									'message' => 'Archivo de dispersión generado exitosamente.'
							);
				}
				else $response = array('status' => false, 'message' => 'Ocurrió un error al intentar generar el archivo.');
			}
			else $response = array('status' => false, 'message' => 'Ocurrió un error al intentar generar el archivo. No se encontró información con los datos proporcionados.');

			die(json_encode($response));
		}
	}

	private function procesa_archivo_electronico($datos, $formatoPago) {
    set_time_limit(0);
		$spreadsheet = null;
		try {
			$spreadsheet = new Spreadsheet();
			$encabezado = $formatoPago[0]->Encabezado;
			$columna = 'A';
			$sheet = $spreadsheet->getActiveSheet();
			foreach ($formatoPago as $keyF => $formato) {
				$campo = $formato->Campo;
				if ($encabezado) {
					$sheet->setCellValue($columna.'1', LimpiaCadena(strtoupper(trim($campo))));
					$fila = 1;
				}
				else $fila = 0;
				foreach ($datos as $keyD => $row) {
					if ($campo == 'Total') {
						$sheet->setCellValue($columna.($fila+1), trim($row->{$campo}))
									->getStyle($columna.($fila+1))->getNumberFormat()
    							->setFormatCode(\PhpOffice\PhpSpreadsheet\Style\NumberFormat::FORMAT_NUMBER_00);
					}
					else {
						$sheet->getCell($columna.($fila+1))
									->setValueExplicit(trim($row->{$campo}), \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING2);
					}
					$fila++;
				}
				$columna++;
			}

			for ($i = 'A'; $i != $sheet->getHighestColumn(); $i++) {
				$sheet->getColumnDimension($i)->setAutoSize(TRUE);
			}
		}
		catch(Exception $e) {
			$spreadsheet = null;
		}
		return $spreadsheet;
	}

	/**
	 * Reporte empleados con base y contrato vigente
	 * @method empleados_base_contrato
	 * @author alopez
	 * @date
	 * @return [type]                  [description]
	 */
	public function empleados_base_contrato()
	{
		$this->load->view('reportes/empleados_base_contrato');
	}

	public function procesa_listado_empleados_base_contrato()
	{
		$dias = $this->input->post('txtDias');
		$dias = (empty($dias) ? 0 : $dias);
		$idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
		$result =  $this->mod_rpt->empleados_base_contrato($idPresupuesto,$dias);
		if (!empty($result)) {
			$abc = new pjey_ABC();
			$abc->set_resultado($result);
			$abc->set_key(1,'Credencial','asc');
      $abc->set_ocultos(array(0));
			$abc->set_defaults('muestra_panel', 'btnborrarFiltros', 'copiarTbl', 'cargando', 'filtros');
			$abc->set_configuraciones_extra(array('idTbl' => 'tblReporteEmpleadosBaseContrato'),);
			$abc->set_encabezados(array(
																	'FechaAlta'						=> 'Fecha de Alta',
																	'BaseEmpleado'				=> 'Base',
																	'ContratoEmpleado'		=> 'Contrato',
																	'FolioBase' 					=> 'Folio Base',
																	'FechaBase'						=> 'Fecha Base',
																	'CatBase'							=> 'Cat. Base',
																	'DepBase'							=> 'Dep. Base',
																	'FolioCN'							=> 'Folio Contrato',
																	'FechaIniCN'					=> 'Fecha Inicio Contrato',
																	'FechaFinCN'					=> 'Fecha Final Contrato',
																	'CatCN'								=> 'Categoría Contrato',
																	'DepCN'								=> 'Dep. Contrato',
																	'DiasIninterrumpidos'	=> 'Días Ininterrumpidos'
																));
			$output = $abc->construir();
			$vista = $this->load->view($output['archivo'], $output['datos'],TRUE);
			$data = array('status' => true, 'html' => $vista);
		}
		else $data = array('status' => false, 'message' => 'No se encontraron empleados con la información proporcionada.');
		$this->output->set_output(json_encode($data));
	}

  //
  // $spreadsheet = null;
  // try{
  //   $spreadsheet = new Spreadsheet();
  //
  //   foreach($datos as $fila){
  //     $row = (array) $fila;
  //     $num_rows = null;
  //     $c = 1; //Contador de columnas
  //     $sheet = $spreadsheet->getActiveSheet();
  //
  //     if( $imprimeEncabezados == true ){
  //       $estiloHead = [
  //         'font' => [
  //             'bold' => true,
  //         ],
  //         'alignment' => [
  //             'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
  //         ],
  //       ];
  //       $head_row = (array) $fila;
  //       $hc = 1;
  //       foreach($head_row as $hkey => $hvalue){
  //         $sheet->setCellValueByColumnAndRow($hc, $num_rows+1, LimpiaCadena($hkey));
  //         $hc++;
  //       }
  //       $highestColumn = $sheet->getHighestColumn();
  //       $sheet->getStyle('A1:' . $highestColumn . '1' )->applyFromArray($estiloHead);
  //       $sheet->setAutoFilter('A1:'. $highestColumn . '1');
  //       $imprimeEncabezados = false;
  //     }
  //     $num_rows = $sheet->getHighestRow();
  //     foreach($row as $key => $value){
  //       if( $tiposDeDatos != null && count($tiposDeDatos > 0) && isset($tiposDeDatos[$key])){
  //         $sheet->setCellValueByColumnAndRow($c, $num_rows+1, LimpiaCadena($value));
  //       }
  //       else{
  //         $sheet->setCellValueByColumnAndRow($c, $num_rows+1, LimpiaCadena($value));
  //       }
  //       $c++;
  //     }
  //   }
  //   for ($i = 'A'; $i != $sheet->getHighestColumn(); $i++) {
  //     $sheet->getColumnDimension($i)->setAutoSize(TRUE);
  //   }
  //
  // }
  // catch(Exception $e) {
  //   $spreadsheet = null;
  // }

}
