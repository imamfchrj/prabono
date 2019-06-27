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
    private $table_timesheet = 'advokat_timesheet';

    private function _select_table_kasus()
    {
        $this->db->select(array(
            'a.*'
        ));
        $this->db->from($this->table.' as a');
    }

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

    private function _select_table_aktif()
    {
        $this->db->select('a.*, IF(a.is_kusus=1,"KUSUS","UMUM") as jenis_kasus, (case when a.status=0 then "CLOSED"
             when a.status=1 then "OPEN"
             else "AKTIF"
             end) as status, ba.firstname as user_name, ba.lastname as user_lastname, null as advokat_name, null as advokat_lastname, d.name as kota'
            );
        $this->db->from($this->table.' as a');
        $this->db->join($this->table_users.' as b','b.id=a.user_id');
        $this->db->join($this->table_users_profile.' as ba','ba.user_id=b.id');
        $this->db->join($this->table_regencies.' as d','a.lokasi_kejadian=d.id');
        $this->db->join($this->table_provinces.' as e','d.province_id=e.id');
    }

    private function _select_table_agenda()
    {
        $this->db->select(array(
            'a.*', 'b.judul as judul_kasus',
            'ca.firstname as user_name','ca.lastname as user_lastname','da.firstname as advokat_name','da.lastname as advokat_lastname',
            'ca.hp as hp_user','da.hp as hp_advokat', 'da.id_kta_advokat',
            'TIMESTAMPDIFF(day, a.created_at, now()) as days',
            'CONCAT(FLOOR(TIMESTAMPDIFF(MINUTE,a.fromdate,a.todate)/60),\' h \',MOD(TIMESTAMPDIFF(MINUTE,a.fromdate,a.todate),60),\' m\') as hours'
        ));
        $this->db->from($this->table_agenda.' as a');
        $this->db->join($this->table.' as b','b.id=a.kasus_id');
        $this->db->join($this->table_users.' as c','c.id=b.user_id');
        $this->db->join($this->table_users_profile.' as ca','ca.user_id=c.id');
        $this->db->join($this->table_users_advokat.' as d','d.id=a.advokat_id');
        $this->db->join($this->table_users_advokat_profile.' as da','da.user_id=d.id');
        $this->db->join($this->table_timesheet.' as e','a.id=e.agenda_id');

    }

    private function _select_table_kpi()
    {
        $this->db->select(array(
            'a.*', 'b.judul as judul_kasus',
            'da.firstname as advokat_name','da.lastname as advokat_lastname',
            'da.hp as hp_advokat', 'd.email as advokat_email',
            'CONCAT(FLOOR(sum(TIMESTAMPDIFF(MINUTE,a.fromdate,a.todate))/60),\' h \',MOD(sum(TIMESTAMPDIFF(MINUTE,a.fromdate,a.todate)),60),\' m\') as hours'
        ));
        $this->db->from($this->table_agenda.' as a');
        $this->db->join($this->table.' as b','b.id=a.kasus_id');
        $this->db->join($this->table_users.' as c','c.id=b.user_id');
        $this->db->join($this->table_users_profile.' as ca','ca.user_id=c.id');
        $this->db->join($this->table_users_advokat.' as d','d.id=a.advokat_id');
        $this->db->join($this->table_users_advokat_profile.' as da','da.user_id=d.id');
        $this->db->join($this->table_timesheet.' as e','e.agenda_id=a.id');
    }

    function get_all(){
        $this->_select_table();
        $query=$this->db->get()->result();
        $this->_select_table_aktif();
        $query1=$this->db->get()->result();
        $query2 = array_merge($query, $query1);
        if($query){
            return $query2->result();
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

    function get_all_kpi($id=""){
        $data = array('a.is_accept'=>1,'a.advokat_id'=>$id);
        if($id){
            $this->_select_table_kpi();
            $this->db->where($data);
            $query=$this->db->get();
            if($query){
                return $query->row();
            }
        }else{
            $this->_select_table_kpi();
            $this->db->where('is_accept', 1);
            $this->db->group_by('a.advokat_id');
            $query=$this->db->get();
            if($query){
                return $query->result();
            }
        }
        return false;
    }

    function get_kasus($status){
        $this->_select_table_kasus();
        $this->db->where('a.status', $status);
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

    function get_kpi_by_id($id){
        $this->_select_table_agenda();
        $this->db->where('a.advokat_id', $id);
        $this->db->where('a.is_accept', 1);
        $query=$this->db->get();
        if($query){
            return $query->result();
        }
        return false;
    }

    function get_agenda_by_id($id){
        $this->_select_table_agenda();
        $this->db->where('a.kasus_id', $id);
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