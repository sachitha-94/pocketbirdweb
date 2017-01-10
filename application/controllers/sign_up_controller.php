<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sign_up_controller extends CI_Controller
{
    public function add_user()
    {
        $this->form_validation->set_rules('firstname', 'First Name', 'required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('username', 'User Name', 'required|min_length[6]|alpha_dash');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|alpha_numeric');
        $this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'matches[password]|required|min_length[8]|alpha_numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('signup');
        } else {

            $data = array(
                'firstname' => $this->input->post('firstname'),
                'lastname' => $this->input->post('lastname'),
                'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
            );
            $this->load->model('users_model');
            $result = $this->users_model->user_insert($data);
            $username = $this->input->post('username');

            if ($result == TRUE) {
                $newdata = array(
                    'username' => $username,
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($newdata);

                $this->load->view('home', $newdata);
            } else {
                $this->load->view('blank-page');
            }
        }


    }

    public function login()
    {

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->load->model('users_model');
        $result = $this->users_model->user_login($username,$password);

        if ($result == TRUE) {
            $newdata = array(
                'username' => $this->input->post('username'),
                'logged_in' => TRUE
            );
            $this->session->set_userdata($newdata);

            $this->load->view('home');
        } else {
            $this->load->view('login');
        }
    }


    public function logout()
    {
        $this->session->sess_destroy();
        $this->load->view('home');
    }
}
