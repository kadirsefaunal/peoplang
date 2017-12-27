<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Translation extends CI_Controller {
	
	function __construct() {
        parent::__construct();

    }

	public function index()
	{
        //$data["user"] = $user;
		$data['content'] = "translationRequest/index";
		$this->load->view('layouts/appLayout', $data);
    }

    public function addTranslationRequest()
    {
        if ($this->input->post("request") == null) {
            echo "boş";
        }
        
        $request = $this->input->post("request");
        $userID  = get_cookie("User");
        $dt = time();

        $translationRequest = array(
            "userID" 	 => $userID,
			"content"    =>	$post["content"],
			"date"		 =>	$dt	
        )

        $this->TranslationModel->insertRequest($translationRequest);

    }
}