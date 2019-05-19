<!-- Start Greeting -->
<section class="greeting">
        
    <div class="container">
        <div class="row">
                
                <div class="jumbotron">
                    
                    <?php
                        echo $beranda['beranda'];
                    ?>
                    
                    <a href="<?php echo site_url('user/frontend/tampilan_utama/pendaftaran'); ?>">
                        <button class="btn btn-primary">Daftar</button>
                    </a>
                </div>

        </div>
    </div>

</section>
<!-- /End Greeting -->