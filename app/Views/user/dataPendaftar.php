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
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <p>Berikut data pengguna atau user yang telah membuat akun di sistem ini.</p>
                        <table class="table">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Lengkap</th>
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Nomor HP</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Didaftarkan Oleh</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php $i = 1; ?>
                                <?php foreach ($data as $d) : ?>
                                    <tr>
                                        <td scope="row"><?= $i++; ?></td>
                                        <td><?= $d['namaLengkap']; ?></td>
                                        <td><?= $d['tanggalLahir']; ?></td>
                                        <td><?= $d['jk']; ?></td>
                                        <td><?= $d['nohp']; ?></td>
                                        <td><?= $d['alamat']; ?></td>
                                        <td><?= $d['oleh']; ?></td>
                                        <td>
                                            <a href="<?= base_url('user/lihatBerkas'); ?>/<?= $d['id']; ?>"></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                                <?php if ($data == null) : ?>
                                    <tr>
                                        <td colspan="4" style="text-align: center;">Belum ada yang mendaftar</td>
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