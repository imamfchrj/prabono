<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clients_ajax extends Users_Controller {
	

	function __construct()
	{
		parent::__construct();
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
			$this->load->model('client/client_profiler');
			$this->client_profiler->update_profile($id,$data);
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
	
	public function clients_profile()
	{
		header('Content-Type: application/json');

		$this->form_validation->set_rules('firstname', "Nama Depan", 'trim|xss_clean|max_length[50]');
		$this->form_validation->set_rules('lastname', "Nama Belakang", 'trim|xss_clean|max_length[50]');
		$this->form_validation->set_rules('gender', "Jenis Kelamin", 'trim|xss_clean|integer|max_length[1]');
		$this->form_validation->set_rules('hp', "No Handphone", 'trim|xss_clean|is_natural|max_length[12]');
		$this->form_validation->set_rules('id_ktp', "NIK", 'trim|xss_clean|max_length[50]');
		$this->form_validation->set_rules('photo_ktp', "Photo KTP", 'trim|xss_clean');
		$this->form_validation->set_rules('alamat_domisili', "No KTA Advokat", 'trim|xss_clean|max_length[250]');
		$this->form_validation->set_rules('pekerjaan', "Pekerjaan", 'trim|xss_clean|max_length[250]');
        $this->form_validation->set_rules('penghasilan', "Penghasilan", 'trim|xss_clean|max_length[250]');
        $this->form_validation->set_rules('surat_tidak_mampu', "Surat Keterangan Tidak Mampu", 'trim|xss_clean');
        

		if($this->form_validation->run()){
			
			$this->load->model('client/client_profiler');

			$id=$this->get_user_id();
			$data=array(
				"firstname"=>$this->form_validation->set_value('firstname'),
				"lastname"=>$this->form_validation->set_value('lastname'),
				"gender"=>$this->form_validation->set_value('gender'),
				"hp"=>$this->form_validation->set_value('hp'),
				"id_ktp"=>$this->form_validation->set_value('id_ktp'),
				"photo_ktp"=>$this->form_validation->set_value('photo_ktp'),
				"alamat_domisili"=>$this->form_validation->set_value('alamat_domisili'),
				"pekerjaan"=>$this->form_validation->set_value('pekerjaan'),
				"penghasilan"=>$this->form_validation->set_value('penghasilan'),
				"surat_tidak_mampu"=>$this->form_validation->set_value('surat_tidak_mampu'),
			);
			$this->client_profiler->update_profile($id,$data);
	
			return print(json_encode(array(
				'is_error'=>false
			)));

		}

		return print(json_encode(array(
			'is_error'=>true,
			'error_message'=>  validation_errors()
		)));
	}
	
	public function kasus()
	{
		header('Content-Type: application/json');
        $this->form_validation->set_rules('id_kasus', "id_kasus", 'trim|xss_clean|is_natural');
		$this->form_validation->set_rules('judul', "Judul", 'trim|xss_clean|callback__length_judul');
		$this->form_validation->set_rules('is_kusus', "kusus", 'trim|xss_clean|is_natural|max_length[1]');
		$this->form_validation->set_rules('initial_name', "Nama Inisial", 'trim|xss_clean|max_length[50]');
		$this->form_validation->set_rules('kronologi_masalah', "Kronologi Masalah", 'trim|xss_clean');
		$this->form_validation->set_rules('ekspektasi_kasus', "Ekspektasi Kasus", 'trim|xss_clean');
		$this->form_validation->set_rules('lokasi_kejadian', "Lokasi", 'trim|xss_clean');
        $this->form_validation->set_rules('is_submit', "is_submit", 'trim|xss_clean|is_natural|max_length[1]');
        

		if($this->form_validation->run()){
			
			$this->load->model('client/kasus');

			$id=$this->get_user_id();
			$id_kasus=$this->form_validation->set_value('id_kasus');
			$status=1;
			$data=array(
				"judul"=>$this->form_validation->set_value('judul'),
				"user_id"=>$id,
				"is_kusus"=>$this->form_validation->set_value('is_kusus'),
				"initial_name"=>$this->form_validation->set_value('initial_name'),
				"kronologi_masalah"=>$this->form_validation->set_value('kronologi_masalah'),
				"ekspektasi_kasus"=>$this->form_validation->set_value('ekspektasi_kasus'),
				"lokasi_kejadian"=>$this->form_validation->set_value('lokasi_kejadian'),
				"is_submit"=>$this->form_validation->set_value('is_submit'),
				"status"=>$status

			);
			if($id_kasus){
				$this->kasus->update_value_by_id($id_kasus,$data);
			}else{
				$id_kasus=$this->kasus->set($data);
			}
	
			return print(json_encode(array(
				'is_error'=>false,
				'id_kasus'=>$id_kasus,

			)));

		}

		return print(json_encode(array(
			'is_error'=>true,
			'error_message'=>  validation_errors()
		)));
	}

	function _length_judul($val){
		$data=count(explode(" ",$val));
		if($data>10){
			$this->form_validation->set_message('_length_judul', "Judul terlalu panjang. Maksimal 10 kata.");
			return FALSE;
		}
		return TRUE;
	}

	
	public function accept_agenda()
	{
		header('Content-Type: application/json');

		$this->form_validation->set_rules('agenda_id', "Agenda", 'trim|required|xss_clean|is_natural');
        $this->form_validation->set_rules('kasus_id', "Kasus", 'trim|required|xss_clean|is_natural');

		if($this->form_validation->run()){
			
			$this->load->model('user/kasus_agenda_m');

			$id=$this->form_validation->set_value('agenda_id');
			$agenda=$this->kasus_agenda_m->get_by_id($id);
			if(!$agenda){
				return print(json_encode(array(
					'is_error'=>true,
					'error_message'=>  "Agenda tidak ditemukan"
				)));
			}
			$data=array(
				"is_accept"=>1
			);
			$this->kasus_agenda_m->update_value_by_id($id,$data);
			send_notif($agenda->advokat_id,"users/agenda/".$this->form_validation->set_value('kasus_id'),"User Menerima Agenda anda. Klik disini untuk melihat lebih banyak.","agenda",1);
			return print(json_encode(array(
				'is_error'=>false
			)));

		}

		return print(json_encode(array(
			'is_error'=>true,
			'error_message'=>  validation_errors()
		)));
	}

	public function set_point()	
	{

        $this->form_validation->set_rules('agenda_id', "agenda", 'trim|required|xss_clean|is_natural');
        $this->form_validation->set_rules('advokat_id', "agenda", 'trim|required|xss_clean|is_natural');
        $this->form_validation->set_rules('status', "Status", 'trim|required|xss_clean|is_natural');
        $this->form_validation->set_rules('id_time', "Status", 'trim|required|xss_clean|is_natural');
        

		if($this->form_validation->run()){
			
			$this->load->model('user/advokat_point_m');
			$status=$this->form_validation->set_value('status');
			$id_time=$this->form_validation->set_value('id_time');
			$data=array(
				"agenda_id"=>$this->form_validation->set_value('agenda_id'),
				"advokat_id"=>$this->form_validation->set_value('advokat_id'),
			);
			if($status){
				$this->advokat_point_m->set($data);
				send_notif($this->form_validation->set_value('advokat_id'),"users/request/".$this->form_validation->set_value('agenda_id'),"Anda mendapatkan point klik disini untuk melihat","agenda",1);	
			}else{
				send_notif($this->form_validation->set_value('advokat_id'),"users/request/".$this->form_validation->set_value('agenda_id'),"User menghapus point anda","agenda",1);	
				$this->advokat_point_m->delete_by_id($id_time);
			}

			

			return print(json_encode(array(
				'is_error'=>false,

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
				"user_id"=>$id,
				"is_user"=>1,
				"advokat_id"=>$kasus->advokat_id
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


	public function tolak_kasus()
	{
        $this->form_validation->set_rules('id_kasus', "Kasus", 'trim|required|xss_clean|is_natural|callback__check_kasus_pending');
        

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
			
			//disini belum
			$kasus=$this->kasus->get_kasus_by_status_id_kasus($id,2);
			if($kasus){
				send_notif($kasus->advokat_id,"clients/kasus_aktif_singgle/".$id,"Kasus Anda <b>".$kasus->judul." di tolak</b> oleh user! Lihat disini untuk detailnya.","client",1);	
			}

            $data=array(
                "advokat_id"=>0,
                "status"=>1
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
	
	public function terima_kasus()
	{
        $this->form_validation->set_rules('id_kasus', "Kasus", 'trim|required|xss_clean|is_natural|callback__check_kasus_pending');
        

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
			
			//disini belum
			$kasus=$this->kasus->get_kasus_by_only_id($id);
			if($kasus){
				send_notif($kasus->advokat_id,"users/daftar_kasus_singgle/".$id,"Kasus Anda <b>".$kasus->judul." di terima</b> oleh user! Lihat disini untuk detailnya.","client",1);
			}

            $data=array(
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
	

	function _check_kasus_pending($val){
        $this->db->where("id",$val);
        $this->db->where("status",4);
        $query=$this->db->get("kasus");
		if($query){
            return TRUE;
        }
		$this->form_validation->set_message('_check_kasus_pending', "Kasus Tidak Tersedia.");
		return FALSE;
	}

}

