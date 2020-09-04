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
        $this->load->model('Category_model', 'category');
        $this->load->model('City_model', 'city');
        $this->load->model('Ads_model', 'ads');
    }

    public function home()
    {
        $Data['Category']   = $this->category->Read();
        $Data['City']       = $this->city->Read();
        $Data['FeatureAds'] = $this->ads->FeatureAdsRead();
        $Data['LatestAds']  = $this->ads->LatestAdsRead();
        $this->load->view('frontend/index', $Data);
    }
    public function adlisting()
    {
        $Data['Category']   = $this->category->Read();
        $Data['AllAds'] = $this->ads->AllAds();
        $this->load->view('frontend/adlistinggrid', $Data);
    }

    public function adDetails($id="")
    {
        $Data['AdsDetail'] = $this->ads->GetAds($id);
        $this->load->view('frontend/addetail', $Data);
    }

    public function aboutus()
    {
        $Data['Category']   = $this->category->Read();
        $this->load->view('frontend/aboutus', $Data);
    }
    public function contactus()
    {
        $Data['Category']   = $this->category->Read();
        $this->load->view('frontend/contactus', $Data);
    }
    public function login_signup(){
        $Data['Category']   = $this->category->Read();
        $this->load->view('frontend/loginsignup', $Data);
    }
}

?>