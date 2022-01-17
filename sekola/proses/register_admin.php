<?php 
require_once __DIR__.'/../config/database.php';


$namaAdmin = $_POST['namaDepan']." ".$_POST['namaBelakang'];
$jkAdmin = $_POST['jk'];
$agamaAdmin = $_POST['agama'];
$alamatAdmin = $_POST['alamat'];
$noTelpAdmin = $_POST['noTelp'];
$emailAdmin = $_POST['email'];
$usernameAdmin = $_POST['username'];
$passwordAdmin = md5($_POST['password']); // password dienkripsi
$passwordKonfAdmin = md5($_POST['password2']); // password dienkripsi

//jika password tidak cocok, maka balik ke halaman register admin
if ($passwordAdmin!=$passwordKonfAdmin) {
	echo "<script>alert('Password tidak cocok'); history.back();</script>";
	exit();
}

// variable untuk datetime di database(hari ini)
$hariIni = date("Y-m-d h:i:s");

// cari id paling tinggi di table admin
$sqlMaxId = "SELECT MAX(id) AS id FROM admin;";
$rsltMaxId = $dbConnect->query($sqlMaxId);
$row = mysqli_fetch_assoc($rsltMaxId);

$idAdmin = "";

//jika id kosong, maka id = 1
if ($row == 0) {
	$idAdmin = 1;
//jika id tidak kosong, maka id paling tinggi ditambah 1
}else{
	$idAdmin = $row['id']+1;
}

// syntax sql input data ke table users
$inputAdmin = "INSERT INTO users VALUES('$usernameAdmin','$passwordAdmin','admin');";

// syntax sql input data ke table admin
$inputAdmin .= "INSERT INTO admin VALUES ('$idAdmin','$namaAdmin','$jkAdmin','$agamaAdmin','$alamatAdmin','$noTelpAdmin','$emailAdmin','$usernameAdmin','1','$usernameAdmin','$hariIni');";

//proses input data admin ke database, 
	//jika berhasil input, redirect ke home
if (mysqli_multi_query($dbConnect, $inputAdmin)){
	header('location:http://localhost/sekola/');
	//jika gagal, tampilkan error
}else{
	echo "<br><br> insert gagal".mysqli_error($dbConnect);
}
