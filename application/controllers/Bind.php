<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bind extends CI_Controller {
    //http://localhost/jquery/index.php/bind/index/kjs' ou 'http://localhost/jquery/index.php/bind/index/ajs'
	//$route['bind/index/$data'] = 'bind/index';
	
	public function index($data)
	{
		if ($data == 'ajs') {
			$this->load->view('bind_data_angular');
		} else if ($data == 'kjs') {
			$this->load->view('bind_data_knockout');
		}
	}
}
