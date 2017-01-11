<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Mapdata_model extends CI_Model {
        
        public function index() {
            
        }
        
        public function getAll() {
            $query = $this->db->get("image");
            return $query->result();
        }
    }
?>