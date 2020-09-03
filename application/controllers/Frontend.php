<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class Frontend extends Base_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('cookie');
        $this->load->model('Users_model', 'user');
    }

    public function index()
    {
        $this->load->view('admin/listuser');
    }

    public function NewUser()
    {
        $this->load->view('admin/adduser');
    }

    public function AddUsers()
    {
        $Name = $this->input->post('Name');
        $Phone = $this->input->post('Phone');
        $Email = $this->input->post('Email');
        $Password = $this->input->post('Password');
        if($this->user->Add($Name, $Phone, $Email, $Password)){
            echo "Success";
        }
        else{
            echo "Error";
        }
    }
}