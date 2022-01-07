<?php

// untuk cek apakah sudah login sebelum masuk ke menu admin, user, menu
function is_logged_in()
{
    $ci = get_instance(); // untuk memnaggil library CI didalam fungsi ini

    if (!$ci->session->userdata('email')) 
    {
        redirect('auth');
    } 
    else 
    {
        $role_id = $ci->session->userdata('role_id');
        $menu = $ci->uri->segment(1);

        $queryMenu = $ci->db->get_where('user_menu', ['menu' => $menu ])->row_array();

        $menu_id = $queryMenu['id'];

        $userAccess = $ci->db->get_where('user_access_menu', 
                                        [ 'role_id' => $role_id]);

        if ($userAccess->num_rows() < 1) 
        {
            redirect('auth/blocked');
        }
    }
}

function bulan_indo()
{
    $bulan = [ 1 => 'januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
                    'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember' ];
    return $bulan;
}
