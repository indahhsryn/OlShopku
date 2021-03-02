<?php

class M_barang extends CI_Model
{
    protected $table = 'tb_barang';
    protected $primary_key = 'kode_barang';

    public function insert_barang($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->affected_rows();
    }
    public function update_barang($id, $data)
    {
        $this->db->where($this->primary_key, $id);
        $this->db->update($this->table, $data);
        return $this->db->affected_rows();
    }
    public function delete_barang($id)
    {
        $this->db->where($this->primary_key, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
    public function get($id = null)
    {
        if ($id != null) {
            $this->db->select('b.*,s.nama_satuan,k.nama_kategori');
            $this->db->from($this->table . ' b');
            $this->db->where($this->primary_key, $id);
            $this->db->join('tb_kategori k', 'k.id_kategori = b.kategori_barang');
            $this->db->join('tb_satuan s', 's.id_satuan = b.satuan_barang');
            return $this->db->get()->row();
        } else {

            $this->db->select('b.*,s.nama_satuan,k.nama_kategori');
            $this->db->from($this->table . ' b');
            $this->db->join('tb_kategori k', 'k.id_kategori = b.kategori_barang');
            $this->db->join('tb_satuan s', 's.id_satuan = b.satuan_barang');
            return $this->db->get()->result();
        }
    }
}
