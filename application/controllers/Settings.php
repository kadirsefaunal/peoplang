<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this->load->model("SettingsModel");
		$this->load->model("LanguageModel");
	}
    
	public function index()
	{
		$userID = get_cookie("User");

		$data['WebSites'] = $this->SettingsModel->getWebSites($userID);
		$data['AboutMe']  = $this->SettingsModel->getAboutMe($userID);
		$data['content']  = "settings/index";
		
		$this->load->view('layouts/appLayout', $data);
    }

	public function saveContact()
	{
		if ($this->input->post("contact") == null) {
            echo "boş";
        }

		$contact = $this->input->post("contact");
		$userID  = get_cookie("User");

		$this->SettingsModel->insertContact($userID, $contact);

		echo "True";
	}

	public function saveAboutMe()
	{
		if ($this->input->post("aboutme") == null) {
			echo "boş";
		}

		$aboutMe = $this->input->post("aboutme");
		$userID  = get_cookie("User");

		$this->SettingsModel->insertAboutMe($userID, $aboutMe);

		//echo "True";
	}

	public function changePassword()
	{
		if ($this->input->post("password") == null) {
			echo "boş";
		}


		$userID = get_cookie("User");
		$password = $this->input->post("password");

		echo json_encode($this->SettingsModel->changePwd($userID, $password));
	}

	public function addLangSpeaks()
	{
		if ($this->input->post("langSpeaks") == null) {
			echo "boş";
		}

		$languages = $this->input->post("langSpeaks");
		$userID	   = get_cookie("User");
		$languages["userID"] = $userID;

		$result = $this->LanguageModel->saveLanguage($languages);

		if ($result == true) {
			echo json_encode("Success!");
		} else {
			echo json_encode("Error!");
		}
	}

	
}
