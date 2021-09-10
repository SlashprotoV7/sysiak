
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <a href="<?= base_url(); ?>Karyawan_ti/honorer"><button class="btn btn-info"><i class=" fa fa-arrow-circle-left"></i> Kembali</button></a>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item">pages</li>
                <li class="breadcrumb-item active">Profile</li>
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
            <!-- Column -->
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body">
                        <center class="m-t-30"> <img src="<?= base_url();?>assets/images/users/5.jpg" class="img-circle" width="150" />
                            <h4 class="card-title m-t-10"><?= $datauser['nama'];?></h4>
                            <input type="hidden" name="nama_p" id="nama_p" value="<?= $datauser['nama'];?>">
                            <h6 class="card-subtitle">NIP : <?= $datauser['nip']; ?></h6>
                            <div class="row text-center justify-content-md-center">
                                <div><a href="<?= base_url();?>Konsys/ubah1/<?= $datauser['nip'];?>">
                                  <button class="btn btn-primary"><i class="fa fa-address-card"></i><br/><font style="font-size: 10px;">Ubah Login Honorer</font></button></a>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs profile-tab" role="tablist">
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Detail Data honorer</a> </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">

                        <div class="tab-pane active" id="settings" role="tabpanel">
                            <div class="card-body">
                                <form class="form-horizontal form-material" method="post" action="">
                                  <div class="form-group">
                                      <label class="col-md-12"><b>Nama</b></label>
                                      <div class="col-md-12">
                                          <input type="text" name="nama" id="nama" value="<?= $datauser['nama']; ?>" class="form-control form-control-line">
                                      </div>
                                      <?php if ( form_error('nama') == true ) :?>
                                      <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                                      <?php endif;?>
                                  </div>
                                    <div class="form-group">
                                        <label class="col-md-12"><b>NIP</b></label>
                                        <div class="col-md-12">
                                            <input type="number" value="<?= $datauser['nip']; ?>" class="form-control form-control-line" readonly>
                                            <input type="hidden" name="nip" id="nip" value="<?= $datauser['nip']; ?>" class="form-control form-control-line" max_length="18">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"><b>Jabatan</b></label>
                                        <div class="col-md-12">
                                            <select class="form-control" tabindex="1" name="jabatan" id="jabatan">
                                              <?php foreach( $st2 as $ju2 ): ?>
                                                <?php if ( $ju2['id'] == $datauser['jabatan'] ){ ?>
                                                  <option value="<?= $ju2['id']; ?>" selected><?= $ju2['jabatan']; ?></option>
                                                <?php } else {?>
                                                  <option value="<?= $ju2['id']; ?>"><?= $ju2['jabatan']; ?></option>
                                                <?php } ?>
                                              <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"><b>Pangkat/Golongan</b></label>
                                        <div class="col-md-12">
                                            <select class="form-control" tabindex="1" name="panggol" id="panggol">
                                              <?php foreach( $st as $ju ): ?>
                                                <?php if ( $ju['id'] == $datauser['panggol'] ){ ?>
                                                  <option value="<?= $ju['id']; ?>" selected><?= $ju['panggol']; ?></option>
                                                <?php } else {?>
                                                  <option value="<?= $ju['id']; ?>"><?= $ju['panggol']; ?></option>
                                                <?php } ?>
                                              <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="col-md-12"><b>Status</b></label>
                                      <div class="col-md-12">
                                        <select class="form-control" tabindex="1" name="actived1" id="actived1">
                                          <?php foreach( $st1 as $ju1 ): ?>
                                            <?php if ( $ju1['id'] == $datauser['status'] ){ ?>
                                                <option value="<?= $ju1['id']; ?>" selected><?= $ju1['aktivasii']; ?></option>
                                            <?php } else {?>
                                              <option value="<?= $ju1['id']; ?>"><?= $ju1['aktivasii']; ?></option>
                                            <?php } ?>
                                          <?php endforeach;?>
                                        </select>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-12">
                                          <button class="btn btn-success waves-effect waves-light" type="submit"><span class="btn-label"><i class="fa fa-save"></i></span>Simpan Data</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- Row -->
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->

        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer">
        © 2017 Admin Press Admin by themedesigner.in
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
