<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemesanan extends CI_Controller
{
    public function index()
    {
        $this->load->model('Agen');
        $kirts['Agen'] = $this->Agen->Read();
        $this->load->view('booking/booking', $kirts);
    }
    public function get($pwl)
    {
        $this->load->model('Agen');
        $dataPenunjuk = array( 'kategori' => $pwl);
        $kirts['data'] = $this->Materi->Get( $dataPenunjuk);
        $this->load->view('booking/form',$kirts);
    }
    public function form($pwl)
    {
        $this->load->model('Agen');
        $kirts['Agen'] = $this->Agen->Read();
        $dataPenunjuk = array( 'no_agen' => $pwl);
        $kirts['data'] = $this->Agen->Get( $dataPenunjuk);
        $this->load->view('booking/form',$kirts);
    }
    public function verif_input_booking()
    {
        $this->load->model('Booking');
        $dataproduk = $this->Booking->Read("materi");
        $countdata= count($dataproduk)+1+100;
        $submit_data = array(	'nama' => $this->input->post('nama'),
                                'kontak' => $this->input->post('kontak'),
                                'waktu' => $this->input->post('waktu'),
                                'agen' => $this->input->post('agen'),
                                'status' => 0,
                                'tanggal' => $this->input->post('tanggal'));
		$this->Booking->Create($submit_data);
		redirect(base_url('pemesanan'),'refresh');
    }
    public function verif_input_testimoni()
    {
        $this->load->model('Testimoni');
        $submit_data = array(	'nama' => $this->input->post('name'),
                                'email' => $this->input->post('email'),
                                'komentar' => $this->input->post('komentar'));
		$this->Testimoni->Create($submit_data);
		redirect(base_url('Pemesanan'),'refresh');
    }

}

