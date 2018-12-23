<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function index()
	{
		$this->load->view('landing_page/main');
	}

	public function aboutus()
	{
		$this->load->view('landing_page/aboutus');
	}

	public function services()
	{
		$this->load->view('landing_page/services');
	}

	public function publication()
	{
		$this->load->view('landing_page/publication');
	}

	public function news()
	{
		$this->load->view('landing_page/blog');
	}

	public function news_singgle($slug=false)
	{
		if(!$slug){
			echo "404";
		}
		$this->load->view('landing_page/blog-single');
	}

	public function joinus()
	{
		$data['menu']="bergabung";
		$this->load->view('landing_page/joinus',$data);
	}


	public function team()
	{
		// $data['menu']="bergabung";
		$this->load->view('landing_page/team',$data);
	}

}
