<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

	function __construct() {
        parent::__construct();

		$this->load->model("PostModel");
		$this->load->model("SettingsModel");
		$this->load->model("OnlineModel");
		$this->load->model("UserControl");
		
    }

	public function index()
	{
		$userID = get_cookie("User");
		if ($userID == null) {
			redirect("/landing");
		}

		$userInformation = $this->SettingsModel->getProfile($userID);
		
		$user = $this->UserControl->getUserByID($userID);
		if($user->registerStatus == "f"){
			redirect("/settings");
		}
		$data["name"] = $userInformation["name"];

		$data['content'] = "app/index";
		$data["posts"] = $this->PostModel->getAllPosts($userID);
		$data["online4s"] = $this->OnlineModel->onlineUsers(4);
		$data["visitors"] = $this->UserControl->getVisitorsByID($userID);
		$data["onlineFriends"] = $this->UserControl->getOnlineFriends($userID);
		$data["userID"] = $userID;
		$this->load->view('layouts/appLayout', $data);
    }

	public function checkRegisterStatus()
	{
		if (!$this->input->get()) {
			redirect("/landing");
		}
		$userID = get_cookie("User");
		$user = $this->UserControl->getUserByID($userID);
		echo $user->registerStatus;
	}
	
	public function savePost()
	{
		if ($this->input->post("post") == null) {
            redirect("/landing");
		}
		
		$post = $this->input->post("post");
		$dt = time();
		$userID  = get_cookie("User");

		$newPost = array(
			"userID" 	 => $userID,
			"content"    =>	$post["content"],
			"date"		 =>	$dt		
		);

		$this->PostModel->insertPost($newPost);

	}

	public function getPosts()
	{
		if (!$this->input->get()) {
			redirect("/landing");
		}

		$userID = get_cookie("User");
		echo json_encode($this->PostModel->getAllPosts($userID));
	}

	public function getOnline4()
	{
		if ($lang = $this->input->post("language") == null) {
			redirect("/landing");
		}

		$lang = $this->input->post("language");
		$result = $this->OnlineModel->onlineUsersLanguage($lang["langName"]);
		echo json_encode($result);
	}

	public function getNotificationCount()
	{
		if (!$this->input->get()) {
			redirect("/landing");
		}

		$userID = get_cookie("User");
		$notifs = $this->db->get_where("Notifications", array("nUserID" => $userID, "read" => false));
		$notifs = $notifs->result_array();

		echo json_encode(count($notifs));
	}

	public function getMessageCount()
	{
		if (!$this->input->get()) {
			redirect("/landing");
		}

		$userID = get_cookie("User");

		$messages = $this->db->get_where("messages", array("receiver" => $userID, "readStatus" => false));
		$messages = $messages->result_array();

		echo json_encode(count($messages));
	}
}
