
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Tambah Progress</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <br/>
                    <?php foreach($gangguan as $g){ ?>
                    <form action="<?php echo base_url();?>c_gangguan/tambah_aksi_progress" method="post">
                        <div class="row">
                       <div class='col-md-12'>
                         <div class="form-group">
                             <label for="date"> Waktu :  </label>
                             <input type='hidden' name="id_gangguan" class="form-control" value="<?php echo $g->id_gangguan ?>" />
                             <input type='hidden' name="open_date" class="form-control" value="<?php echo $this->m_data_gangguan->get_gangguan_byid($g->id_gangguan)->open_date?>" />
                             <input type='hidden' name="open_time" class="form-control" value="<?php echo $this->m_data_gangguan->get_gangguan_byid($g->id_gangguan)->open_time?>" />
                             <input type='time' class="form-control" name="waktu" />
                
                         </div>
                       </div>
                    </div>
                        <div class="form-group">
                          <label for="nama">Keterangan </label>
                          <textarea rows="3" class="form-control" name="ket_progress"></textarea>
                        </div>

                       <div class="form-group">
                          <label for="prodi"> Status :</label>
                          <select class="form-control" id="jenis status" name="status_progress">
                            <option value="1">_____Pilih Status_____</option>
                            <option value="1">Penanganan </option>
                            <option value="2">Selesai </option>
                          </select>
                        </div>
                        
                        <br>

                          <button type="submit" class="btn btn-default btn-lg"> Tambah </button>
                        </label></div>
                      </form>
                    <?php }?>
                        
                        </div>
                        </div>  
                      </div>
                    </div>
                  </div>
    <!-- CONTENT-WRAPPER SECTION END-->