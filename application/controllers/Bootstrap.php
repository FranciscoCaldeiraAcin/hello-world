<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bootstrap extends CI_Controller {
    //http://localhost/jquery/index.php/bootstrap/index/'
	//$route['bind/index/$data'] = 'bind/index';
	
	public function index()
	{
		$this->load->view('bootstrap_form');
	}
}
