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
			$this->form_validation->set_message('_setuju', "Accept Term & Services");
			return FALSE;
		}
		return TRUE;
	}


	function _check_email($val){
		// $this->load->config('unallowed_email');
		// if(preg_match($this->config->item('unallowed_email_regex'), $val)){ 
		// 	$this->form_validation->set_message('_allowed_email', __('Email is not allowed'));
		// 	return FALSE;
		// }
		$email_used = $this->db->where('email', $val)->get('users')->num_rows();
		if($email_used){
			$this->form_validation->set_message('_allowed_email', __('Email is already used, please enter other email account'));
			return FALSE;
		}
		return TRUE;
    }
    
    function is_user_logged_in(){
        if(hashuser($this->session->userdata('email'))==$this->session->userdata('login_config')){
            return true;
        }
        return false;
    }


}
	