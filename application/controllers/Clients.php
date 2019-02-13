<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clients extends Users_Controller {
	

	function __construct()
	{
		parent::__construct();
	}
	
	public function form()
	{
		$data['menu']="home";
		
		$this->load->model('admin/Master_province_m');
		$data['provinces']=$this->Master_province_m->get_all();

		$this->load->view('client/form',$data);
	}
	public function kasus_aktif()
	{
		$data['menu']="home";
		$this->load->view('client/kasus_client',$data);
	}
	public function kasus_aktif_singgle($slug)
	{
		$data['menu']="home";
		$this->load->view('client/kasus_client_singgle',$data);
	}

	public function logout(){
		$this->logout_sess();
		redirect();
	}


}