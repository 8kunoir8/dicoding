
        <div class="container">

            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4>Konfirmasi Pesanan</h4>
                        </div>
                        <div class="panel-body">
                                <?php foreach($order as $val): ?>
                            <form action="<?php echo base_url('user/confPesan') ?>" class="form-horizontal" method="POST" id="pesan" enctype="multipart/form-data">
                                <i class="col-lg-1"></i>
                                <br>
                                <div class="form-group">
                                <label class="control-label col-lg-3">Jenis Spare Part</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" name="jenis_part" value="<?php echo $this->db->get_where("category_part",array("id_catpart"=>$val->id_catpart))->row()->nm_catpart ?>" readonly>
                                    </div>
                                </div>
                                 <div class="form-group">
                                        <label class="control-label col-lg-3">Type Spare Part</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" name="type_part" value="<?php echo $this->db->get_where("type_part",array("id_type"=>$val->id_type))->row()->nm_type ?>" readonly>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="control-label col-lg-3">Harga Spare Part</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" name="harga_part" value="<?php echo $val->harga_satuan ?>" readonly>
                                        </div>
                                </div>
                                
                                <div class="form-group">
                                        <label class="control-label col-lg-3">Jumlah Pesanan</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" name="jumlah_pesanan" value="<?php echo $val->qty ?>" readonly>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="control-label col-lg-3">Total Harga</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" name="total_harga" value="<?php echo $val->harga_total ?>" readonly>
                                        </div>
                                </div>
                                
                                <div class="form-group">
                                <label class="control-label col-lg-3">Transaksi</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" name="transaksi" value="<?php echo $val->transaksi ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-12 pull-right">
                                <input type="submit" name="submit" class="btn btn-primary pull-right col-lg-2" value="Submit">
                            </div>
                            </form>
                            <?php endforeach ?>
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