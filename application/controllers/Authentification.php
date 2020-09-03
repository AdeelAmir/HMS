<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class Authentification extends Base_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('cookie');
        $this->load->model('User_model', 'user');
    }

    public function index()
    {
        if ($this->session->userdata('userId')) {
            redirect(base_url('Dashboard'), 'refresh');
        }
        $this->load->view('index');
    }

    public function checkLogin()
    {
        $user = $this->input->post('userName');
        $password = $this->input->post('passWord');
        $remember_me = $this->input->post('remember_me');

        if ($remember_me == 'true') {
            $remember_me = true;
        } else {
            $remember_me = false;
        }

        if ($this->user->Login($user, $password, $remember_me)) {
            echo 'Success';
        } else {
            echo 'Failed';
        }
        exit();
    }

    public function ChangePassword()
    {
        if (!$this->session->userdata('userId')) {
            redirect(base_url('Authentification'), 'refresh');
        } else {
            if (($this->session->userdata('userId')) && ($this->session->userdata('userType') == "admin")) {
                $this->load->view('admin/admin-changePassword');
            } else if (($this->session->userdata('userId')) && ($this->session->userdata('userType') == "receptionist")) {
                $this->load->view('receptionist/receptionist-changePassword');
            } else if (($this->session->userdata('userId')) && ($this->session->userdata('userType') == "doctor")) {
                $this->load->view('doctor/doctor-changePassword');
            } else if (($this->session->userdata('userId')) && ($this->session->userdata('userType') == "labtechnician")) {
                $this->load->view('labtechnician/labtechnician-changePassword');
            }
        }
    }

    public function CheckOldPassword()
    {
        $Password = $this->input->post('password');
        if ($this->user->CheckOldPassword($Password)) {
            echo 'Matched';
        } else {
            echo 'NotMatched';
        }
        exit();
    }

    public function UpdatePassword()
    {
        $Password = $this->input->post('Password');
        if ($this->user->UpdatePassword($Password)) {
            echo 'Success';
        } else {
            echo 'Failed';
        }
        exit();
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('Authentification'), 'refresh');
    }

    public function checkLogin2()
    {
        $user = $this->input->post('userName');
        $password = $this->input->post('passWord');
        $remember_me = $this->input->post('remember_me');

        if ($remember_me == 'true') {
            $remember_me = true;
        } else {
            $remember_me = false;
        }

        if ($this->user->Login2($user, $password, $remember_me)) {
            echo 'Success';
        } else {
            echo 'Failed';
        }
        exit();
    }

    public function logout2()
    {
        $this->session->sess_destroy();
        redirect(base_url('/'), 'refresh');
    }
}