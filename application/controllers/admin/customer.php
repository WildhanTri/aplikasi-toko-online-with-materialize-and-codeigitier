<?php

defined('BASEPATH') or exit ('No Direct script access allowed');

class customer extends MY_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('admin/m_customer');
        if($this->session->userdata('nama') == null){
            $data = array (
                "page" => "Login"
            );
            $this->load->view('admin/login', $data);
        }
    }
    function index(){
        redirect('admin/customer/tampil_data_customer');
    }
    function tampil_data_customer(){
        $data = array (
            "page" => "Customer",
            "data_customer" => $this->m_customer->get_data_customer()
        );
        $this->load->view('admin/customer/customer_index', $data);
    }
    function tambah_customer(){
        $data = array (
            "page" => "Customer",
            "aksi" => "tambah_customer"
        );
        $this->load->view('admin/customer/customer_form', $data);
    }
    function edit_customer($id){
        $data = array (
            "page" => "Customer",
            "aksi" => "edit_customer",
            "data_customer" => $this->m_customer->get_spesifik_customer($id)
        );
        $this->load->view('admin/customer/customer_form', $data);
    }
    function delete_customer($id){
        $customer = array (
            "deleted_on" => date('Y-m-d H:i:s')
        );
        $this->m_customer->delete_data_customer($customer, $id);
        redirect('admin/customer/');
    }
    function proses_edit_customer(){
        $customer = array (
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'nomor_telepon' => $this->input->post('nomor_telepon'),
            'alamat_email' => $this->input->post('alamat_email'),
            'updated_on' => date('Y-m-d H:i:s')
        );
        $this->m_customer->update_data_customer($customer);
        redirect('admin/customer/');
    }
    
    function proses_tambah_customer(){
        $customer = array (
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'nomor_telepon' => $this->input->post('nomor_telepon'),
            'alamat_email' => $this->input->post('alamat_email')
        );
        $this->m_customer->add_data_customer($customer);
        redirect('admin/customer/');
    }
}

?>
