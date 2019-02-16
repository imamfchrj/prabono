<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Kasus extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    private $table = 'kasus';



    function set($array){
        $this->db->set($array);
        $this->db->insert($this->table);
        return $this->db->insert_id();
    }

    function update_value_by_id($id,$value){
        $data = $value;
        $this->db->where('id', $id);
        $data = $this->db->update($this->table, $data);
        return $data;
    }

    function get_all(){
        $query=$this->db->get($this->table);
        if($query){
            return $query->result();
        }
        return false;
    }

    function get_kasus_by_user_id($user_id){
        $this->db->where('user_id', $user_id);
        $query=$this->db->get($this->table);
        if($query){
            return $query->result();
        }
        return array();
    }

    function get_kasus_by_user_id_kasus($user_id,$kasus_id){
        $this->db->where('user_id', $user_id);
        $this->db->where('id', $kasus_id);
        $query=$this->db->get($this->table);
        if($query){
            return $query->row();
        }
        return array();
    }

    function get_kasus_not_submit($user_id){
        $this->db->where('user_id', $user_id);
        $this->db->where('is_submit', 0);
        $query=$this->db->get($this->table);
        if($query){
            return $query->row();
        }
        return array();
    }

    function delete_by_id($id){
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }

    function delete_by_file($file){
        $this->db->where('file', $file);
        $this->db->delete($this->table);
    }

}