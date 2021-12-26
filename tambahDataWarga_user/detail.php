
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
            <h1 class="h3 mb-0 text-gray-800">Detail</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="../index_user.php">Tambah Data</a></li>
              <li class="breadcrumb-item">Detail</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <!-- Simple Tables -->
              <div class="card">
                
                <div class="table-responsive">
                  
                <?php
                    if(isset($_GET['id_warga'])){
                        $id_warga    =$_GET['id_warga'];
                    }
                    else {
                        die ("Error. No ID Selected!");    
                    }
                    include "../config.php";
                    $query    =mysqli_query($koneksi, "SELECT * FROM warga WHERE id_warga='$id_warga'");
                    $data    =mysqli_fetch_array($query);
                ?>
                  <table class="table align-items-center table-flush">
                      <thead class="thead-light">
                        <tr>
                          <th>Uraian Data Diri</th>
                          <th></th><th></th><th></th> <th></th><th></th>
                          
                        </tr>
                      </thead>
                      <tr>
                          <td size="90">NIK</td>
                          <td>: <?php echo $data['nik']?></td>
                          <td></td>
                          <td></td><td></td>
                          <td></td>
                      </tr>
                      <tr>
                          <td>Nama</td>
                          <td>: <?php echo $data['nama']?></td>
                          <td></td>
                          <td></td><td></td>
                          <td></td>
                      </tr>
                      <tr>
                          <td>TTL</td>
                          <td>: <?php echo $data['ttl']?></td>
                          <td></td>
                          <td></td><td></td>
                          <td></td>
                      </tr>
                      <tr>
                          <td>Pekerjaan</td>
                          <td>: <?php echo $data['pekerjaan']?></td><td></td>
                          <td></td><td></td>
                          <td></td>
                      </tr>
                      <tr>
                          <td>Jenis Kelamin</td>
                          <td>: <?php echo $data['jenisKelamin']?></td><td></td><td></td>
                          <td></td>
                          <td></td>
                      </tr>
                     
                      
                
                
                
                

                      
                      <tr height="40">
                          <td>  
                          <a class="btn btn-sm btn-primary" href="../tambahDataWarga_user/tambahData.php">Kembali</a>
                        </td><td></td>
                          <td></td><td></td><td></td><td></td>
                      </tr>
                      
                  </table>

                  
                </div>
                <div class="card-footer"></div>
              </div>
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
  <!-- Page level plugins -->
  <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>

</body>

</html>


