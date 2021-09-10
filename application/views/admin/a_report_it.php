<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Pemeliharaan Perangkat IT - Per Tahun <?=  Date('Y'); ?></h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item">PTIP</li>
                <li class="breadcrumb-item active">Laporan Pemeliharaan Perangkat IT</li>
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
        <!-- .row -->
        <div class="row">
            <!-- .col -->
            <div class="col-md-6 col-lg-6 col-xlg-4">
                <div class="card card-body">
                    <div class="row">
                        <div class="col-md-4 col-lg-3 text-center">
                            <a href="<?= base_url(); ?>admin/detail_report_it/<?= 1; ?>"><img src="<?= base_url(); ?>assets/images/users/1.png" alt="user" class="img-circle img-responsive"></a>
                        </div>
                        <div class="col-md-8 col-lg-9">
                            <h2 class="box-title m-b-0">JANUARI</h2>
                            <small>Masuk : <?= $total_masuk1; ?> Form</small> <br/> <small>Proses : <?= $total_proses1; ?> Form</small> <br/> <small>Selesai : <?= $total_selesai1; ?> Form</small> <small>Tolak : <?= $total_tolak1; ?> Form</small>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col -->
            <!-- .col -->
            <div class="col-md-6 col-lg-6 col-xlg-4">
                <div class="card card-body">
                    <div class="row">
                        <div class="col-md-4 col-lg-3 text-center">
                            <a href="<?= base_url(); ?>admin/detail_report_it/<?= 2; ?>"><img src="<?= base_url(); ?>assets/images/users/1.png" alt="user" class="img-circle img-responsive"></a>
                        </div>
                        <div class="col-md-8 col-lg-9">
                            <h2 class="box-title m-b-0">FEBRUARI</h2>
                            <small>Masuk : <?= $total_masuk2; ?> Form</small> <br/> <small>Proses : <?= $total_proses2; ?> Form</small> <br/> <small>Selesai : <?= $total_selesai2; ?> Form</small> <small>Tolak : <?= $total_tolak2; ?> Form</small>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col -->
            <!-- .col -->
            <div class="col-md-6 col-lg-6 col-xlg-4">
                <div class="card card-body">
                    <div class="row">
                        <div class="col-md-4 col-lg-3 text-center">
                            <a href="<?= base_url(); ?>admin/detail_report_it/<?= 3; ?>"><img src="<?= base_url(); ?>assets/images/users/1.png" alt="user" class="img-circle img-responsive"></a>
                        </div>
                        <div class="col-md-8 col-lg-9">
                            <h2 class="box-title m-b-0">MARET</h2>
                            <small>Masuk : <?= $total_masuk3; ?> Form</small> <br/> <small>Proses : <?= $total_proses3; ?> Form</small> <br/> <small>Selesai : <?= $total_selesai3; ?> Form</small> <small>Tolak : <?= $total_tolak3; ?> Form</small>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col -->
            <!-- .col -->
            <div class="col-md-6 col-lg-6 col-xlg-4">
                <div class="card card-body">
                    <div class="row">
                        <div class="col-md-4 col-lg-3 text-center">
                            <a href="<?= base_url(); ?>admin/detail_report_it/<?= 4; ?>"><img src="<?= base_url(); ?>assets/images/users/1.png" alt="user" class="img-circle img-responsive"></a>
                        </div>
                        <div class="col-md-8 col-lg-9">
                            <h2 class="box-title m-b-0">APRIL</h2>
                            <small>Masuk : <?= $total_masuk4; ?> Form</small> <br/> <small>Proses : <?= $total_proses4; ?> Form</small> <br/> <small>Selesai : <?= $total_proses4; ?> Form</small> <small>Tolak : <?= $total_proses4; ?> Form</small>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col -->
            <!-- .col -->
            <div class="col-md-6 col-lg-6 col-xlg-4">
                <div class="card card-body">
                    <div class="row">
                        <div class="col-md-4 col-lg-3 text-center">
                            <a href="<?= base_url(); ?>admin/detail_report_it/<?= 5; ?>"><img src="<?= base_url(); ?>assets/images/users/1.png" alt="user" class="img-circle img-responsive"></a>
                        </div>
                        <div class="col-md-8 col-lg-9">
                            <h2 class="box-title m-b-0">MEI</h2>
                            <small>Masuk : <?= $total_masuk5; ?> Form</small> <br/> <small>Proses : <?= $total_proses5; ?> Form</small> <br/> <small>Selesai : <?= $total_selesai5; ?> Form</small> <small>Tolak : <?= $total_tolak5; ?> Form</small>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col -->
            <!-- .col -->
            <div class="col-md-6 col-lg-6 col-xlg-4">
                <div class="card card-body">
                    <div class="row">
                        <div class="col-md-4 col-lg-3 text-center">
                            <a href="<?= base_url(); ?>admin/detail_report_it/<?= 6; ?>"><img src="<?= base_url(); ?>assets/images/users/1.png" alt="user" class="img-circle img-responsive"></a>
                        </div>
                        <div class="col-md-8 col-lg-9">
                            <h2 class="box-title m-b-0">JUNI</h2>
                            <small>Masuk : <?= $total_masuk6; ?> Form</small> <br/> <small>Proses : <?= $total_proses6; ?> Form</small> <br/> <small>Selesai : <?= $total_selesai6; ?> Form</small> <small>Tolak : <?= $total_tolak6; ?> Form</small>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col -->
            <!-- .col -->
            <div class="col-md-6 col-lg-6 col-xlg-4">
                <div class="card card-body">
                    <div class="row">
                        <div class="col-md-4 col-lg-3 text-center">
                            <a href="<?= base_url(); ?>admin/detail_report_it/<?= 7; ?>"><img src="<?= base_url(); ?>assets/images/users/1.png" alt="user" class="img-circle img-responsive"></a>
                        </div>
                        <div class="col-md-8 col-lg-9">
                            <h2 class="box-title m-b-0">JULI</h2>
                            <small>Masuk : <?= $total_masuk7; ?> Form</small> <br/> <small>Proses : <?= $total_proses7; ?> Form</small> <br/> <small>Selesai : <?= $total_selesai7; ?> Form</small> <small>Tolak : <?= $total_tolak7; ?> Form</small>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col -->
            <!-- .col -->
            <div class="col-md-6 col-lg-6 col-xlg-4">
                <div class="card card-body">
                    <div class="row">
                        <div class="col-md-4 col-lg-3 text-center">
                            <a href="<?= base_url(); ?>admin/detail_report_it/<?= 8; ?>"><img src="<?= base_url(); ?>assets/images/users/1.png" alt="user" class="img-circle img-responsive"></a>
                        </div>
                        <div class="col-md-8 col-lg-9">
                            <h2 class="box-title m-b-0">AGUSTUS</h2>
                            <small>Masuk : <?= $total_masuk8; ?> Form</small> <br/> <small>Proses : <?= $total_proses8; ?> Form</small> <br/> <small>Selesai : <?= $total_selesai8; ?> Form</small> <small>Tolak : <?= $total_tolak8; ?> Form</small>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col -->
            <!-- .col -->
            <div class="col-md-6 col-lg-6 col-xlg-4">
                <div class="card card-body">
                    <div class="row">
                        <div class="col-md-4 col-lg-3 text-center">
                            <a href="<?= base_url(); ?>admin/detail_report_it/<?= 9; ?>"><img src="<?= base_url(); ?>assets/images/users/1.png" alt="user" class="img-circle img-responsive"></a>
                        </div>
                        <div class="col-md-8 col-lg-9">
                            <h2 class="box-title m-b-0">SEPTEMBER</h2>
                            <small>Masuk : <?= $total_masuk9; ?> Form</small> <br/> <small>Proses : <?= $total_proses9; ?> Form</small> <br/> <small>Selesai : <?= $total_selesai9; ?> Form</small> <small>Tolak : <?= $total_tolak9; ?> Form</small>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col -->
            <!-- .col -->
            <div class="col-md-6 col-lg-6 col-xlg-4">
                <div class="card card-body">
                    <div class="row">
                        <div class="col-md-4 col-lg-3 text-center">
                            <a href="<?= base_url(); ?>admin/detail_report_it/<?= 10; ?>"><img src="<?= base_url(); ?>assets/images/users/1.png" alt="user" class="img-circle img-responsive"></a>
                        </div>
                        <div class="col-md-8 col-lg-9">
                            <h2 class="box-title m-b-0">OKTOBER</h2>
                            <small>Masuk : <?= $total_masuk10; ?> Form</small> <br/> <small>Proses : <?= $total_proses10; ?> Form</small> <br/> <small>Selesai : <?= $total_selesai10; ?> Form</small> <small>Tolak : <?= $total_tolak10; ?> Form</small>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col -->
            <!-- .col -->
            <div class="col-md-6 col-lg-6 col-xlg-4">
                <div class="card card-body">
                    <div class="row">
                        <div class="col-md-4 col-lg-3 text-center">
                            <a href="<?= base_url(); ?>admin/detail_report_it/<?= 11; ?>"><img src="<?= base_url(); ?>assets/images/users/1.png" alt="user" class="img-circle img-responsive"></a>
                        </div>
                        <div class="col-md-8 col-lg-9">
                            <h2 class="box-title m-b-0">NOVEMBER</h2>
                            <small>Masuk : <?= $total_masuk11; ?> Form</small> <br/> <small>Proses : <?= $total_proses11; ?> Form</small> <br/> <small>Selesai : <?= $total_selesai11; ?> Form</small> <small>Tolak : <?= $total_tolak11; ?> Form</small>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col -->
            <!-- .col -->
            <div class="col-md-6 col-lg-6 col-xlg-4">
                <div class="card card-body">
                    <div class="row">
                        <div class="col-md-4 col-lg-3 text-center">
                            <a href="<?= base_url(); ?>admin/detail_report_it/<?= 12; ?>"><img src="<?= base_url(); ?>assets/images/users/1.png" alt="user" class="img-circle img-responsive"></a>
                        </div>
                        <div class="col-md-8 col-lg-9">
                            <h2 class="box-title m-b-0">DESEMBER</h2>
                            <small>Masuk : <?= $total_masuk12; ?> Form</small> <br/> <small>Proses : <?= $total_proses12; ?> Form</small> <br/> <small>Selesai : <?= $total_selesai12; ?> Form</small> <small>Tolak : <?= $total_tolak12; ?> Form</small>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
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
    <footer class="footer"> © 2017 Admin Press Admin by themedesigner.in </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
