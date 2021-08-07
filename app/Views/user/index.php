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


<?php if (in_groups('user')) : ?>
    <section>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <h4 class="card-title">Berkas Pendaftaran Anda</h4>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama Peserta Didik</th>
                                        <th scope="col">Tanggal Pendaftaran</th>
                                        <th scope="col">Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($data as $d) : ?>
                                        <tr>
                                            <td scope="row"><?= $i++; ?></td>
                                            <td><?= $d['namaLengkap']; ?></td>
                                            <td><?= date("d F Y", strtotime($d['created_at'])); ?></td>
                                            <td>
                                                <?php if ($d['status_approve'] == 0) : ?>
                                                    <div class="btn btn-light-secondary btn-sm">Sedang Verifikasi</div>
                                                <?php elseif ($d['status_approve'] == 1) : ?>
                                                    <div class="btn btn-light-success btn-sm">Lolos</div>
                                                <?php else : ?>
                                                    <div class="btn btn-light-danger btn-sm">Tidak Lolos</div>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <a href="<?= base_url('user/editBerkas'); ?>/<?= $d['id']; ?>" class="btn btn-outline-warning btn-sm">Edit</a>
                                                <a href="<?= base_url('user/delete'); ?>/<?= $d['id']; ?>" class="btn btn-outline-danger btn-sm" onclick="confirm('Apakah Anda yakin menghaspus data ini?)">Delete</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>

                                    <?php if ($data == null) : ?>
                                        <tr>
                                            <td colspan="4" style="text-align: center;">Anda belum mendaftarkan peserta didik</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </section>
<?php endif; ?>


<?= $this->endSection() ?>