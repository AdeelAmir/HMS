<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class City_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('cookie');
    }

    public function Add($Name){
        $this->db->trans_begin();
        $Data = array(
            'title' => $Name,
            'is_active' => 1
        );
        if($this->db->insert('city', $Data)){
            $this->db->trans_commit();
            return true;
        }
        else{
            $this->db->trans_rollback();
            return false;
        }
    }

    public function Update($Id, $data){
        $this->db->where('id', $Id);
        if ($this->db->update('city', $data)){
            return true;
        }
        else{
            return false;
        }
    }

    // public function UpdateDoctor($Id, $data){
    //     $this->db->where('id', $Id);
    //     if ($this->db->update('doctors', $data)){
    //         return true;
    //     }
    //     else{
    //         return false;
    //     }
    // }

    public function Read($Id = ''){
        if($Id != ''){
            $sql = "SELECT * FROM city A WHERE A.id = ? AND A.is_active = 1";
            $result = $this->db->query($sql, array($Id));
            return $result->result();
        }
        else{
            $sql = "SELECT * FROM city A WHERE A.is_active = 1";
            $result = $this->db->query($sql);
            return $result->result();
        }
    }

    public function make_datatable($limit, $start){
        $sql = "SELECT A.title As CityName, A.id As id FROM city A WHERE A.is_active = 1 LIMIT ". $start . ", " . $limit;
        $result = $this->db->query($sql);
        return $result->result();
    }

    public function GetTotalRecords(){
        $sql = "SELECT A.title As CityName, A.id As id FROM city A WHERE A.is_active = 1";
        $result = $this->db->query($sql);
        return $result->num_rows();
    }
}