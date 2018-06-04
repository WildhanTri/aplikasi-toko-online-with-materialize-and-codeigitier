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
    <?php if($aksi == 'tambah_produk') : ?>
    <div class="col s12" style="height: 100%; padding: 15px">
        <div class="col s12 section">
            <form action="<?php echo base_url('admin/produk/proses_tambah_produk') ?>" method="post" id="form_tambah">
            <h4>Tambah Produk</h4>
            <div class="row">
                <div class="col s12">
                    <div class="input-field col s12">
                        <input placeholder="Placeholder" id="nama_produk" name="nama_produk" type="text" class="validate" autocomplete="off">
                        <label for="nama_produk">Nama Produk</label>
                    </div>
                </div>
                <div class="col s12">
                    <div class="input-field col s12">
                        <select name="kategori_produk">
                            <option value="" disabled selected>Pilih Kategori...</option>
                            <?php foreach($kategori_produk as $k) : ?>
                            <option value="<?php echo $k->id_kategori ?>"><?php echo $k->nama_kategori ?></option>
                            <?php endforeach ?>
                        </select>
                        <label>Pilih Kategori</label>
                    </div>
                </div>
                <div class="col s12">
                    <div class="input-field col s12">
                        <textarea id="deskripsi_produk" class="materialize-textarea" name="deskripsi_produk" autocomplete="off"></textarea>
                        <label for="deskripsi_produk">Deskripsi Produk</label>
                    </div>
                </div>
                <div class="col l4 s6 push-l8 push-s6">
                    <div class="col s6"><a class="waves-effect waves-teal btn-flat" href="<?php base_url('admin/produk/') ?>"><i class="material-icons left">cancel</i>Cancel</a></div>
                    <div class="col s6"><a class="waves-effect waves-light btn green" style="width: 100%" href="javascript:{}" onclick="document.getElementById('form_tambah').submit();"><i class="material-icons left">save</i>Save</a></div>
                </div>
            </div>
            </form>
        </div>
    </div>
    <?php elseif($aksi == 'edit_produk') : ?>
    <div class="col s12" style="height: 100%; padding: 15px">
        <?php foreach($data_produk as $d) : ?>
        <div class="col s12 section">
            <form action="<?php echo base_url('admin/produk/proses_edit_produk') ?>" method="post" id="form_edit">
            <h4>Edit Produk</h4>
            <div class="row">
                <div class="col s12">
                    <div class="input-field col s12">
                        <input placeholder="Placeholder" id="name_produk" name="nama_produk" type="text" class="validate" value="<?php echo $d->nama_produk ?>" autocomplete="off">
                        <label for="nama_barang">Nama Produk</label>
                    </div>
                </div>
                <div class="col s12">
                    <div class="input-field col s12">
                        <select name="kategori_produk">
                            <option value="" disabled>Pilih Kategori...</option>
                            <?php foreach($kategori_produk as $k) : ?>
                            <option value="<?php echo $k->id_kategori ?>" <?php echo ($k->id_kategori == $d->kategori_produk) ? "selected" : "" ?> ><?php echo $k->nama_kategori ?></option>
                            <?php endforeach ?>
                        </select>
                        <label>Pilih Kategori</label>
                    </div>
                </div>
                <div class="col s12">
                    <div class="input-field col s12">
                        <textarea id="deskripsi_produk" name="deskripsu_produk" class="materialize-textarea" value="<?php echo $d->deskripsi_produk ?>" autocomplete="off"></textarea>
                        <label for="deskripsi_produk">Deskripsi Produk</label>
                    </div>
                </div>
                <div class="col l4 s6 push-l8 push-s6">
                    <div class="col s6"><a class="waves-effect waves-teal btn-flat" href="<?php base_url('admin/produk/') ?>"><i class="material-icons left">cancel</i>Cancel</a></div>
                    <div class="col s6"><a class="waves-effect waves-light btn green" style="width: 100%" href="javascript:{}" onclick="document.getElementById('form_edit').submit();"><i class="material-icons left">save</i>Save</a></div>
                </div>
            </div>
            </form>
        </div>
        <?php endforeach ?>
    </div>
    <?php endif ?>

</body>
<div class="fixed-action-btn">
    <a class="btn-floating btn-large green">
        <i class="large material-icons">add</i>
    </a>
</div>

</html>

<script>
    $(document).ready(function() {
        $('.sidenav').sidenav();
        $('.fixed-action-btn').floatingActionButton();
        $('select').formSelect();
    });

</script>
