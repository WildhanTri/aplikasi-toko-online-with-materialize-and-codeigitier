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
            <div class="col l12">
                <h6>Kategori > Nama Barang</h6>
            </div>
            <div class="col l3">
                <div class="col l12" style="height: 200px">
                    <img src="../assets/img/Laptop_on_Desk_HD_Wallpaper.jpg" style="width: 100%; height: 100%">
                </div>
            </div>
            <div class="col l5">
                <div class="row" style="font-size: 15px;">
                    <div class="col l6 s12" style="padding: 10px;">Nama Barang :</div>
                    <div class="col l6 s12" style="padding: 10px;">Komputer</div>
                    <div class="col l6 s12" style="padding: 10px;">Harga Barang :</div>
                    <div class="col l6 s12" style="padding: 10px;">Rp. 20000000</div>
                    <div class="col l6 s12" style="padding: 10px;">Qty :</div>
                    <div class="col l6 s12">
                        <div class="input-field col s10" style="padding: 0px; margin: 0px; width: 100%;">
                            <input placeholder="Quantity" id="first_name" type="text" class="validate" style="margin: 0px; width: 100%;">
                        </div>
                    </div>
                    <div class="col l12 s12" style="padding-top:10px;">
                        <a class="waves-effect waves-light btn" style="width: 100%;">Kirim Ke Kerangjang</a>
                    </div>
                </div>
            </div>
            <div class="col l4 s12">
                <div class="col l12 s12" style="background: #f3f3f3; height:300px;">

                </div>
            </div>
            <div class="col l12">
                <h5 style="border-bottom: 1px solid black; padding:10px;">Ulasan</h5>
                <div class="col s12 m12">
                    <div class="card horizontal">
                        <div class="card-stacked">
                            <div class="card-content">
                                <span class="card-title">Customer Name</span>
                                <p>I am a very simple card. I am good at containing small bits of information.</p>
                            </div>
                            <div class="card-action">
                                <div class="col s6 left-align">
                                    <a href="#">Reply</a>
                                </div>
                                <div class="col s6 right-align">
                                    <a href="#"><i class="material-icons">thumb_up</i></a>
                                    <a href="#"><i class="material-icons">thumb_down</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12">
                    <div class="card horizontal">
                        <div class="card-stacked">
                            <div class="card-content">
                                <span class="card-title">Customer Name</span>
                                <p>I am a very simple card. I am good at containing small bits of information.</p>
                            </div>
                            <div class="card-action">
                                <div class="col s6 left-align">
                                    <a href="#">Reply</a>
                                </div>
                                <div class="col s6 right-align">
                                    <a href="#"><i class="material-icons">thumb_up</i></a>
                                    <a href="#"><i class="material-icons">thumb_down</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('component/footer.php') ?>
</body>
<script>
</script>

</html>
