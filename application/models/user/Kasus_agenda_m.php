<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Kasus_agenda_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    private $table = 'kasus_agenda';
    private $table_advokat_timesheet = 'advokat_timesheet';


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
            $this->table.".kasus_id,".
            $this->table.".title,".
            $this->table.".is_accept,".
            $this->table.".fromdate,".
            $this->table.".todate,".
            $this->table.".advokat_id,".
            $this->table_advokat_timesheet.".agenda_id"
            // $this->table_kasus_agenda.".id as 'agenda_id'"
        );
        $this->db->where('kasus_id', $id);
        $this->db->join($this->table_advokat_timesheet,$this->table.".id=".$this->table_advokat_timesheet.".agenda_id","left");
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