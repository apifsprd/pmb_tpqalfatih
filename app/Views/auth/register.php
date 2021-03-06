<?= $this->extend('layouts/authTemplate') ?>

<?= $this->section('content') ?>
<div class="row h-100">
    <div class="col-lg-5 col-12">
        <div id="auth-left">
            <div class="auth-logo">
                <a href="index.html">
                    <h4><strong>TPQ ALFATIH</strong></h4>
                </a>
            </div>

            <?= view('Myth\Auth\Views\_message_block') ?>

            <h1 class="auth-title"><?= lang('Auth.register') ?></h1>
            <p class="auth-subtitle mb-5">Input your data to register to our website.</p>

            <form action="<?= route_to('register') ?>" method="post">
                <?= csrf_field() ?>

                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="email" class="form-control form-control-xl <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" placeholder="Email" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                    <div class="form-control-icon">
                        <i class="bi bi-envelope"></i>
                    </div>
                </div>

                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="text" class="form-control form-control-xl <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="password" name="password" class="form-control form-control-xl <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="password" name="pass_confirm" class="form-control form-control-xl <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
                <button class="btn btn-primary btn-block btn-lg shadow-lg mt-2"><?= lang('Auth.register') ?></button>
            </form>
            <div class="text-center mt-5 text-lg fs-4" style="font-size:small !important;">
                <p class='text-gray-600'><?= lang('Auth.alreadyRegistered') ?><a href="<?= route_to('login') ?>" class="font-bold"><?= lang('Auth.signIn') ?></a>.</p>
            </div>
        </div>
    </div>
    <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right">

        </div>
    </div>
</div>
<?= $this->endSection() ?>