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
        <h4>Data Stok</h4>
        <table class="table-list">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Stok</th>
                    <th>Terjual</th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="highlight">
                <?php foreach($data_stok as $d) : ?>
                <tr>
                    <td><?php echo $d->id_produk ?></td>
                    <td><?php echo $d->nama_produk ?></td>
                    <td><?php echo $d->jumlah_stok_saat_ini ?></td>
                    <td><?php echo $d->jumlah_terjual ?></td>
                    <td style="max-width: 200px">
                        <a class="waves-effect waves-light btn green" href="<?php echo base_url('admin/stok/tambah_stok/'.$d->id_produk) ?>"><i class="material-icons left">playlist_add</i>Barang Masuk</a>
                        <a class="waves-effect waves-light btn yellow" href="<?php echo base_url('admin/stok/delete_stok/'.$d->id_produk) ?>"><i class="material-icons left">playlist_play</i>Barang Keluar</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        </div>
    </div>
</body>
<div class="fixed-action-btn">
    <a class="btn-floating btn-large green">
    <i class="large material-icons">add</i>
  </a>
</div>

</html>
