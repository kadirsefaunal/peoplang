<?php 

class SearchModel extends CI_Model
{
    function __construct() {
        parent::__construct();

        $this->load->model("UserControl");
        $this->load->model("FriendsModel");
    }

}