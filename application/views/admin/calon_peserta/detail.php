<section class="content">
    <div class="row">
        
        <div class="col-xs-6">

          <div class="box box-primary">
            <div class="box-header with-border">
                <h5>Form Detail Biodata <?php echo $calon_peserta['nama']; ?></h5> 
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <!-- /.box-header -->

                <div class="box-body">

                  <?php
                    if ($calon_peserta['status_biodata'] === 'lengkap') {
                      $status_biodata = ' class="text-green">Lengkap <i class="fa fa-check" aria-hidden="true"></i>';
                    } else {
                      $status_biodata = ' class="text-red">Belum Lengkap <i class="fa fa-times" aria-hidden="true"></i></p>';
                    }
                  ?>

                  <?php
                    if ($calon_peserta['status_verifikasi'] === 'terverifikasi') {
                      $status_verifikasi = ' class="text-green">Terverifikasi <i class="fa fa-check" aria-hidden="true"></i></p>';
                    } else {
                      $status_verifikasi = ' class="text-red">Belum Terverifikasi <i class="fa fa-times" aria-hidden="true"></i></p>';
                    }
                  ?>

                  <?php

                    // Ayah
                    if ($calon_peserta['pekerjaan_ayah']  === 'pns') {
                      $pekerjaan_ayah = 'PNS';
                    } elseif ($calon_peserta['pekerjaan_ayah']  === 'swasta') {
                      $pekerjaan_ayah = 'Swasta';
                    } elseif ($calon_peserta['pekerjaan_ayah']  === 'tni/polri') {
                      $pekerjaan_ayah = 'TNI / Polri';
                    } elseif ($calon_peserta['pekerjaan_ayah']  === 'petani/nelayan') {
                      $pekerjaan_ayah = 'Petani / Nelayan';
                    } elseif ($calon_peserta['pekerjaan_ayah']  === 'buruh') {
                      $pekerjaan_ayah = 'Buruh';
                    } elseif ($calon_peserta['pekerjaan_ayah']  === 'wiraswasta') {
                      $pekerjaan_ayah = 'Wiraswasta';
                    } elseif ($calon_peserta['pekerjaan_ayah']  === 'ojek/becak') {
                      $pekerjaan_ayah = 'Ojek / Becak';
                    } elseif ($calon_peserta['pekerjaan_ayah']  === 'sopir') {
                      $pekerjaan_ayah = 'Sopir';
                    } elseif ($calon_peserta['pekerjaan_ayah']  === 'lainnya') {
                      $pekerjaan_ayah = 'Lainnya';
                    } elseif ($calon_peserta['pekerjaan_ayah']  === '-') {
                      $pekerjaan_ayah = '-';
                    } 

                    //Ibu
                    if ($calon_peserta['pekerjaan_ibu']  === 'pns') {
                      $pekerjaan_ibu = 'PNS';
                    } elseif ($calon_peserta['pekerjaan_ibu']  === 'swasta') {
                      $pekerjaan_ibu = 'Swasta';
                    } elseif ($calon_peserta['pekerjaan_ibu']  === 'tni/polri') {
                      $pekerjaan_ibu = 'TNI / Polri';
                    } elseif ($calon_peserta['pekerjaan_ibu']  === 'petani/nelayan') {
                      $pekerjaan_ibu = 'Petani / Nelayan';
                    } elseif ($calon_peserta['pekerjaan_ibu']  === 'buruh') {
                      $pekerjaan_ibu = 'Buruh';
                    } elseif ($calon_peserta['pekerjaan_ibu']  === 'wiraswasta') {
                      $pekerjaan_ibu = 'Wiraswasta';
                    } elseif ($calon_peserta['pekerjaan_ibu']  === 'ojek/becak') {
                      $pekerjaan_ibu = 'Ojek / Becak';
                    } elseif ($calon_peserta['pekerjaan_ibu']  === 'sopir') {
                      $pekerjaan_ibu = 'Sopir';
                    } elseif ($calon_peserta['pekerjaan_ibu']  === 'lainnya') {
                      $pekerjaan_ibu = 'Lainnya';
                    } elseif ($calon_peserta['pekerjaan_ibu'] === 'irt') {
                      $pekerjaan_ibu = 'Ibu Rumah Tangga';
                    } elseif ($calon_peserta['pekerjaan_ibu']  === '-') {
                      $pekerjaan_ibu = '-';
                    } 
                  ?>

                  <table class="table-striped" align="center">
                    <tr>
                      <td><h5>NISN : <b><?php echo $calon_peserta['nisn']; ?></b></h5></td>
                    </tr>
                    <tr>
                      <td><h5>Nama : <b><?php echo $calon_peserta['nama']; ?></b></h5></td>
                    </tr>
                    <tr>
                      <td><h5>Tanggal Daftar : <b><?php echo $calon_peserta['tanggal_daftar']; ?></b></h5></td>
                    </tr>
                    <tr>
                      <td><h5>Tempat Lahir : <b><?php echo $calon_peserta['tempat_lahir']; ?></b></h5></td>
                    </tr>
                    <tr>
                      <td><h5>Tanggal Lahir : <b><?php echo $calon_peserta['tanggal_lahir']; ?></b></h5></td>
                    </tr>
                    <tr>
                      <td><h5>Alamat : <b><?php echo $calon_peserta['alamat']; ?></b></h5></td>
                    </tr>
                    <tr>
                      <td><h5>Asal Sekolah : <b><?php echo $calon_peserta['asal_sekolah']; ?></b></h5></td>
                    </tr>
                    <tr>
                      <td><h5>Alamat Sekolah Asal : <b><?php echo $calon_peserta['alamat_sekolah_asal']; ?></b></h5></td>
                    </tr>
                    <tr>
                      <td><h5>No. Ijazah : <b><?php echo $calon_peserta['no_ijazah']; ?></b></h5></td>
                    </tr>
                    <tr>
                      <td><h5>Status Biodata : <b<?php echo $status_biodata; ?></b></h5></td>
                    </tr>
                    <tr>
                      <td><h5>Status Verifikasi : <b<?php echo $status_verifikasi; ?></b></h5></td>
                    </tr>
                    <tr>
                      <td><h5>Nama Ayah : <b><?php echo $calon_peserta['nama_ayah']; ?></b></h5></td>
                    </tr>
                    <tr>
                      <td><h5>Pekerjaan Ayah : <b><?php echo $pekerjaan_ayah; ?></b></h5></td>
                    </tr>
                    <tr>
                      <td><h5>Nama Ibu : <b><?php echo $calon_peserta['nama_ibu']; ?></b></h5></td>
                    </tr>
                    <tr>
                      <td><h5>Pekerjaan Ibu : <b><?php echo $pekerjaan_ibu; ?></b></h5></td>
                    </tr>
                    <tr>
                      <td><h5>Alamat Orangtua : <b><?php echo $calon_peserta['alamat_orangtua']; ?></b></h5></td>
                    </tr>
                    <tr>
                      <td><h5>No. Telp/HP : <b><?php echo $calon_peserta['no_telepon']; ?></b></h5></td>
                    </tr>
                  </table>

                </div>
                <!-- /.box-body -->
          </div>
          <?php
            echo anchor('admin/calon_peserta', 'Kembali', array('class'=>'btn btn-danger btn-flat'));
          ?>
          <!-- /.box -->
        </div>
        <!-- /.col -->

    </div>
    <!-- /.row -->
</section>