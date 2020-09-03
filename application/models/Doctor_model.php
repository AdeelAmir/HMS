<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('cookie');
    }

    public function ValidateDoctorEmail($Email){
        $sql = "SELECT * FROM users_tb A WHERE A.user_email = ? AND A.active_status = 1";
        $result = $this->db->query($sql, array($Email));
        return $result->num_rows();
    }

    public function Add($Name, $Email, $Password, $Address, $Phone, $Profile, $Department, $FileUrl){
        $Data = array(
            'full_name' => $Name,
            'user_email' => $Email,
            'user_password' => $Password,
            'user_type' => "doctor",
            'active_status' => 1
        );
        $this->db->trans_begin();
        $this->db->insert('users_tb', $Data);
        if ($this->db->trans_status() === FALSE)
		{
			$this->db->trans_rollback();
			return false;
        }
        else{
            $User = $this->db->insert_id();
            $Data = array(
                'user' => $User,
                'phone' => $Phone,
                'address' => $Address,
                'pic' => $FileUrl,
                'dept_id' => $Department,
                'profile' => $Profile
            );
            if($this->db->insert('doctors', $Data)){
                $this->db->trans_commit();
                return true;
            }
            else{
                $this->db->trans_rollback();
                return false;
            }
        }
    }

    public function Update($Id, $data){
        // Get user_tb id
        $query = $this->db->select('user', false)
		->from('doctors')
		->where('id', $Id);
        $User = $query->get()->row()->user;

        $this->db->where('user_id', $User);
        if ($this->db->update('users_tb', $data)){
            return true;
        }
        else{
            return false;
        }
    }

    public function UpdateDoctor($Id, $data){
        $this->db->where('id', $Id);
        if ($this->db->update('doctors', $data)){
            return true;
        }
        else{
            return false;
        }
    }

    public function Read($Id = ''){
        if($Id != ''){
            $user_type = "doctor";
            $sql = "SELECT B.full_name As full_name, B.user_email As user_email, A.phone As phone, A.address As DoctorAddress, A.pic As pic, A.dept_id As dept_id, A.profile As DoctorProfile FROM doctors A INNER JOIN users_tb B ON A.user = B.user_id INNER JOIN department C ON A.dept_id = C.id WHERE B.active_status = 1 AND B.user_type = ? AND A.id = ?";
            $result = $this->db->query($sql, array($user_type, $Id));
            return $result->result();
        }
        else{
            $user_type = "doctor";
            $sql = "SELECT B.full_name As full_name, B.user_email As user_email, A.phone As phone, A.address As DoctorAddress, A.pic As pic, A.dept_id As dept_id, A.profile As DoctorProfile FROM doctors A INNER JOIN users_tb B ON A.user = B.user_id INNER JOIN department C ON A.dept_id = C.id WHERE B.active_status = 1 AND B.user_type = ?";
            $result = $this->db->query($sql, array($user_type));
            return $result->result();
        }
    }

    public function make_datatable($limit, $start){
        $user_type = "doctor";
        $sql = "SELECT B.full_name As full_name, A.phone As phone, C.title As title, A.id As id FROM doctors A INNER JOIN users_tb B ON A.user = B.user_id INNER JOIN department C ON A.dept_id = C.id WHERE B.active_status = 1 AND B.user_type = ? LIMIT ". $start . ", " . $limit;
        $result = $this->db->query($sql, array($user_type));
        return $result->result();
    }

    public function GetTotalRecords(){
        $user_type = "doctor";
        $sql = "SELECT B.full_name As full_name, A.phone As phone, C.title As title, A.id As id FROM doctors A INNER JOIN users_tb B ON A.user = B.user_id INNER JOIN department C ON A.dept_id = C.id WHERE B.active_status = 1 AND B.user_type = ?";
        $result = $this->db->query($sql, array($user_type));
        return $result->num_rows();
    }
}