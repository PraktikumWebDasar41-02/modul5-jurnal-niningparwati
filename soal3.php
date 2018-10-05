<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
	echo "Nama : ";
	echo $nama;
	echo "<br>";

	echo "Komentar : ";
	echo $komentar;
	echo "<br>";
	echo "str_word_count($komentar)";
	 ?><br>
</body>
</html>