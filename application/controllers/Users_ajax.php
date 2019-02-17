<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_ajax extends Advokat_Controller {
	

	function __construct()
	{
		parent::__construct();
	}
	
	
	
	public function terima_kasus()
	{
		header('Content-Type: application/json');
        $this->form_validation->set_rules('id_kasus', "id_kasus", 'trim|required|xss_clean|is_natural|callback__check_kasus');
        

		if($this->form_validation->run()){
			
			$this->load->model('client/kasus');

            $advokat_id=$this->get_user_id();
            if(!$advokat_id){
                return print(json_encode(array(
                    'is_error'=>true,
                    'error_message'=>  "Silahkan melakukan relogin kembali."
                )));
            }
            $id=$this->form_validation->set_value('id_kasus');
            $data=array(
                "advokat_id"=>$advokat_id,
                "status"=>2
            );
            $kambing=$this->kasus->update_value_by_id($id,$data);

			return print(json_encode(array(
				'is_error'=>true,
                'error_message'=>  $kambing
				
			)));

		}

		return print(json_encode(array(
			'is_error'=>true,
			'error_message'=>  validation_errors()
		)));
    }
    
	function _check_kasus($val){
        $this->db->where("id",$val);
        $this->db->where("status",1);
        $query=$this->db->get("kasus");
		if($query){
            return TRUE;
        }
		$this->form_validation->set_message('_check_kasus', "Kasus Tidak Tersedia.");
		return FALSE;
	}

}