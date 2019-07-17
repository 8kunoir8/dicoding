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
                            <form action="#" class="form-horizontal" method="POST" id="pendaftaran3">
                                <i class="col-lg-1"></i>
                                <h4><b>D. DATA AKADEMIK PENDAFTAR</b></h4>
                                <i class="col-lg-1"></i><p>Pendidikan Sebelumnya</p>
                                <div class="form-group">
                                    <label class="control-label col-lg-3">Lulus dari SMP/MTs</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control required" name="sekAsal" value="<?php echo $dataSiswa->sekolahAsal; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-3">NISN SMP/MTs</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control required" name="nisn" value="<?php echo $dataSiswa->noNISN; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-3">Tanggal Lulus / No Ijazah</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="tanggal form-control required" name="tglLulus" value="<?php echo $dataSiswa->tglLulus; ?>">
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control required" name="noIjazah" value="<?php echo $dataSiswa->noIjazah; ?>">
                                    </div>
                                </div><hr>
                                <div class="col-lg-12 pull-right">
                                <input type="submit" name="next4" class="btn btn-primary pull-right col-lg-2" value="Next">
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
            $("#pendaftaran3").validate();
        });
    </script>
    <style>
        .error{
            color:red;
        }
    </style>
</html>