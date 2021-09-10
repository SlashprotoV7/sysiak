
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <a href="<?= base_url(); ?>Konsys/manage_user"><button class="btn btn-info"><i class=" fa fa-arrow-circle-left"></i> Kembali</button></a>
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
      <?php if ( $datauser['nip'] ) {?>
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
                            <h4 class="card-title m-t-10"><?= $datauser['namas'];?></h4>
                            <input type="hidden" name="nama_p" id="nama_p" value="<?= $datauser['namas'];?>">
                            <h6 class="card-subtitle">NIP : <?= $datauser['id_nip'];?></h6>
                            <div class="row text-center justify-content-md-center">
                                <div class="col-2"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-medium"><?= $datauser['panggols'];?></font></a></div>
                                <div class="col-4"><a href="<?= base_url();?>Karyawan_ti/ubahpegawai1/<?= $datauser['id_nip'];?>">
                                  <button class="btn btn-primary"><i class="fa fa-address-card"></i><br/><font style="font-size: 10px;">Ubah Data Pegawai</font></button></a>
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
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Detail Data User</a> </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">

                        <div class="tab-pane active" id="settings" role="tabpanel">
                            <div class="card-body">
                                <form class="form-horizontal form-material" method="post" action="">

                                    <div class="form-group">
                                        <label class="col-md-12"><b>NIP</b></label>
                                        <div class="col-md-12">
                                            <input placeholder="<?= $datauser['id_nip']; ?>" class="form-control form-control-line" readonly>
                                            <input type="hidden" name="nip" id="nip" value="<?= $datauser['id_nip']; ?>" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="col-md-12"><b>Jenis</b></label>
                                      <div class="col-md-12">
                                        <select class="form-control" tabindex="1" name="jenis" id="jenis">
                                          <?php foreach( $st as $ju ): ?>
                                            <?php if ( $ju['id'] == $datauser['jenis_user'] ){ ?>
                                              <option value="<?= $ju['id']; ?>" selected><?= $ju['jenis']; ?></option>
                                            <?php } else {?>
                                              <option value="<?= $ju['id']; ?>"><?= $ju['jenis']; ?></option>
                                            <?php } ?>
                                          <?php endforeach;?>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="col-md-12"><b>Status Aktivasi</b></label>
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
                                        <label class="col-md-12"><b>Password</b></label>
                                        <div class="col-md-12">
                                            <input type="password" name="password1" id="password1" placeholder="*****" class="form-control form-control-line">
                                            <?php if ( form_error('password1') == true ) :?>
                                              <small class="form-text text-danger"><?= form_error('password1'); ?></small>
                                            <?php endif;?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"><b>Konfirmasi Password</b></label>
                                        <div class="col-md-12">
                                            <input type="password" name="password2" id="password2" placeholder="*****" class="form-control form-control-line">
                                            <?php if ( form_error('password2') == true ) :?>
                                              <small class="form-text text-danger"><?= form_error('password2'); ?></small>
                                            <?php endif;?>
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
      <?php } else { ?>
        <div class="card">
            <div class="card-body">
            <div style="margin-top:20px; text-align:center;"><i class="fa fa-warning" style="font-size: 200px;"></i><br/><br/><font style="font-size:25px; margin-top: 40px;"><b>USER INI TIDAK MEMILIKI AKUN LOGIN KE APLIKASI!</b></font><br/><small>Silahkan Dibuatkan Terlebih Dahulu</small>
              <div class="row"  style="width: 100%; margin-top: 25px;">
                <div class="col-xs-6 col-md-4"></div>
                   <div class="col-xs-6 col-md-4">
                     <a href="<?= base_url(); ?>konsys/register"  style="margin-right: 10px; margin-left: 10px;"><button type="button" class="btn btn-md btn-info" style="padding-left:20px ; padding-right: 20px ;">Tambah Hak Akses Login</button></a>
                     <a href="<?= base_url('home'); ?>"><button type="button" class="btn btn-md btn-icon" aria-hidden="true">kembali</button></a>
                   </div>
                 <div class="col-xs-6 col-md-4"></div>
               </div>
            </div>
          </div>
       </div>
      <?php } ?>
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
