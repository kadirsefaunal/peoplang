<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Translation extends CI_Controller {
	
	function __construct() {
        parent::__construct();

    }

	public function index()
	{
        //$data["user"] = $user;
		$data['content'] = "translationRequest/index";
		$this->load->view('layouts/appLayout', $data);
    }
}