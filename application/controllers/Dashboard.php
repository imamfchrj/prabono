<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function index()
	{
		$data['menu']="home";
		$this->load->view('landing_page/main',$data);
	}

	public function aboutus()
	{
		$data['menu']="tentangkita";
		$this->load->view('landing_page/aboutus',$data);
	}

	public function services()
	{
		$data['menu']="jasa";
		$this->load->model('admin/master_jasa_m');
		$data['results']=$this->master_jasa_m->get_all();
		$this->load->view('landing_page/services',$data);
	}

	public function publication()
	{
		$data['menu']="publikasi";
		$this->load->model('admin/master_publikasi_m');
		$data['results']=$this->master_publikasi_m->get_all();
		$this->load->view('landing_page/publication',$data);
	}

	public function news()
	{
		$data['menu']="berita";
		$this->load->model('admin/master_berita_m');
		$this->load->model('admin/master_kategori_m');
		$data['results']=$this->master_berita_m->get_all();
		$data['results_kategori']=$this->master_kategori_m->get_all();
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
		$data['menu']="team";
		$this->load->view('landing_page/team',$data);
	}

}
