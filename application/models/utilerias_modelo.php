<?php //>>>RPERAZA(2021.077.13): CASU 1306/2021

class Utilerias_modelo extends CI_Model
{
	function __construct()
	{
		parent::__construct();
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

	public function get_categorias_con_grupo_imp($DependenciaId){
		$sql = "SELECT c.Id AS CategoriaId, c.Descripcion AS Categoria
					,ISNULL(g.GrupoImpId, 0) AS grupoImpresion
					,ISNULL(g.Descripcion,'') As GrupoImpDesc
					,CASE WHEN NOT g.GrupoImpId IS NULL THEN CONVERT(BIT, 1) ELSE CONVERT(BIT, 0) END AS Configurado
				FROM cat_categorias c
					LEFT OUTER JOIN Conf_GrpImpCatDep cg ON c.Id = cg.CategoriaId
															AND cg.DependenciaId = ".$DependenciaId."
					LEFT OUTER JOIN Cat_GrupoImpresion g ON cg.grupoImpresion = g.GrupoImpId
				WHERE (CASE WHEN cg.grupoImpresion IS NULL THEN CASE WHEN c.Cancelado = 0 THEN 1 ELSE 0 END ELSE 1 END) = 1
				ORDER BY c.Descripcion";
        $query =$this->db->query($sql);
        if($query != false){
            if ($query->num_rows() > 0){
                return $query->result();
            }
            else
                return false;
        }
        else return false;
	}

	public function ins_cat_grupo_impresion($parametros){
		$this->db->insert('Conf_GrpImpCatDep', $parametros);
        if($this->db->affected_rows() > 0){
            return true;
        }
        else return false;
	}

	public function upd_cat_grupo_impresion($parametros){
		$this->db->where(array('DependenciaId' => $parametros['DependenciaId'], 'CategoriaId' => $parametros['CategoriaId']));
		$this->db->update('Conf_GrpImpCatDep', array('GrupoImpresion' => $parametros['GrupoImpresion']));

        if($this->db->affected_rows() > 0){
            return true;
        }
        else return false;
	}

	public function upd_politica_empleado($parametros){
		$this->db->where(array('Id_Dependencia' => $parametros['DependenciaId'], 'Id_Categoria' => $parametros['CategoriaId']));
		$this->db->update('cat_Empleados', array('Politica' => $parametros['GrupoImpresion']));

        if($this->db->affected_rows() > 0){
            return true;
        }
        else return false;
	}

	public function del_cat_grupo_impresion($parametros){
		$this->db->where(array(  'DependenciaId' => $parametros['DependenciaId']
								,'CategoriaId' => $parametros['CategoriaId']
							    ,'GrupoImpresion' => $parametros['GrupoImpresion']));
		$this->db->delete('Conf_GrpImpCatDep');

        if($this->db->affected_rows() > 0){
            return true;
        }
        else return false;
	}

	public function get_existen_empleados_grupo_imp($parametros){
		$this->db->select("COUNT(Id) AS 'contador'");
		$this->db->from('cat_Empleados');
		$this->db->where(array('Id_Dependencia' => $parametros['DependenciaId'], 'Id_Categoria' => $parametros['CategoriaId'], 'Politica' => $parametros['GrupoImpresion']));

		$query = $this->db->get();
	    if($query->num_rows() > 0){
	        $reg = $query->row();
            return $reg;
	    }
	    else
	        return false;
	}

	public function get_responsable_presupuesto($PresupuestoId){
		$this->db->select();
		$this->db->from('cat_Presupuestos');
		$this->db->where('PresupuestoId', $PresupuestoId);

		$query = $this->db->get();
	    if($query->num_rows() > 0){
	        $reg = $query->row();
            return $reg;
	    }
	    else
	        return false;
	}

	public function upd_responsable_presupuesto($parametros, $PresupuestoId){
		$this->db->where('PresupuestoId', $PresupuestoId);
		$this->db->update('cat_Presupuestos', $parametros);

        if($this->db->affected_rows() > 0){
            return true;
        }
        else return false;
	}

	public function get_formatos_pago($parametros){
		$parametros = " @NombreFormato=".$parametros["NombreFormato"]
								 .",@PresupuestoId=".$parametros["PresupuestoId"]
								 .",@Tipo=".$parametros["Tipo"]
								 .",@idEmisor=".(empty($parametros["idEmisor"]) ? 0 : $parametros["idEmisor"]);
		$sql = "exec pa_GetConfFormatoXNombre ".$parametros;

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

	public function ins_formato_pago($parametros){
		$this->db->insert('Cat_FormatosPago', $parametros);
        if($this->db->affected_rows() > 0){
            return $this->db->insert_id();
        }
        else return false;
	}

	public function ins_campo_formato_pago($parametros){
		$this->db->insert('Conf_FormatosPago', $parametros);
        if($this->db->affected_rows() > 0){
            return true;
        }
        else return false;
	}

	public function del_campos_formato_pago($id){
		$this->db->where("FormatoId", $id);
		$this->db->delete('Conf_FormatosPago');

        if($this->db->affected_rows() > 0){
            return true;
        }
        else return false;
	}

	public function del_formato_pago($id){
		$this->db->where("Id", $id);
		$this->db->delete('Cat_FormatosPago');

        if($this->db->affected_rows() > 0){
            return true;
        }
        else return false;
	}

	public function guarda_conf_tipo_documento($datos)
	{
		$where = array('TipoNominaId' => $datos['TipoNominaId'], 'FormatoPagoId' => $datos['FormatoPagoId']);
		$query = $this->db->get_where('Conf_TipoNominaCategoDocto', $where);
		if ($query->num_rows() > 0) {
			$this->db->where($where);
      $query = $this->db->update('Conf_TipoNominaCategoDocto',$datos);
    }
    else $this->db->insert('Conf_TipoNominaCategoDocto',$datos);

		if ($this->db->affected_rows() > 0) return true;
		return false;
	}

}
