<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Users_Controller extends CI_Controller
{

	function __construct()
	{
        parent::__construct();
		if(!$this->session->userdata('email')){
            redirect();
		}
        if(hashuser($this->session->userdata('email'))!=$this->session->userdata('login_config')){
            redirect('login');
        }
    }
    

	/**
	 * Get user_id
	 *
	 * @return	string
	 */
	function get_user_id()
	{
		return intval($this->session->userdata('user_id'));
	}

	/**
	 * Get username
	 *
	 * @return	string
	 */
	function get_username()
	{
		return $this->session->userdata('username');
	}

	/**
	 * Get email
	 *
	 * @return	string
	 */
	function get_email()
	{
		return $this->session->userdata('email');
    }

	/**
	 * Get login_config
	 *
	 * @return	string
	 */
	function get_login_config()
	{
		return intval($this->session->userdata('login_config'));
    }
    
    function logout_sess(){

        $this->session->sess_destroy();
        
		$this->session->set_userdata(array(
            'user_id'	=> "",
            'username'	=> "",
            'email'		=> "",
            'status'	=> "",
            'login_config' => ""));
    }
    

}