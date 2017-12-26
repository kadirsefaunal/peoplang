<?php 

class SettingsModel extends CI_Model
{
    function __construct() {
        parent::__construct();

        $this->load->model("UserControl");
    }

    public function insertContact($userID, $contact)
    {
        $user = $this->UserControl->getUserByID($userID);
        if ($user->webSitesID == null) {
            $this->db->insert("WebSites", $contact);
            $contactID = $this->db->insert_id();

            $user->webSitesID = $contactID;
            $this->db->update('User', $user, array('ID' => $user->ID));
        } else {
            $this->db->update('WebSites', $contact, array('ID' => $user->webSitesID));
        }
    }

    public function getWebSites($userID)
    {
        $user = $this->UserControl->getUserByID($userID);
        if ($user->webSitesID != null) {
            $result = $this->db->get_where("WebSites", array('ID' => $user->webSitesID));
            return $result->first_row();
        } else {
            return null;
        }
    }

    public function insertAboutMe($userID, $aboutMe)
    {
        $user = $this->UserControl->getUserByID($userID);
        if ($user->aboutMeID == null) {
            $this->db->insert("AboutMe", $aboutMe);
            $aboutMeID = $this->db->insert_id();

            $user->aboutMeID = $aboutMeID;
            $this->db->update("User", $user, array('ID' => $user->ID));
        } else {
            $this->db->update("AboutMe", $aboutMe, array('ID' => $user->aboutMeID));
        }
    }

    public function getAboutMe($userID)
    {
        $user = $this->UserControl->getUserByID($userID);
        if ($user->aboutMeID != null) {
            $result = $this->db->get_where("AboutMe", array('ID' => $user->aboutMeID));
            return $result->first_row();
        } else {
            return null;
        }
    }

    public function getProfile($userID)
    {
        $user = $this->UserControl->getUserByID($userID);
        if ($user->userInformationID != null) {
            $userInformation = $this->UserControl->getUserInformation($user->userInformationID);
            $userInfo = array(
                "name"      => $userInformation->name,
                "country"   => $userInformation->country,
                "city"      => $userInformation->city,
                "birthDay"  => $userInformation->birthDate,
                "gender"    => $userInformation->gender
            );
            return $userInfo;
        } else {
            return null;
        }
    }

    public function changePwd($userID, $password)
    {
        $user= $this->UserControl->getUserByID($userID);
        if ($user->password == $password["oldPassword"]) {
            $user->password = $password["newPassword"];
            $this->db->update("User", $user, array("ID" => $user->ID));
            return "Başarılı!";
        } else {
            return "Eski Parola Hatalı!";
        }
    }

    public function getCountries()
    {
        $countries = $this->db->get("countries");
        return $countries->result_array();
    }

    public function getStates($countryID)
    {
        $states = $this->db->get_where("states", array("country_id" => $countryID));
        return $states->result_array();
    }

    public function getStatesByCName($countryName)
    {
        $country = $this->db->get_where("countries", array("name" => $countryName));
        $country = $country->first_row();
        $states  = $this->getStates($country->id);
        return $states;
    }

    public function insertUserInformation($userID, $userInformation)
    {
        $user = $this->UserControl->getUserByID($userID);
        if ($user->userInformationID == null) {
            $this->db->insert("UserInformation", $userInformation);
            $userInformationID = $this->db->insert_id();

            $user->userInformationID = $userInformationID;
            $this->db->update('User', $user, array('ID' => $user->ID));
        } else {
            $this->db->update('UserInformation', $userInformation, array('ID' => $user->userInformationID));
        }
    }

    public function getFlagUrl($countryName)
    {
        $shortCountry = $this->db->get_where("countries", array("name" => $countryName));
        $shortCountry = $shortCountry->first_row();
        return base_url("public/img/flags/". $shortCountry->sortname . ".png");
    }
}