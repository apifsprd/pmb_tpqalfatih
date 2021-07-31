<nav class="navbar navbar-expand-lg navbar-light">
    <a href="#">
        <img style="margin-right:0.75rem; width: 3rem;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROn8mgGoxQS58Kw6ptGNBRxChmQ227D6585Q&usqp=CAU" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="modal" data-bs-target="#targetModal-header-2-2">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="modal-header-2-2 modal fade" id="targetModal-header-2-2" tabindex="-1" role="dialog" aria-labelledby="targetModalLabel-header-2-2" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-header-2-2">
                <div class="modal-header" style="padding:	2rem; padding-bottom: 0;">
                    <a class="modal-title" id="targetModalLabel-header-2-2">
                        <img style="margin-top:0.5rem" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROn8mgGoxQS58Kw6ptGNBRxChmQ227D6585Q&usqp=CAU" alt="">
                    </a>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body" style="padding:	2rem; padding-top: 0; padding-bottom: 0;">
                    <ul class="navbar-nav responsive-header-2-2 me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('page/home'); ?>">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('page/kelas'); ?>">Kelas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('page/guru'); ?>">Guru</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('page/pendaftaran'); ?>">Pendaftaran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('page/info'); ?>">Informasi</a>
                        </li>
                    </ul>
                </div>
                <div class="modal-footer" style="padding:	2rem; padding-top: 0.75rem">
                    <a class="btn btn-default btn-no-fill-header-2-2" href="<?= base_url('user'); ?>">Masuk</a>
                    <a class="btn btn-fill-header-2-2" href="<?= base_url('user'); ?>">Daftar</a>
                </div>
            </div>
        </div>
    </div>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo-header-2-2">
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('page/home'); ?>">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('page/kelas'); ?>">Kelas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('page/guru'); ?>">Guru</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('page/pendaftaran'); ?>">Pendaftaran</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('page/info'); ?>">Informasi</a>
            </li>
        </ul>
        <a class="btn btn-default btn-no-fill-header-2-2" href="<?= base_url('user'); ?>">Masuk</a>
        <a class="btn btn-fill-header-2-2" href="<?= base_url('user'); ?>">Daftar</a>
    </div>
</nav>