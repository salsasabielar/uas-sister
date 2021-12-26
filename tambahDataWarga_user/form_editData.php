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
            <h1 class="h3 mb-0 text-gray-800">Edit Data</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="tambahData.php">Tambah Data</a></li>
              <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
            </ol>
          </div>

          <div class="row">
          <div class="col-lg-12">
              <div class="card">
                
                <div class="card mb-4">
                
                <div class="card-body">
                <?php 
                include "../config.php";
                $id_warga = $_GET['id_warga'];
                $query_mysqli = mysqli_query($koneksi,"SELECT * FROM warga WHERE id_warga='$id_warga'")or die(mysqli_error($koneksi));
                $nomor = 1;
                while($data = mysqli_fetch_array($query_mysqli)){
                ?>
                <form action="../tambahDataWarga_user/updateData.php" method="post">
                    <div class="form-group">
                      <label for="username">NIK</label>
                      <input type="hidden" name="id_warga" value="<?php echo $data['id_warga'] ?>">
					            <input type="text" class="form-control" name="nik" value="<?php echo $data['nik'] ?>">                      
                    </div>
                    <div class="form-group">
                      <label for="password">Nama</label>
                      <input type="text" class="form-control" name="nama" value="<?php echo $data['nama'] ?>">
                    </div>
                    <div class="form-group">
                    <label for="password">Alamat</label>
                      <input type="text" class="form-control" name="alamat" value="<?php echo $data['alamat'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="role">Tempat, Tanggal Lahir</label>
                      <input type="date" class="form-control" name="ttl" value="<?php echo $data['ttl'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="role">Pekerjaan</label>
                      <input type="text" class="form-control" name="pekerjaan" value="<?php echo $data['pekerjaan'] ?>">
                    </div>
                    
                    <div class="form-group">
                      <label>Jenis Kelamin</label>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio1" name="jenisKelamin" class="custom-control-input" value="Laki-Laki"<?php echo ($data['jenisKelamin']=='Laki-Laki')?'checked':' ' ?>>
                        <label class="custom-control-label" for="customRadio1">Laki-Laki </label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio2" name="jenisKelamin" class="custom-control-input" value="Perempuan"<?php echo ($data['jenisKelamin']=='Perempuan')?'checked':' ' ?>>
                        <label class="custom-control-label" for="customRadio2">Perempuan</label>
                      </div>
                    </div>
                    
                    
                    
                  <div class="form-group">
                      <div class="custom-file">
                        
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update & Simpan</button>
                  </form>
                  <?php } ?>
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