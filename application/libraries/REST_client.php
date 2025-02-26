<?php
if (!defined("BASEPATH")) { exit("No direct script access allowed"); }

class REST_client
{
    protected $CI;
    public $wsarcon;

    public function __construct()
    {
        $this->CI = &get_instance();
        if (
            ($this->CI->session->userdata("loginPJE") == null) |
            ($this->CI->session->userdata("loginPJE") == false)
        ) {
            $this->CI->load->view("errors/html/session");
        }

        if (ENVIRONMENT === "development") {
            $this->wsarcon = rtrim(WS_ARCON, "/") . "/";
        } else {
						$this->CI->load->library('ParamSystem', NULL, 'param_lib');
            $this->wsarcon = $this->CI->param_lib->get_parametro("WS_ARCON");
            $this->wsarcon = rtrim($this->wsarcon, "/") . "/";
        }
        $this->CI->load->library("curl");
    }

    /*GSantos, 2021.12.22. Se  modifica para que envíe los nuevos parámetros que se solicitan*/
    public function obtiene_acreedores($cveEntidad, $anio, $cveplan)
    {
        $timeout = 0; // colocar 0 para evitar límite de tiempo.
        $url = $this->wsarcon . "index.php/api/catalogos/listado_plancuentas";
				$this->CI->curl->create($url);
        $this->CI->curl->option("CONNECTTIMEOUT", $timeout);
        $this->CI->curl->post([
            "cveEntidad" => $cveEntidad,
            "anio" => $anio,
            "cveplan" => $cveplan,
        ]);
        $this->CI->curl->http_header("Accept: application/json");
        $result = $this->CI->curl->execute();

        $respuesta = json_decode($result);

        if (isset($respuesta->status)) {
            if ($respuesta->status === false) {
                log_message("error", $respuesta->message);
                $datos = ["status" => false, "message" => $respuesta->message];
            } else {
                $datos = [
                    "status" => true,
                    "message" => "",
                    "acreedores" => $respuesta->formaspago,
                ];
            }
        } else {
            $datos = [
                "status" => false,
                "message" => "Error al consultar los datos en Arcon.",
            ];
        }

        return $datos;
    }
}
