<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
    public function index()
    {
        $data['materi']  = $this->Materi->Read();
        $data['testimoni']  = $this->Testimoni->Read();
        $this->load->view('index',$data);
    }
}
