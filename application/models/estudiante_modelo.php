<?php
class Estudiante_modelo extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		//$this->bd= $this->load->database($this->session->bd,true);
	}

	public function iniciar_transaccion(){ //<<<RPERAZA(2018.07.11): CASU 0838/2018
		$this->db->trans_start();
  }

  public function terminar_transaccion($errores){ //<<<RPERAZA(2018.07.11): CASU 0838/2018
    if ($this->db->trans_status() === FALSE || $errores > 0){
        $this->db->trans_rollback();
    }
    else{
        $this->db->trans_commit();
    }
  }

	public function consulta_estudiante($Clave)
	{
		$sql="exec pa_Estudiantes_Consulta_Completa @Clave=".$Clave;
		$query =$this->db->query($sql);
		if($query != false)
			{
				if($query->num_rows() > 0)
				{
					return $query->result();
				}
				else
				{
					false;
				}
			}
		else return false;
	}

	public function guarda_estudiante($IdEstudiante,$IdEmpleado,$EsEmpleado,$apPaterno,$ApMaterno,$Nombre,$fNacimiento,$Grado,$EscuelaId,$Guarderia,$Beca,$Utiles,$Observaciones,$Sexo,$CURP,$EscuelaidAnterior,$GradoAnterior,$Escolaridad,$Colegiatura,$FLimitePago,$Promedio,$fEnvioDatos)
	{
		$sql="exec pa_Estudiantes_guarda_parcial @IdEstudiante=".$IdEstudiante.",@IdEmpleado=".$IdEmpleado.",@EsEmpleado=".$EsEmpleado.",@apPaterno='".$apPaterno."',@ApMaterno='".$ApMaterno."',@Nombre='".$Nombre."',@fNacimiento='".$fNacimiento."',@Grado='".$Grado."',@EscuelaId=".$EscuelaId.",@Guarderia=".$Guarderia.",@Beca=".$Beca.",@Utiles=".$Utiles.",@Observaciones='".$Observaciones."',@Sexo=".$Sexo.",@CURP='".$CURP."',@EscuelaidAnterior=".$EscuelaidAnterior.",@GradoAnterior='".$GradoAnterior."'"
			.",@Escolaridad=".$Escolaridad.",@Colegiatura=".$Colegiatura.",@FLimitePago='".$FLimitePago."',@Promedio=".$Promedio.",@fEnvioDatos='".$fEnvioDatos."'"; //<<<RPERAZA(2018.07.09): CASU 0159/2018
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

	public function guarda_beneficiario($parametros){
		$sql = "exec p_admarh_insertDatosBeneficiario "
					." @IdBeneficiario=".$parametros['IdBeneficiario']
					.", @IdEmpleado=".$parametros['IdEmpleado']
					.", @EsEmpleado=".$parametros['EsEmpleado']
					.", @apPaterno=".$parametros['apPaterno']
					.", @apMaterno=".$parametros['apMaterno']
					.", @Nombre=".$parametros['Nombre']
					.", @fNacimiento=".$parametros['fNacimiento']
					.", @Sexo=".$parametros['Sexo']
					.", @CURP=".$parametros['CURP']
					.", @idParentesco=".$parametros['parentesco']
					.", @Observaciones=".$parametros['Observaciones']
					.", @fEnvioDatos=".$parametros['fEnvioDatos'];

		$query = $this->db->query($sql);
		if ($query != false && $query->num_rows() > 0){
			$elemento = $query->row();
			return $elemento;
		}
		else return false;
	}

	public function elimina_Estudiante($IdEstudiante,$IdEmpleado)
	{
		$sql= "exec pa_Estudiantes_Elimina @IdEstudiante=".$IdEstudiante.",@IdEmpleado=".$IdEmpleado;
		$query=$this->db->query($sql);
	}

	public function elimina_EstudianteTMP($IdHistorial) //<<<RPERAZA(2018.07.10)
	{
		$sql= "exec pa_Estudiantes_EliminaDatosTMP @IdHistorial=".$IdHistorial;
		$query=$this->db->query($sql);
	}

	public function traer_estudianteXId($IdEstudiante)
	{
		$sql="exec pa_Estudiante_ConsultaXIdestudiante @IdEstudiante=".$IdEstudiante;
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

	public function verificar_beneficio_solicitado($IdEstudiante,$apPaterno,$apMaterno,$Nombre,$Beneficio)
	{
		$sql="exec p_admarh_VerificaBeneficioSolicitado @IdEstudiante=".$IdEstudiante.",@Nombre=".$Nombre.",@apPaterno=".$apPaterno.",@apMaterno=".$apMaterno.",@Beneficio=".$Beneficio;
		$query=$this->db->query($sql);
		if($query != false && $query->num_rows() > 0){
            $elemento = $query->row();
            return $elemento->Existe;
        }
        else return 0;
	}

	public function traer_datosTMP_estudiante($IdEstudiante)//<<<RPERAZA(2018.07.09): CASU 0159/2018
	{
		$sql="exec p_admarh_get_DatosTMPEstudiante @IdEstudiante=".$IdEstudiante;
		$query =$this->db->query($sql);
		if($query != false){
			if ($query->num_rows() > 0){
				return $query->row();
			}
			else{
				return false;
			}
		}
		else return false;

	}

	public function traer_datosTMP_estudiante_por_idhistorial($IdHistorial)//<<<RPERAZA(2018.07.10): CASU 0159/2018
	{
		$sql="exec p_admarh_get_DatosTMPEstudianteXIdHistorial @IdHistorial=".$IdHistorial;
		$query =$this->db->query($sql);
		if($query != false){
			if ($query->num_rows() > 0){
				return $query->row();
			}
			else{
				return false;
			}
		}
		else return false;

	}

	public function eliminar_datosTMP_anteriores($IdEstudiante){ //<<<RPERAZA(2018.07.09): CASU 0159/2018
		$sql="exec p_admarh_EliminaDatosAntEstudiante
                    @IdEstudiante = ".$IdEstudiante;

        $query = $this->db->query($sql);
        if($query != false){
        	return true;
        }
        else return false;
	}

	public function eliminar_datosTMP_por_idhistorial($IdHistorial){ //<<<RPERAZA(2018.07.11): CASU 0159/2018
		$sql="exec p_admarh_EliminaDatosTMPEstudianteXIdHistorial
                    @IdHistorial = ".$IdHistorial;

        $query = $this->db->query($sql);
        if($query != false){
        	return true;
        }
        else return false;
	}

	public function eliminar_datosTMP_por_idEstudiante($idBeneficiario){
		$query = $this->db->delete('hist_DatosTmp_Estudiante', array('IdEstudiante' => $idBeneficiario));
		if($query != false) return true;
		else return false;
	}

	public function insertar_TMPbeneficiario($parametros){
		$sql = "exec p_admarh_insertDatosTMPBeneficiario "
				." @IdBeneficiario=".$parametros['IdBeneficiario']
				.", @IdEmpleado=".$parametros['IdEmpleado']
				.", @EsEmpleado=".$parametros['EsEmpleado']
				.", @apPaterno=".$parametros['apPaterno']
				.", @apMaterno=".$parametros['apMaterno']
				.", @Nombre=".$parametros['Nombre']
				.", @fNacimiento=".$parametros['fNacimiento']
				.", @Sexo=".$parametros['Sexo']
				.", @CURP=".$parametros['CURP']
				.", @idParentesco=".$parametros['parentesco']
				.", @Observaciones=".$parametros['Observaciones']
				.", @Usuario=".$parametros['Usuario'];

		$query = $this->db->query($sql);
		if ($query != false && $query->num_rows() > 0){
			$elemento = $query->row();
			return $elemento;
		}
		else return false;
	}

	public function actualizar_TMPbeneficiario($parametros){
		$sql="exec p_admarh_updateDatosTMPBeneficiario "
				." @IdHistorial=".$parametros['IdHistorial']
				.", @IdBeneficiario=".$parametros['IdBeneficiario']
				.", @IdEmpleado=".$parametros['IdEmpleado']
				.", @apPaterno=".$parametros['apPaterno']
				.", @apMaterno=".$parametros['apMaterno']
				.", @Nombre=".$parametros['Nombre']
				.", @fNacimiento=".$parametros['fNacimiento']
				.", @Sexo=".$parametros['Sexo']
				.", @CURP=".$parametros['CURP']
				.", @idParentesco=".$parametros['parentesco']
				.", @Observaciones=".$parametros['Observaciones']
				.", @Usuario=".$parametros['Usuario'];

		$query = $this->db->query($sql);
		if ($query != false && $query->num_rows() > 0){
			$elemento = $query->row();
			return $elemento->Resultado;
		}
		else return false;
	}

	public function actualiza_TMPSinPrestaciones($parametros){
		$this->db->set('Guarderia', 0);
		$this->db->set('Beca', 0);
		$this->db->set('Utiles', 0);
		$this->db->set('RFC', '');
		$this->db->set('RazonSocial', '');
		$this->db->set('EscuelaidAnterior', 0);
		$this->db->set('idEscolaridadAnt', 0);
		$this->db->set('GradoAnterior', '');
		$this->db->set('Promedio', 0);
		$this->db->set('Grado', '');
		$this->db->set('EscuelaId', 0);
		$this->db->set('Escolaridad', 0);
		$this->db->set('FUM', $parametros['Fecha']);
		$this->db->set('UUM', $parametros['Usuario']);
		$this->db->where('IdEmpleado', $parametros['IdEmpleado']);
    $query = $this->db->update('hist_DatosTmp_Estudiante');
    if( $query != false ) return true;
    else return false;
	}

	public function actualizar_TMPguarderia($parametros){
		$campo = (empty($parametros['campo']) ? 'IdEstudiante' : 'IdHistorial');
		$this->db->set('Guarderia', 1);
		$this->db->set('RFC', $parametros['rfc']);
		$this->db->set('RazonSocial', $parametros['razonsocial']);
		$this->db->set('FUM', $parametros['Fecha']);
		$this->db->set('UUM', $parametros['Usuario']);
    $this->db->where($campo, $parametros['IdBeneficiario']);
		$this->db->where('IdEmpleado', $parametros['IdEmpleado']);
    $query = $this->db->update('hist_DatosTmp_Estudiante');
    if( $query != false ) return true;
    else return false;
	}

	public function actualizar_TMPbeca($parametros){
		$campo = (empty($parametros['campo']) ? 'IdEstudiante' : 'IdHistorial');
		$this->db->set('Beca', 1);
		$this->db->set('EscuelaidAnterior', $parametros['EscuelaidAnterior']);
		$this->db->set('idEscolaridadAnt', $parametros['idEscolaridadAnt']);
		$this->db->set('GradoAnterior', $parametros['GradoAnterior']);
		$this->db->set('Promedio', $parametros['Promedio']);
		$this->db->set('FUM', $parametros['Fecha']);
		$this->db->set('UUM', $parametros['Usuario']);
		if( empty($parametros['EsEmpleado']) ) $this->db->where($campo, $parametros['IdBeneficiario']);
		else $this->db->where('EsEmpleado', 1);
		//$this->db->where('IdHistorial', $parametros['IdBeneficiario']); //<<< [C] RPERAZA(2019.07.31): CASU 1024
		$this->db->where('IdEmpleado', $parametros['IdEmpleado']); //<<< [C] RPERAZA(2019.07.31): CASU 1024
		$query = $this->db->update('hist_DatosTmp_Estudiante');
		if( $query != false ) return true;
		else return false;
	}

	public function actualizar_TMPutiles($parametros){
		$campo = (empty($parametros['campo']) ? 'IdEstudiante' : 'IdHistorial');
		$this->db->set('Utiles', 1);
		$this->db->set('Grado', $parametros['Grado']);
		$this->db->set('EscuelaId', $parametros['EscuelaId']);
		$this->db->set('Escolaridad', $parametros['Escolaridad']);
		$this->db->set('FUM', $parametros['Fecha']);
		$this->db->set('UUM', $parametros['Usuario']);
		if( empty($parametros['EsEmpleado']) ) $this->db->where($campo, $parametros['IdBeneficiario']);
		else $this->db->where('EsEmpleado', 1);
		$this->db->where('IdEmpleado', $parametros['IdEmpleado']);
		$query = $this->db->update('hist_DatosTmp_Estudiante');
		if( $query != false ) return true;
		else return false;
	}

	public function eliminar_TMPguarderia($parametros){
		$campo = (empty($parametros['campo']) ? 'IdEstudiante' : 'IdHistorial');
		$this->db->set('Guarderia', 0);
		$this->db->set('RFC', '');
		$this->db->set('RazonSocial', '');
		$this->db->set('FUM', $parametros['Fecha']);
		$this->db->set('UUM', $parametros['Usuario']);
    $this->db->where($campo, $parametros['IdBeneficiario']);
		$this->db->where('IdEmpleado', $parametros['IdEmpleado']);
    $query = $this->db->update('hist_DatosTmp_Estudiante');
    if( $query != false ) return true;
    else return false;
	}

	public function eliminar_TMPbeca($parametros){
		$campo = (empty($parametros['campo']) ? 'IdEstudiante' : 'IdHistorial');
		$this->db->set('Beca', 0);
		$this->db->set('EscuelaidAnterior', 0);
		$this->db->set('idEscolaridadAnt', 0);
		$this->db->set('GradoAnterior', '');
		$this->db->set('Promedio', 0);
		$this->db->set('FUM', $parametros['Fecha']);
		$this->db->set('UUM', $parametros['Usuario']);
		if( empty($parametros['EsEmpleado']) ) $this->db->where($campo, $parametros['IdBeneficiario']);
		else $this->db->where('EsEmpleado', 1);
		$this->db->where('IdEmpleado', $parametros['IdEmpleado']);
		$query = $this->db->update('hist_DatosTmp_Estudiante');
		if( $query != false ) return true;
		else return false;
	}

	public function eliminar_TMPutiles($parametros){
		$campo = (empty($parametros['campo']) ? 'IdEstudiante' : 'IdHistorial');
		$this->db->set('Utiles', 0);
		$this->db->set('Grado', '');
		$this->db->set('EscuelaId', 0);
		$this->db->set('Escolaridad', 0);
		$this->db->set('FUM', $parametros['Fecha']);
		$this->db->set('UUM', $parametros['Usuario']);
		if( empty($parametros['EsEmpleado']) ) $this->db->where($campo, $parametros['IdBeneficiario']);
		else $this->db->where('EsEmpleado', 1);
		$this->db->where('IdEmpleado', $parametros['IdEmpleado']);
		$query = $this->db->update('hist_DatosTmp_Estudiante');
		if( $query != false ) return true;
		else return false;
	}

	public function actualizar_prestaciones($parametros){
		$this->db->set('Guarderia', $parametros['guarderia']);
		$this->db->set('Beca', $parametros['beca']);
		$this->db->set('Utiles', $parametros['utiles']);
		$this->db->set('RFC', $parametros['rfc']);
		$this->db->set('RazonSocial', $parametros['razonsocial']);
		$this->db->set('EscuelaidAnterior', $parametros['EscuelaidAnterior']);
		$this->db->set('GradoAnterior', $parametros['GradoAnterior']);
		$this->db->set('idEscolaridadAnt', $parametros['idEscolaridadAnt']);
		$this->db->set('Promedio', $parametros['Promedio']);
		$this->db->set('Grado', $parametros['Grado']);
		$this->db->set('EscuelaId', $parametros['EscuelaId']);
		$this->db->set('Escolaridad', $parametros['Escolaridad']);
		$this->db->set('fActualizaBeneficios', $parametros['fActualizaBeneficios']);
		$this->db->set('fActualizaDatos', $parametros['fActualizaDatos']);
		$this->db->where('IdEstudiante', $parametros['IdBeneficiario']);
		$this->db->where('IdEmpleado', $parametros['IdEmpleado']);
		$query = $this->db->update('pres_Estudiantes');
		if( $query != false ) return true;
		else return false;
	}

	public function actualiza_SinPrestaciones($parametros){
		$this->db->set('Guarderia', 0);
		$this->db->set('Beca', 0);
		$this->db->set('Utiles', 0);
		$this->db->set('RFC', '');
		$this->db->set('RazonSocial', '');
		$this->db->set('EscuelaidAnterior', 0);
		$this->db->set('idEscolaridadAnt', 0);
		$this->db->set('GradoAnterior', '');
		$this->db->set('Promedio', 0);
		$this->db->set('Grado', '');
		$this->db->set('EscuelaId', 0);
		$this->db->set('Escolaridad', 0);
		$this->db->set('fActualizaBeneficios', $parametros['Fecha']);
		$this->db->where('IdEmpleado', $parametros['IdEmpleado']);
		$query = $this->db->update('pres_Estudiantes');
		if( $query != false ) return true;
		else return false;
	}

	public function actualizar_guarderia($parametros){
		$this->db->set('Guarderia', 1);
		$this->db->set('RFC', $parametros['rfc']);
		$this->db->set('RazonSocial', $parametros['razonsocial']);
		$this->db->set('fActualizaBeneficios', $parametros['Fecha']);
		$this->db->set('fEnvioDatos', $parametros['fEnvioDatos']);
		$this->db->set('fActualizaDatos', $parametros['fActualizaDatos']);
		$this->db->where('IdEstudiante', $parametros['IdBeneficiario']);
		$this->db->where('IdEmpleado', $parametros['IdEmpleado']);
		$query = $this->db->update('pres_Estudiantes');
		if( $query != false ) return true;
		else return false;
	}

	public function actualizar_beca($parametros){
		$this->db->set('Beca', 1);
		$this->db->set('EscuelaidAnterior', $parametros['EscuelaidAnterior']);
		$this->db->set('GradoAnterior', $parametros['GradoAnterior']);
		$this->db->set('idEscolaridadAnt', $parametros['idEscolaridadAnt']);
		$this->db->set('Promedio', $parametros['Promedio']);
		$this->db->set('fActualizaBeneficios', $parametros['Fecha']);
		$this->db->set('fEnvioDatos', $parametros['fEnvioDatos']);
		$this->db->set('fActualizaDatos', $parametros['fActualizaDatos']);
		$this->db->where('IdEstudiante', $parametros['IdBeneficiario']);
		$this->db->where('IdEmpleado', $parametros['IdEmpleado']);
		$query = $this->db->update('pres_Estudiantes');
		if( $query != false ) return true;
		else return false;
	}

	public function actualizar_utiles($parametros){
		$this->db->set('Utiles', 1);
		$this->db->set('Grado', $parametros['Grado']);
		$this->db->set('EscuelaId', $parametros['EscuelaId']);
		$this->db->set('Escolaridad', $parametros['Escolaridad']);
		$this->db->set('fActualizaBeneficios', $parametros['Fecha']);
		$this->db->set('fEnvioDatos', $parametros['fEnvioDatos']);
		$this->db->set('fActualizaDatos', $parametros['fActualizaDatos']);
		$this->db->where('IdEstudiante', $parametros['IdBeneficiario']);
		$this->db->where('IdEmpleado', $parametros['IdEmpleado']);
		$query = $this->db->update('pres_Estudiantes');
		if( $query != false ) return true;
		else return false;
	}

	public function eliminar_guarderia($parametros){
		$this->db->set('Guarderia', 0);
		$this->db->set('RFC', '');
		$this->db->set('RazonSocial', '');
		$this->db->where('IdEstudiante', $parametros['IdBeneficiario']);
		$this->db->where('IdEmpleado', $parametros['IdEmpleado']);
		$query = $this->db->update('pres_Estudiantes');
		if( $query != false ) return true;
		else return false;
	}

	public function eliminar_beca($parametros){
		$this->db->set('Beca', 0);
		$this->db->set('EscuelaidAnterior', 0);
		$this->db->set('idEscolaridadAnt', 0);
		$this->db->set('GradoAnterior', '');
		$this->db->set('Promedio', 0);
		$this->db->where('IdEstudiante', $parametros['IdBeneficiario']);
		$this->db->where('IdEmpleado', $parametros['IdEmpleado']);
		$query = $this->db->update('pres_Estudiantes');
		if( $query != false ) return true;
		else return false;
	}

	public function eliminar_utiles($parametros){
		$this->db->set('Utiles', 0);
		$this->db->set('Grado', '');
		$this->db->set('EscuelaId', 0);
		$this->db->set('Escolaridad', 0);
		$this->db->where('IdEstudiante', $parametros['IdBeneficiario']);
		$this->db->where('IdEmpleado', $parametros['IdEmpleado']);
		$query = $this->db->update('pres_Estudiantes');
		if( $query != false ) return true;
		else return false;
	}

	public function insertar_TMPestudiante($parametros){ //<<<RPERAZA(2018.07.09): CASU 0159/2018
		$sql="exec p_admarh_insertDatosTMPEstudiante "
				." @IdEstudiante=".$parametros['IdEstudiante']
				.", @IdEmpleado=".$parametros['IdEmpleado']
				.", @EsEmpleado=".$parametros['EsEmpleado']
				.", @apPaterno='".$parametros['apPaterno']."'"
				.", @ApMaterno='".$parametros['ApMaterno']."'"
				.", @Nombre='".$parametros['Nombre']."'"
				.", @fNacimiento='".$parametros['fNacimiento']."'"
				.", @Escolaridad=".$parametros['Escolaridad']
				.", @Grado='".$parametros['Grado']."'"
				.", @EscuelaId=".$parametros['EscuelaId']
				.", @Colegiatura=".$parametros['Colegiatura']
				.", @FLimitePago='".$parametros['FLimitePago']."'"
				.", @Promedio=".$parametros['Promedio']
				.", @Guarderia=".$parametros['Guarderia']
				.", @Beca=".$parametros['Beca']
				.", @Utiles=".$parametros['Utiles']
				.", @Observaciones='".$parametros['Observaciones']."'"
				.", @EscuelaidAnterior=".$parametros['EscuelaidAnterior']
				.", @GradoAnterior='".$parametros['GradoAnterior']."'"
				.", @Sexo=".$parametros['Sexo']
				.", @CURP='".$parametros['CURP']."'"
				.", @Usuario='".$parametros['Usuario']."'";

		$query=$this->db->query($sql);
		if ($query != false && $query->num_rows() > 0){
			$elemento = $query->row();
			return $elemento;
		}
		else return false;
	}

	public function actualizar_TMPestudiante($parametros){  //<<<RPERAZA(2018.07.09): CASU 0159/2018
		$sql="exec p_admarh_updateDatosTMPEstudiante "
				." @IdHistorial=".$parametros['IdHistorial']
				.",@IdEstudiante=".$parametros['IdEstudiante']
				.",@IdEmpleado=".$parametros['IdEmpleado']
				.",@EsEmpleado=".$parametros['EsEmpleado']
				.",@apPaterno='".$parametros['apPaterno']."'"
				.",@ApMaterno='".$parametros['ApMaterno']."'"
				.",@Nombre='".$parametros['Nombre']."'"
				.",@fNacimiento='".$parametros['fNacimiento']."'"
				.",@Escolaridad=".$parametros['Escolaridad']
				.",@Grado='".$parametros['Grado']."'"
				.",@EscuelaId=".$parametros['EscuelaId']
				.",@Colegiatura=".$parametros['Colegiatura']
				.",@FLimitePago='".$parametros['FLimitePago']."'"
				.",@Promedio=".$parametros['Promedio']
				.",@Guarderia=".$parametros['Guarderia']
				.",@Beca=".$parametros['Beca']
				.",@Utiles=".$parametros['Utiles']
				.",@Observaciones='".$parametros['Observaciones']."'"
				.",@EscuelaidAnterior=".$parametros['EscuelaidAnterior']
				.",@GradoAnterior='".$parametros['GradoAnterior']."'"
				.",@Sexo=".$parametros['Sexo']
				.",@CURP='".$parametros['CURP']."'"
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

	public function insertar_TMPestudianteSinHijos($parametros){ //<<<RPERAZA(2018.07.12): CASU 0159/2018
		$sql="exec p_admarh_insertDatosTMPEstudianteSinHijos "
				."@IdEmpleado=".$parametros['IdEmpleado']
				.",@Usuario='".$parametros['Usuario']."'";

		$query=$this->db->query($sql);
		if ($query!=false && $query->num_rows() > 0){
			$elemento = $query->row();
			return $elemento;
		}
		else{
			return false;
		}
	}

	public function traer_estudiantes_capturados($Clave){ //<<<RPERAZA(2018.07.10): CASU 0159/2018
		$sql="exec pa_admarh_get_EstudiantesCapturados @Clave=".$Clave;
		$query =$this->db->query($sql);
		if($query != false){
			if($query->num_rows() > 0) return $query->result();
			else false;
		}
		else return false;
	}

	public function traer_EstudiantesTMP_Enviar($IdEmpleado){ //<<<RPERAZA(2018.07.10): CASU 0159/2018
		$sql = "exec pa_admarh_get_EstudiantesTMP_Enviar @IdEmpleado=".$IdEmpleado;
		$query = $this->db->query($sql);
		if($query != false){
			if($query->num_rows() > 0){
				return $query->result();
			}
			else{
				false;
			}
		}
		else return false;
	}

	public function enviar_datosTMP_estudiante($IdHistorial)  //<<<RPERAZA(2018.07.11): CASU 0159/2018
	{
		$sql="exec p_admarh_upd_EnviarDatosTMPEstudiante "
				." @IdHistorial=".$IdHistorial;
		$query=$this->db->query($sql);
		if ($query!=false && $query->num_rows() > 0){
			$elemento = $query->row();
			return $elemento->Resultado;
		}
		else{
			return false;
		}
	}

/**
 * [Función temporal para confirmar beneficios]
 * @method confirma_beneficios
 * @author alopez
 * @date   2019-06-28
 * @param  [type]              $parametros [description]
 * @return [type]                          [description]
 */
	public function confirma_beneficios($parametros){
		$this->db->set($parametros['campoPrestacion'], $parametros['concedePres']);
		$this->db->set($parametros['campoObservacion'], $parametros['Observaciones']);
		if( !empty($parametros['campoMonto']) ) $this->db->set($parametros['campoMonto'], $parametros['monto']);
		$this->db->set('fActualizaBeneficios', $parametros['fecha']);
		$this->db->where('IdEstudiante', $parametros['idBeneficiario']);
		$this->db->where('IdEmpleado', $parametros['idEmpleado']);
		$query = $this->db->update('pres_Estudiantes');
		if( $query != false ){
			$filaAfectada = $this->db->affected_rows();
			return $filaAfectada;
		}
		else return false;
	}

	public function guarda_beneficios($parametros){  //<<<RPERAZA(2018.07.11): CASU 0159/2018
		$sql="exec p_admarh_updateBeneficiosEstudiante "
				 ."@IdEstudiante=".$parametros['IdEstudiante']
				.",@Guarderia=".$parametros['Guarderia']
				.",@SePagaGuarderia=".$parametros['SePagaGuarderia']
				.",@ObsSePagaGuarderia='".$parametros['ObsSePagaGuarderia']."'"
				.",@Beca=".$parametros['Beca']
				.",@SePagaBeca=".$parametros['SePagaBeca']
				.",@ObsSePagaBeca='".$parametros['ObsSePagaBeca']."'"
				.",@Utiles=".$parametros['Utiles']
				.",@SePagaUtiles=".$parametros['SePagaUtiles']
				.",@ObsSePagaUtiles='".$parametros['ObsSePagaUtiles']."'";

		$query=$this->db->query($sql);
		if ($query!=false && $query->num_rows() > 0){
			$elemento = $query->row();
			return $elemento->Resultado;
		}
		else{
			return false;
		}
	}

	public function eliminar_datosTMP_sin_hijos($IdEmpleado){ //<<<RPERAZA(2018.07.11): CASU 0159/2018
		$sql="exec p_admarh_EliminaDatosTMPEstudianteSinHijos
                    @IdEmpleado = ".$IdEmpleado;

        $query = $this->db->query($sql);
        if($query != false){
        	return true;
        }
        else return false;
	}



	public function cambiar_estado_imagenes_estudiante($parametros)  //<<<RPERAZA(2018.08.15): CASU 1033/2018
	{
		$sql="exec p_admarh_updateEstadoImagenesEstudiante "
				." @IdPrimario=".$parametros['IdPrimario']
				.",@IdSecundario=".$parametros['IdSecundario']
				.",@IdEstudiante=".$parametros['IdEstudiante'];

		$query=$this->db->query($sql);
		if ($query!=false && $query->num_rows() > 0){
			$elemento = $query->row();
			return $elemento->Resultado;
		}
		else{
			return false;
		}
	}

	public function traeMontoPrestacion($idPrestacion,$idBeneficiario){
		$this->db->from('pres_Estudiantes');
		$this->db->where('IdEstudiante', $idBeneficiario);
		$query = $this->db->get();
		if($query != false && $query->num_rows() > 0){
			return $query->row();
		}
		else return false;
	}

}
