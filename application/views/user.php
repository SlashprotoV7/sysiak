
     <main class="main">
    <!-- Breadcrumb-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Home</li>
      <li class="breadcrumb-item">
        <a href="#">Admin</a>
      </li>
      <li class="breadcrumb-item active">Dashboard</li>
      <!-- Breadcrumb Menu-->
      <li class="breadcrumb-menu d-md-down-none">
        <div class="btn-group" role="group" aria-label="Button group">
          <a class="btn" href="#">
            <i class="icon-speech"></i>
          </a>
          <a class="btn" href="./">
            <i class="icon-graph"></i>  Dashboard</a>
          <a class="btn" href="#">
            <i class="icon-settings"></i>  Settings</a>
        </div>
      </li>
    </ol>
    <div class="container-fluid">
        <div class="col-sm-6 col-md-4">
            <div class="card card-accent-primary">
                <div class="card-header">Daftar Karyawan/ti</div>
                <div class="card-body">
                    <table class="table table-responsive-sm table-striped">
                    <thead>
                    <tr>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Pangkat/Golongan</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card card-accent-primary">
                <div class="card-header">Daftar User</div>
                <div class="card-body">
                    <table class="table table-responsive-sm table-striped">
                    <thead>
                    <tr>
                    <th>Nama</th>
                    <th>Level_User</th>
                    <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($user as $user1) :?>
                        <th><?= $user1['nama'];?></th>
                        <th><?= $user1['jenis_user'];?></th>
                        <th><?= $user1['status'];?></th>
                    <?php endforeach; ?>
                    </tbody>
                    </table>
                    <ul class="pagination">
                    <li class="page-item">
                    <a class="page-link" href="#">Prev</a>
                    </li>
                    <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                    <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                    <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                    <a class="page-link" href="#">4</a>
                    </li>
                    <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> 
  </main>
</div>