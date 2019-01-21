<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include_once('Api_Controller.php');

class Admin_api extends Api_Controller {
	

	function __construct()
	{
		parent::__construct();
		
    }
    
	public function kategori_get($id="")
	{

        $this->load->model('admin/master_kategori_m');
		if($id==""){
            //get all
            $data=$this->master_kategori_m->get_all();
			echo json_encode(array(
				'is_error'=>false,
				'data'=> $data
            ));
            return;
        }

        $this->form_validation->set_data(array(
                'id'    =>  $id
            ));
        $this->form_validation->set_rules('id', 'id kategori', 'trim|required|xss_clean|numeric|htmlentities');

		if ($this->form_validation->run()) {
            $id=$this->form_validation->set_value('id');
            $data=$this->master_kategori_m->get_by_id($id);
            echo json_encode(array(
                'is_error'=>false,
                'data'=> $data
            ));
            return;
        }else{
            $data=$this->master_kategori_m->get_all();
			echo json_encode(array(
				'is_error'=>true,
				'error_message'=>  validation_errors()
            ));
            return;
        }
    }
    
    public function kategori_insert()
	{

        $this->load->model('admin/master_kategori_m');
        $this->form_validation->set_rules('judul_kategori', 'Judul Kategori', 'trim|required|xss_clean|htmlentities|required');

		if ($this->form_validation->run()) {
            $judul_kategori=$this->form_validation->set_value('judul_kategori');

            $data=array('judul_kategori' => $judul_kategori);
            
            $data=$this->master_kategori_m->set($data);
            echo json_encode(array(
                'is_error'=>false,
                'id'=>$data
            ));
            return;
        }else{
            $this->load->model('admin/master_kategori_m');
            $data=$this->master_kategori_m->get_all();
			echo json_encode(array(
				'is_error'=>true,
				'error_message'=>  validation_errors()
            ));
            return;
        }
    }
    

    
    public function kategori_update()
	{

        $this->load->model('admin/master_kategori_m');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('id', 'id kategori', 'trim|required|xss_clean|numeric|htmlentities');
        $this->form_validation->set_rules('judul_kategori', 'Judul Kategori', 'trim|required|xss_clean|htmlentities|required');

		if ($this->form_validation->run()) {
            
            $id=$this->form_validation->set_value('id');
            $judul_kategori=$this->form_validation->set_value('judul_kategori');

            $data=array('judul_kategori' => $judul_kategori);
            
            $data=$this->master_kategori_m->update_value_by_id($id,$data);
            echo json_encode(array(
                'is_error'=>false,
                'id'=>$data
            ));
            return;
        }else{
            $this->load->model('admin/master_kategori_m');
            $data=$this->master_kategori_m->get_all();
			echo json_encode(array(
				'is_error'=>true,
				'error_message'=>  validation_errors()
            ));
            return;
        }
	}
}
