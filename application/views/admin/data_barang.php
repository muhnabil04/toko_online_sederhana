<div class="container-fluid">
    <div class="row">
    </div>
    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data Barang</button>
    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA BARANG</th>
                <th>KATEGORI</th>
                <th>STOK</th>
                <th>HARGA</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($barang as $item) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $item->nama_barang ?></td>
                    <td><?php echo $item->kategori ?></td>
                    <td><?php echo $item->stok ?></td>
                    <td><?php echo $item->harga ?></td>
                    <td>
                        <?php echo anchor('admin/data_barang/detail/' . $item->id, '<div class="btn btn-succes btn-sm"><i class="fa fa-search-plus"></i></div>') ?>
                        <?php echo anchor('admin/data_barang/hapus/' . $item->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>
                        <?php echo anchor('admin/data_barang/edit/' . $item->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA BARANG</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url() . 'admin/data_barang/tambah_aksi' ?>" enctype="multipart/form-data" method="post">
                        <div class="form-group">
                            <label>Nama Barang</label>
                            <input type="text" name="nama_barang" class="form-control">
                        </div>


                        <div class="form-group">
                            <label>keterangan</label>
                            <input type="text" name="keterangan" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>stok</label>
                            <input type="text" name="stok" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>harga</label>
                            <input type="text" name="harga" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Kategori</label>
                            <select class="form-control" name="kategori">
                                <option>elektronik</option>
                                <option>Pakaian Pria</option>
                                <option>Pakaian Wanita</option>
                                <option>Pakaian Anak-Anak</option>
                                <option>Peralatan Olahraga</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Upload Foto</label>
                            <input type="file" name="gambar" class="form-control">
                        </div>

                        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>