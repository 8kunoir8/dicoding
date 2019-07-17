
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
                        <td colspan='5' align="center"><a class="btn btn-success col-lg-12" href="#" class="btn btn-info btn-lg" data-toggle="modal" data-target="#newBrand">New</a></td>
                      </tr>
                      <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Count</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=1; foreach($content->result() as $con): ?>
                      <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $con->name ?></td>
                        <td><?php echo number_format($this->db->query("select count(id) as jum from queue where member_id in (select member_id from survey where `from` = '".$con->name."')")->row()->jum) ?></td>
                        <td align="center">
                          <a class="btn btn-warning col-lg-4" href="#" class="btn btn-warning btn-lg" data-toggle="modal" data-target="<?php echo '#edit'.$con->id ?>">Edit</a> 
                          <a class="btn btn-danger col-lg-4" href="<?php echo base_url('delMale').'/'.$con->id ?>">Delete</a>
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

          <div id="newBrand" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">New Male Usher</h4>
                </div>
                <div class="modal-body">
                  <form role="form" action="<?php echo base_url('newMale') ?>" method="post">
                    <!-- <div class="form-group">
                      <label for="pic">Picture : </label>
                      <input type="file" id="pic" name="pic" class="form-control" placeholder="Select Picture" required=""> 
                    </div> -->
                    <div class="form-group">
                      <label for="name">Name : </label>
                      <input id="name" name="name" type="text" class="form-control" placeholder="Name" required="" />
                    </div>
                    <div class="form-group">
                      <label for="count">Count : </label>
                      <input id="count" name="count" type="number" class="form-control" placeholder="Count" required="" />
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
          </div>

          <!-- Edit -->
          <?php foreach($content->result() as $con): ?>
          <div id="<?php echo 'edit'.$con->id ?>" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Edit Male Usher</h4>
                </div>
                <div class="modal-body">
                  <form role="form" action="<?php echo base_url('edMale').'/'.$con->id ?>" method="post">
                    <!-- <div class="form-group">
                      <label for="pic">Picture : </label>
                      <input type="file" id="pic" name="pic" class="form-control" placeholder="Select Picture" required=""> 
                    </div> -->
                    <div class="form-group">
                      <label for="name">Name : </label>
                      <input id="name" name="name" type="text" class="form-control" placeholder="Name" value="<?php echo $con->name ?>" required="" />
                    </div>
                    <div class="form-group">
                      <label for="count">Count : </label>
                      <!-- <label for="count"><?php //echo $this->db->query("select count(id) as jum from queue where member_id in (select member_id from survey where source = 'Male User' and from = '".$con->name."')")->row()->jum ?></label> -->
                      <input id="count" name="count" type="number" class="form-control" placeholder="Count" value="<?php echo $this->db->query("select count(id) as jum from queue where member_id in (select member_id from survey where `from` = '".$con->name."')")->row()->jum ?>" readonly>
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
