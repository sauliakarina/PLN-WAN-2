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
                            <a href="<?php echo base_url();?>c_form/form_tambah_data_keluhan" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-plus-sign"></span> <b>TAMBAH</b> </a>
                            <div class="table-responsive" style="margin-top: 20px">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Area</th>
                                            <th>Jenis Keluhan</th>
                                            <th>Penyebab</th>
                                            <th>Solusi</th>
                                            <th>Waktu Keluhan</th>
                                            <th style="width:50px"></th>
                                            <th style="width:50px"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td> <a class="" href="<?php echo base_url();?>c_main/area">Jatinegara</a></td>
                                            <td><a class="" href="" data-toggle="modal" data-target="#myModal"></a></td>
                                            <td>Penyebab</td>
                                            <td>Solusi</td>
                                            <td> 
                <a class="btn btn-primary" href="<?php echo base_url();?>c_main/waktu">Lihat</button></a></td>
                                            <td><center>
                <button class="btn btn-default" href="<?php echo base_url();?>c_form/edit_data_keluhan">Edit</button></center>
                </td>
                <td><center>
        <button class="btn btn-danger" onclick='delete_user(<?php echo $u->id ?>)' data-toggle="modal" data-target="#myModal">Hapus</button></center>
            </td>
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
