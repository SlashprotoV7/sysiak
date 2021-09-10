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
    <?php if ( $this->session->flashdata('addsurat1') ) : ?>
    <div class="alert alert-danger">
        <i class="mdi mdi-account-key"></i> <?= $this->session->flashdata('addsurat1'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
    </div>
    <?php endif; ?>

    <!-- Row -->
    <div class="row">
        <div class="col-sm-12">
          <div class="card card-outline-info">
          <div class="card-header">
            <h4 class="m-b-0 m-t-10 text-white info">Form Surat Tugas</h4>
            <h4 class="card-title">Silahkan Diisikan Data Surat Tugas Dengan Benar</h4>
          </div>
            <div class="card-body">

                <form class="form-horizontal m-t-10" method="post" action="<?= base_url();?>Admin/registerSuratTugas">
                  <div class="col-md-12">
                    <div class="form-group row">
                        <label class="control-label text-left col-md-3"><b>Nomor Surat</b></label>
                        <div class="col-md-9">
                        <?php foreach( $refsurat as $refs ):?>
                          <?php if ( $refs['id'] = 8 ) : ?>
                            <input type="text" class="form-control" value="<?= $refs['kode1']; ?>/<?= $lastid; ?>/<?= $refs['kode2']; ?>/<?= $bulannow['indeks_romawi']; ?>/<?= date('Y'); ?>" readonly>
                            <input type="hidden" class="form-control" value="<?= $refs['kode1']; ?>" name="kode_surat1" id="kode_surat2">
                            <input type="hidden" class="form-control" value="<?= $lastid; ?>" name="no_surat" id="no_surat">
                            <input type="hidden" class="form-control" value="<?= $refs['kode2']; ?>" name="kode_surat2" id="kode_surat2">
                          <?php endif; ?>
                        <?php endforeach; ?>
                        </div>
                    </div>
                  </div>
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
                  <div class ="col-md-12">
                    <div class="form-group row">
                      <label class="control-label text-left col-md-3"><b>Petimbangan & Dasar Hukum</b> <small>-</small> <br/>Menimbang & Mengingat</label>
                      <div class="col-md-9">:</div>
                      <div class="col-md-12">
                        <br/>
                        <textarea type="text" class="form-control" placeholder="Pertimbangan & Dasar Hukum" name="uraian1" id="uraian1"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label class="control-label text-left col-md-3"><b>Memberikan Perintah Kepada </b> <small>-</small> <br/>Menugaskan</label>
                      <div class="col-md-9">:</div>
                      <div class="col-md-12">
                        </br>
                        <div class="form-group row">
                            <div class="col-sm-3 nopadding">
                              <select class="form-control" id="pg1" name="pg1">
                                  <option value="">-- Pilih Pegawai No.1 --</option>
                                  <?php foreach( $datapersonil as $orang1 ): ?>
                                    <?php if ( $orang1['status'] == 11 && $orang1['status2'] != 0 && $orang1['jabatan'] != 1 ){ ?>
                                      <option value="<?= $orang1['nip']; ?>" ><?= $orang1['nama']; ?></option>
                                    <?php } ?>
                                  <?php endforeach;?>
                              </select>
                            </div>
                            <div class="col-sm-3 nopadding">
                              <select class="form-control" id="pg2" name="pg2">
                                  <option value="">-- Pilih Pegawai No.2 --</option>
                                  <?php foreach( $datapersonil as $orang2 ): ?>
                                    <?php if ( $orang2['status'] == 11 && $orang2['status2'] != 0 && $orang2['jabatan'] != 1 ){ ?>
                                      <option value="<?= $orang2['nip']; ?>" ><?= $orang2['nama']; ?></option>
                                    <?php } ?>
                                  <?php endforeach;?>
                              </select>
                            </div>
                            <div class="col-sm-3 nopadding">
                              <select class="form-control" id="pg3" name="pg3">
                                  <option value="">-- Pilih Pegawai No.3 --</option>
                                  <?php foreach( $datapersonil as $orang3 ): ?>
                                    <?php if ( $orang3['status'] == 11 && $orang3['status2'] != 0 && $orang3['jabatan'] != 1 ){ ?>
                                      <option value="<?= $orang3['nip']; ?>" ><?= $orang3['nama']; ?></option>
                                    <?php } ?>
                                  <?php endforeach;?>
                              </select>
                            </div>
                            <div class="col-sm-3 nopadding">
                              <select class="form-control" id="pg4" name="pg4">
                                  <option value="">-- Pilih Pegawai No.4 --</option>
                                  <?php foreach( $datapersonil as $orang4 ): ?>
                                    <?php if ( $orang4['status'] == 11 && $orang4['status2'] != 0 && $orang4['jabatan'] != 1 ){ ?>
                                      <option value="<?= $orang4['nip']; ?>" ><?= $orang4['nama']; ?></option>
                                    <?php } ?>
                                  <?php endforeach;?>
                              </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-3 nopadding">
                              <select class="form-control" id="pg5" name="pg5">
                                  <option value="">-- Pilih Pegawai No.5 --</option>
                                  <?php foreach( $datapersonil as $orang5 ): ?>
                                    <?php if ( $orang5['status'] == 11 && $orang5['status2'] != 0 && $orang5['jabatan'] != 1 ){ ?>
                                      <option value="<?= $orang5['nip']; ?>" ><?= $orang5['nama']; ?></option>
                                    <?php } ?>
                                  <?php endforeach;?>
                              </select>
                            </div>
                            <div class="col-sm-3 nopadding">
                              <select class="form-control" id="pg6" name="pg6">
                                  <option value="">-- Pilih Pegawai No.6 --</option>
                                  <?php foreach( $datapersonil as $orang6 ): ?>
                                    <?php if ( $orang6['status'] == 11 && $orang6['status2'] != 0 && $orang6['jabatan'] != 1 ){ ?>
                                      <option value="<?= $orang6['nip']; ?>" ><?= $orang6['nama']; ?></option>
                                    <?php } ?>
                                  <?php endforeach;?>
                              </select>
                            </div>
                            <div class="col-sm-3 nopadding">
                              <select class="form-control" id="pg7" name="pg7">
                                  <option value="">-- Pilih Pegawai No.7 --</option>
                                  <?php foreach( $datapersonil as $orang7 ): ?>
                                    <?php if ( $orang7['status'] == 11 && $orang7['status2'] != 0 && $orang7['jabatan'] != 1 ){ ?>
                                      <option value="<?= $orang7['nip']; ?>" ><?= $orang7['nama']; ?></option>
                                    <?php } ?>
                                  <?php endforeach;?>
                              </select>
                            </div>
                            <div class="col-sm-3 nopadding">
                              <select class="form-control" id="pg8" name="pg8">
                                  <option value="">-- Pilih Pegawai No.8 --</option>
                                  <?php foreach( $datapersonil as $orang8 ): ?>
                                    <?php if ( $orang8['status'] == 11 && $orang8['status2'] != 0 && $orang8['jabatan'] != 1 ){ ?>
                                      <option value="<?= $orang8['nip']; ?>" ><?= $orang8['nama']; ?></option>
                                    <?php } ?>
                                  <?php endforeach;?>
                              </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-3 nopadding">
                              <select class="form-control" id="pg9" name="pg9">
                                  <option value="">-- Pilih Pegawai No.9 --</option>
                                  <?php foreach( $datapersonil as $orang9 ): ?>
                                    <?php if ( $orang9['status'] == 11 && $orang9['status2'] != 0 && $orang9['jabatan'] != 1 ){ ?>
                                      <option value="<?= $orang9['nip']; ?>" ><?= $orang9['nama']; ?></option>
                                    <?php } ?>
                                  <?php endforeach;?>
                              </select>
                            </div>
                            <div class="col-sm-3 nopadding">
                              <select class="form-control" id="pg10" name="pg10">
                                  <option value="">-- Pilih Pegawai No.10 --</option>
                                  <?php foreach( $datapersonil as $orang10 ): ?>
                                    <?php if ( $orang10['status'] == 11 && $orang10['status2'] != 0 && $orang10['jabatan'] != 1 ){ ?>
                                      <option value="<?= $orang10['nip']; ?>" ><?= $orang10['nama']; ?></option>
                                    <?php } ?>
                                  <?php endforeach;?>
                              </select>
                            </div>
                            <div class="col-sm-6 nopadding">
                              <ul style="margin-bottom : -3rem;"><li><small>Mohon Dengan Cermat, Untuk Mengisi Nama Pegawai Agar Dapat Dilakuan <b>Secara Berurutan</b> Sesuai Dengan Kolom Yang Sudah Disediakan!</small></li></ul>
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
                          <textarea type="text" class="form-control" placeholder="Untuk Keperluan" name="uraian2" id="uraian2"></textarea>
                        </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group row">
                        <div class="col-md-10">
                          <div class="btn-group" data-toggle="buttons" role="group">
                              <label class="btn btn-outline btn-info active">
                                  <input type="radio" autocomplete="off" value="#">
                                  <i class="mdi mdi-contact-mail"></i> Kode Surat :
                              </label>
                              <label class="btn btn-outline btn-info">
                                  <input type="radio" autocomplete="off" value="663005" name="dipa" id="dipa">
                                  <i class="ti-check text-active" aria-hidden="true"></i> 01
                              </label>
                              <label class="btn btn-outline btn-info">
                                  <input type="radio" autocomplete="off" value="663006" name="dipa" id="dipa">
                                  <i class="ti-check text-active" aria-hidden="true"></i> 03
                              </label>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <button class="btn btn-success waves-effect waves-light" type="submit"><span class="btn-label"><i class="fa fa-save"></i></span>Simpan Data</button>
                        </div>
                        <ul style="margin-bottom : -1rem;"><li><small>Silahkan <b>Dipilih</b> Sebelum Menyimpan Data Suratnya!</small></li></ul>
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
