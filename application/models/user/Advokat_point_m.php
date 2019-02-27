<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Advokat_point_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    private $table = 'advokat_timesheet';
    private $table_kasus_agenda = 'kasus_agenda';


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


    function get_by_kasus_id($id){
        $this->db->select(
            $this->table.".id,".
            $this->table_kasus_agenda.".kasus_id,".
            $this->table_kasus_agenda.".title,".
            $this->table_kasus_agenda.".is_accept,".
            $this->table_kasus_agenda.".fromdate,".
            $this->table_kasus_agenda.".todate,".
            $this->table_kasus_agenda.".advokat_id,".
            $this->table_kasus_agenda.".id as 'agenda_id'"
        );
        $this->db->where($this->table_kasus_agenda.'.kasus_id', $id);
        $this->db->join($this->table,$this->table.".agenda_id=".$this->table_kasus_agenda.".id","left");
        $query=$this->db->get($this->table_kasus_agenda);
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