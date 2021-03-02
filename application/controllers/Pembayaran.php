<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Pembayaran extends CI_Controller
{
    public function index()
    {

        tidak_login();
        $data = [
            'judul' => 'Data Pembayaran',
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('Bayar/index');
        $this->load->view('layout/footer');
    }
}
