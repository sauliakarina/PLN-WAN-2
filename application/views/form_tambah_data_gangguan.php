<main>
<div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-head-line"><strong> MASUKKAN DATA GANGGUAN </strong></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
      <form action="<?php echo base_url();?>c_gangguan/tambah_aksi_gangguan" method="post">        
      <div class="form-group">
      <label for="area">Lokasi : </label>
      <select id="area" name="sid" class="form-control">
        <option value="_">_____Pilih Area_____</option>
        <?php 
            foreach($get_layanan as $gl){ 
               echo "<option  value='$gl->sid'>$gl->lokasi</option>";
                   }
                ?>
      </select>
  </div>
      
  
  <div class="form-group">
                          <label for="prodi">Jenis Gangguan :</label>
                          <select class="form-control" id="jenis gangguan" name="id_jenisgangguan">
                            <option value="16">_____Pilih Jenis Gangguan_____</option>
                            <?php 
                               foreach($get_jenisgangguan as $jg){ 
                               echo "<option  value='$jg->id_jenisgangguan'>$jg->jenis_gangguan</option>";
                               }
                            ?>
                          </select>
                        </div>
    <div class="row">
        <div class='col-md-12'>
            <div class="form-group">
              <label for="date">Lokasi Gangguan :  </label>
                    <input type="text" name="lokasi_gangguan" class="form-control">
                
                </div>
            </div>
        </div>

    



    <div class="row">
        <div class='col-md-12'>
            <div class="form-group">
              <label for="date">Penyebab :  </label>
                    
                    <textarea rows="5" class="form-control" name="penyebab_gangguan"></textarea>
                </div>
            </div>
        </div>

        <div class="row">
        <div class='col-md-12'>
            <div class="form-group">
              <label for="date">Solusi :  </label>
                    <textarea rows="5" class="form-control" name="solusi_gangguan"></textarea>
                
                </div>
            </div>
        </div>
    
        <div class='col-md-6'>
            <div class="form-group">
              <label for="date">Open Date :  </label>
                    <input type='date' class="form-control" name="open_date" />
                
                </div>
            </div>
        
 

    
        <div class='col-md-6'>
            <div class="form-group">
              <label for="date">Open Time :  </label>
                    <input type='time' class="form-control" name="open_time" />
                
                </div>
            </div>
        
    

        <div class='col-md-6'>
            <div class="form-group">
              <label for="date">Close Date :  </label>
                    <input type='date' class="form-control" name="close_date" />
                
                </div>
            </div>
        


    
        <div class='col-md-6'>
            <div class="form-group">
              <label for="date">Close Time :  </label>
                    <input type='time' class="form-control" name="close_time" />
                
                </div>
            </div>

        <div class="row">
        <div class='col-md-12'>
            <div class="form-group">
              <label for="date">Deskripsi Jenis gangguan :  </label>
                    <textarea rows="3" class="form-control" name="deskripsi_jenisgangguan"></textarea>
                
                </div>
            </div>
        </div>
      

        </div>
        </div>
          <br>
                       
                        
                          <button type="submit" class="btn btn-default btn-lg">Simpan </button>
                        </label></div></form>
                        
                          
                    </form>
  </div>
  </div>
</div>
 </div>
            </div>
        </div>
    </div>
</main>