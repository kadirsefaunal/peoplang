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

        $receivers = $this->MessageModel->getMessagesUsers($userID);
        
        if ($user != null) {
            $data["messages"] = $this->MessageModel->getMessages($userID, $user);
            $data["status"] = true;
            $status = true;
            foreach ($receivers as $r) {
                if ($r["userID"] == $user) {
                    $status = false;
                    break;
                }
            }

            if ($status == true) {
                $u       = $this->UserControl->getUserByID($user);
                $userInfo   = $this->UserControl->getUserInformation($u->userInformationID);
                
                $receiver = array(
                    "userID"   => $u->ID,
                    "userName" => $u->userName,
                    "name"     => $userInfo->name,
                    "avatar"   => $this->UserControl->getUserAvatar($u->ID)
                );

                array_push($receivers, $receiver);
            }

        } else {
            $data["messages"] = $this->MessageModel->getMessages($userID, $receivers[0]["userID"]);
            $data["status"] = false;
        }

        $data["receivers"] = $receivers;

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