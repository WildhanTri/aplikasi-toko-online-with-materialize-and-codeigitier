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
        <h4>Data Transaksi</h4>
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
                <tr>
                    <td>lorem</td>
                    <td>ipsum</td>
                    <td>dolor</td>
                    <td>sit</td>
                    <td style="max-width: 100px">
                        <a class="waves-effect waves-light btn blue"><i class="material-icons left">create</i>Edit</a>
                        <a class="waves-effect waves-light btn red"><i class="material-icons left">delete</i>Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>lorem</td>
                    <td>ipsum</td>
                    <td>dolor</td>
                    <td>sit</td>
                    <td style="max-width: 100px">
                        <a class="waves-effect waves-light btn blue"><i class="material-icons left">create</i>Edit</a>
                        <a class="waves-effect waves-light btn red"><i class="material-icons left">delete</i>Delete</a>
                    </td>
                </tr>
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
