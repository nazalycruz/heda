<?php
//Librería para cargar todas las bases necesarias en el proyecto
//Ej. ara acceder a ellas en el modelo:
// $this->db->query()    base de datos default
// $this->nombre_de_la_bd->query()  base de datos alternativa

defined('BASEPATH') OR exit('No direct script access allowed');
class DatabaseLoader {

    public function __construct() {
      $this->load();
    }

    // Carga las bases de datos e ignora el método de carga (load) de Codeigniter, el cual solo permite 1 BD.
    public function load() {
      $CI =& get_instance();

      $CI->db = $CI->load->database('default', TRUE);
      $CI->secgral = $CI->load->database('secgral', TRUE);
    }
}
