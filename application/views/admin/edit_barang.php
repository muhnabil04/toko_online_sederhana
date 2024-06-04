<div class="container-fluid">
    <form action="<?php echo base_url() . 'admin/data_barang/update'; ?>" enctype="multipart/form-data" method="post">
        <?php foreach ($barang as $item) : ?>

            <div class="form-group">
                <label>Nama Barang</label>

                <input type="text" name="nama_barang" class="form-control" value="<?php echo $item->nama_barang ?>">
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <input type="hidden" name="id" class="form-control" value="<?php echo $item->id ?>">
                <input type="text" name="keterangan" class="form-control" value="<?php echo $item->keterangan ?>">
            </div>
            <div class="form-group">
                <label>stok</label>
                <input type="text" name="stok" class="form-control" value="<?php echo $item->stok ?>">
            </div>
            <div class="form-group">
                <label>harga</label>
                <input type="text" name="harga" class="form-control" value="<?php echo $item->harga ?>">
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <select class="form-control" name="kategori" value="<?php echo $item->kategori ?>">
                    <option>Elektronik</option>
                    <option>Pakaian Pria</option>
                    <option>Pakaian Wanita</option>
                    <option>Pakaian Anak-Anak</option>
                    <option>Peralatan Olahraga</option>
                </select>
            </div>


            <button type="reset" class="btn btn-danger">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        <?php endforeach ?>

    </form>
    <a href="<?php echo base_url('admin/data_barang') ?>" class="btn btn-primary mt-3">Kembali</a>
</div>