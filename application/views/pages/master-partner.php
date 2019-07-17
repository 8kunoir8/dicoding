
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
                        <th>Name</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=1; foreach($content->result() as $con): ?>
                      <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $con->name  ?></td>
                        <td><?php if($con->status == 1){ echo "Active";}else{echo "Not Active";} ?></td>
                        <td align="center">
                          <a class="btn btn-warning col-lg-4" href="#" class="btn btn-warning btn-lg" data-toggle="modal" data-target="<?php echo '#edit'.$con->id ?>">Edit</a> 
                          <a class="btn btn-danger col-lg-4" href="<?php echo base_url('delPartner').'/'.$con->id ?>">Delete</a>
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
                  <h4 class="modal-title">New Partner</h4>
                </div>
                <div class="modal-body">
                  <form role="form" action="<?php echo base_url('newPartner') ?>" method="post">
                    <div class="form-group">
                      <label for="name">name : </label>
                      <input id="name" name="name" type="text" class="form-control" placeholder="Partner Name" required="" />
                    </div>
                    <div class="form-group">
                      <label for="status">Status : </label>
                      <select id="status" name="status" class="form-control" placeholder="Status" required>
                          <option value="1">Active</option>
                          <option value="0">Not Active</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <button name="submit-newPart" id="submit-newPart" type="submit" class="btn btn-default submit">Submit</button>
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
                  <h4 class="modal-title">Edit Partner</h4>
                </div>
                <div class="modal-body">
                  <form role="form" action="<?php echo base_url('edPartner').'/'.$con->id ?>" method="post">
                    <div class="form-group">
                      <label for="name">Name : </label>
                      <input id="name" name="name" type="text" class="form-control" placeholder="Partner Name" required="" value="<?php echo $con->name ?>" />
                    </div>
                    <div class="form-group">
                      <label for="status">Status : </label>
                      <select id="status" name="status" class="form-control" placeholder="Status" required>
                          <option value="1" <?php if($con->status == 1){ echo "selected";} ?>>Active</option>
                          <option value="0" <?php if($con->status == 0){ echo "selected";} ?>>Not Active</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <button name="submit-edPart" id="submit-edPart" type="submit" class="btn btn-default submit">Submit</button>
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
