<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor"> <a href="<?= base_url(); ?>Admin/report_it"><button class="btn btn-info">
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
    <?php if ( $this->session->flashdata('report_it1') ) : ?>
    <div class="alert alert-success">
        <strong><?= $this->session->flashdata('report_it1'); ?></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
    </div>
    <?php endif; ?>
    <!-- END Notifikasi Hapus, Edit, Tambah Data -->

    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-12">
            <div class="card card-body printableArea">
                <div class="row">
                    <div class="col-md-12">
                        <div class="pull-left" style="margin-top: 16px;">
                            <address>
                                <h3> &nbsp;<a  data-toggle="modal" data-target="#ModalTambahATK" ><button class="btn btn-success"><i class=" fa fa-plus"></i> Input Form</button></a></h3>
                            </address>
                        </div>
                        <div class="pull-right text-right">
                            <address>
                                <h2 class="font-bold" style="margin-right: -3px;"><?= $bulan['indeks_bulan']; ?>&nbsp;&nbsp;</h2>
                                <h6 class="text-muted">Total Form Bulan Ini : <b class="text-danger"><?= $total_masuk; ?> Form</b>&nbsp;&nbsp;</h6>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- Modals Content -->
    <!-- ============================================================== -->

    <div class="modal fade bs-example-modal-lg" id="ModalTambahATK" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #0480be;">
                    <h4 class="modal-title " id="exampleModalLabel" style="color: white;">Tambah Form Pemeliharaan Perangkat IT</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">

                  <div class="row">
                     <div class="col-md-12">
                         <div class="card card-body printableArea">
                               <div class="form-body">
                                 <div class="row">
                                   <div class="col-md-12" style="margin-bottom: -38px;">
                                       <div class="card card-body printableArea">

                                         <form method="post" action="<?= base_url();?>admin/addformmasuk/<?= $id_bulan; ?>" class="form-horizontal" >
                                             <div class="form-body">
                                                 <div class="row">
                                                     <div class="col-md-12">
                                                         <div class="form-group row">
                                                             <label class="control-label text-left col-md-3">Nama Pengaju</label>
                                                             <div class="col-md-9">
                                                               <select class="form-control custom-select" tabindex="1" name="id_pengaju" id="id_pengaju">
                                                                     <option value="#">-Pilih-</option>
                                                                     <?php foreach ($personilpn as $org_pn):
                                                                             if($org_pn['jabatan'] != 0 && $org_pn['status'] == 11){
                                                                       ?>
                                                                       <option value="<?= $org_pn['nip'];?>"> <?= $org_pn['nama'];?> </option>
                                                                     <?php } else{}
                                                                       endforeach; ?>
                                                                 </select>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="col-md-12">
                                                         <div class="form-group row">
                                                           <label for="example-text-input" class="col-md-3 col-form-label" id="bagian_cari">Untuk Dibagian</label>
                                                           <div class="col-md-9">
                                                             <select class="form-control custom-select" tabindex="1" name="id_bagian" id="id_bagian">
                                                                   <option value="#">-Pilih-</option>
                                                                   <?php foreach ($bagian as $bagian1): ?>
                                                                     <option value="<?= $bagian1['id'];?>"> <?= $bagian1['bagian'];?> </option>
                                                                   <?php  endforeach; ?>
                                                               </select>
                                                           </div>
                                                         </div>
                                                     </div>
                                                     <div class="col-md-12">
                                                         <div class="form-group row">
                                                             <label class="control-label text-left col-md-3">Permasalahan</label>
                                                             <div class="col-md-9">
                                                               <select class="form-control custom-select" tabindex="1" name="id_masalah" id="id_masalah">
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
                                                             <textarea class="form-control" type="text" name="uraian_masalah" id="uraian_masalah"></textarea>
                                                           </div>
                                                         </div>
                                                     </div>
                                                   </div>
                                               </div>

                                         </div>
                                       </div>
                                      </div>
                                   </div>
                               </div>
                           </div>
                          </div>
                          <div class="modal-footer">
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                           <button type="submit" class="btn btn-outline-success"><span><i class="fa fa-save"></i> Simpan</span></button>
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
    <!-- End Modals Content -->
    <!-- ============================================================== -->
     </div>

    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="background-color: #26dad2; color: black;"><b>Form Pemeliharaan Perangkat IT</b></div>
            <div class="card-body">
            <?php if ( $total_masuk == true ) { ?> <!-- Jika Data Form nya sudah ada -->
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#masuk" role="tab">
                      <span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Masuk
                      <span class="label label-rouded label-danger pull-right" style="margin-left: 12px;margin-top: 2px;">
                        <!-- fungsi untuk menghitung jumlah form yang masuk setiap bulannya -->
                        <?php if ( $total_masuk_1 != 0 ) {
                          echo $total_masuk_1;
                        } else {} ?>
                      </span></span></a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#proses" role="tab">
                      <span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Proses
                      <span class="label label-rouded label-warning pull-right" style="margin-left: 12px;margin-top: 2px;">
                        <!-- fungsi untuk menghitung jumlah form yang diproses setiap bulannya -->
                        <?php if ( $total_proses != 0 ) {
                          echo $total_proses;
                        } else {} ?>
                      </span></span></a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#selesai" role="tab">
                      <span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Selesai
                      <span class="label label-rouded label-success pull-right" style="margin-left: 12px;margin-top: 2px;">
                        <!-- fungsi untuk menghitung jumlah form yang selesai dikerjakan setiap bulannya -->
                        <?php if ( $total_selesai != 0 ) {
                          echo $total_selesai;
                        } else {} ?>
                      </span></span></a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tolak" role="tab">
                      <span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Tolak
                      <span class="label label-rouded label-primary pull-right" style="margin-left: 12px;margin-top: 2px;">
                        <!-- fungsi untuk menghitung jumlah form yang ditolak setiap bulannya -->
                        <?php if ( $total_tolak != 0 ) {
                          echo $total_tolak;
                        } else {} ?>
                      </span></span></a>
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
                                      <th>Nama Pengaju</th>
                                      <th class="text-right">Untuk Dibagian</th>
                                      <th class="text-right">Permasalahan</th>
                                      <th class="text-right">Tanggal</th>
                                      <th class="text-center">Aksi</th>
                                  </tr>
                              </thead>
                                <?php foreach( $form_masuk as $forms ) : ?>
                                  <?php if ( $forms['status_form'] == 5 ){ ?>
                              <tbody>
                                  <tr class="footable-even" style="">
                                      <td>
                                        <a href="#" class="modal-masuk" data-toggle="modal" data-target="#DetailMasuk"
                                        data-ids="<?= $forms['id_form']; ?>" data-nips="<?= $forms['id_pengaju']; ?>"
                                        data-namas="<?= $forms['namas']; ?>" data-tgl1s="<?= $forms['tgl_pengajuan']; ?>"
                                        data-id2s="<?= $forms['masalahs']; ?>" data-jabatans="<?= $forms['jabatans']; ?>"
                                        data-rincians="<?= $forms['uraian_masalah']; ?>" data-bagians="<?= $forms['bagians']; ?>">
                                        <?= $forms['namas']; ?></a>
                                      </td>
                                      <td class="text-right"><?= $forms['bagians']; ?></td>
                                      <td class="text-right"><span class="label label-danger"><?= $forms['masalahs']; ?></span> </td>
                                      <td class="text-right"><span class="label label-danger"><?= $forms['tgl_pengajuan']; ?></span> </td>
                                      <td class="text-center">
                                        <a href="<?= base_url(); ?>Admin/hapusFormMasuk/<?= $id_bulan; ?>/<?= $forms['id1']; ?>">
                                          <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Hapus Form" onclick="return confirm('Anda Sudah Yakin Untuk Menghapus Form ini?');"><i class="ti-trash " aria-hidden="true"></i></button>
                                        </a>
                                        <a href="#" class="modal-tolak1" data-toggle="modal" data-target="#TolakModal"
                                        data-idsx="<?= $forms['id_form']; ?>" data-tgl1sx="<?= $forms['tgl_pengajuan']; ?>"
                                        data-namasx="<?= $forms['namas']; ?>" data-id2sx="<?= $forms['masalahs']; ?>"
                                        data-bagiansx="<?= $forms['bagians']; ?>" data-id1sx="<?= $forms['id1']; ?>">
                                          <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Tolak Form" ><i class="ti-close" aria-hidden="true"></i></button>
                                        </a>
                                        <a href="<?= base_url(); ?>Admin/terimaFormMasuk/<?= $id_bulan; ?>/<?= $forms['id1']; ?>">
                                          <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline" data-toggle="tooltip" data-original-title="Terima Form"><i class="ti-share " aria-hidden="true"></i></button>
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
                                  <th>Nama Pengaju</th>
                                  <th class="text-right">Untuk Dibagian</th>
                                  <th class="text-right">Permasalahan</th>
                                  <th class="text-right">Tanggal</th>
                                  <th class="text-center">Aksi</th>
                              </tr>
                          </thead>
                            <?php foreach( $form_proses as $formss ) : ?>
                              <?php if ( $formss['status_form'] = 6 ){ ?>
                          <tbody>
                              <tr class="footable-even" style="">
                                  <td>
                                    <a href="#" class="modal-proses" data-toggle="modal" data-target="#DetailProses"
                                    data-idss="<?= $formss['id_form']; ?>" data-nipss="<?= $formss['id_pengaju']; ?>"
                                    data-namass="<?= $formss['namas']; ?>" data-tgl1ss="<?= $formss['tgl_pengajuan']; ?>"
                                    data-id2ss="<?= $formss['masalahs']; ?>" data-jabatanss="<?= $formss['jabatans']; ?>"
                                    data-rincianss="<?= $formss['uraian_masalah']; ?>" data-bagianss="<?= $formss['bagians']; ?>"
                                    data-tgl2ss="<?= $formss['tgl_pemeriksaan']; ?>">
                                    <?= $formss['namas']; ?></a>
                                  </td>
                                  <td class="text-right"><?= $formss['bagians']; ?></td>
                                  <td class="text-right"><span class="label label-warning"><?= $formss['masalahs']; ?></span> </td>
                                  <td class="text-right"><span class="label label-warning"><?= $formss['tgl_pemeriksaan']; ?></span> </td>
                                  <td class="text-center">
                                    <a href="<?= base_url(); ?>Admin/batalFormProses/<?= $id_bulan; ?>/<?= $formss['id1']; ?>">
                                      <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Batalkan Proses Form" onclick="return confirm('Anda Sudah Yakin Untuk Mebatalkan Permintaan Form ini?');"><i class="ti-back-left" aria-hidden="true"></i></button>
                                    </a>
                                    <a href="#" class="modal-selesai1" data-toggle="modal" data-target="#SelesaiModal"
                                    data-idsc="<?= $formss['id_form']; ?>" data-id1sc="<?= $formss['id1']; ?>" data-id2sc="<?= $formss['masalahs']; ?>"
                                    data-namasc="<?= $formss['namas']; ?>" data-bagiansc="<?= $formss['bagians']; ?>"
                                    data-tgl1sc="<?= $formss['tgl_pengajuan']; ?>" data-tgl2sc="<?= $formss['tgl_pemeriksaan']; ?>"
                                    >
                                      <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline" data-toggle="tooltip" data-original-title="Selesai"><i class="ti-check-box " aria-hidden="true"></i></button>
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
                                  <th>Nama Pengaju</th>
                                  <th class="text-right">Untuk Dibagian</th>
                                  <th class="text-right">Permasalahan</th>
                                  <th class="text-right">Tanggal</th>
                                  <th class="text-center">Aksi</th>
                              </tr>
                          </thead>
                            <?php foreach( $form_selesai as $formsss ) : ?>
                              <?php if ( $formsss['status_form'] = 7 ){ ?>
                          <tbody>
                              <tr class="footable-even" style="">
                                  <td>
                                    <a href="#" class="modal-selesai" data-toggle="modal" data-target="#DetailSelesai"
                                    data-idsss="<?= $formsss['id_form']; ?>" data-nipsss="<?= $formsss['id_pengaju']; ?>"
                                    data-namasss="<?= $formsss['namas']; ?>" data-tgl1sss="<?= $formsss['tgl_pengajuan']; ?>"
                                    data-id2sss="<?= $formsss['masalahs']; ?>" data-jabatansss="<?= $formsss['jabatans']; ?>"
                                    data-rinciansss="<?= $formsss['uraian_masalah']; ?>" data-bagiansss="<?= $formsss['bagians']; ?>"
                                    data-tgl2sss="<?= $formsss['tgl_pemeriksaan']; ?>" data-tgl3sss="<?= $formsss['tgl_selesai']; ?>"
                                    data-hasilsss="<?= $formsss['hasil_pemeriksaan']; ?>">
                                    <?= $formsss['namas']; ?></a>
                                  </td>
                                  <td class="text-right"><?= $formsss['bagians']; ?></td>
                                  <td class="text-right"><span class="label label-success"><?= $formsss['masalahs']; ?></span> </td>
                                  <td class="text-right"><span class="label label-success"><?= $formsss['tgl_selesai']; ?></span> </td>
                                  <td class="text-center">
                                    <a href="<?= base_url(); ?>Admin/tarikForm/<?= $id_bulan; ?>/<?= $formsss['id1']; ?>">
                                      <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Tarik Kembali Form" onclick="return confirm('Apakah Anda Yakin Untuk Tarik Kembali Form ini?');"><i class="ti-back-left" aria-hidden="true"></i></button>
                                    </a>
                                    <a href="<?= base_url(); ?>Admin/cetakForm/<?= $id_bulan; ?>/<?= $formsss['id1']; ?>">
                                      <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline" data-toggle="tooltip" data-original-title="Cetak Form"><i class="ti-printer " aria-hidden="true"></i></button>
                                    </a>
                                  </td>
                              </tr>
                          </tbody>
                        <?php } else {}?>
                        <?php endforeach; ?>
                        </table>
                      </div>
                    </div>

                    <div class="tab-pane p-20" id="tolak" role="tabpanel">
                      <div class="table-responsive">
                        <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list footable-loaded footable" data-page-size="10" style="margin-top: 4px;">
                          <thead>
                              <tr>
                                  <th>Nama Pengaju</th>
                                  <th class="text-right">Untuk Dibagian</th>
                                  <th class="text-right">Permasalahan</th>
                                  <th class="text-right">Tanggal</th>
                                  <th class="text-center">Aksi</th>
                              </tr>
                          </thead>
                            <?php foreach( $form_tolak as $formx ) : ?>
                              <?php if ( $formx['status_form'] = 14 ){ ?>
                                <tbody>
                                    <tr class="footable-even" style="">
                                        <td>
                                          <a href="#" class="modal-tolak" data-toggle="modal" data-target="#DetailTolak"
                                          data-idx="<?= $formx['id_form']; ?>" data-nipx="<?= $formx['id_pengaju']; ?>"
                                          data-namax="<?= $formx['namas']; ?>" data-tgl1x="<?= $formx['tgl_pengajuan']; ?>"
                                          data-id2x="<?= $formx['masalahs']; ?>" data-jabatanx="<?= $formx['jabatans']; ?>"
                                          data-rincianx="<?= $formx['uraian_masalah']; ?>" data-bagianx="<?= $formx['bagians']; ?>"
                                          data-tgl2x="<?= $formx['tgl_tolak']; ?>" data-alasanx="<?= $formx['ket_tolak']; ?>">
                                          <?= $formx['namas']; ?></a>
                                        </td>
                                        <td class="text-right"><?= $formx['bagians']; ?></td>
                                        <td class="text-right"><span class="label label-primary"><?= $formx['masalahs']; ?></span> </td>
                                        <td class="text-right"><span class="label label-primary"><?= $formx['tgl_tolak']; ?></span> </td>
                                        <td class="text-center">
                                          <a href="<?= base_url(); ?>Admin/batalFormTolak/<?= $id_bulan; ?>/<?= $formx['id1']; ?>">
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Tarik Kembali Form" onclick="return confirm('Apakah Anda Yakin Untuk Tarik Kembali Form ini?');"><i class="ti-back-left" aria-hidden="true"></i></button>
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


<div class="modal fade bs-example-modal-lg" id="DetailMasuk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #26dad2;">
                <h4 class="modal-title " id="exampleModalLabel1" style="color: white;">Detail Form Pemeliharaan Perangkat IT (Masuk)</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <div class="card card-body printableArea">
                      <h3 class="form-control" style="margin-top: -13px;">
                        Diajukan Pada :
                        <input type="text" style="width:42%; font-weight: bold;" class="form-control tgl-forms" readonly="" name="tgl-forms">
                        <span class="pull-right">
                          Form No : <input type="text" class="form-control id-forms" name="id-forms" readonly="" style="margin-right: -199px;padding-right: 0.75rem;border-right-width: 0.8px; width:63%; font-weight: bold;">
                        </span>
                      </h3>
                      <hr>
                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Nama Pengaju</label>
                                  <div class="col-md-9">
                                      <input style="font-weight: bold;" type="text" class="form-control nama-forms" name="nama-forms" readonly>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">NIP</label>
                                  <div class="col-md-9">
                                      <input class="form-control nip-forms" name="nip-forms" type="text" value="" readonly>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group row">
                                <label for="example-text-input" class="col-md-3 col-form-label">Jabatan</label>
                                <div class="col-md-9">
                                  <input class="form-control jabatan-forms" name="jabatan-forms" type="text" value=""  readonly>
                                </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Untuk Dibagian</label>
                                  <div class="col-md-9">
                                      <input style="font-weight: bold;" class="form-control bagian-forms" name="bagian-forms" type="text" value="" readonly>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Permasalahan</label>
                                  <div class="col-md-9">
                                      <input style="font-weight: bold;" class="form-control masalah-forms" name="masalah-forms"  type="text"  value="" readonly>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group row">
                                <label for="example-text-input" class="col-md-3 col-form-label">Rincian Permasalahan</label>
                                <div class="col-md-9">
                                  <textarea class="form-control rincian-forms" name="rincian-forms" type="text" readonly></textarea>
                                </div>
                              </div>
                          </div>
                      <!--/span-->
                  </div>
                  </div>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>

<!-- ============================================================== -->
<!-- End Modals Content FORM MASUK -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- Modals Content FORM TOLAK Menu-->
<!-- ============================================================== -->

<div class="modal fade bs-example-modal-lg" id="TolakModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #26dad2;">
                <h4 class="modal-title " id="exampleModalLabel1" style="color: white;">
                  &nbsp;&nbsp;<b>Detail Tolak Form Pemeliharaan Perangkat IT</b>
                  <input type="text" class="form-control nama-formsx" name="nama-formsx" readonly="" style="font-weight: bold; margin-top : 8px;">
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <form method="post" action="<?= base_url();?>admin/tolakFormMasuk/<?= $id_bulan; ?>" class="form-horizontal" >
              <div class="card card-body printableArea">
                      <h3 class="form-control" style="margin-top: -13px;">
                        Diajukan Pada :
                        <input type="text" style="width:42%; font-weight: bold;" class="form-control tgl-formsx" readonly="" name="tgl-formsx">
                        <span class="pull-right">
                          Form No : <input type="text" class="form-control id-formsx" name="id-formsx" readonly="" style="margin-right: -199px;padding-right: 0.75rem;border-right-width: 0.8px; width:63%; font-weight: bold;">
                        </span>
                      </h3>
                      <hr>
                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Untuk Dibagian</label>
                                  <div class="col-md-9">
                                      <input style="font-weight: bold;" class="form-control bagian-formsx" name="bagian-formsx" type="text" value="" readonly>
                                  </div>
                              </div>
                          </div>
                          <!--<input class="form-control id-formsx" name="id-formsx" id="id-formsx" type="hidden">-->
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Permasalahan</label>
                                  <div class="col-md-9">
                                      <input style="font-weight: bold;" class="form-control masalah-formsx" name="masalah-formsx"  type="text"  value="" readonly>
                                  </div>
                              </div>
                          </div>

                          <input class="form-control id-sx" name="id-sx" id="id-sx"  type="hidden" readonly>
                          <div class="col-md-12">
                              <div class="form-group row">
                                <label for="example-text-input" class="col-md-3 col-form-label">Alasan Penolakan</label>
                                <div class="col-md-9">
                                  <textarea class="form-control" name="alasan-tolak" id="alasan-tolak" type="text"></textarea>
                                </div>
                              </div>
                          </div>
                      <!--/span-->
                  </div>
                  </div>
            </div>
            <div class="modal-footer">
              <div class="form-actions">
                  <div class="row" style="margin-right: auto;">
                      <div class="col-md-4">
                          <div class="row">
                             <button type="submit" class="btn btn-outline-primary"><span><i class="mdi mdi-close-circle"></i> Tolak</span></button>
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
<!-- End Modals Content FORM TOLAK Menu -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- Modals Content FORM PROSES -->
<!-- ============================================================== -->

<div class="modal fade bs-example-modal-lg" id="DetailProses" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #26dad2;">
                <h4 class="modal-title " id="exampleModalLabel1" style="color: white;">Detail Form Pemeliharaan Perangkat IT (Proses)</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <div class="card card-body printableArea">
                <h3 class="form-control" style="margin-top: -13px;">
                  Diproses Pada :
                  <input type="text" style="width:42%; font-weight: bold;" class="form-control tgl-proses-formss" readonly="" name="tgl-proses-formss">
                  <span class="pull-right">
                    Form No : <input type="text" class="form-control id-formss" name="id-formss" readonly="" style="margin-right: -199px;padding-right: 0.75rem;border-right-width: 0.8px; width:63%; font-weight: bold;">
                  </span>
                </h3>
                      <hr>
                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Nama Pengaju</label>
                                  <div class="col-md-9">
                                      <input style="font-weight: bold;" type="text" class="form-control nama-formss" name="nama-formsss" readonly>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">NIP</label>
                                  <div class="col-md-9">
                                      <input class="form-control nip-formss" name="nip-formss" type="text" value="" readonly>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group row">
                                <label for="example-text-input" class="col-md-3 col-form-label">Jabatan</label>
                                <div class="col-md-9">
                                  <input class="form-control jabatan-formss" name="jabatan-formss" type="text" value=""  readonly>
                                </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Diajukan Pada</label>
                                  <div class="col-md-9">
                                    <input class="form-control tgl-formss" name="tgl-formss" type="text" value="" readonly>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Untuk Dibagian</label>
                                  <div class="col-md-9">
                                      <input style="font-weight: bold;" class="form-control bagian-formss" name="bagian-formss" type="text" value="" readonly>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Permasalahan</label>
                                  <div class="col-md-9">
                                      <input style="font-weight: bold;" class="form-control masalah-formss" name="masalah-formss"  type="text"  value="" readonly>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group row">
                                <label for="example-text-input" class="col-md-3 col-form-label">Rincian Permasalahan</label>
                                <div class="col-md-9">
                                  <textarea class="form-control rincian-formss" name="rincian-formss" type="text" readonly></textarea>
                                </div>
                              </div>
                          </div>
                      <!--/span-->
                  </div>
                  </div>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>

<!-- ============================================================== -->
<!-- End Modals Content FORM PROSES -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- Modals Content FORM Selesai1 -->
<!-- ============================================================== -->
<div class="modal fade bs-example-modal-lg" id="SelesaiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #26dad2;">
                <h4 class="modal-title " id="exampleModalLabel1" style="color: white;">
                  &nbsp;&nbsp;<b>Detail Form Penyelesaian Pemeliharaan Perangkat IT</b>
                  <input type="text" class="form-control nama-formsc" name="nama-formsc" readonly="" style="font-weight: bold; margin-top : 8px;">
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <form method="post" action="<?= base_url();?>admin/terimaFormProses/<?= $id_bulan; ?>" class="form-horizontal" >
              <div class="card card-body printableArea">
                      <h3 class="form-control" style="margin-top: -13px;">
                        Diproses Pada :
                        <input type="text" style="width:42%; font-weight: bold;" class="form-control tgl2-formsc" readonly="" name="tgl2-formsc">
                        <span class="pull-right">
                          Form No : <input type="text" class="form-control id-formsc" name="id-formsc" readonly="" style="margin-right: -199px;padding-right: 0.75rem;border-right-width: 0.8px; width:63%; font-weight: bold;">
                        </span>
                      </h3>
                      <hr>
                      <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="control-label text-left col-md-3">Diajukan Pada</label>
                                <div class="col-md-9">
                                    <input style="font-weight: bold;" class="form-control tgl1-formsc" name="tgl1-formsc" type="text" value="" readonly>
                                </div>
                            </div>
                        </div>
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Untuk Dibagian</label>
                                  <div class="col-md-9">
                                      <input style="font-weight: bold;" class="form-control bagian-formsc" name="bagian-formsc" type="text" value="" readonly>
                                  </div>
                              </div>
                          </div>
                          <!--<input class="form-control id-formsx" name="id-formsx" id="id-formsx" type="hidden">-->
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Permasalahan</label>
                                  <div class="col-md-9">
                                      <input style="font-weight: bold;" class="form-control masalah-formsc" name="masalah-formsc"  type="text"  value="" readonly>
                                  </div>
                              </div>
                          </div>

                          <input class="form-control id-sc" name="id-sc" id="id-sc"  type="hidden" readonly>
                          <div class="col-md-12">
                              <div class="form-group row">
                                <label for="example-text-input" class="col-md-3 col-form-label">Hasil Pemeriksaan</label>
                                <div class="col-md-9">
                                  <textarea class="form-control" name="hasil-periksa" id="hasil-periksa" type="text"></textarea>
                                </div>
                              </div>
                          </div>
                      <!--/span-->
                  </div>
                  </div>
            </div>
            <div class="modal-footer">
              <div class="form-actions">
                  <div class="row" style="margin-right: auto;">
                      <div class="col-md-4">
                          <div class="row">
                             <button type="submit" class="btn btn-outline-success"><span><i class="mdi mdi-check-circle"></i> Selesai</span></button>
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
<!-- End Modals Content FORM Selesai1 -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- Modals Content FORM Selesai -->
<!-- ============================================================== -->

<div class="modal fade bs-example-modal-lg" id="DetailSelesai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #26dad2;">
                <h4 class="modal-title " id="exampleModalLabel1" style="color: white;">Detail Form Pemeliharaan Perangkat IT (Selesai)</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <div class="card card-body printableArea">
                <h3 class="form-control" style="margin-top: -13px;">
                  Diselesaikan Pada :
                  <input type="text" style="width:42%; font-weight: bold;" class="form-control tgl-selesai-formsss" readonly="" name="tgl-selesai-formsss">
                  <span class="pull-right">
                    Form No : <input type="text" class="form-control id-formsss" name="id-formsss" readonly="" style="margin-right: -199px;padding-right: 0.75rem;border-right-width: 0.8px; width:63%; font-weight: bold;">
                  </span>
                </h3>
                      <hr>
                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Nama Pengaju</label>
                                  <div class="col-md-9">
                                      <input style="font-weight: bold;" type="text" class="form-control nama-formsss" name="nama-formsss" readonly>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">NIP</label>
                                  <div class="col-md-9">
                                      <input class="form-control nip-formsss" name="nip-formsss" type="text" value="" readonly>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group row">
                                <label for="example-text-input" class="col-md-3 col-form-label">Jabatan</label>
                                <div class="col-md-9">
                                  <input class="form-control jabatan-formsss" name="jabatan-formsss" type="text" value=""  readonly>
                                </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Diajukan Pada</label>
                                  <div class="col-md-9">
                                    <input class="form-control tgl-formsss" name="tgl-formss" type="text" value="" readonly>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Diproses Pada</label>
                                  <div class="col-md-9">
                                    <input class="form-control tgl-proses-formsss" name="tgl-proses-formsss" type="text" value="" readonly>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Untuk Dibagian</label>
                                  <div class="col-md-9">
                                      <input style="font-weight: bold;" class="form-control bagian-formsss" name="bagian-formsss" type="text" value="" readonly>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Permasalahan</label>
                                  <div class="col-md-9">
                                      <input style="font-weight: bold;" class="form-control masalah-formsss" name="masalah-formsss"  type="text"  value="" readonly>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group row">
                                <label for="example-text-input" class="col-md-3 col-form-label">Rincian Permasalahan</label>
                                <div class="col-md-9">
                                  <textarea class="form-control rincian-formsss" name="rincian-formsss" type="text" readonly></textarea>
                                </div>
                              </div>
                          </div>
                      <!--/span-->
                  </div>
                  </div>
            </div>
            <div class="modal-footer">
              <div class="col-md-12">
                  <div class="form-group row">
                    <label for="example-text-input" class="col-md-3 col-form-label">Hasil Pemeriksaan</label>
                    <div class="col-md-9">
                      <textarea style="font-weight: bold;" class="form-control hasil-formsss" name="hasil-formsss" type="text" readonly></textarea>
                    </div>
                  </div>
              </div>
            </div>
        </div>
    </div>
</div>

<!-- ============================================================== -->
<!-- End Modals Content FORM SELESAI -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- Modals Content FORM Tolak -->
<!-- ============================================================== -->

<div class="modal fade bs-example-modal-lg" id="DetailTolak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #26dad2;">
                <h4 class="modal-title " id="exampleModalLabel1" style="color: white;">Detail Form Pemeliharaan Perangkat IT (Tolak)</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <div class="card card-body printableArea">
                <h3 class="form-control" style="margin-top: -13px;">
                  Ditolak Pada :
                  <input type="text" style="width:42%; font-weight: bold;" class="form-control tgl-tolak-formx" readonly="" name="tgl-tolak-formx">
                  <span class="pull-right">
                    Form No : <input type="text" class="form-control id-formx" name="id-formx" readonly="" style="margin-right: -199px;padding-right: 0.75rem;border-right-width: 0.8px; width:63%; font-weight: bold;">
                  </span>
                </h3>
                      <hr>
                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Nama Pengaju</label>
                                  <div class="col-md-9">
                                      <input style="font-weight: bold;" type="text" class="form-control nama-formx" name="nama-formx" readonly>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">NIP</label>
                                  <div class="col-md-9">
                                      <input class="form-control nip-formx" name="nip-formx" type="text" value="" readonly>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group row">
                                <label for="example-text-input" class="col-md-3 col-form-label">Jabatan</label>
                                <div class="col-md-9">
                                  <input class="form-control jabatan-formx" name="jabatan-formx" type="text" value=""  readonly>
                                </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Diajukan Pada</label>
                                  <div class="col-md-9">
                                    <input class="form-control tgl-formx" name="tgl-formx" type="text" value="" readonly>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Untuk Dibagian</label>
                                  <div class="col-md-9">
                                      <input style="font-weight: bold;" class="form-control bagian-formx" name="bagian-formx" type="text" value="" readonly>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Permasalahan</label>
                                  <div class="col-md-9">
                                      <input style="font-weight: bold;" class="form-control masalah-formx" name="masalah-formx"  type="text"  value="" readonly>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group row">
                                <label for="example-text-input" class="col-md-3 col-form-label">Rincian Permasalahan</label>
                                <div class="col-md-9">
                                  <textarea class="form-control rincian-formx" name="rincian-formx" type="text" readonly></textarea>
                                </div>
                              </div>
                          </div>
                      <!--/span-->
                  </div>
                  </div>
            </div>
            <div class="modal-footer">
              <div class="col-md-12">
                  <div class="form-group row">
                    <label for="example-text-input" class="col-md-3 col-form-label">Alasan Penolakan</label>
                    <div class="col-md-9">
                      <textarea style="font-weight: bold;" class="form-control alasan-formx" name="alasan-formx" type="text" readonly></textarea>
                    </div>
                  </div>
              </div>
            </div>
        </div>
    </div>
</div>

<!-- ============================================================== -->
<!-- End Modals Content FORM Tolak -->
<!-- ============================================================== -->


</div>
<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
<script>
    $(document).ready(function(){

        // get form masuk
        $('.modal-masuk').on('click',function(){
            // get data from form masuk list
            const ids = $(this).data('ids');
            const nips = $(this).data('nips');
            const namas = $(this).data('namas');
            const tgl1s = $(this).data('tgl1s');
            const id2s  = $(this).data('id2s');
            const jabatans = $(this).data('jabatans');
            const bagians = $(this).data('bagians');
            const rincians = $(this).data('rincians');

            // Set data to Form Modal Masuk
            $('.id-forms').val(ids);
            $('.nip-forms').val(nips);
            $('.nama-forms').val(namas);
            $('.tgl-forms').val(tgl1s);
            $('.masalah-forms').val(id2s);
            $('.jabatan-forms').val(jabatans);
            $('.rincian-forms').val(rincians);
            $('.bagian-forms').val(bagians);
            // Call Modal Masuk
            $('#DetailMasuk').modal('show');
        });

        // get form proses
        $('.modal-proses').on('click',function(){
            // get data from form proses list
            const idss = $(this).data('idss');
            const nipss = $(this).data('nipss');
            const namass = $(this).data('namass');
            const tgl1ss = $(this).data('tgl1ss');
            const tgl2ss = $(this).data('tgl2ss');
            const id2ss  = $(this).data('id2ss');
            const jabatanss = $(this).data('jabatanss');
            const bagianss = $(this).data('bagianss');
            const rincianss = $(this).data('rincianss');

            // Set data to Form Modal Proses
            $('.id-formss').val(idss);
            $('.nip-formss').val(nipss);
            $('.nama-formss').val(namass);
            $('.tgl-formss').val(tgl1ss);
            $('.tgl-proses-formss').val(tgl2ss);
            $('.masalah-formss').val(id2ss);
            $('.jabatan-formss').val(jabatanss);
            $('.rincian-formss').val(rincianss);
            $('.bagian-formss').val(bagianss);
            // Call Modal Proses
            $('#DetailProses').modal('show');
        });

        // get form selesai
        $('.modal-selesai').on('click',function(){
            // get data from form selesai list
            const idsss = $(this).data('idsss');
            const nipsss = $(this).data('nipsss');
            const namasss = $(this).data('namasss');
            const tgl1sss = $(this).data('tgl1sss');
            const tgl2sss = $(this).data('tgl2sss');
            const tgl3sss = $(this).data('tgl3sss');
            const id2sss  = $(this).data('id2sss');
            const jabatansss = $(this).data('jabatansss');
            const bagiansss = $(this).data('bagiansss');
            const rinciansss = $(this).data('rinciansss');
            const hasilsss = $(this).data('hasilsss');

            // Set data to Form Selesai
            $('.id-formsss').val(idsss);
            $('.nip-formsss').val(nipsss);
            $('.nama-formsss').val(namasss);
            $('.tgl-formsss').val(tgl1sss);
            $('.tgl-proses-formsss').val(tgl2sss);
            $('.tgl-selesai-formsss').val(tgl3sss);
            $('.masalah-formsss').val(id2sss);
            $('.jabatan-formsss').val(jabatansss);
            $('.rincian-formsss').val(rinciansss);
            $('.bagian-formsss').val(bagiansss);
            $('.hasil-formsss').val(hasilsss);
            // Call Modal Selesai
            $('#DetailSelesai').modal('show');
        });

        // get form Tolak
        $('.modal-tolak').on('click',function(){
            // get data from form Tolak list
            const idx = $(this).data('idx');
            const nipx = $(this).data('nipx');
            const namax = $(this).data('namax');
            const tgl1x = $(this).data('tgl1x');
            const id2x = $(this).data('id2x');
            const jabatanx = $(this).data('jabatanx');
            const rincianx = $(this).data('rincianx');
            const bagianx = $(this).data('bagianx');
            const tgl2x = $(this).data('tgl2x');
            const alasanx = $(this).data('alasanx');

            // Set data to Form Tolak
            $('.id-formx').val(idx);
            $('.nip-formx').val(nipx);
            $('.nama-formx').val(namax);
            $('.tgl-formx').val(tgl1x);
            $('.masalah-formx').val(id2x);
            $('.jabatan-formx').val(jabatanx);
            $('.rincian-formx').val(rincianx);
            $('.bagian-formx').val(bagianx);
            $('.tgl-tolak-formx').val(tgl2x);
            $('.alasan-formx').val(alasanx);
            // Call Modal Tolak
            $('#DetailTolak').modal('show');
        });

        // get form Tolak1
        $('.modal-tolak1').on('click',function(){
            // get data from form Tolak1 list
            const idsx = $(this).data('idsx');
            const id1sx = $(this).data('id1sx');
            const namasx = $(this).data('namasx');
            const tgl1sx = $(this).data('tgl1sx');
            const id2sx = $(this).data('id2sx');
            const bagiansx = $(this).data('bagiansx');

            // Set data to Form1 Tolak
            $('.id-formsx').val(idsx);
            $('.id-sx').val(id1sx);
            $('.nama-formsx').val(namasx);
            $('.tgl-formsx').val(tgl1sx);
            $('.masalah-formsx').val(id2sx);
            $('.bagian-formsx').val(bagiansx);
            // Call Modal Tolak1
            $('#TolakModal').modal('show');
        });

        // get form Selesai1
        $('.modal-selesai1').on('click',function(){
            // get data from form Selesai1 list
            const idsc = $(this).data('idsc'); //id-form
            const id1sc = $(this).data('id1sc'); //id1
            const namasc = $(this).data('namasc'); //id_pengaju
            const tgl1sc = $(this).data('tgl1sc'); //tgl_pengajuan
            const tgl2sc = $(this).data('tgl2sc'); //tgl_pemeriksaan
            const id2sc = $(this).data('id2sc'); //id_masalah
            const bagiansc = $(this).data('bagiansc'); //id_bagian

            // Set data to Form Selesai1
            $('.id-formsc').val(idsc);
            $('.id-sc').val(id1sc);
            $('.nama-formsc').val(namasc);
            $('.tgl1-formsc').val(tgl1sc);
            $('.tgl2-formsc').val(tgl2sc);
            $('.masalah-formsc').val(id2sc);
            $('.bagian-formsc').val(bagiansc);
            // Call Modal Tolak1
            $('#SelesaiModal').modal('show');
        });

        // get Delete Product
        $('.btn-delete').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            // Set data to Form Edit
            $('.productID').val(id);
            // Call Modal Edit
            $('#deleteModal').modal('show');
        });

    });
</script>

<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
