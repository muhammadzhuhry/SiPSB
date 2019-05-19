<div class="col-md-12">
  <div class="container">
    <div class="row">

      <div class="card">
        <div class="card-status bg-blue"></div>
        <div class="card-header">
            <h3 class="card-title">Form Biodata</h3>
            <div class="card-options">
                <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
            </div>
        </div>

        <?php
            echo form_open('user/backend/form_biodata/add_data', 'role="form" class="form-horizontal"');
        ?>

          <div class="card-body">
              
            <h5>Form Data Calon Santri</h5>
            <hr class="hr-style">

            <div class="form-group">
                
                <div class="col-md-6 form-tengah">
                    <label class="form-label">NISN</label>
                    <input type="text" name="nisn" class="form-control"  placeholder="Masukan NISN Anda*">
                </div>

            </div>

            <div class="form-group">
              
                <div class="col-md-6 form-tengah">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control"  placeholder="Masukan Nama Anda*">
                </div>

            </div>

            <div class="form-group">

                <div class="col-md-6 form-tengah">
                    <label class="form-label">Tempat, Tgl Lahir</label>

                    <div class="row gutters-xs">
                        <div class="col-6">
                            <input type="text" name="tempat_lahir" class="form-control"  placeholder="Tempat Lahir">
                        </div>
                        <div class="col-4">
                            <input type="date" name="tanggal_lahir" class="form-control">
                        </div>
                        <!-- <div class="col-6">
                          <p class="text-red">Format : bulan - tanggal - tahun </p>
                        </div> -->
                    </div>                           
                </div>

            </div>

            <div class="form-group">

                <div class="col-md-6 form-tengah">
                    <label class="form-label">Alamat</label>
                    <textarea class="form-control" name="alamat" rows="3"  placeholder="Masukan Alamat Lengkap Anda*"></textarea>
                </div>

            </div>

            <div class="form-group">

                <div class="col-md-6 form-tengah">
                    <label class="form-label">Asal Sekolah</label>
                    <input type="text" name="asal_sekolah" class="form-control"  placeholder="Masukan Asal Sekolah Anda*">
                </div>

            </div>

            <div class="form-group">

                <div class="col-md-6 form-tengah">
                    <label class="form-label">Alamat Sekolah Asal</label>
                    <textarea class="form-control" name="alamat_sekolah_asal" rows="3"  placeholder="Masukan Alamat Asal Sekolah Anda*"></textarea>
                </div>

            </div>

            <div class="form-group">

                <div class="col-md-6 form-tengah">
                    <label class="form-label">No. Ijazah</label>
                    <input type="text" name="no_ijazah" class="form-control"  placeholder="Masukan Nomor Ijazah Anda*">
                </div>

            </div>

            <h5>Form Data Orang Tua</h5>
            <hr class="hr-style">

            <div class="alert alert-icon alert-info" role="alert">
                <i class="fe fe-alert-triangle mr-2" aria-hidden="true"></i>
                1. Apabila Orang Tua sudah Almarhum, maka tulis Alm. Di depan nama beliau dan pekerjaan -.
                <br>Contoh: Nama Alm.Fulan; Pekerjaan -
                <br>2. Apabila Orang Tua sudah Pensiun, maka pilih Lainnya di kolom pekerjaan.
                <br>Contoh: Nama Fulan; Pekerjaan Lainnya
            </div>

            <div class="form-group">

                <div class="col-md-6 form-tengah">
                    <label class="form-label">Ayah</label>

                    <div class="row gutters-xs">
                      <div class="col-6">
                        <input type="text" name="nama_ayah" class="form-control"  placeholder="Masukan Nama Ayah*">
                      </div>
                      <div class="col-6">
                        <?php
                          echo form_dropdown('pekerjaan_ayah', array('Pilih Pekerjaan Ayah', 'pns'=> 'PNS', 'swasta'=> 'Swasta', 'tni/polri' => 'TNI / Polri', 'petani/nelayan' => 'Petani / Nelayan', 'buruh' => 'Buruh', 'wiraswasta' => 'Wiraswasta', 'ojek/becak' => 'Tukang Ojek / Becak', 'sopir' => 'Sopir', 'lainnya' => 'Lainnya', '-' => '-'), null, "class='form-control'");
                        ?>
                      </div>
                    </div>
                </div>

            </div>

            <div class="form-group">

                <div class="col-md-6 form-tengah">
                    <label class="form-label">Ibu</label>

                    <div class="row gutters-xs">
                      <div class="col-6">
                        <input type="text" name="nama_ibu" class="form-control"  placeholder="Masukan Nama Ibu*">
                      </div>
                      <div class="col-6">
                        <?php
                            echo form_dropdown('pekerjaan_ibu', array('Pilih Pekerjaan Ibu', 'pns'=> 'PNS', 'swasta'=> 'Swasta', 'tni/polri' => 'TNI / Polri', 'petani/nelayan' => 'Petani / Nelayan', 'buruh' => 'Buruh', 'wiraswasta' => 'Wiraswasta', 'ojek/becak' => 'Tukang Ojek / Becak', 'sopir' => 'Sopir', 'irt' => 'Ibu Rumah Tangga', 'lainnya' => 'Lainnya', '-' => '-'), null, "class='form-control'");
                        ?>
                      </div>
                    </div>
                </div>

            </div>

            <div class="form-group">

                <div class="col-md-6 form-tengah">
                    <label class="form-label">Alamat Orang Tua</label>
                    <textarea class="form-control" name="alamat_orangtua" rows="3"  placeholder="Masukan Alamat Orangtua Anda*"></textarea>
                </div>

            </div>

            <div class="form-group">
                
                <div class="col-md-6 form-tengah">
                    <label class="form-label">No. Telp/HP</label>
                    <input type="number" name="no_telepon" class="form-control"  placeholder="Masukan No Telp/HP orangtua/wali">
                </div>

            </div>

          <div class="alert alert-icon alert-warning" role="alert">
              <h4>Periksa Data yang Anda Inputkan!</h4>

              <p>Periksa kembali data yang anda inputkan sebelum menekan tombol simpan.
              <br><b>Apabila nanti anda hendak merubahnya maka anda harus menghubungi admin terlebih dahulu<b></p>
            </div>

          </div>

          <div class="card-footer text-right">
            <div class="row gutters-xs">
              <div class="col-sm-2">
                  <button type="submit" name="submit" class="btn btn-lg btn-block btn-cyan btn-square">Simpan</button>
              </div>

              <div class="col-sm-2">
                  <?php
                    echo anchor('user/backend/prosedur', 'Kembali', array('class'=>'btn btn-lg btn-block btn-danger btn-square'));
                  ?>
              </div>
            </div>
          </div>

        </form>

      </div>

    </div>
  </div>
</div>

