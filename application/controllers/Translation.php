<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Translation extends CI_Controller {
	
	function __construct() {
        parent::__construct();
        $this->load->model("UserControl");
        $this->load->model("TranslationModel");
        $this->load->model("SettingsModel");
        $this->load->model("LanguageModel");
    }

	public function index()
	{
        $userID = get_cookie("User");
        if ($userID == null) {
			redirect("/landing");
		}

        $user = $this->UserControl->getUserByID($userID);
		if($user->registerStatus == "f"){
			redirect("/settings");
		}
        $userInformation = $this->SettingsModel->getProfile($userID);

        $data["name"] = $userInformation["name"];
        //$veri = $this->LanguageModel->getUserLanguages($userID);
        //var_dump($veri["language"]);
        $data['content'] = "translationRequest/index";
        $data['requests'] = $this->TranslationModel->getTranslationRequests($userID);
        $data['allRequests'] = $this->TranslationModel->getAllTranslationRequests($userID);
        $this->load->view('layouts/appLayout', $data);
    }

    public function addTranslationRequest()
    {        
        $request = $this->input->post("request");

        $userID  = get_cookie("User");
        $request['date'] = time();
        $request['userID'] = $userID;

        $this->TranslationModel->insertRequest($request);
    }

    public function deleteRequestByID()
    {
        $request = $this->input->post("request");
        $userID = get_cookie("User");
        $this->TranslationModel->deleteAnswers($request["requestID"]);
		if ($this->TranslationModel->deleteRequestByID($request["requestID"]) == true) {
			echo json_encode($this->TranslationModel->getTranslationRequests($userID));	
		}
    }

    public function getRequests()
    {
        $userID = get_cookie("User");
        echo json_encode($this->TranslationModel->getTranslationRequests($userID));
    }

    public function getAllRequests()
    {
        $userID = get_cookie("User");
        echo json_encode($this->TranslationModel->getAllTranslationRequests($userID));
    }
}