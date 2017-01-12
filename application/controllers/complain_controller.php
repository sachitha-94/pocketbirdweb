<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class complain_controller extends CI_Controller {

    public function add_complain(){
        $this->load->model('complain_model');
        $this->load->model('users_model');
        $complain = array(
            'user_ID' => $this->users_model->get_user_id($this->session->userdata('username')),
            'time' => date('H:i:s', now()),
            'date' => date('Y-m-d ', now()),
            'content' => "",
            'viewed' => 0,
            'apprved' => 0
        ) ;

        $result = $this->complain_model->add_complain($complain);
        if ($result == true) {
            $this->load->view('home');
        }else{
            $this->load->view('complain_form');
        }
    }

}
