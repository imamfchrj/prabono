<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clients extends Users_Controller {
	

	function __construct()
	{
		parent::__construct();
	}
	
	public function form()
	{
		$data['menu']="home";
		
		$this->load->model('admin/Master_province_m');
		$data['provinces']=$this->Master_province_m->get_all();
		$this->load->model('client/client_profiler');
		$id=$this->get_user_id();
		$data['profile']=$this->client_profiler->get_by_id($id);
		$this->load->view('client/form',$data);
	}
	public function kasus_aktif()
	{
		$data['menu']="home";
		$this->load->view('client/kasus_client',$data);
	}
	public function kasus_aktif_singgle($slug)
	{
		$data['menu']="home";
		$this->load->view('client/kasus_client_singgle',$data);
	}

	public function logout(){
		$this->logout_sess();
		redirect();
	}

    public function get_by_provinces()
    {
        $this->load->model('admin/Master_regencies_m');
        $provinces = $this->input->post('province');
        $result = $this->Master_regencies_m->get_by_provinces($provinces);
        //echo $this->db->last_query();exit;
        echo "<option value='0'> Pilih Kota </option>";
        foreach($result as $row)
            echo "<option value='".$row->id."'>".strtoupper($row->name)."</option>";
    }


}