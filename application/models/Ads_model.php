<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class  Ads_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('cookie');
    }

    public function Add($product_name, $product_price, $product_category, $product_city, $FileUrl, $FileVideoUrl, $user_id){
        $Data = array(
            'product_name' => $product_name,
            'product_price' => $product_price,
            'category_id' => $product_category,
            'city_id' => $product_city,
            'ad_picture' => $FileUrl,
            'ad_video' => $FileVideoUrl,
            'user_id' => $user_id,
            'is_active' => 1
        );

        if ($this->db->insert('ads', $Data)){
            return true;
        }
        else{
            return false;
        }
    }

    public function Update($Id, $data){
        $this->db->where('id', $Id);
        if ($this->db->update('category', $data)){
            return true;
        }
        else{
            return false;
        }
    }

    // iss meh login user id ki condition lgani ha
    public function Read($Id = ''){
        if($Id != ''){
            $sql = "SELECT A.id,A.product_name,A.product_price,A.ad_picture,B.title AS CategoryTitle,C.title AS CityTitle FROM ads A INNER JOIN category AS B ON A.category_id = B.id INNER JOIN city C ON A.city_id = C.id WHERE A.id = ? AND A.user_id = ? AND A.is_active = 1";
            $result = $this->db->query($sql, array($Id, $this->session->userdata('userId')));
            return $result->result();
        }
        else{
            $sql = "SELECT A.id,A.product_name,A.product_price,A.ad_picture,B.title AS CategoryTitle,C.title AS CityTitle FROM ads A INNER JOIN category AS B ON A.category_id = B.id INNER JOIN city C ON A.city_id = C.id WHERE A.user_id = ? AND A.is_active = 1";
            $result = $this->db->query($sql, array($this->session->userdata('userId')));
            return $result->result();
        }
    }

    public function FeatureAdsRead(){
        $sql = "SELECT A.id,A.product_name,A.product_price,A.ad_picture,B.title AS CategoryTitle,C.title AS CityTitle, D.name AS UserName, D.phone AS PhoneNumber FROM ads A INNER JOIN category AS B ON A.category_id = B.id INNER JOIN city C ON A.city_id = C.id INNER JOIN user D ON A.user_id = D.id  WHERE A.is_active = 1 ORDER BY A.created_at ASC LIMIT 8 ";
        $result = $this->db->query($sql);
        return $result->result();
    }

    public function LatestAdsRead(){
        $sql = "SELECT A.id,A.product_name,A.product_price,A.ad_picture,B.title AS CategoryTitle,C.title AS CityTitle, D.name AS UserName, D.phone AS PhoneNumber FROM ads A INNER JOIN category AS B ON A.category_id = B.id INNER JOIN city C ON A.city_id = C.id INNER JOIN user D ON A.user_id = D.id  WHERE A.is_active = 1 ORDER BY A.created_at DESC LIMIT 6";
        $result = $this->db->query($sql);
        return $result->result();
    }

    public function AllAds(){
        $sql = "SELECT A.id,A.product_name,A.product_price,A.ad_picture,B.title AS CategoryTitle,C.title AS CityTitle, D.name AS UserName, D.phone AS PhoneNumber FROM ads A INNER JOIN category AS B ON A.category_id = B.id INNER JOIN city C ON A.city_id = C.id INNER JOIN user D ON A.user_id = D.id  WHERE A.is_active = 1 ORDER BY A.created_at DESC";
        $result = $this->db->query($sql);
        return $result->result();
    }

    public function GetAds($id){
        $sql = "SELECT A.id,A.product_name,A.product_price,A.ad_picture,A.ad_video,A.created_at,B.title AS CategoryTitle,C.title AS CityTitle, D.name AS UserName, D.phone AS PhoneNumber FROM ads A INNER JOIN category AS B ON A.category_id = B.id INNER JOIN city C ON A.city_id = C.id INNER JOIN user D ON A.user_id = D.id  WHERE A.is_active = 1 AND A.id = ? ORDER BY A.created_at DESC";
        $result = $this->db->query($sql, array($id));
        return $result->result();
    }

    public function make_datatable($limit, $start){
        $sql = "SELECT * FROM category A WHERE A.is_active = 1 LIMIT ". $start . ", " . $limit;
        $result = $this->db->query($sql);
        return $result->result();
    }

    public function GetTotalRecords(){
        $sql = "SELECT * FROM category A WHERE A.is_active = 1";
        $result = $this->db->query($sql);
        return $result->num_rows();
    }
}