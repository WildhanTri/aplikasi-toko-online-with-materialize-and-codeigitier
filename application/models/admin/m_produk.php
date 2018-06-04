<?php

defined('BASEPATH') or exit ('No Direct script access allowed');

class m_produk extends MY_MODEL {
    public function get_data_produk(){
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->join('produk_kategori', 'produk.kategori_produk = produk_kategori.id_kategori');
        $this->db->join('produk_stok', 'produk.id_produk = produk_stok.id_produk');
        $this->db->where(array('produk.deleted_on' => null));
        return $this->db->get()->result();
    }
    public function add_data_produk($data){
        return $this->db->insert('produk', $data);
    }
    public function update_data_produk($data){
        return $this->db->update('produk', $data);
    }
    public function delete_data_produk($data, $id){
        return $this->db->update('produk', $data, array('id_produk' => $id));
    }
    public function get_spesifik_produk($id){
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->join('produk_kategori', 'produk.kategori_produk = produk_kategori.id_kategori');
        $this->db->join('produk_stok', 'produk.id_produk = produk_stok.id_produk');
        $this->db->where(array('produk.id_produk' => $id));
        return $this->db->get()->result();
    }
}

?>