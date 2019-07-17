
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
                        <th>Contact</th>
                        <th>ID Consul</th>
                        <th>Pelayanan</th>
                        <th>Pengerjaan</th>
                        <th>Alamat</th>
                        <th>Keterangan</th>
                        <th>Status</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=1; foreach($content->result() as $con): ?>
                      <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $this->db->get_where('user',array('idUser'=>$con->idUser))->row()->fullname ?></td>
                        <td><?php echo $this->db->get_where('user',array('idUser'=>$con->idUser))->row()->telp ?></td>
                        <td>
                          <a class="btn btn-default col-lg-12" href="#" class="btn btn-default btn-lg" data-toggle="modal" data-target="<?php echo '#consul'.$con->idConsul ?>">Show</a>
                        </td>
                        <td><?php echo $con->pelayanan  ?></td>
                        <td><?php echo $con->pengerjaan  ?></td>
                        <td><?php echo $con->alamat  ?></td>
                        <td><?php echo $con->ket  ?></td>
                        <td><?php echo $con->status ?></td>
                        <?php if($con->startDate == NULL){ ?>
                        <td></td>
                        <?php }else{ ?>
                        <td><?php echo date('d/m/y',strtotime($con->startDate)) ?></td>
                        <?php } ?>
                        <?php if($con->endDate == NULL){ ?>
                        <td></td>
                        <?php }else{ ?>
                        <td><?php echo date('d/m/y',strtotime($con->endDate)) ?></td>
                        <?php } ?>
                        <td align="center">
                          <?php if($con->status != 'Diterima' && $con->status != 'Selesai'){ ?>
                          <a class="btn btn-primary col-lg-12" href="<?php echo base_url('Home/perAccept').'/'.$con->idPerbaikan ?>">Accept</a>
                          <?php } if($con->status == 'Diterima'){ ?>
                          <a class="btn btn-success col-lg-12" href="<?php echo base_url('Home/perFinish').'/'.$con->idPerbaikan ?>">Finished</a>
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
          <!-- New -->

          <!-- Consul Data -->
          <?php foreach($content->result() as $con): ?>
            <?php $a = $this->db->get_where('consul',array('idConsul'=>$con->idConsul))->row() ?>
          <div id="<?php echo 'consul'.$con->idConsul ?>" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Data Estimasi</h4>
                </div>
                <div class="modal-body">
                  <form role="form" action="<?php //echo base_url('edPart').'/'.$con->idPart ?>" method="post">
                    <div class="form-group" align="center">
                      <img src="<?php  echo base_url().'uploads/kerusakan/'.$a->fileKerusakan ?>" class="img-circle" height="100px" width="100px" alt="File Kerusakan">
                    </div>
                    <div class="form-group">
                      <label for="jenis">Jenis : </label>
                      <input id="jenis" name="jenis" type="text" class="form-control" placeholder="Jenis" value="<?php echo $this->db->get_where('jenis',array('idJenis'=>$a->idJenis))->row()->namaJenis ?>" readonly />
                    </div>
                    <div class="form-group">
                      <label for="rusak">Kerusakan : </label>
                      <input id="rusak" name="rusak" type="text" class="form-control" placeholder="Rusak" value="<?php echo $this->db->get_where('rusak',array('idRusak'=>$a->idRusak))->row()->namaRusak ?>" readonly />
                    </div>
                    <div class="form-group">
                      <label for="analisa">Analisa : </label>
                      <input id="analisa" name="analisa" type="text" class="form-control" placeholder="Analisa" value="<?php echo $a->analisa ?>" readonly />
                    </div>
                    <div class="form-group">
                      <label for="esBiaya">Estimasi Biaya : </label>
                      <input id="esBiaya" name="esBiaya" type="text" class="form-control" placeholder="Estimasi Biaya" value="<?php echo $a->esBiaya ?>" readonly />
                    </div>
                    <div class="form-group">
                      <label for="esWaktu">Estimasi Pengerjaan : </label>
                      <input id="esWaktu" name="esWaktu" type="text" class="form-control" placeholder="Estimasi Waktu" value="<?php echo $a->esWaktu ?>" readonly />
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
