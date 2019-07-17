<?php

class LoginModel extends CI_Model {

	public function checkLogin($data){
		$query = $this->db->get_where('admin',$data);
		return $query;
	}
	public function userCheck($param){
		$query = $this->db->get_where('user',$param);
		return $query;
	}
}