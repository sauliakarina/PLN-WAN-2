<main>

<div class="content-wrapper">
        <div class="container">
            <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Jenis Layanan</h1>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->

                  <a href="<?php echo base_url();?>c_layanan/tambah_jenislayanan" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-plus-sign"></span> <b>TAMBAH</b> </a>

                  <br>
                  <br>
                    
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Jenis layanan</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no=1;
                                        foreach($jenislayanan as $jl ) {

                                        ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $jl->nama_layanan ?></td>
                                            <td><center>
                                                <a class="btn btn-default" href="<?php echo base_url();?>c_form/editlayanan">Edit</a>
                                                <button class="btn btn-danger" onclick='delete_user(<?php echo $u->id ?>)' data-toggle="modal" data-target="#myModal">Hapus</button>
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
            <h4 class="modal-title" align="center">Keterangan Jenis Gangguan</h4>
          </div>
          <div class="modal-body">
            <p align="center">CABLE : PUTUS KABEL FO tipe F8</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          </div>
        </div>

      </div>
    </div> <!-- MODAL -->

 </main>