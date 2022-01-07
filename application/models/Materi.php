<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Materi extends CI_Model
{
    public function getUserData()
    {
        return $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    }

    public function Read()
    {
        return $this->db->get('materi')->result_array();
        
    }

    public function Create($data)
    {
        $kirts = $this->db->insert('materi', $data);
        return $kirts;
    }

    public function Delete($where)
    {
        $kirts = $this->db->delete('materi', $where);
        return $kirts;
    }
    
    public function Get($where)
    {
        $kirts = $this->db->get_where('materi', $where);
        return $kirts->result_array();
    }

    public function Update($data, $where)
    {
        $kirts = $this->db->update('materi', $data, $where);
        return $kirts;
    }
}
