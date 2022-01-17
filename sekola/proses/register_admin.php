<?php 
require_once __DIR__.'/config/database.php';


$namaAdmin = $_POST['namaDepan'].' '.$_POST['namaBelakang'];
$jkAdmin = $_POST['jk'];
$agamaAdmin = $_POST['agama'];
$alamatAdmin = $_POST['alamat'];
$noTelpAdmin = $_POST['noTelp'];
$emailAdmin = $_POST['email'];
$usernameAdmin = $_POST['username'];
$passwordAdmin = $_POST['password'];
$passwordKonfAdmin = $_POST['password2'];

if ($passwordAdmin==$passwordKonfAdmin) {
	header('location:index.php')
}

$hariIni = date("Y-m-d h:i:s");


$sqlMaxId = "SELECT MAX(id) FROM admin;";
$rsltMaxId = $dbConnect->query($sqlMaxId);
$row = mysqli_fetch_assoc($rsltMaxId);

$idAdmin = $row[id]+1;

$inputaAdmin = "INSERT INTO admin VALUES ('$idAdmin','$namaAdmin','$jkAdmin','$agamaAdmin','$alamatAdmin','$noTelpAdmin','$emailAdmin','$usernameAdmin','1','$usernameAdmin','$hariIni;);";

$inputaAdmin .= "INSERT INTO users VALUES('$usernameAdmin','$passwordAdmin','admin';)";


if ($dbConnect->query($inputaAdmin) === TRUE){
	header('location:index.php')
}else{
	echo "insert gagal";
}
