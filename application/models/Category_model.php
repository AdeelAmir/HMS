<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class  Category_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('cookie');
    }

    public function ValidateDepartmentName($DepartmentName){
        $sql = "SELECT * FROM category A WHERE A.title = ? AND A.is_active = 1";
        $result = $this->db->query($sql, array($DepartmentName));
        return $result->num_rows();
    }

    public function Add($Title, $Description){
        $Data = array(
            'title' => $Title,
            'description' => $Description,
            'created_by' => $this->session->userdata('userId'),
            'is_active' => 1
        );

        if ($this->db->insert('category', $Data)){
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

    public function Read($Id = ''){
        if($Id != ''){
            $sql = "SELECT * FROM category A WHERE A.id = ? AND A.is_active = 1";
            $result = $this->db->query($sql, array($Id));
            return $result->result();
        }
        else{
            $sql = "SELECT * FROM category A WHERE A.is_active = 1";
            $result = $this->db->query($sql);
            return $result->result();
        }
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