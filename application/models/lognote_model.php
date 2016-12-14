<?php
class lognote_model extends CI_Model  {

    public function user_insert($data) {

        $this->db->insert('users', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }else{
            return false;
        }

    }

    public function get_lognote(){
        $query = $this->db->where("note_ID",2);
        $query = $this->db->get("log_note_detail");
        return $query->result();
    }

    public function update_lognote($newdata,$noteID)
    {

        $this->db->set($newdata);
        $this->db->where("note_ID",$noteID);
        $this->db->update("log_note_detail", $newdata);
        if ($this->db->affected_rows() > 0) {
            return true;
        }else{
            return false;
        }
    }
}
?>