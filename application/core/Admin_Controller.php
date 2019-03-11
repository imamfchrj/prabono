<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Admin_Controller extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		
	}



	/**
	 * Get user_id
	 *
	 * @return	string
	 */
	function get_user_id()
	{
		return intval($this->session->userdata('user_id_admin'));
	}

	/**
	 * Get username
	 *
	 * @return	string
	 */
	function get_username()
	{
		return $this->session->userdata('username_admin');
	}

	/**
	 * Get email
	 *
	 * @return	string
	 */
	function get_email()
	{
		return $this->session->userdata('email_admin');
    }



}