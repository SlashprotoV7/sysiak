<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Daftar User</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Manajemen User</a></li>
                <li class="breadcrumb-item">Daftar User</li>
                <li class="breadcrumb-item"><i class="mdi mdi-account-key"></i></li>
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
                              <th class="footable-sortable">Nama<span class="footable-sort-indicator"></span></th>
                              <th class="footable-sortable">Jenis<span class="footable-sort-indicator"></span></th>
                              <th class="footable-sortable">Status Aktivasi<span class="footable-sort-indicator"></span></th>
                              <th class="footable-sortable">Action<span class="footable-sort-indicator"></span></th>
                          </tr>
                      </thead>
                      <?php foreach( $j1 as $usr1 ):

                        if ($usr1['status'] == 1) {
                            $statuss = "Aktif";
                            $A = "success";
                        }
                        else {
                            $statuss = "Tidak Aktif";
                            $A = "warning";
                        }
                      ?>

                      <tbody>
                          <tr class="footable-even" style="">
                              <td><span class="footable-toggle"></span>1</td>
                              <td>
                                  <a href="javascript:void(0)"><img src="<?= base_url();?>assets/images/users/4.jpg" alt="user" width="40" class="img-circle">
                                  <?= $usr1['namas']; ?></a>
                              </td>

                                <td><span class="label label-danger"><?= $usr1['jeniss']; ?></span> </td>


                              <td><span class="label label-<?= $A; ?>"><?= $statuss; ?></span></td>
                              <td>
                                <?php if ( $usr1['jenis_user'] == 1) {?>
                                    <button type="disabled" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Access Denied"><i class="ti-lock" aria-hidden="true"></i></button>
                                <?php } else {?>
                                  <a href="<?= base_url(); ?>Konsys/hapus1/<?= $usr1['id_nip']; ?>">
                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Hapus" onclick="return confirm('Yakin Hapus User???');"><i class="ti-close" aria-hidden="true"></i></button>
                                  </a>
                                <?php }?>
                                  <a href="<?= base_url(); ?>Konsys/ubah1/<?= $usr1['id_nip']; ?>">
                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Detail <?= $usr1['namas']; ?>"><i class="fa fa-id-card" aria-hidden="true"></i></button>
                                  </a>
                              </td>

                          </tr>
                      </tbody>
                    <?php endforeach; ?>
                      <tfoot>
                          <tr>
                              <td colspan="2">
                                  <a href="<?= base_url(); ?>konsys/register" class="btn btn-info btn-rounded">Tambah User</a>
                              </td>

                              <td colspan="7">
                                  <div class="text-right">
                                      <ul class="pagination"> </ul>
                                  </div>
                              </td>
                          </tr>
                      </tfoot>
                    </table>
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
