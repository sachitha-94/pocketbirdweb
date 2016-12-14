<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class page_nav extends CI_Controller {

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
        $this->load->view('gallery');
    }
    public function goto_login(){
        $this->load->view('login');
    }
    public function goto_map(){
        $this->load->view('map');
    }
    public function goto_my_log_notes(){
        $this->load->view('my_log_notes');
    }
    public function goto_shared_lognotes(){
        $this->load->view('shared_lognotes');
    }
    public function goto_signup(){
        $this->load->view('signup');
    }
    public function goto_single_lognote(){
        $this->load->view('single_lognote');
    }

    public function goto_admin_dashboard(){
        $this->load->view('admin_dashboard');
    }

    public function goto_lognote_form(){
        $this->load->view('lognote_form');
    }
}