<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends Admin_Controller {
	

	function __construct()
	{
		parent::__construct();
        if(!$this->session->userdata('username_admin')){
            redirect('admin');
            exit;
        }

        if(!$this->session->userdata('is_admin')){
            redirect('admin');
            exit;
        }
	}
	

	public function dashboard()
	{
		$data['menu']="dashboard";
		$s_aktif=2;
		$s_open=1;
		$s_close=0;
		$gender=1;
        $this->load->model(array('admin/list_client_m',
                                 'admin/list_advokat_m',
                                 'admin/status_probono_m'
                                ));
        $data['client'] =$this->list_client_m->get_all_aktif($gender);
        $data['client_gender'] =$this->list_client_m->get_all_gender();
        $data['advokat'] =$this->list_advokat_m->get_all_aktif();
        $data['advokat_gender'] =$this->list_advokat_m->get_all_gender();
        $data['k_aktif'] =$this->status_probono_m->get_kasus($s_aktif);
        $data['k_open'] =$this->status_probono_m->get_kasus($s_open);
        $data['k_close'] =$this->status_probono_m->get_kasus($s_close);
		$this->load->view('admin/main',$data);
	}

	public function client()
	{
		$data['menu']="client";
		$this->load->view('admin/client',$data);
	}

    public function act_client_profil($id=0)
    {
        $this->load->model(array('admin/list_client_m'));
        $data['profile'] =$this->list_client_m->get_all_aktif();
        if($id){
            $this->form_validation->set_data(array(
                'id'    =>  $id
            ));
            $this->form_validation->set_rules('id', 'id client advokat', 'trim|required|xss_clean|numeric|htmlentities');

            if ($this->form_validation->run()) {
                $id=$this->form_validation->set_value('id');
                $data['values']=$this->list_client_m->get_by_id($id);
            }
        }

        $this->load->view('admin/act_client_profil',$data);
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

    public function act_lawyers_profil($id=0)
    {
        $this->load->model(array('admin/list_advokat_m'));
        $data['profile'] =$this->list_advokat_m->get_all_aktif();
        if($id){
            $this->form_validation->set_data(array(
                'id'    =>  $id
            ));
            $this->form_validation->set_rules('id', 'id profile advokat', 'trim|required|xss_clean|numeric|htmlentities');

            if ($this->form_validation->run()) {
                $id=$this->form_validation->set_value('id');
                $data['values']=$this->list_advokat_m->get_by_id($id);
            }
        }

        $this->load->view('admin/act_lawyers_profil',$data);
    }

	public function kpi_lawyers()
	{
		$data['menu']="lawyers";
		$data['sub_menu']="kpi_lawyers";
		$this->load->view('admin/kpi_lawyers',$data);
	}

    public function kpi_lawyers_detail($id=0)
    {
        $this->load->model(array('admin/status_probono_m',
                                 'admin/list_advokat_m'));
        $data['tes']=$id;
        $data['values'] =$this->status_probono_m->get_kpi_by_id($id);
        $data['kpi'] =$this->status_probono_m->get_all_kpi($id);
        $data['profile'] =$this->list_advokat_m->get_by_user_id($id);
        //echo $this->db->last_query();exit;
        $this->load->view('admin/kpi_lawyers_detail',$data);
    }

	public function approval_lawyers()
	{
		$data['menu']="lawyers";
		$data['sub_menu']="approval_lawyers";
        $this->load->model(array('admin/list_advokat_m'));
        $data['values'] =$this->list_advokat_m->get_all_pending();
        //var_dump($data);exit;
        // echo '<br>'.'<br>'.'<br>'.'<br>'.$this->db->last_query();exit;
		$this->load->view('admin/approval_lawyers',$data);
	}

	public function status_probono()
	{
		$data['menu']="status";
		$this->load->view('admin/status_probono',$data);
	}

    public function tracking_agenda()
    {
        $data['menu']="agenda";
        $this->load->view('admin/tracking_agenda',$data);
    }

	public function complaint()
	{
        $data['menu']="complaint";
        $this->load->model("user/complaint_m");
        $data["complaint"]=$this->complaint_m->get_all_complaint();
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

    public function mst_jasa()
    {
        $data['menu']="master";
        $data['sub_menu']="mst_jasa";
        $this->load->view('admin/mst_jasa',$data);
    }

    public function mst_jasa_form($id=0)
    {
        $this->load->model(array('admin/master_jasa_m'));
        if($id){
            $this->form_validation->set_data(array(
                'id'    =>  $id
            ));
            $this->form_validation->set_rules('id', 'id jasa', 'trim|required|xss_clean|numeric|htmlentities');

            if ($this->form_validation->run()) {
                $id=$this->form_validation->set_value('id');
                $data['values']=$this->master_jasa_m->get_by_id($id);
            }
        }

        $this->load->view('admin/mst_jasa_form',$data);
    }

    public function mst_publikasi()
    {
        $data['menu']="master";
        $data['sub_menu']="mst_publikasi";
        $this->load->view('admin/mst_publikasi',$data);
    }

    public function mst_publikasi_form($id=0)
    {
        $this->load->model(array('admin/master_publikasi_m'));
        if($id){
            $this->form_validation->set_data(array(
                'id'    =>  $id
            ));
            $this->form_validation->set_rules('id', 'id publikasi', 'trim|required|xss_clean|numeric|htmlentities');

            if ($this->form_validation->run()) {
                $id=$this->form_validation->set_value('id');
                $data['values']=$this->master_publikasi_m->get_by_id($id);
            }
        }

        $this->load->view('admin/mst_publikasi_form',$data);
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

	public function logout()
    {
        $this->session->sess_destroy();

        $this->session->set_userdata(array(
            'user_id'	=> "",
            'username'	=> "",
            'status'	=> "",
            'login_config' => ""));
        redirect('admin');
    }

}
