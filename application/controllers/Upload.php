<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }


        public function do_upload()
        {
            $this->load->helper('custom_upload');
            echo json_encode(upload_image());
        }
}
?>