<?php 
require_once __DIR__.'/config/database.php';

//mengambil data users
$slctUsers = "SELECT * FROM users";
$rsltUsers = $dbConnect->query($slctUsers);

//jika data users kosong, tampilkan ini
if ($rsltUsers->num_rows == 0){ ?>
	<h3>Selamat datang di aplikasi sekola!</h3>

	<p>Untuk menggunakan aplikasi ini pertama kali, maka harus ada admin yang mendaftarkan diri ke dalam sistem sekola</p>

	<p>Silahkan daftarkan diri anda melalui form di bawah ini</p>

	<?php require_once __DIR__.'/view/form/form_register_admin.php'; ?>

<!-- jika data users tidak kosong-->
<?php } elseif ($rsltUsers->num_rows > 0) {
	// cek session
	// jika session aktif
	if (isset($_SESSION['username']) && isset($_SESSION['role'])) {
		$slctUser = "SELECT * FROM users WHERE username = '$_SESSION[username]'";
		$rsltUser = $dbConnect->query($slctUser);
		$row = mysqli_fetch_assoc($rsltUser);

		$uRole = $_SESSION['role'];
		//cek role

		//jika role admin, pergi ke halaman admin
		if ($uRole == 'admin') {
			header('location:http://localhost/sekola/admin/');
		//jika role guru, pergi ke halaman guru
		}elseif ($uRole == 'guru') {
			header('location:http://localhost/sekola/guru/');
		//jika role selain dari admin dan guru, pergi ke halaman siswa
		}else{
			header('location:http://localhost/sekola/siswa/');
		}
	}else{ ?>
		<?php session_start(); session_destroy();?>
		<?php require_once __DIR__.'/view/form/form_login.php'; ?>		
	<?php } ?>
<?php } ?>
