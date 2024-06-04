<?php

class M_kategori extends CI_Model
{
    public function data_elektronik()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'Elektronik'));
    }
    public function data_pria()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'Pakaian Pria'));
    }

    public function data_wanita()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'Pakaian Wanita'));
    }

    public function data_anak()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'Pakaian Anak-Anak'));
    }

    public function peralatan_olahraga()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'Peralatan Olahraga'));
    }
}
