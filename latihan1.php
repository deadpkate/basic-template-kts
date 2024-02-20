<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP DAN HTML</title>
</head>
<body>
	<p>ini adalah bahagian html :3</p>
	<?php echo "ini ialah bahagian php :D"; ?>
	<br><br><br>
</body>
</html>

<?php
	$nama = "poppy";
	$umur = 21;

	echo "nama saya ialah ";
	echo $nama;
	echo " saya berumur ";
	echo $umur;

	//pemalar

	$panjang = 10;
	$lebar = 5;

	define('Pi', 3.142);//pemalar 1

	//kira luas segitiga
	echo "<br>";
	echo " luas segitiga : ";
	echo Pi*$panjang*$lebar;
	echo "<br>";

	//integer
	$num1 = 12;
	$num2 = 6;
	//float
	$num3 = 5.3;
	//operasi 2 nombor

	echo "hasil operasi $num1 + $num2 =";
	echo $num1 + $num2;
	echo "<br>";
	echo "hasil operasi $num1 - $num2 =";
	echo $num1 - $num2;
	echo "<br>";
	echo "hasil operasi $num1 * $num2 =";
	echo $num1 * $num2;
	echo "<br>";
	echo "hasil operasi $num1 / $num2 =";
	echo $num1 / $num2;
	echo "<br>";
	0