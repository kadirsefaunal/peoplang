<?php

class LanguageModel extends CI_Model
{
    function __construct() {
        parent::__construct();

        $this->load->model("UserControl");
    }

    public function saveLanguage($language)
    {
        return $this->db->insert("LanguageLevel", $language);
    }
}