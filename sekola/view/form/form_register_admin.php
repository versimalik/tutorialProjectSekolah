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