
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
                <li class="breadcrumb-item"><a href="javascript:void(0)">Kepegawaian</a></li>
                <li class="breadcrumb-item">Data Personil PN</li>
                <li class="breadcrumb-item active">Register Personil PN</li>
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
      <!-- Notifikasi Hapus, Edit, Tambah Data -->
      <?php if ( $this->session->flashdata('addpersonil') ) { ?>
      <div class="alert alert-success">
          <strong><?= $this->session->flashdata('addpersonil'); ?></strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
      </div>
    <?php } elseif ( $this->session->flashdata('addpersonil1') )  { ?>
        <div class="alert alert-danger">
            <strong><?= $this->session->flashdata('addpersonil1'); ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
        </div>
      <?php } ?>
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row el-element-overlay">
            <div class="col-md-12">
                <h4 class="card-title"> </h4>
                <h6 class="card-subtitle m-b-20 text-muted"></h6> </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"> <img src="<?= base_url(); ?>assets/images/users/1.jpg" alt="user" />
                            <div class="el-overlay">
                                <ul class="el-info">
                                    <li><a class="btn default btn-outline" data-toggle="modal" data-target="#ASNModal" href="javascript:void(0);"><i class="icon-user-follow"></i>&nbsp; Register</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="el-card-content">
                            <h3 class="box-title">Pegawai MA</h3><hr> <small>PN TANJUNG BALAI KARIMUN KELAS II</small>
                            <br/> </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"> <img src="<?= base_url(); ?>assets/images/users/2.jpg" alt="user" />
                            <div class="el-overlay">
                                <ul class="el-info">
                                    <li><a class="btn default btn-outline" data-toggle="modal" data-target="#HonorModal" href="javascript:void(0);"><i class="icon-user-follow"></i>&nbsp; Register</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="el-card-content">
                            <h3 class="box-title">Honorer DIPA</h3><hr> <small>PN TANJUNG BALAI KARIMUN KELAS II</small>
                            <br/> </div>
                    </div>
                </div>
            </div>
            <!--
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"><img src="<?= base_url(); ?>assets/images/users/3.jpg" alt="user" />
                            <div class="el-overlay scrl-dwn">
                                <ul class="el-info">
                                    <li><a class="btn default btn-outline" href="javascript:void(0);"><i class="icon-lock"></i>&nbsp;</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="el-card-content">
                            <h3 class="box-title">Honorer Non-DIPA</h3><hr> <small>PN TANJUNG BALAI KARIMUN KELAS II</small>
                            <br/> </div>
                    </div>
                </div>
            </div>
          -->
            <div class="col-md-6">
              <div class="card">
                  <div class="card-body">
                      <h4 class="card-title">Total Personil PN Tanjung Balai Karimun</h4>
                      <h6 class="card-subtitle">Per Bulan <b><?= strtoupper($bln_now['indeks_bulan']); ?></b> <code><?= Date('Y');?></code></h6>
                      <div class="table-responsive">
                          <table class="table table-hover">
                              <thead>
                                  <tr>
                                      <th>#</th>
                                      <th>Kategori</th>
                                      <th>Jumlah</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>1.</td>
                                      <td>Hakim</td>
                                      <td><span class="text-danger text-semibold"><i class="fa fa-user-circle" aria-hidden="true"></i> <?= $total1; ?> Orang</span> </td>
                                  </tr>
                                  <tr>
                                      <td>2.</td>
                                      <td>Pegawai</td>
                                      <td><span class="text-success text-semibold"><i class="fa fa-user-circle" aria-hidden="true"></i> <?= $total2; ?> Orang</span> </td>
                                  </tr>
                                  <tr>
                                      <td>3.</td>
                                      <td>Honorer</td>
                                      <td><span class="text-warning text-semibold"><i class="fa fa-user-circle" aria-hidden="true"></i> <?= $total3; ?> Orang</span> </td>
                                  </tr>
                                  <tr>
                                      <td>4.</td>
                                      <td>CPNS</td>
                                      <td><span class="text-default text-semibold"><i class="fa fa-user-circle" aria-hidden="true"></i> <?= $total4; ?> Orang</span> </td>
                                  </tr>
                                  <tr>
                                      <td> </td>
                                      <td><b>TOTAL</b>  </td>
                                      <td><span class="text-default text-semibold"><i class="fa fa-user-circle" aria-hidden="true"></i> <b><?= $total1+$total2+$total3+$total4; ?> ORANG</b></span> </td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
                </div>
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->

        <div class="modal fade bs-example-modal-lg" id="ASNModal" tabindex="-1" role="dialog" aria-labelledby="FormModalASN">
             <div class="modal-dialog modal-lg" role="document">
               <div class="modal-content">
                 <div class="modal-header">
                   <h4 class="modal-title" id="FormModalASN"><b>Menu Tambah Data ASN PN Tanjung Balai Karimun</b></h4>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                 </div>
                 <div class="modal-body">
                     <div class="card">
                         <div class="card-body wizard-content ">
                             <h4 class="card-title">Silahkan Isikan Datanya dengan Benar!</h4>
                             <h6 class="card-subtitle">Klik Tombol <a href="#" target="_blank">NEXT</a> Untuk Melanjutkan Pengisian Data &</h6>
                             <h6 class="card-subtitle">Klik Tombol <a href="#" target="_blank">PREVIOUS</a> Untuk Kembali Melakukan Pengecekan Pengisian Data.</h6>
                             <form action="<?= base_url();?>Admin/a_registerasn" class="tab-wizard vertical wizard-circle" method="post">
                                 <!-- Step 1 -->
                                 <h6>Informasi Diri</h6>
                                 <section style="margin-top: 10px;">
                                     <div class="row">
                                         <div class="col-md-12">
                                             <div class="form-group">
                                                 <label for="firstName1">Nama :</label>
                                                 <input type="text" class="form-control" required="required" name="nama1" id="nama1" value="<?= set_value('nama');?>">
                                                 <?= form_error('nama', '<small class="text-danger">', '</small>');?>

                                             </div>
                                         </div>
                                     </div>
                                     <div class="row">
                                       <div class="col-md-6">
                                           <div class="form-group">
                                               <label for="phoneNumber1">Tempat Lahir :</label>
                                               <input type="text" class="form-control" name="tl1" id="tl1" value="<?= set_value('tl1');?>">
                                               <?= form_error('tl1', '<small class="text-danger">', '</small>');?>
                                           </div>
                                       </div>
                                         <div class="col-md-6">
                                             <div class="form-group">
                                                 <label for="date1">Tanggal Lahir :</label>
                                                 <input type="date" class="form-control" name="tl2" id="tl2" value="<?= set_value('tl2');?>"> </div>
                                                  <?= form_error('tl2', '<small class="text-danger">', '</small>');?>
                                         </div>
                                     </div>
                                     <div class="row">
                                       <div class="col-md-6">
                                         <div class="form-group">
                                             <label for="intType1">Jenis Kelamin :</label>
                                             <select class="form-control custom-select" tabindex="1" name="gender1" id="gender1" value="<?= set_value('gender1');?>">
                                                 <option value="">Pilih Jenis Kelamin</option>
                                                 <?php foreach ($gender as $usr11):?>
                                                   <option value="<?= $usr11['id'];?>"><?= $usr11['gender'];?></option>
                                                 <?php endforeach; ?>
                                                 <?= form_error('gender1', '<small class="text-danger">', '</small>');?>
                                             </select>
                                         </div>
                                       </div>
                                       <div class="col-md-6">
                                         <div class="form-group">
                                             <label for="intType1">Status :</label>
                                             <select class="form-control custom-select" tabindex="1" name="status2" id="status2" value="<?= set_value('status2');?>">
                                                 <option value="">Pilih Status</option>
                                                 <?php foreach ($status_nikah as $usr22):?>
                                                   <option value="<?= $usr22['id'];?>"> <?= $usr22['status'];?></option>
                                                 <?php endforeach; ?>
                                                 <?= form_error('status2', '<small class="text-danger">', '</small>');?>
                                             </select>
                                         </div>
                                       </div>
                                     </div>
                                     <div class="row">
                                       <div class="col-md-6">
                                           <div class="form-group">
                                               <label for="emailAddress1">Alamat Email :</label>
                                               <input type="email" class="form-control" name="email1" id="email1" value="<?= set_value('email1');?>"> </div>
                                               <?= form_error('email1', '<small class="text-danger">', '</small>');?>
                                       </div>
                                       <div class="col-md-6">
                                           <div class="form-group">
                                               <label for="phoneNumber1">Nomor HP :</label>
                                               <input type="text" class="form-control" name="nohp1" id="nohp1" value="<?= set_value('nohp1');?>"> </div>
                                               <?= form_error('nohp1', '<small class="text-danger">', '</small>');?>
                                       </div>
                                     </div>
                                     <div class="row">
                                       <div class="col-md-6">
                                         <div class="form-group">
                                             <label for="intType1">Nama Perguruan Tinggi :</label>
                                             <input type="text" class="form-control" name="univ1" id="univ1" value="<?= set_value('univ1');?>">
                                             <?= form_error('univ1', '<small class="text-danger">', '</small>');?>
                                         </div>
                                       </div>
                                       <div class="col-md-3">
                                         <div class="form-group">
                                             <label for="intType1">Ijazah :</label>
                                             <select class="form-control custom-select" tabindex="1" name="ijazah1" id="ijazah1" value="<?= set_value('ijazah1');?>">
                                                 <option value="#">Pilih Ijazah</option>
                                                 <?php foreach ($ijazah as $usr33):?>
                                                   <option value="<?= $usr33['id'];?>"> <?= $usr33['tk_ijazah'];?></option>
                                                 <?php endforeach; ?>
                                                 <?= form_error('ijazah1', '<small class="text-danger">', '</small>');?>
                                             </select>
                                         </div>
                                       </div>
                                       <div class="col-md-3">
                                         <div class="form-group">
                                             <label for="intType1">Tahun Lulus :</label>
                                             <input type="text" class="form-control" name="pend_tahun1" id="pend_tahun1" value="<?= set_value('pend_tahun1');?>">
                                             <?= form_error('pend_tahun1', '<small class="text-danger">', '</small>');?>
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
                                           <label for="intType1">NIP :</label>
                                           <input type="text" class="form-control" name="nip1" id="nip1" value="<?= set_value('nip1');?>">
                                           <?= form_error('nip1', '<small class="text-danger">', '</small>');?>
                                       </div>
                                     </div>
                                   </div>
                                   <div class="row">
                                       <div class="col-md-6">
                                         <div class="form-group">
                                             <label for="intType1">Gol :</label>
                                             <select class="form-control custom-select" tabindex="1" name="golongan1" id="golongan1" value="<?= set_value('golongan1');?>">
                                                 <option value="#">Pilih Gol</option>
                                                 <?php foreach ($golongan as $usr44):?>
                                                   <option value="<?= $usr44['id'];?>"> <?= $usr44['golongan'];?></option>
                                                 <?php endforeach; ?>
                                             </select>
                                             <?= form_error('golongan1', '<small class="text-danger">', '</small>');?>
                                         </div>
                                       </div>
                                       <div class="col-md-6">
                                         <div class="form-group">
                                             <label for="intType1">TMT :</label>
                                             <input type="date" class="form-control" name="tmt1" id="tmt1" value="<?= set_value('tmt1');?>">
                                             <?= form_error('tmt1', '<small class="text-danger">', '</small>');?>
                                         </div>
                                       </div>
                                   </div>
                                   <div class="row">
                                       <div class="col-md-6">
                                           <div class="form-group">
                                             <label for="intType1">Jabatan :</label>
                                             <select class="form-control custom-select" tabindex="1" name="jabatan1" id="jabatan1"  value="<?= set_value('jabatan1');?>">
                                                 <option value="#">Pilih Jabatan</option>
                                                 <?php foreach ($jabatan as $usr55):?>
                                                 <option value="<?= $usr55['id']; ?>"> <?= $usr55['jabatan'];?> </option>
                                                 <?php endforeach; ?>
                                             </select>
                                             <?= form_error('jabatan1', '<small class="text-danger">', '</small>');?>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                           <div class="form-group">
                                               <label for="phoneNumber1">TMT :</label>
                                               <input type="date" class="form-control" name="tmt2" id="tmt2" value="<?= set_value('tmt2');?>">
                                               <?= form_error('tmt2', '<small class="text-danger">', '</small>');?>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="row">
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <label for="phoneNumber1">Latihan Jabatan :</label>
                                             <input type="text" class="form-control" name="latihan1" id="latihan1" value="<?= set_value('latihan1');?>">
                                             <?= form_error('latihan1', '<small class="text-danger">', '</small>');?>
                                         </div>
                                     </div>
                                       <div class="col-md-6">
                                           <div class="form-group">
                                               <label for="date1">Tahun :</label>
                                               <input type="text" class="form-control" name="latihan_tahun1" id="latihan_tahun1" value="<?= set_value('latihan_tahun1');?>">
                                               <?= form_error('latihan_tahun1', '<small class="text-danger">', '</small>');?>
                                           </div>
                                       </div>
                                   </div>

                                 </section>
                                 <!-- Step 3 -->
                                 <h6>Informasi Pekerjaan II</h6>
                                 <section>
                                     <div class="row">
                                         <div class="col-md-6">
                                             <div class="form-group">
                                                 <label for="int1">KGB :</label>
                                                 <input type="date" class="form-control" name="kgb1" id="kbg1" value="<?= set_value('kgb1');?>">
                                                 <?= form_error('kgb1', '<small class="text-danger">', '</small>');?>
                                             </div>
                                         </div>
                                         <div class="col-md-6">
                                             <div class="form-group">
                                                 <label for="int1">KPK :</label>
                                                 <input type="date" class="form-control" name="kpk1" id="kpk1" value="<?= set_value('kpk1');?>">
                                                 <?= form_error('kpk1', '<small class="text-danger">', '</small>');?>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-md-6">
                                             <div class="form-group">
                                                 <label for="int1">Mutasi Dari :</label>
                                                 <input type="text" class="form-control" name="mutasi1" id="mutasi1" value="<?= set_value('mutasi1');?>">
                                                 <?= form_error('mutasi1', '<small class="text-danger">', '</small>');?>
                                             </div>
                                         </div>
                                         <div class="col-md-6">
                                             <div class="form-group">
                                                 <label for="int1">Tahun:</label>
                                                 <input type="date" class="form-control" name="mutasi2" id="mutasi2" value="<?= set_value('mutasi2');?>">
                                                 <?= form_error('mutasi2', '<small class="text-danger">', '</small>');?>
                                             </div>
                                         </div>
                                     </div>
                                 </section>
                             </form>
                         </div>
                     </div>
                     <!-- ..................................................................................................................................... -->
                     
                     <!-- ..................................................................................................................................... -->
               </div>
             </div>
         </div>
   </div>
   <div class="modal fade bs-example-modal-lg" id="HonorModal" tabindex="-1" role="dialog" aria-labelledby="FormModalHonor">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="FormModalASN"><b>Menu Tambah Data Honorer PN Tanjung Balai Karimun</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body wizard-content ">
                        <h4 class="card-title">Silahkan Isikan Datanya dengan Benar!</h4>
                        <h6 class="card-subtitle">Klik Tombol <a href="#" target="_blank">NEXT</a> Untuk Melanjutkan Pengisian Data &</h6>
                        <h6 class="card-subtitle">Klik Tombol <a href="#" target="_blank">PREVIOUS</a> Untuk Kembali Melakukan Pengecekan Pengisian Data.</h6>
                        <form action="<?= base_url();?>Admin/a_registerhonorer" class="tab-wizard vertical wizard-circle" method="post">
                            <!-- Step 1 -->
                            <h6>Informasi Diri</h6>
                            <section style="margin-top: 10px;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="firstName1">Nama :</label>
                                            <input type="text" class="form-control" required="required" name="nama2" id="nama2" value="<?= set_value('nama2');?>">
                                            <?= form_error('nama2', '<small class="text-danger">', '</small>');?>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="phoneNumber1">Tempat Lahir :</label>
                                          <input type="text" class="form-control" name="tl3" id="tl3" value="<?= set_value('tl3');?>">
                                          <?= form_error('tl3', '<small class="text-danger">', '</small>');?>
                                      </div>
                                  </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="date1">Tanggal Lahir :</label>
                                            <input type="date" class="form-control" name="tl4" id="tl4" value="<?= set_value('tl4');?>"> </div>
                                             <?= form_error('tl4', '<small class="text-danger">', '</small>');?>
                                    </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="intType1">Jenis Kelamin :</label>
                                        <select class="form-control custom-select" tabindex="1" name="gender2" id="gender1" value="<?= set_value('gender2');?>">
                                            <option value="">Pilih Jenis Kelamin</option>
                                            <?php foreach ($gender as $usr11):?>
                                              <option value="<?= $usr11['id'];?>"><?= $usr11['gender'];?></option>
                                            <?php endforeach; ?>
                                            <?= form_error('gender2', '<small class="text-danger">', '</small>');?>
                                        </select>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="intType1">Status :</label>
                                        <select class="form-control custom-select" tabindex="1" name="status3" id="status2" value="<?= set_value('status3');?>">
                                            <option value="">Pilih Status</option>
                                            <?php foreach ($status_nikah as $usr22):?>
                                              <option value="<?= $usr22['id'];?>"> <?= $usr22['status'];?></option>
                                            <?php endforeach; ?>
                                            <?= form_error('status3', '<small class="text-danger">', '</small>');?>
                                        </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="emailAddress1">Alamat Email :</label>
                                          <input type="email" class="form-control" name="email2" id="email2" value="<?= set_value('email2');?>"> </div>
                                          <?= form_error('email2', '<small class="text-danger">', '</small>');?>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="phoneNumber1">Nomor HP :</label>
                                          <input type="text" class="form-control" name="nohp2" id="nohp2" value="<?= set_value('nohp2');?>"> </div>
                                          <?= form_error('nohp2', '<small class="text-danger">', '</small>');?>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="intType1">Nama Perguruan Tinggi :</label>
                                        <input type="text" class="form-control" name="univ2" id="univ2" value="<?= set_value('univ2');?>">
                                        <?= form_error('univ2', '<small class="text-danger">', '</small>');?>
                                    </div>
                                  </div>
                                  <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="intType1">Ijazah :</label>
                                        <select class="form-control custom-select" tabindex="1" name="ijazah2" id="ijazah2" value="<?= set_value('ijazah2');?>">
                                            <option value="#">Pilih Ijazah</option>
                                            <?php foreach ($ijazah as $usr33):?>
                                              <option value="<?= $usr33['id'];?>"> <?= $usr33['tk_ijazah'];?></option>
                                            <?php endforeach; ?>
                                            <?= form_error('ijazah2', '<small class="text-danger">', '</small>');?>
                                        </select>
                                    </div>
                                  </div>
                                  <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="intType1">Tahun Lulus :</label>
                                        <input type="text" class="form-control" name="pend_tahun2" id="pend_tahun2" value="<?= set_value('pend_tahun2');?>">
                                        <?= form_error('pend_tahun2', '<small class="text-danger">', '</small>');?>
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
                                        <label for="intType1">Jabatan :</label>
                                        <select class="form-control custom-select" tabindex="1" name="jabatan2" id="jabatan2"  value="<?= set_value('jabatan2');?>">
                                            <option value="#">Pilih Jabatan</option>
                                            <?php foreach ($jabatan as $usr55):?>
                                            <option value="<?= $usr55['id']; ?>"> <?= $usr55['jabatan'];?> </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?= form_error('jabatan2', '<small class="text-danger">', '</small>');?>
                                     </div>
                                  </div>
                              </div>
                            </section>
                        </form>
                    </div>
                </div>
          </div>
        </div>
    </div>
</div>
