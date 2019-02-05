<footer class="footer mt-3" id="top">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-6">
            <?php if(is_active_sidebar('footer-1')) :
                dynamic_sidebar( 'footer-1' );    
            else : ?>
                <div class="sidebar-example">
                    <h3><?php echo __('Info Situsmu', 'spectre'); ?></h3>
                    <p><?php echo __('Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf.', 'spectre'); ?>[...] <a href=""><?php echo __('Baca Lagi', 'spectre'); ?></a></p>
                    <p><i class="fas fa-map-marker-alt"></i> Jl. Brigjend Katamso, RT 003/02, No. 03, Ds. Munggut, Padas, Kab. Ngawi 63281, East Java</p>
                    <p><i class="fab fa-whatsapp"></i> 0812-3477-1365</p>
                    <p><i class="fab fa-google"></i> cp.adiboocreative190@gmail.com</p>

                    <button type="button" class="btn btn-primary"><i class="fab fa-facebook"></i></button>
                    <button type="button" class="btn btn-info"><i class="fab fa-twitter"></i></button>
                    <button type="button" class="btn btn-light"><i class="fab fa-instagram"></i></button>
                    <button type="button" class="btn btn-danger"><i class="fab fa-google"></i></button>
                </div>
            <?php endif; ?>
            </div>
            <div class="col-md-2">
            <?php if(is_active_sidebar('footer-2')) :
                dynamic_sidebar( 'footer-2' );    
            else : ?>
                <div class="sidebar-example">
                    <h3><?php echo __('Link Lain', 'spectre'); ?></h3>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-arrow-right"></i> Lorem ipsum dolor sit amet</li>
                        <li><i class="fas fa-arrow-right"></i> Consectetur adipiscing elit</li>
                        <li><i class="fas fa-arrow-right"></i> Integer molestie lorem at massa</li>
                        <li><i class="fas fa-arrow-right"></i> Facilisis in pretium nisl aliquet</li>
                        <li><i class="fas fa-arrow-right"></i> Faucibus porta lacus fringilla vel</li>
                        <li><i class="fas fa-arrow-right"></i> Aenean sit amet erat nunc</li>
                        <li><i class="fas fa-arrow-right"></i> Eget porttitor lorem</li>
                    </ul>
                </div>
            <?php endif; ?>
            </div>
            <div class="col-md-2">
            <?php if(is_active_sidebar('footer-3')) :
                dynamic_sidebar( 'footer-3' );    
            else : ?>
                <div class="sidebar-example">
                    <h3><?php echo __('Perusahaan', 'spectre'); ?></h3>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-arrow-right"></i> Lorem ipsum dolor sit amet</li>
                        <li><i class="fas fa-arrow-right"></i> Consectetur adipiscing elit</li>
                        <li><i class="fas fa-arrow-right"></i> Integer molestie lorem at massa</li>
                        <li><i class="fas fa-arrow-right"></i> Facilisis in pretium nisl aliquet</li>
                        <li><i class="fas fa-arrow-right"></i> Faucibus porta lacus fringilla vel</li>
                        <li><i class="fas fa-arrow-right"></i> Aenean sit amet erat nunc</li>
                        <li><i class="fas fa-arrow-right"></i> Eget porttitor lorem</li>
                    </ul>
                </div>
            <?php endif; ?>
            </div>
            <div class="col-md-2">
            <?php if(is_active_sidebar('footer-4')) :
                dynamic_sidebar( 'footer-4' );    
            else : ?>
                <div class="sidebar-example">
                    <h3><?php echo __('Kaki Kanan', 'spectre'); ?></h3>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-arrow-right"></i> Lorem ipsum dolor sit amet</li>
                        <li><i class="fas fa-arrow-right"></i> Consectetur adipiscing elit</li>
                        <li><i class="fas fa-arrow-right"></i> Integer molestie lorem at massa</li>
                        <li><i class="fas fa-arrow-right"></i> Facilisis in pretium nisl aliquet</li>
                        <li><i class="fas fa-arrow-right"></i> Faucibus porta lacus fringilla vel</li>
                        <li><i class="fas fa-arrow-right"></i> Aenean sit amet erat nunc</li>
                        <li><i class="fas fa-arrow-right"></i> Eget porttitor lorem</li>
                    </ul>
                </div>
            <?php endif; ?>
            </div>
        </div>
    </div>
</footer>
<footer class="footer" id="bottom">
    <div class="container">
        <div class="row no-gutters flex-column-reverse flex-md-row">
            <div class="col-md-3">
                <span><?php printf( __('Hak cipta %s <a href="%s">%s</a>, Hak cipta dilindungi Undang-Undang.', 'spectre'), date('Y'), home_url(), get_bloginfo('name')); ?></p>
            </div>
            <div class="col-md-9" data-align="right">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <button class="navbar-toggler text-center" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="<?php esc_html_e( 'Toggle Navigation', 'spectre' ); ?>">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbar-content">
                        <?php if(has_nav_menu('secondary')) :
                        wp_nav_menu( array(
                            'theme_location' => 'secondary',
                            'menu_id'        => 'primary-menu',
                            'container'      => false,
                            'depth'          => 2,
                            'menu_class'     => 'navbar-nav ml-auto',
                            'walker'         => new Bootstrap_NavWalker(),
                            'fallback_cb'    => 'Bootstrap_NavWalker::fallback',
                        ) );
                        else : ?>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active"> <a class="nav-link" href="#">Home <span class="sr-only">(current)</span> </a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#">About</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#">Services</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#">Contact</a> </li>
                            <li class="nav-item btn-group" role="group" aria-label="Basic example"> 
                                <a href="button" class="btn btn-outline-secondary">Masuk Akun</a> 
                                <a href="button" class="btn btn-outline-secondary">Daftar</a>
                            </li>
                        </ul>
                        <?php endif; ?>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</footer>