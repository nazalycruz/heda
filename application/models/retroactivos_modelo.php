<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Retroactivos_modelo extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	public function iniciar_transaccion(){
		$this->db->trans_start();
	}

	public function terminar_transaccion($errores){
		if ($this->db->trans_status() === FALSE || $errores > 0) {
			$this->db->trans_rollback();
		}
		else {
			$this->db->trans_commit();
		}
	}

	public function calcula_quincena($datos)
	{
		$parametros = "@PeriodoID = ?, @EmpleadoID = ?, @Configurado = ?, @Usuario = ?";
		$sql = "exec pa_admarh_CalculaRetroactivoXPeriodo ".$parametros;
		$query = $this->db->query($sql,$datos);

		if ($query != false) {
			$row = $query->row();
			if (!empty($row->Resultado)) return true;
		}
		log_message('calculo','retroactivos_modelo - calcula_quincena(): '.$sql);
		return false;
	}

	public function obtener_empleados_retroactivo($quincenas)
	{
		$this->db->distinct()
						 ->select("Id_Empleado, ce.Credencial, ce.Nombre + ' ' + ce.Apellido1 + ' ' + ce.Apellido2 as  Empleado")
						 ->from('det_nominaretroactivo dnr')
						 ->join('cat_Empleados ce','dnr.Id_Empleado = ce.Id')
						 ->where_in('Id_Nomina',$quincenas);
		$query = $this->db->get();
		if ($query != false && $query->num_rows() > 0) return $query->result();
		else return false;
	}

	public function calcula_total($datos)
	{
		$parametros = "@idNomina = ?, @idPresupuesto = ?, @idEmpleado = ?";
		$sql = "exec p_admarh_ConfiguraTotalRetroactivo ".$parametros;
		$query = $this->db->query($sql,$datos);

		if ($query != false) {
			$row = $query->row();
			if (!empty($row->Resultado)) return true;
		}
		log_message('calculo','retroactivos_modelo - calcula_total(): '.$sql);
		return false;
	}

	public function configurar_empleado($datos)
	{
		$parametros = "@idNomina = ?, @idPresupuesto = ?, @idEmpleado = ?";
		$sql = "exec p_admarh_ConfiguraRetroactivoEmpleado ".$parametros;
		$query = $this->db->query($sql,$datos);

		if ($query != false) {
			$row = $query->row();
			if (!empty($row->Resultado)) return true;
		}
		log_message('calculo','retroactivos_modelo - configurar_empleado(): '.$sql);
		return false;
	}

	public function consulta_total($idNomina,$idEmpleado='%')
	{
		$datos = array($idNomina,$idEmpleado);
		$parametros = "@idNomina = ?, @idEmpleado = ?";
		$sql = "exec p_admarh_ListadoRetroactivoporConcepto ".$parametros;
		$query = $this->db->query($sql,$datos);
		if ($query != false && $query->num_rows() > 0) return $query;
		else return false;
	}

	public function obtener_categorias($idPresupuesto,$datos='')
	{
		$this->db->distinct()
						 ->select('cc.*, ISNULL(ccc.MontoBase,0) as Monto')
						 ->from('cat_Categorias cc')
						 ->join('conf_CategoriaConceptos ccc','cc.Id = ccc.Id_Categoria AND ccc.Id_TipoNomina = '.$datos['idTipoNomina'].' AND ccc.Id_Concepto = '.$datos['idConcepto'].' AND ccc.PresupuestoId = '.$idPresupuesto,'left');
		if (!empty($datos['montominimo'])) $this->db->where($datos['montominimo']);
		if (!empty($datos['montomaximo'])) $this->db->where($datos['montomaximo']);
		$this->db->where('cc.Cancelado',0);
		$query = $this->db->get();
		if ($query != false && $query->num_rows() > 0) return $query->result();
		else return false;
	}

	public function obtener_bonos_categorias($idPresupuesto,$datos='')
	{
		$this->db->distinct()
						 ->select('cc.*, ISNULL(ccb.Monto,0) as Monto')
						 ->from('cat_Categorias cc')
						 ->join('conf_ConceptosBonos ccb','cc.Id = ccb.idCategoria AND ccb.idConcepto = '.$datos['idConcepto'].' AND ccb.idPresupuesto = '.$idPresupuesto,'left');
		if (!empty($datos['montominimo'])) $this->db->where($datos['montominimo']);
		if (!empty($datos['montomaximo'])) $this->db->where($datos['montomaximo']);
		$this->db->where('cc.Cancelado',0);
		$query = $this->db->get();
		if ($query != false && $query->num_rows() > 0) return $query->result();
		else return false;
	}

	public function guarda_conf_cat_monto($idCategoria,$monto,$datos)
	{
		$id = 0;
		$query = $this->db->get_where('conf_CategoriaConceptos', array('Id_Categoria' => $idCategoria, 'Id_Concepto' => $datos['idConcepto'], 'Id_TipoNomina' => $datos['idTipoNomina'], 'PresupuestoId' => $datos['idPresupuesto']));
		if ($query->num_rows() > 0) {
			$this->db->set('MontoBase',$monto);
			$this->db->where(array('Id_Categoria' => $idCategoria, 'Id_Concepto' => $datos['idConcepto'], 'Id_TipoNomina' => $datos['idTipoNomina'], 'PresupuestoId' => $datos['idPresupuesto']));
			$query = $this->db->update('conf_CategoriaConceptos');
			if ($query) $id = $idCategoria;
		}
		return $id;
	}

	public function guarda_conf_concepto_categoria($idCategoria,$datos)
	{
		$id = 0;
		$query = $this->db->get_where('conf_ConceptosBonos', array('idConcepto' => $datos['idConcepto'], 'idCategoria' => $idCategoria, 'idPresupuesto' => $datos['idPresupuesto']));
		if ($query->num_rows() > 0) {
			$this->db->set('Monto',$datos['Monto']);
			$this->db->set('FUM', date("d/m/Y H:i:s"));
			$this->db->where(array('idConcepto' => $datos['idConcepto'], 'idCategoria' => $idCategoria, 'idPresupuesto' => $datos['idPresupuesto']));
			$query = $this->db->update('conf_ConceptosBonos');

		}
		else {
			$datos['idCategoria'] = $idCategoria;
			$this->db->insert('conf_ConceptosBonos',$datos);
		}
		if ($query) $id = $idCategoria;
		return $id;
	}

}
