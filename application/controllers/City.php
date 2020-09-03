<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class City extends Base_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('cookie');
        $this->load->model('Category_model', 'category');
        $this->load->model('City_model', 'city');
        if (!$this->session->userdata('userId')){
            redirect(base_url('Authentification'), 'refresh');
        }
    }

    public function index()
    {
        $this->load->view('admin/listcity');
    }

    public function NewCity()
    {
        $this->load->view('admin/addcity');
    }

    public function AddCity()
    {
        $Name = $this->input->post('Title');
        if($this->city->Add($Name)){
            echo "Success";
        }
        else{
            echo "Failed";
        }
    }

    public function CityList()
    {
        $limit = $this->input->post('length');
        $start = $this->input->post('start');
        $fetch_data = $this->city->make_datatable($limit, $start);
        $data = array();
        $SrNo = 1;
        foreach($fetch_data as $row => $item)
        {
            $sub_array = array();
            $sub_array[] = $SrNo;
            $sub_array[] = $item->CityName;
            $sub_array[] = '<i class="fa fa-pencil-square-o" id="edit_' . $item->id . '" aria-hidden="true" style="color: #4caf50; margin-right:10px; cursor:pointer; font-size:18px;" onclick="Edit(this.id);"></i><i class="fa fa-trash" id="delete_' . $item->id .'" aria-hidden="true" style="color: #f4511e; margin-right:10px; cursor:pointer; font-size:18px;" onclick="Delete(this.id);"></i>';
            $SrNo++;
            $data[] = $sub_array;
        }

        $json_data = array(
            "draw" => intval($this->input->post('draw')),
            "recordsTotal" => $this->city->GetTotalRecords(),
            "recordsFiltered" => $this->city->GetTotalRecords(),
            "data" => $data
        );

        echo json_encode($json_data);
    }

    public function EditCity(){
        $Id = $this->input->post('Id');
        $details = $this->city->Read($Id);
        $Data = array();
        $Data['id'] = $this->input->post('Id');
        foreach($details as $dept){
            $Data['title'] = $dept->title;
        }
        $this->load->view('admin/editcity', $Data);
    }

    public function EditCity2(){
        $Id    = $this->input->post('Id');
        $Title = $this->input->post('Title');
        $data = array(
            'title' => $Title
        );
        if($this->city->Update($Id,$data)){
            echo "Success";
        }
        else{
            echo "Error";
        }
    }

    public function DeleteCity(){
        $Id = $this->input->post('Id');
        $Data = array(
            'is_active' => -1
        );
        if($this->city->Update($Id, $Data)){
            echo 'Success';
        }
        else{
            echo 'Failed';
        }
        exit();
    }
}