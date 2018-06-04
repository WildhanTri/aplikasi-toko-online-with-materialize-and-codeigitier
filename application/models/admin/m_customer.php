<?php

defined('BASEPATH') or exit ('No Direct script access allowed');

class m_customer extends MY_MODEL {
    public function get_data_customer(){
        $this->db->select('*');
        $this->db->from('customer');
        $this->db->where(array('customer.deleted_on' => null));
        return $this->db->get()->result();
    }
    public function add_data_customer($data){
        return $this->db->insert('customer', $data);
    }
    public function update_data_customer($data){
        return $this->db->update('customer', $data);
    }
    public function delete_data_customer($data, $id){
        return $this->db->update('customer', $data, array('id_customer' => $id));
    }
    public function get_spesifik_customer($id){
        $this->db->select('*');
        $this->db->from('customer');
        $this->db->where(array('customer.id_customer' => $id));
        return $this->db->get()->result();
    }
}

?>