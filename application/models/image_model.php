<?php
class image_model extends CI_Model  {

    public function get_image_link($image_ID){
        $this->db->select("image_link");
        $this->db->where("image_ID", $image_ID);
        $query = $this->db->get("image");
        $image_link = $query->row()->image_link;
        return $image_link;
    }
}