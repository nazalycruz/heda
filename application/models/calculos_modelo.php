<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calculos_modelo extends CI_Model {

  function _construct(){
		parent::Model();

	}

  public function iniciar_transaccion(){
    $this->db->trans_start();
  }

  public function terminar_transaccion($errores){
    if ($this->db->trans_status() === FALSE || $errores > 0) $this->db->trans_rollback();
    else $this->db->trans_commit();
  }

  public function busca_controlproceso_nomina($idPeriodoPago){
    $this->db->select('PeridoPagoID,RegsIniciales,ConceptAntesImpu,Impuestos,ConceptDespImpu,ISSTEY,FechaIni,FechaFin,NominaCerrada');
    $this->db->from('vw_ControlProcesosGenNomina');
    $this->db->where('PeridoPagoID',$idPeriodoPago);

    $query = $this->db->get();
    if ($query != false && $query->num_rows() > 0) return $query->row();
    else return false;
  }

  public function busca_ultimafecha_asistencias($topN=1,$idPeriodoPago='',$asc=false){
    $this->db->limit($topN);
    $this->db->select();
    $this->db->from('his_Asistencia');
    $this->db->where('PeriodoPagoID',$idPeriodoPago);
    $this->db->order_by('Fecha',($asc ? 'ASC' : 'DESC'));

    $query = $this->db->get();
    if( $query != false && $query->num_rows() > 0 ) return $query->row();
    else return false;
  }

  public function trae_nominas_abiertas($idPeriodoPago,$filtro=false){
    $this->db->select();
    $this->db->from('vw_nominas');
    $this->db->where('PeriodoID',$idPeriodoPago);
		if (!empty($filtro)) $this->db->where($filtro);

    $query = $this->db->get();
    if ($query != false && $query->num_rows() > 0) return $query->result();
    else return false;
  }

  public function trae_empleados_regini($idPresupuesto){
    $parametros = "@PresupuestoId=".escapaDatoParaBD($idPresupuesto);
    $sql = "exec sp_GetEmpleadosParaRegIni ".$parametros;

    $query = $this->db->query($sql);
    if( $query != false ){
      if ( $query->num_rows() > 0) {
        $result = $query->result();
        return $result;
      }
      else return false;
    }
    else return false;
  }

  public function trae_empleados_gennomina($idPeriodoPago){
    $parametros = "@Id_Nomina=".$idPeriodoPago;
    $sql = "exec pa_GetEmpleadosParaNomina ".$parametros;

    $query = $this->db->query($sql);
    if( $query != false ){
      if ( $query->num_rows() > 0) {
        $result = $query->result();
        return $result;
      }
      else return false;
    }
    else return false;
  }

  public function trae_empleados_en_nomina($idPeriodoPago){
    $parametros = "@id_nomina=".$idPeriodoPago;
    $sql = "exec pa_GetEmpleadosEnNomina ".$parametros;

    $query = $this->db->query($sql);
    if( $query != false ){
      if ( $query->num_rows() > 0) {
        $result = $query->result();
        return $result;
      }
      else return false;
    }
    else return false;
  }

  public function trae_diasprocesados_regini($idPeriodoPago){
    $select =   array(
                    'EmpleadoID',
                    'COUNT(EmpleadoID) as dias'
                );
    $this->db
            ->select($select)
            ->from('RegsIniGenNomina')
            ->where('PeriodoPagoID',$idPeriodoPago)
            ->where('TieneLIS',0)
            ->group_by('EmpleadoID');
    $query = $this->db->get();
    if( $query != false && $query->num_rows() > 0 ) return $query->result();
    else return false;
  }

  public function busca_asistencias_empleado($idEmpleado,$FechaIni,$FechaFin,$Folio=0){
    $parametros = "@Empleadoid=".$idEmpleado.
                  ",@fecha1=".escapaDatoParaBD($FechaIni).
                  ",@fecha2=".escapaDatoParaBD($FechaFin).
                  ",@Folio=".( empty($Folio) ? 0 : $Folio );
    $sql = "exec pa_ObtenChecadasEmpl ".$parametros;

    $query = $this->db->query($sql);
    if( $query != false ){
      if ( $query->num_rows() > 0) {
        $result = $query->result();
        return $result;
      }
      else return 0;
    }
    else return false;
  }

  public function trae_estatus_por_fecha($fecha,$credencial){
    $parametros = "@fecha=".escapaDatoParaBD($fecha).
                  ",@Idpersonal=".escapaDatoParaBD($credencial);
    $sql = "exec sp_GetStatusxDia ".$parametros;

    $query = $this->secgral->query($sql);
    if ($query != false) {
      if ($query->num_rows() > 0) {
        $result = $query->row();
        return $result->STATUS;
      }
      else return false;
    }
    else return false;
  }

  public function busca_dia_festivo($fecha){
    $fechanew = DateTime::createFromFormat('d/m/Y', $fecha);
    $where = "FechaFestiva = ".escapaDatoParaBD($fecha)." OR (day(FechaFestiva) = ".$fechanew->format('d')." AND
             month(FechaFestiva) = ".$fechanew->format('m')." AND year(FechaFestiva) = 1900)";

    $this->db->select();
    $this->db->from('vw_DiasFestivos');
    $this->db->where($where);

    $query = $this->db->get();
    if( $query != false && $query->num_rows() > 0 ) return true;
    else return false;
  }

  public function busca_turnoempleado_fecha($idEmpleado,$fecha){
    $where = "EmpleadoId = ".$idEmpleado." AND FechaFin >=".escapaDatoParaBD($fecha)." AND FechaInicio <= ".escapaDatoParaBD($fecha)." OR
              (EmpleadoID = ".$idEmpleado." AND FechaFin = '01/01/1900' AND FechaInicio <= ".escapaDatoParaBD($fecha).")";

    $this->db->select();
    $this->db->from('vw_HistTurnosEmpleado');
    $this->db->where($where);

    $query = $this->db->get();
    if( $query != false && $query->num_rows() > 0 ) return $query->row();
    else return false;
  }

  public function busca_tmp_turnos($turno){
    $this->db->select();
    $this->db->from('TMP_Turnos');
    $this->db->like('Turno',$turno);

    $query = $this->db->get();
    if( $query != false && $query->num_rows() > 0 ) return $query->row();
    else return false;
  }

  public function borrar_regini_empleado($idEmpleado,$idPeriodoPago){
    $parametros = "@EmpleadoID=".$idEmpleado.
                  ",@PeriodoPagoID=".$idPeriodoPago;
    $sql = "exec sp_DelRegsIniGenNomXEmpl ".$parametros;
    $query = $this->db->query($sql);
    if( $query != false ){
      $afftectedRows = $this->db->affected_rows();
      if( $afftectedRows > 0 ) return true;
      else return false;
    }
    else return false;
  }

  public function inserta_registros_iniciales($idEmpleado,$idCategoria,$fecha,$escomplementario,$idPeriodoPago,$dia,$diaHabil){
    $parametros = "@EmpleadoID=".$idEmpleado.
                  ",@CategoriaID=".$idCategoria.
                  ",@Fecha =".escapaDatoParaBD($fecha).
                  ",@RegComplementario=".$escomplementario.
                  ",@PeriodoPagoID=".$idPeriodoPago.
                  ",@Dia=".$dia.
                  ",@DiaHabil=".$diaHabil;
    $sql = "exec sp_InsertRegsIniGenNomina ".$parametros;

    $query = $this->db->query($sql);
    if ($query != false) {
      $afftectedRows = $this->db->affected_rows();
      if ($afftectedRows > 0) return true;
      else {
        log_message('regini', 'inserta_registros_iniciales(): '.$sql);
        return false;
      }
    }
    else {
      log_message('regini', 'inserta_registros_iniciales(): '. $sql);
      return false;
    }
  }

  public function inserta_registros_iniciales_porClave($idEmpleado,$ClaveCategoria,$fecha,$escomplementario,$idPeriodoPago,$dia,$diaHabil){
    $parametros = "@EmpleadoID = ".$idEmpleado.
                  ",@ClaveCategoria = ".escapaDatoParaBD($ClaveCategoria).
                  ",@Fecha = ".escapaDatoParaBD($fecha).
                  ",@RegComplementario = ".$escomplementario.
                  ",@PeriodoPagoID = ".$idPeriodoPago.
                  ",@Dia = ".$dia.
                  ",@DiaHabil = ".$diaHabil;
    $sql = "exec p_admarh_InsertRegsIniGenNominaPorClave ".$parametros;

    $query = $this->db->query($sql);
    if ($query != false) {
			if ($query->num_rows() == 1) {
				$result = $query->row();
				return array('status' => true, 'rows' => $result->Rows, 'dias' => $result->Dias);
			}
    }
    log_message('regini', 'inserta_registros_iniciales_porClave(): '. $sql);
    return array('status' => false, 'rows' => 0);
  }

  public function inserta_registro_inicial_empleado($idEmpleado,$idCategoria,$fecha,$escomplementario,$idPeriodoPago,$dia,$diaHabil,$TieneLIS){
    $parametros = "@EmpleadoID=".$idEmpleado.
                  ",@CategoriaID=".$idCategoria.
                  ",@Fecha =".escapaDatoParaBD($fecha).
                  ",@RegComplementario=".$escomplementario.
                  ",@PeriodoPagoID=".$idPeriodoPago.
                  ",@Dia=".$dia.
                  ",@DiaHabil=".$diaHabil.
                  ",@TieneLis=".$TieneLIS;

    $sql = "exec pa_InsertaRegistroInicial ".$parametros;

    $query = $this->db->query($sql);
    if( $query != false ){
      $afftectedRows = $this->db->affected_rows();
      if( $afftectedRows > 0 ) return true;
      else return false;
    }
    else return false;
  }

  public function trae_claveCategoria_fechaSISEGE($fechaCalculo,$credencial){
    $parametros = "@Fecha=".escapaDatoParaBD($fechaCalculo).
                  ",@NumNomina=".escapaDatoParaBD($credencial);
    $sql = "exec sp_getNuevaCategoria ".$parametros;

    $query = $this->secgral->query($sql);
    if( $query != false ){
      if ($query->num_rows() > 0) {
        $result = $query->row();
        return $result;
      }
      else return (object) array('error' => true, 'sql' => $sql);
    }
    else return (object) array('error '=> true, 'sql' => $sql);
  }

  public function trae_Categoria_por_clave($claveCategoria){
    $this->db->select();
    $this->db->from('Cat_Categorias');
    $this->db->where('Clave ',$claveCategoria);

    $query = $this->db->get();
    if ($query != false && $query->num_rows() > 0) return $query->row();
    else return false;
  }

  public function trae_Categoria_por_id($idCategoria){
    $this->db->select();
    $this->db->from('Cat_Categorias');
    $this->db->where('Id',$idCategoria);

    $query = $this->db->get();
    if( $query != false && $query->num_rows() > 0 ) return $query->row();
    else return false;
  }

  public function actualiza_proceso_nomina($proceso,$idPeriodoPago,$regsiniciales=0,$antesimpuestos=0,$impuestos=0,$despimpuestos=0,$isstey=0){
    switch ($proceso) {
      case '1': //registros iniciales
        $parametros = "@PeridoPagoID=".$idPeriodoPago.
                      ",@RegsIniciales=".$regsiniciales;
        $sql = "exec sp_Update_ControlProcesosGenNomina1 ".$parametros;
        break;
      case '2': //conceptos antes de impuestos
        $parametros = "@PeridoPagoID=".$idPeriodoPago.
                      ",@ConceptAntesImpu=".$antesimpuestos;
        $sql = "exec sp_Update_ControlProcesosGenNomina2 ".$parametros;
        break;
      case '3': //impuestos
        $parametros = "@PeridoPagoID=".$idPeriodoPago.
                      ",@Impuestos=".$impuestos;
        $sql = "exec sp_Update_ControlProcesosGenNomina3 ".$parametros;
        break;
      case '4': //después de impuestos
        $parametros = "@PeridoPagoID=".$idPeriodoPago.
                      ",@ConceptDespImpu=".$despimpuestos;
        $sql = "exec sp_Update_ControlProcesosGenNomina4 ".$parametros;
        break;
      case '5': //ISSTEY
        $parametros = "@PeridoPagoID=".$idPeriodoPago.
                      ",@ISSTEY=".$isstey;
        $sql = "exec sp_Update_ControlProcesosGenNomina5 ".$parametros;
        break;
      case '6': //afecta según los parámetros enviados
        $parametros = "@PeridoPagoID=".$idPeriodoPago.
                      ",@RegsIniciales=".$regsiniciales.
                      ",@ConceptAntesImpu=".$antesimpuestos.
                      ",@Impuestos=".$impuestos.
                      ",@ConceptDespImpu=".$despimpuestos.
                      ",@ISSTEY=".$isstey;
        $sql = "exec sp_Update_ControlProcesosGenNomina ".$parametros;
        break;
      default:
        break;
    }

    $query = $this->db->query($sql);
    if( $query != false ){
      $afftectedRows = $this->db->affected_rows();
      if( $afftectedRows > 0 ) return true;
      else return false;
    }
    else return false;
  }

  public function configurar_bono_cumples($idPeriodoPago,$idPresupuesto){
    $parametros = "@Id_Nomina=".$idPeriodoPago.
                  ",@PresupuestoId=".escapaDatoParaBD($idPresupuesto);
    $sql = "exec pa_ConfiguraBonoCumples ".$parametros;

    $query = $this->db->query($sql);
    if( $query != false ){
      $ultimoid = $this->db->insert_id();
      if( !empty($ultimoid) ) return true;
      else return false;
    }
    else return false;
  }

  public function configurar_vales($idPeriodoPago){
    $parametros = "@Id_Nomina=".$idPeriodoPago;
    $sql = "exec pa_ConfiguraValesDespensa ".$parametros;

    $query = $this->db->query($sql);
    if( $query != false ) return true;
    else return false;
  }

  public function trae_empleadossinbase_para_vales($fecha,$idPresupuesto){
    $parametros = "@FechaFinal=".escapaDatoParaBD($fecha).
                  ",@PresupuestoId=".escapaDatoParaBD($idPresupuesto);
    $sql = "exec p_admarh_rptPersonalSinBaseAntiguo ".$parametros;

    $query = $this->db->query($sql);
    if( $query != false ){
      if ( $query->num_rows() > 0) {
        $result = $query->result();
        return $result;
      }
      else return false;
    }
    else return false;
  }

  public function eliminar_confvales_empleadossinbase($idEmpleado,$idPresupuesto){
    $parametros = "@IDEmpleado=".$idEmpleado.
                  ",@PresupuestoID=".escapaDatoParaBD($idPresupuesto);
    $sql = "exec p_admarh_EliminaConfiguracionValesXEmplID ".$parametros;

    $query = $this->db->query($sql);
    if ($query != false) {
			return true;
      // $afftectedRows = $this->db->affected_rows();
      // if( $afftectedRows > 0 ) return true;
      // else return false;
    }
		return false;
  }

  public function procesar_confvales_empleadossinbase($idPeriodoPago,$idEmpleado){
    $parametros = "@IDNomina=".$idPeriodoPago.
                  ",@IDEmpleado=".$idEmpleado;
    $sql = "exec p_admarh_ConfiguraValesDespensaXEmpleadoID ".$parametros;

    $query = $this->db->query($sql);

    if( $query != false ){
      if ( $query->num_rows() > 0) {
        $result = $query->row();
        return $result;
      }
      else return false;
    }
    else return false;
  }

  /**
   * Elimina todos los registros de det_nomina que pertenezcan a un periodo de pago
   * @method borra_periodo_pago
   * @author alopez
   * @date   2019-09-18
   * @param  [type]             $idPeriodoPago [description]
   * @return [type]                            [description]
   */
  public function borra_periodo_pago($idPeriodoPago){
    $parametros = "@Id_Nomina=".$idPeriodoPago;
    $sql = "exec sp_DeleDetNominaXPerPagoID ".$parametros;

    $query = $this->db->query($sql);
    if( $query != false ) return true;
    else return false;
  }

  /**
   * eliminar todos los tipos de nómina generados para el periodo actual
   * @method elimina_nominas_porPeriodo
   * @author alopez
   * @date   2019-09-18
   * @param  [type]                     $idPeriodoPago [description]
   * @return [type]                                    [description]
   */
  public function elimina_nominas_porPeriodo($idPeriodoPago){
    $parametros = "@PeriodoID=".$idPeriodoPago;
    $sql = "exec pa_DeleteTipoNominaXPeriodoID ".$parametros;

    $query = $this->db->query($sql);
    if( $query != false ) return true;
    else return false;
  }

  public function calcula_conceptos_detnomina_empleado($idPeriodoPago,$idEmpleado,$AntesImpuestos=false){
    $error = FALSE;
    $AI = ($AntesImpuestos ? 1 : 0);

    $parametros = "@Id_Nomina=".$idPeriodoPago.
                  ",@AntImp=".$AI.
                  ",@EmpleadoId=".$idEmpleado;

    // $this->db->trans_begin();
    $sql = "exec pa_CalculaxEmpleadoId ".$parametros;
    $query = $this->db->query($sql);
    if( $query == false ) $error = TRUE;

    $sql = "exec pa_CalculaxCategoriaxIDE ".$parametros;
    $query = $this->db->query($sql);
    if( $query == false ) $error = TRUE;

    if( $error ) return false;
    else return true;
  }

  public function calcula_aguinaldos_empleado($idEmpleado,$idPresupuesto){
		$error = FALSE;
		$parametros = "@Empleado_Id=".$idEmpleado.
									",@PresupuestoId=".escapaDatoParaBD($idPresupuesto);
		$sql = "exec pa_tmp_aguinaldosEmpl ".$parametros;
		$query = $this->db->query($sql);

		$parametros = "@EmpleadoID=".$idEmpleado.
									",@PresupuestoId=".escapaDatoParaBD($idPresupuesto);
		$sql = "exec pa_tmp_traspasaaguinaldosxEmplId ".$parametros;
		$query = $this->db->query($sql);
		if ($query != false) return true;
		else return false;
  }

  public function obtener_impuestos_periodo($idPeriodoPago,$idEmpleado=0){
    $parametros = "@ParamPeriodoPagoID=".$idPeriodoPago.
                  ",@ParamEmpleadoID=".$idEmpleado;
    $sql = "exec sp_VolcaImpuestosCalculados ".$parametros;

    $query = $this->db->query($sql);
    if( $query != false ) return true;
    else return false;
  }

  public function insertar_impuestos_tipoNomina($idPeriodoPago,$idEmpleado){
    $parametros = "@Id_nomina=".$idPeriodoPago.
                  ",@EmpleadoId=".$idEmpleado;
    $sql = "exec pa_ImpuestosXEmpleado ".$parametros;

    $query = $this->db->query($sql);
    if( $query != false ) return true;
    else return false;
  }

  public function borrar_concepto_periodo($idPeriodoPago,$AntesImpuesto=0,$idEmpleado=0,$AplicaVaca=0){
    $parametros = "@ParamPeriodoPagoID=".$idPeriodoPago.
                  ",@ParamAntesImpuesto=".$AntesImpuesto.
                  ",@ParamEmpleadoID=".$idEmpleado.
                  ",@AplicaVaca=".$AplicaVaca;
    $sql = "exec sp_DelConceptDetNom_AntDespImpXPerPagoID ".$parametros;

    $query = $this->db->query($sql);
    if( $query != false ) return true;
    else return false;
  }

  public function borrar_aportaciones_isstey($idPeriodoPago){
    $parametros = "@ParamPeriodoPagoID=".$idPeriodoPago;
    $sql = "exec sp_DelISSTEYDetNomXPerPagoID ".$parametros;

    $query = $this->db->query($sql);
    if( $query != false ) return true;
    else return false;
  }

  public function insertar_aportaciones_isstey($idPeriodoPago,$idEmpleado){
    //antiguo método
    // $parametros = "@ParamPeriodoPagoID=".$idPeriodoPago.
    //               ",@ParamEmpleadoID=".$idEmpleado;
    // $sql = "exec sp_VolcaAportISSTEYXEmplId ".$parametros;
    //nuevo pa actualizado
    $parametros = "@idPeriodoPago=".$idPeriodoPago.
                  ",@idEmpleado=".$idEmpleado;
    $sql = "exec p_admarh_VolcaAportISSTEYporEmpleado ".$parametros;

    $query = $this->db->query($sql);
    if( $query != false ) return true;
    else return false;
  }

  public function insertar_tiposnomina_periodo($idPeriodoPago){
    $parametros = "@PeriodoID=".$idPeriodoPago;
    $sql = "exec pa_GeneraTiposNominaXPeriodoID ".$parametros;

    $query = $this->db->query($sql);
    if( $query != false ) return true;
    else return false;
  }

  public function actualizar_nominas($idDetNomina,$fecha,$cerrada){
    $parametros = "@IdDetNomina=".$idDetNomina.
                  ", @FechaPago=".escapaDatoParaBD($fecha).
                  ", @Cerrada=".$cerrada;
    $sql = "exec pa_UpdateTipoNomina ".$parametros;

    $query = $this->db->query($sql);
    if ($query != false)  return true;
    else return false;
  }

  public function elimina_nomina_empleado($idNomina,$idEmpleado,$idTipoNomina){
    $parametros = "@Id_nomina=".$idNomina.
                  ", @Id_empleado=".$idEmpleado.
                  ", @TipoNominaId=".$idTipoNomina;
    $sql = "exec pa_EliminaNominaEmpleadoXTipo ".$parametros;

    $query = $this->db->query($sql);
    if( $query != false ) return true;
    else return false;
  }

  public function actualiza_concepto_detNomina($idEmpleado,$idPeriodoPago,$idCategoria,$idConcepto,$Monto,$idTipoNomina) {
		$datos = array($idEmpleado, $idPeriodoPago, $idCategoria, $idConcepto, $Monto, $idTipoNomina);
    $parametros = "@ID_Empleado= ?, @ID_Nomina= ?, @CategoriaId = ?, @ID_Concepto = ?, @Monto = ?, @idTipoNomina = ?";

    $sql = "exec pa_UpdateConceptoDetNomXEmpl ".$parametros;
    $query = $this->db->query($sql,$datos);

    if ($query != false) return true;
    else return false;
  }

  public function elimina_concepto_detnomina($idEmpleado,$idPeriodoPago,$idCategoria,$idConcepto){
    $parametros = "@ID_Empleado=".$idEmpleado.
                  ", @ID_Nomina=".$idPeriodoPago.
                  ", @CategoriaId=".$idCategoria.
                  ", @ID_Concepto=".$idConcepto;
    $sql = "exec pa_DeleteConceptoDetNomXEmpl ".$parametros;

    $query = $this->db->query($sql);
    if( $query != false ) return true;
    else return false;
  }

  public function elimina_detalle_nomina_empleado($idPeriodoPago,$idEmpleado){
    $parametros = "@PeriodoID=".$idPeriodoPago.
                  ", @EmpleadoID=".$idEmpleado;
    $sql = "exec pa_DeleteDetNominaXPeriodoXEmpl ".$parametros;

    $query = $this->db->query($sql);
    if( $query != false ) return true;
    else return false;
  }

  public function trae_registros_iniciales_empleado($idEmpleado,$idPeriodoPago){
    $this->db->select('EmpleadoID, CategoriaID, Fecha, Dia, RegComplementario, PeriodoPagoID, Confirmado, TieneLIS, DiaHabil, TipoContrato');
    $this->db->from('RegsIniGenNomina');
    $this->db->where(array('EmpleadoID'=> $idEmpleado,'PeriodoPagoID' => $idPeriodoPago));

    $query = $this->db->get();
    if( $query != false && $query->num_rows() > 0 ) return $query->result();
    else return false;
  }

  /**
   * 'Esta función elimina los conceptos de CREDITO AL SALARIO E ISR
   * @method elimina_conceptos_impuestos
   * @author alopez
   * @date   2019-11-14
   * @param  [type]                     $idEmpleado    [description]
   * @param  [type]                     $idPeriodoPago [description]
   * @return [type]                                    [description]
   */
  public function elimina_conceptos_impuestos($idEmpleado,$idPeriodoPago){
    $parametros = "@ID_Empleado=".$idEmpleado.
                  ", @ID_Nomina=".$idPeriodoPago;
    $sql = "exec pa_DeleteDetNominaConcepIMPTO ".$parametros;

    $query = $this->db->query($sql);
    if( $query != false ) return true;
    else return false;
  }

  public function borra_tiponomina_quincena_empleado($idTipoNomina,$idPeriodoPago,$idEmpleado)
  {
    $query = $this->db->delete('det_ConceptosQuincenal', array('idNomina' => $idPeriodoPago, 'idEmpleado' => $idEmpleado, 'idTipoNomina' => $idTipoNomina));
    if ($query != false) return true;
		else return false;
  }

  /**
   * [genera_conceptos_quincena_empleado description]
   * @method genera_conceptos_quincena_empleado
   * @author alopez
   * @date   2020-03-11
   * @param  [type]                             $idPeriodoPago [description]
   * @param  [type]                             $idEmpleado    [description]
   * @param  [type]                             $usuario       [description]
   * @return [type]                                            [description]
   */
  public function genera_conceptos_quincena_empleado($idPeriodoPago,$idEmpleado,$usuario,$historico=0,$ajuste=0){
    $parametros = "@idNomina = ".$idPeriodoPago.
                  ", @idEmpleado = ".$idEmpleado.
                  ", @historico = ".$historico.
                  ", @ajuste = ".$ajuste.
                  ", @usuario = ".escapaDatoParaBD($usuario);
    $sql = "exec p_admarh_GeneraConceptosporQuincena ".$parametros;
    $query = $this->db->query($sql);
    if ($query != false) {
      $result = $query->row();
      return $result;
    }
    else {
      log_message('calculo','genera_conceptos_quincena_empleado(): '.$sql);
      return false;
    }
  }

  public function calcula_ISR_periodo($idEmpleado,$idPeriodoPago,$tipoperiodo,$presupuesto='',$tipoCalculo=1){
    $parametros = "@IdNomina = ?, @IdEmpleado= ?, @TipoPeriodo = ?, @Presupuesto = ?, @TipoCalculo = ?";
    // $sqlQ = "exec p_admarh_CalculaISR ".$parametros;
    $sqlQ = "exec p_admarh_CalculaNominas ". $parametros;
    $queryQ = $this->db->query($sqlQ, array($idPeriodoPago,$idEmpleado,1,$presupuesto,$tipoCalculo));
    if ($tipoperiodo == 2) { //ajustar para el cálculo mensual
      $parametros = "@IdNomina = ?, @IdEmpleado = ?";
      $sqlM = "exec p_admarh_AjustarSubsidioMensual ".$parametros;
      $queryM = $this->db->query($sqlM, array($idPeriodoPago,$idEmpleado));
    }

    if ($queryQ != false) {
      if ($tipoperiodo == 2) {
        if ($queryM != false) return $queryM->row();
        else{
          log_message('calculo','calcula_ISR_periodo(): '.$sqlM);
          return false;
        }
      }
      else return true;
    }
    else {
      log_message('calculo','calcula_ISR_periodo(): '.$sqlQ);
      return false;
    }
  }

  public function volca_conceptos_nomina($idPeriodoPago,$idEmpleado){
    $parametros = "@IdNomina = ".$idPeriodoPago.
                  ", @IdEmpleado = ".$idEmpleado;
    $sql = "exec p_admarh_VolcaConceptosXEmpleado ".$parametros;

    $query = $this->db->query($sql);
    if ($query != false) {
      return true;
    }
    else {
      log_message('calculo','volca_conceptos_nomina(): '.$sql);
      return false;
    }
  }

  public function valida_existe_pagoEspecial($idPeriodoPago,$idPresupuesto)
  {
    $this->db->distinct();
    $this->db->select('IdConcepto');
    $this->db->from('ParamPagosEspeciales PE');
    $this->db->join('Conf_CategoriaConceptos CC','PE.IdConcepto = CC.Id_Concepto');
		// $this->db->join('det_NominaXTipo DNT','CC.Id_TipoNomina = DNT.TipoNominaID');
    // $this->db->where('DNT.PeriodoID',$idPeriodoPago);
		$this->db->where('PE.PresupuestoId',$idPresupuesto);

    $query = $this->db->get();
    if ($query != false && $query->num_rows() > 0) return true;
    else return false;
  }

  public function calcula_pagos_especiales_empleado($idPresupuesto,$idPeriodoPago,$idEmpleado,$usuario='')
  {
    $parametros = "@Empleado_Id=".$idEmpleado.
                  ",@PresupuestoId=".escapaDatoParaBD($idPresupuesto);
    $sql = "exec pa_tmp_aguinaldosEmpl ".$parametros;
    $query = $this->db->query($sql);

    $parametros = "@idNomina = ".$idPeriodoPago.
                  ", @idEmpleado = ".$idEmpleado.
                  ", @usuario = ".escapaDatoParaBD($usuario);
    $sql = "exec p_admarh_GeneraConceptosEspecialesporQuincena ".$parametros;
    $query = $this->db->query($sql);
    if ($query != false) {
      $result = $query->row();
      log_message('calculo','calcula_pagos_especiales_empleado(): '.$result->mensaje);
      return $result;
    }
    else {
      log_message('calculo','calcula_pagos_especiales_empleado(): '.$sql);
      return false;
    }
  }

  public function actualiza_concepto_quincenales($idEmpleado,$idPeriodoPago,$idCategoria,$idConcepto,$Monto)
  {
    $parametros = "@idEmpleado = ".$idEmpleado.
                  ", @idNomina = ".$idPeriodoPago.
                  ", @idCategoria = ".$idCategoria.
                  ", @idConcepto = ".$idConcepto.
                  ", @Monto = ".$Monto;

    $sql = "exec p_admarh_UpdateConceptoQuincenal ".$parametros;

    $query = $this->db->query($sql);
    if ($query != false) {
      return true;
    }
    else {
      log_message('calculo','actualiza_concepto_quincenales(): '.$sql);
      return false;
    }
  }

	public function empleados_calculados_porFechaIni($fechaini,$idPeriodoPago,$idEmpleado=0)
	{
		$this->db->select('den.Id_Nomina as idNomina,den.Id_Empleado as idEmpleado');
		$this->db->from('det_EmpleadosNomina den');
		$this->db->join('his_Nomina hn','den.Id_Nomina = hn.Id');
		$this->db->where('hn.FechaIni',$fechaini);
		$this->db->where('hn.Id <>',$idPeriodoPago);
		if (!empty($idEmpleado)) $this->db->where('den.Id_Empleado',$idEmpleado);

		$query = $this->db->get();
		if ($query != false && $query->num_rows() > 0) return $query->result();
		else return false;
	}

}
