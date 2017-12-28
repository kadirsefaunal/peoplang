<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Friend extends CI_Controller {
	
	function __construct() {
        parent::__construct();
		$this->load->model("FriendsModel");
    }

    public function index()
    {
        $userID = get_cookie("User");


        $data["friends"] = $this->FriendsModel->getFriendsInformation($userID);
        $data['content'] = "friend/index";
	    $this->load->view('layouts/appLayout', $data);
    }
}