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
            <h4>Data Customer</h4>
            <table class="table-list">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Nomor Telepon</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody class="highlight">
                    <?php if($data_customer != null) : ?>
                    <?php foreach($data_customer as $d) : ?>
                    <tr>
                        <td>
                            <?php echo $d->id_customer ?> </td>
                        <td>
                            <?php echo $d->nama_lengkap ?> </td>
                        <td>
                            <?php echo $d->username ?> </td>
                        <td>
                            <?php echo $d->nomor_telepon ?> </td>
                        <td>
                            <?php echo $d->alamat_email ?> </td>
                        <td style="max-width: 100px">
                            <a class="waves-effect waves-light btn blue" href="<?php echo base_url('admin/customer/edit_customer/'.$d->id_customer) ?>"><i class="material-icons left">create</i>Edit</a>
                            <a class="waves-effect waves-light btn red" href="<?php echo base_url('admin/customer/delete_customer/'.$d->id_customer) ?>"><i class="material-icons left">delete</i>Delete</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                    <?php else : ?>
                    <tr>
                        <td colspan="6" style="text-align:Center">Tidak Ada Data.</td>
                    </tr>
                    <?php endif ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
<div class="fixed-action-btn">
    <a class="btn-floating btn-large green" href="<?php echo base_url('admin/customer/tambah_customer') ?>">
    <i class="large material-icons">add</i>
  </a>
</div>

</html>
