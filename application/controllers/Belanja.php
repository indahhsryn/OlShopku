<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Belanja extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_belanja');
    }

    public function tambah()
    {
        $data = [
            'judul' => 'Tambah Belanja',

        ];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('data_belanja/tambah');
        $this->load->view('layout/footer');
    }



    public function edit()
    {
        $id = $this->uri->segment(3);
        $data = [
            'judul' => 'Edit Data',
            'edit' => $this->M_belanja->get_data($id)->row()
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('data_belanja/edit');
        $this->load->view('layout/footer');
    }
    public function update()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $berat = $this->input->post('berat');
        $harga = $this->input->post('harga');
        $jumlah = $this->input->post('jumlah');
        $total = $this->input->post('total');

        $data = [
            'nama' => $nama,
            'berat' => $berat,
            'harga' => $harga,
            'jumlah' => $jumlah,
            'total' => $total
        ];
        $where = [
            'id_barang' => $id
        ];
        $update = $this->M_belanja->update_data($where, $data, 'data_belanja');
        redirect('/Belanja');
    }

 
}
