<?php

class LanguageModel extends CI_Model
{
    function __construct() {
        parent::__construct();

        $this->load->model("UserControl");
    }

    public function saveLanguage($language)
    {
        $lang = $this->db->get_where("LanguageLevel", array("userID" => $language["userID"], "language" => $language["language"], "learningOrSpeaking" => $language["learningOrSpeaking"]));
        
        if ($lang->first_row() == null) {
            $this->db->insert("LanguageLevel", $language);
            return $this->db->insert_id();
        } else {
            return 0;
        }
    }

    public function deleteLanguage($langID)
    {
        return $this->db->delete("LanguageLevel", array("ID" => $langID));
    }

    public function getLanguages($userID, $status)
    {
        $result = $this->db->get_where("LanguageLevel", array("userID" => $userID, "learningOrSpeaking" => $status));
        return $result->result_array();
    }
}