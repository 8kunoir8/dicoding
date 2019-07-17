        <style>
            .verticalLine {
              border-left: thin solid white;
            }
        </style>
        <div class="container">
            <div class="row">
            <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="panel panel-info" style="background: transparent;height:300px;border: transparent;padding-top: 5%;">
                        <div class="panel-heading">
                            <!-- <h4>Registrasi Pelanggan Baru</h4> -->
                        </div>
                        <div class="panel-body">
                            <div class="row" style="text-align: center">
                                <h2 style="color: white;font-family: serif;">Customer Personal Data</h2>
                            </div>
                            <br>
                            <div class="row">
                                <form action="<?php echo base_url('front/saveMember') ?>" method="post" class="form-horizontal" id="saveMember">
                                    <div class="form-group">
                                        <!-- <label class="control-label col-lg-3">Name</label> -->
                                        <div class="col-lg-2 col-md-2 col-sm-2">  </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <input type="text" class="form-control required" name="name" placeholder="Name" required>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-2">  </div>
                                    </div>
                                    <div class="form-group">
                                        <!-- <label class="control-label col-lg-3">Phone Number</label> -->
                                        <div class="col-lg-2 col-md-2 col-sm-2">  </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <input type="text" class="form-control" placeholder="Age" name="age" required>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-2">  </div>
                                    </div>
                                    <div class="form-group">
                                        <!-- <label class="control-label col-lg-3">Phone Number</label> -->
                                        <div class="col-lg-2 col-md-2 col-sm-2">  </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <input type="Number" class="form-control" placeholder="Phone Number" name="phone" required>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-2">  </div>
                                    </div>  
                                    <div class="form-group">
                                        <!-- <label class="control-label col-lg-3">Phone Number</label> -->
                                        <div class="col-lg-2 col-md-2 col-sm-2">  </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <input type="email" class="form-control" placeholder="Email" name="email" required>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-2">  </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2">  </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12" style="text-align: center;margin-top: 20px;">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                        <!-- <input type="submit" name="submit" class="btn btn-warning col-lg-3 pull-left" value="Cancel"> -->
                                        <a href="#" onclick="location.reload();" name="Cancel" class="btn btn-warning col-lg-3 pull-left">Cancel</a>
                                        <input type="submit" name="submit" class="btn btn-default col-lg-3 pull-right" value="Next">
                                        <!-- <a href="<?php //echo base_url('front/survey') ?>" class="btn btn-default col-lg-3 pull-right">Next</a> -->
                                        </div>
                                    </div>
                                </form>
                                
                            </div>
                        
                    </div>
                </div>
              </div>
          </div>
        </div>
        <div class="row" style="padding-top: 11%;text-align: center;color:white;">
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