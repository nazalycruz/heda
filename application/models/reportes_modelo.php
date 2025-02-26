<?php //>>>RPERAZA(2021.05.19): CASU 0804/2021

class Reportes_modelo extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	public function iniciar_transaccion(){ //>>>RPERAZA(2021.05.19): CASU 0804/2021
        $this->db->trans_start();
    }

	public function terminar_transaccion($errores){ //>>>RPERAZA(2021.05.19): CASU 0804/2021
		if ($this->db->trans_status() === FALSE || $errores > 0){
			$this->db->trans_rollback();
		}
		else{
			$this->db->trans_commit();
		}
	}

	public function traer_parametros_reporte($idReporte)
	{
		$this->db->select('cpr.*, crp.Orden, crp.Visible')
						 ->from('cat_ParametrosReporte cpr')
						 ->join('conf_ReporteParametro crp','cpr.Clave = crp.claveParametro')
						 ->where('crp.idReporte',$idReporte)
						 ->order_by('crp.Orden');
		$query = $this->db->get();
		if ($query != false && $query->num_rows() > 0) return $query->result();
		else return false;
	}

	public function get_reporte_por_pa($proc_almacenado, $parametros, $conexion){ //>>>RPERAZA(2021.05.19): CASU 0804/2021

		$bd_conexion = $this->load->database($conexion,TRUE);

		$sql="exec ".$proc_almacenado;
		$i = 0;
		$str_params = " ";

		foreach( $parametros as $key => $value ){
			if($i > 0) $str_params .= ", ";
			$str_params .= "@".$key."=".$value;
			$i++;
		}

		$query = $bd_conexion->query($sql.$str_params);
		if ($query != false){
			return $query->result();
		}
		else{
			return false;
		}
	}

	public function comparativa_por_quincena($datos)
	{
		$parametros = "@TipoNominaId = ?,
									 @IdConcepto = ?,
									 @IdNomina1 = ?,
									 @IdNomina2 = ?,
									 @DescNomina1 = ?,
									 @DescNomina2 = ?";

		$sql = "exec p_admarh_getComparativoNominas ".$parametros;
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

	public function generico($idPresupuesto,$select,$where='')
	{
		$this->db->select($select);
		$this->db->from('cat_Empleados ce');
		$this->db->join('cat_Dependencias cd','ce.Id_Dependencia = cd.Id');
		$this->db->join('cat_Categorias cc','ce.Id_Categoria = cc.Id');
		$this->db->join('tmp_Turnos trn','ce.Turno = trn.turno');
		$this->db->join('cat_Colonias col','ce.Colonia = col.ColoniaId');
		$this->db->join('cat_Ciudades ciud','ce.Ciudad = ciud.CiudadId');
		$this->db->join('cat_Sindicatos sind','ce.idSindicato = sind.Id');
		if (in_array('emis.Emisor as Emisor',$select) || !empty($where['rpt_emisor'])) {
			$this->db->join('Conf_PagosENomina enom','ce.Id = enom.EmpleadoId','left');
			$this->db->join('Cat_Emisores emis','enom.EmisorId = emis.Id','left');
			if (!empty($where['rpt_emisor'])) $this->db->where('emis.Id', $where['rpt_emisor']);
			else $this->db->where_in('emis.Id', array(1,5,6));
		}
		$this->db->join('cat_Escolaridad esc','ce.Escolaridad = esc.Id','left');
		//FILTROS
		if (!empty($where['rpt_credencial'])) $this->db->where('ce.Credencial', $where['rpt_credencial']);
		if (!empty($where['rpt_dependencia'])) $this->db->where('ce.Id_Dependencia', $where['rpt_dependencia']);
		if (!empty($where['rpt_categoria'])) $this->db->where('ce.Id_Categoria', $where['rpt_categoria']);
		if (!empty($where['rpt_Contrato'])) $this->db->where('ce.TipoContra', $where['rpt_Contrato']);
		if (!empty($where['rpt_chckHijos'])) $this->db->where('ce.Hijos >=', $where['rpt_chckHijos']);
		if (!empty($where['rpt_chckMadrePadre'])) $this->db->where('ce.SinHijos =', 0);
		if (!empty($where['rpt_Sexo'])) $this->db->where('ce.Sexo', $where['rpt_Sexo']);
		if (!empty($where['rpt_periodo'])) {
			$this->db->where_in('ce.Id', "SELECT DISTINCT Id_Empleado FROM det_Nomina WHERE Id_Nomina = ".$where['rpt_periodo']." AND TipoNominaId = 3 AND Id_Concepto = 45", false);
		}
		if (!empty($where['rpt_inactivo'])) $this->db->where_not_in('ce.Estado', array('A','VA'));
		else $this->db->where_in('ce.Estado', array('A','VA'));

		$this->db->where('ce.Liquidado', empty($where['rpt_liquidado']) ? 0 : 1);
		$this->db->where('cd.ProgramaId', $idPresupuesto);

		$query = $this->db->get();
		if ($query != false && $query->num_rows() > 0) return $query->result();
		else return false;
	}

	public function obtiene_nombre_archivo_electronico($idPeriodoPago,$idTipoNomina)
	{
		$this->db->select(
			"CASE WHEN day(fechaini) = 16 THEN '2A'
				   	WHEN day(fechaini) = 1 THEN '1A' END AS Quincena, upper(datename (m,fechaini)) AS Mes,
						ltrim(rtrim(str(year(FechaIni)))) AS Anio, (YEAR(FechaIni) % 100) AS AnioCorto,
			 CASE WHEN PresupuestoId = '0001' THEN 'TSJ'
						WHEN PresupuestoId = '0002' THEN 'CJ' END AS Presupuesto, ctn.Descripcion as TipoNomina",false);
		$this->db->from('His_Nomina hs');
		$this->db->join('cat_TipoNomina ctn', 'Activo = 1 AND ctn.Id ='.$idTipoNomina);
		$this->db->where('hs.Id',$idPeriodoPago);
		$query = $this->db->get();
		if ($query != false && $query->num_rows() > 0) return $query->row();
		else return false;
	}

	public function empleados_base_contrato($idPresupuesto,$dias=0)
	{
		$parametros = "@IdPresupuesto	 = ?,
									 @DiasContrato		 = ?";
		$datos = array($idPresupuesto,$dias);

		$sql = "exec p_admarh_rptEmpleadosConBaseContratoVigenteXTiempo ".$parametros;
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

	public function percepciones_deducciones($datos)
	{
		$this->db->select("cc.ClaveRecibo as Clave, cc.Descripcion as Descripción, cc.PartidaPresupuestal as Partida Presupuestal")
						 ->select("SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1)
						 		+ '-' + cc.PartidaPresupuestal AS 'Cuenta Contable'",false)
						 ->select("CASE	WHEN cc.EsPercepcion = 1 THEN 'Percepción'
										   			WHEN cc.EsPercepcion = 0 THEN 'Deducción' END AS 'Percepción/Deducción'",false)
						 ->from('dbo.cat_Conceptos cc')
						 ->join('conf_conceptoCvePres ccp', 'cc.Id = ccp.IdConcepto AND ccp.IdPresupuesto = '.$datos['PresupuestoId'], 'left')
						 ->where('cc.CuentaContable <>',"")
						 ->where('Confirmado',1)
						 ->order_by('cc.EsPercepcion DESC');
		if (!empty($datos['ClaveRecibo'])) $this->db->where('ClaveRecibo',$datos['ClaveRecibo']);
 		$query = $this->db->get();
 		if ($query != false && $query->num_rows() > 0) {
 			if (empty($datos['ClaveRecibo'])) return $query->result();
 			else return $query->row();
 		}
 		else return false;
	}

}
