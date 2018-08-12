<main>
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Tambah Layanan </h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <br />
                    <form onsubmit="return validasi()" action="<?php echo base_url();?>c_add/tambah_u" method="post">
                        <div class="form-group">
                          <label for="ID">SID <font color="red">*</font></label>
                          <input style="width:500px" class="form-control" id="ID" type="text" name="NoIjazah">
                        </div>
                        <div class="form-group">
                          <label for="nama">Lokasi<font color="red">*</font></label>
                          <input id="nama" type="text" style="width:500px" class="form-control" name="nama">
                        </div>
                        <div class="form-group">
                          <label for="password">Kapasitas<font color="red">*</font></label>
                          <input id="password" type="password" style="width:500px" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                          <label for="comfirmpassword">Nama PIC<font color="red">*</font></td>
                          <input type="password" id="confirmpassword" name="password" style="width:500px" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="comfirmpassword">No. HP PIC<font color="red">*</font></td>
                          <input type="password" id="confirmpassword" name="password" style="width:500px" class="form-control">
                        </div>
                        <hr/>
                          <button type="submit" class="btn btn-default btn-lg">Tambah </button>
                        </label></div></form>
                        
                        </div>
                        </div>  
                      </div>
                    </div>
                  </div>
 </main>