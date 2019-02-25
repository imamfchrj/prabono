<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class List_advokat_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    private $table = 'advokat_profiles';
    private $table_biography = 'advokat_profiles_file_biography';
    private $table_education = 'advokat_profiles_file_education';
    private $table_users = 'users_advokat';
    private $table_province = 'provinces';

    private function _select_table()
    {
        $this->db->select(array(
            'a.*','b.username','b.email','c.name'
        ));
        $this->db->from($this->table.' as a');
        $this->db->join($this->table_users.' as b','b.id=a.user_id');
        $this->db->join($this->table_province.' as c','a.province=c.id', 'left');
    }

    function get_all_aktif(){
        $this->_select_table();
        $this->db->where('a.is_verified',1);
        $query=$this->db->get();
        if($query){
            return $query->result();
        }
        return false;
    }

    function get_all_pending(){
        $this->_select_table();
        $this->db->where('a.is_verified',0);
        $query=$this->db->get();
        if($query){
            return $query->result();
        }
        return false;
    }

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

    function get_by_id($id){
        $this->_select_table();
        $this->db->where('a.id', $id);
        $query=$this->db->get($this->table);
        if($query){
            return $query->row();
        }
        return false;
    }

    function delete_by_id($id){
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }

}