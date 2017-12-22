<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {
	
	public function index()
	{
		$data = array("content" => "Landing/index");
		$this->load->view('layouts/index', $data);
	}
}
