<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <a href="<?= base_url(); ?>admin/a_surat"><button class="btn btn-info"><i class=" fa fa-arrow-circle-left"></i> Kembali</button></a>
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
            <h4 class="m-b-0 m-t-10 text-white info">Form Surat Izin Tidak Masuk Kerja</h4>
            <h4 class="card-title">Silahkan Diisikan Data Surat Izin Dengan Benar</h4>
          </div>
            <div class="card-body">

                <form class="form-horizontal m-t-10" method="post" action="<?= base_url();?>Admin/registerSuratIzin2">
                    <div class="col-md-12">
                      <div class="form-group row">
                          <label class="control-label text-left col-md-3"><b>Ketua Pengadilan Negeri</b></label>
                          <div class="col-md-9">
                          <?php foreach( $datapersonil as $si1 ) :?>
                            <?php if ( $si1['jabatan'] == 1 && $si1['status'] == 11 ) :?>
                              <input type="text" class="form-control" value="<?= $si1['nama']; ?>" readonly>
                              <input type="hidden" class="form-control" value="<?= $si1['nip']; ?>" name="id_acc" id="id_acc">
                            <?php endif; ?>
                          <?php endforeach; ?>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group row">
                          <label class="control-label text-left col-md-3"><small><b>Dengan Ini Memberikan Izin Kepada</b></small></label>
                          <div class="col-md-9">
                            <select class="custom-select col-12" name="pg1" id="pg1">
                              <option value="#">-- Pilih Pegawai --</option>
                                <?php foreach( $datapersonil as $si2 ) :?>
                                  <?php if ( $si2['jabatan'] != 0 ) :?>
                                    <option value="<?= $si2['nip']; ?>"><?= $si2['nama']; ?></option>
                                  <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group row">
                          <label class="control-label text-left col-md-3"><b>Untuk Tidak Masuk Kerja Pada</b></label>
                          <div class="col-md-9">
                            <div class="input-group" data-placement="bottom" data-align="top" data-autoclose="true">
                              <input type="text" class="form-control" placeholder="YYYY-MM-DD" id="mdate" name="tgl_surat">
                              <div class="input-group-append">
                                  <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                              </div>
                            </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group row">
                          <label class="control-label text-left col-md-3"><b>Untuk Keperluan</b></label>
                          <div class="col-md-9">:</div>
                          <div class="col-md-12">
                            <br/>
                            <textarea type="text" class="form-control" placeholder="Untuk Keperluan" name="uraian1" id="uraian1"></textarea>
                          </div>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group row">
                          <div class="col-md-10">&nbsp;</div>
                          <div class="col-md-2">
                            <button class="btn btn-success waves-effect waves-light" type="submit"><span class="btn-label"><i class="fa fa-save"></i></span>Simpan Data</button>
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
