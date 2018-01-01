<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TranslationRequest extends CI_Controller {
	
	function __construct() {
        parent::__construct();
        $this->load->model("UserControl");
        $this->load->model("TranslationModel");
        $this->load->model("SettingsModel");
    }

	public function index($trID = null)
	{
        $userID = get_cookie("User");
        $userInformation = $this->SettingsModel->getProfile($userID);

        $data["name"] = $userInformation["name"];
        $data['content'] = "translationDetail/index";
        $data["translationRequest"] = $this->TranslationModel->getTR($trID);
        //$tr = $data["translationRequest"];
        $data["avatar"] = $this->UserControl->getUserAvatar($data["translationRequest"]->userID);
        $data["visitorAvatar"] = $this->UserControl->getUserAvatar($userID);

        $this->load->view('layouts/appLayout', $data);
    }

}