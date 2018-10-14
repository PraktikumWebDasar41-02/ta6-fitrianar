<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
<center>
	<h1>L O G I N</h1>
	<table>
		<form method="POST">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="submit" value="SUBMIT"></td>
			</tr>
		</form>
	</table>
</body>
</html>
<?php
session_start();
	if (isset($_POST['submit'])) {
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];

		$cek = true;

		if ($_POST["nama"] == $login["nama"] AND 
			$_POST["nim"] == $login["nim"]);
		{
			header("Location:tampil.php");
		}
	}
?>