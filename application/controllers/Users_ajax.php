<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_ajax extends Advokat_Controller {
	

	function __construct()
	{
		parent::__construct();
	}
	
	
	
	public function terima_kasus()
	{
		header('Content-Type: application/json');
        $this->form_validation->set_rules('id_kasus', "id_kasus", 'trim|required|xss_clean|is_natural|callback__check_kasus');
        

		if($this->form_validation->run()){
			
			$this->load->model('client/kasus');

            $advokat_id=$this->get_user_id();
            if(!$advokat_id){
                return print(json_encode(array(
                    'is_error'=>true,
                    'error_message'=>  "Silahkan melakukan relogin kembali."
                )));
            }
            $id=$this->form_validation->set_value('id_kasus');
            $data=array(
                "advokat_id"=>$advokat_id,
                "status"=>2
            );
            $this->kasus->update_value_by_id($id,$data);

			return print(json_encode(array(
				'is_error'=>false
				
			)));

		}

		return print(json_encode(array(
			'is_error'=>true,
			'error_message'=>  validation_errors()
		)));
    }
    
	function _check_kasus($val){
        $this->db->where("id",$val);
        $this->db->where("status",1);
        $query=$this->db->get("kasus");
		if($query){
            return TRUE;
        }
		$this->form_validation->set_message('_check_kasus', "Kasus Tidak Tersedia.");
		return FALSE;
	}

	public function tambah_agenda()
	{
		header('Content-Type: application/json');

		$this->form_validation->set_rules('kasus_id', "Kasus", 'trim|required|xss_clean|is_natural');

		$this->form_validation->set_rules('title', "Judul", 'trim|xss_clean|max_length[50]');
		$this->form_validation->set_rules('place', "Tempat", 'trim|xss_clean|max_length[50]');
		$this->form_validation->set_rules('fromdate', "Dari Tanggal", 'trim|xss_clean|max_length[50]');
		$this->form_validation->set_rules('todate', "Sampai Tanggal", 'trim|xss_clean|max_length[50]');
		$this->form_validation->set_rules('description', "Deskripsi", 'trim|xss_clean|max_length[50]');
        

		if($this->form_validation->run()){
			
			$this->load->model('user/kasus_agenda_m');

			$id=$this->get_user_id();
			$data=array(
				"kasus_id"=>$this->form_validation->set_value('kasus_id'),
				"advokat_id"=>$this->form_validation->set_value('advokat_id'),
				"title"=>$this->form_validation->set_value('title'),
				"place"=>$this->form_validation->set_value('place'),
				"fromdate"=>$this->form_validation->set_value('fromdate'),
				"todate"=>$this->form_validation->set_value('todate'),
				"description"=>$this->form_validation->set_value('description'),
				"advokat_id"=>$id,
			);
			$this->kasus_agenda_m->set($data);
	
			return print(json_encode(array(
				'is_error'=>false
			)));

		}

		return print(json_encode(array(
			'is_error'=>true,
			'error_message'=>  validation_errors()
		)));
	}

}