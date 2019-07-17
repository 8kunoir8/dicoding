        <style>
            .verticalLine {
              border-left: thin solid white;
            }
        </style>
        <div class="container">
            <div class="row">
            <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="panel panel-info" style="background: transparent;height:350px;border: transparent;padding-top: 7%;">
                        <div class="panel-heading">
                            <!-- <h4>Registrasi Pelanggan Baru</h4> -->
                        </div>
                        <div class="panel-body">
                            <div class="row" style="text-align: center">
                                <h2 style="color: white;font-family: serif;">Customer Data Check</h2>
                            </div>
                            <br>
                            <div class="row">
                                <div class="form-group">
                                    <!-- <label class="control-label col-lg-3">Name</label> -->
                                    <div class="col-lg-2">  </div>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control required" name="name" placeholder="Name">
                                    </div>
                                    <div class="col-lg-2">  </div>
                                </div>
                                <br>    
                                <div class="form-group" style="margin-top: 10px">
                                    <!-- <label class="control-label col-lg-3">Phone Number</label> -->
                                    <div class="col-lg-2">  </div>
                                    <div class="col-lg-8">
                                        <input type="Number" class="form-control" placeholder="Phone Number" name="phone">
                                    </div>
                                    <div class="col-lg-2">  </div>
                                </div>
                                <br>
                                <div class="col-lg-2">  </div>
                                <div class="col-lg-9" style="text-align: center;margin-top: 20px;margin-right: 200px">
                                    <div class="col-lg-4"></div>
                                    <!-- <input type="submit" name="submit" class="btn btn-warning col-lg-3 pull-left" value="Cancel"> -->
                                    <a href="#" name="Cancel" class="btn btn-warning col-lg-3 pull-left">Cancel</a>
                                    <div class="col-lg-2"></div>
                                    <!-- <input type="submit" name="submit" class="btn btn-default col-lg-3 pull-right" value="Next"> -->
                                    <a href="<?php echo base_url('front/survey') ?>" class="btn btn-default col-lg-3 pull-right">Next</a>
                                </div>
                            </div>
                        
                    </div>
                </div>
              </div>
          </div>
        </div>
        <div class="row" style="padding-top: 13%;text-align: center;color:white;">
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