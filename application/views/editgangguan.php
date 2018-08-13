
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Edit Gangguan</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <br />
                    <form onsubmit="return validasi()" action="<?php echo base_url();?>c_add/tambah_u" method="post">
                        <div class="form-group">
                          <label for="ID"> No </label>
                          <input style="width:500px" class="form-control" id="ID" type="text" name="NoIjazah">
                        </div>
                        <div class="form-group">
                          <label for="nama">Jenis Gangguan</label>
                          <input id="nama" type="text" style="width:500px" class="form-control" name="nama">
                        </div>
                        <div class="form-group">
                          <label for="password">Keterangan</label>
                          <input id="password" type="password" style="width:500px" class="form-control" name="email">
                        </div>
                        
                          <button type="submit" class="btn btn-default btn-lg">Edit </button>
                        </label></div></form>
                        
                        </div>
                        </div>  
                      </div>
                    </div>
                  </div>
    <!-- CONTENT-WRAPPER SECTION END-->