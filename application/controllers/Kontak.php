<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kontak extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        tidak_login();
    }
    public function index()
    {
        $data = [
            'judul' => 'Kontak Admin'
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('kontak/index');
        $this->load->view('layout/footer');
    }
}
