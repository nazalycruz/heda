<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Configuraciones_modelo extends CI_Model{
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

  public function guarda_parametros_sistema($idPresupuesto,$parametros){
    $this->db->where('PresupuestoId', $idPresupuesto);
    $query = $this->db->update('ParamSystemNomina', $parametros);
    if( $query != false ) return true;
    else return false;
  }

	public function guarda_conceptos($idPresupuesto,$parametros){
		$this->db->where('Presupuesto', $idPresupuesto);
		$query = $this->db->update('ParametrosdeSistema', $parametros);
		if( $query != false ) return true;
		else return false;
	}

	public function guarda_movimientosRH($idPresupuesto,$parametros){
		$this->db->where('Presupuesto', $idPresupuesto);
		$query = $this->db->update('ParametrosMovsRH', $parametros);
		if( $query != false ) return true;
		else return false;
	}

	public function guarda_tiposnomina($idPresupuesto,$parametros){
		$this->db->where('Presupuesto', $idPresupuesto);
		$query = $this->db->update('ParamSystemTipoNomimas', $parametros);
		if( $query != false ) return true;
		else return false;
	}

	public function guarda_nominaelectronica($idPresupuesto,$parametros){
		$this->db->where('Presupuestoid', $idPresupuesto);
		$query = $this->db->update('Param_ValoresENomina', $parametros);
		if( $query != false ) return true;
		else return false;
	}

	public function trae_pagos_especiales($idConcepto=0){
		$parametros = "@IDConcepto= ?";

    $sql = "exec pa_obtienePagosEspeciales ".$parametros;

		$query = $this->db->query($sql,$idConcepto);

		if( $query != false ){
			if ( $query->num_rows() > 0 ){
				$result = $query->result();
				return $result;
			}
			else return false;
		}
		else return false;
	}

	public function guarda_pago_especial($datos){
		$parametros = "@IDConcepto = ?
									,@Descripcion = ?
									,@FechaInicio = ?
									,@FechaFinal = ?
									,@FechaaPagar = ?
									,@DiasaPagar = ?
									,@PeriodoLaborado = ?
									,@MontoExcento= ?
									,@Gravable = ?
									,@Proporcional = ?
									,@MontoFijo = ?
									,@IDConceptoR = ?
									,@FechaReferencia = ?
									,@MinDiasParaPagar = ?
									,@PresupuestoID = ?";

		$sql = "exec pa_ActualizaPagosEspeciales ".$parametros;

		$query = $this->db->query($sql,$datos);

		if( $query != false ){
			if ( $this->db->affected_rows() > 0 ) return true;
			else return false;
		}
		else return false;
	}

	public function elimina_pago_especial($idConcepto,$idPresupuesto){
		$parametros = "@IDConcepto = ?, @PresupuestoID = ?";

		$sql = "exec pa_EliminaPagoEspecial ".$parametros;

		$query = $this->db->query($sql,array($idConcepto,$idPresupuesto));

		if( $query != false ) return true;
		else return false;
	}

	public function obtener_empleados_proyectar($idPresupuesto){
		$parametros = "@PresupuestoId= ?";
		$sql = "exec sp_GetEmpleadosParaProyectar ".$parametros;

		$query = $this->db->query($sql,$idPresupuesto);

		if( $query != false ){
			if ($query->num_rows() > 0) {
				$result = $query->result();
				return $result;
			}
			else return false;
		}
		else return false;
	}

	public function elimina_dias_pago_especial($idPresupuesto,$idPagoEspecial=0)
	{
		if (!empty($idPagoEspecial)) $this->db->where('IDConcepto',$idPagoEspecial);
		$this->db->where('PresupuestoID', $idPresupuesto);
		$this->db->delete('tmp_DiasPagosEspeciales');
		if ($this->db->affected_rows() == 0) return false;
		else return true;
	}

	public function genera_dias_pago_especial_empleado($idPagoEspecial,$idEmpleado,$idPresupuesto)
	{
		$parametros = "@Id = ?, @IDEmpleado = ?, @PresupuestoId = ?";
		$sql = "exec pa_admarh_PagosEspecialesXEmpleado ".$parametros;
		$query = $this->db->query($sql, array($idPagoEspecial,$idEmpleado,$idPresupuesto));
		if ($query != false && $query->num_rows() > 0) return $query->row();
		else return false;
	}

	public function genera_dias_catEmp_pagosEspeciales($idPagoEspecial,$idEmpleado,$idPresupuesto){
		//en el pa se llama @id_concepto pero realmente es el campo id
		$parametros = "@id_concepto = ?, @IDEmpleado = ?, @PresupuestoId = ?";
		$sql = "exec pa_tmpDiasxCatPEAllXEmpleadoID ".$parametros;
		$query = $this->db->query($sql,array($idPagoEspecial,$idEmpleado,$idPresupuesto));
		if ($query != false && $query->num_rows() > 0) return $query->row();
		else return false;
	}

	public function genera_dias_emp_pagosEspeciales($idPagoEspecial,$idEmpleado,$idPresupuesto){
		//en el pa se llama @id_concepto pero realmente es el campo id
		$parametros = "@ID_concepto = ?, @ID_Empleado = ?, @PresupuestoId = ?";
		$sql = "exec pa_DiasPagosEspecialesAllXEmpleadoID ".$parametros;

		$query = $this->db->query($sql,array($idPagoEspecial,$idEmpleado,$idPresupuesto));

		if ($query != false) return true;
		else return false;
	}

	public function obtener_dias_porEmpleado($idEmpleado,$fechaini="01/01/1900",$fechafin="01/01/1900"){
		$parametros = "@FechaIni= ?, @FechaFin = ?, @EmpleadoID = ?";
		$sql = "exec p_admarh_DiasXQuincena ".$parametros;
		$query = $this->db->query($sql,array($fechaini,$fechafin,$idEmpleado));

		if ($query != false) {
			if ($query->num_rows() > 0) {
				$result = $query->result();
				return $result;
			}
		}
		return false;
	}

	/**
	 * Esta función va a devolver todos los movimientos que deben ser considerados para contabilizar los días que ha laborado un empleado en un periodo dado.
	 * @method obtener_movimientos_paraDias
	 * @author alopez
	 * @return [type]                       [description]
	 */
	public function obtener_movimientos_paraDias($fechaini,$fechafin,$credencial){
		$parametros = "@FechaIni= ?, @FechaFin = ?, @Credencial = ?";
		$sql = "exec p_admasg_MovimientosParaDias ".$parametros;
		$query = $this->secgral->query($sql,array($fechaini,$fechafin,$credencial));

		if( $query != false ){
			if ( $query->num_rows() > 0 ){
				$result = $query->result();
				return $result;
			}
			else return false;
		}
		else return false;
	}

	public function obtener_conceptos_gravados($idPresupuesto){
		$parametros = "@PresupuestoId= ?";
		$sql = "exec p_admarh_getConceptosGravados ".$parametros;
		$query = $this->db->query($sql,$idPresupuesto);

		if ($query != false) {
			if ($query->num_rows() > 0) {
				$result = $query->result();
				return $result;
			}
			else return false;
		}
		else return false;
	}

	public function inserta_conceptos_gravar($idConcepto,$idPresupuesto){
		$parametros = "@ConceptoId = ?, @PresupuestoId = ?";
		$sql = "exec p_admarh_insertConceptosAGravar ".$parametros;
		$query = $this->db->query($sql,array($idConcepto,$idPresupuesto));
		if ($query != false) return true;
		else return false;
	}

	public function elimina_conceptos_gravar($idConcepto,$idPresupuesto){
		$parametros = "@ConceptoId = ?, @PresupuestoId = ?";
		$sql = "exec p_admarh_deleteConceptosAGravar ".$parametros;
		$query = $this->db->query($sql,array($idConcepto,$idPresupuesto));
		if ($query != false) return true;
		else return false;
	}

	public function diasProyectados_porEmpleado_porConcepto($idEmpleado,$idConcepto){
		$this->db->select('T.*, C.Descripcion as Categoria');
		$this->db->from('tmp_DiasPagosEspeciales T');
		$this->db->join('cat_Categorias C','T.CategoriaID = C.Id');
		$this->db->where('T.EmpleadoID',$idEmpleado);
		$this->db->where('T.IDConcepto',$idConcepto);
		$query = $this->db->get();
    if ($query != false && $query->num_rows() > 0) return $query->result();
    else return false;
	}

	public function guarda_proyeccion_manual($datos){
		$parametros = "	@EmpleadoID = ?,
										@FechaIni = ?,
										@FechaFin = ?,
										@CategoriaID = ?,
										@Dias_p_c = ?,
										@Dias_r_c = ?,
										@Dias_r = ?,
										@Dias_p = ?,
										@Puestos = ?,
										@Tipo = ?,
										@IDConcepto = ?,
										@PresupuestoId = ?";
		$sql = "exec p_admarh_InsertProyeccManualXEmpIDXConcID ".$parametros;

		$query = $this->db->query($sql,$datos);

		if ($query != false) return true;
		else return false;
	}

	public function elimina_proyeccion_manual_empleado($idEmpleado,$idPresupuesto){
		$this->db->delete('tmp_VolcarDiasCat', array('EmpleadoID' => $idEmpleado));
		$this->db->delete('tmp_PagosEspecialesDiasxCat', array('Id_empleado' => $idEmpleado));
		$this->db->delete('tmp_DiasPagosEspeciales', array('EmpleadoId' => $idEmpleado));
	}

	public function elimina_proyeccion_manual_concepto($idEmpleado,$idPresupuesto,$idConcepto){
		$this->db->delete('tmp_VolcarDiasCat', array('EmpleadoID' => $idEmpleado, 'IDConcepto' => $idConcepto));
		$this->db->delete('tmp_PagosEspecialesDiasxCat', array('Id_empleado' => $idEmpleado,'Id_concepto' =>$idConcepto));
		$this->db->delete('tmp_DiasPagosEspeciales', array('EmpleadoId' => $idEmpleado, 'IDConcepto' => $idConcepto));
	}

	public function guarda_configuracion_empleado($datos)
	{
		$query = $this->db->get_where('conf_Empleado', array('Id_Empleado' => $datos['Id_Empleado'], 'Id_Concepto' => $datos['Id_Concepto'], 'Id_TipoNomina' => $datos['Id_TipoNomina']));
		if ($query->num_rows() > 0) {
			$this->db->where(array('Id_Empleado' => $datos['Id_Empleado'],'Id_Concepto' => $datos['Id_Concepto'], 'Id_TipoNomina' => $datos['Id_TipoNomina']));
			$query = $this->db->update('conf_Empleado',$datos);
			if ($query) $id = 1;
		}
		else {
			$this->db->insert('conf_Empleado',$datos);
			$id = $this->db->insert_id();
		}
		return $id;
	}

	public function guarda_pago_isstey($idConf,$datos,$idPeriodoPago,$claveRecibo,$folio)
	{
		$query = $this->db->get_where('conf_PagosISSTEY', array('EmpleadoID' => $datos['Id_Empleado'], 'PeriodoId' => $idPeriodoPago, 'ClaveRecibo' => $claveRecibo, 'Activo' => 0));
		if ($query->num_rows() > 0) {
			$this->db->where(array('EmpleadoID' => $datos['Id_Empleado'], 'PeriodoId' => $idPeriodoPago, 'ClaveRecibo' => $claveRecibo, 'Activo' => 0));
			$query = $this->db->update('conf_PagosISSTEY',array('ConfEmpleadoID' => $idConf,'Activo' => 1, 'MontoQ' => $datos['Monto']));
		}
		else {
			$query = $this->db->get_where('conf_PagosISSTEY', array('EmpleadoID' => $datos['Id_Empleado'], 'ConfEmpleadoID' => $idConf));
			if ($query->num_rows() > 0) {
				$this->db->where(array('EmpleadoID' => $datos['Id_Empleado'], 'ConfEmpleadoID' => $idConf));
				$query = $this->db->update('conf_PagosISSTEY',array('Folio' => $folio, 'MontoQ' => $datos['Monto'], 'MontoT' => $datos['Monto'], 'Activo' => 1));
			}
			else {
				$query = $this->db->insert('conf_PagosISSTEY',array('PeriodoID' => $idPeriodoPago, 'EmpleadoID' => $datos['Id_Empleado'], 'ClaveRecibo' => $claveRecibo, 'Folio' => $folio, 'MontoQ' => $datos['Monto'], 'MontoT' => 0, 'ConfEmpleadoID' => $idConf));
			}
		}
		if ($query) return true;
		else return false;
	}

	public function guarda_configuracion_por_archivo($idEmpleado,$datos)
	{
		if (!empty($idEmpleado)) {
			$datos['Id_Empleado'] = $idEmpleado;
			$query = $this->db->get_where('conf_Empleado', array('Id_Empleado' => $idEmpleado,'Id_Concepto' => $datos['Id_Concepto'], 'Id_TipoNomina' => $datos['Id_TipoNomina']));
			if ($query->num_rows() > 0) {
				$this->db->where(array('Id_Empleado' => $idEmpleado,'Id_Concepto' => $datos['Id_Concepto'], 'Id_TipoNomina' => $datos['Id_TipoNomina']));
				$query = $this->db->update('conf_Empleado',$datos);
				if ($query) $id = 1;
			}
			else {
				$this->db->insert('conf_Empleado',$datos);
				$id = $this->db->insert_id();
			}
			return array('id' => $id, 'idEmpleado' => $idEmpleado);
		}
		return false;
	}

	public function guardar_conf_anticipo_aguinaldo($datos)
	{
		$parametros = "	@IdEmpleado = ?,
										@Id_TipoNomina = ?,
										@Gravado = ?,
										@TieneParteExenta = ?,
										@DiasParteExenta = ?,
										@Monto = ?";
		$sql = "exec p_admarh_insertaConfAnticipoAguinaldo ".$parametros;

		$query = $this->db->query($sql,$datos);

		if ($query != false) {
			$row = $query->row();
			if (!empty($row->Resultado)) return true;
		}
		return false;
	}

	public function guardar_conf_complemento_aguinaldo($datos)
	{
		$parametros = "	@IdNomina = ?,
										@IdEmpleado = ?,
										@MontoAguinaldo = ?,
										@SaldoAguinaldo	= ?,
										@MontoExento = ?,
										@PresupuestoId = ?";
		$sql = "exec p_admarh_AplicaAnticipo ".$parametros;

		$query = $this->db->query($sql,$datos);

		if ($query != false) {
			$row = $query->row();
			if (!empty($row->Exito)) return true;
		}
		return false;
	}

	public function obtener_empleados_complemento($idPresupuesto)
	{
		$parametros = "@PresupuestoId= ?";
		$sql = "exec p_admarh_getPersonalConAnticipo ".$parametros;
		$query = $this->db->query($sql,$idPresupuesto);

		if ($query != false) {
			if ($query->num_rows() > 0) {
				$result = $query->result();
				return $result;
			}
			else return false;
		}
		else return false;
	}

	public function carga_empleados_multicategoria()
	{
		$parametros = " @fechaIni = ?,
										@fechaFin = ?,
										@idTipoNomina = ?,
										@PresupuestoId = ?";
		$sql = "exec pa_admarh_ProyeccionXTipoNomina ".$parametros;
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

	public function obtener_cat_dias_pagosespeciales($idPresupuesto,$datos='')
	{
		$this->db->distinct()
						 ->select('cc.*, ISNULL(dpe.DiasAPagar,0) as DiasAPagar')
						 ->from('cat_Categorias cc')
						 ->join('DiasPagosEspeciales dpe','cc.Id = dpe.IdCategoria AND dpe.Id_TipoNomina = '.$datos['idTipoNomina'].' AND dpe.IdConcepto = '.$datos['idConcepto'],'left');
		if (!empty($datos['montominimo'])) $this->db->where($datos['montominimo']);
		if (!empty($datos['montomaximo'])) $this->db->where($datos['montomaximo']);
		$this->db->where('cc.Cancelado',0);
		$query = $this->db->get();
		if ($query != false && $query->num_rows() > 0) return $query->result();
		else return false;
	}

	public function guarda_cat_dias_pagosespeciales($idCategoria,$datos)
	{
		$id = 0;
		$query = $this->db->get_where('DiasPagosEspeciales', array('IdConcepto' => $datos['IdConcepto'],'IdCategoria' => $idCategoria,'Id_TipoNomina' => $datos['Id_TipoNomina']));
		if ($query->num_rows() > 0) {
			$this->db->where(array('IdConcepto' => $datos['IdConcepto'],'IdCategoria' => $idCategoria,'Id_TipoNomina' => $datos['Id_TipoNomina']));
			$query = $this->db->update('DiasPagosEspeciales',$datos);
			if ($query) $id = 1;
		}
		else {
			$datos['IdCategoria'] = $idCategoria;
			$this->db->insert('DiasPagosEspeciales',$datos);
			$id = $this->db->insert_id();
		}
		return $id;
	}

	// public function borra_configuracion_categoria($idCategoria,$idTipoNomina,$idPresupuesto)
	// {
	// 	$this->db->where(array('Id_Categoria' => $idCategoria, 'Id_TipoNomina' => $idTipoNomina, 'PresupuestoId' => $idPresupuesto));
	// 	if ($this->db->delete('conf_CategoriaConceptos')) return $this->db->affected_rows();
	// 	return FALSE;
	// }

	// public function guarda_configuracion_categoria($datos)
	// {
	// 	$this->db->insert('conf_CategoriaConceptos',$datos);
	// 	$id = $this->db->insert_id();
	// 	if (!empty($id)) return true;
	// 	else return false;
	// }


	// public function guarda_configuracion_categoria($datos)
	// {
	// 	// IF EXISTS (Select * from conf_CategoriaConceptos Where ID_Concepto = @Id_Concepto and Id_Categoria = @Id_Categoria and Id_TipoNomina = @Id_TipoNomina and PresupuestoId = @PresupuestoId)
	// 	$query = $this->db->get_where('conf_Empleado', array('Id_Empleado' => $datos['Id_Empleado'], 'Id_Concepto' => $datos['Id_Concepto'], 'Id_TipoNomina' => $datos['Id_TipoNomina']));
	// 	if ($query->num_rows() > 0) {
	// 		$this->db->where(array('Id_Empleado' => $datos['Id_Empleado'],'Id_Concepto' => $datos['Id_Concepto'], 'Id_TipoNomina' => $datos['Id_TipoNomina']));
	// 		$query = $this->db->update('conf_Empleado',$datos);
	// 		if ($query) $id = 1;
	// 	}
	// 	else {
	// 		$this->db->insert('conf_Empleado',$datos);
	// 		$id = $this->db->insert_id();
	// 	}
	// 	return $id;
	// }

}
