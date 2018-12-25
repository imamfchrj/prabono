<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function index()
	{
		$data['menu']="home";
		$this->load->view('landing_page/main',$home);
	}

	public function aboutus()
	{
		$data['menu']="tentangkita";
		$this->load->view('landing_page/aboutus2',$data);
	}

	public function services()
	{
		$data['menu']="jasa";
		$this->load->view('landing_page/services',$data);
	}

	public function publication()
	{
		$data['menu']="publikasi";
		$this->load->view('landing_page/publication',$data);
	}

	public function news()
	{
		$data['menu']="berita";
		$this->load->view('landing_page/blog',$data);
	}

	public function news_singgle($slug=false)
	{
		if(!$slug){
			echo "404";
		}
		$data['menu']="berita";
		$this->load->view('landing_page/blog-single',$data);
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
