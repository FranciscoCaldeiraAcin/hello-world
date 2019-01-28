<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bind extends CI_Controller {
    //http://localhost/jquery/index.php/bind
    //$route['bind/index'] = 'bind/index';
	public function index()
	{
		$this->load->view('bind_data');
	}
}
