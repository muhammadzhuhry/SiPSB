<div class="col-md-12">
  <div class="container">
    <div class="row">

      <div class="card">
        <div class="card-status bg-blue"></div>
        <div class="card-header">
            <h3 class="card-title">Form Upload Berkas</h3>
            <div class="card-options">
                <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
            </div>
        </div>

        <?php 
          echo form_open_multipart('user/backend/upload_berkas/do_upload', 'role="form" class="form-horizontal"');
        ?>
        
        <div class="card-body">
            
            <div class="form-group">
                      <label class="col-sm-2 control-label">Upload Berkas</label>

                      <div class="col-sm-5">
                        <input type="file" name="berkas">
                      </div>

            </div> 

        </div>

        <div class="card-footer text-right">
            <div class="row gutters-xs">
              <div class="col-sm-2">
                  <button type="submit" name="submit" class="btn btn-lg btn-block btn-cyan btn-square">Upload</button>
              </div>

              <div class="col-sm-2">
                  <?php
                    echo anchor('user/backend/rekening', 'Kembali', array('class'=>'btn btn-lg btn-block btn-danger btn-square'));
                  ?>
              </div>
            </div>
          </div>

        </form>

      </div>

      <div class="col-md-12 alert alert-icon alert-warning" role="alert">
          <i class="fe fe-alert-triangle mr-2" aria-hidden="true"></i>
          <p>Perlu di perhatikan, dokumen yang harus anda upload itu: 
          <br>Ijazah Legalisir x1, SKHU Legalisir x1 dan bukti pembayaran. Semuanya boleh dalam bentuk foto/scan/pdf.</p>
          <p>Ketiga dokumen tersebut harus di masukan ke dalam 1 folder dan di compress menjadi .rar atau .zip
          <br> dengan nama (nisn+nama_anda_tanpa_spasi).zip</p>
          <p>Sebagai contoh: <b>20180000001+Muhammad_Athallah_Zhuhry.zip</b></p> 
      </div> 

    </div>
  </div>
</div>

