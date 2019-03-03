<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Complaint_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }


    private $table_advokat_profiles = 'advokat_profiles';
    private $table_users_advokat = 'users_advokat';
    private $table_user_profiles = 'user_profiles';
    private $table_users = 'users';
    private $table_kasus = 'kasus';
    private $table = 'complaint';


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


    function get_all_complaint(){
        $this->db->select(
            $this->table.".id,".
            $this->table.".description,".
            $this->table.".is_accept,".
            $this->table.".status,".
            $this->table.".created_at,".
            $this->table.".is_user,".
            $this->table_kasus.".id as kasus_id,".
            $this->table_kasus.".judul,".
            $this->table_kasus.".is_kusus,".
            $this->table_kasus.".initial_name,".
            $this->table_kasus.".kronologi_masalah,".
            $this->table_kasus.".ekspektasi_kasus,".
            $this->table_kasus.".status,".
            $this->table_kasus.".advokat_id,".
            $this->table_kasus.".is_banned,".
            $this->table_kasus.".note_banned,".
            $this->table_kasus.".created_at,".
            $this->table_advokat_profiles.".firstname,".
            $this->table_advokat_profiles.".lastname,".
            $this->table_advokat_profiles.".hp,".
            $this->table_users_advokat.".email,".
            $this->table_user_profiles.".firstname as firstname_client,".
            $this->table_user_profiles.".lastname as lastname_client,".
            $this->table_user_profiles.".hp as hp_client,".
            $this->table_users.".email as email_client"
        );
        $this->db->where($this->table.".is_accept","0");
        $this->db->join($this->table_advokat_profiles,$this->table_advokat_profiles.".id=".$this->table.".advokat_id","left");
        $this->db->join($this->table_users_advokat,$this->table_users_advokat.".id=".$this->table.".advokat_id","left");
        $this->db->join($this->table_user_profiles,$this->table_user_profiles.".user_id=".$this->table.".user_id","left");
        $this->db->join($this->table_users,$this->table_users.".id=".$this->table.".user_id","left");
        $this->db->join($this->table_kasus,$this->table_kasus.".id=".$this->table.".kasus_id","left");
        $this->db->order_by( $this->table.'.id', 'DESC');
        $query=$this->db->get($this->table);
        if($query){
            return $query->result();
        }
        return false;
    }

}