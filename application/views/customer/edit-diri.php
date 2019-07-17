    <div id="wrapper">
        <div class="container">
            <div class="row">
            <br>
            <br>
            <br>
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4>Registrasi Peserta Didik Baru</h4>
                        </div>
                        <div class="panel-body">
                        <form method="POST" enctype="multipart/form-data" class="form-horizontal" id="pendaftaran">
                            <h4><b>B. DATA DIRI PENDAFTAR</b></h4>
                            <div class="form-group">
                                <label class="control-label col-lg-3">Jenis Kelamin</label>
                                <div class="col-lg-8">
                                    <select class="form-control required" name="jeKel">
                                        <option value="Laki-laki" <?php if($dataSiswa->jenisKel == 'Laki-laki'){echo "selected";} ?>>Laki-laki</option>
                                        <option value="Perempuan" <?php if($dataSiswa->jenisKel == 'Perempuan'){echo "selected";} ?>>Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3">Tempat, Tanggal Lahir</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control required" name="tempatLahirPdft" value="<?php echo $dataSiswa->tempatLahir; ?>">
                                </div>
                                <div class="col-lg-4">
                                    <input type="text" class="tanggal form-control required" name="tglLahirPdft" value="<?php echo $dataSiswa->tglLahir; ?>">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-lg-3">Agama</label>
                                <div class="col-lg-8">
                                    <select class="form-control required" name="agama">
                                        <option value="Budha" <?php if($dataSiswa->agama == "Budha"){echo "selected";} ?>>Budha</option>
                                        <option value="Hindu" <?php if($dataSiswa->agama == "Hindu"){echo "selected";} ?>>Hindu</option>
                                        <option value="Islam" <?php if($dataSiswa->agama == "Islam"){echo "selected";} ?>>Islam</option>
                                        <option value="Kristen" <?php if($dataSiswa->agama == "Kristen"){echo "selected";} ?>>Kristen</option>
                                        <option value="Konghucu" <?php if($dataSiswa->agama == "Konghuchu"){echo "selected";} ?>>Konghucu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3">Kewarganegaraan</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control required" name="kewargaPdft" value="<?php echo $dataSiswa->kewarganegaraan; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3">Anak Ke - </label>
                                <div class="col-lg-8">
                                    <input type="number" class="form-control" name="anak" value="<?php echo $dataSiswa->anakKe; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3">Jumlah Saudara Kandung</label>
                                <div class="col-lg-8">
                                    <input type="number" class="form-control" name="jmlSaudara" value="<?php echo $dataSiswa->jmlSaudara; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                    <label class="control-label col-lg-3">Alamat Pendaftar</label>
                                    <div class="col-lg-8">
                                        <textarea type="text" class="form-control required" name="alamatPdft"><?php echo $dataSiswa->alamatPdft; ?></textarea>
                                    </div>
                                </div><hr>
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
    <script>
        $(document).ready(function() {
            $("#pendaftaran").validate();
        });
    </script>
    <style>
        .error{
            color:red;
        }
    </style>
</html>