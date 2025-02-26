<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if (version_compare(PHP_VERSION, '7.0', '>=')) $rutalib = 'phpspreadsheet';
else $rutalib = 'phpspreadsheet_PHP5';

require APPPATH . 'third_party/'.$rutalib.'/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;

class Configuraciones extends IIS_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('parametros_modelo','mParam',TRUE);
    $this->load->model('configuraciones_modelo','mConf',TRUE);
    $this->load->model('empleado_modelo','mEmpleado',TRUE);
    $this->load->model('nomina_modelo','mNomina');
		$this->load->model('catalogos_modelo','mCat');
    $this->load->library('ParamSystem', NULL, 'param_lib');
    $this->load->library('Selectores_class', NULL, 'select_lib');
    $this->load->library('pjey_ABC');
  }

  public function carga_sianom(){
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
    $paramsysNomina = $this->mParam->GetParamSystemNomina($idPresupuesto);
    $paramsistema = $this->mParam->GetParamSistema($idPresupuesto);
    $paramMovsRH = $this->mParam->GetParametrosMovsRH($idPresupuesto);
    $paramtiposnom = $this->mParam->GetParamTiposNomina($idPresupuesto);
    $paramEnom = $this->mParam->GetParametrosENomina($idPresupuesto);
		$paramGral = $this->mParam->GetParametrosGenerales();
		$paramGral = array_column($paramGral, null, 'Clave');

    $datos['paramsysNomina'] = $paramsysNomina;
    $datos['paramsistema'] = $paramsistema;
    $datos['paramMovsRH'] = $paramMovsRH;
    $datos['paramtiposnom'] = $paramtiposnom;
    $datos['paramEnom'] = $paramEnom;
		$datos['paramGral'] = $paramGral;
    $this->load->view('configuraciones/parametros', $datos);
  }

	public function por_empleado()
	{
		$this->load->view("configuraciones/por_empleado");
		// $credencial = $this->input->post('credencial');
    // $credencial = FormatoFolio($credencial,5);
    // $idEmpleado = $this->input->post('idEmpleado');
    // $idPeriodoPago = $this->input->post('idPeriodoPago');
    // $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
    // //$partida = $this->param_lib->get_parametro('PartidaContable');
		//
    // if (!empty($credencial) && !empty($idEmpleado) && !empty($idPeriodoPago) && !empty($credencial)) {
    //   $empleado = $this->mEmpleado->traer_generales_empleado($credencial);
    //   if( !empty($empleado) ){
    //     $datosV['empleado'] = $empleado;
    //     $datosV['cattiponomina'] = $this->select_lib->generico('tipo_nomina',3,true,true);
		//
    //     $datosV['catperc'] = $this->select_lib->conceptos(1,1);
    //     $datosV['catdeduc'] = $this->select_lib->conceptos(1,0);
    //     //$datosV['catacreedores'] = $this->select_lib->acreedores($idPresupuesto,$partida);
    //     $datosV['credencial'] = $credencial;
    //     $datosV['idEmpleado'] = $idEmpleado;
    //     $datosV['idPeriodoPago'] = $idPeriodoPago;
		//
    //     $datosV['calculoCierre'] = $this->input->post('calculoCierre');
    //     $datos['vw_confEmpleado'] = $this->load->view('nomina/vw_conf_Empleado',$datosV,TRUE);
    //     $this->load->view('nomina/conf_perc_deduc_empleado',$datos);
    //   }
    //   else{
    //     $datos['heading'] = 'Error al consultar la información';
    //     $datos['message'] = 'No se encontró información del empleado.';
    //     $this->load->view('errors/html/error_general_modal', $datos);
    //   }
    // }
    // else{
    //   $datos['heading'] = 'Error al consultar la información';
    //   $datos['message'] = 'No se recibió el parámetro esperado.';
    //   $this->load->view('errors/html/error_general_modal', $datos);
    // }
	}

  public function guarda_parametros_sistema(){
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');

    $parametros = array(
                    'LongCredencial'            => $this->input->post('lngCredencial'),
                    'LongNumEmpl'               => $this->input->post('lngNumEmpl'),
                    'ConcepPrimaVacID'          => $this->input->post('prmVac'),
                    'ConcepSueldoBase'          => $this->input->post('sldBase'),
                    'LongPeriodoPago'           => $this->input->post('lngPeriodoPago'),
                    'TurnoHV'                   => $this->input->post('clvHVesp'),
                    'SalarioMinimo'             => $this->input->post('salmin'),
                    'UMA'                       => $this->input->post('txtUMA'),
                    'MontoCumpleanios'          => $this->input->post('mntBNat'),
                    'MontoValesDespensa'        => $this->input->post('mntVM'),
                    'FactorSubsidioAcreditable' => $this->input->post('factsub'),
                    'TodosMovim'                => $this->input->post('clvtodosmovim'),
                    'AportacionISSTEY'          => $this->input->post('apISSTEY'),
                    'topeISSTEY'                => $this->input->post('topeISSTEY'),
                    'RutaRawdata'               => $this->input->post('handT'),
                    'RutaRawdataPenalOrigen'    => $this->input->post('handP'),
                    'RutaFotos'                 => $this->input->post('rtFotos'),
                    'RutaPlantillas'            => $this->input->post('rtPlant'),
                    'RutaRawdataSIASA'          => $this->input->post('rtSIASA'),
                    'RutaRawdataPenalDestino'   => $this->input->post('handPdest'),
                    'RutaArchivoElec'           => $this->input->post('rtArelec'),
                    'RutaOficios'               => $this->input->post('rtOficios'),
                    'PartidaContable'           => $this->input->post('ccAcr'),
										'AportacionISSTEY2'					=> $this->input->post('apISSTEY2'),
										'topeISSTEY2'								=> $this->input->post('topeISSTEY2'),
										'PorcAportTrans'						=> $this->input->post('porcAportT'),
										'PorcAportNoTrans'					=> $this->input->post('porcAportNT'),
										'AportacionISSTEY3'					=> $this->input->post('apISSTEY3'),
										'topeISSTEY3'								=> $this->input->post('topeISSTEY3'),
										'MontoDefuncion'						=> $this->input->post('mntBDef'),
    );

    $guarda = $this->mConf->guarda_parametros_sistema($idPresupuesto,$parametros);
		$bitacora = new Bitacora();
		$bitacora->insertar($this->router->fetch_class().'/'.__FUNCTION__, 'Guardando parámetros de sistema: '.json_encode($parametros));
    if ($guarda) $data = array('status' => true, 'message' => 'Parámetros de sistema guardados correctamente.');
    else $data = array('status' => FALSE, 'message' => 'Error al intentar guardar los parámetros de sistema.');
    $this->output->set_output(json_encode($data));

  }

  public function guarda_conceptos(){
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');

    $parametros = array(
                    'SueldoBase'      => $this->input->post('txtSueldBase'),
                    'Compensacion'    => $this->input->post('txtCompensacion'),
                    'PrimaVacacional' => $this->input->post('txtPVac'),
                    'Compensacion2'   => $this->input->post('txtGratif'),
                    'HorasExtra'      => $this->input->post('txtHE'),
                    'Faltas'          => $this->input->post('txtFaltas'),
                    'Retardos'        => $this->input->post('txtRetardos'),
                    'AportISSTEY'     => $this->input->post('txtISSTEY'),
                    'ISPT'            => $this->input->post('txtISPT'),
                    'CreditoSalario'  => $this->input->post('txtCreditoSalario'),
                    'SueldoBasePS'    => $this->input->post('txtSBPrest'),
    );

    $guarda = $this->mConf->guarda_conceptos($idPresupuesto,$parametros);
    if( $guarda ) $data = array('status' => true, 'message' => 'Parámetros de Conceptos guardados correctamente.');
    else $data = array('status' => FALSE, 'message' => 'Error al intentar guardar los parámetros de conceptos.');
    $this->output->set_output(json_encode($data));
  }

  public function guarda_movimientosRH(){
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');

    $parametros = array(
                    'NuevoEmpleado'           => $this->input->post('txtNuevoEmpleado'),
                    'Contrato'                => $this->input->post('txtContrato'),
                    'Apoyo'                   => $this->input->post('txtApoyo'),
                    'Base'                    => $this->input->post('txtBase'),
                    'Comision'                => $this->input->post('txtComision'),
                    'ComisionIndefinida'      => $this->input->post('txtComisionI'),
                    'CambioAdscripcion'       => $this->input->post('txtCambioAdq'),
                    'NombramientoIndefinido'  => $this->input->post('txtNomInd'),
                    'Compensacion'            => $this->input->post('txtCompRH'),
                    'Vacaciones'              => $this->input->post('txtVac'),
                    'Incapacidad'             => $this->input->post('txtInc'),
                    'HorararioVesp'           => $this->input->post('txtHV'),
                    'LicenciaSin'             => $this->input->post('txtLICS'),
                    'LicenciaCon'             => $this->input->post('txtLICC'),
                    'Renuncia'                => $this->input->post('txtRenuncia'),
                    'Despido'                 => $this->input->post('txtDespido'),
                    'Pension'                 => $this->input->post('txtPension'),
                    'Jubilacion'              => $this->input->post('txtJub'),
    );

    $guarda = $this->mConf->guarda_movimientosRH($idPresupuesto,$parametros);
    if( $guarda ) $data = array('status' => true, 'message' => 'Parámetros de Movimientos RH guardados correctamente.');
    else $data = array('status' => FALSE, 'message' => 'Error al intentar guardar los parámetros de Movimientos RH.');
    $this->output->set_output(json_encode($data));
  }

  public function guarda_tiposnomina(){
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');

    $parametros = array(
                    'TipoNomSueldoBase'           => $this->input->post('txtTipoNomSB'),
                    'TipoNomCompensacion'         => $this->input->post('txtTipoNomComp'),
                    'TipoNomHV'                   => $this->input->post('txtTipoNomHV'),
                    'TipoNomAguinaldo'            => $this->input->post('txtTipoNomAg'),
                    'TipoNomSueldoBasePrestador'  => $this->input->post('txtTipoNomSBPrest'),
                    'TipoNomBonoCuatri'           => $this->input->post('txtTipoNomBonoC'),
                    'TipoNomAntiguedad'           => $this->input->post('txtTipoNomAnt'),
                    'TipoNomCompensacion2'        => $this->input->post('txtTipoNomPagoExt'),
    );

    $guarda = $this->mConf->guarda_tiposnomina($idPresupuesto,$parametros);
    if( $guarda ) $data = array('status' => true, 'message' => 'Parámetros de Tipos de Nómina guardados correctamente.');
    else $data = array('status' => FALSE, 'message' => 'Error al intentar guardar los parámetros de Tipos de Nómina.');
    $this->output->set_output(json_encode($data));
  }

  public function guarda_nominaelectronica(){
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');

    $parametros = array(
                    'PlazaOperativa'    => $this->input->post('txtPlazaOp'),
                    'moneda'            => $this->input->post('txtMoneda'),
                    'codTransaccion'    => $this->input->post('txtCodTrans'),
                    'NumLote'           => $this->input->post('txtNumLote'),
                    'RegistroId'        => $this->input->post('txtRegId'),
                    'plazaCuentaEmp'    => $this->input->post('txtPzaCueEmp'),
                    'filler1'           => (empty($this->input->post('txtFiller1')) ? '' : $this->input->post('txtFiller1')),
                    'Referencia'        => (empty($this->input->post('txtRef')) ? '' : $this->input->post('txtRef')),
                    'filler2'           => (empty($this->input->post('txtFiller2')) ? '' : $this->input->post('txtFiller2')),
                    'concepto'          => (empty($this->input->post('txtConcepto')) ? '' : $this->input->post('txtConcepto')),
                    'Filler3'           => $this->input->post('txtFiller3'),
                    'CuentaCorporativa' => $this->input->post('txtCuentaCorp'),
    );

    $guarda = $this->mConf->guarda_nominaelectronica($idPresupuesto,$parametros);
    if( $guarda ) $data = array('status' => true, 'message' => 'Parámetros de nómina electrónica guardados correctamente.');
    else $data = array('status' => FALSE, 'message' => 'Error al intentar guardar los parámetros de Nómina Electrónica.');
    $this->output->set_output(json_encode($data));
  }

  public function por_categoria(){
		$datos['cattiponomina'] = $this->select_lib->generico('tipo_nomina',3,true,true);
    $datos['categorias'] = $this->select_lib->generico('categorias',0,true,true);
    $this->load->view('configuraciones/conf_por_categoria',$datos);
  }

	public function obtener_conf_categoria(){
    $idCategoria = $this->input->post('idCategoria');
    $idTipoNomina = $this->input->post('idTipoNomina');
		$esPercepcion = $this->input->post('esPercepcion');
		if (empty($idCategoria) || empty($idTipoNomina)) $data = array('status' => false, 'message' => 'No se recibió el parámetro correcto.');
		else {
			$idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
			$vista = $this->construye_tabla_per_deduc_categoria($idPresupuesto,$idCategoria,$idTipoNomina,$esPercepcion);
			$data = array('status' => true, 'vista' => $vista);
		}
    $this->output->set_output(json_encode($data));
  }

	private function construye_tabla_per_deduc_categoria($idPresupuesto,$idCategoria,$idTipoNomina,$esPercepcion)
	{
		$tabla = ($esPercepcion == 1 ? 'tblConfPerc' : 'tblConfDeduc');
		$abc = new pjey_ABC();
		$abc->set_table('conf_CategoriaConceptos');
		$abc->select("conf_CategoriaConceptos.Id,conf_CategoriaConceptos.Id_Concepto,ClaveRecibo,con.Descripcion AS Concepto,DiasBase,MontoBase,
		conf_CategoriaConceptos.AplicaSB,conf_CategoriaConceptos.Permanente,conf_CategoriaConceptos.VecesAplicar,conf_CategoriaConceptos.AntesDeImp AS Gravado,
		conf_CategoriaConceptos.Id_TipoNomina,conf_CategoriaConceptos.Id_Categoria,conf_CategoriaConceptos.AplicaComp,conf_CategoriaConceptos.VecesAplicadas,
		conf_CategoriaConceptos.TieneParteExcenta,conf_CategoriaConceptos.DiasSalMinParteExc,conf_CategoriaConceptos.CodigoAcreedor,conf_CategoriaConceptos.NombreAcreedor");
		$abc->set_relacion_n_n(array(
			array('cat_Categorias c' => 'conf_CategoriaConceptos.Id_Categoria = c.Id'),
			array('cat_Conceptos con' => 'conf_CategoriaConceptos.Id_Concepto = con.Id'),
		));
		$abc->where(array('Id_TipoNomina' => $idTipoNomina,'EsPercepcion' => $esPercepcion,'Id_Categoria' => $idCategoria, 'PresupuestoId' => $idPresupuesto));
		$abc->set_defaults('exportarPDF', 'muestra_panel','filtros', 'acciones');
		$abc->set_key(1,'Id_Concepto','asc');
		$abc->set_encabezados(array(
																'MontoBase'			=> 'Monto Base',
																'DiasBase'			=> 'Días',
																'ClaveRecibo'		=> 'Clave',
																'AplicaSB'			=> 'Sueldo',
																'VecesAplicar'	=> 'Veces Aplicar'
															));
		$abc->set_acciones(array('titulo'=>'Eliminar','texto'=>'','icono'=>'far fa-trash-alt','class' => 'btn-danger', 'accion'=>'eliminar_conf_categoria'));
		$abc->set_formatoColumna(array('moneda' => array(5), 'visible' => array(2,3,4,5,6,7,8,9)));
		$abc->set_dom('t');
		$abc->set_cantResultados(-1);
		$abc->set_configuraciones_extra(
		  array('idTbl' => $tabla),
			array('confSumatoria' => 5),
			array('modCell'  => array('targets' => array(6,7,9),
																 'arrColMod' => array(6,6,7,7.9,9), 'arrayBusca' => array('1','0'), 'arrayMod' => array('<span class="text-center text-success btn-icon btn-circle btn-xs"><i class="fa fa-check"></i></span>','No')))
		);
		$output = $abc->construir();
		$respuesta['html'] = $this->load->view($output['archivo'], $output['datos'], TRUE);
		return $respuesta['html'];
	}

	public function guardar_configuracion_categoria()
	{
		$idCategoria = $this->input->post('idCategoria');
		$idTipoNomina = $this->input->post('idTipoNomina');
		$idConcepto = $this->input->post('cfc_concepto');
		$idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
		$LongPeriodoPago = $this->param_lib->get_parametro('LongPeriodoPago');
		$_POST['idPresupuesto'] = $idPresupuesto;
		$_POST['AplicaSB'] = (empty($this->input->post('chkSB') ? 0 : 1));
		$_POST['AplicaComp'] = (empty($this->input->post('chkComp') ? 0 : 1));
		$_POST['Permanente'] = (empty($this->input->post('chkPermanente') ? 0 : 1));
		$_POST['AntesDeImp'] = (empty($this->input->post('chkGravado') ? 0 : 1));
		$_POST['TieneParteExenta'] = (empty($this->input->post('chkParteExe')) ? 0 : 1);
		$_POST['ParteExenta'] = (empty($this->input->post('cfc_parteexe')) ? 0 : $this->input->post('cfc_parteexe'));
		$_POST['VecesAplicar'] = (empty($this->input->post('cfc_vecesaplicar')) ? 0 : $this->input->post('cfc_vecesaplicar'));
		$_POST['VecesAplicadas'] = (empty($this->input->post('cfc_aplicadas')) ? 0 : $this->input->post('cfc_aplicadas'));
		$_POST['CodigoAcreedor'] = (empty($this->input->post('cfc_codacreedor')) ? '' : $this->input->post('cfc_codacreedor'));
		$_POST['NombreAcreedor'] = (empty($this->input->post('cfc_acreedor')) ? '' : $this->input->post('cfc_acreedor'));
		$_POST['DiasBase'] = (empty($this->input->post('cfc_diasbase')) ? $LongPeriodoPago : $this->input->post('cfc_diasbase'));

		$abc = new pjey_ABC();
		$abc->set_table('conf_CategoriaConceptos');
		$abc->set_key(0,'Id');
		$abc->where(array('Id_Categoria' => $idCategoria, 'Id_TipoNomina' => $idTipoNomina, 'PresupuestoId' => $idPresupuesto, 'Id_Concepto' => $idConcepto),
								NULL,TRUE,array('guardar'));
		$abc->set_campos_guardar(array(
																		'Id_Concepto' 				=> 	'cfc_concepto',
																		'Id_Categoria' 				=> 	'cfc_idConfCategoria',
																		'Id_TipoNomina'				=> 	'cfc_idTipoNomina',
																		'DiasBase'						=> 	'DiasBase',
																		'MontoBase'						=> 	'cfc_monto',
																		'AplicaSB' 						=> 	'AplicaSB',
																		'AplicaComp' 					=> 	'AplicaComp',
																		'Permanente'					=>	'Permanente',
																		'VecesAplicar'				=>	'VecesAplicar',
																		'VecesAplicadas'			=>	'cfc_aplicadas',
																		'AntesDeImp'					=>	'AntesDeImp',
																		'TieneParteExcenta'		=>	'TieneParteExenta',
																		'DiasSalMinParteExc'	=>	'ParteExenta',
																		'CodigoAcreedor'			=>	'CodigoAcreedor',
																		'NombreAcreedor'			=>	'NombreAcreedor',
																		'PresupuestoId'				=> 	'idPresupuesto'
															));
		$output = $abc->construir();
		if ($output['vista']) $this->load->view($output['archivo'], $output['datos']);
		else $this->output->set_output(json_encode($output['data']));
	}

	public function aplicar_conf_todasCategorias()
	{
		$idTipoNomina = $this->input->post('idTipoNomina');
		$conceptos = $this->input->post('conceptos');
		$conceptos = json_decode($conceptos,true);
		$idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
		$LongPeriodoPago = $this->param_lib->get_parametro('LongPeriodoPago');
		$categorias = $this->mCat->traer_catalogo('cat_Categorias',true,'Cancelado',0);
		$abc = new pjey_ABC();
		$abc->set_table('conf_CategoriaConceptos');
		foreach ($categorias as $key => $categoria) {
			// $borrar = $this->mConf->borra_configuracion_categoria($categoria->Id,$idTipoNomina,$idPresupuesto);
			$abc->where(array('Id_Categoria' => $categoria->Id, 'Id_TipoNomina' => $idTipoNomina, 'PresupuestoId' => $idPresupuesto), NULL, TRUE, array('borrar'), TRUE);
			$borrar = $abc->model_delete();

			if (!empty($conceptos)) {
				for ($i=0; $i < count($conceptos); $i++) {
					$datos = array(
						'Id_Concepto' 				=> 	$conceptos[$i]['Id_Concepto'],
						'Id_Categoria' 				=> 	$categoria->Id,
						'Id_TipoNomina'				=> 	$idTipoNomina,
						'DiasBase'						=> 	(empty($conceptos[$i]['DiasBase']) ? $LongPeriodoPago : $conceptos[$i]['DiasBase']),
						'MontoBase'						=> 	(empty($conceptos[$i]['MontoBase']) ? 0 : $conceptos[$i]['MontoBase']),
						'AplicaSB' 						=> 	(empty($conceptos[$i]['AplicaSB']) ? 0 : $conceptos[$i]['AplicaSB']),
						'AplicaComp' 					=> 	(empty($conceptos[$i]['AplicaComp']) ? 0 : $conceptos[$i]['AplicaComp']),
						'Permanente'					=>	(empty($conceptos[$i]['Permanente']) ? 0 : $conceptos[$i]['Permanente']),
						'VecesAplicar'				=>	(empty($conceptos[$i]['VecesAplicar']) ? 0 : $conceptos[$i]['VecesAplicar']),
						'VecesAplicadas'			=>	(empty($conceptos[$i]['VecesAplicadas']) ? 0 : $conceptos[$i]['VecesAplicadas']),
						'AntesDeImp'					=>	(empty($conceptos[$i]['Gravado']) ? 0 : $conceptos[$i]['Gravado']),
						'TieneParteExcenta'		=>	(empty($conceptos[$i]['TieneParteExcenta']) ? 0 : $conceptos[$i]['TieneParteExcenta']),
						'DiasSalMinParteExc'	=>	(empty($conceptos[$i]['DiasSalMinParteExc']) ? 0 : $conceptos[$i]['DiasSalMinParteExc']),
						'CodigoAcreedor'			=>	(empty($conceptos[$i]['CodigoAcreedor']) ? '' : $conceptos[$i]['CodigoAcreedor']),
						'NombreAcreedor'			=>	(empty($conceptos[$i]['NombreAcreedor']) ? '' : $conceptos[$i]['NombreAcreedor']),
						'PresupuestoId'				=> 	$idPresupuesto
					);
					$guardar = $abc->model_insert($datos);
				}
			}
		}
	 	$data = array('status' => TRUE, 'message' => 'Configuración guardada con éxito.');
		$this->output->set_output(json_encode($data));
	}

	public function eliminar_conf_todasCategorias($value='')
	{
		$idTipoNomina = $this->input->post('idTipoNomina');
		if (!empty($idTipoNomina)) {
			$idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
			$abc = new pjey_ABC();
			$abc->set_table('conf_CategoriaConceptos');
			$abc->where(array('Id_TipoNomina' => $idTipoNomina, 'PresupuestoId' => $idPresupuesto), NULL, TRUE, array('borrar'), TRUE);
			$borrar = $abc->model_delete();
			$data = array('status' => TRUE, 'message' => 'Configuración eliminada con éxito.');
		}
		else $data = array('status' => FALSE, 'message' => 'Ocurrió un error al intentar eliminar la configuración. No se recibió el parámetro adecuado');
		$this->output->set_output(json_encode($data));
	}

	public function elimina_configuracion_categoria()
	{
		$idCategoria = $this->input->post('idCategoria');
		$idTipoNomina = $this->input->post('idTipoNomina');
		$idConcepto = $this->input->post('idConcepto');
		if (empty($idCategoria) || empty($idTipoNomina) | empty($idConcepto)) {
			$data = array('status' => FALSE, 'message' => 'Error al intentar guardar la configuración. No se recibió el parámetro esperado.');
			$this->output->set_output(json_encode($data));
		}
		else {
			$idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
			$abc = new pjey_ABC();
			$abc->set_table('conf_CategoriaConceptos');
			$abc->where(array('Id_Categoria' => $idCategoria, 'Id_TipoNomina' => $idTipoNomina, 'PresupuestoId' => $idPresupuesto, 'Id_Concepto' => $idConcepto),
									NULL,TRUE,array('borrar'));
			$output = $abc->construir();
			if ($output['vista']) $this->load->view($output['archivo'], $output['datos']);
			else $this->output->set_output(json_encode($output['data']));
		}
	}

	public function carga_conf_perdeduc_categoria(){
		$esPercepcion = $this->input->post('percepcion');
		$idCategoria = $this->input->post('idCategoria');
		$idTipoNomina = $this->input->post('idTipoNomina');
		$percepcion = $this->input->post('percepcion');
		$idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
		$partida = $this->param_lib->get_parametro('PartidaContable');
		$datos['catconceptos'] = (empty($percepcion) ? $this->select_lib->conceptos(1,0) : $this->select_lib->conceptos(1,1));
		$datos['percepcion'] = $percepcion;
		$datos['idCategoria'] = $idCategoria;
		$datos['esPercepcion'] = $esPercepcion;
		$datos['idTipoNomina'] = $idTipoNomina;
		$this->load->view('configuraciones/conf_perdeduc_categoria',$datos);
	}

  public function por_parametros(){
    $anioanterior = date("Y",strtotime("-1 year"));
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');

    $datos['cattiponomina'] = $this->select_lib->generico('tipo_nomina',31,true,true);
    $datos['catconceptos'] = $this->select_lib->conceptos(5,0,0,121);
    $datos['catdependencias'] = $this->select_lib->generico('dependencias',0,true,true);
    $datos['catcategorias'] = $this->select_lib->generico('categorias',0,true,true);
    $datos['fechaini'] = '01/01/'.$anioanterior;
    $datos['fechafin'] = '31/12/'.$anioanterior;
    $this->load->view('configuraciones/por_parametros',$datos);
  }

	public function procesa_conf_por_parametros()
	{
		$empleados = $this->input->post('empleados');
		$empleados = json_decode($empleados,true);
		$idTipoNomina = $this->input->post('cf_tiponomina');
		$idEmpleado = $this->input->post('idEmpleado');
		$idConcepto = $this->input->post('cf_concepto');
		$Monto = $this->input->post('montoconf');
		$permanente = $this->input->post('chkPermanente');
		$vecesAplicar = $this->input->post('cf_vecesaplicar');
		$vecesAplicadas = $this->input->post('cf_aplicadas');
		$Gravado = $this->input->post('chkGravado');
		$tieneparteexe = $this->input->post('chkParteExe');
		$parteexe = $this->input->post('cf_parteexe');
		$codigoacreedor = $this->input->post('cf_acreedor');
		$nombreacreedor = $this->input->post('acreedor');
		$folio = $this->input->post('folio');
		$idConfEmpleado = $this->input->post('cf_idConfEmpleado');
		$esprestamo = $this->input->post('esprestamo');
		$claveRecibo = $this->input->post('claverecibo');
		$idPeriodoPago = $this->param_lib->get_parametro('idPeriodoPago');

		$error = 0;
		$continuar = true;
		$procesados = array();
		$bitacora = new Bitacora();
		if (!empty($idTipoNomina) && !empty($idConcepto)) {
			try {
				foreach ($empleados as $key => $value) {
					if ($continuar) {
						$datos = array(
							'Id_Empleado'					=> $value[0],
							'Id_TipoNomina' 			=> $idTipoNomina,
							'Id_Concepto'  	 			=> $idConcepto,
							'Monto'         			=> $Monto,
							'Permanente'					=> (empty($permanente) ? 0 : 1),
							'VecesAplicadas'			=> (empty($vecesAplicadas) ? 0 : $vecesAplicadas),
							'VecesAplicar'  			=> (empty($vecesAplicar) ? 0 : $vecesAplicar),
							'AntesDeImp'      	 	=> (empty($Gravado) ? 0 : 1),
							'TieneParteExcenta'		=> (empty($tieneparteexe) ? 0 : 1),
							'DiasSalMinParteExc'	=> (empty($tieneparteexe) ? 0 : $parteexe),
						);
						$idConf = $this->mConf->guarda_configuracion_empleado($datos);
						if (!empty($idConf)) {
							if (!empty($esprestamo)) $continuar = $this->mConf->guarda_pago_isstey($idConf,$datos,$idPeriodoPago,$claveRecibo,$folio);
						}
						else $continuar = false;
					}
					else $error = 1;
				}
			}
			catch(Exception $e){
				$error = 2;
				log_message("error", "Controlador - configuraciones/procesa_conf_por_parametros(): ".$e->getMessage());
			}

			$resultado = $this->genera_resultado_configuracion($procesados,$error);
			if (empty($error)) {
				unset($datos["Id_Empleado"]);
				// PENDIENTE: Activar bitácora
				// $bitacora->insertar($this->router->fetch_class().'/'.__FUNCTION__, 'Guardando configuración para '.count($procesados). 'empleados. Configuración: '.json_encode($datos));
				$data = array('status' => TRUE, 'message' => 'Empleados configurados correctamente.', 'resultado' => $resultado);
			}
			else $data = array('status' => FALSE, 'message' => 'Ocurrió un error al intentar guardar la configuración.', 'resultado' => $resultado);
		}
		else $data = array('status' => FALSE, 'message' => 'Error al intentar guardar el concepto. No se recibió el parámetro esperado.');
		$this->output->set_output(json_encode($data));

	}

  public function pagos_especiales(){
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
		$reg_tipo_nomina = $this->mCat->traer_catalogo("cat_TipoNomina", true, "ACTIVO", 1);
    $cat_tipo_nomina = $this->select_lib->from_recordset($reg_tipo_nomina, 9, true, true, 'Id', 'Id', 'Descripcion' );
		$urlReporteador = $this->mParam->traer_parametro_por_clave('urlReporteador')->Valor;
    $rutaReportes = $this->mParam->traer_parametro_por_clave('rutaReportes')->Valor;

    $datos['UMA'] = $this->param_lib->get_parametro_sys_nomina('UMA');
    $datos['catconceptos'] = $this->select_lib->conceptos(1,1,0,0);
    $datos['catconceptospe'] = $this->select_lib->conceptos_pagos_especiales($idPresupuesto,false);
		$datos['cat_tipo_nomina'] = $cat_tipo_nomina;
		$datos['idPeriodoPago'] = $this->param_lib->get_parametro('idPeriodoPago');
		$datos['urlReporteador'] = $urlReporteador;
		$datos['rutaReportes'] = $rutaReportes;
    $this->load->view('configuraciones/pagos_especiales',$datos);
  }

  public function carga_conceptos_acumular(){
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');

    if (empty($idPresupuesto)) $data = array('status' => FALSE,'message' => 'No se recibió el parámetro esperado.');
    else {
      $resultado = $this->mConf->obtener_conceptos_gravados($idPresupuesto);
      if (empty($resultado)) $data = array('status' => FALSE,'message' => 'No se encontraron conceptos para acumular.');
      else $data = array('status' => TRUE, 'concAcumular' => $resultado);
    }

    $this->output->set_output(json_encode($data));
  }

  public function trae_listado_pagos_especiales(){
    $result = $this->mConf->trae_pagos_especiales();
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');

    if (!empty($result)) {
      $result = array_values(array_filter($result, function($var) use ($idPresupuesto) {
        return $var->PresupuestoID == $idPresupuesto;
      }));
    }

    $this->load->library('pjey_ABC');
    $abc = new pjey_ABC();
    $abc->set_resultado($result);
    $abc->set_key(0,'id','asc');

    $abc->set_defaults('copiarTbl','cargando','btnborrarFiltros','acciones');
    $abc->set_formatoColumna(array('fecha' => array(3,4,5,13),'visible' => array(2,3,4,5,6,13,14)));
    $abc->set_configuraciones(array('titulopanel' => 'Configuración de Pagos Especiales'),
                              array('fnc_dblclick' => 'editar_conc_pagos_especiales')
                              );
    $abc->set_acciones(array('titulo'=>'Proyectar concepto','texto'=>'','icono'=>'fas fa-chart-line','accion'=>'proyectar_empleados_pagos_especiales'),
                       array('titulo'=>'Editar concepto','texto'=>'','icono'=>'far fa-edit','accion'=>'editar_conc_pagos_especiales'),
                       array('titulo'=>'Eliminar concepto','texto'=>'','icono'=>'far fa-trash-alt','class' => 'btn-danger','accion'=>'eliminar_conc_pagos_especiales'),
											 array('titulo'=>'Imprimir Reporte','texto'=>'','icono'=>'fa-solid fa-print','accion'=>'imprimir_reporte_pagos_especiales'),
											 array('titulo'=>'Imprimir Reporte Jueces y Magistrados','texto'=>'','icono'=>'fa-solid fa-gavel','accion'=>'imprimir_reporte_pagos_especiales_JyM')
                      );
    $abc->set_configuraciones_extra(array(
                                    	'btnExtra' => array('btnNuevo' => array('titulo'=>'Nuevo Concepto','texto'=>'<i class="far fa-file"></i>','action'=>'nuevo_conc_pe_sys'),
																													'btnProyTodos' => array('titulo'=>'Proyectar Todos los Conceptos','texto'=>'<i class="fa-solid fa-wand-magic-sparkles"></i>','action'=>'proyectar_todos_conceptos'))
																	  ),
																	 array('cardHeadClass'	=> 'bg-silver-600'),array('idTbl' => 'tblConfPagosEspeciales'));
    $abc->set_encabezados(array('Descripcion'       => 'Descripción',
                                'FechaInicio'       => 'Inicio',
                                'FechaFinal'        => 'Fin',
                                'FechaaPagar'       => 'Pagar al',
                                'DiasaPagar'        => 'Días a Pagar',
                                'FechaReferencia'   => 'F. Referencia',
                                'MinDiasParaPagar'  => 'Días mínimos',
                              ));
    $output = $abc->construir();
    if( $output['vista'] ) $this->load->view($output['archivo'], $output['datos']);
    else $this->output->set_output(json_encode($output['data']));
  }

  public function guarda_pago_especial(){
    $idPagoEspecial = $this->input->post('idPagoEspecial');
    $idConcepto = $this->input->post('pe_concepto');
    $descripcion = $this->input->post('descConcepto');
    $idConceptoR = $this->input->post('pe_conceptorel');
    $finicio = $this->input->post('pe_fechaini');
    $ffinal = $this->input->post('pe_fechafin');
    $fpagar = $this->input->post('pe_fechapago');
    $fReferencia = $this->input->post('pe_fecharef');
    $DiasLaborados = $this->input->post('pe_dialab');
    $DiasPagar = $this->input->post('pe_diaspag');
    $MinDiasParaPagar = $this->input->post('pe_mindias');
    $MontoExento = $this->input->post('pe_mntexen');
    $gravable = $this->input->post('pe_chkGravable');
    $gravable = (empty($gravable) ? 0 : 1);
    $proporcional = $this->input->post('pe_chkProp');
    $proporcional = (empty($proporcional) ? 0 : 1);
    $bMontoFijo = $this->input->post('chckMontoFijo');
    $MontoFijo = $this->input->post('pe_montofijo');
    $MontoFijo = (empty($MontoFijo) ? 0 : $MontoFijo);

    if (!empty($bMontoFijo)) $this->form_validation->set_rules("pe_montofijo", "Monto Fijo", "trim|required|numeric");

    if ($this->form_validation->run() == FALSE) {
      $data = array('status' => FALSE, 'message' => 'Existen errores en los campos de captura. Por favor verifique.', 'errores' => validation_errors());
    }
    else{
      $datos = array(
        'idConcepto'        =>  $idConcepto,
        'descripcion'       =>  $descripcion,
        'finicio'           =>  $finicio,
        'ffinal'            =>  $ffinal,
        'fpagar'            =>  $fpagar,
        'DiasPagar'         =>  $DiasPagar,
        'DiasLaborados'     =>  $DiasLaborados,
        'MontoExento'       =>  $MontoExento,
        'gravable'          =>  $gravable,
        'Proporcional'      =>  $proporcional,
        'MontoFijo'         =>  $MontoFijo,
        'idConceptoR'       =>  $idConceptoR,
        'FReferencia'       =>  $fReferencia,
        'MinDiasParaPagar'  =>  $MinDiasParaPagar,
        'PresupuestoID'     =>  $this->param_lib->get_parametro('idPresupuesto')
      );

      $guardar = $this->mConf->guarda_pago_especial($datos);
      if ( !empty($guardar) ) $data = array('status' => TRUE, 'message' => 'Concepto guardado con éxito.');
      else $data = array('status' => FALSE, 'message' => 'Error al intentar guardar el concepto.','errores' => '');
    }

		$this->output->set_output(json_encode($data));
  }

  public function elimina_pago_especial(){
    $idConcepto = $this->input->post('idConcepto');
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');

    $eliminar = $this->mConf->elimina_pago_especial($idConcepto,$idPresupuesto);
    if ( !empty($eliminar) ) $data = array('status' => TRUE, 'message' => 'Concepto eliminado con éxito.');
    else $data = array('status' => FALSE, 'message' => 'Error al intentar eliminar el concepto.');

    $this->output->set_output(json_encode($data));
  }

  public function genera_proyeccion(){
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
    $idEmpleado = $this->input->post('idEmpleado');
		if (empty($idPagoEspecial)) $idPagoEspecial = $this->input->post('idPagoEspecial');
    if (empty($idEmpleado)) {
			$this->mConf->elimina_dias_pago_especial($idPresupuesto,$idPagoEspecial);
			$empleados = $this->mConf->obtener_empleados_proyectar($idPresupuesto);
		}
    else $empleados = (object) array('empleado' => (object)array('Id' => $idEmpleado));

		if (!empty($empleados)) {
			$proyectar = $this->proyectar_empleados($idPresupuesto,$empleados);

	    if (empty($proyectar['error'])) $data = array('status' => true, "message" => 'Proyección de '.count($proyectar['proyectados']).' empleado(s) completada en: '.convert_to_string_time($proyectar['tiempo']));
	    else $data = array('status' => FALSE, 'message' => "Error no. ".$proyectar['error']." - Error al realizar la proyección del concepto. ".$proyectar['message']);
		}
		else $data = array('status' => FALSE, 'message' => "No se encontraron empleados para proyectar. Verifica las fechas de configuración del concepto.");

    $this->output->set_output(json_encode($data));
  }

  private function proyectar_empleados($idPresupuesto,$empleados,$idPagoEspecial=0){
		if (empty($idPagoEspecial)) $idPagoEspecial = $this->input->post('idPagoEspecial');
    $error = 0;
		$msj = '';
    $proyectados = array();
		set_time_limit(0);
    $this->benchmark->mark('inicia_pagosEsp');
    try {
      foreach ($empleados as $item) {
        if (empty($error)) {
          $idEmpleado = (empty($item->Id) ? 0 : $item->Id);
          if (!empty( $idEmpleado)) {
            $generar = $this->mConf->genera_dias_pago_especial_empleado($idPagoEspecial,$idEmpleado,$idPresupuesto);
						if (empty($generar->ErrorNumber)) $proyectados[] = $idEmpleado;
						else {
							$error = 4;
							$msj = $generar->ErrorMessage;
							log_message("error", "Controlador - configuraciones/proyectar_empleados(): ".$msj);
						}
          }
        }
        else break;
      }
    }
    catch(Exception $e) {
      $error = 3;
      log_message("error", "Controlador - configuraciones/proyectar_empleados(): ".$e->getMessage());
    }
    $this->benchmark->mark('finaliza_pagosEsp');
    $tiempo_exec = $this->benchmark->elapsed_time('inicia_pagosEsp', 'finaliza_pagosEsp', 2);
		$bitacora = new Bitacora();
		$bitacora->insertar($this->router->fetch_class().'/'.__FUNCTION__, 'Generando proyección: '.json_encode(array('id' => $idPagoEspecial,'presupuesto'=>$idPresupuesto,'error'=>$error, 'proyectados'=>$proyectados)));
    return array('error'=>$error, 'proyectados'=>$proyectados,'tiempo'=>$tiempo_exec, 'message' => $msj);
  }

  public function acumula_elimina_concepto_gravar(){
    $idConcepto = $this->input->post('idConcepto');
    $acumula = $this->input->post('acumula');
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');

		if (!empty($idConcepto)) {
			if ($acumula == 'true') $guardar = $this->mConf->inserta_conceptos_gravar($idConcepto,$idPresupuesto);
	    else $guardar = $this->mConf->elimina_conceptos_gravar($idConcepto,$idPresupuesto);

	    if (!empty($guardar)) $data = array('status' => TRUE, 'message' => 'Concepto modificado con éxito.');
	    else $data = array('status' => FALSE, 'message' => 'Ocurrió un error al intentar modificar el concepto.');
		}
		else $data = array('status' => FALSE, 'message' => 'Ocurrió un error al intentar modificar el concepto. No se recibió el parámetro esperado.');

    $this->output->set_output(json_encode($data));
  }

  public function abre_proyeccion_manual(){
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
    $datos['categorias'] = $this->select_lib->generico('categorias',0,true,true);
    $datos['catconceptospe'] = $this->select_lib->conceptos_pagos_especiales($idPresupuesto);
    $datos['idEmpleado'] = $this->input->post('idEmpleado');
		$datos['idConcepto'] = $this->input->post('idConcepto');
    $this->load->view('configuraciones/mod_proy_manual',$datos);
  }

  public function carga_datos_proyeccion_manual(){
    $idEmpleado = $this->input->post('idEmpleado');
    $idConcepto = $this->input->post('idConcepto');
    $datosProy = $this->mConf->diasProyectados_porEmpleado_porConcepto($idEmpleado,$idConcepto);
    if( empty($datosProy) ) $data = array('status' => FALSE,'message' => 'No se encontraron datos para proyectar.');
    else $data = array('status' => TRUE, 'datosProy' => $datosProy);

    $this->output->set_output(json_encode($data));
  }

  public function guarda_proyeccion_manual(){
    $datosProy = $this->input->post('datos');
    $datosProy = json_decode($datosProy,true);
    $categorias = $this->input->post('categorias');
    $categorias = json_decode($categorias,true);
    $aplicarTodo = (empty($datosProy['aplicarTodo']) ? false : true );
    $error = 0;
    $continuar = true;

    if( empty($datosProy) || empty($categorias) ) $data = array('status' => FALSE,'message' => 'No se recibió el parámetro esperado.');
    else{
      $this->mConf->iniciar_transaccion();
      try{
        if (empty($aplicarTodo)) {
          $result = $this->genera_proyeccion_manual($datosProy,$categorias,$datosProy['fechaini'],$datosProy['fechafin'],$datosProy['idConcepto']);
          if( $result == false ) $error = 1;
        }
        else{
          $conceptos = $datosProy['datosConceptos'];
          for ($i=0; $i < count($conceptos); $i++) {
            if( $continuar ){
              if( !empty($conceptos[$i]) ){
                $result = $this->genera_proyeccion_manual($datosProy,$categorias,$conceptos[$i]['fechaini'],$conceptos[$i]['fechafin'],$conceptos[$i]['idConcepto']);
                $continuar = $result;
              }
            }
            else $error = 1;
          }
        }
      }
      catch(Exception $e){
        $error = 2;
        log_message("error", "Controlador - configuraciones/guarda_proyeccion_manual(): ".$e->getMessage());
      }
      $this->mConf->terminar_transaccion($error);

      if ( empty($error) ) $data = array('status' => TRUE, 'message' => 'La proyección manual se guardó correctamente.');
      else $data = array('status' => FALSE, 'message' => 'Error al intentar guardar la proyección manual.');
    }

    $this->output->set_output(json_encode($data));
  }

  private function genera_proyeccion_manual($datosProy,$categorias,$fechaini,$fechafin,$idConcepto){
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
    $continuar = true;
    $this->mConf->elimina_proyeccion_manual_concepto($datosProy['idEmpleado'],$idPresupuesto,$idConcepto);
    for ($i=0; $i < count($categorias); $i++) {
      if( $continuar ){
        if( !empty($categorias[$i]) ){
          $datos = array($datosProy['idEmpleado'],
                          cambiaf_a_normal($fechaini),
                          cambiaf_a_normal($fechafin),
                          $categorias[$i][0], //idCategoria
                          $categorias[$i][3], //días proyectados
                          $categorias[$i][2], //días laborados
                          $datosProy['diasLab'],
                          $datosProy['diasProy'],
                          $datosProy['Puestos'],
                          $datosProy['Tipo'],
                          $idConcepto,
                          $idPresupuesto);

          $result = $this->mConf->guarda_proyeccion_manual($datos);
          $continuar = $result;
        }
      }
    }

    return $continuar;
  }

  public function carga_archivo_configuracion()
  {
    $datos['cattiponomina'] = $this->select_lib->generico('tipo_nomina',3,true,true);
    $datos['catconceptos'] = $this->select_lib->conceptos(5,1,0,0);
    $this->load->view('configuraciones/cargar_archivo_configuracion', $datos);
  }

  public function leeArchivoConfiguracion()
  {
    //PENDIENTE: mejorar código dividiendo en funciones individuales de procesamiento
    if (!empty( $_FILES['archConf']['tmp_name'])) {
			try {
				set_time_limit(0);
				ini_set('memory_limit', '1024M');
				$inputFile = $_FILES['archConf']['tmp_name'];
				$colIni = $this->input->post('colIni');
				$colIni = (empty($colIni) ? 'A' : strtoupper($colIni));
				$colFin = $this->input->post('colFin');
				// $colFin = (empty($colFin) ? 'Z' : strtoupper($colFin));
				$filaIni = $this->input->post('filaIni');
				$filaIni = (empty($filaIni) ? 1 : $filaIni);
				$filaFin = $this->input->post('filaFin');
				$nombreHoja = $this->input->post('nombreHoja');
				$arreglo = [];
				$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReaderForFile($inputFile);
				$spreadsheet = $reader->load($inputFile);
				$highestColumn = $spreadsheet->getActiveSheet()->getHighestDataColumn();
				$colFin = (empty($colFin) ? $highestColumn : strtoupper($colFin));
				$filterSubset = new MyReadFilter($filaIni, 0, range($colIni, $colFin)); //el segundo parámetro no se usa.
				$reader->setReadFilter($filterSubset);
				$reader->setReadDataOnly(true);
				$reader->setReadEmptyCells(false);
				if (empty($nombreHoja)) {
					$nombreHoja = $spreadsheet->getSheetNames()[0];
					$spreadsheet->setActiveSheetIndex(0);
				}
				else {
					if ($spreadsheet->getSheetByName($nombreHoja)) $spreadsheet->setActiveSheetIndexByName($nombreHoja);
					else throw new Exception('El archivo no contiene una hoja con el nombre: '.$nombreHoja);
				}
				$colFin = (empty($colFin) ? $highestColumn++ : $colFin++);
				$highestRow = $spreadsheet->getActiveSheet()->getHighestDataRow();
				$filaFin = (empty($filaFin) ? $highestRow : $filaFin);
				$worksheet = $spreadsheet->getActiveSheet();
				for ($row = $filaIni; $row <= $filaFin; ++$row)	{
					for ($col = $colIni; $col <= $colFin; ++$col)	{
						if ($worksheet->getCell($col . $row)->getCalculatedValue() != null)	$arreglo[$col] = (!empty($worksheet->getCell($col . $row)->getCalculatedValue()) ? $worksheet->getCell($col . $row)->getCalculatedValue() : 0);
						else break;
					}
				 	if (!empty($arreglo)) $objeto[] = $arreglo;
					$arreglo = [];
					// if (count($arreglo) == count(range($colIni, $colFin))) $objeto[] = $arreglo;
				}

				if (!empty($objeto) && !empty($objeto[0])) {
					$abc = new pjey_ABC();
					$abc->set_resultado($objeto);
					$abc->set_extraCondensed(true);
					$abc->set_key(0,$colIni,'asc');
					$abc->set_configuraciones(array('titulopanel' => 'Hoja: '.$nombreHoja));
					$abc->set_defaults('btnborrarFiltros','copiarTbl','cargando','acciones');
					$abc->set_configuraciones_extra(array('cardHeadClass'	=> 'bg-silver-600'), array('idTbl' => 'tblConfigurarEmpleados'));
					$abc->set_acciones(array('titulo'=>'Eliminar empleado','texto'=>'','icono'=>'far fa-trash-alt','class' => 'btn-danger','accion'=>'eliminar_conf_empleado'));
					$output = $abc->construir();
					$vista = $this->load->view($output['archivo'], $output['datos'],TRUE);
					$data = array('status' => true, 'html' => $vista);
				}
				else $data = array('status' => false, 'message' => "Ocurrió un error al intentar leer el archivo. Verifique su contenido o la configuración proporcionada.");
			}
			catch(Exception $e)
			{
				$data = array('status' => false, 'message' => "Ocurrió un error al intentar leer el archivo. Error: ".$e->getMessage());
			}
    }
    else $data = array('status' => false, 'message' => "Debe seleccionar un archivo para subir.");

    $this->output->set_output(json_encode($data));
  }

  public function guarda_configuracion_empleado()
  {
    $colCredencial = strtoupper($this->input->post('colCredencial'));
    $colMonto = strtoupper($this->input->post('colMonto'));
    $idTipoNomina = $this->input->post('cf_tiponomina');
    $idConcepto = $this->input->post('cf_concepto');
		$permanente = $this->input->post('chkPermanente');
    $vecesAplicar = $this->input->post('cf_vecesaplicar');
		$vecesAplicadas = $this->input->post('cf_aplicadas');
    $Gravado = $this->input->post('chkGravado');
		$tieneparteexe = $this->input->post('chkParteExe');
		$parteexe = $this->input->post('cf_parteexe');
    $empleados = $this->input->post('empleados');
    $empleados = json_decode($empleados,true);
    $idPeriodoPago = $this->param_lib->get_parametro('idPeriodoPago');
    $error = 0;
		$procesados = array();

    if (!empty($idTipoNomina) && !empty($idConcepto) && !empty($colCredencial) && !empty($colMonto) && !empty($empleados)) {
	    try {
				set_time_limit(0);
	      foreach ($empleados as $key => $value) {
	        if (!empty($value[$colCredencial]) && !empty($value[$colMonto])) {
						$credencial = FormatoFolio($value[$colCredencial],5);
						$empleado = $this->mEmpleado->traer_generales_empleado($credencial);
						if (!empty($empleado) && !empty($empleado->Id_Categoria)) {
							if ($empleado->Estado != 'I' && $empleado->Liquidado == 0) {
								$categoria = $this->mCat->traer_cat_varios_filtros('cat_Categorias',array('Id' => $empleado->Id_Categoria))[0];
								if (!empty($categoria)) {
									$montoCategoria = $categoria->SueldoBase;
									$idEmpleado = $empleado->Id;
									if ($value[$colMonto] < ($montoCategoria/2) && $idTipoNomina != 9) {
										$datos = array(
				              'Id_TipoNomina' => $idTipoNomina,
				              'Id_Concepto'   => $idConcepto,
				              'Monto'         => $value[$colMonto],
											'Permanente'		=> (empty($permanente) ? 0 : 1),
											'VecesAplicadas'	=> (empty($vecesAplicadas) ? 0 : $vecesAplicadas),
				              'VecesAplicar'  => (empty($vecesAplicar) ? 0 : $vecesAplicar),
				              'AntesDeImp'       => (empty($Gravado) ? 0 : 1),
											'TieneParteExcenta'	=> (empty($tieneparteexe) ? 0 : 1),
											'DiasSalMinParteExc' => (empty($tieneparteexe) ? 0 : $parteexe),
				            );
				            $configurado = $this->mConf->guarda_configuracion_por_archivo($idEmpleado,$datos);
										if (!empty($configurado)) $procesados[] = array('idEmpleado' => $configurado['idEmpleado'], 'Credencial' => $credencial, 'Monto' => $value[$colMonto], 'Estado' => 'Configurado.', 'idPeriodoPago' => $idPeriodoPago, 'configurado' => 1);
										else $procesados[] = array('idEmpleado' => $idEmpleado, 'Credencial' => $credencial, 'Monto' => $value[$colMonto], 'Estado' => 'Error al configurar.', 'idPeriodoPago' => $idPeriodoPago, 'configurado' => 0);
									}
									else {
										$error++;
										$procesados[] = array('idEmpleado' => $idEmpleado, 'Credencial' => $credencial, 'Monto' => $value[$colMonto],
																					'Estado' => 'Error: El monto a configurar es superior al 50% del salario del empleado.', 'idPeriodoPago' => $idPeriodoPago, 'configurado' => 0);
									}
								}
								else {
									$error++;
									$procesados[] = array('idEmpleado' => 0, 'Credencial' => $value[$colCredencial], 'Monto' => $value[$colMonto],
																				'Estado' => 'Error: No se encontró la categoría del empleado solicitado.', 'idPeriodoPago' => 0, 'configurado' => 1);
								}
							}
							else {
								$error++;
								$procesados[] = array('idEmpleado' => 0, 'Credencial' => $value[$colCredencial], 'Monto' => $value[$colMonto],
																			'Estado' => 'Error: Validar estado del empleado.', 'idPeriodoPago' => 0, 'configurado' => 1);
							}
						}
						else {
							$error++;
							$procesados[] = array('idEmpleado' => 0, 'Credencial' => $value[$colCredencial], 'Monto' => $value[$colMonto],
																		'Estado' => 'Error: No se encontró el empleado solicitado.', 'idPeriodoPago' => 0, 'configurado' => 1);
						}
					}
					else {
						$error++;
						$procesados[] = array('idEmpleado' => $idEmpleado, 'Credencial' => $value[$colCredencial], 'Monto' => $value[$colMonto],
																	'Estado' => (empty($value[$colCredencial]) ? 'Error: La columna no contiene una credencial válida' : (empty($value[$colMonto]) ? "Error: El monto debe ser mayor a cero." : "No configurado.")),
																	'idPeriodoPago' => $idPeriodoPago, 'configurado' => 0);
					}
	      }
	    }
	    catch(Exception $e) {
	      $error = 2;
	      log_message("error", "Controlador - configuraciones/guarda_configuracion_empleado(): ".$e->getMessage());
	    }

			$resultado = $this->genera_resultado_configuracion($procesados);

			if (empty($error)) $data = array('status' => TRUE, 'message' => 'Empleados configurados correctamente.', 'resultado' => $resultado, 'errores' => 0);
	    else $data = array('status' => TRUE, 'message' => 'Ocurrió un error al intentar configurar '.$error.' empleado(s). '.(count($procesados) - $error). ' empleado(s) configurados correctamente.', 'resultado' => $resultado, 'errores' => $error);
			unset($datos["Monto"]);
			$bitacora = new Bitacora();
			$bitacora->insertar($this->router->fetch_class().'/'.__FUNCTION__, 'Guardando configuración para '.(count($procesados) - $error). ' empleados. Configuración: '.json_encode($datos));
		}
		else $data = array('status' => FALSE, 'message' => 'Error al intentar configurar el concepto. No se recibió el parámetro esperado.');
    $this->output->set_output(json_encode($data));
  }

	public function guarda_configuracion_empleado_motivo()
	{
		$idEmpleado = $this->input->post("idEmpleado");
		$credencial = $this->input->post("credencial");
		$monto = $this->input->post("monto");
		$idTipoNomina = $this->input->post('cf_tiponomina');
		$idConcepto = $this->input->post('cf_concepto');
		$permanente = $this->input->post('chkPermanente');
		$vecesAplicar = $this->input->post('cf_vecesaplicar');
		$vecesAplicadas = $this->input->post('cf_aplicadas');
		$Gravado = $this->input->post('chkGravado');
		$tieneparteexe = $this->input->post('chkParteExe');
		$parteexe = $this->input->post('cf_parteexe');
		$motivo = $this->input->post("motivo");

    if (!empty($idTipoNomina) && !empty($idConcepto) && !empty($credencial) && !empty($monto) && !empty($idEmpleado)) {
			$datos = array(
				'Id_TipoNomina' => $idTipoNomina,
				'Id_Concepto'   => $idConcepto,
				'Monto'         => $monto,
				'Permanente'		=> (empty($permanente) ? 0 : 1),
				'VecesAplicadas'	=> (empty($vecesAplicadas) ? 0 : $vecesAplicadas),
				'VecesAplicar'  => (empty($vecesAplicar) ? 0 : $vecesAplicar),
				'AntesDeImp'       => (empty($Gravado) ? 0 : 1),
				'TieneParteExcenta'	=> (empty($tieneparteexe) ? 0 : 1),
				'DiasSalMinParteExc' => (empty($tieneparteexe) ? 0 : $parteexe),
			);
			$configurado = $this->mConf->guarda_configuracion_por_archivo($idEmpleado,$datos);
			if (!empty($configurado)) $data = array('status' => TRUE, 'message' => 'Empleado configurado correctamente.');
			else $data = array('status' => FALSE, 'message' => 'Ocurrió un error al intentar configurar al empleado: '.$credencial);
			$bitacora = new Bitacora();
			$bitacora->insertar($this->router->fetch_class().'/'.__FUNCTION__, '['.$data['status'].'] Guardando configuración para el empleado: '.$credencial.'. Motivo: '.$motivo.' - Configuración: '.json_encode($datos));
		}
		else $data = array('status' => FALSE, 'message' => 'Error al intentar configurar el concepto. No se recibió el parámetro esperado.');

		$this->output->set_output(json_encode($data));
	}

	public function genera_resultado_configuracion($procesados)
	{
		$abc = new pjey_ABC();
		$abc->set_resultado($procesados);
		$abc->set_key(1,'Credencial','asc');
		$abc->set_extraCondensed(true);
		$abc->set_configuraciones(array('titulopanel' => 'Empleados Configurados'));
		$abc->set_defaults('filtros','copiarTbl','cargando','acciones');
		$abc->set_configuraciones_extra(array('cardHeadClass'	=> 'bg-silver-600'), array('idTbl' => 'tblResultadoConf'));
		$abc->set_acciones(array('titulo'=>'Configurar Empleado','texto'=>'','icono'=>'fa-solid fa-gear','class' => 'btn-default','accion'=>'configurar_empleado', 'cond_visibilidad' => 'idPeriodoPago', 'val_visibilidad' => '>0'),
												array('titulo'=>'Calcular Empleado','texto'=>'','icono'=>'fas fa-calculator','class' => 'btn-default','accion'=>'calcular_empleado', 'cond_visibilidad' => 'idPeriodoPago', 'val_visibilidad' => '>0'),
												array('titulo'=>'Subir configuración', 'texto' => '', 'icono' => 'fa-solid fa-user-gear', 'class' => 'btn-default', 'accion'=>'configura_empleado_error', 'cond_visibilidad' => 'configurado', 'val_visibilidad' => '==0'),);
    $abc->set_formatoColumna(array('moneda' => array(2),'visible' => array(1,2,3)));
		$output = $abc->construir();
		$vista = $this->load->view($output['archivo'], $output['datos'],TRUE);
		return $vista;
	}

	public function empleado()
	{
		$credencial = $this->input->post('credencial');
		$credencial = FormatoFolio($credencial,5);
		$idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
		$objeto = $this->input->post("objeto");

		if (!empty($credencial)) {
			$empleado = $this->mEmpleado->traer_generales_empleado($credencial);
			if (!empty($empleado)) {
				$datosV['empleado'] = $empleado;
				$datosV['objeto'] = $objeto;
				$datosV['cattiponomina'] = $this->select_lib->generico('tipo_nomina',3,true,true);
				$datosV['catperc'] = $this->select_lib->conceptos(1,1);
				$datosV['catdeduc'] = $this->select_lib->conceptos(1,0);
				$datosV['credencial'] = $credencial;
				$datosV['idEmpleado'] = $empleado->Id;
				$datosV['idPeriodoPago'] = $this->param_lib->get_parametro('idPeriodoPago');
				$datosV['calculoCierre'] = $this->input->post('calculoCierre');
				$datos['vw_confEmpleado'] = $this->load->view('nomina/vw_conf_Empleado',$datosV,TRUE);
				if (empty($objeto)) $this->load->view('nomina/conf_perc_deduc_empleado',$datos);
				else $this->output->set_output(json_encode($datos['vw_confEmpleado']));
			}
			else{
				$datos['heading'] = 'Error al consultar la información';
				$datos['message'] = 'No se encontró información del empleado.';
				$this->load->view('errors/html/error_general_modal', $datos);
			}
		}
		else{
			$datos['heading'] = 'Error al consultar la información';
			$datos['message'] = 'No se recibió el parámetro esperado.';
			$this->load->view('errors/html/error_general_modal', $datos);
		}
	}

	public function carga_conf_vacaciones()
	{
		$idNomina = $this->param_lib->get_parametro('idPeriodoPago');
		$_POST['IdNomina '] = $idNomina;
		$abc = new pjey_ABC();
		$abc->set_operacion('exec','p_admarh_VacacionesConfiguradasXPeriodo');
		$output = $abc->construir();
		$datos['empleados'] = (empty($output['datos']) ? '' : $output['datos']["result_data"]);
		$this->load->view('configuraciones/conf_vacaciones',$datos);
	}

	public function configura_vacaciones_empleados()
	{
		$empleados = $this->input->post('empleados');
		$empleados = json_decode($empleados,true);
		if (!empty($empleados)) {
			for ($i=0; $i < count($empleados); $i++) {
				$datos = array(
					'Id_Empleado' => $empleados[$i]['idEmpleado'],
					'Monto' => $empleados[$i]['Monto'],
					'Id_Concepto' => 56,
					'Id_TipoNomina' => 3
				);
				$actualiza = $this->mConf->guarda_configuracion_empleado($datos);
			}
			$data = array('status' => TRUE, 'message' => 'Empleados configurados correctamente.');
		}
		else  $data = array('status' => FALSE, 'message' => 'Ocurrió un error al intentar obtener los empleados. No se recibió el parámetro correcto.');
		$this->output->set_output(json_encode($data));
	}

	public function obtener_empleados_multi_categoria()
	{
		$this->output->set_output(json_encode($output['data']));
	}

	public function anticipo_aguinaldo()
	{
  	$idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
		$fechaini = '01/01/'.date('Y');
		$fechafin = '31/12/'.date('Y');
		$_POST['FechaInicial '] = $fechaini;
		$_POST['FechaFinal '] = $fechafin;
		$_POST['NumNomina '] = '';
		$_POST['PresupuestoId '] = $idPresupuesto;
		$abc = new pjey_ABC();
		$abc->set_operacion('exec','p_admarh_rptAnticipoAguinaldo');
		$output = $abc->construir();
		$datos['empleados'] = (empty($output['datos']) ? '' : $output['datos']["result_data"]);
		$datos['cattiponomina'] = $this->select_lib->generico('tipo_nomina',9,true,true);
		$this->load->view('configuraciones/anticipo_aguinaldo', $datos);
	}

	public function complemento_aguinaldo()
	{
		$idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
		$empleados = $this->mConf->obtener_empleados_complemento($idPresupuesto);
		if (!empty($empleados)) {
			$abc = new pjey_ABC();
			$abc->set_resultado($empleados);
			$abc->set_extraCondensed(true);
			$abc->set_defaults('muestra_panel','btnborrarFiltros','copiarTbl','cargando');
			$abc->set_configuraciones_extra(array('idTbl' => 'tblEmpleadosComplementoAguinaldo'),      array('checkBox' => 0),);
			$abc->set_formatoColumna(array('moneda' => array(3,4,5,6,7), 'visible' => array(0,1,2,3,4,5,6,7)));
			$abc->set_encabezados(array(
																	'MontoAExentar'		=> 'Monto a Exentar',
																	'SaldoAguinaldo'	=> 'Saldo Aguinaldo',
																));
			$output = $abc->construir();
			$vista = $this->load->view($output['archivo'], $output['datos'],TRUE);
			$data = array('status' => true, 'html' => $vista);
		}
		else $data = array('status' => false, 'message' => 'No se encontraron empleados con anticipo de aguinaldo.');
		$this->output->set_output(json_encode($data));
	}

	public function procesa_conf_anticipo_aguinaldo()
	{
		$empleados = $this->input->post('empleados');
		$empleados = json_decode($empleados,true);
		$idTipoNomina = $this->input->post('aa_tiponomina');
		$Gravado = $this->input->post('aa_chkGravado');
		$tieneparteexe = $this->input->post('aa_chkParteExe');
		$parteexe = $this->input->post('aa_parteexe');

		$error = 0;
		$continuar = true;
		$procesados = array();

		if (!empty($idTipoNomina)) {
			try {
        set_time_limit(0);
				foreach ($empleados as $key => $value) {
					if ($continuar) {
						$datos = array(
							'IdEmpleado'				=> $value['idEmpleado'],
							'Id_TipoNomina' 		=> $idTipoNomina,
							'Gravado'  	 				=> (empty($Gravado) ? 0 : 1),
							'TieneParteExenta'	=> (empty($tieneparteexe) ? 0 : 1),
							'DiasParteExenta'		=> (empty($tieneparteexe) ? 0 : $parteexe),
							'Monto'							=> $value['Monto'],
						);
						$configurado = $this->mConf->guardar_conf_anticipo_aguinaldo($datos);
						if (!empty($configurado)) $procesados[] = array('idEmpleado' => $value['idEmpleado'], 'Credencial' => $value['Credencial'], 'Monto' => $value['Monto'], 'Estado' => 'Configurado.');
						else $procesados[] = array('idEmpleado' => 0, 'Credencial' => $value['Credencial'], 'Monto' => $value['Monto'], 'Estado' => 'Error al configurar.');
					}
					else $error = 1;
				}
			}
			catch(Exception $e){
				$error = 2;
				log_message("error", "Controlador - configuraciones/procesa_conf_anticipo_aguinaldo(): ".$e->getMessage());
			}

			$resultado = $this->genera_resultado_configuracion($procesados,$error);
			if (empty($error)) $data = array('status' => TRUE, 'message' => 'Empleados configurados correctamente.', 'resultado' => $resultado);
			else $data = array('status' => FALSE, 'message' => 'Ocurrió un error al intentar guardar la configuración.', 'resultado' => $resultado);
		}
		else $data = array('status' => FALSE, 'message' => 'Error al intentar guardar la configuración. No se recibió el parámetro esperado.');
		$this->output->set_output(json_encode($data));
	}

	/**
	 * guarda la configuración para el complemento de aguinaldo
	 * @method configura_complemento_aguinaldo
	 * @author alopez
	 * @date
	 * @return [type]                          [description]
	 */
	public function configura_complemento_aguinaldo()
	{
		$empleados = $this->input->post('empleados');
		$empleados = json_decode($empleados,true);
  	$idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
		$idNomina = $this->param_lib->get_parametro('idPeriodoPago');

		$error = 0;
		$continuar = true;
		$procesados = array();

		if (!empty($empleados)) {
			try {
        set_time_limit(0);
				foreach ($empleados as $key => $value) {
					if ($continuar) {
						$datos = array(
							'IdNomina' 				=> $idNomina,
							'IdEmpleado'			=> $value['IdEmpleado'],
							'MontoAguinaldo'	=> $value['Aguinaldo'],
							'SaldoAguinaldo'	=> $value['SaldoAguinaldo'],
							'MontoExento'			=> $value['MontoAExentar'],
							'PresupuestoId'		=> $idPresupuesto
						);
						$configurado = $this->mConf->guardar_conf_complemento_aguinaldo($datos);
						if (empty($configurado)) $continuar = false;
						// if (!empty($configurado)) $procesados[] = array('Credencial' => $value['Credencial'], 'Monto' => $value['SaldoAguinaldo'], 'Estado' => 'Configurado.');
						// else $procesados[] = array('idEmpleado' => 0, 'Credencial' => $value['Credencial'], 'Monto' => $value['SaldoAguinaldo'], 'Estado' => 'Error al configurar.');
					}
					else $error = 1;
				}
			}
			catch(Exception $e){
				$error = 2;
				log_message("error", "Controlador - configuraciones/configura_complemento_aguinaldo(): ".$e->getMessage());
			}
			if (empty($error)) $data = array('status' => TRUE, 'message' => 'Empleados configurados correctamente.');
			else $data = array('status' => FALSE, 'message' => 'Ocurrió un error al intentar guardar la configuración.');
		}
		else $data = array('status' => FALSE, 'message' => 'Error al intentar guardar la configuración. No se recibió el parámetro esperado.');
		$this->output->set_output(json_encode($data));
	}

	public function carga_empleados_multicategoria()
	{
		$fechaini = $this->input->post('pe_fechaini_multi');
		$fechafin = $this->input->post('pe_fechafin_multi');
		$tipoNomina = $this->input->post('pe_tiponomina_multi');
  	$idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
		$datos = array($fechaini,$fechafin,$tipoNomina,$idPresupuesto);
		$empleados = $this->mConf->carga_empleados_multicategoria($datos);
	}

	public function carga_cfdi()
	{
		$idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
		$quincenas = $this->select_lib->historial_nomina($idPresupuesto);
		$datos['quincenas'] = $quincenas;
		$this->load->view('nomina/carga_archivo_uuid',$datos);
	}

	public function leeArchivoUUID()
	{
		if (!empty( $_FILES['archConf']['tmp_name'])) {
			set_time_limit(0);
			ini_set('memory_limit', '-1');
			$arreglo = [];
			$inputFile = $_FILES['archConf']['tmp_name'];
			$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
			$reader->setReadDataOnly(TRUE);
			$spreadsheet = $reader->load($inputFile);

			// $worksheet = $spreadsheet->getActiveSheet();
			// // Get the highest row and column numbers referenced in the worksheet
			// $highestRow = 1; // e.g. 10
			// $highestColumn = $worksheet->getHighestDataColumn(); // e.g 'F'
			// $highestColumnIndex = PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($highestColumn); // e.g. 5
			//
			// for ($col = 1; $col <= $highestColumnIndex; ++$col) {
			// 		if (in_array($worksheet->getCellByColumnAndRow($col, 1)->getValue(),array('Serie-Folio','UUID','F. Emisión','Num. Empleado','F. Pago','F. Inicio','F. Final','Total'))) {
			// 			$value = $worksheet->getCellByColumnAndRow($col, 1)->getParent()->getCurrentColumn();
			// 			$arreglo[] = $value;
			// 		}
			// }
			$arreglo_bien = array('A','B','D','F','U','V','W','Y');
			// $diff = array_diff_assoc($arreglo, $arreglo_bien);
			$diff = false;
			if (empty($diff)) {
				$filterSubset = new MyReadFilter(1, 0, $arreglo_bien);
				$reader->setReadFilter($filterSubset);
				$reader->setReadDataOnly(true);
				$reader->setReadEmptyCells(false);
				$spreadsheet = $reader->load($inputFile);
				$filaIni = 1;
				$colIni = (empty($colIni) ? 'A' : strtoupper($colIni));
				$highestRow = $spreadsheet->getActiveSheet()->getHighestDataRow();
				$filaFin = (empty($filaFin) ? $highestRow : $filaFin);
				$colFin = 'Y';
				// $datos = $spreadsheet->getActiveSheet()->toArray();
				$worksheet = $spreadsheet->getActiveSheet();
				for ($row = $filaIni; $row <= $filaFin; ++$row)	{
					for ($col = $colIni; $col <= $colFin; ++$col)	{
						if ($worksheet->getCell($col . $row)->getCalculatedValue() != null)	{
							if ($row == 1) {
								$header[$col] = $worksheet->getCell($col . $row)->getCalculatedValue();
							}
							else {
								$arreglo[$header[$col]] = (!empty($worksheet->getCell($col . $row)->getCalculatedValue()) ? $worksheet->getCell($col . $row)->getCalculatedValue() : 0);
							}

						}
						// else break;
					}
					if (!empty($arreglo)) $objeto[] = $arreglo;
					$arreglo = [];
				}
				$abc = new pjey_ABC();
				$abc->set_resultado($objeto);
				$abc->set_extraCondensed(true);
				$abc->set_defaults('btnborrarFiltros','copiarTbl','cargando','muestra_panel');
				$abc->set_configuraciones_extra(array('idTbl' => 'tblCargaUUID'));

				$output = $abc->construir();
				$vista = $this->load->view($output['archivo'], $output['datos'],TRUE);
				$data = array('status' => true, 'html' => $vista);
			}
			else $data = array('status' => false, 'message' => "Se encontraron inconsistencias en el formato del archivo.");
		}
    else $data = array('status' => false, 'message' => "Debe seleccionar un archivo para subir.");

    $this->output->set_output(json_encode($data));
	}

	public function guardar_info_uuid()
	{
    $registros = $this->input->post('registros');
    $registros = json_decode($registros,true);
    $error = 0;
		$procesados = array();

    if (!empty($registros)) {
	    try {
    		$idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
				set_time_limit(0);
	      foreach ($registros as $key => $value) {
					$datos = array(
	          'PresupuestoId'	=> $idPresupuesto,
	          'Serie'   			=> $value['Serie-Folio'],
	          'UUID'         	=> $value['UUID'],
						'Credencial'		=> $value['Num. Empleado'],
						'FechaPago'			=> $value['F. Pago'],
	          'FechaInicio'  	=> $value['F. Inicio'],
	          'FechaEmision'  => $value['F. Emisión'],
						'FechaFin'			=> $value['F. Final'],
						'MontoTotal' 		=> $value['Total'],
						'Usuario'				=> LimpiaCadena($this->session->UsuarioNT)
	        );
	        $guardar = $this->mNomina->guarda_info_uuid($datos);
					if (!empty($guardar) && empty($guardar->Error)) $procesados[] = array('Num. Empleado' => $value['Num. Empleado'], 'Serie' => $value['Serie-Folio'], 'UUID' => $value['UUID'], 'Monto' => $value['Total'], 'Estado' => $guardar->Mensaje);
					else {
						$error++;
						$procesados[] = array('Num. Empleado' => $value['Num. Empleado'], 'Serie' => $value['Serie-Folio'], 'UUID' => $value['UUID'], 'Monto' => $value['Total'], 'Estado' => $guardar->Mensaje);
					}
	      }
	    }
	    catch(Exception $e) {
	      $error = 2;
	      log_message("error", "Controlador - configuraciones/guardar_info_uuid(): ".$e->getMessage());
	    }
			$abc = new pjey_ABC();
			$abc->set_resultado($procesados);
			$abc->set_key(1,'Credencial','asc');
			$abc->set_extraCondensed(true);
			$abc->set_defaults('filtros','copiarTbl','cargando','muestra_panel');
			$abc->set_configuraciones_extra(array('cardHeadClass'	=> 'bg-silver-600'), array('idTbl' => 'tblResultadoUUID'));
	    $abc->set_formatoColumna(array('moneda' => array(3),));
			$output = $abc->construir();
			$vista = $this->load->view($output['archivo'], $output['datos'],TRUE);

			if (empty($error)) $data = array('status' => TRUE, 'message' => 'Registros guardados correctamente.', 'vista' => $vista, 'errores' => 0);
	    else $data = array('status' => TRUE, 'message' => 'Ocurrió un error al intentar guardar '.$error.' registro(s). '.(count($procesados) - $error). ' registro(s) guardados correctamente.', 'vista' => $vista, 'errores' => $error);

			$bitacora = new Bitacora();
			$bitacora->insertar($this->router->fetch_class().'/'.__FUNCTION__, 'Guardando UUID para '.(count($procesados) - $error). ' registros.');
		}
		else $data = array('status' => FALSE, 'message' => 'Error al intentar configurar el concepto. No se recibió el parámetro esperado.');
    $this->output->set_output(json_encode($data));
	}

	public function historial_uuid()
	{
		$idTipoNomina = $this->input->post('idTipoNomina');
		$idPeriodo =  $this->input->post('quincena');
		$datos = array($idPeriodo,$idTipoNomina);
		$registros = $this->mNomina->obtener_historial_uuid($datos);
		if (!empty($registros)) {
			$abc = new pjey_ABC();
			$abc->set_resultado($registros);
			$abc->set_key(0,'Credencial','asc');
			$abc->set_extraCondensed(true);
			$abc->set_defaults('muestra_panel','btnborrarFiltros','copiarTbl','cargando');
			$abc->set_configuraciones_extra(array('idTbl' => 'tablahistorialUUID'));
			$abc->set_formatoColumna(array('moneda' => array(7), 'fecha' => array(3)));
			$output = $abc->construir();
			$vista = $this->load->view($output['archivo'], $output['datos'],TRUE);
			$data = array('status' => true, 'html' => $vista);
		}
		else $data = array('status' => false, 'message' => 'No se encontraron registros con los datos proporcionados.');
		$this->output->set_output(json_encode($data));
	}

	public function empleados_configurados()
	{
		$idTipoNomina = $this->input->post('cce_tiponominaConf');
		$idConcepto =  $this->input->post('cce_conceptoConf');

		if (!empty($empleados)) {
			$abc = new pjey_ABC();
			$abc->set_resultado($empleados);
			$abc->set_key(0,'Credencial','asc');
			$abc->set_extraCondensed(true);
			$abc->set_defaults('muestra_panel','btnborrarFiltros','copiarTbl','cargando');
			$abc->set_configuraciones_extra(array('idTbl' => 'tablahistorialUUID'));
			$abc->set_formatoColumna(array('moneda' => array(7), 'fecha' => array(3)));
			$output = $abc->construir();
			$vista = $this->load->view($output['archivo'], $output['datos'],TRUE);
			$data = array('status' => true, 'html' => $vista);
		}
		else $data = array('status' => false, 'message' => 'No se encontraron registros con los datos proporcionados.');
		$this->output->set_output(json_encode($data));
	}






//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

  /**
   * función para consumir la api de CASU y guardar la información de un reporte
   * @method guarda_ayuda_casu
   * @author alopez
   * @return [type]            [description]
   */
  public function guarda_ayuda_casu()
  {
    $reporte = $this->input->post('hd_descripcion');
		$this->load->library('PHPRequests',NULL,'requests_lib');
		$setWS = $this->requests_lib->set_webservice('WS_CASU');
		if (!empty($setWS)) {
			$data = array('reporte'          => $reporte,
										'cvesistema'      => '0',
										'usuario'      => LimpiaCadena($this->session->UsuarioNT)
									);
			$guardar = $this->requests_lib->consulta_webservice_post('index.php/api/Casu/guarda_ayuda_casu',$data);
			$respuesta = $guardar['data'];
			$data = array('status' => TRUE, 'message' => $respuesta->message, 'folio' => $respuesta->folio);
		}
		else {
			$data = array('status' => FALSE, 'message' => "No se ha configurado el webservice de CASUNET.");
			log_message("error","No se ha configurado el webservice de CASUNET.");
		}
		$this->output->set_output(json_encode($data));
		// return $data;

		// $data = array('status' => TRUE, 'message' => 'Solicitud de Servicio enviada correctamente.', 'folio' => $reporte);
    // $this->output->set_output(json_encode($data));
		//
    // $this->load->library('curl');
    // $timeout = 0; // colocar 0 para evitar límite de tiempo.
    // $url = 'http://cjinfdp02:80/casu/index.php/api/casu/cargar_vista_ayuda';
    // $this->curl->create($url);
    // $this->curl->http_header('Accept: application/json');
    // $this->curl->post(array('rutasys' => base_url(), 'accion' => $funcion, 'menu' => false));
    // $this->curl->option('CONNECTTIMEOUT',$timeout);
    // $result = $this->curl->execute();
    // $respuesta = json_decode($result);
  }

} //de la clase

// class CustomXlsxReader implements \PhpOffice\PhpSpreadsheet\Reader\IReadFilter
// {
//   public function readCell($column, $row, $worksheetName = '') {
//     log_message("error","sfsdfsdf");
//    return in_array($column, range('B','F'));
//   }
// }

class MyReadFilter implements \PhpOffice\PhpSpreadsheet\Reader\IReadFilter
{
    private $startRow = 0;
    private $endRow = 0;
    private $columns = [];

    public function __construct($startRow, $endRow, $columns)
    {
      $this->startRow = $startRow;
      $this->endRow = $endRow;
      $this->columns = $columns;
    }

    public function readCell($column, $row, $worksheetName = '')
    {
      // if ($row >= $this->startRow && $row <= $this->endRow) {
      if ($row >= $this->startRow) {
        if (in_array($column, $this->columns)) {
          return true;
        }
      }
      return false;
    }
}
