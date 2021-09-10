
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

        <!-- Notifikasi Hapus, Edit, Tambah Data -->
        <?php if ( $this->session->flashdata('delsurat1') ) : ?>
        <div class="alert alert-success">
            <i class="mdi mdi-account-key"></i> <?= $this->session->flashdata('delsurat'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
        </div>
        <?php endif; ?>
        <?php if ( $this->session->flashdata('ubahsurat1') ) : ?>
        <div class="alert alert-danger">
            <i class="mdi mdi-account-key"></i> <?= $this->session->flashdata('ubahsurat1'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
        </div>
        <?php endif; ?>

        <?php if ( $this->session->flashdata('addsurat2') ) : ?>
        <div class="alert alert-success">
            <i class="mdi mdi-account-key"></i> <?= $this->session->flashdata('addsurat2'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
        </div>
        <?php endif; ?>
        <!-- END Notifikasi Hapus, Edit, Tambah Data -->

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
                                    <li><a class="btn default btn-outline image-popup-vertical-fit" href="<?= base_url(); ?>Admin/a_surattugas"><i class=" icon-action-redo"></i>&nbsp; Create</a></li>
                                    <li><a class="btn default btn-outline" href="javascript:void(0);"><i class="icon-layers"></i>&nbsp; Lihat Arsip</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="el-card-content">
                            <h3 class="box-title">SURAT TUGAS</h3><hr> <small>untuk Karyawan/Ti yang akan pergi keluar kantor untuk menjalankan tugas selama jam kerja berlangsung.</small>
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
                                    <li><a class="btn default btn-outline image-popup-vertical-fit" href="<?= base_url(); ?>Admin/a_suratizin1"><font size="1.5px;"><i class="icon-action-redo"></i>&nbsp; Create - Surat Izin Keluar Kantor</font></a></li><br><br>
                                    <li><a class="btn default btn-outline image-popup-vertical-fit" href="<?= base_url(); ?>Admin/a_suratizin2"><font size="1.5px;"><i class="icon-action-redo"></i>&nbsp; Create - Surat Izin Tidak Masuk Kerja</font></a></li><br><br>
                                    <li><a class="btn default btn-outline" href="javascript:void(0);"><i class="icon-layers"></i>&nbsp; Lihat Arsip</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="el-card-content">
                            <h3 class="box-title">SURAT IZIN</h3><hr> <small><b>Surat Izin Keluar Kantor</b> : <br>untuk Karyawan/Ti yang akan pergi keluar kantor untuk pergi ke suatu tempat selama jam kerja berlangsung.<br> <b>Surat Izin Tidak Masuk Kerja</b> : <br>untuk Karyawan/Ti yang tidak masuk ke kantor karena alasan tertentu dan biasanya hanya 1 hari jam kerja saja. </small>
                            <br/> </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"><img src="<?= base_url(); ?>assets/images/users/3.jpg" alt="user" />
                            <div class="el-overlay">
                                <ul class="el-info">
                                    <li><a class="btn default btn-outline image-popup-vertical-fit" href="<?= base_url(); ?>Surat/surat_cuti"><i class=" icon-action-redo"></i>&nbsp; Create</a></li>
                                    <li><a class="btn default btn-outline" href="javascript:void(0);"><i class="icon-layers"></i>&nbsp; Lihat Arsip</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="el-card-content">
                            <h3 class="box-title">SURAT CUTI</h3><hr> <small>Untuk Karyawan/Ti yang ingin mengajukan status tidak masuk kerja/Cuti selama beberapa waktu.</small>
                            <br/> </div>
                    </div>
                </div>
            </div>

        </div>
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
