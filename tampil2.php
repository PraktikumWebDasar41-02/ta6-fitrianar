<!DOCTYPE html>
<html>
<head>
	<title>editdata</title>
</head>
<body>
	<center>
	<h1>D A T A</h1>
	<table>
		<form method="POST">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" value="<?php $COOKIE[nama] ?>"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim" value="<?php $COOKIE[nim] ?>"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td>
					<input type="radio" name="kelas" value="01">01
					<input type="radio" name="kelas" value="02">02
					<input type="radio" name="kelas" value="03">03
					<input type="radio" name="kelas" value="04">04
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<input type="radio" name="jk" value="L">Laki-laki
					<input type="radio" name="jk" value="P">Perempuan
				</td>
			</tr>
			<tr>
				<td>Hobi</td>
				<td>:</td>
				<td>
					<input type="checkbox" name="hobi" value="Membaca">Membaca
					<input type="checkbox" name="hobi" value="Menulis">Menulis
					<input type="checkbox" name="hobi" value="Menggambar">Menggambar
					<input type="checkbox" name="hobi" value="Melukis">Melukis
				</td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td>
					<select name="fak">
  						<option value="FIT">FIT</option>FIT
  						<option value="FIK">FIK</option>FIK
  						<option value="FKB">FKB</option>FKB
  						<option value="FEB">FEB</option>FEB
  						<option value="FRI">FRI</option>FRI
					</select>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea name ="alamat" value="<?php $COOKIE[alamat] ?>"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="submit" value="SUMBIT"></td>
			</tr>
		</form>
	</table>
</center>
</body>
</html>

<?php
	if (isset($_POST['submit'])) {
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$kelas = $_POST['kelas'];
		$jk = $_POST['jk'];
		$hobi = $_POST['hobi'];
		$fak = $_POST['fak'];
		$alamat = $_POST['alamat'];

		$cek = true;

		if (empty($nama)) {
			echo "<center>Nama tidak boleh kosong<br></center>";
			$cek = false;
		}else{
			if (strlen($nama)>35) {
				echo "<center>Maksimal panjang nama 20 huruf<br></center>";
				$cek = false;
			}	
		}

		if (empty($nim)) {
			echo "NIM tidak boleh kosong<br>";
			$cek = false;
		}else{
			if (strlen($nim)!=10 && !is_numeric($nim)) {
				echo "<center>NIM Harus 10 digit dan angka<br></center>";
				$cek = false;
			}
		}
		

		if ($cek) {
			$koneksi = mysqli_connect('localhost','root','','ta6fitri');

			$sql = "INSERT INTO identitas values ('$nama','$nim','$kelas','$jk','$hobi','$fak','$alamat')";
			mysqli_query($koneksi, $sql);
			session_start();
			$_SESSION['pk'] = $nim;
			header("Location:login.php");
		}
		
	}
?>