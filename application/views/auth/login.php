
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper" class="login-register login-sidebar" style="background-image:url(<?= base_url(); ?>assets/images/background/login-register.jpeg);">
        <div class="login-box card">
            <div class="card-body">
                <form class="form-horizontal form-material" id="loginform" method="post" action="<?= base_url('auth');?>">
                    <a href="javascript:void(0)" class="text-center db"><img src="<?= base_url(); ?>assets/images/logo-icon.png" alt="Home" /><br/><img src="<?= base_url(); ?>assets/images/logo-text.png" alt="Home" /></a>
                    <br/><?= $this->session->flashdata('reset_pass'); ?><?= $this->session->flashdata('login_fail'); ?> <?= $this->session->flashdata('logout'); ?>
                    <div class="form-group m-t-40">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" placeholder="Username" name="username" id="username" value="<?= set_value('username'); ?>" maxlength="18">
                            <small class="text-danger"><?= form_error('username');?></small>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" placeholder="Password" name="password" id="password">
                            <small class="text-danger"><?= form_error('password');?></small>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <a href="<?= base_url();?>auth/lupa_password" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Lupa Password?</a> </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Masuk</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
