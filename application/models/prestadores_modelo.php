<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prestadores_modelo extends CI_Model {

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

	public function obtener_registro($idPrestador)
	{
		$this->db->join('Conf_PagosENominaPrestServ cpe','cp.Id = cpe.PrestServId');
		$this->db->join('Hist_MovPrestServ mps','cp.Id = mps.IdPrestServ');
		$this->db->where('cp.Id',$idPrestador);
		$query = $this->db->get('cat_PrestadorServicio cp');
		if ($query != false && $query->num_rows() > 0) return $query->row();
    else return false;
	}

  public function controlproceso_nomina_prestadores($idPeriodoPago){
    $this->db->select('PeridoPagoID,RegsIniciales,ConceptAntesImpu,Impuestos,ConceptDespImpu,FechaIni,FechaFin,NominaCerrada');
    $this->db->from('vw_ControlProcesosGenNominaPrestServ');
    $this->db->where('PeridoPagoID',$idPeriodoPago);

    $query = $this->db->get();
    if( $query != false && $query->num_rows() > 0 ) return $query->row();
    else return false;
  }

  public function ultimafecha_asistencias_prestadores($topN=1,$idPeriodoPago=0,$asc=false){
    $this->db->limit($topN);
    $this->db->select();
    $this->db->from('his_AsistenciaPrestServ');
    $this->db->where('PeriodoPagoID',$idPeriodoPago);
    $this->db->order_by('Fecha',($asc ? 'ASC' : 'DESC'));

    $query = $this->db->get();
    if( $query != false && $query->num_rows() > 0 ) return $query->row();
    else return false;
  }

  public function trae_prestadores_regini($idPresupuesto){
    $parametros = "@PresupuestoId=".escapaDatoParaBD($idPresupuesto);
    $sql = "exec sp_GetPrestadoresParaRegIni ".$parametros;

    $query = $this->db->query($sql);
    if( $query != false ){
      if ($query->num_rows() > 0) {
        $result = $query->result();
        return $result;
      }
      else return false;
    }
    else return false;
  }

  public function trae_diasproc_prestadores_regini($idPeriodoPago){
    $select =   array(
                    'Id_PrestServ',
                    'COUNT(Id_PrestServ) as dias'
                );
    $this->db
            ->select($select)
            ->from('Conf_DiasLaboradosPrestServ')
            ->where('Id_Quincena',$idPeriodoPago)
            ->group_by('Id_PrestServ');
    $query = $this->db->get();
    if( $query != false && $query->num_rows() > 0 ) return $query->result();
    else return false;
  }

  public function borrar_regini_prestador($idPrestador,$idPeriodoPago){
    $query = $this->db->delete('Conf_DiasLaboradosPrestServ', array('Id_PrestServ' => $idPrestador, 'Id_Quincena' => $idPeriodoPago));

    if( $query != false ) return true;
		else return false;
  }

  public function busca_turnoprestador_fecha($idPrestador,$fecha){
    $where = "PrestadorID = ".$idPrestador." AND FechaFin >=".escapaDatoParaBD($fecha)." AND FechaInicio <= ".escapaDatoParaBD($fecha)." OR
              (PrestadorID = ".$idPrestador." AND FechaFin = '01/01/1900' AND FechaInicio <= ".escapaDatoParaBD($fecha).")";

    $this->db->select();
    $this->db->from('vw_HistTurnosPrestador');
    $this->db->where($where);

    $query = $this->db->get();
    if( $query != false && $query->num_rows() > 0 ) return $query->row();
    else return false;
  }

  public function traer_generales_prestador($credencial){
    $parametros = "@credencial=".escapaDatoParaBD($credencial);
    $sql = "exec pa_DatosGeneralesPrest ".$parametros;

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

  public function busca_asistencias_prestador($idPrestador,$FechaIni,$FechaFin,$Folio=0){
    $parametros = "@PrestadorID=".$idPrestador.
                  ",@fecha1=".escapaDatoParaBD($FechaIni).
                  ",@fecha2=".escapaDatoParaBD($FechaFin).
                  ",@Folio=".( empty($Folio) ? 0 : $Folio );
    $sql = "exec pa_ObtenChecadasPrest ".$parametros;

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

  public function inserta_registros_iniciales_prestador($idPeriodoPago,$idPrestador,$dias,$entrada,$fecha){
    $parametros = "@Resultado=0".
                  ",@PeriodoPagoID=".$idPeriodoPago.
                  ",@PrestadorID=".$idPrestador.
                  ",@DiasLaborados=".$dias.
                  ",@Entrada=".$entrada.
                  ",@Fecha =".escapaDatoParaBD($fecha);

    $sql = "exec p_admarh_InsDiasLaboradosPrestServxDia ".$parametros;

    $query = $this->db->query($sql);
    if( $query != false ){
      $afftectedRows = $this->db->affected_rows();
      if( $afftectedRows > 0 ) return true;
      else return false;
    }
    else return false;
  }

  public function actualiza_proceso_nomina_prestadores($proceso,$idPeriodoPago,$regsiniciales=0,$antesimpuestos=0,$impuestos=0,$despimpuestos=0){
    switch ($proceso) {
      case '1': //registros iniciales
        $parametros = "@PeridoPagoID=".$idPeriodoPago.
                      ",@RegsIniciales=".$regsiniciales;
        $sql = "exec sp_Update_ControlProcesosGenNomina1PrestServ ".$parametros;
        break;
      case '2': //conceptos antes de impuestos
        $parametros = "@PeridoPagoID=".$idPeriodoPago.
                      ",@ConceptAntesImpu=".$antesimpuestos;
        $sql = "exec sp_Update_ControlProcesosGenNomina2PrestServ ".$parametros;
        break;
      case '3': //impuestos
        $parametros = "@PeridoPagoID=".$idPeriodoPago.
                      ",@Impuestos=".$impuestos;
        $sql = "exec sp_Update_ControlProcesosGenNomina3PrestServ ".$parametros;
        break;
      case '4': //después de impuestos
        $parametros = "@PeridoPagoID=".$idPeriodoPago.
                      ",@ConceptDespImpu=".$despimpuestos;
        $sql = "exec sp_Update_ControlProcesosGenNomina4PrestServ ".$parametros;
        break;
      case '5': //ISSTEY No se utiliza para prestadores
        break;
      case '6': //afecta según los parámetros enviados
        $parametros = "@PeridoPagoID=".$idPeriodoPago.
                      ",@RegsIniciales=".$regsiniciales.
                      ",@ConceptAntesImpu=".$antesimpuestos.
                      ",@Impuestos=".$impuestos.
                      ",@ConceptDespImpu=".$despimpuestos;
        $sql = "exec sp_Update_ControlProcesosGenNominaPrestServ ".$parametros;
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

  public function trae_prestadores_gennomina($idPeriodoPago){
    $parametros = "@Id_Nomina=".$idPeriodoPago;
    $sql = "exec pa_GetPrestadoresParaNominaxDias ".$parametros;

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

  public function trae_prestadores_en_nomina($idPeriodoPago){
    $parametros = "@id_nomina=".$idPeriodoPago;
    $sql = "exec pa_GetPrestadoresEnNomina ".$parametros;

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

  public function borra_periodo_pago($idPeriodoPago)
  {
    $parametros = "@Id_Nomina = ?";
    $sql = "exec sp_DeleDetNominaXPerPagoIDPrestServ ".$parametros;

    $query = $this->db->query($sql,$idPeriodoPago);
    if ($query != false) return true;
    else return false;
  }

  public function busca_prestador($datos)
  {
    $parametros = "@Id = ?, @Credencial = ?, @Nombre = ?, @Apellido1 = ?, @Apellido2 = ?";
    $sql = "exec p_admarh_SearchPrestadorServicio ".$parametros;

    $query = $this->db->query($sql,$datos);
    if ($query != false){
      $row = $query->row();
      return $row;
    }
    else return false;
  }

  public function guarda_prestador($datosPrestador)
  {
    $parametros = "@Resultado = ?,
                   @Operacion = ?,
                   @Id = ?,
                   @Credencial = ?,
                   @Nombre = ?,
                   @Apellido1 = ?,
                   @Apellido2 = ?,
                   @Sexo = ?,
                   @RFC = ?,
                   @IMSS = ?,
                   @Direccion = ?,
                   @Colonia = ?,
                   @Telefono = ?,
                   @EstadoDir = ?,
                   @Hijos = ?,
                   @FechaNac = ?,
                   @EdoCivil = ?,
                   @FechaAlta = ?,
                   @FechaBaja = ?,
                   @LastUpdate = ?,
                   @UMF = ?,
                   @CURP = ?,
                   @Presupuesto = ?,
                   @Disponible = ?,
                   @Ciudad = ?,
                   @Email = ?,
                   @turno = ?,
                   @checa = ?,
                   @estado = ?";
    $sql = "exec p_admarh_GuardarPrestadorServicio ".$parametros;

    $query = $this->db->query($sql,$datosPrestador);
    $result = $query->result_array();
    if ($query != false) {
      $row = $query->row();
      if ($row->result > 0)  return $row->result;
      else return false;
    }
    else return false;
  }

	public function agrega_tipo_nomina($idPeriodoPago,$fechaPago,$tipoNomina=44)
	{
		$id = 0;
		$query = $this->db->get_where('det_NominaXTipoPrestServ', array('PeriodoID' => $idPeriodoPago, 'TipoNominaID' => $tipoNomina));
		if ($query->num_rows() == 0) {
			$datos = array('PeriodoID'		=> $idPeriodoPago,
										 'FechaPago'		=> $fechaPago,
										 'Cerrada'			=> 0,
										 'TipoNominaID'	=> $tipoNomina,
										 'Confirmada'		=> 0
										);
			$this->db->insert('det_NominaXTipoPrestServ',$datos);
			$id = $this->casu->insert_id();
		}
		else return true;
		return $id;
	}

	public function tipo_nomina($idPrestador,$idPeriodoPago)
	{
		$this->db->distinct()
						 ->select('dn.TipoNominaId, ctn.Descripcion, 0 as seleccion')
						 ->from('Det_Nomina_PrestServ dn')
						 ->join('cat_TipoNomina ctn','dn.TipoNominaId = ctn.Id')
						 ->where(array('Id_nomina' => $idPeriodoPago, 'Id_prestserv' => $idPrestador));
		$query = $this->db->get();
		return $query->result();
	}

	public function detalle_nomina($idPrestador,$idPeriodoPago)
	{
		$this->db->select('dn.*,cc.ClaveRecibo,cc.Descripcion as Concepto,cc.EsPercepcion,cc.TipoConcepto,ccp.Descripcion as CatDiaPago')
						 ->from('Det_Nomina_PrestServ dn')
						 ->join('cat_Conceptos cc','dn.Id_Concepto = cc.Id')
						 ->join('Cat_CategoriasPrestServ ccp','dn.Clave_Categoria = CONVERT(NUMERIC,ccp.Clave)')
						 ->where(array('Id_nomina' => $idPeriodoPago, 'Id_prestserv' => $idPrestador));
		$query = $this->db->get();
		return $query->result();
	}

	public function elimina_detalle_nomina($idPeriodoPago,$idPrestador)
	{
		$this->db->where(array('Id_Nomina' => $idPeriodoPago, 'Id_PrestServ' => $idPrestador));
		if ($this->db->delete('Det_Nomina_PrestServ')) return $this->db->affected_rows();
		return FALSE;
	}

	public function inserta_calculo($idPeriodoPago,$idPrestador,$prestador,$conf,$dias,$fechadisp,$tipoNomina='44')
	{
		if (!empty($prestador)) {
			$queryHistNominas = $this->db->get_where('hist_NominasxQuincenaxPrestServ', array('Id_nomina' => $idPeriodoPago, 'TipoNominaId' => $tipoNomina, 'Id_PrestServ' => $idPrestador));
			if ($queryHistNominas->num_rows() == 0) {
				$datosHistNominas = array(
															'Id_nomina'			=> $idPeriodoPago,
															'TipoNominaID'	=> $tipoNomina,
															'Id_prestserv'	=> $idPrestador,
															'Enomina'				=> $prestador->ENomina,
															'NumeroCuenta'	=> $prestador->NumeroCuenta,
															'EmisorId'			=> $prestador->EmisorId,
															'FC'						=> date("d/m/Y H:i:s")
														);
				$this->db->insert('hist_NominasxQuincenaxPrestServ', $datosHistNominas);
			}
			$queryDetPrest = $this->db->get_where('Det_PrestServ_Nomina', array('Id_nomina' => $idPeriodoPago, 'TipoNominaId' => $tipoNomina, 'Id_PrestServ' => $idPrestador));
			if ($queryDetPrest->num_rows() == 0) {
				$datosDetPrest = array(
															'Id_nomina'					=> $idPeriodoPago,
															'TipoNominaId'			=> $tipoNomina,
															'Id_PrestServ'			=> $idPrestador,
															'Categoria_DiaPago'	=> $prestador->ClaveCategoriaPrestServ,
															'DependenciaId'			=> $prestador->IdDependencia,
															'ENomina'						=> $prestador->ENomina,
															'NoCuenta'					=> $prestador->NumeroCuenta,
															'EmisorId'					=> $prestador->EmisorId,
														);
				$this->db->insert('Det_PrestServ_Nomina', $datosDetPrest);
			}
			$queryDetNominaPrest = $this->db->get_where('Det_Nomina_PrestServ', array('Id_nomina' => $idPeriodoPago, 'TipoNominaID' => $tipoNomina, 'Id_prestserv' => $idPrestador));
			if ($queryDetNominaPrest->num_rows() == 0) {
				foreach ($conf as $itemConf) {
					$datosDetNominaPrest[] = array(
						'Id_Nomina'				=> $idPeriodoPago,
						'TipoNominaId'		=> $tipoNomina,
						'Id_PrestServ'		=> $idPrestador,
						'Clave_Categoria'	=> $prestador->ClaveCategoriaPrestServ,
						'Id_Concepto'			=> $itemConf->Id_Concepto,
						'Dias'						=> $dias,
						'Monto'						=> DecimalSinComa($itemConf->Monto),
						'Monto_Gravable'	=> ($itemConf->EsPercepcion == 1 ? DecimalSinComa($itemConf->Monto) : 0),
						'DependenciaId'		=> $prestador->IdDependencia,
						'ENomina'					=> $prestador->ENomina,
						'FechaDispersion'	=> $fechadisp,
					);
				}
			  $this->db->insert_batch('Det_Nomina_PrestServ', $datosDetNominaPrest, FALSE);
			}
			return true;
		}
		return false;
	}

	public function trae_configuracion($idPrestador,$idTipoNomina)
	{
		$this->db->select('cc.Descripcion as Concepto,cps.*,cc.EsPercepcion');
		$this->db->join('cat_Conceptos cc','cps.Id_Concepto = cc.Id');
		$queryConf = $this->db->get_where('conf_PrestServ cps', array('Id_TipoNomina' => $idTipoNomina, 'Id_PrestServ' => $idPrestador));
		return $queryConf->result();
	}

	public function inserta_configuracion($datos)
	{
		$query = $this->db->get_where('conf_PrestServ', array('Id_PrestServ' => $datos['Id_PrestServ'],'Id_Concepto' => $datos['Id_Concepto']));
		if ($query->num_rows() > 0) {
			$this->db->where(array('Id_PrestServ' => $datos['Id_PrestServ'],'Id_Concepto' => $datos['Id_Concepto']));
			$query = $this->db->update('conf_PrestServ',$datos);
			if ($query) $id = 1;
		}
		else {
			$this->db->insert('conf_PrestServ',$datos);
			$id = $this->db->insert_id();
		}

		return $id;
	}

}
