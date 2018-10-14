<?php
session_start();
	$koneksi = mysqli_connect('localhost','root','','ta6fitri');

	$pk = $_SESSION['pk'];

	$sql = "SELECT * FROM identitas WHERE NIM = '$pk' ";
	$query = mysqli_query($koneksi, $sql);
	$hasil = mysqli_fetch_array($query);

	// echo "Nama : ".$hasil['Nama']."<br>";
	// echo "NIM : ".$hasil['NIM']."<br>";
	// echo "Kelas : ".$hasil['Kelas']."<br>";
	// echo "Jenis Kelamin : ".$hasil['Jenis_Kelamin']."<br>";
	// echo "Hobi : ".$hasil['Hobi']."<br>";
	// echo "Fakultas : ".$hasil['Fakultas']."<br>";
	// echo "Alamat : ".$hasil['Alamat']."<br>";

?>
<!DOCTYPE html>
<html>
<head>
	<title>profile</title>
</head>
<body>
	<center>
		<h1>P R O F I L E</h1>
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><?php echo $hasil['Nama']; ?></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><?php echo $hasil['NIM']; ?></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td>:</td>
			<td><?php echo $hasil['Kelas']; ?></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><?php echo $hasil['Jenis_Kelamin']; ?></td>
		</tr>
		<tr>
			<td>Hobi</td>
			<td>:</td>
			<td><?php echo $hasil['Hobi']; ?></td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><?php echo $hasil['Fakultas']; ?></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><?php echo $hasil['Alamat']; ?></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="button" name="edit" value="EDIT"></td>
			<td><input type="submit" name="edit" value="edit"></td>
		</tr>
	</table>
	</center>
</body>
</html>

<?php

if (isset($_POST['edit'])) {
		$nama = $hasil['Nama'];
		$nim = $hasil['NIM'];
		$kelas = $hasil['Kelas'];
		$jk = $hasil['Jenis_Kelamin'];
		$hobi = $hasil['Hobi'];
		$fak = $hasil['Fakultas'];
		$alamat = $hasil['Alamat'];

		setcookie("nama", $nama);
		setcookie("nim", $nim);
		setcookie("kelas", $kelas);
		setcookie("jk", $jk);
		setcookie("hobi", $hobi);
		setcookie("fak", $fak);
		setcookie("alamat", $alamat);

		header("Location:tampil2.php");
	}

session_destroy();
?>