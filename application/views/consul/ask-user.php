        <style>
            .verticalLine {
              border-left: thin solid white;
            }
        </style>
        <div class="container">
            <div class="row">
            <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="panel panel-info" style="background: transparent;height:300px;border: transparent;padding-top: 13%;">
                        <div class="panel-heading">
                            <!-- <h4>Registrasi Pelanggan Baru</h4> -->
                        </div>
                        <div class="panel-body">
                            <div class="row" style="text-align: center">
                                <h2 style="color: white;font-family: serif">Are you an existing member ?</h2>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="col-lg-5" style="text-align: right">
                                        <a href="<?php echo base_url('front/member') ?>" class="btn btn-default col-lg-5 pull-right">Yes</a>
                                    </div>
                                    <div class="col-lg-2" style="text-align: center">
                                        <span class="verticalLine"></span>
                                    </div>
                                    <div class="col-lg-5" style="text-align: left">
                                        <a href="<?php echo base_url('front/new_member') ?>" class="btn btn-warning col-lg-5 pull-left">No</a>
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                </div>
              </div>
          </div>
        </div>
        <div class="row" style="padding-top: 15%;text-align: center;color:white;">
                        <div class="col-lg-12">
                            <p class="copyright text-muted small" style="color:white;">Copyright &copy; Kunoir 2019.</p>
                        </div>
            </div>
    </body>
    <style>
        .error{
            color:red;
        }
    </style>
</html>