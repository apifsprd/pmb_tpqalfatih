<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="index.html">
                        <h4>TPQ ALFATIH</h4>
                    </a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item">
                    <a href="<?= base_url('user'); ?>" class='sidebar-link'>
                        <i class="bi bi-house-door-fill"></i>
                        <span>Beranda</span>
                    </a>
                </li>


                <?php if (in_groups('user')) : ?>
                    <li class="sidebar-item">
                        <a href="<?= base_url('user/daftar'); ?>" class='sidebar-link'>
                            <i class="bi bi-file-earmark-fill"></i>
                            <span>Form Pendaftaran</span>
                        </a>
                    </li>
                <?php endif; ?>

                <li class="sidebar-item">
                    <a href="<?= base_url('user/profile'); ?>" class='sidebar-link'>
                        <i class="bi bi-person-circle"></i>
                        <span>Profil</span>
                    </a>
                </li>

                <?php if (in_groups('admin') || in_groups('superadmin')) : ?>
                    <li class="sidebar-title">Menagement</li>

                    <li class="sidebar-item">
                        <a href="<?= base_url('user/daftarPengguna'); ?>" class='sidebar-link'>
                            <i class="bi bi-people-fill"></i>
                            <span>Daftar Pengguna</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="<?= base_url('user/dataPendaftar'); ?>" class='sidebar-link'>
                            <i class="bi bi-file-earmark-fill"></i>
                            <span>Data Pendaftar</span>
                        </a>
                    </li>

                    <?php if (in_groups('superadmin')) : ?>
                        <li class="sidebar-item">
                            <a href="<?= base_url('user/dataValid'); ?>" class='sidebar-link'>
                                <i class="bi bi-file-check-fill"></i>
                                <span>Data Valid</span>
                            </a>
                        </li>
                    <?php endif; ?>


                <?php endif; ?>

                <li class="sidebar-title">Setting</li>

                <li class="sidebar-item">
                    <a href="<?= base_url('logout'); ?>" class='sidebar-link'>
                        <i class="bi bi-box-arrow-left"></i>
                        <span>Logout</span>
                    </a>
                </li>

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>