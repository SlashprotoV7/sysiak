
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper" class="login-register login-sidebar" style="background-image:url(<?= base_url(); ?>assets/images/background/login-register.jpeg);">
        <div class="login-box card">
            <div class="card-body">
                <form class="form-horizontal form-material" id="loginform" method="post" action="<?= base_url();?>auth/lupa_password">
                    <a href="javascript:void(0)" class="text-center db"><img src="<?= base_url(); ?>assets/images/logo-icon.png" alt="Home" /><br/><img src="<?= base_url(); ?>assets/images/logo-text.png" alt="Home" /></a>
                    <div class="form-group m-t-40">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" placeholder="Username" name="username1" id="username1" value="<?= set_value('username1'); ?>" maxlength="18">
                            <small class="text-danger"><?= form_error('username1');?></small>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" placeholder="Password Baru" name="password1" id="password1">
                            <small class="text-danger"><?= form_error('password1');?></small>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" placeholder="Ulangi Password Baru" name="password2" id="password2">
                            <small class="text-danger"><?= form_error('password2');?></small>
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                        </div><br/>
                        <div class="col-xs-12">
                            <a href="<?= base_url(); ?>" class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light">Kembali</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
