<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <a href="<?= base_url(); ?>surat"><button class="btn btn-info"><i class=" fa fa-arrow-circle-left"></i> Kembali</button></a>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Kelola Surat</a></li>
                <li class="breadcrumb-item">Tambah Surat Izin Keluar Kantor</li>
                <li class="breadcrumb-item"><i class="mdi mdi-buffer"></i></li>
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
        <div class="col-sm-12">
          <div class="card card-outline-info">
          <div class="card-header">
            <h4 class="m-b-0 m-t-10 text-white info">Form Surat Izin Keluar Kantor</h4>
            <h4 class="card-title">Silahkan Diisikan Data Surat Izin Dengan Benar</h4>
          </div>
            <div class="card-body">

                <form class="form-horizontal m-t-10" method="post" action="">
                    <div class="form-group">
                        <label>Ketua Pengawas Penegak Disiplin Pegawai</label>
                        <?php foreach( $user as $si1 ) :?>
                          <?php if ( $si1['jabatan'] == 2 && $si1['status'] == 1 ) :?>
                            <input type="text" class="form-control" value="<?= $si1['nama']; ?>" readonly>
                            <input type="hidden" class="form-control" value="<?= $si1['nip']; ?>" name="id_acc" id="id_acc">
                          <?php endif; ?>
                        <?php endforeach; ?>
                    </div>

                    <div class="form-group">
                        <label  class="m-t-20" for="example-email"><b>Dengan Ini Memberikan Izin Kepada</b></label>
                        <select class="custom-select col-12" name="nip" id="nip">
                          <option value="#">Pilih Pegawai</option>
                            <?php foreach( $user as $si2 ) :?>
                              <?php if ($si2['jabatan'] != 0) :?>
                                <option value="<?= $si2['nip']; ?>"><?= $si2['nama']; ?></option>
                              <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                      <div class="row">
                          <div class="col-md-8">
                              <label><b>Untuk Keluar Kantor Pada</b></label>
                              <input type="text" class="form-control" placeholder="2017-06-04" id="mdate" name="mdate">
                          </div>
                          <div class="col-md-2">
                            <label><b>Pukul</b></label>
                            <div class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
                                <input type="text" class="form-control" value="00:00">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                </div>
                            </div>
                            <span class="help-block text-muted m-l-5"><small>Mulai Keluar </small></span>
                          </div>
                          <div class="col-md-2">
                            <label><b>&nbsp;</b></label>
                            <div class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
                                <input type="text" class="form-control" value="00:00">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                </div>
                            </div>
                            <span class="help-block text-muted m-l-5"><small>Hingga Pukul </small></span>
                          </div>
                      </div>
                    </div>

                    <div class="form-group">
                        <label><b>Untuk Keperluan</b></label>
                        <textarea type="text" class="form-control" placeholder="Untuk Keperluan...." name="uraian" id="uraian"></textarea>
                    </div>

                    <div class="form-actions m-b-10">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button class="btn btn-success waves-effect waves-light" type="submit"><span class="btn-label"><i class="fa fa-save"></i></span>Simpan Data</button>
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
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
