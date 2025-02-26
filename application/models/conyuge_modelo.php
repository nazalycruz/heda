<?php
class Conyuge_modelo extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		//$this->bd= $this->load->database($this->session->bd,true);
	}

	public function iniciar_transaccion(){ //<<<RPERAZA(2018.06.13): CASU 0838/2018
        $this->db->trans_start();
    }

    public function terminar_transaccion($errores){ //<<<RPERAZA(2018.06.13): CASU 0838/2018
        if ($this->db->trans_status() === FALSE || $errores > 0){
            $this->db->trans_rollback();
        }
        else{
            $this->db->trans_commit();
        }
    }


	public function guardar_conyuge($ConyugeId,$EmpleadoId,$apPaterno,$apMaterno,$Nombre,$LugarTrabajo,$DomTrabajo,$Telefonos,$Parentesco,$EsEmpleado,$Celular,$IdParentesco)
	{
		$sql = "exec pa_Conyuges_Guarda @ConyugeId=".$ConyugeId
						.",@EmpleadoId=".$EmpleadoId
						.",@apPaterno='".$apPaterno
						."',@apMaterno='".$apMaterno
						."',@Nombre='".$Nombre
						."',@LugarTrabajo='".$LugarTrabajo
						."',@DomTrabajo='".$DomTrabajo
						."',@Telefonos='".$Telefonos
						."',@Celular='".$Celular
						."',@Parentesco='".$Parentesco
						."',@IdParentesco=".$IdParentesco
						.",@EsEmpleado=".$EsEmpleado;  //<<<RPERAZA(2018.07.05): CASU 0159/2018,s e agrega parametro IdParentesco
		$query =$this->db->query($sql);
		if ($query!=false && $query->num_rows() > 0){
			$elemento = $query->row();
			return $elemento;
		}
		else{
			return false;
		}

	}

	public function consulta_conyuge($Clave)
	{
		$sql="exec pa_Conyuges_Consulta @Clave=".$Clave;
		$query =$this->db->query($sql);
		if($query != false)
			{
				if ($query->num_rows() > 0){
						return $query->row();
					}
				else{
						return false;
				}
			}
		else return false;
	}


	public function traer_datosTMP_conyuge($Clave)//<<<RPERAZA(2018.07.06): CASU 0159/2018
	{
		$sql="exec p_admarh_get_DatosTMPConyuge @Clave=".$Clave;
		$query =$this->db->query($sql);
		if($query != false)
			{
				if ($query->num_rows() > 0){
						return $query->row();
					}
				else{
						return false;
				}
			}
		else return false;

	}

	public function eliminar_datosTMP_anteriores($Clave){ //<<<RPERAZA(2018.07.06): CASU 0159/2018
		$sql="exec p_admarh_EliminaDatosAntConyuge
                    @Clave = ".$Clave;

        $query = $this->db->query($sql);
        if($query != false){
        	return true;
        }
        else return false;
	}

	public function insertar_TMPconyuge($parametros)  //<<<RPERAZA(2018.07.06): CASU 0159/2018
	{
		$sql = "exec p_admarh_insertDatosTMPConyuge "
				." @ConyugeId=".$parametros['ConyugeId']
				.", @EmpleadoId=".$parametros['EmpleadoId']
				.", @Nombre='".$parametros['Nombre']."'"
				.", @apPaterno='".$parametros['apPaterno']."'"
				.", @apMaterno='".$parametros['apMaterno']."'"
				.", @LugarTrabajo='".$parametros['LugarTrabajo']."'"
				.", @DomTrabajo='".$parametros['DomTrabajo']."'"
				.", @Telefonos='".$parametros['Telefonos']."'"
				.", @IdParentesco=".$parametros['IdParentesco']
				.", @EsEmpleado=".$parametros['EsEmpleado']
				.", @Celular='".$parametros['Celular']."'"
				.", @SinPareja=".$parametros['SinPareja']
				.", @Usuario='".$parametros['Usuario']."'";

		$query = $this->db->query($sql);
		if ( $query != false && $query->num_rows() > 0 ){
			$elemento = $query->row();
			return $elemento;
		}
		else{
			return false;
		}
	}

	public function actualizar_TMPconyuge($parametros)  //<<<RPERAZA(2018.07.06): CASU 0159/2018
	{
		$sql = "exec p_admarh_updateDatosTMPConyuge "
				." @IdHistorial=".$parametros['IdHistorial']
				.", @ConyugeId=".$parametros['ConyugeId']
				.", @EmpleadoId=".$parametros['EmpleadoId']
				.", @Nombre='".$parametros['Nombre']."'"
				.", @apPaterno='".$parametros['apPaterno']."'"
				.", @apMaterno='".$parametros['apMaterno']."'"
				.", @LugarTrabajo='".$parametros['LugarTrabajo']."'"
				.", @DomTrabajo='".$parametros['DomTrabajo']."'"
				.", @Telefonos='".$parametros['Telefonos']."'"
				.", @IdParentesco=".$parametros['IdParentesco']
				.", @EsEmpleado=".$parametros['EsEmpleado']
				.", @Celular='".$parametros['Celular']."'"
				.", @SinPareja=".$parametros['SinPareja']
				.", @Usuario='".$parametros['Usuario']."'";
		$query = $this->db->query($sql);
		if ($query != false && $query->num_rows() > 0){
			$elemento = $query->row();
			return $elemento->Resultado;
		}
		else{
			return false;
		}
	}

	public function enviar_datosTMP_conyuge($parametros)  //<<<RPERAZA(2018.07.06): CASU 0159/2018
	{
		$sql="exec p_admarh_upd_EnviarDatosTMPConyuge "
				." @IdHistorial=".$parametros['IdHistorial']
				.",@Usuario='".$parametros['Usuario']."'";
		$query=$this->db->query($sql);
		if ($query!=false && $query->num_rows() > 0){
			$elemento = $query->row();
			return $elemento->Resultado;
		}
		else{
			return false;
		}
	}

	public function eliminar_datosTMP_por_idhistorial($IdHistorial){ //<<<RPERAZA(2018.07.06): CASU 0159/2018
		$sql="exec p_admarh_EliminaDatosTMPConyugeXIdHistorial
                    @IdHistorial = ".$IdHistorial;

        $query = $this->db->query($sql);
        if($query != false){
        	return true;
        }
        else return false;
	}


}
