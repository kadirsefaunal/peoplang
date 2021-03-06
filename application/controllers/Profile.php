<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	
	function __construct() {
        parent::__construct();
		$this->load->model("UserControl");
		$this->load->model("SettingsModel");
		$this->load->model("LanguageModel");
		$this->load->model("FriendsModel");
		$this->load->model("PostModel");
    }

	public function index($userName = null)
	{
		$userID = get_cookie("User");
		if ($userID == null) {
			redirect("/landing");
		}

		$logUser = $this->UserControl->getUserByID($userID);
		if($logUser->registerStatus == "f"){
			redirect("/settings");
		}
		if ($userName == $logUser->userName) {
			redirect("/profile");
		}
		
		$data["friendStatus"] = false;
		if ($userName == null) {
			$userID = get_cookie("User");
			$userInformation = $this->SettingsModel->getProfile($userID);
			$u = $this->UserControl->getUserByID($userID);
		} else {
			$u = $this->UserControl->getUserByUserName($userName);
			$userID = $u->ID;
			$userInformation = $this->SettingsModel->getProfile($userID);
			
			if ($u == null) {
				redirect("/404page");
			}

			$this->UserControl->setViewer($u->ID, get_cookie("User"));

			$friend = $this->db->get_where("Friend", array("userID" => get_cookie("User"), "friendID" => $userID));
			$friend = $friend->first_row();

			if ($friend == null) {
				$data["friendStatus"] = false;
			} else {
				$data["friendStatus"] = true;
			}
		}

		$user = array(
			"avatar" 			=> $this->UserControl->getUserAvatar($userID),
			"userInformation" 	=> $userInformation,
			"flag"				=> $this->SettingsModel->getFlagUrl($userInformation["country"]),
			"userName" 			=> $u->userName,
			"speaks" 			=> $this->LanguageModel->getLanguages($userID, true),
			"learning" 			=> $this->LanguageModel->getLanguages($userID, false),
			"webSites" 			=> $this->SettingsModel->getWebSites($userID),
			"friends" 			=> $this->FriendsModel->getFriendsInformation($userID, 4),
			"aboutme" 			=> $this->SettingsModel->getAboutMe($userID),
			"posts"				=> $this->PostModel->getUserPosts($userID),
			"images"			=> $this->UserControl->getImages($userID),
			"userID"			=> $u->ID
		);

		$ui = $this->SettingsModel->getProfile(get_cookie("User"));
		$data["name"] = $ui["name"]; 
		$data["user"] = $user;
		$data['content'] = "profile/index";
		$this->load->view('layouts/appLayout', $data);
	}

	public function deletePostByID()
	{
		$post = $this->input->post("post");
		$userID = get_cookie("User");
		if ($this->PostModel->deletePostByID($post["postID"]) == true) {
			echo json_encode($this->PostModel->getUserPosts($userID));	
		}
		
	}

	public function sendReport()
	{
		$user = $this->input->post("user");
		$userID = get_cookie("User");
		$dt = time();

		$report = array(
			"userID" => $userID,
			"reportedID" => $user["userID"],
			"content" => $user["content"],
			"date" => $dt
		);

		echo json_encode($this->UserControl->report($report));
	}

	public function sendBlock()
	{
		$user = $this->input->post("user");
		$userID = get_cookie("User");

		$block = array(
			"userID"  => $userID,
			"blockID" => $user["userID"] 
		);

		echo json_encode($this->UserControl->block($block));
	}

	public function addFriend()
	{
		$user = $this->input->post("user");
		$userID = get_cookie("User");

		$notification = array(
			"userID" => $userID,
			"nUserID" => $user["userID"],
			"notification" => " sent a friend request.",
			"read" => false
		);

		echo json_encode($this->UserControl->saveNotification($notification));
	}

	public function deleteFriend()
	{
		$user = $this->input->post("user");
		$userID = get_cookie("User");

		$this->db->delete("Friend", array("userID" => $userID, "friendID" => $user["userID"]));
		$this->db->delete("Friend", array("userID" => $user["userID"], "friendID" => $userID));
	}
}