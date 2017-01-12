<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Mapdata_model extends CI_Model {
        
        public function index() {
            
        }
        
        public function getAll() {
            $query = $this->db->get("image");
            return $query->result();
        }
        
//        public function get20() {
//            $query = $this->db->get("image", 5, 0);
//            return $query->result();
//        }
        
        public function get20(){

		    $this -> db -> select('*');
		    $this -> db -> from('image');
            $this->db->order_by("image_ID","desc");
		    $this -> db -> limit(5);
		    $query = $this -> db -> get();
            return $query->result();
    	}
        
        	public function get2my($id){

		    $this -> db -> select('*');
		    $this -> db -> from('log_note_detail');
            $this -> db -> join('image','log_note_detail.image_ID = image.image_ID');
		    $this -> db -> where('log_note_detail.user_ID', $id);
		    $query = $this -> db -> get();
            return $query->result();
    	}
    }
?>