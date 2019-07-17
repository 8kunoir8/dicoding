        <div class="container">
            <div class="row">
            <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <!-- <h4>Registrasi Pelanggan Baru</h4> -->
                        </div>
                        <div class="panel-body">
                        <form method="POST" enctype="multipart/form-data" class="form-horizontal" id="pendaftaran" action="<?php echo base_url('Front/newCust') ?>">
                            <hr>
                            <i class="col-lg-1"></i>
                            <h4><b>A. DATA PELANGGAN</b></h4>
                            

                            <div class="form-group">
                                <label class="control-label col-lg-3">Username</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control required" name="username" placeholder="Username" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3">Password</label>
                                <div class="col-lg-8">
                                    <input type="password" class="form-control required" name="password" placeholder="Password" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3">Nama Lengkap</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control required" name="fullname" placeholder="Fullname" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3">No Telp</label>
                                <div class="col-lg-8">
                                    <input type="number" class="form-control required" name="telp" placeholder="Telephone" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3">Email</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" placeholder="Email" name="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3">Alamat</label>
                                <div class="col-lg-8">
                                    <textarea name="address" id="address" class="form-control" placeholder="Alamat" cols="30" rows="10"></textarea>
                                </div>
                            </div><hr>
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