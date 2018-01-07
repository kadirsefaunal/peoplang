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
		$userInformation = $this->SettingsModel->getProfile($userID);

		$data["name"] = $userInformation["name"];
		$data['content'] = "app/index";
		$data["posts"] = $this->PostModel->getAllPosts($userID);
		$data["online4s"] = $this->OnlineModel->onlineUsers(4);
		$data["visitors"] = $this->UserControl->getVisitorsByID($userID);
		$data["onlineFriends"] = $this->UserControl->getOnlineFriends($userID);
		$data["userID"] = $userID;
		$this->load->view('layouts/appLayout', $data);
    }

	public function savePost()
	{
		if ($this->input->post("post") == null) {
            echo "boş";
		}
		/*else{
			echo "Gelen:". $this->input->post("post");
		}*/
		
		$post = $this->input->post("post");
		$dt = time();
		$userID  = get_cookie("User");

		$newPost = array(
			"userID" 	 => $userID,
			"content"    =>	$post["content"],
			"date"		 =>	$dt		
		);

		$this->PostModel->insertPost($newPost);

		//echo json_encode($newPost);
		//$result = $this->PostControl->postAdd($newPost);

	}

	public function getPosts()
	{
		$userID = get_cookie("User");
		echo json_encode($this->PostModel->getAllPosts($userID));
	}

	public function getOnline4()
	{
		$lang = $this->input->post("language");
		$result = $this->OnlineModel->onlineUsersLanguage($lang["langName"]);
		echo json_encode($result);
	}

	public function getNotificationCount()
	{
		$userID = get_cookie("User");
		$notifs = $this->db->get_where("Notifications", array("nUserID" => $userID, "read" => false));
		$notifs = $notifs->result_array();

		echo json_encode(count($notifs));
	}
}
