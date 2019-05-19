<!-- Start Login -->
<section class="login margin-bottom-50">
        
    <div class="container">
        <div class="row">

            <?php echo form_open('user/backend/login_peserta/check_login'); ?>
                
                <div class="card card-container">
                    <img class="profile-img-card" src="<?php echo base_url() ?>assets/user/frontend/img/login-img.png" alt="img-login">
                    <p id="profile-name" class="profile-name-card"></p>

                    <form class="form-signin">
                        <span id="reauth-email" class="reauth-email"></span>
                        <input type="text" name="email" class="form-control" placeholder="Email" required>
                        <input type="password" name="password" id="form-password" class="form-control" placeholder="Password" required>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="form-checkbox"> Show Password
                            </label>
                             
                        </div>

                        <button class="btn btn-primary btn-signin" name="submit" type="submit">Sign in</button>
                        
                        <?php
                            echo anchor('user/frontend/tampilan_utama/pendaftaran', 'Daftar');
                        ?>

                    </form>

                </div>

            </form>

        </div>
    </div>

</section>
<!-- /End Login -->

<script>
    $(document).ready(function() {
        var cek = $('#form-checkbox').val();
          $('#form-checkbox').click(function() {
            if ($(this).is(':checked')) {
              $('#form-password').attr('type', 'text');
            } else {
              $('#form-password').attr('type', 'password');
            }
          });
    });
</script>