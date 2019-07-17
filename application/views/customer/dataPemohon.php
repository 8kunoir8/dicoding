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

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url() ?>asset/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>asset/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/vendor/datetimepicker/jquery.datetimepicker.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url() ?>asset/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url() ?>asset/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery -->
    <script src="<?php echo base_url() ?>asset/vendor/jquery/jquery.js"></script>

    
    <script src="<?php echo base_url() ?>asset/vendor/bootstrap/js/bootstrap.min.js"></script>

    
    <script src="<?php echo base_url() ?>asset/vendor/metisMenu/metisMenu.min.js"></script>

    <script src="<?php echo base_url() ?>asset/dist/js/sb-admin-2.js"></script>
    <script src="<?php echo base_url() ?>asset/vendor/jquery-validate/jquery.validate.min.js"></script> 
    <script src="<?php echo base_url() ?>asset/vendor/datetimepicker/jquery.datetimepicker.full.js"></script>
    <script src="<?php echo base_url() ?>asset/js/siakad.js"></script>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url() ?>siswa">Sistem Pengajuan Kredit</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <?php echo $this->session->userdata("fullname") ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="<?php echo base_url() ?>Pemohon/kuis"><i class="fa fa-pencil-square-o fa-fw"></i> Questionaire</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>Pemohon/hasil"><i class="fa fa-bar-chart-o fa-fw"></i> Hasil</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo base_url('userlogin/logout') ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            
            <!--div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <h3>Menu</h3>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-dashboard fa-fw"></i> Home</a>
                        </li>
                        <li>
                            
                        </li>
                    </ul>
                </div>
                
            </div-->
            <!-- /.navbar-static-side -->
        </nav>        
        <div id="wrapper">
            <div class="row">
                <div class="col-lg-12" align="center">
                    <h1 class="page-header">DATA PEMOHON</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
            <div class="col-lg-2"></div>
                <div class="col-lg-8">
                        <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4>Data Pemohon</h4>
                        </div>
                        <div class="panel-body">
                        <?php foreach ($dataPemohon->result() as $key): ?>
                        <form action="#" class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-lg-3">Username</label>
                                <div class="col-lg-8">
                                    <label for="username"><i><?php echo $key->username ?></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3">Email</label>
                                <div class="col-lg-8">
                                    <label for="email"><i><?php echo $key->email ?></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3">Phone</label>
                                <div class="col-lg-8">
                                    <label for="telp"><i><?php echo $key->telp ?></i></label>
                                </div>
                            </div><hr>
                        <i class="col-lg-1"></i>
                            <h4><b>A. Data Diri</b></h4>
                            <div class="form-group">
                                <label class="control-label col-lg-3">Nama Lengkap</label>
                                <div class="col-lg-8">
                                    <label for="fullname"><i><?php echo $key->fullname ?></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3">Gender</label>
                                <div class="col-lg-8">
                                   <label for="gender"><i><?php echo $key->jenisKel ?></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3">Agama</label>
                                <div class="col-lg-8">
                                    <label for="agama"><i><?php echo $key->agama ?></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3">Tempat & Tgl Lahir</label>
                                <div class="col-lg-8">
                                    <label for="ttl"><i><?php echo $key->tempatLahir.', '.$key->tglLahir ?></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3">Pekerjaan</label>
                                <div class="col-lg-8">
                                    <label for="pekerjaan"><i><?php echo $key->pekerjaan ?></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3">Tanggungan</label>
                                <div class="col-lg-8">
                                    <label for="tanggungan"><i><?php echo $key->tanggungan ?></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3">Status Rumah</label>
                                <div class="col-lg-8">
                                    <label for="statusRumah"><i><?php echo $key->statusRumah ?></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3">Penghasilan</label>
                                <div class="col-lg-8">
                                    <label for="penghasilan"><i><?php echo $key->penghasilan ?></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3">Alamat</label>
                                <div class="col-lg-8">
                                    <label for="alamat"><i><?php echo $key->alamat ?></i></label>
                                </div>
                            </div>
                            <?php endforeach ?>
                            <?php foreach($dataPendamping->result() as $key): ?>
                            <hr>
                            <i class="col-lg-1"></i>
                            <h4><b>B. DATA PENDAMPING</b></h4>
                            <div class="form-group">
                                <label class="control-label col-lg-3">Nama</label>
                                <div class="col-lg-8">
                                    <label for="nama"><i><?php echo $key->nama ?></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3">Agama</label>
                                <div class="col-lg-8">
                                    <label for="agama"><i><?php echo $key->agama ?></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3">Tempat & Tgl Lahir</label>
                                <div class="col-lg-8">
                                    <label for="ttl"><i><?php echo $key->tempatLahir.', '.$key->tglLahir ?></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3">Pekerjaan</label>
                                <div class="col-lg-8">
                                    <label for="pekerjaan"><i><?php echo $key->pekerjaan ?></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3">Penghasilan</label>
                                <div class="col-lg-8">
                                    <label for="penghasilan"><i><?php echo $key->penghasilan ?></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3">Alamat</label>
                                <div class="col-lg-8">
                                    <label for="alamat"><i><?php echo $key->alamat ?></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3">Telp</label>
                                <div class="col-lg-8">
                                    <label for="telp"><i><?php echo $key->telp ?></i></label>
                                </div>
                            </div>
                            <?php endforeach ?>
                            <?php foreach($dataJaminan->result() as $key): ?>
                            <hr>
                            <i class="col-lg-1"></i>
                            <h4><b>C. DATA JAMINAN</b></h4>
                            
                            <div class="form-group">
                                <label class="control-label col-lg-3">Jenis Jaminan</label>
                                <div class="col-lg-8">
                                    <label for="jaminan"><i><?php echo $key->jaminan ?></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3"><?php if($key->jaminan == 'SHM'){echo 'No SHM';}else{echo 'No Rangka';} ?></label>
                                <div class="col-lg-8">
                                    <label for="noJaminan"><i><?php echo $key->noJaminan ?></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3"><?php if($key->jaminan == 'SHM'){echo 'Luas Tanah';}else{echo 'No Mesin';} ?></label>
                                <div class="col-lg-8">
                                    <label for="noJaminan"><i><?php echo $key->noJaminanAlt ?></i></label>
                                </div>
                            </div>
                            <hr>
                            <i class="col-lg-1"></i>
                            <h4><b>D. DATA BERKAS</b></h4>
                            <div class="form-group">
                                <div class="col-lg-12" align="center">
                                    <img src="<?php if($key->FileFoto == NULL) {echo '#';} else {echo base_url().'uploads/foto/'.$key->FileFoto;} ?>" width="300px" height="300px" class="img-circle" alt="Foto Pemohon">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label class="control-label col-lg-3">File Foto Pemohon</label>
                                
                                <div class="col-lg-8">
                                    <a href="<?php if($key->FileFoto == NULL) {echo '#';} else {echo base_url().'uploads/foto/'.$key->FileFoto;} ?>" onclick="window.open(this.href, '_blank', 'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" class="btn btn-info">Lihat Berkas</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3">File Jaminan</label>
                                <div class="col-lg-8">
                                    <a href="<?php if($key->FileJaminan == NULL) {echo '#';} else {echo base_url().'uploads/jaminan/'.$key->FileJaminan;} ?>" onclick="window.open(this.href, '_blank', 'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" class="btn btn-info">Lihat Berkas</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3">File KTP</label>
                                <div class="col-lg-8">
                                    <a href="<?php if($key->FileKtp == NULL) {echo '#';} else {echo base_url().'uploads/ktp/'.$key->FileKtp;} ?>" onclick="window.open(this.href, '_blank', 'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" class="btn btn-info">Lihat Berkas</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3">File Kartu Keluarga</label>
                                <div class="col-lg-8">
                                    <a href="<?php if($key->FileKartuKeluarga == NULL) {echo '#';} else {echo base_url().'uploads/kartukeluarga/'.$key->FileKartuKeluarga;} ?>" onclick="window.open(this.href, '_blank', 'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" class="btn btn-info">Lihat Berkas</a>
                                </div>
                            </div>
                            <?php endforeach ?>
                        </form>
                        
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

</body>

</html>
