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
    
    public function ajax_daftar(){
        //gagalkan karena gagal mencoba sebanyak sekian kali sampai jam sekian

        //berhasil daftar
    }

    public function ajax_register(){
        $this->form_validation->set_rules('g-recaptcha-response', "incorect recaptcah", 'trim|xss_clean|callback__check_recaptcha');
        if ($this->form_validation->run()) {	
			echo json_encode(array(
				'is_error'=>false
            ));
            return;
        }

		echo json_encode(array(
            'is_error'=>true,
			'error_message'=>  validation_errors()
        ));
        return;
    }



    function _check_recaptcha()
	{
        $response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$this->config->item('recatpcha_secret_key')."&response=" . $_POST['g-recaptcha-response'] . "&remoteip=" . $_SERVER['REMOTE_ADDR']));

		if ($response->success) {
            return TRUE;
        } else {
			$this->form_validation->set_message('_check_recaptcha', "Captcha gagal");
            return FALSE;
        }
	}


}