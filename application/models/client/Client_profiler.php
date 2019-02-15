<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Client_profiler extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    private $table_user_profile = 'user_profiles';
    private $table_users = 'users';

    function update_profile($id,$value){
        $this->db->where('user_id', $id);
        $data = $this->db->update($this->table_user_profile, $value);
        return $data;
    }

    function get_by_id($id){
        $this->db->select("*");
        $this->db->where('user_id', $id);
        $query=$this->db->get($this->table_user_profile);
        if($query){
            return $query->row();
        }
        return array();
    }

    function get_user_by_id($id){
        $this->db->select("email,username");
        $this->db->where('id', $id);
        $query=$this->db->get($this->table_users);
        if($query){
            return $query->row();
        }
        return array();

    }

}