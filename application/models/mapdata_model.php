<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Mapdata_model extends CI_Model {
        
        public function index() {
            
        }
        
        public function getAll() {
            $query = $this->db->get("log_note_detail");
            return $query->result();
        }
        
        
        public function get20(){

		    $this -> db -> select('*');
		    $this -> db -> from('log_note_detail');
            $this->db->order_by("note_ID","desc");
		    $this -> db -> limit(5);
		    $query = $this -> db -> get();
            return $query->result();
    	}
        
        public function get2my($id){

		    $this -> db -> select('*');
		    $this -> db -> from('log_note_detail');
		    $this -> db -> where('user_ID', $id);
		    $query = $this -> db -> get();
            return $query->result();
    	}
        
        public function getAllwithShape($shape) {
            $this -> db -> select('*');
		    $this -> db -> from('log_note_detail');
		    $this -> db -> where('shape', $shape);
		    $query = $this -> db -> get();
            return $query->result();
        }
        
        
        public function get20withShape($shape){

		    $this -> db -> select('*');
		    $this -> db -> from('log_note_detail');
            $this -> db -> where('shape', $shape);
            $this->db->order_by("note_ID","desc");
		    $this -> db -> limit(5);
		    $query = $this -> db -> get();
            return $query->result();
    	}
        
        public function get2mywithShape($id,$shape){

		    $this -> db -> select('*');
		    $this -> db -> from('log_note_detail');
            $this -> db -> where('shape', $shape);
		    $this -> db -> where('user_ID', $id);
		    $query = $this -> db -> get();
            return $query->result();
    	}
        
//        public function selet_by_shape($shape_id){
//            $this -> db -> select('*');
//		    $this -> db -> from('log_note_detail');
//		    $this -> db -> where('shape', $shape_id);
//		    $query = $this -> db -> get();
//            return $query->result();
//        }
        
        
        
    }
        
?>