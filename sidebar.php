<?php if (!is_active_sidebar('sidebar-right')) { ?>
<div class="card shadow">
    <div class="card-body">
        <h3><?php
    echo __('Contoh Widget Pencarian', 'spectre');
?></h3>
        <form action="<?php echo home_url(); ?>" class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Cari Apa?" name="search" aria-label="Username" aria-describedby="basic-addon1">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-search"></i></button>
            </div>
        </formr>
    </div>
</div>

<div class="card shadow mt-3">
    <div class="card-body">
        <h3><?php echo __('Contoh Widget Tag Cloud', 'spectre'); ?></h3>
        <button type="button" class="btn btn-blue">Teknologi</button>
        <button type="button" class="btn btn-gray">WordPress</button>
        <button type="button" class="btn btn-green">Hosting</button>
        <button type="button" class="btn btn-red">Website Development</button>
        <button type="button" class="btn btn-yellow">Blogger</button>
        <button type="button" class="btn btn-info">Pengetahuan</button>
        <button type="button" class="btn btn-light">Gadget</button>
        <button type="button" class="btn btn-black">Komputerisasi</button>
        <button type="button" class="btn btn-link">Server</button>
    </div>
</div>
<?php } else { dynamic_sidebar('sidebar-right'); } ?>