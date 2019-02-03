<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends Advokat_Controller {
	
	// public function index()
	// {
	// 	$this->load->view('users/main');
	// }
	public function caradaftar()
	{
		$this->load->view('users/caradaftar');
	}


	public function daftar()
	{
		$this->load->model(
			array(
				'admin/master_probono_m',
				'user/advokat_profiler'
			)
		);
		$id=$this->get_user_id();
		$data['probono'] =$this->master_probono_m->get_all();
		
		$data['profile']=$this->advokat_profiler->get_by_id($id);
		$data['users']=$this->advokat_profiler->get_user_by_id($id);
		
		$this->load->view('users/daftar',$data);
	}

	public function daftar_kasus()
	{
		$this->load->view('users/daftar_kasus');
	}


	public function aktif()
	{
		$this->is_verified();
		$this->load->view('users/daftar_aktif');
	}


	public function selesai()
	{
		$this->is_verified();
		$this->load->view('users/daftar_selesai');
	}

	public function daftar_kasus_singgle($slug)
	{
		$this->is_verified();
		$this->load->view('users/daftar_kasus_singgle');
	}

	public function status_verifikasi()
	{
		$this->load->view('users/status_verifikasi');
	}

	public function ajax_daftar()
	{
		header('Content-Type: application/json');

		$this->form_validation->set_rules('firstname', "Nama Depan", 'trim|xss_clean|max_length[50]');
		$this->form_validation->set_rules('lastname', "Nama Belakang", 'trim|xss_clean|max_length[50]');

		$this->form_validation->set_rules('gender', "Jenis Kelamin", 'trim|xss_clean|integer|max_length[1]');

		$this->form_validation->set_rules('first_title', "Title Depan", 'trim|xss_clean|max_length[20]');
		$this->form_validation->set_rules('last_title', "Title Depan", 'trim|xss_clean|max_length[20]');
		$this->form_validation->set_rules('hp', "No Handphone", 'trim|xss_clean|is_natural|max_length[12]');
		$this->form_validation->set_rules('id_ktp', "No Kartu Identitas", 'trim|xss_clean|max_length[250]');
		$this->form_validation->set_rules('photo_ktp', "Photo KTP", 'trim|xss_clean');
		$this->form_validation->set_rules('alamat_domisili', "No KTA Advokat", 'trim|xss_clean|max_length[250]');
		$this->form_validation->set_rules('id_kta_advokat', "Alamat Domisili", 'trim|xss_clean|max_length[250]');
		$this->form_validation->set_rules('alamat_ktp', "Alamat KTP", 'trim|xss_clean|max_length[250]');
		$this->form_validation->set_rules('kta_advokat', "Photo KTA Advokat", 'trim|xss_clean');
		$this->form_validation->set_rules('province', "Provinsi", 'trim|xss_clean|max_length[250]');
		$this->form_validation->set_rules('company_firm_name', "Provinsi", 'trim|xss_clean|max_length[250]');
		$this->form_validation->set_rules('position_at_company', "Provinsi", 'trim|xss_clean|max_length[250]');
		$this->form_validation->set_rules('biography', "Provinsi", 'trim|xss_clean|max_length[250]');
		$this->form_validation->set_rules('education', "Provinsi", 'trim|xss_clean|max_length[250]');
		


		// id_ktp: $("#id_ktp").val(),
		// photo_ktp: $("#photo_ktp").val(),
		// id_kta_advokat: $("#id_kta_advokat").val(),
		// kta_advokat: $("#kta_advokat").val(),
		// alamat_domisili: $("#alamat_domisili").val(),
		// alamat_ktp: $("#alamat_ktp").val(),
		// province: $("#province").val(),
		// company_firm_name: $("#company_firm_name").val(),
		// position_at_company: $("#position_at_company").val(),
		// biography: $('#biography').summernote('code'),
		// education: $('#education').summernote('code')
		if($this->form_validation->run()){
			
			$this->load->model('user/advokat_profiler');

			$id=$this->get_user_id();
			$data=array(
				"firstname"=>$this->form_validation->set_value('firstname'),
				"lastname"=>$this->form_validation->set_value('lastname'),
				"gender"=>$this->form_validation->set_value('gender'),
				"first_title"=>$this->form_validation->set_value('first_title'),
				"last_title"=>$this->form_validation->set_value('last_title'),
				"id_ktp"=>$this->form_validation->set_value('id_ktp'),
				"photo_ktp"=>$this->form_validation->set_value('photo_ktp'),
				"id_kta_advokat"=>$this->form_validation->set_value('id_kta_advokat'),
				"kta_advokat"=>$this->form_validation->set_value('kta_advokat'),
				"alamat_domisili"=>$this->form_validation->set_value('alamat_domisili'),
				"alamat_ktp"=>$this->form_validation->set_value('alamat_ktp'),
				"province"=>$this->form_validation->set_value('province'),
				"company_firm_name"=>$this->form_validation->set_value('company_firm_name'),
				"position_at_company"=>$this->form_validation->set_value('position_at_company'),
				"biography"=>$this->form_validation->set_value('biography'),
				"education"=>$this->form_validation->set_value('education'),
			);
			$this->advokat_profiler->update_profile($id,$data);
	
			return print(json_encode(array(
				'is_error'=>false,
				'data'=>$data['alamat_ktp']
			)));

		}

		$this->form_validation->set_message('max_length', '%s: Maksimal karakter yang digunakan adalah %s');
		$this->form_validation->set_message('gender', '%s: Format jenis kelamin salah');

		return print(json_encode(array(
			'is_error'=>true,
			'error_message'=>  validation_errors()
		)));
		
		
		
	}

	public function logout(){
		$this->logout_sess();
		redirect();
	}	

}
