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
    public function admin_login($username,$password){
        $this->db->where("username", $username);
        $this->db->where("password", $password);
        $this->db->get("admin");
        if ($this->db->affected_rows() > 0) {
            return true;
        }else{
            return false;
        }
    }
    public function count_new_users()
    {
        $this->db->select('*')->from('users')->where('viewed',0);
        $q = $this->db->get();
        return $q->num_rows();

    }
    public function count_new_comments()
    {
        $this->db->select('*')->from('comment')->where('viewd',0);
        $q = $this->db->get();
        return $q->num_rows();

    }
    public function count_new_lognotes()
    {
        $this->db->select('*')->from('log_note_detail')->where('viewed',0);
        $q = $this->db->get();
        return $q->num_rows();

    }
    public function count_new_complains()
    {
        $this->db->select('*')->from('complain')->where('viewed',0);
        $q = $this->db->get();
        return $q->num_rows();

    }
    public function select_new_users()
    {
        $this->db->where('viewed', 0);
        $query = $this->db->get('users');

        return $query->result_array();
    }
    public function viewed($data_id)
    {
        $data = array(
            'viewed' => 1,

        );
        $this->db->where('user_id', $data_id);
        $this->db->update('users', $data);
        // $query = $this->db->query('UPDATE  * FROM users');
        // $this->db->query('UPDATE users SET viewed = 1 WHERE  array("user_id"=>$data_id)');
        // $this->db->where('id', $id);
        //$this->db->update('viewed', 1);
        // return $query->result_array();
    }
    public function approved($data_id)
    {
        $data = array(
            'viewed' => 1,
            'approved' => 1,

        );
        $this->db->where('user_id', $data_id);
        $this->db->update('users', $data);
    }
    public function select_users()
    {
        $this->db->order_by("firstname", "asc");
        $this->db->where('approved', 1);
        $query = $this->db->get('users');

        return $query->result_array();
    }
    public function deleteuser($data_id)
    {
        $data = array(

            'approved' => 0,

        );
        $this->db->where('user_id', $data_id);
        $this->db->update('users', $data);
    }

    public function select_new_comments()
    {
        $this->db->where('viewd', 0);
        $query = $this->db->get('comment');

        return $query->result_array();
    }
    public function approvedcomment($data_id)
    {
        $data = array(
            'viewd' => 1,
            'approved' => 1,

        );
        $this->db->where('comment_ID', $data_id);
        $this->db->update('comment', $data);
    }
    public function rejectcomment($data_id)
    {
        $data = array(
            'viewd' => 1,


        );
        $this->db->where('comment_ID', $data_id);
        $this->db->update('comment', $data);
    }

    public function select_new_complains()
    {
        $this->db->where('viewed', 0);
        $query = $this->db->get('complain');

        return $query->result_array();
    }
    public function viewedcomplain($data_id)
    {
        $data = array(
            'viewed' => 1,


        );
        $this->db->where('complain_ID', $data_id);
        $this->db->update('complain', $data);
    }
}
?>