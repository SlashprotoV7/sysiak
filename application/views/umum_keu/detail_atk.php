<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor"> <a href="<?= base_url(); ?>Umum_keu/atk"><button class="btn btn-info">
            <i class=" fa fa-arrow-circle-left"></i> Kembali</button></a> &nbsp;&nbsp; <?= $judul; ?></h4>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Umum & Keuangan</a></li>
                <li class="breadcrumb-item">ATK</i></li>
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

                        <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list footable-loaded footable" data-page-size="10">
                          <div class="row" style="width: 100%; margin-top: 20px;">
                          <div class="col-lg-8 "></div>
                          <div class="col-lg-4">
                           <form action="" method="post">
                             <h3><span class="pull-right"><b>JANUARI</b> <small>(DIPA 01 & 03)</small></span></h3>
                             <h5>
                               <span style="margin-left: -780px;"><a  data-toggle="modal" data-target="#ModalTambahATK" ><button class="btn btn-success"><i class=" fa fa-plus"></i> Input Tiket</button></a></span>
                               <span class="pull-right"> <small>Tanggal Batas Pengajuan : <b class="text-danger">20 Januari 2020</b></small></span></h5>
                           </form>
                          </div>
                        </div>
                          <thead>
                              <tr>
                                  <th>Nama Bidang</span></th>
                                  <th class="text-right">Tanggal Pengajuan</th>
                                  <th class="text-center">Aksi</th>
                              </tr>


                          </thead>
                              <tbody>
                                  <tr class="footable-even" style="">
                                      <td>
                                          <a href="#" data-toggle="modal" data-target="#ModalATK">PTIP</a>
                                      </td>
                                      <td class="text-right"><span class="label label-danger">20 Januari 2020</span> </td>
                                      <td class="text-center">
                                        <a href="<?= base_url(); ?>Karyawan_ti/hapushonorer1">
                                          <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Hapus Permintaan ATK" onclick="return confirm('Anda Sudah Yakin Untuk Menghapus Permintaan ATK ini?');"><i class="ti-close" aria-hidden="true"></i></button>
                                        </a>
                                        <a href="<?= base_url(); ?>Karyawan_ti/ubahhonorer1">
                                          <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline" data-toggle="tooltip" data-original-title="Ubah Permohonan ATK"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                        </a>
                                        <a href="<?= base_url(); ?>Karyawan_ti/ubahhonorer1">
                                          <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline" data-toggle="tooltip" data-original-title="Cetak berita Acara"><i class="fa fa-print" aria-hidden="true"></i></button>
                                        </a>
                                      </td>
                                  </tr>
                              </tbody>
                       </table>
                       <!-- ============================================================== -->
                       <!-- Modals Content -->
                       <!-- ============================================================== -->

                       <!-- ============================================================== -->
                       <!-- Modals Content -->
                       <!-- ============================================================== -->
                       <div class="modal fade bs-example-modal-lg" id="ModalATK" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                           <div class="modal-dialog modal-lg" role="document">
                               <div class="modal-content">
                                   <div class="modal-header">
                                       <h4 class="modal-title" id="exampleModalLabel1">Permintaan ATK - PTIP</h4>
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                   </div>
                                   <div class="modal-body">
                                     <div class="row">
                                        <div class="col-md-12">
                                            <div class="card card-body printableArea">
                                                <br/>
                                                <h3>&nbsp;&nbsp;&nbsp;<b>JANUARI</b> <small>(DIPA 01)</small> <span class="pull-right">|&nbsp; PTIP &nbsp;|</span></h3>
                                                <h5><span class="pull-right"> <small>Tanggal Pengajuan : <b class="text-danger">20 Januari 2020</b></small></span></h5>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="table-responsive m-t-40" style="clear: both;">
                                                            <table class="table table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="text-center">No.</th>
                                                                        <th>Nama Barang</th>
                                                                        <th class="text-right">Jumlah</th>
                                                                        <th class="text-center">Satuan</th>
                                                                        <th class="text-center">Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="text-center">1</td>
                                                                        <td>Sapu</td>
                                                                        <td class="text-right"> 2 </td>
                                                                        <td class="text-center"> Buah </td>
                                                                        <td class="text-center"> - </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">2</td>
                                                                        <td>Kertas f4</td>
                                                                        <td class="text-right"> 2 </td>
                                                                        <td class="text-center"> Rim </td>
                                                                        <td class="text-center"> - </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">3</td>
                                                                        <td>Tisu</td>
                                                                        <td class="text-right"> 2 </td>
                                                                        <td class="text-center"> Kotak </td>
                                                                        <td class="text-center"> - </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">4</td>
                                                                        <td>Stella AC</td>
                                                                        <td class="text-right"> 2 </td>
                                                                        <td class="text-center"> Buah </td>
                                                                        <td class="text-center"> - </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   </div>
                                   <div class="modal-footer">
                                       <button type="button" id="print" class="btn btn-outline-success"><span><i class="fa fa-print"></i> Berita Acara</span></button>
                                   </div>
                               </div>
                           </div>
                       </div>

                       <div class="modal fade bs-example-modal-lg" id="ModalTambahATK" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                           <div class="modal-dialog modal-lg" role="document">
                               <div class="modal-content">
                                   <div class="modal-header">
                                       <h4 class="modal-title" id="exampleModalLabel">Tambah Bidang Pengajuan ATK</h4>
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                   </div>
                                   <div class="modal-body">
                                     <div class="row">
                                        <div class="col-md-12">
                                            <div class="card card-body printableArea">
                                              <form action="" class="form-horizontal" method="post">
                                                  <div class="form-body">
                                                      <div class="row">
                                                          <div class="col-md-12">
                                                              <div class="form-group row">
                                                                  <label class="control-label text-right col-md-2">Bidang</label>
                                                                  <div class="col-md-10">
                                                                      <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="id_nip" id="id_nip">
                                                                          <option value="#">Pilih Nama Bidang</option>
                                                                          <?php foreach ($usr2 as $usr22):?>
                                                                            <option value="<?= $usr22['nip'];?>"> <?= $usr22['nama'];?> </option>
                                                                          <?php endforeach; ?>
                                                                      </select>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div  class="col-md-12">
                                                            <div class="table-responsive">
                                                              <table id="mainTable" class="table editable-table table-bordered table-striped m-b-0" style="cursor: pointer;">
                                                                  <thead>
                                                                      <tr>
                                                                          <th>Nama Barang</th>
                                                                          <th>Jumlah</th>
                                                                          <th>Satuan</th>
                                                                      </tr>
                                                                  </thead>
                                                                  <tbody>
                                                                      <tr>
                                                                          <td tabindex="1">Kertas A4</td>
                                                                          <td tabindex="1">2</td>
                                                                          <td tabindex="1">Rim</td>
                                                                      </tr>
                                                                      <tr>
                                                                          <td tabindex="1">Stella</td>
                                                                          <td tabindex="1">4</td>
                                                                          <td tabindex="1">Buah</td>
                                                                      </tr>
                                                                      <tr>
                                                                          <td tabindex="1">Sapu</td>
                                                                          <td tabindex="1">2</td>
                                                                          <td tabindex="1">Buah</td>
                                                                      </tr>
                                                                      <tr>
                                                                          <td tabindex="1">Batre AA</td>
                                                                          <td tabindex="1">2</td>
                                                                          <td tabindex="1">Kotak</td>
                                                                      </tr>
                                                                      <tr>
                                                                          <td tabindex="1">Wipol Pemberish Lantai</td>
                                                                          <td tabindex="1">5</td>
                                                                          <td tabindex="1">Bungkus</td>
                                                                      </tr>
                                                                  </tbody>
                                                                  <tfoot>
                                                                      <tr>
                                                                          <th><strong>TOTAL</strong></th>
                                                                          <th></th>
                                                                          <th></th>
                                                                          <th></th>
                                                                      </tr>
                                                                  </tfoot>
                                                              </table>
                                                          <input style="position: absolute; top: 127.8px; left: 20px; text-align: left; width: 385.817px; height: 48.8px; padding: 12px; font-size: 16px; font-family: &quot;Poppins&quot;, sans-serif; font-weight: 300; display: none;">
                                                        </div>
                                                      </div>
                                                      <!--/span-->
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
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
