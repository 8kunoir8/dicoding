
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
                        <td colspan='5' align="center"><a class="btn btn-success col-lg-12" href="#" class="btn btn-info btn-lg" data-toggle="modal" data-target="#newBrand">New</a></td>
                      </tr> -->
                      <tr>
                        <th>No</th>
                        <th>Nama Pengguna</th>
                        <th>Motor</th>
                        <th>Merk</th>
                        <th>Jenis</th>
                        <th>No Polisi</th>
                        <th>No STNK</th>
                        <th>Warna</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=1; foreach($content->result() as $con): ?>
                      <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $this->db->get_where('user',array("idUser"=>$con->idUser))->row()->fullname ?></td>
                        <td><?php echo $con->nm_motor ?></td>
                        <td><?php echo $this->db->get_where("brand",array("idBrand"=>$con->idBrand))->row()->namaBrand ?></td>
                        <td><?php echo $con->jenis ?></td>
                        <td><?php echo $con->no_pol ?></td>
                        <td><?php echo $con->no_stnk ?></td>
                        <td><?php echo $con->warna ?></td>
                        <td align="center">
                          <!-- <a class="btn btn-warning col-lg-4" href="#" class="btn btn-warning btn-lg" data-toggle="modal" data-target="<?php //echo '#edit'.$con->id_motor ?>">Edit</a>  -->
                          <a class="btn btn-danger col-lg-6" href="<?php echo base_url('delMotor').'/'.$con->id_motor ?>">Delete</a>
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

          <!-- <div id="newBrand" class="modal fade" role="dialog">
            <div class="modal-dialog"> -->

              <!-- Modal content-->
             <!--  <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">New Brand</h4>
                </div>
                <div class="modal-body">
                  <form role="form" action="<?php //echo base_url('newBr') ?>" method="post"> -->
                    <!-- <div class="form-group">
                      <label for="pic">Picture : </label>
                      <input type="file" id="pic" name="pic" class="form-control" placeholder="Select Picture" required=""> 
                    </div> -->
                   <!--  <div class="form-group">
                      <label for="name">Brand Name : </label>
                      <input id="name" name="name" type="text" class="form-control" placeholder="Brand Name" required="" />
                    </div>
                    <div class="form-group">
                      <label for="keterangan">Description : </label>
                      <textarea name="keterangan" id="keterangan" class="form-control" placeholder="Keterangan Mengenai Brand" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                      <button name="submit-newBr" id="submit-newBr" type="submit" class="btn btn-default submit">Submit</button>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>

            </div>
          </div> -->

          <!-- Edit -->
          <?php //foreach($content->result() as $con): ?>
          <!-- <div id="<?php //echo 'edit'.$con->id_motor ?>" class="modal fade" role="dialog">
            <div class="modal-dialog"> -->

              <!-- Modal content-->
              <!-- <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Ubah Data Motor</h4>
                </div>
                <div class="modal-body">
                  <form role="form" action="<?php //echo base_url('edMotor').'/'.$con->id_motor ?>" method="post"> -->
                    <!-- <div class="form-group">
                      <label for="pic">Picture : </label>
                      <input type="file" id="pic" name="pic" class="form-control" placeholder="Select Picture" required=""> 
                    </div> -->
                    <!-- <div class="form-group">
                      <label for="name">Brand Name : </label>
                      <input id="name" name="name" type="text" class="form-control" placeholder="Brand Name" required="" value="<?php //echo $con->namaBrand ?>" />
                    </div>
                    <div class="form-group">
                      <label for="keterangan">Description : </label>
                      <textarea name="keterangan" id="keterangan" class="form-control" placeholder="Keterangan Mengenai Brand" cols="30" rows="10"><?php //echo $con->keterangan ?></textarea>
                    </div>
                    <div class="form-group">
                      <button name="submit-edBr" id="submit-edBr" type="submit" class="btn btn-default submit">Submit</button>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>

            </div>
          </div> -->
        <?php //endforeach ?>

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
