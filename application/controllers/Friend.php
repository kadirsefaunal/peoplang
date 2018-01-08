<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Friend extends CI_Controller {
	
	function __construct() {
        parent::__construct();
        $this->load->model("FriendsModel");
        $this->load->model("SettingsModel");
    }

    public function index()
    {
        $userID = get_cookie("User");
        if ($userID == null) {
			redirect("/landing");
		}

        $userInfo = $this->SettingsModel->getProfile($userID);

        $data["name"]    = $userInfo["name"];
        $data["friends"] = $this->FriendsModel->getFriendsInformation($userID);
        $data['content'] = "friend/index";
	    $this->load->view('layouts/appLayout', $data);
    }
}