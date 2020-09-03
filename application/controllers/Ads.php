<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ads extends Base_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('cookie');
        $this->load->model('Ads_model', 'ads');
        $this->load->model('Category_model', 'category');
        $this->load->model('City_model', 'city');
    }

    public function createAds()
    {
        $product_name = $this->input->post('name');
        $product_price = $this->input->post('price');
        $product_category = $this->input->post('category');
        $product_city = $this->input->post('city');
        $user_id = 1;  // here i need to put session value once login register will done.
        
        // Upload Ads Image
        $Filename = $_FILES['file']['name'];
        $FileUrl = "";
        if ($_FILES['file']['name'] != "" || $_FILES['file']['name'] != null)
        {
            $ext = pathinfo($Filename, PATHINFO_EXTENSION);
            $FileUrl = 'ads' . rand(10,100000) . '.' . $ext;
        }

        if ($FileUrl != "")
        {
            $upload_path = "uploads/";
            $config = array(
                'upload_path' => $upload_path,
                'allowed_types' => "gif|jpg|png|jpeg|pdf",
                'overwrite' => TRUE,
                'file_name' => $FileUrl
            );
            $this->load->library('upload', $config);
            if($this->upload->do_upload('file') == '1'){

            }
        }

        // Upload Ads Video
        $FileVideoname = $_FILES['advideofile']['name'];
        $FileVideoUrl = "";
        if ($_FILES['advideofile']['name'] != "" || $_FILES['advideofile']['name'] != null)
        {
            $ext = pathinfo($FileVideoname, PATHINFO_EXTENSION);
            $FileVideoUrl = 'adsvideo' . rand(10,100000) . '.' . $ext;
        }

        if ($FileVideoUrl != "")
        {
            $upload_path = "uploads";
            $config = array(
                'upload_path' => $upload_path,
                'allowed_types' => "mp4",
                'overwrite' => FALSE,
                'remove_spaces' => TRUE,
                'file_name' => $FileVideoUrl
            );
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if($this->upload->do_upload('advideofile') == '1'){

            }
        }

        if($this->ads->Add($product_name, $product_price, $product_category, $product_city, $FileUrl, $FileVideoUrl, $user_id)){
            $Data['success'] = "Ads post successfully";
            $Data['Category'] = $this->category->Read();
            $Data['City'] = $this->city->Read();
            $this->load->view('frontend/dashboard-postanad', $Data);
        }
        else{
            echo "Error";
        }
    }
}

?>