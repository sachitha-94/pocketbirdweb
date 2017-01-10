<?php
class users_model extends CI_Model  {

    public function user_insert($data) {

        $this->db->insert('users', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }else{
            return false;
        }

    }

    public function get_user_id($username){
        $this->db->select("user_id");
        $this->db->where("username", $username);
        $query = $this->db->get("users");
        $user_id = $query->row()->user_id;
        return $user_id;
    }
    public function user_login($username,$password){
        $this->db->where("username", $username);
        $this->db->where("password", $password);
        $this->db->get("users");
        if ($this->db->affected_rows() > 0) {
            return true;
        }else{
            return false;
        }
    }
}
?>