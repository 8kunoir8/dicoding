
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
                        <td colspan='6' align="center"><a class="btn btn-success col-lg-12" href="#" class="btn btn-info btn-lg" data-toggle="modal" data-target="#newOli">New</a></td>
                      </tr>
                      <tr>
                        <th>No</th>
                        <th>Table No</th>
                        <th>Attendant</th>
                        <th>Counter Status</th>
                        <th>Counter Type</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=1; foreach($content->result() as $con): ?>
                      <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $con->counter_number ?></td>
                        <td><?php echo $con->attendant ?></td>
                        <td><?php echo $con->counter_status ?></td>
                        <td><?php echo $con->counter_type ?></td>
                        <td align="center">
                          <a class="btn btn-warning col-lg-4" href="#" class="btn btn-warning btn-lg" data-toggle="modal" data-target="<?php echo '#edit'.$con->id ?>">Edit</a> 
                          <a class="btn btn-danger col-lg-4" href="<?php echo base_url('deleteTable').'/'.$con->id ?>">Delete</a>
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

          <div id="newOli" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">New Table</h4>
                </div>
                <div class="modal-body">
                  <form role="form" action="<?php echo base_url('newTable') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="counter_number">Table Number : </label>
                      <input id="counter_number" name="counter_number" type="number" class="form-control" placeholder="Table Number" required="" />
                    </div>
                    <div class="form-group">
                      <label for="attendant">Attendant : </label>
                      <input id="attendant" name="attendant" type="text" class="form-control" placeholder="Attendant" required="" />
                    </div>
                    <div class="form-group">
                      <label for="counter_status">Status : </label>
                      <select id="counter_status" name="counter_status" class="form-control" placeholder="Status" required>
                          <option value="1">Occupied</option>
                          <option value="0">Empty</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="counter_type">Type : </label>
                        <select id="counter_type" name="counter_type" class="form-control" placeholder="Type" required>
                            <option value="Skin Consultation">Skin Consultation</option>
                            <option value="Product Purchase">Product Purchase</option>
                          </select>
                    </div>
                    <div class="form-group">
                      <button name="submit-newOli" id="submit-newOli" type="submit" class="btn btn-default submit">Submit</button>
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
          <div id="<?php echo 'edit'.$con->id ?>" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Edit Table</h4>
                </div>
                <div class="modal-body">
                  <form role="form" action="<?php echo base_url('home/editTable').'/'.$con->id ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="counter_number">Table Number : </label>
                      <input id="counter_number" name="counter_number" type="number" class="form-control" placeholder="Table Number" value="<?php echo $con->counter_number ?>" required="" />
                    </div>
                    <div class="form-group">
                      <label for="attendant">Attendant : </label>
                      <input id="attendant" name="attendant" type="text" class="form-control" placeholder="Attendant" value="<?php echo $con->attendant ?>" required="" />
                    </div>
                    <div class="form-group">
                      <label for="counter_status">Status : </label>
                      <select id="counter_status" name="counter_status" class="form-control" placeholder="Status" required>
                          <option value="1" <?php if($con->counter_status == 1){ echo "selected";} ?>>Occupied</option>
                          <option value="0" <?php if($con->counter_status == 0){ echo "selected";} ?>>Empty</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="counter_type">Type : </label>
                        <select id="counter_type" name="counter_type" class="form-control" placeholder="Type" required>
                            <option value="Skin Consultation" <?php if($con->counter_type == "Skin Consultation"){ echo "selected";} ?>>Skin Consultation</option>
                            <option value="Product Purchase" <?php if($con->counter_type == "Product Purchase"){ echo "selected";} ?>>Product Purchase</option>
                          </select>
                    </div>
                    <div class="form-group">
                      <button name="submit-editOli" id="submit-editOli" type="submit" class="btn btn-default submit">Submit</button>
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
