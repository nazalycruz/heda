<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Asistencias_modelo extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	public function procesa_asistencias($datos)
	{
		$parametros = "	@IdEmpleado = ?,
										@FechaIni = ?,
										@FechaFin = ?";
		$sql = "exec p_admarh_ProcesaAsistencias ".$parametros;
		$query = $this->db->query($sql,$datos);

		if ($query != false) {
			return true; //para pruebas
			// $row = $query->row();
			// return $row;
		}
		return false;
	}

	public function inserta_asistencia($datos)
	{
		$parametros = "	@EmpleadoID = ?,
										@Fecha = ?,
										@TotalHrs = ?,
										@Credencial	= ?,
										@Descanso = ?,
										@Inhabil = ?,
										@TieneHV = ?,
										@PeriodoPagoID = ?";
		$sql = "exec sp_InsertHisAsistencia ".$parametros;

		$query = $this->db->query($sql,$datos);
		if ($query != false) {
			return true;
		}
		return false;
	}

	public function inserta_detalle_asistencia($datos)
	{
		$parametros = "	@EmpleadoID = ?,
										@Fecha = ?,
										@Turno = ?,
										@CategoriaID	= ?,
										@FolioChecada = ?,
										@HoraChecada = ?,
										@TipoChecadaID = ?,
										@EsConJustificacion = ?,
										@JustificacionID = ?,
										@SeAsumeCorrecto = ?,
										@SeAsumeCorrectoPorID = ?";
		$sql = "exec sp_InsertDetAsistencia ".$parametros;

		$query = $this->db->query($sql,$datos);
		if ($query != false) {
			return true;
		}
		return false;
	}

	public function obtener_checadas($datos)
	{
		$parametros = "	@FechaIni = ?,
										@FechaFin = ?,
										@IdTipoChecada = ?,
										@Justificado = ?,
										@PresupuestoId	= ?,
										@Credencial = ?";
		$sql = "exec p_admarh_getChecadas ".$parametros;

		$query = $this->db->query($sql,$datos);

		if ($query != false) {
			if ($query->num_rows() > 0) {
				$result = $query->result();
				return $result;
			}
		}
		return false;
	}

	public function busca_motivo_checadas($value='')
	{
		// consultar tabla cat_MotivosCorrectoChecadas
	}

}
