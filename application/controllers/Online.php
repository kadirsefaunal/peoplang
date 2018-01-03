<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Online extends CI_Controller {

	function __construct() {
        parent::__construct();

		$this->load->model("PostModel");
		$this->load->model("SettingsModel");
		$this->load->model("OnlineModel");
		$this->load->model("UserControl");
    }

	public function index()
    {
		$userID = get_cookie("User");
		$userInformation = $this->SettingsModel->getProfile($userID);
        $data["name"] = $userInformation["name"];
		$data["online"] = array();
		$data['content'] = "online/index";
		$this->load->view('layouts/appLayout', $data);
    }
    
    
    
}