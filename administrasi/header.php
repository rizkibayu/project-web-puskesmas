<?php session_start(); 
if (!isset($_SESSION['sebagai'])) {
    
    echo "<script>alert('Belum Login');</script>";
    echo "<script>location='../index.php'</script>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title> Puskesmas | Administrasi </title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="../dist/css/bootstrap.min.css" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../dist/css/style4.css">

    <!-- Font Awesome JS -->
    <script defer src="../dist/js/solid.js" crossorigin="anonymous"></script>
    <script defer src="../dist/js/fontawesome.js" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Puskesmas Cikuya</h3>
                <strong>PC</strong>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="menu.php?halaman=pendaftaran">
                        <i class="fa fa-registered"></i>
                        Pendaftaran
                    </a>
                 <li>
                    <a href="menu.php?halaman=pasien">
                        <i class="fa fa-wheelchair"></i>
                        Pasien
                    </a>
                 <li>
                   <li>
                    <a href="#pagemenu522" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fa fa-bed"></i>
                        Pasien Rawat Jalan & Inap
                    </a>
                    <ul class="collapse list-unstyled" id="pagemenu522">
                        <li>
                            <a href="menu.php?halaman=rawat_jalan">Data Pasien Rawat Jalan</a>
                        </li>
                         <li>
                            <a href="menu.php?halaman=rawat_inap">Data Pasien Rawat Inap</a>
                        </li>
                    </ul>
                  </li>
                     <li>
                    <a href="#pagemenu221" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fa fa-file"></i>
                        Transaksi
                    </a>
                    <ul class="collapse list-unstyled" id="pagemenu221">
                        <li>
                            <a href="menu.php?halaman=jenis_transaksi">Jenis Transaksi</a>
                        </li>
                         <li>
                            <a href="menu.php?halaman=pembayaranjalan">Laporan Pembayaran Rawat Jalan</a>
                        </li>
                         <li>
                            <a href="menu.php?halaman=pembayaraninap">Laporan Pembayaran Rawat Inap</a>
                        </li>
                    </ul>
                    </li>    
                    </ul>
                  </li>
                </li>
            </li>
        </li>
    </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span><strong>Menu</strong></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="../keluar.php">Keluar</a>
                            </li>
                        </ul>
                        </ul>
                    </div>
                </div>
            </nav>  

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="../dist/js/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="../dist/js/popper.min.js" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="../dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>