<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title; ?></title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css'); ?>/style.css">
</head>

<body>
    <section style="height:100%; width: 100%; box-sizing: border-box; background-color: #FFFFFF">

        <div class="header-2-2" style="font-family: 'Poppins', sans-serif;">

            <?= $this->include('layouts/page/navbar') ?>

            <div>
                <div class="mx-auto d-flex flex-lg-row flex-column hero-header-2-2">
                    <!-- Left Column -->
                    <div class="left-column-header-2-2 d-flex flex-lg-grow-1 flex-column align-items-lg-start text-lg-start align-items-center text-center">
                        <p class="text-caption-header-2-2">Pesanggrahan, Jakarta Selatan</p>
                        <h1 class="title-text-big-header-2-2 d-lg-inline d-none">Tempat Pembelajaran <br> Al Qur'an Al Fatih</h1>
                        <h1 class="title-text-small-header-2-2 d-lg-none d-inline">Tempat Pembelajaran <br> Al Qur'an Al Fatih</h1>
                        <div class="div-button-header-2-2 d-inline d-lg-flex align-items-center mx-lg-0 mx-auto justify-content-center">
                            <a class="btn d-inline-flex mb-md-0 btn-try-header-2-2" href="<?= base_url('user'); ?>">Daftar</a>
                            <a class="btn btn-outline-header-2-2">
                                <div class="d-flex align-items-center">
                                    Lihat Informasi
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- Right Column -->
                    <div class="right-column-header-2-2 text-center d-flex justify-content-center pe-0">
                        <img id="img-fluid" style="display: block; width: 80%;height: auto;" src="https://www.mtssalafiyahsimbangkulon2.sch.id/ard/assets/images/MI.jpg" alt="">
                    </div>

                </div>
            </div>
        </div>

    </section>

    <?= $this->renderSection('content') ?>

    <?= $this->include('layouts/page/footer') ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>