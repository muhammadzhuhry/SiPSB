<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Form Edit Calon Peserta</h3>
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
                echo form_open('admin/calon_peserta/edit', 'role="form" class="form-horizontal"');
                echo form_hidden('id_peserta', $calon_peserta['id_peserta']);
            ?>

                <div class="box-body">

                  <h5>Form Data Calon Santri</h5>
                  <hr class="hr-style">  

                  <div class="form-group">
                      <label class="col-sm-2 control-label">NISN</label>

                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $calon_peserta['nisn']; ?>" name="nisn" class="form-control">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Nama</label>

                      <div class="col-sm-5">
                        <input type="text" value="<?php echo $calon_peserta['nama']; ?>" readonly="true" name="nama" class="form-control">
                      </div>
                      <div class="col-sm-4">
                        <p class="text-red">Catatan : Apabila Anda Ingin Merubah Nama, Rubah melalui menu Data Pendaftar.</p>
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Tempat, Tgl Lahir</label>

                      <div class="col-sm-5">
                        <input type="text" value="<?php echo $calon_peserta['tempat_lahir']; ?>" name="tempat_lahir" class="form-control" required placeholder="Tempat Lahir">
                      </div>

                      <div class="col-sm-2">
                        <input type="date" value="<?php echo $calon_peserta['tanggal_lahir']; ?>" name="tanggal_lahir" class="form-control">
                      </div>

                      <div class="col-sm-3">
                        <p class="text-red">Format : bulan - tanggal - tahun </p>
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Alamat</label>

                      <div class="col-sm-9">
                        <textarea class="form-control" name="alamat" rows="3" required placeholder="Masukan Alamat Lengkap Anda*"><?php echo $calon_peserta['alamat']; ?></textarea>
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Asal Sekolah</label>

                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $calon_peserta['asal_sekolah']; ?>" name="asal_sekolah" class="form-control" required placeholder="Masukan Asal Sekolah Anda*">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Alamat Sekolah Asal</label>

                      <div class="col-sm-9">
                        <textarea class="form-control" name="alamat_sekolah_asal" rows="3" required placeholder="Masukan Alamat Asal Sekolah Anda*"><?php echo $calon_peserta['alamat_sekolah_asal']; ?></textarea>
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">No. Ijazah</label>

                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $calon_peserta['no_ijazah']; ?>" name="no_ijazah" class="form-control" required placeholder="Masukan Nomor Ijazah Anda*">
                      </div>
                  </div>

                  <hr class="hr-style">

                  <h5>Form Data Orang Tua</h5>
                  <hr class="hr-style">

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Ayah</label>

                      <div class="col-sm-4">
                        <input type="text" value="<?php echo $calon_peserta['nama_ayah']; ?>" name="nama_ayah" class="form-control" required placeholder="Masukan Nama Ayah*">
                      </div>

                      <div class="col-sm-5">
                        <?php
                          echo form_dropdown('pekerjaan_ayah', array('Pilih Pekerjaan Ayah', 'pns'=> 'PNS', 'swasta'=> 'Swasta', 'tni/polri' => 'TNI / Polri', 'petani/nelayan' => 'Petani / Nelayan', 'buruh' => 'Buruh', 'wiraswasta' => 'Wiraswasta', 'ojek/becak' => 'Tukang Ojek / Becak', 'sopir' => 'Sopir', 'lainnya' => 'Lainnya', '-' => '-'), $calon_peserta['pekerjaan_ayah'], "class='form-control'");
                        ?>
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Ibu</label>

                      <div class="col-sm-4">
                        <input type="text" value="<?php echo $calon_peserta['nama_ibu']; ?>" name="nama_ibu" class="form-control" required placeholder="Masukan Nama Ibu*">
                      </div>

                      <div class="col-sm-5">
                        <?php
                          echo form_dropdown('pekerjaan_ibu', array('Pilih Pekerjaan Ibu', 'pns'=> 'PNS', 'swasta'=> 'Swasta', 'tni/polri' => 'TNI / Polri', 'petani/nelayan' => 'Petani / Nelayan', 'buruh' => 'Buruh', 'wiraswasta' => 'Wiraswasta', 'ojek/becak' => 'Tukang Ojek / Becak', 'sopir' => 'Sopir', 'irt' => 'Ibu Rumah Tangga', 'lainnya' => 'Lainnya', '-' => '-'), $calon_peserta['pekerjaan_ibu'], "class='form-control'");
                        ?>
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Alamat Orang Tua</label>

                      <div class="col-sm-9">
                        <textarea class="form-control" name="alamat_orangtua" rows="3" required placeholder="Masukan Alamat Orangtua Anda*"><?php echo $calon_peserta['alamat_orangtua']; ?></textarea>
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">No. Telp/HP</label>

                      <div class="col-sm-9">
                        <input type="number" value="<?php echo $calon_peserta['no_telepon']; ?>" name="no_telepon" class="form-control" required placeholder="Masukan No Telp/HP orangtua/wali">
                      </div>               
                  </div>
                  <hr class="hr-style">

                  <h5>Form Status Calon Santri</h5>
                  <hr class="hr-style">

                  <?php
                    if ($calon_peserta['status_biodata'] === 'lengkap') {
                      $form_biodata = 'has-success';
                    } else {
                      $form_biodata = 'has-error';
                    }
                  ?>

                  <div class="form-group <?php echo $form_biodata; ?>">
                      <label class="col-sm-2 control-label">Status Biodata</label>

                      <div class="col-sm-9">
                        <?php
                          echo form_dropdown('status_biodata', array('belum_lengkap' => 'Belum Lengkap', 'lengkap' => 'Lengkap'), $calon_peserta['status_biodata'], "class='form-control'");
                        ?>
                      </div>               
                  </div>

                  <?php
                    if ($calon_peserta['status_verifikasi'] === 'terverifikasi') {
                      $form_verifikasi = 'has-success';
                    } else {
                      $form_verifikasi = 'has-error';
                    }
                  ?>

                  <div class="form-group <?php echo $form_verifikasi; ?>">
                      <label class="col-sm-2 control-label">Status Verifikasi</label>

                      <div class="col-sm-9">
                        <?php
                          echo form_dropdown('status_verifikasi', array('belum_terverifikasi' => 'Belum Terverifikasi', 'terverifikasi' => 'Terverifikasi'), $calon_peserta['status_verifikasi'], "class='form-control'");
                        ?>
                      </div>               
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label"></label>

                      <div class="col-sm-1">
                        <button type="submit" name="submit" class="btn btn-primary btn-flat">Simpan</button>
                      </div>

                      <div class="col-sm-1">
                        <?php
                          echo anchor('admin/calon_peserta', 'Kembali', array('class'=>'btn btn-danger btn-flat'));
                        ?>
                      </div>
                  </div>

                </div>
                <!-- /.box-body -->
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>