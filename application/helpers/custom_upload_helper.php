<?php


function upload_image($name="userfile"){
    $CI =& get_instance();
    
    $config['upload_path']          = ".".UPLOAD_PATH;
    $config['allowed_types']        = 'gif|jpg|png|psd|jpeg|jpg2|jpe|j2k|jpf|jpm|pdf|svg';
    $config['encrypt_name']         = TRUE;
    // $config['max_size']             = 1000000;
    // $config['max_width']            = 10240;
    // $config['max_height']           = 7680;

    $CI->load->library('upload', $config);

    if ( ! $CI->upload->do_upload($name))
    {
            $error = array('error' => $CI->upload->display_errors());
            return array("is_error"=>"1","error"=>$error);
    }
    else
    {
            $data = $CI->upload->data();
            return array("is_error"=>"0","filename"=>$data["file_name"]);
    }
}
