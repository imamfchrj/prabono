<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	// public function index()
	// {
	// 	$this->load->view('users/main');
	// }
	public function index()
	{
		$data['menu']="dashboard";
		$this->load->view('admin/main',$data);
	}

	public function client()
	{
		$data['menu']="client";
		$this->load->view('admin/client',$data);
	}

	public function act_lawyers()
	{
		$data['menu']="lawyers";
		$data['sub_menu']="act_lawyers";
		$this->load->view('admin/act_lawyers',$data);
	}

	public function kpi_lawyers()
	{
		$data['menu']="lawyers";
		$data['sub_menu']="kpi_lawyers";
		$this->load->view('admin/kpi_lawyers',$data);
	}

	public function approval_lawyers()
	{
		$data['menu']="lawyers";
		$data['sub_menu']="approval_lawyers";
		$this->load->view('admin/approval_lawyers',$data);
	}

	public function status_probono()
	{
		$data['menu']="status";
		$this->load->view('admin/status_probono',$data);
	}

	public function complaint()
	{
		$data['menu']="complaint";
		$this->load->view('admin/complaint',$data);
	}

	public function mst_category()
	{
		$data['menu']="master";
		$data['sub_menu']="mst_category";
		$this->load->view('admin/mst_category',$data);
	}

	public function mst_news()
	{
		$data['menu']="master";
		$data['sub_menu']="mst_news";
		$this->load->view('admin/mst_news',$data);
	}

	public function report_a()
	{
		$data['menu']="report";
		$data['sub_menu']="report_a";
		$this->load->view('admin/report_a',$data);
	}

	public function report_b()
	{
		$data['menu']="report";
		$data['sub_menu']="report_b";
		$this->load->view('admin/report_b',$data);
	}

}
