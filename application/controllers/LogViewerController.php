<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LogViewerController extends IIS_Controller {
	private $logViewer;

	public function __construct() {
		parent::__construct();
		$this->load->library('CILogViewer');
	  $this->logViewer = new CILogViewer();
	    //...
	}

	public function index() {
	    echo $this->logViewer->showLogs();
	    //echo "oK";
	    return;
	}
}