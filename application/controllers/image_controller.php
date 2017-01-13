<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class image_controller extends CI_Controller{

    public function get_image_link($image_ID){
        $this->load->model('image_model');
        $image_link = base_url().'uploads/'.$this->image_model->get_image_link($image_ID);
        $this->load->view('my_log_notes',$image_link);
    }

    public function display_all_images(){
        $this->load->model('image_model');
        $lognote['image'] = $this->image_model->get_all_image();
        $this->load->view('gallery',$lognote);
    }
}