<?php 

class FriendsModel extends CI_Model
{
    function __construct() {
        parent::__construct();
        $this->load->model("UserControl");
        $this->load->model("SettingsModel");
    }

    public function getFriends($userID)
    {
        $result = $this->db->get_where("Friend", array("userID" => $userID));
        return $result->result_array();
    }

    public function getFriendsInformation($userID, $limit = null)
    {
        if ($limit != null) {
            $frie = $this->db->get_where("Friend", array("userID" => $userID), $limit);    
        } else {
            $frie = $this->db->get_where("Friend", array("userID" => $userID));
        }
        
        $friends = $frie->result_array();
        $friendsList = array();

        if ($friends != null) {
            foreach ($friends as $friend) {
                $user = $this->UserControl->getUserByID($friend["friendID"]);
                $userInfo = $this->UserControl->getUserInformation($user->userInformationID);
    
                $datetime1 = date_create($userInfo->birthDate);
                $datetime2 = date_create(date("Y-m-d"));
                $interval = date_diff($datetime1, $datetime2);
                $age = $interval->format('%Y');
    
                if ($userInfo->city != null) {
                    $countryCity = $userInfo->city;
                } else {
                    $countryCity = $userInfo->country;
                }
    
                $friendInfo = array(
                    "userID"   => $user->ID,
                    "userName" => $user->userName,
                    "gender"   => $userInfo->gender,
                    "age"      => $age,
                    "flag"     => $this->SettingsModel->getFlagUrl($userInfo->country),
                    "location" => $countryCity,
                    "avatar"   => $this->UserControl->getUserAvatar($user->ID)
                );
                
                array_push($friendsList, $friendInfo);
            }
            return $friendsList;
        } else {
            return null;
        }
    }
}