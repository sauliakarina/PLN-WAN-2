
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
                    <?php foreach($progress as $p){ ?>
                    <form action="<?php echo base_url();?>c_gangguan/update_progress" method="post">
                        <div class="row">
                       <div class='col-md-12'>
                         <div class="form-group">
                             <label for="date"> Waktu :  </label>
                             <input type='time' class="form-control" name="waktu" value="<?php echo $p->waktu ?>" />
                             <input type='hidden' class="form-control" name="id_gangguan" value="<?php echo $p->id_gangguan ?>" />
                             <input type='hidden' class="form-control" name="id_progress" value="<?php echo $p->id_progress ?>" />


                
                         </div>
                       </div>
                    </div>
                        <div class="form-group">
                          <label for="nama">Keterangan </label>
                          <textarea rows="3" class="form-control" name="ket_progress"><?php echo $p->ket_progress ?></textarea>
                        </div>

                       <div class="form-group">
                          <label for="prodi"> Status :</label>
                          <select class="form-control" id="jenis status" name="status_progress">
                            <?php if ($p->status_progress == 1) {
                              echo "<option value='1'>--Penanganan--</option>";
                            } else {
                              echo "<option value='2'>--Selesai--</option>";
                            }
                             ?>
                            <option value="1">Penanganan </option>
                            <option value="2">Selesai </option>
                          </select>
                        </div>
                        
                        <br>

                          <button type="submit" class="btn btn-default btn-lg"> Simpan </button>
                        </label></div></form>
                      <?php } ?>
                        
                        </div>
                        </div>  
                      </div>
                    </div>
                  </div>
    <!-- CONTENT-WRAPPER SECTION END-->