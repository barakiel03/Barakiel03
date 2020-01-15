<?php
$host = "localhost";
$user = "id12232664_mike123";
$pass = "Kejurdaforki123";
$name = "id12232664_mike";

//$koneksi = mysqli_connect($host, $user, $pass, $name);
$koneksi = mysqli_connect($host, $user, $pass, $name) or die("Koneksi ke database gagal!");
mysqli_select_db($koneksi, $name) or die("Tidak ada database yang dipilih!");
?>