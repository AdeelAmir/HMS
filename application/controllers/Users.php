<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class Users extends Base_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('cookie');
        $this->load->model('Users_model', 'user');
        if (!$this->session->userdata('userId')){
            redirect(base_url('Authentification'), 'refresh');
        }
    }

    public function index()
    {
        $this->load->view('admin/listuser');
    }

    public function NewUser()
    {
        $this->load->view('admin/adduser');
    }

    public function AddUsers()
    {
        $Name = $this->input->post('Name');
        $Phone = $this->input->post('Phone');
        $Email = $this->input->post('Email');
        $Password = $this->input->post('Password');
        if($this->user->Add($Name, $Phone, $Email, $Password)){
            echo "Success";
        }
        else{
            echo "Error";
        }
    }

    public function UserList()
    {
        $limit = $this->input->post('length');
        $start = $this->input->post('start');
        $fetch_data = $this->user->make_datatable($limit, $start);
        $data = array();
        $SrNo = 1;
        foreach($fetch_data as $row => $item)
        {
            $sub_array = array();
            $sub_array[] = $SrNo;
            $sub_array[] = $item->name;
            $sub_array[] = $item->phone;
            $sub_array[] = $item->email;
            $sub_array[] = $item->password;
            $sub_array[] = '<i class="fa fa-trash" id="delete_' . $item->id .'" aria-hidden="true" style="color: #f4511e; margin-right:10px; cursor:pointer; font-size:18px;" onclick="Delete(this.id);"></i>';
            $SrNo++;
            $data[] = $sub_array;
        }

        $json_data = array(
            "draw" => intval($this->input->post('draw')),
            "recordsTotal" => $this->user->GetTotalRecords(),
            "recordsFiltered" => $this->user->GetTotalRecords(),
            "data" => $data
        );

        echo json_encode($json_data);
    }

    // public function EditUser(){
    //     $Id = $this->input->post('Id');
    //     $details = $this->category->Read($Id);
    //     $Data = array();
    //     $Data['id'] = $this->input->post('Id');
    //     foreach($details as $dept){
    //         $Data['title'] = $dept->title;
    //         $Data['description'] = $dept->description;
    //     }
    //     $this->load->view('admin/editdepartment', $Data);
    // }

    // public function EditUser2(){
    //     $Id           = $this->input->post('Id');
    //     $Title        = $this->input->post('Title');
    //     $Description  = $this->input->post('Description');
    //     $data = array(
    //         'title' => $Title,
    //         'description' => $Description
    //     );
    //     if($this->department->Update($Id,$data)){
    //         echo "Success";
    //     }
    //     else{
    //         echo "Error";
    //     }
    // }

    public function DeleteUser(){
        $Id = $this->input->post('Id');
        $Data = array(
            'is_active' => -1
        );
        if($this->user->Update($Id, $Data)){
            echo 'Success';
        }
        else{
            echo 'Failed';
        }
        exit();
    }
}