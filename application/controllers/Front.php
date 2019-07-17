<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

	public function __construct() {
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->model('MasterModel');
	}
	
	public function index(){
		$this->load->view('consul/navbar');
		$this->load->view('consul/member-new');
	}
	
	public function saveMember(){
		$dataSession = array(
				'name'	=> $this->input->post('name'),
				'age'	=> $this->input->post('age'),
				'phone'	=> $this->input->post("phone"),
				'email'	=> $this->input->post("email"),
				'member_id'	=> $this->getGuid()
			);
			$this->session->set_userdata($dataSession);			
		  	redirect(base_url('front/survey'));
	}

	public function saveSurvey(){
		if($this->input->post("emailBlast") != null || $this->input->post("emailBlast") != ""){
			$from = $this->input->post("emailBlast");
		}elseif($this->input->post("maleUser") != null || $this->input->post("maleUser") != ""){
			$from = $this->input->post("maleUser");
		}elseif($this->input->post("others") != null || $this->input->post("others") != ""){
			$from = $this->input->post("others");
		}else{
			$from = "";
		}

		$dataSession = array(
				'source'	=> $this->input->post('source'),
				'from'	=> $from,
				'survey_id'	=> $this->getGuid()
			);
			$this->session->set_userdata($dataSession);			
		  	redirect(base_url('front/membership'));
	}

	public function saveMembership(){
		if($this->input->post("partner") != null || $this->input->post("partner") != ""){
			$typeData = $this->input->post("partner");
		}elseif($this->input->post("idNumber") != null || $this->input->post("idNumber") != ""){
			$typeData = $this->input->post("idNumber");
		}elseif($this->input->post("others") != null || $this->input->post("others") != ""){
			$typeData = $this->input->post("others");
		}else{
			$typeData = "";
		}
		$dataSession = array(
				'is_member'	=> $this->input->post('isMember'),
				'member_type'	=> $this->input->post('memberType'),
				'type_data'	=> $typeData,
				// 'member_id'	=> $this->session->userdata("member_id"),
				'membership_id'	=> $this->getGuid()
			);
			$this->session->set_userdata($dataSession);			
		  	redirect(base_url('front/interest'));
	}

	public function saveInterest(){
		//Get Queue
		$tgl = date('y-m-d');
		// $check = $this->db->query("select count(ticket) as urut from queue where date = curdate()")->row()->urut;
		// // $table = $this->db->query("select id from counter where counter_type = '".$this->input->post('interest')."' and counter_status = 0 order by counter_number desc")->row(0)->id;
		// $urutan = $check+1;
		//End Get Queue

		$dataSession = array(
				// 'counter_id'	=> $table,
				// 'ticket'		=> $urutan,
				'date'			=> $tgl,
				'queue_id'		=> $this->getGuid(),
				'interest'	=> $this->input->post('interest'),
				'member_id'	=> $this->session->userdata("member_id")
			);
			$this->session->set_userdata($dataSession);			
		  	redirect(base_url('front/coupon'));
	}

	public function getTicket(){
		$tgl = date('y-m-d');
		$check = $this->db->query("select count(ticket) as urut from queue where date = curdate()")->row()->urut;
		// $table = $this->db->query("select id from counter where counter_type = '".$this->input->post('interest')."' and counter_status = 0 order by counter_number desc")->row(0)->id;
		$urutan = $check+1;
		// $this->load->model("masterModel");
		$insMember = array(
				'name'	=> $this->session->userdata('name'),
				'age'	=> $this->session->userdata('age'),
				'phone'	=> $this->session->userdata("phone"),
				'email'	=> $this->session->userdata("email"),
				'type'	=> $this->session->userdata("interest"),
				'id'	=> $this->session->userdata("member_id")
			);

		$insSurvey = array(
			'source'	=> $this->session->userdata('source'),
				'from'	=> $this->session->userdata("from"),
				'member_id'	=> $this->session->userdata("member_id"),
				'id'	=> $this->session->userdata("survey_id")
		);

		$insMembership = array(
			'is_member'	=> $this->session->userdata('is_member'),
				'member_type'	=> $this->session->userdata('member_type'),
				'type_data'	=> $this->session->userdata("type_data"),
				'member_id'	=> $this->session->userdata("member_id"),
				'id'	=> $this->session->userdata("membership_id")
		);

		$insQueue = array(
			// 'counter_id'	=> $this->session->userdata("counter_id"),
				'ticket'		=> $urutan,
				'is_done'		=> 0,
				'is_called'		=> 0,
				'counter_id'	=> 'Empty',
				'date'			=> $this->session->userdata("date"),
				'member_id'		=> $this->session->userdata("member_id"),
				'id'			=> $this->session->userdata("queue_id")
		);

		$member = $this->MasterModel->insert($insMember,"member");
		if($member){
			$survey = $this->MasterModel->insert($insSurvey,'survey');
			if($survey){
				$membership = $this->MasterModel->insert($insMembership,"membership");
				if($membership){
					$queue = $this->MasterModel->insert($insQueue,"queue");
					if($queue){
						$this->PrintCard();
						session_destroy();
						redirect(base_url('front/thanks'));
					}
				}else{
					$delete = $this->db->delete("survey", array("id" => $this->session->userdata("survey_id")));
					session_destroy();
					echo "<script>alert('Failed to get Ticket !');</script>";
					echo "<script>window.location.href='".base_url('front')."'</script>";
				}
			}else{
				$delete = $this->db->delete("member",array("id" => $this->session->userdata("member_id")));
				session_destroy();
				echo "<script>alert('Failed to get Ticket !');</script>";
				echo "<script>window.location.href='".base_url('front')."'</script>";
			}
		}else{
			session_destroy();
			echo "<script>alert('Failed to get Ticket !');</script>";
			echo "<script>window.location.href='".base_url('front')."'</script>";
		}
	}

	public function survey(){
		$this->load->view('consul/navbar');
		$this->load->view('consul/survey');
	}

	public function membership(){
		$this->load->view('consul/navbar');
		$this->load->view('consul/membership');
	}

	public function interest(){
		$this->load->view('consul/navbar');
		$this->load->view('consul/interest');
	}

	public function thanks(){
		session_destroy();
		$this->load->view('consul/navbar');
		$this->load->view('consul/thanks');
	}

	public function coupon(){
		$this->load->view('consul/navbar');
		$this->load->view('consul/coupon');
	}

	public function queue(){
		// $this->load->model('SoundCounterModel');
		// $data['dataQueue'] = $this->SoundCounterModel->getNext()->row();
		

		$this->load->view('consul/navbar-queue');
		$this->load->view('consul/queue');
		// $this->load->view('soundCounter/sound', $data);
	}

	public function ticket(){
		$this->load->view('consul/navbar');
		$this->load->view('consul/ticket');
	}

	public function tabletop(){
		$this->load->view('consul/navbar');
		$this->load->view('consul/tabletop');
	}

	public function loginTable(){
		// $this->load->view('pages/login-table');
		$this->tabletop();
	}

	public function setTable(){
		$type = str_replace("%20"," ",$this->uri->segment(3));
		$id = $this->uri->segment(4);
		$checking = $this->db->query("select * from counter where id= '".$id."'")->row();
		if($checking->counter_status == 0){
				$query = "update queue set counter_id = '".$id."' where is_done = 0 and counter_id = 'Empty' and member_id in (select id from member where type = '".$type."') order by ticket asc limit 1";
			$mark = $this->db->query($query);
			if($mark){
					$occupied = $this->db->query("update counter set counter_status = 1 where id= '".$id."'");
					redirect(base_url('front/tabletop'));
					//echo $query;
				}else{
					// $revert = $this->db->query("update counter set counter_status = 1 where id= '".$this->session->userdata("id")."'");
					echo "<script>alert('Failed to change status');</script>";
					redirect(base_url('front/tabletop'));
				}
			// $data = $this->db->get_where("counter",array("counter_number"=>$this->input->post("table")))->row();
			// $dataSession = array(
			// 		'id'	=> $data->id,
			// 		'attendant'	=> $data->attendant,
			// 		'counter_number'	=> $data->counter_number,
			// 		'counter_status'	=> $data->counter_status,
			// 		'counter_type'	=> $data->counter_type
			// 	);
				// $this->session->set_userdata($dataSession);			
			 //  	redirect(base_url('front/tabletop'));
			}else{
				echo "<script>alert('Table is still occupied, empty first !');</script>";
					redirect(base_url('front/tabletop'));
			}
		
	}

	public function emptyTable(){

		$id = $this->uri->segment(3);
		$done = $this->db->query("update queue set is_done = 1 where counter_id = '".$id."' and is_done = 0 and is_called = 1");
		if($done){
			$update = $this->db->query("update counter set counter_status = 0 where id= '".$id."'");
			if($update){
				// $mark = $this->db->query("update queue set counter_id = '".$this->session->userdata("id")."' where is_done = 0 and counter_id = 'Empty' and member_id in (select id from member where type = '".$this->session->userdata("counter_type")."') order by ticket asc limit 1");
				// if($mark){
					redirect(base_url('front/tabletop'));
				// }else{
				// 	$revert = $this->db->query("update counter set counter_status = 1 where id= '".$this->session->userdata("id")."'");
				// 	echo "<script>alert('Failed to change status');</script>";
				// 	redirect(base_url('front/tabletop'));
				// }
				
			}else{
				$undone = $this->db->query("update queue set is_done = 0 where counter_id = '".$id."' and is_done = 1 and is_called = 1 order by ticket desc limit 1");
				echo "<script>alert('Failed to change status');</script>";
				redirect(base_url('front/tabletop'));
			}
		}else{
			echo "<script>alert('Failed to change status');</script>";
				redirect(base_url('front/tabletop'));
		}
		// $type = $this->uri->segment(3);
		

		// // $update = $this->db->query("update counter set counter_status = 0 where id= '".$this->session->userdata("id")."'");
		
		// // if($update){

		// 	// $done = $this->db->query("update queue set is_done = 1 where counter_id = '".$this->session->userdata("id")."'");
		// 	// if($done){
		// 		$check = $this->db->query("select count(id) as counter from queue where is_done = 0 and counter_id = 'Empty' and member_id in (select id from member where type = '".$this->session->userdata("counter_type")."') order by ticket asc")->row()->counter;
		// 		if($check != null && $check != 0){
		// 			$mark = $this->db->query("update queue set counter_id = '".$this->session->userdata("id")."' where is_done = 0 and counter_id = 'Empty' and member_id in (select id from member where type = '".$this->session->userdata("counter_type")."') order by ticket asc limit 1");
		// 			if($mark){
		// 				$update = $this->db->query("update counter set counter_status = 0 where id= '".$this->session->userdata("id")."'");
		// 				if($update){
		// 					redirect(base_url('front/tabletop'));
		// 				}else{
		// 					$mark = $this->db->query("update queue set counter_id = 'Empty' where is_done = 0 and counter_id = '".$this->session->userdata("id")."' and member_id in (select id from member where type = '".$this->session->userdata("counter_type")."') order by ticket asc limit 1");
		// 					redirect(base_url('front/tabletop'));
		// 				}
						
		// 			}else{
		// 				// $update = $this->db->query("update counter set counter_status = 0 where id= '".$this->session->userdata("id")."'");
		// 				// $revert = $this->db->query("update counter set counter_status = 1 where id= '".$this->session->userdata("id")."'");
		// 				echo "<script>alert('Failed to change status');</script>";
		// 				redirect(base_url('front/tabletop'));
		// 			}
		// 		}else{
		// 			// $revert = $this->db->query("update counter set counter_status = 1 where id= '".$this->session->userdata("id")."'");
		// 				echo "<script>alert('No Waiting Customer');</script>";
		// 				redirect(base_url('front/tabletop'));
		// 		}
		// 	// }else{
			// 	echo "<script>alert('Failed to change status');</script>";
			// 		redirect(base_url('front/tabletop'));
			// }

			
			
			
		// }else{
		// 	echo "<script>alert('Failed to change status');</script>";
		// 	redirect(base_url('front/tabletop'));
		// }
		
	}

	public function occupyTable(){
		$update = $ths->db->query("update counter set counter_status = 1 where id= '".$this->session->userdata("id")."'");
		//$update = $this->MasterModel->edit($updateData,'counter',$id);
		if($update){
			redirect(base_url('front/tabletop'));
		}else{
			echo "<script>alert('Failed to change status');</script>";
			redirect(base_url('front/tabletop'));
		}
		
	}

	public function callQueue(){
		// $type = replace("%20",$this->uri->segment(3));
		$type = urldecode($this->uri->segment(3));
		echo $type;
		$card = $this->db->query("select *, 
(select is_done from queue where is_done = 0 and counter_id = counter.id order by ticket limit 1) as is_done, 
(select is_called from queue where is_done = 0 and counter_id = counter.id order by ticket limit 1) as is_called, 
(select member_id from queue where is_done = 0 and counter_id = counter.id order by ticket limit 1) as member_id, 
(select ticket from queue where is_done = 0 and counter_id = counter.id order by ticket limit 1) as ticket 
from counter where counter_type = '".$type."' order by counter_number asc")->result();

		$nextCard = $this->db->query("select * from queue where is_done = 0 and counter_id = 'Empty' and member_id in (select id from member where type = '".$type."') order by ticket desc")->row();
		
		$feedCard['card'] = $card;
		$feedCard['nextCard'] = $nextCard;

		print_r($feedCard);
		
	}

	public function LoadCardNewMember() {
		$this->load->view('consul/part/nextNewUser');
	}
	public function LoadCardLoyalMember() {
		$this->load->view('consul/part/nextLoyalUser');
	}
	public function LoadQueueNewUser() {
		$this->load->view('consul/part/queueNewUser');
	}
	public function LoadQueueLoyalUser() {
		$this->load->view('consul/part/queueLoyalUser');
	}
	public function LoadSoundContent() {
		// $this->load->model('SoundCounterModel');
		// $data['dataQueue'] = $this->SoundCounterModel->getNext()->row_array();
		$this->load->view('soundCounter/sound');
	}
	public function UpdateCounterCall($id) {
		$this->db->query("update queue set is_called = 1 where id= '".$id."'");
	}


	//yg kepake sk2
	
}