
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
                        <td colspan='5' align="center"><a class="btn btn-success col-lg-12" href="#" class="btn btn-info btn-lg" data-toggle="modal" data-target="#new">New</a></td>
                      </tr>
                      <tr>
                        <th>No</th>
                        <th>Nama Jenis Part</th>
                        <th>Ket</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=1; foreach($content->result() as $con): ?>
                      <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $con->nm_catpart  ?></td>
                        <td><?php echo $con->ket_catpart ?></td>
                        <td align="center">
                          <a class="btn btn-warning col-lg-4" href="#" class="btn btn-warning btn-lg" data-toggle="modal" data-target="<?php echo '#edit'.$con->id_catpart ?>">Edit</a> 
                          <a class="btn btn-danger col-lg-4" href="<?php echo base_url('delCatPart').'/'.$con->id_catpart ?>">Delete</a>
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

          <div id="new" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">New Part</h4>
                </div>
                <div class="modal-body">
                  <form role="form" action="<?php echo base_url('newCatPart') ?>" method="post">
                    <div class="form-group">
                      <label for="name">Name : </label>
                      <input id="name" name="name" type="text" class="form-control" placeholder="Name" required="" />
                    </div>
                    <div class="form-group">
                      <label for="ket">Ket : </label>
                      <input id="ket" name="ket" type="text" class="form-control" placeholder="Keterangan" required="" />
                    </div>
                    <div class="form-group">
                      <button name="submit-newCtPart" id="submit-newPart" type="submit" class="btn btn-default submit">Submit</button>
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
          <div id="<?php echo 'edit'.$con->id_catpart ?>" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Edit Jenis Part</h4>
                </div>
                <div class="modal-body">
                  <form role="form" action="<?php echo base_url('edCatPart').'/'.$con->id_catpart ?>" method="post">
                    <div class="form-group">
                      <label for="name">Name : </label>
                      <input id="name" name="name" type="text" class="form-control" placeholder="Name" value="<?php echo $con->nm_catpart ?>" required="" />
                    </div>
                    <div class="form-group">
                      <label for="ket">Keterangan : </label>
                      <input id="ket" name="ket" type="text" class="form-control" placeholder="Keterangan" value="<?php echo $con->ket_catpart ?>" required="" />
                    </div>
                    <div class="form-group">
                      <button name="submit-edCatPart" id="submit-edPart" type="submit" class="btn btn-default submit">Submit</button>
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
