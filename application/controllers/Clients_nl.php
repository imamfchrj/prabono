<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clients_nl extends All_Controller {
	
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
        $this->form_validation->set_rules('email', "Incorrect Email", 'trim|required|xss_clean|valid_email|callback__check_email');
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
        $this->form_validation->set_rules('email', "Incorrect Email", 'trim|required|xss_clean|valid_email');
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





}