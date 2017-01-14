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
    public function adminlogin()
    {
        //$result = new sign_up_controller().count_users();
        $result=$this->count_new_users();
        $result2=$this->count_new_comments();
        $result3=$this->count_new_lognotes();
        $result4=$this->count_new_complains();
        $data['users'] = $result;
        $data['comments'] = $result2;
        $data['lognotes'] = $result3;
        $data['complains'] = $result4;
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->load->model('users_model');
        $result = $this->users_model->admin_login($username,$password);

        if ($result == TRUE) {

            $data['username'] = $this->input->post('username');
            $data['logged_in'] = TRUE;

            $this->session->set_userdata($data);
            if($this->session->has_userdata('username')) {
                $this->load->view('admin_dashboard',$data);
            }else {
                $this->load->view('adminlogin');
            }
        } else {
            $this->load->view('adminlogin');
        }
        return $data;
    }



    public function count_new_users(){
        $this->load->model('users_model');
        $count=$this->users_model->count_new_users();
        return $count;
        //  $this->users_model->count_new_users();
    }
    public function count_new_comments(){
        $this->load->model('users_model');
        $count=$this->users_model->count_new_comments();
        return $count;
        //  $this->users_model->count_new_users();
    }
    public function count_new_lognotes(){
        $this->load->model('users_model');
        $count=$this->users_model->count_new_lognotes();
        return $count;
        //  $this->users_model->count_new_users();
    }
    public function count_new_complains(){
        $this->load->model('users_model');
        $count=$this->users_model->count_new_complains();
        return $count;
        //  $this->users_model->count_new_users();
    }
    public function select_new_users()
    {
        //$da = $this->adminlogin();
        if ($this->session->has_userdata('username')) {
            $result = $this->count_new_users();
            $result2 = $this->count_new_comments();
            $result3 = $this->count_new_lognotes();
            $result4 = $this->count_new_complains();
            $data['users'] = $result;
            $data['comments'] = $result2;
            $data['lognotes'] = $result3;
            $data['complains'] = $result4;
            //$result4 = $this->adminlogin();

            $this->load->model('users_model');

            $data['userdetail'] = $this->users_model->select_new_users();
            $this->load->view('admin_dashboard', $data);

            //  $this->users_model->count_new_users();
        }else{
            $this->load->view('adminlogin');
        }
    }
    public function updateview(){
        $data_id = $this->uri->segment(3);
        $this->load->model('users_model');
        $this->users_model->viewed($data_id);
        $this->select_new_users();
        //$this->load->view('admin_dashboard',$data);
    }

    public function updateapprove(){
        $data_id = $this->uri->segment(3);
        $this->load->model('users_model');
        $this->users_model->approved($data_id);
        $this->select_new_users();
    }

    public function remove_user()
    {
        //$da = $this->adminlogin();
        if ($this->session->has_userdata('username')) {

            $this->load->model('users_model');
            $data['userdetail']=NULL;
            $data['approved_user_details'] = $this->users_model->select_users();

            $this->load->view('admin_dashboard', $data);

            //  $this->users_model->count_new_users();
        }else{
            $this->load->view('adminlogin');
        }
    }
    public function deleteuser(){
        $data_id = $this->uri->segment(3);
        $this->load->model('users_model');
        $this->users_model->deleteuser($data_id);
        $this->remove_user();
        //$this->load->view('admin_dashboard',$data);
    }

    public function select_new_comment()
    {
        //$da = $this->adminlogin();
        if ($this->session->has_userdata('username')) {
            $result = $this->count_new_users();
            $result2 = $this->count_new_comments();
            $result3 = $this->count_new_lognotes();
            $result4 = $this->count_new_complains();
            $data['users'] = $result;
            $data['comments'] = $result2;
            $data['lognotes'] = $result3;
            $data['complains'] = $result4;
            //$result4 = $this->adminlogin();

            $this->load->model('users_model');
            $data['userdetail']=NULL;
            $data['commentdetail'] = $this->users_model->select_new_comments();
            $this->load->view('admin_dashboard', $data);

            //  $this->users_model->count_new_users();
        }else{
            $this->load->view('adminlogin');
        }
    }
    public function update_viewed_comment(){
        $data_id = $this->uri->segment(3);
        $this->load->model('users_model');
        $this->users_model->rejectcomment($data_id);
        $this->select_new_comment();
        //$this->load->view('admin_dashboard',$data);
    }

    public function update_approve_comment(){
        $data_id = $this->uri->segment(3);
        $this->load->model('users_model');
        $this->users_model->approvedcomment($data_id);
        $this->select_new_comment();
    }



    public function select_new_complains()
    {
        //$da = $this->adminlogin();
        if ($this->session->has_userdata('username')) {
            $result = $this->count_new_users();
            $result2 = $this->count_new_comments();
            $result3 = $this->count_new_lognotes();
            $result4 = $this->count_new_complains();
            $data['users'] = $result;
            $data['comments'] = $result2;
            $data['lognotes'] = $result3;
            $data['complains'] = $result4;
            //$result4 = $this->adminlogin();

            $this->load->model('users_model');
            $data['userdetail']=NULL;
            $data['complainsdetail'] = $this->users_model->select_new_complains();
            $this->load->view('admin_dashboard', $data);

            //  $this->users_model->count_new_users();
        }else{
            $this->load->view('adminlogin');
        }
    }
    public function update_viewed_complains(){
        $data_id = $this->uri->segment(3);
        $this->load->model('users_model');
        $this->users_model->viewedcomplain($data_id);
        $this->select_new_complains();
        //$this->load->view('admin_dashboard',$data);
    }
    public function select_new_lognotes(){

    }
}
