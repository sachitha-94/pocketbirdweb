<?php
class Map extends CI_Controller {
    public function index() {
        
        $type = $_POST['INS_TYPE'];
        $user = "12";
        if($type == "allupload"){
            $this->load->model('Mapdata_model');
            $data['mapdata'] = $this->Mapdata_model->getAll();
            $this->load->view('map', $data);
            
        }else if($type == "recentupload"){
            $this->load->model('Mapdata_model');
            $data['mapdata'] = $this->Mapdata_model->get20();
            $this->load->view('map', $data);
            
        }else if($type == "myupload"){
            $this->load->model('Mapdata_model');
            $data['mapdata'] = $this->Mapdata_model->get2my($user);
            $this->load->view('map', $data);
        }
    }
}

?>