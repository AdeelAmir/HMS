<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class LabTest extends Base_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('cookie');
        $this->load->model('LabTest_model', 'labtest');
        if (!$this->session->userdata('userId')){
            redirect(base_url('Authentification'), 'refresh');
        }
    }

    public function index()
    {
        $this->load->view('admin/listlabtest');
    }

    public function NewLabTest()
    {
        $this->load->view('admin/addlabtest', $Data);
    }

    public function AddLabTest()
    {
        $Title = $this->input->post('Title');
        $Rate = $this->input->post('Rate');

        $Filename = $_FILES['file']['name'];
        $FileUrl = "";
        if ($_FILES['file']['name'] != "" || $_FILES['file']['name'] != null)
        {
            $ext = pathinfo($Filename, PATHINFO_EXTENSION);
            $fileTitle = str_replace(array(' ', '.','%', '/', '&', '@', '#', '!', '$', '^', '*', ','),'_', $Title);
            $FileUrl = $fileTitle . '.' . $ext;
        }
        if ($FileUrl != "")
        {
            $upload_path = "assets/img/labtest";
            $config = array(
                'upload_path' => $upload_path,
                'allowed_types' => "doc|docx",
                'overwrite' => TRUE,
                'file_name' => $FileUrl
            );
            $this->load->library('upload', $config);
            if($this->upload->do_upload('file') == '1'){
                if($this->labtest->Add($Title, $Rate, $FileUrl)){
                    echo "Success";
                }
                else{
                    echo "Failed";
                }
            }
            else{
                echo 'Failed';
            }
        }
        else{
            echo "Failed";
        }
    }

    public function LabTestList()
    {
        $limit = $this->input->post('length');
        $start = $this->input->post('start');
        $fetch_data = $this->labtest->make_datatable($limit, $start);
        $data = array();
        $SrNo = 1;
        foreach($fetch_data as $row => $item)
        {
            $path = assets_url('assets/img/labtest/'. $item->template);
            $sub_array = array();
            $sub_array[] = $SrNo;
            $sub_array[] = $item->title;
            $sub_array[] = $item->rate;
            $sub_array[] = '<a href="'. $path .'"><i class="fa fa-download" aria-hidden="true" style="color: #3f51b5; margin-right:10px; cursor:pointer; font-size:18px;"></i>';
            $sub_array[] = '<i class="fa fa-pencil-square-o" id="edit_' . $item->id . '" aria-hidden="true" style="color: #4caf50; margin-right:10px; cursor:pointer; font-size:18px;" onclick="Edit(this.id);"></i><i class="fa fa-trash" id="delete_' . $item->id .'" aria-hidden="true" style="color: #f4511e; margin-right:10px; cursor:pointer; font-size:18px;" onclick="Delete(this.id);"></i>';
            $SrNo++;
            $data[] = $sub_array;
        }

        $json_data = array(
            "draw" => intval($this->input->post('draw')),
            "recordsTotal" => $this->labtest->GetTotalRecords(),
            "recordsFiltered" => $this->labtest->GetTotalRecords(),
            "data" => $data
        );

        echo json_encode($json_data);
    }

    public function EditLabtest(){
        $Id = $this->input->post('Id');
        $details = $this->labtest->Read($Id);
        $Data = array();
        foreach($details as $lab){
            $Data['title'] = $lab->title;
            $Data['rate']  = $lab->rate;
            $Data['file']  = $lab->template;
        }
        $Data['id'] = $this->input->post('Id');
        $this->load->view('admin/editlabtest', $Data);
    }

    public function EditLabtest2(){
        $Id = $this->input->post('Id');
        $Title = $this->input->post('Title');
        $Rate = $this->input->post('Rate');
        $OldFile = $this->input->post('oldFile');

        $Filename = $_FILES['file']['name'];
        $FileUrl = "";
        if ($_FILES['file']['name'] != "" || $_FILES['file']['name'] != null)
        {
            if($OldFile != "")
            {
                //First Delete Old File
                $File = FCPATH . "assets/img/labtest/" . $OldFile;
                unlink($File);
                //Add New File
                $ext = pathinfo($Filename, PATHINFO_EXTENSION);
                $fileTitle = str_replace(array(' ', '.','%', '/', '&', '@', '#', '!', '$', '^', '*', ','),'_', $Title);
                $FileUrl = $fileTitle . '.' . $ext;
            }
            else{
                $ext = pathinfo($Filename, PATHINFO_EXTENSION);
                $fileTitle = str_replace(array(' ', '.','%', '/', '&', '@', '#', '!', '$', '^', '*', ','),'_', $Title);
                $FileUrl = $fileTitle . '.' . $ext;
            }
        }
        if ($FileUrl != "")
        {
            $upload_path = "assets/img/labtest";
            $config = array(
                'upload_path' => $upload_path,
                'allowed_types' => "doc|docx",
                'overwrite' => TRUE,
                'file_name' => $FileUrl
            );
            $this->load->library('upload', $config);
            if($this->upload->do_upload('file') == '1'){
                $data = array(
                    'title' => $Title,
                    'rate' => $Rate,
                    'template' => $FileUrl
                );
                if($this->labtest->Update($Id, $data)){
                    echo "Success";
                }
                else{
                    echo "Failed";
                }
            }
            else{
                echo 'Failed';
            }
        }
        else{
            $data = array(
                'title' => $Title,
                'rate' => $Rate
            );
            if($this->labtest->Update($Id, $data)){
                echo "Success";
            }
            else{
                echo "Failed";
            }
        }
    }

    public function DeleteLabtest(){
        $Id = $this->input->post('Id');
        $Data = array(
            'is_active' => -1
        );
        if($this->labtest->Update($Id, $Data)){
            echo 'Success';
        }
        else{
            echo 'Failed';
        }
        exit();
    }
}