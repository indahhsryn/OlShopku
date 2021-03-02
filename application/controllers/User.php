<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        tidak_login();
        check_admin();
        $this->load->model('M_login');
    }
    public function index()
    {

        $data = [
            'row' => $this->M_login->get(),
            'judul' => 'Data Users'
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('user/user');
        $this->load->view('layout/footer');
    }
    public function tambah()
    {
        $data = [
            'judul' => 'Add User',
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('user/user_tambah');
        $this->load->view('layout/footer');
    }
    public function simpan()
    {
        $post = $this->input->post(null, TRUE);
        $this->M_login->simpan($post);
        if ($this->db->affected_rows() > 0) {
            echo "<script> alert('Data berhasil disimpan');
            </script>";
        }
        echo "<script>window.location='" . site_url('/User') . "'</script>";
    }
    public function edit()
    {
        $id = $this->uri->segment(3);

        $data = [
            'judul' => 'Edit data',
            'user' =>  $this->M_login->get_data_byid($id)->row()
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('user/edit');
        $this->load->view('layout/footer');
    }
    public function hapus()
    {
        $id  = $this->input->post('user_id');
        $this->M_login->hapus($id);
        if ($this->db->affected_rows() > 0) {
            echo "<script> alert('Data berhasil dihapus');
            </script>";
        }
        echo "<script>window.location='" . site_url('/User') . "'</script>";
    }
    public function update()
    {
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $alamat = $this->input->post('alamat');
        $level = $this->input->post('level');

        $data = [
            'name' => $name,
            'username' => $username,
            'password' => $password,
            'alamat' => $alamat,
            'level' => $level
        ];
        $where = [
            'id' => $id
        ];
        $this->M_login->update($where, $data, 'user');
        redirect('/User');
    }
}
