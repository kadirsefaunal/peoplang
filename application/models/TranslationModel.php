<?php 

class TranslationModel extends CI_Model
{
    function __construct() {
        parent::__construct();

        $this->load->model("UserControl");
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

    public function getAllTranslationRequest()
    {
        
        
        
        
        
        
        //$allRequest = $this->db->get_where("TranslationRequests", array(""))
        // $translationRequestList = array();


        // $userLanguages           = $this->LanguageModel->getUserLanguages($userID);
        

        // $translationRequests    = $this->getTranslationRequests($userID);
        // $user                   = $this->UserControl->getUserByID($userID);
        // $userAvatar             = $this->UserControl->getUserAvatar($userID);
        
        // foreach ($translationRequests as $request){
        //     $newRequest = array(
        //         "userID"                => $user->ID,
        //         "userAvatar"            => $userAvatar,
        //         "title"                 => $request["title"],
        //         "date"                  => $request["date"],
        //         "textLanguage"          => $request["textLanguage"],
        //         "languageToTraslation"  => $request["languageToTranslation"]   
        //     );
        //     array_push($translationRequestList, $newRequest);
        // }






        

       

    }
}