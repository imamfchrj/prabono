<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clients_nl extends All_Controller {
    
    
	function __construct()
	{
        parent::__construct();
        $this->load->library('session');
		if($this->is_user_logged_in()){
            redirect(DEFAULT_PAGE_USER);
            exit;
        }
    }
    
	public function register()
	{
		$data['menu']="home";
		$this->load->view('client/daftar',$data);
	}

	public function login()
	{
		$data['menu']="home";
		$this->load->view('client/login',$data);
    }

    public function ajax_register(){
        $this->form_validation->set_rules('g-recaptcha-response', "incorect captcha", 'required|trim|xss_clean|callback__check_recaptcha');
        $this->form_validation->set_rules('email', "Incorrect Email", 'trim|required|xss_clean|callback__check_email');
        $this->form_validation->set_rules('password', "Incorrect Password", 'trim|required|xss_clean|min_length[8]|max_length[200]');
        $this->form_validation->set_rules('setuju',"Incorrect accept Term & Service", 'callback__setuju');
        if ($this->form_validation->run()) {	
            $this->load->model('user/auth');
            if($this->auth->create_user(
                $this->form_validation->set_value('email'),
                $this->form_validation->set_value('password')
            )){
                echo json_encode(array(
                    'is_error'=>false
                ));
                return;
            }
			
        }

		echo json_encode(array(
            'is_error'=>true,
			'error_message'=>  validation_errors()
        ));
        return;
    }



    public function ajax_login(){
        $this->form_validation->set_rules('g-recaptcha-response', "incorect captcha", 'required|trim|xss_clean|callback__check_recaptcha');
        $this->form_validation->set_rules('email', "Incorrect Email", 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', "Incorrect Password", 'trim|required|xss_clean|min_length[8]|max_length[200]');
        $error=array();
        if ($this->form_validation->run()) {	
            $this->load->model('user/auth');
            $user=$this->auth->get_data_user_by_email($this->form_validation->set_value('email'));
            if($user){
                if($user->password==hashpass($this->form_validation->set_value('password'))){
                    if(!$user->username){
                        $user->username=$user->email;
                    }
                    $set_session=array(
                        'user_id'	=> $user->id,
                        'username'	=> $user->username,
                        'email'		=> $user->email,
                        'status'	=> $user->activated,
                        'login_config' => hashuser($user->email)
                    );
					$this->session->set_userdata($set_session);
                    echo json_encode(array(
                        'is_error'=>false,
                        'data'=>$set_session
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