<?php

class login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //$this->load->helper('url');
        $this->load->model('login_model');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('loginView');
    }

    public function register()
    {
        $this->load->view('signUp');
    }

    public function register_user()
    {
        $user = array(
            'userName' => $this->input->post('uname'),
            'firstName' => $this->input->post('fname'),
            'middleName' => $this->input->post('mname'),
            'lastName' => $this->input->post('lname'),
            'email' => $this->input->post('user_email'),
            'password' => md5($this->input->post('new_password')),
            'mobile' => $this->input->post('mobile'),
            'landline' => $this->input->post('landline'),
            'notes' => $this->input->post('notes'),
            'profile' => $this->input->post('profile')
        );

        $userNameCheck = $this->login_model->user_check($user['userName']);
        if ($userNameCheck) {
            $this->login_model->user_data($user);
            $this->session->set_flashdata('success_msg', 'Registered successfully. Now login to your account.');
            redirect('login/index');
        } else {
            $this->session->set_flashdata('error_msg', 'User name already exists, Please try again with the different name.');
            redirect('login/register');
        }
    }

    function login_user()
    {
        $user_login = array(
            'userName' => $this->input->post('user_name'),
            'password' => md5($this->input->post('user_password'))
        );

        $data = $this->login_model->logged_in($user_login['userName'], $user_login['password']);
        if ($data) {
            $this->session->set_userdata('user_id', $data['id']);
            $this->session->set_userdata('user_email', $data['email']);
            $this->session->set_userdata('user_name', $data['userName']);
            $this->load->view('user_profile');
        } else {
            $this->session->set_flashdata('error_msg', 'User name or password is wrong, Please try again.');
            $this->load->view('loginView');
        }
    }

}
?>