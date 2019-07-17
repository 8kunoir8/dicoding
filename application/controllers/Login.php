<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('loginModel');
	}

	public function index() {
		$this->load->view('pages/login');
	}

	public function login_check() {
		$user = $this->input->post('username');
		$pass = md5($this->input->post('password'));
		$param = array(
			'username' => $user,
			'password' => $pass
		);
		$check = $this->loginModel->checkLogin($param);
		if($check->num_rows() >= 1){
			$dataSession = array(
				'fullname'	=> $check->first_row()->fullname,
				'status'	=> $check->first_row()->status,
				'id'	=> $check->first_row()->id
			);
			$this->session->set_userdata($dataSession);			
		  	redirect(base_url('dashboard'));
		}else{
			echo "<script>alert('Wrong Username or Password !')</script>";
			echo "<script>history.go(-1);</script>";
		}

		//$status =  $this->session->userdata('status');
		//echo json_encode($status);
	}

	public function logout() {
		session_unset();
		session_destroy();
		redirect(base_url());
	}
}