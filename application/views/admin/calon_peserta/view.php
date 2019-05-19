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

              <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="text-center">NO</th>
                        <th class="text-center">NISN</th>
                        <th>Nama</th>
                        <th class="text-center">Tanggal Daftar</th>
                        <th class="text-center">No Ijazah</th>
                        <th class="text-center">Status Biodata</th>
                        <th class="text-center">Status Verifikasi</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php

                        $no = 1;
                        foreach ($calon_peserta->result() as $row) {

                        // status biodata
                        if ($row->status_biodata == 'lengkap') {
                            $text_bio = '<p class="text-green">Lengkap <i class="fa fa-check" aria-hidden="true"></i></p>';
                        } else {
                            $text_bio = '<p class="text-red">Belum Lengkap <i class="fa fa-times" aria-hidden="true"></i></p>';
                        }

                        // status verifikasi
                        if ($row->status_verifikasi == 'terverifikasi') {
                            $text_verifikasi = '<p class="text-green">Terverifikasi <i class="fa fa-check" aria-hidden="true"></i></p>';
                        } else {
                            $text_verifikasi = '<p class="text-red">Belum Terverifikasi <i class="fa fa-times" aria-hidden="true"></i></p>';
                        }

                            echo "<tr>
                                    <td class='text-center'>$no</td>
                                    <td class='text-center'>$row->nisn</td>
                                    <td>$row->nama</td>
                                    <td class='text-center'>$row->tanggal_daftar</td>
                                    <td class='text-center'>$row->no_ijazah</td>
                                    <td class='text-center'>$text_bio</td>
                                    <td class='text-center'>$text_verifikasi</td>
                                    <td class='text-center'>".anchor('admin/calon_peserta/detail/'.$row->id_peserta,'<p class="btn btn-xs bg-orange"><span class="fa fa-eye"></span></p>', array('title' => 'detail'))."
                                        ".anchor('admin/calon_peserta/edit/'.$row->id_peserta, '<p class="btn btn-xs btn-primary"><span class="fa fa-edit"></span></p>', array('title' => 'edit'))."
                                        ".anchor('admin/calon_peserta/delete/'.$row->id_peserta, '<p class="btn btn-xs btn-danger"><span class="fa fa-times fa fa-white"></span></p>', array('title' => 'delete'))."
                                    </td>
                                 </tr>";
                            $no++;
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

<!-- punya lama -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.0/jquery.dataTables.js"></script> -->
<!-- <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.js"></script> -->

<!-- baru tapi cdn -->
<!-- <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css"> -->

<script src="<?php echo base_url(); ?>assets/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<!-- <script>
        $(document).ready(function() {
            var t = $('#mytable').DataTable( {
                "ajax": '<?php echo site_url('admin/calon_peserta/data'); ?>',
                "order": [[ 1, 'asc' ]],
                "columns": [
                    {
                        "data": null,
                        "width": "50px",
                        "class": "text-center",
                        "orderable": false,
                    },
                    {
                        "data": "nisn",
                        "width": "150px",
                        "class": "text-center"
                    },
                    { 
                        "data": "tanggal_daftar",
                        "width": "100px",
                        "class": "text-center"
                    },
                    { 
                        "data": "no_ijazah",
                        "width": "100px",
                        "class": "text-center"
                    },
                    { 
                        "data": "status_biodata",
                        "width": "100px",
                        "class": "text-center"
                    },
                    { 
                        "data": "status_verifikasi",
                        "width": "120px",
                        "class": "text-center"
                    },
                    { 
                        "data": "aksi",
                        "width": "80px",
                        "class": "text-center"
                    },
                ]
            } );
               
            t.on( 'order.dt search.dt', function () {
                t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                    cell.innerHTML = i+1;
                } );
            } ).draw();
        } );
</script> -->

<script>
    $(document).ready(function() {
        $('#mytable').DataTable( {
            "order": [[ 1, "asc" ]]
        } );
    } );
</script>