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
		$this->load->model('client/kasus');
		$data['kasus']=$this->kasus->get_kasus_not_submit($id);
		if($data['kasus']){
			$data['kasus_id']=$data['kasus']->id;
		}else{
			$data['kasus_id']=0;
		}
		$this->load->model('client/client_file');
		$data['kronologi_masalah_list']=$this->client_file->get_file_by_id_group($id,$data['kasus_id'],"kronologi_masalah_file");
		$this->load->view('client/form',$data);
	}

	public function kasus_aktif()
	{
		$data['menu']="kasus_aktif";
		$id=$this->get_user_id();
		$this->load->model('client/kasus');
		$data['kasus']=$this->kasus->get_kasus_by_user_id($id);
		$this->load->view('client/kasus_client_open',$data);
	}
	
	public function kasus_aktif_singgle($slug)
	{
		$data['menu']="home";
		$id=$this->get_user_id();
		$this->load->model('client/kasus');
		$data['kasus']=$this->kasus->get_kasus_by_user_id_kasus($id,$slug);
		$this->load->model('client/client_file');
		$data['kronologi_masalah_list']=$this->client_file->get_file_by_id_group($id,$slug,"kronologi_masalah_file");
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
	
	public function agenda($slug){
		$data['menu']="agenda";
		$id=$this->get_user_id();
		$this->load->model('client/kasus');
		$this->load->model('user/kasus_agenda_m');
		$data['kasus']=$this->kasus->get_kasus_by_user_id_kasus($id,$slug);
		if($data['kasus']->id){
			$data['agenda']=$this->kasus_agenda_m->get_by_kasus_id($data['kasus']->id);
		}
		$this->load->view('client/kasus_agenda',$data);
	}
	
	public function request($slug){
		$data['menu']="point";

		$id=$this->get_user_id();
		$this->load->model('client/kasus');
		$data['kasus']=$this->kasus->get_kasus_by_user_id_kasus($id,$slug);
		
		$this->load->model('user/advokat_point_m');
		if($data['kasus']->id){
			$data['timesheet']=$this->advokat_point_m->get_by_kasus_id($data['kasus']->id);
		}

		$this->load->view('client/kasus_request',$data);
	}



	public function notification(){
		$data['menu']="notification";

		$id=$this->get_user_id();

		$this->load->model('client/notification_m');
		$this->notification_m->read_all($id,0);
		$data["notification"]=$this->notification_m->get_all($id,0);
		$this->load->view('client/notification',$data);
	}


	


}