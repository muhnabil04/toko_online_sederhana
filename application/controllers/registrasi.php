<?php

class Registrasi extends CI_Controller
{
    public function index()
    {

        $this->form_validation->set_rules("nama", "Nama", "required", ["required" => "Nama wajib diisi !"]);
        $this->form_validation->set_rules("username", "Username", "required", ["required" => "Username dajib Diisi !"]);
        $this->form_validation->set_rules("password_1", "Password", "required|matches[password_2]", [
            "required" => "Username wajib diisi !",
            "matches" => "Password tidak cocok!"
        ]);
        $this->form_validation->set_rules("password_2", "Password Confirmation", "required|matches[password_1]", [
            "required" => "Username Wajib Diisi !",
            "matches" => "Password Tidak Cocok!"
        ]);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view("template/header");
            $this->load->view("registrasi");
            $this->load->view("template/footer");
        } else {
            $data = array(
                'id' => '',
                'nama' => $this->input->post('nama'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password_1'),
                'password' => $this->input->post('password_2'),
                'role_id' => 2,
            );

            $this->db->insert('tb_user', $data);
            redirect('auth/login');
        }
    }
}
