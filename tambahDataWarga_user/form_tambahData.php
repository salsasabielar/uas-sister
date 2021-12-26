<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="../img/logo/logo-SIB.png" rel="icon">
  <title>Sistem Informasi Penerimaan Bantuan</title>
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="../css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index_user.php">
        <div class="sidebar-brand-icon">
          <img src="../img/logo/SSIB.png">
        </div>        
      </a>
      <li class="nav-item active">
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">       
      </div>
      <li class="nav-item">
        <a class="nav-link" href="../index_user.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>        
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Menu
      </div>
      
      <li class="nav-item">
        <a class="nav-link" href="tambahData.php">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Tambah Data</span>
        </a>        
      </li>
      
      <hr class="sidebar-divider">    
      <li class="nav-item"> 
        <a class="nav-link" href="../logout.php">
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400 "></i>  
          <span>Keluar</span>
        </a>
      </li>
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          
        </nav>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Data</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="tambahData.php">Tambah Data</a></li>
              <li class="breadcrumb-item">Tambah Data</li>
            </ol>
          </div>

          <div class="row">
          <div class="col-lg-12">
              <div class="card">
                
                <div class="card mb-4">
                
                <div class="card-body">
                <form action="prosesTambah.php" method="post">
                    <div class="form-group">
                      <label for="nik">NIK</label>
                      <input type="text" class="form-control" name="nik">                      
                    </div>
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="form-group">
                    <label for="alamat">Alamat</label>
                      <input type="text" class="form-control" name="alamat">
                    </div>
                    <div class="form-group">
                      <label for="ttl">Tanggal Lahir</label>
                      <input type="date" class="form-control" name="ttl">
                    </div>
                    <div class="form-group">
                      <label for="pekerjaan">Pekerjaan</label>
                      <input type="text" class="form-control" name="pekerjaan">
                    </div>
                    <div class="form-group">
                      <label>Jenis Kelamin</label>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio1" name="jenisKelamin" class="custom-control-input" value="Laki-Laki">
                        <label class="custom-control-label" for="customRadio1">Laki-Laki </label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio2" name="jenisKelamin" class="custom-control-input" value="Perempuan">
                        <label class="custom-control-label" for="customRadio2">Perempuan</label>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <div class="custom-file">
                        
                      </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary" >Simpan</button>
                  </form>
                </div>
              </div>
                
                <div class="card-footer"></div>
              </div>
            </div>

            <div class="col-lg-6">
                            
            </div>
          </div>
          <!--Row-->

        </div>
        <!---Container Fluid-->
      </div>
      
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="../js/ruang-admin.min.js"></script>

</body>

</html>