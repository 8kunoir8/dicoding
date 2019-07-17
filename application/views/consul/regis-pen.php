                            
        <div class="container">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4>Registrasi Pemohon Baru</h4>
                        </div>
                        <div class="panel-body">
                            <form action="#" class="form-horizontal" method="POST" id="pendaftaran4">
                                <i class="col-lg-1"></i>
                                <h4><b>C. DATA PENDAMPING</b></h4><hr>
                                
                                <div class="col-lg-4"></div>
                                <br>

                                <div class="form-group">
                                    <label class="control-label col-lg-3">Nama Lengkap</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control required" name="nama">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-3">Tempat, Tanggal Lahir</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" name="tempatLahir">
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" class="tanggal form-control" name="tglLahir">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-3">Agama</label>
                                    <div class="col-lg-8">
                                        <select class="form-control" name="agama">
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
                                    <label class="control-label col-lg-3">Penghasilan per Bulan</label>
                                    <div class="col-lg-8">
                                        <div class="radio">
                                            <label><input type="radio" name="penghasilan" value="< 1.500.000">< Rp. 2.000.000</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="penghasilan" value="1.500.000 - 2.500.000">Rp. 2.500.000 s/d Rp. 5.000.000</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="penghasilan" value="2.600.000 - 5.000.000">Rp. 6.000.000 s/d Rp. 10.000.000</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="penghasilan" value="> 5.000.000">> Rp. 10.000.000</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-3">Alamat Pendamping</label>
                                    <div class="col-lg-8">
                                        <textarea type="text" class="form-control required" name="alamat"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-3">No Telp Pendamping</label>
                                    <div class="col-lg-8">
                                        <input type="number" class="form-control" name="telp">
                                    </div>
                                </div><hr>
                                <div class="col-lg-12 pull-right">
                                <input type="submit" name="next3" class="btn btn-primary pull-right col-lg-2" value="Next">
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