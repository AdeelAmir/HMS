<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Doctor extends Base_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('cookie');
        // $this->load->model('Department_model', 'department');
        $this->load->model('Doctor_model', 'doctor');
        if (!$this->session->userdata('userId')){
            redirect(base_url('Authentification'), 'refresh');
        }
    }

    public function index()
    {
        $this->load->view('admin/listdoctors');
    }

    // public function NewDoctor()
    // {
    //     $Data['Departments'] = $this->department->Read();
    //     $this->load->view('admin/adddoctor', $Data);
    // }

    // public function CheckDoctorEmail()
    // {
    //     $Email = $this->input->post('Email');
    //     if($this->doctor->ValidateDoctorEmail($Email)){
    //         echo "Success";
    //     }
    //     else{
    //         echo "Error";
    //     }
    // }

    // public function AddDoctor()
    // {
    //     $Name = $this->input->post('Name');
    //     $Email = $this->input->post('Email');
    //     $Password = md5($this->input->post('Password'));
    //     $Address = $this->input->post('Address');
    //     $Phone = $this->input->post('Phone');
    //     $Profile = $this->input->post('Profile');
    //     $Department = $this->input->post('Department');
    //     $Picture = $this->input->post('Picture');

    //     $Filename = $_FILES['file']['name'];
    //     $FileUrl = "";
    //     if ($_FILES['file']['name'] != "" || $_FILES['file']['name'] != null)
    //     {
    //         $ext = pathinfo($Filename, PATHINFO_EXTENSION);
    //         $FileUrl = 'doctor'. '_' . rand(10,100000) . '.' . $ext;
    //     }

    //     if ($FileUrl != "")
    //     {
    //         $upload_path = "assets/img/doctor";
    //         $config = array(
    //             'upload_path' => $upload_path,
    //             'allowed_types' => "gif|jpg|png|jpeg|pdf",
    //             'overwrite' => TRUE,
    //             'file_name' => $FileUrl
    //         );
    //         $this->load->library('upload', $config);
    //         if($this->upload->do_upload('file') == '1'){
    //             if($this->doctor->Add($Name, $Email, $Password, $Address, $Phone, $Profile, $Department, $FileUrl)){
    //                 echo "Success";
    //             }
    //             else{
    //                 echo "Failed";
    //             }
    //         }
    //         else{
    //             echo 'Failed';
    //         }
    //     }
    //     else{
    //         if($this->doctor->Add($Name, $Email, $Password, $Address, $Phone, $Profile, $Department, $FileUrl)){
    //             echo "Success";
    //         }
    //         else{
    //             echo "Failed";
    //         }
    //     }
    // }

    public function DoctorList()
    {
        $limit = $this->input->post('length');
        $start = $this->input->post('start');
        $fetch_data = $this->doctor->make_datatable($limit, $start);
        $data = array();
        $SrNo = 1;
        foreach($fetch_data as $row => $item)
        {
            $sub_array = array();
            $sub_array[] = $SrNo;
            $sub_array[] = $item->full_name;
            $sub_array[] = $item->phone;
            $sub_array[] = $item->title;
            $sub_array[] = '<i class="fa fa-pencil-square-o" id="edit_' . $item->id . '" aria-hidden="true" style="color: #4caf50; margin-right:10px; cursor:pointer; font-size:18px;" onclick="Edit(this.id);"></i><i class="fa fa-trash" id="delete_' . $item->id .'" aria-hidden="true" style="color: #f4511e; margin-right:10px; cursor:pointer; font-size:18px;" onclick="Delete(this.id);"></i><i class="fa fa-calendar" id="appointment_' . $item->id .'" aria-hidden="true" style="color: #3f51b5; margin-right:10px; cursor:pointer; font-size:18px;" onclick="Appointment(this.id);"></i>';
            $SrNo++;
            $data[] = $sub_array;
        }

        $json_data = array(
            "draw" => intval($this->input->post('draw')),
            "recordsTotal" => $this->doctor->GetTotalRecords(),
            "recordsFiltered" => $this->doctor->GetTotalRecords(),
            "data" => $data
        );

        echo json_encode($json_data);
    }

    // public function EditDoctor(){
    //     $Id = $this->input->post('Id');
    //     $details = $this->doctor->Read($Id);
    //     $Data = array();
    //     $Data['Departments'] = $this->department->Read();
    //     foreach($details as $dept){
    //         $Data['name']     = $dept->full_name;
    //         $Data['email']    = $dept->user_email;
    //         $Data['phone']    = $dept->phone;
    //         $Data['address']  = $dept->DoctorAddress;
    //         $Data['picture']  = $dept->pic;
    //         $Data['dept_id']  = $dept->dept_id;
    //         $Data['profile']  = $dept->DoctorProfile;
    //     }
    //     $Data['id'] = $this->input->post('Id');
    //     $this->load->view('admin/editdoctor', $Data);
    // }

    // public function EditDoctor2(){
    //     $Id = $this->input->post('Id');
    //     $Name = $this->input->post('Name');
    //     $Email = $this->input->post('Email');
    //     $Password = md5($this->input->post('Password'));
    //     $Address = $this->input->post('Address');
    //     $Phone = $this->input->post('Phone');
    //     $Profile = $this->input->post('Profile');
    //     $Department = $this->input->post('Department');
    //     $Picture = $this->input->post('Picture');
    //     $OldPicture = $this->input->post('oldPicture');

    //     $Filename = $_FILES['file']['name'];
    //     $FileUrl = "";
    //     if ($_FILES['file']['name'] != "" || $_FILES['file']['name'] != null)
    //     {
    //         if($OldPicture != "")
    //         {
    //             //First Delete Old File
    //             $File = FCPATH . "assets/img/doctor/" . $OldPicture;
    //             unlink($File);
    //             //Add New File
    //             $ext = pathinfo($Filename, PATHINFO_EXTENSION);
    //             $FileUrl = 'doctor'. '_' . rand(10,100000) . '.' . $ext;
    //         }
    //         else{
    //             $ext = pathinfo($Filename, PATHINFO_EXTENSION);
    //             $FileUrl = 'doctor'. '_' . rand(10,100000) . '.' . $ext;
    //         }
    //     }
    //     if ($FileUrl != "")
    //     {
    //         $upload_path = "assets/img/doctor";
    //         $config = array(
    //             'upload_path' => $upload_path,
    //             'allowed_types' => "gif|jpg|png|jpeg|pdf",
    //             'overwrite' => TRUE,
    //             'file_name' => $FileUrl
    //         );
    //         $this->load->library('upload', $config);
    //         if($this->upload->do_upload('file') == '1'){

    //             if($Password != ""){
    //                 $data = array(
    //                     'full_name' => $Name,
    //                     'user_email' => $Email,
    //                     'user_password' => $Password
    //                 );
    //                 if($this->doctor->Update($Id,$data)){
    //                     $data = array(
    //                         'phone' => $Phone,
    //                         'address' => $Address,
    //                         'pic' => $FileUrl,
    //                         'dept_id' => $Department,
    //                         'profile' => $Profile
    //                     );
    //                     if($this->doctor->UpdateDoctor($Id,$data)){
    //                         echo "Success";
    //                     }
    //                     else{
    //                         echo "Failed";
    //                     }
    //                 }
    //                 else{
    //                     echo "Failed";
    //                 }
    //             }
    //             else{
    //                 $data = array(
    //                     'full_name' => $Name,
    //                     'user_email' => $Email
    //                 );
    //                 if($this->doctor->Update($Id,$data)){
    //                     $data = array(
    //                         'phone' => $Phone,
    //                         'address' => $Address,
    //                         'pic' => $FileUrl,
    //                         'dept_id' => $Department,
    //                         'profile' => $Profile
    //                     );
    //                     if($this->doctor->Update($Id,$data)){
    //                         echo "Success";
    //                     }
    //                     else{
    //                         echo "Failed";
    //                     }
    //                 }
    //                 else{
    //                     echo "Failed";
    //                 }
    //             }
    //         }
    //         else{
    //             echo 'Failed';
    //         }
    //     }
    //     else{
    //         if($Password != ""){
    //             $data = array(
    //                 'full_name' => $Name,
    //                 'user_email' => $Email,
    //                 'user_password' => $Password
    //             );
    //             if($this->doctor->Update($Id,$data)){
    //                 $data = array(
    //                     'phone' => $Phone,
    //                     'address' => $Address,
    //                     'dept_id' => $Department,
    //                     'profile' => $Profile
    //                 );
    //                 if($this->doctor->UpdateDoctor($Id,$data)){
    //                     echo "Success";
    //                 }
    //                 else{
    //                     echo "Failed";
    //                 }
    //             }
    //             else{
    //                 echo "Failed";
    //             }
    //         }
    //         else{
    //             $data = array(
    //                 'full_name' => $Name,
    //                 'user_email' => $Email
    //             );
    //             if($this->doctor->Update($Id,$data)){
    //                 $data = array(
    //                     'phone' => $Phone,
    //                     'address' => $Address,
    //                     'dept_id' => $Department,
    //                     'profile' => $Profile
    //                 );
    //                 if($this->doctor->Update($Id,$data)){
    //                     echo "Success";
    //                 }
    //                 else{
    //                     echo "Failed";
    //                 }
    //             }
    //             else{
    //                 echo "Failed";
    //             }
    //         }
    //     }
    // }

    // public function DeleteDoctor(){
    //     $Id = $this->input->post('Id');
    //     $Data = array(
    //         'active_status' => -1
    //     );
    //     if($this->doctor->Update($Id, $Data)){
    //         echo 'Success';
    //     }
    //     else{
    //         echo 'Failed';
    //     }
    //     exit();
    // }
}