<main>
<div class="content-wrapper">
        <div class="container">
            <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Hasil Pencarian Data Gangguan</h1>
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
                                            <th>Tanggal</th>
                                            <th>Area</th>
                                            <th>Jenis Gangguan</th>
                                            <th>Lokasi Gangguan</th>
                                            <th>Penyebab</th>
                                            <th>Solusi</th>
                                            <th>Progress</th>
                                            <th>Waktu Gangguan</th>
                                            <?php if ($status_user == 'Admin') {
                                              echo "<th style='width:50px'></th>
                                            <th style='width:50px'></th>";
                                            } ?>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php 
                                        $no=1;
                                        foreach($gangguan as $g) {

                                        ?>
                                        <tr>
                                            <td><?php echo $g->open_date ?></td>
                                            <td><?php echo anchor('c_gangguan/tampil_lokasi/'.$g->sid,'Area '.$this->m_data_gangguan->tampil_layanan($g->sid)->lokasi); ?> </td>
                                            <td><?php echo anchor('c_gangguan/form_jenis_gangguan/'.$g->id_gangguan, $this->m_data_gangguan->tampil_jenisgangguan_byid($g->id_jenisgangguan)->jenis_gangguan); ?> </td>
                                            <!-- <td><button class="btn btn-primary" data-toggle="modal" data-target="#detailModal" onclick='showDetails(<?php // echo $g->id_gangguan ?>)'><?php //echo $this->m_data_gangguan->tampil_jenisgangguan_byid($g->id_jenisgangguan)->jenis_gangguan ?></button></td> -->
                                            <td><?php echo $g->lokasi_gangguan ?></td>
                                            <td><?php echo $g->penyebab_gangguan ?></td>
                                            <td><?php echo $g->solusi_gangguan ?></td>
                                            <td>
                                              <?php if($this->m_data_gangguan->get_last_progress($g->id_gangguan)== false):  ?>
                                              <form method='' action="<?php echo base_url('c_gangguan/tambah_progress/'.$g->id_gangguan)?>">
                                                     <button class='btn btn-default' type='submit'>Isi</button>
                                                </form>
                                              <?php else: ?>
                                                <?php if ($this->m_data_gangguan->get_last_progress($g->id_gangguan)['status_progress'] == 1): ?>
                                                    <a href="<?php echo base_url('c_gangguan/progress/'.$g->id_gangguan) ?>">Penanganan</a>
                                                    <?php else: ?>
                                                      <a href="<?php echo base_url('c_gangguan/progress/'.$g->id_gangguan) ?>">Selesai</a>
                                                <?php endif ?>
                                                
                                              <?php endif; ?>
                                            </td>
                                            <td> 
                                                <!-- <form method='' action="<?php //echo base_url('c_gangguan/tampil_waktu_pencarian/'.$g->id_gangguan)?>">
                                                     <button class='btn btn-primary' type='submit'>Detail</button>
                                                </form> -->
                                                 <button onclick='detail_waktu(<?php echo $g->id_gangguan ?>)' id="btn-edit" class="btn btn-primary" data-toggle="modal" data-target="#ModalX">Detail</button>
                                            </td>
                                              <?php if ($status_user == 'Admin') {
                                                 ?>
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
                                        <?php }?>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            <a href="<?php echo base_url();?>c_gangguan/tampil_searchgangguan" class="btn btn-default"><span class="glyphicon glyphicon-hand-left"></span> &nbsp; KEMBALI </a>&nbsp;
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Keterangan-->
   

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

                <!-- Modal Detail Waktu -->
              <div class="modal fade" id="ModalX" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Waktu Gangguan</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                            <div class="">
                              <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                  <tbody>
                                     <tr>
                                        <td><strong>Open Date</strong></td>
                                        <td style="" id="open_date"></td>
                                    </tr>
                                    <tr>
                                       <td style=""><strong>Open Time</strong></td>
                                      <td style="" id="open_time"></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Close Date</strong></td>
                                       <td style="" id="close_date"></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Close Time</strong></td>
                                       <td style="" id="close_time"></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Durasi</strong></td>
                                       <td style="" id="durasi"></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>

                          </div>
                          </div> <!-- modal body -->
                          <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                          </div>
                      </div>
                  </div>
              </div><!-- modal -->




    <script type="text/javascript">
        $(document).ready( function () {
        $('#example').DataTable();
    } );
        $('#example').dataTable({
           "order": [[ 6, "asc" ]]
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

        /*function showDetails(id) {

          $.ajax({
            url: "<?php //echo base_url('c_gangguan/tampil_ket/') ?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
              var coba = JSON.parse(data);
              $("#ket_gangguan").text(coba.ket_gangguan); 
              $('[name="deskripsi_jenisgangguan"]').val(data.deskripsi_jenisgangguan);
              
              $('#detailModal').modal('show');
            },
            error: function(jqXHR, textStatus, errorThrown) {
              console.log('gagal mengambil data');
            }
          });
      }*/

       function detail_waktu(id) {

      $.ajax({
        url: "<?php echo base_url('c_gangguan/detail_waktu/') ?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data) {
          console.table(data);
          $('#id_gangguan').text(data.id_gangguan);
          $('#open_date').text(data.open_date);
          $('#open_time').text(data.open_time);
          $('#close_date').text(data.close_date);
          $('#close_time').text(data.close_time);
          $('#durasi').text(data.durasi);
          
          $('#ModalX').modal('show');
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.log('gagal mengambil data');
        }
      });
    }


    </script>


</main>