<div class="container-fluid">
    <h4>Keranjang Belanja</h4>

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>
                <center>NO</center>
            </th>
            <th>
                <center>Nama Produk</center>
            </th>
            <th>
                <center>Jumlah</center>
            </th>
            <th>
                <center>Harga</center>
            </th>
            <th>
                <center>Sub-Total</center>
            </th>
        </tr>

        <?php
        $no = 1;
        foreach ($this->cart->contents() as $items) : ?>
            <tr>
                <td>
                    <center><?php echo $no++ ?></center>
                </td>
                <td><?php echo $items['name'] ?></td>
                <td>
                    <center><?php echo $items['qty'] ?></center>
                </td>
                <td>
                    <center>Rp. <?php echo number_format($items['price'], 0, ',', '.') ?></center>
                </td>
                <td align="right">
                    Rp. <?php echo number_format($items['subtotal'], 0, ',', '.') ?>
                </td>
            </tr>

        <?php endforeach; ?>

        <tr>
            <td colspan="4"></td>
            <td align="right">Rp. <?php echo number_format($this->cart->total(), 0, ',', '.') ?></td>
        </tr>

    </table>

    <div align="right">
        <a href="<?php echo base_url('dashboard/hapus_keranjang') ?>">
            <div class="btn btn-sm btn-danger">Hapus Keranjang</div>
        </a>
        <a href="<?php echo base_url('dashboard/index') ?>">
            <div class="btn btn-sm btn-primary">Lanjutkan Belanja</div>
        </a>
        <a href="<?php echo base_url('dashboard/pembayaran') ?>">
            <div class="btn btn-sm btn-success">Pembayaran</div>
        </a>
    </div>
</div>