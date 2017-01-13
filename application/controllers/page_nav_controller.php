<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class page_nav_controller extends CI_Controller {

    public function goto_home(){
        $this->load->view('home');
    }

    public function goto_bird_glossary(){
        $this->load->view('bird_glossary');
    }

    public function goto_contact(){
        $this->load->view('contact');
    }
    public function goto_gallery(){
        $this->load->model('image_model');
        $lognote['image'] = $this->image_model->get_all_images();
        $this->load->view('gallery',$lognote);
    }
    public function goto_login(){
        $this->load->view('login');
    }
    public function goto_map(){
        $this->load->model('Mapdata_model');
        $data['mapdata'] = $this->Mapdata_model->getAll();
        $this->load->view('map', $data);
    }
    public function goto_my_log_notes(){
        $this->load->model('lognote_model');
        $this->load->model('users_model');
        if ($this->session->has_userdata('username')) {
            $username = $this->session->userdata('username');
            $user_id = $this->users_model->get_user_id($username);
            $data['lognote'] = $this->lognote_model->get_user_lognote($user_id);
            $this->load->view('my_log_notes', $data);
        }else{
            $this->load->view('login_error');
        }
    }
    public function goto_shared_lognotes(){
        $this->load->model('lognote_model');
        $data['lognote']= $this->lognote_model->get_all_lognote();
        $this->load->view('shared_lognotes',$data);
    }
    public function goto_signup(){
        $this->load->view('signup');
    }
    public function goto_single_lognote($note_id){
        $this->load->model('lognote_model');
        $data['one_lognote'] = $this->lognote_model->get_lognote($note_id);
        $data['comment'] = $this->lognote_model->select_comment($note_id);
        $this->load->view('single_lognote',$data);
    }

    public function goto_admin_dashboard(){
        $this->load->view('admin_dashboard');
    }

    public function goto_lognote_form($note_id){
        $this->load->model('lognote_model');
        $data['lognote'] = $this->lognote_model->get_lognote($note_id);
        $this->load->view('lognote_form',$data);
    }

    public function  get_id(){
        $this->load->model('users_model');
        $username = $this->session->userdata('username');
        $data['user_id'] = $this->users_model->get_user_id($username);
        $this->load->view('user_id',$data);
    }

    public function goto_shared_single_lognote($note_id){
        $this->load->model('lognote_model');
        $data['one_lognote'] = $this->lognote_model->get_lognote($note_id);
        $data['comment'] = $this->lognote_model->select_comment($note_id);
        $this->load->view('shared_single_lognote',$data);
    }

    public function goto_complain_form(){
        $this->load->view('complain_form');
    }

    public function goto_about_us(){
        $this->load->view('about_us');
    }
}