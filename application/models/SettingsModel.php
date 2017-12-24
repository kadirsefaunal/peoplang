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
}