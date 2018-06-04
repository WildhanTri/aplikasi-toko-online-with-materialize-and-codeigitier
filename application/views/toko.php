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
        <div class="carousel carousel-slider center">
            <div class="carousel-item red white-text" href="#one!">
                <h2>First Panel</h2>
                <p class="white-text">This is your first panel</p>
            </div>
            <div class="carousel-item amber white-text" href="#two!">
                <h2>Second Panel</h2>
                <p class="white-text">This is your second panel</p>
            </div>
            <div class="carousel-item green white-text" href="#three!">
                <h2>Third Panel</h2>
                <p class="white-text">This is your third panel</p>
            </div>
            <div class="carousel-item blue white-text" href="#four!">
                <h2>Fourth Panel</h2>
                <p class="white-text">This is your fourth panel</p>
            </div>
        </div>
        <div class="row" style="padding-top: 10px;">
            <div class="input-field col s10 push-s1">
                <input placeholder="Search" id="first_name" type="text" class="validate">
            </div>
            <div class="">
                <div class="col s12 red title-section">Spotlight</div>
                <div class="row row-product">
                    <div class="col s6 m4 l3 product-card">
                        <div class="product-card-content" style="height: 260px;">
                            <div class="img" style="height:80%">
                                <img src="../assets/img/Laptop_on_Desk_HD_Wallpaper.jpg" style="width: 100%; height: 100%;">
                            </div>
                            <div class="product-name" style="height:10%">Laptop</div>
                            <div class="product-price" style="height:10%">Rp. 200,000</div>
                        </div>
                    </div>
                    <div class="col s6 m4 l3 product-card">
                        <div class="product-card-content" style="height: 260px;">
                            <div class="img" style="height:80%">
                                <img src="../assets/img/Laptop_on_Desk_HD_Wallpaper.jpg" style="width: 100%; height: 100%;">
                            </div>
                            <div class="product-name" style="height:10%">Laptop</div>
                            <div class="product-price" style="height:10%">Rp. 200,000</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('components/footer.php') ?>
</body>
<script>
    $(document).ready(function() {
        M.AutoInit()
        $('.carousel.carousel-slider').carousel({
            full_width: true,
            indicators: true,
            dist: 0,

        });
    });

</script>

</html>
