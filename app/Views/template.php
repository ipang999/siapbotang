<!DOCTYPE html>
<html lang="en">

<head>
    <title>SIAP - Sistem Informasi Administrasi Persediaan Barang</title>
    <meta charset="UTF-8" />
    <link rel="icon" href="<?= base_url('assets/') ?>img/icon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="Shortcut Icon" href="<?= base_url('assets/') ?>img/xicon/warehouse-512.png" type="image/x-icon" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/fullcalendar.css" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/colorpicker.css" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/datepicker.css" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/uniform.css" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/select2.css" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/maruti-style.css" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/maruti-media.css" class="skin-color" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/custom.css" />

    <script src="<?= base_url('assets/') ?>js/jquery.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery.ui.custom.js"></script>
    <script src="<?= base_url('assets/') ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/bootstrap-colorpicker.js"></script>
    <script src="<?= base_url('assets/') ?>js/bootstrap-datepicker.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery.uniform.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/maruti.tables.js"></script>
    <script src="<?= base_url('assets/') ?>js/select2.js"></script>
    <script src="<?= base_url('assets/') ?>js/maruti.js"></script>
    <script src="<?= base_url('assets/') ?>js/maruti.form_common.js"></script>
    <style type="text/css">
        #progress-bar-indicator {
            background: #CCC;
            width: 0px;
            height: 5px;
        }

        #progress-bar {
            margin: 10px 0;
            background: #333;
            width: 960px;
            height: 5px;
        }
    </style>
</head>

<body>

    <!--Header-part-->
    <div id="header">
        <img src="<?= base_url('assets/') ?>img/log.png" style="margin-left:20px;position: static;top:-100"
            border="0" />&nbsp;&nbsp;<span style="color:#FFFFFF;font-size:20px">PEMERINTAH KOTA BONTANG</span>
    </div>
    <!--close-Header-part  -->

    <!--top-Header-messaages-->
    <div class="btn-group rightzero"> <a class="top_message tip-left" title="Manage Files"><i class="icon-file"></i></a>
        <a class="top_message tip-bottom" title="Manage Users"><i class="icon-user"></i></a> <a
            class="top_message tip-bottom" title="Manage Comments"><i class="icon-comment"></i><span
                class="label label-important">5</span></a> <a class="top_message tip-bottom" title="Manage Orders"><i
                class="icon-shopping-cart"></i></a>
    </div>
    <!--close-top-Header-messaages-->

    <!--top-Header-menu-->
    <div id="user-nav" class="navbar navbar-inverse">
        <ul class="nav">
            <li class=""><a href=""><i class="icon-user"></i>
                    <span class="text">
                        <b>SuperAdmin</b> [ Administrator ] </span></a>
            </li>
            <li class=" dropdown" id="menu-setting"><a href="" data-toggle="dropdown" data-target="#menu-setting"
                    class="dropdown-toggle"><i class="icon icon-cog"></i> <span class="text">Setting</span> <b
                        class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a class="sAdd" href="?act=18">Ubah Sandi</a></li>
                </ul>
            </li>
            <li class=""><a title="" href="<?= base_url('Login/') ?>CekLogin"><i class="icon icon-share-alt"></i>
                    <span class="text">Logout</span></a></li>
        </ul>
    </div>
    <div id="sidebar"><a href="<?= base_url('Dashboard') ?>" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
        <ul>
            <li class="active"><a href="<?= base_url('Dashboard') ?>"><i class="icon icon-leaf"></i> <span>Dashboard</span></a></li>
            <li class='submenu'><a href="<?= base_url('Dashboard') ?>"><i class="icon-list"></i> <span>Referensi</span></a>
                <ul>
                    <li><a href='<?= base_url('Referensi/Urusan') ?>'>Master Urusan</a></li>
                    <li><a href='<?= base_url('Referensi/Bidang') ?>'>Master Bidang</a></li>
                    <li><a href='?act=30'>Master SKPD</a></li>
                    <li><a href='<?= base_url('Referensi/Unit') ?>'>Master Unit</a></li>
                    <li><a href='?act=2'>Master Seksi / Sub Unit</a></li>
                    <li><a href='<?= base_url('Referensi/Rekening') ?>'>Master Rekening</a></li>
                    <li><a href='?act=27'>Master Program</a></li>
                    <li><a href='<?= base_url('Referensi/Kegiatan') ?>'>Master Kegiatan</a></li>
                    <li><a href='<?= base_url('Referensi/Pejabat') ?>'>Pejabat</a></li>
                    <li><a href='<?= base_url('Referensi/MasterBarang') ?>'>Master Barang</a></li>
                    <li><a href='?act=3'>Jenis Barang</a></li>
                </ul>
            </li>
            <li class='submenu'><a href="?act="><i class="icon-chevron-right"></i> <span>Persediaan Masuk</span></a>
                <ul>
                    <li><a href='?act=4'>Saldo Awal</a></li>
                    <li><a href='?act=5'>Transaksi Harian</a></li>
                </ul>
            </li>
            <li><a href="?act=6"><i class="icon-book"></i> <span>Permohonan Barang</span></a> </li>
            <li class='submenu'><a href="?act="><i class="icon-chevron-left"></i> <span>Persediaan Keluar</span></a>
                <ul>
                    <li><a href='?act=7'>Transaksi Harian</a></li>
                    <li><a href='?act=8'>Koreksi Transaksi</a></li>
                </ul>
            </li>
            <li class='submenu'><a href="?act=9"><i class="icon-shopping-cart"></i> <span>Stok Barang</span></a>
                <ul>
                    <li><a href='?act=17'>Stok Akhir</a></li>
                    <li><a href='?act=16'>Data Transaksi</a></li>
                    <li><a href='?act=9'>Fisik / Opname</a></li>
                </ul>
            </li>
            <li class='submenu'><a href="?act="><i class="icon-folder-close"></i> <span>Laporan</span></a>
                <ul>
                    <li><a href='?act=11'>Laporan Persediaan Barang</a></li>
                    <li><a href='?act=23'>Laporan Mutasi</a></li>
                    <li><a href='?act=12'>Laporan Neraca</a></li>
                    <li><a href='?act=35'>Laporan Rekapitulasi Mutasi
                        </a></li>
                </ul>
            </li>
            <li class='submenu'><a href="?act="><i class="icon icon-cog"></i> <span>Utility</span></a>
                <ul>
                    <li><a href='?act=13'>Daftar User</a></li>
                    <li><a href='?act=15'>Rekalkulasi Transaksi</a></li>
                    <li><a href='?act=32'>Konfigurasi Pencatatan</a></li>
                    <li><a href='?act=39'>Sinkron eFinance</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div id="content">
        <div id="content-header">
            <?php
            if ($link) {
                echo view($link);
            }
            ?>
        </div>

        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <?php
                    if ($page) {
                        echo view($page);
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>


    <div class="row-fluid">
        <div id="footer" class="span12">Copyright &copy; 2017. All rights reserved. </div>
    </div>
</body>

</html>
<script>
    function menudisable() {
        alert('Maaf, menu disable');
    }
</script