<?php

class Model_barang extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tb_barang');
    }

    public function input_barang($data)
    {
        $this->db->insert('tb_barang', $data);
    }

    public function edit_barang($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_barang($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function find($id)
    {
        $result = $this->db->where('id', $id)->limit(1)->get('tb_barang');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function detail_brg($id)
    {
        $result = $this->db->where('id', $id)->get('tb_barang');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return flase;
        }
    }
}
