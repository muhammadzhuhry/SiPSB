<!-- Start Form-pendaftaran -->
<section class="form-pendaftaran margin-bottom-100">
        
    <div class="container">
        <div class="row">
                    
                <h3>Form Pendaftaran</h3>

                <hr>

                <?php
                    echo form_open('user/frontend/pendaftaran/add')
                ?>

                <div class="col-md-12">

                        <div class="form-group">
                                <label class="col-sm-2 control-label">Email</label>

                                <div class="col-sm-10">
                                    <input type="email" class="form-control" required name="email" placeholder="Masukan Email Aktif*">
                                </div>
                        </div>

                        <div class="form-group">
                                <label class="col-sm-2 control-label">Nama Lengkap</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required name="nama" placeholder="Masukan Nama Lengkap Anda*">
                                </div>
                        </div>

                        <div class="form-group">
                                <label class="col-sm-2 control-label">Panggilan</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required name="panggilan" placeholder="Masukan Nama Panggilan Anda*">
                                </div>
                        </div>
                                
                        <button type="submit" name="submit" class="btn btn-daftar btn-lg btn-primary">Daftar</button>

                </div>

                </form>

        </div>
    </div>

</section>
<!-- /End Form-pendaftaran