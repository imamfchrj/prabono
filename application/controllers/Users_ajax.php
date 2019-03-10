<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_ajax extends Advokat_Controller {
	

	function __construct()
	{
		parent::__construct();
		header('Content-Type: application/json');
		$id=$this->get_user_id();
		if(!$id){
			return print(json_encode(array(
				'is_error'=>true,
				'error_message'=>  "Silahkan melakukan relogin kembali."
			)));
		}
	}



	public function do_upload_profile()
	{
		$id=$this->get_user_id();
		if(!$id){
			return print(json_encode(array(
				'is_error'=>true,
				'error_message'=>  "User anda tidak di temukan. Silahkan login terlebih dahulu."
			)));
		}
		$this->load->helper('custom_upload');
		$data = upload_image();
		if(!$data["is_error"]){
			$data=array(
				"foto"=>$data["filename"]
			);
			$this->load->library('session');
			$this->load->model('user/advokat_profiler');
			$this->advokat_profiler->update_profile($id,$data);
			$this->session->set_userdata('foto', $data["foto"]);
			return print(json_encode(array(
				'is_error'=>false,
				'image_url'=>  $data["foto"]
			)));
		}
		return print(json_encode(array(
			'is_error'=>true,
			'error_message'=>  $data["error"]
		)));
	}
	
	
	
	public function terima_kasus()
	{
        $this->form_validation->set_rules('id_kasus', "Kasus", 'trim|required|xss_clean|is_natural|callback__check_kasus');
        

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
			//disini belum
			$kasus=$this->kasus->get_kasus_by_status_id_kasus($id,2);
			if($kasus){
				send_notif($kasus->user_id,"clients/kasus_aktif_singgle/".$id,"Kasus Anda <b>".$kasus->judul."</b> di terima! Lihat disini untuk detailnya.","advokat",0);	
			}

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

		$this->form_validation->set_rules('kasus_id', "Kasus", 'trim|required|xss_clean|is_natural');
		$this->form_validation->set_rules('agenda_id', "Agenda", 'trim|xss_clean|is_natural');

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
				// "advokat_id"=>$this->form_validation->set_value('advokat_id'),
				"title"=>$this->form_validation->set_value('title'),
				"place"=>$this->form_validation->set_value('place'),
				"fromdate"=>$this->form_validation->set_value('fromdate'),
				"todate"=>$this->form_validation->set_value('todate'),
				"description"=>$this->form_validation->set_value('description'),
				"advokat_id"=>$id,
			);

			$this->load->model('client/kasus');
			$kasus=$this->kasus->get_kasus_by_status_id_kasus($this->form_validation->set_value('kasus_id'),2);

			if(!$this->form_validation->set_value('agenda_id')){
				$this->kasus_agenda_m->set($data);
				if($kasus){
					send_notif($kasus->user_id,"clients/agenda/".$this->form_validation->set_value('kasus_id'),"Advokat membuat agenda kegiatan <b>".$this->form_validation->set_value('title')."</b>. Klik disini untuk melihat selengkapnya","agenda",0);	
				}
			}else{
				$this->kasus_agenda_m->update_value_by_id($this->form_validation->set_value('agenda_id'),$data);
				if($kasus){
					send_notif($kasus->user_id,"clients/agenda/".$this->form_validation->set_value('kasus_id'),"Advokat merubah agenda kegiatan <b>".$this->form_validation->set_value('title')."</b>. Klik disini untuk melihat selengkapnya","agenda",0);	
				}
			}
	
			return print(json_encode(array(
				'is_error'=>false
			)));

		}

		return print(json_encode(array(
			'is_error'=>true,
			'error_message'=>  validation_errors()
		)));
	}


	public function get_agenda($agenda_id)	
	{
		if(!$agenda_id){
			return print(json_encode(array(
				'is_error'=>true,
				'error_message'=>  "Maaf Agenda tidak ditemukan"
			)));
		}

		
        $this->form_validation->set_data(array(
			'agenda_id'    =>  $agenda_id
		));

        $this->form_validation->set_rules('agenda_id', "agenda", 'trim|required|xss_clean|is_natural');
        

		if($this->form_validation->run()){
			
			$this->load->model('user/kasus_agenda_m');

			$agenda_id=$this->form_validation->set_value('agenda_id');
			$data=$this->kasus_agenda_m->get_by_id($agenda_id);

			return print(json_encode(array(
				'is_error'=>false,
				"data"=>$data
			)));

		}

		return print(json_encode(array(
			'is_error'=>true,
			'error_message'=>  validation_errors()
		)));
	}
	



	public function report()	
	{

        $this->form_validation->set_rules('kasus_id', "kasus", 'trim|required|xss_clean|is_natural');
        $this->form_validation->set_rules('status', "Status", 'trim|required|xss_clean|is_natural');
        $this->form_validation->set_rules('description', "Status", 'trim|required|xss_clean');
        

		if($this->form_validation->run()){

			$id=$this->get_user_id();
			
			$this->load->model('user/complaint_m');
			$this->load->model('client/kasus');
			$kasus=$this->kasus->get_kasus_by_only_id($this->form_validation->set_value('kasus_id'));
			if(!$kasus){
				return print(json_encode(array(
					'is_error'=>true,
					'error_message'=>  "Advokat belum dipilih."
				)));
			}
			$data=array(
				"kasus_id"=>$this->form_validation->set_value('kasus_id'),
				"status"=>$this->form_validation->set_value('status'),
				"description"=>$this->form_validation->set_value('description'),
				"user_id"=>$kasus->user_id,
				"is_user"=>0,
				"advokat_id"=>$id
			);
			$this->complaint_m->set($data);
			return print(json_encode(array(
				'is_error'=>false,

			)));

		}

		return print(json_encode(array(
			'is_error'=>true,
			'error_message'=>  validation_errors()
		)));
    }

}