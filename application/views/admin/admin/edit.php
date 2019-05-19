<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Form Tambah Admin</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
                echo form_open('admin/admin/edit', 'role="form" class="form-horizontal"');
                echo form_hidden('id_admin', $admin['id_admin']);
            ?>

                <div class="box-body">

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Nama Lengkap</label>

                      <div class="col-sm-9">
                        <input type="text" name="nama_lengkap" value="<?php echo $admin['nama_lengkap']; ?>" class="form-control" placeholder="Masukkan Nama Lengkap Anda*">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Username</label>

                      
                      <div class="col-sm-9">
                        <input type="text" name="username" value="<?php echo $admin['username']; ?>" class="form-control" placeholder="Masukkan Username Anda*">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label"></label>

                      <div class="col-sm-1">
                        <button type="submit" name="submit" class="btn btn-primary btn-flat">Simpan</button>
                      </div>

                      <div class="col-sm-1">
                        <?php
                          echo anchor('admin/admin', 'Kembali', array('class'=>'btn btn-danger btn-flat'));
                        ?>
                      </div>
                  </div>

                </div>
                <!-- /.box-body -->
            </form>
          </div>
          <p class="text-red">Password tidak bisa dirubah karena sudah di enkripsi menggunakan hash md5.</p>
          <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
