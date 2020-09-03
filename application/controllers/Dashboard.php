<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Base_Controller
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
        if (($this->session->userdata('userId')) && ($this->session->userdata('userType') == "admin")){
            $this->load->view('admin/admin-dashboard');
        }
        else if (($this->session->userdata('userId')) && ($this->session->userdata('userType') == "receptionist")){
            $this->load->view('receptionist/receptionist-dashboard');
        }
        else if (($this->session->userdata('userId')) && ($this->session->userdata('userType') == "doctor")){
            $this->load->view('doctor/doctor-dashboard');
        }
        else if (($this->session->userdata('userId')) && ($this->session->userdata('userType') == "labtechnician")){
            $this->load->view('labtechnician/labtechnician-dashboard');
        }
    }
}

?>