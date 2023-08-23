<html>
<head>
    <title>Contoh 07</title>
</head>
<body>
<?php

//konstanta untuk nilai judul 
define("Judul", "Hitung Luas Lingkaran");

//konstanta untuk nilai phi 
define("PHI", 3.14);
echo Judul;
$r=10;
echo "<br>Jari-jari : $r<br>\n";
$luas=PHI * $r * $r;
echo "Luas Lingkaran = $luas";

?>
</body>
</html>