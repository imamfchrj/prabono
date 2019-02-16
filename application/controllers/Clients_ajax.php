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

		$this->form_validation->set_message('max_length', '%s: Maksimal karakter yang digunakan adalah %s');
		$this->form_validation->set_message('gender', '%s: Format jenis kelamin salah');

		return print(json_encode(array(
			'is_error'=>true,
			'error_message'=>  validation_errors()
		)));
		
		
		
	}

}