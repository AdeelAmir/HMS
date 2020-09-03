<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('cookie');
    }

    public function Login($Username, $Password, $Remember){
        if(!$this->session->userdata('userId')){
            $query = $this->db->select('*')
                ->from('users_tb')
                ->where('user_email', $Username)
                ->where('user_password', md5($Password))
                ->where('active_status', 1)
                ->get();
            $Count = $query->num_rows();
            $Result = $query->row();
            if($Count > 0){
                $this->session->set_userdata('userId', $Result->user_id);
                $this->session->set_userdata('userType', $Result->user_type);
                $this->session->set_userdata('userFirst', $Result->first_name);
                $this->session->set_userdata('userLast', $Result->last_name);
                $this->session->set_userdata('userEmail', $Result->user_email);

                // Remove cookies first
                $cookieEmail = array(
                    'name' => 'emailUser',
                    'value' => '',
                    'expire' => -3600,
                    'path' => '/',
                );
                $cookiePassword = array(
                    'name' => 'passwordUser',
                    'value' => '',
                    'expire' => -3600,
                    'path' => '/',
                );
                $this->input->set_cookie($cookieEmail);
                $this->input->set_cookie($cookiePassword);
                //Set New Cookies
                if($Remember == true){
                    $cookieEmail = array(
                        'name' => 'emailUser',
                        'value' => $Username,
                        'expire' => 99 * 999 * 999,
                        'path' => '/',
                    );
                    $cookiePassword = array(
                        'name' => 'passwordUser',
                        'value' => $Password,
                        'expire' => 99 * 999 * 999,
                        'path' => '/',
                    );
                    $this->input->set_cookie($cookieEmail);
                    $this->input->set_cookie($cookiePassword);
                }
                return true;
            }
            else{
                return false;
            }
        }
        else{
            return true;
        }
    }

    public function CheckOldPassword($Password){
        $query = $this->db->select('*')
            ->from('users_tb')
            ->where('user_id', $this->session->userdata('userId'))
            ->get();
        $Result = $query->row();
        if(md5($Password) == $Result->user_password){
            return true;
        }
        else{
            return false;
        }
    }

    public function UpdatePassword($Password){
        $Data = array(
            'user_password' => md5($Password)
        );
        if($this->db->update('users_tb', $Data, array('user_id' => $this->session->userdata('userId')))){
            return true;
        }
        else{
            return false;
        }
    }
}