<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SK - II</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url() ?>asset/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>asset/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/vendor/datetimepicker/jquery.datetimepicker.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/select/select2.min.css" rel="stylesheet">
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
    <script src="<?php echo base_url() ?>asset/select/select2.full.js"></script>
    <script>
        $(document).ready(function() {
            $('.select-single').select2();
        });
    </script>
    <!-- Datatable -->
    <script src="<?php echo base_url() ?>asset/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>asset/datatables/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url() ?>asset/datatables/dataTables.responsive.min.js"></script>
    <script>
      $(document).ready(function() {
          $('#datatable').DataTable( {
              "pagingType": "numbers"
          } );
      } );
    </script>
    <style>
        .panel-info>.panel-heading {
            /*color: #980a2b;*/
            background-color: transparent;
            border-color: transparent;
        }
    </style>
</head>

<body style="background: #e5172c;" onload="display_ct()">

   <!--  <nav class="navbar navbar-default">
      <div class="container-fluid">
         <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">
                        <a class="navbar-brand" href="<?php //echo base_url('userboard') ?>"><img src="<?php //echo base_url() ?>asset/images/sk-ii-logo-white.png" style="width:60px;margin-top: -5px;text-align: center;"></a>
                    </div>
                    <div class="col-lg-4"></div>
                    
                </div>
                <div class="col-lg-4"></div>
                
            </div>
        <div class="navbar-header">
           
            
           
        </div> -->
        <!-- <?php 
            // if($this->session->userdata("fullname") != NULL){
                ?>
                 <ul class="nav navbar-nav navbar-right">
                 <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php //echo base_url('user/index') ?>">Userboard</a></li>
                        <li class="divider"></li>
                        <li style="margin-left: 20px"> <span class="fa fa-user"></span> <?php //if($this->session->userdata != NULL){echo $this->session->userdata('username');} ?></li>
                        <li class="divider"></li>
                        <?php //if($this->session->userdata != NULL){ ?>
                            <li><a href="<?php //echo base_url('userlogin/logout') ?>"> Logout</a></li>
                        <?php //}else{ ?>
                            <li><a href="<?php //echo base_url('userlogin') ?>"> Login</a></li>
                        <?php //} ?>
                    </ul>
                  </li>
                </ul>
                <?php
            //}
        ?> -->
       
    <!--   </div>
    </nav> -->