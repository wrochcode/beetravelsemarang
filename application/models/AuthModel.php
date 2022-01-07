<?php

class AuthModel extends CI_Model
{
    public function loginVal()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run()) {
            return true;
        } else {
            return false;
        }
    }
}
