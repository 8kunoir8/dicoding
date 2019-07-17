
        <div class="container">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4>Input Data Kerusakan</h4>
                        </div>
                        <div class="panel-body">
                            <form action="<?php echo base_url('user/subConsul') ?>" class="form-horizontal" method="POST" id="kerusakan" enctype="multipart/form-data">
                                <i class="col-lg-1"></i>
                                <h4><b>INPUT KERUSAKAN</b></h4>
                                <div class="form-group">
                                    <label class="control-label col-lg-3">Photo Kerusakan</label>
                                    <div class="col-lg-8">
                                        <input type="file" class="form-control" name="fileKerusakan" required>
                                        <i color="gray">Dapat berupa file gif|jpg|png|jpeg|pdf</i>
                                    </div>
                                </div>
                                <div class="form-group">
                                <label class="control-label col-lg-3">Jenis Dinamo</label>
                                    <div class="col-lg-8">
                                        <select class="form-control required" name="jenis">
                                            <?php foreach($this->db->get('jenis')->result() as $a): ?>
                                            <option value="<?php echo $a->idJenis ?>"><?php echo $a->namaJenis ?></option>
                                             <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                <label class="control-label col-lg-3">Tingkat Kerusakan</label>
                                    <div class="col-lg-8">
                                        <select class="form-control required" name="rusak">
                                            <?php foreach($this->db->get('rusak')->result() as $a): ?>
                                            <option value="<?php echo $a->idRusak ?>"><?php echo $a->namaRusak ?></option>
                                             <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                 <div class="form-group">
                                        <label class="control-label col-lg-3">Keterangan</label>
                                        <div class="col-lg-8">
                                            <textarea type="text" class="form-control required" name="ket"></textarea>
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