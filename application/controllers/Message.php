<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller {
	
	function __construct() {
        parent::__construct();
        $this->load->model("SettingsModel");
        $this->load->model("MessageModel");
    }

    public function index($user = null)
    {
        if ($user != null) {
        }

        $userID = get_cookie("User");
        $userInformation = $this->SettingsModel->getProfile($userID);
        $data["name"] = $userInformation["name"];
        $data["userID"] = $userID;
        $data["receiver"] = $user;
        $data["content"] = "message/index";
        $this->load->view('layouts/appLayout', $data);
    }


    public function saveMessage()
    {
        $message = $this->input->post("message");

        $userID = get_cookie("User");
        
        echo json_encode($this->MessageModel->saveMessage($message, $userID));
    }
}