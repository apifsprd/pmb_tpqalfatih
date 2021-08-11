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
    </div>
</div>

<section>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-content">
                    <div class="card-header">
                        <a href="<?= base_url('user/createDataKelas'); ?>" class="btn btn-success"><i class="bi bi-person-plus-fill"></i> Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <!-- <p class="text-center">Berikut data guru yang mengajar di TPQ Al Fatih.</p> -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Santri</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                ?>
                                <?php
                                foreach ($data as $d) :
                                ?>
                                    <tr>
                                        <td scope="row"><?= $i++; ?></td>
                                        <td><?= $d['namaSantri']; ?></td>
                                        <td><?= $d['kelas']; ?></td>
                                        <td>
                                            <a href="<?= base_url('user/editDataKelas'); ?>/<?= $d['id']; ?>" class="btn btn-outline-warning btn-sm" title="Edit data guru"><i class="bi bi-pencil-square"></i> Edit</a>
                                            <a href="<?= base_url('user/deleteDataKelas'); ?>/<?= $d['id']; ?>" class="btn btn-outline-danger btn-sm" title="Hapus Berkas"><i class="bi bi-trash-fill"></i> Hapus</a>
                                        </td>
                                    </tr>
                                <?php
                                endforeach;
                                ?>

                                <?php
                                if ($data == null) :
                                ?>
                                    <tr>
                                        <td colspan="4" style="text-align: center;">Belum ada data kelas.</td>
                                    </tr>
                                <?php
                                endif;
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</section>



<?= $this->endSection() ?>