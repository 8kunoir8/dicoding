
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
                        <td colspan='7' align="center"><a class="btn btn-success col-lg-12" href="#" class="btn btn-info btn-lg" data-toggle="modal" data-target="#new">New</a></td>
                      </tr>
                      <tr>
                        <th>No</th>
                        <th>Nama Tipe Part</th>
                        <th>Jenis Part</th>
                        <th>Harga</th>
                        <th>Stock</th>
                        <th>Ket</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=1; foreach($content->result() as $con): ?>
                      <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $con->nm_type  ?></td>
                        <td><?php echo $this->db->get_where("category_part",array("id_catpart"=>$con->id_catpart))->row()->nm_catpart ?></td>
                        <td><?php echo $con->harga ?></td>
                        <td><?php echo $con->stock ?></td>
                        <td><?php echo $con->ket_type ?></td>
                        <td align="center">
                          <a class="btn btn-warning col-lg-4" href="#" class="btn btn-warning btn-lg" data-toggle="modal" data-target="<?php echo '#edit'.$con->id_type ?>">Edit</a> 
                          <a class="btn btn-danger col-lg-4" href="<?php echo base_url('delType').'/'.$con->id_type ?>">Delete</a>
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
                      <label for="catpart">Jenis Part : </label>
                      <select id="catpart" name="catpart" class="form-control" required>
                          <option value="">Choose..</option>
                          <?php foreach($this->db->get("category_part")->result() as $a): ?>
                          <option value="<?php echo $a->id_catpart ?>"><?php echo $a->nm_catpart ?></option>
                        <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="harga">Harga : </label>
                      <input id="harga" name="harga" type="number" class="form-control" placeholder="Harga" required="true" />
                    </div>
                    <div class="form-group">
                      <label for="stock">Stock : </label>
                      <input id="stock" name="stock" type="number" class="form-control" placeholder="Stock" required="true" />
                    </div>
                    <div class="form-group">
                      <label for="ket">Ket : </label>
                      <input id="ket" name="ket" type="text" class="form-control" placeholder="Keterangan" required="true" />
                    </div>
                    <div class="form-group">
                      <button name="submit-newType" id="submit-newPart" type="submit" class="btn btn-default submit">Submit</button>
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
          <div id="<?php echo 'edit'.$con->id_type ?>" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Edit Type Part</h4>
                </div>
                <div class="modal-body">
                  <form role="form" action="<?php echo base_url('edType').'/'.$con->id_type ?>" method="post">
                    <div class="form-group">
                      <label for="name">Name : </label>
                      <input id="name" name="name" type="text" class="form-control" placeholder="Name" value="<?php echo $con->nm_type ?>" required="" />
                    </div>
                    <div class="form-group">
                      <label for="catpart">Jenis Part : </label>
                      <select id="catpart" name="catpart" class="form-control" required>
                          <option value="">Choose..</option>
                          <?php foreach($this->db->get("category_part")->result() as $a): ?>
                          <option value="<?php echo $a->id_catpart ?>" <?php if($a->id_catpart == $con->id_catpart){echo "selected";} ?>><?php echo $a->nm_catpart ?></option>
                        <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="harga">Harga : </label>
                      <input id="harga" name="harga" type="number" class="form-control" placeholder="Harga" value="<?php echo $con->harga ?>" required="true" />
                    </div>
                    <div class="form-group">
                      <label for="stock">Stock : </label>
                      <input id="stock" name="stock" type="number" class="form-control" placeholder="Stock" value="<?php echo $con->stock ?>" required="true" />
                    </div>
                    <div class="form-group">
                      <label for="ket">Ket : </label>
                      <input id="ket" name="ket" type="text" class="form-control" placeholder="Keterangan" value="<?php echo $con->ket_type ?>" required="true" />
                    </div>
                    <div class="form-group">
                      <button name="submit-edType" id="submit-edPart" type="submit" class="btn btn-default submit">Submit</button>
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
