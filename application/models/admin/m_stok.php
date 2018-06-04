<?php

defined('BASEPATH') or exit ('No Direct script access allowed');

class m_stok extends MY_MODEL {
    public function get_data_stok(){
        $this->db->select('*');
        $this->db->from('produk_stok');
        $this->db->join('produk', 'produk.id_produk = produk_stok.id_produk');
        $this->db->where(array('produk.deleted_on' => null));
        return $this->db->get()->result();
    }
    public function add_data_stok($data){
        return $this->db->insert('stok', $data);
    }
    public function update_data_stok($data){
        return $this->db->update('stok', $data);
    }
    public function delete_data_stok($data, $id){
        return $this->db->update('stok', $data, array('id_stok' => $id));
    }
    public function get_spesifik_stok($id){
        $this->db->select('*');
        $this->db->from('stok');
        $this->db->where(array('stok.id_stok' => $id));
        return $this->db->get()->result();
    }
}

?>