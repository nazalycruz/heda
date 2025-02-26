<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login_modelo extends CI_Model
{
	function __construct()
	{
		parent::__construct();

		}

		function login_usuario($Usuario, $Pass){
			//$PassMD5 = md5($Pass);
			//Función para validar y obtener la información del usuario
  			$sql = "SELECT TOP 1 CE.Id, CE.Credencial, CE.Nombre, CE.Apellido1, CE.Apellido2 ,CE.Clave,
							CONVERT(bit,ISNULL(idEmpleado,0)) AS EsAdmin
							,ISNULL(d.Descripcion,'') AS Dependencia
					FROM   Cat_Empleados CE
						LEFT OUTER JOIN Cat_Admin CA ON CE.Id = CA.idEmpleado 
						LEFT OUTER JOIN cat_Dependencias d ON CE.Id_Dependencia = d.Id
					WHERE CONVERT (INT,CE.Credencial) = ? and CE.Contrasenia = ? and CE.Estado <> 'I'";

			$query = $this->db->query($sql, array($Usuario, $Pass)); //$PassMD5));
			
			if ($query->num_rows() > 0){
				return $query->row();
			}
			else{
				return false;
			}
		}

	  function trae_usuarioxid($IdUsuario){
			//Función que trae los sistemas a los que tiene acceso el usuario de acuerdo a su id
			//$query = $this->db->query("exec p_inf_i_WEB_pa_TraeSistemasWPHPxidUsuario '" . $IdUsuario . "'");
			$sql = "SELECT DISTINCT CU.Id_Usuario, CR.id_Rol, CR.Descripcion AS Rol, CS.Clave as ClaveSistema, CS.URL, CS.Titulo AS Sistema, CS.Icono
							FROM       Cat_Usuarios CU
							inner join Cat_Dependencias CD    ON CU.Id_Dependencia = CD.Id_Dependencia and CD.Id_Dependencia <> 87
							inner join Cat_Edificios CE       ON CU.Id_Edificio = CE.Id_Edificio
							inner join Conf_Roles_Usuario CRU ON CU.Id_Usuario = CRU.Id_Usuario
							inner join Conf_Permisos_Rol CPR  ON CPR.Id_Rol = CRU.Id_Rol
							inner join Cat_Roles CR 					ON CRU.Id_Rol = CR.Id_Rol
							inner join Cat_Sistemas CS 				ON CR.Id_Sistema = CS.Id_Sistema and CS.ID_TipoAplicacion = (Select ID_TipoAplicacion from Cat_TipoAplicaciones where descripcion = 'PHP')
							WHERE CU.Id_Usuario = ? and CU.Activo = 1";

			$query = $this->db->query($sql, array($IdUsuario));

			if ($query->num_rows() > 0){
					if ($query->num_rows() == 1){
						return $query->row();
					}else{
						return $query->result();
					}
				}else{
					return false;
				}
			}

		function Traepermisoxrol($IdRol){
			//Función para traer los permisos del usuario de acuerdo a su rol
			$sql = "SELECT CPR.Id_ConfPerRol, CPR.Id_Rol, CPR.Id_Opcion, CR.Descripcion AS DescripcionRol,
									   CO.Descripcion AS DescripcionOpcion, CO.ClaveOpcion AS ClaveOpcion, CPR.Permiso
							FROM       Conf_Permisos_Rol CPR
							INNER JOIN Cat_Roles CR ON CPR.Id_Rol = CR.Id_Rol
							INNER JOIN Cat_Opciones CO ON CPR.Id_Opcion = CO.Id_Opcion
							WHERE CR.Id_Rol = ? and CPR.Activo = 1";
				//$variable = "EXEC pa_TraeConfPermisosRol " . $IdRol;
				$query = $this->db->query($sql, array($IdRol));
				if ($query != false){
						return $query;
					}else{
						return false;
					}
			}

} //cierra la clase Login_modelo (no borrar)
