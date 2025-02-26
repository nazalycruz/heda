<?php  
class Imagen_modelo extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	public function traer_imagen($IdImagen)
	{
		$sql=" exec p_admarh_getImagen @IdImagen=".$IdImagen;
		$query =$this->db->query($sql);
		if($query != false)
			{
				if($query->num_rows() > 0)
				{
					return $query->row();
				}
				else
				{
					false;
				}
			}
		else return false;
	}

	public function traer_imagenes_seccion_idprim_idsec($parametros)
	{
		$sql=" exec p_admarh_getImagenesSeccionIdPrimIdSec 
				    @ClaveSeccionImagen = ".$parametros['ClaveSeccionImagen']
                .", @IdPrimario = ".$parametros['IdPrimario']
                .", @IdSecundario = ".$parametros['IdSecundario'];

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

	function guardar_imagen($parametros)
    {
       $sql="exec p_admarh_GuardaImagen
                    @IdImagen = ".$parametros['IdImagen']
                .", @ClaveSeccionImagen = ".$parametros['ClaveSeccionImagen']
                .", @IdPrimario = ".$parametros['IdPrimario']
                .", @IdSecundario = ".$parametros['IdSecundario']
                .", @Titulo = '".$parametros['Titulo']."'"
                .", @Nombre = '".$parametros['Nombre']."'";

        $query =$this->db->query($sql);
        if($query != false)
        {
            $elemento = $query->row();
            return $elemento->IdImagen;
        }
        else return 0;
    }


	public function eliminar_imagen($IdImagen)
    {
        $this->db->where("IdImagen",$IdImagen);
        return $this->db->delete("det_Imagenes");
    }

    public function eliminar_imagenes_seccion_prim_sec($parametros)
    {
        $this->db->where("IdSeccionImagen",$parametros['IdSeccion']);
        $this->db->where("IdPrimario",$parametros['IdPrimario']);
        $this->db->where("IdSecundario",$parametros['IdSecundario']);
        return $this->db->delete("det_Imagenes");
    }

}