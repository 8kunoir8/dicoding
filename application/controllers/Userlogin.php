<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Userlogin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('loginModel');
	}

	public function index() {
		$this->load->view('pages/userlogin');
	}

	public function login_check() {
		$user = $this->input->post('username');
		$pass = md5($this->input->post('password'));
		$data = array(
			'username' => $user,
			'password' => $pass
		);
		$check = $this->loginModel->userCheck($data);
		if($check->num_rows() != 0){
			$dataSession = array(
				'fullname'	=> $check->row()->fullname,
				'email'		=> $check->row()->email,
				'username'	=> $check->row()->username,
				'status'	=> $check->row()->status,
				'idUser'	=> $check->row()->idUser
			);
			$this->session->set_userdata($dataSession);			
		  	redirect(base_url('userboard'));
		}else{
			echo "<script>alert('Username atau Password salah')</script>";
			echo "<script>history.go(-1);</script>";
		}
	}

	public function logout() {
		session_unset();
		session_destroy();
		redirect(base_url());
	}
}