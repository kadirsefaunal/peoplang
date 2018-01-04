<?php 

class ImageModel extends CI_Model
{
    function __construct() {
        parent::__construct();
        $this->load->model("");
    }

    public function addPhoto($userID, $url)
    {
        $image = array(
            "userID" => $userID,
            "url"    => $url,
            "avatar" => false
        );

        $this->db->insert("Images", $image);
        
    }
}
