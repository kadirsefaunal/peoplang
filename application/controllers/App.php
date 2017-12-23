<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

	function __construct() {
        parent::__construct();

        $this->load->model("PostModel");
    }

    
	public function index()
	{
		$data['content'] = "app/index";
		$data["posts"] = $this->PostModel->getPosts();
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
		$data["posts"] = $this->PostModel->getPosts();
		$this->load->view("partialPosts", $data);
	}
}
