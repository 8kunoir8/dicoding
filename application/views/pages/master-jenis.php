
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
                        <td colspan='6' align="center"><a class="btn btn-success col-lg-12" href="#" class="btn btn-info btn-lg" data-toggle="modal" data-target="#newJenis">New</a></td>
                      </tr>
                      <tr>
                        <th>No</th>
                        <th>Pic</th>
                        <th>Nama Jenis</th>
                        <th>Kategori</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=1; foreach($content->result() as $con): ?>
                      <tr>
                        <td><?php echo $i++ ?></td>
                        <td align="center">
                            <a href="<?php if($con->picJenis == NULL) {echo '#';} else {echo base_url('').'uploads/fotojenis/'.$con->picJenis;} ?>" onclick="window.open(this.href, '_blank', 'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;">
                              <img src="<?php echo base_url('').'uploads/fotojenis/'.$con->picJenis ?>" height="50px" width="50px" class="img-circle" alt="foto jenis">
                          </a> 
                        </td>
                        <td><?php echo $con->namaJenis ?></td>
                        <td><?php echo $con->catJenis ?></td>
                        <td><?php echo $con->ketJenis ?></td>
                        <td align="center">
                          <a class="btn btn-warning col-lg-4" href="#" class="btn btn-warning btn-lg" data-toggle="modal" data-target="<?php echo '#edit'.$con->idJenis ?>">Edit</a> 
                          <a class="btn btn-danger col-lg-4" href="<?php echo base_url('delJe').'/'.$con->idJenis ?>">Delete</a>
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

          <div id="newJenis" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">New Jenis</h4>
                </div>
                <div class="modal-body">
                  <form role="form" action="<?php echo base_url('newJe') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="picJenis">Pic Jenis : </label>
                      <input id="fotoJenis" name="fotoJenis" type="file" class="form-control" placeholder="Pic Jenis" required="" />
                    </div>
                    <div class="form-group">
                      <label for="name">Nama Jenis : </label>
                      <input id="name" name="name" type="text" class="form-control" placeholder="Nama Jenis" required="" />
                    </div>
                    <div class="form-group">
                      <label for="category">Kategori : </label>
                      <input id="cat" name="cat" type="text" class="form-control" placeholder="Kategori" required="" />
                    </div>
                    <div class="form-group">
                      <label for="keterangan">Keterangan : </label>
                      <textarea name="keterangan" id="keterangan" class="form-control" placeholder="Keterangan" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                      <button name="submit-newJe" id="submit-newJe" type="submit" class="btn btn-default submit">Submit</button>
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
          <div id="<?php echo 'edit'.$con->idJenis ?>" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Edit Jenis</h4>
                </div>
                <div class="modal-body">
                  <form role="form" action="<?php echo base_url('edJe').'/'.$con->idJenis ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="picJenis">Pic Jenis : </label>
                      <input id="fotoJenis" name="fotoJenis" type="file" class="form-control" placeholder="Pic Jenis" required="" />
                    </div>
                    <div class="form-group">
                      <label for="name">Nama Jenis : </label>
                      <input value="<?php echo $con->namaJenis ?>" id="name" name="name" type="text" class="form-control" placeholder="Nama Jenis" required="" />
                    </div>
                    <div class="form-group">
                      <label for="category">Kategori : </label>
                      <input value="<?php echo $con->catJenis ?>" id="cat" name="cat" type="text" class="form-control" placeholder="Kategori" required="" />
                    </div>
                    <div class="form-group">
                      <label for="keterangan">Keterangan : </label>
                      <textarea name="keterangan" id="keterangan" class="form-control" placeholder="Keterangan" cols="30" rows="10"><?php echo $con->ketJenis ?></textarea>
                    </div>
                    <div class="form-group">
                      <button name="submit-edJe" id="submit-edJe" type="submit" class="btn btn-default submit">Submit</button>
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
