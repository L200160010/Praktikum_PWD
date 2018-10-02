<html>
<head>
	<title>Program Penjumlahan</title>
</head>
<body>
	<form method='post' action='tugas.php'>
		<p>Nilai A adalah : <input type='text' name='nilaiA' size='3'></p>
		<p>Nilai B adalah : <input type='text' name='nilaiB' size='3'></p>
		<p><input type='submit' value='jumlahkan' name='submit'></p>
	</form>

	<?php
	error_reporting(E_ALL ^ E_NOTICE);
	$nilaiA = $_POST['nilaiA'];
	$nilaiB = $_POST['nilaiB'];
	$jumlahkan = $_POST['submit'];
	$hasil = $nilaiA + $nilaiB;
	if($jumlahkan){
		echo "Nilai A adalah $nilaiA</br>";
		echo "Nilai B adalah $nilaiB</br>";
		echo "Jadi nilai A ditambah nilai B adalah $hasil";
	}
	?>
</body>
</html>