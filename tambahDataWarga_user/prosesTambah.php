<?php
include "../config.php";
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$ttl = $_POST['ttl'];
$pekerjaan = $_POST['pekerjaan'];
$jenisKelamin = $_POST['jenisKelamin'];
if(mysqli_query ($koneksi, "INSERT INTO warga VALUES('','$nik','$nama','$alamat','$ttl','$pekerjaan','$jenisKelamin')")) {
    header("location:tambahData.php");
  } else{
   echo mysqli_error($koneksi);
  }


?>