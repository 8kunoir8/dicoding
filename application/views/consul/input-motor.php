
        <div class="container">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4>Input Data Kendaraan</h4>
                        </div>
                        <div class="panel-body">
                            <form action="<?php echo base_url('user/subMotor') ?>" class="form-horizontal" method="POST" id="kendaraan" enctype="multipart/form-data">
                                <i class="col-lg-1"></i>
                                <h4><b>INPUT KENDARAAN</b></h4>
                                <!-- <div class="form-group">
                                    <label class="control-label col-lg-3">Photo Kerusakan</label>
                                    <div class="col-lg-8">
                                        <input type="file" class="form-control" name="fileKerusakan" required>
                                        <i color="gray">Dapat berupa file gif|jpg|png|jpeg|pdf</i>
                                    </div>
                                </div> -->
                                <div class="form-group">
                                <label class="control-label col-lg-3">Merk Motor</label>
                                    <div class="col-lg-8">
                                        <select class="form-control required" name="brand">
                                            <?php foreach($this->db->get('brand')->result() as $a): ?>
                                            <option value="<?php echo $a->idBrand ?>"><?php echo $a->namaBrand ?></option>
                                             <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                <label class="control-label col-lg-3">Tipe Motor</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control required" name="motor">
                                    </div>
                                </div>
                                <div class="form-group">
                                <label class="control-label col-lg-3">Jenis</label>
                                    <div class="col-lg-8">
                                        <select class="form-control required" name="jenis">
                                            <option value="Motor Bebek">Motor Bebek</option>
                                            <option value="Motor Matic">Motor Matic</option>
                                            <option value="Motor Sport">Motor Sport</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                <label class="control-label col-lg-3">No Polisi</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control required" name="nopol">
                                    </div>
                                </div>
                                <div class="form-group">
                                <label class="control-label col-lg-3">No STNK</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control required" name="nostnk">
                                    </div>
                                </div>
                                <div class="form-group">
                                <label class="control-label col-lg-3">Warna</label>
                                    <div class="col-lg-8">
                                        <!-- <input type="text" class="form-control required" name="warna"> -->
                                        <select class="form-control required" name="warna">
                                            <option value="Merah">Merah</option>
                                            <option value="Putih">Putih</option>
                                            <option value="Hitam">Hitam</option>
                                            <option value="Biru">Biru</option>
                                            <option value="Kuning">Kuning</option>
                                            <option value="Hijau">Hijau</option>
                                            <option value="Oranye">Oranye</option>
                                            <option value="Krem">Krem</option>
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