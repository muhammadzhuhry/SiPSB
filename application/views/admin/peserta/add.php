<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Form Tambah Peserta</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
                echo form_open('admin/peserta/add_data', 'role="form" class="form-horizontal"');
                //echo form_hidden('id_peserta', onKeyUp='auto_complete();');
            ?>

                <div class="box-body">

                  <h5>Form Data Calon Santri</h5>
                  <hr class="hr-style">

                  <div class="form-group">

                      <div class="col-sm-9">
                        <input type="hidden" name="id_peserta" id="id_peserta" readonly onKeyUp="auto_complete()" class="form-control">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">No Peserta</label>

                      <div class="col-sm-9">
                        <input type="text" name="no_peserta" readonly value="<?php echo auto_nopeserta(); ?>" class="form-control" required placeholder="Masukan NISN*">
                      </div>
                  </div>     

                  <div class="form-group">
                      <label class="col-sm-2 control-label">NISN</label>

                      <div class="col-sm-9">
                        <input type="text" name="nisn" id="nisn" onKeyUp="auto_complete()" class="form-control" required placeholder="Masukan NISN*">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Nama</label>

                      <div class="col-sm-9">
                        <input type="text" name="nama" id="nama" readonly="true" class="form-control" required placeholder="Masukan Nama Lengkap*">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Tempat, Tgl Lahir</label>

                      <div class="col-sm-5">
                        <input type="text" name="tempat_lahir" readonly="true" id="tempat_lahir" class="form-control" required placeholder="Tempat Lahir">
                      </div>

                      <div class="col-sm-2">
                        <input type="date" name="tanggal_lahir" readonly="true" id="tanggal_lahir" class="form-control">
                      </div>

                      <div class="col-sm-3">
                        <p class="text-red">Format :  tanggal - bulan - tahun </p>
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Alamat</label>

                      <div class="col-sm-9">
                        <textarea class="form-control" name="alamat" readonly="true" rows="3" id="alamat" required placeholder="Masukan Alamat Lengkap*"></textarea>
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Asal Sekolah</label>

                      <div class="col-sm-9">
                        <input type="text" name="asal_sekolah" readonly="true" id="asal_sekolah" class="form-control" required placeholder="Masukan Asal Sekolah*">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Alamat Sekolah Asal</label>

                      <div class="col-sm-9">
                        <textarea class="form-control" name="alamat_sekolah_asal" readonly="true" rows="3" id="alamat_sekolah_asal" required placeholder="Masukan Alamat Asal Sekolah*"></textarea>
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">No. Ijazah</label>

                      <div class="col-sm-9">
                        <input type="text" name="no_ijazah" id="no_ijazah" readonly="true" class="form-control" required placeholder="Masukan Nomor Ijazah*">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Ruangan</label>

                      <div class="col-sm-5">
                        <?php
                          echo cmb_dinamis('ruangan', 'tbl_ruangan', 'nama_ruangan', 'kd_ruangan');
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
<!-- Pake jquery versi 1 klo diatasnya bakal error -->
<script src="<?php echo base_url() ?>assets/user/frontend/js/lib/jquery.min.js"></script>
<script type="text/javascript">
  function auto_complete(){
      var nisn = $("#nisn").val();
      $.ajax({
        url: '<?php echo base_url() ?>admin/peserta/form_peserta',
        data:"nisn="+nisn ,
      }).success(function (data) {
        var json = data,
        obj = JSON.parse(json);
        // data peserta
        $('#id_peserta').val(obj.id_peserta);
        $('#nama').val(obj.nama);
        $('#tempat_lahir').val(obj.tempat_lahir);
        $('#tanggal_lahir').val(obj.tanggal_lahir);
        $('#alamat').val(obj.alamat);
        $('#asal_sekolah').val(obj.asal_sekolah);
        $('#alamat_sekolah_asal').val(obj.alamat_sekolah_asal);
        $('#no_ijazah').val(obj.no_ijazah);
      });
  }
</script>
