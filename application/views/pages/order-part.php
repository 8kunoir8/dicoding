
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
                        <th>No</th>
                        <th>Customer</th>
                        <th>Telp</th>
                        <th>ID Pesan</th>
                        <th>Jenis Part</th>
                        <th>Type Part</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Total</th>
                        <th>Pembayaran</th>
                        <th>Status</th>
                        <th>Tgl Pesan</th>
                        <th>Tgl Selesai</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=1; foreach($content->result() as $con): ?>
                      <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $this->db->get_where('user',array('idUser'=>$con->idUser))->row()->fullname ?></td>
                        <td><?php echo $this->db->get_where('user',array('idUser'=>$con->idUser))->row()->telp ?></td>
                        <td><?php echo $con->id_orderpart  ?></td>
                        <td><?php echo $this->db->get_where("category_part",array("id_catpart"=>$con->id_catpart))->row()->nm_catpart  ?></td>
                        <td><?php echo $this->db->get_where("type_part",array("id_type"=>$con->id_type))->row()->nm_type  ?></td>
                        <td><?php echo $con->harga_satuan  ?></td>
                        <td><?php echo $con->qty ?></td>
                        <td><?php echo $con->harga_total ?></td>
                        <td><?php echo $con->transaksi ?></td>
                        <td><?php echo $con->order_sta ?></td>
                        <td><?php echo $con->c_date ?></td>
                        <td><?php echo $con->end_date ?></td>
                        <td align="center">
                          <?php if($con->order_sta != 'Done'){ ?>
                          <a class="btn btn-primary col-lg-12" href="<?php echo base_url('orderDone').'/'.$con->id_orderpart ?>">Done</a>
                          <?php }else{ ?>
                          <a class="btn btn-success col-lg-12" href="#">Finished</a>
                          <?php } ?>
                        </td>
                      </tr>
                    <?php endforeach ?>
                    </tbody>
                  </table>
         </div>
       </div>
        <!-- footer content -->
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
