<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this->load->model("SettingsModel");
		$this->load->model("LanguageModel");
		$this->load->model("UserControl");
	}
    
	public function index()
	{
		$userID = get_cookie("User");
		$user = $this->UserControl->getUserByID($userID);
		$userInfo = $this->SettingsModel->getProfile($userID);

		$data['WebSites']  = $this->SettingsModel->getWebSites($userID);
		$data['AboutMe']   = $this->SettingsModel->getAboutMe($userID);
		$data['Countries'] = $this->SettingsModel->getCountries();
		$data['UserInfo']  = $userInfo;
		$data['mail']	   = $user->mail;
		$data['avatar']	   = $this->UserControl->getUserAvatar($userID);
		if ($userInfo != null) {
			$data['States']	   = $this->SettingsModel->getStatesByCName($userInfo["country"]);	
		}
		$data["speaks"]    = $this->LanguageModel->getLanguages($userID, true);
		$data["learn"]	   = $this->LanguageModel->getLanguages($userID, false);
		$data['content']   = "settings/index";
		
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
		if ($this->input->post("lang") == null) {
			echo "boş";
		}

		$languages = $this->input->post("lang");
		$userID	   = get_cookie("User");
		$languages["userID"] = $userID;

		$result = $this->LanguageModel->saveLanguage($languages);
		if ($result == 0) {
			echo json_encode("Eklemek istediğiniz dil zaten mevcut!");
		} else {
			echo json_encode($result);
		}
	}

	public function deletelanguage()
	{
		if ($this->input->post("langid") == null) {
			echo "boş";
		}

		$userID = get_cookie("User");
		$lid 	= $this->input->post("langid");
		
		$result = $this->LanguageModel->deleteLanguage($lid["lid"]);
		if ($result == true) {
			$languages = $this->LanguageModel->getLanguages($userID, $lid["status"]);
			$langList = array();
			foreach ($languages as $language) {
				$newLang = array(
					"ID" => $language["ID"],
					"language" => $language["language"],
					"level"		=> $language["level"],
					"LorS"		=> $language["learningOrSpeaking"]
				);
				array_push($langList, $newLang);
			}

			echo json_encode($langList);
		} else {
			echo json_encode("error");
		}
		
	}

	public function getstates()
	{
		if ($this->input->post("country") == null) {
			echo "boş";
		}

		$country = $this->input->post("country");
		$states = $this->SettingsModel->getStates($country["countryID"]);

		echo json_encode($states);
	}

	public function saveProfile()
	{
		if ($this->input->post("profile") == null) {
			echo "boş";
		}

		$userID  = get_cookie("User");
		$profile = $this->input->post("profile");

		$userInformation = array(
			"name" 		=> $profile["name"],
			"country" 	=> $profile["country"],
			"city"		=> $profile["city"],
			"birthDate" => $profile["birthDate"],
			"gender" 	=> $profile["gender"] 
		);

		$langStatusSpeak = $this->LanguageModel->getLanguages($userID, true);
		$langStatusLearn = $this->LanguageModel->getLanguages($userID, false);

		if ($langStatusSpeak != null && $langStatusLearn != null) {
			$this->SettingsModel->insertUserInformation($userID, $userInformation);
			$this->UserControl->updateUserStatusMail($userID, $profile["mail"]);
			echo "True";	
		} else {
			echo "Dilleri kontrol edin!";
		}

		
	}
}
