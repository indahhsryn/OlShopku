<?php

class Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        tidak_login();
        check_admin();
        $this->load->model('M_barang');
    }
    public function index()
    {
        $data = [
            'judul' => 'Data Barang',
            'barang' => $this->M_barang->get()
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('barang/index');
        $this->load->view('layout/footer');
    }

    public function simpan()
    {
        $kode_barang = $this->input->post('kode_barang');
        if ($kode_barang == "") {
            $data = [
                'nama_barang' => $this->input->post('nabar', true),
                'satuan_barang' => $this->input->post('satbar', true),
                'kategori_barang' => $this->input->post('katbar', true),
                'harga_beli' => $this->input->post('harbel', true),
                'harga_jual' => $this->input->post('harjul', true),
                'stok' => $this->input->post('stok', true)
            ];

            $tambah = $this->M_barang->insert_barang($data);
            if ($tambah > 0) {
                $this->session->set_flashdata('pesan', 'Data Berhasil di Simpan');
            } else {
                $this->session->set_flashdata('pesan', 'Data Gagal di Simpan');
            }
            redirect('/Barang');
        } else {
            $data = [
                'nama_barang' => $this->input->post('nabar', true),
                'satuan_barang' => $this->input->post('satbar', true),
                'kategori_barang' => $this->input->post('katbar', true),
                'harga_beli' => $this->input->post('harbel', true),
                'harga_jual' => $this->input->post('harjul', true),
                'stok' => $this->input->post('stok', true)
            ];

            $update = $this->M_barang->update_barang($kode_barang, $data);
            if ($update > 0) {
                $this->session->set_flashdata('pesan', 'Data Berhasil di Update');
            } else {
                $this->session->set_flashdata('pesan', 'Data Gagal di Update');
            }
            redirect('/Barang');
        }
    }
    public function tambah()
    {
        $data = [
            'judul' => 'Tambah Barang',
            'barang' => $this->M_barang->get(),
            'kategori' => $this->db->get('tb_kategori')->result(),
            'satuan' => $this->db->get('tb_satuan')->result()
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('barang/form');
        $this->load->view('layout/footer');
    }
    public function edit()
    {
        $kode_barang = $this->uri->segment(3);
        $data = [
            'dt' => $this->M_barang->get($kode_barang),
            'judul' => 'Edit Barang',
            'barang' => $this->M_barang->get(),
            'kategori' => $this->db->get('tb_kategori')->result(),
            'satuan' => $this->db->get('tb_satuan')->result()
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('barang/edit');
        $this->load->view('layout/footer');
    }
    public function hapus()
    {
        $kode_barang = $this->uri->segment(3);
        $hapus = $this->M_barang->delete_barang($kode_barang);
        if ($hapus > 0) {
            $this->session->set_flashdata('pesan', 'Data Berhasil di Hapus');
        } else {
            $this->session->set_flashdata('pesan', 'Data Gagal di Hapus');
        }
        redirect('/Barang');
    }
}
