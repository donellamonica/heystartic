<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT DATA BARANG</h3>

    <?php foreach ($barang as $brg) : ?>
        <form method="post" action="<?php echo base_url() . 'admin/data_barang/update' ?>">

            <dic class="form-group">
                <label>Nama Produk</label>
                <input type="text" name="nama_brg" class="form-control" value="<?php echo $brg->nama_brg ?>">
            </dic>

            <dic class="form-group">
                <label>Deskripsi</label>
                <input type="hidden" name="id_produk" class="form-control" value="<?php echo $brg->id_produk ?>">
                <input type="text" name="deskripsi" class="form-control" value="<?php echo $brg->deskripsi ?>">
            </dic>

            <div class="form-group">
                <label>Kategori</label>
                <select class="form-control" name="kategori">
                    <option>Tote Bag</option>
                    <option>Sling Bag</option>
                    <option>Clutch</option>
                    <option>Pouch</option>
                    <option>Laptop Bag</option>
                </select>
            </div>

            <dic class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control" value="<?php echo $brg->harga ?>">
            </dic>

            <dic class="form-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control" value="<?php echo $brg->stok ?>">
            </dic>

            <div class="form-group">
                <label>Gambar</label><br>
                <input type="file" name="gambar" class="form-control" value="<?php echo $brg->gambar ?>">
            </div>

            <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>

        </form>
    <?php endforeach; ?>
</div>