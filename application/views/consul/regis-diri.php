<div class="container">
            <div class="row">
            <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4>Registrasi Pemohon Baru</h4>
                        </div>
                        <div class="panel-body">
                        <form method="POST" enctype="multipart/form-data" class="form-horizontal" id="pendaftaran">
                            <h4><b>B. DATA DIRI PENDAFTAR</b></h4>
                            <div class="form-group">
                                <label class="control-label col-lg-3">Jenis Kelamin</label>
                                <div class="col-lg-8">
                                    <select class="form-control required" name="jeKel">
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3">Tempat, Tanggal Lahir</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control required" name="tempatLahirPdft">
                                </div>
                                <div class="col-lg-4">
                                    <input type="text" class="tanggal form-control required" name="tglLahirPdft">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-lg-3">Agama</label>
                                <div class="col-lg-8">
                                    <select class="form-control required" name="agama">
                                        <option value="Budha">Budha</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3">Pekerjaan</label>
                                <div class="col-lg-8">
                                    <select class="form-control required" name="pekerjaan">
                                        <option value="PNS">PNS</option>
                                        <option value="BUMN">BUMN</option>
                                        <option value="WIRASWASTA">WIRASWASTA</option>
                                        <option value="SWASTA">SWASTA</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3">Jumlah Tanggungan</label>
                                <div class="col-lg-8">
                                    <select class="form-control required" name="tanggungan">
                                        <option value="2 - 4">2 - 4</option>
                                        <option value="5 - 6">5 - 6</option>
                                        <option value="7 - 9">7 - 9</option>
                                        <option value="> 10">> 10</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3">Status Rumah</label>
                                <div class="col-lg-8">
                                    <select class="form-control required" name="statusRumah">
                                        <option value="Milik Sendiri">Milik Sendiri</option>
                                        <option value="Tinggal Dengan Orang Tua">Tinggal Dengan Orang Tua</option>
                                        <option value="KPR">KPR</option>
                                        <option value="Kontrak">Kontrak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                    <label class="control-label col-lg-3">Alamat Pendaftar</label>
                                    <div class="col-lg-8">
                                        <textarea type="text" class="form-control required" name="alamatPdft"></textarea>
                                    </div>
                            </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-3">Penghasilan per Bulan</label>
                                    <div class="col-lg-8">
                                        <div class="radio">
                                            <label><input type="radio" name="penghasilan" value="< Rp. 2.000.000">< Rp. 2.000.000</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="penghasilan" value="Rp. 2.500.000 - Rp. 5.000.000">Rp. 2.500.000 s/d Rp. 5.000.000</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="penghasilan" value="Rp. 6.000.000 - Rp. 10.000.000">Rp. 6.000.000 s/d Rp. 10.000.000</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="penghasilan" value="> Rp. 10.000.000">> Rp. 10.000.000</label>
                                        </div>
                                    </div>
                                </div>
                            <hr>
                            <div class="col-lg-12 pull-right">
                                <input type="submit" name="next2" class="btn btn-primary pull-right col-lg-2" value="Next">
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