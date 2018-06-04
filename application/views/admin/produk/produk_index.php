<html>

<head>
    <title>Toko Online</title>
    <?php $this->load->view('js') ?>
    <?php $this->load->view('css') ?>
    <?php $this->load->view('cssadmin') ?>
</head>
<?php $this->load->view('admin/components/sidebar') ?>

<body>
    <?php $this->load->view('admin/components/header') ?>

    <div class="col s12" style="height: 100%; padding: 15px">
        <div class="col s12 section" style="">
            <h4>Data Produk</h4>
            <table class="table-list">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>Deskripsi</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody class="highlight">
                    <?php if($data_produk != null) : ?>
                    <?php $no = 1; foreach($data_produk as $d) : ?>
                    <tr>
                        <td>
                            <?php echo $no; $no++ ?>
                        </td>
                        <td>
                            <?php echo $d->nama_produk; ?>
                        </td>
                        <td>
                            <?php echo $d->nama_kategori; ?>
                        </td>
                        <td>
                            <?php echo $d->deskripsi_produk; ?>
                        </td>
                        <td style="max-width: 100px">
                            <a class="waves-effect waves-light btn blue" href="<?php echo base_url('admin/produk/edit_produk/'.$d->id_produk) ?>"><i class="material-icons left">create</i>Edit</a>
                            <a class="waves-effect waves-light btn red" href="<?php echo base_url('admin/produk/delete_produk/'.$d->id_produk) ?>"><i class="material-icons left">delete</i>Delete</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                    <?php else : ?>
                    <tr>
                        <td colspan="5" style="text-align:center">Tidak Ada Data.</td>
                    </tr>
                    <?php endif ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
<div class="fixed-action-btn">
    <a class="btn-floating btn-large green" href="<?php echo base_url('admin/produk/tambah_produk') ?>">
        <i class="large material-icons">add</i>
    </a>
</div>

</html>
