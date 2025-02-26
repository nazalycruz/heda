<?php if (!defined('BASEPATH')) exit('No permitir el acceso directo al script');

class Calculos_Prestadores {
  protected $CI;

  function __construct(){
		$this->CI = & get_instance();
		$this->CI->load->model('prestadores_modelo','mCalculos');
    $this->CI->load->model('empleado_modelo','mEmpleado');
    $this->CI->load->model('nomina_modelo','mNomina');
	}

  public function borrar_periodo_pago($idPeriodoPago){
    $delPeriodoPago = $this->CI->mCalculos->borra_periodo_pago($idPeriodoPago);
    if ($delPeriodoPago) {
      $ctrlProceso = $this->CI->mCalculos->controlproceso_nomina_prestadores($idPeriodoPago);
      if (!empty($ctrlProceso)) $actualizaProceso = $this->CI->mCalculos->actualiza_proceso_nomina_prestadores(6,$idPeriodoPago,$ctrlProceso->RegsIniciales);
    }

    return $delPeriodoPago;
  }

  public function calcula_nomina_quincenal_prestadores($idPeriodoPago,$idPresupuesto,$registros,$prestadores,$usuario,$confirma)
  {
    set_time_limit(0);
    $procesados = array();
    $cont_error = 0;
    $continuar = false;
    $recalculo = false;

    foreach ($prestadores as $item) {
      $idPrestador = $item->PrestadorID;
      if (version_compare(PHP_VERSION, '7.0', '>=')) $generar = array_search($idPrestador, array_column($registros, '0'));
      else $generar = array_search($idPrestador, array_columna($registros, '0'));
      if ($generar !== false) {
        $this->CI->mCalculos->iniciar_transaccion();
        $regsini = $this->CI->mCalculos->trae_registros_iniciales_prestador($idPrestador,$idPeriodoPago);
        if (!empty($regsini)) {
          $borraNomina = $this->CI->mCalculos->elimina_detalle_nomina_prestador($idPeriodoPago,$idPrestador);
          if ($borraNomina) {
            $calculaQuincena = $this->CI->mCalculos->calcula_quincena_prestador($idPeriodoPago,$idPrestador);
            if ($calculaQuincena != false && $calculaQuincena->Resultado == 1) {
              $continuar = true;
              $procesados[$idPrestador] = array('id' => $idPrestador, 'error' => false, 'msj' => 'Procesado.');
            }
            else{
              $cont_error = $cont_error + 1;
              $procesados[$idPrestador] = array('id' => $idPrestador, 'error' => true, 'msj' => 'Error al generar conceptos quincenal.'.(empty($calculaQuincena->mensaje) ? '' : ' '.$calculaQuincena->mensaje));
              log_message("calculo", "Librería - Calculos_Prestadores/calcula_nomina_quincenal_prestadores(): Error al intentar generar los conceptos, para el prestador: ".$idPrestador);
            }
          }
        } //regini
        else {
          $cont_error = $cont_error + 1;
          $procesados[$idPrestador] = array('id' => $idPrestador, 'error' => true, 'msj' => 'Error: no se han generado los registros iniciales.');
          log_message("calculo", "Librería - Calculos_Prestadores/calcula_nomina_quincenal_prestadores(): Error al procesar, no se han generado los registros iniciales del prestador: ".$idPrestador);
        }
        $this->CI->mCalculos->terminar_transaccion(($continuar == true ? 0 : 1));
      }
    }

    if (count($empleados) == count($registros) || !empty($confirma)) {
      if ($cont_error <= MAXIMOREGISTROSSINPASAR) {
        $recalculo = true;
        $this->CI->mCalculos->actualiza_proceso_nomina(6,$idPeriodoPago,1,1,1,1,1);
      }
      else $this->CI->mCalculos->actualiza_proceso_nomina(6,$idPeriodoPago,1);
    }

    return array('error' => (!$continuar), 'procesados' => $procesados, 'recalculo' => $recalculo);
  }


}
