<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Daftar Urut Kepangkatan Per Desember 2019</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Data ASN</a></li>
                <li class="breadcrumb-item">Daftar Urut Kepangkatan</i></li>
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
        <i class="mdi mdi-account-key"></i> Data ASN Berhasil <strong><?= $this->session->flashdata('flash'); ?></strong>.!!!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
    </div>
    <?php endif; ?>
    <!-- END Notifikasi Hapus, Edit, Tambah Data -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                      <?php if ( $usr == true ) { ?>
                        <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list footable-loaded footable" data-page-size="10">
                          <div class="row" style="width: 100%; margin-top: 20px;">
                          <div class="col-lg-8 ">

                          </div>
                          <div class="col-lg-4">
                           <form action="" method="post">
                            <div class="input-group">
                                <input name="keyword" id="keyword" type="text" class="form-control" placeholder="Ketik NIP Untuk Pencarian Data...">
                                <div class="input-group-append">
                                    <button class="btn btn-info" type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                           </form>
                          </div>
                        </div>
                          <thead>
                              <tr>
                                  <th class="footable-sortable">No<span class="footable-sort-indicator"></span></th>
                                  <th class="footable-sortable">NIP<span class="footable-sort-indicator"></span></th>
                                  <th class="footable-sortable">Nama<span class="footable-sort-indicator"></span></th>
                                  <th class="footable-sortable">Gol<span class="footable-sort-indicator"></span></th>
                                  <th class="footable-sortable">TMT<span class="footable-sort-indicator"></span></th>
                                  <th class="footable-sortable">Jabatan<span class="footable-sort-indicator"></span></th>
                                  <th class="footable-sortable">TMT<span class="footable-sort-indicator"></span></th>
                                  <th class="footable-sortable">Masa Kerja<span class="footable-sort-indicator"></span></th>
                                  <th class="footable-sortable">Latihan<span class="footable-sort-indicator"></span></th>
                                  <th class="footable-sortable">Tahun<span class="footable-sort-indicator"></span></th>
                                  <th class="footable-sortable">Pendidikan<span class="footable-sort-indicator"></span></th>
                                  <th class="footable-sortable">Tahun<span class="footable-sort-indicator"></span></th>
                                  <th class="footable-sortable">TK.Ijazah<span class="footable-sort-indicator"></span></th>
                                  <th class="footable-sortable">TTL<span class="footable-sort-indicator"></span></th>
                                  <th class="footable-sortable">KGB<span class="footable-sort-indicator"></span></th>
                                  <th class="footable-sortable">KPK<span class="footable-sort-indicator"></span></th>
                                  <th class="footable-sortable">Mutasi<span class="footable-sort-indicator"></span></th>
                                  <th class="footable-sortable">Ket<span class="footable-sort-indicator"></span></th>
                                  <th class="footable-sortable">Action<span class="footable-sort-indicator"></span></th>
                              </tr>

                          <?php foreach($usr as $usr1) :
                              ?>
                          </thead>
                              <tbody>
                                  <tr class="footable-even" style="">
                                      <td><span class="footable-toggle"></span>1</td>
                                      <td><?= $usr1['nip']; ?></td>
                                      <td><?= $usr1['nama']; ?></td>
                                      <td><?= $usr1['panggols']; ?></td>
                                      <td><?= $usr1['tmt1']; ?></td>
                                      <td><span class="label label-danger"><?= $usr1['jabatans']; ?></span> </td>
                                      <td><?= $usr1['tmt2']; ?></td>
                                      <td><?= $usr1['masa_tahun']; ?> Tahun <?= $usr1['masa_bulan']; ?> Bulan</td>
                                      <td><?= $usr1['latihan']; ?></td>
                                      <td><?= $usr1['latihan_tahun']; ?></td>
                                      <td><?= $usr1['pendidikan']; ?></td>
                                      <td><?= $usr1['pend_tahun']; ?></td>
                                      <td><?= $usr1['tk_ijazah']; ?></td>
                                      <td><?= $usr1['tempat_lahir']; ?>, <?= $usr1['tgl_lahir']; ?></td>
                                      <td><?= $usr1['kgb']; ?></td>
                                      <td><?= $usr1['kpk']; ?></td>
                                      <td><?= $usr1['mutasi']; ?></td>
                                      <td><?= $usr1['ket']; ?></td>
                                      <td>
                                        <a href="<?= base_url(); ?>Karyawan_ti/hapushakim1/<?= $usr1['nip']; ?>">
                                          <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Hapus" onclick="return confirm('Yakin Hapus User???');"><i class="ti-close" aria-hidden="true"></i></button>
                                        </a>
                                        <a href="<?= base_url(); ?>Karyawan_ti/ubahhakim1/<?= $usr1['nip']; ?>">
                                          <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Detail <?= $usr1['nama']; ?>"><i class="fa fa-address-card" aria-hidden="true"></i></button>
                                        </a>
                                      </td>
                                  </tr>
                              </tbody>
                          <?php endforeach; ?>
                        <tfoot>
                            <tr>
                              <td colspan="2">
                                  <button type="button" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#ASNModal" style="padding-left:20px ; padding-right: 20px ;">Tambah Data ASN</button>
                              </td>

                                <td colspan="7">
                                    <div class="text-right">
                                        <ul class="pagination"> </ul>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                       </table>
                         <?php } else { ?>

                           <div style="margin-top:20px; text-align:center;"><i class="fa fa-spin fa-refresh" style="font-size: 200px;"></i><br/><br/><font style="font-size:25px; margin-top: 40px;"><b>DATA ASN TIDAK DITEMUKAN !</b></font><br/><small>Silahkan Diisikan Datanya Terlebih Dahulu</small>
                             <div class="row"  style="width: 100%; margin-top: 25px;">
                               <div class="col-xs-6 col-md-4"></div>
                                  <div class="col-xs-6 col-md-4">
                                    <button type="button" class="btn btn-md btn-info" data-toggle="modal" data-target="#ASNModal" style="padding-left:20px ; padding-right: 20px ;">Tambah Data ASN</button>
                                    <a href="<?= base_url('home'); ?>"><button type="button" class="btn btn-md btn-icon" aria-hidden="true">kembali</button></a>
                                  </div>
                                <div class="col-xs-6 col-md-4"></div>
                              </div>
                           </div>

                         <?php }?>
                         <div class="modal fade bs-example-modal-lg" id="ASNModal" tabindex="-1" role="dialog" aria-labelledby="FormModalASN">
                              <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h4 class="modal-title" id="FormModalASN"><b>Menu Tambah Data ASN PN Tanjung Balai Karimun</b></h4>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  </div>
                                  <div class="modal-body">
                                    <form action="" class="form-horizontal" method="post">
                                        <div class="form-body">
                                            <h5 class="box-title"><br/> <i class="mdi mdi-account-plus"></i> Silahkan Disikan Data ASN dengan Benar!</h5>
                                            <hr class="m-t-0 m-b-40">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="control-label text-right col-md-3"><b>Nama</b></label>
                                                        <div class="col-md-9">
                                                          <input type="text" class="form-control" placeholder="Nama Pegawai" name="nama" id="nama">
                                                          <?php if ( form_error('nama') == true ) :?>
                                                          <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                                                          <?php endif;?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="control-label text-right col-md-3">Jabatan</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control custom-select" tabindex="1" name="jabatan" id="jabatan">
                                                                <option value="#">Pilih Jabatan</option>
                                                                <?php foreach ($usr1 as $usr11):?>
                                                                <option value="<?= $usr11['id']; ?>"> <?= $usr11['jabatan'];?> </option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                            <div class="row">
                                              <div class="col-md-6">
                                                  <div class="form-group row">
                                                      <label class="control-label text-right col-md-3">NIP</label>
                                                      <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="NIP" name="nip" id="nip">
                                                        <?php if ( form_error('nip') == true ) :?>
                                                          <small class="form-text text-danger"><?= form_error('nip'); ?></small>
                                                        <?php endif;?>
                                                      </div>
                                                  </div>
                                              </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="control-label text-right col-md-3">Pangkat/Golongan</label>
                                                        <div class="col-md-9">
                                                          <select class="form-control custom-select" tabindex="1" name="panggol" id="panggol">
                                                              <option value="#">Pilih Jabatan</option>
                                                              <?php foreach ($usr2 as $usr22):?>
                                                                <option value="<?= $usr22['id'];?>"> <?= $usr22['panggol'];?> </option>
                                                              <?php endforeach; ?>
                                                          </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->

                                            <!--/row-->

                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-offset-3 col-md-9">
                                                            <button type="submit" class="btn btn-success">Submit</button>
                                                            <button type="button" class="btn btn-inverse"><a href="<?= base_url();?>karyawan_ti/pegawai">Kembali</a></button>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->

</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
