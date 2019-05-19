<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Form Edit Peserta</h3>
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
                echo form_open('admin/peserta/edit', 'role="form" class="form-horizontal"');
            ?>

                <div class="box-body">

                  <h5>Form Data Calon Santri</h5>
                  <hr class="hr-style">  

                  <div class="form-group">
                      <label class="col-sm-2 control-label">No Peserta</label>

                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $peserta['no_peserta']; ?>" readonly="true" name="no_peserta" class="form-control">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">NISN</label>

                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $peserta['nisn']; ?>" readonly="true" name="nisn" class="form-control">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Nama</label>

                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $peserta['nama']; ?>" readonly="true" name="nama" class="form-control">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Tempat, Tgl Lahir</label>

                      <div class="col-sm-5">
                        <input type="text" value="<?php echo $peserta['tempat_lahir']; ?>" readonly="true" name="tempat_lahir" class="form-control" required placeholder="Tempat Lahir">
                      </div>

                      <div class="col-sm-2">
                        <input type="date" value="<?php echo $peserta['tanggal_lahir']; ?>" readonly="true" name="tanggal_lahir" class="form-control">
                      </div>

                      <div class="col-sm-3">
                        <p class="text-red">Format : bulan - tanggal - tahun </p>
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Alamat</label>

                      <div class="col-sm-9">
                        <textarea class="form-control" name="alamat" readonly="true" rows="3" required placeholder="Masukan Alamat Lengkap Anda*"><?php echo $peserta['alamat']; ?></textarea>
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Asal Sekolah</label>

                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $peserta['asal_sekolah']; ?>" readonly="true" name="asal_sekolah" class="form-control" required placeholder="Masukan Asal Sekolah Anda*">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Alamat Sekolah Asal</label>

                      <div class="col-sm-9">
                        <textarea class="form-control" name="alamat_sekolah_asal" rows="3" readonly="true" required placeholder="Masukan Alamat Asal Sekolah Anda*"><?php echo $peserta['alamat_sekolah_asal']; ?></textarea>
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">No. Ijazah</label>

                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $peserta['no_ijazah']; ?>" readonly="true" name="no_ijazah" class="form-control" required placeholder="Masukan Nomor Ijazah Anda*">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Ruangan</label>

                      <div class="col-sm-5">
                        <?php
                          echo cmb_dinamis('ruangan', 'tbl_ruangan', 'nama_ruangan', 'kd_ruangan', $peserta['kd_ruangan']);
                        ?>
                      </div>
                  </div>

                  <hr class="hr-style">

                  <?php
                    if ($peserta['status_kelulusan'] === 'lulus') {
                      $form = 'has-success';
                    } elseif ($peserta['status_kelulusan'] === 'tidak_lulus') {
                      $form = 'has-error';
                    } elseif ($peserta['status_kelulusan'] === 'didiskualifikasi') {
                      $form = 'has-error';
                    } else {
                      $form = 'has-warning';
                    }
                  ?>

                  <div class="form-group <?php echo $form; ?>">
                      <label class="col-sm-2 control-label">Status Kelulusan</label>

                      <div class="col-sm-9">
                        <?php
                          echo form_dropdown('status_kelulusan', array('lulus' => 'Lulus', 'tidak_lulus' => 'Tidak Lulus', 'didiskualifikasi' => 'Didiskualifikasi', 'belum_mengikuti_ujian' => 'Belum mengikuti Ujian'), $peserta['status_kelulusan'], "class='form-control'");
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
                          echo anchor('admin/peserta', 'Kembali', array('class'=>'btn btn-danger btn-flat'));
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