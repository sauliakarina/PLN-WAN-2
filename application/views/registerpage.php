<main>
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">DAFTAR </h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <br />
                    <form action="<?php echo base_url();?>c_user/tambah_aksi_user" method="post">
                        
                        <div class="form-group">
                          <label for="nama">Nama:<font color="red">*</font></label>
                          <input id="nama" type="text" style="width:500px" class="form-control" name="nama">
                        </div>
                        <div class="form-group">
                          <label for="password">Password:<font color="red">*</font></label>
                          <input id="password" type="password" style="width:500px" class="form-control" name="password">
                        </div>
                        <!-- <div class="form-group">
                          <label for="comfirmpassword">Konfirmasi Password:<font color="red">*</font></td>
                          <input type="password" id="confirmpassword" name="password" style="width:500px" class="form-control">
                        </div> -->
                        <div class="form-group">
                          <label for="statususer">Status User<font color="red">*</font></td>
                          <input type="text" id="statususer" name="status_user" style="width:500px" class="form-control">
                        </div>
                        <hr/>
                          <button type="submit" class="btn btn-default btn-lg">Daftar </button>
                        </label></div></form>
                        
                        </div>
                        </div>  
                      </div>
                    </div>
                  </div>
</main>