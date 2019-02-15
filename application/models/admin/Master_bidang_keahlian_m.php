<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Master_bidang_keahlian_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    private $table = 'master_bidang_keahlian';
    private $table_advokat_bidang_keahlian = 'advokat_bidang_keahlian';


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
        $this->db->where('id', $id);
        $query=$this->db->get($this->table);
        if($query){
            return $query->row();
        }
        return false;
    }

    function set_bidang_keahlian($data,$user_id){
        $this->db->where('id', $data['bidang_keahlian']);
        $query=$this->db->get($this->table);
        if(!$query->row()){
            return FALSE;
        }
        if($data['value']){
            $this->db->where('user_id', $user_id);
            $this->db->where('bidang_keahlian', $data['bidang_keahlian']);
            $query=$this->db->get($this->table_advokat_bidang_keahlian);
            if($query->row()){
                return FALSE;
            }
            $array = array(
                "user_id"=>$user_id,
                "bidang_keahlian"=>$data['bidang_keahlian']
            );
            $this->db->set($array);
            $this->db->insert($this->table_advokat_bidang_keahlian);
            return TRUE;
        }
        $this->db->where('user_id', $user_id);
        $this->db->where('bidang_keahlian', $data['bidang_keahlian']);
        $this->db->delete($this->table_advokat_bidang_keahlian);
        return TRUE;
    }

    function get_all_by_id($user_id){
        $this->db->select(
            $this->table.".id,".
            $this->table.".bidang_keahlian,".
            $this->table_advokat_bidang_keahlian.".user_id"
        );
        $this->db->join('(select * from '.$this->table_advokat_bidang_keahlian.' where '.$this->table_advokat_bidang_keahlian.".user_id=". $user_id.") as ".$this->table_advokat_bidang_keahlian, $this->table_advokat_bidang_keahlian.'.bidang_keahlian = '.$this->table.'.id', 'left');
        $this->db->order_by($this->table.".id ASC");
        $query=$this->db->get($this->table);
        if($query){
            return $query->result();
        }
        return false;
    }

    function get_all(){
        $query=$this->db->get($this->table);
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