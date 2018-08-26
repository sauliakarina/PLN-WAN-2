    <!-- MENU SECTION END-->
<div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-head-line"><strong> MASUKKAN DATA KELUHAN</strong></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                <form action="<?php echo base_url();?>c_keluhan/tambah_aksi_keluhan" method="post">
                <div class="form-group">
                <label for="area">Lokasi </label>
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
                          <label for="prodi">Jenis Keluhan </label>
                          <select class="form-control" id="jenis keluan" name="id_jeniskeluhan">
                            <option value="10">_____Pilih Jenis Keluhan_____</option>
                            <?php 
                               foreach($get_jeniskeluhan as $jk){ 
                               echo "<option  value='$jk->id_jeniskeluhan'>$jk->jenis_keluhan</option>";
                               }
                            ?>
                           </select>
                        </div>

                         <div class="row">
        <div class='col-md-12'>
            <div class="form-group">
              <label for="date">Keterangan Jenis Keluhan :  </label>
                    <textarea rows="3" class="form-control" name="deskripsi_jeniskeluhan"></textarea>
                    <!-- <input style="width:500px" class="form-control" type="hidden" name="isDelete" value="yes"> -->
                </div>
            </div>
        </div>

    <div class="row">
        <div class='col-md-12'>
            <div class="form-group">
              <label for="date">Penyebab :  </label>
                    
                    <textarea rows="5" class="form-control" name="penyebab"></textarea>
                </div>
            </div>
        </div>

        <div class="row">
        <div class='col-md-12'>
            <div class="form-group">
              <label for="date">Solusi :  </label>
                    <textarea rows="5" class="form-control" name="solusi"></textarea>
                
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
 
        </div>
        </div>
        
          <br>
                       
               <button type="submit" class="btn btn-default btn-lg">Simpan </button>
        </label></div>
      </form>
                        
  </div>
  </div>
</div>
 </div>
            </div>
        </div>
    </div>
