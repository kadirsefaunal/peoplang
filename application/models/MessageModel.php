<?php

class MessageModel extends CI_Model {
	
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
}
