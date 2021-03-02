<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        tidak_login();
        $data = [
            'judul' => 'Dashboard',

        ];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('Dashboard/dashboard');
        $this->load->view('layout/footer');
    }
}
