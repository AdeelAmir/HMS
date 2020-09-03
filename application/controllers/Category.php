<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class Category extends Base_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('cookie');
        $this->load->model('Category_model', 'category');
        if (!$this->session->userdata('userId')){
            redirect(base_url('Authentification'), 'refresh');
        }
    }

    public function index()
    {
        $this->load->view('admin/listdepartment');
    }

    public function NewCategory()
    {
        $this->load->view('admin/adddepartment');
    }

    public function CheckCategoryName()
    {
        $DepartmentName = $this->input->post('DepartmentName');
        if($this->category->ValidateDepartmentName($DepartmentName)){
            echo "Success";
        }
        else{
            echo "Error";
        }
    }

    public function AddCategory()
    {
        $Title = $this->input->post('Title');
        $Description = $this->input->post('Description');

        if($this->category->Add($Title, $Description)){
            echo "Success";
        }
        else{
            echo "Error";
        }
    }

    public function CategoryList()
    {
        $limit = $this->input->post('length');
        $start = $this->input->post('start');
        $fetch_data = $this->category->make_datatable($limit, $start);
        $data = array();
        $SrNo = 1;
        foreach($fetch_data as $row => $item)
        {
            $sub_array = array();
            $sub_array[] = $SrNo;
            $sub_array[] = $item->title;
            $sub_array[] = '<i class="fa fa-pencil-square-o" id="edit_' . $item->id . '" aria-hidden="true" style="color: #4caf50; margin-right:10px; cursor:pointer; font-size:18px;" onclick="Edit(this.id);"></i><i class="fa fa-trash" id="delete_' . $item->id .'" aria-hidden="true" style="color: #f4511e; margin-right:10px; cursor:pointer; font-size:18px;" onclick="Delete(this.id);"></i>';
            $SrNo++;
            $data[] = $sub_array;
        }

        $json_data = array(
            "draw" => intval($this->input->post('draw')),
            "recordsTotal" => $this->category->GetTotalRecords(),
            "recordsFiltered" => $this->category->GetTotalRecords(),
            "data" => $data
        );

        echo json_encode($json_data);
    }

    public function EditCategory(){
        $Id = $this->input->post('Id');
        $details = $this->category->Read($Id);
        $Data = array();
        $Data['id'] = $this->input->post('Id');
        foreach($details as $dept){
            $Data['title'] = $dept->title;
            $Data['description'] = $dept->description;
        }
        $this->load->view('admin/editdepartment', $Data);
    }

    public function EditCategory2(){
        $Id           = $this->input->post('Id');
        $Title        = $this->input->post('Title');
        $Description  = $this->input->post('Description');
        $data = array(
            'title' => $Title,
            'description' => $Description
        );
        if($this->department->Update($Id,$data)){
            echo "Success";
        }
        else{
            echo "Error";
        }
    }

    public function DeleteCategory(){
        $Id = $this->input->post('Id');
        $Data = array(
            'is_active' => -1
        );
        if($this->category->Update($Id, $Data)){
            echo 'Success';
        }
        else{
            echo 'Failed';
        }
        exit();
    }
}