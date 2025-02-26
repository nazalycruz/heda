<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pago_extraordinario extends IIS_Controller {

  public $rutaVistas = 'pago_extraordinario/';

  public function __construct(){
    parent::__construct();
    $this->load->model('empleado_modelo','mEmpleado',TRUE);
    $this->load->model('parametros_modelo','mParametros',TRUE);
    $this->load->model('nomina_modelo','mNomina');
    $this->load->model('calculos_modelo','mCalculos');
    $this->load->model('catalogos_modelo','mCat');
    $this->load->library('ParamSystem', NULL, 'param_lib');
    $this->load->library('Calculos_Nomina', NULL, 'calculos_lib');
    $this->load->library('Selectores_class', NULL, 'select_lib');
    $this->load->model('pagosextraordinarios_modelo','mPagosExt');
  }

  public function index(){
    $idPeriodoPago = $this->input->post('idPeriodoPago');
    $idPeriodoPago = (!empty($idPeriodoPago) ? $idPeriodoPago : 0);
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
    $quincenas = $this->select_lib->historial_nomina($idPresupuesto,$idPeriodoPago);

    $datos['quincenas'] = $quincenas;
    $this->load->view($this->rutaVistas.'index',$datos);
  }

  public function listado(){
    $idPeriodoPago = $this->input->post('idPeriodoPago');
    $result = $this->mPagosExt->listadoPagosExtraordinarios($idPeriodoPago);
    $this->load->library('pjey_ABC');
    $abc = new pjey_ABC();
    $abc->set_resultado($result);
    $abc->set_key(3,'IdEmpleado','asc');
    $abc->set_defaults('muestra_panel','cargando','btnborrarFiltros','acciones','filtros');
    $abc->set_formatoColumna(array('visible' => array(0,3,4,9,10,16)));
    $abc->set_acciones(
      array('titulo'=>'Ver detalle del pago','texto'=>'','icono'=>'far fa-eye','accion'=>'detalle_pago_extraordinario'),
      array('titulo'=>'Actualizar pago electrónico','texto'=>'','icono'=>'far fa-credit-card','accion'=>'actualizar_pago_electronico'),
      array('titulo'=>'Eliminar pago','texto'=>'','icono'=>'far fa-trash-alt','class' => 'btn-danger', 'accion'=>'eliminar_pago_extraordinario')
    );
    $abc->set_encabezados(array('FPago'       => 'Fecha de Pago',
                                'FDispersion' => 'Fecha Dispersión'));
    $abc->set_configuraciones_extra(
      array('idTbl' => 'tblPagosExtraordinarios'),
      array('checkBox' => 0),
      array('confFiltros' => array( 'filtrosSelect' => array(3,4,9,10,16)))
    );

    $output = $abc->construir();
    if( $output['vista'] ) $this->load->view($output['archivo'], $output['datos']);
    else $this->output->set_output(json_encode($output['data']));
  }

  public function armonizacion()
  {
    $idPeriodoPago = $this->input->post('idPeriodoPago');
    $datos['idPeriodoPago'] = $idPeriodoPago;
    $this->load->view($this->rutaVistas.'armonizacion', $datos);
  }

  public function listado_dispersados()
  {
    $idNomina = $this->input->post('idPeriodoPago');
    $claveStatusARCON = $this->input->post('clave');
    $result = $this->mPagosExt->carga_listado_armonizacion($idNomina,$claveStatusARCON);
    if ($result !== false) $data = array('status' => TRUE, 'registros' => $result);
		else $data = array('status' => FALSE, 'message' => 'Ocurrió un error al intentar obtener los registros. Intente de nuevo más tarde.');

		$this->output->set_output(json_encode($data));
  }

  public function listado_pagos_armonizacion()
  {
    $folioMomento = $this->input->post('folioMomento');
    $result = $this->mPagosExt->carga_listado_pagos_armonizacion($folioMomento);

    if (!empty($result)) $data = array('status' => TRUE, 'registros' => $result);
    else $data = array('status' => FALSE, 'message' => 'Ocurrió un error al intentar obtener los pagos extraordinarios. Intente de nuevo más tarde.');

    $this->output->set_output(json_encode($data));
  }

  public function agregar(){
    $idPeriodoPago = $this->input->post('idPeriodoPago');
    // $fechaini = $this->param_lib->get_parametro('FechaIniPeriodo');
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
    // $result = $this->mNomina->BuscaNominaAbierta($fechaini,$idPresupuesto);
    // $idPeriodoPago = (!empty($result) ? $result->Id : 0);
    $quincenas = $this->select_lib->historial_nomina($idPresupuesto);
    $datos['quincenas'] = $quincenas;
    $datos['idPeriodoPago'] = $idPeriodoPago;
    $this->load->view($this->rutaVistas.'agregar', $datos);
  }

  public function carga_agregar_empleados(){
    $anioanterior = date("Y",strtotime("-1 year"));
    $credencial = $this->input->post('credencial');
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
    $emisores = $this->select_lib->emisores($idPresupuesto);
    $datos['emisores'] = $emisores;
    $datos['credencial'] = $credencial;
    $datos['catdependencias'] = $this->select_lib->generico('dependencias',0,true,true);
    $datos['catcategorias'] = $this->select_lib->generico('categorias',0,true,true);
    $datos['fechaini'] = '01/01/'.$anioanterior;
    $datos['fechafin'] = '31/12/'.$anioanterior;
    $this->load->view($this->rutaVistas.'mod_agrega_empleado',$datos);
  }

  public function carga_agregar_conceptos(){
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
    $partida = $this->param_lib->get_parametro('PartidaContable');
    $datos['catconceptos'] = $this->select_lib->conceptos_presupuestal($idPresupuesto);
    $datos['esPercepcion'] = $this->input->post('esPercepcion');
    $datos['idConcepto'] = $this->input->post('idConcepto');
    $datos['monto'] = $this->input->post('monto');
    $datos['gravado'] = $this->input->post('gravado');
    $datos['parteexenta'] = $this->input->post('parteexenta');
    $this->load->view($this->rutaVistas.'mod_agrega_concepto',$datos);
  }

  public function carga_pago_electronico(){
    $idEmpleado = $this->input->post('idEmpleado');
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
    $result =  $this->mEmpleado->obtener_pago_electronicoTipoNomina($idEmpleado,$idPresupuesto);
    $this->output->set_output(json_encode($result));
  }

  public function guarda_pago_extraordinario()
  {
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
    $idPeriodoPago = $this->input->post('pextEmp_periodo');
    $fechaPago = $this->input->post('pext_fechapago');
    $fechaDispersion = $this->input->post('pext_fechadisp');
    $empleados = $this->input->post('empleados');
    $empleados = json_decode($empleados,true);
    $percepciones = $this->input->post('percepciones');
    $percepciones = json_decode($percepciones,true);
    $deducciones = $this->input->post('deducciones');
    $deducciones = json_decode($deducciones,true);
    $continuar = true;
    $this->mPagosExt->iniciar_transaccion();
    foreach ($empleados as $itemEmpleado) {
      $datosEmpleado = array(
        'idNomina'      => $idPeriodoPago,
        'idEmpleado'    => $itemEmpleado['idEmpleado'],
        'FPago'         => $fechaPago,
        'FDispersion'   => $fechaDispersion,
        'Enomina'       => (empty($itemEmpleado['ENomina']) ? 0 : 1),
        'idEmisor'      => $itemEmpleado['idEmisor'],
        'NumeroCuenta'  => $itemEmpleado['NumeroCuenta'],
        'idCategoria'   => $itemEmpleado['idCategoria'],
        'idDependencia' => $itemEmpleado['idDependencia']
      );
      $pagoExt = $this->mPagosExt->guarda_pago_extraordinario($datosEmpleado);
      $idPagoExt = $pagoExt->Resultado;
      if ($pagoExt != false && !empty($idPagoExt)) {
        $continuar = $this->guardar_percepciones_deducciones($idPagoExt,$idPresupuesto,$percepciones,$deducciones);
        if ($continuar) $continuar = $this->mPagosExt->calcula_pago_extraodinario(array($idPagoExt,$idPeriodoPago,$itemEmpleado['idEmpleado'],$itemEmpleado['idCategoria']));
      }
      else $continuar = false;
    }
    $this->mPagosExt->terminar_transaccion(($continuar == true ? 0 : 1));
    if ($continuar) $data = array('status' => TRUE, 'message' => 'Pago extraordinario guardado con éxito.', 'idPeriodoPago' => $idPeriodoPago);
    else $data = array('status' => FALSE, 'message' => 'Error al intentar guardar el pago extraordinario.');

    $this->output->set_output(json_encode($data));
  }

  private function guardar_percepciones_deducciones($idPagoExt,$idPresupuesto,$percepciones,$deducciones)
  {
    $continuar = true;
    if (!empty($percepciones)) {
      for ($i=0; $i < count($percepciones); $i++) {
        if ($continuar) {
          if (isset($percepciones[$i]['Monto'])) {
            if ($percepciones[$i]['Monto'] > 0) {
              $datosDetallePer = array(
                'idPagoExt'     => $idPagoExt,
                'idConcepto'    => $percepciones[$i]['idConcepto'],
                'Gravado'       => (empty($percepciones[$i]['Gravado']) ? 0 : 1),
                'ParteExenta'   => (empty($percepciones[$i]['DiasExento']) ? 0 : $percepciones[$i]['DiasExento']),
                'Monto'         => $percepciones[$i]['Monto'],
                'idPresupuesto' => $idPresupuesto
              );
              $continuar = $this->mPagosExt->guarda_det_pago_extraordinario($datosDetallePer);
            }
          }
        }
      }
    }

    if (!empty($deducciones)) {
      for ($i=0; $i < count($deducciones); $i++) {
        if ($continuar) {
          if (isset($deducciones[$i]['Monto'])) {
            if ($deducciones[$i]['Monto'] > 0) {
              $datosDetalleDed = array(
                'idPagoExt'     => $idPagoExt,
                'idConcepto'    => $deducciones[$i]['idConcepto'],
                'Gravado'       => 0,
                'ParteExenta'   => 0,
                'Monto'         => $deducciones[$i]['Monto'],
                'idPresupuesto' => $idPresupuesto
              );
              $continuar = $this->mPagosExt->guarda_det_pago_extraordinario($datosDetalleDed);
            }
          }
        }
      }
      if (!$guardadeduc) $continuar = false;
    }
    return $continuar;
  }

  public function elimina_pago_extraordinario()
  {
    $idPagoExt = $this->input->post('idPagoExt');
    $eliminar = $this->mPagosExt->elimina_pago_extraordinario($idPagoExt);
    if (!empty($eliminar)) $data = array('status' => TRUE, 'message' => 'Pago extraordinario eliminado con éxito.');
    else $data = array('status' => FALSE, 'message' => 'Error al intentar eliminar el pago extraordinario.');

    $this->output->set_output(json_encode($data));
  }

  public function actualiza_pago_electronico_extraordinario()
  {
    $idPagoExt = $this->input->post('pext_idPago');
    $idEmpleado = $this->input->post('pext_idEmpleado');
    $enomina = $this->input->post('pext_chkENomina');
    $enomina = (empty($enomina) ? 0 : 1);
    $numeroCuenta = $this->input->post('pext_numerocuenta');
    $idEmisor = $this->input->post('pext_txtEmisor');
    $guardaConf = $this->input->post('pext_guardaConf');
    $actualiza = false;
    $this->mPagosExt->iniciar_transaccion();
    $datos = array(
      'ENomina'       => $enomina,
      'IdEmisor'      => $idEmisor,
      'NumeroCuenta'  => $numeroCuenta,
    );
    $actualiza = $this->mPagosExt->actualizar_pago_extraordinario($idPagoExt,$idEmpleado,$datos);
    if (!empty($guardaConf) && !empty($actualiza)) $actualiza = $this->mEmpleado->actualiza_pago_electronico($idEmpleado,$idEmisor,$enomina,$numeroCuenta);

    $this->mPagosExt->terminar_transaccion(($actualiza == true ? 0 : 1));

    if ($actualiza) $data = array('status' => TRUE, 'message' => 'Pago extraordinario actualizado con éxito.');
    else $data = array('status' => FALSE, 'message' => 'Error al intentar actualizar el pago extraordinario.');

    $this->output->set_output(json_encode($data));
  }

  //GSantos, 2021.04.22 CASU 0449-2021
  public function carga_detalle_pago(){
      $IdPagoExt =  $this->input->post("idPagoExt",true);
      $encabezado = $this->mPagosExt->obtenerPagoExtraordinario($IdPagoExt);

      if($encabezado != false)
              {
              $datos['encabezado']= $encabezado;
              $detalle = $this->mPagosExt->obtenerDetallePagoExtraordinario($IdPagoExt);
              $datos['detalle']= $detalle;

            }
     else {
              $datos['status'] = false;
              $datos['mensaje'] = "No hay datos para este PAGO.";
          }

      $this->load->view('pago_extraordinario/detalle_pago', $datos);
    }

}
