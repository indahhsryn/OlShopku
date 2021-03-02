<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_invoice extends CI_Model
{
    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $tgl_pesan = $this->input->post('tgl_pesan');
        $nohp = $this->input->post('nohp');

        $data = [
            'nama' => $nama,
            'alamat' => $alamat,
            'tgl_pesan' => $tgl_pesan,
            'nohp' => $nohp,
            'batas_bayar' => date('Y-m-d H:i:s', mktime(date('H'), date('i'), date('s'), date('m'), date('d') + 3, date('Y'))),
        ];
        $this->db->insert('tb_invoice', $data);
        $id = $this->db->insert_id();

        foreach ($this->cart->contents() as $item) {
            $pesan = [
                'id' => $id,
                'id_brg' => $item['id'],
                'nama_brg' => $item['name'],
                'jumlah' => $item['qty'],
                'harga' => $item['price'],
            ];
            $this->db->insert('tb_pesanan', $pesan);
        }
        return TRUE;
    }
    public function tampil_data($id = null)
    {
        $this->db->from('tb_invoice');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
}
