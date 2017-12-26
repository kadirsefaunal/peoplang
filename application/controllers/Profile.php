<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	
	function __construct() {
        parent::__construct();
		$this->load->model("UserControl");
		$this->load->model("SettingsModel");
		$this->load->model("LanguageModel");
    }

	public function index()
	{
		$userID = get_cookie("User");
		$userInformation = $this->SettingsModel->getProfile($userID);
		$user = $this->UserControl->getUserByID($userID);

		$user = array(
			"avatar" => $this->UserControl->getUserAvatar($userID),
			"userInformation" => $userInformation,
			"flag"	=> $this->SettingsModel->getFlagUrl($userInformation["country"]),
			"userName" => $user->userName,
			"speaks" => $this->LanguageModel->getLanguages($userID, true),
			"learning" => $this->LanguageModel->getLanguages($userID, false)
		);

		$data["user"] = $user;
		$data['content'] = "profile/index";
		$this->load->view('layouts/appLayout', $data);
	}
}
