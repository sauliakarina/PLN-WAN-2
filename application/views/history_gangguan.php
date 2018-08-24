<main>
<div class="content-wrapper">
        <div class="container">
            <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Histori Data Gangguan</h1>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
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
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php 
                                        $no=1;
                                        foreach($gangguan as $g ) {

                                        ?>
                                        <tr>
                                            <td><?php echo $g->open_date ?></td>
                                            <td><?php echo anchor('c_gangguan/tampil_lokasi/'.$g->sid,'Area '.$this->m_data_gangguan->tampil_layanan($g->sid)->lokasi); ?> </td>
                                           <!--  <td><?php //echo anchor('c_gangguan/form_jenis_gangguan/'.$g->id_gangguan, $this->m_data_gangguan->tampil_jenisgangguan_byid($g->id_jenisgangguan)->jenis_gangguan); ?> </td> -->
                                            <td><?php if ($g->id_jenisgangguan=="12") {
                                              echo "<p style='color:'>Belum Diketahui</p>";
                                              } else {
                                                echo anchor('c_gangguan/form_jenis_gangguan/'.$g->id_gangguan, $this->m_data_gangguan->tampil_jenisgangguan_byid($g->id_jenisgangguan)->jenis_gangguan); 
                                                } ?>
                                              </td>
                                            <td><?php echo $g->lokasi_gangguan ?></td>
                                            <td><?php echo $g->penyebab_gangguan ?></td>
                                            <td><?php echo $g->solusi_gangguan ?></td>
                                            <td>
                                              <?php if($this->m_data_gangguan->get_last_progress($g->id_gangguan)== false):  ?>
                                              <form method='' action="<?php echo base_url('c_gangguan/tambah_progress/'.$g->id_gangguan)?>">
                                                     <button class='btn btn-default' type='submit'>Input</button>
                                                </form>
                                              <?php else: ?>
                                                <?php if ($this->m_data_gangguan->get_last_progress($g->id_gangguan)['status_progress'] == 1): ?>
                                                    <a href="<?php echo base_url('c_gangguan/progress/'.$g->id_gangguan) ?>">Penanganan</a><br>
                                                   <center><form method='' action="<?php echo base_url('c_gangguan/tambah_progress/'.$g->id_gangguan)?>">
                                                     <button class="btn btn-default btn-sm" type='submit'><span class="glyphicon glyphicon-plus-sign"></span> </button>
                                                  </form></center>
                                                    <?php else: ?>
                                                      <a href="<?php echo base_url('c_gangguan/progress/'.$g->id_gangguan) ?>">Selesai</a>
                                                <?php endif ?>
                                                
                                              <?php endif; ?>
                                            </td>
                                            <td>
                                                <div class="btn-group"> 
                                                <form method='' action="<?php echo base_url('c_gangguan/tampil_waktu_histori/'.$g->id_gangguan)?>">
                                                     <button class='btn btn-primary' type='submit'>Detail</button>
                                                </form>
                                                <form method='' action="<?php echo base_url('c_gangguan/edit_gangguan/'.$g->id_gangguan) ?>">
                                                    <button class='btn btn-default' type='submit'>Edit</button>
                                                </form>
                                                <button data-toggle="modal" data-target="#exampleModal" onclick="set_id(<?php echo $g->id_gangguan ?>)" class="btn btn-danger">Hapus</button>
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

    </script>


</main>