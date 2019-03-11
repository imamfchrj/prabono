<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Auth_advokat extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    private $table = 'users_advokat';
    private $table_advokat_profiles = 'advokat_profiles';

    function create_user($email,$hp,$password){
        $array =array(
            'email'=>$email,
            'password'=>hashpass($password)
        );
        $this->db->set($array);
        $this->db->insert($this->table);
        $id=$this->db->insert_id();
        $data_hp =array(
            'hp'=>$hp,
            'user_id'=>$id
        );
        $this->db->set($data_hp);
        $this->db->insert($this->table_advokat_profiles);
        return $id;
    }


    function get_is_verified_by_id($id){
        $this->db->select("is_verified");
        $this->db->where('user_id', $id);
        $query=$this->db->get($this->table_advokat_profiles);
        if($query){
            return $query->row();
        }
        return false;
    }


    function get_data_user_by_email($email){

        $this->db->select(
            $this->table.".password,".
            $this->table.".id,".
            $this->table.".email,".
            $this->table.".activated,".
            $this->table.".banned,".
            $this->table.".ban_reason,".
            $this->table_advokat_profiles.".firstname,".
            $this->table_advokat_profiles.".lastname,".
            $this->table_advokat_profiles.".foto,".
            $this->table.".username");
        $this->db->where($this->table.'.email', $email);
        $this->db->where($this->table.'.activated', 1);
        $this->db->where($this->table.'.banned', 0);
        $this->db->join($this->table_advokat_profiles,$this->table_advokat_profiles.".user_id=".$this->table.".id","left");
        $query=$this->db->get($this->table);
        if($query){
            return $query->row();
        }
        return false;
    }

    function get_by_email($email){
        $this->db->select("email");
        $this->db->where('email', $email);
        $query=$this->db->get($this->table);
        if($query){
            return $query->row();
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



    function is_verified($id){

        $this->db->select("is_verified");
        $this->db->where($this->table_advokat_profiles.".user_id", $id);
        $query=$this->db->get($this->table_advokat_profiles);
        if($query){
            return $query->row()->is_verified;
        }
        return false;
    }

}