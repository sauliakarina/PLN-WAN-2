<main>
    <div class="content-wrapper">
        <div class="container" >
            <div class="row">
                <div class="col-md-12">
                    <h4  class="page-head-line">Pencarian Gangguan</h4>
                </div>
            </div>
            <center>
            <div class="row">
            
            <div>
                <div class="col-md-3"></div>
                <div class="col-md-6" style="margin-right:200 ; margin-left:200">
                   <div class="alert alert-info">
                    <form class="" action="<?php echo base_url().'c_gangguan/filter_manual'; ?>" method="post">
                     <label>Area: </label>
                        <select id="area" name="sid" class="form-control">
                         <option value="">_____Pilih Area_____</option>
                          <?php 
                            foreach($get_layanan as $gl ) {
                            echo "<option value='$gl->sid'> $gl->lokasi</option>";
                            }
                          ?>
                        </select>

<div class="form-group">
                          <label for="prodi">Jenis Gangguan :</label>
                          <select class="form-control"   name="id_jenisgangguan">
                            <option value="">_____Pilih Jenis Gangguan_____</option>
                            <?php 
                              foreach($get_jenisgangguan as $gjg ) {
                                echo "<option value='$gjg->id_jenisgangguan'> $gjg->jenis_gangguan</option>";
                              }
                            ?>
                          </select>
</div>
<div class="form-group">
                          <label for="prodi">Bulan :</label>
                          <select class="form-control" name="bulan">
                            <option value="">_____Pilih Bulan_____</option>
                            <option value="01">Januari</option>
                            <option value="02">Februari</option>
                            <option value="03">Maret</option>
                            <option value="04">April</option>
                            <option value="05">Mei</option>
                            <option value="06">Juni</option>
                            <option value="07">Juli</option>
                            <option value="08">Agustus</option>
                            <option value="09">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                          </select>
</div>
<div class="row"> <div class='col-md-12'>
            <div class="form-group">
              <label for="date">Tahun :  </label>
                    <input type='text' class="form-control" name="tahun" />
                
                </div>
            </div>
</div>

<div class="row"> <div class='col-md-12'>
            <div class="form-group">
              <label for="date">Durasi :  </label>
                    <input type='text' class="form-control" name="durasi" />
                
                </div>
            </div>
</div>
 <!-- <div class="form-group">
                           <label for="prodi">Durasi :</label>
                           <select class="form-control"  id="Durasi " name="durasi">
                             <option value="_">_____Pilih Rentan Waktu_____</option>
                             <option value="<?php ?>">< 4 Jam</option>
                             <option value="Perangkat">4 Jam- 7 Jam </option>
                             <option value="Modul"> > 7 Jam </option>
                           </select>
 </div>  -->
                        <hr />
                        <button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-search"></span> &nbsp;Cek </button>&nbsp;
                        </div>
                        </div>
              </form>
                </div>
            <center/>
            </div>
            </div>
        </div>
    </div>
</main>