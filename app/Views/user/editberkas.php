<?= $this->extend('layouts/userTemplate') ?>

<?= $this->section('content') ?>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h4>Edit Berkas</h4>
                <p class="text-subtitle text-muted">Isi data calon santri dengan data yang benar.</p>
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

    <!-- // Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="">Form Pendaftaran</h2>
                    </div>
                    <div class="card-content">
                        <div class="card-body">

                            <h5 class="">Identitas Peserta Didik</h5>

                            <form class="form" action="<?= base_url('user/update'); ?>/<?= $data['id']; ?>" method="post">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <input type="hidden" id="first-name-column" class="form-control" placeholder="Nama Lengkap" name="oleh" value="<?= $data['oleh']; ?>">
                                            <input type="hidden" id="first-name-column" class="form-control" placeholder="Nama Lengkap" name="status_approve" value="<?= $data['status_approve']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Nama Lengkap</label>
                                            <input type="text" id="first-name-column" class="form-control" placeholder="Nama Lengkap" name="namaLengkap" value="<?= $data['namaLengkap']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Nama Panggilan</label>
                                            <input type="text" id="last-name-column" class="form-control" placeholder="Nama Panggilan" name="namaPanggilan" value="<?= $data['namaPanggilan']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="city-column">Tanggal Lahir</label>
                                            <input type="date" id="city-column" class="form-control" placeholder="Tanggal Lahir" name="tanggalLahir" value="<?= $data['tanggalLahir']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="country-floating">Kota Kelahiran</label>
                                            <input type="text" id="country-floating" class="form-control" name="kotaKelahiran" placeholder="Kota Kelahiran" value="<?= $data['kotaKelahiran']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="company-column">Jenis Kelamin</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="jenisKelamin" id="jenisKelamin" value="Laki-laki" <?php if ($data['jk'] == 'Laki-laki') echo "checked"; ?>>
                                                <label class="form-check-label" for="jenisKelamin">
                                                    Laki-laki
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="jenisKelamin" id="jenisKelamin" value="Perempuan" <?php if ($data['jk'] == 'Perempuan') echo "checked"; ?>>
                                                <label class="form-check-label" for="jenisKelamin">
                                                    Perempuan
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email-id-column">Anak Ke</label>
                                            <input type="number" id="email-id-column" class="form-control" name="anakKe" placeholder="Anak Ke -" value="<?= $data['anakKe']; ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email-id-column">Jumlah Saudara</label>
                                            <input type="number" id="email-id-column" class="form-control" name="jumlahSaudara" placeholder="Jumlah Saudara" value="<?= $data['jmlSaudara']; ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email-id-column">Status Dalam Keluarga</label>
                                            <input type="text" id="email-id-column" class="form-control" name="statusKeluarga" placeholder="Status Dalam Keluarga" value="<?= $data['statusKeluarga']; ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email-id-column">Kewarganegaraan</label>
                                            <input type="text" id="email-id-column" class="form-control" name="kewarganegaraan" placeholder="Kewarganegaraan" value="<?= $data['kewarganegaraan']; ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="card-header">
                                        <h5 class="">Identitas Ayah Kandung/Tiri/Angkat/Wali</h5>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="NamaAyah">Nama Ayah</label>
                                            <input type="text" id="NamaAyah" class="form-control" name="namaAyah" placeholder="Nama Ayah" value="<?= $data['namaAyah']; ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="KotaKelahiranAyah">Kota Kelahiran Ayah</label>
                                            <input type="text" id="KotaKelahiranAyah" class="form-control" name="kotaKelahiranAyah" placeholder="Kota Kelahiran Ayah" value="<?= $data['kotaKelahiranAyah']; ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="tglLahirAyah">Tanggal Lahir Ayah</label>
                                            <input type="date" id="tglLahirAyah" class="form-control" name="tglLhrAyah" placeholder="Tanggal Lahir Ayah" value="<?= $data['tanggalLahirAyah']; ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="agama">Agama</label>
                                            <select class="choices form-select" name="agamaAyah">
                                                <option value="<?= $data['agamaAyah']; ?>"><?= $data['agamaAyah']; ?></option>
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen Protestan">Kristen Protestan</option>
                                                <option value="Kristen Katolik">Kristen Katolik</option>
                                                <option value="Buddha">Buddha</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Khonghucu">Khonghucu</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="kewarganegaraan">Kewarganegaraan</label>
                                            <input type="text" id="kewarganegaraan" class="form-control" name="wnAyah" placeholder="Kewarganegaraan" value="<?= $data['wnAyah']; ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="pekerjaan">Pekerjaan Ayah</label>
                                            <input type="text" id="pekerjaan" class="form-control" name="pekerjaanAyah" placeholder="Pekerjaan Ayah" value="<?= $data['pekerjaanAyah']; ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="agama">Pendidikan</label>
                                            <select class="choices form-select" name="pendidikanAyah">
                                                <option value="<?= $data['pendidikanAyah']; ?>"><?= $data['pendidikanAyah']; ?></option>
                                                <option value="Tidak Bersekolah">Tidak Bersekolah</option>
                                                <option value="SD">SD</option>
                                                <option value="SMP">SMP</option>
                                                <option value="SMA">SMA</option>
                                                <option value="Sarjana 1 (S1)">Sarjana 1 (S1)</option>
                                                <option value="Sarjana 2 (S2)">Sarjana 2 (S2)</option>
                                                <option value="Sarjana 3 (S3)">Sarjana 3 (S3)</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="card-header">
                                        <h5 class="">Identitas Ibu Kandung/Tiri/Angkat/Wali</h5>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="NamaIbu">Nama Ibu</label>
                                            <input type="text" id="NamaIbu" class="form-control" name="namaIbu" placeholder="Nama Ibu" value="<?= $data['namaIbu']; ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="KotaKelahiranIbu">Kota Kelahiran Ibu</label>
                                            <input type="text" id="KotaKelahiranIbu" class="form-control" name="kotaKelahiranIbu" placeholder="Kota Kelahiran Ibu" value="<?= $data['kotaKelahiranIbu']; ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="tglLahirIbu">Tanggal Lahir Ibu</label>
                                            <input type="date" id="tglLahirIbu" class="form-control" name="tglLhrIbu" placeholder="Tanggal Lahir Ibu" value="<?= $data['tanggalLahirIbu']; ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="agama">Agama</label>
                                            <select class="choices form-select" name="agamaIbu">
                                                <option value="<?= $data['agamaIbu']; ?>"><?= $data['agamaIbu']; ?></option>
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen Protestan">Kristen Protestan</option>
                                                <option value="Kristen Katolik">Kristen Katolik</option>
                                                <option value="Buddha">Buddha</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Khonghucu">Khonghucu</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="kewarganegaraan">Kewarganegaraan</label>
                                            <input type="text" id="kewarganegaraan" class="form-control" name="wnIbu" placeholder="Kewarganegaraan" value="<?= $data['wnIbu']; ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="pekerjaan">Pekerjaan Ibu</label>
                                            <input type="text" id="pekerjaan" class="form-control" name="pekerjaanIbu" placeholder="Pekerjaan Ibu" value="<?= $data['pekerjaanIbu']; ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="agama">Pendidikan</label>
                                            <select class="choices form-select" name="pendidikanIbu">
                                                <option value="<?= $data['pendidikanIbu']; ?>"><?= $data['pendidikanIbu']; ?></option>
                                                <option value="Tidak Bersekolah">Tidak Bersekolah</option>
                                                <option value="SD">SD</option>
                                                <option value="SMP">SMP</option>
                                                <option value="SMA">SMA</option>
                                                <option value="Sarjana 1 (S1)">Sarjana 1 (S1)</option>
                                                <option value="Sarjana 2 (S2)">Sarjana 2 (S2)</option>
                                                <option value="Sarjana 3 (S3)">Sarjana 3 (S3)</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="nohp">Nomor Handphone</label>
                                            <input type="number" id="nohp" class="form-control" name="nohp" placeholder="Nomor Handphone" value="<?= $data['nohp']; ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <div class="form-floating">
                                                <textarea class="form-control" placeholder="Alamat" id="floatingTextarea" name="alamat"><?= $data['alamat']; ?></textarea>
                                                <label for="floatingTextarea">Alamat</label>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-sm-12 d-flex justify-content-end mt-5">
                                            <button type="submit" class="btn btn-success me-1 mb-1 btn-lg">Daftar</button>
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1 btn-lg">Reset</button>
                                        </div>
                                    </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- // Basic multiple Column Form section end -->
</div>
<?= $this->endSection() ?>