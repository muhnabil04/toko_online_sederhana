<div class="container-fluid">
    <div class="card">
        <h5 class="card-header">Detail Produk</h5>
        <div class="card-body">
            <?php foreach ($barang as $item) : ?>
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?php echo base_url() . '/assets/uploads/' . $item->gambar ?>" alt="">
                    </div>
                    <div class="col-md-8">
                        <table class="table">
                            <tr>
                                <td>Nama Produk :</td>
                                <td><strong><?php echo $item->nama_barang ?></strong></td>
                            </tr>
                            <tr>
                                <td>Keterangan :</td>
                                <td><strong><?php echo $item->keterangan ?></strong></td>
                            </tr>
                            <tr>
                                <td>Kategori :</td>
                                <td><strong><?php echo $item->kategori ?></strong></td>
                            </tr>
                            <tr>
                                <td>Stok :</td>
                                <td><strong><?php echo $item->stok ?></strong></td>
                            </tr>
                            <tr>
                                <td>Harga :</td>
                                <td><strong>
                                        <div class="btn btn-sm btn-success">Rp. <?php echo number_format($item->harga, 0, ',', '.') ?></div>
                                    </strong></td>
                            </tr>

                    </div>
                </div>
            <?php endforeach; ?>
            </table>
            <?php echo anchor('dashboard/tambah_keranjang/' . $item->id, ' <div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
            <?php echo anchor('dashboard/index/', ' <div class="btn btn-sm btn-danger">Kembali</div>') ?>
        </div>
    </div>
</div>