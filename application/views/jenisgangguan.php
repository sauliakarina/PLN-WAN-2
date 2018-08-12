<main>
<div class="content-wrapper">
        <div class="container">
            <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Jenis Gangguan</h1>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->

                  <a href="<?php echo base_url();?>c_form/tambahgangguan" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-plus-sign"></span> <b>TAMBAH</b> </a>

                  <br>
                  <br>
                    
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Jenis Gangguan</th>
                                             <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Putus Kabel</td>
                                            <td></td>
                                            <td><center>
                <a class="btn btn-default" href="<?php echo base_url();?>c_form/edit_data_gangguan">Edit</a>
        <button class="btn btn-danger" onclick='delete_user(<?php echo $u->id ?>)' data-toggle="modal" data-target="#myModal">Hapus</button>
            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Perangkat</td>
                                            <td>Switch, router</td>
                                            <td><center>
                <a class="btn btn-default" href="<?php echo base_url();?>c_main/edit">Edit</a>
        <button class="btn btn-danger" onclick='delete_user(<?php echo $u->id ?>)' data-toggle="modal" data-target="#myModal">Hapus</button>
            </td>
                                      </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Modul</td>
                                            <td>Software/konfig/Catalys</td>
                                            <td><center>
                <a class="btn btn-default" href="<?php echo base_url();?>c_main/edit">Edit</a>
        <button class="btn btn-danger" onclick='delete_user(<?php echo $u->id ?>)' data-toggle="modal" data-target="#myModal">Hapus</button>
            </td>
            <tr>
                                            <td>4</td>
                                            <td>Wiring</td>
                                            <td>Kabel non fo</td>
                                            <td><center>
                <a class="btn btn-default" href="<?php echo base_url();?>c_main/edit">Edit</a>
        <button class="btn btn-danger" onclick='delete_user(<?php echo $u->id ?>)' data-toggle="modal" data-target="#myModal">Hapus</button>
            </td>
            <tr>
                                            <td>5</td>
                                            <td>Patchord</td>
                                            <td>Fo Indor</td>
                                            <td><center>
                <a class="btn btn-default" href="<?php echo base_url();?>c_main/edit">Edit</a>
        <button class="btn btn-danger" onclick='delete_user(<?php echo $u->id ?>)' data-toggle="modal" data-target="#myModal">Hapus</button>
            </td>
               <tr>
                                            <td>6</td>
                                            <td>Power Supply</td>
                                            <td></td>
                                            <td><center>
                <a class="btn btn-default" href="<?php echo base_url();?>c_main/edit">Edit</a>
        <button class="btn btn-danger" onclick='delete_user(<?php echo $u->id ?>)' data-toggle="modal" data-target="#myModal">Hapus</button>
            </td>
                                      </tr>
                                        </tr>
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