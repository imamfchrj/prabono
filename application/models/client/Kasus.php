<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Kasus extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    private $table = 'kasus';
    private $table_advokat_profiles = 'advokat_profiles';
    private $table_users_advokat = 'users_advokat';
    private $table_user_profiles = 'user_profiles';
    private $table_users = 'users';



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

    function get_all(){
        $query=$this->db->get($this->table);
        if($query){
            return $query->result();
        }
        return false;
    }

    function get_kasus_by_user_id($user_id,$status=0){
        $this->db->select(
            $this->table.".id,".
            $this->table.".judul,".
            $this->table.".is_kusus,".
            $this->table.".initial_name,".
            $this->table.".kronologi_masalah,".
            $this->table.".ekspektasi_kasus,".
            $this->table.".status,".
            $this->table.".advokat_id,".
            $this->table.".is_banned,".
            $this->table.".note_banned,".
            $this->table.".created_at,".
            $this->table_advokat_profiles.".firstname,".
            $this->table_advokat_profiles.".lastname,".
            $this->table_advokat_profiles.".hp,".
            $this->table_users_advokat.".email,".
            $this->table_user_profiles.".firstname as firstname_client,".
            $this->table_user_profiles.".lastname as lastname_client,".
            $this->table_user_profiles.".hp as hp_client,".
            $this->table_users.".email as email_client"
        );
        $this->db->join($this->table_advokat_profiles,$this->table_advokat_profiles.".id=".$this->table.".advokat_id","left");
        $this->db->join($this->table_users_advokat,$this->table_users_advokat.".id=".$this->table.".advokat_id","left");
        $this->db->join($this->table_user_profiles,$this->table_user_profiles.".user_id=".$this->table.".user_id","left");
        $this->db->join($this->table_users,$this->table_users.".id=".$this->table.".user_id","left");
        if($status){
            $this->db->where($this->table.".status",$status);
        }
        $this->db->where($this->table.'.user_id', $user_id);
        $query=$this->db->get($this->table);
        if($query){
            return $query->result();
        }
        return array();
    }

    


    function get_kasus_by_status($status=0,$user_id=0){
        $this->db->select(
            $this->table.".id,".
            $this->table.".judul,".
            $this->table.".is_kusus,".
            $this->table.".initial_name,".
            $this->table.".kronologi_masalah,".
            $this->table.".ekspektasi_kasus,".
            $this->table.".status,".
            $this->table.".advokat_id,".
            $this->table.".is_banned,".
            $this->table.".note_banned,".
            $this->table.".created_at,".
            $this->table_advokat_profiles.".firstname,".
            $this->table_advokat_profiles.".lastname,".
            $this->table_advokat_profiles.".hp,".
            $this->table_users_advokat.".email,".
            $this->table_user_profiles.".firstname as firstname_client,".
            $this->table_user_profiles.".lastname as lastname_client,".
            $this->table_user_profiles.".hp as hp_client,".
            $this->table_users.".email as email_client"
        );
        $this->db->join($this->table_advokat_profiles,$this->table_advokat_profiles.".id=".$this->table.".advokat_id","left");
        $this->db->join($this->table_users_advokat,$this->table_users_advokat.".id=".$this->table.".advokat_id","left");
        $this->db->join($this->table_user_profiles,$this->table_user_profiles.".user_id=".$this->table.".user_id","left");
        $this->db->join($this->table_users,$this->table_users.".id=".$this->table.".user_id","left");
        if($user_id){
            $this->db->where($this->table.".advokat_id",$user_id);
        }
        if($status){
            $this->db->where($this->table.".status",$status);
        }
        $query=$this->db->get($this->table);
        if($query){
            return $query->result();
        }
        return array();
    }

    function get_kasus_by_status_id_kasus($kasus_id,$status=0){
        $this->db->select(
            $this->table.".id,".
            $this->table.".judul,".
            $this->table.".is_kusus,".
            $this->table.".initial_name,".
            $this->table.".kronologi_masalah,".
            $this->table.".ekspektasi_kasus,".
            $this->table.".status,".
            $this->table.".advokat_id,".
            $this->table.".is_banned,".
            $this->table.".note_banned,".
            $this->table.".created_at,".
            $this->table_advokat_profiles.".firstname,".
            $this->table_advokat_profiles.".lastname,".
            $this->table_advokat_profiles.".hp,".
            $this->table_users_advokat.".email,".
            $this->table_user_profiles.".firstname as firstname_client,".
            $this->table_user_profiles.".lastname as lastname_client,".
            $this->table_user_profiles.".hp as hp_client,".
            $this->table_users.".email as email_client"
        );
        $this->db->join($this->table_advokat_profiles,$this->table_advokat_profiles.".id=".$this->table.".advokat_id","left");
        $this->db->join($this->table_users_advokat,$this->table_users_advokat.".id=".$this->table.".advokat_id","left");
        $this->db->join($this->table_user_profiles,$this->table_user_profiles.".user_id=".$this->table.".user_id","left");
        $this->db->join($this->table_users,$this->table_users.".id=".$this->table.".user_id","left");
        $this->db->where($this->table.'.id', $kasus_id);
        if($status){
            $this->db->where($this->table.".status",$status);
        }
        $query=$this->db->get($this->table);
        if($query){
            return $query->row();
        }
        return array();
    }

    function get_kasus_not_submit($user_id){
        $this->db->where('user_id', $user_id);
        $this->db->where('is_submit', 0);
        $query=$this->db->get($this->table);
        if($query){
            return $query->row();
        }
        return array();
    }

    function delete_by_id($id){
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }

    function delete_by_file($file){
        $this->db->where('file', $file);
        $this->db->delete($this->table);
    }

}