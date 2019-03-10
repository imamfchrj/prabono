<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class List_admin_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    private $table = 'users_admin';

    private function _select_table()
    {
        $this->db->select(array(
            'a.*, (case when a.activated = 1 then "Aktif" ELSE "Non Aktif" END) as status_admin'
        ));
        $this->db->from($this->table.' as a');
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
        $this->db->where('id', $id);
        $query=$this->db->get();
        if($query){
            return $query->row();
        }
        return false;
    }

    function get_all(){
        $this->_select_table();
        $query=$this->db->get();
        if($query){
            return $query->result();
        }
        return false;
    }

    function delete_by_id($id){
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }

}