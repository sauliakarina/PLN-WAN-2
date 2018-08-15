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
                    <form action="<?php echo base_url();?>c_layanan/tambah_aksi_layanan" method="post">
                        <div class="form-group">
                          <label for="ID">SID <font color="red">*</font></label>
                          <input class="form-control" id="ID" type="text" name="sid">
                        </div>
                        <div class="form-group">
                          <label for="nama">Lokasi<font color="red">*</font></label>
                          <input id="nama" type="text" class="form-control" name="lokasi">
                        </div>
                        <div class="form-group">
                           <label><b>Jenis Layanan</b></label>
                            <select class="form-control" id="prodi" name="id_jenislayanan">
                              <option>__Pilih Jenis Layanan__</option>
                                <?php 
                                  foreach($get_jenislayanan as $jl){ 
                                  echo "<option  value='$jl->id_jenislayanan'>$jl->nama_layanan</option>";
                                }
                              ?>
                            </select>
                        </div>
                        <div class="form-group">
                          <label for="password">Kapasitas<font color="red">*</font></label>
                          <input type="text" class="form-control" name="kapasitas">
                        </div>
                        <div class="form-group">
                          <label for="comfirmpassword">Nama PIC<font color="red">*</font></td></label>
                          <input type="text" name="nama_pic"  class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="comfirmpassword">No. HP PIC<font color="red">*</font></td></label>
                          <input type="text" name="no_hp_pic" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="comfirmpassword">E-mail PIC<font color="red">*</font></td></label>
                          <input type="text" name="email" class="form-control">
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