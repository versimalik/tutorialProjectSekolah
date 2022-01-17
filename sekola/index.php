<?php 
require_once __DIR__.'/config/database.php';


//mengambil data users
$slctUsers = "SELECT * FROM users";
$rsltUsers = $dbConnect->query($slctUsers);

if ($rsltUsers->num_rows == 0){ ?>
	<h3>Selamat datang di aplikasi sekola!</h3>

	<p>Untuk menggunakan aplikasi ini pertama kali, maka harus ada admin yang mendaftarkan diri ke dalam sistem sekola</p>

	<p>Silahkan daftarkan diri anda melalui form di bawah ini</p>

	<form action="proses/register_admin.php" method="post">
		<table border = 0>
			<tr>
				<td>Nama Depan</td>
				<td>:</td>
				<td><input type="text" name="namaDepan" placeholder="Masukkan nama depan" required></td>
			</tr>
			<tr>
				<td>Nama Belakang</td>
				<td>:</td>
				<td><input type="text" name="namaBelakang" placeholder="Masukkan nama belakang" required></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<input type="radio" name="jk" value="1" required>
					<label for="1">Laki-Laki</label>
					<br>
					<input type="radio" name="jk" value="0" required>
					<label for="0">Perempuan</label>
				</td>
			</tr>
			<tr>
				<td>Agama</td>
				<td>:</td>
				<td>
					<select name="agama" required>
						<option value="Islam">Islam</option>
						<option value="Protestan">Protestan</option>
						<option value="Katolik">Katolik</option>
						<option value="Hindu">Hindu</option>
						<option value="Buddha">Buddha</option>
						<option value="Khonghucu">Khonghucu</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>
					<textarea name="alamat" required></textarea>
				</td>
			</tr>
			<tr>
				<td>Nomor Telepon</td>
				<td>:</td>
				<td><input type="text" name="noTelp" placeholder="Masukkan nomor telepon" required></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="text" name="email" placeholder="Masukkan alamat email" required></td>
			</tr>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="Masukkan username" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Masukkan password" required></td>
			</tr>
			<tr>
				<td>Konfirmasi Password</td>
				<td>:</td>
				<td><input type="password" name="password2" placeholder="Konfirmasi password" required></td>
			</tr>
			<tr>
				<td colspan="3">
					<input type="submit" name="daftar" value="Daftar">
				</td>
			</tr>
		</table>
	</form>
<?php } elseif ($rsltUsers->num_rows > 0) {
	if (session_status()==2) {
		$row = mysqli_fetch_assoc($rsltUsers);
		session_start();

		$_SESSION['username'] = $row['username'];
		$_SESSION['role'] = $row['role']

		if ($_SESSION['role'] == 'admin') {
			header('location:admin/index.php');
		}elseif ($uRole == 'guru') {
			header('location:guru/index.php');
		}else{
			header('location:siswa/index.php');
		}
	}else{ ?>
		<form action="proses/login.php" method="post">
			<table>
				<tr>
					<td>
						<input type="text" name="username" placeholder="Masukkan username" required>
					</td>
				</tr>
				<tr>
					<td>
						<input type="password" name="password" placeholder="Masukkan password" required>
					</td>
				</tr>
				<tr>
					<td colspan="3">
						<input type="submit" name="login" value="login">
					</td>
				</tr>
			</table>
		</form>
	<?php } ?>
<?php } ?>
