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
            /* object-fit: cover; */
            object-position: center;
            /* margin-bottom: 3rem; */
            /* width: 75%; */
        }

        .empty-2-2 .title-text {
            color: #272E35;
            font: 600 1.875rem/2.25rem Poppins, sans-serif;
            margin-bottom: 1rem;
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
        <img class="main-img img-fluid" src="https://www.ex-worksph.com/wp-content/uploads/2021/06/construction-website-1.png" alt="" style="width: 300px">

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
                    <div class="card-body text-center">
                        <h3>Kelas Abbas</h3>
                        <h4><?= $cabbas; ?> Santri</h4>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-body text-center">
                        <h3>Kelas Abu</h3>
                        <h4><?= $cabu; ?> Santri</h4>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-body text-center">
                        <h3>Kelas Thaariq</h3>
                        <h4><?= $cthaariq; ?> Santri</h4>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-body text-center">
                        <h3>Kelas Umar</h3>
                        <h4><?= $cumar; ?> Santri</h4>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-body text-center">
                        <h3>Kelas Uwais</h3>
                        <h4><?= $cuwais; ?> Santri</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mb-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <h2>Kelas Abbas</h2>
                        </div>
                        <div class="row mt-3">
                            <table id="tabel" class="display">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Santri</th>
                                        <th>Kelas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($kabbas as $a) : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $a['namaSantri'] ?></td>
                                            <td><?= $a['kelas'] ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="mb-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <h2>Kelas Abu</h2>
                        </div>
                        <div class="row mt-3">
                            <table id="tabel2" class="display">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Santri</th>
                                        <th>Kelas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($kabu as $a) : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $a['namaSantri'] ?></td>
                                            <td><?= $a['kelas'] ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="mb-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <h2>Kelas Thaariq</h2>
                        </div>
                        <div class="row mt-3">
                            <table id="tabel3" class="display">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Santri</th>
                                        <th>Kelas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($kthaariq as $a) : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $a['namaSantri'] ?></td>
                                            <td><?= $a['kelas'] ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="mb-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <h2>Kelas Umar</h2>
                        </div>
                        <div class="row mt-3">
                            <table id="tabel4" class="display">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Santri</th>
                                        <th>Kelas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($kumar as $a) : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $a['namaSantri'] ?></td>
                                            <td><?= $a['kelas'] ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="mb-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <h2>Kelas Uwais</h2>
                        </div>
                        <div class="row mt-3">
                            <table id="tabel5" class="display">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Santri</th>
                                        <th>Kelas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($kuwais as $a) : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $a['namaSantri'] ?></td>
                                            <td><?= $a['kelas'] ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>