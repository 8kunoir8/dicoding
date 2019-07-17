    <div id="wrapper">
        <div class="container">
            <div class="row">
                <br><br><br>
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4>Registrasi Peserta Didik Baru</h4>
                        </div>
                        <div class="panel-body">
                        <form method="POST" enctype="multipart/form-data" class="form-horizontal" id="pendaftaran">
                            <hr>
                            <i class="col-lg-1"></i>
                            <h4><b>A. DATA ADMINISTRASI PENDAFTAR</b></h4>

                            <div class="form-group">
                                <label class="control-label col-lg-3">No Blanko</label>
                                <div class="col-lg-8">
                                    <input type="text" value="<?php echo $dataSiswa->noBlanko ?>" class="form-control required" name="noBlanko" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3">Pilihan Jurusan</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control required" name="pilihanJurusan" value="<?php echo $dataSiswa->jurusanPil; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3">Nama Siswa</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control required" name="namaPdft" value="<?php echo $dataSiswa->namaPdft; ?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3">No Telp</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control required" name="noTelpPdft" value="<?php echo $dataSiswa->noTelpPdft; ?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3">Email</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" name="email" value="<?php echo $dataSiswa->email; ?>">
                                </div>
                            </div><hr>
                            <div class="col-lg-12 pull-right">
                                <input type="submit" name="next1" class="btn btn-primary pull-right col-lg-2" value="Next">
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
            $("#pendaftaran").validate();
        });
    </script>
    <style>
        .error{
            color:red;
        }
    </style>
</html>