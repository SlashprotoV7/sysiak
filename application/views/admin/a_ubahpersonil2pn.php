<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
      <div class="col-md-5 align-self-center">
          <h4 class="text-themecolor"> <a href="<?= base_url(); ?>Admin/a_data_personilpn"><button class="btn btn-info">
          <i class=" fa fa-arrow-circle-left"></i> Kembali</button></a> &nbsp;&nbsp; <?= $judul; ?></h4>
      </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Beranda</a></li>
                <li class="breadcrumb-item">Kepegawaian</li>
                <li class="breadcrumb-item active">Ubah Personil PN</li>
            </ol>
        </div>
        <div class="">
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

        <!-- vertical wizard -->
        <div class="row" id="validation">
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body">
                      <center class="m-t-30"> <img src="<?= base_url();?>assets/images/users/5.jpg" class="img-circle" width="150" />
                          <h4 class="card-title m-t-10"><?= $datapersonil['nama'];?></h4>
                          <input type="hidden" name="nama_p" id="nama_p" value="<?= $datapersonil['nama'];?>">
                          <h6 class="card-subtitle">ID : <?= $datapersonil['nip'];?></h6>
                          <div class="row text-center justify-content-md-center">
                              <div>
                                <a href="<?= base_url();?>Konsys/ubah1/">
                                  <button class="btn btn-primary"><i class="fa fa-address-card"></i><br/>
                                    <font style="font-size: 10px;">
                                    <?php foreach ( $status as $s1 ) :?>
                                    <?php if (  $s1['id'] == $datapersonil['status2'] ){ ?>
                                        Ubah Login <?= $s1['status']; } ?>
                                    <?php endforeach; ?>
                                    </font>
                                  </button>
                                </a>
                              </div>
                          </div>
                      </center>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-xlg-9 col-md-7">
              <div class="card">
                  <div class="card-body wizard-content ">
                      <h4 class="card-title">Silahkan Perbarui Datanya dengan Benar!</h4>
                      <h6 class="card-subtitle">Klik Tombol <a href="#" target="_blank">NEXT</a> Untuk Melanjutkan Pengisian/Perubahan Data &</h6>
                      <h6 class="card-subtitle">Klik Tombol <a href="#" target="_blank">PREVIOUS</a> Untuk Kembali Melakukan Pengecekan Data.</h6>
                      <form action="<?= base_url();?>Admin/a_ubahpersonilpn2" class="tab-wizard vertical wizard-circle" method="post">
                          <!-- Step 1 -->
                          <h6>Informasi Diri</h6>
                          <section style="margin-top: 10px;">
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group">
                                          <label for="firstName1">Nama :</label>
                                          <input type="text" class="form-control" required="required" name="nama1" id="nama1" value="<?= $datapersonil['nama']; ?>">
                                          <?php if ( form_error('nama1') == true ) :?>
                                          <small class="form-text text-danger"><?= form_error('nama1'); ?></small>
                                          <?php endif;?>

                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phoneNumber1">Tempat Lahir :</label>
                                        <input type="text" class="form-control" name="tl1" id="tl1" value="<?= $datapersonil['tempat_lahir']; ?>">
                                        <?php if ( form_error('tl1') == true ) :?>
                                        <small class="form-text text-danger"><?= form_error('tl1'); ?></small>
                                        <?php endif;?>
                                    </div>
                                </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="date1">Tanggal Lahir :</label>
                                          <input type="date" class="form-control" name="tl2" id="tl2" value="<?= $datapersonil['tgl_lahir']; ?>"> </div>
                                          <?php if ( form_error('tl2') == true ) :?>
                                          <small class="form-text text-danger"><?= form_error('tl2'); ?></small>
                                          <?php endif;?>
                                  </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="intType1">Jenis Kelamin :</label>
                                      <select class="form-control" tabindex="1" name="gender1" id="gender1">
                                        <?php foreach( $gender as $ju ): ?>
                                          <?php if ( $ju['id'] == $datapersonil['gender'] ){ ?>
                                            <option value="<?= $ju['id']; ?>" selected><?= $ju['gender']; ?></option>
                                          <?php } else {?>
                                            <option value="<?= $ju['id']; ?>"><?= $ju['gender']; ?></option>
                                          <?php } ?>
                                        <?php endforeach;?>
                                      </select>
                                      <?php if ( form_error('gender1') == true ) :?>
                                      <small class="form-text text-danger"><?= form_error('gender1'); ?></small>
                                      <?php endif;?>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="intType1">Status :</label>
                                      <select class="form-control custom-select" tabindex="1" name="status1" id="status1" value="<?= $datapersonil['status1'];?>">
                                          <option value="">Pilih Status</option>
                                          <?php foreach ($status_nikah as $ju1):?>
                                            <?php if ( $ju1['id'] == $datapersonil['status1'] && $ju1['kode'] == "h" ){?>
                                              <option value="<?= $ju1['id'];?>" selected> <?= $ju1['status'];?></option>
                                            <?php } else {?>
                                              <option value="<?= $ju1['id'];?>"> <?= $ju1['status'];?></option>
                                            <?php } ?>
                                          <?php endforeach; ?>
                                          <?php if ( form_error('status1') == true ) :?>
                                          <small class="form-text text-danger"><?= form_error('status1'); ?></small>
                                          <?php endif;?>
                                      </select>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="emailAddress1">Alamat Email :</label>
                                        <input type="email" class="form-control" name="email1" id="email1" value="<?= $datapersonil['email'];?>"> </div>
                                        <?php if ( form_error('email1') == true ) :?>
                                        <small class="form-text text-danger"><?= form_error('email1'); ?></small>
                                        <?php endif;?>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phoneNumber1">Nomor HP :</label>
                                        <input type="text" class="form-control" name="nohp1" id="nohp1" value="<?= $datapersonil['no_hp'];?>"> </div>
                                        <?php if ( form_error('nohp1') == true ) :?>
                                        <small class="form-text text-danger"><?= form_error('nohp1'); ?></small>
                                        <?php endif;?>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="intType1">Nama Perguruan Tinggi :</label>
                                      <input type="text" class="form-control" name="univ1" id="univ1" value="<?= $datapersonil['pendidikan'];?>">
                                      <?php if ( form_error('univ1') == true ) :?>
                                      <small class="form-text text-danger"><?= form_error('univ1'); ?></small>
                                      <?php endif;?>
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                      <label for="intType1">Ijazah :</label>
                                      <select class="form-control custom-select" tabindex="1" name="ijazah1" id="ijazah1" value="<?= $datapersonil['tk_jazah'];?>">
                                          <option value="#">Pilih Ijazah</option>
                                          <?php foreach ($ijazah as $ju3):?>
                                            <?php if ( $ju3['id'] == $datapersonil['tk_ijazah'] ){?>
                                              <option value="<?= $ju3['id'];?>" selected> <?= $ju3['tk_ijazah'];?></option>
                                            <?php } else {?>
                                              <option value="<?= $ju3['id'];?>"> <?= $ju3['tk_ijazah'];?></option>
                                            <?php } ?>
                                          <?php endforeach; ?>
                                          <?php if ( form_error('ijazah1') == true ) :?>
                                          <small class="form-text text-danger"><?= form_error('ijazah1'); ?></small>
                                          <?php endif;?>
                                      </select>
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                      <label for="intType1">Tahun Lulus :</label>
                                      <input type="text" class="form-control" name="pend_tahun1" id="pend_tahun1" value="<?= $datapersonil['pend_tahun'];?>">
                                      <?php if ( form_error('pend_tahun1') == true ) :?>
                                      <small class="form-text text-danger"><?= form_error('pend_tahun1'); ?></small>
                                      <?php endif;?>
                                  </div>
                                </div>
                              </div>
                          </section>
                          <!-- Step 2 -->
                          <h6>Informasi Pekerjaan I</h6>
                          <section>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                    <label for="intType1">ID Honorer :</label>
                                    <input type="number" value="<?= $datapersonil['nip']; ?>" class="form-control form-control-line" readonly>
                                    <input type="hidden" name="idh1" id="idh1" value="<?= $datapersonil['nip']; ?>" class="form-control form-control-line" max_length="18">

                                </div>
                              </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="intType1">Jabatan :</label>
                                      <select class="form-control custom-select" tabindex="1" name="jabatan1" id="jabatan1"  value="<?= $datapersonil['jabatan']; ?>">
                                          <option value="#">Pilih Jabatan</option>
                                          <?php foreach( $jabatan as $ju5 ): ?>
                                            <?php if ( $ju5['id'] == $datapersonil['jabatan'] ){ ?>
                                              <option value="<?= $ju5['id']; ?>" selected><?= $ju5['jabatan']; ?></option>
                                            <?php } else {?>
                                              <option value="<?= $ju5['id']; ?>"><?= $ju5['jabatan']; ?></option>
                                            <?php } ?>
                                          <?php endforeach;?>
                                      </select>
                                      <?php if ( form_error('jabatan1') == true ) :?>
                                      <small class="form-text text-danger"><?= form_error('jabatan1'); ?></small>
                                      <?php endif;?>
                                   </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phoneNumber1">TMT :</label>
                                        <input type="date" class="form-control" name="tmt2" id="tmt2" value="<?= $datapersonil['tmt2']; ?>">
                                        <?php if ( form_error('tmt2') == true ) :?>
                                        <small class="form-text text-danger"><?= form_error('tmt2'); ?></small>
                                        <?php endif;?>
                                    </div>
                                </div>
                            </div>

                          </section>
                      </form>
                  </div>
              </div>
            </div>
        </div>
        <!-- end vertical wizard -->

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
