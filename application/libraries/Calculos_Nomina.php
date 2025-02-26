<?php if (!defined('BASEPATH')) exit('No permitir el acceso directo al script');

class Calculos_Nomina {
  protected $CI;

  function __construct(){
		$this->CI = & get_instance();
		$this->CI->load->model('calculos_modelo','mCalculos');
    $this->CI->load->model('empleado_modelo','mEmpleado');
    $this->CI->load->model('nomina_modelo','mNomina');
	}

  public function obtener_dia_inhabil($credencial,$idEmpleado,$fecha){
    $esFestivo = $this->CI->mCalculos->busca_dia_festivo($fecha);
    $turnosEmpleado = $this->CI->mCalculos->busca_turnoempleado_fecha($idEmpleado,$fecha);

    if( !empty($turnosEmpleado) ) $turno = $turnosEmpleado->turno;
    else{
      $propEmpleado = $this->CI->mEmpleado->traer_generales_empleado($credencial);
      $turno = $propEmpleado->Turno;
    }

    $tmpTurnos = $this->CI->mCalculos->busca_tmp_turnos($turno);

    $fechaformato = DateTime::createFromFormat('d/m/Y', $fecha);
    $diaSemana = $fechaformato->format('w');

    if (strlen($tmpTurnos->descanso) >= $diaSemana) $X = stripos($tmpTurnos->descanso, 'X', $diaSemana);
    else $X = 0;
    $esDescanso = ($diaSemana == $X ? true : false);

    $diaInhabil = ( ($esDescanso || $esFestivo) ? true : false );
    return $diaInhabil;

  }

  private function trae_claveCategoria_fecha($fechaCalculo,$credencial,$proceso='regini'){
    $credencial = FormatoFolio($credencial,5);
    $consultaSISEGE = $this->CI->mCalculos->trae_claveCategoria_fechaSISEGE($fechaCalculo,$credencial);
    if (!isset($consultaSISEGE->error)) {
      $claveCategoria = FormatoFolio($consultaSISEGE->IDNuevaCategoria,3);
      return $claveCategoria;
    }
    else{
      log_message($proceso, 'Calculos_Nomina\trae_claveCategoria_fecha() | Consulta: trae_claveCategoria_fechaSISEGE('.$fechaCalculo.','.$credencial.') | sql: '. $consultaSISEGE->sql);
      return false;
    }
  }

  public function trae_CategoriaID_porFecha($fecha,$credencial,$proceso='regini'){
    $credencial = FormatoFolio($credencial,5);
    $consultaSISEGE = $this->CI->mCalculos->trae_claveCategoria_fechaSISEGE($fecha,$credencial);
    if (!isset($consultaSISEGE->error)) $claveCategoriaSISEGE = FormatoFolio($consultaSISEGE->IDNuevaCategoria,3);
    else {
      log_message($proceso, 'Calculos_Nomina\trae_CategoriaID_porFecha() | Consulta: (trae_claveCategoria_fechaSISEGE('.$fecha.','.$credencial.') | sql: '. $consultaSISEGE->sql);
      $claveCategoriaSISEGE = 0;
    }

    $consultaPJEY = $this->CI->mCalculos->trae_Categoria_por_clave($claveCategoriaSISEGE);
    if (!empty($consultaPJEY)) return $consultaPJEY->Id;
    else {
      log_message($proceso,'Calculos_Nomina\trae_CategoriaID_porFecha() | Consulta: trae_Categoria_por_clave('.$claveCategoriaSISEGE.')');
      return 0;
    }
  }

  public function insertar_registros_iniciales($credencial,$idEmpleado,$idPeriodoPago,$fechaini,$fechafin,$fechafinParam,$diasProcesados,$diasProyectados,$LongPeriodoPago,$NumDiasPeriodoPago){
    $continuar = true;
    $procesados = 0;
    $dia = 0;
    //borra registros iniciales
    // log_message('regini','Empleado: '.$credencial.' | id: '.$idEmpleado);
		try {
	    $this->CI->mCalculos->borrar_regini_empleado($idEmpleado,$idPeriodoPago);

	    $checadasEmpleado = $this->CI->mCalculos->busca_asistencias_empleado($idEmpleado,$fechaini,$fechafin);
	    $checadasEmpleado = (($checadasEmpleado === 0) ? array() : $checadasEmpleado);

	    $fechaIniFormato = DateTime::createFromFormat('d/m/Y', $fechaini);
	    $fechaCalculoFormato = DateTime::createFromFormat('d/m/Y', $fechaini);

			for ($i=0; $i < $diasProcesados; $i++) {
	      if ($continuar) {
	        $fechaCalculo = $fechaCalculoFormato->format('d/m/Y');
	        // $estatusEmpleado = $this->CI->mCalculos->trae_estatus_por_fecha($fechaini,$credencial);
	        $estatusEmpleado = $this->CI->mCalculos->trae_estatus_por_fecha($fechaCalculo,$credencial);
	        $dia = $i + 1;
	        if ($estatusEmpleado != 'I') {
	          // $diaInhabil = $this->obtener_dia_inhabil($credencial,$idEmpleado,$fechaini);
	          $diaInhabil = $this->obtener_dia_inhabil($credencial,$idEmpleado,$fechaCalculo);

	          if ($checadasEmpleado !== false) {
	            if (version_compare(PHP_VERSION, '7.0', '>=') ) $key = array_search($fechaCalculoFormato->format('Y-m-d').' 00:00:00.000', array_column($checadasEmpleado, 'Fecha'));
	            else $key = array_search($fechaCalculoFormato->format('Y-m-d').' 00:00:00.000', array_columna($checadasEmpleado, 'Fecha'));

	            if ($key !== false) {
	              if ($checadasEmpleado[$key]->CategoriaID == '-1') {
	                $ClaveCategoria = $this->trae_claveCategoria_fecha($fechaCalculo,$credencial);
	                if (!empty($ClaveCategoria)) {
	                  $result = $this->CI->mCalculos->inserta_registros_iniciales_porClave($idEmpleado,$ClaveCategoria,$fechaCalculo,0,$idPeriodoPago,$dia,($diaInhabil) ? 1 : 0);
	                  if ($result != true) {
	                    log_message('regini','Proc. 1.1. Error al insertar los registros iniciales para el día: '.$fechaCalculo);
	                    $msj = 'Error al insertar los registros iniciales para el día: '.$fechaCalculo;
	                  }
	                  else $procesados = $procesados + 1;
	                }
									else {
										log_message('regini','Proc. 1.2.1 Error al obtener id de la categoría para el empleado: '.$credencial.', del día: '.$fechaCalculo);
	                  $msj = 'Error al obtener la Categoría para el día: '.$fechaCalculo;
									}
	              }
	              else {
	                $idCategoria = $checadasEmpleado[$key]->CategoriaID;
	                if (!empty($idCategoria)) {
	                  $result = $this->CI->mCalculos->inserta_registros_iniciales($idEmpleado,$idCategoria,$fechaCalculo,0,$idPeriodoPago,$dia,($diaInhabil) ? 1 : 0);
	                  if ($result != true) {
	                    log_message('regini','Proc. 1.2. Error al insertar los registros iniciales para el día: '.$fechaCalculo);
	                    $msj = 'Error al insertar los registros iniciales para el día: '.$fechaCalculo;
	                  }
	                  else $procesados = $procesados + 1;
	                }
	                else {
	                  log_message('regini','Proc. 1.2.2 Error al obtener id de la categoría para el empleado: '.$credencial.', del día: '.$fechaCalculo);
	                  $msj = 'Error al obtener la Categoría para el día: '.$fechaCalculo;
	                }
	              }
	            }
	            else {
	              $ClaveCategoria = $this->trae_claveCategoria_fecha($fechaCalculo,$credencial);
	              if (!empty($ClaveCategoria)) {
	                $result = $this->CI->mCalculos->inserta_registros_iniciales_porClave($idEmpleado,$ClaveCategoria,$fechaCalculo,0,$idPeriodoPago,$dia,($diaInhabil) ? 1 : 0);
	                if ($result != true) {
	                  log_message('regini','Proc. 1.3. Error al insertar los registros iniciales para el día: '.$fechaCalculo);
	                  $msj = 'Error al insertar los registros iniciales para el día: '.$fechaCalculo;
	                }
	                else $procesados = $procesados + 1;
	              }
	              else {
	                log_message('regini','Proc. 1.3. Error al obtener la clave de la categoría para el empleado: '.$credencial.', del día: '.$fechaCalculo);
	                $msj = 'Error al obtener la Categoría para el día: '.$fechaCalculo;
	              }
	            }
	          }
	        }
	        $fechaCalculoFormato = $fechaCalculoFormato->modify('+1 day');
	      }
	    }

	    $fechainiProyeccion = $fechaIniFormato->modify('+'.$diasProcesados.' days');
	    $fechaCalculo = $fechainiProyeccion->format('d/m/Y');

	    if ($LongPeriodoPago == $NumDiasPeriodoPago) {
	      for ($i=0; $i < $diasProyectados; $i++) {
	        if ($continuar) {
	          $diaInhabil = $this->obtener_dia_inhabil($credencial,$idEmpleado,$fechaCalculo);
	          $estatusEmpleado = $this->CI->mCalculos->trae_estatus_por_fecha($fechaCalculo,$credencial);
	          $DiaComplemento = $dia + $i + 1;

	          if ($estatusEmpleado != 'I') {
	            $fechaCalculo = $fechainiProyeccion->format('d/m/Y');

	            $ClaveCategoria = $this->trae_claveCategoria_fecha($fechaCalculo,$credencial);
	            if (!empty($ClaveCategoria)) {
	              $result = $this->CI->mCalculos->inserta_registros_iniciales_porClave($idEmpleado,$ClaveCategoria,$fechaCalculo,1,$idPeriodoPago,$DiaComplemento,($diaInhabil) ? 1 : 0);
	              if ($result != true) {
	                log_message('regini','Proc. 2. Error al insertar los registros iniciales para el día:'.$fechaCalculo);
	                $msj = 'Error al insertar los registros iniciales para el día:'.$fechaCalculo;
	              }
	              else $procesados = $procesados + 1;
	            }
	            else {
	              log_message('regini','Proc. 2.1. Error al obtener la clave de la categoría para el empleado: '.$credencial.', del día: '.$fechaCalculo);
	              $msj = 'Error al obtener la Categoría para el día: '.$fechaCalculo;
	            }
	          }
	          $fechainiProyeccion = $fechainiProyeccion->modify('+1 day');
	        }
	      }

	    }
	    else {
	      if ($LongPeriodoPago < $NumDiasPeriodoPago) {
	        for ($i=0; $i < $diasProyectados; $i++) {
	          if ($continuar) {
	            $fechaCalculo = $fechainiProyeccion->format('d/m/Y');
	            $estatusEmpleado = $this->CI->mCalculos->trae_estatus_por_fecha($fechaCalculo,$credencial);
	            $DiaComplemento = $dia + $i + 1;
	            if ($estatusEmpleado != 'I') {
	              $diaInhabil = $this->obtener_dia_inhabil($credencial,$idEmpleado,$fechaCalculo);
	              $ClaveCategoria = $this->trae_claveCategoria_fecha($fechaCalculo,$credencial);
	              if (!empty($ClaveCategoria)) {
	                $result = $this->CI->mCalculos->inserta_registros_iniciales_porClave($idEmpleado,$ClaveCategoria,$fechaCalculo,1,$idPeriodoPago,$DiaComplemento,($diaInhabil) ? 1 : 0);
	                if ($result != true) {
	                  log_message('regini','Proc. 3. Error al insertar los registros iniciales para el día:'.$fechaCalculo);
	                  $msj = 'Error al insertar los registros iniciales para el día:'.$fechaCalculo;
	                }
	                else $procesados = $procesados + 1;
	              }
	              else {
	                log_message('regini','Proc. 3.1. Error al obtener la clave de la categoría para el empleado: '.$credencial.', del día: '.$fechaCalculo);
	                $msj = 'Error al obtener la Categoría para el día: '.$fechaCalculo;
	              }
	            }
	            if (DateTime::createFromFormat('d/m/Y', $fechaCalculo) < DateTime::createFromFormat('d/m/Y', $fechafinParam)) $fechainiProyeccion = $fechainiProyeccion->modify('+1 day');
	          }
	        }
	        // Complemento para los reg. 14 o 14 y 15 según el último día del mes de febrero
	        if ($continuar) {
	          switch ( $fechainiProyeccion->format('j') ) {
	            case '1':
	              $fechainiProyeccion = $fechainiProyeccion->modify('-1 day');
	              if ($fechainiProyeccion->format('j') == '29') $DiaComplemento = 14;
	              else $DiaComplemento = 13;
	              break;
	            case '29': //si es 29 entonces la cat. del reg. 15 será igual al día 29 (reg. 14)
	              $DiaComplemento = 14;
	              break;
	            case '28': //si es 28 el último día los registros 14 y 15 tiene la cat del día 28(reg 13)
	              $DiaComplemento = 13;
	              break;
	            default:
	              break;
	          }

	          $DiaComplemento = $DiaComplemento + 1;
	          $fechaCalculo = $fechainiProyeccion->format('d/m/Y');
	          while ($DiaComplemento < 16 && $continuar) {
							if (!empty($ClaveCategoria)) {
								$diaInhabil = $this->obtener_dia_inhabil($credencial,$idEmpleado,$fechaCalculo);
	              $result = $this->CI->mCalculos->inserta_registros_iniciales_porClave($idEmpleado,$ClaveCategoria,$fechaCalculo,1,$idPeriodoPago,$DiaComplemento,($diaInhabil) ? 1 : 0);
	              if (empty($result['status'])) {
	                log_message('regini','Proc. 4. Error al insertar los registros iniciales para el día:'.$fechaCalculo);
	                $msj = 'Error al insertar los registros iniciales para el día:'.$fechaCalculo;
	              }
	              else {
									if ($result['rows'] > 0) $procesados = $procesados + 1;
								}
								$DiaComplemento = $DiaComplemento + 1;
							}
							else {
								log_message('regini','Proc. 4.1. Error al obtener la clave de la categoría para el empleado: '.$credencial.', del día: '.$fechaCalculo);
								$msj = 'Error al obtener la Categoría para el día: '.$fechaCalculo;
								$continuar = false;
							}
	          }
	        }
	      }
	      else {
	        // para meses con día 31
	        for ($i=0; $i < $diasProyectados; $i++) {
	          if ($continuar) {
	            $fechaCalculo = $fechainiProyeccion->format('d/m/Y');
	            $estatusEmpleado = $this->CI->mCalculos->trae_estatus_por_fecha($fechaCalculo,$credencial);
	            $DiaComplemento = $dia + $i + 1;
	            if ($estatusEmpleado != 'I') {
	              $fechaCalculo = $fechainiProyeccion->format('d/m/Y');
	              $diaInhabil = $this->obtener_dia_inhabil($credencial,$idEmpleado,$fechaCalculo);
	              $ClaveCategoria = $this->trae_claveCategoria_fecha($fechaCalculo,$credencial);
	              if (!empty($ClaveCategoria)) {
	                $result = $this->CI->mCalculos->inserta_registros_iniciales_porClave($idEmpleado,$ClaveCategoria,$fechaCalculo,1,$idPeriodoPago,$DiaComplemento,($diaInhabil) ? 1 : 0);
	                if ($result != true) {
	                  log_message('regini','Proc. 5. Error al insertar los registros iniciales para el día:'.$fechaCalculo);
	                  $msj = 'Error al insertar los registros iniciales para el día:'.$fechaCalculo;
	                }
	                else $procesados = $procesados + 1;
	              }
	              else {
	                log_message('regini','Proc. 5.1. Error al obtener la clave de la categoría para el empleado: '.$credencial.', del día: '.$fechaCalculo);
	                $msj = 'Error al obtener la Categoría para el día: '.$fechaCalculo;
	              }
	              $fechainiProyeccion = $fechainiProyeccion->modify('+1 day');
	            }
	          }
	        }
	      }
	    }
		}
		catch(Exception $e){
			log_message("error", "Librería - Calculos_Nomina: ".$e->getMessage());
		}

    if ($continuar == false) return array('dias' => $procesados, 'error' => true, 'msj_error' => $msj);
    else return array('dias' => $procesados, 'error' => false);
  }

  /**
   * [Función que calcula la quincena de un grupo de empleados (función ACTUAL)]
   * @method calcula_nomina_quincenal
   * @author alopez
   * @date   2020-03-11
   * @param  [type]                   $idPeriodoPago [description]
   * @param  [type]                   $idPresupuesto [description]
   * @param  [type]                   $registros     [description]
   * @param  [type]                   $empleados     [description]
   * @return [type]                                  [description]
   */
  public function calcula_nomina_quincenal($idPeriodoPago,$idPresupuesto,$tipoperiodo,$registros,$empleados,$usuario,$confirma,$fechaini,$tipoCalculo){
    set_time_limit(0);
    $msj = '';
    $procesados = array();
    $configurados = array();
    $cont_error = 0;
    $continuar = false;
    $recalculo = false;

    try {
      $configura_cumples = $this->CI->mCalculos->configurar_bono_cumples($idPeriodoPago,$idPresupuesto);
      $calculaPagoEspecial = $this->CI->mCalculos->valida_existe_pagoEspecial($idPeriodoPago,$idPresupuesto);
      foreach ($registros as $item) {
        $idEmpleado = $item[0];
        if (version_compare(PHP_VERSION, '7.0', '>=')) $generar = array_search($idEmpleado, array_column($empleados, 'EmpleadoID'));
        else $generar = array_search($idEmpleado, array_columna($empleados, 'EmpleadoID'));
        if ($generar !== false) {
					$validaCalculado = $this->CI->mCalculos->empleados_calculados_porFechaIni($fechaini,$idPeriodoPago,$idEmpleado);
					if (empty($validaCalculado)) {
						$this->CI->mCalculos->iniciar_transaccion();
	          $continuar = false;
	          $regsini = $this->CI->mCalculos->trae_registros_iniciales_empleado($idEmpleado,$idPeriodoPago);
	          if (!empty($regsini)) {
	            $borraNomina = $this->CI->mCalculos->elimina_detalle_nomina_empleado($idPeriodoPago,$idEmpleado);
	            if ($borraNomina) {
	              $generaConc = $this->CI->mCalculos->genera_conceptos_quincena_empleado($idPeriodoPago,$idEmpleado,$usuario);
	              if ($calculaPagoEspecial) {
	                $generaConc = $this->CI->mCalculos->calcula_pagos_especiales_empleado($idPresupuesto,$idPeriodoPago,$idEmpleado,$usuario);
	              }
	              if ($generaConc != false) {
	                $calcImpuestos = $this->CI->mCalculos->calcula_ISR_periodo($idEmpleado,$idPeriodoPago,$tipoperiodo,$idPresupuesto,$tipoCalculo);

	                if ($calcImpuestos != false) {
	                  $insertaDetalle = $this->CI->mCalculos->volca_conceptos_nomina($idPeriodoPago,$idEmpleado);

	                  if ($insertaDetalle) {
	                    $aportISSTEY = $this->CI->mCalculos->insertar_aportaciones_isstey($idPeriodoPago,$idEmpleado);
	                    if ($aportISSTEY) {
	                      $continuar = true;
	                      $configurado = $this->CI->mEmpleado->obtiene_configurados_enomina($idPresupuesto,$idEmpleado);
	                      $procesados[$idEmpleado] = array('id' => $idEmpleado, 'error' => false, 'msj' => 'Procesado', 'configurado' => (empty($configurado) ? false : true));
	                    }
	                    else {
	                      $cont_error = $cont_error + 1;
	                      $procesados[$idEmpleado] = array('id' => $idEmpleado, 'error' => true, 'msj' => 'Error al procesar las aportaciones del ISSTEY.');
	                      log_message("calculo", "Librería - Calculos_Nomina/calcula_nomina_quincenal(): Error al procesar las aportaciones del ISSTEY, para el empleado: ".$idEmpleado);
	                    }
	                  }
	                  else {
	                    $cont_error = $cont_error + 1;
	                    $procesados[$idEmpleado] = array('id' => $idEmpleado, 'error' => true, 'msj' => 'Error al volcar conceptos.');
	                    log_message("calculo", "Librería - Calculos_Nomina/calcula_nomina_quincenal(): Error al volcar conceptos, para el empleado: ".$idEmpleado);
	                  }
	                }
	                else {
	                  $cont_error = $cont_error + 1;
	                  $procesados[$idEmpleado] = array('id' => $idEmpleado, 'error' => true, 'msj' => 'Error al calcular los impuestos. Error: '.(empty($calcImpuestos->Mensaje) ? '' : ' '.$calcImpuestos->Mensaje));
	                  log_message("calculo", "Librería - Calculos_Nomina/calcula_nomina_quincenal(): Error al calcular los impuesto, para el empleado: ".$idEmpleado." - Error: ".(empty($calcImpuestos->Mensaje) ? '' : ' '.$calcImpuestos->Mensaje));
	                }
	              }
	              else {
	                $cont_error = $cont_error + 1;
	                $procesados[$idEmpleado] = array('id' => $idEmpleado, 'error' => true, 'msj' => 'Error al generar conceptos quincenal. Error: '.(empty($generaConc->mensaje) ? '' : ' '.$generaConc->mensaje));
	                log_message("calculo", "Librería - Calculos_Nomina/calcula_nomina_quincenal(): Error al intentar generar los conceptos, para el empleado: ".$idEmpleado);
	              }
	            }
	            else {
	              $cont_error = $cont_error + 1;
	              $procesados[$idEmpleado] = array('id' => $idEmpleado, 'error' => true, 'msj' => 'Error: no fue posible eliminar la nómina.');
	              $msj = 'Cálculo de Conceptos de Nómina completado. '.$cont_error.' empleados no fueron procesados.';
	              log_message("calculo", "Librería - Calculos_Nomina/calcula_nomina_quincenal(): Error al procesar, no fue posible eliminar la nómina del empleado: ".$idEmpleado);
	            }
	          }
	          else {
	            // $cont_error = $cont_error + 1;
	            $procesados[$idEmpleado] = array('id' => $idEmpleado, 'error' => true, 'msj' => 'Error: no se han generado los registros iniciales.');
	            log_message("calculo", "Librería - Calculos_Nomina/calcula_nomina_quincenal(): Error al procesar, no se han generado los registros iniciales del empleado: ".$idEmpleado);
	          }

	          $this->CI->mCalculos->terminar_transaccion(($continuar == true ? 0 : 1));
					}
					else {
						$cont_error = $cont_error + 1;
						$procesados[$idEmpleado] = array('id' => $idEmpleado, 'error' => true, 'msj' => 'Error: el empleado ya fue calculado en otro presupuesto.');
						$msj = 'Cálculo de Conceptos de Nómina completado. '.$cont_error.' empleados no fueron procesados.';
						log_message("calculo", "Librería - Calculos_Nomina/calcula_nomina_quincenal(): Error al procesar, el empleado tiene un cálculo realizado en otro presupuesto: ".$idEmpleado);
					}
        }
        else {
          $cont_error = $cont_error + 1;
          $procesados[$idEmpleado] = array('id' => $idEmpleado, 'error' => true, 'msj' => 'Error: no se encontró información del empleado.');
          $msj = 'Cálculo de Conceptos de Nómina completado. '.$cont_error.' empleados no fueron procesados.';
          log_message("calculo", "Librería - Calculos_Nomina/calcula_nomina_quincenal(): Error al procesar, no se encontró información del empleado: ".$idEmpleado);
        }
      }
    }
    catch(Exception $e){
      $continuar = false;
      $this->CI->mCalculos->terminar_transaccion(1);
      $msj = $e->getMessage();
      log_message("error", "Librería - Calculos_Nomina()/calcula_nomina_quincenal(): ".$e->getMessage());
    }
    if (count($empleados) == count($registros) || !empty($confirma)) {
      if ($cont_error <= count($registros) * (MAXIMOREGISTROSSINPASAR / 100)) {
        $recalculo = true;
        $this->CI->mCalculos->actualiza_proceso_nomina(6,$idPeriodoPago,1,1,1,1,1);
      }
      else {
        $this->CI->mCalculos->actualiza_proceso_nomina(6,$idPeriodoPago,1);
        $msj = 'Cálculo de Conceptos de Nómina completado. '.$cont_error.' empleado(s) no fue(ron) procesado(s).';
        log_message("calculo", "Librería - Calculos_Nomina/calcula_nomina_quincenal(): ".$cont_error." empleados no fueron procesados.");
      }
    }

    return array('error' => (!$continuar), 'procesados' => $procesados, 'recalculo' => $recalculo, 'msj' => $msj, 'noProcesados' => $cont_error);
  }

  /**
   * [Función que calcula la quincena de un empleado (función ACTUAL)]
   * @method calcular_nomina_por_empleado
   * @author alopez
   * @date   2020-03-23
   * @param  [type]                       $idEmpleado    [description]
   * @param  [type]                       $idPeriodoPago [description]
   * @param  [type]                       $idPresupuesto [description]
   * @param  [type]                       $tipoperiodo   [description]
   * @param  [type]                       $usuario       [description]
   * @return [type]                                      [description]
   */
	public function calcular_nomina_por_empleado($idEmpleado,$idPeriodoPago,$idPresupuesto,$tipoperiodo,$usuario,$fechaini,$tipoCalculo){
    $continuar = false;
		$this->CI->mCalculos->iniciar_transaccion();
    $borraNomina = $this->CI->mCalculos->elimina_detalle_nomina_empleado($idPeriodoPago,$idEmpleado);
    if ($borraNomina) {
      $generaConc = $this->CI->mCalculos->genera_conceptos_quincena_empleado($idPeriodoPago,$idEmpleado,$usuario);
      $calculaPagoEspecial = $this->CI->mCalculos->valida_existe_pagoEspecial($idPeriodoPago,$idPresupuesto);
      if ($calculaPagoEspecial) {
        $generaConc = $this->CI->mCalculos->calcula_pagos_especiales_empleado($idPresupuesto,$idPeriodoPago,$idEmpleado,$usuario);
      }

      if ($generaConc != false && $generaConc->Resultado == 1) {
        $calcImpuestos = $this->CI->mCalculos->calcula_ISR_periodo($idEmpleado,$idPeriodoPago,$tipoperiodo,$idPresupuesto,$tipoCalculo);

        if ($calcImpuestos) {
          $insertaDetalle = $this->CI->mCalculos->volca_conceptos_nomina($idPeriodoPago,$idEmpleado);

          if ($insertaDetalle){
            $aportISSTEY = $this->CI->mCalculos->insertar_aportaciones_isstey($idPeriodoPago,$idEmpleado);
            if ($aportISSTEY) $continuar = true;
          }
          else log_message("error", "Calculos_Nomina/calcular_nomina_por_empleado. Error al insertar el detalle, idempleado: ".$idEmpleado);
        }
        else log_message("error", "Calculos_Nomina/calcular_nomina_por_empleado. Error al calcular impuestos, idempleado: ".$idEmpleado);
      }
      else log_message("error", "Calculos_Nomina/calcular_nomina_por_empleado. Error al Generar los conceptos quincenales, idempleado: ".$idEmpleado);
    }
    $this->CI->mCalculos->terminar_transaccion(($continuar == true ? 0 : 1));

    return $continuar;
  }

  public function calcula_ISR_periodo($idEmpleado,$idPeriodoPago){
    $conceptos = $this->mNomina->busca_conf_conceptos_empleado($idEmpleado,$idPeriodoPago);
    foreach ($conceptos as $key => $value) {
      // code...
    }
  }

   /**
    * Realiza el cálculo de los siguientes conceptos: Antes de Impuestos, Impuestos, Después de Impuestos, ISSTEY.
    * @method aplicar_conceptos_nomina
    * @author alopez
    * @date   2019-11-19
    * @param  [type]                   $idPeriodoPago [description]
    * @param  [type]                   $idPresupuesto [description]
    * @param  [type]                   $registros     [description]
    * @param  [type]                   $empleados     [description]
    * @return [type]                                  [description]
    */
  public function aplicar_conceptos_nomina($idPeriodoPago,$idPresupuesto,$registros,$empleados){
    set_time_limit(0);
    $procesados = array();
    $cont_error = 0;
    $continuar = false;
    $recalculo = false;

    foreach ($empleados as $item) {
      $idEmpleado = $item->EmpleadoID;
      if ( version_compare(PHP_VERSION, '7.0', '>=') ) $generar = array_search($idEmpleado, array_column($registros, '0'));
      else $generar = array_search($idEmpleado, array_columna($registros, '0'));

      if( $generar !== false ){

        $this->CI->mCalculos->iniciar_transaccion();

        $regsini = $this->CI->mCalculos->trae_registros_iniciales_empleado($idEmpleado,$idPeriodoPago);
        if( !empty($regsini) ){

          $borraNomina = $this->CI->mCalculos->elimina_detalle_nomina_empleado($idPeriodoPago,$idEmpleado);

          if( $borraNomina ){
            $antesimp = $this->CI->mCalculos->calcula_conceptos_detnomina_empleado($idPeriodoPago,$idEmpleado,true);
            $calcAguinaldo = $this->CI->mCalculos->calcula_aguinaldos_empleado($idEmpleado,$idPresupuesto);

            if( $antesimp && $calcAguinaldo ){
              $impuestos = $this->CI->mCalculos->obtener_impuestos_periodo($idPeriodoPago,$idEmpleado);
              $insImpuestos = $this->CI->mCalculos->insertar_impuestos_tipoNomina($idPeriodoPago,$idEmpleado);

              if( $impuestos && $insImpuestos ){
                $despimp = $this->CI->mCalculos->calcula_conceptos_detnomina_empleado($idPeriodoPago,$idEmpleado,false);

                if( $despimp ){
                  $aportISSTEY = $this->CI->mCalculos->insertar_aportaciones_isstey($idPeriodoPago,$idEmpleado);
                  if( $aportISSTEY ){
                    $continuar = true;
                    $procesados[$idEmpleado] = array('id' => $idEmpleado, 'error' => false, 'msj' => 'Procesado');
                  }
                  else{
                    $cont_error = $cont_error + 1;
                    $procesados[$idEmpleado] = array('id' => $idEmpleado, 'error' => true, 'msj' => 'Error: proceso aportaciones ISSTEY.');
                    log_message("error", "Librería - Calculos_Nomina/aplicar_conceptos_nomina(): Error al procesar las aportaciones del ISSTEY, para el empleado: ".$idEmpleado);
                  }
                }
                else{
                  $cont_error = $cont_error + 1;
                  $procesados[$idEmpleado] = array('id' => $idEmpleado, 'error' => true, 'msj' => 'Error: proceso después de impuestos.');
                  log_message("error", "Librería - Calculos_Nomina/aplicar_conceptos_nomina(): Error al procesar los conceptos después de impuestos, para el empleado: ".$idEmpleado);
                }
              }
              else{
                $cont_error = $cont_error + 1;
                $procesados[$idEmpleado] = array('id' => $idEmpleado, 'error' => true, 'msj' => 'Error: proceso de impuestos.');
                log_message("error", "Librería - Calculos_Nomina/aplicar_conceptos_nomina(): Error al procesar los impuestos, para el empleado: ".$idEmpleado);
              }
            }
            else{
              $cont_error = $cont_error + 1;
              $procesados[$idEmpleado] = array('id' => $idEmpleado, 'error' => true, 'msj' => 'Error: proceso antes de impuestos.');
              log_message("error", "Librería - Calculos_Nomina/aplicar_conceptos_nomina(): Error al procesar los conceptos antes de impuestos, para el empleado: ".$idEmpleado);
            }
          }
          else{
            $cont_error = $cont_error + 1;
            $procesados[$idEmpleado] = array('id' => $idEmpleado, 'error' => true, 'msj' => 'Error: eliminar detalle de nómina.');
            log_message("error", "Librería - Calculos_Nomina/aplicar_conceptos_nomina(): Error al eliminar el detalle de nómina del empleado: ".$idEmpleado);
          }
        }
        else{
          $cont_error = $cont_error + 1;
          $procesados[$idEmpleado] = array('id' => $idEmpleado, 'error' => true, 'msj' => 'Error: no se han generado los registros iniciales.');
          log_message("error", "Librería - Calculos_Nomina/aplicar_conceptos_nomina(): Error al procesar, no se han generado los registros iniciales del empleado: ".$idEmpleado);
        }

        $this->CI->mCalculos->terminar_transaccion(($continuar == true ? 0 : 1));
      }
    }

    if( count($empleados) == count($registros) ){
      if ($cont_error <= count($registros) * (MAXIMOREGISTROSSINPASAR / 100)) {
        $recalculo = true;
        $this->CI->mCalculos->actualiza_proceso_nomina(6,$idPeriodoPago,1,1,1,1,1);
      }
      else $this->CI->mCalculos->actualiza_proceso_nomina(6,$idPeriodoPago,1);
    }

    return array('error' => false, 'procesados' => $procesados, 'recalculo' => $recalculo);
  }

  public function borrar_periodo_pago($idPeriodoPago){
    $delPeriodoPago = $this->CI->mCalculos->borra_periodo_pago($idPeriodoPago);

    if( $delPeriodoPago ){
      $ctrlProceso = $this->CI->mCalculos->busca_controlproceso_nomina($idPeriodoPago);
      if( !empty($ctrlProceso) ) $actualizaProceso = $this->CI->mCalculos->actualiza_proceso_nomina(6,$idPeriodoPago,$ctrlProceso->RegsIniciales);
    }

    return $delPeriodoPago;
  }

  // public function calcular_nomina_por_empleado($idEmpleado,$idPeriodoPago,$idPresupuesto){
  //   $continuar = false;
  //   $this->CI->mCalculos->iniciar_transaccion();
  //
  //   $borraNomina = $this->CI->mCalculos->elimina_detalle_nomina_empleado($idPeriodoPago,$idEmpleado);
  //
  //   if( $borraNomina ){
  //     $antesimp = $this->CI->mCalculos->calcula_conceptos_detnomina_empleado($idPeriodoPago,$idEmpleado,true);
  //     $calcAguinaldo = $this->CI->mCalculos->calcula_aguinaldos_empleado($idEmpleado,$idPresupuesto);
  //
  //     if( $antesimp && $calcAguinaldo ){
  //       $impuestos = $this->CI->mCalculos->obtener_impuestos_periodo($idPeriodoPago,$idEmpleado);
  //       $insImpuestos = $this->CI->mCalculos->insertar_impuestos_tipoNomina($idPeriodoPago,$idEmpleado);
  //
  //       if( $impuestos && $insImpuestos ){
  //         $despimp = $this->CI->mCalculos->calcula_conceptos_detnomina_empleado($idPeriodoPago,$idEmpleado,false);
  //
  //         if( $despimp ){
  //           $aportISSTEY = $this->CI->mCalculos->insertar_aportaciones_isstey($idPeriodoPago,$idEmpleado);
  //           if( $aportISSTEY ) $continuar = true;
  //         }
  //       }
  //     }
  //   }
  //
  //   $this->CI->mCalculos->terminar_transaccion(($continuar == true ? 0 : 1));
  //   return $continuar;
  // }

  /**
   * [ajusta_sueldo_empleado description]
   * @method ajusta_sueldo_empleado
   * @author alopez
   * @param  [type]                 $idEmpleado    [description]
   * @param  [type]                 $idPeriodoPago [description]
   * @param  string                 $percepciones  [description]
   * @param  string                 $deducciones   [description]
   * @param  [type]                 $tipoperiodo   [description]
   * @param  [type]                 $usuario       [description]
   * @return [type]                                [description]
   */
  public function ajusta_sueldo_empleado($idTipoNomina,$idEmpleado,$idPeriodoPago,$percepciones='',$deducciones='',$tipoperiodo='',$usuario='',$idPresupuesto=0){
    $continuar = true;
    $actualizaper = true;
    $actualizaded = true;
    $this->CI->mCalculos->iniciar_transaccion();

    if (!empty($percepciones)) {
      for ($i=0; $i < count($percepciones); $i++) {
        if ($actualizaper && $continuar) {
          if (isset($percepciones[$i]['MontoPerc'])) {
            if ($percepciones[$i]['MontoPerc'] > 0) $actualizaper = $this->CI->mCalculos->actualiza_concepto_quincenales($idEmpleado,$idPeriodoPago,$percepciones[$i]['idCategoria'],$percepciones[$i]['idConcepto'],$percepciones[$i]['MontoPerc']);
            //else $actualizaper = $this->CI->mCalculos->elimina_concepto_detnomina($idEmpleado,$idPeriodoPago,$percepciones[$i]['idCategoria'],$percepciones[$i]['idConcepto']);
          }
          $continuar = $actualizaper;
        }
      }
      if ($actualizaper) {
        // $borraTipoNomina = $this->CI->mCalculos->borra_tiponomina_quincena_empleado($idTipoNomina,$idPeriodoPago,$idEmpleado);
        // $generaConc = $this->CI->mCalculos->genera_conceptos_quincena_empleado($idPeriodoPago,$idEmpleado,$usuario,1);
        $calculaPagoEspecial = $this->CI->mCalculos->valida_existe_pagoEspecial($idPeriodoPago,$idPresupuesto);
        if ($calculaPagoEspecial) {
          $generaConc = $this->CI->mCalculos->calcula_pagos_especiales_empleado($idPresupuesto,$idPeriodoPago,$idEmpleado,$usuario);
        }
        $calcImpuestos = $this->CI->mCalculos->calcula_ISR_periodo($idEmpleado,$idPeriodoPago,$tipoperiodo,$idPresupuesto);
        $insertaDetalle = $this->CI->mCalculos->volca_conceptos_nomina($idPeriodoPago,$idEmpleado);
        $aportISSTEY = $this->CI->mCalculos->insertar_aportaciones_isstey($idPeriodoPago,$idEmpleado);
        if ($calcImpuestos && $insertaDetalle && $aportISSTEY) $continuar = true;
      }
      else $continuar = false;
    }

    if (!empty($deducciones) && $continuar) {
      for ($i=0; $i < count($deducciones); $i++) {
        if ($actualizaded && $continuar) {
          if (!in_array($deducciones[$i]['idConcepto'], array(70,71,72,73,74,46,214,218,216,217))) {
            if (isset($deducciones[$i]['MontoDeduc']) && $deducciones[$i]['MontoDeduc'] > 0) {
              $actualizaded = $this->CI->mCalculos->actualiza_concepto_detNomina($idEmpleado,$idPeriodoPago,$deducciones[$i]['idCategoria'],$deducciones[$i]['idConcepto'],$deducciones[$i]['MontoDeduc']);
              //else $actualizaded = $this->CI->mCalculos->elimina_concepto_detnomina($idEmpleado,$idPeriodoPago,$deducciones[$i]['idCategoria'],$deducciones[$i]['idConcepto']);
            }
          }
          $continuar = $actualizaded;
        }
      }
      if (!$actualizaded) $continuar = false;
    }

    $this->CI->mCalculos->terminar_transaccion(($continuar == true ? 0 : 1));

    if ($continuar == false) log_message('error', 'Librería - Calculos_Nomina/ajusta_sueldo_empleado(): Error al intentar realizar el ajuste de nómina del empleado: '.$idEmpleado);

    return $continuar;
  }

  /**
   * Genera conceptos para antes y después de impuestos.
   * @method procesar_impuestos
   * @author alopez
   * @date   2019-10-07
   * @param  [type]             $AntesImpuestos [description]
   * @param  [type]             $idPeriodoPago  [description]
   * @param  [type]             $idPresupuesto  [description]
   * @param  [type]             $registros      [description]
   * @return [type]                             [description]
   */
  // public function procesar_impuestos($AntesImpuestos,$idPeriodoPago,$idPresupuesto,$registros){
  //   set_time_limit(0);
  //   $procesados = array();
  //   $continuar = true;
  //
  //   $this->CI->mCalculos->iniciar_transaccion();
  //
  //   $empleados = $this->CI->mCalculos->trae_empleados_gennomina($idPeriodoPago);
  //
  //   if( !empty($empleados) ){
  //     foreach ($empleados as $item) {
  //       $idEmpleado = $item->EmpleadoID;
  //       if ( version_compare(PHP_VERSION, '7.0', '>=') ) $generar = array_search($idEmpleado, array_column($registros, '0'));
  //       else $generar = array_search($idEmpleado, array_columna($registros, '0'));
  //
  //       if( $generar !== false ){
  //         $calculo = $this->CI->mCalculos->calcula_conceptos_detnomina_empleado($idPeriodoPago,$idEmpleado,$AntesImpuestos);
  //         $calcAguinaldo = true;
  //
  //         if( $AntesImpuestos ) $calcAguinaldo = $this->CI->mCalculos->calcula_aguinaldos_empleado($idEmpleado,$idPresupuesto);
  //
  //         if( $calculo && $calcAguinaldo ) array_push($procesados,$idEmpleado);
  //         else log_message("error", "Librería - Calculos_Nomina/procesar_impuestos(): Error en el proceso ".($AntesImpuestos ? 'Antes de Impuestos' : 'Después de Impuestos').", para el empleado: ".$idEmpleado);
  //       }
  //
  //     }
  //
  //     if( count($empleados) == count($registros) ){
  //       if( $AntesImpuestos ) $this->CI->mCalculos->actualiza_proceso_nomina(2,$idPeriodoPago,0,1);
  //       else $this->CI->mCalculos->actualiza_proceso_nomina(4,$idPeriodoPago,0,0,0,1);
  //     }
  //   }
  //   else{
  //     $continuar = false;
  //     $msj = 'No existen empleados para generar conceptos '.($AntesImpuestos ? 'antes de impuestos.' : 'después de Impuestos.');
  //   }
  //
  //   $this->CI->mCalculos->terminar_transaccion(($continuar == true ? 0 : 1));
  //
  //   if( $continuar == false ) return array('error' => true, 'msj' => $msj);
  //   else return array('error' => false, 'procesados' => $procesados);
  //
  // }

/**
 * Genera los conceptos de impuestos
 * @method aplicar_impuestos
 * @author alopez
 * @date   2019-10-07
 * @param  [type]            $idPeriodoPago [description]
 * @param  [type]            $registros     [description]
 * @return arreglo con los registros procesados
 */
  // public function aplicar_impuestos($idPeriodoPago,$registros){
  //   set_time_limit(0);
  //   $procesados = array();
  //   $continuar = true;
  //   $empleados = $this->CI->mCalculos->trae_empleados_en_nomina($idPeriodoPago);
  //   if( !empty($empleados) ){
  //     foreach ($empleados as $item) {
  //       $idEmpleado = $item->id_empleado;
  //       if ( version_compare(PHP_VERSION, '7.0', '>=') ) $generar = array_search($idEmpleado, array_column($registros, '0'));
  //       else $generar = array_search($idEmpleado, array_columna($registros, '0'));
  //
  //       if( $generar !== false ){
  //         $impuestos = $this->CI->mCalculos->obtener_impuestos_periodo($idPeriodoPago,$idEmpleado);
  //         $insImpuestos = $this->CI->mCalculos->insertar_impuestos_tipoNomina($idPeriodoPago,$idEmpleado);
  //
  //         if( $impuestos && $insImpuestos ) array_push($procesados,$idEmpleado);
  //         else log_message("error", "Librería - Calculos_Nomina/procesar_impuestos(): Error al procesar empleado: ".$idEmpleado);
  //       }
  //     }
  //
  //     if( count($empleados) == count($registros) ){
  //       $this->CI->mCalculos->actualiza_proceso_nomina(3,$idPeriodoPago,0,0,1);
  //     }
  //   }
  //   else{
  //     $continuar = false;
  //     $msj = 'No existen empleados para generar los impuestos.';
  //   }
  //
  //   if( $continuar == false ) return array('error' => true, 'msj' => $msj);
  //   else return array('error' => false, 'procesados' => $procesados);
  // }

  // public function procesar_aportaciones_isstey($idPeriodoPago,$idPresupuesto,$registros){
  //   set_time_limit(0);
  //   $procesados = array();
  //   $continuar = true;
  //   $empleados = $this->CI->mCalculos->trae_empleados_en_nomina($idPeriodoPago);
  //   if( !empty($empleados) ){
  //
  //     $borrarAport = $this->CI->mCalculos->borrar_aportaciones_isstey($idPresupuesto);
  //     $actualiza = $this->CI->mCalculos->actualiza_proceso_nomina(5,$idPeriodoPago);
  //
  //     foreach ($empleados as $item) {
  //       $idEmpleado = $item->id_empleado;
  //       if ( version_compare(PHP_VERSION, '7.0', '>=') ) $generar = array_search($idEmpleado, array_column($registros, '0'));
  //       else $generar = array_search($idEmpleado, array_columna($registros, '0'));
  //
  //       if( $generar !== false ){
  //         $aportISSTEY = $this->CI->mCalculos->insertar_aportaciones_isstey($idPeriodoPago,$idEmpleado);
  //         if( $aportISSTEY ) array_push($procesados,$idEmpleado);
  //         else log_message("error", "Librería - Calculos_Nomina/procesar_aportaciones_isstey(): Error al procesar empleado: ".$idEmpleado);
  //       }
  //     }
  //     if( count($empleados) == count($registros) ){
  //       $this->CI->mCalculos->actualiza_proceso_nomina(5,$idPeriodoPago,0,0,0,0,1);
  //     }
  //   }
  //   else{
  //     $continuar = false;
  //     $msj = 'No existen empleados para generar las aportaciones de ISSTEY.';
  //   }
  //
  //   if( $continuar == false ) return array('error' => true, 'msj' => $msj);
  //   else return array('error' => false, 'procesados' => $procesados);
  // }

  // public function insertar_percepcion_porEmpleado($idPeriodoPago,$idPresupuesto,$AI,$registros){
  //   set_time_limit(0);
  //   $procesados = array();
  //   $continuar = true;
  //
  //   $this->CI->mCalculos->iniciar_transaccion();
  //
  //   $delPeriodoPago = $this->CI->mCalculos->borra_periodo_pago($idPeriodoPago);
  //   if( $delPeriodoPago ){
  //     $ctrlProceso = $this->CI->mCalculos->busca_controlproceso_nomina($idPeriodoPago);
  //     $this->CI->mCalculos->actualiza_proceso_nomina(6,$idPeriodoPago,$ctrlProceso->RegsIniciales);
  //     $delTiposNom = $this->CI->mCalculos->elimina_nominas_porPeriodo($idPeriodoPago);
  //     if( $delTiposNom ){
  //       $empleadosAntesImp = $this->CI->mCalculos->trae_empleados_gennomina($idPeriodoPago);
  //       if( !empty($empleadosAntesImp) ){
  //         foreach ($empleadosAntesImp as $item) {
  //           $idEmpleado = $item->EmpleadoID;
  //           $generar = array_search($idEmpleado, array_column($registros, '0'));
  //
  //           if( $generar !== false ){
  //             $result = $this->CI->mCalculos->calcula_conceptos_detnomina_empleado($idPeriodoPago,$AI,$idEmpleado);
  //             $calcAguinaldo = $this->CI->mCalculos->calcula_aguinaldos_empleado($idEmpleado,$idPresupuesto);
  //             if( $result && $calcAguinaldo ) array_push($procesados,$idEmpleado);
  //             else log_message("error", "Librería - Calculos_Nomina/procesar_antes_impuestos(): Error al procesar empleado: ".$idEmpleado);
  //           }
  //
  //         }
  //
  //         if( count($empleadosAntesImp) == count($registros) ){
  //           $this->CI->mCalculos->actualiza_proceso_nomina(2,$idPeriodoPago,0,1);
  //         }
  //       }
  //       else{
  //         $continuar = false;
  //         $msj = 'No existen empleados para generar conceptos '.($AI ? 'antes de impuestos.' : 'después de Impuestos.');
  //       }
  //     }
  //     else{
  //       $continuar = false;
  //       $msj = 'Problemas al eliminar los distintos tipos de nómina. Por favor intente de nuevo.';
  //     }
  //   }
  //   else{
  //     $continuar = false;
  //     $msj = 'Problemas al eliminar el periodo, hay que realizar de nuevo el proceso.';
  //   }
  //
  //   $this->CI->mCalculos->terminar_transaccion(($continuar == true ? 0 : 1));
  //
  //   if( $continuar == false ) return array('error' => true, 'msj' => $msj);
  //   else return array('error' => false, 'procesados' => $procesados);
  // }

}
