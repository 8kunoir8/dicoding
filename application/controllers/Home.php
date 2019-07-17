<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('Layout');
		$this->load->library('upload');
		$this->load->model('MasterModel');
		if($this->session->userdata('id') =='' || $this->session->userdata('id') == NULL){
			redirect(base_url('login'));
		}
		//$check_user = $this->db->query("Select count(*) as jumlah From admin where idAdmin = ".$this->session->userdata('idAdmin'))->row()->jumlah;
		// if($this->session->userdata("idAdmin") == NULL || $this->session->userdata("idAdmin") == '' || $this->session->userdata("idAdmin") == 0){
		// 	redirect(base_url('login'));	
		// }
	}

	public function getGuid() {
	      if (function_exists('com_create_guid')){
	          return com_create_guid();
	      }else{
	          mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
	          $charid = strtoupper(md5(uniqid(rand(), true)));
	          $hyphen = chr(45);// "-"
	          $uuid = //chr(123)// "{"
	              substr($charid, 0, 8).$hyphen
	              .substr($charid, 8, 4).$hyphen
	              .substr($charid,12, 4).$hyphen
	              .substr($charid,16, 4).$hyphen
	              .substr($charid,20,12);
	              //.chr(125);// "}"
	          return $uuid;
	      }
	  }

	public function index() {
		$this->layout->defaultPage('pages/dashboard');
	}

	public function reportQueue(){
		$content['title'] = 'Report Queue';
		$data['content'] = $this->MasterModel->listing('queue');
		$this->layout->reportPage('pages/report-queue',$data,$content);
	}

	//ADMIN

	public function authAdmin(){
		$content['title'] = 'Admin Autorization';
		$data['content'] = $this->MasterModel->listing('admin');
		$this->layout->defaultPage('pages/report-admin',$data,$content);
	}

	public function newAdmin(){
		$insertData = array(
				'id' => $this->getGuid(),
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'fullname' => $this->input->post('fullname'),
				'status'	=> $this->input->post('status')
			);
			$insert = $this->MasterModel->insert($insertData,'admin');
			if($insert){
				redirect(base_url('admin'));
			}else{
				echo "<script>alert('Insert Failed !');</script>";
				redirect(base_url('admin'));
			}
	}

	public function editAdmin(){
		$updateData = array(
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'fullname' => $this->input->post('fullname'),
				'status'	=> $this->input->post('status')
		);
		$id = array(
			'id' => $this->uri->segment(2)
		);
		$update = $this->MasterModel->edit($updateData,'admin',$id);
		if($update){
				redirect(base_url('admin'));
			}else{
				echo "<script>alert('Update Failed !');</script>";
				redirect(base_url('admin'));
			}
	}

	public function deleteAdmin(){
		$id = array(
			'id' => $this->uri->segment(2)
		);
		$delete = $this->db->delete('admin',$id);
		if($delete){
				redirect(base_url('admin'));
			}else{
				echo "<script>alert('Delete Failed !');</script>";
				redirect(base_url('admin'));
			}
	}

//Counter

public function masterTable(){
		$content['title'] = 'Table List';
		$data['content'] = $this->MasterModel->listing('counter');
		$this->layout->defaultPage('pages/master-table',$data,$content);
	}
	
	public function newTable(){
		
		$insertData = array(
				'id' => $this->getGuid(),
				'attendant'	=> $this->input->post('attendant'),
				'counter_number' => $this->input->post('counter_number'),
				'counter_status' => $this->input->post('counter_status'),
				'counter_type'	=> $this->input->post('counter_type')
			);
			$insert = $this->MasterModel->insert($insertData,'counter');
			if($insert){
				redirect(base_url('counter'));
			}else{
				echo "<script>alert('Insert Failed !');</script>";
				redirect(base_url('counter'));
			}
	}

	public function editTable(){

		$updateData = array(
			'attendant'	=> $this->input->post('attendant'),
				'counter_number' => $this->input->post('counter_number'),
				'counter_status' => $this->input->post('counter_status'),
				'counter_type'	=> $this->input->post('counter_type')
		);
		$id = array(
			'id' => $this->uri->segment(3)
		);
		$update = $this->MasterModel->edit($updateData,'counter',$id);
		if($update){
				redirect(base_url('counter'));
			}else{
				echo "<script>alert('Update Failed !');</script>";
				redirect(base_url('counter'));
			}
	}

	public function deleteTable(){
		$id = array(
			'id' => $this->uri->segment(2)
		);
		$delete = $this->db->delete('counter',$id);
		if($delete){
				redirect(base_url('counter'));
			}else{
				echo "<script>alert('Delete Failed !');</script>";
				redirect(base_url('counter'));
			}
	}

// Male User


	public function masterMale(){
		$content['title'] = 'Male Usher List';
		$data['content'] = $this->MasterModel->listing('male_user');
		$this->layout->defaultPage('pages/master-male',$data,$content);
	}

	public function newMale(){
		$insertData = array(
				'id' => $this->getGuid(),
				'name' => $this->input->post('name'),
				'count' => $this->input->post('count')
			);
			$insert = $this->MasterModel->insert($insertData,'male_user');
			if($insert){
				redirect(base_url('male'));
			}else{
				echo "<script>alert('Insert Failed !');</script>";
				redirect(base_url('male'));
			}
	}

	public function editMale(){
		$updateData = array(
			'name' => $this->input->post('name'),
			'count' => $this->input->post('count')
		);
		$id = array(
			'id' => $this->uri->segment(2)
		);
		$update = $this->MasterModel->edit($updateData,'male_user',$id);
		if($update){
				redirect(base_url('male'));
			}else{
				echo "<script>alert('Update Failed !');</script>";
				redirect(base_url('male'));
			}
	}

	public function deleteMale(){
		$id = array(
			'id' => $this->uri->segment(2)
		);
		$delete = $this->db->delete('male_user',$id);
		if($delete){
				redirect(base_url('male'));
			}else{
				echo "<script>alert('Delete Failed !');</script>";
				redirect(base_url('male'));
			}
	}
	//PARTNER
	public function masterPartner(){
		$content['title'] = 'Data Partner';
		$data['content'] = $this->MasterModel->listing('partner');
		$this->layout->defaultPage('pages/master-partner',$data,$content);
	}

	public function newPartner(){
		$insertData = array(
				'id' => $this->getGuid(),
				'name' => $this->input->post('name'),
				'status' => $this->input->post('status')
			);
			$insert = $this->MasterModel->insert($insertData,'partner');
			if($insert){
				redirect(base_url('partner'));
			}else{
				echo "<script>alert('Insert Failed !');</script>";
				redirect(base_url('partner'));
			}
	}

	public function editPartner(){
		$updateData = array(
				'name' => $this->input->post('name'),
				'status' => $this->input->post('status')
		);
		$id = array(
			'id' => $this->uri->segment(2)
		);
		$update = $this->MasterModel->edit($updateData,'partner',$id);
		if($update){
				redirect(base_url('partner'));
			}else{
				echo "<script>alert('Update Failed !');</script>";
				redirect(base_url('partner'));
			}
	}

	public function deletePartner(){
		$id = array(
			'id' => $this->uri->segment(2)
		);
		$delete = $this->db->delete('partner',$id);
		if($delete){
				redirect(base_url('partner'));
			}else{
				echo "<script>alert('Delete Failed !');</script>";
				redirect(base_url('partner'));
			}
	}

















//USER

	public function authUser(){
		$content['title'] = 'Otorisasi Pelanggan';
		$data['content'] = $this->MasterModel->listing('user');
		$this->layout->defaultPage('pages/auth-user',$data,$content);
	}

	public function newUser(){
		$insertData = array(
				'idUser' => 0,
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'fullname' => $this->input->post('fullname'),
				'status'	=> $this->input->post('status')
			);
			$insert = $this->MasterModel->insert($insertData,'user');
			if($insert){
				redirect(base_url('user'));
			}else{
				echo "<script>alert('Insert Failed !');</script>";
				redirect(base_url('user'));
			}
	}

	public function editUser(){
		$updateData = array(
				'username' => $this->input->post('name'),
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'fullname' => $this->input->post('fullname'),
				'status'	=> $this->input->post('status')
		);
		$id = array(
			'idUser' => $this->uri->segment(2)
		);
		$update = $this->MasterModel->edit($updateData,'user',$id);
		if($update){
				redirect(base_url('user'));
			}else{
				echo "<script>alert('Update Failed !');</script>";
				redirect(base_url('user'));
			}
	}

	public function deleteUser(){
		$id = array(
			'idUser' => $this->uri->segment(2)
		);
		$delete = $this->db->delete('user',$id);
		if($delete){
				redirect(base_url('user'));
			}else{
				echo "<script>alert('Delete Failed !');</script>";
				redirect(base_url('user'));
			}
	}


	//BRAND


	//Jasa

	public function masterCategory(){
		$content['title'] = 'Master Jasa';
		$data['content'] = $this->MasterModel->listing('category');
		$this->layout->defaultPage('pages/master-category',$data,$content);
	}
	
	public function newCategory(){
		$insertData = array(
				'idCategory' => 0,
				'namaCategory' => $this->input->post('name'),
				'jenis_motor' => $this->input->post('jenis_motor'),
				'price' => $this->input->post('price'),
				'keterangan' => $this->input->post('keterangan')
			);
			$insert = $this->MasterModel->insert($insertData,'category');
			if($insert){
				redirect(base_url('category'));
			}else{
				echo "<script>alert('Gagal Menambah Jasa !');</script>";
				redirect(base_url('category'));
			}
	}

	public function editCategory(){
		$updateData = array(
			'namaCategory' => $this->input->post('name'),
			'jenis_motor' => $this->input->post('jenis_motor'),
			'price' => $this->input->post('price'),
			'keterangan' => $this->input->post('keterangan')
		);
		$id = array(
			'idCategory' => $this->uri->segment(2)
		);
		$update = $this->MasterModel->edit($updateData,'category',$id);
		if($update){
				redirect(base_url('category'));
			}else{
				echo "<script>alert('Gagal Ubah Jasa !');</script>";
				redirect(base_url('category'));
			}
	}

	public function deleteCategory(){
		$id = array(
			'idCategory' => $this->uri->segment(2)
		);
		$delete = $this->db->delete('category',$id);
		if($delete){
				redirect(base_url('category'));
			}else{
				echo "<script>alert('Delete Failed !');</script>";
				redirect(base_url('category'));
			}
	}

	

	//Data Motor
	public function masterMotor(){
		$content['title'] = 'Data Motor Pelanggan';
		$data['content'] = $this->MasterModel->listing('data_motor');
		$this->layout->defaultPage('pages/master-motor',$data,$content);
	}
	
	public function newMotor(){
		$insertData = array(
				'idRusak' => 0,
				'rangeBiaya'	=> $this->input->post('biaya'),
				'namaRusak' => $this->input->post('name'),
				'ketRusak' => $this->input->post('keterangan')
			);
			$insert = $this->MasterModel->insert($insertData,'rusak');
			if($insert){
				redirect(base_url('rusak'));
			}else{
				echo "<script>alert('Insert Failed !');</script>";
				redirect(base_url('rusak'));
			}
	}

	public function editMotor(){
		$updateData = array(
			'rangeBiaya'	=> $this->input->post('rangeBiaya'),
			'namaRusak' => $this->input->post('biaya'),
			'ketRusak' => $this->input->post('keterangan')
		);
		$id = array(
			'idRusak' => $this->uri->segment(2)
		);
		$update = $this->MasterModel->edit($updateData,'rusak',$id);
		if($update){
				redirect(base_url('rusak'));
			}else{
				echo "<script>alert('Update Failed !');</script>";
				redirect(base_url('rusak'));
			}
	}

	public function deleteMotor(){
		$id = array(
			'idRusak' => $this->uri->segment(2)
		);
		$delete = $this->db->delete('rusak',$id);
		if($delete){
				redirect(base_url('rusak'));
			}else{
				echo "<script>alert('Delete Failed !');</script>";
				redirect(base_url('rusak'));
			}
	}

	//JENIS
	public function masterJenis(){
		$content['title'] = 'Master Jenis';
		$data['content'] = $this->MasterModel->listing('jenis');
		$this->layout->defaultPage('pages/master-jenis',$data,$content);
	}
	
	public function newJenis(){
		
		$insertData = array(
				'idJenis' => 0,
				'picJenis'	=> $this->upFotoJenis(),
				'namaJenis' => $this->input->post('name'),
				'catJenis'	=> $this->input->post('cat'),
				'ketJenis' => $this->input->post('keterangan')
			);
			$insert = $this->MasterModel->insert($insertData,'jenis');
			if($insert){
				redirect(base_url('jenis'));
			}else{
				echo "<script>alert('Insert Failed !');</script>";
				redirect(base_url('jenis'));
			}
	}

	public function editJenis(){

		$updateData = array(
			'picJenis'	=> $this->upFotoJenis(),
			'namaJenis' => $this->input->post('name'),
			'catJenis'	=> $this->input->post('cat'),
			'ketJenis' => $this->input->post('keterangan')
		);
		$id = array(
			'idJenis' => $this->uri->segment(2)
		);
		$update = $this->MasterModel->edit($updateData,'jenis',$id);
		if($update){
				redirect(base_url('jenis'));
			}else{
				echo "<script>alert('Update Failed !');</script>";
				redirect(base_url('jenis'));
			}
	}

	public function deleteJenis(){
		$id = array(
			'idJenis' => $this->uri->segment(2)
		);
		$delete = $this->db->delete('jenis',$id);
		if($delete){
				redirect(base_url('jenis'));
			}else{
				echo "<script>alert('Delete Failed !');</script>";
				redirect(base_url('jenis'));
			}
	}

	//Mekanik
	public function masterMekanik(){
		$content['title'] = 'Data Mekanik';
		$data['content'] = $this->MasterModel->listing('mekanik');
		$this->layout->defaultPage('pages/master-mekanik',$data,$content);
	}
	
	public function newMekanik(){
		
		$insertData = array(
				'id_mekanik' => 0,
				'nama'	=> $this->input->post('nama'),
				'quota' => $this->input->post('quota'),
				'sesi'	=> ' '
			);
			$insert = $this->MasterModel->insert($insertData,'mekanik');
			if($insert){
				redirect(base_url('mekanik'));
			}else{
				echo "<script>alert('Gagal menambahkan data !');</script>";
				redirect(base_url('mekanik'));
			}
	}

	public function editMekanik(){

		$updateData = array(
			'nama' => $this->input->post('nama'),
			'quota'	=> $this->input->post('quota'),
			'sesi' => ' '
		);
		$id = array(
			'id_mekanik' => $this->uri->segment(2)
		);
		$update = $this->MasterModel->edit($updateData,'mekanik',$id);
		if($update){
				redirect(base_url('mekanik'));
			}else{
				echo "<script>alert('Ubah data gagal !');</script>";
				redirect(base_url('mekanik'));
			}
	}

	public function deleteMekanik(){
		$id = array(
			'id_mekanik' => $this->uri->segment(2)
		);
		$delete = $this->db->delete('mekanik',$id);
		if($delete){
				redirect(base_url('mekanik'));
			}else{
				echo "<script>alert('Hapus gagal !');</script>";
				redirect(base_url('mekanik'));
			}
	}

	//Oli
	

	public function upFotoJenis(){
			$config['upload_path']              = './uploads/fotojenis/';
		    $config['allowed_types']       		= 'gif|jpg|png|jpeg|GIF|JPG|JPEG|PNG|pdf|PDF';
			$config['max_size']         		= 2048;
			$config['encrypt_name'] 			= TRUE;

	        $this->upload->initialize($config);
	        if($this->upload->do_upload('fotoJenis')){
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

	//Order Part
	public function orderpart(){
		$content['title'] = 'Daftar Pesanan';
		$data['content'] = $this->MasterModel->listing('order_sparepart');
		$this->layout->defaultPage('pages/order-part',$data,$content);
	}

	public function orderDone(){
		$updateData = array(
				'order_sta' => 'Done',
				'end_date' => date('Y-m-d')
		);
		$id = array(
			'id_orderpart' => $this->uri->segment(3)
		);
		$update = $this->MasterModel->edit($updateData,'order_sparepart',$id);
		if($update){
				redirect(base_url('order'));
			}else{
				echo "<script>alert('Update Failed !');</script>";
				redirect(base_url('order'));
			}
	}


	

	//Category Part
	public function masterCatPart(){
		$content['title'] = 'Jenis Part';
		$data['content'] = $this->MasterModel->listing('category_part');
		$this->layout->defaultPage('pages/category-part',$data,$content);
	}

	public function newCatPart(){
		$insertData = array(
				'id_catpart' => 0,
				'nm_catpart' => $this->input->post('name'),
				'ket_catpart' => $this->input->post('ket')
			);
			$insert = $this->MasterModel->insert($insertData,'category_part');
			if($insert){
				redirect(base_url('catpart'));
			}else{
				echo "<script>alert('Insert Failed !');</script>";
				redirect(base_url('catpart'));
			}
	}

	public function editCatPart(){
		$updateData = array(
				'nm_catpart' => $this->input->post('name'),
				'ket_catpart' => $this->input->post('ket')
		);
		$id = array(
			'id_catpart' => $this->uri->segment(2)
		);
		$update = $this->MasterModel->edit($updateData,'category_part',$id);
		if($update){
				redirect(base_url('catpart'));
			}else{
				echo "<script>alert('Update Failed !');</script>";
				redirect(base_url('catpart'));
			}
	}

	public function deleteCatPart(){
		$id = array(
			'id_catpart' => $this->uri->segment(2)
		);
		$delete = $this->db->delete('category_part',$id);
		if($delete){
				redirect(base_url('catpart'));
			}else{
				echo "<script>alert('Delete Failed !');</script>";
				redirect(base_url('catpart'));
			}
	}
	//Type Part
	public function masterType(){
		$content['title'] = 'Type Part';
		$data['content'] = $this->MasterModel->listing('type_part');
		$this->layout->defaultPage('pages/type-part',$data,$content);
	}

	public function newType(){
		$insertData = array(
				'id_type' => 0,
				'id_catpart' => $this->input->post('catpart'),
				'nm_type' => $this->input->post('name'),
				'harga' => $this->input->post('harga'),
				'stock' => $this->input->post('stock'),
				'ket_type' => $this->input->post('ket')
			);
			$insert = $this->MasterModel->insert($insertData,'type_part');
			if($insert){
				redirect(base_url('type'));
			}else{
				echo "<script>alert('Insert Failed !');</script>";
				redirect(base_url('type'));
			}
	}

	public function editType(){
		$updateData = array(
				'id_catpart' => $this->input->post('catpart'),
				'nm_type' => $this->input->post('name'),
				'harga' => $this->input->post('harga'),
				'stock' => $this->input->post('stock'),
				'ket_type' => $this->input->post('ket')
		);
		$id = array(
			'id_type' => $this->uri->segment(2)
		);
		$update = $this->MasterModel->edit($updateData,'type_part',$id);
		if($update){
				redirect(base_url('type'));
			}else{
				echo "<script>alert('Update Failed !');</script>";
				redirect(base_url('type'));
			}
	}

	public function deleteType(){
		$id = array(
			'id_type' => $this->uri->segment(2)
		);
		$delete = $this->db->delete('type_part',$id);
		if($delete){
				redirect(base_url('type'));
			}else{
				echo "<script>alert('Delete Failed !');</script>";
				redirect(base_url('type'));
			}
	}

	//Antrian
	public function masterAntrian(){
		$content['title'] = 'Antrian Terkonfirmasi';
		$data['content'] = $this->db->query("Select * From data_antrian Where status <> 69");
		$this->layout->defaultPage('pages/trans-antrian',$data,$content);
	}

	public function estimasi(){
		$updateData = array(
				'analisa' => $this->input->post('analisa'),
				'esBiaya' => $this->input->post('esBiaya'),
				'esWaktu' => $this->input->post('esWaktu')
		);
		$id = array(
			'idconsul' => $this->uri->segment(3)
		);
		$update = $this->MasterModel->edit($updateData,'consul',$id);
		if($update){
				redirect(base_url('Home/masterAntrian'));
			}else{
				echo "<script>alert('Estimasi Failed !');</script>";
				redirect(base_url('Home/masterAntrian'));
			}
	}
	public function confirmAntrian(){
		$updateData = array(
				'status' => 1,
				'sparepart_ready' => $this->input->post('sparepart_ready'),
				'respon_antrian' => $this->input->post('respon_antrian'), 
				'harga_jasa'	=> $this->input->post('harga_jasa'), 
				'harga_sparepart'	=> $this->input->post('harga_sparepart'), 
				'harga_oli'	=> $this->input->post('harga_oli')
		);
		$id = array(
			'id_antrian' => $this->uri->segment(3)
		);
		$update = $this->MasterModel->edit($updateData,'data_antrian',$id);
		if($update){
				redirect(base_url('Home/masterAntrian'));
			}else{
				echo "<script>alert('Konfirmasi Gagal !');</script>";
				redirect(base_url('Home/masterAntrian'));
			}
	}

	//Lapor Antrian
	public function laporAntrian(){
		$insertData = array(
				'id_laporan' => 0,
				'id_antrian' => $this->input->post('id_antrian'),
				'id_mekanik' => $this->input->post('id_mekanik'),
				'rpt_date' => DATE("Y-m-d"),
				'laporan' => $this->input->post('laporan')
			);
		$insert = $this->MasterModel->insert($insertData,'laporan');
		$update = $this->db->query("Update data_antrian Set status = 2 Where id_antrian = ".$this->input->post('id_antrian'));
		if($insert){
			redirect(base_url('Home/masterAntrian'));
		}else{
			echo "<script>alert('Laporan Gagal !');</script>";
			redirect(base_url('Home/masterAntrian'));
		}
	}

	//Laporan
	public function masterLaporan(){
		$content['title'] = 'Data Laporan';
		$data['content'] = $this->MasterModel->listing('laporan');
		$this->layout->defaultPage('pages/trans-laporan',$data,$content);
	}

	//PERBAIKAN
	public function masterPerbaikan(){
		$content['title'] = 'Transaksi Perbaikan';
		$data['content'] = $this->MasterModel->listing('perbaikan');
		$this->layout->defaultPage('pages/trans-perbaikan',$data,$content);
	}

	public function newPerbaikan(){
		$insertData = array(
				'idPart' => 0,
				'idJenis' => $this->input->post('jenis'),
				'namaPart' => $this->input->post('name'),
				'harga' => $this->input->post('harga')
			);
			$insert = $this->MasterModel->insert($insertData,'part');
			if($insert){
				redirect(base_url('part'));
			}else{
				echo "<script>alert('Insert Failed !');</script>";
				redirect(base_url('part'));
			}
	}

	public function editPerbaikan(){
		$updateData = array(
				'idJenis' => $this->input->post('jenis'),
				'namaPart' => $this->input->post('name'),
				'harga' => $this->input->post('price')
		);
		$id = array(
			'idPart' => $this->uri->segment(2)
		);
		$update = $this->MasterModel->edit($updateData,'part',$id);
		if($update){
				redirect(base_url('part'));
			}else{
				echo "<script>alert('Update Failed !');</script>";
				redirect(base_url('part'));
			}
	}

	public function perAccept(){
		$updateData = array(
				'status' => 'Diterima',
				'startDate' => date('Y-m-d')
		);
		$id = array(
			'idPerbaikan' => $this->uri->segment(3)
		);
		$update = $this->MasterModel->edit($updateData,'perbaikan',$id);
		if($update){
				redirect(base_url('Home/masterPerbaikan'));
			}else{
				echo "<script>alert('Update Failed !');</script>";
				redirect(base_url('Home/masterPerbaikan'));
			}
	}

	public function perFinish(){
		$updateData = array(
				'status' => 'Selesai',
				'endDate' => date('Y-m-d')
		);
		$id = array(
			'idPerbaikan' => $this->uri->segment(3)
		);
		$update = $this->MasterModel->edit($updateData,'perbaikan',$id);
		if($update){
				redirect(base_url('Home/masterPerbaikan'));
			}else{
				echo "<script>alert('Update Failed !');</script>";
				redirect(base_url('Home/masterPerbaikan'));
			}
	}



	public function deletePerbaikan(){
		$id = array(
			'idPart' => $this->uri->segment(2)
		);
		$delete = $this->db->delete('part',$id);
		if($delete){
				redirect(base_url('part'));
			}else{
				echo "<script>alert('Delete Failed !');</script>";
				redirect(base_url('part'));
			}
	}
	
	//REPORT

	public function reportPerbaikan(){
		$content['title'] = 'Laporan Data Perbaikan';
		$param = array(
			'status'	=> 'Selesai'
		);
		$data['content'] = $this->MasterModel->one($param,'perbaikan');
		$this->layout->defaultPage('pages/rep-perbaikan',$data,$content);
	}
}
