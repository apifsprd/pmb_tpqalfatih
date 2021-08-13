<?= $this->extend('layouts/page/pageTemplate') ?>

<?= $this->section('content') ?>
<section style="height:100%; width: 100%; box-sizing: border-box; background-color: #FFFFFF">
    <div class="header-2-2" style="font-family: 'Poppins', sans-serif;">
        <?= $this->include('layouts/page/navbar') ?>
    </div>
</section>

<!-- <section class="h-100 w-100 bg-white" style="box-sizing: border-box;">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        .empty-2-2 {
            padding: 4rem 2rem 4rem;
        }

        .empty-2-2 .main-img {
            object-fit: cover;
            object-position: center;
            margin-bottom: 3rem;
            width: 75%;
        }

        .empty-2-2 .title-text {
            color: #272E35;
            font: 600 1.875rem/2.25rem Poppins, sans-serif;
            margin-bottom: 1.25rem;
        }

        .empty-2-2 .title-caption {
            color: #9C9C9C;
            margin-bottom: 4rem;
            letter-spacing: 0.025em;
            line-height: 1.75rem;
        }

        .empty-2-2 .btn-back {
            background-color: #27C499;
            font: 600 1.125rem/1.75rem Poppins, sans-serif;
            padding: 1rem 1.5rem;
            border-radius: 0.75rem;
        }

        .empty-2-2 .btn-back:hover {
            --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        @media(min-width: 425px) {
            .empty-2-2 .title-text {
                font-size: 40px;
            }
        }

        @media (min-width: 576px) {
            .empty-2-2 {
                padding-top: 5rem;
            }

            .empty-2-2 .main-img {
                margin-bottom: 4rem;
                width: auto;
            }
        }
    </style>

    <div class="empty-2-2 container mx-auto d-flex align-items-center justify-content-center flex-column" style="font-family: 'Poppins', sans-serif;">
        <img class="main-img img-fluid" src="https://www.ex-worksph.com/wp-content/uploads/2021/06/construction-website-1.png" alt="" style="width: 500px">

        <div class="text-center w-100">
            <h1 class="title-text">
                Opss! Page is under construction
            </h1>
            <p class="title-caption">
                Halaman yang kamu minta sedang dalam pengembangan. Kami <br class="d-sm-block d-none"> sarankan kamu kembali ke halaman Beranda.
            </p>
            <div class="d-flex justify-content-center">
                <a class="btn btn-back d-inline-flex text-white" href="<?= base_url('page/home'); ?>">
                    Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>
</section> -->

<section class="mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h2>Persyaratan Pendaftaran</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <ol>
                                    <?php foreach ($info as $i) : ?>
                                        <li><?= $i['namaPersyaratan']; ?></li>
                                    <?php endforeach; ?>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section style="height:100%; width: 100%; box-sizing: border-box; background-color: #FFFFFF">

    <div style="font-family: 'Poppins', sans-serif;">

        <!-- <div class="text-center title-text-content-2-2">
            <h1 class="text-title-content-2-2">3 Program Belajar</h1>
            <p class="text-caption-content-2-2" style="  margin-left: 3rem; margin-right: 3rem;">Program pembelajaran Al Qur'an berjenjang</p>
        </div>

        <div class="grid-padding-content-2-2 text-center">
            <div class="row">
                <div class="col-lg-4 column-content-2-2">
                    <div class="icon-content-2-2">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROn8mgGoxQS58Kw6ptGNBRxChmQ227D6585Q&usqp=CAU" alt="" style="width: 3.5rem;">
                    </div>
                    <h3 class="icon-content-2-2-title">Iqro & Juz Amma</h3>
                    <p class="icon-content-2-2-caption">Dimulai dari mengenal huruf<br>
                        hijaiyah lalu surat pendek</p>
                </div>
                <div class="col-lg-4 column-content-2-2">
                    <div class="icon-content-2-2">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROn8mgGoxQS58Kw6ptGNBRxChmQ227D6585Q&usqp=CAU" alt="" style="width: 3.5rem;">
                    </div>
                    <h3 class="icon-content-2-2-title">Tahsin</h3>
                    <p class="icon-content-2-2-caption">Belajar tahsin dengan makhorijul<br>
                        huruf yang benar</p>
                </div>
                <div class="col-lg-4 column-content-2-2">
                    <div class="icon-content-2-2">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROn8mgGoxQS58Kw6ptGNBRxChmQ227D6585Q&usqp=CAU" alt="" style="width: 3.5rem;">
                    </div>
                    <h3 class="icon-content-2-2-title">Tahfidz</h3>
                    <p class="icon-content-2-2-caption">Bimbingan dalam menghapal<br>
                        Al Qur'an</p>
                </div>
            </div>
        </div> -->

        <div class="card-block-content-2-2">
            <div class="card-content-2-2">
                <div class="d-flex flex-lg-row flex-column align-items-center">
                    <div class="me-lg-3">
                        <img src="https://www.mtssalafiyahsimbangkulon2.sch.id/ard/assets/images/MI.jpg" alt="" style="width: 150px;">
                    </div>
                    <div class="flex-grow-1 text-lg-start text-center card-text-content-2-2">
                        <h3 class="card-content-2-2-title">Untuk si buah hati lancar mengaji</h3>
                        <p class="d-none d-lg-block card-content-2-2-caption">Segera daftarkan si buah hati ke TPQ Alfatih.</p>
                        <p class="d-block d-lg-none card-content-2-2-caption">Segera daftarkan si buah hati ke TPQ Alfatih.</p>
                    </div>
                    <div class="card-btn-space-content-2-2">
                        <a class="btn btn-card-content-2-2" href="<?= base_url('user'); ?>">Daftar</a>
                        <button class="btn btn-outline-content-2-2">Lihat Informasi</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
<?= $this->endSection() ?>