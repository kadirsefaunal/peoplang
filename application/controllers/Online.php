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
		$user = $this->UserControl->getUserByID($userID);
		if($user->registerStatus == "f"){
			redirect("/settings");
		}
		$userInformation = $this->SettingsModel->getProfile($userID);
        $data["name"] = $userInformation["name"];
		$data["onlines"] = $this->OnlineModel->onlineUsers();
		$data['Countries'] = $this->SettingsModel->getCountries();
		$data['content'] = "online/index";
		$this->load->view('layouts/appLayout', $data);
    }
    
    public function search()
	{
		$search = $this->input->post("search");

		$deneme = $this->SearchModel->search($search);

		echo json_encode($deneme);
	}
    
}