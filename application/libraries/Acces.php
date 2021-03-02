<?php

class Acces
{
    protected $ci;
    function __construct()
    {
        $this->ci = &get_instance();
    }
    function nama_login()
    {
        $this->ci->load->model('M_login');
        $user_id = $this->ci->session->userdata('userid');
        $data = $this->ci->M_login->nama_login($user_id)->row();
        return $data;
    }
}
