<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class dashboard extends MY_Controller {	

	function __construct() {

		parent::__construct();		
	}

	public function index() {
		
		$this->load->view('dashboard_template');
	}

	public function dashboard_view(){
		$this->load->view("dashboard_v");
	}

	public function db(){
		echo "Test";	
	}
}
