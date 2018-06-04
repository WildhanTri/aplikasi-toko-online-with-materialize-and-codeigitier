<html>

<head>
    <title>Toko Online</title>
    <?php $this->load->view('js') ?>
    <?php $this->load->view('css') ?>
    <?php $this->load->view('cssadmin') ?>
</head>
<style>
    .eye {
        position:absolute; 
        right:10px; 
        cursor:pointer;
        color: grey;
    }
    
</style>
<?php $this->load->view('admin/components/sidebar') ?>
<body>
    <?php $this->load->view('admin/components/header') ?>
    <?php if($aksi == 'tambah_customer') : ?>
    <div class="col s12" style="height: 100%; padding: 15px">
        <div class="col s12 section">
            <form action="<?php echo base_url('admin/customer/proses_tambah_customer') ?>" method="post" id="form_tambah">
            <h4>Edit Customer</h4>
            <div class="row">
                <div class="col s12">
                    <div class="input-field col s12">
                        <input placeholder="Placeholder" id="nama_lengkap" name="nama_lengkap" type="text" class="validate" autocomplete="off">
                        <label for="nama_lengkap">Nama Customer</label>
                    </div>
                </div>
                <div class="col s12">
                    <div class="input-field col s12">
                        <input placeholder="Placeholder" id="username" name="username" type="text" class="validate" autocomplete="off">
                        <label for="username">Username</label>
                    </div>
                </div>
                <div class="col s12">
                    <div class="input-field col s12">
                        <input placeholder="Placeholder" id="password" name="password" type="password" class="validate" autocomplete="off">
                        <i class="small material-icons eye" style="" onclick="showhidepw(this)">remove_red_eye</i>
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="col s12">
                    <div class="input-field col s12">
                        <input placeholder="Placeholder" id="nomor_telepon" name="nomor_telepon" type="text" class="validate" autocomplete="off">
                        <label for="nomor_telepon">Nomor Telepon</label>
                    </div>
                </div>
                <div class="col s12">
                    <div class="input-field col s12">
                        <input placeholder="Placeholder" id="alamat_email" name="alamat_email" type="text" class="validate" autocomplete="off">
                        <label for="alamat_email">Alamat Email</label>
                    </div>
                </div>
                <div class="col l4 s6 push-l8 push-s6">
                    <div class="col s6"><a class="waves-effect waves-teal btn-flat" href="<?php base_url('admin/customer/') ?>"><i class="material-icons left">cancel</i>Cancel</a></div>
                    <div class="col s6"><a class="waves-effect waves-light btn green" style="width: 100%" href="javascript:{}" onclick="document.getElementById('form_tambah').submit();"><i class="material-icons left">save</i>Save</a></div>
                </div>
            </div>
            </form>
        </div>
    </div>
    <?php elseif($aksi == 'edit_customer') : ?>
    <div class="col s12" style="height: 100%; padding: 15px">
        <?php foreach($data_customer as $d) : ?>
        <div class="col s12 section">
            <form action="<?php echo base_url('admin/customer/proses_edit_customer') ?>" method="post" id="form_edit">
            <h4>Tambah Customer</h4>
            <div class="row">
                <div class="col s12">
                    <div class="input-field col s12">
                        <input placeholder="Placeholder" id="nama_lengkap" name="nama_lengkap" type="text" class="validate" autocomplete="off" value="<?php echo $d->nama_lengkap ?>">
                        <label for="nama_lengkap">Nama Customer</label>
                    </div>
                </div>
                <div class="col s12">
                    <div class="input-field col s12">
                        <input placeholder="Placeholder" id="username" name="username" type="text" class="validate" autocomplete="off" value="<?php echo $d->username ?>">
                        <label for="username">Username</label>
                    </div>
                </div>
                <div class="col s12">
                    <div class="input-field col s12">
                        <input placeholder="Placeholder" id="password" name="password" type="password" class="validate" autocomplete="off" value="<?php echo $d->password ?>">
                        <i class="small material-icons eye" style="" onclick="showhidepw(this)">remove_red_eye</i>
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="col s12">
                    <div class="input-field col s12">
                        <input placeholder="Placeholder" id="nomor_telepon" name="nomor_telepon" type="text" class="validate" autocomplete="off" value="<?php echo $d->nomor_telepon ?>">
                        <label for="nomor_telepon">Nomor Telepon</label>
                    </div>
                </div>
                <div class="col s12">
                    <div class="input-field col s12">
                        <input placeholder="Placeholder" id="alamat_email" name="alamat_email" type="text" class="validate" autocomplete="off" value="<?php echo $d->alamat_email ?>">
                        <label for="alamat_email">Alamat Email</label>
                    </div>
                </div>
                <div class="col l4 s6 push-l8 push-s6">
                    <div class="col s6"><a class="waves-effect waves-teal btn-flat" href="<?php base_url('admin/customer/') ?>"><i class="material-icons left">cancel</i>Cancel</a></div>
                    <div class="col s6"><a class="waves-effect waves-light btn green" style="width: 100%" href="javascript:{}" onclick="document.getElementById('form_edit').submit();"><i class="material-icons left">save</i>Save</a></div>
                </div>
            </div>
            </form>
        </div>
        <?php endforeach ?>
    </div>
    <?php endif ?>

</body>

</html>

<script>
    $(document).ready(function() {
        $('.sidenav').sidenav();
        $('.fixed-action-btn').floatingActionButton();
        $('select').formSelect();
    });
    
    function showhidepw(eye){
        if($("#password").attr("type") == "password"){
            $("#password").attr("type", "text");
            $(eye).attr("style", "color:blue")
        }else{
            $("#password").attr("type", "password");
            $(eye).attr("style", "color:grey")
        }
    }

</script>
