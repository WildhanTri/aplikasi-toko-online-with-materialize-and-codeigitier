<?php

defined('BASEPATH') or exit ('No Direct script access allowed');

class stok extends MY_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('admin/m_stok');
        if($this->session->userdata('nama') == null){
            $data = array (
                "page" => "Login"
            );
            $this->load->view('admin/login', $data);
        }
    }
    function index(){
        redirect('admin/stok/tampil_data_stok');
    }
    function tampil_data_stok(){
        $data = array (
            "page" => "Stok",
            "data_stok" => $this->m_stok->get_data_stok()
        );
        $this->load->view('admin/stok/stok_index', $data);
    }
    function tambah_stok(){
        $data = array (
            "page" => "Stok",
            "aksi" => "tambah_stok"
        );
        $this->load->view('admin/stok/stok_form', $data);
    }
    function edit_stok($id){
        $data = array (
            "page" => "Stok",
            "aksi" => "edit_stok",
            "data_stok" => $this->m_stok->get_spesifik_stok($id)
        );
        $this->load->view('admin/stok/stok_form', $data);
    }
    function delete_stok($id){
        $stok = array (
            "deleted_on" => date('Y-m-d H:i:s')
        );
        $this->m_stok->delete_data_stok($stok, $id);
        redirect('admin/stok/');
    }
    function proses_edit_stok(){
        $stok = array (
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'nomor_telepon' => $this->input->post('nomor_telepon'),
            'alamat_email' => $this->input->post('alamat_email'),
            'updated_on' => date('Y-m-d H:i:s')
        );
        $this->m_stok->update_data_stok($stok);
        redirect('admin/stok/');
    }
    
    function proses_tambah_stok(){
        $stok = array (
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'nomor_telepon' => $this->input->post('nomor_telepon'),
            'alamat_email' => $this->input->post('alamat_email')
        );
        $this->m_stok->add_data_stok($stok);
        redirect('admin/stok/');
    }
}

?>
