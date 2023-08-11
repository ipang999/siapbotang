<!DOCTYPE html>
<html lang="en">

<head>
    <title>SIAP - Sistem Informasi Administrasi Persediaan Barang Daerah</title>
    <meta charset="UTF-8" />
    <link rel="icon" href="<?= base_url('assets/') ?>img/icon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="Shortcut Icon" href="<?= base_url('assets/') ?>img/xicon/warehouse-512.png" type="image/x-icon" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/maruti-login.css" />
    <script src="<?= base_url('assets/') ?>js/jquery.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/maruti.login.js"></script>
</head>

<body style="background-image: url('<?= base_url('assets/') ?>img/bg.png');background-size: 100% 100%;">
    <div id="logo">
        <!--<img src="img/logo.png" style="width:100px" alt="" />--> <br> <br> <br> <br> <br> <br> <br>
    </div>
    <div id="loginbox">
        <?php echo form_open('Login/CekLogin') ?>
        <div class="control-group normal_text">
            <h3>LOGIN</h3>
        </div>
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on"><i class="icon-user"></i></span><input type="text" name="username" id="uname"
                        placeholder="Username" />
                </div>
            </div>
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on"><i class="icon-lock"></i></span><input type="password" name="password"
                        id="upass" placeholder="Password" />
                </div>
            </div>
        </div>
        <div class="form-actions">
            <span class="pull-right"><input type="submit" name="btnLogin" id="btnLogin" class="btn btn-success"
                    value="Login" /></span>
        </div>
        <?php echo form_close() ?>
    </div>
</body>

</html>
<script>document.all.uname.focus();</script>