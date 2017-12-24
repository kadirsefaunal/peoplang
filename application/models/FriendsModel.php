<?php 

class FriendsModel extends CI_Model
{
    function __construct() {
        parent::__construct();
    }

    public function getFriends($userID)
    {
        $result = $this->db->get_where("Friend", array("userID" => $userID));
        return $result->result();
    }
}