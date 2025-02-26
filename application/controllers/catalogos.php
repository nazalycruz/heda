<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (version_compare(PHP_VERSION, '7.0', '>=')) $rutalib = 'phpspreadsheet';
else $rutalib = 'phpspreadsheet_PHP5';

require APPPATH . 'third_party/'.$rutalib.'/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;

class Catalogos extends IIS_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Escuela_modelo','mod_escuela',TRUE);
        $this->load->model('selectores_model','mod_selectores',TRUE);
        $this->load->model('catalogos_modelo','mod_catalogos',TRUE);
        $this->load->model('utilerias_modelo','mod_util',TRUE);
        $this->load->helper('array');
        $this->load->library('ParamSystem', NULL, 'param_lib');
				$this->load->library('PHPRequests',NULL,'requests_lib');
				$this->load->library('pjey_ABC');
		    $this->load->library('Selectores_class', NULL, 'select_lib');
    }

    public function mantenimiento()
    {
      $datos['tabs'] = true;
      $datos['inicio'] = 'conceptos';
      $this->load->view('catalogos/formulario',$datos);
    }

    public function carga_catalogo_generico()
    {
			$catalogo = $this->input->post('catalogo');
      $consulta = $this->input->post('consulta');
      $parametros = $this->input->post('parametros');
			$idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');

      $abc = new pjey_ABC();
			$abc->set_dom('<"row"<"col-sm-5"B><"col-sm-7"fr>>t<"row"<"col-sm-5"i><"col-sm-7"p>>');
      $abc->set_defaults('muestra_panel','copiarTbl','cargando','btnborrarFiltros', 'acciones');

      switch ($catalogo) {
        case 'conceptos':
					$result = $this->mod_catalogos->{$consulta}(0,0,0,1,$idPresupuesto);
      		$abc->set_key(5,'ClaveRecibo','asc');
			    $abc->set_formatoColumna(array('visible' => array(1,2,3,4,5,7,13,18,15,16,17)));
          $abc->set_encabezados(array('Descripcion'   					=> 'Descripción',
                                      'ClaveRecibo'   					=> 'Clave Recibo',
                                      'TipoConcepto'  					=> 'Tipo Concepto',
                                      'EsPercepcion'  					=> 'Percepción',
																			'EsPrestamo'							=> 'ISSTEY',
																			'ClaveSAT'								=> 'Clave SAT',
																			'AntesDeImp'							=> 'Gravado',
																			'PartidaPresupuestal'			=> 'Partida Presupuestal',
																			'SubPartidaPresupuestal'	=> 'SubPartida Presupuestal',
																			'Gastos'									=> 'Cuenta Contable'
                                    ));
          $abc->set_acciones(array('titulo'=>'Editar concepto','texto'=>'','icono'=>'far fa-edit','accion'=>'editar_cat_concepto')
                             // array('titulo'=>'Eliminar concepto','texto'=>'','icono'=>'far fa-trash-alt','class' => 'btn-danger','accion'=>'eliminar_cat_concepto')
                            );
          $abc->set_configuraciones_extra(
																					array('idTbl' => 'tblConceptos'),
                                          array('colOrden' => array(5,18,4,13,3,1,2,7,19,0,6,8,9,10,11,12,14,15,16,17,20,21)),
                                          array('btnExtra' => array('btnNuevo' => array('titulo'=>'Nuevo Concepto','texto'=>'<i class="fas fa-plus-square"></i>','action'=>'nuevo_cat_concepto'))),
                                          array('modCell'  => array('targets' => array(3,1,2),'arrColMod' => array(3,1,2), 'arrayBusca' => array('1','0'), 'arrayMod' => array('SÍ','NO'))
                                              )
                                        );
          break;
				case 'dias_festivos':
					$result = $this->mod_catalogos->{$consulta}('Cat_DiasFestivos');
      		$abc->set_key(0,'DiaID','desc');
					$abc->set_encabezados(array('Descripcion'   => 'Descripción',
																			'FechaFestiva'	=> 'Fecha Festiva'
																		));
					$abc->set_formatoColumna(array('visible' => array(1,2),'fecha' => array(1)));
					$abc->set_acciones(array('titulo'=>'Editar fecha','texto'=>'','icono'=>'far fa-edit','accion'=>'editar_cat_diasfestivos')
														 // array('titulo'=>'Eliminar concepto','texto'=>'','icono'=>'far fa-trash-alt','class' => 'btn-danger','accion'=>'eliminar_cat_concepto')
														);
					$abc->set_configuraciones_extra(
																					array('idTbl' => 'tblDiasFestivos'),
																					array('btnExtra' => array('btnNuevo' => array('titulo'=>'Nuevo Concepto','texto'=>'<i class="fas fa-plus-square"></i>','action'=>'nuevo_cat_diasfestivos'))),
																				);
					break;
        default:
          break;
      }
			$abc->set_resultado($result);
      $output = $abc->construir();
      if ($output['vista']) $this->load->view($output['archivo'], $output['datos']);
      else $this->output->set_output(json_encode($output['data']));
    }

    public function carga_editar_concepto()
    {
      $idConcepto = $this->input->post('idConcepto');
      $concepto = $this->mod_catalogos->trae_registro_catalogo('cat_Conceptos',$idConcepto,'Id');
			$tipoConcepto = (empty($concepto) ? '' : $concepto->TipoConceptoID);
			$tipoConceptoSAT = (empty($concepto) ? '' : $concepto->TipoConcepto);
      $selectores = new selectores_class();
      $cat_tipo_concepto = $selectores->generico('tipo_concepto',$tipoConcepto,true,true,"ClaveTipo", "ClaveTipo", "TipoConcepto", "", false);
			$cat_tipo_concepto_sat = $selectores->generico('tipoconceptosat',trim($tipoConceptoSAT),true,true,"Id", "Id", "Descripcion", "", false);

      $datos['concepto'] = $concepto;
      $datos['tipoconcepto'] = $cat_tipo_concepto;
			$datos['tipoconceptosat'] = $cat_tipo_concepto_sat;
      $this->load->view('catalogos/editar_concepto',$datos);
    }

		public function carga_editar_diafestivo()
		{
			$idDiaFestivo = $this->input->post('idDiaFestivo');
			$diaFestivo = $this->mod_catalogos->trae_registro_catalogo('Cat_DiasFestivos',$idDiaFestivo,'DiaID');
			$datos['diaFestivo'] = $diaFestivo;
			$this->load->view('catalogos/dias_festivos',$datos);
		}

    public function guarda_concepto()
    {
      $idConcepto = $this->input->post('idConcepto');
      $claveRecibo = $this->input->post('ec_clave');
      $Descripcion = $this->input->post('ec_descripcion');
      $esPercepcion = $this->input->post('ec_espercepcion');
      $esPercepcion = (empty($esPercepcion) ? 0 : 1);
      $gravado = $this->input->post('ec_chkGravado');
      $gravado = (empty($gravado) ? 0 : 1);
      $esISSTEY = $this->input->post('ec_isstey');
      $esISSTEY = (empty($esISSTEY) ? 0 : 1);
      $proporcional = $this->input->post('ec_proporcional');
      $proporcional = (empty($proporcional) ? 0 : 1);
      $frecuencia = $this->input->post('ec_frecuencia');
      $quincena = $this->input->post('ec_quincena');
      $bParteExenta = $this->input->post('ec_exento');
      $bParteExenta = (empty($bParteExenta) ? 0 : 1);
      $diasParteExenta = $this->input->post('ec_parteexe');
      $diasParteExenta = (empty($bParteExenta) ? 0 : $diasParteExenta);
      $pagoUnico = $this->input->post('ec_pagounico');
      $pagoUnico = (empty($pagoUnico) ? 0 : 1);
      $idTipoConcepto = $this->input->post('idTipoConcepto');
      $claveSAT = $this->input->post('ec_clavesat');
      $tipoConceptoSAT = $this->input->post('idTipoConceptoSAT');
      $clavePresupuestal = $this->input->post('ec_clavepres');
			$cuentaContable = $this->input->post('ec_cuentacont');
			$partidaPresupuestal = $this->input->post('ec_parpres');
			$subPartidaPresupuestal = $this->input->post('ec_subparpres');
			$visibleAuditoria = $this->input->post('ec_chkVisibleAuditoria');
			$visibleAuditoria = (empty($visibleAuditoria) ? 0 : 1);
      $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
			$continuar = true;

      if (empty($claveRecibo) || empty($Descripcion)) $data = array('status' => FALSE, 'message' => 'Error al intentar guardar el registro, no se recibió el parámetro esperado.');
      else {
        $datos = array(
          'ClaveRecibo'         		=> $claveRecibo,
          'Descripcion'         		=> $Descripcion,
          'EsPercepcion'        		=> $esPercepcion,
          'AntesDeImp'          		=> $gravado,
          'EsPrestamo'          		=> $esISSTEY,
          'Calculado'           		=> $proporcional,
          'Frecuencia'          		=> $frecuencia,
          'Quincena'            		=> $quincena,
          'TieneParteExcenta'   		=> $bParteExenta,
          'DiasSalMinParteExc'  		=> $diasParteExenta,
          'PagoUnico'           		=> $pagoUnico,
          'TipoConceptoId'      		=> $idTipoConcepto,
          'ClaveSAT'            		=> $claveSAT,
          'TipoConcepto'        		=> $tipoConceptoSAT,
					'Visibleauditoria'				=> $visibleAuditoria,
					'CuentaContable'					=> $cuentaContable,
					'PartidaPresupuestal'			=> $partidaPresupuestal,
					'SubPartidaPresupuestal'	=> $subPartidaPresupuestal,
        );
				$this->mod_catalogos->iniciar_transaccion();
				try{
					$this->mod_catalogos->set_basic_table('cat_Conceptos');
					$id = $this->mod_catalogos->guarda_registro_catalogo($datos,'Id',$idConcepto);

					if (!empty($id)) {
						if (!empty($clavePresupuestal)) {
							$this->mod_catalogos->set_basic_table('conf_conceptoCvePres');
							$this->mod_catalogos->inserta_catalogo(array('IdPresupuesto' => $idPresupuesto, 'IdConcepto' => $id, 'ClavePlanCuentas' => $clavePresupuestal));
						}
					}
					else $continuar = false;
				}
				catch(Exception $e){
					$continuar = false;
					log_message("error", "Controlador - catalogos/guarda_concepto(): ".$e->getMessage());
				}
				$this->mod_catalogos->terminar_transaccion(($continuar == true ? 0 : 1));
				$bitacora = new Bitacora();
				$bitacora->insertar($this->router->fetch_class().'/'.__FUNCTION__, 'Guardando concepto: '.json_encode($datos));
				if ($continuar) $data = array('status'  => TRUE,'message' => 'Registro guardado correctamente.','id' => $id);
				else $data = array('status' => FALSE, 'message' => 'Error al intentar guardar el registro.');
			}

      $this->output->set_output(json_encode($data));
    }

		public function guarda_diafestivo()
		{
			$idDia = $this->input->post('idDiaFestivo');
			$fecha = $this->input->post('edf_fecha');
			$descripcion = $this->input->post('edf_descripcion');
			if (empty($fecha)) $data = array('status' => FALSE, 'message' => 'Error al intentar guardar el registro, no se recibió el parámetro esperado.');
			else {
				$datos = array(
					'FechaFestiva'	=> $fecha,
					'Descripcion'		=> $descripcion
				);
				$this->mod_catalogos->set_basic_table('Cat_DiasFestivos');
				$id = $this->mod_catalogos->guarda_registro_catalogo($datos,'DiaID',$idDia);
				if (!empty($id)) $data = array('status'  => TRUE,'message' => 'Registro guardado correctamente.','id' => $id);
				else $data = array('status' => FALSE, 'message' => 'Error al intentar guardar el registro.');
			}
			$this->output->set_output(json_encode($data));
		}

    public function listado_escuelas(){  //<<<RPERAZA(2019.08.16): CASU 1109/2019
        $this->load->view('catalogos/index_escuelas');
    }

    public function traer_escuelas(){  //<<<RPERAZA(2019.08.20): CASU 1109/2019
        $escuelas = $this->mod_escuela->traer_escuelas(0);
        $datos['escuelas'] = $escuelas;
        $html = $this->load->view('catalogos/listado_escuelas', $datos,TRUE);

        $respuesta['status'] = true;
        $respuesta['mensaje'] = "LLEGO";
        $respuesta['datos'] = $html;
        $this->output->set_output(json_encode($respuesta));
    }

    public function capturar_escuela(){  //<<<RPERAZA(2019.08.16): CASU 1109/2019
        $EscuelaId = $this->input->post('EscuelaId', true);

        $selectores = new selectores_class();
        $respuesta['status'] = true;
        $respuesta['mensaje'] = "";
        $respuesta['datos'] = "";
        $operacion = "Nueva";


        if( !isset($EscuelaId) ) {
            $respuesta['status'] = false;
            $respuesta['mensaje'] = "Parámetros incorrectos.";
        }
        else {
            $escuela = array ( 'EscuelaId' => 0
                              ,'Nombre' => ''
                              ,'RazonSocial' => ''
                              ,'RFC' => ''
                              ,'Calle' => ''
                              ,'Numero' => ''
                              ,'Telefono' => ''
                              ,'Colonia' => 0
                              ,'Municipio' => 0
                              ,'Estado' => 31 //Default YUCATAN
                              ,'Observaciones' => ''
                       );
            $escuela = (object)$escuela;

            try {
                if( $EscuelaId > 0 ){
                    $obj_escuela = $this->mod_escuela->traer_escuelas($EscuelaId);

                    if($obj_escuela != false){
                        $escuela = $obj_escuela;
                        $operacion = "Modificar";
                    }
                }

                $datos['escuela'] = $escuela;
                $datos['operacion'] = $operacion;
            }
            catch(Exception $e){
                $respuesta['status'] = false;
                $respuesta['mensaje'] = "Error al intentar obtener los datos de la escuela.";
            }
        }

        if($respuesta['status'] == true){
            $estados= $selectores->estados($escuela->Estado,TRUE);
            $datos['estados'] = $estados;

            $ciudades= $selectores->ciudades($escuela->Municipio, $escuela->Estado, TRUE);
            $datos['ciudades'] = $ciudades;

            $colonias= $selectores->colonias($escuela->Municipio, $escuela->Colonia, TRUE);
            $datos['colonias'] = $colonias;

            $respuesta['datos'] = $this->load->view('catalogos/capturar_escuela', $datos, TRUE);
        }

        $this->output->set_output(json_encode($respuesta));
    }

    public function guardar_escuela(){ //<<<RPERAZA(2019.08.20): CASU 1109/2019
        $EscuelaId = $this->input->post("EscuelaId_esc",true);
        $Nombre = $this->input->post("Nombre_esc",true);
        $RazonSocial = $this->input->post("RazonSocial_esc",true);
        $RFC = $this->input->post("RFC_esc",true);
        $Calle = $this->input->post("Calle_esc",true);
        $Numero = $this->input->post("Numero_esc",true);
        $Telefono = $this->input->post("Telefono_esc",true);
        $Colonia = $this->input->post("Colonia_esc",true);
        $Municipio = $this->input->post("Municipio_esc",true);
        $Estado = $this->input->post("Estado_esc",true);
        $Observaciones = $this->input->post("Observaciones_esc",true);

        $Colonia = ($Colonia == '' ? 0 : $Colonia);
        $Municipio = ($Municipio == '' ? 0 : $Municipio);
        $Estado = ($Estado == '' ? 0 : $Estado);

        $respuesta['status'] = true;
        $respuesta['mensaje'] = "";
        $respuesta['datos'] = "";
        $resultado = null;

        if( !isset($EscuelaId) | !isset($Nombre) | !isset($RazonSocial) | !isset($RFC) | !isset($Calle) | !isset($Numero)
             | !isset($Telefono) | !isset($Colonia) | !isset($Municipio) | !isset($Estado) | !isset($Observaciones)  ){
            $respuesta['status'] = false;
            $respuesta['mensaje'] = "Parámetros incorrectos.";
        }
        else {
            try {
                $parametros = array(
                                     'EscuelaId' => $EscuelaId
                                    ,'Nombre' => escapaDatoParaBD(mb_strtoupper($Nombre))
                                    ,'RazonSocial' => escapaDatoParaBD(mb_strtoupper($RazonSocial))
                                    ,'RFC' => escapaDatoParaBD(mb_strtoupper($RFC))
                                    ,'Calle' => escapaDatoParaBD(mb_strtoupper($Calle))
                                    ,'Numero' => escapaDatoParaBD(mb_strtoupper($Numero))
                                    ,'Telefono' => escapaDatoParaBD(mb_strtoupper($Telefono))
                                    ,'Colonia' => $Colonia
                                    ,'Municipio' => $Municipio
                                    ,'Estado' => $Estado
                                    ,'Observaciones' => escapaDatoParaBD(mb_strtoupper($Observaciones))
                                );

                if( $EscuelaId == 0 ){ //INSERT
                    $resultado = $this->mod_escuela->insertar_escuela($parametros);
                }
                else{ //UPDATE
                    $resultado = $this->mod_escuela->actualizar_escuela($parametros);
                }

                if($resultado != false && $resultado->Resultado == 1){
                    $respuesta['mensaje'] = "La información se guardó correctamente.";
                    $respuesta['datos'] = $resultado->EscuelaId;
                }
                else{
                    $respuesta['status'] = false;
                    $respuesta['mensaje'] = "Los datos de la escuela no se guardaron.";
                }
            }
            catch(Exception $e){
                $respuesta['status'] = false;
                $respuesta['mensaje'] = "Error al ejecutar el procedimiento.";
            }
        }

        $this->output->set_output(json_encode($respuesta));
    }


    public function eliminar_escuela(){  //<<<RPERAZA(2019.08.20): CASU 1109/2019
        $EscuelaId = $this->input->post("EscuelaId",true);

        $respuesta['status'] = true;
        $respuesta['mensaje'] = "";
        $respuesta['datos'] = "";
        $resultado = null;

        if( !isset($EscuelaId) ){
            $respuesta['status'] = false;
            $respuesta['mensaje'] = "Parámetros incorrectos.";
        }
        else {
            try {

                $resultado = $this->mod_escuela->eliminar_escuela($EscuelaId);

                if($resultado != false){
                    switch($resultado){
                        case 1:
                            $respuesta['mensaje'] = "La escuela se eliminó correctamente.";
                            break;

                        case 2:
                            $respuesta['status'] = false;
                            $respuesta['mensaje'] = "La escuela no se pudo eliminar porque está relacionada a uno o más beneficiarios.";
                            break;

                        case 3:
                            $respuesta['status'] = false;
                            $respuesta['mensaje'] = "No se encontró la escuela.";
                            break;
                    }
                }
                else{
                    $respuesta['status'] = false;
                    $respuesta['mensaje'] = "Se generó un error al intentar eliminar la escuela.";
                }
            }
            catch(Exception $e){
                $respuesta['status'] = false;
                $respuesta['mensaje'] = "Error al ejecutar el procedimiento.";
            }
        }

        $this->output->set_output(json_encode($respuesta));
    }

     public function verificar_existe_escuela(){  //<<<RPERAZA(2019.08.20): CASU 1109/2019
        $Nombre = $this->input->post("Nombre",true);

        $respuesta['status'] = true;
        $respuesta['mensaje'] = "";
        $respuesta['datos'] = "";
        $resultado = null;

        if( !isset($Nombre) ){
            $respuesta['status'] = false;
            $respuesta['mensaje'] = "Parámetros incorrectos.";
        }
        else {
            try {

                $resultado = $this->mod_escuela->verificar_existe_escuela(escapaDatoParaBD($Nombre));

                if($resultado != false){
                    $respuesta['datos'] = $resultado->Existe;
                }
                else{
                    $respuesta['status'] = false;
                    $respuesta['mensaje'] = "Se generó un error al intentar verificar la escuela.";
                }
            }
            catch(Exception $e){
                $respuesta['status'] = false;
                $respuesta['mensaje'] = "Error al ejecutar el procedimiento.";
            }
        }

        $this->output->set_output(json_encode($respuesta));
    }

    public function tabuladores(){
      $this->load->view('catalogos/tabuladores');
    }

    public function carga_tabuladores(){
      $periodo = $this->input->post('periodo');

      if( empty($periodo) ) $data = array('status' => FALSE,'message' => 'No se recibió el parámetro esperado.');
      else{
        $resultadoISR = $this->mod_catalogos->obtener_tabuladores_ISR($periodo);
        $resultadoSubsidio = $this->mod_catalogos->obtener_tabuladores_subsidio($periodo);

        if (empty($resultadoISR) || empty($resultadoSubsidio)) $data = array('status' => FALSE,'message' => 'No se encontró el catálogo de tabuladores.');
        else $data = array('status' => TRUE, 'datosISR' => $resultadoISR, 'datosSubsidio' => $resultadoSubsidio);
      }

      $this->output->set_output(json_encode($data));
    }

    public function guarda_tabulador(){
      $tipoTabulador = $this->input->post('ta_tabulador');
      $tipoPeriodo = $this->input->post('ta_periodo');
      $renglon = $this->input->post('ta_renglon');
      $liminf = $this->input->post('ta_liminf');
      $limsup = $this->input->post('ta_limsup');
      $ctafija = $this->input->post('ta_cfija');
      $porcentaje = $this->input->post('ta_porc');
      $usuario = $usuario = LimpiaCadena($this->session->UsuarioNT);

      $datos = array(
        'id'          => $renglon,
        'liminf'      => $liminf,
        'limsup'      => $limsup,
        'ctafija'     => $ctafija,
        'tipoPeriodo' => $tipoPeriodo,
        'usuario'     => LimpiaCadena($this->session->UsuarioNT)
      );

      if ($tipoTabulador == 'ISR') $guardar = $this->mod_catalogos->guarda_tabulador_isr($datos,$porcentaje);
      else $guardar = $this->mod_catalogos->guarda_tabulador_subsidio($datos);

      if (!empty($guardar)) $data = array('status' => TRUE, 'message' => 'Tabulador guardado con éxito.', 'periodo' => $tipoPeriodo);
      else $data = array('status' => FALSE, 'message' => 'Error al intentar guardar el tabulador.');

      $this->output->set_output(json_encode($data));
    }

		public function eliminar_tabulador()
		{
			$renglon = $this->input->post('renglon');
			$periodo = $this->input->post('periodo');
      $tabulador = $this->input->post('tabulador');
			if (empty($renglon)) {
				$data = array('status' => FALSE, 'message' => 'Error al intentar eliminar el tabulador. No se recibió el parámetro esperado.');
			}
			else {
				if ($tabulador == 'ISR') {
					$tabla = 'cat_ISR';
					$datos = array(
						'idISR' 			=> $renglon,
						'TipoPeriodo'	=> $periodo
					);
				}
				else {
					$tabla = 'cat_Subsidio';
					$datos = array(
						'idSubsidio'	=> $renglon,
						'TipoPeriodo'	=> $periodo
					);
				}
				$eliminar = $this->mod_catalogos->elimina_tabulador($tabla,$datos);

				if (!empty($eliminar)) $data = array('status' => TRUE, 'message' => 'Tabulador eliminado con éxito.', 'periodo' => $periodo);
				else $data = array('status' => FALSE, 'message' => 'Error al intentar eliminar el tabulador.');
			}

			$this->output->set_output(json_encode($data));
		}

		/**
		 * Función para realizar todas las acciones con el catálogo de dependencias (usar esta función como base para los otros catálogos)
		 * @method abc_cat_dependencias
		 * @author alopez
		 * @date
		 * @return [type]               [description]
		 */
		public function abc_cat_dependencias()
		{
			$idDependencia = $this->input->post('Id');
			$idDependencia = (empty($idDependencia) ? $this->input->post('cd_idDependencia') : $idDependencia);
			$idUniAdmvas = $this->input->post('idUniAdmvas');
			$accion = $this->input->post('accion');
			$presupuesto = $this->param_lib->get_parametro('idPresupuesto');
			$_POST['Id'] = $idDependencia;
			$abc = new pjey_ABC();
			if ($accion != 'listar') $abc->where('Id', $idDependencia);
			else {
				$abc->select('cat_Dependencias.Id,cat_Dependencias.Clave,cat_Dependencias.Descripcion,cua.Descripcion as UnidadAdmva,cda.Descripcion as DireccionAdmva, ce.Nombre as Edificio');
				$abc->select('cat_Dependencias.IdUniAdmvas,ccc.CentroCosto');
				$abc->set_relacion_n_n(array(
					array('cat_Edificios 							ce' 	=> 'cat_Dependencias.Id_Edificio = ce.Id'),
					array('Cat_UniAdmvas 							cua'	=> 'cat_Dependencias.IdUniAdmvas = cua.IdUniAdmvas'),
					array('Cat_DireccionAdmvas 				cda'	=> 'cua.IdDireccion = cda.IdDireccion'),
					array('Cat_CentrodeCostos_Arcon 	ccc',	'cat_Dependencias.CuentaId = ccc.ClaveCentroCosto', 'left'),
				));
				$abc->where('cat_Dependencias.Cancelado', 0);
				$abc->where('ProgramaId', $presupuesto);
			}
			$abc->set_key(0,'Id','asc');
			$abc->set_table('cat_Dependencias');
			$abc->set_defaults('muestra_panel','copiarTbl','cargando','btnborrarFiltros', 'acciones');
			$abc->set_campos_guardar(array('IdUniAdmvas' => 'idUniAdmvas'));
			$abc->set_encabezados(array('Descripcion' => 'Dependencia', 'UnidadAdmva' => 'Unidad Administrativa','DireccionAdmva' => 'Dirección Administrativa', 'CentroCosto'=>'Centro Costo'));
			$abc->set_formatoColumna(array('visible' => array(1,2,3,4,5)));
			$abc->set_acciones(array('titulo'=>'Editar dependencia','texto'=>'','icono'=>'far fa-edit','accion'=>'editar_cat_dependencias'));
			$abc->set_configuraciones_extra(array('idTbl' => 'tblcatCatDependencias'));
			$output = $abc->construir();
			if ($accion == 'actualizar') {
				$output['vista_aux'] = false;
				$bitacora = new Bitacora();
				$bitacora->insertar($this->router->fetch_class().'/'.__FUNCTION__, 'Actualizando dependencia: '.json_encode($_POST));
			}
			elseif ($accion == 'editar_aux') {
				$cat_unidadadmva = $this->mod_catalogos->traer_cat_varios_filtros('Cat_UniAdmvas', array('Activo' => 1));
				$cat_unidadadmva = $this->select_lib->from_recordset($cat_unidadadmva, $idUniAdmvas, true, true, 'IdUniAdmvas', 'IdUniAdmvas', 'Descripcion', '', true);
				$output['datos']['cat_unidadadmva'] = $cat_unidadadmva;
			}
			if ($output['vista'] || $output['vista_aux']) $this->load->view($output['archivo'], $output['datos']);
			else $this->output->set_output(json_encode($output['data']));
		}

		/**
		 * Función para realizar todas las acciones con el catálogo de categorías (usar esta función como base para los otros catálogos)
		 * @method abc_cat_categorias
		 * @author alopez
		 * @date
		 * @return [type]             [description]
		 */
		public function abc_cat_categorias()
		{
			$idCategoria = $this->input->post('Id');
			$idCategoria = (empty($idCategoria) ? $this->input->post('cc_idCategoria') : $idCategoria);
			$clave = $this->input->post('cc_claveCategoria');
			$sueldo = $this->input->post('txtSueldoBase');
			$fIni = $this->input->post('cc_fInicio');
			$accion = $this->input->post('accion');
			$_POST['cc_checa'] = (empty($this->input->post('cc_checa') ? 0 : 1));
			$_POST['cc_responsable'] = (empty($this->input->post('cc_responsable') ? 0 : 1));
			$_POST['cc_prestador'] = (empty($this->input->post('cc_prestador') ? 0 : 1));
			$_POST['Id'] = $idCategoria;
			$abc = new pjey_ABC();
			if ($accion != 'listar') $abc->where('Id', $idCategoria);
			$abc->set_key(0,'Id','asc');
			$abc->set_table('cat_Categorias');
			$abc->set_defaults('muestra_panel','copiarTbl','cargando','btnborrarFiltros', 'acciones');
			$abc->set_campos_guardar(array(
																			'Checa' 					=> 'cc_checa',
																			'EsResponsable'		=> 'cc_responsable',
																			'EsPrestadorS'		=> 'cc_prestador',
																			'AreaAdscripcion'	=> 'txtAreaAdscripcion',
																			'NivelSalarial'		=> 'txtNivelSalarial',
																		));
			$abc->set_encabezados(array('Descripcion'   => 'Descripción','SueldoBase'	=> 'Sueldo Base'));
			$abc->set_formatoColumna(array('visible' => array(1,2,3), 'moneda' => array(3)));
			$abc->set_acciones(array('titulo'=>'Editar categoría','texto'=>'','icono'=>'far fa-edit','accion'=>'editar_cat_categorias'));
			$abc->set_configuraciones_extra(array('idTbl' => 'tblcatCategorias'),
						array('btnExtra' => array('btnCargaCatBatch' => array('titulo'=>'Carga categorías por archivo','texto'=>'<i class="fa-solid fa-upload"></i>','action'=>'carga_catalogo_archivo'))),
			);
			$output = $abc->construir();
			if ($accion == 'actualizar') {
				$datos = array('Clave' => $clave, 'SueldoBaseActual' => $sueldo, 'FechaInicio' => $fIni);
				$actualiza = $this->mod_catalogos->ejecuta_procedimiento('p_admarh_ActualizaMontosCategorias', $datos);
				$result = $actualiza->row();
				if (!empty($result->error)) {
					$output['data']['status'] = FALSE;
					$output['data']['message'] = $result->mensaje;
				}
				$output['vista_aux'] = false;
				$bitacora = new Bitacora();
				$bitacora->insertar($this->router->fetch_class().'/'.__FUNCTION__, 'Actualizando categoría: '.json_encode($_POST));
			}
			if ($output['vista'] || $output['vista_aux']) $this->load->view($output['archivo'], $output['datos']);
			else $this->output->set_output(json_encode($output['data']));
		}

		public function abc_cat_acreedores()
		{
			$idAcreedor = $this->input->post('Id');
			$idAcreedor = (empty($idAcreedor) ? $this->input->post('ca_idAcreedor') : $idAcreedor);
			$accion = $this->input->post('accion');
			$idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
			$_POST['Id'] = $idAcreedor;
			$_POST['PresupuestoId'] = $idPresupuesto;
			$abc = new pjey_ABC();
			if ($accion != 'listar'){
				$abc->where('PresupuestoId', $idPresupuesto);
				$abc->where('Id', $idAcreedor);
			}
			else $abc->where('Activo', 1);
			$abc->set_key(0,'Id','asc');
			$abc->set_table('cat_Acreedores');
			$abc->set_defaults('muestra_panel','copiarTbl','cargando','btnborrarFiltros', 'acciones');
			$abc->set_campos_guardar(array(
																			'CodigoAcreedor'	=> 'txtCodigo',
																			'Acreedor'				=> 'txtAcreedor',
																			'PresupuestoID' 	=> 'PresupuestoId'
																		));
			$abc->set_encabezados(array('CodigoAcreedor' => 'Código'));
			$abc->set_formatoColumna(array('visible' => array(1,2)));
			$abc->set_acciones(array('titulo'=>'Editar acreedor','texto'=>'','icono'=>'far fa-edit','accion'=>'editar_cat_acreedores'),
												 // array('titulo'=>'Eliminar acreedor','texto'=>'','icono'=>'far fa-trash-can','class' => 'btn-danger','accion'=>'eliminar_cat_acreedores')
			);
			$abc->set_configuraciones_extra(array('idTbl' => 'tblcatCatAcreedores'),
					array('btnExtra' => array('btnNuevo' => array('titulo'=>'Nuevo Acreedor','texto'=>'<i class="fas fa-plus-square"></i>','action'=>'nuevo_cat_acreedor'))),
			);
			$output = $abc->construir();
			if ($accion == 'actualizar' || $accion == 'guardar' || $accion == 'borrar') {
				$output['vista_aux'] = false;
				$bitacora = new Bitacora();
				$bitacora->insertar($this->router->fetch_class().'/'.__FUNCTION__, 'Actualizando acreedor: '.json_encode($_POST));
			}
			if ($output['vista'] || $output['vista_aux']) $this->load->view($output['archivo'], $output['datos']);
			else $this->output->set_output(json_encode($output['data']));
		}

		public function abc_cat_uniadmvas()
		{
			$idUniAdmva = $this->input->post('Id');
			$idUniAdmva = (empty($idUniAdmva) ? $this->input->post('cu_idUnidadAdmva') : $idUniAdmva);
			$idDirUniAdmvas = $this->input->post('idDirAdmva');
			$accion = $this->input->post('accion');
			$abc = new pjey_ABC();
			$_POST['IdUniAdmvas'] = $idUniAdmva;
			if ($accion == 'editar_aux') {
				$abc->where('IdUniAdmvas', $idUniAdmva);
			}
			elseif ($accion == 'guardar') {
				$abc->where('IdUniAdmvas',$idUniAdmva,TRUE,array('guardar'));
			}
			else {
				$abc->select('Cat_UniAdmvas.IdUniAdmvas,Cat_UniAdmvas.claveUniAdmvas,Cat_UniAdmvas.Descripcion, cda.Descripcion as DireccionAdmva, Cat_UniAdmvas.IdDireccion');
				$abc->set_relacion_n_n(array(
					array('Cat_DireccionAdmvas cda'	=> 'Cat_UniAdmvas.IdDireccion = cda.IdDireccion AND cda.Activo = 1'),
				));
				$abc->where('Cat_UniAdmvas.Activo', 1);
			}
			$abc->set_key(0,'IdUniAdmvas','asc');
			$abc->set_table('Cat_UniAdmvas');
			$abc->set_defaults('muestra_panel','copiarTbl','cargando','btnborrarFiltros', 'acciones');
			$abc->set_campos_guardar(array(
																			'claveUniAdmvas'	=> 'txtClave',
																			'Descripcion'			=> 'txtUnidadAdmva',
																			'IdDireccion'			=>	'idDirUniAdmvas'
																		));
			$abc->set_encabezados(array('claveUniAdmvas' => 'Clave', 'Descripcion' => 'Unidad Administrativa','DireccionAdmva' => 'Dirección Admva.'));
			$abc->set_formatoColumna(array('visible' => array(1,2,3)));
			$abc->set_acciones(array('titulo'=>'Editar Unidad Administrativa','texto'=>'','icono'=>'far fa-edit','accion'=>'editar_cat_uniadmva'),
			);
			$abc->set_configuraciones_extra(array('idTbl' => 'tblcatCatUnidadesAdmvas'),
					array('btnExtra' => array('btnNuevo' => array('titulo'=>'Nueva Unidad Administrativa','texto'=>'<i class="fas fa-plus-square"></i>','action'=>'nuevo_cat_uniadmva'))),
			);
			$output = $abc->construir();
			if ($accion == 'guardar') {
				$output['vista_aux'] = false;
				$bitacora = new Bitacora();
				$bitacora->insertar($this->router->fetch_class().'/'.__FUNCTION__, 'Actualizando unidad administrativa: '.json_encode($_POST));
			}
			elseif ($accion == 'editar_aux' || $accion == 'nuevo') {
				$cat_diradmva = $this->mod_catalogos->traer_cat_varios_filtros('Cat_DireccionAdmvas', array('Activo' => 1));
				$cat_diradmva = $this->select_lib->from_recordset($cat_diradmva, $idDirUniAdmvas, true, true, 'IdDireccion', 'IdDireccion', 'Descripcion', '', true);
				$output['datos']['cat_diradmva'] = $cat_diradmva;
			}
			if ($output['vista'] || $output['vista_aux']) $this->load->view($output['archivo'], $output['datos']);
			else $this->output->set_output(json_encode($output['data']));
		}

		public function abc_cat_diradmvas()
		{
			$idDirAdmva = $this->input->post('Id');
			$idDirAdmva = (empty($idDirAdmva) ? $this->input->post('cda_idDireccionAdmva') : $idDirAdmva);
			$accion = $this->input->post('accion');
			$abc = new pjey_ABC();
			$_POST['IdDireccion'] = $idDirAdmva;
			if ($accion == 'editar_aux') {
				$abc->where('IdDireccion', $idDirAdmva);
			}
			elseif ($accion == 'guardar') {
				$abc->where('IdDireccion',$idDirAdmva,TRUE,array('guardar'));
			}
			$abc->where('Activo', 1);
			$abc->set_key(0,'IdDireccion','asc');
			$abc->set_table('Cat_DireccionAdmvas');
			$abc->set_defaults('muestra_panel','copiarTbl','cargando','btnborrarFiltros', 'acciones');
			$abc->set_campos_guardar(array(
																			'claveDireccion'	=> 'txtClave',
																			'Descripcion'			=> 'txtDireccionAdmva',
																		));
			$abc->set_encabezados(array('claveDireccion' => 'Clave', 'Descripcion' => 'Dirección Administrativa'));
			$abc->set_formatoColumna(array('visible' => array(1,2)));
			$abc->set_acciones(array('titulo'=>'Editar Dirección Administrativas','texto'=>'','icono'=>'far fa-edit','accion'=>'editar_cat_diradmva'),
			);
			$abc->set_configuraciones_extra(array('idTbl' => 'tblcatCatDireccionesAdmvas'),
					array('btnExtra' => array('btnNuevo' => array('titulo'=>'Nueva Dirección Administrativa','texto'=>'<i class="fas fa-plus-square"></i>','action'=>'nuevo_cat_diradmva'))),
			);
			$output = $abc->construir();
			if ($accion == 'guardar') {
				$output['vista_aux'] = false;
				$bitacora = new Bitacora();
				$bitacora->insertar($this->router->fetch_class().'/'.__FUNCTION__, 'Actualizando dirección administrativa: '.json_encode($_POST));
			}
			if ($output['vista'] || $output['vista_aux']) $this->load->view($output['archivo'], $output['datos']);
			else $this->output->set_output(json_encode($output['data']));
		}

		public function abc_cat_emisores()
		{
			$idEmisor = $this->input->post('Id');
			$idEmisor = (empty($idEmisor) ? $this->input->post('ce_idEmisor') : $idEmisor);
			$accion = $this->input->post('accion');
			$abc = new pjey_ABC();
			$_POST['Id'] = $idEmisor;
			$_POST['idPresupuesto'] = $this->param_lib->get_parametro('idPresupuesto');
			$abc->set_key(0,'Id','asc');
			$abc->set_campos_guardar(array('Emisor' => 'txtEmisor', 'PresupuestoID' => 'idPresupuesto'));
			$abc->set_table('Cat_Emisores');
			$abc->set_defaults('muestra_panel','copiarTbl','cargando','btnborrarFiltros', 'acciones');
			$abc->where('Activo', 1);
			$abc->set_formatoColumna(array('visible' => array(1,),));
			$abc->set_acciones(array('titulo'=>'Editar emisor','texto'=>'','icono'=>'far fa-edit','accion'=>'editar_cat_emisores'));
			$abc->set_configuraciones_extra(array('idTbl' => 'tblcatEmisores'),
																			array('btnExtra' => array('btnNuevo' => array('titulo'=>'Nuevo emisor','texto'=>'<i class="fas fa-plus-square"></i>','action'=>'nuevo_cat_emisores'))),);
			$output = $abc->construir();
			if (!empty($output['vista']) || !empty($output['vista_aux'])) $this->load->view($output['archivo'], $output['datos']);
			else $this->output->set_output(json_encode($output['data']));
		}

		public function editar_emisor()
		{
			$idEmisor = $this->input->post('id');
			$idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
			$emisor = $this->mod_catalogos->traer_cat_varios_filtros('Cat_Emisores',array('Id' => $idEmisor,'Activo' => 1));
			$conftiponomina = $this->mod_catalogos->conf_emisores_tipo_nomina($idEmisor,$idPresupuesto);
			$abc = new pjey_ABC();
			$abc->set_resultado($conftiponomina);
			$abc->set_key(0,'Id','asc');
			$abc->set_encabezados(array('Descripcion'	=> 'Descripción',));
			$abc->set_formatoColumna(array('visible' => array(0,1)));
			$abc->set_defaults('cargando','muestra_panel','btnborrarFiltros');
			$abc->set_configuraciones_extra( array('idTbl' => 'tblConfEmisorTipoNomina'),
				array('checkBox' 			=> 0),
				array('checkBoxStyle'	=> 'multi'),
				array('checkBoxIndex'	=> 'conf'),
				array('checkBoxAll'		=> false)
			);
			$tblconf = $abc->construir();
			$datos['idEmisor'] = $idEmisor;
			$datos['emisor'] = (empty($emisor) ? '' : $emisor[0]);
			$datos['tblconf'] = $this->load->view($tblconf['archivo'], $tblconf['datos'], TRUE);
			$this->load->view('catalogos/editar_emisor',$datos);
		}

		public function guarda_conf_emisor_tipo_nomina()
		{
			$idEmisor = $this->input->post('idEmisor');
			$idTipoNomina = $this->input->post('idTipoNomina');
			$idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
			$datos = array(
				'idEmisor'			=>	$idEmisor,
				'idTipoNomina'	=>	$idTipoNomina,
				'idPresupuesto'	=>	$idPresupuesto
			);
			$this->mod_catalogos->set_basic_table('conf_EmisorTipoNomina');
			$guarda = $this->mod_catalogos->inserta_catalogo($datos);
			if (!empty($guarda)) $data = array('status' => TRUE, 'message' => 'Configuración guardada con éxito.');
			else $data = array('status' => FALSE, 'message' => 'Ocurrió un error al intentar guardar la configuración.');
			$this->output->set_output(json_encode($data));
		}

		public function elimina_conf_emisor_tipo_nomina()
		{
			$idEmisor = $this->input->post('idEmisor');
			$idTipoNomina = $this->input->post('idTipoNomina');
			$idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
			$datos = array(
				'idEmisor'			=>	$idEmisor,
				'idTipoNomina'	=>	$idTipoNomina,
				'idPresupuesto'	=>	$idPresupuesto
			);
			$this->mod_catalogos->set_basic_table('conf_EmisorTipoNomina');
			$elimina = $this->mod_catalogos->elimina_catalogo($datos);
			if (!empty($elimina)) $data = array('status' => TRUE, 'message' => 'Configuración eliminada con éxito.');
			else $data = array('status' => FALSE, 'message' => 'Ocurrió un error al intentar eliminar la configuración.');
			$this->output->set_output(json_encode($data));
		}

		public function carga_catalogo_archivo()
		{
			$this->load->view('catalogos/carga_catalogo_archivo');
		}

		public function leeArchivoCatalogo()
		{
			//PENDIENTE: mejorar código dividiendo en funciones individuales de procesamiento (que sea solo 1 función para configuración y catálogos)
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
					}

					if (!empty($objeto) && !empty($objeto[0])) {
						$abc = new pjey_ABC();
						$abc->set_resultado($objeto);
						$abc->set_extraCondensed(true);
						$abc->set_key(0,$colIni,'asc');
						$abc->set_configuraciones(array('titulopanel' => 'Hoja: '.$nombreHoja));
						$abc->set_defaults('btnborrarFiltros','copiarTbl','cargando','acciones');
						$abc->set_configuraciones_extra(array('cardHeadClass'	=> 'bg-silver-600'), array('idTbl' => 'tblConfigurarCatalogo'));
						$abc->set_acciones(array('titulo'=>'Eliminar empleado','texto'=>'','icono'=>'far fa-trash-alt','class' => 'btn-danger','accion'=>'eliminar_conf_catalogo'));
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

		public function guarda_configuracion_catalogo()
		{
			$colClave = strtoupper($this->input->post('colClave'));
	    $colMonto = strtoupper($this->input->post('colMonto'));
	    $catalogo = $this->input->post('catalogo');
	    $catalogo = json_decode($catalogo,true);
	    $error = 0;
			$procesados = array();

	    if (!empty($colClave) && !empty($colMonto) && !empty($catalogo)) {
		    try {
					set_time_limit(0);
		      foreach ($catalogo as $key => $value) {
		        if (!empty($value[$colClave]) && !empty($value[$colMonto])) {
							$clave = FormatoFolio($value[$colClave],3);
							$monto = $value[$colMonto];
							$categoria = $this->mCat->traer_cat_varios_filtros('cat_Categorias', array('Clave' => $clave))[0];
							if (!empty($categoria)) {
								$datos = array('Clave' => $clave, 'SueldoBaseActual' => $monto);
								$actualiza = $this->mod_catalogos->ejecuta_procedimiento('p_admarh_ActualizaMontosCategorias', $datos);
								$result = $actualiza->row();
								if (empty($result->error)) $procesados[] = array('Clave' => $clave, 'Monto' => $value[$colMonto], 'Estado' => 'Configurado.','configurado' => 1);
								else $procesados[] = array('Clave' => $clave, 'Monto' => $value[$colMonto], 'Estado' => 'Error al configurar. '.$result->mensaje, 'configurado' => 0);
							}
							else {
								$error++;
								$procesados[] = array('Clave' => $value[$colClave], 'Monto' => $value[$colMonto],
																			'Estado' => 'Error: No se encontró la categoría con la clave proporcionada.', 'configurado' => 0);
							}
						}
						else {
							$error++;
							$procesados[] = array('Clave' => $value[$colClave], 'Monto' => $value[$colMonto],
																		'Estado' => (empty($value[$colClave]) ? 'Error: La columna no contiene una credencial válida' : (empty($value[$colMonto]) ? "Error: El monto debe ser mayor a cero." : "No configurado.")),
																		'configurado' => 0);
						}
		      }
		    }
		    catch(Exception $e) {
		      $error = 2;
		      log_message("error", "Controlador - catalogos/guarda_configuracion_catalogo(): ".$e->getMessage());
		    }

				$resultado = $this->genera_resultado_configuracion_catalogo($procesados);

				if (empty($error)) $data = array('status' => TRUE, 'message' => 'Registros configurados correctamente.', 'resultado' => $resultado, 'errores' => 0);
		    else $data = array('status' => TRUE, 'message' => 'Ocurrió un error al intentar configurar '.$error.' registros(s). '.(count($procesados) - $error). ' registros(s) configurados correctamente.', 'resultado' => $resultado, 'errores' => $error);
				unset($datos["Monto"]);
				$bitacora = new Bitacora();
				$bitacora->insertar($this->router->fetch_class().'/'.__FUNCTION__, 'Guardando configuración para '.(count($procesados) - $error). ' registros. Configuración: '.json_encode($datos));
			}
			else $data = array('status' => FALSE, 'message' => 'Error al intentar configurar el catálogo. No se recibió el parámetro esperado.');
	    $this->output->set_output(json_encode($data));
		}

		public function genera_resultado_configuracion_catalogo($procesados)
		{
			$abc = new pjey_ABC();
			$abc->set_resultado($procesados);
			$abc->set_key(1,'Clave','asc');
			$abc->set_extraCondensed(true);
			$abc->set_configuraciones(array('titulopanel' => 'Catálogo Configurado'));
			$abc->set_defaults('filtros','copiarTbl','cargando');
			$abc->set_configuraciones_extra(array('cardHeadClass'	=> 'bg-silver-600'), array('idTbl' => 'tblResultadoConfCatalogo'));
			$abc->set_formatoColumna(array('moneda' => array(1),'visible' => array(0,1,2)));
			$output = $abc->construir();
			$vista = $this->load->view($output['archivo'], $output['datos'],TRUE);
			return $vista;
		}
}

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
