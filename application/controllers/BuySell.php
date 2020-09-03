<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class BuySell extends Base_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('cookie');
    }

    public function home()
    {
        $this->load->view('frontend/index');
    }
    public function adlisting()
    {
        $this->load->view('frontend/adlistinggrid');
    }
    public function aboutus()
    {
        $this->load->view('frontend/aboutus');
    }
    public function contactus()
    {
        $this->load->view('frontend/contactus');
    }
    public function login_signup(){
        $this->load->view('frontend/loginsignup');
    }
}

?>