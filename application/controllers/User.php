<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("DBmodel");
        $this->load->model("OnlineModel");
        $this->load->model("UserControl");
        $this->load->library("encryption");
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
        $newUser->password       = password_hash($user['password'], PASSWORD_BCRYPT);
        $newUser->registerDate   = $dt;
        $newUser->registerStatus = false;
        $newUser->lastLogin      = $dt;
        $newUser->ip             = '1.1.1.1';
        $newUser->userStatus     = true;

        $result = $this->UserControl->userNameMailControl($newUser->userName, $newUser->mail);

        if ($result == "True") {
            if ($this->DBmodel->save("User", $newUser) == 1) {
                set_cookie('User', $this->db->insert_id(), '3600');
                $this->OnlineModel->beOnline($this->db->insert_id());
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
            echo -1;
        } else {
            if (password_verify($user["password"], $result->password)) {
                set_cookie('User', $result->ID, '3600');
                $this->OnlineModel->beOnline($result->ID);
                echo $result->ID;
            } else {
                echo 0;
            }
        }
    }

    public function logout()
    {
        if (get_cookie("User") != null) {
            $userID = get_cookie("User");
            $this->OnlineModel->beOfline($userID);
            delete_cookie("User");
        }

        redirect("landing", "refresh");
    }
}
