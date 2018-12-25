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
		$this->load->view('users/form');
	}

}
