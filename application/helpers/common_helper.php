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

function convert_date($end_date, $start_date){
    $timing =strtotime($end_date)-strtotime($start_date);
    $hour = floor($timing/3600);
    $minute = floor(($timing%3600)/60);
    return $hour . " Jam " . $minute ." Menit";
}


function send_notif($user_id,$href,$description,$icon="info",$is_advokat=1){
	$CI =& get_instance();
    $CI->load->model('client/notification_m');
    switch ($icon) {
        case "info":
            $icon="fa-info text-aqua";
            break;
        case "agenda":
            $icon="fa-calendar text-yellow";
            break;
        case "client":
            $icon="fa-calendar text-green";
            break;
        case "advokat":
            $icon="fa-users text-blue";
            break;
        default:
        $icon="fa-info text-blue";
    }
    $data = array(
        "user_id"=>$user_id,
        "is_advokat"=>$is_advokat,
        "icon"=>$icon,
        "href"=>$href,
        "description"=>$description,
        "is_read"=>0,
    );

    $CI->notification_m->set($data);
}

function get_notif($user_id,$id_advokat,$is_advokat=0){
	$CI =& get_instance();
    $CI->load->model('client/notification_m');
    $data=$CI->notification_m->get_all($user_id,$is_advokat,4);
    $html='<ul class="menu">';
    foreach($data as $list){
        $html=$html.'<li>';
        $html=$html.'<a href="'.base_url().$list->href.'">';
        $html=$html.'<i class="fa '.$list->icon.'"></i>  '.$list->description;
        $html=$html.'</a>';
        $html=$html.'</li>';
    }
    $html=$html.'</ul>';
    $count=$CI->notification_m->get_count($user_id,$is_advokat);
    $data['html']=$html;
    $data['count']=$count;
    return $data;
}

