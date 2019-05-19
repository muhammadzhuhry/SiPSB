<!-- Start Table-jadwal -->
<section class="table-jadwal margin-top-100 margin-bottom-100">
        
    <div class="container">
        <div class="row">
                
                <h3>Daftar Jadwal</h3>

                <hr>

                <table id="tabel-jadwal" class="table table-striped table-bordered table-hover" width="100%" cellspacing="0">

                    <thead>
                        <tr>
                            <th class="text-center">NO</th>
                            <th class="text-center">Tanggal</th>
                            <th>Kegiatan / Jadwal</th>                  
                        </tr>
                    </thead>

                    <tbody>
                        <?php

                            $no=1;
                            foreach ($jadwal->result() as $row) {
                                $tgl_jadwal = $row->tanggal."/".$row->bulan."/".$row->tahun;
                                echo "<tr>
                                        <td class='text-center'>$no</td>
                                        <td class='text-center'>$tgl_jadwal</td>
                                        <td>$row->jenis_kegiatan</td>
                                     </tr>";
                                $no++;
                            }

                        ?>
                    </tbody>

                </table>

        </div>
    </div>

</section>
<!-- /End Table-jadwal -->

<script src="<?php echo base_url(); ?>assets/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<script>
    $(document).ready(function() {
        $('#tabel-jadwal').DataTable( {
            "order": [[ 1, "asc" ]]
        } );
    } );
</script>