<?php 
require_once __DIR__.'/../config/database.php';
session_start();

if (isset($_SESSION['username']) && isset($_SESSION['role'])) {

	$slctUser = "SELECT * FROM users WHERE username = '$_SESSION[username]'";
	$rsltUser = $dbConnect->query($slctUser);
	$row = mysqli_fetch_assoc($rsltUser);

	$uRole = $_SESSION['role'];
	
	if ($uRole == 'admin') {
		header('location:http://localhost/sekola/admin/');
	}elseif ($uRole == 'guru') {
		header('location:http://localhost/sekola/guru/');
	}else{
		header('location:http://localhost/sekola/siswa/');
	}
}else{
	if (isset($_POST['username']) && isset($_POST['password'])) {
		$username = $_POST['username'];
		$password = md5($_POST['password']);

		$slctUser = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

		$rsltUser = $dbConnect->query($slctUser);
		
		if ($row = mysqli_fetch_assoc($rsltUser)) {

			$_SESSION['username'] = $row['userame'];
			$_SESSION['role'] = $row['role'];
	
			if ($_SESSION['role'] == 'admin') {
				header('location:http://localhost/sekola/admin/');
			}elseif ($_SESSION['role'] == 'guru') {
				header('location:http://localhost/sekola/guru/');
			}else{
				header('location:http://localhost/sekola/siswa/');
			}
		}else{
			echo "tidak ada";
			echo "<script>alert('Username atau Sassword salah');window.location.href='http://localhost/sekola/';</script>";

		}
	}else{
		echo "<script>alert('tidak ada post');window.location.href='http://localhost/sekola/';</script>";
	}		
}