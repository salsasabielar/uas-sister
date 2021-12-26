<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "uas";

    $koneksi= mysqli_connect($server, $user, $pass, $dbname);
    if ($koneksi) {
    
    } else {
    die("Connection Failed: " .mysqli_connect_error());
    }
?>