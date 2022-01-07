<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();//kaya session
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->AdminModel->getUserData();
        $data['materi']  = $this->Materi->Read();
        $data['m']  = count($data['materi']);
        $data['booking']  = $this->Booking->Read();
        $data['b']  = count($data['booking']);
        $data['agen']  = $this->Agen->Read();
        $data['a']  = count($data['agen']);
        $data['testi']  = $this->Testimoni->Read();
		$data['t']  = count($data['testi']);
		$data['booking']  = $this->Booking->Read();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/user_footer');
    }

    //Materi
    public function materi()
    {
        $data['title'] = 'Artikel';
        $data['user']  = $this->Materi->getUserData();
        $data['materi']  = $this->Materi->Read();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('admin/materi', $data);
        $this->load->view('templates/user_footer');

    }
    public function input_materi()
    {
        $data['title'] = 'Artikel';
        $data['user']  = $this->Materi->getUserData();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('admin/materi_tambah');
        $this->load->view('templates/user_footer');
    }
    public function delete_materi($where)
	{
		$number = array( 'id_materi' => $where);
		$this->load->model('Materi');
		$this->Materi->Delete($number);
		redirect(base_url('admin/materi'),'refresh');
    }
    public function get_materi($penunjuk) // ambil data pada sarung
	{
        
        $data['title'] = 'Artikel';
        $data['user']  = $this->Materi->getUserData();

		$dataPenunjuk = array( 'id_materi' => $penunjuk);
		$this->load->model('Materi');
		$kirt = $this->Materi->Get( $dataPenunjuk);
		$kirts = array( "data" => $kirt );
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('admin/materi_edit', $kirts);
        $this->load->view('templates/user_footer');
    }
    
    public function verif_input_materi()
    {
        $this->load->model('Materi');
        $submit_data = array(	'cabang' => $this->input->post('judul'),
                                'isi' => $this->input->post('isi'),);
                                // 'gambar' => $gambar);
		$this->Materi->Create($submit_data);
		redirect(base_url('admin/materi'),'refresh');
    }
    public function verif_edit_materi()
    {
        $this->load->model('Materi');
        $submit_data = array(   'cabang' => $this->input->post('judul'),
                                'isi' => $this->input->post('isi'));
        $dataPenunjuk = array(  'id_materi' => $this->input->post('id'));
		$this->Materi->Update($submit_data, $dataPenunjuk);
		redirect(base_url('admin/materi'),'refresh');
    }


    //Booking
    public function booking()
    {
        $data['title'] = 'Daftar Booking Tempat Wisata';
        $data['user']  = $this->Booking->getUserData();
        $data['booking']  = $this->Booking->Read();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('admin/booking', $data);
        $this->load->view('templates/user_footer');

    }
    public function input_booking()
    {
        $data['title'] = 'Formulir Input Booking';
        $data['user']  = $this->Booking->getUserData();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('admin/booking_tambah');
        $this->load->view('templates/user_footer');
    }
    public function delete_booking($where)
	{
		$number = array( 'no_pesan' => $where);
		$this->load->model('Booking');
		$this->Booking->Delete($number);
		redirect(base_url('admin/booking'),'refresh');
    }
    public function get_booking($penunjuk) // ambil data pada sarung
	{
        
        $data['title'] = 'Formulir Edit Booking';
        $data['user']  = $this->Booking->getUserData();

		$dataPenunjuk = array( 'no_pesan' => $penunjuk);
		$this->load->model('Booking');
		$kirt = $this->Booking->Get( $dataPenunjuk);
		$kirts = array( "data" => $kirt );
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('admin/booking_edit', $kirts);
        $this->load->view('templates/user_footer');
    }
    public function verif_input_booking()
    {
        $this->load->model('Booking');
        $dataproduk = $this->Booking->Read("materi");
        $countdata= count($dataproduk)+1+100;
        // $submit_data = array(	'id_materi' => $countdata,
        $submit_data = array(	'nama' => $this->input->post('nama'),
                                'kontak' => $this->input->post('kontak'),
                                'waktu' => $this->input->post('waktu'),
								'agen' => $this->input->post('agen'),
								'status' => 0,
                                'tanggal' => $this->input->post('tanggal'));
		$this->Booking->Create($submit_data);
		redirect(base_url('admin/booking'),'refresh');
    }
    public function verif_edit_booking()
    {
        $this->load->model('Booking');
        $submit_data = array(   'nama' => $this->input->post('nama'),
                                'kontak' => $this->input->post('kontak'),
								'agen' => $this->input->post('agen'),
								'status' => $this->input->post('status'),
                                'waktu' => $this->input->post('waktu'));
        $dataPenunjuk = array(  'no_pesan' => $this->input->post('nomor'));
		$this->Booking->Update($submit_data, $dataPenunjuk);
		redirect(base_url('admin/booking'),'refresh');
    }

    //Agen
    public function Agen()
    {
        $data['title'] = 'Partner Pariwisata';
        $data['user']  = $this->Agen->getUserData();
        $data['agen']  = $this->Agen->Read();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('admin/agen', $data);
        $this->load->view('templates/user_footer');

    }
    public function input_agen()
    {
        $data['title'] = 'Formulir Input Partner';
        $data['user']  = $this->Agen->getUserData();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('admin/agen_tambah');
        $this->load->view('templates/user_footer');
    }
    public function delete_agen($where)
	{
		$number = array( 'no_agen' => $where);
		$this->load->model('Agen');
		$this->Agen->Delete($number);
		redirect(base_url('admin/agen'),'refresh');
    }
    public function get_agen($penunjuk) // ambil data pada sarung
	{
        
        $data['title'] = 'Formulir Edit Partner';
        $data['user']  = $this->Agen->getUserData();

		$dataPenunjuk = array( 'no_agen' => $penunjuk);
		$this->load->model('Agen');
		$kirt = $this->Agen->Get( $dataPenunjuk);
		$kirts = array( "data" => $kirt );
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('admin/agen_edit', $kirts);
        $this->load->view('templates/user_footer');
    }
    public function verif_input_agen()
    {
        $this->load->model('Agen');
        $dataproduk = $this->Agen->Read("agen");
        $countdata= count($dataproduk)+1+100;
        // $submit_data = array(	'id_materi' => $countdata,
        // $submit_data = array(	'no_agen' => $this->input->post('nomor'),
        $submit_data = array(	'nama' => $this->input->post('nama'),
                                'kategori' => $this->input->post('kategori'),
                                'kontak' => $this->input->post('kontak'),
                                'alamat' => $this->input->post('alamat'),
                                'fasilitas' => $this->input->post('fasilitas'));
		$this->Agen->Create($submit_data);
		redirect(base_url('admin/agen'),'refresh');
    }
    public function verif_edit_Agen()
    {
        $this->load->model('Agen');
        $submit_data = array(   'nama' => $this->input->post('nama'),
                                'kategori' => $this->input->post('kategori'),
                                'kontak' => $this->input->post('kontak'),
                                'alamat' => $this->input->post('alamat'),
                                'fasilitas' => $this->input->post('fasilitas'));
        $dataPenunjuk = array(  'no_agen' => $this->input->post('nomor'));
		$this->Agen->Update($submit_data, $dataPenunjuk);
		redirect(base_url('admin/agen'),'refresh');
    }

    //testimoni
    public function testimoni()
    {
        $data['title'] = 'Testimoni';
        $data['user']  = $this->Testimoni->getUserData();
        $data['testi']  = $this->Testimoni->Read();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('admin/testi', $data);
        $this->load->view('templates/user_footer');

    }
    
    public function delete_testimoni($where)
	{
		$number = array( 'id' => $where);
		$this->load->model('Testimoni');
		$this->Testimoni->Delete($number);
		redirect(base_url('admin/testimoni'),'refresh');
    }

    //Api
    public function api()
    {
        $data['title'] = 'Akses API';
        $data['user']  = $this->Api->getUserData();
        $data['api']  = $this->Api->Read();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('admin/api', $data);
        $this->load->view('templates/user_footer');

    }
    public function input_api()
    {
        $data['title'] = 'Form Akses API';
        $data['user']  = $this->Api->getUserData();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('admin/api_tambah');
        $this->load->view('templates/user_footer');
    }
    public function delete_api($where)
	{
		$number = array( 'id' => $where);
		$this->load->model('Api');
		$this->Api->Delete($number);
		redirect(base_url('admin/api'),'refresh');
    }
    public function get_Api($penunjuk) // ambil data pada sarung
	{
        
        $data['title'] = 'Edit Akses API';
        $data['user']  = $this->Api->getUserData();

		$dataPenunjuk = array( 'id' => $penunjuk);
		$this->load->model('Api');
		$kirt = $this->Api->Get( $dataPenunjuk);
		$kirts = array( "data" => $kirt );
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('admin/api_edit', $kirts);
        $this->load->view('templates/user_footer');
    }
    
    public function verif_input_api()
    {
        $this->load->model('Api');
        $submit_data = array(	'nama' => $this->input->post('nama'),
                                'kode' => $this->input->post('kode'));
		$this->Api->Create($submit_data);
		redirect(base_url('admin/api'),'refresh');
    }
    public function verif_edit_api()
    {
        $this->load->model('Api');
        $submit_data = array(   'nama' => $this->input->post('nama'),
                                'kode' => $this->input->post('kode'));
        $dataPenunjuk = array(  'id' => $this->input->post('id'));
		$this->Api->Update($submit_data, $dataPenunjuk);
		redirect(base_url('admin/api'),'refresh');
    }
}
