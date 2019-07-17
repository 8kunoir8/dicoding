
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
                        <td colspan='4' align="center"><a class="btn btn-success col-lg-12" href="#" class="btn btn-info btn-lg" data-toggle="modal" data-target="#newMekanik">Baru</a></td>
                      </tr>
                      <tr>
                        <th>No</th>
                        <th>Nama Mekanik</th>
                        <th>Kuota</th>
                        <!-- <th>Sesi</th> -->
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=1; foreach($content->result() as $con): ?>
                      <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $con->nama ?></td>
                        <td><?php echo $con->quota ?></td>
                        <!-- <td><?php //echo $con->sesi ?></td> -->
                        <td align="center">
                          <a class="btn btn-warning col-lg-4" href="#" class="btn btn-warning btn-lg" data-toggle="modal" data-target="<?php echo '#edit'.$con->id_mekanik ?>">Ubah</a> 
                          <a class="btn btn-danger col-lg-4" href="<?php echo base_url('deleteMekanik').'/'.$con->id_mekanik ?>">Hapus</a>
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

          <div id="newMekanik" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Mekanik Baru</h4>
                </div>
                <div class="modal-body">
                  <form role="form" action="<?php echo base_url('newMekanik') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="nama">Nama Mekanik : </label>
                      <input id="nama" name="nama" type="text" class="form-control" placeholder="Nama Mekanik" required="" />
                    </div>
                    <div class="form-group">
                      <label for="quota">Quota : </label>
                      <input id="quota" name="quota" type="number" class="form-control" placeholder="Quota" required="" />
                    </div>
                    <!-- <div class="form-group">
                      <label for="sesi">Sesi : </label>
                      <select name="sesi" id="sesi" class="form-control">
                        <option value="Pagi">Pagi</option>
                        <option value="Siang">Siang</option>
                      </select>
                    </div> -->
                    <div class="form-group">
                      <button name="submit-newMekanik" id="submit-newJe" type="submit" class="btn btn-default submit">Submit</button>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>

            </div>
          </div>

          <!-- Edit -->
          <?php foreach($content->result() as $con): ?>
          <div id="<?php echo 'edit'.$con->id_mekanik ?>" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Ubah Mekanik</h4>
                </div>
                <div class="modal-body">
                  <form role="form" action="<?php echo base_url('editMekanik').'/'.$con->id_mekanik ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="nama">Nama Mekanik : </label>
                      <input id="nama" name="nama" type="text" class="form-control" placeholder="Nama Mekanik" required="" value="<?php echo $con->nama ?>" />
                    </div>
                    <div class="form-group">
                      <label for="quota">Quota : </label>
                      <input id="quota" name="quota" type="number" class="form-control" placeholder="Quota" required="" value="<?php echo $con->quota ?>" />
                    </div>
                    <!-- <div class="form-group">
                      <label for="sesi">Sesi : </label>
                      <select name="sesi" id="sesi" class="form-control">
                        <option value="Pagi" <?php //if($con->sesi == "Pagi"){echo "Selected";} ?>>Pagi</option>
                        <option value="Siang" <?php //if($con->sesi == "Siang"){echo "Selected";} ?>>Siang</option>
                      </select>
                    </div> -->
                    <div class="form-group">
                      <button name="submit-editMekanik" id="submit-editMekanik" type="submit" class="btn btn-default submit">Submit</button>
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
