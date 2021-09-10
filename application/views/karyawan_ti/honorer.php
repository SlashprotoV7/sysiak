<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Daftar honorer</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Data Karyawan/ti</a></li>
                <li class="breadcrumb-item">Data honorer</i></li>
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
        <i class="mdi mdi-account-key"></i> Data User Berhasil <strong><?= $this->session->flashdata('flash'); ?></strong>.!!!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
    </div>
    <?php endif; ?>
    <!-- END Notifikasi Hapus, Edit, Tambah Data -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                      <?php if ( $usr ) { ?>
                        <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list footable-loaded footable" data-page-size="10">
                          <div class="row" style="width: 100%; margin-top: 20px;">
                          <div class="col-lg-8 "></div>
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
                                  <th class="footable-sortable">ID Honorer<span class="footable-sort-indicator"></span></th>
                                  <th class="footable-sortable">Nama<span class="footable-sort-indicator"></span></th>
                                  <th class="footable-sortable">Jabatan<span class="footable-sort-indicator"></span></th>
                                  <th class="footable-sortable">Status<span class="footable-sort-indicator"></span></th>
                                  <th class="footable-sortable">Action<span class="footable-sort-indicator"></span></th>
                              </tr>

                          <?php foreach($usr as $usr1) :
                            if ( $usr1['kategori'] == 3 ){
                              if ( $usr1['cek'] == 1 ) {
                                if ($usr1['status'] == 1) {
                                    $A = "success";
                                }
                                else {
                                    $A = "warning";
                                }
                              ?>
                          </thead>
                              <tbody>
                                  <tr class="footable-even" style="">
                                      <td><span class="footable-toggle"></span>1</td>
                                      <td><?= $usr1['nip']; ?></td>
                                      <td>
                                          <a href="javascript:void(0)"><img src="<?= base_url();?>assets/images/users/4.jpg" alt="user" width="40" class="img-circle"><?= $usr1['nama']; ?></a>
                                      </td>
                                      <td><span class="label label-danger"><?= $usr1['jabatans']; ?></span> </td>
                                      <td><span class="label label-<?= $A; ?>"><?=$usr1['aktivasis']; ?></span></td>
                                      <td>
                                        <a href="<?= base_url(); ?>Karyawan_ti/hapushonorer1/<?= $usr1['nip']; ?>">
                                          <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Hapus" onclick="return confirm('Yakin Hapus User???');"><i class="ti-close" aria-hidden="true"></i></button>
                                        </a>
                                        <a href="<?= base_url(); ?>Karyawan_ti/ubahhonorer1/<?= $usr1['nip']; ?>">
                                          <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Detail <?= $usr1['nama']; ?>"><i class="fa fa-address-card" aria-hidden="true"></i></button>
                                        </a>
                                      </td>
                                  </tr>
                              </tbody>
                                <?php } else {}?>
                              <?php } else {}?>
                          <?php endforeach; ?>
                        <tfoot>
                            <tr>
                              <td colspan="2">
                                  <a href="<?= base_url(); ?>karyawan_ti/registerhonorer" class="btn btn-info btn-rounded">Tambah honorer</a>
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

                           <div style="margin-top:20px; text-align:center;"><i class="fa fa-spin fa-refresh" style="font-size: 200px;"></i><br/><br/><font style="font-size:25px; margin-top: 40px;"><b>DATA honorer TIDAK DITEMUKAN !</b></font><br/><small>Silahkan Diisikan Data honorer Terlebih Dahulu</small>
                             <div class="row"  style="width: 100%; margin-top: 25px;">
                               <div class="col-xs-6 col-md-4"></div>
                                  <div class="col-xs-6 col-md-4">
                                    <a href="<?= base_url(); ?>karyawan_ti/registerhonorer"  style="margin-right: 10px; margin-left: 10px;"><button type="button" class="btn btn-md btn-info" style="padding-left:20px ; padding-right: 20px ;">Tambah Data honorer</button></a>
                                    <a href="<?= base_url('home'); ?>"><button type="button" class="btn btn-md btn-icon" aria-hidden="true">kembali</button></a>
                                  </div>
                                <div class="col-xs-6 col-md-4"></div>
                              </div>
                           </div>

                         <?php }?>
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
