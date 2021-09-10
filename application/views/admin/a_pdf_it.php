
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor"> <a href="<?= base_url(); ?>Admin/detail_report_it"><button class="btn btn-info">
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
        <div class="row">
          <div class="col-md-4">
            <div class="card text-center">
                <div class="card-header "style="background-color: #26dad2; color: black;" >
                    <b>Detail Formulir No #<?= $pdf['id1'];?></b>
                </div>
                <div class="card-body">
                    <h4 class="card-text">Diperiksa Pada : <?= $pdf['tgl_pemeriksaan']; ?></h4>
                    <p class="card-text"><b>Status : <?= $pdf['statuss']; ?></b></p>
                </div>
                <div class="card-footer text-muted">
                    E-Lakse | PTIP
                </div>
            </div>
          </div>
          <div class="col-md-8">
                <div class="card card-body printableArea">
                    <div class="row">
                      <div class="card card-body printableArea">
                          <h3 align="center"><b>FORMULIR PERMOHONAN PENGECEKAN & PENANGANAN <br/>ALAT ELEKTRONIK KANTOR</b></h3>
                          <hr>
                          <h3><span class="pull-right">Karimun, <?= $pdf['tgl_pengajuan']; ?></span></h3>
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="pull-left">
                                      <address>
                                          <p>Yang Bertanda Tangan Dibawah ini :</p>
                                          <p class="m-l-5">
                                              Nama : <?= $pdf['namas']; ?>,
                                              <br/> NIP : <?= $pdf['id_pengaju']; ?>,
                                              <br/> Jabatan : <?= $pdf['jabatans']; ?>,
                                              <br/> Untuk Dibagian : <?= $pdf['bagians']; ?>
                                              <br/>
                                          </p>
                                      </address>
                                  </div>
                              </div>
                              <br/>
                              <div class="col-md-12">
                                Dengan ini mengajukan permohonan untuk :
                              </div>
                              <div class="col-md-12">
                                <br/>
                                <?= $pdf['uraian_masalah']; ?>
                              </div>
                              <div class="col-md-12">
                                <br/><br/>
                                Demikian permohonan ini saya buat atas perhatian dan kerjasamanya saya ucapkan terima kasih.
                                <br/><br/><br/><br/>
                                <div class="pull-right m-t-30 text-right">
                                    <p style=""><b><u><?= $pdf['namas']; ?></u></b></p>
                                </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="pull-left col-md-3">
                                      <address>
                                          <p class="text-muted m-l-5"> Diperiksa Oleh : </p>
                                      </address>
                                  </div>
                                  <div class="pull-right text-right col-md-9">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th class="text-right">Tanda Tangan</th>
                                                <th class="text-right">Tanggal Penyelesaian</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?= $pdf['id_pemeriksa'];?></td>
                                                <td class="text-right">&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                <td class="text-right"> <?= $pdf['tgl_selesai']; ?> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                  </div>
                              </div>
                              <div class="col-md-12">
                                <div class="pull-left col-md-8">
                                    <address>
                                        <p class="text-muted m-l-5"> Hasil Pemeriksaan  : </p>
                                        <textarea class="text-left" readonly>
                                          <?= $pdf['hasil_pemeriksaan']; ?>
                                        </textarea>
                                    </address>
                                </div>
                                <div class="pull-right text-right col-md-4">
                                  <p style="text-align:center;">
                                    Penanggung Jawab
                                    <br/>Kasubbag PTIP
                                    <br/><br/><br/><br/><br/>
                                    <b><u><?= $pdf['id_acc']; ?></u></b>
                                  </p>
                                </div>
                              </div>
                          </div>
                      </div>
                        <div class="col-md-12">

                            <div class="clearfix"></div>
                            <hr>
                            <div class="text-right">
                                <button id="print"  class="btn btn-default btn-outline" type="button" style="background-color: #26dad2; color: white;"> <span><i class="fa fa-print"></i> Cetak PDF</span> </button>
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

</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!--Custom JavaScript -->
<script src="<?= base_url(); ?>assets/js/custom.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.PrintArea.js" type="text/JavaScript"></script>
<script>
$(document).ready(function() {
    $("#print").click(function() {
        var mode = 'iframe'; //popup
        var close = mode == "popup";
        var options = {
            mode: mode,
            popClose: close
        };
        $("div.printableArea").printArea(options);
    });
});
</script>
