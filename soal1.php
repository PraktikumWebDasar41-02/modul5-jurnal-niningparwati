<!DOCTYPE html>
<html>
<head>
	<title>Penddaftaran Mahasiswa</title>
</head>
<body>
	<form action="soal2.php" method="POST">
		FORM PENDAFTARAN MAHASISWA <br>
		NIM <input type="text" name="nim" value=""><br>
		Nama <input type="text" name="nama" value=""><br>
		Email <input type="text" name="email" value=""><br>
		<input type="submit" name="submit" value="KIRIM">
	</form>
</body>
</html>

<?php 
session_start();
$conn = mysqli_connect('localhost','root','','d_modul5');

if (isset($_POST['submit'])) {
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];

	$_SESSION['nama'] = $nama;
	 
	if (strlen($nim)<10) {
		echo "Minimal inputan 10 digit <br>";
	}
	else{
		echo "nim benar <br>";
	}

if (strpos($email, '@') || strpos($email, '.com')) {
		echo "email benar <br>";
	}
	else{
		echo "gunakan format penulisan email <br>";
	}
	
	$masuk1 = mysqli_query($conn, "INSERT INTO t_jurnal1() VALUES ('$nim','$nama','$email','')");
	if ($masuk1) {
		echo "input berhasil";
		}
	else{
		echo "input gagal";
	}

}
 ?>