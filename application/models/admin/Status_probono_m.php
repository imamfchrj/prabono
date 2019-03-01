<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Status_probono_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    private $table = 'kasus';
    private $table_users = 'users';
    private $table_users_profile = 'user_profiles';
    private $table_users_advokat = 'users_advokat';
    private $table_users_advokat_profile = 'advokat_profiles';
    private $table_provinces = 'provinces';
    private $table_regencies = 'regencies';
    private $table_agenda = 'kasus_agenda';

    private function _select_table()
    {
        $this->db->select(array(
            'a.*','IF(a.is_kusus=1,"KUSUS","UMUM") as jenis_kasus',
            '(case when a.status=0 then "CLOSED"
             when a.status=1 then "OPEN"
             else "AKTIF"
             end) as status',
            'ba.firstname as user_name','ba.lastname as user_lastname','ca.firstname as advokat_name','ca.lastname as advokat_lastname',
            'd.name as kota'
        ));
        $this->db->from($this->table.' as a');
        $this->db->join($this->table_users.' as b','b.id=a.user_id');
        $this->db->join($this->table_users_profile.' as ba','ba.user_id=b.id');
        $this->db->join($this->table_users_advokat.' as c','a.advokat_id=c.id');
        $this->db->join($this->table_users_advokat_profile.' as ca','ca.user_id=c.id');
        $this->db->join($this->table_regencies.' as d','a.lokasi_kejadian=d.id');
        $this->db->join($this->table_provinces.' as e','d.province_id=e.id');
    }

    private function _select_table_agenda()
    {
        $this->db->select(array(
            'a.*', 'b.judul as judul_kasus',
            'ca.firstname as user_name','ca.lastname as user_lastname','da.firstname as advokat_name','da.lastname as advokat_lastname',
            'ca.hp as hp_user','da.hp as hp_advokat'
        ));
        $this->db->from($this->table_agenda.' as a');
        $this->db->join($this->table.' as b','b.id=a.kasus_id');
        $this->db->join($this->table_users.' as c','c.id=b.user_id');
        $this->db->join($this->table_users_profile.' as ca','ca.user_id=c.id');
        $this->db->join($this->table_users_advokat.' as d','d.id=a.advokat_id');
        $this->db->join($this->table_users_advokat_profile.' as da','da.user_id=d.id');

    }

    function get_all(){
        $this->_select_table();
        $query=$this->db->get();
        if($query){
            return $query->result();
        }
        return false;
    }

    function get_all_agenda(){
        $this->_select_table_agenda();
        $this->db->where('is_accept', 0);
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