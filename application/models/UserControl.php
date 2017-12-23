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
}
