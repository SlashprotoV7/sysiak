<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile">

        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                 <li class="nav-devider"></li>
                <li class="nav-small-cap">MENU UTAMA</li>
                <li> <a class=" waves-effect waves-dark" href="<?= base_url(); ?>admin" aria-expanded="false"><i class="mdi mdi-home-modern"></i><span class="hide-menu">Beranda</span></a></li>
                <!--<li> <a class="waves-effect waves-dark" href="<?= base_url(); ?>surat" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Kelola Surat<span class="label label-rouded label-danger pull-right">25</span></span></a>
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account-card-details"></i><span class="hide-menu">Data ASN</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?= base_url(); ?>karyawan_ti/duk">Daftar Urut Kepangkatan (DUK)</a></li>
                    </ul>s
                </li>-->
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account-card-details"></i><span class="hide-menu">Kepegawaian</span></a>

                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?= base_url(); ?>admin/a_surat">Kelola Surat</a></li>
                    </ul>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?= base_url(); ?>admin/a_duk">Daftar Urut Kepangkatan (DUK)</a></li>
                    </ul>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?= base_url(); ?>admin/a_data_personilpn">Data Personil PN</a></li>
                    </ul>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Capaian Kinerja</a></li>
                    </ul>

                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account-card-details"></i><span class="hide-menu">PTIP</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?= base_url(); ?>admin/report_it">Pemeliharaan Perangkat IT</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account-card-details"></i><span class="hide-menu">Umum & Keuangan</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?= base_url(); ?>admin/atk">Daftar Permintaan ATK</a></li>
                    </ul>
                </li>

                <li class="nav-small-cap">MENU KONFIGURASI</li>
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account-card-details"></i><span class="hide-menu">Pengaturan</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?= base_url(); ?>admin/">Manajemen User</a></li>
                    </ul>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?= base_url(); ?>admin/systemc">Informasi Sistem</a></li>
                    </ul>
                </li>
                <li class="nav-devider"></li>
                <li> <a class=" waves-effect waves-dark" href="<?= base_url(); ?>auth/logout" aria-expanded="false"><i class="fa fa-power-off"></i><span class="hide-menu">Logout</span></a></li>
                <!--
                <li> <a class=" waves-effect waves-dark" href="<?= base_url(); ?>karyawan_ti/honorer" aria-expanded="false"><i class="mdi mdi-home-modern"></i><span class="hide-menu">Data Honorer</span></a></li>
                <li class="nav-devider"></li>
               <li class="nav-small-cap">KONFIGURASI</li>
               <li> <a class=" waves-effect waves-dark" href="<?= base_url(); ?>konsys" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Sistem SySiak</span></a>
               <li> <a class=" waves-effect waves-dark" href="<?= base_url(); ?>konsys/manage_user" aria-expanded="false"><i class="mdi mdi-account-key"></i><span class="hide-menu">Manajemen User<span class="label label-rouded label-danger pull-right">25</span></span></a>
               </li>
             -->
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
