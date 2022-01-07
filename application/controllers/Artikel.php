<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{
    public function get($pwl)
    {
        $this->load->model('Materi');
        $kirts['materi'] = $this->Materi->Read();
        $dataPenunjuk = array( 'id_materi' => $pwl);
        $kirts['data'] = $this->Materi->Get( $dataPenunjuk);
		// $kirts = array( "data" => $kirt );
        $this->load->view('artikel',$kirts);
    }
}

