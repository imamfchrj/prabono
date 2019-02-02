<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class All_Controller extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
        $this->load->library('session');
		
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
    


	function _setuju($val){
		if($val==false){
			$this->form_validation->set_message('_setuju', "Silahkan terima Persyaratan dan ketentuan.");
			return FALSE;
		}
		return TRUE;
	}


	function _check_email($val){
		$this->load->config('unallowed_email');
		if(preg_match($this->config->item('unallowed_email_regex'), $val)){ 
			$this->form_validation->set_message('_check_email', __('Email tidak diizinkan'));
			return FALSE;
		}
		$email_used = $this->db->where('email', $val)->get('users')->num_rows();
		if($email_used){
			$this->form_validation->set_message('_check_email', 'Email telah digunakan. Silahkan gunakan Email lain.');
			return FALSE;
		}
		return TRUE;
	}


	function _check_email_advokat($val){
		$this->load->config('unallowed_email');
		if(preg_match($this->config->item('unallowed_email_regex'), $val)){ 
			$this->form_validation->set_message('_check_email_advokat', __('Email tidak diizinkan'));
			return FALSE;
		}
		$email_used = $this->db->where('email', $val)->get('users_advokat')->num_rows();
		if($email_used){
			$this->form_validation->set_message('_check_email_advokat', 'Email telah digunakan. Silahkan gunakan Email lain.');
			return FALSE;
		}
		return TRUE;
	}
	
	function _check_bool($val){

		if($val==FALSE){
			return TRUE;
		}

		if($val==TRUE){
			return TRUE;
		}
		$this->form_validation->set_message('_check_bool', 'Terjadi kesalahan');
		return FALSE;
	}


	
	function _check_hp($val){
		

		if(preg_match('/^08[0-9]{9,}$/', $val)){ 
			return TRUE;
		}
		$this->form_validation->set_message('_check_hp', 'Format no hp salah gunakan 08123456678901');
		return FALSE;
	}
    
    function is_user_logged_in(){
        if(hashuser($this->session->userdata('email'))==$this->session->userdata('login_config')){
            return true;
        }
        return false;
    }


}
	