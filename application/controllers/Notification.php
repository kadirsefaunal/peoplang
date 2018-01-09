<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notification extends CI_Controller {
	
	function __construct() {
        parent::__construct();
        $this->load->model("SettingsModel");
        $this->load->model("NotificationModel");
    }

    public function index()
    {
        $userID = get_cookie("User");
        if ($userID == null) {
			redirect("/landing");
		}

        $ui = $this->SettingsModel->getProfile($userID);

        $data["notifications"] = $this->NotificationModel->getNotificationDetail($userID);
		$data["name"] = $ui["name"]; 
        $data['content'] = "notification/index";
		$this->load->view('layouts/appLayout', $data);
    }

    

    public function notificationSetRead()
    {
        $userID = get_cookie("User");

        $this->db->set('read', true);
        $this->db->where('nUserID', $userID);
        $this->db->update('Notifications');
    }

    public function messageSetRead()
    {
        $userID = get_cookie("User");

        $this->db->set('readStatus', true);
        $this->db->where('receiver', $userID);
        $this->db->update('messages');
    }

    public function rejectFriendReq()
    {
        $post = $this->input->post("user");
        $userID = get_cookie("User");

        $this->db->delete("Notifications", array("userID" => $post["userID"], "nUserID" => $userID, "notification" => " sent a friend request."));

    }

    public function acceptFriendReq()
    {
        $post = $this->input->post("user");
        $userID = get_cookie("User");

        $u = array(
            "userID"    => $userID,
            "friendID"  => $post["userID"]
        );

        $u2 = array(
            "userID"    => $post["userID"],
            "friendID"  => $userID
        );

        $this->db->insert("Friend", $u);
        $this->db->insert("Friend", $u2);

        $this->db->delete("Notifications", array("userID" => $post["userID"], "nUserID" => $userID, "notification" => " sent a friend request."));

        $notif = array(
            "userID" => $userID,
            "nUserID" => $post["userID"],
            "notification" => " accept your friend request.",
            "read" => false
        );

        $this->db->insert("Notifications", $notif);
    }

    public function messageSetReadForUser()
    {
        $userID = get_cookie("User");
        $user = $this->input->post("user");

        $this->db->set('readStatus', true);
        $this->db->where('receiver', $userID);
        $this->db->where("userID", $user["userID"]);
        $this->db->update('messages');
    }
}