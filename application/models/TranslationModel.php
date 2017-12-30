<?php 

class TranslationModel extends CI_Model
{
    function __construct() {
        parent::__construct();

        $this->load->model("UserControl");
        $this->load->model("LanguageModel");
    }

    public function insertRequest($request)
    {
        $this->db->insert('TranslationRequests', $request);
    }

    public function getTranslationRequests($userID)
    {
        $request = $this->db->get_where("TranslationRequests", array("userID" => $userID));
        return $request->result_array();
    }

    public function deleteRequestByID($requestID)
    {
        return $this->db->delete("TranslationRequests", array("ID" => $requestID));
    }

    public function getAllTranslationRequests($userID)
    {

        $langs      = array();
        $langs      = $this->LanguageModel->getUserLanguages($userID);

        $newLang = array();
        foreach ($langs as $l){
            foreach($l as $k){
                array_push($newLang, $k);
            }
        }

        $this->db->where_in('textLanguage', $newLang);
        $this->db->where_in('languageToTranslation', $newLang);
        $results = $this->db->get("TranslationRequests");
        $result = $results->result_array();

        $translationRequests = array();
        foreach ($result as $r) {
            $userAvatar = $this->UserControl->getUserAvatar($r["userID"]);
            $newTR = array(
                "ID"                    => $r["ID"],
                "userID"                => $r["userID"],
                "textLanguage"          => $r["textLanguage"],
                "languageToTranslation" => $r["languageToTranslation"],
                "userAvatar"            => $userAvatar,
                "title"                 => $r["title"],
                "date"                  => $r["date"]
            );
            array_push($translationRequests, $newTR);
        }
        
        return $translationRequests;

    }
}