<?php

class login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //$this->load->helper('url');
        $this->load->model('login_model');
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'user_name', 'required');
        // $this->form_validation->set_rules('password', 'Password', 'required');
        // $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
        // $this->form_validation->set_rules('email', 'Email', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('loginView');
        } else {
            $this->load->view('user_profile');
        }
    }

    public function register()
    {
        $this->load->view('signUp');
    }

    public function register_user()
    {
        $user = array(
            'username' => $this->input->post('uname'),
            'fullname' => $this->input->post('fullname'),
            'emailid' => $this->input->post('emailid'),
            'password' => md5($this->input->post('new_password')),
            'mobile' => $this->input->post('mobile')
        );

        $userNameCheck = $this->login_model->user_check($user['username']);
        if ($userNameCheck) {
            $this->login_model->user_data($user);
            $this->session->set_flashdata('success_msg', 'Registered successfully. Now login to your account.');
            redirect('login/index');
        } else {
            $this->session->set_flashdata('error_msg', 'User name already exists, Please try again with the different name.');
            redirect('login/register');
        }
    }

    function logged_in()
    {
        $user_login = array(
            'username' => $this->input->post('user_name'),
            'password' => md5($this->input->post('user_password'))
        );
        $data = $this->login_model->login_user($user_login['username'], $user_login['password']);
        if ($data) {
            $this->session->set_userdata('user_id', $data['userid']);
            $this->session->set_userdata('emailid', $data['emailid']);
            $this->session->set_userdata('username', $data['username']);
            $this->load->view('user_profile');
        } else {
            $this->session->set_flashdata('error_msg', 'User name or password is wrong, Please try again.');
            $this->load->view('loginView');
        }
    }

    public function user_logout()
    {
        $this->session->sess_destroy();
        redirect('login', 'refresh');
    }

}
?>
