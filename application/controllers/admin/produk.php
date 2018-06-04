<?php

defined('BASEPATH') or exit ('No Direct script access allowed');

class produk extends MY_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('admin/m_produk');
        if($this->session->userdata('nama') == null){
            $data = array (
                "page" => "Login"
            );
            $this->load->view('admin/login', $data);
        }
    }
    function index(){
        redirect('admin/produk/tampil_data_produk');
    }
    function tampil_data_produk(){
        $data = array (
            "page" => "Produk",
            "data_produk" => $this->m_produk->get_data_produk()
        );
        $this->load->view('admin/produk/produk_index', $data);
    }
    function tambah_produk(){
        $data = array (
            "page" => "Produk",
            "aksi" => "tambah_produk",
            "kategori_produk" => $this->kategori_produk(),
        );
        $this->load->view('admin/produk/produk_form', $data);
    }
    function edit_produk($id){
        $data = array (
            "page" => "Produk",
            "aksi" => "edit_produk",
            "data_produk" => $this->m_produk->get_spesifik_produk($id),
            "kategori_produk" => $this->kategori_produk(),
        );
        $this->load->view('admin/produk/produk_form', $data);
    }
    function delete_produk($id){
        $produk = array (
            "deleted_on" => date('Y-m-d H:i:s')
        );
        $this->m_produk->delete_data_produk($produk, $id);
        redirect('admin/produk/');
    }
    function proses_edit_produk(){
        $produk = array (
            'nama_produk' => $this->input->post('nama_produk'),
            'kategori_produk' => $this->input->post('kategori_produk'),
            'deskripsi_produk' => $this->input->post('deskripsi_produk'),
            'updated_on' => date('Y-m-d H:i:s')
        );
        $this->m_produk->update_data_produk($produk);
        redirect('admin/produk/');
    }
    
    function proses_tambah_produk(){
        $produk = array (
            'nama_produk' => $this->input->post('nama_produk'),
            'kategori_produk' => $this->input->post('kategori_produk'),
            'deskripsi_produk' => $this->input->post('deskripsi_produk')
        );
        $this->m_produk->add_data_produk($produk);
        redirect('admin/produk/');
    }
}

?>
