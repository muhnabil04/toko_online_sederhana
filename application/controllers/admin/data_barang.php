<?php
class Data_barang extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  Anda Belum Login!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');

            redirect('auth/login');
            exit; // or return; depending on your preference
        }
    }

    public function index()
    {
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view("template_admin/header");
        $this->load->view("template_admin/sidebar");
        $this->load->view("admin/data_barang", $data);
        $this->load->view("template_admin/footer");
    }

    public function tambah_aksi()
    {
        $nama_barang = $this->input->post("nama_barang");
        $keterangan = $this->input->post("keterangan");
        $kategori = $this->input->post("kategori");
        $stok = $this->input->post("stok");
        $harga = $this->input->post("harga");
        $gambar = $_FILES['gambar']['name'];

        if ($gambar == '') {
            echo 'foto tidak boleh kosong';
        } else {
            $config['upload_path']      = './assets/uploads';
            $config['allowed_types'] = 'jpg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                $error = $this->upload->display_errors();
                echo "Upload Gagal: " . $error;
                die();
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }



        $data = array(
            'nama_barang' => $nama_barang,
            'keterangan' => $keterangan,
            'kategori' => $kategori,
            'stok' => $stok,
            'harga' => $harga,
            'gambar' => $gambar,
        );


        $this->model_barang->input_barang($data, 'tb_barang');
        redirect('admin/data_barang');
    }

    public function edit($id)
    {
        $where = array('id' => $id);
        $data['barang'] = $this->model_barang->edit_barang($where, 'tb_barang')->result();
        $this->load->view("template_admin/header");
        $this->load->view("template_admin/sidebar");
        $this->load->view("admin/edit_barang", $data);
        $this->load->view("template_admin/footer");
    }

    public function update()
    {
        $id = $this->input->post('id');
        $nama_barang = $this->input->post("nama_barang");
        $keterangan = $this->input->post("keterangan");
        $kategori = $this->input->post("kategori");
        $stok = $this->input->post("stok");
        $harga = $this->input->post("harga");

        $data = array(
            'nama_barang' => $nama_barang,
            'keterangan' => $keterangan,
            'kategori' => $kategori,
            'stok' => $stok,
            'harga' => $harga,
        );

        $where = array(
            'id' => $id
        );

        $this->model_barang->update_barang($where, $data, 'tb_barang');
        redirect('admin/data_barang');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->model_barang->hapus_data($where, 'tb_barang');
        redirect('admin/data_barang');
    }
}
