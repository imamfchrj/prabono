<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Advokat_profiler extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    private $table_advokat_profiles = 'advokat_profiles';
    private $table_users_advokat = 'users_advokat';

    function update_profile($id,$value){
        $this->db->where('user_id', $id);
        $data = $this->db->update($this->table_advokat_profiles, $value);
        return $data;
    }

    function get_by_id($id){
        $this->db->select("*");
        $this->db->where('user_id', $id);
        $query=$this->db->get($this->table_advokat_profiles);
        if($query){
            return $query->row();
        }
        return array();
    }

    function get_user_by_id($id){
        $this->db->select("email,username");
        $this->db->where('id', $id);
        $query=$this->db->get($this->table_users_advokat);
        if($query){
            return $query->row();
        }
        return array();

    }

}