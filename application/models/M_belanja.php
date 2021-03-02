<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_belanja extends CI_Model
{
    public function get($id = null)
    {
        $this->db->from('data_belanja');
        if ($id != null) {
            $this->db->where('id_barang', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
        return $this->db->affected_rows();
    }
}
