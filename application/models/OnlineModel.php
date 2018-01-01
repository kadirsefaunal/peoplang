<?php 

class OnlineModel extends CI_Model
{
    function __construct() {
        parent::__construct();
    }

    public function beOnline($userID)
    {
        $onlineUser = array(
            "userID" => $userID
        );
        $this->db->insert("OnlineUsers", $onlineUser);
    }

    public function beOfline($userID)
    {
        $this->db->delete("OnlineUsers", array("userID" => $userID));
    }
}