
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <a href="<?= base_url(); ?>Karyawan_ti/pegawai"><button class="btn btn-info"><i class=" fa fa-arrow-circle-left"></i> Kembali</button></a>
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
                                  <button class="btn btn-primary"><i class="fa fa-address-card"></i><br/><font style="font-size: 10px;">Ubah Login Pegawai</font></button></a>
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
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Detail Data Pegawai</a> </li>
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
        <div class="right-sidebar">
            <div class="slimscrollright">
                <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                <div class="r-panel-body">
                    <ul id="themecolors" class="m-t-20">
                        <li><b>With Light sidebar</b></li>
                        <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                        <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                        <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                        <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
                        <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                        <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                        <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                        <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                        <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                        <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                        <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                        <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                        <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                    </ul>
                    <ul class="m-t-20 chatonline">
                        <li><b>Chat option</b></li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
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
