<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clients_nl extends All_Controller {
    
    
	function __construct()
	{
        parent::__construct();
        $this->load->library('session');
		// if($this->is_user_logged_in()){
        //     redirect(DEFAULT_PAGE_USER);
        //     exit;
        // }
    }
    
	public function register()
	{
		$data['menu']="home";
		$this->load->view('client/daftar',$data);
    }
    
	public function register_advokat()
	{
		$data['menu']="home";
		$this->load->view('client/daftar_advokat',$data);
	}

	public function login()
	{
		$data['menu']="home";
		$this->load->view('client/login',$data);
    }

    public function ajax_register(){
        $this->form_validation->set_rules('g-recaptcha-response', "Captcha", 'required|trim|xss_clean|callback__check_recaptcha');
        $this->form_validation->set_rules('email', "Email", 'trim|required|xss_clean|callback__check_email');
        $this->form_validation->set_rules('password', "Password", 'trim|required|xss_clean|min_length[8]|max_length[200]');
        $this->form_validation->set_rules('setuju',"accept Term & Service", 'callback__setuju');
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



    public function ajax_register_advokat(){
        $this->form_validation->set_rules('g-recaptcha-response', "Captcha", 'required|trim|xss_clean|callback__check_recaptcha');
        $this->form_validation->set_rules('email', "Email", 'trim|required|xss_clean|callback__check_email_advokat');
        $this->form_validation->set_rules('hp', "hp", 'trim|required|xss_clean|callback__check_hp');
        $this->form_validation->set_rules('password', "Password", 'trim|required|xss_clean|min_length[8]|max_length[200]');
        $this->form_validation->set_rules('setuju',"accept Term & Service", 'callback__setuju');
        if ($this->form_validation->run()) {	
            $this->load->model('user/auth_advokat');
            if($this->auth_advokat->create_user(
                $this->form_validation->set_value('email'),
                $this->form_validation->set_value('hp'),
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
        /*
        if user set true=client else false it will be advokat
        */

        if( get_from_sess("user_id") ){
            echo json_encode(array(
                'is_error'=>false
            ));
            return;
        }
        if( get_from_sess("advokat_user_id") ){
            echo json_encode(array(
                'is_error'=>false
            ));
            return;
        }

        $user_set=$this->input->post('user_set');
        if($user_set=="true"){
            $this->user_login();
        }else{
            $this->advokat_login();
        }
    }
        

    private function user_login(){
        $this->form_validation->set_rules('user_set', "user value", 'required|trim|xss_clean|callback__check_bool');
        $this->form_validation->set_rules('g-recaptcha-response', "Captcha", 'required|trim|xss_clean|callback__check_recaptcha');
        $this->form_validation->set_rules('email', "Email", 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', "Password", 'trim|required|xss_clean|min_length[8]|max_length[200]');
        $error=array();
        if ($this->form_validation->run()) {	
            $this->load->model('user/auth');
            $user=$this->auth->get_data_user_by_email($this->form_validation->set_value('email'));
            if($user){
                if($user->password==hashpass($this->form_validation->set_value('password'))){
                    $set_session=array(
                        'user_id'	=> $user->id,
                        'username'	=> $user->firstname . " " . $user->lastname ,
                        'email'		=> $user->email,
                        'status'	=> $user->activated,
                        'login_config' => hashuser($user->email)
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


    private function advokat_login(){
        $this->form_validation->set_rules('user_set', "user value", 'required|trim|xss_clean|callback__check_bool');
        $this->form_validation->set_rules('g-recaptcha-response', "Captcha", 'required|trim|xss_clean|callback__check_recaptcha');
        $this->form_validation->set_rules('email', "Email", 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', "Password", 'trim|required|xss_clean|min_length[8]|max_length[200]');
        $error=array();
        if ($this->form_validation->run()) {	
            $this->load->model('user/auth_advokat');
            $user=$this->auth_advokat->get_data_user_by_email($this->form_validation->set_value('email'));
            if($user){
                if($user->password==hashpass($this->form_validation->set_value('password'))){
                    $set_session=array(
                        'advokat_user_id'	=> $user->id,
                        'advokat_username'	=> $user->firstname . " " . $user->lastname ,
                        'advokat_email'		=> $user->email,
                        'advokat_status'	=> $user->activated,
                        'advokat_login_config' => hashadvokat($user->email)
                    );
                    echo json_encode(array(
                        'is_error'=>false
                    ));
					$this->session->set_userdata($set_session);
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