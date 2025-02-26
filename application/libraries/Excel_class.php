<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (version_compare(PHP_VERSION, '7.0', '>=')) $rutalib = 'phpspreadsheet';
else $rutalib = 'phpspreadsheet_PHP5';

require APPPATH . 'third_party/'.$rutalib.'/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Font;
