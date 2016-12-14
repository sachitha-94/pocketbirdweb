<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class lognote_controller extends CI_Controller {

    public function get_lognote_c(){
        $this->load->model('lognote_model');
        $lognote['lognote'] = $this->lognote_model->get_lognote();
        $this->load->view('lognote_form',$lognote);
    }

    public function update_lognote(){
        $newdata = array(
            'Description'=> $this->input->post( 'Description'),
            'location'=> $this->input->post( 'location'),
            'province'=> $this->input->post( 'province'),
            'nearest_city'=> $this->input->post( 'nearest_city'),
            'elevation'=> $this->input->post( 'elevation'),
            'habbitat'=> $this->input->post( 'habbitat'),
            'size'=> $this->input->post( 'size'),
            'looks_like'=> $this->input->post( 'looks_like'),
            'shape'=> $this->input->post( 'shape'),
            'colors'=> $this->input->post( 'colors'),
            'special'=> $this->input->post( 'special'),
            'behaviour'=> $this->input->post( 'behaviour'),
        );
        $noteID = $this->input->post('note_ID');
        $this->load->model('lognote_model');
        $result = $this->lognote_model->update_lognote($newdata,$noteID);
        if ($result == true) {
            $data = array();
            $data['message'] = "Update Succeddsull";
            $this->load->view('lognote_form_success',$data);
        }else{
            $data = array();
            $data['message'] = "Update Failed";
            $this->load->view('lognote_form_success',$data);

        }
    }



}