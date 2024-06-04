<?php

class Kategori extends CI_Controller
{
    public function elektronik()
    {
        $data['elektronik'] = $this->m_kategori->data_elektronik()->result();
        $this->load->view("template/header");
        $this->load->view("template/sidebar");
        $this->load->view("elektronik", $data);
        $this->load->view("template/footer");
    }

    public function pakaian_pria()
    {
        $data['pakaian_pria'] = $this->m_kategori->data_pria()->result();
        $this->load->view("template/header");
        $this->load->view("template/sidebar");
        $this->load->view("pakaian_pria", $data);
        $this->load->view("template/footer");
    }

    public function pakaian_wanita()
    {
        $data['pakaian_wanita'] = $this->m_kategori->data_wanita()->result();
        $this->load->view("template/header");
        $this->load->view("template/sidebar");
        $this->load->view("pakaian_wanita", $data);
        $this->load->view("template/footer");
    }

    public function pakaian_anak_anak()
    {
        $data['pakaian_anak_anak'] = $this->m_kategori->data_anak()->result();
        $this->load->view("template/header");
        $this->load->view("template/sidebar");
        $this->load->view("pakaian_anak", $data);
        $this->load->view("template/footer");
    }

    public function peralatan_olahraga()
    {
        $data['peralatan_olahraga'] = $this->m_kategori->peralatan_olahraga()->result();
        $this->load->view("template/header");
        $this->load->view("template/sidebar");
        $this->load->view("peralatan_olahraga", $data);
        $this->load->view("template/footer");
    }
}
