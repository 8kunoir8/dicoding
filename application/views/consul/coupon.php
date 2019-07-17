        <style>
            .verticalLine {
              border-left: thin solid white;
            }
        </style>
        <div class="container">
            <div class="row">
            <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="panel panel-info" style="background: transparent;height:400px;border: transparent;padding-top: 1%;">
                        <div class="panel-heading">
                            <!-- <h4>Registrasi Pelanggan Baru</h4> -->
                        </div>
                        <div class="panel-body">
                            <div class="row" style="text-align: center">
                                <h3 style="color: white;font-family: serif;">Registration Ticket Number</h3>
                            </div>
                            <br>
                            <div class="row" style="text-align: center;color: white">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="panel panel-danger">
                                        <div class="panel-heading" style="background-color:#a20111">
                                          <img src="<?php echo base_url() ?>asset/images/sk-ii-logo-white.png" class="pull-left" style="width:40px;"> <span style="margin-left: -40px;color:white">Registration</span>
                                        </div>
                                        <div class="panel-body" style="background-color:#a20111;">
                                            <div class="row" style="text-align:center;margin-bottom:20px;margin-top:-2%">
                                                <img src="<?php echo base_url() ?>asset/images/sk-ii-logo-white.png" style="width:100px;margin-left: 5px;margin-top: 3%">
                                            </div>
                                            <div class="row" style="margin-top:10px">
                                                <span style="color: white;font-size: 20px;">Emporium, 22 - 28 April 2019<?php //echo date('d M Y',strtotime($this->session->userdata("date"))) ?></span>
                                            </div> 
                                            <h1 style="color: white;font-size: 35px;"><strong><?php echo $this->session->userdata("name") ?></strong></h1>
                                            
                                        </div>
                                        <div class="panel-footer" style="background-color:#a20111">
                                            <a href="<?php echo base_url('front/getTicket') ?>" style="color: #a20111;background-color: #f2dede;" class="btn btn-default">Print</a>
                                            <!-- <span style="color: white;"><?php //echo $this->session->userdata("name") ?></span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                </div>
              </div>
          </div>
        </div>
       <!--  <div class="row" style="padding-top: 10%;text-align: center;color:white;">
                        <div class="col-lg-12">
                            <p class="copyright text-muted small" style="color:white;">Copyright &copy; Kunoir 2019.</p>
                        </div>
            </div> -->
    </body>
    <style>
        .error{
            color:red;
        }
    </style>
</html>