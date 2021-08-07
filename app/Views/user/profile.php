<?= $this->extend('layouts/userTemplate') ?>

<?= $this->section('content') ?>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h4>Profile</h4>
                <!-- <p class="text-subtitle text-muted">Isi data calon santri dengan data yang benar.</p> -->
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">User</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li>
                    </ol>
                </nav>
            </div>
        </div>
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif; ?>
    </div>
</div>



<section>
    <div class="row">
        <div class="col-8">
            <div class="card mb-5">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?= base_url('/assets/images/faces'); ?>/<?= user()->user_image; ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3><?= user()->fullname; ?></h3>
                            <h5><?= user()->username; ?></h5>
                            <p class="card-text"><?= user()->email; ?></p>
                            <p class="card-text"><small class="text-muted">Bergabung sejak <?= date("d F Y", strtotime(user()->created_at)); ?></small></p>
                            <a href="<?= base_url('user/editProfile'); ?>/<?= user()->id; ?>" class="btn btn-light-warning">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>