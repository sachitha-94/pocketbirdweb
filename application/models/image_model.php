<?php
class image_model extends CI_Model  {

    public function get_image_link($image_ID){
        $this->db->select("image_link");
        $this->db->where("image_ID", $image_ID);
        $query = $this->db->get("image");
        $image_link = $query->row()->image_link;
        return $image_link;
    }

    public function get_all_images(){
        $query = $this->db->get("image");
        return $query->result();
    }

    public function selet_by_shape($shape_id){
        $data = array(
            'shape' => $shape_id
        );
        $query = $this->db->get_where("log_note_detail",$data);
        return $query->result();
    }

    public function selet_by_province($province){
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