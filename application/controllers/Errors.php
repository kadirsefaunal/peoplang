<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Errors extends CI_Controller {
	
	function __construct() {
        parent::__construct();
        $this->load->model("SettingsModel");
    }

    public function user404()
    {
        $userID = get_cookie("User");
        $userInfo = $this->SettingsModel->getProfile($userID);

        $data["name"]    = $userInfo["name"];
        $data["heading"] = "Kullanıcı Bulunamadı!";
        $data["message"] = "Aradığınız kullanıcı adı sistemimize kayıtlı değil!. Kullanıcı adını kontrol ederek tekrar deneyin.";
		$data['content'] = "errors/cli/error_404";
		$this->load->view('layouts/appLayout', $data);
    }

}