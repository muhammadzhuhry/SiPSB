<div class="col-md-12">
  <div class="container">
    <div class="row">

      <div class="card">
        <div class="card-status bg-blue"></div>
        <div class="card-header">
            <h3 class="card-title">Daftar Rekening</h3>
            <div class="card-options">
                <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
            </div>
        </div>

        <br>

        <div class="container">
        
        <div class="row row-cards row-deck">
            
            <div class="col-md-4">

                    <div class="card">
                      <div class="card-body thumbnail" align="center">
                        <img src="<?php echo base_url(); ?>/assets/image/bni.png" alt="img-bni" class="img-rekening">
                        <div class="caption text-center">
                            <h4>Bank BNI</h4>
                            <p>No. Rekening: 7400-100-300</p>
                            <p>Cabang: KCP Banda Aceh</p>
                            <p>A/n: Pesantren Imam Syafi'i</p>

                            <button class="btn btn-primary" data-toggle="modal" data-target="#modal-bni">Cara Transfer</button>
                        </div>
                      </div>
                    </div>

                </div>

                <div class="col-md-4">

                    <div class="card">
                      <div class="card-body thumbnail" align="center">
                        <img src="<?php echo base_url(); ?>/assets/image/muamalat.png" alt="img-muamalat" class="img-rekening">
                        <div class="caption text-center">
                            <h4>Bank Muamalat</h4>
                            <p>No. Rekening: 7400-100-300</p>
                            <p>Cabang: KCP Banda Aceh</p>
                            <p>A/n: Pesantren Imam Syafi'i</p>

                            <button class="btn btn-primary" data-toggle="modal" data-target="#modal-muamalat">Cara Transfer</button>
                        </div>
                      </div>
                    </div>

                </div>

                <div class="col-md-4">

                    <div class="card">
                      <div class="card-body thumbnail" align="center">
                        <img src="<?php echo base_url(); ?>/assets/image/bri.png" alt="img-bri" class="img-rekening">
                        <div class="caption text-center">
                            <h4>Bank BRI</h4>
                            <p>No. Rekening: 7400-100-300</p>
                            <p>Cabang: KCP Banda Aceh</p>
                            <p>A/n: Pesantren Imam Syafi'i</p>

                            <button class="btn btn-primary" data-toggle="modal" data-target="#modal-bri">Cara Transfer</button>
                        </div>
                      </div>
                    </div>

                </div>

        </div>

        </div>

        <div class="card-footer text-right">
            <div class="col-sm-2">
                <?php
                  echo anchor('user/backend/upload_berkas', 'Next', array('class'=>'btn btn-lg btn-block btn-cyan btn-square'));
                ?>
            </div>
        </div>

      </div>   

    </div>
  </div>
</div>

<!-- Modal -->
<section id="modal-bni" class="modal modal-rekening fade" role="dialog">
            
            <div class="modal-dialog">

                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-modal-header">Transfer BNI</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <p>
                           1. Pilih Menu Lain > Transfer <br>
                           2. Pilih rekening asal dan pilih rekening tujuan ke rekening BNI <br>
                           3. Masukkan nomor rekening 8848001xxxxxxxxx (sesuai dengan yang muncul dalam aplikasi) dan pilih Benar <br>
                           4. Masukkan jumlah pembayaran Rp xxxxx (sesuai dengan jumlah pesanan Anda) dan pilih Benar <br>
                           5. Periksa informasi yang tertera di layar. Pastikan Nama adalah nama penerima di Shopee dan jumlah sudah benar. Jika benar, pilih Ya.
                        </p>
                    </div>

                </div>
                
            </div>

</section>
<!-- /End Modal -->

<!-- Modal -->
<section id="modal-muamalat" class="modal modal-rekening fade" role="dialog">
            
            <div class="modal-dialog">

                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-modal-header">Transfer Muamalat</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <p>
                           1. Pilih Menu Lain > Transfer <br>
                           2. Pilih rekening asal dan pilih rekening tujuan ke rekening Muamalat <br>
                           3. Masukkan nomor rekening 8848001xxxxxxxxx (sesuai dengan yang muncul dalam aplikasi) dan pilih Benar <br>
                           4. Masukkan jumlah pembayaran Rp xxxxx (sesuai dengan jumlah pesanan Anda) dan pilih Benar <br>
                           5. Periksa informasi yang tertera di layar. Pastikan Nama adalah nama penerima di Shopee dan jumlah sudah benar. Jika benar, pilih Ya.
                        </p>
                    </div>

                </div>
                
            </div>

</section>
<!-- /End Modal -->

<!-- Modal -->
<section id="modal-bri" class="modal modal-rekening fade" role="dialog">
            
            <div class="modal-dialog">

                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-modal-header">Transfer BRI</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <p>
                           1. Pilih Menu Lain > Transfer <br>
                           2. Pilih rekening asal dan pilih rekening tujuan ke rekening BRI <br>
                           3. Masukkan nomor rekening 8848001xxxxxxxxx (sesuai dengan yang muncul dalam aplikasi) dan pilih Benar <br>
                           4. Masukkan jumlah pembayaran Rp xxxxx (sesuai dengan jumlah pesanan Anda) dan pilih Benar <br>
                           5. Periksa informasi yang tertera di layar. Pastikan Nama adalah nama penerima di Shopee dan jumlah sudah benar. Jika benar, pilih Ya.
                        </p>
                    </div>

                </div>
                
            </div>

</section>
<!-- /End Modal -->

