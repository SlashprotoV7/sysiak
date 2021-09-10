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
                <li class="breadcrumb-item"><a href="javascript:void(0)">Manajemen Pegawai</a></li>
                <li class="breadcrumb-item">Tambah</li>
                <li class="breadcrumb-item"><i class="mdi mdi-account-card-details"></i></li>
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
                    <h4 class="m-b-0 text-white">Form Tambah Karyawan_Ti</h4>
                </div>
                <div class="card-body">
                    <form action="" class="form-horizontal" method="post">
                        <div class="form-body">
                            <h3 class="box-title">Silahkan Disikan Data Pegawai dengan Benar!</h3>
                            <hr class="m-t-0 m-b-40">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Nama</label>
                                        <div class="col-md-9">
                                          <input type="text" class="form-control" placeholder="Nama Pegawai" name="nama" id="nama">
                                          <?php if ( form_error('nama') == true ) :?>
                                          <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                                          <?php endif;?>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Jabatan</label>
                                        <div class="col-md-9">
                                            <select class="form-control custom-select" tabindex="1" name="jabatan" id="jabatan">
                                                <option value="#">Pilih Jabatan</option>
                                                <?php foreach ($usr1 as $usr11):?>
                                                <option value="<?= $usr11['id']; ?>"> <?= $usr11['jabatan'];?> </option>
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
                                      <label class="control-label text-right col-md-3">NIP</label>
                                      <div class="col-md-9">
                                        <input type="text" class="form-control" placeholder="NIP" name="nip" id="nip">
                                        <?php if ( form_error('nip') == true ) :?>
                                          <small class="form-text text-danger"><?= form_error('nip'); ?></small>
                                        <?php endif;?>
                                      </div>
                                  </div>
                              </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Pangkat/Golongan</label>
                                        <div class="col-md-9">
                                          <select class="form-control custom-select" tabindex="1" name="panggol" id="panggol">
                                              <option value="#">Pilih Jabatan</option>
                                              <?php foreach ($usr2 as $usr22):?>
                                                <option value="<?= $usr22['id'];?>"> <?= $usr22['panggol'];?> </option>
                                              <?php endforeach; ?>
                                          </select>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->

                            <!--/row-->

                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" class="btn btn-success">Submit</button>
                                            <button type="button" class="btn btn-inverse"><a href="<?= base_url();?>karyawan_ti/pegawai">Kembali</a></button>
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
