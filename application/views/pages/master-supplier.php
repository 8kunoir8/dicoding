
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
                        <td colspan='4' align="center"><a class="btn btn-success col-lg-12" href="#" class="btn btn-info btn-lg" data-toggle="modal" data-target="#newSupplier">New</a></td>
                      </tr>
                      <tr>
                        <th>No</th>
                        <th>Nama Supplier</th>
                        <th>Alamat Supplier</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=1; foreach($content->result() as $con): ?>
                      <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $con->namaSupplier  ?></td>
                        <td><?php echo $con->alamatSupplier ?></td>
                        <td align="center">
                          <a class="btn btn-warning col-lg-4" href="#" class="btn btn-warning btn-lg" data-toggle="modal" data-target="<?php echo '#edit'.$con->idSupplier ?>">Edit</a> 
                          <a class="btn btn-danger col-lg-4" href="<?php echo base_url('delSupp').'/'.$con->idSupplier ?>">Delete</a>
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

          <div id="newSupplier" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">New Supplier</h4>
                </div>
                <div class="modal-body">
                  <form role="form" action="<?php echo base_url('newSupp') ?>" method="post">
                    <div class="form-group">
                      <label for="name">Supplier Name : </label>
                      <input id="name" name="name" type="text" class="form-control" placeholder="Supplier Name" required="" />
                    </div>
                    <div class="form-group">
                      <label for="address">Supplier Address : </label>
                      <input id="address" name="address" type="text" class="form-control" placeholder="Supplier Address" required="" />
                    </div>
                    <div class="form-group">
                      <button name="submit-newSup" id="submit-newSup" type="submit" class="btn btn-default submit">Submit</button>
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
          <div id="<?php echo 'edit'.$con->idSupplier ?>" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Edit Supplier</h4>
                </div>
                <div class="modal-body">
                  <form role="form" action="<?php echo base_url('edSupp').'/'.$con->idSupplier ?>" method="post">
                    <div class="form-group">
                      <label for="name">Supplier Name : </label>
                      <input id="name" name="name" type="text" class="form-control" placeholder="Supplier Name" required="" value="<?php echo $con->namaSupplier ?>" />
                    </div>
                    <div class="form-group">
                      <label for="address">Supplier Address : </label>
                      <input id="address" name="address" type="text" class="form-control" placeholder="Supplier Address" required="" value="<?php echo $con->alamatSupplier ?>" />
                    </div>
                    <div class="form-group">
                      <button name="submit-edSup" id="submit-edSup" type="submit" class="btn btn-default submit">Submit</button>
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
