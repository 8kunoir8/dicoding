        <div class="container">
            <div class="row">
            <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4><?php echo $title ?></h4>
                        </div>
                        <div class="panel-body">
                            <table id="datatable" class="table table-striped table-bordered">
                                <tr>
                                    <th>ID</th>
                                    <th>Motor</th>
                                    <th>Jasa</th>
                                    <th>Tgl</th>
                                    <th>Sesi</th>
                                    <th>Antrian</th>
                                </tr>
                                <?php foreach($content->result() as $a): ?>
                                <tr>
                                    <td><?php echo $a->id_antrian ?></td>
                                    <td><?php echo $this->db->get_where('data_motor',array('id_motor'=>$a->id_motor))->row()->nm_motor ?></td>
                                    <td><?php echo $this->db->get_where('category',array('idCategory'=>$a->idCategory))->row()->namaCategory ?></td>
                                    <td><?php echo date('d/m/y',strtotime($a->est_date)) ?></td>
                                    <td><?php echo $a->est_sesi ?></td>
                                    <td>Est No : <?php echo $a->ant_no ?></td>
                                    <!-- <td><a class="btn btn-primary col-lg-12" href="<?php //echo base_url('User/confirm').'/'.$a->id_antrian ?>">Confirm</a></td> -->
                                </tr>
                                <?php if($a->status==NULL||$a->status==0){ ?>
                                <tr style="background-color: red">
                                    <td colspan="3">Belum Direspon</td>
                                    <td>
                                        <a class="btn btn-warning col-lg-12" href="<?php echo base_url('batal').'/'.$a->id_antrian ?>">Batalkan</a>
                                    </td>
                                </tr>
                                <tr style="background-color: gray"><td colspan="6"></td></tr>
                                <?php }else{ ?>
                                <tr style="background-color: <?php if($a->sparepart_ready == 1){ ?>lightgreen <?php }else{ ?> yellow <?php } ?>">
                                    <td colspan="3"><?php echo $a->respon_antrian ?> </td>
                                    <td><?php echo date('d/m/y',strtotime($a->ant_date)) ?></td>
                                    <td><?php echo $a->ant_sesi ?></td>
                                    <td>No : <?php echo $a->ant_no ?></td>
                                </tr>
                                <tr>
                                    <td>Harga Jasa : Rp. <?php echo number_format($a->harga_jasa) ?></td>
                                    <td>Harga Sparepart : Rp. <?php echo number_format($a->harga_sparepart) ?></td>
                                    <td>Harga Oli : Rp. <?php echo number_format($a->harga_oli) ?></td>
                                    <td colspan="3">Total Biaya : Rp. <?php echo number_format($a->harga_jasa + $a->harga_sparepart + $a->harga_oli) ?></td>
                                </tr>
                                <tr style="background-color: red">
                                    <td colspan="3">Batalkan antrian yang sudah di konfirmasi : </td>
                                    <td>
                                        <a class="btn btn-warning col-lg-12" href="<?php echo base_url('batal').'/'.$a->id_antrian ?>">Batalkan</a>
                                    </td>
                                </tr>
                                <tr style="background-color: gray"><td colspan="6"></td></tr>
                                <?php } ?>
                                <?php endforeach ?>
                                
                            </table>
                            Ket : 
                            - <span style="background-color: red">Merah</span> : Belum Direspon 
                            - <span style="background-color: yellow">Kuning</span> : Barang tidak tersedia 
                            - <span style="background-color: lightgreen">Hijau</span> : Barang tersedia
                        </div>
                    </div>
                  </div>
              </div>
            </div>
    </body>
    
    <style>
        .error{
            color:red;
        }
    </style>
</html>