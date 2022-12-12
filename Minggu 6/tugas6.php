<!DOCTYPE html>
<html>
<head>
	<title>Tugas 6 - Praktikum Pemrograman WEB</title>
</head>
<body>

	<form action="#" method="POST" align="center">
		<label for="num">Angka (Bulat & Positif) : </label>
		<input id="num" type="number" name="numR">
		
		<button type="submit">Konversi</button>
		
		<h2>Romawi : <?php error_reporting(0); echo convertToRomawi($_POST["numR"]); ?></h2>
	</form>

<?php 
function convertToRomawi ($number) {
	$number = intval($number);
	$result = '';

	$array = array('M' => 1000,
	'CM' => 900,
	'D' => 500,
	'CD' => 400,
	'C' => 100,
	'XC' => 90,
	'L' => 50,
	'XL' => 40,
	'X' => 10,
	'IX' => 9,
	'V' => 5,
	'IV' => 4,
	'I' => 1);

	foreach($array as $roman => $value){
		$matches = intval($number/$value);

		$result .= str_repeat($roman,$matches);

		$number = $number % $value;
	}

	return $result;
}	
?>

</body>
</html>