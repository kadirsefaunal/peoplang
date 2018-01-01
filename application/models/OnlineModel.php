<?php 

class OnlineModel extends CI_Model
{
    function __construct() {
        parent::__construct();
        $this->load->model("UserControl");
        $this->load->model("SettingsModel");
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
    
    public function onlineUsers($limit = null)
    {
        if ($limit != null) {
            $userIDs = $this->db->get("OnlineUsers", $limit);
        } else {
            $userIDs = $this->db->get("OnlineUsers");
        }

        $IDs = $userIDs->result_array();
        $users = array();

        if ($IDs != null) {
            foreach ($IDs as $id) {
                if ($id["userID"] == get_cookie("User")) {
                    continue;
                }

                $user       = $this->UserControl->getUserByID($id["userID"]);
                $userInfo   = $this->UserControl->getUserInformation($user->userInformationID);

                $datetime1  = date_create($userInfo->birthDate);
                $datetime2  = date_create(date("Y-m-d"));
                $interval   = date_diff($datetime1, $datetime2);
                $age = $interval->format('%Y');

                if ($userInfo->city != null) {
                    $countryCity = $userInfo->city;
                } else {
                    $countryCity = $userInfo->country;
                }

                $userInfo = array(
                    "userID"   => $user->ID,
                    "userName" => $user->userName,
                    "gender"   => $userInfo->gender,
                    "age"      => $age,
                    "flag"     => $this->SettingsModel->getFlagUrl($userInfo->country),
                    "location" => $countryCity,
                    "avatar"   => $this->UserControl->getUserAvatar($user->ID)
                );

                array_push($users, $userInfo);


            }
            return $users;
        } else {
            return null;
        }

    }

    public function onlineUsersLanguage($lang)
    {
        $userIDs = $this->db->get("OnlineUsers");
        $IDs = $userIDs->result_array();
        
        $users = array();

        $i = 0;
        foreach ($IDs as $id) {
            if ($id["userID"] == get_cookie("User")) {
                continue;
            }

            $u = $this->db->get_where("LanguageLevel", array("language" => $lang, "userID" => $id["userID"]));
            $firstU = $u->first_row();

            if ($firstU != null) {
                $user       = $this->UserControl->getUserByID($id["userID"]);
                $userInfo   = $this->UserControl->getUserInformation($user->userInformationID);

                $datetime1  = date_create($userInfo->birthDate);
                $datetime2  = date_create(date("Y-m-d"));
                $interval   = date_diff($datetime1, $datetime2);
                $age = $interval->format('%Y');

                if ($userInfo->city != null) {
                    $countryCity = $userInfo->city;
                } else {
                    $countryCity = $userInfo->country;
                }

                $userInfo = array(
                    "userID"   => $user->ID,
                    "userName" => $user->userName,
                    "gender"   => $userInfo->gender,
                    "age"      => $age,
                    "flag"     => $this->SettingsModel->getFlagUrl($userInfo->country),
                    "location" => $countryCity,
                    "avatar"   => $this->UserControl->getUserAvatar($user->ID)
                );
                array_push($users, $userInfo);
                $i++;
            }

            if ($i == 3) {
                break;
            }
        }
        return $users;
    }
}