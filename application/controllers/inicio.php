<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (version_compare(PHP_VERSION, '7.0', '>=')) $rutalib = 'phpspreadsheet';
else $rutalib = 'phpspreadsheet_PHP5';

require APPPATH . 'third_party/'.$rutalib.'/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Font;

class Inicio extends IIS_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('login_modelo','',TRUE);
		$this->load->model('empleado_modelo','mEmpleado',TRUE);
		$this->load->model('selectores_model','',TRUE);
		$this->load->model('estudiante_modelo','',TRUE);
		$this->load->model('conyuge_modelo','',TRUE);
		$this->load->model('imagen_modelo','',TRUE);
		$this->load->model('parametros_modelo','mParametros',TRUE);
		$this->load->library('ParamSystem', NULL, 'param_lib');
		$this->load->library('PHPRequests',NULL,'requests_lib');
	}

	public function index(){
		$mod_empleado = new Empleado_modelo();
		$bitacora = new Bitacora();
		//Guarda la ruta de inicio de sesión en una cookie para poder
		//recuperarla aunque muera la sesión //<<<RPERAZA(2018.08.14): CASU 1033/2018
		$this->input->set_cookie("ruta_inicio_sesion",$this->session->userdata('inicio_url'),86500);
		$menu = $this->generar_menu();
		$datos['menu'] = $menu;
		$datos['NombreUsuario'] = $this->session->userdata('Nombre');
		$datos['Dependencia'] = $this->session->userdata('Dependencia');
		$datos['Rol'] = $this->session->userdata('Rol');
		//$empleado = $mod_empleado->traer_empleado_por_nombre($this->session->userdata('Nombre'));
		$empleado = $mod_empleado->traer_datos_basicos_empleado($this->session->userdata('Credencial'));
		$sess_array = array(
							'Id' => $empleado->Id,
							'NombreNom' => $empleado->Nombre,
							'Apellido1' => $empleado->Apellido1,
							'Apellido2' => $empleado->Apellido2,
							'Clave' => $empleado->Clave,
							'AnioAceptaDatos' => $empleado->AnioAceptaDatos
						);
		$this->session->set_userdata($sess_array);

		//*******************************
		//carga parámetros del sistema
		$this->load->library('ParamSystem');
		$paramsystem = new ParamSystem();
		$paramsystem->carga_parametros_sistema();
		$paramsystem->carga_param_sys_nomina();
		//***************************
		//carga help desk********
		// $cargaAyuda = $this->carga_menu_ayuda();
		// $datos['menuAyuda'] = !empty($cargaAyuda['status']) ? $cargaAyuda['vista'] : '';
		//***************************
		log_message('inicio', 'Iniciando Sistema - Usuario: '.LimpiaCadena($this->session->UsuarioNT). ' | IP: '.$this->session->IP);
		//$bitacora->insertar('inicio/index','Iniciando Sistema');
 		$this->load->view('inicio',$datos);
	}

	private function generar_menu()
	{
		$menu_view = '';
		$permisos = $this->session->userdata(CLAVE_SISTEMA);
		$menu = $this->genera_opciones_menu($permisos);
		if (!empty($menu)) {
			$datos['menu'] = $menu;
			$menu_view = $this->load->view('seguridad/menu', $datos, TRUE);
		}
		return $menu_view;
	}

	private function genera_opciones_menu(array $permisos, $idPadre = 0)
	{
		$opcion_menu = array();
		foreach ($permisos as $key => $permiso) {
			$cve_permiso = CLAVE_SISTEMA.'_'.$key;
			$opcion = $this->session->userdata($cve_permiso);
			if (verificar_permiso($key) >= 2 && $cve_permiso != CLAVE_SISTEMA.'_AccesoSistema') {
			// if (verificar_permiso($key) >= 2 && $cve_permiso != CLAVE_SISTEMA.'_AccesoSistema' && $opcion['idTipoOpcion'] == 2) {
				if ($opcion['idOpcionPadre'] == $idPadre) {
					$submenu = $this->genera_opciones_menu($permisos, $opcion['idOpcion']);
					if ($submenu && verificar_permiso($key) == 3) {
						$opcion['submenu'] = $submenu;
						if (array_key_exists('contSubMenu', $opcion)) { $opcion['contSubMenu'] = $opcion['contSubMenu'] + 1; }
						else { $opcion['contSubMenu'] = 1; }
					}
					if (isset($opcion['Icono'])) { $clase_icono = $opcion['Icono']; }
					else {
						$tmpIcon = explode("*",$opcion['Descripcion']);
						$clase_icono = (isset($tmpIcon[1]) ? $tmpIcon[1] : '');
					}
					$opcion['clase_icono'] = $clase_icono;
					$opcion_menu[$key] = $opcion;
				}
			}
		}
		return $opcion_menu;
	}

	private function carga_menu_ayuda()
	{
		$setWS = $this->requests_lib->set_webservice('WS_CASU');
		if (!empty($setWS)) {
			$funcion = 'configuraciones/guarda_ayuda_casu'; //función en HEDA que se llamará para guardar el servicio
			$data = array('rutasys' => base_url(), 'accion' => $funcion, 'menu' => false);
			$respuesta = $this->requests_lib->consulta_webservice_post('index.php/api/Casu/cargar_vista_ayuda',$data);

			if (isset($respuesta['status'])) {
				if ($respuesta['status'] === FALSE) {
					$msj = (empty($respuesta['message']) ? $respuesta['error'] : $respuesta['message']);
					log_message('error', 'función carga_menu_ayuda() - Error en el webservice: '.$msj);
					$datos = array('status' => FALSE, 'message' => $msj);
				}
				else $datos = array('status' => TRUE, 'vista' => $respuesta['data']);
			}
			else $datos = array('status' => FALSE, 'message' => 'Error al consultar los datos en CASUNET.');

		}
		else {
			log_message("error","No se ha configurado el webservice de CASUNET.");
			$datos = array('status' => FALSE, 'message' => "No se ha configurado el webservice de CASUNET.");
		}
		return $datos;
	}

	public function responsabilidad(){
		if( !empty($this->session->userdata('AnioAceptaDatos')) ){
			if( $this->session->userdata('AnioAceptaDatos') == date('Y') ) $this->session->set_userdata('aceptaresp', TRUE);
		}
		$this->load->view("empleado/acepta_responsabilidad");
	}

	public function tablero(){
		$beneficios = $this->mEmpleado->traer_beneficios_solicitados();
		$datos['beneficios'] = $beneficios;
		$this->load->view("tablero", $datos);
	}

	public function acepta_responsabilidad(){
		$aceptaRes = $this->input->post('aceptares', TRUE);
		$aceptaRes = filter_var($aceptaRes, FILTER_VALIDATE_BOOLEAN);
		if( !isset($aceptaRes) ){
			$data = array('status' => FALSE,'message' => 'Ocurrió un error al aceptar. Intente de nuevo más tarde.');
		}
		else{
			$anio = ($aceptaRes ? date('Y') : 0);
			$credencial = $this->session->userdata('Credencial');
			$this->mEmpleado->guarda_anio_datos($anio, $credencial);
			$this->session->set_userdata('aceptaresp', $aceptaRes);
			$msj = ($aceptaRes ? 'Ha aceptado la responsabilidad de los datos proporcionados.' : 'Debe aceptar la responsabilidad de los datos.');
			$data = array('status' => $aceptaRes,'message' => $msj);
		}
		$this->output->set_output(json_encode($data));
	}

	public function CargarFormulario(){
		if (empty($this->session->userdata('aceptaresp')) && (verificar_permiso('WFBEM') < 3) ){
			$this->load->view("empleado/acepta_responsabilidad");
		}
		else {
			$selectores = new selectores_class();
			$Clave = $this->input->post('Clave', TRUE);

			if (!isset($Clave)) { $Clave = $this->session->userdata('Clave'); }

			$empleado = $this->mEmpleado->traer_empleado($Clave);

			if ($empleado != FALSE) {
				$datos['empleado'] = $empleado;
				$datos['ClaveEmpleado'] = $empleado->Clave;
			}

			$conyuge= $this->conyuge_modelo->consulta_conyuge($Clave);

			if($conyuge == FALSE)		{
				$conyuge = array( "ConyugeId"	=> 0
								,"Clave" 		=> ""
								,"apPaterno"	=> ""
								,"apMaterno"	=> ""
								,"Nombre"		=> ""
								,"DomTrabajo"	=> ""
								,"Telefonos"	=> ""
								,"Parentesco"	=> ""
								,"Celular"		=>""
							);
				$conyuge=(object)$conyuge;
			}

			$datos['ruta_img'] = $this->mParametros->traer_parametro_por_clave('RUTA_IMG');
			$datos['conyuge'] = $conyuge;

			$this->load->view('empleado/index', $datos);
		}
	}

	 // public function CargarContra(){
 	 // 	$datos['IdEmpleado'] = $this->session->userdata('Id');
 	 // 	$this->load->view('cambioContrasenia',$datos);
 	 // }

 	public function VerificaExisteEmpleado()
	{
		$apPaterno = $this->input->post("apPaterno",true);
		$apMaterno = $this->input->post("apMaterno",true);
		$Nombre = $this->input->post("Nombre",true);

		if( !isset($apPaterno) | !isset($apMaterno) | !isset($Nombre) ){
			echo '*';
		}
		else{
			$existe = $this->mEmpleado->verificar_existe_empleado((escapaDatoParaBD(mb_strtoupper($apPaterno))),(escapaDatoParaBD(mb_strtoupper($apMaterno))),(escapaDatoParaBD(mb_strtoupper($Nombre))));
			if($existe == 1){
				echo '11';
			}
			else{
				echo '10';
			}
		}
	}

	public function VerificaExisteHijo(){
		$IdEmpleado = $this->input->post("IdEmpleado",true);
		/*$apPaterno = $this->input->post("apPaterno",true);
		$apMaterno = $this->input->post("apMaterno",true);
		$Nombre = $this->input->post("Nombre",true);*/
		$CURP = $this->input->post("CURP",true);

		if( !isset($IdEmpleado) | !isset($CURP) ){//| !isset($apMaterno) | !isset($Nombre) ){
			echo '*';
		}
		else{
			$existe = $this->mEmpleado->verificar_existe_hijo($IdEmpleado,(escapaDatoParaBD(mb_strtoupper($CURP))));
			if($existe == 1){
				echo '11';
			}
			else{
				echo '10';
			}
		}
	}

	public function VerificaBeneficioSolicitado(){
		$IdEstudiante = $this->input->post("IdEstudiante",true);
		$apPaterno = $this->input->post("apPaterno",true);
		$apMaterno = $this->input->post("apMaterno",true);
		$Nombre = $this->input->post("Nombre",true);
		$Beneficio = $this->input->post("Beneficio",true);

		if( !isset($IdEstudiante) | !isset($apPaterno) | !isset($apMaterno) | !isset($Nombre) | !isset($Beneficio) ){
			echo '*';
		}
		else{
			$existe = $this->estudiante_modelo->verificar_beneficio_solicitado($IdEstudiante,(escapaDatoParaBD(mb_strtoupper($apPaterno))),(escapaDatoParaBD(mb_strtoupper($apMaterno))),(escapaDatoParaBD(mb_strtoupper($Nombre))),$Beneficio);
			if($existe == 1){
				echo '11';
			}
			else{
				echo '10';
			}
		}
	}

	//**********************************
	// IMAGENES
	//*********************************

	public function preparar_subida_archivo(){
		$selectores = new selectores_class();
		$ruta_archivo = $this->input->post('ruta_archivo', true);
		$nombre_archivo = $this->input->post('nombre_archivo', true);
		$IdPrimario = $this->input->post('IdPrimario', true); //<<<RPERAZA(2018.07.10), antes "IdEtudiante"
		$con_titulo = $this->input->post('con_titulo', true);
		$tipo_persona = $this->input->post('tipo_persona', true);
		$estado_datos = $this->input->post('estado_datos', true); //<<<RPERAZA(2018.07.11)
		//econove(2018.07.09) se agrega como parametro el ClaveSeccionImagen
		$ClaveSeccionImagen = $this->input->post('ClaveSeccionImagen', true);

		if( !isset($nombre_archivo)){
			$nombre_archivo = '';
		}

		if( !isset($ruta_archivo)){
			$ruta_archivo = '';
		}

		if($tipo_persona == 1){ //Tipos de documento para estudiantes
			$tipos_docto = $selectores->tipodocto_estudiante(0);
		}
		else{ //Tipos de documento para empleados
			$tipos_docto = $selectores->tipodocto_empleado(0);
		}
		if( !isset($ClaveSeccionImagen)){
			$ClaveSeccionImagen = '3';
		}

		$datos['tipos_docto'] = $tipos_docto;
		$datos['ruta_archivo'] = $ruta_archivo;
		$datos['nombre_archivo'] = $nombre_archivo;
		$datos['IdPrimario'] = $IdPrimario;
		$datos['ClaveSeccionImagen'] = $ClaveSeccionImagen;
		$datos['estado_datos'] = $estado_datos;

		if( isset($con_titulo)){
			$this->load->view('subir_archivo_titulo', $datos);
		}
		else{
			$this->load->view('subir_archivo', $datos);
		}
	}

	public function guardar_archivo(){
		$this->load->library('image_lib');
		$mod_imagen = new imagen_modelo();

		$IdPrimario = $this->input->post('IdPrimario',TRUE);
		$ruta_archivo = $this->input->post('ruta_archivo',TRUE);
		$nombre_archivo = $this->input->post('nombre_archivo',TRUE);
		$titulo = $this->input->post('titulo',TRUE);
		//econove(2018.07.09) se agrega como parametro el ClaveSeccionImagen
		$ClaveSeccionImagen = $this->input->post('ClaveSeccionImagen', true);

		$nombre_archivo_original = '';

		if( !isset($ruta_archivo)){
			$data = array(
				'error_message' => 'Parámetros incorrectos.'
			);
		}
		else{
			//$ruta_archivo = str_replace('/','\\',$ruta_archivo);
			//if( substr($ruta_archivo, -1) != '\\' ) $ruta_archivo .= '\\';
			if( substr($ruta_archivo, -1) != '/' ) $ruta_archivo .= '/';

			//--Elimina temporales
	   	foreach (glob($ruta_archivo."*tmp_upd_*") as $filename) {
			   unlink($filename);
			}

			if( !isset($nombre_archivo)){
				$nombre_archivo = genera_id_aleatorio();
			}
			else if($nombre_archivo == ''){
				$nombre_archivo == genera_id_aleatorio();
			}

			$nombre_archivo_original = $nombre_archivo;
			$nombre_archivo = 'tmp_upd_'.$nombre_archivo;

			if( isset($_FILES['file']['name']) ){
				$config['upload_path'] = $ruta_archivo;
				$config['allowed_types'] = 'jpg';
				$config['max_size'] = '2048';
				$config['encrypt_name'] = FALSE;
				$config['file_name'] = $nombre_archivo;

				if( 0 < $_FILES['file']['error'] ){
					$data = array(
							'error_message' => 'Error al subir el archivo: ' . $_FILES['file']['error']
					);
				}
				else{
					$this->load->library('upload', $config);
					if( !is_dir($ruta_archivo) ){
						mkdir($ruta_archivo, 0777, TRUE);
		  			}
		  			if( file_exists( $ruta_archivo.$nombre_archivo ) ){
		  				unlink($ruta_archivo.$nombre_archivo);
		  			}
		  			if( !$this->upload->do_upload('file') ){
						$data = array(
							'error_message' => $this->upload->display_errors('','')
						);
		  			}
					else{

						$img_data = $this->upload->data();
						$nombre_archivo = $nombre_archivo.$img_data['file_ext'];

						//----------------------------------------------------------
						//**********************************************************
						//**********************************************************

						$new_name_img = str_replace('tmp_upd_', '', $nombre_archivo);
						$datos = array(
										'IdImagen' => 0,
										//'ClaveSeccionImagen' => '1',
										'ClaveSeccionImagen' => $ClaveSeccionImagen,
										'IdPrimario' => $IdPrimario,
										'IdSecundario' => 0,
										'Titulo' => PreparaCadenaABD(mb_strtoupper($titulo)),
										'Nombre' => $new_name_img,
									);

						$id_imagen = $mod_imagen->guardar_imagen($datos);
						if($id_imagen > 0){
							//Renombra imagen
							rename($ruta_archivo.$nombre_archivo, $ruta_archivo.$new_name_img);

							$data = array(
										'upload_data' => 'Archivo subido correctamente: ' . $_FILES['file']['name']
										,'nombre_archivo' => $nombre_archivo
										,'ruta_archivo' => $ruta_archivo
									);
						}
						else{

							if( file_exists( $ruta_archivo.$nombre_archivo ) ){
				  				unlink($ruta_archivo.$nombre_archivo);
				  			}

							$data = array(
								'error_message' => 'No se pudo guardar la imagen en la base de datos.'
							);
						}
					}
				}
			}
			else{
				$data = array(
					'error_message' => 'Seleccione un archivo...'
				);
			}
		}

		$this->output->set_output(json_encode($data));
	}

	public function eliminar_imagen(){
		$mod_imagen = new imagen_modelo();

		$IdImagen = $this->input->post('IdImagen', TRUE);

		$imagen = $mod_imagen->traer_imagen($IdImagen);

		if($imagen != false){
			if( $mod_imagen->eliminar_imagen($IdImagen) == true ){
				$ruta = $this->mParametros->traer_parametro_por_clave('RUTA_IMG');
				$ruta_archivo = (empty($ruta->Valor) ? RUTA_IMG_ESTUDIANTE : $ruta->Valor);
				if( substr($ruta_archivo, -1) != '/' ) $ruta_archivo .= '/';
				unlink($ruta_archivo.$imagen->Nombre);
				echo "1";
			}
		}
		else{
			echo "0";
		}
	}

	public function traer_listado_imagenes(){
		$errores = "0";

		$IdPrimario = $this->input->post('IdPrimario', TRUE);
		//econove(2018.07.09) se agrego como parametro ClaveSeccionImagen
		$ClaveSeccionImagen = $this->input->post('ClaveSeccionImagen', TRUE);
		$estado_datos = $this->input->post('estado_datos', TRUE);
		if( !isset($ClaveSeccionImagen)){
			$ClaveSeccionImagen=3;
		}

		if( !isset($IdPrimario) ){
			//Con esta validacion nos aseguramos que los datos hayan sido enviados por el metodo POST
			$errores = "*";
		}
		else{
			$mod_imagen = new imagen_modelo();

			$datos = array(
						//'IdSeccionImagen' => 1,
						'ClaveSeccionImagen' => $ClaveSeccionImagen,
						'IdPrimario' => $IdPrimario,
						'IdSecundario' => 0
					);

			$imagenes = $mod_imagen->traer_imagenes_seccion_idprim_idsec($datos);
			$datos['imagenes'] = $imagenes;
			$datos['estado_datos'] = $estado_datos;
			$datos['ruta_img'] = $this->mParametros->traer_parametro_por_clave('RUTA_IMG');
			$datos['ruta_img_v'] = $this->mParametros->traer_parametro_por_clave('RUTA_IMG_V');
 			$resultados = $this->load->view('item_imagen', $datos, TRUE);
		}

		if( $errores != "0" ){
			echo $errores;
		}
		else echo "1".$resultados;
	}

 	public function CargaBusquedaEmpleado(){
 		$this->load->view('empleado/buscar_empleado');
 	}

 	public function BuscarEmpleado(){
 		$credencial = $this->input->post("credencial", TRUE);
    $idPresupuesto = $this->param_lib->get_parametro('idPresupuesto');
		if (verificar_permiso('WFBEM') == 3) { //<<<RPERAZA(2018.08.15): CASU 1033/2018
 			if( !isset($credencial) ){
	 			echo "*"; //Parámetros incorrectos
	 		}
	 		else {
	 			if ($credencial > 0) {
	 				$credencial_formato = FormatoFolio($credencial,5);
	 				$empleado = $this->mEmpleado->traer_empleado_por_credencial($credencial_formato,$idPresupuesto);
	 				if ($empleado != false) {
	 					echo "1".$empleado->Clave; //Éxito
	 				}
	 				else echo "0"; //No existe empleado con la credencial especificada
	 			}
	 			else echo "2"; //Número inválido de credencial
	 		}
 		}
 		else echo "@"; //No tiene permisos
 	}

 	public function TraerBeneficiosSolicitados(){
 		if(verificar_permiso('WFBEM') == 3){
 			$anio_beneficios = date('Y');
 			$beneficios = $this->mEmpleado->traer_beneficios_solicitados();
			$datos['beneficios'] = $beneficios;
			$datos['anio_beneficios'] = $anio_beneficios;
			$this->load->view('empleado/beneficios_solicitados', $datos);
		}
		else{
			$datos['heading'] = "Acceso denegado.";
 			$datos['message'] = "No cuenta con los permisos para acceder a ésta página";
			$this->load->view('errors/html/error_general', $datos);
		}
 	}

	private function GenerarExcelDesdeTabla($datos, $imprimeEncabezados = true, $tiposDeDatos = null){
 		$spreadsheet = null;
 		try{
			$spreadsheet = new Spreadsheet();

			foreach($datos as $fila){
				$row = (array) $fila;
				$num_rows = null;
				$c = 1; //Contador de columnas
				$sheet = $spreadsheet->getActiveSheet();

				if( $imprimeEncabezados == true ){
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
					foreach($head_row as $hkey => $hvalue){
						$sheet->setCellValueByColumnAndRow($hc, $num_rows+1, LimpiaCadena($hkey));
						$hc++;
					}
					$highestColumn = $sheet->getHighestColumn();
					$sheet->getStyle('A1:' . $highestColumn . '1' )->applyFromArray($estiloHead);
					$sheet->setAutoFilter('A1:'. $highestColumn . '1');
					$imprimeEncabezados = false;
				}
				$num_rows = $sheet->getHighestRow();
				foreach($row as $key => $value){
					if( $tiposDeDatos != null && count($tiposDeDatos > 0) && isset($tiposDeDatos[$key])){
						$sheet->setCellValueByColumnAndRow($c, $num_rows+1, LimpiaCadena($value));
					}
					else{
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
 			$spreadsheet = null;
 		}
 		return $spreadsheet;
 	}

 	public function GenerarExcelBeneficiosSolicitados(){ //<<<PERAZA(2018.08.21): CASU 1079/2018
		if( verificar_permiso('WFBEM') == 3 ){
			$nombre_archivo = "Beneficios_Solicitados";
			$beneficios = $this->mEmpleado->traer_beneficios_solicitados();
			$spreadsheet = $this->GenerarExcelDesdeTabla($beneficios,true,null);//$tiposDatos);

			if( $spreadsheet != null ){
				// $objPHPExcel->getActiveSheet()->setTitle('Beneficios Solicitados');
	    	$spreadsheet->getActiveSheet()->setTitle('Beneficios Solicitados');
				// Redirect output to a client’s web browser (Excel2007)
				header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
				header('Content-Disposition: attachment;filename="'.$nombre_archivo.'.xlsx"');
				header('Cache-Control: max-age=0');
				// If you're serving to IE 9, then the following may be needed
				header('Cache-Control: max-age=1');

				// If you're serving to IE over SSL, then the following may be needed
				//header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
				header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
				header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
				header ('Pragma: public'); // HTTP/1.0

				$writer = new Xlsx($spreadsheet);
				$writer->save('php://output');
			}
			else{
				$datos['heading'] = "Error.";
 				$datos['message'] = "No se pudo generar el archivo";
				$this->load->view('errors/html/error_general', $datos);
			}
 		}
 		else{
 			$datos['heading'] = "Acceso denegado.";
 			$datos['message'] = "No cuenta con los permisos para acceder a ésta página";
			$this->load->view('errors/html/error_general', $datos);
 		}
 	}

 	public function CargarColoniasXCiudad(){
 	 	$selectores = new selectores_class();
 	 	$IdCiudad = $this->input->post("IdCiudad", TRUE);

 	 	$colonias= $selectores->colonias($IdCiudad, 0, TRUE);
		echo $colonias;
 	}

 	public function VerificarEnvioCompleto(){ //<<<RPERAZA(2018.08.13): CASU 0159/2018

 		//if($this->session->userdata('EsAdmin')){
		if(verificar_permiso('WFBEM') == 3){ //<<<RPERAZA(2018.08.15): CASU 1033/2018
 			$Clave = $this->input->post("ClaveEmpleado", TRUE);
 			$resultado = true;

			if( !isset($Clave) ){
				$errores = "*"; //Parámetros incorrectos
			}
			else{
 				$mod_empleado = new Empleado_modelo();
 				$empleado = $mod_empleado->traer_empleado($Clave);
 				$fechas_envio = $mod_empleado->traer_fechas_envio_datos($empleado->Id);

 				if( $fechas_envio != false ){
					if( cambiaf_a_normal($fechas_envio->fEnvioEmpleado) == "01/01/1900" ){
						$resultado = false;
					}

					if( cambiaf_a_normal($fechas_envio->fEnvioConyuge) == "01/01/1900" ){
						$resultado = false;
					}

					if( cambiaf_a_normal($fechas_envio->fEnvioEstudiante) == "01/01/1900" ){
						$resultado = false;
					}
 				}
 				else{
 					log_message("error","La consulta generó un error: p_admarh_getFechasEnvioDatos");
 				}

 				if($resultado == true){
 					echo "1"; //Se han enviado todos los datos
 				}
 				else echo "0"; //No se han enviado todos los datos
	 		}
 		}
 		else{
 			echo "@"; //No tiene permisos
 		}
 	}

 	public function ImprimirAcuse(){ //<<<RPERAZA(2018.08.13): CASU 0159/2018

		$Clave = $this->input->post("ClaveEmpleado", TRUE);
		$errores = "";

		if( !isset($Clave) ){
			$errores = "*"; //Parámetros incorrectos
		}
		else{

			if($Clave > 0){
				$mod_empleado = new Empleado_modelo();

		 	 	//Obtiene datos actuales del empleado
		 	 	$empleado = $mod_empleado->traer_empleado($Clave);
		 	 	$fechas_envio = $mod_empleado->traer_fechas_envio_datos($empleado->Id);

				$date = date('d/m/Y');

				$datos['fecha_impresion'] = $date;
				$datos['empleado'] = $empleado;
				$datos['fechas_envio'] = $fechas_envio;
				$datos['vista'] = "acuse";
				$datos['titulo_reporte'] = "Acuse";
				$datos['nombre_archivo'] = "Acuse de envío de datos - ";
				$datos['imprimir'] = false;

				try {
				   	$this->imprimir_reporte($datos);
				}
				catch (Exception $e) {
				    $errores = "3"; // El reporte no se pudo imprimir (0)
				}
			}
			else{
				$errores = "2"; // El empleado no es válido (0)
			}
		}

		if( $errores != "0" ){
			echo $errores;
		}
	}

 	public function imprimir_reporte($parametros){ //<<<RPERAZA(2018.08.13): CASU 1033/2018
		$this->load->library('Class_PDF');

		//Consultamos los datos de la venta
		$continuar = false;
		$no_elementos = 0;
		$msj_error = '';

		if( true ){
			$dimensiones = array(215.9, 279.4);

			//$PDF = new Pdf_class('P', 'mm', $dimensiones, true, 'UTF-8', false);
			$PDF = new Class_PDF('P', 'mm', $dimensiones, true, 'UTF-8', false);
			$PDF->SetMargins(15, 15);
			$PDF->SetAutoPageBreak(TRUE, 2);
			$PDF->setPrintHeader(false);
			$PDF->setPrintFooter(false);
			$PDF->SetTitle($parametros["titulo_reporte"]);
			$PDF->AddPage('P', $dimensiones);
			$PDF->SetFont('Helvetica', '', 10);
			$htmlResultado = $this->load->view('reportes/'.$parametros['vista'], $parametros, TRUE);
			$PDF->writeHTML($htmlResultado, false, false, true, false, '');

			if( $parametros['imprimir'] != null && $parametros['imprimir'] == true ){
				$PDF->IncludeJS("print();");
			}
			$PDF->Output($parametros['nombre_archivo'].'.pdf', 'I');
		}
		else{
			$datos['heading'] = "Error al realizar la consulta";
			$datos['message'] = '<p>'.$msj_error.'</p>';
			$this->load->view('errors/html/error_general', $datos);
		}
	}

	public function acerca(){
		$descripcion = get_versiones('HEDA');
		$version = get_versiones();
		$datos['cols'] = $descripcion;
		$datos['version'] = $version;
		$this->load->view('acerca',$datos);
	}

} //cierra la clase Inicio (no borrar)
