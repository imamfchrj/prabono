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

    public function kategori_delete()
    {
        $this->load->model('admin/master_kategori_m');
        $id=$this->input->post('id');
        $this->master_kategori_m->delete_by_id($id);
    }

    public function berita_get($id="")
    {

        $this->load->model('admin/master_berita_m');
        if($id==""){
            //get all
            $data=$this->master_berita_m->get_all();
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
            $data=$this->master_berita_m->get_by_id($id);
            echo json_encode(array(
                'is_error'=>false,
                'data'=> $data
            ));
            return;
        }else{
            $data=$this->master_berita_m->get_all();
            echo json_encode(array(
                'is_error'=>true,
                'error_message'=>  validation_errors()
            ));
            return;
        }
    }

    public function berita_insert()
    {

        $this->load->model('admin/master_berita_m');
        $this->form_validation->set_rules('id_kategori', 'ID Kategori', 'trim|required|xss_clean|numeric|htmlentities|required');
        $this->form_validation->set_rules('judul', 'Judul Berita', 'trim|required|xss_clean|htmlentities|required');
        $this->form_validation->set_rules('date', 'Tanggal Berita', 'trim|required|xss_clean|htmlentities|required');
        $this->form_validation->set_rules('penulis', 'Penulis Berita', 'trim|xss_clean|htmlentities');
        $this->form_validation->set_rules('tags', 'Tags', 'trim|required|xss_clean|htmlentities');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required|xss_clean|htmlentities|required');

        if ($this->form_validation->run()) {
            $id_kategori=$this->form_validation->set_value('id_kategori');
            $judul=$this->form_validation->set_value('judul');
            $date=$this->form_validation->set_value('date');
            $penulis=$this->form_validation->set_value('penulis');
            $tags=$this->form_validation->set_value('tags');
            $deskripsi=$this->form_validation->set_value('deskripsi');

            $data=array('id_kategori' => $id_kategori,
                        'judul' => $judul,
                        'date' => $date,
                        'penulis' => $penulis,
                        'tags' => $tags,
                        'deskripsi' => $deskripsi
                        );
            $data=$this->master_berita_m->set($data);
            echo json_encode(array(
                'is_error'=>false,
                'id'=>$data
            ));
            return;
        }else{
            $this->load->model('admin/master_berita_m');
            $data=$this->master_berita_m->get_all();
            echo json_encode(array(
                'is_error'=>true,
                'error_message'=>  validation_errors()
            ));
            return;
        }
    }

    public function berita_update()
    {

        $this->load->model('admin/master_berita_m');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('id', 'id berita', 'trim|required|xss_clean|numeric|htmlentities');
        $this->form_validation->set_rules('id_kategori', 'ID Kategori', 'trim|required|xss_clean|numeric|htmlentities|required');
        $this->form_validation->set_rules('judul', 'Judul Berita', 'trim|required|xss_clean|htmlentities|required');
        $this->form_validation->set_rules('date', 'Tanggal Berita', 'trim|required|xss_clean|htmlentities|required');
        $this->form_validation->set_rules('penulis', 'Penulis Berita', 'trim|xss_clean|htmlentities');
        $this->form_validation->set_rules('tags', 'Tags', 'trim|required|xss_clean|htmlentities');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required|xss_clean|htmlentities|required');

        if ($this->form_validation->run()) {

            $id=$this->form_validation->set_value('id');
            $id_kategori=$this->form_validation->set_value('id_kategori');
            $judul=$this->form_validation->set_value('judul');
            $date=$this->form_validation->set_value('date');
            $penulis=$this->form_validation->set_value('penulis');
            $tags=$this->form_validation->set_value('tags');
            $deskripsi=$this->form_validation->set_value('deskripsi');

            $data=array('id_kategori' => $id_kategori,
                        'judul' => $judul,
                        'date' => $date,
                        'penulis' => $penulis,
                        'tags' => $tags,
                        'deskripsi' => $deskripsi
                        );

            $data=$this->master_berita_m->update_value_by_id($id,$data);
            echo json_encode(array(
                'is_error'=>false,
                'id'=>$data
            ));
            return;
        }else{
            $this->load->model('admin/master_berita_m');
            $data=$this->master_berita_m->get_all();
            echo json_encode(array(
                'is_error'=>true,
                'error_message'=>  validation_errors()
            ));
            return;
        }
    }

    public function berita_delete()
    {
        $this->load->model('admin/master_berita_m');
        $id=$this->input->post('id');
        $this->master_berita_m->delete_by_id($id);
    }

    public function probono_get($id="")
    {

        $this->load->model('admin/master_probono_m');
        if($id==""){
            //get all
            $data=$this->master_probono_m->get_all();
            echo json_encode(array(
                'is_error'=>false,
                'data'=> $data
            ));
            return;
        }

        $this->form_validation->set_data(array(
            'id'    =>  $id
        ));
        $this->form_validation->set_rules('id', 'id probono', 'trim|required|xss_clean|numeric|htmlentities');

        if ($this->form_validation->run()) {
            $id=$this->form_validation->set_value('id');
            $data=$this->master_probono_m->get_by_id($id);
            echo json_encode(array(
                'is_error'=>false,
                'data'=> $data
            ));
            return;
        }else{
            $data=$this->master_probono_m->get_all();
            echo json_encode(array(
                'is_error'=>true,
                'error_message'=>  validation_errors()
            ));
            return;
        }
    }

    public function probono_insert()
    {

        $this->load->model('admin/master_probono_m');
        $this->form_validation->set_rules('bidang_keahlian', 'Bidang Keahlian', 'trim|required|xss_clean|htmlentities|required');

        if ($this->form_validation->run()) {
            $bidang_keahlian=$this->form_validation->set_value('bidang_keahlian');

            $data=array('bidang_keahlian' => $bidang_keahlian);

            $data=$this->master_probono_m->set($data);
            echo json_encode(array(
                'is_error'=>false,
                'id'=>$data
            ));
            return;
        }else{
            $this->load->model('admin/master_probono_m');
            $data=$this->master_probono_m->get_all();
            echo json_encode(array(
                'is_error'=>true,
                'error_message'=>  validation_errors()
            ));
            return;
        }
    }



    public function probono_update()
    {

        $this->load->model('admin/master_probono_m');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('id', 'id probono', 'trim|required|xss_clean|numeric|htmlentities');
        $this->form_validation->set_rules('bidang_keahlian', 'Bidang Keahlian', 'trim|required|xss_clean|htmlentities|required');

        if ($this->form_validation->run()) {

            $id=$this->form_validation->set_value('id');
            $bidang_keahlian=$this->form_validation->set_value('bidang_keahlian');

            $data=array('bidang_keahlian' => $bidang_keahlian);

            $data=$this->master_probono_m->update_value_by_id($id,$data);
            echo json_encode(array(
                'is_error'=>false,
                'id'=>$data
            ));
            return;
        }else{
            $this->load->model('admin/master_probono_m');
            $data=$this->master_probono_m->get_all();
            echo json_encode(array(
                'is_error'=>true,
                'error_message'=>  validation_errors()
            ));
            return;
        }
    }

    public function probono_delete()
    {
        $this->load->model('admin/master_probono_m');
        $id=$this->input->post('id');
        $this->master_probono_m->delete_by_id($id);
    }
}
