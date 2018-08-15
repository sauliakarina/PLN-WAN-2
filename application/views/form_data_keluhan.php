<div class="content-wrapper">
        <div class="container">
            <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Data Keluhan</h1>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                            <a href="<?php echo base_url();?>c_keluhan/form_tambah_keluhan" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-plus-sign"></span> <b>TAMBAH</b> </a>
                            <div class="table-responsive" style="margin-top: 20px">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Lokasi</th>
                                            <th>Jenis Keluhan</th>
                                            <th>Penyebab</th>
                                            <th>Solusi</th>
                                            <th>Waktu Keluhan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no=1;
                                        foreach($keluhan as $k ) {

                                        ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td>Area</td>
                                            <td>jenis keluhan</td>
                                            <td><?php echo $l->penyebab_keluhan ?></td>
                                            <td><?php echo $l->solusi_keluhan ?></td>
                                            <td><a class="btn btn-primary" href="<?php echo base_url();?>c_main/waktu">Lihat</button></a></td>
                                            <td>

                                                 <form method='' action="<?php echo base_url('c_layanan/edit_layanan/'.$l->sid) ?>">
                                                    <button class='btn btn-default' type='submit'>Edit</button>
                                                </form>
                                                <button data-toggle="modal" data-target="#exampleModal" onclick="set_id(<?php echo $l->sid ?>)" class="btn btn-danger">Hapus</button>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" align="center">Keterangan Jenis Keluhan</h4>
          </div>
          <div class="modal-body">
            <p align="center">coba coba aja </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          </div>
        </div>

      </div>
    </div> <!-- MODAL -->
