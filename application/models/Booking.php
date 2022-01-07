<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Booking extends CI_Model
{
    public function getUserData()
    {
        return $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    }

    public function Read()
    {
        $this->db->order_by('no_pesan', 'DESC');
        return $this->db->get('booking')->result_array();
        
    }

    public function Create($data)
    {
        $kirts = $this->db->insert('booking', $data);
        return $kirts;
    }

    public function Delete($where)
    {
        $kirts = $this->db->delete('booking', $where);
        return $kirts;
    }
    
    public function Get($where)
    {
        $kirts = $this->db->get_where('booking', $where);
        return $kirts->result_array();
    }

    public function Update($data, $where)
    {
        $kirts = $this->db->update('booking', $data, $where);
        return $kirts;
    }
}
