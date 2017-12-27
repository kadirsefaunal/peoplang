<?php 

class TranslationModel extends CI_Model
{
    function __construct() {
        parent::__construct();

        $this->load->model("UserControl");
    }

    public function insertRequest($request)
    {
        $this->db->insert('TranslationRequests', $request);
    }

    public function getTranslationRequests($userID)
    {
        $posts = $this->db->get_where("TranslationRequests", array("userID" => $userID));
        return $posts->result_array();
    }
}