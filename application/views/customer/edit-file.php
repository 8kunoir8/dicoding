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
                            <form action="#" class="form-horizontal" method="POST" id="pendaftaran6" enctype="multipart/form-data">
                                <i class="col-lg-1"></i>
                                <h4><b>E. BERKAS SYARAT PENDAFTARAN</b></h4>
                                <div class="form-group">
                                    <label class="control-label col-lg-3">File Ijazah</label>
                                    <div class="col-lg-8">
                                        
                                        <input type="file" class="form-control" name="ijazah" placeholder="Dapat berupa file gif|jpg|png|jpeg|pdf">
                                        <i color="gray">Dapat berupa file gif|jpg|png|jpeg|pdf</i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-3">File SKHUN</label>
                                    <div class="col-lg-8">
                                        
                                        <input type="file" class="form-control" name="skhun" placeholder="Dapat berupa file gif|jpg|png|jpeg|pdf">
                                        <i color="gray">Dapat berupa file gif|jpg|png|jpeg|pdf</i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-3">File KTP Ayah / Ibu / Wali</label>
                                    <div class="col-lg-8">
                                        
                                        <input type="file" class="form-control" name="ktp" placeholder="Dapat berupa file gif|jpg|png|jpeg|pdf">
                                        <i color="gray">Dapat berupa file gif|jpg|png|jpeg|pdf</i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-3">File Kartu Keluarga</label>
                                    <div class="col-lg-8">
                                        
                                        <input type="file" class="form-control" name="kk" placeholder="Dapat berupa file gif|jpg|png|jpeg|pdf">
                                        <i color="gray">Dapat berupa file gif|jpg|png|jpeg|pdf</i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-3">File Pas Foto 3x4</label>
                                    <div class="col-lg-8">
                                        
                                        <input type="file" class="form-control" name="foto" placeholder="Dapat berupa file gif|jpg|png|jpeg">
                                        <i color="gray">Dapat berupa file gif|jpg|png|jpeg</i>
                                    </div>
                                </div>
                                <div class="col-lg-12 pull-right">
                                <input type="submit" name="next5" class="btn btn-primary pull-right col-lg-2" value="Simpan">
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
            $("#pendaftaran6").validate();
        });
    </script>
    <style>
        .error{
            color:red;
        }
    </style>
</html>