<div class="col-md-12">
  <div class="container">
    <div class="row">

      <div class="card">
        <div class="card-status bg-blue"></div>
        <div class="card-header">
            <h3 class="card-title">Cetak Kartu</h3>
            <div class="card-options">
                <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
            </div>
        </div>
        
        <div class="card-body">

          <div class="container">  
            <h4 class="text-red">Anda Tidak Bisa Mencetak Kartu Ujian, Periksa Kembali Status Biodata &amp; Status Verifikasi Anda <i class="fa fa-times"></i></h4>
          </div>

        </div>

        <div class="card-footer text-right">
            <div class="col-sm-2">
                  <?php
                    echo anchor('user/backend/prosedur', 'Kembali', array('class'=>'btn btn-lg btn-block btn-red btn-square'));
                  ?>
            </div>
        </div>

      </div>   

    </div>
  </div>
</div>

