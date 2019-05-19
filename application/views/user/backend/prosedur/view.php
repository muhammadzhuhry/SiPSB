<div class="col-md-12">
  <div class="container">
    <div class="row">

      <div class="card">
        <div class="card-status bg-blue"></div>
        <div class="card-header">
            <h3 class="card-title">Prosedur</h3>
            <div class="card-options">
                <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
            </div>
        </div>
        
        <div class="card-body">
            
          <h5><b>1. Prosedur Pendaftaran</b></h5>
          <hr class="hr-style">

          <div class="col-md-12 hidden-xs" align="center">
              <img src="<?php echo base_url() ?>assets/image/pendaftaran.png" style="height:640px; width:800px; margin-left: auto; margin-right: auto; vertical-align: middle; margin-bottom: 100px;"  alt="img-pendaftaran" class="img-responsive">
          </div>

          <h5><b>2. Prosedur Verifikasi</b></h5>
          <hr class="hr-style">

          <div class="col-sm-12 hidden-xs">
              <div align="center">
                <img src="<?php echo base_url() ?>assets/image/verifikasi.png" style="height:640px; width:800px; margin-left: auto; margin-right: auto; vertical-align: middle; margin-bottom: 100px;"  alt="img-verifikasi" class="img-responsive">
              </div>

              <div class="alert alert-icon alert-info" role="alert">
                <i class="fe fe-alert-triangle mr-2" aria-hidden="true"></i>
                <p>Perlu di perhatikan, dokumen yang harus anda upload itu: 
                <br>Ijazah Legalisir x1, SKHU Legalisir x1 dan bukti pembayaran. Semuanya boleh dalam bentuk foto/scan/pdf.</p>
                <p>Ketiga dokumen tersebut harus di masukan ke dalam 1 folder dan di compress menjadi .rar atau .zip
                <br> dengan nama (nisn+nama_anda_tanpa_spasi).zip</p>
                <p>Sebagai contoh: <b>20180000001+Muhammad_Athallah_Zhuhry.rar</b></p> 
              </div>
          </div>

          <h5><b>3. Prosedur Seleksi</b></h5>
          <hr class="hr-style">

          <div class="col-sm-12 hidden-xs">
              <div align="center">
               <img src="<?php echo base_url() ?>assets/image/seleksi.png" style="height:640px; width:800px; margin-left: auto; margin-right: auto; vertical-align: middle; margin-bottom: 100px;"  alt="img-seleksi" class="img-responsive">
              </div>

              <div class="alert alert-icon alert-info" role="alert">
                <i class="fe fe-bell mr-2" aria-hidden="true"></i>
                <p>Untuk Pemberitahuan lanjutan, selalu cek pada menu Pengumuman.</p>
              </div>
          </div>

        </div>

        <div class="card-footer text-right">
            <div class="col-sm-2">
                <?php
                  echo anchor('user/backend/form_biodata', 'Next', array('class'=>'btn btn-lg btn-block btn-cyan btn-square'));
                ?>
            </div>
        </div>

      </div>   

    </div>
  </div>
</div>

