        <div class="container">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4>Pengajuan Perbaikan</h4>
                        </div>
                        <div class="panel-body">
                            <form action="<?php echo base_url('user/subPerbaikan') ?>" class="form-horizontal" method="POST" id="pendaftaran3">
                                <i class="col-lg-1"></i>
                                <h4><b>PENGAJUAN PERBAIKAN</b></h4>
                                <hr>
                                <div class="form-group">
                                <label class="control-label col-lg-3">Estimasi Kerusakan</label>
                                    <div class="col-lg-8">
                                        <select class="form-control required" name="konsul">
                                            <?php foreach($this->db->get_where('consul',array('idUser'=>$this->session->userdata('idUser')))->result() as $a): ?>
                                            <option value="<?php echo $a->idConsul ?>"><?php echo $this->db->get_where('jenis',array('idJenis'=>$a->idJenis))->row()->namaJenis ?> - <?php echo $this->db->get_where('rusak',array('idRusak'=>$a->idRusak))->row()->namaRusak ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                <label class="control-label col-lg-3">Pelayanan</label>
                                    <div class="col-lg-8">
                                        <select class="form-control required" name="pelayanan">
                                            <option value="On The Spot">On The Spot</option>
                                            <option value="Jemput Kerumah">Jemput Kerumah</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-3">Lama Pengerjaan </label>
                                    <div class="col-lg-8">
                                        <select class="form-control required" name="pengerjaan">
                                            <option value="Express">Express</option>
                                            <option value="Regular">Regular</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-3">Alamat </label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control required" name="alamat">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-3">Keterangan</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" name="ket">
                                    </div>
                                </div>
                                <hr>
                                <div class="col-lg-12 pull-right">
                                    <input type="submit" name="submit" class="btn btn-primary pull-right col-lg-2" value="Ajukan">
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