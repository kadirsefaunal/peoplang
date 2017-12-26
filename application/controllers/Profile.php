<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	
	public function index()
	{
        $data['content'] = "profile/index";
        $this->load->view('layouts/appLayout', $data);
	}
}
