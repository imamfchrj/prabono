<?php

function hashpass($pass){
	$CI =& get_instance();
    $salt = $CI->config->item('salt');
    $with_love = $CI->config->item('with_love');
    $hashed_value = $with_love.md5($salt.$pass);
    return strtoupper($hashed_value);
}

function hashuser($pass){
	$CI =& get_instance();
    $salt = $CI->config->item('salt')."user";
    $with_love = "USR";
    $hashed_value = $with_love.md5($salt.$pass);
    return strtolower($hashed_value);
}

function hashadvokat($pass){
	$CI =& get_instance();
    $salt = $CI->config->item('salt')."pengacara";
    $with_love = "ADVOKAT";
    $hashed_value = $with_love.md5($salt.$pass);
    return strtolower($hashed_value);
}

function get_from_sess($val){
    if(isset($_SESSION[$val])) {
        return $_SESSION[$val];
    }
    return "";
}

function get_text_gender($id=0){
    $data=array(
        0 => 'Pilih Jenis Kelamin',
        1 => 'Laki-Laki',
        2 => 'Perempuan',
        3 => 'Tidak ingin disebutkan',
    );
    if($id<0 || $id>3){
        $id=0;
    }
    return $data[$id];
}

function cek_checked($val=0){
    if($val){
        return "checked";
    }
    return "";
}