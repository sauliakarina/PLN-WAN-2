<main>
<div class="content-wrapper">
        <div class="container">
            <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Data Gangguan</h1>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                            <a href="<?php echo base_url();?>c_gangguan/form_tambah_gangguan" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-plus-sign"></span> <b>TAMBAH</b> </a>
                            <div class="table-responsive" style="margin-top: 20px">
                                <table id="example" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Area</th>
                                            <th>Jenis Gangguan</th>
                                            <th>Lokasi Gangguan</th>
                                            <th>Penyebab</th>
                                            <th>Solusi</th>
                                            <th>Progress</th>
                                            <th>Waktu Gangguan</th>
                                            <th style="width:50px"></th>
                                            <th style="width:50px"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php 
                                        $no=1;
                                        foreach($gangguan as $g ) {

                                        ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo anchor('c_gangguan/tampil_lokasi/'.$g->sid,'Area '.$this->m_data_gangguan->tampil_layanan($g->sid)->lokasi); ?> </td>
                                            <!-- <td> <a class="" href="<?php //echo base_url();?>c_main/area">AJ Jatinegara</a></td> -->
                                            <td><?php echo $this->m_data_gangguan->tampil_jenisgangguan_byid($g->id_jenisgangguan)->jenis_gangguan ?></td>
                                            <td><?php echo $g->lokasi_gangguan ?></td>
                                            <td><?php echo $g->penyebab_gangguan ?></td>
                                            <td><?php echo $g->solusi_gangguan ?></td>
                                            <td><!-- <a class="" href="<?php //echo base_url();?>c_form/progress">Penanganan</a> -->
                                              <form method='' action="<?php echo base_url('c_gangguan/tambah_progress/'.$g->id_gangguan)?>">
                                                     <button class='btn btn-default' type='submit'>Isi</button>
                                                </form>
                                            </td>
                                            <td> 
                                                <form method='' action="<?php echo base_url('c_gangguan/tampil_waktu/'.$g->id_gangguan)?>">
                                                     <button class='btn btn-primary' type='submit'>Lihat</button>
                                                </form>
                                            <td>
                                                <center>
                                                 <form method='' action="<?php echo base_url('c_gangguan/edit_gangguan/'.$g->id_gangguan) ?>">
                                                    <button class='btn btn-default' type='submit'>Edit</button>
                                                </form>
                                            </center>
                                            </td>
                                            <td>
                                                <center> <button data-toggle="modal" data-target="#exampleModal" onclick="set_id(<?php echo $g->id_gangguan ?>)" class="btn btn-danger">Hapus</button></center>
                                            </td>
                                        </tr>
                                        <?php }?>
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

    <!-- Modal Keterangan-->
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

    <!-- Modal Hapus -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Hapus Data Gangguan</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                            <div class="text-center">
                              <i class="fa fa-trash fa-4x mb-3 animated bounce"></i>
                              <p style="font-size: 15px">Apakah anda yakin ingin menghapus data gangguan ini?</p>
                            </div>

                          </div> <!-- modal body -->
                          <div class="modal-footer">
                              <button class="btn btn-default" type="submit" onclick='deletep()'>Ya</button>
                              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                          </div>
                      </div>
                  </div>
              </div><!-- modal -->


    <script type="text/javascript">
        $(document).ready( function () {
        $('#example').DataTable();
    } );
        $('#example').dataTable({
      });
    </script>

     <script>
        // popovers Initialization
        $(function () {
            $('[data-toggle="popover"]').popover()
        });

        var p_id;
        function set_id(id) {
            p_id = id;

        }

        function deletep(){
            window.location.href =  "<?php echo base_url();?>c_gangguan/hapus_gangguan/"+p_id;
        }
    </script>


</main>