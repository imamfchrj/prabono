<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clients_ajax extends Users_Controller {
	

	function __construct()
	{
		parent::__construct();
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
			
			$data=array(
				"judul"=>$this->form_validation->set_value('judul'),
				"user_id"=>$id,
				"is_kusus"=>$this->form_validation->set_value('is_kusus'),
				"initial_name"=>$this->form_validation->set_value('initial_name'),
				"kronologi_masalah"=>$this->form_validation->set_value('kronologi_masalah'),
				"ekspektasi_kasus"=>$this->form_validation->set_value('ekspektasi_kasus'),
				"lokasi_kejadian"=>$this->form_validation->set_value('lokasi_kejadian'),
				"is_submit"=>$this->form_validation->set_value('is_submit')
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

        

		if($this->form_validation->run()){
			
			$this->load->model('user/kasus_agenda_m');

			$id=$this->form_validation->set_value('agenda_id');
			$data=array(
				"is_accept"=>1
			);
			$this->kasus_agenda_m->update_value_by_id($id,$data);
	
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