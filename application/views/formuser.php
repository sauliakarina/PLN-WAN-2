<main>
<div class="content-wrapper">
        <div class="container">
            <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Akun </h1>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->

                  <a href="<?php echo base_url();?>c_form/register" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-plus-sign"></span> <b>TAMBAH</b> </a>

                  <br>
                  <br>
                    
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                             <th>Password</th>
                                              <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Saulia </td>
                                            <td>1234</td>
                                            <td>User</td>
                                            <td><center>
                <a class="btn btn-default" href="<?php echo base_url();?>c_form/form_edit_user">Edit</a>
        <button class="btn btn-danger" onclick='delete_user(<?php echo $u->id ?>)' data-toggle="modal" data-target="#myModal">Hapus</button>
            </td>
                                        </tr>
                                         <tr>
                                            <td>2</td>
                                            <td> Karina </td>
                                            <td>asdfghj </td>
                                            <td>Admin </td>
                                            <td><center>
                <a class="btn btn-default" href="<?php echo base_url();?>c_main/edit">Edit</a>
        <button class="btn btn-danger" onclick='delete_user(<?php echo $u->id ?>)' data-toggle="modal" data-target="#myModal">Hapus</button>
            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Monica </td>
                                            <td>yuijh </td>
                                            <td>User </td>
                                            <td><center>
                <a class="btn btn-default" href="<?php echo base_url();?>c_main/edit">Edit</a>
        <button class="btn btn-danger" onclick='delete_user(<?php echo $u->id ?>)' data-toggle="modal" data-target="#myModal">Hapus</button>
            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Tiwi </td>
                                            <td>yuyyu8 </td>
                                            <td>User </td>
                                            <td><center>
                <a class="btn btn-default" href="<?php echo base_url();?>c_main/edit">Edit</a>
        <button class="btn btn-danger" onclick='delete_user(<?php echo $u->id ?>)' data-toggle="modal" data-target="#myModal">Hapus</button>
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