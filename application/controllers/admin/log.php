<?php

defined('BASEPATH') or exit ('No Direct script access allowed');

class log extends MY_Controller {
    function __construct(){
        parent::__construct();
    }
    function index(){
        if($this->session->userdata('nama') != null){
            $data = array (
                "page" => "Log"
            );
            $this->load->view('admin/log/log_index', $data);
        }else{
            $data = array (
                "page" => "Login"
            );
            $this->load->view('admin/login', $data);
        }
    }
}

?>
