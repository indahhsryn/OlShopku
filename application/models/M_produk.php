<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_produk extends CI_Model
{
    public function tampil($id = null)
    { {
            $this->db->from('tb_barang');
            if ($id != null) {
                $this->db->where('id', $id);
            }
            $query = $this->db->get();
            return $query;
        }
    }
    public function find($id)
    {
        $result = $this->db->where('kode_barang', $id)
            ->limit(1)
            ->get('tb_barang');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return [];
        }
    }

    public function get_data($id)
    {
        return $this->db->get_where('tb_barang', ['kode_barang' => $id]);
    }
    public function delete($id)
    {
        $this->db->where('kode_barang', $id);
        $this->db->delete('tb_barang');
        return $this->db->affected_rows();
    }
}
