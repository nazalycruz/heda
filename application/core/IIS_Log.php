<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class IIS_Log extends CI_Log {

	protected $_channels = array('REGINI' => 1, 'CALCULO' => 2, 'INICIO' => 3, 'CORREO' => 4, 'BD' => 99);
	protected $_log_max_days;
	protected $_log_extra;
	protected $_log_extra_array;
	protected $CI;

  public function __construct()
  {
    parent::__construct();
		$config =& get_config();
		$this->_log_max_days = $config['log_max_days'];

		if (is_numeric($config['log_extra']))
		{
			$this->_log_extra = (int) $config['log_extra'];
		}
		elseif (is_array($config['log_extra']))
		{
			$this->_log_extra = 0;
			$this->_log_extra_array = array_flip($config['log_extra']);
		}

		if (!empty($this->_log_max_days))
		{
			$this->delete_older_logs();
		}

  }

  public function write_log($level, $msg)
  {
    $level = strtoupper($level);

		if ($level == 'BD') $result = $this->log_bd($msg);
		else {

			if ($msg == "Session: session.auto_start is enabled in php.ini. Aborting.")
			{
				return FALSE;
			}

			if (!isset($this->_channels[$level]))
	    {
	      $result = parent::write_log($level, $msg);
			}
	    else
	    {
	      if ($this->_log_extra == 5 || $this->_log_extra == $this->_channels[$level] || isset($this->_log_extra_array[$this->_channels[$level]])) $result = $this->log_accion($level, $msg);
				else return FALSE;
	    }
		}
    return is_int($result);
  }

  private function log_accion($channel, $msg)
  {
    $filepath = $this->_log_path.'log-'.$channel.'-'.date('Y-m-d').'.'.$this->_file_ext;
    $message = '';

    if (! file_exists($filepath)) {
      $newfile = TRUE;
      if ($this->_file_ext === 'php') {
        $message .= "<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>\n\n";
      }
    }

    if (! $fp = @fopen($filepath, 'ab')) {
      return FALSE;
    }

    flock($fp, LOCK_EX);

    if (strpos($this->_date_fmt, 'u') !== FALSE) {
      $microtime_full = microtime(TRUE);
      $microtime_short = sprintf("%06d", ($microtime_full - floor($microtime_full)) * 1000000);
      $date = new DateTime(date('Y-m-d H:i:s.'.$microtime_short, $microtime_full));
      $date = $date->format($this->_date_fmt);
    }
    else {
      $date = date($this->_date_fmt);
    }

    $message .= $this->_format_line($channel, $date, $msg);

    for ($written = 0, $length = self::strlen($message); $written < $length; $written += $result) {
      if (($result = fwrite($fp, self::substr($message, $written))) === FALSE) {
        break;
      }
    }

    flock($fp, LOCK_UN);
    fclose($fp);

    if (isset($newfile) && $newfile === TRUE) {
      chmod($filepath, $this->_file_permissions);
    }

    return is_int($result);
  }

	/**
	 * Guarda un registro de log en la tabla bitacora de la base de datos.
	 * @method log_bd
	 * @author alopez
	 * @param  [type] $proceso               [description]
	 * @return [type]          [description]
	 */
	private function log_bd($proceso)
	{
		if (!isset($this->CI)) {
			$this->CI = &get_instance();
		}
		$referencia = $this->CI->db->last_query();
		$this->CI->load->model('bitacora_modelo');
		$datos = array(
							'IdPresupuesto' => $this->CI->param_lib->get_parametro('idPresupuesto'),
							'Referencia'		=> (is_array($proceso) ? $proceso[1] : $referencia),
							'Proceso'				=> (is_array($proceso) ? $proceso[0] : $proceso),
							'IP'						=> $this->CI->session->IP,
							'FC'						=> date("d/m/Y H:i:s"),
							'UC'						=> LimpiaCadena($this->CI->session->UsuarioNT)
		);
		$result = $this->CI->bitacora_modelo->guarda_registro($datos);
		return is_int($result);
	}

	/**
	 * A simple function that uses mtime to delete files older than a given age (in seconds)
	 * Very handy to rotate backup or log files, for example...
	 *
	 * $dir String ubicación de los archivos
	 * $max_age Int en días
	 * return String[] the list of deleted files
	 */
	public function delete_older_logs() {
		$dir = $this->_log_path;
		$days = $this->_log_max_days;
		$max_age = 3600*24*$days;
	  $list = array();
	  $limit = time() - $max_age;
	  $dir = realpath($dir);
		// $this->write_log("error",print_r(date('Y-m-d h:i:s',$limit)));
	  if (!is_dir($dir)) {
	    return;
	  }

	  $dh = opendir($dir);
	  if ($dh === false) {
	    return;
	  }

	  while (($file = readdir($dh)) !== false) {
	    $file = $dir . '/' . $file;
	    if (!is_file($file) || $file == 'index.html') {
	      continue;
	    }

	    if (filemtime($file) < $limit) {
	      $list[] = $file;
	      unlink($file);
	    }
	  }
	  closedir($dh);
	  return $list;
	}


  // private function log_accion2($channel,$msg)
  // {
  //   $CI = & get_instance();
  //   $newfile = FALSE;
  //   $message = '';
  //   $filepath = APPPATH . 'logs/Query-log-' . date('Y-m-d') . '.php'; // Creating Query Log file with today's date in application/logs folder
  //
  //   if (! file_exists($filepath))
  //   {
  //     $newfile = TRUE;

  //   }
  //
  //   $handle = fopen($filepath, "a+");                 // Opening file with pointer at the end of the file
  //
  //   if (isset($newfile) && $newfile === TRUE)
  //   {
  //     fwrite($handle, $message);
  //   }
  //   $times = $CI->db->query_times;                   // Get execution time of all the queries executed by controller
  //   foreach ($CI->db->queries as $key => $query) {
  //     $sql = $query . " \n Ejecutado en: " . $times[$key] . " \n Hora: " . date('H:i:s'); // Generating SQL file alongwith execution time
  //     fwrite($handle, $sql . "\n\n");              // Writing it in the log file
  //   }
  //
  //   fclose($handle);      // Close the file
  // }



}
