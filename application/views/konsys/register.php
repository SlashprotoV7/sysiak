<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Tambah User</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Manajemen User</a></li>
                <li class="breadcrumb-item">Tambah</li>
                <li class="breadcrumb-item"><i class="mdi mdi-account-key"></i></li>
            </ol>
        </div>
        <div>
            <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->

    <!-- Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">Form Tambah User</h4>
                </div>
                <div class="card-body">
                    <form action="" class="form-horizontal" method="post">
                        <div class="form-body">
                            <h3 class="box-title">Silahkan Disikan Data User dengan Benar!</h3>
                            <hr class="m-t-0 m-b-40">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Nama Pegawai</label>
                                        <div class="col-md-9">
                                            <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="id_nip" id="id_nip">
                                                <option value="#">Pilih Nama Pegawai</option>
                                                <?php foreach ($usr2 as $usr22):?>
                                                  <option value="<?= $usr22['nip'];?>"> <?= $usr22['nama'];?> </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Level_Akun</label>
                                        <div class="col-md-9">
                                            <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="jenis" id="jenis">
                                                <option value="#">Pilih Satu</option>
                                                <?php foreach ($usr1 as $usr11):?>
                                                  <option value="<?= $usr11['id'];?>"><?= $usr11['jenis'];?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Password</label>
                                        <div class="col-md-9">
                                            <input type="password" class="form-control" placeholder="password" name="password1" id="password1">
                                            <?php if ( form_error('password1') == true ) :?>
                                              <small class="form-text text-danger"><?= form_error('password1'); ?></small>
                                            <?php endif;?>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Status_Aktivasi</label>
                                        <div class="col-md-9">
                                            <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="actived1" id="actived1">
                                                <option value="#">Pilih Satu</option>
                                                <option value="1">Aktif</option>
                                                <option value="0">Tidak Aktif</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Confirm Password</label>
                                        <div class="col-md-9">
                                            <input type="password" class="form-control" placeholder="confirm password" name="password2" id="password2">
                                            <?php if ( form_error('password2') == true ) :?>
                                              <small class="form-text text-danger"><?= form_error('password2'); ?></small>
                                            <?php endif;?>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->

                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" class="btn btn-success">Submit</button>
                                            <button type="button" class="btn btn-inverse"><a href="<?= base_url();?>konsys/manage_user">Kembali</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->

</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
