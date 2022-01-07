<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->library('form_validation');
    }
    public function index()
    {
        $this->goToDefaultPage();

        if ($this->AuthModel->loginVal()) {
            $this->_login();
        } else {
            $data['title'] = 'Login Akun';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/v_login');
            $this->load->view('templates/auth_footer');
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        // jika usernya ada
        if ($user) 
        {
            // jika usernya aktif
            if ($user['is_active'] == 1) 
            {
                // cek password
                if (password_verify($password, $user['password'])) 
                {
                    $data = [ 'email' => $user['email'], 'role_id' => $user['role_id'] ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) 
                    {
                        redirect(base_url('admin'));
                    }
                    else 
                    {
                        redirect('beranda');
                    }
                } 
                else 
                {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password anda salah!</div>');
                    redirect('auth');
                }
            } 
            else 
            {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email anda belum diaktivasi!</div>');
                redirect('auth');
            }
        } 
        else 
        {
            // usernya gak ada
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email anda belum terdaftar! Silahkan registrasi</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda sudah keluar</div>');
        redirect('auth');
    }

    public function goToDefaultPage()
    {
        if ($this->session->userdata('role_id')) 
        {
            redirect('user');
        }
    }

    public function blocked()
    {
        // echo "access blocked";
        $this->load->view('auth/v_blocked');
    }
}
