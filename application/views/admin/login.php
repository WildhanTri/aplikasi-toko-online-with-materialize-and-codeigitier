<html>

<head>
    <title>Toko Online</title>
    <?php $this->load->view('js') ?>
    <?php $this->load->view('css') ?>
    <?php $this->load->view('cssadmin') ?>
</head>

<body>
    <div class="container" style="border-left: 1px solid #f2f2f2; border-right: 1px solid #f2f2f2;">
        <div class="row" style="padding-top: 100px;">
            <div class="col s1 l2"></div>
            <div class="col s10 l8">
                <form action="<?php echo base_url('admin/admin/prosesLogin') ?>" method="post">
                    <div class="row">
                        <div class="col s12 m12">
                            <div class="card horizontal">
                                <div class="card-stacked">
                                    <div class="card-content">
                                        <div class="input-field col s12">
                                            <input placeholder="Username" name="username" id="username" type="text" class="validate">
                                            <label for="username">Username</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input placeholder="Password" name="password" id="password" type="text" class="validate">
                                            <label for="password">Password</label>
                                        </div>
                                    </div>
                                    <div class="card-action">
                                        <button class="btn waves-effect waves-light" name="action" style="width: 100%">Login
                                        <i class="material-icons right">send</i>
                                    </button>
                                        <a href="#">forgot password?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col s1 l2"></div>
        </div>
    </div>
</body>
<script>


</script>

</html>
