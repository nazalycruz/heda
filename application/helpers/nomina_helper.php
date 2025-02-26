<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


function verificar_fechas_periodo($fechaini,$fechafin){
  $valido = false;
  $dia_ini = substr($fechaini,0,2);
  $dia_fin = substr($fechafin,0,2);
  $mes = date('m');
  $anio = date('Y');
  $ultimoDia = getUltimoDiaMes($anio,$mes);

  if ($dia_ini == 1) { //Primera Quincena
    if ($dia_fin == 15) $valido = true;
  }
  else {
    if ($dia_ini == 16) {  //Segunda Quincena
      if ($dia_fin == $ultimoDia) $valido = true;
    }
  }

  return $valido;
}

function AnioBisiesto($anio){
  $esBisiesto = ( ($anio%4==0 && $anio%100!=0  || $anio%400==0) ? true : false );
  return $esBisiesto;
}

function getUltimoDiaMes($anio,$mes) {
  return date("d",(mktime(0,0,0,$mes+1,1,$anio)-1));
}

function obten_tipo_periodo($fecha){
  // $tipoperiodo = 1-quincenal, 2-mensual, pendiente anual
  $tipoperiodo = 0;
  $dia = substr($fecha,0,2);

  if ( $dia == 1 ) $tipoperiodo = 1;
  elseif ( $dia == 16 ) $tipoperiodo = 2;
  else $tipoperiodo = 0;

  return $tipoperiodo;
}
