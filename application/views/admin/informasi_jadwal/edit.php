<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" type="text/css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script type="text/javascript">
   $(function() {
     $( "#input" ).datepicker({
     changeMonth: true,
     changeYear: true
     });
   });
</script>

<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Form Edit Jadwal Kegiatan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
                echo form_open('admin/informasi_jadwal/edit', 'role="form" class="form-horizontal"');
                echo form_hidden('id_tes', $tes['id_tes']);
            ?>

                <div class="box-body">

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Jenis Kegiatan</label>

                      <div class="col-sm-9">
                        <input type="text" name="jenis_kegiatan" value="<?php echo $tes['jenis_kegiatan']; ?>" class="form-control" placeholder="Masukkan Jenis Kegiatan*">
                      </div>
                  </div>

                  <!-- <div class="form-group">
                      <label class="col-sm-2 control-label">Tanggal</label>

                      
                      <div class="col-sm-2">
                        <input type="date" name="tanggal_tes" class="form-control" value="<?php echo $tes['tanggal']; ?>">
                      </div>

                      <div class="col-sm-3">
                        <p class="text-red">Format : bulan - tanggal - tahun </p>
                      </div>
                  </div> -->
                  
                  <div class="form-group">
                      <label class="col-sm-2 control-label">Tanggal</label>

                      
                      <div class="col-sm-2">
                        <div class="input-group">
                          <input type="text" id="input" name="tanggal_tes" class="form-control" value="<?php echo $tes['tanggal']; ?>" />
                          <span class="input-group-addon">
                            <i class="glyphicon glyphicon-calendar"></i>
                          </span>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <p class="text-red">Note : klik textbox disamping untuk memunculkan kalender! </p>
                      </div>

                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label"></label>

                      <div class="col-sm-1">
                        <button type="submit" name="submit" class="btn btn-primary btn-flat">Simpan</button>
                      </div>

                      <div class="col-sm-1">
                        <?php
                          echo anchor('admin/informasi_jadwal', 'Kembali', array('class'=>'btn btn-danger btn-flat'));
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
