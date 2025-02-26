<?php if (!defined('BASEPATH')) exit('No permitir el acceso directo al script');

class Selectores_class {
	function __construct(){
		 $CI =& get_instance();
		 $CI->load->model('Selectores_model');
		 $CI->load->model('nomina_modelo','mNomina');
 		 $CI->load->model('catalogos_modelo','mCat');
		 $CI->load->model('calculos_modelo','mCalculos');
		 $CI->load->model('configuraciones_modelo','mConf');
	}

	function generico($catalogo, $id=0, $muestraTodos=true, $ElemVacio=true, $ident='Id',$campoid='',$campodesc='',$campoclave='', $info_data=true){
		$opciones = '';
		$elementos = false;
		$id_buscado = ($muestraTodos == true ? 0 : $id);

		$CI =& get_instance();

		switch ($catalogo) {
			case 'dependencias':
				$elementos = $CI->mCat->traer_catalogo('cat_Dependencias',true,'Cancelado',0);
				break;

			case 'categorias':
				$elementos = $CI->mCat->traer_catalogo('cat_Categorias',true,'Cancelado',0);
				break;
			case 'categorias_prestadores':
				$elementos = $CI->mCat->traer_catalogo('Cat_CategoriasPrestServ',true,'Activo',1);
				break;
			case 'departamentos':
				$elementos = $CI->mCat->traer_catalogo('cat_Departamentos',false);
				break;

			case 'grupoimpresion':
				$elementos = $CI->mCat->traer_catalogo('Cat_GrupoImpresion',true,'GrupoImpId !=',0);
				break;

			case 'edificios':
				$elementos = $CI->mCat->traer_catalogo('cat_Edificios',true,'Cancelado',0);
				break;

			case 'tipocontrato':
				$elementos = $CI->mCat->traer_catalogo('cat_TipoContrato'); //<<<RPERAZA(2021.05.21): CASU 0804/2021
				break;

			case 'tipopago':
				$array = array(array('Id' => '0', 'Descripcion' => 'EFECTIVO'),array('Id'=>'1','Descripcion' => 'NÓMINA ELECTRÓNICA'));
				$elementos = json_decode(json_encode($array));
				break;

			case 'estados_emp':
				$array = array(array('Id' => 'A', 'Descripcion' => 'ACTIVO'),array('Id'=>'VA','Descripcion' => 'VACACIONES'),array('Id'=>'IN','Descripcion' => 'INCAPACIDAD'),
											 array('Id'=>'LIC','Descripcion' => 'LICENCIA CON GOCE DE SUELDO'),array('Id'=>'LIS','Descripcion' => 'LICENCIA SIN GOCE DE SUELDO'),array('Id'=>'I','Descripcion' => 'INACTIVO'));
				$elementos = json_decode(json_encode($array));
				break;

			case 'tipo_nomina':
				$elementos = $CI->mCat->trae_cat_tipoNomina();
				break;
			case 'nominas_en_periodo':
				$elementos = $CI->mCalculos->trae_nominas_abiertas($id);
				break;
			case 'tipo_tarjeta':
				$elementos = $CI->mCat->traer_catalogo('cat_tipoTarjeta',false);
				break;
			case 'tipo_concepto': //<<<RPERAZA(2021.05.21): CASU 0804/2021
				$elementos = $CI->mCat->trae_cat_tipoConcepto();
				$campodesc = (empty($campodesc) ? 'TipoConcepto' : $campodesc);
				break;
			case 'tipo_checadas': //<<<RPERAZA(2021.05.21): CASU 0804/2021
				$elementos = $CI->mCat->trae_tipo_checadas();
				break;
			case 'origenes_movs': //<<<RPERAZA(2021.05.21): CASU 0804/2021
				$elementos = $CI->mCat->trae_origenes_movs();
				break;

			case 'turnos': //<<<RPERAZA(2021.05.21): CASU 0804/2021
				$elementos = $CI->mCat->trae_turnos();
				break;

			case 'tipoconceptosat':
				$array = array(	array('Id' => 'P', 'Descripcion' => 'Percepción'),
												array('Id' => 'O2', 'Descripcion' => 'Otros Pagos'),
												array('Id' => 'D', 'Descripcion' => 'Deducción'),
												array('Id' => 'I', 'Descripcion' => 'Informativo'),
												array('Id' => 'OS', 'Descripcion' => 'Otro Subsidio'));
				$elementos = json_decode(json_encode($array));
				break;
			case 'escuelas':
				$elementos = $CI->mCat->traer_cat_varios_filtros('cat_Escuelas','');
				break;
			case 'reportes_auditoria':
				$elementos = $CI->mCat->traer_cat_varios_filtros('cat_Reportes',array('idTipoReporte' => 4));
				break;
			case 'param_isstey':
				$array = array(	array('Id' => '0', 'Descripcion' => 'No en Transición'),
												array('Id' => '1', 'Descripcion' => 'En Transición'),
												array('Id' => '2', 'Descripcion' => 'Beneficios Adquiridos'));
				$elementos = json_decode(json_encode($array));
				break;
		}

		if( $elementos != false ){
			$datos_cat = array('catalogo' => $elementos, 'elemvacio' => $ElemVacio, 'id' => $id, 'ident' => $ident, 'campoid' => $campoid, 'campodesc' => $campodesc, 'campoclave' => $campoclave, 'info_data' => $info_data); //<<<RPERAZA(2021.05.21): CASU 0804/2021, se agrega bandera $info_data, que indica si en las opciones del select se deben agregar como atributos [data] todos los campos de la tabla
			$opciones = $CI->load->view('genericos/opciones', $datos_cat, TRUE);
		}
		return $opciones;
	}

	//Contiene los elementos del catálogo de clientes
	//$idcliente es la opción que se quiere seleccionar por defecto
	//$todos, se usa para cargar todo el catálogo o solamente el elemento seleccionado
	function estados($EstadoID, $todos){
		$opciones = '';

		$CI =& get_instance();
		$modselectores =  new Selectores_model();
		if( $todos )
			$estados = $modselectores->estados(0);
		else
			$estados = $modselectores->estados($EstadoID);

		if( $estados != false ){
			$opciones.= '<option></option>';
			foreach( $estados as $item ){
				if( $EstadoID == $item->EstadoID )
					$opciones.= '<option value="'.$item->EstadoID.'" selected="selected">'.$item->Estado.'</option>'.PHP_EOL;
				else
					$opciones .= '<option value="'.$item->EstadoID.'">'.$item->Estado.'</option>'.PHP_EOL;
			}
		}

		return $opciones;
	}

	function ciudades($CiudadId, $EstadoID, $todos){
		$opciones = '';

		$CI =& get_instance();
		$modselectores =  new Selectores_model();
		if( $todos )
			$ciudades = $modselectores->ciudades($EstadoID,0);
		else
			$ciudades = $modselectores->ciudades($EstadoID,$CiudadId);

		if( $ciudades != false ){
			$opciones.= '<option></option>';
			foreach( $ciudades as $item ){
				if( $CiudadId == $item->CiudadId )
					$opciones .= '<option value="'.$item->CiudadId.'" selected="selected">'.$item->Ciudad.'</option>'.PHP_EOL;
				else
					$opciones .= '<option value="'.$item->CiudadId.'">'.$item->Ciudad.'</option>'.PHP_EOL;
			}
		}

		return $opciones;
	}

	function colonias($CiudadId, $ColoniaId, $todos)
	{
		$opciones = '';

		$CI =& get_instance();
		$modselectores = new Selectores_model();
		if( $todos )
			$colonias = $modselectores->colonias($CiudadId,0);
		else
			$colonias = $modselectores->colonias($CiudadId, $ColoniaId);

		if( $colonias != false ){
			$opciones.= '<option></option>';
			foreach( $colonias as $item ){
				if( $ColoniaId == $item->ColoniaId )
					$opciones .= '<option value="'.$item->ColoniaId.'" selected="selected">'.$item->Colonia.'</option>'.PHP_EOL;
				else
					$opciones .= '<option value="'.$item->ColoniaId.'">'.$item->Colonia.'</option>'.PHP_EOL;
			}
		}

		return $opciones;
	}

	function escuelas($EscuelaId, $todos){
		$opciones = '';

		$CI =& get_instance();
		$modselectores =  new Selectores_model();
		if( $todos )
			$escuelas = $modselectores->escuelas(0);
		else
			$escuelas = $modselectores->escuelas($EscuelaId);

		if( $escuelas != false ){
			usort($escuelas, function($a, $b){return strcmp($a->Nombre, $b->Nombre);});
			$opciones.= '<option></option>';
			foreach( $escuelas as $item ){
				if( $EscuelaId == $item->EscuelaId )
					$opciones.= '<option value="'.$item->EscuelaId.'" selected="selected">'.$item->Nombre.'</option>'.PHP_EOL;
				else
					$opciones .= '<option value="'.$item->EscuelaId.'">'.$item->Nombre.'</option>'.PHP_EOL;
			}
		}

		return $opciones;
	}

	function parentescos($idParentesco, $todos){
		$opciones = '';

		$CI =& get_instance();
		$modselectores =  new Selectores_model();
		if( $todos ) $parentescos = $modselectores->parentescos();
		else $parentescos = $modselectores->parentescos($idParentesco);

		if( $parentescos != false ){
			$opciones.= '<option></option>';
			foreach( $parentescos as $item ){
				if( $idParentesco == $item->idParentesco )
					$opciones .= '<option value="'.$item->idParentesco.'" selected="selected">'.$item->Descripcion.'</option>'.PHP_EOL;
				else
					$opciones .= '<option value="'.$item->idParentesco.'">'.$item->Descripcion.'</option>'.PHP_EOL;
			}
		}
		return $opciones;
	}

	function escolaridad($Id, $todos){
		$opciones = '';

		$CI =& get_instance();
		$modselectores =  new Selectores_model();
		if( $todos )
			$registros = $modselectores->escolaridad(0);
		else
			$registros = $modselectores->escolaridad($Id);

		if( $registros != false ){
			$opciones.= '<option></option>';
			foreach( $registros as $item ){
				if( $Id == $item->Id )
					$opciones.= '<option value="'.$item->Id.'" selected="selected">'.$item->Descripcion.'</option>'.PHP_EOL;
				else
					$opciones .= '<option value="'.$item->Id.'">'.$item->Descripcion.'</option>'.PHP_EOL;
			}
		}

		return $opciones;
	}


	function tipodocto_estudiante($Id, $todos=true){ //<<<RPERAZA(2018.07.05): CASU 0159/2018
		$opciones = '';

		$CI =& get_instance();
		$modselectores =  new Selectores_model();
		if( $todos )
			$registros = $modselectores->tipodocto_estudiante(0);
		else
			$registros = $modselectores->tipodocto_estudiante($Id);
		if( $registros != false ){
			$opciones.= '<option></option>';
			foreach( $registros as $item ){
				if( $Id == $item->Id )
					$opciones.= '<option value="'.$item->Id.'" selected="selected">'.$item->Descripcion.'</option>'.PHP_EOL;
				else
					$opciones .= '<option value="'.$item->Id.'">'.$item->Descripcion.'</option>'.PHP_EOL;
			}
		}

		return $opciones;
	}

	function tipodocto_empleado($Id, $todos=true){ //<<<RPERAZA(2018.07.05): CASU 0159/2018
		$opciones = '';

		$CI =& get_instance();
		$modselectores =  new Selectores_model();
		if( $todos )
			$registros = $modselectores->tipodocto_empleado(0);
		else
			$registros = $modselectores->tipodocto_empleado($Id);
		if( $registros != false ){
			$opciones.= '<option></option>';
			foreach( $registros as $item ){
				if( $Id == $item->Id )
					$opciones.= '<option value="'.$item->Id.'" selected="selected">'.$item->Descripcion.'</option>'.PHP_EOL;
				else
					$opciones .= '<option value="'.$item->Id.'">'.$item->Descripcion.'</option>'.PHP_EOL;
			}
		}

		return $opciones;
	}

	function parentesco_pareja($Id, $todos=true){ //<<<RPERAZA(2018.07.05): CASU 0159/2018
		$opciones = '';

		$CI =& get_instance();
		$modselectores =  new Selectores_model();
		if( $todos )
			$registros = $modselectores->parentesco_pareja(0);
		else
			$registros = $modselectores->parentesco_pareja($Id);
		if( $registros != false ){
			$opciones.= '<option></option>';
			foreach( $registros as $item ){
				if( $Id == $item->Id )
					$opciones.= '<option value="'.$item->Id.'" selected="selected">'.$item->Descripcion.'</option>'.PHP_EOL;
				else
					$opciones .= '<option value="'.$item->Id.'">'.$item->Descripcion.'</option>'.PHP_EOL;
			}
		}

		return $opciones;
	}

	function historial_nomina($idPresupuesto,$id=0){
		$CI =& get_instance();
		$opciones = '';
		$elementos = [];
		$registros = $CI->mNomina->busca_historial_nomina();

		if (!empty($registros)) {
			foreach ($registros as $item) {
				if ($idPresupuesto == $item->PresupuestoId) array_push($elementos,$item);
			}

			if (!empty($elementos)) {
				$elementos = (object) $elementos;
				$datos_cat = array('catalogo' => $elementos, 'elemvacio' => false, 'id' => $id, 'ident' => 'ID', 'campoid' => 'ID', 'campodesc' => 'Quincena', 'campoclave' => '');
				$opciones = $CI->load->view('genericos/opciones', $datos_cat, TRUE);
			}
		}

		return $opciones;
	}

	function conceptos($criterio,$valor,$ClaveRecibo=0,$id=0,$elemvacio=true){
		$opciones = '';
		$CI =& get_instance();
		$elementos = $CI->mCat->trae_cat_conceptos($criterio,$valor,$ClaveRecibo);
		if ($elementos != false) {
			$datos_cat = array('catalogo' => $elementos, 'elemvacio' => $elemvacio, 'id' => $id, 'ident' => 'Id', 'campoid' => 'Id', 'campodesc' => 'Descripcion', 'campoclave' => 'ClaveRecibo');
			$opciones = $CI->load->view('genericos/opciones', $datos_cat, TRUE);
		}
		return $opciones;
	}

	function conceptos_presupuestal($idPresupuesto,$id=0)
	{
		$opciones = '';
		$CI =& get_instance();
		$elementos = $CI->mCat->obtener_conceptos($idPresupuesto);
		if (!empty($elementos)) {
			$datos_cat = array('catalogo' => $elementos, 'elemvacio' => true, 'id' => $id, 'ident' => 'IdConcepto', 'campoid' => 'IdConcepto', 'campoclave' => 'ClaveRecibo');
			$opciones = $CI->load->view('genericos/opciones', $datos_cat, TRUE);
		}
		return $opciones;
	}

	function acreedores($idPresupuesto,$partida,$id=0){
		$CI =& get_instance();
		$CI->load->model('contabilidad_modelo','mConta');
		$elementos = $CI->mConta->obtener_cuenta_contable($idPresupuesto,$partida);

		if( $elementos != false ){
			$datos_cat = array('catalogo' => $elementos, 'elemvacio' => true, 'id' => 0, 'ident' => 'Codigo', 'campoid' => 'Codigo', 'campodesc' => 'Nombre');
			$opciones = $CI->load->view('genericos/opciones', $datos_cat, TRUE);
		}
		return $opciones;
	}

	public function acreedores_arcon($cveEntidad, $anio, $clavePresupuestal,$id=0)
	{
		$CI =& get_instance();
		$opciones = '';
		$CI->load->library('REST_client','','rest');
		$result = $CI->rest->obtiene_acreedores($cveEntidad, $anio, $clavePresupuestal);
		if ($result != false){
			if (!empty($result['acreedores'])) {
				$datos_cat = array('catalogo' => $result['acreedores'], 'elemvacio' => true, 'id' => $id, 'ident' => 'Idplancuentas', 'campoid' => 'Idplancuentas', 'campodesc' => 'Nombre');
				$opciones = $CI->load->view('genericos/opciones', $datos_cat, TRUE);
			}
		}
		return $opciones;
	}

	/**
	 * Trae todos los conceptos de pagos especiales
	 * @method conceptos_pagos_especiales
	 * @author alopez
	 * @param  [type]                     $idPresupuesto [description]
	 * @return [type]                                    [description]
	 */
	public function conceptos_pagos_especiales($idPresupuesto,$ElemVacio=true){
		$CI =& get_instance();
		$opciones = '';
		$elementos = $CI->mConf->trae_pagos_especiales();
		if (!empty($elementos)) {
			$elementos = array_values(array_filter($elementos, function($var) use ($idPresupuesto) {
				return $var->PresupuestoID == $idPresupuesto;
			}));
		}
		 $con_todos = array('id' => 0, 'IDConcepto' => 0, 'Descripcion' => 'TODOS', 'FechaInicio' => $elementos[0]->FechaInicio, 'FechaFinal' => $elementos[0]->FechaFinal,
		'FechaaPagar' => $elementos[0]->FechaaPagar, ' DiasaPagar' => $elementos[0]->DiasaPagar, 'PeriodoLaborado' => $elementos[0]->PeriodoLaborado, 'MontoExcento' => $elementos[0]->MontoExcento,
		'Gravable' => $elementos[0]->Gravable, 'Proporcional' => $elementos[0]->Proporcional,
	);
		$elementos[] = (object) $con_todos;

		if ($elementos != false) {
			$datos_cat = array('catalogo' => $elementos, 'elemvacio' => $ElemVacio, 'id' => 0, 'ident' => 'id', 'campoid' => 'id', 'campodesc' => 'Descripcion');
			$opciones = $CI->load->view('genericos/opciones', $datos_cat, TRUE);
		}
		return $opciones;
	}

	public function nominas_abiertas($idPeriodoPago){
		$opciones = '';
		$CI =& get_instance();
		$elementos = $CI->mCalculos->trae_nominas_abiertas($idPeriodoPago);

		if( $elementos != false ){
			$datos_cat = array('catalogo' => $elementos, 'elemvacio' => true, 'id' => 0, 'ident' => 'Id', 'campoclave' => 'ClaveRecibo');
			$opciones = $CI->load->view('genericos/opciones', $datos_cat, TRUE);
		}
		return $opciones;
	}

	function conf_formatos($idPresupuesto,$tipo=1,$formato=''){
		$opciones = '';

		$CI =& get_instance();

		$elementos = $CI->mNomina->obtener_formato_porNombre($idPresupuesto,$tipo,$formato);

		if( $elementos != false ){
			$datos_cat = array('catalogo' => $elementos, 'elemvacio' => true, 'id' => 0, 'ident' => 'Id', 'campodesc' => 'NombreFormato');
			$opciones = $CI->load->view('genericos/opciones', $datos_cat, TRUE);
		}

		return $opciones;
	}

	function emisores($idPresupuesto,$id=0){
		$opciones = '';

		$CI =& get_instance();
		$elementos = $CI->mCat->traer_catalogo('Cat_Emisores');

		if( $elementos != false ){
			$datos_cat = array('catalogo' => $elementos, 'elemvacio' => true, 'id' => $id, 'ident' => 'Id', 'campodesc' => 'Emisor');
			$opciones = $CI->load->view('genericos/opciones', $datos_cat, TRUE);
		}

		return $opciones;
	}

	function from_recordset($recordset, $id=0, $muestraTodos=true, $ElemVacio=true, $ident='Id',$campoid='',$campodesc='',$campoclave='',$info_data=true){ //<<<RPERAZA(2021.05.17): CASU 0804/2021
		//funciona igual que el método generico(), pero en lugar de hacer una consulta, este método recibe el recordset con los datos
		$CI =& get_instance();
		$opciones = '';
		$elementos = $recordset;
		$id_buscado = ($muestraTodos == true ? 0 : $id);

		if( $elementos != false ){
			$datos_cat = array('catalogo' => $elementos, 'elemvacio' => $ElemVacio, 'id' => $id, 'ident' => $ident, 'campoid' => $campoid, 'campodesc' => $campodesc, 'campoclave' => $campoclave, 'info_data' => $info_data);
			$opciones = $CI->load->view('genericos/opciones', $datos_cat, TRUE);
		}
		return $opciones;
	}

	public function reportes_Auditoria($Id = 0){ //<<<RPERAZA(2018.07.05): CASU 0159/2018
		$opciones = '';

		$CI =& get_instance();
		$modselectores =  new Selectores_model();
		$registros = $modselectores->reportes_Auditoria($Id);
		if( $registros != false ){
			$opciones.= '<option></option>';
			foreach( $registros as $item ){
				if( $Id == $item->Id )
					$opciones.= '<option value="'.$item->Id.'" selected="selected">'.$item->Descripcion.'</option>'.PHP_EOL;
				else
					$opciones .= '<option value="'.$item->Id.'">'.$item->Descripcion.'</option>'.PHP_EOL;
			}
		}

		return $opciones;
	}


	//Contiene los elementos del catálogo de regimen fiscal
	//$idrergimen es la opción que se quiere seleccionar por defecto
	//$todos, se usa para cargar todo el catálogo o solamente el elemento seleccionado
	//GSantos, 2022.06.15 CASU 1080-2022
	function regimen_fiscal($RegimenID, $todos){
		$opciones = '';

		$CI =& get_instance();
		$modselectores =  new Selectores_model();
		if( $todos )
			$regimen = $modselectores->regimen_fiscal(0);
		else
			$regimen = $modselectores->regimen_fiscal($RegimenID);

		if( $regimen != false ){
			$opciones.= '<option></option>';
			foreach( $regimen as $item ){
				if( $RegimenID == $item->Id )
					$opciones.= '<option value="'.$item->Id.'" selected="selected">'.$item->Clave.'-'.$item->Descripcion.'</option>'.PHP_EOL;
				else
					$opciones .= '<option value="'.$item->Id.'">'.$item->Clave.'-'.$item->Descripcion.'</option>'.PHP_EOL;
			}
		}

		return $opciones;
	}
}
