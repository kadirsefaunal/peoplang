<?php

class DBmodel extends CI_Model {
	
	

	public function save($table, $data)
	{
		return $this->db->insert($table, $data);
	}
}
