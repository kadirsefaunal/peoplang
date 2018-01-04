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

        $this->db->distinct();
        $this->db->select("User.ID");
        $this->db->from('User');
        $this->db->join('UserInformation', 'User.userInformationID = UserInformation.ID');
        $this->db->join('LanguageLevel', 'User.ID = LanguageLevel.userID');

        $query = $this->db->get();
        $que = $query->result_array();
        $onlineList = array();
        foreach ($que as $q) {
            $user       = $this->UserControl->getUserByID($q["ID"]);
            $userInfo   = $this->UserControl->getUserInformation($user->userInformationID);

            $datetime1  = date_create($userInfo->birthDate);
            $datetime2  = date_create(date("Y-m-d"));
            $interval   = date_diff($datetime1, $datetime2);
            $age = $interval->format('%Y');

            if($age >= $age1 && $age <= $age2 ){
                if ($userInfo->city != null) {
                    $countryCity = $userInfo->city;
                } else {
                    $countryCity = $userInfo->country;
                }
                $onlineInfo = array(
                    "userID"   => $user->ID,
                    "userName" => $user->userName,
                    "gender"   => $userInfo->gender,
                    "age"      => $age,
                    "flag"     => $this->SettingsModel->getFlagUrl($userInfo->country),
                    "location" => $countryCity,
                    "avatar"   => $this->UserControl->getUserAvatar($user->ID)
                );
                array_push($onlineList, $onlineInfo);
            }
        }
        return $onlineList;
        
    }
}