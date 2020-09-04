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
        $this->load->model('Category_model', 'category');
        $this->load->model('City_model', 'city');
        $this->load->model('Ads_model', 'ads');
    }

    public function index()
    {
        $Data['Category']   = $this->category->Read();
        $Data['City']       = $this->city->Read();
        $Data['FeatureAds'] = $this->ads->FeatureAdsRead();
        $Data['LatestAds']  = $this->ads->LatestAdsRead();
        $Data['UserId']     = $this->session->userdata('userId');
        $Data['UserName']   = $this->session->userdata('userFirst');
        $this->load->view('frontend/index', $Data);
    }
}