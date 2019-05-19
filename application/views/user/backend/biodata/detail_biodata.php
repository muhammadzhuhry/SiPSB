<div class="row row-cards row-deck">

  
    <div class="container">
      <div class="row">

      <div class="col-md-6">

        <div class="card">
          <div class="card-status bg-blue"></div>
          <div class="card-header">
              <h3 class="card-title">Detail Data Calon Santri</h3>
              <div class="card-options">
                  <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                  <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
              </div>
          </div>

          <div class="card-body">

              <?php
                  if ($calon_peserta['status_biodata'] === 'lengkap') {
                      $status_biodata = ' class="text-lime">Lengkap <i class="fa fa-check" aria-hidden="true"></i>';
                  } else {
                      $status_biodata = ' class="text-red">Belum Lengkap <i class="fa fa-times" aria-hidden="true"></i></p>';
                  }
              ?>

              <?php
                  if ($calon_peserta['status_verifikasi'] === 'terverifikasi') {
                      $status_verifikasi = ' class="text-lime">Terverifikasi <i class="fa fa-check" aria-hidden="true"></i></p>';
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
                    <td><p>NISN : <b><?php echo $calon_peserta['nisn']; ?></b></p></td>
                </tr>
                <tr>
                    <td><p>Nama : <b><?php echo $calon_peserta['nama']; ?></b></p></td>
                </tr>
                <tr>
                    <td><p>Tanggal Daftar : <b><?php echo $calon_peserta['tanggal_daftar']; ?></b></p></td>
                </tr>
                <tr>
                    <td><p>Tempat Lahir : <b><?php echo $calon_peserta['tempat_lahir']; ?></b></p></td>
                </tr>
                <tr>
                    <td><p>Tanggal Lahir : <b><?php echo $calon_peserta['tanggal_lahir']; ?></b></p></td>
                </tr>
                <tr>
                    <td><p>Alamat : <b><?php echo $calon_peserta['alamat']; ?></b></p></td>
                </tr>
                <tr>
                    <td><p>Asal Sekolah : <b><?php echo $calon_peserta['asal_sekolah']; ?></b></p></td>
                </tr>
                <tr>
                    <td><p>Alamat Sekolah Asal : <b><?php echo $calon_peserta['alamat_sekolah_asal']; ?></b></p></td>
                </tr>
                <tr>
                    <td><p>No. Ijazah : <b><?php echo $calon_peserta['no_ijazah']; ?></b></p></td>
                </tr>
                <tr>
                    <td><p>Status Biodata : <b <?php echo $status_biodata; ?></b></p></td>
                </tr>
                <tr>
                    <td><p>Status Verifikasi : <b <?php echo $status_verifikasi; ?></b></p></td>
                </tr>      
            </table>

          </div>

        </div>

      </div>

      <div class="col-md-6">

        <div class="card">
          <div class="card-status bg-blue"></div>
          <div class="card-header">
              <h3 class="card-title">Data Orang Tua Calon Santri</h3>
              <div class="card-options">
                  <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                  <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
              </div>
          </div>

          <div class="card-body">

            <table class="table-striped" align="center">
               <tr>
                  <td><p>Nama Ayah : <b><?php echo $calon_peserta['nama_ayah']; ?></b></p></td>
                </tr>
                <tr>
                  <td><p>Pekerjaan Ayah : <b><?php echo $pekerjaan_ayah; ?></b></p></td>
                </tr>
                <tr>
                  <td><p>Nama Ibu : <b><?php echo $calon_peserta['nama_ibu']; ?></b></p></td>
                </tr>
                <tr>
                  <td><p>Pekerjaan Ibu : <b><?php echo $pekerjaan_ibu; ?></b></p></td>
                </tr>
                <tr>
                  <td><p>Alamat Orangtua : <b><?php echo $calon_peserta['alamat_orangtua']; ?></b></p></td>
                </tr>
                <tr>
                  <td><p>No. Telp/HP : <b><?php echo $calon_peserta['no_telepon']; ?></b></p></td>
                </tr>

            </table>

          </div>

        </div>

        <div class="alert alert-icon alert-warning" role="alert">
            <i class="fe fe-alert-triangle mr-2" aria-hidden="true"></i>
             <p>Apabila ada data yang salah / tidak sesuai dengan data yang sesungguhnya, segera hubungi admin.</p>
        </div>
        
      </div>

    </div>
  </div>



</div>

