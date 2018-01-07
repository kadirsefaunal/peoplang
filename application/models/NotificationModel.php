<?php 

class NotificationModel extends CI_Model
{
    function __construct() {
        parent::__construct();
        $this->load->model("UserControl");
    }


    public function getNotificationDetail($userID)
    {
        $notifications = $this->db->get_where("Notifications", array("nUserID" => $userID));
        $notifications = $notifications->result_array();

        $mapNotifs = array();
        foreach ($notifications as $n) {
            $user       = $this->UserControl->getUserByID($n["userID"]);
            $userInfo   = $this->UserControl->getUserInformation($user->userInformationID);
            
            $notif = array(
				"userID"   => $user->ID,
				"userName" => $user->userName,
                "avatar"   => $this->UserControl->getUserAvatar($user->ID),
                "name"     => $userInfo->name,
                "notification" => $n["notification"]
            );
            
            array_push($mapNotifs, $notif);
        }

        return $mapNotifs;
    }
}