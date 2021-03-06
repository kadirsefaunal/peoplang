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
        $userID = get_cookie("User");

        $userreg = $this->UserControl->getUserByID($userID);
		if($userreg->registerStatus == "f"){
			redirect("/settings");
        }
        
        $receivers = $this->MessageModel->getMessagesUsers($userID);
        
        if ($user != null) {
            $checkBlock = $this->MessageModel->checkBlock($userID, $user);
            if ($checkBlock == false) {
                redirect("/app");
            } 

            $data["messages"] = $this->MessageModel->getMessages($userID, $user);

            $status = true;
            foreach ($receivers as $r) {
                if ($r["userID"] == $user) {
                    $status = false;
                    break;
                }
            }

            if ($status == true) {
                $u          = $this->UserControl->getUserByID($user);
                $userInfo   = $this->UserControl->getUserInformation($u->userInformationID);
                
                $receiver = array(
                    "userID"   => $u->ID,
                    "userName" => $u->userName,
                    "name"     => $userInfo->name,
                    "avatar"   => $this->UserControl->getUserAvatar($u->ID)
                );

                array_push($receivers, $receiver);
            }
            $data["receiver"] = $user;
        } else {
            $data["receiver"] = null;
        }

        $data["receivers"] = $receivers;

        $userID = get_cookie("User");
        $userInformation = $this->SettingsModel->getProfile($userID);
        $data["name"] = $userInformation["name"];
        
        $data["content"] = "message/index";
        $this->load->view('layouts/appLayout', $data);
    }


    public function saveMessage()
    {
        $message = $this->input->post("message");

        $userID = get_cookie("User");
        
        echo json_encode($this->MessageModel->saveMessage($message, $userID));
    }

    public function getMessageUser()
    {
        $id = $this->input->post("user");
        $u          = $this->UserControl->getUserByID($id["id"]);
        $userInfo   = $this->UserControl->getUserInformation($u->userInformationID);
        $user = array(
            "userID"   => $u->ID,
            "name"     => $userInfo->name,
            "avatar"   => $this->UserControl->getUserAvatar($u->ID)
        );

        echo json_encode($user);
    }
}