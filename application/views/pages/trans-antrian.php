
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
                        <th>Pelanggan</th>
                        <th>Motor</th>
                        <th>Jasa</th>
                        <th>Tgl</th>
                        <th>Sesi</th>
                        <th>Antrian</th>
                        <!-- <th>Detail</th> -->
                        <th>Konfirmasi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=1; foreach($content->result() as $con): ?>
                      <tr>
                        <td align="center"><?php echo $i++ ?></td>
                        <td align="center"><?php echo $this->db->get_where('user',array("idUser"=>$con->idUser))->row()->fullname ?></td>
                        <td align="center"><?php echo $this->db->get_where('data_motor',array('id_motor'=>$con->id_motor))->row()->nm_motor ?></td>
                        <td align="center"><?php echo $this->db->get_where('category',array('idCategory'=>$con->idCategory))->row()->namaCategory ?></td>
                        <td align="center"><?php echo $con->ant_date  ?></td>
                        <td align="center"><?php echo $con->ant_sesi ?></td>
                        <td align="center"><?php echo $con->ant_no ?></td>
                        <!-- <td align="center"> -->
                          <!-- <a class="btn btn-default col-lg-12" href="<?php //echo '#detail'.$con->id_antrian ?>">Detail</a> -->
                          <!-- <a class="btn btn-default col-lg-12" href="#" data-toggle="modal" data-target="<?php //echo '#detail'.$con->id_antrian ?>">Detail</a> -->
                        <!-- </td> -->
                        <td>
                          <?php if($con->status == 0){ ?>
                          <!-- <a class="btn btn-primary col-lg-12" href="<?php //echo base_url('Home/confirmAntrian').'/'.$con->id_antrian ?>">Konfirmasi</a> -->
                          <!-- <a class="btn btn-primary col-lg-12" href="<?php //echo '#edit'.$con->id_antrian ?>">Konfirmasi</a> -->
                          <a class="btn btn-success col-lg-12" href="#" data-toggle="modal" data-target="<?php echo '#edit'.$con->id_antrian ?>">Konfirmasi</a>
                          <?php }elseif($con->status == 1){ ?>
                          <a class="btn btn-warning col-lg-12" href="#" data-toggle="modal" data-target="<?php echo '#laporan'.$con->id_antrian ?>">Laporan</a>
                        <?php }else{ echo "Laporan Sudah Dibuat"; } ?>
                        </td>
                      </tr>
                    <?php endforeach ?>
                    </tbody>
                  </table>
         </div>
       </div>
        <!-- footer content -->

        <!--modals-->
        
          <!-- Edit -->
          <?php foreach($content->result() as $con): ?>
          <div id="<?php echo 'edit'.$con->id_antrian ?>" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Konfirmasi</h4>
                </div>
                <div class="modal-body">
                  <form role="form" action="<?php echo base_url('Home/confirmAntrian').'/'.$con->id_antrian ?>" method="post">
                    <div class="row">
                      <label for="Detail">Detil Pesanan : </label>
                      <div class="col-lg-12">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label for="mekanik">Mekanik : </label>
                            <input id="mekanik" name="mekanik" type="text" class="form-control" placeholder="Mekanik" value="<?php echo $this->db->get_where("mekanik",array("id_mekanik"=>$con->id_mekanik))->row()->nama ?>" readonly />
                          </div>
                          <div class="form-group">
                            <label for="oli_flag">Oli Dari : </label>
                            <input id="oli_flag" name="oli_flag" type="text" class="form-control" placeholder="Barang Tersedia" value="<?php echo $con->oli_flag ?>" readonly />
                            <?php if($con->oli_flag != "Tidak Ganti"){ ?>
                            <input id="oli" name="oli" type="text" class="form-control" placeholder="Oli" value="<?php echo $this->db->get_where("oli",array("id_oli"=>$con->oli))->row()->nama ?>" readonly />
                            <?php } ?>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label for="sparepart_flag">Sparepart Dari : </label>
                            <input id="sparepart_flag" name="sparepart_flag" type="text" class="form-control" placeholder="Barang Tersedia" value="<?php echo $con->sparepart_flag ?>" readonly />
                            <textarea name="Sparepart" id="Sparepart" cols="5" rows="10" class="form-control" readonly><?php echo $con->sparepart ?></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label for="">Respon Pesanan : </label>
                      <div class="col-lg-12">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label for="sparepart_ready">Barang Tersedia : </label><br>
                            <input id="sparepart_ready1" name="sparepart_ready" type="radio" placeholder="Barang Tersedia" value="0" /> Tidak Tersedia 
                            <input id="sparepart_ready2" name="sparepart_ready" type="radio" placeholder="Barang Tersedia" value="1" /> Tersedia
                          </div>
                          <div class="form-group">
                            <label for="harga_jasa">Harga Jasa : </label>
                            <input id="harga_jasa" name="harga_jasa" type="number" class="form-control" placeholder="Harga Jasa" value="<?php echo $this->db->get_where('category',array("idCategory"=>$con->idCategory))->row()->price ?>" />
                          </div>
                          <?php if($con->sparepart_flag != "Tidak Ganti"){ ?>
                          <div class="form-group">
                            <label for="harga_sparepart">Harga Sparepart : </label>
                            <input id="harga_sparepart" name="harga_sparepart" type="number" class="form-control" placeholder="Harga Sparepart" />
                          </div>
                          <?php } ?>
                          <?php if($con->oli_flag != "Tidak Ganti"){ ?>
                          <div class="form-group">
                            <label for="harga_oli">Harga Oli : </label>
                            <input id="harga_oli" name="harga_oli" type="number" class="form-control" placeholder="Harga oli" value="<?php if($con->oli_flag == 'Dari Bengkel'){ echo $this->db->get_where('oli',array('id_oli'=>$con->oli))->row()->harga; } ?>" />
                          </div>
                          <?php } ?>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                          <label for="respon_antrian">Respon : </label>
                          <textarea name="respon_antrian" id="respon_antrian" cols="50" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group" align="right">
                          <button name="submit" id="submit" type="submit" class="btn btn-default submit">Submit</button>
                        </div>
                        </div>
                      </div>
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

        <!-- Detail -->

        <?php foreach($content->result() as $con): ?>
          <div id="<?php echo 'detail'.$con->id_antrian ?>" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Detail</h4>
                </div>
                <div class="modal-body">
                    
                    
                    

                 
                </div>
                
              </div>

            </div>
          </div>
        <?php endforeach ?>

        <!-- Laporan -->

        <?php foreach($content->result() as $con): ?>
          <div id="<?php echo 'laporan'.$con->id_antrian ?>" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Laporan : <?php echo DATE("Y-m-d") ?></h4>
                </div>
                <div class="modal-body">
                  <form role="form" action="<?php echo base_url('Home/laporAntrian').'/'.$con->id_antrian ?>" method="post">
                    <input type="hidden" name="id_antrian" id="id_antrian" value="<?php echo $con->id_antrian ?>">
                    <div class="form-group">
                      <label for="mekanik">Mekanik : </label>
                      <input id="mekanik" name="mekanik" type="text" class="form-control" placeholder="Mekanik" value="<?php echo $this->db->get_where("mekanik",array("id_mekanik"=>$con->id_mekanik))->row()->nama ?>" readonly />
                      <input type="hidden" name="id_mekanik" id="id_mekanik" value="<?php echo $con->id_mekanik ?>">
                    </div>
                    <div class="form-group">
                      <label for="pelanggan">Pelanggan : </label>
                      <input id="pelanggan" name="pelanggan" type="text" class="form-control" placeholder="Pelanggan" value="<?php echo $this->db->get_where("user",array("idUser"=>$con->idUser))->row()->fullname ?>" readonly />
                    </div>
                    <div class="form-group">
                      <label for="motor">Motor : </label>
                      <input id="motor" name="motor" type="text" class="form-control" placeholder="Motor" value="<?php echo $this->db->get_where("data_motor",array("id_motor"=>$con->id_motor))->row()->nm_motor." - ".$con->km_motor." KM" ?>" readonly />
                    </div>
                    <div class="form-group">
                      <label for="laporan">Laporan : </label>
                      <textarea name="laporan" id="laporan" cols="7" rows="10" class="form-control" placeholder="Tuliskan Laporan Pada Bagian Ini."></textarea>
                    </div>
                    <div class="form-group" align="right">
                      <button name="submit" id="submit" type="submit" class="btn btn-default submit">Submit</button>
                    </div>
                  </form>
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
