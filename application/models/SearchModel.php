<?php 

class SearchModel extends CI_Model
{
    function __construct() {
        parent::__construct();

        $this->load->model("UserControl");
        $this->load->model("SettingsModel");
    }

    public function search($search)
    {
        $username = $search["username"];
        $country  = $search["country"];
        $gender   = $search["gender"];
        $age1     = $search["age1"];
        $age2     = $search["age2"];
        $language = $search["language"];

        $this->db->like('User.userName', $username);
        if($country != "All Country"){
            $this->db->where("UserInformation.country", $country);
        }
        if($gender != "All"){
            $this->db->where("UserInformation.gender", $gender);
        }
        if($language != "All Languages"){
            $this->db->where("LanguageLevel.language", $language);
        }
        $this->db->from('User');
        $this->db->join('UserInformation', 'User.userInformationID = UserInformation.ID');
        $this->db->join('LanguageLevel', 'User.ID = LanguageLevel.userID');

        $query = $this->db->get();
        return $query->result_array();
    }
}