<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

	function __construct() {
		parent::__construct();

        $this->load->model("SettingsModel");
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
}
