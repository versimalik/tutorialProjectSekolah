<?php 
require_once __DIR__.'/../config/database.php';


$namaAdmin = $_POST['namaDepan']." ".$_POST['namaBelakang'];
$jkAdmin = $_POST['jk'];
$agamaAdmin = $_POST['agama'];
$alamatAdmin = $_POST['alamat'];
$noTelpAdmin = $_POST['noTelp'];
$emailAdmin = $_POST['email'];
$usernameAdmin = $_POST['username'];
$passwordAdmin = md5($_POST['password']);
$passwordKonfAdmin = $_POST['password2'];


if ($_POST['password']!=$passwordKonfAdmin) {
	echo "<script>alert('Password tidak cocok'); history.back();</script>";
	exit();
}

$hariIni = date("Y-m-d h:i:s");

$sqlMaxId = "SELECT MAX(id) AS id FROM admin;";
$rsltMaxId = $dbConnect->query($sqlMaxId);
$row = mysqli_fetch_assoc($rsltMaxId);

$idAdmin = "";
if ($row == 0) {
	$idAdmin = 1;
}else{
	$idAdmin = $row['id']+1;
}

$inputAdmin = "INSERT INTO users VALUES('$usernameAdmin','$passwordAdmin','admin');";

$inputAdmin .= "INSERT INTO admin VALUES ('$idAdmin','$namaAdmin','$jkAdmin','$agamaAdmin','$alamatAdmin','$noTelpAdmin','$emailAdmin','$usernameAdmin','1','$usernameAdmin','$hariIni');";

if (mysqli_multi_query($dbConnect, $inputAdmin)){
	header('location:http://localhost/sekola/index.php');
}else{
	echo "<br><br> insert gagal".mysqli_error($dbConnect);
}
