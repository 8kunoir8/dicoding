<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->library('upload');
		$this->load->model('masterModel');
		if($this->session->userdata('idUser')==NULL){
			redirect(base_url(''));
		}
	}

	public function index(){
		$param = array(
			'idUser'	=> $this->session->userdata('idUser')
		);
		//$data['content'] = $this->masterModel->one($param,'perbaikan');
		$this->load->view('consul/navbar');
		$this->load->view('consul/info-cust');
	}

	public function emailReminder(){
		$config = Array(
		    'protocol' => 'smtp',
		    'smtp_host' => 'ssl://smtp.googlemail.com',
		    'smtp_port' => 465,
		    'smtp_user' => 'steruzzone@gmail.com',
		    'smtp_pass' => 'V4l3nt1n3',
		    'mailtype'  => 'html', 
		    'charset'   => 'iso-8859-1'
		);
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");

		$this->email->from('steruzzone@gmail.com', 'Quality Motor');
	    $this->email->to('steruzzvalentine@gmail.com'); 

	    $this->email->subject('Email Test');
	    $this->email->message('Testing the email class.');  
		        
		$result = $this->email->send();
	}

	public function inputRusak(){
		$this->load->view('consul/navbar');
		$this->load->view('consul/input-rusak');
	}

	public function inputMotor(){
		$this->load->view('consul/navbar');
		$this->load->view('consul/input-motor');
	}

	public function inputAntrian(){
		$this->load->view('consul/navbar');
		$this->load->view('consul/input-antrian');
	}

	public function subConsul(){
		$idUser = $this->session->userdata('idUser');
		$insertData = array(
				'idConsul'		=> 0,
				'idUser' 		=> $idUser,
				'fileKerusakan' => $this->upKerusakan(),
				'idJenis'		=> $this->input->post('jenis'),
				'idRusak'		=> $this->input->post('rusak'),
				'ket'			=> $this->input->post('ket')
			);
			$insert = $this->masterModel->insert($insertData,'consul');
			if($insert){
				redirect(base_url('userboard'));
			}else{
				echo "<script>alert('Insert Failed !');</script>";
				redirect(base_url('userboard'));
			}
	}
	public function subMotor(){
		$idUser = $this->session->userdata('idUser');
		$insertData = array(
				'id_motor'		=> 0,
				'idUser' 		=> $idUser,
				'idBrand' 		=> $this->input->post('brand'),
				'nm_motor'		=> $this->input->post('motor'),
				'jenis'			=> $this->input->post('jenis'),
				'no_pol'		=> $this->input->post('nopol'),
				'no_stnk'		=> $this->input->post('nostnk'),
				'warna'			=> $this->input->post('warna')
			);
			$insert = $this->masterModel->insert($insertData,'data_motor');
			if($insert){
				redirect(base_url('userboard'));
			}else{
				echo "<script>alert('Insert Failed !');</script>";
				redirect(base_url('userboard'));
			}
	}
	public function subAntrian(){
		$idUser = $this->session->userdata('idUser');
		$tgl = DATE("Y-m-d",strtotime($this->input->post('est_date')));
		$check = $this->db->query("select count(id_antrian) as urut from data_antrian where ant_date = '".$tgl."'")->row()->urut;
		$urutan = $check+1;
		$tgl_an = $tgl;
		$sesi = 'Sesi Pagi';
		if(($check+1)>40){
			date_add($tgl,"1 days");
			$tgl_an = $tgl;
			$urutan = 1;
			$sesi = 'Sesi Pagi';
		}elseif(($check+1)>20 &&($check+1)<=40){
			$sesi = 'Sesi Siang';
		}
		if($this->input->post('sparepart_list')==null){
			$partList = " ";
		}else{
			$partList = $this->input->post('sparepart_list');
		}
		$insertData = array(
				'id_antrian'	=> 0,
				'status'		=> 0,
				'idUser' 		=> $idUser,
				'id_motor' 		=> $this->input->post('motor'),
				'km_motor'		=> $this->input->post('km_motor'), 
				'est_date'		=> $tgl,
				'ant_date'		=> $tgl_an,
				'est_sesi'		=> $this->input->post('est_sesi'),
				'ant_sesi'		=> $sesi,
				'ant_no'		=> $urutan,
				'idCategory'	=> $this->input->post('jasa'),
				'sparepart_flag'=> $this->input->post('sparepart_flag'),
				'sparepart' 	=> $partList,
				'oli_flag'		=> $this->input->post('oli_flag'),
				'oli'			=> $this->input->post('oli'),
				'id_mekanik'	=> $this->input->post('mekanik'),
				'sparepart_ready'=> 0,
				'c_date'		=> date("Y-m-d")
			);
		$check_mekanik = $this->db->query("Select count(*) as jumlah From data_antrian where id_mekanik = ".$this->input->post('mekanik')." and est_date = '".$tgl."' and est_sesi = '".$this->input->post('est_sesi')."'")->row()->jumlah;
		if($check_mekanik <= 5){
			$insert = $this->masterModel->insert($insertData,'data_antrian');
			//if($insert){
				// echo "<script>window.location.href='".base_url('userboard')."'</script>";
				redirect(base_url('userboard'));
			//}
		}else{
			echo "<script>alert('Quota mekanik sudah penuh, silahkan pilih mekanik/waktu lain !');</script>";
			echo "<script>window.location.href='".base_url('userboard')."'</script>";
			// redirect(base_url('userboard'));
		}
	}

	public function estimasi(){
		// $param = array(
		// 	'idUser'	=> $this->session->userdata('idUser'), 
		// 	'status'	=> '!= 69'
		// );
		$data['title']	= 'Estimasi Antrian';
		// $data['content'] = $this->masterModel->one($param,'data_antrian');
		$data['content'] = $this->db->query("select * from data_antrian where idUser = ".$this->session->userdata('idUser')." and status in (0,1,2)");
		$this->load->view('consul/navbar');
		$this->load->view('consul/estimasi',$data);
	}

	public function pesanPart(){
		//$param = array(
		//	'idUser'	=> $this->session->userdata('idUser')
		//);
		$data = array(
			"user" => "user"
		);
		//$data['title']	= 'Pesan Spare Part';
		//$data['content'] = $this->masterModel->one($param,'consul');
		$this->load->view('consul/navbar');
		$this->load->view('consul/pesan-part',$data);
	}

	public function subPesan(){
		$idUser = $this->session->userdata('idUser');
		$harga = $this->db->get_where("type_part",array("id_type"=>$this->input->post('type_part')))->row()->harga;
		$count = $this->db->get("order_sparepart")->num_rows();
		$insertData = array(
				'id_orderpart'	=> 0,
				'idUser' 		=> $idUser,
				'id_catpart' 	=> $this->input->post('jenis_part'),
				'id_type'		=> $this->input->post('type_part'),
				'qty'			=> $this->input->post('jumlah_pesanan'),
				'harga_satuan'	=> $harga,
				'harga_total'	=> $harga * $this->input->post('jumlah_pesanan'),
				'transaksi'		=> $this->input->post('transaksi'),
				'order_sta'		=> "Di Pesan",
				'c_date'		=> DATE("Y-m-d")
			);
			$insert = $this->masterModel->insert($insertData,'order_sparepart');
			if($insert){
				redirect(base_url('userboard'));
				//redirect(base_url('user/confirmPesan/').$count+1);
				//echo "<script>window.location='".base_url('')."user/confirmPesan/".$count+1."';</script>";
			}else{
				echo "<script>alert('Input Order Failed !');</script>";
				redirect(base_url('userboard'));
			}
	}

	public function confirmPesan(){
		$id_orderpart = $this->uri->segment(3);
		$data = array(
			"user" => "user"
		);
		$data['order'] = $this->db->get_where("order_sparepart",array("id_orderpart"=>$id_orderpart))->row();
		$this->load->view('consul/navbar');
		$this->load->view('consul/conf-pesan',$data);
	}

	public function confPesan(){

	}

	public function ajukanPerbaikan(){
		$this->load->view('consul/navbar');
		$this->load->view('consul/ajukan-perbaikan');
	}

	public function confirm(){
		$updateData = array(
				'status' => 1
		);
		$id = array(
			'id_antrian' => $this->uri->segment(3)
		);
		$update = $this->masterModel->edit($updateData,'data_antrian',$id);
		if($update){
				redirect(base_url('Home/masterEstimasi'));
			}else{
				echo "<script>alert('Konfirmasi Gagal !');</script>";
				redirect(base_url('Home/masterEstimasi'));
			}
	}

	public function batalAntri(){
		$update = $this->db->query("Update data_antrian Set status = 69 Where id_antrian = ".$this->uri->segment(2)." ");
		if($update){
				redirect(base_url('user/estimasi'));
			}else{
				echo "<script>alert('Gagal Membatalkan !');</script>";
				redirect(base_url('user/estimasi'));
			}
	}

	public function upKerusakan(){
			$config['upload_path']              = './uploads/kerusakan/';
		    $config['allowed_types']       		= 'gif|jpg|png|jpeg|GIF|JPG|JPEG|PNG|pdf|PDF';
			$config['max_size']         		= 2048;
			$config['encrypt_name'] 			= TRUE;

	        $this->upload->initialize($config);
	        if($this->upload->do_upload('fileKerusakan')){
	        	return $this->upload->data('file_name');
	        }else{
	        	echo $this->upload->display_errors();
	        }

	}

	public function resize($path,$file){
		$config['image_library']='GD2';
		$config['source_image'] = $path;
		$config['maintain_ratio'] = TRUE;
		$config['create_thumb'] = FALSE;
		$config['width'] = 975;
		$config['height'] = 550;
		$config['quality'] = 20;
		$config["image_sizes"]["square"] = array(1158, 550);
		$this->load->library('image_lib', $config);
		$this->image_lib->fit();
	}

	
}