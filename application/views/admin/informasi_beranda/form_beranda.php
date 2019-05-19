<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header  with-border">
              <h3 class="box-title">Form Informasi Beranda</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">

              <?php
                echo form_open('admin/informasi_beranda/edit', 'role="form" class="form-horizontal"');
                echo form_hidden('id_beranda', $beranda['id_beranda']);
              ?>
                    <textarea id="form_beranda" name="form_beranda" rows="10" cols="80">
                        <?php echo $beranda['beranda']; ?>
                    </textarea>

                    <br>

                    <div class="form-group">

                      <div class="col-sm-1">
                        <!-- <button class="btn btn-primary btn-flat" data-toggle="modal" data-target="#myModal">Simpan</button> -->
                        <button type="submit" name="submit" class="btn btn-primary btn-flat">Simpan</button>
                      </div>

                    </div>

              </form>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>

<script src="<?php echo base_url() ?>assets/adminlte/bower_components/ckeditor/ckeditor.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('form_beranda')
    //bootstrap WYSIHTML5 - text editor
    //$('.textarea').wysihtml5()
  })
</script>

<!-- Modal -->
<!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <?php
                //echo form_open('admin/informasi_beranda/edit', 'role="form" class="form-horizontal"');
            ?>
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Unlock Form</i></h4>
            </div>
            <div class="modal-body">

              <div class="input-group">
                <input type="password" name="password" class="form-control">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
              </div>

              <p class="text-red">Masukan Pasword untuk Mengupdate Informasi Beranda</p>
  
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div> -->