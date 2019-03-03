<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_nl extends All_Controller {
    
    
	function __construct()
	{
        parent::__construct();
        $this->load->library('session');
		if($this->is_user_logged_in()){
            redirect(DEFAULT_PAGE_USER);
            exit;
        }
    }

	public function login()
	{
		$this->load->view('admin/login');
    }

}