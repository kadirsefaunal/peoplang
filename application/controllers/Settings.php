<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {
    
	public function index()
	{
		$data['content'] = "settings/index";
		$this->load->view('layouts/appLayout', $data);
    }

}
