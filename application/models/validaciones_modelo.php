<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Validaciones_modelo extends CI_Model {

  function _construct(){
		parent::Model();

	}

  //GSantos, 13.04.2021
  /**
   * Obtener las validaciones que deben realizarse antes de aplicar el proceso de registros iniciales
   * @method validarRegistrosIniciales
   * @author gsantos
   * @date   2021-04-13
   * @param  [type]    $idPresupuesto [Organo al que pertenece el usuario]
   * @param  [type]    $IdNomina      [Nómina que se quiere validar]
   * @return [type]    recorset       [Registros erróneos]
   */
  public function validarHEDA($Etapa,$idPresupuesto,$idNomina){
    $sql = "EXEC p_admarh_ValidaHEDA
            @Etapa =".$Etapa.
            ",@PresupuestoId ='".$idPresupuesto.
            "',@IdNomina =".$idNomina;

    $query = $this->db->query($sql);
    if($query->num_rows() > 0){
        return $query->result();
         }
    else
        return false;

  }

  //GSantos, 15.04.2021
  /**
   * Agrega un registro a la configuración de categorías-conceptos
   * @method agregarConfiguracionVales
   * @author gsantos
   * @date   2021-03-26
   * @param  [type]                      [description]
   * @return [type]                      [description]
   */

  public function agregarConfiguracionVales($Id_Categoria, $MontoBase, $AntesDeImp, $PresupuestoId){
        $AI = ($AntesDeImp ? 1 : 0);

        $sql="exec p_admarh_insDefaultVales
                    @Id_Categoria =".$Id_Categoria.
                 ",@MontoBase =".$MontoBase.
                 ",@AntesDeImp =".$AI.
                 ",@PresupuestoId ='".$PresupuestoId."'";


        $query = $this->db->query($sql);
        if($query != false){
            $reg = $query->row();
            return $reg->Resultado;
        }
        else return false;
  }
 //GSantos, 2023.12.26 Se agrega que devuelva solo movimientos vigentes
	public function empleado_baja($credencial)
	{
		$query = $this->secgral->select('M.*,p.Status as EstadoSISEGE')
									->from('Movimientos M')
									->join('cat_OrigenesMovs co','M.Origen = co.Clave')
									->join('Personal p', 'M.IdPersonal = p.IdPersonal')
									->where(array('M.Cancelado' => 0, 'M.Concluido' => 0, 'M.sinEfecto' => 0, 'co.BajaRH' => 1, 'p.NumNomina' => $credencial))
									->get();
		if ($query != false) {
			if ($query->num_rows() > 0) {
				$result = $query->result();
				return $result;
			}
			else return false;
		}
		else return array('error' => true);
	}

	public function aguinaldo_det_nomina_por_tipo($idPeriodo)
	{
		$query = $this->db->select()
											->from('det_NominaXTipo')
											->where('PeriodoID',$idPeriodo)
											->where_in('TipoNominaID',array(3,9))
											->get();
		if ($query->num_rows() > 0) {
			$result = $query->result();
			return $result;
		}
		else return false;
	}

	public function conceptos_retroactivo()
	{
		$query = $this->db->select()
											->from('conf_Empleado')
											// ->where_in('Id_Concepto',array(57,69,74,136,137,138,146,147,151,152,197,201,208,221,238,239,257,258))
											->where_in('Id_Concepto',array(57,69,136,137,138,146,147,151,197,201,208,221,238,239,257,258))
											->get();
		if ($query->num_rows() > 0) {
			$result = $query->result();
			return $result;
		}
		else return false;
	}

}
