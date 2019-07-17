        <?php //if($this->session->userdata("id")==null ||$this->session->userdata("id")== ""){redirect(base_url('front/loginTable'));} ?>
        <div class="container">
            <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1"></div>
                <div class="col-lg-10 col-md-10 col-sm-10">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4>
                              Menu Table <?php //if($this->session->userdata != NULL){echo $this->session->userdata('counter_number');} ?><?php //if($this->db->get_where("counter",array("id"=>$this->session->userdata("id")))->row()->counter_status == 1){echo "Occupied";}else{echo "Empty";} ?>
                              <span class="pull-right">
                                <a href="<?php echo base_url('logout') ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                              </span>
                              </h4>
                        </div>
                        <div class="panel-body">
                            <table id="table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Table</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                      </tr>
                                </thead>
                                <tbody>
                                  <?php $i=1; foreach($this->db->query("select * from counter order by counter_number asc")->result() as $con): ?>
                                  <tr>
                                    <td><?php echo $con->counter_number ?></td>
                                    <td><?php echo $con->counter_type ?></td>
                                    <td><?php if($con->counter_status == 1){echo "Occupied";}else{echo "Empty";} ?></td>
                                    <td>
                                      <a href="<?php echo base_url('front/setTable/').$con->counter_type.'/'.$con->id ?>" class="btn btn-success col-lg-6 col-md-6 col-sm-6">Start</a>
                                      <a href="<?php echo base_url('front/emptyTable/').$con->id ?>" class="btn btn-danger col-lg-6 col-md-6 col-sm-6">End</a>
                                    </td>
                                  </tr>
                                  <?php endforeach ?>
                                </tbody>
                            </table>
                            <!-- <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <a href="<?php //echo base_url('front/emptyTable') ?>" class="btn btn-success btn-lg col-lg-12 col-md-12 col-sm-12">Empty Table</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12" align="center">
                                    <small>Merubah status meja menjadi kosong</small>
                                </div>
                            </div><br> -->
                        </div>
                    </div>
                  </div>
              </div>
              <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1"></div>
                <div class="col-lg-10 col-md-10 col-sm-10">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4>Next Queue</h4>
                        </div>
                        <div class="panel-body">
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Ticket</th>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                      </tr>
                                </thead>
                                <tbody>
                                  <?php $i=1; foreach($this->db->query("select * from queue where is_done = 0")->result() as $con): ?>
                                  <tr>
                                    <td><?php echo $i++ ?></td>
                                    <td><?php echo $con->ticket ?></td>
                                    <td><?php echo $this->db->get_where("member",array("id"=>$con->member_id))->row()->name ?></td>
                                    <td><?php echo $this->db->get_where("member",array("id"=>$con->member_id))->row()->type ?></td>
                                    <td><?php if($con->is_done == 1){echo "Done";}else{echo "Waiting";}?></td>
                                  </tr>
                                  <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                  </div>
              </div>
        
            </div>

          


    </body>
    
    <style>
        .error{
            color:red;
        }
    </style>
</html>