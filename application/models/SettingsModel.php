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
}