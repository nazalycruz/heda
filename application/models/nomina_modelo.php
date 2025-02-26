<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nomina_modelo extends CI_Model {

  function _construct(){
		parent::Model();

	}

  public function iniciar_transaccion(){
    $this->db->trans_start();
  }

  public function terminar_transaccion($errores){
    if ($this->db->trans_status() === FALSE || $errores > 0){
      $this->db->trans_rollback();
    }
    else{
      $this->db->trans_commit();
    }
  }

  public function BuscaNominaAbierta($fechaini,$idPresupuesto){
    $parametros = "@FechaIni=".escapaDatoParaBD($fechaini).
                  ",@PresupuestoId=".escapaDatoParaBD($idPresupuesto);

    $sql = "exec p_admarh_NominaAbiertaXFechaIni ".$parametros;

    $query = $this->db->query($sql);
    if($query != false){
      if ( $query->num_rows() > 0) {
        $result = $query->row();
        return $result;
      }
      else return false;
    }
    else return false;
  }

  public function busca_historial_nomina(){
    $sql = "exec p_admarh_getHistorialNomina";

    $query = $this->db->query($sql);
    if ($query != false) {
      if ($query->num_rows() > 0) {
        $result = $query->result();
        return $result;
      }
      else return false;
    }
    else return false;
  }

  public function detalle_nomina($credencial,$idPeriodoPago){
    $parametros = "@Credencial=".escapaDatoParaBD($credencial).
                  ",@PeriodoPagoID=".$idPeriodoPago;

    $sql = "exec sp_detallenomina ".$parametros;

    $query = $this->db->query($sql);
    if($query != false){
      if ( $query->num_rows() > 0) {
        $result = $query->result();
        return $result;
      }
      else return false;
    }
    else return false;
  }

	public function obtener_detalle_nomina($credencial,$idPeriodoPago)
	{
		$this->db->select('hn.Id AS PeriodoPagoId, en.Id_Empleado, ce.Credencial,');
	}

  public function detalle_nomina_empleado($idEmpleado,$idPeriodoPago){
    $query = $this->db->get_where('det_EmpleadosNomina',array('Id_Nomina' => $idPeriodoPago,'Id_Empleado' => $idEmpleado));

    if($query != false){
      if ( $query->num_rows() > 0) {
        $result = $query->row();
        return $result;
      }
      else return false;
    }
    else return false;
  }

  public function actualiza_detalle_nomina_empleado($datos){
    $parametros = "@id_Nomina=".$datos['idPeriodoPago'].
                  ",@id_empleado=".$datos['idEmpleado'].
                  ",@Id_Categoria =".$datos['idCategoria'].
                  ",@id_Dependencia=".$datos['idDependencia'].
                  ",@depto=".escapaDatoParaBD($datos['depto']).
                  ",@status=".escapaDatoParaBD($datos['status']).
                  ",@grupoImpresion=".escapaDatoParaBD($datos['grupoimpresion']).
                  ",@Enomina=".$datos['Enomina'].
                  ",@TipoCOntrato=".escapaDatoParaBD($datos['TipoContrato']);
    $sql = "exec pa_ActualizaHisEmplQuincenal ".$parametros;

    $query = $this->db->query($sql);
    if( $query != false ){
      $afftectedRows = $this->db->affected_rows();
      if( $afftectedRows > 0 ) return true;
      else return false;
    }
    else return false;

  }

  public function tipo_nomina_empleado($idEmpleado,$idPeriodoPago){
    $parametros = "@Id_empleado=".$idEmpleado.
                  ",@PeriodoId=".$idPeriodoPago;

    $sql = "exec pa_TipoNominaXEmpleadoXPeriodo ".$parametros;

    $query = $this->db->query($sql);
    if($query != false){
      if ( $query->num_rows() > 0) {
        $result = $query->result();
        return $result;
      }
      else return false;
    }
    else return false;
  }

  public function busca_periodopago_porfecha($fechaini,$idPresupuesto){
    $parametros = "@FechaIni=".escapaDatoParaBD($fechaini).
                  ",@PresupuestoId=".escapaDatoParaBD($idPresupuesto);

    $sql = "exec p_admarh_NominaXFechaIni ".$parametros;

    $query = $this->db->query($sql);
    if($query != false){
      if ( $query->num_rows() > 0) {
        $result = $query->row();
        return $result;
      }
      else return false;
    }
    else return false;
  }

  /**
   * [trae_percepciones_deducciones_empleado description]
   * @method trae_percepciones_deducciones_empleado
   * @author alopez
   * @date   2019-10-23
   * @param  [type]                                 $idEmpleado   [description]
   * @param  [type]                                 $idTipoNomina [description]
   * @param  [type]                                 $EsPercepcion 1: EsPercepcion, 2: EsDeduccion, 3: Indistinto
   * @return [type]                                               [description]
   */
  public function trae_percepciones_deducciones_empleado($idEmpleado,$idTipoNomina,$EsPercepcion=3){
    $this->db->select();
    $this->db->from('vw_ConfEmplConceptos');
    $this->db->where(array('Id_Empleado'=>$idEmpleado,'Id_TipoNomina'=>$idTipoNomina));
    switch ($EsPercepcion) {
      case '1':
        $this->db->where('EsPercepcion',1);
        break;
      case '2':
        $this->db->where('EsPercepcion',0);
        break;
    }
    $query = $this->db->get();
    if( $query != false && $query->num_rows() > 0 ) return $query->result();
    else return false;
  }

  /**
   * trae la Configuracion de conceptos de una categoría dada de acurdo a un tipo de Nomina, si el parámetro $idTipoNomina es 0 trae todos los conceptos
   * @method trae_conf_categoria
   * @author alopez
   * @date   2019-10-25
   * @param  [type]              $idCategoria  [description]
   * @param  integer             $EsPercepcion [description] 1: EsPercepcion True, 2: EsPercepcion False, 3: Indistinto
   * @param  integer             $idTipoNomina [description]
   * @return [type]                            [description]
   */
  public function trae_conf_categoria($idPresupuesto,$idCategoria,$EsPercepcion=3,$idTipoNomina=0){
    $this->db->select();
    $this->db->from('vw_ConfCategoriaConceptos');
    $this->db->where(array('Id_Categoria'=>$idCategoria, 'PresupuestoId' => $idPresupuesto));
    if( !empty($idTipoNomina) ){
      $this->db->where(array('Id_TipoNomina' => $idTipoNomina));
    }
    switch ($EsPercepcion) {
      case '1':
        $this->db->where('EsPercepcion',1);
        break;
      case '2':
        $this->db->where('EsPercepcion',0);
        break;
    }
    $query = $this->db->get();
    if( $query != false && $query->num_rows() > 0 ) return $query->result();
    else return false;
  }

  public function inserta_conf_empleado($datos){
    $parametros = "@Id_TipoNomina=".$datos['idTipoNomina'].
                  ",@Id_Empleado=".$datos['idEmpleado'].
                  ",@Id_Concepto =".$datos['idConcepto'].
                  ",@Monto=".escapaDatoParaBD($datos['monto']).
                  ",@Permanente=".$datos['permanente'].
                  ",@VecesAplicar=".$datos['vaplicar'].
                  ",@VecesAplicadas=".$datos['vaplicadas'].
                  ",@AntesDeImp=".$datos['antesimp'].
                  ",@TieneParteExc=".$datos['tieneparteexe'].
                  ",@ParteExcenta=".escapaDatoParaBD($datos['parteexe']).
                  ",@CodigoAcreedor=".escapaDatoParaBD($datos['CodigoAcreedor']).
                  ",@NombreAcreedor=".escapaDatoParaBD($datos['NombreAcreedor']);

    $sql = "exec pa_HEDA_InsertConfEmpleadoGetID ".$parametros;

    $query = $this->db->query($sql);
    if ($query != false) {
      if ($query->num_rows() > 0) return $query->row();
      else return false;
    }
    else return false;
  }

  public function actualiza_conf_empleado($datos,$idConfEmpleado){
    $parametros = "@Id_TipoNomina=".$datos['idTipoNomina'].
                  ",@Id_Empleado=".$datos['idEmpleado'].
                  ",@Id_Concepto =".$datos['idConcepto'].
                  ",@Monto=".escapaDatoParaBD($datos['monto']).
                  ",@Permanente=".$datos['permanente'].
                  ",@VecesAplicar=".$datos['vaplicar'].
                  ",@VecesAplicadas=".$datos['vaplicadas'].
                  ",@AntesDeImp=".$datos['antesimp'].
                  ",@TieneParteExc=".$datos['tieneparteexe'].
                  ",@ParteExcenta=".escapaDatoParaBD($datos['parteexe']).
                  ",@CodigoAcreedor=".escapaDatoParaBD($datos['CodigoAcreedor']).
                  ",@NombreAcreedor=".escapaDatoParaBD($datos['NombreAcreedor']).
                  ",@ConfEmpleadoID=".$idConfEmpleado;

    $sql = "exec pa_UpdateConfEmpleadoXConfID ".$parametros;

    $query = $this->db->query($sql);
    if( $query != false ){
      $afftectedRows = $this->db->affected_rows();
      if( $afftectedRows > 0 ) return true;
      else return false;
    }
    else return false;
  }

  public function elimina_conf_empleado($datos){
    $parametros = "@TipoNominaID=".$datos['idTipoNomina'].
                  ",@Id_Empleado=".$datos['idEmpleado'].
                  ",@DeletePrima =".$datos['BorraPrima'].
                  ",@ConfEmpleadoID=".$datos['idConfEmpleado'];

    $sql = "exec pa_deleteConfEmpleadoXConfID ".$parametros;

    $query = $this->db->query($sql);
    if ($query != false) {
      $afftectedRows = $this->db->affected_rows();
			return true;
    }
    else return false;
  }

  public function guarda_pago_isstey($datos,$datosISSTEY,$idConfEmpleado){
    $parametros = "@PeriodoID=".$datosISSTEY['idPeriodoPago'].
                  ",@EmpleadoID=".$datos['idEmpleado'].
                  ",@ClaveRecibo =".$datosISSTEY['ClaveRecibo'].
                  ",@Folio=".escapaDatoParaBD($datosISSTEY['folio']).
                  ",@MontoQ=".escapaDatoParaBD($datosISSTEY['MontoQ']).
                  ",@MontoT=".escapaDatoParaBD($datos['monto']).
                  ",@ConfEmpleadoID=".$idConfEmpleado;

    $sql = "exec pa_InsertConfPagosISSTEY ".$parametros;

    $query = $this->db->query($sql);
    if( $query != false ){
      $afftectedRows = $this->db->affected_rows();
      if( $afftectedRows > 0 ) return true;
      else return false;
    }
    else return false;
  }

  public function actualiza_pago_isstey($datos,$datosISSTEY,$idConfEmpleado){
    $parametros = "@Folio=".escapaDatoParaBD($datosISSTEY['folio']).
                  ",@MontoQ=".escapaDatoParaBD($datosISSTEY['MontoQ']).
                  ",@MontoT=".escapaDatoParaBD($datos['monto']).
                  ",@Activo=".$datosISSTEY['Activo'].
                  ",@ConfEmpleadoID=".$idConfEmpleado;

    $sql = "exec pa_UpdateConfPagosISSTEY ".$parametros;

    $query = $this->db->query($sql);
    if( $query != false ){
      $afftectedRows = $this->db->affected_rows();
      if( $afftectedRows > 0 ) return true;
      else return false;
    }
    else return false;
  }

  public function borra_pago_isstey($idConfEmpleado){
    $parametros = "@ConfEmpleadoID=".$idConfEmpleado;

    $sql = "exec pa_DeleteConfPagosISSTEY ".$parametros;

    $query = $this->db->query($sql);
    if( $query != false ){
      $afftectedRows = $this->db->affected_rows();
      return true;
      // else return false;
    }
    else return false;
  }

  /**
   * Busca La fecha final y el periodo de pago, dado la fecha inicial y presupuesto
   * @method obtener_fecha_periodopago
   * @author alopez
   * @date   2019-11-08
   * @param  [type]                    $idPresupuesto [description]
   * @param  [type]                    $fechaini      [description]
   * @return [type]                                   [description]
   */
  public function obtener_fecha_periodopago($idPresupuesto,$fechaini){
    $this->db->select('id as idPeriodoPago, FechaFin');
    $this->db->from('His_Nomina');
    $this->db->where(array('PresupuestoId' => $idPresupuesto, 'Fechaini' => $fechaini));

    $query = $this->db->get();
    if( $query != false && $query->num_rows() > 0 ) return $query->row();
    else return false;
  }

  public function obtener_pago_porconcepto($fechaini,$fechafin,$idEmpleado,$idConcepto,$idPresupuesto){
    $parametros = "@FechaIni=".escapaDatoParaBD($fechaini).
                  ", @FechaFin=".escapaDatoParaBD($fechaini).
                  ", @IdEmpleado=".$idEmpleado.
                  ", @IdConcepto=".$idConcepto.
                  ", @PresupuestoId=".escapaDatoParaBD($idPresupuesto);

    $sql = "exec pa_ObtenerPagoxConcepto ".$parametros;

    $query = $this->db->query($sql);
    if($query != false){
      if ( $query->num_rows() > 0) {
        $result = $query->row();
        return $result;
      }
      else return false;
    }
    else return false;
  }

  public function obtener_edo_cuenta($credencial,$fechaini,$fechafin,$idPresupuesto=''){
    $parametros = "@Credencial=".escapaDatoParaBD($credencial).
                  ", @FechaIni=".escapaDatoParaBD($fechaini).
                  ", @FechaFin=".escapaDatoParaBD($fechafin);

    $sql = "exec pa_EdoCuentaEmpleado ".$parametros;

    $query = $this->db->query($sql);
    if($query != false){
      if ( $query->num_rows() > 0) {
        $result = $query->result();
        return $result;
      }
      else return false;
    }
    else return false;
  }

  public function obtener_formato_porNombre($idPresupuesto,$tipo=1,$formato=''){
    $parametros = "@NombreFormato=".escapaDatoParaBD($formato).
                  ", @PresupuestoId=".$idPresupuesto.
                  ", @Tipo=".$tipo;
    $sql = "exec pa_GetConfFormatoXNombre ".$parametros;

    $query = $this->db->query($sql);
    if($query != false){
      if ( $query->num_rows() > 0) {
        $result = $query->result();
        return $result;
      }
      else return false;
    }
    else return false;
  }

  public function empleados_ajuste_anual($idPresupuesto,$anio,$bConcepto=0,$idEmpleado='%',$monto=400000){
    $parametros = "@Presupuesto=".escapaDatoParaBD($idPresupuesto).
                  ",@PorConcepto=".$bConcepto.
                  ",@Anio=".$anio.
                  ",@Monto=".$monto.
                  ",@Credencial=".escapaDatoParaBD($idEmpleado);

    if( $idPresupuesto == '0001' ) $sql = "exec p_admarh_CalculoAcumuladoAnual ".$parametros;
    else $sql = "exec p_admarh_CalculoAcumuladoAnual_CJ ".$parametros;

    $query = $this->db->query($sql);

    if( $query != false ){
      if( $query->num_rows() > 0 ) {
        $result = $query->result();
        return $result;
      }
      else return false;
    }
    else return false;
  }

  public function genera_acumulado_anual($anio,$idPresupuesto,$borrar=1){
    $parametros = "@Anio=".$anio.
                  ",@Presupuesto=".escapaDatoParaBD($idPresupuesto).
                  ",@Borrar=".$borrar;

    $sql = "exec p_admarh_GeneraAcumuladoAnual ".$parametros;
    $query = $this->db->query($sql);

    if( $query != false ){
      $registros = $query->num_rows();
      return $registros;
    }
    else return false;
  }

  public function guarda_ajuste_impuesto_empleado($anio,$idEmpleado,$idConcepto,$monto,$idPresupuesto){
    $this->db->set('MontoGravado', $monto);
    $this->db->set('FUM', date("d/m/Y H:i:s"));
    $this->db->where('Anio', $anio);
    $this->db->where('idEmpleado', $idEmpleado);
    $this->db->where('idconcepto', $idConcepto);
    $this->db->where('Presupuesto', $idPresupuesto);
    $guarda = $this->db->update('det_AcumuladoAnual');

    if( $guarda != false ) return true;
    else return false;
  }

  public function generar_txt_SAT($idPeriodoPago,$idTipoNomina,$credencial=0){
    $parametros = "@Periodoid=".$idPeriodoPago.
                  ",@TipoNomina=".escapaDatoParaBD($idTipoNomina).
                  ",@NumNomina=".escapaDatoParaBD($credencial);
    $sql = "exec pa_GeneraTXTparaSAT ".$parametros;
    $query = $this->db->query($sql);

    if( $query != false ){
      if( $query->num_rows() > 0 ) {
        $result = $query->result();
        return $result;
      }
      else return false;
    }
    else return false;
  }

  public function obtener_conceptos_empleado($idPeriodoPago,$idTipoNomina=0,$credencial=0,$cuenta='%'){
    $parametros = "@Periodoid=".$idPeriodoPago.
                  ",@TipoNomina=".escapaDatoParaBD($idTipoNomina).
                  ",@Credencial=".escapaDatoParaBD($credencial);
    $sql = "exec pa_GetConceptosxEmpleado ".$parametros;
    $query = $this->db->query($sql);

    if( $query != false ){
      if( $query->num_rows() > 0 ) {
        $result = $query->result();
        return $result;
      }
      else return false;
    }
    else return false;
  }

  public function busca_conf_conceptos_empleado($idEmpleado,$idPeriodoPago){
    $this->db->select('dc.idEmpleado,dc.idConcepto,dc.Gravado,dc.Monto,dc.MontoExento,dc.MontoGravado,cc.Descripcion');
    $this->db->from('det_ConceptosQuincenal dc');
    $this->db->join('cat_Conceptos cc','dc.idConcepto = cc.Id');
    $this->db->where(array('idNomina' => $idPeriodoPago, 'idEmpleado' => $idEmpleado));

    $query = $this->db->get();
    if( $query != false && $query->num_rows() > 0 ) return $query->result();
    else return false;
  }

  public function busca_det_impuestos_empleado($idEmpleado,$idPeriodoPago,$tipoquincena = 1){
    $this->db->select();
    if( $tipoquincena == 1) $this->db->from('det_ImpuestosQuincenal');
    else $this->db->from('det_ImpuestosQuincenal');
    $this->db->where( array('Id_Nomina' => $idPeriodoPago, 'Id_Empleado' => $idEmpleado ) );
    $query = $this->db->get();
    if( $query != false && $query->num_rows() > 0 ) return $query->result();
    else return false;
  }

  public function empleados_activos_porParametros($FechaIni,$FechaFin,$base,$dias,$idTipoNomina,$idConcepto,$idPresupuesto){
    $parametros = "@FechaIni=".escapaDatoParaBD($FechaIni).
                  ",@FechaFin=".escapaDatoParaBD($FechaFin).
                  ",@Base=".(!empty($base) ? 1 : 0).
                  ",@Dias=".$dias.
                  ",@TipoNominaId=".$idTipoNomina.
                  ",@ConceptoId=".$idConcepto.
                  ",@PresupuestoId=".escapaDatoParaBD($idPresupuesto);
    $sql = "exec p_admarh_getDiasEmpleadosActivosXFecha ".$parametros;
    $query = $this->db->query($sql);
    if ($query != false) {
    	if ($query->num_rows() > 0) {
        $result = $query->result();
        return $result;
      }
      else return false;
    }
    else return false;
  }

  //GSantos,  2021.12.27
  public function trae_datos_concepto($idConcepto, $idPresupuesto){
    $parametros = "@IdConcepto=".$idConcepto.
                  ",@IdPresupuesto=".escapaDatoParaBD($idPresupuesto);

    $sql = "exec p_admarh_getDatosConcepto ".$parametros;

    $query = $this->db->query($sql);
    if( $query != false ){
      $afftectedRows = $this->db->affected_rows();
      if( $afftectedRows > 0 ) return true;
      else return false;
    }
    else return false;
  }

	public function obtener_remanente_afavor($credencial,$anio,$idPeriodoPago)
	{
		$this->db->select('sum(Monto) as MontoPagado');
		$this->db->from('det_Nomina');
		$this->db->where_in('Id_Nomina','SELECT id FROM his_Nomina WHERE YEAR(fechaini) = '.$anio.' AND id <= '.$idPeriodoPago,FALSE);
		$this->db->where_in('Id_Empleado',"SELECT Id FROM cat_Empleados WHERE Credencial = '".$credencial."'",FALSE);
		$this->db->where('Id_Concepto',237);
		$query = $this->db->get();
		if($query != false && $query->num_rows() > 0 ) return $query->row();
		else return false;
	}

	public function obtener_compensacion_total($credencial,$anio)
	{
		$this->db->select('Monto');
		$this->db->from('tmpConf_AjusteAnualCompensacion');
		$this->db->where('Anio',$anio);
		$this->db->where('Credencial',$credencial);

		$query = $this->db->get();
		if($query != false && $query->num_rows() > 0 ) return $query->row();
		else return false;
	}

	/**
	 * [obtener_empleados_nomina description]
	 * @method obtener_empleados_nomina
	 * @author alopez
	 * @date
	 * @param  [type]                   $idNomina               [description]
	 * @return [type]                             [description]
	 */
	public function obtener_empleados_nomina($idNomina)
	{
		$this->db->distinct()
						 ->select("Id_Empleado, ce.Credencial, ce.Nombre + ' ' + ce.Apellido1 + ' ' + ce.Apellido2 as  Empleado")
						 ->from('det_Nomina d')
						 ->join('cat_Empleados ce','d.Id_Empleado = ce.Id')
						 ->where('Id_Nomina',$idNomina);

		$query = $this->db->get();
		if ($query != false && $query->num_rows() > 0) return $query->result();
		else return false;
	}

	public function actualiza_fechas_periodo($datos)
	{
		$parametros = "@Id_nomina = ?, @FechaIni = ?, @FechaFin = ?, @NominaCerrada = ?, @FechaPago = ?, @FechaDispersion = ?";
		$sql = "exec pa_UpdHisNomina ".$parametros;
		$query = $this->db->query($sql,$datos);

		if ($query != false) {
			$afftectedRows = $this->db->affected_rows();
			if ($afftectedRows > 0) return true;
		}
		return false;
	}

	public function guarda_info_uuid($datos)
	{
		$parametros = "@PresupuestoId = ?, @Serie = ?, @UUID = ?, @Credencial = ?, @FechaPago = ?, @FechaInicio = ?, @FechaEmision = ?, @FechaFin	= ?, @MontoTotal = ?,  @Usuario = ?";
		$sql = "exec p_admarh_actualizaUUID ".$parametros;
		$query = $this->db->query($sql,$datos);

		if ($query != false) {
			return $query->row();
		}
		return false;
	}

	public function registra_uuid_empleado($datos)
	{
		$parametros = "@IdNomina = ?, @IdEmpleado = ?, @TipoNominaId = ?, @Serie = ?, @UUID = ?, @FechaEmision = ?, @Usuario = ?";
		$sql = "exec p_admarh_registraUUIDxEmpl ".$parametros;
		$query = $this->db->query($sql,$datos);

		if ($query != false) {
			return $query->row();
		}
		return false;
	}

	public function obtener_historial_uuid($datos)
	{
		$parametros = " @IdNomina = ?,
										@TipoNominaid = ?";
		$sql = "exec p_admarh_getUUIDXQuincena ".$parametros;
		$query = $this->db->query($sql,$datos);

		if ($query != false) {
			if ($query->num_rows() > 0) {
				$result = $query->result();
				return $result;
			}
			else return false;
		}
		else return false;
	}

	public function confirmar_tipo_nomina($datos,$idPresupuesto)
	{
		$this->db->where($datos);
    $query = $this->db->update('det_NominaXTipo', array('Confirmada' => 1));
		if ($query != false) {
			$afftectedRows = $this->db->affected_rows();
			if ($afftectedRows > 0) return true;
		}
		return false;
	}

	public function confirma_pago_primas($idPeriodoPago)
	{
		$parametros = "@Periodopagoid = ?";
		$sql = "exec sp_ConfirmaPagoPrimas ".$parametros;
		$query = $this->db->query($sql,$idPeriodoPago);

		if (!empty($query)) return true;
		return false;
	}

	public function cerrar_periodo($datos)
	{
		$parametros = "@IdNomina = ?, @PresupuestoId = ?";
		$sql = "exec p_admarh_CierraQuincena ".$parametros;
		$query = $this->db->query($sql,$datos);

		if (!empty($query)) {
			if ($query->num_rows() > 0) {
				$result = $query->row();
				return $result;
			}
		}
		return false;
	}

	public function abrir_periodo($datos)
	{
		$parametros = "@FechaIni = ?, @FechaFin = ?, @FechaPago = ?, @FechaDispersion = ?, @PresupuestoId = ?";
		$sql = "exec p_admarh_AbreQuincena ".$parametros;
		$query = $this->db->query($sql,$datos);

		if (!empty($query)) {
			if ($query->num_rows() > 0) {
				$result = $query->row();
				return $result;
			}
		}
		return false;
	}

	public function actualiza_nomina($idPresupuesto,$idNomina,$datos)
	{
    $this->db->where('Id',$idNomina);
    $query = $this->db->update('His_Nomina',$datos);

		if ($query != false) {
			$afftectedRows = $this->db->affected_rows();
			if ($afftectedRows > 0) {
				$this->db->reset_query();
				if (!empty($datos['NominaCerrada'])) $this->db->delete('tmp_PagosEspecialesDiasxCat', array('PresupuestoID' => $idPresupuesto));
				return true;
			}
		}
		return false;
	}

	public function empleados_faltas_incorrectas($idPeriodoPago, $dias=30)
	{
		$parametros = "@PeriodoPagoId = ?, @NoDias = ?";
		$sql = "exec p_admarh_get_EmpleadosConFaltasIncorrectas ".$parametros;
		$query = $this->db->query($sql,array($idPeriodoPago,$dias));

		if (!empty($query)) { if (!empty($query->num_rows())) return $query->row(); }
		return false;
	}

	public function detalle_faltas_incorrectas($idPeriodoPago, $dias=30)
	{
		$parametros = "@PeriodoPagoId = ?, @NoDias = ?";
		$sql = "exec p_admarh_get_DetalleFaltasIncorrectas ".$parametros;
		$query = $this->db->query($sql,array($idPeriodoPago,$dias));

		if (!empty($query)) { if (!empty($query->num_rows())) return $query->result(); }
		return false;
	}

	public function empleados_conceptos_sin_calculo($idPeriodoPago)
	{
		$parametros = "@PeriodoPagoId = ?";
		$sql = "exec p_admarh_get_EmpleadosConConceptosSinPago ".$parametros;
		$query = $this->db->query($sql,$idPeriodoPago);

		if (!empty($query)) { if (!empty($query->num_rows())) return $query->row(); }
		return false;
	}

	public function detalle_empleados_sin_calculo($idPeriodoPago)
	{
		$parametros = "@PeriodoPagoId = ?";
		$sql = "exec p_admarh_get_DetalleConConceptosSinPago ".$parametros;
		$query = $this->db->query($sql,$idPeriodoPago);
		if (!empty($query)) { if (!empty($query->num_rows())) return $query->result(); }
		return false;
	}

	public function actualiza_antiguedad($idPeriodoPago)
	{
		$parametros = "@PeriodoID = ?";
		$sql = "exec p_admarh_ActualizaAntiguedadxNomina ".$parametros;
		$query = $this->db->query($sql,$idPeriodoPago);
		if (!empty($query)) {
			if ($query->num_rows() > 0) {
				$result = $query->row();
				return $result;
			}
		}
		return false;
	}

}
