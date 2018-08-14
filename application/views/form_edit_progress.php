
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Edit Progress</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <br />
                    <form onsubmit="return validasi()" action="<?php echo base_url();?>c_add/tambah_u" method="post">
                        <div class="row">
                       <div class='col-md-12'>
                         <div class="form-group">
                             <label for="date"> Waktu :  </label>
                             <input type='time' class="form-control" />
                
                         </div>
                       </div>
                    </div>
                        <div class="form-group">
                          <label for="nama">Keterangan </label>
                          <textarea rows="3" class="form-control"></textarea>
                        </div>

                       <div class="form-group">
                          <label for="prodi"> Status :</label>
                          <select class="form-control" id="jenis status" name="jenis keluhan">
                            <option value="_">_____Pilih Status_____</option>
                            <option value="Putus Kabel">Penanganan </option>
                            <option value="Perangkat">Selesai </option>
                          </select>
                        </div>
                        
                        <br>

                          <button type="submit" class="btn btn-default btn-lg"> Simpan </button>
                        </label></div></form>
                        
                        </div>
                        </div>  
                      </div>
                    </div>
                  </div>
    <!-- CONTENT-WRAPPER SECTION END-->