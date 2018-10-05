<?php 	session_start();
	echo "Nama : ";
	echo $nama; ?>
<!DOCTYPE html>
<html>
<head>
	<title> Halaman 2</title>
</head>
<body>
<br>
	komentar <input type="textarea" name="komentar" value=""><br>
	<input type="submit" name="kirim" value="KIRIM">

</body>
</html>

<?php 

$conn = mysqli_connect('localhost','root','','d_modul5');

if (isset($_POST['kirim'])) {
	$komentar = $_POST['komentar'];

	$_SESSION['komentar'] = $komentar;
	if (str_word_count($komentar)<5) {
		echo "Minimal inputan kmentar 10 digit <br>";
	}
	else{
		echo "berhasil <br>";
	}
	
	$masuk2 = mysqli_query($conn, "INSERT INTO t_jurnal1('','','','komentar') VALUES ('','','','$komentar')");
	if ($masuk2) 
		echo "input berhasil";
	else
		echo "input gagal";
	}
 ?>