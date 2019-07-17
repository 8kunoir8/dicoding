<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Pengajuan Kredit</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>asset/dist/css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url() ?>asset/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        a{
            color: black;
            text-decoration: none;
        }
        .navbar-trans{
            background-color: #f8f8f824;
            border-color: #e7e7e724;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
        <nav class="navbar navbar-trans navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <ul class="nav navbar-top-links" style="display: inline-block;">
                <!-- /.dropdown -->
                <li class="dropdown" style="display: inline-block;">
                    <a href="<?php echo base_url() ?>">
                        Home
                    </a>
                    <!--ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="#">Kantor Cabang</a>
                        </li>
                            
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul-->
                    <!-- /.dropdown-user -->
                </li>
                <li class="dropdown" style="display: inline-block;">
                    <a href="<?php echo base_url('Front/signUp') ?>">
                        Pengajuan
                    </a>
                    <!--ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="#">Kantor Cabang</a>
                        </li>
                            
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul-->
                    <!-- /.dropdown-user -->
                </li>
                <li class="dropdown" style="display: inline-block;">
                    <a href="<?php echo base_url('Front/katalog') ?>">
                        Katalog
                    </a>
                    <!--ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="#">Kantor Cabang</a>
                        </li>
                            
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul-->
                    <!-- /.dropdown-user -->
                </li>
                
                <li class="dropdown" style="display: inline-block;">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        About
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="<?php echo base_url('Front/about') ?>">Profile</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            </div>
            <div class="navbar-right" style="margin-right: 25px;">
                <ul class="nav navbar-top-links" style="display: inline-block;">
                <!-- /.dropdown -->
                <li style="display: inline-block;">
                    <a href="<?php echo base_url('admin') ?>">
                        Admin
                    </a>
                </li>
                <!-- /.dropdown -->
            </ul>
            </div>
        </nav>

    <style>
        .intro-header{
            color:black;
            font-color:black;
        }
    </style>

    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header" color="green">
        <div class="container">
            <div class="row">
                <h2><b><?php echo $title ?></b></h2>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-12" align="center">
                    <p>
                        PD. Pratama Teknik yang berlokasi di Jl.Raya Narogong Km. 09 kecamatan bantar gebang bekasi . Berdiri sejak tahun 1998 sampai dengan sekarang, PD. Pratama Teknik telah menjadi perusahaan dagang dengan pemiliki tunggal.
                    </p><br>
                    <p>
                        PD. Pratama Teknik adalah sebuah perusahaan dagang dibidang jasa pelayanan jasa service dinamo dan penjualan alat-alat teknik yang bertempat di Bekasi, dengan mengusung konsep pelayanan yang baik dan memberikan harga yang kompetitif, kami berusaha memberikan solusi untuk kepuasan konsumen.
                    </p><br>
                    <p>
                        PD. Pratama Teknik melakukan jasa service dinamo dari kelas menengah kebawah dengan berbagai jenis dinamo, dan telah menjadi jasa yang terpercaya untuk beberapa perusahaan seperti PT.balina, PD.sari sedap. PT. Bandatama, dan masih banyak lagi dengan didukung tenaga ahli dan terpercaya di bidangnya kami dapat menyelesaikan perbaikan dengan tepat waktu dan hasil yang memuaskan untuk konsumen.
                    </p><br>
                    <p>
                        Prosedur kerjanya denga mengajukan surat penawaran kepada customer dan kepada perusahaan yangn ingin menggunakan jasa kami, lalu melakukan kesepakatan meliputi harga, serta perhitungan berapa horse power dinamo yang akan diperbaiki, serta estimasi waktu pengerjaan. Setelah itu customer atau perusahaan yang sudah bekerja sama dengan kami wajib menggunakan surat serah terima barang yang telah kami buat agar ketika waktu dan harga yang sudah disepakati, dapat dilihat tanpa ada kekeliruan. Jika kesepakatan harga dan estimasi waktu pengerjaan sudah tercapai maka customer dan perusahaan yang bekerjasama dengan kami harus mengikuti setiap peraturan yang sudah di sepakati.
                    </p><br>
                    
                    <div class="row" align="left">
                        <ul>
                            <span class="fa fa-square"></span>Visi :
                            <li>Menjadikan jasa service dinamo yang dapat dipercaya dengan menjaga kualitas dan ketepatan waktu pengerjaan. </li>
                        </ul><br>

                        <ul>
                            <span class="fa fa-square"></span>Misi :
                            <li>Memenuhi kebutuhan setiap customer.</li>
                            <li>Melakukan perbaikan yang sesuai dengan permintaan.</li>
                            <li>Memberikan pelayanan yang optimal kepada customer.</li>
                            <li>Menjaga kualitas dari perbaikan yang dilakukan.</li>
                            <li>Memberikan harga yang kompetitif kepada pelanggan.</li>
                        </ul>
                    </div>
                    
    









                    

                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

	
    <!-- /.content-section-a -->

   
    <!-- /.content-section-b -->

  
    <!-- /.content-section-a -->

    <!-- /.banner -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--<ul class="list-inline">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#services">Services</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                    </ul> -->
                    <p class="copyright text-muted small">Copyright &copy; Kunoir 2018. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?php echo base_url() ?>asset/vendor/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url() ?>asset/vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
