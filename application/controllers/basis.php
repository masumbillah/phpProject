<?php
session_start();
if ( ! defined('BASEPATH'))
    exit('No direct script access allowed');

class Basis extends CI_Controller {
    //put your code here
    public function __construct() {
        parent::__construct();
        //$this->load->model('basis_model','b_model');
        $admin_id=$this->session->userdata('admin_id');
        if($admin_id != NULL)
        {
            redirect('administrator','refresh');
        }
        
    }
    public function index()
    {
        $this->load->view('admin/admin_login');
    }
    public function admin_login_check()
    {
        $admin_email_address=$this->input->post('admin_email_address',true);
        $password=$this->input->post('password',true);
        
        $result=$this->basis_model->admin_login_check_info($admin_email_address,$password);
        $sdata=array();
        /*echo '<pre>';
        print_r($result);
        exit();*/
        if($result)
        {
            $sdata['admin_name']=$result->admin_name;
            $sdata['admin_id']=$result->admin_id;
            $this->session->set_userdata($sdata);
            redirect('administrator','refresh');
        }
        else{
            $sdata['exception']='Admin Email / Password Invalide !';
            $this->session->set_userdata($sdata);
            redirect('basis');
        }
    }
    
}

?>
