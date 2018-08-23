<div class="content-wrapper">
        <div class="container">
            <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Hasil Pencarian Data Keluhan</h1>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                            <a href="<?php echo base_url();?>c_keluhan/form_tambah_keluhan" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-plus-sign"></span> <b>TAMBAH</b> </a>
                            <div class="table-responsive" style="margin-top: 20px">
                                <table id="example" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Area</th>
                                            <th>Jenis Keluhan</th>
                                            <th>Penyebab</th>
                                            <th>Solusi</th>
                                            <th>Waktu Keluhan</th>
                                            <?php if ($status_user == 'Admin') {
                                              echo "<th style='width:50px'></th>
                                            <th style='width:50px'></th>";
                                            } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no=1;
                                        foreach($keluhan as $k ) {

                                        ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo anchor('c_keluhan/tampil_lokasi/'.$k->sid,'Area '.$this->m_data_keluhan->tampil_layanan($k->sid)->lokasi); ?> </td>
                                            <td><?php echo $this->m_data_keluhan->tampil_jeniskeluhan_byid($k->id_jeniskeluhan)->jenis_keluhan ?></td>
                                            <td><?php echo $k->penyebab_keluhan ?></td>
                                            <td><?php echo $k ->solusi_keluhan ?></td>
                                            <!-- <td><a class="btn btn-primary" href="<?php //echo base_url();?>c_main/waktu">Lihat</button></a></td> -->
                                            <td>
                                                 <form method='' action="<?php echo base_url('c_keluhan/tampil_waktu/'.$k->id_keluhan)?>">
                                                     <button class='btn btn-primary' type='submit'>Lihat</button>
                                                </form>
                                            </td>
                                            <?php if ($status_user == 'Admin') {
                                             ?>
                                            <td><center>
                                                 <form method='' action="<?php echo base_url('c_keluhan/edit_keluhan/'.$k->id_keluhan) ?>">
                                                    <button class='btn btn-default' type='submit'>Edit</button>
                                                </form>
                                            </center>
                                        </td>
                                        <td><center>
                                                <button data-toggle="modal" data-target="#exampleModal" onclick="set_id(<?php echo $k->id_keluhan ?>)" class="btn btn-danger">Hapus</button></center>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                        <?php } ?>
                                       
                                    </tbody>
                                </table>
                                <a href="<?php echo base_url();?>c_keluhan/tampil_searchkeluhan" class="btn btn-default"><span class="glyphicon glyphicon-hand-left"></span> &nbsp; KEMBALI </a>&nbsp;
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
            </div>
        </div>
    </div>

  <!-- Modal Hapus -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Hapus Data Keluhan</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                            <div class="text-center">
                              <i class="fa fa-trash fa-4x mb-3 animated bounce"></i>
                              <p style="font-size: 15px">Apakah anda yakin ingin menghapus data keluhan ini?</p>
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
            window.location.href =  "<?php echo base_url();?>c_keluhan/hapus_keluhan/"+p_id;
        }
    </script>
