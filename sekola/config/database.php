<?php

$dbhost = "localhost"; //nama database server
$dbusername = "pma"; // nama user dalam database
$dbpassword = "pma021"; //password user dalam database
$dbname = "sekola"; // nama database yang kita gunakan

//Mengkoneksikan php ke database
$dbConnect = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);

// Mengecek koneksi
    // Jika error, maka tampilkan ini
if (mysqli_connect_errno()) {
  
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  //kemudian berhentikan semua proses
  exit();
}
else {
  // Jika tidak error, maka tampilkan ini
  echo "Berhasil terkoneksi ke database $dbname";
}

?>