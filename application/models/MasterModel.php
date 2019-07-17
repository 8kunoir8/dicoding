<?php

class MasterModel extends CI_Model {

	public function listing($table){
		$query = $this->db->get($table);
		return $query;
	}

	public function insert($insertData,$table){
		
		try {
			$query = $this->db->insert($table,$insertData);
			return true;
		}catch(Exception $e){
			return false;
		}
	}

	public function edit($updateData,$table,$id){
		$this->db->where($id);
		$query = $this->db->update($table,$updateData);
		return;
	}

	public function one($param,$table){
		$query = $this->db->get_where($table,$param);
		return $query;
	}

	//public function upJaminan(){
	//		$config['upload_path']              = './uploads/jaminan/';
	//	    $config['allowed_types']       		= 'gif|jpg|png|jpeg|GIF|JPG|JPEG|PNG|pdf|PDF';
	//		$config['max_size']         		= 2048;
	//		$config['encrypt_name'] 			= TRUE;
	//        $this->upload->initialize($config);
	//        if($this->upload->do_upload('jaminan')){
	//        	return $this->upload->data('file_name');
	//        }else{
	//        	echo $this->upload->display_errors();
	//        }
	//}

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