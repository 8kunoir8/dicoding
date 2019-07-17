        <style>
            .verticalLine {
              border-left: thin solid white;
            }
        </style>
        <script>
        function selectrd(id)
        {
            var opt=(id==1)?"skin":(id==2)?"product":"nothing";
            var tg=document.getElementById(opt);
            tg.checked=true;
        }
        </script>
        <div class="container">
            <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1"></div>
                <div class="col-lg-10 col-md-10 col-sm-10">
                    <div class="panel panel-info" style="background: transparent;height:400px;border: transparent;padding-top: 1%;">
                        <div class="panel-heading">
                            <!-- <h4>Registrasi Pelanggan Baru</h4> -->
                        </div>
                        <div class="panel-body">
                            <div class="row" style="text-align: center">
                                <h2 style="color: white;font-family: serif;">What is your interest in this event ?</h2>
                            </div>
                            <br>
                            <div class="row">
                                <form action="<?php echo base_url('front/saveInterest') ?>" method="post" class="form-horizontal" id="saveInterest">
                                    <div class="row" style="text-align: center">
                                        <span onclick="selectrd(1)" class="btn btn-primary">
                                                <input id="skin" name="interest" type="radio" value="Skin Consultation" required> <strong>Skin Consultation</strong>
                                            </a>
                                    </div>
                                    <div class="row" style="text-align: center;margin-top: 10px">
                                        <span onclick="selectrd(2)" class="btn btn-primary">
                                                <input id="product" name="interest" type="radio" value="Product Purchase"> <strong>Product Purchase</strong>
                                            </a>
                                    </div>
                                    <br>
                                    <div class="col-lg-2 col-md-2 col-sm-2">  </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9" style="text-align: center;margin-top: 10px;margin-right: 200px">
                                        <div class="col-lg-4 col-md-4 col-sm-4"></div>
                                        <!-- <input type="submit" name="submit" class="btn btn-warning col-lg-3 pull-left" value="Cancel"> -->
                                        <a href="#" name="Cancel" class="btn btn-warning col-lg-3 col-md-3 col-sm-3 pull-left">Cancel</a>
                                        <div class="col-lg-2 col-md-2 col-sm-2"></div>
                                        <input type="submit" name="submit" class="btn btn-default col-lg-3 col-md-3 col-sm-3 pull-right" value="Next">
                                        <!-- <a href="<?php //echo base_url('front/coupon') ?>" class="btn btn-default col-lg-3 pull-right">Next</a> -->
                                    </div>
                                </form>
                            </div>
                        
                    </div>
                </div>
              </div>
          </div>
        </div>
        <div class="row" style="padding-top: 9%;text-align: center;color:white;">
                        <div class="col-lg-12 col-md-12 col-sm-12">
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