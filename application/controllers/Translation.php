<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Translation extends CI_Controller {
	
	function __construct() {
        parent::__construct();
        $this->load->model("UserControl");
        $this->load->model("TranslationModel");
        $this->load->model("SettingsModel");
    }

	public function index()
	{
        $userID = get_cookie("User");
        $userInformation = $this->SettingsModel->getProfile($userID);

        $data["name"] = $userInformation["name"];
        $data['content'] = "translationRequest/index";
        $data['requests'] = $this->TranslationModel->getTranslationRequests($userID);
        $this->load->view('layouts/appLayout', $data);
    }

    public function addTranslationRequest()
    {
        if ($this->input->post("request") == null) {
            echo "boş";
        }
        
        $request = $this->input->post("request");

        $userID  = get_cookie("User");
        $request['date'] = time();
        $request['userID'] = $userID;

        $this->TranslationModel->insertRequest($request);

    }

}