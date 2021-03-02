<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_login extends CI_Model
{
    public function login($post)
    {
        //mengambil data dari database
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $post['username']);
        $this->db->where('password', sha1($post['password']));
        $query = $this->db->get();
        return $query;
    }
    public function nama_login($id = null)
    {
        $this->db->from('user');
        if ($id != null) {
            $this->db->where('user_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get($id = null)
    {
        $this->db->from('user');
        if ($id != null) {
            $this->db->where('user_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function simpan($post)
    {
        $data = [
            'name' => $post['fullname'],
            'username' => $post['username'],
            'password' => sha1($post['password']),
            'address' => $post['alamat'],
            'level' => $post['level']
        ];
        $this->db->insert('user', $data);
    }
    public function get_data_byid($id)
    {
        return $this->db->get_where('user', ['user_id' => $id]);
    }
    public function hapus($id)
    {
        $this->db->where('user_id', $id);
        $this->db->delete('user');
    }
    public function update($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
