        <style>
            .verticalLine {
              border-left: thin solid white;
            }
        </style>
        <script>
        function selectrd(id)
        {
            var opt=(id==1)?"yes":(id==2)?"partners":(id==3)?"others":(id==4)?"idnumber":(id==5)?"no":"nothing";
            
            var tg=document.getElementById(opt);
            tg.checked=true;
            
            // if(opt==1){
            //     onYes();
            // }elseif(opt==5){
            //     onNo();
            // }
        }
        function onYes(){
            var yes = document.getElementById("partners");
            yes.required = true;
        }
        function onNo(){
            var no = document.getElementById("partners");
            no.required = false;
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
                                <h2 style="color: white;font-family: serif;">Do you have any of the following membership ?</h2>
                            </div>
                            <br>
                            <form action="<?php echo base_url('front/saveMembership') ?>" method="post" class="form-horizontal" id="saveMembership">
                                   <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2"></div>
                                        <div class="col-lg-3 col-md-3 col-sm-3">
                                            <span onclick="selectrd(1)" class="btn btn-primary col-lg-6 col-md-6 col-sm-6">
                                                    <input id="yes" name="isMember" type="radio" value="1" onclick="onYes()" required> <strong>Yes</strong>
                                                </a>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="row" style="margin-left: -80px">
                                                <div class="form-group input-group col-lg-10 col-md-10 col-sm-10">
                                                        <span onclick="selectrd(2)" class="input-group-addon" style="background: #337ab7"><input id="partners" name="memberType" type="radio" value="Partner"></span>
                                                        <!-- <input type="text" class="form-control" placeholder="Partner"> -->
                                                        <select name="partner" id="partner" class="form-control" placeholder="Partner">
                                                             <?php foreach($this->db->get_where('partner',array('status'=>1))->result() as $a): ?>
                                                            <option value="<?php echo $a->name ?>"><?php echo $a->name ?></option>
                                                             <?php endforeach ?>
                                                        </select>
                                                    </div>
                                            </div>
                                            <div class="row" style="margin-left: -80px">
                                                <div class="form-group input-group col-lg-10 col-md-10 col-sm-10">
                                                        <span onclick="selectrd(3)" class="input-group-addon" style="background: #337ab7"><input name="memberType" id="others" type="radio" value="Others"></span>
                                                        <input name="others" type="text" class="form-control" placeholder="Others">
                                                    </div>
                                            </div>
                                            <div class="row" style="margin-left: -80px">
                                                <div class="form-group input-group col-lg-10 col-md-10 col-sm-10">
                                                        <span onclick="selectrd(4)" class="input-group-addon" style="background: #337ab7"><input name="memberType" id="idnumber" type="radio" value="ID Number"></span>
                                                        <input name="idNumber" type="text" class="form-control" placeholder="ID Number">
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2"></div>
                                        <div class="col-lg-3 col-md-3 col-sm-3">
                                            <span onclick="selectrd(5)" class="btn btn-primary col-lg-6 col-md-6 col-sm-6">
                                                    <input id="no" name="isMember" onclick="" type="radio" value="0"> <strong>No</strong>
                                                </a>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        
                                        <div class="col-lg-2 col-md-2 col-sm-2">  </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9" style="text-align: center;margin-top: 10px;margin-right: 200px">
                                            <div class="col-lg-4 col-md-4 col-sm-4"></div>
                                            <!-- <input type="submit" name="submit" class="btn btn-warning col-lg-3 pull-left" value="Cancel"> -->
                                            <a href="#" name="Cancel" class="btn btn-warning col-lg-3 col-md-3 col-sm-3 pull-left">Cancel</a>
                                            <div class="col-lg-2 col-md-2 col-sm-2"></div>
                                            <input type="submit" name="submit" class="btn btn-default col-lg-3 col-md-3 col-sm-3 pull-right" value="Next">
                                            <!-- <a href="<?php //echo base_url('front/interest') ?>" class="btn btn-default col-lg-3 pull-right">Next</a> -->
                                        </div>
                                    </div> 
                            </form>
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