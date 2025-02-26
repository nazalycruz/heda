<?php
/*
>>>RPERAZA(2019.08.16): CASU 1109/2019
*/

class Escuela_modelo extends CI_Model{

    public function __Construct(){
        parent::__Construct();
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

    function insertar_escuela($parametros){ //<<<RPERAZA(2019.08.16): CASU 1109/2019
       $sql="exec p_admarh_ins_Escuela
                   @Nombre=".$parametros['Nombre']
                .",@RazonSocial=".$parametros['RazonSocial']
                .",@RFC=".$parametros['RFC']
                .",@Calle=".$parametros['Calle']
                .",@Numero=".$parametros['Numero']
                .",@Telefono=".$parametros['Telefono']
                .",@Colonia=".$parametros['Colonia']
                .",@Municipio=".$parametros['Municipio']
                .",@Estado=".$parametros['Estado']
                .",@Observaciones=".$parametros['Observaciones'];

        $query =$this->db->query($sql);
        if($query != false)
            return $query->row();
        else
            return false;
    }

    function actualizar_escuela($parametros){ //<<<RPERAZA(2019.08.16): CASU 1109/2019
        $sql="exec p_admarh_upd_Escuela
                   @EscuelaId = ".$parametros['EscuelaId']
                .",@Nombre=".$parametros['Nombre']
                .",@RazonSocial=".$parametros['RazonSocial']
                .",@RFC=".$parametros['RFC']
                .",@Calle=".$parametros['Calle']
                .",@Numero=".$parametros['Numero']
                .",@Telefono=".$parametros['Telefono']
                .",@Colonia=".$parametros['Colonia']
                .",@Municipio=".$parametros['Municipio']
                .",@Estado=".$parametros['Estado']
                .",@Observaciones=".$parametros['Observaciones'];

        $query =$this->db->query($sql);
        if($query != false)
            return $query->row();
        else
            return false;
    }

    public function eliminar_escuela($EscuelaId){ //<<<RPERAZA(2019.08.16): CASU 1109/2019
        $sql="exec p_admarh_del_Escuela
                    @EscuelaId = ".$EscuelaId;

        $query = $this->db->query($sql);
        if($query != false){
            $reg = $query->row();
            return $reg->Resultado;
        }
        else return false;
    }

    public function traer_escuelas($EscuelaId){ //<<<RPERAZA(2019.08.16): CASU 1109/2019
        $sql="exec p_admarh_get_Escuelas @EscuelaId=".$EscuelaId;
        $query =$this->db->query($sql);
        if($query != false){
            if ($query->num_rows() > 0){
                if($query->num_rows() == 1)
                    return $query->row();
                else
                    return $query->result();
            }
            else
                return false;
        }
        else return false;

    }

    public function verificar_existe_escuela($Nombre,$EscuelaId=0){ //<<<RPERAZA(2019.08.16): CASU 1109/2019
        $sql="exec p_admarh_get_VerificaEscuela
                       @Nombre = ".$Nombre
                    .",@EscuelaId = ".$EscuelaId;

        $query = $this->db->query($sql);
        if($query != false){
            $reg = $query->row();
            return $reg;
        }
        else return false;
    }

}
