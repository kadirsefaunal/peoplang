<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("DBmodel");
        $this->load->model("UserControl");
    }
    
	public function register()
	{
        if ($this->input->post("user") == null) {
            echo "boş";
        }

        $dt = time();

        $user = $this->input->post("user");

        $newUser = new User();
        $newUser->userName       = $user['userName'];
        $newUser->mail           = $user['mail'];
        $newUser->password       = $user['password'];
        $newUser->registerDate   = $dt;
        $newUser->registerStatus = false;
        $newUser->lastLogin      = $dt;
        $newUser->ip             = '1.1.1.1';
        $newUser->userStatus     = true;

        $result = $this->UserControl->userNameMailControl($newUser->userName, $newUser->mail);

        if ($result == "True") {
            if ($this->DBmodel->save("User", $newUser) == 1) {
                set_cookie('User', $this->db->insert_id(), '3600');
                echo $result;
            } else {
                echo "Veritabanı Hatası!";
            }
        } else {
            echo $result;
        }

		// $data = array("content" => "Landing/index");
		// $this->load->view('index', $data);
    }

    public function login()
    {
        if ($this->input->post('user') == null) {
            echo 'boş';
        }

        $user = $this->input->post("user");

        $userForm = array(
            'userName' => $user['userName'],
            'password' => $user['password']
        );

        $result = $this->UserControl->loginControl($userForm);
        //echo json_encode($result);
        if (!isset($result)) {
            echo "Kullanıcı bulunamadı!";
        } else {
            if ($result->password == $user["password"]) {
                set_cookie('User', $result->ID, '3600');
                echo "True";
            } else {
                echo "Parola hatalı!";
            }
        }
    }

    public function logout()
    {
        if (get_cookie("User") != null) {
            delete_cookie("User");
        }

        redirect("landing", "refresh");
    }
}
