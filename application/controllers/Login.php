<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
    }

    public function index()
    {
        sudah_login();
        $data = [
            'judul' => ('LOGIN')
        ];
        $this->load->view('Login/login', $data);
    }
    public function auth()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($post['login'])) {
            $query = $this->M_login->login($post);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                $data = [
                    'userid' => $row->user_id,
                    'level' => $row->level
                ];
                $this->session->set_userdata($data);
                echo "<script>alert('selamat login berhasil');
                window.location='" . site_url('/Dashboard') . "';
                </script>";
            } else {
                echo "<script>alert('login gagal , username/password salah');
                window.location='" . site_url('/LOgin') . "';
                </script>";
            }
        }
    }
    public function logout()
    {
        tidak_login();
        $data = ['userid', 'level'];
        $this->session->unset_userdata($data);
        redirect('/Login/index');
    }
}
