        <style>
            .verticalLine {
              border-left: thin solid white;
            }
        </style>
        <script>
        function selectrd(id)
        {
            var opt=(id==1)?"banner":(id==2)?"web":(id==3)?"walk":(id==4)?"coupon":(id==5)?"email":(id==6)?"male":(id==7)?"others":"nothing";
            var tg=document.getElementById(opt);
            tg.checked=true;
        }
        </script>
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
                                <h2 style="color: white;font-family: serif;">How do you know about this SK-II event ?</h2>
                            </div>
                            <br>
                            <div class="row">
                                <form action="<?php echo base_url('front/saveSurvey') ?>" method="post" class="form-horizontal" id="saveSurvey">
                                    <div class="row" style="text-align: center">
                                        <span class="btn btn-primary" onclick="selectrd(1)">
                                                <input id="banner" name="source" type="radio" value="Banner" required=""> <strong>Banner</strong>
                                            </span>
                                            <span class="btn btn-primary" onclick="selectrd(2)">
                                                <input id="web" name="source" type="radio" value="Web/Socmed"> <strong>Web/Socmed</strong>
                                            </span>
                                            <span class="btn btn-primary" onclick="selectrd(3)">
                                                <input id="walk" name="source" type="radio" value="Walk in Guest"> <strong>Walk in Guest</strong>
                                            </span>
                                            <span class="btn btn-primary" onclick="selectrd(4)">
                                                <input id="coupon" name="source" type="radio" value="Coupon"> <strong>Coupon</strong>
                                            </span>
                                    </div>
                                    <div class="row" style="margin-top: 10px;text-align:center">
                                        <div class="col-lg-4 col-md-4 col-sm-4"></div>
                                        <div class="form-group input-group col-lg-4 col-md-4 col-sm-4">
                                                <span onclick="selectrd(5)" class="input-group-addon" style="background: #337ab7"><input id="email" name="source" type="radio" value="Email Blast"></span>
                                                <input name="emailBlast" type="text" class="form-control" placeholder="Email Blast">
                                            </div>
                                    </div>
                                    <div class="row" style="text-align:center">
                                        <div class="col-lg-4 col-md-4 col-sm-4"></div>
                                        <div class="form-group input-group col-lg-4 col-md-4 col-sm-4">
                                                <span onclick="selectrd(6)" class="input-group-addon" style="background: #337ab7"><input id="male" name="source" type="radio" value="Male User"></span>
                                                <!-- <input type="text" class="form-control" placeholder="Flower Invitation"> -->
                                                <select name="maleUser" id="maleUser" class="form-control" placeholder="Male Usher">
                                                     <?php foreach($this->db->get('male_user')->result() as $a): ?>
                                                    <option value="<?php echo $a->name ?>"><?php echo $a->name ?></option>
                                                     <?php endforeach ?>
                                                </select>
                                            </div>
                                    </div>
                                    <div class="row" style="text-align:center">
                                        <div class="col-lg-4 col-md-4 col-sm-4"></div>
                                        <div class="form-group input-group col-lg-4 col-md-4 col-sm-4">
                                                <span onclick="selectrd(7)" class="input-group-addon" style="background: #337ab7"><input id="others" name="source" type="radio" value="Others"></span>
                                                <input name="others" type="text" class="form-control" placeholder="Others">
                                            </div>
                                    </div>
                                    <br>
                                    <div class="col-lg-2">  </div>
                                    <div class="col-lg-12" style="text-align: center;margin-top: 10px;">
                                        <div class="col-lg-12">
                                        <!-- <input type="submit" name="submit" class="btn btn-warning col-lg-3 pull-left" value="Cancel"> -->
                                        <a href="<?php echo base_url('front') ?>" name="Cancel" class="btn btn-warning col-lg-3 pull-left">Cancel</a>
                                        <input type="submit" name="submit" class="btn btn-default col-lg-3 pull-right" value="Next">
                                        <!-- <a href="<?php //echo base_url('front/membership') ?>" class="btn btn-default col-lg-3 pull-right">Next</a> -->
                                        </div>
                                    </div>
                                </form>
                                
                            </div>
                        
                    </div>
                </div>
              </div>
          </div>
        </div>
        <div class="row" style="padding-top: 9%;text-align: center;color:white;">
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