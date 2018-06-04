<?php

defined('BASEPATH') or exit ('No Direct script access allowed');

class transaksi extends MY_Controller {
    function __construct(){
        parent::__construct();
    }
    function index(){
        if($this->session->userdata('nama') != null){
            $data = array (
                "page" => "Transaksi"
            );
            $this->load->view('admin/transaksi/transaksi_index', $data);
        }else{
            $data = array (
                "page" => "Login"
            );
            $this->load->view('admin/login', $data);
        }
    }
}

?>
