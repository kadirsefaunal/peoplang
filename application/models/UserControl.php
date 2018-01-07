<?php 

class UserControl extends CI_Model
{

	function __construct() {
        parent::__construct();
        $this->load->model("FriendsModel");
    }

    public function userNameMailControl($userName, $mail)
	{
		$queryUserName 	= $this->db->get_where('User', array('userName' => $userName));
		$queryMail		= $this->db->get_where('User', array('mail' 	=> $mail));

		
		if ($queryUserName->num_rows() > 0 && $queryMail->num_rows() > 0) {
			return "Kullanıcı Adı ve Mail Kullanılıyor!";
		} else if ($queryMail->num_rows() > 0) {
			return 'Mail Kullanılıyor!';
		} else if ($queryUserName->num_rows() > 0) {
			return 'Kullanıcı Adı Kullanılıyor!';			
		} else {
			return "True";
		}
	}

	public function loginControl($userForm)
	{
		$user = $this->db->get_where('User', array('userName' => $userForm["userName"]));
		return $user->first_row();
	}

	public function getUserByID($userID)
	{
		$user = $this->db->get_where('User', array('ID' => $userID));
		return $user->first_row();
	}

	public function getUserInformation($userInformationID)
	{
		$userInformation = $this->db->get_where("UserInformation", array("ID" => $userInformationID));
		return $userInformation->first_row();
	}

	public function getUserAvatar($userID)
	{
		$userAvatar = $this->db->get_where("Images", array("userID" => $userID, "avatar" => true));
		$url = $userAvatar->first_row(); // Boşsa sabit avatar getir
		if ($url == null) {
			return $url = base_url("public/img/user29.png");
		} else {
			return base_url($url->url);
		}
	}

	public function updateUserStatusMail($userID, $mail)
	{
		$user = $this->getUserByID($userID);
		$user->mail 		  = $mail;
		$user->registerStatus = true;
		$this->db->update("User", $user, array("ID" => $user->ID));
	}

	public function getImages($userID)
	{
		$userImages = $this->db->get_where("Images", array("userID" => $userID, "avatar" => false));
		$userImagesList = $userImages->result_array();
		$imageList = array();

		foreach ($userImagesList as $image) {
			$img = array(
				"url" 	  => base_url($image["url"]),
				"imageID" => $image["ID"]
			);

			array_push($imageList, $img);
		}
		
		return $imageList;
	}

	public function getUserByUserName($userName)
	{
		$user = $this->db->get_where("User", array("userName" => $userName));
		return $user->first_row();
	}

	public function setViewer($userID, $viewerID)
	{
		$dt = time();
		$viewDetail = array(
			"userID" => $userID,
			"viewer" => $viewerID,
			"displayDate" => $dt
		);

		$control = $this->db->get_where("ViewedProfile", array("userID" => $userID, "viewer" => $viewerID));
		$status = $control->first_row();

		if ($status != null) {
			$this->db->update("ViewedProfile", $viewDetail, array("ID" => $status->ID));
		} else {
			$this->db->insert("ViewedProfile", $viewDetail);
		}
	}

	public function report($report)
	{
		$checkReport = $this->db->get_where("Reports", array("userID" => $report["userID"], "reportedID" => $report["reportedID"]));
		$checkReport = $checkReport->first_row();

		if ($checkReport == null) {
			return $this->db->insert("Reports", $report);
		} else {
			return false;
		}
		
	}

	public function block($block)
	{
		$checkReport = $this->db->get_where("Blocks", array("userID" => $block["userID"], "blockID" => $block["blockID"]));
		$checkReport = $checkReport->first_row();

		if ($checkReport == null) {
			return $this->db->insert("Blocks", $block);
		} else {
			return false;
		}
	}

	public function getVisitorsByID($userID)
	{
		$view = $this->db->get_where("ViewedProfile", array("userID" => $userID));
		$view = $view->result_array();

		$viewerList = array();
		usort($view, $this->build_sorter('displayDate'));
		$i = 0;
		foreach ($view as $v) {
			$user       = $this->UserControl->getUserByID($v["viewer"]);
			$userInfo   = $this->UserControl->getUserInformation($user->userInformationID);

			$datetime1  = date_create($userInfo->birthDate);
			$datetime2  = date_create(date("Y-m-d"));
			$interval   = date_diff($datetime1, $datetime2);
			$age = $interval->format('%Y');

			if ($userInfo->city != null) {
				$countryCity = $userInfo->city;
			} else {
				$countryCity = $userInfo->country;
			}

			$userInfo = array(
				"userID"   => $user->ID,
				"userName" => $user->userName,
				"gender"   => $userInfo->gender,
				"age"      => $age,
				"flag"     => $this->SettingsModel->getFlagUrl($userInfo->country),
				"location" => $countryCity,
				"avatar"   => $this->UserControl->getUserAvatar($user->ID),
				"date"	   => $v["displayDate"],
			);
			array_push($viewerList, $userInfo);

			$i++;
			if ($i == 4) {
				break;
			}
		}
		return $viewerList;
	}


	public function build_sorter($key) {
        return function ($a, $b) use ($key) {
            return strnatcmp($b[$key], $a[$key]);
        };
	}
	
	public function getOnlineFriends($userID)
	{
		$friends = $this->FriendsModel->getFriendsInformation($userID);

		$onlinefriends = array();
		$i = 0;

		if ($friends != null)
		{
			foreach ($friends as $friend) {
				if ($this->isOnline($friend["userID"]) == "true") {
					array_push($onlinefriends, $friend);
	
					$i++;
				}
	
				if ($i == 3) {
					break;
				}
			}
		}
		return $onlinefriends;
	}

	public function isOnline($userID)
	{
		$u = $this->db->get_where("OnlineUsers", array("userID" => $userID));
		$user = $u->first_row();

		if ($user != null) {
			return "true";
		} else {
			return "false";
		}
	}

	public function saveNotification($notification)
	{
		$checknotif = $this->db->get_where("Notifications", array("userID" => $notification["userID"], "nUserID" => $notification["nUserID"], "notification" => $notification["notification"]));
		$checknotif = $checknotif->first_row();

		if ($checknotif != null) {
			return false;
		} else {
			$this->db->insert("Notifications", $notification);
		}
	
		
	}
}
