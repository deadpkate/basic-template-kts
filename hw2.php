<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h2>OPERASI TAMBAH MENGGUNAKAN FORM</h2>
	<br><br>
	<form method="get">
        <label>tinggi : <input type="number" name="No1"></label>
        <label>lebar : <input type="number" name="No2"></label>
        <button type="submit">Kira</button>
    </form>

    <?php
    $result = ($_GET["No1"] ?? 0) * ($_GET["No2"] ?? 0);
    echo "<h3>Result: $result</h3>";
    ?>


</body>
</html>