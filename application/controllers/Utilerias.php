<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    //>>>RPERAZA(2021.07.09): CASU 1306/2021

class Utilerias extends CI_Controller {
    var $PresupuestoId = "";

    public function __construct(){
        parent::__construct();

        $this->load->model('catalogos_modelo','mod_cat',TRUE);
        $this->load->model('utilerias_modelo','mod_util',TRUE);
        $this->load->library('ParamSystem', NULL, 'param_lib');
				$this->load->library('pjey_ABC');
        $this->PresupuestoId = $this->param_lib->get_parametro('idPresupuesto');
    }

    public function index(){
        $this->load->view('utilerias/index', NULL);
    }

    public function carga_conf_grupos_impresion(){
        try {
            $selectores = new selectores_class();
            $reg_dependencias = $this->mod_cat->traer_cat_varios_filtros('cat_Dependencias', array("Cancelado" => "0", "ProgramaId" => $this->PresupuestoId));
            $cat_dependencias = $selectores->from_recordset($reg_dependencias, 0, true, true, 'Id', 'Id', 'Descripcion', '', false);

            $data_view['cat_dependencias'] = $cat_dependencias;

            $respuesta['status'] = true;
            $respuesta['html'] = $this->load->view("utilerias/conf_grupos_impresion", $data_view, TRUE);
            $respuesta['form_size'] = "lg"; //Tamaños posibles: sm (pequeño) / md (medio) / lg (grande) / xl (extra grande)
        }
        catch(Exception $e){
            $respuesta['status'] = false;
            $respuesta['mensaje'] = 'Se ha generado un error al intentar abrir el formulario de "Configuración de grupos de impresión". Favor de comunicarse con el personal de Soporte Técnico de su dependencia.';
        }

        $this->output->set_output(json_encode($respuesta));
    }

    public function get_categorias_con_grupo_imp(){
        $DependenciaId = $this->input->post('DependenciaId', true);

        $respuesta['status'] = true;
        $respuesta['mensaje'] = "";
        $respuesta['html'] = "";

        if( !isset($DependenciaId) ) {
            $respuesta['status'] = false;
            $respuesta['mensaje'] = "Parámetros incorrectos.";
        }
        else {
            try {
                if( $DependenciaId != "" && intval($DependenciaId) > 0 ){
                    $selectores = new selectores_class();

                    $reg_categorias = $this->mod_util->get_categorias_con_grupo_imp($DependenciaId);

                    $reg_grupos_imp = $this->mod_cat->traer_cat_varios_filtros('Cat_GrupoImpresion', null);
                    $cat_grupos_imp = $selectores->from_recordset($reg_grupos_imp, 0, true, true, 'GrupoImpId', 'GrupoImpId', 'Descripcion', '', false);

                    $html = $this->load->view("utilerias/lista_cat_grupos", array("reg_categorias" => $reg_categorias, "cat_grupos_imp" => $cat_grupos_imp), TRUE);
                    $respuesta['html'] =  $html;
                }
                else{
                    $respuesta['status'] = false;
                    $respuesta['mensaje'] = "La dependencia no es válida.";
                }
            }
            catch(Exception $e){
                $respuesta['status'] = false;
                $respuesta['mensaje'] = "Error al intentar obtener las categorías.";
            }
        }

        $this->output->set_output(json_encode($respuesta));
    }

    public function guardar_cat_grupo_impresion(){
        $GrupoImpresion = $this->input->post('GrupoImpresion', true);
        $CategoriaId = $this->input->post('CategoriaId', true);
        $DependenciaId = $this->input->post('DependenciaId', true);
        $Configurado = $this->input->post('Configurado', true);

        $respuesta['status'] = false;
        $respuesta['mensaje'] = "";

        $this->mod_util->iniciar_transaccion();

        if( !isset($GrupoImpresion) | !isset($CategoriaId) | !isset($DependenciaId) ) {
            $respuesta['mensaje'] = "Parámetros incorrectos.";
        }
        else {
            try {
                if(    $GrupoImpresion != "" && intval($GrupoImpresion) > 0
                    && $CategoriaId != "" && intval($CategoriaId) > 0
                    && $DependenciaId != "" && intval($DependenciaId) > 0){

                    $parametros = array( "GrupoImpresion" => $GrupoImpresion
                                        ,"CategoriaId" => $CategoriaId
                                        ,"DependenciaId" => $DependenciaId
                                        );

                    if($Configurado == 0){
                        $resultado = $this->mod_util->ins_cat_grupo_impresion($parametros);
                    }
                    else{
                        $resultado = $this->mod_util->upd_cat_grupo_impresion($parametros);
                    }

                    if($resultado == true){
                        $resultado = $this->mod_util->upd_politica_empleado($parametros);
                        $respuesta['status'] = true;
                        $respuesta['mensaje'] = "La configuración de Grupo de impresión se guardó correctamente.";

                    }
                    else{
                        $respuesta['mensaje'] = "Ocurrió un error. La configuración del Grupo de impresión no se pudo guardar.";
                    }
                }
                else{
                    $respuesta['mensaje'] = "El valor de los parámetros no es válido.";
                }
            }
            catch(Exception $e){
                $respuesta['mensaje'] = "Error al intentar guardar la configuración de Grupo de impresión.";
            }
        }

        if( $respuesta['status'] == true){
            $this->mod_util->terminar_transaccion( $respuesta['status'] == true ? 0 : 1 );
        }

        $this->output->set_output(json_encode($respuesta));
    }

    public function verifica_empleados_grupo_impresion(){
        $GrupoImpresion = $this->input->post('GrupoImpresion', true);
        $CategoriaId = $this->input->post('CategoriaId', true);
        $DependenciaId = $this->input->post('DependenciaId', true);

        $respuesta['status'] = false;
        $respuesta['mensaje'] = "";
        $respuesta['contador'] = 0;

        if( !isset($GrupoImpresion) | !isset($CategoriaId) | !isset($DependenciaId) ) {
            $respuesta['status'] = false;
            $respuesta['mensaje'] = "Parámetros incorrectos.";
        }
        else {
            try {
                if(    $GrupoImpresion != "" && intval($GrupoImpresion) > 0
                    && $CategoriaId != "" && intval($CategoriaId) > 0
                    && $DependenciaId != "" && intval($DependenciaId) > 0){

                    $parametros = array( "GrupoImpresion" => $GrupoImpresion
                                        ,"CategoriaId" => $CategoriaId
                                        ,"DependenciaId" => $DependenciaId
                                        );

                    $existen_emp = $this->mod_util->get_existen_empleados_grupo_imp($parametros);
                    if($existen_emp !== false){
                        if($existen_emp->contador > 0){
                            $respuesta['contador'] = $existen_emp->contador;
                            $respuesta['status'] = true;
                        }
                    }
                    else{
                        $respuesta['mensaje'] = "Ocurrió un error, no se pudo verificar si existen empleados configurados con este grupo de impresión.";
                    }
                }
                else{
                    $respuesta['mensaje'] = "El valor de los parámetros no es válido.";
                }
            }
            catch(Exception $e){
                $respuesta['mensaje'] = "Error al intentar verificar si existen empleados configurados con este grupo de impresión.";
            }
        }

        $this->output->set_output(json_encode($respuesta));

    }

    public function eliminar_cat_grupo_impresion(){
        $GrupoImpresion = $this->input->post('GrupoImpresion', true);
        $CategoriaId = $this->input->post('CategoriaId', true);
        $DependenciaId = $this->input->post('DependenciaId', true);

        $respuesta['status'] = false;
        $respuesta['mensaje'] = "";

        $this->mod_util->iniciar_transaccion();

        if( !isset($GrupoImpresion) | !isset($CategoriaId) | !isset($DependenciaId) ) {
            $respuesta['status'] = false;
            $respuesta['mensaje'] = "Parámetros incorrectos.";
        }
        else {
            try {
                if(    $GrupoImpresion != "" && intval($GrupoImpresion) > 0
                    && $CategoriaId != "" && intval($CategoriaId) > 0
                    && $DependenciaId != "" && intval($DependenciaId) > 0){

                    $parametros = array( "GrupoImpresion" => $GrupoImpresion
                                        ,"CategoriaId" => $CategoriaId
                                        ,"DependenciaId" => $DependenciaId
                                        );

                    $resultado = $this->mod_util->del_cat_grupo_impresion($parametros);

                    if($resultado == true){
                        $parametros["GrupoImpresion"] = 0;
                        $resultado = $this->mod_util->upd_politica_empleado($parametros);
                        $respuesta['status'] = true;
                        $respuesta['mensaje'] = "La configuración de Grupo de impresión se eliminó correctamente.";
                    }
                    else{
                        $respuesta['mensaje'] = "Ocurrió un error. La configuración del Grupo de impresión no se pudo eliminar.";
                    }
                }
                else{
                    $respuesta['mensaje'] = "El valor de los parámetros no es válido.";
                }
            }
            catch(Exception $e){
                $respuesta['mensaje'] = "Error al intentar eliminar la configuración de Grupo de impresión.";
            }
        }

        if( $respuesta['status'] == true){
            $this->mod_util->terminar_transaccion( $respuesta['status'] == true ? 0 : 1 );
        }

        $this->output->set_output(json_encode($respuesta));
    }

    public function carga_responsable_presupuesto(){
        try {
            $responsable = $this->mod_util->get_responsable_presupuesto($this->PresupuestoId);
            $data_view['responsable'] = $responsable;

            $respuesta['status'] = true;
            $respuesta['html'] = $this->load->view("utilerias/conf_responsable_presupuesto", $data_view, TRUE);
            $respuesta['form_size'] = "lg"; //Tamaños posibles: sm (pequeño) / md (medio) / lg (grande) / xl (extra grande)
        }
        catch(Exception $e){
            $respuesta['status'] = false;
            $respuesta['mensaje'] = 'Se ha generado un error al intentar abrir el formulario de "Configuración de Responsable de Presupuesto". Favor de comunicarse con el personal de Soporte Técnico de su dependencia.';
        }

        $this->output->set_output(json_encode($respuesta));
    }

    public function guardar_responsable_presupuesto(){
        $Responsable = $this->input->post('Responsable_rp', true);
        $RFCResponsable = $this->input->post('RFCResponsable_rp', true);
        $Categoria = $this->input->post('Categoria_rp', true);
				$jefe_rh = $this->input->post('jefe_rh');
				$categoria_rh = $this->input->post('categoria_rh');
				$aux_rh = $this->input->post('aux_rh');
				$categoria_aux = $this->input->post('categoria_aux');

        $respuesta['status'] = false;
        $respuesta['mensaje'] = "";

        if (!isset($Responsable) | !isset($RFCResponsable) | !isset($Categoria)) {
            $respuesta['mensaje'] = "Parámetros incorrectos.";
        }
        else {
            try {
                if( $Responsable != "" && $RFCResponsable != "" && $Categoria != "" ){

                    $parametros = array("Responsable" 			=> $Responsable,
																				 "RFCResponsable" 	=> $RFCResponsable,
																				 "Categoria" 				=> $Categoria,
																				 "jefeRH"						=> $jefe_rh,
																				 "CategoriaJefeRH"	=> $categoria_rh,
																				 "AuxRH"						=> $aux_rh,
																				 "CategoriaAuxRH"		=> $categoria_aux
                                        );

                    $resultado = $this->mod_util->upd_responsable_presupuesto($parametros, $this->PresupuestoId);

                    if ($resultado == true) {
                        $respuesta['status'] = true;
                        $respuesta['mensaje'] = "Los datos se guardaron correctamente.";

                    }
                    else {
                        $respuesta['mensaje'] = "Ocurrió un error. Los datos del Responsable no se pudieron guardar.";
                    }
                }
                else {
                    $respuesta['mensaje'] = "El valor de los parámetros no es válido.";
                }
            }
            catch(Exception $e){
                $respuesta['mensaje'] = "Error al intentar guardar los datos del Responsable.";
            }
        }

        $this->output->set_output(json_encode($respuesta));
    }

    public function carga_conf_pago_electronico(){
        try {
            $cat_formatos = $this->mod_util->get_formatos_pago(array("NombreFormato" => escapaDatoParaBD(""), "PresupuestoId" => $this->PresupuestoId, "Tipo" => "1"));
            $data_view['cat_formatos'] = $cat_formatos;

            $respuesta['status'] = true;
            $respuesta['html'] = $this->load->view("utilerias/conf_pago_electronico", $data_view, TRUE);
            $respuesta['form_size'] = "xl"; //Tamaños posibles: sm (pequeño) / md (medio) / lg (grande) / xl (extra grande)
        }
        catch(Exception $e){
            $respuesta['status'] = false;
            $respuesta['mensaje'] = 'Se ha generado un error al intentar abrir el formulario de "Configuración de Carga de Pago Electrónico". Favor de comunicarse con el personal de Soporte Técnico de su dependencia.';
        }

        $this->output->set_output(json_encode($respuesta));
    }

    public function capturar_formato_pago(){
        try {
            $selectores = new selectores_class();
			      $cat_emisores = $selectores->emisores($this->PresupuestoId);
            $data_view['cat_emisores'] = $cat_emisores;

            $reg_campos =  $this->mod_cat->traer_cat_varios_filtros('Cat_CamposFormatosPago', array("Activo" => "1"));
            $data_view['reg_campos'] = $reg_campos;

            $respuesta['status'] = true;
            $respuesta['html'] = $this->load->view("utilerias/captura_formato_pago.php", $data_view, TRUE);
            $respuesta['form_size'] = "xl"; //Tamaños posibles: sm (pequeño) / md (medio) / lg (grande) / xl (extra grande)
        }
        catch(Exception $e){
            $respuesta['status'] = false;
            $respuesta['mensaje'] = 'Se ha generado un error al intentar abrir el formulario de "Captura de Formato de Pago". Favor de comunicarse con el personal de Soporte Técnico de su dependencia.';
        }

        $this->output->set_output(json_encode($respuesta));
    }

    public function guardar_formato_pago(){
        $NombreFormato = $this->input->post('NombreFormato', true);
        $EmisorId = $this->input->post('EmisorId', true);
        $Campos = $this->input->post('Campos', true);
        $Encabezado = $this->input->post('Encabezado', true);
        $Consulta = 'pa_ConcetradoNominaExTipoNomina';

        $respuesta['status'] = false;
        $respuesta['mensaje'] = "";

        $this->mod_util->iniciar_transaccion();

        if( !isset($NombreFormato) | !isset($EmisorId) | empty($Campos) ) {
            $respuesta['mensaje'] = "Parámetros incorrectos.";
        }
        else {
            try {
                if( $NombreFormato != "" && $EmisorId != ""){

                    $Campos = json_decode($Campos);

                    $parametrosFP = array( "NombreFormato" => strtoupper($NombreFormato)
                                        ,"PresupuestoID" => $this->PresupuestoId
                                        ,"EmisorId" => $EmisorId
                                        );

                    $id_formato = $this->mod_util->ins_formato_pago($parametrosFP);

                    if($id_formato !== false && $id_formato > 0){
                        if( count($Campos) > 0){
                            $continuar = true;

                            foreach($Campos as $item){
                                $parametrosC = array( "FormatoId" => $id_formato
                                                    ,"Campo" => $item
                                                    ,"Consulta" => $Consulta
                                                    ,"Encabezado" => $Encabezado
                                                    );

                                $resultadoC = $this->mod_util->ins_campo_formato_pago($parametrosC);
                                if( $resultadoC === false){
                                    $continuar = false;
                                    break;
                                }
                            }

                            if($continuar){
                                $respuesta['status'] = true;
                                $respuesta['mensaje'] = "Los datos del Formato de pago se guardaron correctamente.";
                            }
                            else{
                                $respuesta['mensaje'] = "Ocurrió un error al intentar guardar los campos. El Formato de pago no se guardó.";
                            }


                        }
                        else{
                            $respuesta['mensaje'] = "El Formato de pago no se puede guardar porque no se seleccionaron los campos que debe incluir.";
                        }
                    }
                    else{
                        $respuesta['mensaje'] = "Ocurrió un error. No se pudo guardar el formato de pago.";
                    }
                }
                else{
                    $respuesta['mensaje'] = "El valor de los parámetros no es válido.";
                }
            }
            catch(Exception $e){
                $respuesta['mensaje'] = "Error al intentar guardar los datos del Formato de pago.";
            }
        }

        if( $respuesta['status'] == true){
            $this->mod_util->terminar_transaccion( $respuesta['status'] == true ? 0 : 1 );
        }

        $this->output->set_output(json_encode($respuesta));
    }

    public function eliminar_formato_pago(){
        $FormatoId = $this->input->post('FormatoId', true);

        $respuesta['status'] = false;
        $respuesta['mensaje'] = "";

        $this->mod_util->iniciar_transaccion();

        if( !isset($FormatoId) ) {
            $respuesta['status'] = false;
            $respuesta['mensaje'] = "Parámetros incorrectos.";
        }
        else {
            try {
                if( $FormatoId > 0 ){
                    $resultado = $this->mod_util->del_campos_formato_pago($FormatoId);

                    if($resultado == true){
                        $resultado = $this->mod_util->del_formato_pago($FormatoId);
                        if($resultado == true){
                            $respuesta['status'] = true;
                            $respuesta['mensaje'] = "El Formato de pago se eliminó correctamente.";
                        }
                        else{
                            $respuesta['mensaje'] = "Ocurrió un error. El Formato de pago no se pudo eliminar.";
                        }
                    }
                    else{
                        $respuesta['mensaje'] = "Ocurrió un error. El formato no se pudo eliminar. (2)";
                    }
                }
                else{
                    $respuesta['mensaje'] = "El valor de los parámetros no es válido.";
                }
            }
            catch(Exception $e){
                $respuesta['mensaje'] = "Error al intentar eliminar el formato de pago.";
            }
        }

        if( $respuesta['status'] == true){
            $this->mod_util->terminar_transaccion( $respuesta['status'] == true ? 0 : 1 );
        }

        $this->output->set_output(json_encode($respuesta));
    }

		public function carga_formatos_pago_configurados()
		{
			$idEmisor = $this->input->post('idEmisor');
			$cat_formato_emisor = $this->mod_util->get_formatos_pago(array("NombreFormato" => escapaDatoParaBD(""),
																																"PresupuestoId" => $this->PresupuestoId,
																																"Tipo" => "1",
																																"idEmisor" => $idEmisor));
			$cat_formatos = $this->mod_util->get_formatos_pago(array("NombreFormato" => escapaDatoParaBD(""), "PresupuestoId" => $this->PresupuestoId, "Tipo" => "1"));
			$idFormato = (empty($cat_formato_emisor[0]) ? 0 : $cat_formato_emisor[0]->Id) ;
			$selectores = new selectores_class();
			$cat_formatos = $selectores->from_recordset($cat_formatos, $idFormato, true, false, 'Id', 'Id', 'NombreFormato' );
			$data = array('status' => true, 'html' => $cat_formatos);
			$this->output->set_output(json_encode($data));
		}

		public function carga_formatos_pago()
		{
			$idEmisor = $this->input->post('idEmisor');
			$cat_formatos = $this->mod_util->get_formatos_pago(array("NombreFormato" => escapaDatoParaBD(""),
																																"PresupuestoId" => $this->PresupuestoId,
																																"Tipo" => "1",
																																"idEmisor" => $idEmisor));

			$abc = new pjey_ABC();
			$abc->set_resultado($cat_formatos);
      $abc->set_defaults('muestra_panel','cargando','btnborrarFiltros', 'acciones');
	    $abc->set_formatoColumna(array('visible' => array(1,2,3,5)));
			$abc->set_encabezados(array('NombreFormato'	=> 'Formato',));
			$abc->set_configuraciones_extra(array('idTbl' => 'tblconfFormatosPago'),
																array('modCell'  => array('targets' => array(3,3),
																 'arrColMod' => array(3,3), 'arrayBusca' => array('1','0'), 'arrayMod' => array('SÍ','No')))
															 );
	 		$abc->set_acciones(array('titulo'=>'Eliminar','texto'=>'','icono'=>'far fa-trash-alt','class' => 'btn-danger', 'accion'=>'eliminar_formato_pago'));
			$output = $abc->construir();
			$vista = $this->load->view($output['archivo'], $output['datos'],TRUE);
			if (!empty($cat_formatos)) $data = array('status' => true, 'html' => $vista);
			else $data = array('status' => false, 'message' => 'No se encontraron formatos de pago para el emisor.', 'html' => $vista);

    	$this->output->set_output(json_encode($data));
		}

		public function captura_formato_pago_emisor()
		{
			$idEmisor = $this->input->post('idEmisor');
			$reg_campos =  $this->mod_cat->traer_cat_varios_filtros('Cat_CamposFormatosPago', array("Activo" => "1"));
			$datos['idEmisor'] = $idEmisor;
			$datos['reg_campos'] = $reg_campos;
			$html = $this->load->view('catalogos/captura_formato_pago_emisor',$datos,true);
			$data = array('status' => true, 'html' => $html);
			$this->output->set_output(json_encode($data));
		}

		public function guarda_formato_pago_emisor()
		{
			$NombreFormato = $this->input->post('NombreFormato');
			$EmisorId = $this->input->post('idEmisor');
			$Campos = $this->input->post('Campos');
			$Encabezado = $this->input->post('Encabezado');
			$Consulta = 'pa_ConcetradoNominaExTipoNomina';

			$respuesta['status'] = false;
			$respuesta['mensaje'] = "";

			$this->mod_util->iniciar_transaccion();

			if (!isset($NombreFormato) | !isset($EmisorId) | empty($Campos)) $respuesta['mensaje'] = "Parámetros incorrectos.";
			else {
				try {
					if ($NombreFormato != "" && $EmisorId != "") {
							$Campos = json_decode($Campos);
							$parametrosFP = array("NombreFormato" => strtoupper($NombreFormato),"PresupuestoID" => $this->PresupuestoId,"EmisorId" => $EmisorId);
							$id_formato = $this->mod_util->ins_formato_pago($parametrosFP);

							if (!empty($id_formato)) {
								if (count($Campos) > 0) {
									$continuar = true;
									foreach($Campos as $item) {
										$parametrosC = array( "FormatoId" => $id_formato,"Campo" => $item,"Consulta" => $Consulta,"Encabezado" => $Encabezado);
										$resultadoC = $this->mod_util->ins_campo_formato_pago($parametrosC);
										if ($resultadoC === false) {
											$continuar = false;
											break;
										}
									}
									if ($continuar) {
											$respuesta['status'] = true;
											$respuesta['mensaje'] = "Los datos del Formato de pago se guardaron correctamente.";
									}
									else $respuesta['mensaje'] = "Ocurrió un error al intentar guardar los campos. El Formato de pago no se guardó.";
								}
								else $respuesta['mensaje'] = "El Formato de pago no se puede guardar porque no se seleccionaron los campos que debe incluir.";
							}
							else $respuesta['mensaje'] = "Ocurrió un error. No se pudo guardar el formato de pago.";
					}
					else $respuesta['mensaje'] = "El valor de los parámetros no es válido.";
				}
				catch(Exception $e){
					$respuesta['mensaje'] = "Error al intentar guardar los datos del Formato de pago.";
				}
			}
			if ($respuesta['status'] == true)	$this->mod_util->terminar_transaccion($respuesta['status'] == true ? 0 : 1);

			$this->output->set_output(json_encode($respuesta));
		}

		public function guarda_conf_tipo_documento()
		{
			$idFormatoPago = $this->input->post('idFormatoPago');
			$idDocto = $this->input->post('idDocto');
			$tiposNomina = $this->input->post('tiposNomina');
			$tiposNomina = json_decode($tiposNomina,true);
			$datos = array(
				'CategoriaId' => 0, 'DocumentoId' => $idDocto, 'Permanente' => 1, 'VecesAplicar' => 0, 'VecesAplicadas' => 0, 'CalculoConfirmado' => 0, 'EliminarRegConf' => 0, 'FormatoPagoId' => $idFormatoPago
			);
			foreach ($tiposNomina as $key => $tipoNomina) {
				$datos['TipoNominaId']	= $tipoNomina['Id'];
				$this->mod_util->guarda_conf_tipo_documento($datos);
			}
			$data = array('status' => true, 'message' => 'Configuración guardada con éxito.');
			$this->output->set_output(json_encode($data));
		}

}
