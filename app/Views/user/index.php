<?= $this->extend('layouts/userTemplate') ?>

<?= $this->section('content') ?>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h4>Beranda</h4>
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
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <h4 class="card-title">Bottom Image Cap</h4>
                        <p class="card-text">
                            Jelly-o sesame snaps cheesecake topping. Cupcake fruitcake macaroon donut
                            pastry gummies tiramisu chocolate bar muffin. Dessert bonbon caramels
                            brownie chocolate
                            bar
                            chocolate tart dragée.
                        </p>
                        <p class="card-text">
                            Cupcake fruitcake macaroon donut pastry gummies tiramisu chocolate bar
                            muffin.
                        </p>
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                    <img class="card-img-bottom img-fluid" src="https://images.unsplash.com/photo-1619616962999-b0dcf060c93f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="Card image cap" style="height: 20rem; object-fit: cover;">
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    <h4>With controls</h4>
                    <p>A carousel with previous and next control</p>
                </div>
                <div class="card-body">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://www.islam.com.kw/wp-content/uploads/2016/11/The-Status-of-Children-in-Islam-Part-1-2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://www.soundvision.com/sites/default/files/styles/article-teaser/public/field/image/School_001b.jpg?itok=4OuhymPA" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://www.soundvision.com/sites/default/files/styles/article-teaser/public/field/image/masjid_children_0.jpg?itok=sqT10kXq" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<?= $this->endSection() ?>