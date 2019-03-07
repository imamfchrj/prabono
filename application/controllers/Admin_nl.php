<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_nl extends All_Controller {
    
    
	function __construct()
	{
        parent::__construct();
        $this->load->library('session');
    }

	public function login()
	{
		$this->load->view('admin/login');
    }

    public function ajax_login(){
        $this->form_validation->set_rules('username', "Username", 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', "Password", 'trim|required|xss_clean|min_length[5]|max_length[200]');
        $error=array();
        if ($this->form_validation->run()) {
            $this->load->model('admin/auth');
            $user=$this->auth->get_data_user_by_username($this->form_validation->set_value('username'));
            if($user){
                if($user->password==hashpass($this->form_validation->set_value('password'))){
                    $set_session=array(
                        'user_id'	=> $user->id,
                        'username'	=> $user->username ,
                        'status'	=> $user->activated,
                        'login_config' => hashuser($user->username)
                    );
                    $this->session->set_userdata($set_session);
                    echo json_encode(array(
                        'is_error'=>false
                    ));
                    return;
                }
                $error[]="Email atau Password salah";
            }else{
                $error[]="Email atau Password salah";
            }

        }
        if(validation_errors()){
            $eror[]=validation_errors();
        }
        echo json_encode(array(
            'is_error'=>true,
            'error_message'=>  $error
        ));
        return;
    }

}