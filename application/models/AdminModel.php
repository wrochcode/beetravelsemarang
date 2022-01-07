<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminModel extends CI_Model
{
    public function getUserData() //dapat session
    {
        return $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    }
}
