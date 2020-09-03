<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class LabTest_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('cookie');
    }

    public function Add($Title, $Rate, $FileUrl){
        $Data = array(
            'title' => $Title,
            'rate' => $Rate,
            'template' => $FileUrl,
            'is_active' => 1
        );
        if($this->db->insert('lab_tests', $Data)){
            return true;
        }
        else{
            return false;
        }
    }

    public function Update($Id, $data){
        $this->db->where('id', $Id);
        if ($this->db->update('lab_tests', $data)){
            return true;
        }
        else{
            return false;
        }
    }

    public function Read($Id = ''){
        if($Id != ''){
            $sql = "SELECT * FROM lab_tests A WHERE A.is_active = 1 AND A.id = ?";
            $result = $this->db->query($sql, array($Id));
            return $result->result();
        }
        else{
            $sql = "SELECT * FROM lab_tests A WHERE A.is_active = 1";
            $result = $this->db->query($sql);
            return $result->result();
        }
    }

    public function make_datatable($limit, $start){
        $sql = "SELECT * FROM lab_tests A WHERE A.is_active = 1 LIMIT ". $start . ", " . $limit;
        $result = $this->db->query($sql);
        return $result->result();
    }

    public function GetTotalRecords(){
        $sql = "SELECT * FROM lab_tests A WHERE A.is_active = 1";
        $result = $this->db->query($sql);
        return $result->num_rows();
    }
}