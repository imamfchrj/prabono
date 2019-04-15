<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends Advokat_Controller {
	
	public function caradaftar()
	{
		$this->load->view('users/caradaftar');
	}


	public function daftar()
	{
		$this->load->model(
			array(
				'admin/master_bidang_keahlian_m',
				'user/advokat_file',
				'user/advokat_profiler',
                'admin/Master_province_m'
			)
		);
		$id=$this->get_user_id();
        $data['provinces']=$this->Master_province_m->get_all();
		//$data['probono'] =$this->master_bidang_keahlian_m->get_by_id($id);
		$data['probono'] =$this->master_bidang_keahlian_m->get_all_by_id($id);
		$data['profile']=$this->advokat_profiler->get_by_id($id);
		$data['users']=$this->advokat_profiler->get_user_by_id($id);
		$data['biography_list']=$this->advokat_file->get_file_by_id_group($id,"advokat_biography");
		$data['education_list']=$this->advokat_file->get_file_by_id_group($id,"advokat_education");
		$this->load->view('users/daftar',$data);
	}

	public function daftar_kasus()
	{
		$search = $this->input->get("search");
		$this->load->model('client/kasus');
		$data['kasus']=array();
		if($search) {
			$data['kasus']=$this->kasus->get_kasus_by_status(1,0,$search);
		}else{
			$data['kasus']=$this->kasus->get_kasus_by_status(1);
		}
		$this->load->view('users/daftar_kasus',$data);
	}


	public function aktif()
	{
		$this->is_verified();
		$this->load->view('users/daftar_aktif');
	}


	public function selesai()
	{
		$this->is_verified();
		$this->load->model('client/kasus');
		$id=$this->get_user_id();
        $status=array(2,3,4);
		$data['kasus']=$this->kasus->get_kasus_by_status($status,$id);
		$this->load->view('users/daftar_selesai',$data);
	}

	public function daftar_kasus_singgle($slug)
	{
		$this->is_verified();
		$id=$this->get_user_id();
		$this->load->model('client/kasus');
		$data['kasus']=$this->kasus->get_kasus_by_status_id_kasus($slug);
		$this->load->model('client/client_file');

		$data['kronologi_masalah_list']=$this->client_file->get_file_by_id($slug,"kronologi_masalah_file");
		$this->load->view('users/daftar_kasus_singgle',$data);
	}

	public function status_verifikasi()
	{
		$this->load->model("user/auth_advokat");
		$id=$this->get_user_id();
		$status=$this->auth_advokat->get_is_verified_by_id($id);
		if($status->is_verified == 1){
			redirect("users/daftar_kasus");
			return;
		}
		$this->load->view('users/status_verifikasi');
	}

	public function ajax_daftar()
	{
		header('Content-Type: application/json');

		$this->form_validation->set_rules('firstname', "Nama Depan", 'trim|xss_clean|max_length[50]');
		$this->form_validation->set_rules('lastname', "Nama Belakang", 'trim|xss_clean|max_length[50]');

		$this->form_validation->set_rules('gender', "Jenis Kelamin", 'trim|xss_clean|integer|max_length[1]');

		$this->form_validation->set_rules('hp', "No Handphone", 'trim|xss_clean|is_natural|max_length[13]');
		$this->form_validation->set_rules('id_ktp', "No Kartu Identitas", 'trim|xss_clean|max_length[250]');
		$this->form_validation->set_rules('photo_ktp', "Photo KTP", 'trim|xss_clean');
		$this->form_validation->set_rules('alamat_domisili', "No KTA Advokat", 'trim|xss_clean|max_length[250]');
		$this->form_validation->set_rules('id_kta_advokat', "Alamat Domisili", 'trim|xss_clean|max_length[250]');
		$this->form_validation->set_rules('alamat_ktp', "Alamat KTP", 'trim|xss_clean|max_length[250]');
		$this->form_validation->set_rules('kta_advokat', "Photo KTA Advokat", 'trim|xss_clean');
		$this->form_validation->set_rules('province', "Provinsi", 'trim|xss_clean|max_length[250]');
		$this->form_validation->set_rules('is_law_firm', "Mewakili Kantor Hukum", 'trim|xss_clean|max_length[250]');
		$this->form_validation->set_rules('company_firm_name', "Provinsi", 'trim|xss_clean|max_length[250]');
		$this->form_validation->set_rules('position_at_company', "Provinsi", 'trim|xss_clean|max_length[250]');
		$this->form_validation->set_rules('biography', "Provinsi", 'trim|xss_clean|max_length[250]');
		$this->form_validation->set_rules('univ_s1', "Universitas S1", 'trim|xss_clean|max_length[250]');
		$this->form_validation->set_rules('jur_s1', "Jurusan S1", 'trim|xss_clean|max_length[250]');
        $this->form_validation->set_rules('univ_s2', "Universitas S2", 'trim|xss_clean|max_length[250]');
        $this->form_validation->set_rules('jur_s2', "Jurusan S2", 'trim|xss_clean|max_length[250]');
        $this->form_validation->set_rules('univ_s3', "Universitas S3", 'trim|xss_clean|max_length[250]');
        $this->form_validation->set_rules('jur_s3', "Jurusan S3", 'trim|xss_clean|max_length[250]');
        $this->form_validation->set_rules('is_submit', "Jurusan S3", 'trim|xss_clean');
		//$this->form_validation->set_rules('education', "Provinsi", 'trim|xss_clean|max_length[250]');

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
				"is_law_firm"=>$this->form_validation->set_value('is_law_firm'),
				"alamat_domisili"=>$this->form_validation->set_value('alamat_domisili'),
				"alamat_ktp"=>$this->form_validation->set_value('alamat_ktp'),
				"province"=>$this->form_validation->set_value('province'),
				"company_firm_name"=>$this->form_validation->set_value('company_firm_name'),
				"position_at_company"=>$this->form_validation->set_value('position_at_company'),
				"biography"=>$this->form_validation->set_value('biography'),
				"univ_s1"=>$this->form_validation->set_value('univ_s1'),
				"jur_s1"=>$this->form_validation->set_value('jur_s1'),
                "univ_s2"=>$this->form_validation->set_value('univ_s2'),
                "jur_s2"=>$this->form_validation->set_value('jur_s2'),
                "univ_s3"=>$this->form_validation->set_value('univ_s3'),
                "jur_s3"=>$this->form_validation->set_value('jur_s3'),
				//"education"=>$this->form_validation->set_value('education'),
			);
			if($this->form_validation->set_value('is_submit')==1){
				$advokat_profile=$this->advokat_profiler->get_by_id($id);
				if($advokat_profile){
					if($advokat_profile->is_verified==2){
						$data["is_verified"]=0;
					}
                    if($advokat_profile->is_verified==0){
                        $data["is_submit"]=1;
                    }
				}

			}
			$this->advokat_profiler->update_profile($id,$data);
	
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

	public function ajax_set_bidang_keahlian(){
		header('Content-Type: application/json');

		$this->form_validation->set_rules('bidang_keahlian', "Bidang Keahlian", 'trim|xss_clean|integer');
		$this->form_validation->set_rules('value', "value", 'trim|required|xss_clean|integer|max_length[1]');


		if($this->form_validation->run()){
			
			$this->load->model('admin/master_bidang_keahlian_m');

			$id=$this->get_user_id();
			$data=array(
				"bidang_keahlian"=>$this->form_validation->set_value('bidang_keahlian'),
				"value"=>$this->form_validation->set_value('value')
			);
			$lalala=$this->master_bidang_keahlian_m->set_bidang_keahlian($data,$id);
	
			return print(json_encode(array(
				'is_error'=>false,
				'data'=>$data,
				'lalala'=>$lalala
			)));

		}

		$this->form_validation->set_message('max_length', '%s: Maksimal karakter yang digunakan adalah %s');
		$this->form_validation->set_message('gender', '%s: Format jenis kelamin salah');

		return print(json_encode(array(
			'is_error'=>true,
			'error_message'=>  validation_errors()
		)));
	}


	public function agenda($slug){
		$data['menu']="agenda";
		$id=$this->get_user_id();
		$this->load->model('client/kasus');
		$this->load->model('user/kasus_agenda_m');
		
		$data['kasus']=$this->kasus->get_kasus_by_status_id_kasus($slug);
		if($data['kasus']->id){
			$data['agenda']=$this->kasus_agenda_m->get_by_kasus_id($data['kasus']->id);
		}
		$this->load->view('users/kasus_agenda',$data);
	}
	
	public function request($slug){
		$data['menu']="point";
		$id=$this->get_user_id();
		$this->load->model('client/kasus');
		$data['kasus']=$this->kasus->get_kasus_by_status_id_kasus($slug);

		
		$this->load->model('user/advokat_point_m');
		
		if($data['kasus']->id){
			$data['timesheet']=$this->advokat_point_m->get_by_kasus_id($data['kasus']->id);
		}
		

		$this->load->view('users/kasus_request',$data);
	}



	public function notification(){
		$data['menu']="notification";

		$id=$this->get_user_id();
		
		$this->load->model('client/notification_m');
		$this->notification_m->read_all($id,1);
		$data["notification"]=$this->notification_m->get_all($id,1);
		$this->load->view('users/notification',$data);
	}

	public function logout(){
		$this->logout_sess();
		redirect();
	}	

}
