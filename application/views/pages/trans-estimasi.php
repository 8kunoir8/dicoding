
      <!-- page content -->
      <div class="right_col" role="main">

      <div class="row x_title">
          <div class="title">
            <h1><?php echo $title ?></h1>
          </div>
      </div>

       <div class="x_panel">
         <div class="x_content">
           <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Customer</th>
                        <th>Photo</th>
                        <th>Dinamo</th>
                        <th>Kerusakan</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=1; foreach($content->result() as $con): ?>
                      <tr>
                        <td align="center"><?php echo $i++ ?></td>
                        <td align="center"><?php echo $this->db->get_where('user',array("idUser"=>$con->idUser))->row()->fullname ?></td>
                        <td align="center">
                          <a href="<?php if($con->fileKerusakan == NULL) {echo '#';} else {echo base_url('').'uploads/kerusakan/'.$con->fileKerusakan;} ?>" onclick="window.open(this.href, '_blank', 'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;">
                              <img src="<?php echo base_url('').'uploads/kerusakan/'.$con->fileKerusakan ?>" height="50px" width="50px" class="img-circle" alt="fileKerusakan">
                          </a> 
                        </td>
                        <td align="center"><?php echo $this->db->get_where('jenis',array('idJenis'=>$con->idJenis))->row()->namaJenis ?></td>
                        <td align="center"><?php echo $this->db->get_where('rusak',array('idRusak'=>$con->idRusak))->row()->namaRusak ?></td>
                        <td align="center"><?php echo $con->ket  ?></td>
                        <td align="center">
                          <?php if($con->analisa==NULL||$con->esBiaya==NULL||$con->esWaktu==NULL){ ?>
                          <a class="btn btn-warning col-lg-12" href="#" class="btn btn-warning btn-lg" data-toggle="modal" data-target="<?php echo '#edit'.$con->idConsul ?>">Estimasi</a>
                          <?php } ?>
                        </td>
                      </tr>
                    <?php endforeach ?>
                    </tbody>
                  </table>
         </div>
       </div>
        <!-- footer content -->

        <!--modals-->
        
          <!-- Edit -->
          <?php foreach($content->result() as $con): ?>
          <div id="<?php echo 'edit'.$con->idConsul ?>" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Estimasi</h4>
                </div>
                <div class="modal-body">
                  <form role="form" action="<?php echo base_url('Home/estimasi').'/'.$con->idConsul ?>" method="post">
                    <div class="form-group">
                      <label for="analisa">Analisa : </label>
                      <input id="analisa" name="analisa" type="text" class="form-control" placeholder="Analisa" required="" />
                    </div>
                    <div class="form-group">
                      <label for="esBiaya">Estimasi Biaya : </label>
                      <input id="esBiaya" name="esBiaya" type="text" class="form-control" placeholder="Estimasi Biaya" required="" value="<?php echo $this->db->get_where('rusak',array('idRusak'=>$con->idRusak))->row()->rangeBiaya ?>" />
                    </div>
                    <div class="form-group">
                      <label for="esWaktu">Estimasi Waktu : </label>
                      <input id="esWaktu" name="esWaktu" type="text" class="form-control" placeholder="Estimasi Waktu" required="" />
                    </div>
                    <div class="form-group">
                      <button name="submit-edEs" id="submit-edEs" type="submit" class="btn btn-default submit">Submit</button>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>

            </div>
          </div>
        <?php endforeach ?>

        <!--modals-->


        <footer>
          <div class="copyright-info">
            <p class="pull-right">Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>  
            </p>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
      <!-- /page content -->

    </div>

  </div>
