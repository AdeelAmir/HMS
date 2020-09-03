<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Seller extends Base_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('cookie');
    }

    public function myads()
    {
        $this->load->view('frontend/dashboard-myads.php');
    }
    public function postads()
    {
        $this->load->view('frontend/dashboard-postanad.php');
    }
    public function profilesetting()
    {
        $this->load->view('frontend/dashboard-profile-setting.php');
    }
    public function logout()
    {
        $this->load->view('frontend/logout.php');
    }
}

?>