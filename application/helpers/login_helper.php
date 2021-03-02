<?php
function sudah_login()
{
    $ci = &get_instance();
    $user = $ci->session->userdata('userid');
    if ($user) {
        redirect('/Dashboard');
    }
}
function tidak_login()
{
    $ci = &get_instance();
    $user = $ci->session->userdata('userid');
    if (!$user) {
        redirect('/Login');
    }
}
function check_admin()
{
    $ci = &get_instance();
    $ci->load->library('acces');
    if ($ci->acces->nama_login()->level != 1) {
        redirect('/dashboard');
    }
}
