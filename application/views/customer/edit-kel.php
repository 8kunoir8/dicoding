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
                            <form action="#" class="form-horizontal" method="POST" id="pendaftaran4">
                                <i class="col-lg-1"></i>
                                <h4><b>C. DATA KELUARGA PENDAFTAR</b></h4><hr>
                                <h4>Data Ayah / Wali</h4>
                                <div class="col-lg-4"></div>
                                <br>
                                <div class="form-group">
                                    <label class="control-label col-lg-3">Nama Lengkap dan Gelar</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control required" name="namaAyah" value="<?php echo $dataSiswa->namaAyah; ?>">
                                    </div>
                                </div><div class="form-group">
                                    <label class="control-label col-lg-3">Tempat, Tanggal Lahir</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" name="tempatLahirAyah" value="<?php echo $dataSiswa->tempatLahirAyah; ?>">
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" class="tanggal form-control" name="tglLahirAyah" value="<?php echo $dataSiswa->tglLahirAyah; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-3">Agama</label>
                                    <div class="col-lg-8">
                                        <select class="form-control" name="agamaAyah">
                                            <option value="Budha" <?php if($dataSiswa->agamaAyah == "Budha"){echo "selected";} ?>>Budha</option>
                                            <option value="Hindu" <?php if($dataSiswa->agamaAyah == "Hindu"){echo "selected";} ?>>Hindu</option>
                                            <option value="Islam" <?php if($dataSiswa->agamaAyah == "Islam"){echo "selected";} ?>>Islam</option>
                                            <option value="Kristen" <?php if($dataSiswa->agamaAyah == "Kristen"){echo "selected";} ?>>Kristen</option>
                                            <option value="Konghucu" <?php if($dataSiswa->agamaAyah == "Konghuchu"){echo "selected";} ?>>Konghucu</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-3">Kewarganegaraan</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" name="kewarAyah" value="<?php echo $dataSiswa->kewarganegaraanAyah; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-3">Pekerjaan</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control required" name="pekAyah" value="<?php echo $dataSiswa->pekAyah; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-3">Penghasilan per Bulan</label>
                                    <div class="col-lg-8">
                                        <div class="radio">
                                            <label><input type="radio" name="penghasilanAyah" value="Tidak Berpenghasilan" <?php if($dataSiswa->penghasilanAyah == "Tidak Berpenghasilan"){echo "checked";} ?>>Tidak Berpenghasilan</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="penghasilanAyah" value="< 1.500.000" <?php if($dataSiswa->penghasilanAyah == "< 1.500.000"){echo "checked";} ?>>Kurang dari Rp. 1.500.000</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="penghasilanAyah" value="1.500.000 - 2.500.000" <?php if($dataSiswa->penghasilanAyah == "1.500.000 - 2.500.000"){echo "checked";} ?>>Rp. 1.500.000 s/d Rp. 2.500.000</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="penghasilanAyah" value="2.600.000 - 5.000.000" <?php if($dataSiswa->penghasilanAyah == "2.600.000 - 5.000.000"){echo "checked";} ?>>Rp. 2.600.000 s/d Rp. 5.000.000</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="penghasilanAyah" value="> 5.000.000" <?php if($dataSiswa->penghasilanAyah == "> 5.000.000"){echo "checked";} ?>>Lebih dari Rp. 5.000.000</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-3">Alamat Ayah / Wali</label>
                                    <div class="col-lg-8">
                                        <textarea type="text" class="form-control required" name="alamatAyah"><?php echo $dataSiswa->alamatAyah; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-3">No Telp Ayah / Wali</label>
                                    <div class="col-lg-8">
                                        <input type="number" class="form-control" name="noTelpAyah" value="<?php echo $dataSiswa->telpAyah; ?>">
                                    </div>
                                </div><hr>
                                <h4>Data Ibu Kandung / Wali</h4>
                                <div class="col-lg-4"></div>
                                <br>
                                <div class="form-group">
                                    <label class="control-label col-lg-3">Nama Lengkap dan Gelar</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control required" name="namaIbu" value="<?php echo $dataSiswa->namaIbu; ?>">
                                    </div>
                                </div><div class="form-group">
                                    <label class="control-label col-lg-3">Tempat, Tanggal Lahir</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" name="tempatLahirIbu" value="<?php echo $dataSiswa->tempatLahirIbu; ?>">
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" class="tanggal form-control" name="tglLahirIbu" value="<?php echo $dataSiswa->tglLahirIbu; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-3">Agama</label>
                                    <div class="col-lg-8">
                                        <select class="form-control" name="agamaIbu">
                                            <option value="Budha" <?php if($dataSiswa->agamaIbu == "Budha"){echo "selected";} ?>>Budha</option>
                                            <option value="Hindu" <?php if($dataSiswa->agamaIbu == "Hindu"){echo "selected";} ?>>Hindu</option>
                                            <option value="Islam" <?php if($dataSiswa->agamaIbu == "Islam"){echo "selected";} ?>>Islam</option>
                                            <option value="Kristen" <?php if($dataSiswa->agamaIbu == "Kristen"){echo "selected";} ?>>Kristen</option>
                                            <option value="Konghucu" <?php if($dataSiswa->agamaIbu == "Konghuchu"){echo "selected";} ?>>Konghucu</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-3">Kewarganegaraan</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" name="kewarIbu" value="<?php echo $dataSiswa->kewarganegaraanIbu ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-3">Pekerjaan</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control required" name="pekIbu" value="<?php echo $dataSiswa->pekIbu ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-3">Penghasilan per Bulan</label>
                                    <div class="col-lg-8">
                                        <div class="radio">
                                            <label><input type="radio" name="penghasilanIbu" value="Tidak Berpenghasilan" <?php if($dataSiswa->penghasilanIbu == "Tidak Berpenghasilan"){echo "checked";} ?>>Tidak Berpenghasilan</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="penghasilanIbu" value="< 1.500.000" <?php if($dataSiswa->penghasilanIbu == "< 1.500.000"){echo "checked";} ?>>Kurang dari Rp. 1.500.000</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="penghasilanIbu" value="1.500.000 - 2.500.000" <?php if($dataSiswa->penghasilanIbu == "1.500.000 - 2.500.000"){echo "checked";} ?>>Rp. 1.500.000 s/d Rp. 2.500.000</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="penghasilanIbu" value="2.600.000 - 5.000.000" <?php if($dataSiswa->penghasilanIbu == "2.600.000 - 5.000.000"){echo "checked";} ?>>Rp. 2.600.000 s/d Rp. 5.000.000</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="penghasilanIbu" value="> 5.000.000" <?php if($dataSiswa->penghasilanIbu == "> 5.000.000"){echo "checked";} ?>>Lebih dari Rp. 5.000.000</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-3">Alamat Ibu</label>
                                    <div class="col-lg-8">
                                        <textarea type="text" class="form-control required" name="alamatIbu"><?php echo $dataSiswa->alamatIbu; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-3">No Telp Ibu</label>
                                    <div class="col-lg-8">
                                        <input type="number" class="form-control" name="noTelpIbu" value="<?php echo $dataSiswa->telpIbu ?>">
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
    </div>
    </body>
    <script>
        $(document).ready(function() {
            $("#pendaftaran4").validate();
        });
    </script>
    <style>
        .error{
            color:red;
        }
    </style>
</html>