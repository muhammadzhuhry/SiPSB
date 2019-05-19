<!-- Main content -->
<section class="content">

      <!-- Small boxes (Stat box) -->
      <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo $admin; ?></h3>

                  <p>Admin</p>
                </div>
                <div class="icon">
                  <i class="fa fa-key"></i>
                </div>
                <a href="<?php echo site_url('admin/admin') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php echo $pendaftar; ?></h3>

                  <p>Pendaftar</p>
                </div>
                <div class="icon">
                  <i class="fa fa-address-book"></i>
                </div>
                <a href="<?php echo site_url('admin/pendaftaran') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php echo $calon['hasil']; ?></h3>

                  <p>Calon Peserta</p>
                </div>
                <div class="icon">
                  <i class="fa fa-users"></i>
                </div>
                <a href="<?php echo site_url('admin/calon_peserta') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $peserta['hasil']; ?></h3>

                  <p>Peserta</p>
                </div>
                <div class="icon">
                  <i class="fa fa-user-o"></i>
                </div>
                <a href="<?php echo site_url('admin/peserta') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->

      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-sm-12">
          
          <div class="box box-primary">

            <?php
              foreach ($grafik->result() as $row) {
                $tahun[] = $row->tahun_daftar;
                $hasil[] = (float) $row->hasil;
              }
            ?>

            <div class="box-header with-border">
              <h3 class="box-title">Grafik Peserta</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="canvas" width="1000" height="280"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>  

        </div>
      </div>
</section>
<!-- /.content -->

<!--Load chart js-->
<script type="text/javascript" src="<?php echo base_url().'assets/adminlte/bower_components/chart.js/chart.min.js'?>"></script>
<script>
 
    var lineChartData = {
                labels : <?php echo json_encode($tahun);?>,
                datasets : [
                     
                    {
                        fillColor: "rgba(60,141,188,0.9)",
                        strokeColor: "rgba(60,141,188,0.8)",
                        pointColor: "#3b8bba",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(152,235,239,1)",
                        data : <?php echo json_encode($hasil);?>
                    }
 
                ]
                 
    }
 
    var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);

</script>