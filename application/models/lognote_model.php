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

    public function get_lognote($note_id){
        $data = array(
            'note_ID' => $note_id
        );
        $query = $this->db->get_where("log_note_detail",$data);
        return $query->result();
    }

    public function get_all_lognote(){
        $query = $this->db->get("log_note_detail");
        return $query->result();
    }

    public function get_user_lognote($user_id){
        $this->db->where("user_ID",$user_id);
        $query = $this->db->get("log_note_detail");
        return $query->result();
    }


    public function update_lognote($newdata,$noteID)
    {
        $this->db->where("note_ID",$noteID);
        $this->db->update("log_note_detail", $newdata);
        if ($this->db->affected_rows() > 0) {
            return true;
        }else{
            return false;
        }
    }

    public function add_comment($comment) {

        $this->db->insert('comment', $comment);
        if ($this->db->affected_rows() > 0) {
            return true;
        }else{
            return false;
        }

    }

    public function select_comment($note_id){
        $data = array(
            'note_ID' => $note_id
        );
        $query = $this->db->get_where("comment",$data);
        return $query->result();
    }

    public function select_by_shape($shape_id){
        $data = array(
            'shape' => $shape_id
        );
        $query = $this->db->get_where("log_note_detail",$data);
        return $query->result();
    }

    public function select_by_province($province){
        $data = array(
            'province' => $province
        );
        $query = $this->db->get_where("log_note_detail",$data);
        return $query->result();
    }

    public function select_by_habitat($habitat){
        $data = array(
            'habbitat' => $habitat
        );
        $query = $this->db->get_where("log_note_detail",$data);
        return $query->result();
    }
}
?>