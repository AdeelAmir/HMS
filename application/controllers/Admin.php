<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends Base_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('cookie');
        if (!$this->session->userdata('userId')){
            redirect(base_url('Authentification'), 'refresh');
        }
    }

    public function index()
    {
        $this->load->view('index');
    }
}

?>