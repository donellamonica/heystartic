<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm"></i>Tambah Barang</button>

    <table class="table table-bordered">
        <tr>
            <th>
                <center>No</center>
            </th>
            <th>
                <center>Nama</center>
            </th>
            <th>
                <center>Deskripsi</center>
            </th>
            <th>
                <center>Kategori</center>
            </th>
            <th>
                <center>Harga</center>
            </th>
            <th>
                <center>Stok</center>
            </th>
            <th>
                <center>Gambar</center>
            </th>
            <th colspan="3">
                <center>Aksi</center>
            </th>
        </tr>

        <?php
        $no = 1;
        foreach ($barang as $brg) : ?>

            <tr>
                <td>
                    <center><?php echo $brg->id_produk ?></center>
                </td>
                <td><?php echo $brg->nama_brg ?></td>
                <td><?php echo $brg->deskripsi ?></td>
                <td><?php echo $brg->kategori ?></td>
                <td>
                    <center><?php echo $brg->harga ?></center>
                </td>
                <td>
                    <center><?php echo $brg->stok ?></center>
                </td>
                <td><?php echo $brg->gambar ?></td>
                <td>
                    <div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>
                </td>
                <td><?php echo anchor('admin/data_barang/edit/' . $brg->id_produk, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>')  ?>
                </td>
                <td><?php echo anchor('admin/data_barang/hapus/' . $brg->id_produk, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?>
                </td>
            </tr>

        <?php endforeach; ?>

    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">FORM INPUT PRODUK</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() . 'admin/data_barang/tambah_aksi' ?>" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label>Nama Produk</label>
                        <input type="text" name="nama_brg" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control">
                    </div>

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

                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" name="harga" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Stok</label>
                        <input type="text" name="stok" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Gambar</label><br>
                        <input type="file" name="gambar" class="form-control">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>


            </form>

        </div>
    </div>
</div>