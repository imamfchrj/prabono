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
        $this->load->model(array('admin/master_probono_m'));
        $data['probono'] =$this->master_probono_m->get_all();
		$this->load->view('users/daftar',$data);
	}

	public function daftar_kasus()
	{
		$this->load->view('users/daftar_kasus');
	}


	public function aktif()
	{
		$this->load->view('users/daftar_aktif');
	}


	public function selesai()
	{
		$this->load->view('users/daftar_selesai');
	}

	public function daftar_kasus_singgle($slug)
	{
		$this->load->view('users/daftar_kasus_singgle');
	}

	public function status_verifikasi()
	{
		$this->load->view('users/status_verifikasi');
	}

	public function ajax_daftar()
	{
		header('Content-Type: application/json');



			return print(json_encode(array(
				'success'=>1
			)));
	}

	public function logout(){
		$this->logout_sess();
		redirect();
	}	

}
