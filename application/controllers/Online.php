<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Online extends CI_Controller {

	function __construct() {
        parent::__construct();

		$this->load->model("PostModel");
		$this->load->model("SettingsModel");
		$this->load->model("OnlineModel");
		$this->load->model("UserControl");
		$this->load->model("SearchModel");
    }

	public function index()
    {
		$userID = get_cookie("User");
		$userInformation = $this->SettingsModel->getProfile($userID);
        $data["name"] = $userInformation["name"];
		$data["online"] = array();
		$data['Countries'] = $this->SettingsModel->getCountries();
		$data['content'] = "online/index";
		$this->load->view('layouts/appLayout', $data);
    }
    
    public function search()
	{
		$search = $this->input->post("search");

		// $username = $search["username"];
        // $country  = $search["country"];
        // $gender   = $search["gender"];
        // $age1     = $search["age1"];
        // $age2     = $search["age2"];
		// $language = $search["language"];
		$deneme = $this->SearchModel->search($search);

		
		echo var_dump($deneme);
	}
    
}