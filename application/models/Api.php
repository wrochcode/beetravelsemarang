<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Api extends CI_Model
{
    public function getUserData()
    {
        return $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    }

    public function Read()
    {
        return $this->db->get('api')->result_array();
        
    }

    public function Create($data)
    {
        $kirts = $this->db->insert('api', $data);
        return $kirts;
    }

    public function Delete($where)
    {
        $kirts = $this->db->delete('api', $where);
        return $kirts;
    }
    
    public function Get($where)
    {
        $kirts = $this->db->get_where('api', $where);
        return $kirts->result_array();
    }

    public function Update($data, $where)
    {
        $kirts = $this->db->update('api', $data, $where);
        return $kirts;
    }
}
