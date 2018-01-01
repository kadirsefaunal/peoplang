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

    public function insertAnswer($answer)
    {
        $this->db->insert('Answers', $answer);
    }

    public function getAnswers($questionID)
    {
        $result = $this->db->get_where("Answers", array("questionID" => $questionID));
        $results = $result->result_array();
        
        $answers = array();
        foreach ($results as $r) {
            $userAvatar = $this->UserControl->getUserAvatar($r["userID"]);
            $user       = $this->UserControl->getUserByID($r["userID"]);
            $userInformation = $this->UserControl->getUserInformation($user->userInformationID);
            $answer = array(
                "ID"                    => $r["ID"],
                "userID"                => $r["userID"],
                "questionID"            => $r["questionID"],
                "text"                  => $r["text"],
                "name"                  => $userInformation->name,
                "userName"              => $user->userName,
                "userAvatar"            => $userAvatar,
                "date"                  => $r["date"]
            );
            array_push($answers, $answer);
        }
        usort($answers, $this->build_sorter('date'));
        return $answers;
    }

    public function getTR($trID)
    {
        $tr = $this->db->get_where("TranslationRequests", array("ID" => $trID));
        return $tr->first_row();
    }

    public function getTranslationRequests($userID)
    {
        $request = $this->db->get_where("TranslationRequests", array("userID" => $userID));
        $requests = $request->result_array();
        usort($requests, $this->build_sorter('date'));
        return $requests;
    }

    public function deleteRequestByID($requestID)
    {
        return $this->db->delete("TranslationRequests", array("ID" => $requestID));
    }

    public function deleteAnswers($questionID)
    {
        return $this->db->delete("Answers", array("questionID" => $questionID));
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
            $user       = $this->UserControl->getUserByID($r["userID"]);
            $newTR = array(
                "ID"                    => $r["ID"],
                "userID"                => $r["userID"],
                "userName"              => $user->userName,
                "textLanguage"          => $r["textLanguage"],
                "languageToTranslation" => $r["languageToTranslation"],
                "userAvatar"            => $userAvatar,
                "title"                 => $r["title"],
                "date"                  => $r["date"]
            );
            array_push($translationRequests, $newTR);
        }
        usort($translationRequests, $this->build_sorter('date'));
        return $translationRequests;

    }

    public function build_sorter($key) {
        return function ($a, $b) use ($key) {
            return strnatcmp($b[$key], $a[$key]);
        };
    }
}