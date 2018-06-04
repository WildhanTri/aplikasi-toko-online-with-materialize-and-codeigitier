<?php

defined('BASEPATH') or exit ('No Direct script access allowed');

class m_admin extends MY_MODEL {
    
    public function get_data_produk(){
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->join('produk_kategori', array('produk.kategori_produk' => 'produk_kategori.id_kategori'));
        $this->db->join('produk_stok', array('produk.id_produk' => 'produk_stok.id_produk'));
        return $this->db->get()->result();
    }
}

?>