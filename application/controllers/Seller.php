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
        $this->load->model('Category_model', 'category');
        $this->load->model('City_model', 'city');
        $this->load->model('Ads_model', 'ads');

        if ($this->session->userdata('userId')) {
            
        }
        else
        {
            redirect(base_url('BuySell/login_signup'), 'refresh');
        }
    }

    public function myads()
    {
        $Data['Ads'] = $this->ads->Read();
        $this->load->view('frontend/dashboard-myads.php', $Data);
    }

    public function postads()
    {
        $Data['Category'] = $this->category->Read();
        $Data['City'] = $this->city->Read();
        $this->load->view('frontend/dashboard-postanad.php', $Data);
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