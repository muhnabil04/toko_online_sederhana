<div class="container-fluid">
    <h4>Invoice Pemesanan Produk</h4>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>id Invoice</th>
            <th>Nama Pemesan</th>
            <th>Alamat Pengiriman</th>
            <th>Tanggal Pemesanan</th>
            <th>Batas Pembayaran</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($invoice as $item) : ?>
            <tr>
                <td><?php echo $item->id ?></td>
                <td><?php echo $item->nama ?></td>
                <td><?php echo $item->alamat ?></td>
                <td><?php echo $item->tgl_pesan ?></td>
                <td><?php echo $item->batas_bayar ?></td>
                <td>
                    <?php echo anchor('admin/invoice/detail/' . $item->id, '<div class="btn btn-sm btn-primary">Detail</div>') ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>