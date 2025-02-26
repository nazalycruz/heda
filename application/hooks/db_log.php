<?php
// Name of Class as mentioned in $hook['post_controller]
class Db_log {

    function __construct() {

    }

    // Name of function same as mentioned in Hooks Config
    function logQueries() {

        $CI = & get_instance();
        $newfile = FALSE;
        $message = '';
        $filepath = APPPATH . 'logs/Query-log-' . date('Y-m-d') . '.php'; // Creating Query Log file with today's date in application/logs folder

        if (! file_exists($filepath))
    		{
    			$newfile = TRUE;
    			$message .= "<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>\n\n";
    		}

        $handle = fopen($filepath, "a+");                 // Opening file with pointer at the end of the file

        if (isset($newfile) && $newfile === TRUE)
        {
          fwrite($handle, $message);
        }
        $times = $CI->db->query_times;                   // Get execution time of all the queries executed by controller
        foreach ($CI->db->queries as $key => $query) {
          $sql = $query . " \n Ejecutado en: " . $times[$key] . " \n Hora: " . date('H:i:s'); // Generating SQL file alongwith execution time
          fwrite($handle, $sql . "\n\n");              // Writing it in the log file
        }

        $timesSG = $CI->secgral->query_times;                   // Get execution time of all the queries executed by controller
				foreach ($CI->secgral->queries as $key => $querySG) {
          $sql = "[BDSECGRAL] \n" . $querySG . " \n Ejecutado en: " . $timesSG[$key] . " \n Hora: " . date('H:i:s'); // Generating SQL file alongwith execution time
          fwrite($handle, $sql . "\n\n");              // Writing it in the log file
        }

        fclose($handle);      // Close the file
    }

}
