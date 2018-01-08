<?php

class MessageModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->model("UserControl");
    }
	
	public function saveMessage($message, $userID)
	{
        $dt = time();
        $newMessage = array(
            "userID" => $userID,
            "receiver" => $message["receiver"],
            "message" => $message["message"],
            "date" => $dt,
            "readStatus" => false
        );

        $this->db->insert("messages", $newMessage);
        return $newMessage;
    }
    

    public function getMessages($userID, $receiverID)
    {
        $this->db->where("userID", $userID);
        $this->db->where("receiver", $receiverID);

        $this->db->or_where("receiver", $userID);
        $this->db->where("userID", $receiverID);

        $this->db->from("messages");
        $message = $this->db->get();
        $messages = $message->result_array();

        $mapMessage = array();
        foreach ($messages as $m) {
            $user = $this->UserControl->getUserByID($m["userID"]);
            $userInfo = $this->UserControl->getUserInformation($user->userInformationID);

            $mes = array(
                "userID" => $m["userID"],
                "receiver" => $m["receiver"],
                "message" => $m["message"],
                "avatar" => $this->UserControl->getUserAvatar($user->ID),
                "date" => $m["date"]
            );

            array_push($mapMessage, $mes);
        }
        usort($mapMessage, $this->build_sorter('date'));
        return $mapMessage;
    }

    public function build_sorter($key) {
        return function ($a, $b) use ($key) {
            return strnatcmp($a[$key], $b[$key]);
        };
    }

    public function getMessagesUsers($userID)
    {
        $this->db->where("userID", $userID);
        $this->db->distinct();
        $this->db->select("receiver");
        $this->db->from("messages");
        
        $query = $this->db->get();
        $receivers = $query->result_array();

        $receiversInfo = array();
        foreach ($receivers as $r) {
            $user       = $this->UserControl->getUserByID($r["receiver"]);
            $userInfo   = $this->UserControl->getUserInformation($user->userInformationID);

            $receiver = array(
                "userID"   => $user->ID,
                "userName" => $user->userName,
                "name"     => $userInfo->name,
                "avatar"   => $this->UserControl->getUserAvatar($user->ID)
            );
            array_push($receiversInfo, $receiver);
        }


        $this->db->where("receiver", $userID);
        $this->db->distinct();
        $this->db->select("userID");
        $this->db->from("messages");
        
        $query = $this->db->get();
        $receivers = $query->result_array();

        if ($receivers != null) {
            foreach ($receivers as $r) {
                $status = true;
                foreach ($receiversInfo as $ri) {
                    if ($r["userID"] == $ri["userID"]) {
                        $status = false;
                        break;
                    }
                }
                if ($status == true) {
                    $user       = $this->UserControl->getUserByID($r["userID"]);
                    $userInfo   = $this->UserControl->getUserInformation($user->userInformationID);
    
                    $receiver = array(
                        "userID"   => $user->ID,
                        "userName" => $user->userName,
                        "name"     => $userInfo->name,
                        "avatar"   => $this->UserControl->getUserAvatar($user->ID)
                    );
                    array_push($receiversInfo, $receiver);
                }
            }
        }

        return $receiversInfo;
    }


    public function checkBlock($userID, $receiverID)
    {
        $check = $this->db->get_where("Blocks", array("userID" => $receiverID, "blockID" => $userID));
        $check = $check->first_row();

        if ($check != null) {
            return false;
        } else {
            return true;
        }
    }
}
