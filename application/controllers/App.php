<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

	function __construct() {
        parent::__construct();

		$this->load->model("PostModel");
		$this->load->model("SettingsModel");
		$this->load->model("OnlineModel");
    }

    
	public function index()
	{
		$userID = get_cookie("User");
		$userInformation = $this->SettingsModel->getProfile($userID);

		$data["name"] = $userInformation["name"];
		$data['content'] = "app/index";
		$data["posts"] = $this->PostModel->getAllPosts($userID);
		$data["online4s"] = $this->OnlineModel->onlineUsers(4);
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
		
	}
}
