<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Data Personil PN Tanjung Balai Karimun</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Kepegawaian</a></li>
                <li class="breadcrumb-item">Data Personil PN</i></li>
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
    <?php if ( $this->session->flashdata('delpersonil') ) : ?>
    <div class="alert alert-success">
        <i class="mdi mdi-account-key"></i> <?= $this->session->flashdata('delpersonil'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
    </div>
    <?php endif; ?>
    <?php if ( $this->session->flashdata('ubahpersonil1') ) : ?>
    <div class="alert alert-danger">
        <i class="mdi mdi-account-key"></i> <?= $this->session->flashdata('ubahpersonil1'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
    </div>
    <?php endif; ?>
    <?php if ( $this->session->flashdata('ubahpersonil2') ) : ?>
    <div class="alert alert-success">
        <i class="mdi mdi-account-key"></i> <?= $this->session->flashdata('ubahpersonil2'); ?>
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
                            <a href="<?= base_url(); ?>admin/a_registerpersonilpn"><button type="button" class="btn btn-info btn-rounded" style="padding-left:20px ; padding-right: 20px ;"> <i class=" fa fa-plus-square"></i> Tambah Data Personil</button></a>
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
                                  <!--<th class="footable-sortable">No<span class="footable-sort-indicator"></span></th>-->
                                  <th class="footable-sortable">NIP<span class="footable-sort-indicator"></span></th>
                                  <th class="footable-sortable">Nama<span class="footable-sort-indicator"></span></th>
                                  <th class="footable-sortable">Gol<span class="footable-sort-indicator"></span></th>
                                  <th class="footable-sortable">Jabatan<span class="footable-sort-indicator"></span></th>
                                  <th class="footable-sortable">Aksi<span class="footable-sort-indicator"></span></th>
                              </tr>

                          <?php foreach($usr as $usr1) :
                              ?>
                          </thead>
                              <tbody>
                                  <tr class="footable-even" style="">
                                      <!--<td><span class="footable-toggle"></span>1</td>-->
                                      <td><?= $usr1['nip']; ?></td>
                                      <td><b><?= $usr1['nama']; ?></b></td>
                                      <td><?= $usr1['golongans']; ?></td>
                                      <td><span class="label label-danger"><?= $usr1['jabatans']; ?></span> </td>
                                      <td>
                                        <a href="<?= base_url(); ?>Admin/hapuspersonilpn/<?= $usr1['nip']; ?>">
                                          <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Hapus" onclick="return confirm('Yakin Hapus User???');"><i class="ti-trash" aria-hidden="true"></i></button>
                                        </a>
                                        <a href="javascript:void(0);" class="modal-detailpersonil" data-toggle="modal" data-target="#DetailASNModal"
                                        data-namak="<?= $usr1['nama']; ?>" data-nipk="<?= $usr1['nip']; ?>"
                                        data-tl1k="<?= $usr1['tempat_lahir']; ?>" data-tl2k="<?= $usr1['tgl_lahir']; ?>"
                                        data-genderk="<?= $usr1['genders']; ?>" data-status1k="<?= $usr1['statuss']; ?>"
                                        data-emailk="<?= $usr1['email']; ?>" data-nohpk="<?= $usr1['no_hp']; ?>"
                                        data-pendk="<?= $usr1['pendidikan']; ?>" data-ijazahk="<?= $usr1['ijazahs'];?>" data-pend_tahunk="<?= $usr1['pend_tahun']; ?>"
                                        data-golk="<?= $usr1['golongans']; ?>" data-tmt1k="<?= $usr1['tmt1']; ?>"
                                        data-jabatank="<?= $usr1['jabatans']; ?>" data-tmt2k="<?= $usr1['tmt2']; ?>"
                                        data-latihank="<?= $usr1['latihan']; ?>" data-latihan_tahunk="<?= $usr1['latihan_tahun']; ?>"
                                        data-kgbk="<?= $usr1['kgb']; ?>" data-kpkk="<?= $usr1['kpk']; ?>"
                                        data-ketk="<?= $usr1['ket']; ?>" data-mutasik="<?= $usr1['mutasi']; ?>"
                                        >
                                          <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Detail <?= $usr1['nama']; ?>"><i class="fa fa-address-card" aria-hidden="true"></i></button>
                                        </a>
                                        <a href="<?= base_url(); ?>Admin/a_ubahpersonilpn/<?= $usr1['status2']; ?>/<?= $usr1['nip']; ?>"> <!-- kirim variable status2 (hakim,cpns,pegawai,honor) dan nip ke menu ubah-->
                                          <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Ubah Data <?= $usr1['nama']; ?>"><i class="fa fa-edit" aria-hidden="true"></i></button>
                                        </a>
                                      </td>
                                  </tr>
                              </tbody>
                          <?php endforeach; ?>
                        <tfoot>
                            <tr>
                              <td colspan="2">
                                  <a href="<?= base_url(); ?>admin/a_registerpersonilpn"><button type="button" class="btn btn-info btn-rounded" style="padding-left:20px ; padding-right: 20px ;"><i class=" fa fa-plus-square"></i> Tambah Data Personil</button></a>
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
                         <div style="margin-top:20px; text-align:center;"><i class="fa fa-spin fa-refresh" style="font-size: 200px;"></i><br/><br/><font style="font-size:25px; margin-top: 40px;"><b>DATA PERSONIL TIDAK DITEMUKAN !</b></font><br/><small>Silahkan Diisikan Datanya Terlebih Dahulu</small>
                           <div class="row"  style="width: 100%; margin-top: 25px;">
                             <div class="col-xs-6 col-md-4"></div>
                                <div class="col-xs-6 col-md-4">
                                  <a href="<?= base_url(); ?>admin/a_registerpersonilpn"><button type="button" class="btn btn-info btn-rounded" style="padding-left:20px ; padding-right: 20px ;">Tambah Data Personil</button></a>
                                </div>
                              <div class="col-xs-6 col-md-4"></div>
                            </div>
                         </div>
                       <?php }?>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Modals Content -->
    <!-- ============================================================== -->

    <?php foreach($usr as $usr1) : ?>
      <div class="modal fade bs-example-modal-lg" id="DetailASNModal" tabindex="-1" role="dialog" aria-labelledby="FormModalDetailASN">
           <div class="modal-dialog modal-lg" style="max-width:1160px" role="document">
             <div class="modal-content">
               <div class="modal-header">
                 <h4 class="modal-title" id="FormModalDetailASN"><b id="nama-formk"></b></h4>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               </div>
               <div class="modal-body">
                 <div class="row">
                 <div class="col-lg-4 col-xlg-3 col-md-5">
                     <div class="card">
                         <div class="card-body">
                             <center class="m-t-30"> <img src="../assets/images/users/5.jpg" class="img-circle" width="150" />
                             </br></br>
                                 <h4 class="card-title m-t-10" id="nama1-formk"></h4>
                                 <h6 class="card-subtitle" id="nip-formk"></h6>
                             </center>
                             <hr>
                             <center><button type="button" class="btn btn-sm waves-effect waves-light btn-info muted">Informasi Diri</button></center>
                             <small class="text-muted p-t-30 db">Tempat, Tanggal Lahir</small> <h6 id="ttl-formk">,</h6> <h6 ></h6>
                             <small class="text-muted p-t-30 db">Jenis Kelamin</small>  <h6 id="gender-formk"></h6>
                             <small class="text-muted p-t-30 db">Status Perkawinan</small> <h6 id="status1-formk"></h6>
                             <small class="text-muted p-t-30 db">Email</small> <h6 id="email-formk"></h6>
                             <small class="text-muted p-t-30 db">No.HP</small> <h6 id="nohp-formk"></h6>
                             <small class="text-muted p-t-30 db">Pendidikan Terakhir</small> <h6 id="pendidikan-formk"></h6>
                         </div>
                         <div class="card-body">
                            <!-- dipakai untuk garis pembatas antara foto, nama nip dan detail informmasi pribadi-->


                         </div>
                     </div>
                 </div>
                 <div class="col-lg-8 col-xlg-9 col-md-7">
                     <div class="card">
                         <!-- Nav tabs -->
                         <ul class="nav nav-tabs profile-tab" role="tablist">
                             <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#info_pekerjaan" role="tab">Informasi Pekerjaan</a> </li>
                         </ul>
                         <!-- Tab panes -->
                         <div class="tab-content">
                             <div class="tab-pane active" id="info_pekerjaan" role="tabpanel">
                                 <div class="card-body">
                                     <div class="profiletimeline">
                                         <div class="sl-item">
                                             <div class="sl-left"> <i class="mdi mdi-account-card-details"></i> </div>
                                             <div class="sl-right">
                                               <div><p><b>Nomor Induk Pegawai (NIP)</b></p>
                                                   <h6 class="card-subtitle" id="nip1-formk"></h6>
                                               </div>
                                             </div>
                                         </div>
                                         <hr>
                                         <div class="sl-item">
                                             <div class="sl-left"> <i class="mdi mdi-briefcase"></i> </div>
                                             <div class="sl-right">
                                               <div class="row">
                                                   <div class="col-md-3 col-xs-6 b-r"> <strong>Jabatan</strong>
                                                       <br>
                                                       <p class="text-muted" id="jabatan-formk"></p>
                                                   </div>
                                                   <div class="col-md-3 col-xs-6 b-r"> <strong>TMT</strong>
                                                       <br>
                                                       <p class="text-muted" id="tmt2-formk"></p>
                                                   </div>
                                                   <div class="col-md-3 col-xs-6 b-r"> <strong>Golongan</strong>
                                                       <br>
                                                       <p class="text-muted" id="gol-formk"></p>
                                                   </div>
                                                   <div class="col-md-3 col-xs-6"> <strong>TMT</strong>
                                                       <br>
                                                       <p class="text-muted" id="tmt1-formk"></p>
                                                   </div>
                                               </div>
                                             </div>
                                         </div>
                                         <hr>
                                         <div class="sl-item">
                                             <div class="sl-left"> <i class="mdi mdi-book-open-page-variant"></i> </div>
                                             <div class="sl-right">
                                               <div class="row">
                                               <div class="col-md-6 col-xs-6 b-r"> <strong>Latihan Jabatan</strong>
                                                   <br>
                                                   <p class="text-muted" id="latihan-formk"></p>
                                               </div>
                                               <div class="col-md-6 col-xs-6 b-r"> <strong>Tahun</strong>
                                                   <br>
                                                   <p class="text-muted" id="latihan_tahun-formk"></p>
                                               </div>
                                             </div>
                                             </div>
                                         </div>
                                         <hr>
                                         <div class="sl-item">
                                             <div class="sl-left"> <i class="mdi mdi-bank"></i> </div>
                                             <div class="sl-right">
                                               <div class="row">
                                               <div class="col-md-3 col-xs-6 b-r"> <strong>KGB</strong>
                                                   <br>
                                                   <p class="text-muted" id="kgb-formk"></p>
                                               </div>
                                               <div class="col-md-3 col-xs-6 b-r"> <strong>KPK</strong>
                                                   <br>
                                                   <p class="text-muted" id="kpk-formk"></p>
                                               </div>
                                               <div class="col-md-3 col-xs-6 b-r"> <strong>Mutasi Dari</strong>
                                                   <br>
                                                   <p class="text-muted" id="ket-formk"></p>
                                               </div>
                                               <div class="col-md-3 col-xs-6"> <strong>Tahun</strong>
                                                   <br>
                                                   <p class="text-muted" id="mutasi-formk"></p>
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
           </div>
       </div>
 </div>

    <?php endforeach;?>
    <!-- ============================================================== -->
    <!-- End Modals Content -->
    <!-- ============================================================== -->

</div>
<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
<script>
    $(document).ready(function(){
      // get detail personil pn
      $('.modal-detailpersonil').on('click',function(){
        // get data from personil pn and set it to Detail Modal Personil PN
        document.getElementById("nama-formk").innerHTML = 'Detail ' + $(this).data('namak');
        document.getElementById("nama1-formk").innerHTML = $(this).data('namak');
        document.getElementById("nip-formk").innerHTML = $(this).data('nipk');
        document.getElementById("ttl-formk").innerHTML = $(this).data('tl1k') + ', &nbsp' + $(this).data('tl2k');
        document.getElementById("gender-formk").innerHTML = $(this).data('genderk');
        document.getElementById("status1-formk").innerHTML = $(this).data('status1k');
        document.getElementById("email-formk").innerHTML = $(this).data('emailk');
        document.getElementById("nohp-formk").innerHTML = $(this).data('nohpk');
        document.getElementById("pendidikan-formk").innerHTML = $(this).data('pendk') +  '&nbsp(' + $(this).data('ijazahk') + ') - Tahun ' + $(this).data('pend_tahunk');
        document.getElementById("gol-formk").innerHTML = $(this).data('golk');
        document.getElementById("tmt1-formk").innerHTML = $(this).data('tmt1k');
        document.getElementById("nip1-formk").innerHTML = $(this).data('nipk');
        document.getElementById("jabatan-formk").innerHTML = $(this).data('jabatank');
        document.getElementById("tmt2-formk").innerHTML = $(this).data('tmt2k');
        document.getElementById("latihan-formk").innerHTML = $(this).data('latihank');
        document.getElementById("latihan_tahun-formk").innerHTML = $(this).data('latihan_tahunk');
        document.getElementById("kgb-formk").innerHTML = $(this).data('kgbk');
        document.getElementById("kpk-formk").innerHTML = $(this).data('kpkk');
        document.getElementById("ket-formk").innerHTML = $(this).data('ketk');
        document.getElementById("mutasi-formk").innerHTML = $(this).data('mutasik');
        // Call Modal Masuk
        $('#DetailASNModal').modal('show');
      });
    });
</script>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
