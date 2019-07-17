
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
                        <td colspan='6' align="center"><a class="btn btn-success col-lg-12" href="#" class="btn btn-info btn-lg" data-toggle="modal" data-target="#newCategory">New</a></td>
                      </tr>
                      <tr>
                        <th>No</th>
                        <th>Nama Jasa</th>
                        <th>Jenis Motor</th>
                        <th>Biaya</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=1; foreach($content->result() as $con): ?>
                      <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $con->namaCategory  ?></td>
                        <td><?php echo $con->jenis_motor ?></td>
                        <td>Rp. <?php echo number_format($con->price) ?></td>
                        <td><?php echo $con->keterangan ?></td>
                        <td align="center">
                          <a class="btn btn-warning col-lg-4" href="#" class="btn btn-warning btn-lg" data-toggle="modal" data-target="<?php echo '#edit'.$con->idCategory ?>">Edit</a> 
                          <a class="btn btn-danger col-lg-4" href="<?php echo base_url('delCat').'/'.$con->idCategory ?>">Delete</a>
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

          <div id="newCategory" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Buat Jasa Baru</h4>
                </div>
                <div class="modal-body">
                  <form role="form" action="<?php echo base_url('newCat') ?>" method="post">
                    <div class="form-group">
                      <label for="name">Nama Jasa : </label>
                      <input id="name" name="name" type="text" class="form-control" placeholder="Nama Jasa" required="" />
                    </div>
                    <div class="form-group">
                      <label for="jenis">Jenis</label>
                        <select class="form-control required" name="jenis_motor">
                          <option value="Motor Bebek">Motor Bebek</option>
                          <option value="Motor Matic">Motor Matic</option>
                          <option value="Motor Sport">Motor Sport</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="price">Biaya : </label>
                      <input id="price" name="price" type="number" class="form-control" placeholder="Biaya Jasa" required="" />
                    </div>
                    <div class="form-group">
                      <label for="keterangan">Keterangan : </label>
                      <textarea name="keterangan" id="keterangan" class="form-control" placeholder="Keterangan Mengenai Jasa" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                      <button name="submit-newCat" id="submit-newCat" type="submit" class="btn btn-default submit">Submit</button>
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
          <div id="<?php echo 'edit'.$con->idCategory ?>" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Ubah Jasa</h4>
                </div>
                <div class="modal-body">
                  <form role="form" action="<?php echo base_url('edCat').'/'.$con->idCategory ?>" method="post">
                    <div class="form-group">
                      <label for="name">Nama Jasa : </label>
                      <input id="name" name="name" type="text" class="form-control" placeholder="Nama Jasa" required="" value="<?php echo $con->namaCategory ?>" />
                    </div>
                    <div class="form-group">
                      <label for="jenis">Jenis</label>
                        <select class="form-control required" name="jenis_motor">
                          <option value="Motor Bebek" <?php if($con->jenis_motor == "Motor Bebek"){echo "selected";} ?>>Motor Bebek</option>
                          <option value="Motor Matic" <?php if($con->jenis_motor == "Motor Matic"){echo "selected";} ?>>Motor Matic</option>
                          <option value="Motor Sport" <?php if($con->jenis_motor == "Motor Sport"){echo "selected";} ?>>Motor Sport</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="price">Biaya : </label>
                      <input id="price" name="price" type="number" class="form-control" placeholder="Biaya Jasa" required="" value="<?php echo $con->price ?>" />
                    </div>
                    <div class="form-group">
                      <label for="keterangan">Keterangan : </label>
                      <textarea name="keterangan" id="keterangan" class="form-control" placeholder="Keterangan Mengenai Jasa" cols="30" rows="10"><?php echo $con->keterangan ?></textarea>
                    </div>
                    <div class="form-group">
                      <button name="submit-edCat" id="submit-edCat" type="submit" class="btn btn-default submit">Submit</button>
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
