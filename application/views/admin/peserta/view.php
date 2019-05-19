<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header  with-border">
              <h3 class="box-title">Data Calon Peserta</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <?php
                echo anchor('admin/peserta/add_data', '<button class="btn bg-navy btn-flat margin">Tambah Data</button>');
            ?>

              <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                
                <thead>
                    <tr>
                        <th class="text-center">No Peserta</th>
                        <th class="text-center">NISN</th>
                        <th>Nama</th>
                        <th class="text-center">No Ijazah</th>
                        <th class="text-center">Kode Ruangan</th>
                        <th class="text-center">Status kelulusan</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody>

                        <?php

                            foreach ($peserta->result() as $row) {

                                if ($row->status_kelulusan === 'lulus') {
                                    $colortext        = 'class="text-center text-green"';
                                    $status_kelulusan = ' Lulus <i class="fa fa-check" aria-hidden="true"></i>';
                                } elseif ($row->status_kelulusan === 'tidak_lulus') {
                                    $colortext        = 'class="text-center text-red"';
                                    $status_kelulusan = ' Tidak Lulus <i class="fa fa-times" aria-hidden="true"></i>';
                                } elseif ($row->status_kelulusan === 'didiskualifikasi') {
                                    $colortext        = 'class="text-center text-red"';
                                    $status_kelulusan = ' Didiskualfikasi <i class="fa fa-times" aria-hidden="true"></i>';
                                } else {
                                    $colortext        = 'class="text-center text-yellow"';
                                    $status_kelulusan = ' Belum mengikuti Ujian <i class="fa fa-info" aria-hidden="true"></i>';
                                }

                                echo "<tr>
                                        <td class='text-center'>$row->no_peserta</td>
                                        <td class='text-center'>$row->nisn</td>
                                        <td>$row->nama</td>
                                        <td class='text-center'>$row->no_ijazah</td>
                                        <td class='text-center'>$row->kd_ruangan</td>
                                        <td $colortext>$status_kelulusan</td>
                                        <td class='text-center'>";
                                            echo anchor('admin/peserta/edit/'.$row->id_peserta, '<button class="btn btn-xs btn-primary" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>');
                                            echo " ";
                                            echo anchor('admin/peserta/delete/'.$row->id_peserta, '<button class="btn btn-xs btn-danger" data-placement="top" title="Delete"><i class="fa fa-times fa fa-white"></i></button>');        
                                echo   "</td>
                                     </tr>";
                            }
                        ?>
                        
                    </tbody>

              </table>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>

<script src="<?php echo base_url(); ?>assets/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<script>
    $(document).ready(function() {
        $('#mytable').DataTable( {
            "order": [[ 1, "asc" ]]
        } );
    } );
</script>