<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends Base_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('cookie');
    }

    public function index()
    {
        $Data['UserId'] = $this->session->userdata('userId');
        $Data['UserName'] = $this->session->userdata('userFirst');
        $this->load->view('frontend/index', $Data);
    }
}