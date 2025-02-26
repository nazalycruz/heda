<?php

class Empleado_modelo extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	public function iniciar_transaccion(){ //<<<RPERAZA(2018.06.13): CASU 0838/2018
  	$this->db->trans_start();
  }

  public function terminar_transaccion($errores){ //<<<RPERAZA(2018.06.13): CASU 0838/2018
	  if ($this->db->trans_status() === FALSE || $errores > 0){
	  	$this->db->trans_rollback();
	  }
	  else {
	      $this->db->trans_commit();
	  }
  }

	public function get_empleado_id_pjey($credencial){
		$this->db->select('id');
		$this->db->from('cat_Empleados');
		$this->db->where('Credencial', $Credencial);
		$query = $this->db->get();
		if ($query != false) {
			if ($query->num_rows() > 0) return $query->row();
			else return false;
		}
		else return false;
	}

	public function traer_generales_empleado($Credencial){
		$sql = "execute pa_datosgeneralesempl @credencial=".escapaDatoParaBD($Credencial);
		$query = $this->db->query($sql);

		if ($query != false) {
			if ($query->num_rows() > 0) return $query->row();
			else return false;
		}
		else return false;
	}

	public function traer_estado_empleado_sisege($datos)
	{
		$sql = "execute p_admasg_getEstatusEmpleado @credencial = ?, @fecha = ?";
		$query = $this->secgral->query($sql,$datos);

		if ($query != false) {
			if ($query->num_rows() > 0) return $query->row();
			else return false;
		}
		else return false;
	}

	public function traer_datos_basicos_empleado($Credencial,$idPresupuesto=0){
		$this->db->select("CE.Id, CE.Credencial, CE.Nombre, CE.Apellido1, CE.Apellido2, CE.Clave")
						 ->select("CONVERT(bit,ISNULL(idEmpleado,0)) AS EsAdmin")
						 ->select("ISNULL(d.Descripcion,'') AS Dependencia, AnioAceptaDatos")
						 ->from("Cat_Empleados CE")
						 ->join("Cat_Admin CA","CE.Id = CA.idEmpleado","left")
						 ->join("cat_Dependencias d","CE.Id_Dependencia = d.Id","left")
						 ->where("CE.Credencial","CONVERT (INT,".$Credencial.")",FALSE);
	 	if (!empty($idPresupuesto)) $this->db->where("d.ProgramaId",$idPresupuesto);
		$query = $this->db->get();
		if ($query->num_rows() > 0) return $query->row();
		else return false;
	}

	public function traer_empleado($Clave)
	{
		$sql="execute p_admarh_getDatosEmpleado @Clave=".$Clave;
		$query =$this->db->query($sql);
		if ($query != false) {
				if ($query->num_rows() > 0) return $query->row();
				else return false;
		}
		else return false;
	}

	public function traer_empleado_por_id($IdEmpleado) //<<<RPERAZA(2018.07.05): CASU 0159/2018
	{
		$sql="exec p_admarh_getDatosEmpleadoXId @IdEmpleado=".$IdEmpleado;
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

	public function traer_empleado_por_nombre($nombre) //<<<RPERAZA(2018.08.15): CASU 1033/2018
	{
		$sql="exec p_admarh_getDatosEmpleadoXNombre "
			    ."@Nombre='".$nombre."'";
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

	public function traer_datosTMP_empleado($Clave)//<<<RPERAZA(2018.07.01): CASU 0159/2018
	{
		$sql="exec p_admarh_get_DatosTMPEmpleado @Clave=".$Clave;
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

	public function traer_empleado_por_credencial($Credencial,$Institucion=0)
	{
		$this->db->select('ce.*');
		$this->db->from('cat_Empleados ce');
		$this->db->join('cat_Dependencias cd','ce.Id_Dependencia = cd.Id','inner');
		$this->db->where('Credencial', $Credencial);
		if (!empty($Institucion)) $this->db->where('cd.ProgramaId', $Institucion);
		$query = $this->db->get();

		if ($query != false) {
			if ($query->num_rows() > 0) {
				return $query->row();
			}
			else {
				return false;
			}
		}
		else return false;
	}

	public function actualizar_empleado($datos)
	{
		$parametros =  " @Id = ?
										,@EdoCivil = ?
										,@SinHijos = ?
										,@Hijos = ?
										,@Telefono = ?
										,@EstadoDir = ?
										,@Ciudad = ?
										,@Colonia = ?
										,@Direccion = ?
										,@Exper = ?
										,@Escolaridad = ?
										,@Carrera = ?
										,@Zona = ?
										,@Celular = ?
										,@IdRegimen = ?
										,@EnTransicionISSTEY = ?
										,@CSF	= ?
										,@CorreoInstitucional = ?
										,@CURP = ?
										,@RFC = ?
										,@IMSS = ?
										,@idSindicato = ?";

		$sql = "exec p_admarh_updateDatosEmpleado ".$parametros;
		$query = $this->db->query($sql,$datos);
		if ($query != false) return true;
		else return false;
	}

	public function actualiza_datos_empleado($idEmpleado,$datos)
	{
		$this->db->where('Id',$idEmpleado);
		$query = $this->db->update('cat_Empleados',$datos);
		if ($query != false) return true;
		else return false;
	}

	public function insertar_TMPempleado($parametros)  //<<<RPERAZA(2018.07.04): CASU 0159/2018
	{
		$sql="exec p_admarh_insertDatosTMPEmpleado "
				." @IdEmpleado=".$parametros['IdEmpleado']
				.", @EdoCivil='".$parametros['EdoCivil']."'"
				.", @SinHijos=".$parametros['SinHijos']
				.", @Hijos=".$parametros['Hijos']
				.", @Telefono='".$parametros['Telefono']."'"
				.", @Direccion='".$parametros['Direccion']."'"
				.", @EstadoDir='".$parametros['EstadoDir']."'"
				.", @Ciudad='".$parametros['Ciudad']."'"
				.", @Colonia='".$parametros['Colonia']."'"
				.", @Email='".$parametros['Email']. "'"
				.", @Escolaridad=".$parametros['Escolaridad']
				.", @UMF='".$parametros['UMF']."'"
				.", @Celular='".$parametros['Celular']."'"
				.", @Usuario='".$parametros['Usuario']."'";
		$query=$this->db->query($sql);
		if ($query!=false && $query->num_rows() > 0){
			$elemento = $query->row();
			return $elemento;
		}
		else{
			return false;
		}
	}

	public function actualizar_TMPempleado($parametros)  //<<<RPERAZA(2018.07.04): CASU 0159/2018
	{
		$sql="exec p_admarh_updateDatosTMPEmpleado "
				." @IdHistorial=".$parametros['IdHistorial']
				.", @IdEmpleado=".$parametros['IdEmpleado']
				.", @EdoCivil='".$parametros['EdoCivil']."'"
				.", @SinHijos=".$parametros['SinHijos']
				.", @Hijos=".$parametros['Hijos']
				.", @Telefono='".$parametros['Telefono']."'"
				.", @Direccion='".$parametros['Direccion']."'"
				.", @EstadoDir='".$parametros['EstadoDir']."'"
				.", @Ciudad='".$parametros['Ciudad']."'"
				.", @Colonia='".$parametros['Colonia']."'"
				.", @Email='".$parametros['Email']. "'"
				.", @Escolaridad=".$parametros['Escolaridad']
				.", @UMF='".$parametros['UMF']."'"
				.", @Celular='".$parametros['Celular']."'"
				.", @Usuario='".$parametros['Usuario']."'";
		$query=$this->db->query($sql);
		if ($query!=false && $query->num_rows() > 0){
			$elemento = $query->row();
			return $elemento->Resultado;
		}
		else{
			return false;
		}
	}

	public function enviar_datosTMP_empleado($parametros)  //<<<RPERAZA(2018.07.04): CASU 0159/2018
	{
		$sql="exec p_admarh_upd_EnviarDatosTMPEmpleado "
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

	public function verificar_existe_empleado($apPaterno,$apMaterno,$Nombre)
	{
		$sql="exec p_admarh_VerificaExisteEmpleado @Nombre=".$Nombre.",@apPaterno=".$apPaterno.",@apMaterno=".$apMaterno;
		$query=$this->db->query($sql);
		if($query != false && $query->num_rows() > 0)
        {
            $elemento = $query->row();
            return $elemento->Existe;
        }
        else return 0;
	}

	public function verificar_existe_hijo($IdEmpleado,$CURP)
	{
		$sql="exec p_admarh_VerificaExisteHijo @IdEmpleado=".$IdEmpleado.",@CURP=".$CURP;
		$query=$this->db->query($sql);
		if($query != false && $query->num_rows() > 0)
        {
            $elemento = $query->row();
            return $elemento->Existe;
        }
        else return 0;
	}

	public function eliminar_datosTMP_anteriores($Clave){ //<<<RPERAZA(2018.07.02): CASU 0159/2018
		$sql="exec p_admarh_EliminaDatosAntEmpleado
                    @Clave = ".$Clave;

    $query = $this->db->query($sql);
    if ($query != false) {
    	return true;
    }
    else return false;
	}

	public function eliminar_datosTMP_por_idhistorial($IdHistorial){ //<<<RPERAZA(2018.07.03): CASU 0159/2018
		$sql="exec p_admarh_EliminaDatosTMPEmpleadoXIdHistorial
                    @IdHistorial = ".$IdHistorial;

    $query = $this->db->query($sql);
    if ($query != false) return true;
    else return false;
	}

	public function verifica_periodo_captura(){ //<<<RPERAZA(2018.07.04): CASU 0159/2018
	  $sql="exec p_admarh_VerificaPeriodoCaptura";

	  $query = $this->db->query($sql);
	  if($query != false)
	      {
	          $reg = $query->row();
	          return $reg;
	      }
	  else return false;
  }

  public function actualizar_estado_sinpareja($IdEmpleado,$SinPareja)  //<<<RPERAZA(2018.07.04): CASU 0159/2018
	{
		$sql="exec p_admarh_updateEstadoSinParejaEmpleado "
				." @IdEmpleado=".$IdEmpleado
				.",@SinPareja=".$SinPareja;
		$query=$this->db->query($sql);
		if ($query!=false && $query->num_rows() > 0){
			$elemento = $query->row();
			return $elemento->Resultado;
		}
		else{
			return false;
		}
	}

	public function actualizar_estado_sinhijos($IdEmpleado,$SinHijos)  //<<<RPERAZA(2018.07.04): CASU 0159/2018
	{
		$sql="exec p_admarh_updateEstadoSinHijosEmpleado "
				." @IdEmpleado=".$IdEmpleado
				.",@SinHijos=".$SinHijos;
		$query=$this->db->query($sql);
		if ($query!=false && $query->num_rows() > 0){
			$elemento = $query->row();
			return $elemento->Resultado;
		}
		else{
			return false;
		}
	}

	public function verificar_cambio_domicilio($parametros)  //<<<RPERAZA(2018.08.09): CASU 1033/2018
	{
		$sql="exec p_admarh_verificaCambioDomicilio "
				." @IdEmpleado=".$parametros['IdEmpleado']
				.",@Direccion='".$parametros['Direccion']."'"
				.",@EstadoDir=".$parametros['EstadoDir']
				.",@Ciudad='".$parametros['Ciudad']."'"
				.",@Colonia='".$parametros['Colonia']."'";
		$query=$this->db->query($sql);
		if ($query!=false && $query->num_rows() > 0){
			$elemento = $query->row();
			return $elemento->Resultado;
		}
		else{
			return false;
		}
	}

	public function verificar_existe_imagen_domicilio($IdEmpleado)  //<<<RPERAZA(2018.08.09): CASU 1033/2018
	{
		$sql="exec p_admarh_verificaExisteImagenDomicilio "
				." @IdEmpleado=".$IdEmpleado;
		$query=$this->db->query($sql);
		if ($query!=false && $query->num_rows() > 0){
			$elemento = $query->row();
			return $elemento->Resultado;
		}
		else{
			return false;
		}
	}

	public function traer_fechas_envio_datos($IdEmpleado)  //<<<RPERAZA(2018.08.13): CASU 1033/2018
	{
		$sql="exec p_admarh_getFechasEnvioDatos "
				." @IdEmpleado=".$IdEmpleado;
		$query=$this->db->query($sql);
		if ($query!=false){
			$elemento = $query->row();
			return $elemento;
		}
		else{
			return false;
		}
	}

	public function cambiar_estado_imagenes_empleado($parametros)  //<<<RPERAZA(2018.08.15): CASU 1033/2018
	{
		$sql="exec p_admarh_updateEstadoImagenesEmpleado "
				." @IdPrimario=".$parametros['IdPrimario']
				.",@IdSecundario=".$parametros['IdSecundario'];

		$query=$this->db->query($sql);
		if ($query!=false && $query->num_rows() > 0){
			$elemento = $query->row();
			return $elemento->Resultado;
		}
		else{
			return false;
		}
	}

	public function traer_beneficios_solicitados()  //<<<RPERAZA(2018.08.21): CASU 1079/2018
	{
		$sql="exec p_admarh_getBeneficiosSolicitados";
		$query=$this->db->query($sql);
		if ($query!=false){
			return $query->result();
		}
		else{
			return false;
		}
	}

	public function valida_existe_TMPbeneficiario($idEmpleado,$idEstudiante=0,$EsEmpleado=0,$idHistorial=0){
		$campo = ( empty($idHistorial) ? 'IdEstudiante' : 'IdHistorial');
		$this->db->where('IdEmpleado',$idEmpleado);
		if (empty($EsEmpleado)) $this->db->where($campo,$idEstudiante);
		$this->db->where('EsEmpleado',$EsEmpleado);
		$query = $this->db->get('hist_DatosTmp_Estudiante');
		if ($query->num_rows() > 0) return $query->row();
		else return false;
	}

	public function valida_existe_beneficiario($idEmpleado,$idBeneficiario=0,$EsEmpleado=0){
		$this->db->where('IdEmpleado',$idEmpleado);
		if (!empty($idBeneficiario) && empty($EsEmpleado)) $this->db->where('IdEstudiante',$idBeneficiario);
		$this->db->where('EsEmpleado',$EsEmpleado);
		$query = $this->db->get('pres_Estudiantes');
		// $query = $this->db->get_where('pres_Estudiantes', array('IdEstudiante' => $idBeneficiario, 'IdEmpleado' => $idEmpleado, 'EsEmpleado' => 0));
		if ($query->num_rows() > 0) return $query->row();
		else return false;
	}

	public function guarda_anio_datos($anio, $credencial){
		$this->db->set('AnioAceptaDatos', $anio);
		$this->db->where('Credencial',$credencial);
		$query = $this->db->update('cat_Empleados');
		if ($query != false) return true;
		else return false;
	}

	public function buscar_empleado_porNombre($Nombre='',$Apellido1='',$Apellido2='',$idPresupuesto=''){
		$this->db->select();
		$this->db->from('vw_DatosGeneralesEmpl');
		$this->db->where('Presupuestoid',$idPresupuesto);
		if (!empty($Nombre) || !empty($Apellido1) || !empty($Apellido2)) {
			$this->db->like('Nombre', $Nombre);
			$this->db->like('Apellido1', $Apellido1);
			$this->db->like('Apellido2', $Apellido2);
		}

		$query = $this->db->get();
		if ($query != false && $query->num_rows() > 0) return $query->result();
		else return false;
	}

	public function obtener_id_empleado($credencial){
		$this->db->select('Id');
		$this->db->from('cat_Empleados');
		$this->db->where('Credencial',$credencial);
		$query = $this->db->get();
		if ($query != false && $query->num_rows() > 0) {
			$row = $query->row();
			return $row->Id;
		}
		else return false;
	}

	public function obtener_det_formacion_academica($idEmpleado)
	{
		$this->db->select('dfa.*, esc.Nombre as Instituto');
		$this->db->from('det_FormacionAcademica dfa');
		$this->db->join('cat_Escuelas esc', 'dfa.idEscuela = esc.EscuelaId');
		$this->db->where('idEmpleado',$idEmpleado);
		$query = $this->db->get();
		if ($query != false && $query->num_rows() > 0) {
			return $query->result();
		}
		else return false;
	}

	public function guarda_formacion_academica($datos,$idDetFormacion=0,$usuario='')
	{
		$id = 0;
    $query = $this->db->get_where('det_FormacionAcademica', array('idDetFormacion' => $idDetFormacion));
    if ($query->num_rows() > 0) {
      $this->db->where('idDetFormacion',$idDetFormacion);
			$datos['FUM'] = date("d/m/Y H:i:s");
			$datos['UUM'] = $usuario;
      $query = $this->db->update('det_FormacionAcademica',$datos);
      if ($query) $id = $idDetFormacion;
    }
    else {
			$datos['UC'] = $usuario;
      $this->db->insert('det_FormacionAcademica',$datos);
      $id = $this->db->insert_id();
    }

    return $id;
	}

	public function eliminar_formacion_academica($idDetFormacion)
	{
		$query = $this->db->delete('det_FormacionAcademica', array('idDetFormacion' => $idDetFormacion));
		if ($query != false) return true;
		else return false;
	}

	public function obtener_det_pago_electronico($credencial){
		$parametros = "@Credencial = ?";

		$sql = "exec pa_ObtieneConfPagoEmpleado ".$parametros;

		$query = $this->db->query($sql,array('Credencial'=>$credencial));

		if ($query != false) return $query->result();
		else return false;
	}

	public function guarda_pago_electronico($datos){
			$parametros = "@idConf = ?
										,@idEmpleado = ?
										,@idEmisor = ?
										,@NumeroCuenta = ?
										,@idTipoCuenta = ?
										,@Porcentaje = ?
										,@ENomina = ?
										,@Presupuesto = ?
										,@TipoPago = ?
										,@IdBanco = ?";

		$sql = "exec p_admarh_GuardaPagoElectronico ".$parametros;

		$query = $this->db->query($sql,$datos);

		if ($query != false) {
			$row = $query->row();
			return $row;
		}
		else return false;
	}

	public function actualiza_pago_electronico($idEmpleado,$idEmisor,$enomina,$numeroCuenta)
	{
		$id = 0;
		$this->db->where(array('EmpleadoId' => $idEmpleado, 'EmisorId' => $idEmisor));
		$query = $this->db->update('Conf_PagosENomina',array('NumeroCuenta' => $numeroCuenta,'ENomina' => $enomina));
		if ($query) $id = $idEmisor;
		return $id;
	}

	public function eliminar_pago_electronico($idConfPago){
		$query = $this->db->delete('Conf_PagosENomina', array('Id' => $idConfPago));
		if ($query != false) return true;
		else return false;
	}

	/**
	 * Obtiene el pago electrónico de un empleado por tipo de nómina
	 * @method obtener_pago_electronicoTipoNomina
	 * @author alopez
	 * @return [type]                             [description]
	 */
	public function obtener_pago_electronicoTipoNomina($idEmpleado,$idPresupuesto,$idTipoNomina=3){
		$idEmisores = array();
		$this->db->select('idEmisor');
		$this->db->from('conf_EmisorTipoNomina');
		$this->db->where(array('idTipoNomina'=>$idTipoNomina, 'idPresupuesto' => $idPresupuesto));
    $arrEmisores = $this->db->get()->result_array();
    if (!empty($arrEmisores)) array_walk_recursive($arrEmisores, function($a) use (&$idEmisores) { $idEmisores[] = $a; });

		$this->db->select('c.*, ce.Emisor');
		$this->db->from('Conf_PagosENomina c');
		$this->db->join('cat_Emisores ce','c.EmisorId = ce.Id');
		$this->db->where(array('empleadoid'=> $idEmpleado, 'Activo' => 1));
		if (!empty($idEmisores)) $this->db->where_in('EmisorId', $idEmisores);

		$query = $this->db->get();
		if ($query != false && $query->num_rows() > 0) {
			$row = $query->row();
			return $row;
		}
		else return false;
	}

	public function obtener_busqueda_empleado($datos){
		$this->db->select('e.Id,e.Credencial,e.Nombre + \' \' + e.Apellido1 + \' \' + e.Apellido2 as Empleado, d.Id as idDependencia, d.Descripcion as Dependencia, c.Id as idCategoria, c.Descripcion as Categoria');
		$this->db->from('cat_Empleados e');
		$this->db->join('cat_Dependencias d', 'e.Id_Dependencia = d.Id');
		$this->db->join('cat_Categorias c', 'e.Id_Categoria = c.Id');
		if (!empty($datos['credencial'])) $this->db->where('Credencial',$datos['credencial']);
		if (!empty($datos['nombre'])) $this->db->like('CONCAT(e.Nombre,\' \',e.Apellido1,\' \',e.Apellido2)',$this->db->escape_like_str($datos['nombre']));
		if (!empty($datos['idDependencia'])) $this->db->where('Id_Dependencia',$datos['idDependencia']);
		if (!empty($datos['idCategoria'])) $this->db->where('Id_Categoria',$datos['idCategoria']);
		if (!empty($datos['tipocontra'])) $this->db->where('e.TipoContra <>',$datos['tipocontra']);
		if (!empty($datos['hijos'])) $this->db->where('e.Hijos >',0);
		if (!empty($datos['sexo'])) $this->db->where('e.Sexo',$datos['sexo']);
		$this->db->where(array('e.Liquidado' => 0, 'e.Estado <>' => 'I', 'd.ProgramaId' => $datos['idPresupuesto']));
		$query = $this->db->get();
		if ($query != false && $query->num_rows() > 0) return $query->result();
		else return false;
	}

	public function obtiene_configurados_enomina($idPresupuesto,$idEmpleado=0)
	{
		$this->db
						->select('d.EmpleadoId')
						->from('conf_PagosENomina d')
						->join('conf_EmisorTipoNomina ct', 'd.EmisorId = ct.IdEmisor')
						->where('ct.idPresupuesto',$idPresupuesto)
						->where_in('EmisorId',array(1,5,6,10))
						->group_by('EmpleadoID');
		if (!empty($idEmpleado)) $this->db->where('d.EmpleadoId',$idEmpleado);
		$query = $this->db->get();
		if ($query != false && $query->num_rows() > 0) {
			if (!empty($idEmpleado)) return $query->row();
			else return $query->result();
		}
		else return false;
	}

	public function traer_generales_personal($credencial){
		$this->secgral->from('Personal');
		$this->secgral->where('NumNomina', $credencial);
		$query = $this->secgral->get();
		if ($query != false) {
			if ($query->num_rows() > 0) return $query->row();
			else return false;
		}
		else return false;
	}

} //de la clase
