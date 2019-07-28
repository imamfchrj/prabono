<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_client_m extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    private $table = 'user_profiles';
    private $table_users = 'users';
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

    private function _select_table_gender()
    {
        $this->db->select(array(
            'a.gender, (case when a.gender=1 then "Laki-Laki"
             when a.gender=2 then "Perempuan"
             else "Tidak ingin disebutkan"
             end) as client_gender, count(*) as no_of_gender'
        ));
        $this->db->from($this->table.' as a');
        $this->db->join($this->table_users.' as b','b.id=a.user_id');
        $this->db->join($this->table_province.' as c','a.province=c.id', 'left');
    }

    function get_all_aktif($data){
        $this->_select_table();
        if($data){
            $this->db->where('a.gender is NOT NULL', NULL, FALSE);
        }
        //$this->db->where('a.is_verified',1);
        $query=$this->db->get();
        if($query){
            return $query->result();
        }
        return false;
    }

    function get_all_gender(){
        $this->_select_table_gender();
        $this->db->where('a.gender is NOT NULL', NULL, FALSE);
        $this->db->group_by('a.gender');
        $this->db->order_by('a.gender','ASC');
        $query=$this->db->get();
//        echo $this->db->last_query();exit;
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

    function update_value_by_id_user($id,$value){
        $data = $value;
        $this->db->where('id', $id);
        $data = $this->db->update($this->table_users, $data);
        return $data;
    }

}
