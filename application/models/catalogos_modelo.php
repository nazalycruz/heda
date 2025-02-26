<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Catalogos_modelo extends CI_Model{

	protected $table_name = null;

	function _construct(){
		parent::Model();
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

	function set_basic_table($table_name = null){
		$this->table_name = $table_name;
		return true;
	}

	public function traer_catalogo($tabla,$activo=true, $c_activo = 'Activo', $valor = 1){
		if( $activo ) $query = $this->db->get_where($tabla, array($c_activo => $valor));
		else $query = $this->db->get($tabla);
		if($query != false)	return $query->result();
		else return false;
	}

	public function traer_catalogo_filtrado($tabla, $filtro, $valorFiltro, $c_activo='Activo'){
		$query = $this->db->get_where($tabla, array($filtro => $valorFiltro, $c_activo => 1));
		if( $query != false ){
			if ( $query->num_rows() > 0 ) return $query->result();
			else return false;
		}
		else return false;
	}

	public function traer_cat_varios_filtros($tabla, $filtros=''){ //<<<RPERAZA(2021.07.12): CASU 1306/2021
		if (empty($filtros)) $filtros = array();
		$query = $this->db->get_where($tabla, $filtros);
		if( $query != false ){
			if ( $query->num_rows() > 0 ) return $query->result();
			else return false;
		}
		else return false;
	}

	public function trae_registro_catalogo($tabla,$id,$campoid){
		$query = $this->db->get_where($tabla,array($campoid => $id));
		if($query != false)	return $query->row();
		else return false;
	}

 /**GSantos, 2021.12.21 Se cambia para que lo traiga del catálogo, en vez de la vista.**/
	public function trae_cat_tipoNomina(){
		$this->db->select();
		$this->db->from('cat_TipoNomina');
		$this->db->where('Activo',1);

		$query = $this->db->get();
		if( $query != false && $query->num_rows() > 0 ) return $query->result();
		else return false;
	}

	/**
	 * [trae_cat_conceptos description]
	 * @method trae_cat_conceptos
	 * @author alopez
	 * @date
	 * @param  [type]             $criterio                  [description]
	 * @param  [type]             $valor                     [description]
	 * @param  integer            $ClaveRecibo               [description]
	 * @return [type]                          [description]
	 */
	 public function trae_cat_conceptos($criterio=0,$valor=0,$ClaveRecibo=0,$confirmado=1,$idPresupuesto=0){
 		switch ($criterio) {
 			case '1':
 				$this->db->where('EsPercepcion',$valor);
 				break;
 			case '2':
 				$this->db->where('AntesDeImp',$valor);
 				break;
 			case '3':
 				$this->db->where('EsPrestamo',$valor);
 				break;
 			case '4':
 				$this->db->where('Calculado',$valor);
 				break;
 			case '5':
 				// $this->db->order_by('EsPercepcion desc,ClaveRecibo');
 			default:
 				break;
 		}
 		$this->db->select("cc.Calculado, cc.EsPrestamo, cc.AntesDeImp, cc.EsPercepcion, cc.Descripcion, cc.ClaveRecibo, cc.Id, cc.Frecuencia, cc.Quincena, cc.PagoUnico,
 						 					 cc.TieneParteExcenta, cc.DiasSalMinParteExc, cc.TipoConceptoID, ctc.TipoConcepto,
 											 SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1,4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, cc.CuentaContable AS Gastos, cc.PartidaPresupuestal, cc.SubPartidaPresupuestal,
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, cc.CuentaContable AS Gastos, cc.PartidaPresupuestal, cc.SubPartidaPresupuestal, cc.ClaveSAT, cc.Confirmado,
 											 ISNULL(ccp.ClavePlanCuentas,'') as ClavePlanCuentas")
 							->from('dbo.cat_Conceptos cc')
 							->join('dbo.Cat_TipoConcepto ctc','cc.TipoConceptoID = ctc.ClaveTipo')
 							->join('conf_conceptoCvePres ccp', 'cc.Id = ccp.IdConcepto AND ccp.IdPresupuesto = '.$idPresupuesto, 'left')
 							->where('Confirmado',$confirmado)
 							->order_by('cc.EsPercepcion DESC, cc.ClaveRecibo');
 		if (!empty($ClaveRecibo)) $this->db->where('ClaveRecibo',$ClaveRecibo);
 		$query = $this->db->get();
 		if ($query != false && $query->num_rows() > 0) {
 			if (empty($ClaveRecibo)) return $query->result();
 			else return $query->row();
 		}
 		else return false;
 	}

	public function trae_dias_festivos()
	{
		$anio = date('Y');
    $this->db->select('DiaID, FechaFestiva, Descripcion')
    								->from('Cat_DiasFestivos');
										// ->where('YEAR(FechaFestiva) = ',$anio)
										// ->or_where('YEAR(FechaFestiva) =',1900);

    $query = $this->db->get();
    if ($query != false && $query->num_rows() > 0) return $query->result();
    else return false;
	}

	// TODO: modificar para no usar la vista vw_CatISSTEY
	public function trae_cat_ISSTEY(){
		$this->db->select();
		$this->db->from('vw_CatISSTEY');

		$query = $this->db->get();
		if( $query != false && $query->num_rows() > 0 ) return $query->result();
		else return false;
	}

	public function trae_cat_periodos($orden='',$asc=false){
		$this->db->select();
		$this->db->from('Cat_Periodos');
    if( !empty($orden) ) $this->db->order_by($orden,($asc ? 'ASC' : 'DESC'));

		$query = $this->db->get();
    if( $query != false && $query->num_rows() > 0 ) return $query->row();
    else return false;
	}

	public function obtener_tabuladores_ISR($periodo){
		$this->db->select();
		$this->db->from('cat_ISR');
    $this->db->where('TipoPeriodo',$periodo);

		$query = $this->db->get();
    if( $query != false && $query->num_rows() > 0 ) return $query->result();
    else return false;
	}

	public function obtener_tabuladores_subsidio($periodo){
		$this->db->select();
		$this->db->from('cat_Subsidio');
		$this->db->where('TipoPeriodo',$periodo);

		$query = $this->db->get();
		if( $query != false && $query->num_rows() > 0 ) return $query->result();
		else return false;
	}

	public function obtener_conceptos($idPresupuesto)
	{
		$parametros = "@IdPresupuesto = ?";
    $sql = "exec pa_admarh_getConceptos ".$parametros;

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

	public function guarda_tabulador_isr($datos,$porcentaje){
		$parametros = "@idISR = ?
									,@LimInf = ?
									,@LimSup = ?
									,@CuotaFija = ?
									,@TipoPeriodo = ?
									,@usuario = ?
									,@Porcentaje = ".$porcentaje;

		$sql = "exec p_admarh_Guarda_catISR ".$parametros;

		$query = $this->db->query($sql,$datos);

		if ($query != false) {
			$row = $query->row();
			if ($row->id > 0) return true;
			else return false;
		}
		else return false;
	}

	public function guarda_tabulador_subsidio($datos){
		$parametros = "@idSubsidio = ?
									,@LimInf = ?
									,@LimSup = ?
									,@CuotaFija = ?
									,@TipoPeriodo = ?
									,@usuario = ?";

		$sql = "exec p_admarh_Guarda_catSubsidio ".$parametros;

		$query = $this->db->query($sql,$datos);

		if( $query != false ){
			$row = $query->row();
			if ($row->id > 0) return true;
			else return false;
		}
		else return false;
	}

	public function elimina_tabulador($tabla,$datos)
	{
		$this->db->limit(1);
		$this->db->where($datos);
		$query = $this->db->delete($tabla);
		if ($query != false) {
			if ($this->db->affected_rows() != 1)	return false;
			else return true;
		}
		else return false;
	}

	public function trae_cat_tipoConcepto($id = 0){ //<<<RPERAZA(2021.05.17): CASU 0804/2021
		$this->db->select();
		$this->db->from('Cat_TipoConcepto');
		if( $id > 0 ) $this->db->where('Id', $id);

		$query = $this->db->get();
		if( $query != false ){
			if( $id > 0 ) return $query->row();
			else return $query->result();
		}
		else return false;
	}

	public function trae_tipo_checadas($id = 0){ //<<<RPERAZA(2021.05.17): CASU 0804/2021
		$this->db->select();
		$this->db->from('TipoChecadas');
		if( $id > 0 ) $this->db->where('TipoChecada_Id', $id);

		$query = $this->db->get();
		if( $query != false ){
			if( $id > 0 ) return $query->row();
			else return $query->result();
		}
		else return false;
	}

	public function trae_turnos($id = ""){ //<<<RPERAZA(2021.05.17): CASU 0804/2021
		$this->db->select();
		$this->db->from('tmp_Turnos');
		if( $id != "" ) $this->db->where('turno', $id);

		$query = $this->db->get();
		if( $query != false ){
			if( $id > 0 ) return $query->row();
			else return $query->result();
		}
		else return false;
	}

	public function trae_origenes_movs($id = 0){ //<<<RPERAZA(2021.05.17): CASU 0804/2021
		$this->db->select();
		$this->db->from('cat_OrigenesMovs');
		if( $id > 0 ) $this->db->where('OrigenId', $id);

		$query = $this->db->get();
		if( $query != false ){
			if( $id > 0 ) return $query->row();
			else return $query->result();
		}
		else return false;
	}

	//GSantos, 2021.12.17
	public function trae_cat_conceptosXId($idConcepto, $idPresupuesto){
    $parametros = "@IdConcepto=".$idConcepto.
                  ",@IdPresupuesto=".escapaDatoParaBD($idPresupuesto);

    $sql = "exec p_admarh_getDatosConcepto ".$parametros;
		$query = $this->db->query($sql);
		if( $query != false ){
			if( $idConcepto > 0 ) return $query->row();
			else return $query->result();
		}
		else return false;
	}

	//GSantos, 2021.12.17
	public function trae_cat_ISSTEYXId($idConcepto){
		$parametros = "@IdConcepto=".$idConcepto;

    $sql = "exec p_admarh_getCatISSTEY ".$parametros;
    $query = $this->db->query($sql);
		if ($query != false && $query->num_rows() > 0) {
			if (empty($ClaveRecibo)) return $query->result();
			else return $query->row();
		}
		else return false;
	}

	function actualiza_catalogo($data,$id_key,$id_value){
		return $this->db->update($this->table_name,$data, array($id_key => $id_value));
	}

	function elimina_catalogo($post_array) {
		$query = $this->db->get_where($this->table_name, $post_array);
		if ($query->num_rows() == 1) {
			$delete = $this->db->delete($this->table_name, $post_array);
			if ($delete) return true;
		}
		return false;
	}

	function inserta_catalogo($post_array){
		$query = $this->db->get_where($this->table_name, $post_array);
		if ($query->num_rows() == 0) {
			$insert = $this->db->insert($this->table_name,$post_array);
			if ($insert) {
				if (!empty($this->db->insert_id())) return $this->db->insert_id();
				else return $this->db->affected_rows();
			}
		}
		return false;
	}

	function ejecuta_procedimiento($sp,$datos)
	{
		$sql="exec ".$sp;
		$i = 0;
		$str_params = " ";

		foreach ($datos as $key => $value ) {
			if ($i > 0) $str_params .= ", ";
			$str_params .= "@".$key." = ?";
			$i++;
		}

		$query = $this->db->query($sql.$str_params,$datos);
		return $query;
	}

	public function guarda_registro_catalogo($datos,$id_key,$id_value)
	{
		$id = 0;
		$query = $this->db->get_where($this->table_name, array($id_key => $id_value));
		if ($query->num_rows() > 0) {
			$this->db->where($id_key,$id_value);
			$query = $this->db->update($this->table_name,$datos);
			if ($query) $id = $id_value;
		}
		else {
			$this->db->insert($this->table_name,$datos);
			$id = $this->db->insert_id();
		}

		return $id;
	}

	public function sesiones($fechaini,$fechafin,$idPresupuesto)
	{
		$this->secgral->select("IdSesion, FORMAT(FechaHoraSesion,'dd/MM/yyyy') as Fecha, CONCAT(dbo.fn_OrdinalEnLetras(Numero,1), ' - ',FORMAT(FechaHoraSesion,'dd/MM/yyyy'), ' - ', TipoSesion) as Sesion,  FechaHoraSesion");
		$this->secgral->from("Sesiones");
		$this->secgral->where('IdResponsable',$idPresupuesto);
		$this->secgral->where('FechaHoraSesion >=', $fechaini);
		$this->secgral->where('FechaHoraSesion <=', $fechafin);
		$this->secgral->order_by('IdSesion','desc');
		$query = $this->secgral->get();
		if ($query != false && $query->num_rows() > 0) return $query->result();
		else return false;
	}

	public function conf_emisores_tipo_nomina($idEmisor,$idPresupuesto)
	{
		$this->db->select('ctn.Id, ctn.Descripcion, ISNULL(cet.idEmisor,0) as conf')
				 		 ->from('cat_TipoNomina ctn')
				 	 	 ->join('conf_EmisorTipoNomina cet','ctn.Id = cet.idTipoNomina AND cet.idPresupuesto = '.$idPresupuesto.' AND cet.idEmisor = '.$idEmisor,'left')
				 	 	 ->where('ctn.ACTIVO = 1');
		$query = $this->db->get();
		if ($query != false && $query->num_rows() > 0) return $query->result();
		else return false;
	}

}
