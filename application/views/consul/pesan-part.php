
        <div class="container">

            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4>Pesan Spare Part / Barang</h4>
                        </div>
                        <div class="panel-body">
                            <form action="<?php echo base_url('user/subPesan') ?>" class="form-horizontal" method="POST" id="pesan" enctype="multipart/form-data">
                                <i class="col-lg-1"></i>
                                <br>
                                <div class="form-group">
                                <label class="control-label col-lg-3">Jenis Spare Part</label>
                                    <div class="col-lg-8">
                                        <select class="form-control required select-single" name="jenis_part" id="jenis_part">
                                            <option value=""> ... </option>
                                            <?php foreach($this->db->get('category_part')->result() as $a): ?>
                                            <option value="<?php echo $a->id_catpart ?>"><?php echo $a->nm_catpart ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                 <div class="form-group">
                                        <label class="control-label col-lg-3">Type Spare Part</label>
                                        <div class="col-lg-8">
                                            <select class="form-control required select-single" name="type_part" id="type_part">
                                                <option value=""> ... </option>
                                                <?php foreach($this->db->get('type_part')->result() as $a): ?>
                                                <option value="<?php echo $a->id_type ?>"><?php echo $a->nm_type ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="control-label col-lg-3">Jumlah Pesanan</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" name="jumlah_pesanan">
                                        </div>
                                </div>
                                <div class="form-group">
                                <label class="control-label col-lg-3">Pilih Transaksi</label>
                                    <div class="col-lg-8">
                                        <select class="form-control required" name="transaksi">
                                            <option value=""> ... </option>
                                            <option value="Transfer">Transfer</option>
                                            <option value="Transfer">Cash</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 pull-right">
                                <input type="submit" name="submit" class="btn btn-primary pull-right col-lg-2" value="Submit">
                            </div>
                            </form>
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