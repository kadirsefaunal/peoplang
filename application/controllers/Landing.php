<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {
	
	public function index()
	{
		$userID = get_cookie("User");
		if ($userID != null) {
			redirect("/app");
		}

		$this->load->view('landing/index');
	}
}
