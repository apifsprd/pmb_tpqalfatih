<?= $this->extend('layouts/userTemplate') ?>

<?= $this->section('content') ?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h4><?= $title; ?></h4>
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
    <section class="row">
        <div class="col">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col text-center">
                                    <h5 class="font-semibold">Status Berkas Pendaftaran</h5>
                                    <h6 class="text-muted font-semibold">Per <?= date('d - M - Y'); ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon red">
                                        <i class="iconly-boldDocument"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Belum Disetujui</h6>
                                    <h6 class="font-extrabold mb-0"><?= $cna; ?> Berkas</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon green">
                                        <i class="iconly-boldShield-Done"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Telah Disetujui</h6>
                                    <h6 class="font-extrabold mb-0"><?= $ca; ?> Berkas</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <p>Berikut data calon peserta didik yang telah mendaftar dan perlu persetujuan.</p>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Lengkap</th>
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Nomor HP</th>
                                    <th scope="col">Didaftarkan Oleh</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($data as $d) : ?>
                                    <tr>
                                        <td scope="row"><?= $i++; ?></td>
                                        <td><?= $d['namaLengkap']; ?></td>
                                        <td><?= $d['tanggalLahir']; ?></td>
                                        <td><?= $d['jk']; ?></td>
                                        <td><?= $d['nohp']; ?></td>
                                        <td><?= $d['oleh']; ?></td>
                                        <td>
                                            <a href="<?= base_url('user/lihatBerkas'); ?>/<?= $d['id']; ?>" class="btn btn-outline-secondary btn-sm" title="Lihat Berkas"><i class="bi bi-file-earmark-text-fill"></i></a>
                                            <!-- <a href="<?= base_url('user/delete'); ?>/<?= $d['id']; ?>" class="btn btn-outline-danger btn-sm" title="Hapus Berkas"><i class="bi bi-trash-fill"></i></a> -->
                                            <!-- <a href="<?= base_url('user/approve'); ?>/<?= $d['id']; ?>" class="btn btn-outline-success btn-sm" title="Approve Berkas"><i class="bi bi-patch-check-fill"></i></a> -->
                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                                <?php if ($data == null) : ?>
                                    <tr>
                                        <td colspan="7" style="text-align: center;">Belum ada yang mendaftar</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</section>


<?= $this->endSection() ?>