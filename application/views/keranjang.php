<html>

<head>
    <title>Toko Online</title>
    <?php $this->load->view('js') ?>
    <?php $this->load->view('css') ?>
    <?php $this->load->view('cssmain') ?>
</head>
<body>
    <div class="container" style="border-left: 1px solid #f2f2f2; border-right: 1px solid #f2f2f2;">
        <?php $this->load->view('components/header.php') ?>
        <div class="row" style="padding-top: 10px;">
            <div class="col s12">
                <div class="row">
                    <div class="col s6 l4">
                        <h6>Keranjang</h6>
                    </div>
                    <div class="col s6 l4 right-align">
                        <h6>Total Belanja</h6>
                    </div>
                </div>
            </div>
            
            <div class="col s12 l8">
                <div class="card horizontal">
                    <div class="col s3">
                        <img src="../assets/img/Laptop_on_Desk_HD_Wallpaper.jpg" style="width: 100%">
                    </div>
                    <div class="col s9">
                        <div class="row">
                            <div class="col s6">
                                <h6>Nama Barang</h6>
                                Deskripsi Barang
                            </div>
                            <div class="col s6 right-align">
                                <table class="table-harga">
                                    <tr>
                                        <td>Price :</td>
                                        <td>Rp. 1,000,000</td>
                                    </tr>
                                    <tr>
                                        <td>Qty :</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>Total :</td>
                                        <td>Rp. 2,000,000</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card horizontal">
                    <div class="col s3">
                        <img src="../assets/img/Laptop_on_Desk_HD_Wallpaper.jpg" style="width: 100%">
                    </div>
                    <div class="col s9">
                        <div class="row">
                            <div class="col s6">
                                <h6>Nama Barang</h6>
                                Deskripsi Barang
                            </div>
                            <div class="col s6 right-align">
                                <table class="table-harga">
                                    <tr>
                                        <td>Price :</td>
                                        <td>Rp. 1,000,000</td>
                                    </tr>
                                    <tr>
                                        <td>Qty :</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>Total :</td>
                                        <td>Rp. 2,000,000</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card horizontal">
                    <div class="col s3">
                        <img src="../assets/img/Laptop_on_Desk_HD_Wallpaper.jpg" style="width: 100%">
                    </div>
                    <div class="col s9">
                        <div class="row">
                            <div class="col s6">
                                <h6>Nama Barang</h6>
                                Deskripsi Barang
                            </div>
                            <div class="col s6 right-align">
                                <table class="table-harga">
                                    <tr>
                                        <td>Price :</td>
                                        <td>Rp. 1,000,000</td>
                                    </tr>
                                    <tr>
                                        <td>Qty :</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>Total :</td>
                                        <td>Rp. 2,000,000</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col l4 s12">
                <div class="col l12 s12" style="background: #f3f3f3; height:300px;">

                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('component/footer.php') ?>
</body>
<script>
</script>

</html>
