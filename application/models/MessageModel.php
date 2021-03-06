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
                "date" => $m["date"],
                "readStatus" => $m["readStatus"]
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
            $this->db->where("userID", $userID);
            $this->db->where("receiver", $r["receiver"]);
            $this->db->from("messages");
            $this->db->order_by("date", "DESC");

            $query = $this->db->get();
            $message = $query->first_row();

            $user       = $this->UserControl->getUserByID($r["receiver"]);
            $userInfo   = $this->UserControl->getUserInformation($user->userInformationID);

            $receiver = array(
                "userID"   => $user->ID,
                "userName" => $user->userName,
                "name"     => $userInfo->name,
                "avatar"   => $this->UserControl->getUserAvatar($user->ID),
                "message"  => $message->message,
                "readStatus" => $message->readStatus,
                "date"     => $message->date
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
                $i = 0;
                foreach ($receiversInfo as $ri) {
                    
                    if ($r["userID"] == $ri["userID"]) {
                        $status = false;
                        $control = $ri;
                        break;
                    }
                    $i++;
                }
                if ($status == true) {
                    $this->db->where("userID", $r["userID"]);
                    $this->db->where("receiver", $userID);
                    $this->db->from("messages");
                    $this->db->order_by("date", "DESC");

                    $query = $this->db->get();
                    $message = $query->first_row();

                    $user       = $this->UserControl->getUserByID($r["userID"]);
                    $userInfo   = $this->UserControl->getUserInformation($user->userInformationID);
    
                    $receiver = array(
                        "userID"   => $user->ID,
                        "userName" => $user->userName,
                        "name"     => $userInfo->name,
                        "avatar"   => $this->UserControl->getUserAvatar($user->ID),
                        "message"  => $message->message,
                        "readStatus" => $message->readStatus,
                        "date"     => $message->date
                    );
                    array_push($receiversInfo, $receiver);
                } else {

                    $this->db->where("userID", $r["userID"]);
                    $this->db->where("receiver", $userID);
                    $this->db->from("messages");
                    $this->db->order_by("date", "DESC");

                    $query = $this->db->get();
                    $message = $query->first_row();
                    
                    if ($control["date"] < $message->date) {
                        unset($receiversInfo[$i]);

                        $user       = $this->UserControl->getUserByID($r["userID"]);
                        $userInfo   = $this->UserControl->getUserInformation($user->userInformationID);
        
                        $receiver = array(
                            "userID"   => $user->ID,
                            "userName" => $user->userName,
                            "name"     => $userInfo->name,
                            "avatar"   => $this->UserControl->getUserAvatar($user->ID),
                            "message"  => $message->message,
                            "readStatus" => $message->readStatus,
                            "date"     => $message->date
                        );
                        array_push($receiversInfo, $receiver);
                    }
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
