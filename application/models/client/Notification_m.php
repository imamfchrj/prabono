<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Notification_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    private $table = 'notification';



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

    function update_all_read($user_id,$is_advokat){
        $this->db->where('user_id', $user_id);
        $this->db->where('is_advokat', $is_advokat);
        $data = array("is_read"=>1);
        $this->db->where('is_read', 0);
        $data = $this->db->update($this->table, $data);
        return $data;
    }

    function get_all($user_id,$is_advokat,$limit=0){
        $this->db->where('user_id', $user_id);
        $this->db->where('is_advokat', $is_advokat);
        $this->db->order_by('id', 'DESC');
        if($limit!=0){
            $this->db->limit($limit);
        }
        $query=$this->db->get($this->table);
        if($query){
            return $query->result();
        }
        return false;
    }

    function get_count($user_id,$is_advokat){
        $table="users";
        if($is_advokat){
            $table="users_advokat";
        }
        $this->db->select("notif as count_notif");
        $this->db->where('id', $user_id);
        $query=$this->db->get($table);
        if($query){
            if($query->row()->count_notif)
                return $query->row()->count_notif;
        }
        return 0;
    }

    function set_count($user_id,$is_advokat) {
        $table="users";
        if($is_advokat){
            $table="users_advokat";
        }
		$query = 'UPDATE '.$table.' SET notif = notif + 1 WHERE id = ? LIMIT 1;';
		$this->db->query($query, array($user_id));
    }

    function read_all($user_id,$is_advokat) {
        $table="users";
        if($is_advokat){
            $table="users_advokat";
        }
		$query = 'UPDATE '.$table.' SET notif =0 WHERE id = ? LIMIT 1;';
		$this->db->query($query, array($user_id));
    }

}