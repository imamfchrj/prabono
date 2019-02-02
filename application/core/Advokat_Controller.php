<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Advokat_Controller extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
        if(hashadvokat($this->session->userdata('advokat_email'))!=$this->session->userdata('advokat_login_config')){
            redirect();
        }
	}


	/**
	 * Get user_id
	 *
	 * @return	string
	 */
	function get_user_id()
	{
		return intval($this->session->userdata('advokat_user_id'));
	}

	/**
	 * Get username
	 *
	 * @return	string
	 */
	function get_username()
	{
		return $this->session->userdata('advokat_username');
	}

	/**
	 * Get email
	 *
	 * @return	string
	 */
	function get_email()
	{
		return $this->session->userdata('advokat_email');
    }

	/**
	 * Get login_config
	 *
	 * @return	string
	 */
	function get_login_config()
	{
		return intval($this->session->userdata('advokat_login_config'));
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