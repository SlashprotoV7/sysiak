<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor"> <a href="<?= base_url(); ?>Ptip/report_it"><button class="btn btn-info">
            <i class=" fa fa-arrow-circle-left"></i> Kembali</button></a> &nbsp;&nbsp; <?= $judul; ?></h4>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">PTIP</a></li>
                <li class="breadcrumb-item">Pemeliharaan Perangkat IT</i></li>
                <li class="breadcrumb-item"><i class="mdi mdi-account-card-details"></i></li>
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
    <?php if ( $this->session->flashdata('flash') ) : ?>
    <div class="alert alert-success">
        <i class="mdi mdi-account-key"></i> Form Berhasil <strong><?= $this->session->flashdata('flash'); ?></strong>.!!!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
    </div>
    <?php endif; ?>
    <!-- END Notifikasi Hapus, Edit, Tambah Data -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                  <div class="table-responsive" style="padding-bottom: 0px;margin-bottom: -40px;margin-top: -16px;">
                    <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list footable-loaded footable" data-page-size="10">
                      <div class="row" style="width: 100%; margin-top: 20px;">
                      <div class="col-lg-8 "></div>
                      <div class="col-lg-4">
                        <form action="" method="post">
                          <h3><span class="pull-right" style="margin-left: 100px;"><b>JANUARI</b></h3>
                          <h5>
                            <span style="margin-left: -780px;"><a  data-toggle="modal" data-target="#ModalTambahATK" ><button class="btn btn-success"><i class=" fa fa-plus"></i> Input Form</button></a></span>
                            <!-- Fitur Rekapitulasi -->
                            <!--<span style="margin-left: 5px;"><a  data-toggle="modal" data-target="#ModalTambahATK" ><button class="btn btn-success"><i class=" mdi mdi-receipt"></i> Rekapitulasi</button></a></span>-->
                            <!-- Fitur Rekapitulasi -->
                            <span class="pull-right"> <small>Form Masuk Bulan Ini : <b class="text-danger">20 Form</b></small></span></h5>
                        </form>
                      </div>
                    </div>

                   </table>
                       <!-- ============================================================== -->
                       <!-- Modals Content -->
                       <!-- ============================================================== -->

                       <div class="modal fade bs-example-modal-lg" id="ModalTambahATK" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                           <div class="modal-dialog modal-lg" role="document">
                               <div class="modal-content">
                                   <div class="modal-header">
                                       <h4 class="modal-title" id="exampleModalLabel">Tambah Form Pemeliharaan Perangkat IT</h4>
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                   </div>
                                   <div class="modal-body">
                                     <div class="row">
                                        <div class="col-md-12">
                                            <div class="card card-body printableArea">
                                              <form action="" class="form-horizontal" method="post">
                                                  <div class="form-body">
                                                    <div class="row">
                                      <div class="col-md-12" style="margin-bottom: -38px;">
                                          <div class="card card-body printableArea">
                                            <form action="" class="form-horizontal" method="post">
                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group row">
                                                                <label class="control-label text-left col-md-3">Nama Pengaju</label>
                                                                <div class="col-md-9">
                                                                    <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="id_nip" id="id_nip">
                                                                        <option value="#">Pilih</option>
                                                                        <?php foreach ($personil_pn as $org_pn):?>
                                                                          <option value="<?= $org_pn['nip'];?>"> <?= $org_pn['nama'];?> </option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group row">
                                                              <label for="example-text-input" class="col-md-3 col-form-label">Bagian</label>
                                                              <div class="col-md-9">
                                                                <input class="form-control" type="text" value="" id="example-text-input" readonly="">
                                                              </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group row">
                                                                <label class="control-label text-left col-md-3">Permasalahan</label>
                                                                <div class="col-md-9">
                                                                    <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="id_nip" id="id_nip">
                                                                        <option value="#">Pilih</option>
                                                                        <?php foreach ($masalah as $masalahs):?>
                                                                          <option value="<?= $masalahs['id'];?>"> <?= $masalahs['masalah'];?> </option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group row">
                                                              <label for="example-text-input" class="col-md-3 col-form-label">Rincian Permasalahan</label>
                                                              <div class="col-md-9">
                                                                <textarea class="form-control" type="text"></textarea>
                                                              </div>
                                                            </div>
                                                        </div>
                                                    <!--/span-->
                                                </div>
                                                <!--/row-->

                                          </div>
                                      </form></div>
                                  </div>
                                 </div>
                                                  <!--/row-->

                                            </div>
                                        </div>
                                    </div>
                                   </div>
                                   <div class="modal-footer">
                                     <div class="form-actions">
                                         <div class="row">
                                             <div class="col-md-6">
                                                 <div class="row">
                                                    <button type="submit" id="print" class="btn btn-outline-success"><span><i class="fa fa-save"></i> Simpan</span></button>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>

                                   </div>
                                   </form>
                               </div>
                           </div>
                       </div>
                       <!-- ============================================================== -->
                       <!-- End Modals Content -->
                       <!-- ============================================================== -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="background-color: #26dad2; color: black;"><b>Form Pemeliharaan Perangkat IT</b></div>
            <div class="card-body">
            <?php if ( $form_masuk == true ) { ?> <!-- Jika Data Form nya sudah ada -->
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#masuk" role="tab">
                      <span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Masuk <span class="label label-rouded label-danger pull-right" style="margin-left: 12px;margin-top: 2px;">25</span></span></a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#proses" role="tab">
                      <span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Proses <span class="label label-rouded label-danger pull-right" style="margin-left: 12px;margin-top: 2px;">25</span></span></a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#selesai" role="tab">
                      <span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Selesai <span class="label label-rouded label-danger pull-right" style="margin-left: 12px;margin-top: 2px;">25</span></span></a>
                    </li>
                </ul>
                <!-- Tab panes -->

                <div class="tab-content tabcontent-border">

                    <div class="tab-pane active" id="masuk" role="tabpanel">
                        <div class="p-20">
                          <div class="table-responsive">
                            <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list footable-loaded footable" data-page-size="10" style="margin-top: 4px;">
                              <thead>
                                  <tr>
                                      <th hidden>#</th>
                                      <th>Nama Pengaju</th>
                                      <th class="text-right">Bagian</th>
                                      <th class="text-right">Permasalahan</th>
                                      <th class="text-right">Tanggal</th>
                                      <th class="text-center">Aksi</th>
                                  </tr>
                              </thead>
                                <?php foreach( $form_masuk as $forms ) : ?>
                                  <?php if ( $forms['status_form'] == 5 ){ ?>
                              <tbody>
                                  <tr class="footable-even" style="">
                                      <td hidden><?= $forms['id']; ?></td>
                                      <td>
                                          <a href="<?= $forms['id_pengaju']; ?>" data-toggle="modal" data-target="#ModalATK"><?= $forms['id_pengaju']; ?></a>
                                      </td>
                                      <td class="text-right"><?= $forms['bagians']; ?></td>
                                      <td class="text-right"><span class="label label-danger"><?= $forms['masalahs']; ?></span> </td>
                                      <td class="text-right"><span class="label label-danger"><?= $forms['tgl_pengajuan']; ?></span> </td>
                                      <td class="text-center">
                                        <a href="<?= base_url(); ?>Karyawan_ti/hapushonorer1">
                                          <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Hapus Tiket" onclick="return confirm('Anda Sudah Yakin Untuk Menghapus Permintaan ATK ini?');"><i class="ti-close" aria-hidden="true"></i></button>
                                        </a>
                                        <a href="<?= base_url(); ?>Karyawan_ti/ubahhonorer1">
                                          <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline" data-toggle="tooltip" data-original-title="Ubah Tiket"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                        </a>
                                      </td>
                                  </tr>
                              </tbody>
                            <?php } else {}?>
                            <?php endforeach; ?>
                            </table>
                          </div>
                        </div>
                    </div>


                    <div class="tab-pane  p-20" id="proses" role="tabpanel">
                      <div class="table-responsive">
                        <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list footable-loaded footable" data-page-size="10" style="margin-top: 4px;">
                          <thead>
                              <tr>
                                  <th hidden>#</th>
                                  <th>Nama Pengaju</th>
                                  <th class="text-right">Bagian</th>
                                  <th class="text-right">Permasalahan</th>
                                  <th class="text-right">Tanggal</th>
                                  <th class="text-center">Aksi</th>
                              </tr>
                          </thead>
                            <?php foreach( $form_proses as $formss ) : ?>
                              <?php if ( $formss['status_form'] == 6 ){ ?>
                          <tbody>
                              <tr class="footable-even" style="">
                                  <td hidden><?= $formss['id']; ?></td>
                                  <td>
                                      <a href="#" data-toggle="modal" data-target="#ModalATK"><?= $formss['id_pengaju']; ?></a>
                                  </td>
                                  <td class="text-right"><?= $formss['bagians']; ?></td>
                                  <td class="text-right"><span class="label label-danger"><?= $formss['masalahs']; ?></span> </td>
                                  <td class="text-right"><span class="label label-danger"><?= $formss['tgl_pengajuan']; ?></span> </td>
                                  <td class="text-center">
                                    <a href="<?= base_url(); ?>Karyawan_ti/hapushonorer1">
                                      <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Hapus Tiket" onclick="return confirm('Anda Sudah Yakin Untuk Menghapus Permintaan ATK ini?');"><i class="ti-close" aria-hidden="true"></i></button>
                                    </a>
                                    <a href="<?= base_url(); ?>Karyawan_ti/ubahhonorer1">
                                      <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline" data-toggle="tooltip" data-original-title="Ubah Tiket"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                    </a>
                                  </td>
                              </tr>
                          </tbody>
                        <?php } else {}?>
                        <?php endforeach; ?>
                        </table>
                      </div>
                    </div>

                    <div class="tab-pane p-20" id="selesai" role="tabpanel">
                      <div class="table-responsive">
                        <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list footable-loaded footable" data-page-size="10" style="margin-top: 4px;">
                          <thead>
                              <tr>
                                  <th hidden>#</th>
                                  <th>Nama Pengaju</th>
                                  <th class="text-right">Bagian</th>
                                  <th class="text-right">Permasalahan</th>
                                  <th class="text-right">Tanggal</th>
                                  <th class="text-center">Aksi</th>
                              </tr>
                          </thead>
                            <?php foreach( $form_selesai as $formsss ) : ?>
                              <?php if ( $formsss['status_form'] == 7 ){ ?>
                          <tbody>
                              <tr class="footable-even" style="">
                                  <td hidden><?= $formsss['id']; ?></td>
                                  <td>
                                      <a href="#" data-toggle="modal" data-target="#ModalATK"><?= $formsss['id_pengaju']; ?></a>
                                  </td>
                                  <td class="text-right"><?= $formsss['bagians']; ?></td>
                                  <td class="text-right"><span class="label label-danger"><?= $formsss['masalahs']; ?></span> </td>
                                  <td class="text-right"><span class="label label-danger"><?= $formsss['tgl_pengajuan']; ?></span> </td>
                                  <td class="text-center">
                                    <a href="<?= base_url(); ?>Karyawan_ti/hapushonorer1">
                                      <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Hapus Tiket" onclick="return confirm('Anda Sudah Yakin Untuk Menghapus Permintaan ATK ini?');"><i class="ti-close" aria-hidden="true"></i></button>
                                    </a>
                                    <a href="<?= base_url(); ?>Karyawan_ti/ubahhonorer1">
                                      <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline" data-toggle="tooltip" data-original-title="Ubah Tiket"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                    </a>
                                  </td>
                              </tr>
                          </tbody>
                        <?php } else {}?>
                        <?php endforeach; ?>
                        </table>
                      </div>
                    </div>

                </div>


            <?php } else { ?>

              <div style="margin-top:20px; text-align:center;">
                <i class="fa fa-spin fa-refresh" style="font-size: 200px;"></i><br/>
                <br/><font style="font-size:25px; margin-top: 40px;"><b>FORM TIDAK DITEMUKAN !</b></font>
                <br/><small>Silahkan Diisikan Datanya Terlebih Dahulu</small>
              </div>

            <?php }?>
            </div>
        </div>
    </div>
</div>

<!-- ============================================================== -->
<!-- Modals Content FORM MASUK -->
<!-- ============================================================== -->

<div class="modal fade bs-example-modal-lg" id="ModalATK" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel1">Detail Form Pemeliharaan Perangkat IT</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <div class="card card-body printableArea">
                      <h3><b><?= $forms['tgl_pengajuan']; ?></b> <span class="pull-right">Tiket No: <?= $forms['id']; ?></span></h3>
                      <hr>
                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Nama Pengaju</label>
                                  <div class="col-md-9">
                                      <input class="form-control" type="text" value="<?= $forms['id_pengaju']; ?>" id="example-text-input" readonly>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">NIP</label>
                                  <div class="col-md-9">
                                      <input class="form-control" type="text" value="<?= $forms['id_pengaju']; ?>" id="example-text-input" readonly>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group row">
                                <label for="example-text-input" class="col-md-3 col-form-label">Jabatan</label>
                                <div class="col-md-9">
                                  <input class="form-control" type="text" value="<?= $forms['jabatans']; ?>" id="example-text-input" readonly>
                                </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Bagian</label>
                                  <div class="col-md-9">
                                      <input class="form-control" type="text" value="<?= $forms['bagians']; ?>" id="example-text-input" readonly>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Permasalahan</label>
                                  <div class="col-md-9">
                                      <input class="form-control" type="text" value="<?= $forms['masalahs']; ?>" id="example-text-input" readonly>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group row">
                                <label for="example-text-input" class="col-md-3 col-form-label">Rincian Permasalahan</label>
                                <div class="col-md-9">
                                  <textarea class="form-control" type="text" readonly><?= $forms['uraian_masalah']; ?></textarea>
                                </div>
                              </div>
                          </div>
                      <!--/span-->
                  </div>
                  </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="print" class="btn btn-outline-success"><span><i class="fa fa-plus"></i> Terima Tiket</span></button>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Modals Content FORM MASUK -->
<!-- ============================================================== -->



</div>


<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
