<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimoni extends CI_Model
{
    public function getUserData()
    {
        return $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    }

    public function Read()
    {
		$this->db->order_by('id', 'DESC');
        return $this->db->get('testimoni')->result_array();
        // return $this->db->get('testimoni')->result_array();
        
    }

    public function Create($data)
    {
        $kirts = $this->db->insert('testimoni', $data);
        return $kirts;
    }

    public function Delete($where)
    {
        $kirts = $this->db->delete('testimoni', $where);
        return $kirts;
    }
    
    public function Get($where)
    {
        $kirts = $this->db->get_where('testimoni', $where);
        return $kirts->result_array();
    }

    public function Update($data, $where)
    {
        $kirts = $this->db->update('testimoni', $data, $where);
        return $kirts;
    }
}
