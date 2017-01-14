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
            'exact_location'=> $this->input->post( 'exact_location'),
            'province'=> $this->input->post( 'province'),
            'nearest_city'=> $this->input->post( 'nearest_city'),
            'habbitat'=> $this->input->post( 'habbitat'),
            'size'=> $this->input->post( 'size'),
            'looks_like'=> $this->input->post( 'looks_like'),
            'shape'=> $this->input->post( 'shape'),
            'colors'=> $this->input->post( 'colors'),
            'name'=> $this->input->post( 'name'),
            'behaviour'=> $this->input->post( 'behaviour'),
        );
        $noteID = $this->input->post('note_ID');
        $this->load->model('lognote_model');
        $result = $this->lognote_model->update_lognote($newdata,$noteID);
        if ($result == true) {
            $data = array();
            $data['message'] = "Update Succeddfull";
            $this->load->view('lognote_form_success',$data);
        }else{
            $data = array();
            $data['message'] = "Update Failed";
            $this->load->view('lognote_form_success',$data);

        }
    }

    public function display_user_lognote($user_id){
        $this->load->model('lognote_model');
        $lognote['lognote'] = $this->lognote_model->get_user_lognote($user_id);
        $this->load->view('my_log_notes',$lognote);
    }

    public function display_all_lognote(){
        $this->load->model('lognote_model');
        $lognote['lognote'] = $this->lognote_model->get_all_lognote();
        $this->load->view('lognote_form',$lognote);
    }

    public  function add_comment(){
        $this->load->model('users_model');
        $comment = array(
            'note_ID' => $this->input->post('note_id'),
            'user_ID' => $this->users_model->get_user_id($this->session->userdata('username')),
            'time' => date('H:i:s', now()),
            'date' => date('Y-m-d ', now()),
            'content' => $this->input->post('content'),

        );
        $this->load->model('lognote_model');
        $result = $this->lognote_model->add_comment($comment);
        if ($result == true) {
            #$data['message'] = "Comment Added";
            $data['one_lognote'] = $this->lognote_model->get_lognote($this->input->post('note_id'));
            $data['comment'] = $this->lognote_model->select_comment($this->input->post('note_id'));
            $this->load->view('single_lognote',$data);
        }else{
            #$data['message'] = "Comment failed";
            $data['one_lognote'] = $this->lognote_model->get_lognote($this->input->post('note_id'));
            $data['comment'] = $this->lognote_model->select_comment($this->input->post('note_id'));
            $this->load->view('single_lognote',$data);

        }
    }


    public  function add_comment_shared(){
        $this->load->model('users_model');
        $comment = array(
            'note_ID' => $this->input->post('note_id'),
            'user_ID' => $this->users_model->get_user_id($this->session->userdata('username')),
            'time' => date('H:i:s', now()),
            'date' => date('Y-m-d ', now()),
            'content' => $this->input->post('content'),

        );
        $this->load->model('lognote_model');
        $result = $this->lognote_model->add_comment($comment);
        if ($result == true) {
            #$data['message'] = "Comment Added";
            $data['one_lognote'] = $this->lognote_model->get_lognote($this->input->post('note_id'));
            $data['comment'] = $this->lognote_model->select_comment($this->input->post('note_id'));
            $this->load->view('shared_single_lognote',$data);
        }else{
            #$data['message'] = "Comment failed";
            $data['one_lognote'] = $this->lognote_model->get_lognote($this->input->post('note_id'));
            $data['comment'] = $this->lognote_model->select_comment($this->input->post('note_id'));
            $this->load->view('shared_single_lognote',$data);

        }
    }

    public function select_comment($note_id){
        $this->load->model('lognote_model');
        $data['comment'] = $this->lognote_model->select_comment($note_id);
        $this->load->view('single_lognote',$data);


    }

    public function search_by_shape(){
        $this->load->model('lognote_model');
        $shape_id = $this->input->post('shape');
        $data['lognote'] = $this->lognote_model->select_by_shape($shape_id);
        $this->load->view('shared_lognotes',$data);
    }

    public function search_by_province(){
        $this->load->model('lognote_model');
        $province = $this->input->post('province');
        $data['lognote'] = $this->lognote_model->select_by_province($province);
        $this->load->view('shared_lognotes',$data);
    }

    public function search_by_habitat(){
        $this->load->model('lognote_model');
        $habitat = $this->input->post('habitat');
        $data['lognote'] = $this->lognote_model->select_by_habitat($habitat);
        $this->load->view('shared_lognotes',$data);
    }




}