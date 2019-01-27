<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends Auth_Controller {
	

	function __construct()
	{
		parent::__construct();
		
	}
	
	public function tes(){
		echo hashpass('halooo');
	}

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

    public function form_user()
    {
        $this->load->view('admin/form_user');
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

    public function mst_category_form($id=0)
    {
        $data['menu']="master";
        $data['sub_menu']="mst_category_form";
        if($id){
            $this->load->model('admin/master_probono_m');
            $this->form_validation->set_data(array(
                'id'    =>  $id
            ));
            $this->form_validation->set_rules('id', 'id probono', 'trim|required|xss_clean|numeric|htmlentities');

            if ($this->form_validation->run()) {
                $id=$this->form_validation->set_value('id');
                $data['values']=$this->master_probono_m->get_by_id($id);
            }
        }
        $this->load->view('admin/mst_category_form',$data);
    }

	public function mst_news()
	{
		$data['menu']="master";
		$data['sub_menu']="mst_news";
		$this->load->view('admin/mst_news',$data);
	}

    public function mst_news_form($id=0)
    {
        $this->load->model(array('admin/master_kategori_m', 'admin/master_berita_m'));
        $data['kategori'] =$this->master_kategori_m->get_all();
        if($id){
            //$this->load->model('admin/master_berita_m');
            $this->form_validation->set_data(array(
                'id'    =>  $id
            ));
            $this->form_validation->set_rules('id', 'id kategori', 'trim|required|xss_clean|numeric|htmlentities');

            if ($this->form_validation->run()) {
                $id=$this->form_validation->set_value('id');
                $data['values']=$this->master_berita_m->get_by_id($id);
            }
        }

        $this->load->view('admin/mst_news_form',$data);
    }

    public function mst_news_kategori()
    {
        $data['menu']="master";
        $data['sub_menu']="mst_news_kategori";
        $this->load->view('admin/mst_news_kategori.php',$data);
    }

    public function mst_news_kategori_form($id=0)
    {
        $data['menu']="master";
		$data['sub_menu']="mst_news_kategori_form";
		if($id){
			$this->load->model('admin/master_kategori_m');
			$this->form_validation->set_data(array(
                'id'    =>  $id
            ));
			$this->form_validation->set_rules('id', 'id kategori', 'trim|required|xss_clean|numeric|htmlentities');

			if ($this->form_validation->run()) {
				$id=$this->form_validation->set_value('id');
				$data['values']=$this->master_kategori_m->get_by_id($id);
			}
		}
        $this->load->view('admin/mst_news_kategori_form',$data);
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
