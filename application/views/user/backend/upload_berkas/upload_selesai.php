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
        
        <div class="card-body">

          <div class="container">  
            <h4 class="text-lime">Arsip Anda telah Terupload &amp; Sedang dalam Proses Verifikasi <i class="fa fa-refresh fa-spin fa-1x fa-fw"></i></h4>
          </div>

        </div>

        <div class="card-footer text-right">
            <div class="col-sm-2">
                  <?php
                    echo anchor('user/backend/cetak_kartu', 'Next', array('class'=>'btn btn-lg btn-block btn-cyan btn-square'));
                  ?>
            </div>
        </div>

      </div>   

    </div>
  </div>
</div>

