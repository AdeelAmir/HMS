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
        $this->load->view('frontend/index');
    }
}

?>