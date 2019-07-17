
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
                      <!-- <tr>
                        <td colspan='6' align="center"><a class="btn btn-success col-lg-12" href="#" class="btn btn-info btn-lg" data-toggle="modal" data-target="#new">Baru</a></td>
                      </tr> -->
                      <tr>
                        <th>No</th>
                        <th>Pelanggan</th>
                        <th>Tanggal</th>
                        <th>Mekanik</th>
                        <th>Motor</th>
                        <th>Total Biaya</th>
                        <th>Laporan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=1; foreach($content->result() as $con): ?>
                      <?php $antrian = $this->db->get_where('data_antrian',array('id_antrian'=>$con->id_antrian))->row() ?>
                      <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $this->db->get_where('user',array('idUser'=>$antrian->idUser))->row()->fullname ?></td>
                        <td><?php echo $con->rpt_date ?></td>
                        <td><?php echo $this->db->get_where('mekanik',array('id_mekanik'=>$con->id_mekanik))->row()->nama ?></td>
                        <td><?php echo $this->db->get_where('data_motor',array('id_motor'=>$antrian->id_motor))->row()->nm_motor ?></td>
                        <td>Rp. <?php echo number_format($antrian->harga_jasa + $antrian->harga_sparepart + $antrian->harga_oli) ?></td>
                        <td align="center">
                          <a class="btn btn-default col-lg-5" href="#" class="btn btn-warning btn-lg" data-toggle="modal" data-target="<?php echo '#edit'.$con->id_laporan ?>">Laporan</a>
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

          <!-- Edit -->
          <?php foreach($content->result() as $con): ?>
          <div id="<?php echo 'edit'.$con->id_laporan ?>" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Detail Laporan</h4>
                </div>
                <div class="modal-body">
                  <form role="form" action="<?php //echo base_url('editOli').'/'.$con->id_oli ?>" method="post" enctype="multipart/form-data">
                    <!-- <div class="form-group">
                      <label for="nama">Nama Oli : </label>
                      <input id="nama" name="nama" type="text" class="form-control" placeholder="Nama Oli" required="" value="<?php //echo $con->nama ?>" />
                    </div>
                    <div class="form-group">
                      <label for="harga">Harga : </label>
                      <input id="harga" name="harga" type="number" class="form-control" placeholder="Harga" required="" value="<?php //echo $con->harga ?>" />
                    </div>
                    <div class="form-group">
                      <label for="quota">Quota : </label>
                      <input id="quota" name="quota" type="number" class="form-control" placeholder="Quota" required="" value="<?php //echo $con->quota ?>" />
                    </div> -->
                    <div class="form-group">
                      <label for="laporan">Laporan : </label>
                      <textarea name="laporan" id="laporan" cols="30" rows="10" class="form-control"><?php echo $con->laporan ?></textarea>
                    </div>
                    <!-- <div class="form-group">
                      <button name="submit-editOli" id="submit-editOli" type="submit" class="btn btn-default submit">Submit</button>
                    </div> -->
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
