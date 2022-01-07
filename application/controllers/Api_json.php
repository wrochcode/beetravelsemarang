<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_json extends CI_Controller 
{
	public function __construct()
	{
        parent::__construct();
        $this->load->model('Modelku');
	}
    public function index()
	{
        $kode = $this->input->get('kode');
        $where = array('kode' => $kode);
        $cek = count($this->Modelku->getDataKhusus("api",$where));
        if($cek>0)
        {
            $dataa1 = $this->Modelku->getData("agen");
            $dataa2 = $this->Modelku->getData("testimoni");
            $data = array( "agen" => $dataa1,
                            "testimoni" => $dataa2);
            echo json_encode ($data);
        }
        else
        {
            echo "Anda tak punya akses";
        }   
        // $this->load->view("home", $data);
	}
}
