<div class="card shadow">
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-error-404.png" width="100%"/>
            </div>
            <div class="col-md-8">
                <h3>Ups, maaf! Nampaknya Ada Kesalahan!</h3>
                <p>Halaman yang anda akses saat ini sudah tidak dapat kami proses. Dikarenakan ada perubahan minor maupun mayor dari kami.</p>

                <code>Error Status: 404 Not Found</code>

                <?php echo get_search_form(); ?>
                <h1>
                    <span class="span"><?php echo __('Atau', 'spectre'); ?></span>
                </h1>
                <a href="<?php echo home_url(); ?>" class="btn btn-outline-gray"><i class="fas fa-home"></i> <?php echo __('Kembali Ke Beranda', 'spectre'); ?></a>
            </div>
        </div>
    </div>
</div>