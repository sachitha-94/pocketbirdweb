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

    public function search_by_shape(){
        $this->load->model('image_model');
        $shape_id = $this->input->post('shape');
        $data['image'] = $this->image_model->selet_by_shape($shape_id);
        $this->load->view('gallery',$data);
    }

    public function search_by_province(){
        $this->load->model('image_model');
        $province = $this->input->post('province');
        $data['image'] = $this->image_model->selet_by_province($province);
        $this->load->view('gallery',$data);
    }

    public function search_by_habitat(){
        $this->load->model('image_model');
        $habitat = $this->input->post('habitat');
        $data['image'] = $this->image_model->select_by_habitat($habitat);
        $this->load->view('gallery',$data);
    }
}