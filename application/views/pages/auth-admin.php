
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
                        <td colspan='8' align="center"><a class="btn btn-success col-lg-12" href="#" class="btn btn-info btn-lg" data-toggle="modal" data-target="#newAdmin">New</a></td>
                      </tr>
                      <tr>
                        <th>No</th>
                        <th>Fullname</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=1; foreach($content->result() as $con): ?>
                      <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $con->fullname ?></td>
                        <td><?php echo $con->username ?></td>
                        <td><?php echo $con->password ?></td>
                        <td><?php echo $con->status ?></td>
                        <td align="center">
                          <a class="btn btn-warning col-lg-4" href="#" class="btn btn-warning btn-lg" data-toggle="modal" data-target="<?php echo '#edit'.$con->id ?>">Edit</a> 
                          <a class="btn btn-danger col-lg-4" href="<?php echo base_url('delAd').'/'.$con->id ?>">Delete</a>
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

          <div id="newAdmin" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">New Admin</h4>
                </div>
                <div class="modal-body">
                  <form role="form" action="<?php echo base_url('newAd') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="fullname">Full Name : </label>
                      <input id="fullname" name="fullname" type="text" class="form-control" placeholder="Full Name" required="" />
                    </div>
                    <div class="form-group">
                      <label for="username">Username : </label>
                      <input id="username" name="username" type="text" class="form-control" placeholder="Username" required="" />
                    </div>
                    <div class="form-group">
                      <label for="password">Password : </label>
                      <input id="password" name="password" type="password" class="form-control" placeholder="Password" required="" />
                    </div>
                    <div class="form-group">
                      <label for="status">Status : </label>
                      <select id="status" name="status" class="form-control" required>
                          <option value="">Choose..</option>
                          <option value="High">High</option>
                          <option value="Mid">Mid</option>
                          <option value="Low">Low</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <button name="submit-newAd" id="submit-newAd" type="submit" class="btn btn-default submit">Submit</button>
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
                  <h4 class="modal-title">Edit Admin</h4>
                </div>
                <div class="modal-body">
                  <form role="form" action="<?php echo base_url('edAd').'/'.$con->idAdmin ?>" method="post">
                    <div class="form-group">
                      <label for="fullname">Full Name : </label>
                      <input id="fullname" name="fullname" type="text" class="form-control" placeholder="Full Name" required="" />
                    </div>
                    <div class="form-group">
                      <label for="username">Username : </label>
                      <input id="username" name="username" type="text" class="form-control" placeholder="Username" required="" />
                    </div>
                    <div class="form-group">
                      <label for="password">Password : </label>
                      <input id="password" name="password" type="password" class="form-control" placeholder="Password" required="" />
                    </div>
                    <div class="form-group">
                      <label for="status">Status : </label>
                      <select id="status" name="status" class="form-control" required>
                          <option value="">Choose..</option>
                          <option value="High">High</option>
                          <option value="Mid">Mid</option>
                          <option value="Low">Low</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <button name="submit-edAd" id="submit-edAd" type="submit" class="btn btn-default submit">Submit</button>
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
