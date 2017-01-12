<?php
class complain_model extends CI_Model{

    public function add_complain($complain){
        $this->db->insert('complain', $complain);
        if ($this->db->affected_rows() > 0) {
            return true;
        }else{
            return false;
        }
    }
}