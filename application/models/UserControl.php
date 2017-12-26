<?php 

class UserControl extends CI_Model
{
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
}
