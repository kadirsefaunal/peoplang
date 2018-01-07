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

    public function deleteImageByID($id)
    {
        $img = $this->db->delete("Images", array("ID" => $id));
    }

    public function setAvatarByID($userID, $imgID)
    {
        $img = $this->db->get_where("Images", array("userID" => $userID, "avatar" => true));
        $i = $img->first_row();

        $i->avatar = false;

        $this->db->update("Images", $i, array("userID" => $userID, "avatar" => true));


        $img = $this->db->get_where("Images", array("ID" => $imgID));
        $i = $img->first_row();

        $i->avatar = true;

        $this->db->update("Images", $i, array("ID" => $imgID));

    }
}
