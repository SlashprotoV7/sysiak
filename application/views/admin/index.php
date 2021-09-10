<!-- Morries chart CSS -->
<link href="<?= base_url();?>assets/plugins/morrisjs/morris.css" rel="stylesheet">
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Beranda </h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Beranda</a></li>
                <li class="breadcrumb-item"><i class="mdi mdi-home-modern"></i></li>
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
    <div class="row">
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <!-- Row -->
                    <div class="row">
                        <div class="col-8"><h2>5 <i class="ti-angle-down font-14 text-danger"></i></h2>
                            <h6>Form Masuk</h6></div>
                        <div class="col-4 align-self-center text-right  p-l-0">
                            <div id="sparklinedash3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <!-- Row -->
                    <div class="row">
                        <div class="col-8"><h2 class="">5 <i class="ti-angle-up font-14 text-success"></i></h2>
                            <h6>Form Proses</h6></div>
                        <div class="col-4 align-self-center text-right p-l-0">
                            <div id="sparklinedash"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <!-- Row -->
                    <div class="row">
                        <div class="col-8"><h2>10 <i class="ti-angle-up font-14 text-success"></i></h2>
                            <h6>Form Selesai</h6></div>
                        <div class="col-4 align-self-center text-right p-l-0">
                            <div id="sparklinedash2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <!-- Row -->
                    <div class="row">
                        <div class="col-8"><h2>20 <i class="ti-angle-down font-14 text-danger"></i></h2>
                            <h6>Total Form (Januari)</h6></div>
                        <div class="col-4 align-self-center text-right p-l-0">
                            <div id="sparklinedash4"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->
    <div class="row">
        <div class="col-lg-8 col-md-7">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-wrap">
                        <div>
                            <h4 class="card-title">Rekapitulasi Form Pemeliharaan Perangkat IT (2020)</h4>
                        </div>
                        <div class="ml-auto">
                            <ul class="list-inline">
                                <li>
                                    <h6 class="text-muted text-success"><i class="fa fa-circle font-10 m-r-10 "></i>Form Masuk</h6> </li>
                                <li>
                                    <h6 class="text-muted  text-info"><i class="fa fa-circle font-10 m-r-10"></i>Form Proses</h6> </li>
                                <li>
                                    <h6 class="text-muted  text-success"><i class="fa fa-circle font-10 m-r-10"></i>Form Selesai</h6> </li>
                                <li>
                                    <h6 class="text-muted  text-danger"><i class="fa fa-circle font-10 m-r-10"></i>Total Form (Januari)</h6> </li>
                            </ul>
                        </div>
                    </div>
                    <div id="morris-area-chart2" style="height: 405px;"></div>

                </div>
            </div>

        </div>
        <div class="col-lg-4 col-md-5">
            <!-- Column -->
            <div class="card card-default">
                <div class="card-header">
                    <div class="card-actions">
                        <a class="" data-action="collapse"><i class="ti-minus"></i></a>
                        <a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
                        <a class="btn-close" data-action="close"><i class="ti-close"></i></a>
                    </div>
                    <h4 class="card-title m-b-0">Form Stats</h4>
                </div>
                <div class="card-body collapse show">
                <div id="morris-donut-chart" class="ecomm-donute" style="height: 317px;"></div>
                    <ul class="list-inline m-t-20 text-center">
                    <li >
                        <h6 class="text-muted"><i class="fa fa-circle text-info"></i> Masuk</h65>
                        <h4 class="m-b-0">5</h4>
                    </li>
                    <li>
                        <h6 class="text-muted"><i class="fa fa-circle text-danger"></i> Proses</h6>
                        <h4 class="m-b-0">5</h4>
                    </li>
                    <li>
                        <h6 class="text-muted"> <i class="fa fa-circle text-success"></i> Selesai</h6>
                        <h4 class="m-b-0">10</h4>
                    </li>
                </ul>

                </div>
            </div>

        </div>
    </div>
    <!-- Row -->


    <!-- Row -->

    <!-- Row -->
    <!-- Row -->

    <!-- Row -->
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->

</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
