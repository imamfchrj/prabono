<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	
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
		$this->load->view('users/daftar');
	}

	public function status_verifikasi()
	{
		$this->load->view('users/status_verifikasi');
	}

	public function ajax_daftar()
	{
		
		// if (isset($_SERVER['HTTP_ORIGIN'])){
		// 	header('Access-Control-Allow-Origin: '.$_SERVER['HTTP_ORIGIN']);
		// }
		// else{
		// 	header('Access-Control-Allow-Origin: https://tokenomy.com');
		// }
		header('Content-Type: application/json');

		// if($project->status!=='PUBLISHED'){
		// 	return print(json_encode(array(
		// 		'success'=>0,
		// 		'error'=>'Project is not published'
		// 	)));
		// }


			return print(json_encode(array(
				'success'=>1
			)));
	}

}
