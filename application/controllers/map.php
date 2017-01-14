<?php
class Map extends CI_Controller {
    public function index() {
        
        $type = $_POST['INS_TYPE'];
        $shape = $_POST['shape'];
        
        if($shape == "All"){
            if($type == "allupload"){
                $this->load->model('Mapdata_model');
                $data['mapdata'] = $this->Mapdata_model->getAll();
                
                $data['type'] = $type;
                $data['shape'] = $shape;
                $this->load->view('map', $data);

            }else if($type == "recentupload"){
                $this->load->model('Mapdata_model');
                $data['mapdata'] = $this->Mapdata_model->get20();
                
                $data['type'] = $type;
                $data['shape'] = $shape;
                $this->load->view('map', $data);

            }else if($type == "myupload"){
                $this->load->model('Mapdata_model');
                $this->load->model('users_model');
                if ($this->session->has_userdata('username')) {
                    $username = $this->session->userdata('username');
                    $user_id = $this->users_model->get_user_id($username);

                    $data['mapdata'] = $this->Mapdata_model->get2my($user_id);
                    
                    $data['type'] = $type;
                    $data['shape'] = $shape;
                    $this->load->view('map', $data);

                }else{
                    $this->load->view('login_error');
                }     
            }
        }
        
        else{
            if($type == "allupload"){
                $this->load->model('Mapdata_model');
                $data['mapdata'] = $this->Mapdata_model->getAllwithShape($shape);
                $data['type'] = $type;
                $data['shape'] = $shape;
                
                $this->load->view('map', $data);

            }else if($type == "recentupload"){
                $this->load->model('Mapdata_model');
                $data['mapdata'] = $this->Mapdata_model->get20withShape($shape);
                
                $data['type'] = $type;
                $data['shape'] = $shape;
                $this->load->view('map', $data);

            }else if($type == "myupload"){
                $this->load->model('Mapdata_model');
                $this->load->model('users_model');
                if ($this->session->has_userdata('username')) {
                    $username = $this->session->userdata('username');
                    $user_id = $this->users_model->get_user_id($username);

                    $data['mapdata'] = $this->Mapdata_model->get2mywithShape($user_id,$shape);
                    
                    $data['type'] = $type;
                    $data['shape'] = $shape;
                    $this->load->view('map', $data);

                }else{
                    $this->load->view('login_error');
                }     
            }
        }
    }
    
    public function search_by_shape(){
         
        $this->load->model('Mapdata_model');
        $shape_id = $this->input->post('shape');
        $data['mapdata'] = $this->Mapdata_model->selet_by_shape($shape_id);
        $this->load->view('map', $data);
    }
}

?>