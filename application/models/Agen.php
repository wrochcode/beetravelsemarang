<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agen extends CI_Model
{
    public function getUserData()
    {
        return $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    }

    public function Read()
    {
        return $this->db->get('agen')->result_array();
        
    }

    public function Create($data)
    {
        $kirts = $this->db->insert('agen', $data);
        return $kirts;
    }

    public function Delete($where)
    {
        $kirts = $this->db->delete('agen', $where);
        return $kirts;
    }
    
    public function Get($where)
    {
        $kirts = $this->db->get_where('agen', $where);
        return $kirts->result_array();
    }

    public function Update($data, $where)
    {
        $kirts = $this->db->update('agen', $data, $where);
        return $kirts;
    }
}
