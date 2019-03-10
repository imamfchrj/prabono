<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_nl extends Admin_Controller {
    
    
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
        $this->form_validation->set_rules('g-recaptcha-response', "Captcha", 'required|trim|xss_clean|callback__check_recaptcha');
        $this->form_validation->set_rules('username', "Username", 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', "Password", 'trim|required|xss_clean|min_length[5]|max_length[200]');
        $error=array();
        if ($this->form_validation->run()) {
            $this->load->model('admin/auth');
            $user=$this->auth->get_data_user_by_username($this->form_validation->set_value('username'));
            if($user){
                if($user->password==hashpass_adm($this->form_validation->set_value('password'))){
                    $set_session=array(
                        'user_id_admin'	=> $user->id,
                        'username_admin'	=> $user->username ,
                        'status_admin'	=> $user->activated,
                        'is_admin'	=> true,
                        'login_config' => hashadmin($user->username)
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
            'error_message'=>  "halah"
        ));
        return;
    }


    function _check_recaptcha()
	{
		if(!$_POST['g-recaptcha-response']){
			$this->form_validation->set_message('_check_recaptcha', "Silahkan gunakan capcha");
            return FALSE;
		}
        $response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$this->config->item('recatpcha_secret_key')."&response=" . $_POST['g-recaptcha-response'] . "&remoteip=" . $_SERVER['REMOTE_ADDR']));

		if ($response->success) {
            return TRUE;
        } else {
			$this->form_validation->set_message('_check_recaptcha', "Captcha gagal");
            return FALSE;
        }
    }
    

}