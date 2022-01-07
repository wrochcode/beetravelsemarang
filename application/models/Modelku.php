<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelku extends CI_Model
{
    public function getData($tabel)
    {
        $aban = $this->db->get($tabel);
        return $aban->result_array();
    }
    public function masukkan($tabel, $data)
    {
        $aban = $this->db->insert($tabel, $data);
        return $aban;
    }
    public function pembaruan($tabel, $data, $where)
    {
        $aban = $this->db->update($tabel, $data, $where);
        return $aban;
    }
    public function hapus($tabel, $where)
    {
        $aban = $this->db->delete($tabel, $where);
        return $aban;
    }
    public function getDataKhusus($tabel, $where)
    {
        $aban = $this->db->get_where($tabel, $where);
        return $aban->result_array();
    }
}
