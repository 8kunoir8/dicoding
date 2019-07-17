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
                    <h1 class="page-header"><?php echo $title ?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
            <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <?php if($hasil == NULL){ ?>
                    <h3 class="text-center">Maaf, keputusan permohonan pinjaman Anda sedang di Proses.</h3>
                <?php }else{ ?>
                    <?php if($hasil == 'LULUS') {?>
                        <h3 class="text-center">Selamat Permohonan Pinjaman Anda <b>DISETUJUI</b></h3>
                    <?php } else { ?>
                        <h3 class="text-center">Maaf Permohonan Pinjaman Anda <b>TIDAK DISETUJUI</b></h3>
                    <?php }} ?>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4>Nilai</h4>
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered table-hover">
                                
                                    <tr>
                                        <th class="text-center" colspan="2">Bobot</th>
                                        <th class="text-center" rowspan="2">Total</th>
                                    </tr>
                                    <tr>
                                        
                                        <th>Kriteria</th>
                                        <th>Nilai</th>
                                        
                                    </tr>
                                    
                                    <tr>
                                        <td><?php echo $dataKriteria->row()->pekerjaan ?></td>
                                        <td><?php echo $dataKriteria->row()->niPek ?></td>
                                        <td rowspan="5"></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo $dataKriteria->row()->penghasilan ?></td>
                                        <td><?php echo $dataKriteria->row()->niPeng ?></td>
                                        
                                    </tr>
                                    <tr>
                                        <td><?php echo $dataKriteria->row()->jaminan ?></td>
                                        <td><?php echo $dataKriteria->row()->niJam ?></td>
                                        
                                    </tr>
                                    <tr>
                                        <td><?php echo $dataKriteria->row()->tanggungan ?></td>
                                        <td><?php echo $dataKriteria->row()->niTang ?></td>
                                        
                                    </tr>
                                    <tr>
                                        <td><?php echo $dataKriteria->row()->statusRumah ?></td>
                                        <td><?php echo $dataKriteria->row()->niSta ?></td>
                                       
                                    </tr>
                                    
                                    <tr>
                                        <th>Kuisioner</th>
                                        <th>Nilai</th>
                                        <th></th>
                                    </tr>
                                    <?php if($dataKuis->result() == NULL){ ?>
                                    <tr>
                                        <td colspan="3" align="center">Anda Belum Mengisi Kuisioner</td>
                                    </tr>
                                    <?php }else{ ?>
                                    <?php foreach($dataKuis->result() as $a): ?>
                                    <tr>
                                        <td><?php echo $this->db->get_where("mst_kuisioner",array("idKuis"=>$a->idKuis))->row()->pertanyaan; ?></td>
                                        <td><?php echo $this->db->get_where("mst_kuisioner_dtl",array("idKuis_dtl"=>$a->idKuis_dtl))->row()->nilai; ?></td>
                                        <td></td>
                                    </tr>
                                    <?php endforeach ?>
                                    <?php } ?>
                                    <tr>
                                        <td colspan="2" align="left"><b>Grand Total</b></td>
                                        <td></td>
                                    </tr>
                               
                                <tfoot>
                                    
                                </tfoot>
                            </table>
                            <?php //$kelas = $kelasSiswa->row(); ?>
                            <div class="col-lg-8">
                                Jumlah Pinjaman Didapatkan : 
                            </div>
                            <div class="col-lg-8">
                            <h3>Rp. <b></b></h3>
                            </div>
                            
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
