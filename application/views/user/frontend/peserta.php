<!-- Start Table-peserta -->
<section class="table-peserta margin-top-100 margin-bottom-100">
        
    <div class="container">
        <div class="row">
                
                <h3>Data Calon Peserta</h3>

                <hr class="hr-style">

                <table id="tabel-calonpeserta" class="table table-striped table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">NO</th>
                            <th class="text-center">NISN</th>
                            <th>Nama</th>
                            <th class="text-center">Tanggal Daftar</th>
                            <th class="text-center">No Ijazah</th>
                            <th class="text-center">Status Biodata</th>
                            <th class="text-center">Status Verifikasi</th>                     
                        </tr>
                    </thead>

                    <tbody>

                        <?php
                            
                            $no = 1;
                            foreach ($calon_peserta->result() as $row) {

                                if ($row->status_biodata === 'lengkap') {
                                    $colortext_bio  = 'class="text-center text-green"';
                                    $status_biodata = ' Lengkap <i class="fa fa-check" aria-hidden="true"></i>';
                                } else {
                                    $colortext_bio  = 'class="text-center text-red"';
                                    $status_biodata = 'Belum Lengkap <i class="fa fa-times" aria-hidden="true"></i></p>';
                                }

                                if ($row->status_verifikasi === 'terverifikasi') {
                                    $colortext          = 'class="text-center text-green"';
                                    $status_verifikasi  = 'Terverifikasi <i class="fa fa-check" aria-hidden="true"></i>';
                                } else {
                                    $colortext          = 'class="text-center text-red"';
                                    $status_verifikasi  = 'Belum Terverifikasi <i class="fa fa-times" aria-hidden="true"></i></p>';
                                }

                                echo "<tr>
                                        <td class='text-center'>$no</td>
                                        <td class='text-center'>$row->nisn</td>
                                        <td>$row->nama</td>
                                        <td class='text-center'>$row->tanggal_daftar</td>
                                        <td class='text-center'>$row->no_ijazah</td>
                                        <td $colortext_bio>$status_biodata</td>
                                        <td $colortext>$status_verifikasi</td>
                                     </tr>";
                                $no++;
                            }
                        ?>
                        
                    </tbody>
                </table>

        </div>
    </div>

    <div class="container">
        <div class="row">
                
                <h3>Data Peserta</h3>

                <hr class="hr-style">

                <table id="tabel-peserta" class="table table-striped table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">NO</th>
                            <th class="text-center">No. Peserta</th>
                            <th class="text-center">NISN</th>
                            <th>Nama</th>
                            <th class="text-center">No Ijazah</th>
                            <th class="text-center">Status Kelulusan</th>                   
                        </tr>
                    </thead>

                    <tbody>

                        <?php
                            
                            $no_peserta = 1;
                            foreach ($peserta->result() as $row_peserta) {

                                if ($row_peserta->status_kelulusan === 'lulus') {
                                    $colortext        = 'class="text-center text-green"';
                                    $status_kelulusan = ' Lulus <i class="fa fa-check" aria-hidden="true"></i>';
                                } elseif ($row_peserta->status_kelulusan === 'tidak_lulus') {
                                    $colortext        = 'class="text-center text-red"';
                                    $status_kelulusan = ' Tidak Lulus <i class="fa fa-times" aria-hidden="true"></i>';
                                } elseif ($row_peserta->status_kelulusan === 'didiskualifikasi') {
                                    $colortext        = 'class="text-center text-red"';
                                    $status_kelulusan = ' Didiskualfikasi <i class="fa fa-times" aria-hidden="true"></i>';
                                } else {
                                    $colortext        = 'class="text-center text-yellow"';
                                    $status_kelulusan = ' Belum mengikuti Ujian <i class="fa fa-info" aria-hidden="true"></i>';
                                }

                                echo "<tr>
                                        <td class='text-center'>$no_peserta</td>
                                        <td class='text-center'>$row_peserta->no_peserta</td>
                                        <td class='text-center'>$row_peserta->nisn</td>
                                        <td>$row_peserta->nama</td>
                                        <td class='text-center'>$row_peserta->no_ijazah</td>
                                        <td $colortext>$status_kelulusan</td>
                                     </tr>";
                                $no_peserta++;
                            }
                        ?>
                        
                    </tbody>
                </table>

        </div>
    </div>

</section>
<!-- /End Table-peserta -->

<script src="<?php echo base_url(); ?>assets/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<script>
    $(document).ready(function() {
        $('#tabel-calonpeserta').DataTable( {
            "order": [[ 1, "asc" ]]
        } );
    } );
    $(document).ready(function() {
        $('#tabel-peserta').DataTable( {
            "order": [[ 1, "asc" ]]
        } );
    } );
</script>