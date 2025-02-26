<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//Función de seguridad para validar el permiso
function verificar_permiso($clave){
	try {
			$CI =& get_instance();
			if( isset($CI->session->userdata(CLAVE_SISTEMA)[$clave]) ) return $CI->session->userdata(CLAVE_SISTEMA)[$clave];
			else 0;
	}
	catch (Exception $e) {
			return 0;
	}
}

function DecimalMoneda($decin,$coma=true){
	if( $decin > 0 || $decin < 0 ){
		if( $coma ) return number_format($decin, 2, '.', ',');
		else return number_format($decin, 2, '.', '');
	}
	else return number_format(0,2);
}

function DecimalSinComa($decin){
	return number_format($decin, 2, '.', '');
}

function Decimal($decin, $numdecimales=2){
	$numero = number_format($decin,$numdecimales,'.',',');
	//verificamos los cuatro ultimos decimales
	$cont = $numdecimales;
	while( $cont > 0 ){
		//obtenemos el ultimo digito;si es cero se elimina. Si no es cero, nos salimos del ciclo.
		$ultimo = substr($numero, -1);
		if( strcmp($ultimo,"0") == 0 ){
			$resto = substr($numero,0,strlen($numero)-1);
			$numero = $resto;
		}
		else{
			break;
		}
		$cont--;
	}
	return $numero;
}

//Convierte fecha de mysql a normal
function cambiaf_a_normal_v1($fecha,$incluirhora=false){
	if( is_null($fecha) ){
		$fecha = "";
	}
	else{
		$anio = substr($fecha,0,4);
		$mes = substr($fecha,5,2);
		$dia = substr($fecha,8,2);
		if($incluirhora){
			$hora = substr($fecha,11,8);
			$fecha= $dia."/".$mes."/".$anio." (".$hora.")";
		}
		else $fecha = $dia."/".$mes."/".$anio;
	}

	return $fecha;
}

function cambiaf_a_normal($fecha,$incluirhora=false,$incluirseg=false){
	$fecha_resultado = "";
	if (is_null($fecha)) {
		$fecha_resultado = "";
	}
	else {
		$anio = substr($fecha,0,4);
		$mes = substr($fecha,5,2);
		$dia = substr($fecha,8,2);

		$fecha_resultado = $dia."/".$mes."/".$anio;

		if ($fecha_resultado == "01/01/1900") {
			$fecha_resultado = "";
		}
	}

	if ($fecha_resultado != "") {
		if ($incluirhora) {
			if ($incluirseg) {
				$hora = substr($fecha,11,8);
			}
			else {
				$hora = substr($fecha,11,5);
			}
			$fecha_resultado .= " ".$hora;
		}
	}

	return $fecha_resultado;
}

function cambiaf_a_mysql($fecha){
	$anio = substr($fecha,6,4);
	$mes = substr($fecha,3,2);
	$dia = substr($fecha,0,2);
    $lafecha=$anio."-".$mes."-".$dia;
    return $lafecha;
}

function DiaSemana($IntDia){
	$ValorDevuelto = "";
	switch($IntDia){
		case 1:
			$ValorDevuelto = "Lunes";
			break;
		case 2:
			$ValorDevuelto = "Martes";
			break;
		case 3:
			$ValorDevuelto = "Miércoles";
			break;
		case 4:
			$ValorDevuelto = "Jueves";
			break;
		case 5:
			$ValorDevuelto = "Viernes";
			break;
		case 6:
			$ValorDevuelto = "Sábado";
			break;
		case 7:
			$ValorDevuelto = "Domingo";
			break;
	}
	return $ValorDevuelto;
}

function NombreMes($IntMes){
	$ValorDevuelto = "";
	switch($IntMes){
		case 1:
			$ValorDevuelto = "Enero";
			break;
		case 2:
			$ValorDevuelto = "Febrero";
			break;
		case 3:
			$ValorDevuelto = "Marzo";
			break;
		case 4:
			$ValorDevuelto = "Abril";
			break;
		case 5:
			$ValorDevuelto = "Mayo";
			break;
		case 6:
			$ValorDevuelto = "Junio";
			break;
		case 7:
			$ValorDevuelto = "Julio";
			break;
		case 8:
			$ValorDevuelto = "Agosto";
			break;
		case 9:
			$ValorDevuelto = "Septiembre";
			break;
		case 10:
			$ValorDevuelto = "Octubre";
			break;
		case 11:
			$ValorDevuelto = "Noviembre";
			break;
		case 12:
			$ValorDevuelto = "Diciembre";
			break;
	}
	return $ValorDevuelto;
}

//Convierte fecha de mysql a fecha larga
function FechaLarga($fecha){
	$anio = substr($fecha,0,4);
	$mes = substr($fecha,5,2);
	$dia = substr($fecha,8,2);
	return $dia." de ".NombreMes((int)$mes)." de ".$anio;
}

function EliminaComas($cantidad){
	$numero =str_replace(",","",$cantidad);
	return $numero;
}

function FormatCantidad($decin,$auto=true,$numdec=2){
	if($auto){
		//return number_format($decin,2,'.',',');
		$numero = number_format($decin,6,'.',',');
		//verificamos los cuatro ultimos decimales
		$cont = 6;
		while( $cont > 0 ){
			//obtenemos el ultimo digito;si es cero se elimina. Si no es cero, nos salimos del ciclo.
			$ultimo = substr($numero, -1);
			if( strcmp($ultimo,"0") == 0 ){
				$resto = substr($numero,0,strlen($numero)-1);
				$numero = $resto;
			}
			else{
				break;
			}
			$cont--;
		}
		//si el ultimo es un punto lo eliminamos
		$ultimo = substr($numero, -1);
		if( strcmp($ultimo,".") == 0 ){
			$resto = substr($numero,0,strlen($numero)-1);
			$numero = $resto;
		}
		return $numero;
	}
	else{
		$numero = number_format($decin,$numdec,'.',',');
		return $numero;
	}
}

//Prepara una cadena para imprimirla con echo
function LimpiaCadena($cadena){
	$cadena = trim($cadena);
	$validUTF8 = mb_check_encoding($cadena, 'UTF-8');
	$cadena = ($validUTF8 ? $cadena : utf8_encode($cadena));
	return $cadena;
}

//Prepara una cadena para guardarla en BD, reemplazando los caracteres especiales
function PreparaCadenaABD($cadena){
	$cadena = trim($cadena);
	$validUTF8 = mb_check_encoding($cadena, 'UTF-8');
	$cadena = ($validUTF8 ? $cadena : utf8_decode($cadena));
	return $cadena;
	//https://stackoverflow.com/questions/1523460/ensuring-valid-utf-8-in-php
	// if (!preg_match('%^(?:
  //     [\x09\x0A\x0D\x20-\x7E]              # ASCII
	//     | [\xC2-\xDF][\x80-\xBF]             # non-overlong 2-byte
	//     | \xE0[\xA0-\xBF][\x80-\xBF]         # excluding overlongs
	//     | [\xE1-\xEC\xEE\xEF][\x80-\xBF]{2}  # straight 3-byte
	//     | \xED[\x80-\x9F][\x80-\xBF]         # excluding surrogates
	//     | \xF0[\x90-\xBF][\x80-\xBF]{2}      # planes 1-3
	//     | [\xF1-\xF3][\x80-\xBF]{3}          # planes 4-15
	//     | \xF4[\x80-\x8F][\x80-\xBF]{2}      # plane 16
	// 	)*$%xs', $cadena)) return $cadena;
	// else
  // 	return iconv('UTF-8', 'CP1252', $cadena);
}

//Formatea un entero completándolo con ceros a la izquierda,
//hasta completar la longitud definida en $largo
function FormatoFolio($folio, $largo){
	while( strlen($folio) < $largo ){
		$folio = '0'.$folio;
	}
	return $folio;
}

function genera_id_aleatorio(){
	$random = random_string('alnum', 6);
	$nombre = date("YmdHis")."_".$random;
	return $nombre;
}

//Prepara una cadena para guardarla en BD, validando qué tipo de dato es y escapando si es cadena. Puede recibir un arreglo.
 function escapaDatoParaBD($str){
	 if (is_array($str)){
		 $str = array_map('escapaDatoParaBD', $str);
		 return $str;
	 }
	 elseif (is_string($str) OR (is_object($str) && method_exists($str, '__toString'))) return "'".escapaCadena($str)."'";
	 elseif (is_bool($str)) return ($str === FALSE) ? 0 : 1;
	 elseif ($str === NULL) return 'NULL';

	 return $str;
 }

 //utilizado por la función escapaDatoParaBD, para realizar el escape de una cadena
 function escapaCadena($str){
	 if (is_array($str)){
		 foreach ($str as $key => $val){
			 $str[$key] = escapaCadena($val);
		 }
		 return $str;
	 }
	 $str = str_replace("'", "''", remove_invisible_characters($str, FALSE));
	 return $str;
 }

 function trae_clave_monto($idPrestacion,$idEscolaridad){
	 	$clave = "";
		switch ($idEscolaridad) {
			case '1':
				$clave = ($idPrestacion == 2 ? "BEN_EST_PRIM" : ($idPrestacion == 3 ? "BEN_UTIL_PRIM" : ""));
				break;
			case '2':
				$clave = ($idPrestacion == 2 ? "BEN_EST_SECU" : ($idPrestacion == 3 ? "BEN_UTIL_SECU" : ""));
				break;
			case '3':
				$clave = ($idPrestacion == 2 ? "BEN_EST_PREP" : ($idPrestacion == 3 ? "BEN_UTIL_PREP" : ""));
				break;
			case '4':
			case '5':
			case '6':
			case '7':
				$clave = ($idPrestacion == 2 ? "BEN_EST_LICP" : ($idPrestacion == 3 ? "BEN_UTIL_LICP" : ""));
				break;
			case '9':
				$clave = ($idPrestacion == 2 ? "" : ($idPrestacion == 3 ? "BEN_UTIL_PREE" : ""));
				break;
			default:
				$clave = "";
				break;
		}
		return $clave;
 }

	function diferencia_fechas($fechaini,$fechafin){
		$dias = 0;
		$formatfechaini	= DateTime::createFromFormat('d/m/Y', $fechaini);
		$formatfechafin	= DateTime::createFromFormat('d/m/Y', $fechafin);
		$diferencia = date_diff($formatfechaini,$formatfechafin);
		$dias = $diferencia->format('%d');
		return $dias;
	}

	function agrega_dias_fecha($fecha,$numDias)
	{
		$fechaAgrega = DateTime::createFromFormat('d/m/Y', $fecha)->modify('+ '.($numDias).' days')->format('d/m/Y');
		return $fechaAgrega;
	}

	function convert_to_string_time($num_seconds){
		$seconds = (int)$num_seconds % 60; //error
		$min = floor((float)$num_seconds / 60);
		if ($min == 0) return "{$seconds} seg.";
		else return "{$min} min. + {$seconds} seg.";
		// $dtF = new \DateTime('@0');
    // $dtT = new \DateTime("@$num_seconds");
    // return $dtF->diff($dtT)->format('%i min. + %s seg.');
	}

	/**
	 * función para PHP 5 que se utiliza en lugar de array_column de PHP 7
	 * @method array_columna
	 * @author alopez
	 * @date   2019-08-28
	 * @param  [type]        $array     [description]
	 * @param  [type]        $columnKey [description]
	 * @param  [type]        $indexKey  [description]
	 * @return [type]                   [description]
	 */
	function array_columna($array, $columnKey, $indexKey = null){
		$result = array();
		foreach ($array as $subArray) {
				if (is_null($indexKey) && array_key_exists($columnKey, $subArray)) {
						$result[] = is_object($subArray)?$subArray->$columnKey: $subArray[$columnKey];
				} elseif (array_key_exists($indexKey, $subArray)) {
						if (is_null($columnKey)) {
								$index = is_object($subArray)?$subArray->$indexKey: $subArray[$indexKey];
								$result[$index] = $subArray;
						} elseif (array_key_exists($columnKey, $subArray)) {
								$index = is_object($subArray)?$subArray->$indexKey: $subArray[$indexKey];
								$result[$index] = is_object($subArray)?$subArray->$columnKey: $subArray[$columnKey];
						}
				}
		}
		return $result;
	}

	function array_column_portable($array, $key) {
	  return array_map(function($e) use ($key) {
	      return is_object($e) ? $e->$key : $e[$key];
	  }, $array);
	}

	function get_versiones($sistema=''){
		$sistema = (empty($sistema) ? 'VERSION' : $sistema);
		$path = APPPATH . 'config/versiones.php';
		$cadena = '';
		$handle = @fopen($path, "r");
		if ( $handle ) {
			while (($buffer = fgets($handle, 4096)) !== false) {
				$cadena .= $buffer;
			}
			fclose($handle);
			$patron = "#<\s*?$sistema\b[^>]*>(.*?)</$sistema\b[^>]*>#s";
			preg_match($patron, $cadena, $matches);
			if( $matches ) return $matches[1];
			else return '';
		}
		return NULL;
	}

	function auto_copyright($year = 'auto'){
    if( intval($year) == 'auto' ){ $year = date('Y'); }
    if( intval($year) == date('Y') ){ echo intval($year); }
    if( intval($year) < date('Y') ){ echo intval($year) . ' - ' . date('Y'); }
    if( intval($year) > date('Y') ){ echo date('Y'); }
 }

/**
 * Agrega la versión del archivo (para refrescar el cache cuando se modifique)
 * @method auto_version
 * @author alopez
 * @date
 */
 function auto_version($file)
 {
	 if (file_exists($file)) {
		 $mtime = filemtime($file);
	   return base_url().$file."?v=".$mtime;
	 }
	 else return '';
 }
